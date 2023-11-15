<?php
$args = array(
    'post_type' => 'pregunta_frecuente',
    'posts_per_page' => -1,  // -1 para mostrar todas las preguntas
    'orderby' => 'title',
    'order' => 'ASC',
);

$preguntas_frecuentes = new WP_Query($args);
?>
<section class="m-ext">
    <!-- --------------- Title -->

    <?php
    $args = ['title' => 'Preguntas Frecuentes'];
    // ----------------------------- Title
    echo get_template_part(COMPONENTS . '_title', 'large', $args) ?>
    <!-- --------------- End Title -->
    <article id="faq_card_container" class="grid grid-cols-2 gap-8 p-8 bg-white-secondary">
        <?php
        if ($preguntas_frecuentes->have_posts()) :
            while ($preguntas_frecuentes->have_posts()) : $preguntas_frecuentes->the_post();
        ?>
                <div id="post-<?php the_ID(); ?>" class="p-4 bg-white rounded shadow h-fit card_container">
                    <div class="relative flex flex-row justify-between">
                        <h4 class="text-lg font-bold text-green-dark"><?= get_the_title() ?></h4>
                        <button title="Ver Pregunta" class="absolute right-0 h-full p-2 rounded-lg faq-btn bg-green-dark card_btn" type="button">
                            <iconify-icon class="text-white -translate-y-1" icon="typcn:plus"></iconify-icon>
                        </button>
                    </div>
                    <p class="hidden pt-2 pr-10 transition-all faq_answer"><?= get_the_content() ?></p>
                </div>
        <?php
            # code...
            endwhile;
            wp_reset_postdata(); // Restaurar datos del post principal.
        endif;
        ?>
    </article>
</section>