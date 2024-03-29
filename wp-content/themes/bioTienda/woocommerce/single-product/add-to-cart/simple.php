<?php

/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

global $product;

if (!$product->is_purchasable()) {
	return;
}

echo wc_get_stock_html($product); // WPCS: XSS ok.

if ($product->is_in_stock()) : ?>

	<?php do_action('woocommerce_before_add_to_cart_form'); ?>

	<form class="flex flex-col items-center lg:flex-row cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action('woocommerce_before_add_to_cart_button'); ?>

		<?php
		do_action('woocommerce_before_add_to_cart_quantity');
		?>
		<div class="flex flex-row h-full mb-4 border-2 border-gray-200 lg:mb-0">
			<button type="button" data-action="decrement" class="w-20 h-full py-2 text-gray-300 border-r-2 border-gray-200 cursor-pointer hover:text-gray-700 hover:bg-gray-100">
				<span class="m-auto text-4xl font-normal">−</span>
			</button>
			<?php
			woocommerce_quantity_input(
				array(
					'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
					'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
					'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
					'classes' => 'text-center my-auto text-xl'
				)
			);
			?>
			<button type="button" data-action="increment" class="w-20 h-full py-2 text-gray-300 border-l-2 border-gray-200 cursor-pointer hover:text-gray-700 hover:bg-gray-100">
				<span class="m-auto text-4xl font-normal">+</span>
			</button>
		</div>

		<?php
		do_action('woocommerce_after_add_to_cart_quantity');
		?>

		<button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="px-12 py-4 text-lg font-bold text-white uppercase lg:ml-5 single_add_to_cart_button button bg-green alt">Comprar</button>

		<?php do_action('woocommerce_after_add_to_cart_button'); ?>
	</form>

	<?php do_action('woocommerce_after_add_to_cart_form'); ?>

<?php endif; ?>