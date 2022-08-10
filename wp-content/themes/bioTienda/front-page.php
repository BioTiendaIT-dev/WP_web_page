<?php get_header() ?>
<div class="bt-slider">
    <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></div>
    <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></div>
    <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></div>
</div>
<main class="m-ext">
    <section id="iconos" class="inline-flex flex-row justify-between w-full my-24">
        <div class="p-3">
            <img class="mx-auto max-h-20" src=" <?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-pro-so.svg" alt="">
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
    <section id="minibanners" class="grid grid-cols-4 grid-rows-2 gap-5">
        <img class="col-span-2 row-span-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/bienestar.png" alt="">
        <img class="col-span-2 row-span-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/sostenible.png" alt="">
        <img class="col-span-2 row-span-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/social.png" alt="">

    </section>
    <?php while (have_posts()) {

        the_post();
        the_content();
    } ?>
</main>

<?php get_footer() ?>