<?php get_header() ?>
<!-- ----------------------------- Banner --------->
<section class="relative">
    <div class="absolute grid w-full h-full">
        <h2 class="my-auto text-6xl font-bold text-center text-white drop-shadow-md">Asesorias</h2>
    </div>
    <picture class="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/asesorias.png" alt="">
    </picture>
</section>
<!-- -------------------------- End Banner --------------------->
<div class="m-ext">
    <section class="my-10">
        <p class="px-10 text-center lg:px-52">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit sunt sapiente ipsum alias quod pariatur fuga illum omnis exercitationem aspernatur et laudantium temporibus autem sit, neque cupiditate officiis? Reprehenderit, mollitia.</p>
        <video src="">Your browser does not support the video tag.</video>
    </section>
    <?php while (have_posts()) {
        the_post();
        the_content();
    } ?>
</div>

<?php get_footer() ?>