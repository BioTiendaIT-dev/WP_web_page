<?php get_header() ?>
<!-- ----------------------------- Banner --------->
<section class="relative">
    <div class="absolute grid w-full h-full">
        <h2 class="my-auto text-6xl font-bold text-center text-white drop-shadow-md">Asesorias</h2>
    </div>
    <picture class="">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/slider/asesorias.png" alt="">
    </picture>
</section>
<!-- -------------------------- End Banner --------------------->
<div class="m-ext">
    <section class="flex flex-col my-10">
        <p class="px-10 py-10 text-center lg:px-52">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit sunt sapiente ipsum alias quod pariatur fuga illum omnis exercitationem aspernatur et laudantium temporibus autem sit, neque cupiditate officiis? Reprehenderit, mollitia.</p>
        <!-- <video src="">Your browser does not support the video tag.</video> -->
        <iframe class="max-w-full m-auto" width="560" height="315" src="https://www.youtube.com/embed/i3KynX8WUc8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>
    <!-- --------------------------- Tabs content -->
    <section>
        <!-- --------------- Title -->
        <div class="p-11">
            <h2 class="pb-5 text-3xl italic font-bold text-center text-green-dark">Descuida, nosotros te asesoramos</h2>
            <div class="flex flex-row items-center justify-center mx-auto w-60">
                <div class="h-[1px] w-full bg-green"></div>
                <img class="px-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-logo-green.svg" alt="">
                <div class="h-[1px] w-full bg-green"></div>
            </div>
        </div>
        <!-- tabs -->
        <div>
            <ul class="flex flex-col grid-cols-3 list-none lg:border-b-2 lg:grid border-green">
                <li class="py-3 text-xl font-bold text-center cursor-pointer text-green-dark active-tab px-9" data-tab-target="#tab-content-1">Medicina funcional</li>
                <li class="py-3 text-xl font-bold text-center cursor-pointer text-green-dark px-9" data-tab-target="#tab-content-2">Alimentaci??n funcional</li>
                <li class="py-3 text-xl font-bold text-center cursor-pointer text-green-dark px-9" data-tab-target="#tab-content-3">9 A??os de experiencia</li>
            </ul>
            <div class="my-10 tabs-content">
                <div data-tab-content id="tab-content-1" class="grid grid-cols-1 gap-5 active-content lg:grid-cols-2">
                    <picture>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/med-fun.png" alt="">
                    </picture>
                    <article>
                        <h3 class="pb-5 text-xl font-bold text-green-dark">Medicina funcional</h3>
                        <p>
                            La Medicina Funcional busca las causas subyacentes de la enfermedad haciendo una evaluaci??n detallada centrada en la individualidad de cada paciente y no centrado en la enfermedad como tal. Hace una evaluaci??n completa de cada persona desde su individualidad bioqu??mica, fisiol??gica y/o inmunol??gica relacionada con sus factores ambientales, gen??ticos y estilo de vida que puede afectar su salud durante el curso de su vida. (Dr. Carlos Jaramillo)
                        </p>
                    </article>
                </div>
                <div data-tab-content id="tab-content-2" class="grid grid-cols-1 gap-5 lg:grid-cols-2">
                    <picture>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/alim-fun.png" alt="">
                    </picture>
                    <article>

                        <h3 class="pb-5 text-xl font-bold text-green-dark">Alimentaci??n funcional</h3>
                        <p>Explica que seg??n el concepto tradicional de nutrici??n, la principal funci??n de la dieta es aportar los nutrientes necesarios para el buen funcionamiento del organismo. Pero el concepto de Alimentaci??n Funcional contempla ya no solo nutrirnos, si no la posibilidad de que algunos alimentos mejoren la salud de la poblaci??n y reduzcan el riesgo de desarrollar determinadas enfermedades.
                            Una Alimentaci??n Funcional es aquella que, aparte de su papel nutritivo b??sico desde el punto de vista material y energ??tico, es capaz de proporcionar un beneficio adicional para la salud.
                            La Alimentaci??n Funcional va orientada a ejercer un efecto en algunas de las siguientes funciones del organismo: crecimiento y desarrollo, metabolismo o utilizaci??n de nutrientes, defensa antioxidante, sistema cardiovascular, fisiolog??a o funcionamiento intestinal y funciones psicol??gicas y conductuales, asegura Edo.
                            Fuente: ILSI (International Life Sciences Institute)).
                        </p>
                    </article>
                </div>
                <div data-tab-content id="tab-content-3" class="grid grid-cols-1 gap-5 lg:grid-cols-2">
                    <picture>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/9-exp.png" alt="">
                    </picture>
                    <article>
                        <h3 class="pb-5 text-xl font-bold text-green-dark">9 a??os de experiencia</h3>
                        <p>Hemos logrado a trav??s de estos 9 a??os formar un equipo de trabajo con nuestros, (m??s que proveedores), aliados emprendedores para presentarles en esta categor??a una selecci??n de alimentos que tengan las caracter??sticas basadas en nuestros principios:
                            Elaborados con ingredientes naturales, de producci??n limpia, que sean colombianos, elaborados con pr??cticas amigables con el medio ambiente y que promuevan la producci??n local, que sean naturales y saludables.
                        </p>
                    </article>
                </div>
            </div>
        </div>


    </section>
    <!-- ------------------------------ Red profesionales ----------------->
</div>
<section class="bg-green">
    <div class="py-10 text-center text-white m-ext">
        <div class="pb-10">
            <h2 class="pb-5 text-3xl italic font-bold">Conoce nuestra red de profesionales</h2>
            <p class="text-base lg:px-40">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur expedita sed corrupti vel cumque maiores recusandae id pariatur, laboriosam voluptatum voluptates blanditiis assumenda! Pariatur, nesciunt?</p>
        </div>
        <div class="grid grid-cols-1 gap-5 my-10 lg:grid-cols-3">
            <div class="mb-10">
                <picture><img class="max-w-xs mx-auto" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/profesional.png" alt=""></picture>
                <h3 class="text-xl font-bold mt-9">Nombre Apellido</h3>
                <p class="text-lg">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="mb-10">
                <picture><img class="max-w-xs mx-auto" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/profesional.png" alt=""></picture>

                <h3 class="text-xl font-bold mt-9">Nombre Apellido</h3>
                <p class="text-lg">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="">
                <picture class=""><img class="max-w-xs mx-auto" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/profesional.png" alt=""></picture>
                <h3 class="text-xl font-bold mt-9">Nombre Apellido</h3>
                <p class="text-lg">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
</section>
<!-- ------------------------------- Form for asesorias ---------------------->
<section class="m-ext">
    <div class="">
        <h3 class="mt-20 text-xl font-semibold text-center text-green-dark">??Te gustar??a una asesor??a personalizada?</h3>
        <h3 class="mt-1 mb-16 text-4xl font-bold text-center lg:mb-28 text-green-dark">Escr??benos</h3>
        <article class="flex flex-col-reverse justify-center my-10 lg:flex-row">
            <!-- ---------- Info  -->
            <div class="col-span-2 col-start-2 px-10">
                <ul>
                    <li>
                        <h4 class="text-lg font-bold text-green-dark">Direcci??n</h4>
                        <p class="">Biotienda av 3 norte # 00 - 00 / Cali - Colombia
                            <br>
                            Centro de exp. av 2 sur # 00 - 00 / Cali - Colombia</p>
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
                <?php echo do_shortcode('[contact-form-7 id="415" title="Asesorias"]') ?>
            </div>
        </article>
    </div>
    <div class=""></div>
</section>
<?php while (have_posts()) {
    the_post();
    the_content();
} ?>

<?php get_footer() ?>