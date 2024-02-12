<?php
/*
Plugin Name: Bold Payment integration for woocommerce
Description: Este es un plugin custom para poder integrar de manera facil bold a las tiendas con woocomerce.
Version: alpha1.0
Author: skLuan
Requires at Least: 6.0
Requires PHP: 8.1
Text Domain: bold_domain 

*/
// *******************************
include __DIR__ . '/inc/BoldGatewayClass.php';

// Verificar si WordPress está ejecutándose directamente
if (!defined('ABSPATH')) {
    exit;
}

// ------------------------------ Función de activación del plugin
function bold_integration_activate()
{
    // Puedes realizar tareas de inicialización aquí

    // Por ejemplo, crear una opción en la base de datos
    // add_option('my_plugin_option', 'valor predeterminado');
}
// Registra la función de activación
register_activation_hook(__FILE__, 'bold_integration_activate');

// ------------------------------ Desactivación del Plugin
function bold_integration_activate_desactivar()
{
    // Limpiar configuraciones si es necesario
}
register_deactivation_hook(__FILE__, 'bold_integration_activate_desactivar');


// ------------------------------------------------------------------
// ------------------------------------------------------------------
// El init esta en el documento de la clase para que nos e hiciera muy terno
add_action('plugins_loaded', 'init_BoldGatewayClass_class');

function add_bold_payment_method($gateways)
{
    $gateways[] = 'BoldGatewayClass';
    return $gateways;
}
add_filter('woocommerce_payment_gateways', 'add_bold_payment_method');
