<?php

/**
 * Plugin Name:       Bio Tienda
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            sk-Luan and SkyRocket labs
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       biotienda
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
include __DIR__ . '/inc/tawkConfigs.php';
include __DIR__ . '/inc/BTGatewayClass.php';

function create_block_biotienda_block_init()
{
	register_block_type(__DIR__ . '/build');
}
add_action('init', 'create_block_biotienda_block_init');

// mi-plugin.php

// Activación del Plugin
function activar_mi_plugin()
{
	// Configuraciones iniciales
}
register_activation_hook(__FILE__, 'activar_mi_plugin');

// Desactivación del Plugin
function desactivar_mi_plugin()
{
	// Limpiar configuraciones si es necesario
}
register_deactivation_hook(__FILE__, 'desactivar_mi_plugin');


// El init esta en el documento de la clase para que nos e hiciera muy terno
add_action('plugins_loaded', 'init_BTGatewayClass_class');

function agregar_metodo_pago($gateways)
{
	$gateways[] = 'BTGatewayClass';
	return $gateways;
}
add_filter('woocommerce_payment_gateways', 'agregar_metodo_pago');
