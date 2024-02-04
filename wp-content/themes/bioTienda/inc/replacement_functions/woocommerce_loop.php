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

if (!function_exists('agregar_meta_query_a_productos_con_imagen')) {
    function agregar_meta_query_a_productos_con_imagen($query)
    {   
        if(is_admin()){
            return;
        }
        // Verifica que estemos en el query principal y en la página principal de WooCommerce
        if ($query->is_main_query() && (is_shop() || is_tax('product_cat'))) {
            // Agrega la meta query
            $query->set('meta_query', array(
                array(
                    'key'     => '_thumbnail_id',
                    'compare' => 'EXISTS', // Solo productos con imagen adjunta
                ),
            ));
        }        
        return $query;
    }
}

// Agrega la función al gancho pre_get_posts
add_action('pre_get_posts', 'agregar_meta_query_a_productos_con_imagen');
/**
 * Get the product thumbnail for the loop.
 */
function woocommerce_template_loop_product_thumbnail(): void
{
?>
    <figure class="mb-2 rounded shadow-md image_card_container">
        <?= woocommerce_get_product_thumbnail() ?>
    </figure>
<?php
}
