<?php get_header() ?>
<?php if (is_cart()) : ?>
    <div class="m-ext max-w-4xl grid mx-auto py-16">
    <?php else : ?>
        <div class="m-ext">
        <?php endif;
        ?>
        <?php while (have_posts()) {
            the_post();
            the_content();
        } ?>
        </div>

        <?php get_footer() ?>