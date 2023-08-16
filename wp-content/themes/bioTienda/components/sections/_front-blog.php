<!-- --------------- Title -->
<div class="p-11">
    <h2 class="pb-5 text-3xl italic font-bold text-center text-green-dark">Blog</h2>
    <div class="flex flex-row items-center justify-center mx-auto w-60">
        <div class="h-[1px] w-full bg-green"></div>
        <img class="px-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-logo-green.svg" alt="">
        <div class="h-[1px] w-full bg-green"></div>
    </div>
</div>
<!-- --------------- End Title -->
<section id="blog" class="grid grid-cols-1 gap-5 lg:grid-cols-4 m-ext">
    <?php
    $blogPost = new WP_Query(['post_type' => 'post', 'post_per_page' => 4,]);
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