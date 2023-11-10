<?php get_header() ?>
<main class="w-full py-16 mx-auto max-w-bt lg:mt-20">
    <?php while (have_posts()) {
        the_post();
        the_content();
    } ?>
</main>

<?php get_footer() ?>