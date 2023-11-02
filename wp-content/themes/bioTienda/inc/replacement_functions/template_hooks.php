<?php

// ------------------------- Abrir enlace en card 
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
add_action('woocommerce_before_shop_loop_item', 'biotienda_template_loop_product_link_open', 10);


// ------------------------- Areglo de tabs 
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
add_action('bt_product_tabs', 'woocommerce_output_product_data_tabs', 10);

// ------------------------- Titulo de card 
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'bioTienda_template_loop_product_title', 10);

// ------------------------- Boton de compra del carrito 
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 4);

// ------------------------- sidebar orden por defecto
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
// add_action('woocommerce_sidebar', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
add_action('woocommerce_before_shop_loop', 'bt_woocommerce_output_all_notices', 10);


?>