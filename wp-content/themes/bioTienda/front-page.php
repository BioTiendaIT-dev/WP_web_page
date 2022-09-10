<?php get_header() ?>
<!-- =========================================================== Slider/Banner -->
<div class="bt-slider">
    <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></div>
    <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></div>
    <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></div>
</div>
<!-- =========================================================== -->

<main class="">
    <!-- =========================================================== Iconos -->
    <section id="iconos" class="grid flex-row flex-wrap w-full grid-cols-2 my-24 lg:inline-flex lg:justify-between m-ext">
        <div class="p-3">
            <img class="mx-auto lg:h-full max-h-20" src=" <?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-pro-so.svg" alt="">
            <p class="pt-4 text-lg italic font-semibold leading-6 text-center text-green">Proposito <br> social</p>
        </div>
        <div class="p-3">
            <img class="mx-auto max-h-20" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-ali-con.svg" alt="">
            <p class="pt-4 text-lg italic font-semibold leading-6 text-center text-green">Alimentación <br> consiente</p>
        </div>
        <div class="p-3">
            <img class="mx-auto max-h-20" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-med-fun.svg" alt="">
            <p class="pt-4 text-lg italic font-semibold leading-6 text-center text-green">Medicina <br> funcional</p>
        </div>
        <div class="p-3">
            <img class="mx-auto max-h-20" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-nat-eco.svg" alt="">
            <p class="pt-4 text-lg italic font-semibold leading-6 text-center text-green">Natural & <br> ecológico</p>
        </div>
        <div class="p-3">
            <img class="mx-auto max-h-20" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-eco-cir.svg" alt="">
            <p class="pt-4 text-lg italic font-semibold leading-6 text-center text-green">Economia <br> circular</p>
        </div>
        <div class="p-3">
            <img class="mx-auto max-h-20" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-cu-pe.svg" alt="">
            <p class="pt-4 text-lg italic font-semibold leading-6 text-center text-green">Cuidado <br> personal</p>
        </div>
    </section>
    <!-- =========================================================== -->

    <!-- =========================================================== Minibanners -->
    <section id="minibanners" class="grid grid-cols-1 grid-rows-2 gap-5 lg:grid-cols-4 m-ext">
        <img class="w-full row-span-2 col-span-full lg:col-span-2" width="100%" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/bienestar.png" alt="">
        <img class="col-span-2 row-span-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/sostenible.png" alt="">
        <img class="col-span-2 row-span-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/social.png" alt="">

    </section>
    <!-- =========================================================== -->

    <!-- =========================================================== Productos -->
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

    <!-- =========================================================== Asesorias/Talleres -->
    <section id="asesorias" class="relative grid grid-cols-1 gap-5 py-10 lg:grid-cols-3 m-ext bg-green auto-rows-max my-11">
        <div class="col-span-full">
            <img class="mx-auto my-10 lg:my-16 max-h-10" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/logo-white.svg" alt="Logo bioTienda">
            <p class="mx-[15%] text-lg my-10 text-center font-normal text-white">Entendemos la salud y el bienestar como un conjunto, y nuestro deber es propiciar un equilibrio entre el cuerpo y la mente.
            </p>
            <h2 class="mt-5 text-2xl italic font-extrabold text-center text-white lg:mx-24"> “la salud es un estado de armonía consigo mismo y con el entorno,
                todo lo que afecta a la mente, necesariamente influye en el cuerpo”</h2>
            <h4 class="mt-6 text-lg italic font-bold text-center text-white">- Hipócrates -</h4>
        </div>
        <div class="relative z-10 col-span-1">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/talleres.png" alt="">
            <p class="absolute w-full mx-auto font-semibold text-center text-white bottom-14">Talleres</p>
        </div>
        <div class="z-10 flex flex-col col-span-1 p-10 text-center text-white bg-green-dark">
            <img class="mt-auto mb-3 max-h-10" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-logo-white.svg" alt="Icon logo">
            <h3 class="mb-6 text-lg font-semibold uppercase">Asesorías</h3>
            <p class="text-base font-normal">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi esse deleniti harum blanditiis nihil.</p>
            <a class="inline-block px-10 py-2 m-auto mt-2 lg:mt-0 bg-green" href="">LEER MAS</a>
        </div>
        <div class="relative col-span-1 bg-[url(<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/profesionales.png)]">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/profesionales.png" alt="">
            <p class="absolute w-full mx-auto font-semibold text-center text-white bottom-14">Profesionales</p>
        </div>
        <img class="absolute z-0 w-full p-16 mx-auto lg:h-full lg:max-h-full opacity-10" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-logo-white.svg" alt="">
    </section>

    <section class="m-ext">
        <?php while (have_posts()) {

            the_post();
            the_content();
        } ?>
    </section>
    <!-- ------------- blog section -->
    
    <!-- --------------- Title -->
    <div class="p-11">
        <h2 class="pb-5 text-3xl italic font-bold text-center text-green-dark">Blog</h2>
        <div class="flex flex-row items-center justify-center mx-auto w-60">
            <div class="h-[1px] w-full bg-green"></div>
            <img class="px-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-logo-green.svg" alt="">
            <div class="h-[1px] w-full bg-green"></div>
        </div>
    </div>
    <!-- --------------- End Title -->
    <section id="blog" class="grid grid-cols-1 gap-5 lg:grid-cols-4 m-ext">
        <?php
        $blogPost = new WP_Query(['post_type' => 'post', 'post_per_page' => 4,]);
        if ($blogPost->have_posts()) {
            while ($blogPost->have_posts()) {
                $blogPost->the_post();
        ?>
                <div class="my-10">
                    <a href="<?php the_permalink() ?>">
                        <picture class="overflow-hidden image">
                            <?php the_post_thumbnail('medium') ?>
                        </picture>
                        <h3 class="pt-5 text-xl font-bold text-green-dark"> <?php the_title() ?></h3>
                        <span class="text-base font-semibold text-green">- Leer más</span>
                        <?php
                        ?>
                    </a>
                </div>
        <?php
            }
        }
        ?>
    </section>
    <section class="m-ext">
        <!-- --------------- Title -->
        <div class="p-11">
            <h2 class="pb-5 text-3xl italic font-bold text-center text-green-dark">Preguntas Frecuentes</h2>
            <div class="flex flex-row items-center justify-center mx-auto w-60">
                <div class="h-[1px] w-full bg-green"></div>
                <img class="px-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-logo-green.svg" alt="">
                <div class="h-[1px] w-full bg-green"></div>
            </div>
        </div>
        <!-- --------------- End Title -->
        <article>

        </article>
    </section>
    <section class="m-ext">
        <!-- --------------- Title -->
        <div class="p-11">
            <h2 class="pb-5 text-3xl italic font-bold text-center text-green-dark">¡Contactanos!</h2>
            <div class="flex flex-row items-center justify-center mx-auto w-60">
                <div class="h-[1px] w-full bg-green"></div>
                <img class="px-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-logo-green.svg" alt="">
                <div class="h-[1px] w-full bg-green"></div>
            </div>
        </div>
        <article class="flex flex-col-reverse justify-center my-10 lg:flex-row">
            <!-- ---------- Info  -->
            <div class="col-span-2 col-start-2 px-10">
                <ul>
                    <li>
                        <h4 class="text-lg font-bold text-green-dark">Dirección</h4>
                        <p class="">Biotienda av 3 norte # 00 - 00 / Cali - Colombia
                            <br>
                            Centro de exp. av 2 sur # 00 - 00 / Cali - Colombia
                        </p>
                    </li>
                    <li>
                        <h4 class="text-lg font-bold text-green-dark">Telefono / Whatsapp</h4>
                        <p>+57 317 2575491</p>
                    </li>
                    <li>
                        <h4 class="text-lg font-bold text-green-dark">Email</h4>
                        <p>biotienda.alnatural@gmail.com</p>
                    </li>
                    <li>
                        <h4 class="text-lg font-bold text-green-dark">Horarios</h4>
                        <p>Biotienda Lun - Sab 8:00 a.m. - 4:00 p.m.</p>
                    </li>
                </ul>
            </div>
            <!--  ---------- Contacto -->
            <div class="mx-10">
                <?php echo do_shortcode('[contact-form-7 id="405" title="Contactanos-page"]') ?>
            </div>
        </article>
    </section>
    <!-- ---------------- Nuestras marcas -->
    <section>
        <!-- --------------- Title -->
        <div class="p-11">
            <h2 class="pb-5 text-3xl italic font-bold text-center text-green-dark">Conoce las marcas de nuestro portafolio</h2>
            <div class="flex flex-row items-center justify-center mx-auto w-60">
                <div class="h-[1px] w-full bg-green"></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>