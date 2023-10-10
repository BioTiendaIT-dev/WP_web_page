<?php
$urls = [
    get_term_link(19, 'product_cat'), // Cuidado personal
    get_term_link(25, 'product_cat'), // Alimentos
    get_term_link(23, 'product_cat'), // Aseo
];
?>
<section id="iconos" class="grid flex-row flex-wrap w-full grid-cols-2 mb-16 lg:inline-flex lg:justify-evenly">
    <div class="p-3 hoverIconBt hover:text-green-dark text-green">
        <a href="<?= $urls[0] ?>" class="relative">
            <img class="mx-auto max-h-14" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-cu-pe.svg" alt="">
            <p class="pt-4 text-xl italic font-semibold leading-6 text-center">Cuidado <br> personal</p>
        </a>
    </div>
    <div class="p-3 hoverIconBt hover:text-green-dark text-green">
        <a href="<?= $urls[1] ?>" class="relative">
            <img class="mx-auto max-h-14" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-ali-con.svg" alt="">
            <p class="pt-4 text-xl italic font-semibold leading-6 text-center">Alimentación <br> consiente</p>
        </a>
    </div>
    <div class="p-3 hoverIconBt hover:text-green-dark text-green">
        <a href="<?= $urls[1] ?>" class="relative">
            <img class="mx-auto max-h-14" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-med-fun.svg" alt="">
            <p class="pt-4 text-xl italic font-semibold leading-6 text-center">Medicina <br> funcional</p>
        </a>
    </div>
    <div class="p-3 hoverIconBt hover:text-green-dark text-green">
        <a href="<?= $urls[2] ?>" class="relative">
            <img class="mx-auto max-h-14" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/icons/i-nat-eco.svg" alt="">
            <p class="pt-4 text-xl italic font-semibold leading-6 text-center">Natural & <br> ecológico</p>
        </a>
    </div>
    <!-- <div class="p-3 hoverIconBt hover:text-green-dark text-green">
        <a href="" class="relative">
            <img class="mx-auto max-h-14" src="<?php // echo get_stylesheet_directory_uri() 
                                                ?>/assets/img/icons/i-eco-cir.svg" alt="">
            <p class="pt-4 text-xl italic font-semibold leading-6 text-center">Economia <br> circular</p>
        </a>
    </div>
    <div class="p-3 hoverIconBt hover:text-green-dark text-green">
        <a href="" class="relative">
            <img class="mx-auto max-h-14" src=" <?php // echo get_stylesheet_directory_uri() 
                                                ?>/assets/img/icons/i-pro-so.svg" alt="">
            <p class="pt-4 text-xl italic font-semibold leading-6 text-center">Proposito <br> social</p>
        </a>
    </div> -->
</section>
<!-- =========================================================== -->