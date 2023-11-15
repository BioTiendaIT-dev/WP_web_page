<?php get_header() ?>
<?php
// $args = ['post_type' => 'post'];
global $more;
?>
<?= get_template_part('components/_banner', 'section', ['title' => 'Blog']) ?>
<div class="grid grid-cols-4 gap-5 m-ext">
    <section class="py-20 col-span-full lg:col-span-3">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();

        ?>
                <div class="my-28 first:!mt-0">
                    <a href="<?php the_permalink(); ?>">
                        <picture>
                            <?php
                            the_post_thumbnail();
                            ?>
                        </picture>
                        <h2 class="mt-6 mb-3 text-2xl font-bold text-green-dark">
                            <?php
                            echo get_the_title();
                            ?>
                        </h2>
                        <article class="pr-0 lg:pr-20">

                            <?php
                            $more = 0;
                            the_content('- Leer más') ?>
                        </article>
                    </a>
                </div>
        <?php
            }
        } else {
            echo '<h2> No se encontraron post D:</h2>';
        } ?>

    </section>
    <nav class="col-span-1">

    </nav>
</div>
<?php get_footer() ?>