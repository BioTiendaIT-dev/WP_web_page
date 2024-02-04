<?php
$args = [
    'title' => 'Productos para tu bienestar',
    'containerClasses' => 'lg:mt-12'
];
$slug = 'biotienda';

$args = array(
    'orderby' => 'rand',
    'post_type' => 'product',
    'posts_per_page' => 8,
    'tax_query' => array(
        array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => ['alimentos'],
        ),
    ),
    'meta_query'     => array(
        array(
            'key'     => '_thumbnail_id',
            'compare' => 'EXISTS', // Solo productos con imagen adjunta
        ),
    ),
);
$bt_productos = new WP_Query($args);
?>
<section id="productos" class="m-ext">
    <!-- // ----------------------------- Title -->
    <?= get_template_part(COMPONENTS . '_title', 'large', $args) ?>
    <?= get_template_part(TEMPLATE_FRONT_SECTIONS, 'iconos') ?>

    <div class="grid grid-cols-1 gap-5 lg:grid-cols-4">
        <?php
        if ($bt_productos->have_posts()) :
            while ($bt_productos->have_posts()) :
                $bt_productos->the_post();
        ?>
                <div class="relative my-5 lg:mx-8 lg:max-w-[300px]">
                    <?php
                    /**
                     * Hook: woocommerce_before_shop_loop_item.
                     *
                     * @hooked woocommerce_template_loop_product_link_open - 10
                     */
                    do_action(
                        'woocommerce_before_shop_loop_item'
                    );

                    /**
                     * Hook: woocommerce_before_shop_loop_item_title.
                     *
                     * @hooked woocommerce_show_product_loop_sale_flash - 10
                     * @hooked woocommerce_template_loop_product_thumbnail - 10
                     */
                    do_action(
                        'woocommerce_before_shop_loop_item_title'
                    );

                    /**
                     * Hook: woocommerce_shop_loop_item_title.
                     *
                     * @hooked woocommerce_template_loop_product_title - 10
                     */
                    do_action(
                        'woocommerce_shop_loop_item_title'
                    );

                    /**
                     * Hook: woocommerce_after_shop_loop_item_title.
                     *
                     * @hooked woocommerce_template_loop_rating - 5
                     * @hooked woocommerce_template_loop_price - 10
                     */
                    do_action(
                        'woocommerce_after_shop_loop_item_title'
                    );

                    /**
                     * Hook: woocommerce_after_shop_loop_item.
                     *
                     * @hooked woocommerce_template_loop_product_link_close - 5
                     * @hooked woocommerce_template_loop_add_to_cart - 10
                     */
                    do_action(
                        'woocommerce_after_shop_loop_item'
                    );
                    ?>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
    <div class="flex">
        <a href="<?= home_url($slug) ?>" class="inline-block py-3 mx-auto my-16 font-semibold text-white px-14 bg-green">Ver todo</a>
    </div>
</section>
<!-- =========================================================== -->