<?php
isset($args['title']) ? $title = $args['title'] : $title = '';
global $post;
$postID = $post->ID;
$urlImage = match ($postID) { //El match se esta haciendo en base al id de la web
    11 => IMGS_DIR . 'banners/banner-nosotrosMobile.JPG', // Nosotros
    48 => IMGS_DIR . 'banners/bannerMobileProductos.JPG', // Tienda general
    12 => IMGS_DIR . 'slider/asesorias.png', // Asesorias
    'contacto' => '',
    default => IMGS_DIR . 'bannerShop.png'
};
$urlImageDesktop = match ($postID) { //El match se esta haciendo en base al id de la web
    11 => IMGS_DIR . 'banners/banner-nosotrosDesktop.JPG', // Nosotros
    48 => IMGS_DIR . 'banners/bannerDesktopProductos.JPG', // Tienda general
    12 => IMGS_DIR . 'slider/asesorias.png', // Asesorias
    'contacto' => '',
    default => IMGS_DIR . 'bannerShop.png'
};
$marginTop = match ($postID) {
    48 => 'lg:mt-28',
    default => 'lg:mt-32' // ---------------------------------------- Margin top
}
?>
<!-- ----------------------------- Banner --------->
<section class="relative w-full <?= $marginTop ?>">
    <div class="absolute z-30 grid w-full h-full">
        <h2 class="my-auto text-6xl font-bold text-center text-white drop-shadow-md"><?= $title ?></h2>
    </div>
    <figure class="h-[40vh] lg:h-[40vh] w-full overflow-hidden max-w-bt mx-auto mb-8">
        <picture>
            <source media="(min-width: 900px)" srcset="<?= $urlImageDesktop ?>" sizes="">
            <img class="w-full bg-center lg:-translate-y-32 lg:h-auto max-w-none " src="<?= $urlImage ?>" alt="Banner">
        </picture>
    </figure>
</section>