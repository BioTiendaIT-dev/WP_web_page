<?php

/**
 * Single variation cart button
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

global $product;
?>
<div class="flex flex-col items-center woocommerce-variation-add-to-cart variations_button lg:flex-row">
	<?php do_action('woocommerce_before_add_to_cart_button'); ?>

	<?php
	do_action('woocommerce_before_add_to_cart_quantity');
	?>
	<div class="flex flex-row h-full mb-4 border-2 border-gray-200 rounded lg:mb-0">
		<button type="button" data-action="decrement" class="w-20 h-full py-2 text-gray-300 border-r-2 border-gray-200 cursor-pointer hover:text-gray-700 hover:bg-gray-100">
			<span class="m-auto text-4xl font-normal">−</span>
		</button>
		<?php
		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
				'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
				'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
				'classes' => 'text-center m-auto text-xl w-full'
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

	<button type="submit" class="px-12 py-4 text-lg font-bold text-white uppercase rounded lg:ml-4 single_add_to_cart_button button bg-green alt"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>

	<?php do_action('woocommerce_after_add_to_cart_button'); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint($product->get_id()); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint($product->get_id()); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div>