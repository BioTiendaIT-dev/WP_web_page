<?php

/**
 * Single Product stock.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/stock.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if (!defined('ABSPATH')) {
	exit;
}

?>
<p class="text-center lg:text-start mb-3 lg:ml-5 stock <?php echo esc_attr($class); ?>">
<span class="font-bold">
	<?= wp_kses_post($product->get_stock_quantity());?>
</span>
<?= __('unidades restantes', 'biotienda');  ?></p>