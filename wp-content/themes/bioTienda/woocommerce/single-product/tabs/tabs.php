<?php

/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if (!defined('ABSPATH')) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters('woocommerce_product_tabs', array());

if (!empty($product_tabs)) : ?>

	<div class="woocommerce-tabs col-span-full wc-tabs-wrapper">
		<ul class="flex flex-row mt-10 overflow-auto tabs wc-tabs" id="product-tab-list" role="tablist">
			<?php
			foreach ($product_tabs as $key => $product_tab) :
				if ($key !== 'description') :
			?>
					<li class="<?php echo esc_attr($key); ?>_tab px-7 first:ml-0 text-center items-center flex py-3 mx-2 border-[1px] uppercase border-gray-400" id="tab-title-<?php echo esc_attr($key); ?>" role="tab" aria-controls="tab-<?php echo esc_attr($key); ?>">
						<a href="#tab-<?php echo esc_attr($key); ?>" class="text-base font-normal text-gray-400">
							<?php echo wp_kses_post(apply_filters('woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key)); ?>
						</a>
					</li>
			<?php
				endif;
			endforeach; ?>
		</ul>
		<?php foreach ($product_tabs as $key => $product_tab) :
			if ($key !== 'description') : ?>
				<div class="mt-5 woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr($key); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr($key); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr($key); ?>">
					<?php
					if (isset($product_tab['callback'])) {
						call_user_func($product_tab['callback'], $key, $product_tab);
					}
					?>
				</div>
		<?php
			endif;
		endforeach; ?>

		<?php do_action('woocommerce_product_after_tabs'); ?>
	</div>

<?php endif; ?>