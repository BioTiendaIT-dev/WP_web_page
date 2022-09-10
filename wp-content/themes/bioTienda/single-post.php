<?php get_header() ?>
<section class="grid grid-cols-4 gap-5 m-ext">
    <div class="col-span-3 my-28">
        <?php while (have_posts()) {
            the_post();
        ?>
            <picture>
                <?php
                the_post_thumbnail('full');
                ?>
            </picture>
            <h2 class="mt-6 mb-3 text-2xl font-bold text-green-dark">
                <?php
                echo get_the_title();
                ?>
            </h2>

        <?php
            the_content();
        } ?>
    </div>
</section>
<?php get_footer() ?>