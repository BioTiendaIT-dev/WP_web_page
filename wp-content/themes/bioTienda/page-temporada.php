<?php get_header() ?>
<main id="page_temp" class="grid max-w-4xl py-16 mx-auto lg:mt-20">
    <?php while (have_posts()) {
        the_post_thumbnail( );
        the_post();
    ?>
        <h3 class="mb-8 text-4xl font-bold text-green-dark"><?= get_the_title() ?></h3>
    <?php
        the_content();
    } ?>
</main>

<?php get_footer() ?>