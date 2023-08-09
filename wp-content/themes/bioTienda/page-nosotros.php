<?php get_header() ?>
<section class="relative">
    <div class="absolute grid w-full h-full">
        <h2 class="my-auto text-6xl font-bold text-center text-white drop-shadow-md">¿Quienes somos?</h2>
    </div>
    <picture class="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/nosotrosBanner.png" alt="">
    </picture>
</section>
<section class="text-center  m-ext">
    <p class="px-0 py-12 text-lg lg:px-14">Somos un emprendimiento Caleño, amantes de lo saludable y lo natural, somos un espacio de
        oferta de productos naturales, alimentos reales, saludables, ecológicos, y de producción local.</p>
    <h2 class="text-4xl font-bold text-green">Nuestros valores se fundamentan en:</h2>
</section>
<!-- =========================================================== Iconos -->
<section id="iconos" class="grid bg-[#F6F9EA] flex-row flex-wrap w-full grid-cols-2 py-20 mt-12 lg:inline-flex lg:justify-between m-ext">
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
<?php while (have_posts()) {
    the_post();
    the_content();
} ?>

<?php get_footer() ?>