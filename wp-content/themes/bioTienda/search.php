<?php
defined('ABSPATH') || exit;

get_header('shop');
echo get_template_part('components/_banner', 'section');

$args = ['title' => 'Productos para tu bienestar'];
// ----------------------------- Title
echo get_template_part(COMPONENTS . '_title', 'large', $args) ?>
<?php
/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action('woocommerce_before_main_content');

?>
<?php
if (woocommerce_product_loop()) {
?>

	<nav class="flex flex-col items-center mb-5 bt-options lg:items-start">
		<?php
		/**
		 * Hook: woocommerce_before_shop_loop.
		 *
		 * @hooked woocommerce_output_all_notices - 10
		 * @hooked woocommerce_result_count - 20
		 * @hooked woocommerce_catalog_ordering - 30
		 */
		do_action('woocommerce_before_shop_loop');


		?>
	</nav>
	<div class="grid grid-cols-1 gap-5 lg:grid-cols-5">
	<?php
	woocommerce_product_loop_start();
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action('woocommerce_shop_loop');
			wc_get_template_part('woocommerce/content', 'product');
		}
	}

	woocommerce_product_loop_end();
	/**
	 * Hook: woocommerce_sidebar.
	 *
	 * @hooked woocommerce_get_sidebar - 10
	 */
	do_action('woocommerce_sidebar');
	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action('woocommerce_after_shop_loop');
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action('woocommerce_no_products_found');
}

	?>
	</div>
	<?php
	/**
	 * Hook: woocommerce_after_main_content.
	 *
	 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
	 */
	do_action('woocommerce_after_main_content'); ?>

	<?php

	get_footer('shop');
	?>