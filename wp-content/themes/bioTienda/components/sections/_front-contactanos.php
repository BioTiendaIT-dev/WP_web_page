<section class="m-ext">
    <!-- --------------- Title -->
    <?php
    $args = ['title' => '¡Contactanos!'];
    // ----------------------------- Title
    echo get_template_part(COMPONENTS . '_title', 'large', $args) ?>

    <article class="flex flex-col-reverse justify-center my-10 lg:w-full lg:flex-row">
        <!-- ---------- Info  -->
        <div class="lg:px-10 lg:w-1/2">
            <div class="flex w-full mb-4 overflow-hidden">
                <iframe class="flex mx-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.6524972726515!2d-76.5378941239571!3d3.4344652965400435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a68fce75d801%3A0x6dd7fe2d5bc6fa9e!2sBiotienda%20AlNatural!5e0!3m2!1ses-419!2sco!4v1699650319687!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <ul class="pl-4 lg:pl-0">
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
        <div class="lg:w-1/3">
            <?php echo do_shortcode('[contact-form-7 id="405" title="Contactanos-page"]') ?>
        </div>
    </article>
</section>