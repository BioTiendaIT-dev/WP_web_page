<?php get_header();
const TEMPLATE_FRONT_SECTIONS = 'components/sections/_front';
?>
<!-- =========================================================== Slider/Banner -->
<div class="mt-20 overflow-y-hidden h-[35vh] bt-slider max-w-bt mx-auto">
    <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></figure>
    <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></figure>
    <figure><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></figure>
</div>
<!-- =========================================================== -->
<main class="mx-auto max-w-bt">
    <!-- =========================================================== Productos -->
    <?= get_template_part(TEMPLATE_FRONT_SECTIONS, 'productos') ?>

    <!-- =========================================================== Minibanners -->
    <section id="minibanners" class="grid grid-cols-1 grid-rows-2 gap-5 lg:grid-cols-4 m-ext">
        <img class="w-full row-span-2 col-span-full lg:col-span-2" width="100%" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/bienestar.png" alt="">
        <img class="col-span-2 row-span-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/sostenible.png" alt="">
        <img class="col-span-2 row-span-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/social.png" alt="">
    </section>
    <!-- =========================================================== -->

    <!-- =========================================================== Asesorias/Talleres -->
    <?= get_template_part(TEMPLATE_FRONT_SECTIONS, 'asesoriasTalleres') ?>

    <!-- =========================================================== Blog section -->
    <?= get_template_part(TEMPLATE_FRONT_SECTIONS, 'blog') ?>

    <!-- =========================================================== Preguntas frecuentes section -->
    <?= get_template_part(TEMPLATE_FRONT_SECTIONS, 'faq') ?>

    <!-- =========================================================== Contactanos -->
    <?= get_template_part(TEMPLATE_FRONT_SECTIONS, 'contactanos') ?>

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

<?php
do_action('woocommerce_sidebar');

get_footer() ?>