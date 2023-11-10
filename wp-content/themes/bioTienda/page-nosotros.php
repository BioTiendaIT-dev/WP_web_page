<?php get_header() ?>
<?= get_template_part('components/_banner', 'section', ['title' => '¿Quienes Somos?']) ?>
<section class="text-center m-ext">
    <p class="px-0 py-12 text-lg lg:px-14">Somos un emprendimiento Caleño con más de 10 años promoviendo alimentos reales, amantes de lo saludable y lo natural, somos un espacio de
        oferta de productos naturales, alimentos reales, saludables, ecológicos, y de producción local.</p>
    <h2 class="text-4xl font-bold text-green">Nuestros valores se fundamentan en:</h2>
</section>
<?= get_template_part(COMPONENTS.'sections/_nosotros', 'iconos') ?>
<!-- =========================================================== -->
<?php while (have_posts()) {
    the_post();
    the_content();
} ?>

<?php get_footer() ?>