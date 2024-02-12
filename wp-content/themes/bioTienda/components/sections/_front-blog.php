<?php
$args = ['title' => 'Blog'];
$blogPost = new WP_Query(['post_type' => 'post', 'post_per_page' => 4,]);
// ----------------------------- Title
echo get_template_part(COMPONENTS . '_title', 'large', $args) ?> 
<section id="blog" class="grid grid-cols-1 gap-5 lg:grid-cols-4 m-ext">
    <?php
    if ($blogPost->have_posts()) :
        while ($blogPost->have_posts()) :
            $blogPost->the_post();
    ?>
            <div class="my-10">
                <a href="<?php the_permalink() ?>">
                    <picture class="overflow-hidden image">
                        <?php the_post_thumbnail('medium') ?>
                    </picture>
                    <h3 class="pt-5 text-xl font-bold text-green-dark"> <?php the_title() ?></h3>
                    <span class="text-base font-semibold text-green">- Leer más</span>
                    <?php
                    ?>
                </a>
            </div>
    <?php
        endwhile;
    endif;
    ?>
</section>