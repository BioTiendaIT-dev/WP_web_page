<?php get_header() ?>
<?php if (is_cart()) : ?>
    <main class="grid max-w-4xl py-16 mx-auto lg:mt-20 m-ext">
    <?php else : ?>
        <main class="py-16 m-ext lg:mt-20">
        <?php endif;
        ?>
        <?php while (have_posts()) {
            the_post();
            the_content();
        } ?>
        </main>

        <?php get_footer() ?>