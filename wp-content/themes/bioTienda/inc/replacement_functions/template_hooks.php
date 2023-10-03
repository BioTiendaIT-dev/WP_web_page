<?php

remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
add_action('woocommerce_before_shop_loop_item', 'biotienda_template_loop_product_link_open', 10);


remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
add_action('bt_product_tabs', 'woocommerce_output_product_data_tabs', 10);

?>