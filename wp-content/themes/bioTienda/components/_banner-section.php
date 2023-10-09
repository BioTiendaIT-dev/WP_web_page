<?php
$args['title'] ? $title = $args['title'] : $title = '';
global $post;
$postID = $post->ID;
$urlImage = match ($postID) { //El match se esta haciendo en base al id de la web
    11 => IMGS_DIR . 'slider/nosotrosBanner.png', // Nosotros
    48 => IMGS_DIR . 'bannerShop.png', // Tienda general
    12 => IMGS_DIR . 'slider/asesorias.png', // Asesorias
    'contacto' => '',
    default => IMGS_DIR . 'bannerShop.png'
};
$marginTop = match($postID){
    48 => 'mt-16',
    default => 'mt-32'
}
?>
<!-- ----------------------------- Banner --------->
<section class="relative w-full <?= $marginTop ?>">
    <div class="absolute grid w-full h-full">
        <h2 class="my-auto text-6xl font-bold text-center text-white drop-shadow-md"><?= $title ?></h2>
    </div>
    <figure class="h-[25vh] overflow-hidden mb-8">
        <picture>
            <img src="<?= $urlImage ?>" alt="Banner">
        </picture>
    </figure>
</section>