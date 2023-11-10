<section class="m-ext">
    <!-- --------------- Title -->

    <?php
    $args = ['title' => 'Preguntas Frecuentes'];
    // ----------------------------- Title
    echo get_template_part(COMPONENTS . '_title', 'large', $args) ?>
    <!-- --------------- End Title -->
    <article class="grid grid-cols-2 gap-8 p-8 bg-white-secondary">
        <?php
        for ($i = 0; $i < 6; $i++) :
        ?>
            <div class="p-4 bg-white rounded shadow card_container">
                <div class="relative flex flex-row justify-between">
                    <h4 class="text-lg font-bold text-green-dark">Pregunta</h4>
                    <button title="Ver Pregunta" class="absolute right-0 h-full p-2 rounded-lg faq-btn bg-green-dark" type="button">
                        <iconify-icon class="text-white -translate-y-1" icon="typcn:plus"></iconify-icon>
                    </button>
                </div>
                <p class="pr-10 faq_answer">Respuesta</p>
            </div>
        <?php
        # code...
        endfor;
        ?>
    </article>
</section>