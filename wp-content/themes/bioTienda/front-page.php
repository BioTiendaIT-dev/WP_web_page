<?php get_header();
const TEMPLATE_FRONT_SECTIONS = 'components/sections/_front';
?>
<!-- =========================================================== Slider/Banner -->
<div class="bt-slider">
    <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></div>
    <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></div>
    <div><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/slider-1.png" alt="" /></div>
</div>
<!-- =========================================================== -->

<main class="">
    <!-- =========================================================== Iconos -->
    <?= get_template_part(TEMPLATE_FRONT_SECTIONS, 'iconos') ?>

    <!-- =========================================================== Minibanners -->
    <section id="minibanners" class="grid grid-cols-1 grid-rows-2 gap-5 lg:grid-cols-4 m-ext">
        <img class="w-full row-span-2 col-span-full lg:col-span-2" width="100%" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/bienestar.png" alt="">
        <img class="col-span-2 row-span-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/sostenible.png" alt="">
        <img class="col-span-2 row-span-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/social.png" alt="">

    </section>
    <!-- =========================================================== -->

    <!-- =========================================================== Productos -->
    <?= get_template_part(TEMPLATE_FRONT_SECTIONS, 'productos') ?>


    <!-- =========================================================== Asesorias/Talleres -->
    <?= get_template_part(TEMPLATE_FRONT_SECTIONS, 'asesoriasTalleres') ?>

    <!-- ------------- blog section -->
    <?= get_template_part(TEMPLATE_FRONT_SECTIONS, 'blog') ?>

    <section class="m-ext">
        <!-- --------------- Title -->
        <div class="p-11">
            <h2 class="pb-5 text-3xl italic font-bold text-center text-green-dark">Preguntas Frecuentes</h2>
            <div class="flex flex-row items-center justify-center mx-auto w-60">
                <div class="h-[1px] w-full bg-green"></div>
                <img class="px-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-logo-green.svg" alt="">
                <div class="h-[1px] w-full bg-green"></div>
            </div>
        </div>
        <!-- --------------- End Title -->
        <article>

        </article>
    </section>
    <section class="m-ext">
        <!-- --------------- Title -->
        <div class="p-11">
            <h2 class="pb-5 text-3xl italic font-bold text-center text-green-dark">¡Contactanos!</h2>
            <div class="flex flex-row items-center justify-center mx-auto w-60">
                <div class="h-[1px] w-full bg-green"></div>
                <img class="px-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-logo-green.svg" alt="">
                <div class="h-[1px] w-full bg-green"></div>
            </div>
        </div>
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
    <!-- ---------------- Nuestras marcas -->
    <section>
        <!-- --------------- Title -->
        <div class="p-11">
            <h2 class="pb-5 text-3xl italic font-bold text-center text-green-dark">Conoce las marcas de nuestro portafolio</h2>
            <div class="flex flex-row items-center justify-center mx-auto w-60">
                <div class="h-[1px] w-full bg-green"></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>