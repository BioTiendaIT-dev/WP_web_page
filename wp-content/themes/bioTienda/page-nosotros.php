<?php get_header() ?>
<?= get_template_part('components/_banner', 'section', ['title' => '¿Quienes Somos?']) ?>
<section class="flex text-center m-ext">
    <p class="px-0 py-12 mx-auto text-lg lg:px-14 lg:w-2/3">
        Somos un emprendimiento Caleño con más de 10 años promoviendo el consumo local. Apasionados por una vida saludable y natural. Somos un espacio de oferta de productos naturales, alimentos reales, saludables, ecológicos y de producción local. Compartimos conocimiento para generar conciencia alimentaria a través de un consumo responsable. Contribuimos a un estilo de vida más consciente
    </p>
</section>
<?= get_template_part(COMPONENTS . 'sections/_nosotros', 'iconos') ?>
<!-- =========================================================== -->
<?php while (have_posts()) {
    the_post();
    the_content();
} ?>

<?php get_footer() ?>