<?php
/*
Plugin Name: Bold pagos en linea
Plugin URI: https://ayuda.bold.co/es/documentacion-boton-de-pagos-bold-Hk3NhycUp
Description: Plugin de integracion entre Wordpress-Woocommerce con Bold Colombia
Version: 1.0.0
Author: Bold
Author URI: http://www.bold.co/
*/

add_action('plugins_loaded', 'woocommerce_bold_gateway', 0);
function woocommerce_bold_gateway(): void
{
    if (!class_exists('WC_Payment_Gateway')) {
        return;
    }

    class WC_Bold_Co extends WC_Payment_Gateway
    {

        private string $url_script;
        private string $url_status;
        private mixed $prod_api_key;
        private mixed $prod_secret_key;
        private mixed $test_api_key;
        private mixed $test_secret_key;
        private mixed $test;
        private mixed $black;
        private mixed $prefix;
        private int $interval_update = 60 * 5; // interval in seconds

        public function __construct()
        {
            $this->url_script = 'https://checkout.bold.co/library/boldPaymentButton.js';
            $this->url_status = 'https://payments.api.bold.co/v2/payment-voucher/';

            $this->id = 'bold_co';
            $this->has_fields = false;
            $this->method_title = __('Bold', 'bold-co');
            $this->method_description = __('Integración de la pasarela de pagos Bold con WooCommerce.', 'bold-co');

            $this->init_form_fields();
            $this->init_settings();

            $this->title = __('Bold pagos en linea', 'bold-co');
            $this->prod_api_key = $this->settings['prod_api_key'];
            $this->prod_secret_key = $this->settings['prod_secret_key'];
            $this->test_api_key = $this->settings['test_api_key'];
            $this->test_secret_key = $this->settings['test_secret_key'];
            $this->test = $this->settings['test'];
            $this->black = $this->settings['black'];
            $this->prefix = $this->settings['prefix'];
            $this->upload_icon();

            if (version_compare(get_option('woocommerce_version', null), '2.0.0', '>=')) {
                add_action('woocommerce_update_options_payment_gateways_' . $this->id, array(
                    &$this,
                    'process_admin_options'
                ));
            } else {
                add_action('woocommerce_update_options_payment_gateways', array(&$this, 'process_admin_options'));
            }

            add_action('update_bold_order_status_hook', array($this, 'update_bold_order_status'));
            add_action('woocommerce_receipt_bold_co', array(&$this, 'receipt_page'));
            add_action('woocommerce_thankyou_order_received_text', array($this, 'received_text'), 10, 2);
            add_filter('plugin_action_links_' . plugin_basename(__FILE__), array(
                $this,
                'plugin_bold_action_links'
            ));
        }

        function upload_icon(): void
        {
            if ($this->black === "yes") {
                $this->icon = apply_filters('woocomerce_bold_co_icon', plugins_url('/assets/img/bold_logo_black_icon.svg', __FILE__));
            } else {
                $this->icon = apply_filters('woocomerce_bold_co_icon', plugins_url('/assets/img/bold_logo_light_icon.svg', __FILE__));
            }
        }

        function plugin_bold_action_links($links): array
        {
            $plugin_links = array(
                '<a href="' . admin_url('admin.php?page=wc-settings&tab=checkout&section=bold_co') . '">' . __('Settings', 'bold-co') . '</a>',
                '<a href="https://bold.co/" target="_blank">' . esc_html__('Docs', 'bold-co') . '</a>',
                '<a href="mailto:soporte.online@bold.co">' . esc_html__('Support', 'bold-co') . '</a>',
            );

            return array_merge($plugin_links, $links);
        }

        function get_supported_currency(): array
        {
            return ['COP'];
        }

        function bold_not_available($text): string
        {
            return '<div class="bold_co_woocommerce_not_available">En este momento no puedes pagar con Bold. Si quieres usar este método de pago, por favor comunícate con el comercio.</div>';
        }

        function get_bold_status_payment()
        {
            wp_parse_str($_SERVER['QUERY_STRING'], $qs);

            $id_reference = 'bold-order-id';
            if (!array_key_exists($id_reference, $qs)) {
                return null;
            }

            $order_reference = $qs[$id_reference];
            if ( str_starts_with($order_reference, "test-") ) {
                echo "<b>Esta transaccion es simulada.</b> ";
                //La transaccion queda en estado fallida por ser de pruebas
                return array("payment_status"=> "FAILED");
            }

            $public_key = $this->test === 'yes' ? $this->test_api_key : $this->prod_api_key;
            $url_ltp = $this->url_status . $order_reference;

            $response = wp_remote_get($url_ltp, array(
                'headers' => array(
                    "Content-Type" => "application/json",
                    'Authorization' => 'x-api-key ' . $public_key
                )
            ));

            $body = wp_remote_retrieve_body($response);

            $body_decode = json_decode($body, true);

            if (!$body_decode or array_key_exists('message', $body_decode)) {
                return null;
            }

            return $body_decode;
        }

        function update_status_payment($order, $status_response): void
        {
            $status_response = strtoupper($status_response);

            switch ($status_response) {
                //Transactions in process
                case 'PENDING':
                case 'PROCESSING':
                    $this->bold_schedule_update_status();

                    return;
                //Final states
                case 'APPROVED':
                    $order->update_status('processing');

                    return;
                case 'REJECTED' or 'FAILED':
                    $order->update_status('failed');

                    return;
            }
        }

        public function update_bold_order_status(): void
        {

            // Get all orders pending
            $args = array(
                'status' => 'pending',
                'limit' => -1,
                'payment_method' => 'bold_co',
            );
            $orders_pending = wc_get_orders($args);

            if (empty($orders_pending)) {
                return;
            }

            foreach ($orders_pending as $order) {
                $get_response = $this->get_bold_status_payment();


                if (!$get_response or array_key_exists('errors', $get_response)) {
                    continue;
                }

                $this->update_status_payment($order, $get_response['payment_status']);
            }
        }

        function bold_schedule_update_status(): void
        {
            if (!wp_next_scheduled('update_bold_order_status_hook')) {
                wp_schedule_single_event(time() + $this->interval_update, 'update_bold_order_status_hook');
            }
        }

        function generate_bold_co_widget($order_id): void
        {
            $order = wc_get_order($order_id);
            $data_bold_button = $this->black === 'yes' ? 'black' : 'light';
            $order_reference = $this->test === 'yes' ? 'test-' . $this->prefix . $order_id : $this->prefix . $order_id;
            $amount_in_cents = (int)$order->get_total();
            $auth_token = $this->test === 'yes' ? $this->test_api_key : $this->prod_api_key;
            $integrity_key = $this->test === 'yes' ? $this->test_secret_key : $this->prod_secret_key;
            $currency = get_woocommerce_currency();
            $signature = hash('sha256', "{$order_reference}{$amount_in_cents}{$currency}{$integrity_key}");

            echo "
			<script
				src={$this->url_script}
				data-bold-button=$data_bold_button
				data-order-id=$order_reference
				data-amount=$amount_in_cents
				data-currency=$currency
				data-api-key=$auth_token
				data-integrity-signature=$signature
				data-redirection-url={$this->get_return_url( $order )}
			>
			</script>
	        ";
        }

        function received_text($text, $order): ?string
        {
            if (!$order) {
                return '<div class="woocommerce-error">La orden no fue recibida. Por favor, póngase en contacto con el administrador.</div>';
            }

            $status = $order->get_status();

            if ($status !== 'pending') {
                return '<div class="woocommerce-error">Su orden tiene el estado "' . $status . '". Por favor, contáctenos si necesita ayuda.</div>';
            }

            $get_response = $this->get_bold_status_payment();

            if (!$get_response) {
                return '<div class="woocommerce-error">Lamentamos los inconvenientes. Recargue la página nuevamente.</div>';
            }

            if (array_key_exists('errors', $get_response)) {
                $message = array_key_exists('message', $get_response['errors'][0]) ? $get_response['errors'][0]['message'] : 'Lamentamos los inconvenientes, en este momento tenemos un problema interno con <b>Bold</b>. Por favor, contáctenos si necesita ayuda.';
                return '<div class="woocommerce-error">' . $message . '</div>';
            }

            $this->update_status_payment($order, $get_response['payment_status']);

            return $text;
        }

        function receipt_page($order_id): void
        {
            echo '<p class="bold_co_purchase_summary">' . __('Para completar tu pago de forma segura, te llevaremos a Bold.', 'bold-co') . '</p>';
            $this->generate_bold_co_widget($order_id);

            $this->bold_schedule_update_status();
        }

        public function is_available(): bool
        {
            if ($this->test === 'yes') {
                $bold_available = !empty($this->test_api_key) &&
                    !empty($this->test_secret_key) &&
                    in_array(get_woocommerce_currency(), $this->get_supported_currency());
            } else {
                $bold_available = !empty($this->prod_api_key) &&
                    !empty($this->prod_secret_key) &&
                    in_array(get_woocommerce_currency(), $this->get_supported_currency());
            }

            if ($bold_available && parent::is_available()) {
                return true;
            }

            add_action('woocommerce_no_available_payment_methods_message', array($this, 'bold_not_available'));

            return false;
        }

        public function init_form_fields(): void
        {
            $this->form_fields = array(
                'enabled' => array(
                    'title' => __('Habilitar plugin Bold', 'bold-co'),
                    'type' => 'checkbox',
                    'label' => __('Habilítalo para conectar la pasarela de pagos Bold a tu eCommerce.', 'bold-co'),
                    'default' => 'no'
                ),
                'prod_api_key' => array(
                    'title' => __('Llave de identidad', 'bold-co'),
                    'type' => 'password',
                    'class' => 'bold_co_input_access_key',
                    'description' => __('Usa esta llave para conectar tu eCommerce con los servicios de pagos en línea de Bold.', 'bold-co')
                ),
                'prod_secret_key' => array(
                    'title' => __('Llave secreta', 'bold-co'),
                    'type' => 'password',
                    'class' => 'bold_co_input_access_key',
                    'description' => __('Con esta llave, Bold podrá validar la seguridad de los pagos hechos a través de su pasarela de pagos, verificando su autenticidad.', 'bold-co')
                ),
                'test_api_key' => array(
                    'title' => __('Llave de identidad de prueba', 'bold-co'),
                    'type' => 'password',
                    'class' => 'bold_co_input_access_key',
                    'description' => __('Usa esta llave para probar la conexión de tu tienda web con la pasarela de pagos de Bold.', 'bold-co')
                ),
                'test_secret_key' => array(
                    'title' => __('Llave secreta de prueba', 'bold-co'),
                    'type' => 'password',
                    'class' => 'bold_co_input_access_key',
                    'description' => __('Usa esta llave para hacer pruebas de la seguridad y autenticidad de los pagos hechos a través de la pasarela de Bold.', 'bold-co')
                ),
                'test' => array(
                    'title' => __('Modo de prueba', 'bold-co'),
                    'type' => 'checkbox',
                    'label' => __('Activa este modo para hacer pagos de prueba.', 'bold-co'),
                    'default' => 'no'
                ),
                'black' => array(
                    'title' => __('Color del botón', 'bold-co'),
                    'type' => 'checkbox',
                    'label' => __('Al seleccionar esta opción se mostrará el botón a color de Bold en tu página web. De lo contrario, se mostrará un botón en tonos de gris. En esta opción podrás escoger el color del botón dependiendo del fondo de tu página web.', 'bold-co'),
                    'default' => 'yes'
                ),
                'prefix' => array(
                    'title' => __('Prefijo(opcional)', 'bold-co'),
                    'type' => 'text',
                    'description' => __('Agregar el prefijo para adicionar al numero de referencia.(no se acepta el prefijo "test")', 'bold-co'),
                    'default' => get_bloginfo()
                ),
            );
        }

        public function validate_prefix_field( $key, $value ) {
            if ( str_starts_with($value, "test") ) {
                WC_Admin_Settings::add_error( 'El prefijo no puede iniciar con la palabra "test".' );
                $value = get_bloginfo();
            }

            return $value;
        }

        function process_payment($order_id): array
        {
            $order = wc_get_order($order_id);
            WC()->cart->empty_cart();

            if (version_compare(get_option('woocommerce_version', null), '2.0.19', '<=')) {
                return array(
                    'result' => 'success',
                    'redirect' => add_query_arg('order',
                        $order->get_id(), add_query_arg('key', $order->order_key, get_permalink(get_option('woocommerce_pay_page_id'))))
                );
            } else {

                return array(
                    'result' => 'success',
                    'redirect' => $order->get_checkout_payment_url(true)
                );
            }
        }
    }

    function add_bold_co($methods)
    {
        $methods[] = 'WC_Bold_Co';

        return $methods;
    }

    add_action('admin_enqueue_scripts', 'bold_co_load_scripts_js');
    add_action('wp_enqueue_scripts', 'bold_co_load_scripts_css');
    function bold_co_load_scripts_css(){
        wp_enqueue_style('woocommerce_bold_gateway_css', plugins_url('/assets/css/bold_woocommerce_styles.css',__FILE__ ), false, '1.0', 'all');
    }
    function bold_co_load_scripts_js(){
        wp_register_script('woocommerce_bold_gateway_js', plugins_url('/assets/js/admin-index.js',__FILE__ ), array('jquery'), '', true);
        wp_enqueue_script('woocommerce_bold_gateway_js');
    }

    add_filter('woocommerce_payment_gateways', 'add_bold_co');
}