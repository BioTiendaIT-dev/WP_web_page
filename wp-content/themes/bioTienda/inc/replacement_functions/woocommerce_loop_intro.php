<?php
if (!function_exists('biotienda_template_loop_product_link_open')) {
    /**
     * Insert the opening anchor tag for products in the loop.
     */
    function biotienda_template_loop_product_link_open()
    {
        global $product;

        $link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);

        echo '<a href="' . esc_url($link) . '" class="mx-auto woocommerce-LoopProduct-link woocommerce-loop-product__link">';
    }
}

/**
 * Get the product thumbnail for the loop.
 */
function woocommerce_template_loop_product_thumbnail()
{
?>
    <figure class="mb-2 rounded shadow-md image_card_container">
        <?= woocommerce_get_product_thumbnail() ?>
    </figure>
<?php
}
?>