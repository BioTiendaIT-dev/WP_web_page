<?php
function init_BoldGatewayClass_class()
{
	class BoldGatewayClass extends WC_Payment_Gateway
	{
		/**
		 * Constructor de la clase.
		 */
		public function __construct()
		{
			$this->id                 = 'boldco_payment';
			$this->icon               = apply_filters('woocommerce_cheque_icon', '');
			$this->has_fields         = false;
			$this->method_title       = __('Bold.co metodo de pago', 'bold_domain');
			$this->method_description = __('Bold recibe más medios de pago que cualquier otro en Colombia.', 'bold_domain');

			// Define las configuraciones básicas
			$this->init_form_fields();
			$this->init_settings();

			// Define propiedades
			$this->title       = $this->get_option('title');
			$this->description = $this->get_option('description');

			// Acciones y filtros
			add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));
			add_action('woocommerce_receipt_' . $this->id, array($this, 'receipt_page'));

			$this->init();
		}
		/**
		 * Inicializa la clase después de que ha sido creada.
		 */
		public function init()
		{	
			// Agrega el action para mostrar el botón en el lugar adecuado
			add_action('woocommerce_before_thankyou', array($this, 'render_bold_button'));
		}
		/**
		 * Inicializa los campos de configuración del método de pago.
		 */
		public function init_form_fields()
		{
			$this->form_fields = array(
				'enabled' => array(
					'title'   => __('Habilitar/Deshabilitar', 'bold_domain'),
					'type'    => 'checkbox',
					'label'   => __('Habilitar Bold.co', 'bold_domain'),
					'default' => 'yes',
				),
				'title' => array(
					'title'       => __('Título', 'bold_domain'),
					'type'        => 'text',
					'description' => __('Este texto aparecerá en los métodos de pago durante el proceso de pago.', 'bold_domain'),
					'default'     => __('Bold.co pagos mas faciles', 'bold_domain'),
					'desc_tip'    => true,
				),
				'description' => array(
					'title'       => __('Descripción', 'bold_domain'),
					'type'        => 'textarea',
					'description' => __('Descripción del método de pago que se mostrará al usuario durante el proceso de pago.', 'bold_domain'),
					'default'     => '<h3>Paga con Tarjeta de credito, PSE, Credito codensa, diners, Nequi, google pay, apple pay.</h3>
										<p>A continuacion vamos a abrir la orden</p>',
				),
			);
		}

		function boldButtonScript($order_id)
		{
			if ($order_id && is_order_received_page()) {
				echo 'order ID is ' . $order_id;
				$currency = "COP";
				$amount = 20000;
				$api_key = "api_FZSkDqh2iWmpYQg504C2fLigQerhPGXAcm5WyujxwYG";
				$integrity_signature = "t55a01c9c10f8ece1690ad6070cb9g8846fb38cefb10228ee1b31d55d5df352t";
				$redirection_url = get_home_url();
				// $redirection_url = $this->get_return_url($order_id);

				$boldScript = '<script src="https://checkout.bold.co/library/boldPaymentButton.js"';
				$boldScript .= ' data-bold-button data-order-id="' . esc_attr($order_id) . '"';
				$boldScript .= ' data-currency="' . esc_attr($currency) . '"';
				$boldScript .= ' data-amount="' . esc_attr($amount) . '"';
				$boldScript .= ' data-api-key="' . esc_attr($api_key) . '"';
				$boldScript .= ' data-integrity-signature="' . esc_attr($integrity_signature) . '"';
				$boldScript .= ' data-redirection-url="' . esc_url($redirection_url) . '"></script>';
				return $boldScript;
			}

			return 'not a script';
		}
		public function render_bold_button($order_id)
		{	
			echo 'from render_bold_buton';
			if ('boldco_payment' !== WC()->session->get('chosen_payment_method')) {
				return;
			} else {
				// Inserta aquí el código del botón Bold.co
				echo '<div id="bold-co-button-container">';
				echo $this->boldButtonScript($order_id); // Asegúrate de tener la función render_bold_button disponible
				echo '</div>';
			}
		}

		function process_payment($order_id)
		{
			global $woocommerce;
			$order = new WC_Order($order_id);

			// Mark as on-hold (we're awaiting the cheque)
			$order->update_status('on-hold', __('Esperando respuesta de Bold.co', 'woocommerce'));

			// Remove cart
			$woocommerce->cart->empty_cart();

			// Return thankyou redirect
			return array(
				'result' => 'success',
				'redirect' => $this->get_return_url($order)
			);
		}

		/**
		 * Página de recibo del método de pago.
		 */
		public function receipt_page($order_id)
		{
			echo $this->generate_form($order_id);
		}

		/**
		 * Genera el formulario de pago.
		 */
		public function generate_form($order_id)
		{
			// Aquí puedes generar el formulario de pago específico para tu método
			// Utiliza los datos del pedido según sea necesario
			return '<p>¡Gracias por elegir Bold.co!</p>';
		}
	}
}
