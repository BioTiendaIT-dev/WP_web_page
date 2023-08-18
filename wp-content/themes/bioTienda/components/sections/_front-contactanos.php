<section class="m-ext">
    <!-- --------------- Title -->
    <?php
    $args = ['title' => '¡Contactanos!'];
    // ----------------------------- Title
    echo get_template_part(COMPONENTS . '_title', 'large', $args) ?>

    <article class="flex flex-col-reverse justify-center my-10 lg:flex-row">
        <!-- ---------- Info  -->
        <div class="col-span-2 col-start-2 px-10">
            <ul>
                <li>
                    <h4 class="text-lg font-bold text-green-dark">Dirección</h4>
                    <p class="">Biotienda av 3 norte # 00 - 00 / Cali - Colombia
                        <br>
                        Centro de exp. av 2 sur # 00 - 00 / Cali - Colombia
                    </p>
                </li>
                <li>
                    <h4 class="text-lg font-bold text-green-dark">Telefono / Whatsapp</h4>
                    <p>+57 317 2575491</p>
                </li>
                <li>
                    <h4 class="text-lg font-bold text-green-dark">Email</h4>
                    <p>biotienda.alnatural@gmail.com</p>
                </li>
                <li>
                    <h4 class="text-lg font-bold text-green-dark">Horarios</h4>
                    <p>Biotienda Lun - Sab 8:00 a.m. - 4:00 p.m.</p>
                </li>
            </ul>
        </div>
        <!--  ---------- Contacto -->
        <div class="mx-10">
            <?php echo do_shortcode('[contact-form-7 id="405" title="Contactanos-page"]') ?>
        </div>
    </article>
</section>