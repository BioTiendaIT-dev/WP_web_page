    <section id="productos" class="mt-12 m-ext">
        <!-- --------------- Title -->
        <div class="p-11">
            <h2 class="pb-5 text-3xl italic font-bold text-center text-green-dark">Productos para tu bienestar</h2>
            <div class="flex flex-row items-center justify-center mx-auto w-60">
                <div class="h-[1px] w-full bg-green"></div>
                <img class="px-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-logo-green.svg" alt="">
                <div class="h-[1px] w-full bg-green"></div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-4">
            <?php
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
            );
            $productos = new WP_Query($args);

            if ($productos->have_posts()) {
                while ($productos->have_posts()) {
                    $productos->the_post();
            ?>
                    <div class="relative my-5">
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
            <?php }
            }
            ?>
        </div>
        <div class="flex">
            <a href="" class="inline-block py-3 mx-auto my-16 font-semibold text-white px-14 bg-green">Ver todo</a>
        </div>
    </section>
    <!-- =========================================================== -->