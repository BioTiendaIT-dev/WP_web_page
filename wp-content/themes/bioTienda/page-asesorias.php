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
    <section class="my-10 flex flex-col">
        <p class="px-10 text-center py-10 lg:px-52">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit sunt sapiente ipsum alias quod pariatur fuga illum omnis exercitationem aspernatur et laudantium temporibus autem sit, neque cupiditate officiis? Reprehenderit, mollitia.</p>
        <!-- <video src="">Your browser does not support the video tag.</video> -->
        <iframe class="m-auto max-w-full" width="560" height="315" src="https://www.youtube.com/embed/i3KynX8WUc8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
            <ul class="list-none flex flex-col lg:grid grid-cols-3 border-green border-b-2">
                <li class="cursor-pointer text-xl font-bold text-green-dark active-tab text-center px-9 py-3" data-tab-target="#tab-content-1">Medicina funcional</li>
                <li class="cursor-pointer text-xl font-bold text-green-dark text-center px-9 py-3" data-tab-target="#tab-content-2">Alimentación funcional</li>
                <li class="cursor-pointer text-xl font-bold text-green-dark text-center px-9 py-3" data-tab-target="#tab-content-3">9 Años de experiencia</li>
            </ul>
            <div class="tabs-content my-10">
                <div data-tab-content id="tab-content-1" class="active-content grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <picture>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/med-fun.png" alt="">
                    </picture>
                    <article>
                        <h3 class="pb-5 text-green-dark font-bold text-xl">Medicina funcional</h3>
                        <p>
                            La Medicina Funcional busca las causas subyacentes de la enfermedad haciendo una evaluación detallada centrada en la individualidad de cada paciente y no centrado en la enfermedad como tal. Hace una evaluación completa de cada persona desde su individualidad bioquímica, fisiológica y/o inmunológica relacionada con sus factores ambientales, genéticos y estilo de vida que puede afectar su salud durante el curso de su vida. (Dr. Carlos Jaramillo)
                        </p>
                    </article>
                </div>
                <div data-tab-content id="tab-content-2" class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <picture>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/alim-fun.png" alt="">
                    </picture>
                    <article>

                        <h3 class="pb-5 text-green-dark font-bold text-xl">Alimentación funcional</h3>
                        <p>Explica que según el concepto tradicional de nutrición, la principal función de la dieta es aportar los nutrientes necesarios para el buen funcionamiento del organismo. Pero el concepto de Alimentación Funcional contempla ya no solo nutrirnos, si no la posibilidad de que algunos alimentos mejoren la salud de la población y reduzcan el riesgo de desarrollar determinadas enfermedades.
                            Una Alimentación Funcional es aquella que, aparte de su papel nutritivo básico desde el punto de vista material y energético, es capaz de proporcionar un beneficio adicional para la salud.
                            La Alimentación Funcional va orientada a ejercer un efecto en algunas de las siguientes funciones del organismo: crecimiento y desarrollo, metabolismo o utilización de nutrientes, defensa antioxidante, sistema cardiovascular, fisiología o funcionamiento intestinal y funciones psicológicas y conductuales, asegura Edo.
                            Fuente: ILSI (International Life Sciences Institute)).
                        </p>
                    </article>
                </div>
                <div data-tab-content id="tab-content-3" class="grid grid-cols-1 lg:grid-cols-2 gap-5">
                    <picture>
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/thumbnails/9-exp.png" alt="">
                    </picture>
                    <article>
                        <h3 class="pb-5 text-green-dark font-bold text-xl">9 años de experiencia</h3>
                        <p>Hemos logrado a través de estos 9 años formar un equipo de trabajo con nuestros, (más que proveedores), aliados emprendedores para presentarles en esta categoría una selección de alimentos que tengan las características basadas en nuestros principios:
                            Elaborados con ingredientes naturales, de producción limpia, que sean colombianos, elaborados con prácticas amigables con el medio ambiente y que promuevan la producción local, que sean naturales y saludables.
                        </p>
                    </article>
                </div>
            </div>
        </div>


    </section>
    <!-- ------------------------------ Red profesionales -->
</div>
<section class="bg-green">
    <div class="m-ext py-10 text-white text-center">
        <div class="pb-10">
            <h2 class="font-bold pb-5 italic text-3xl">Conoce nuestra red de profesionales</h2>
            <p class="text-base lg:px-40">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur expedita sed corrupti vel cumque maiores recusandae id pariatur, laboriosam voluptatum voluptates blanditiis assumenda! Pariatur, nesciunt?</p>
        </div>
        <div class="grid gap-5 grid-cols-3">
            <div class="">
                <picture><img src="" alt=""></picture>
                <h3 class="font-bold text-xl">Nombre Apellido</h3>
                <p class="">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="">
                <picture><img src="" alt=""></picture>
                <h3 class="font-bold text-xl">Nombre Apellido</h3>
                <p class="">Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="">
                <picture><img src="" alt=""></picture>
                <h3 class="font-bold text-xl">Nombre Apellido</h3>
                <p class="">Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
    </div>
</section>
<?php while (have_posts()) {
    the_post();
    the_content();
} ?>

<?php get_footer() ?>