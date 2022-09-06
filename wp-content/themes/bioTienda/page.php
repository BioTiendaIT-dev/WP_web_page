<?php get_header() ?>
<div class="m-ext">

    <?php while (have_posts()) {
        the_post();
        the_content();
    } ?>
</div>

<?php get_footer() ?>