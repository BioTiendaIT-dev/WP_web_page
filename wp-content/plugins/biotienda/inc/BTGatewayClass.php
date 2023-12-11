<?php
function init_BTGatewayClass_class()
{
	class BTGatewayClass extends WC_Payment_Gateway
	{
		/**
		 * Constructor de la clase.
		 */
		public function __construct()
		{
			$this->id                 = 'bt_metodo_pago';
			$this->icon               = apply_filters('woocommerce_cheque_icon', '');
			$this->has_fields         = false;
			$this->method_title       = __('Bio tienda Método de Pago', 'mi-plugin');
			$this->method_description = __('Descripción de Mi Método de Pago', 'mi-plugin');

			// Define las configuraciones básicas
			$this->init_form_fields();
			$this->init_settings();

			// Define propiedades
			$this->title       = $this->get_option('title');
			$this->description = $this->get_option('description');

			// Acciones y filtros
			add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));
			add_action('woocommerce_receipt_' . $this->id, array($this, 'receipt_page'));
		}

		/**
		 * Inicializa los campos de configuración del método de pago.
		 */
		public function init_form_fields()
		{
			$this->form_fields = array(
				'enabled' => array(
					'title'   => __('Habilitar/Deshabilitar', 'mi-plugin'),
					'type'    => 'checkbox',
					'label'   => __('Habilitar Mi Método de Pago', 'mi-plugin'),
					'default' => 'yes',
				),
				'title' => array(
					'title'       => __('Título', 'mi-plugin'),
					'type'        => 'text',
					'description' => __('Este texto aparecerá en los métodos de pago durante el proceso de pago.', 'mi-plugin'),
					'default'     => __('Biotienda Live Service', 'mi-plugin'),
					'desc_tip'    => true,
				),
				'description' => array(
					'title'       => __('Descripción', 'mi-plugin'),
					'type'        => 'textarea',
					'description' => __('Descripción del método de pago que se mostrará al usuario durante el proceso de pago.', 'mi-plugin'),
					'default'     => __('Iniciaremos el proceso de compra con uno de nuestras vendedoras :D', 'mi-plugin'),
				),
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
			return '<p>¡Gracias por elegir Mi Método de Pago!</p>';
		}

		function process_payment($order_id)
		{
			global $woocommerce;
			$order = new WC_Order($order_id);

			// Mark as on-hold (we're awaiting the cheque)
			$order->update_status('on-hold', __('Iniciando el chat de compra', 'woocommerce'));

			// Remove cart
			$woocommerce->cart->empty_cart();

			// Return thankyou redirect
			return array(
				'result' => 'success',
				'redirect' => $this->get_return_url($order)
			);
		}
	}
}
?>
