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

// Verificar si WordPress está ejecutándose directamente
if (!defined('ABSPATH')) {
    exit;
}

// Función de activación del plugin
function my_plugin_activate()
{
    // Puedes realizar tareas de inicialización aquí

    // Por ejemplo, crear una opción en la base de datos
    // add_option('my_plugin_option', 'valor predeterminado');
}

// Registra la función de activación
register_activation_hook(__FILE__, 'my_plugin_activate');