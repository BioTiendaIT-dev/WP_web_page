<section class="m-ext">
    <!-- --------------- Title -->
    <?php
    $args = ['title' => '¡Contactanos!'];
    // ----------------------------- Title
    echo get_template_part(COMPONENTS . '_title', 'large', $args) ?>

    <article class="flex flex-col-reverse justify-center my-10 lg:flex-row">
        <!-- ---------- Info  -->
        <div class="col-span-2 col-start-2 px-10 lg:w-1/3">
            <ul>
                <li>
                    <h4 class="text-lg font-bold text-green-dark">Dirección</h4>
                    <p class=""><?= DIRECCION ?>
                    </p>
                </li>
                <li>
                    <h4 class="text-lg font-bold text-green-dark">Telefono / Whatsapp</h4>
                    <a href="https://wa.me/<?= WHATS ?>"><?= WHATS_IMPRIMIBLE ?></a>
                </li>
                <li>
                    <h4 class="text-lg font-bold text-green-dark">Email</h4>
                    <a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a>
                </li>
                <li>
                    <h4 class="text-lg font-bold text-green-dark">Horarios</h4>
                    <p><?= HORARIO_DIAS ?> <?= HORARIO_HORAS ?></p>
                </li>
            </ul>
        </div>
        <!--  ---------- Contacto -->
        <div class="mx-10">
            <?php echo do_shortcode('[contact-form-7 id="405" title="Contactanos-page"]') ?>
        </div>
    </article>
</section>