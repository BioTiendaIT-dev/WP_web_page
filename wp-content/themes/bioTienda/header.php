<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body class="relative">
    <?php wp_body_open() ?>

    <div class="sticky -top-12 z-[51] flex flex-col justify-between py-1 font-semibold text-white lg:flex-row m-ext bg-green">
        <p class="mx-auto my-2 italic leading-4 text-center lg:my-0">Envios nacionales gratis por compras superiores a $150.000</p>
        <div class="flex flex-row">
            <a class="flex items-start" href="<?= INSTAGRAM_URL ?>" target="_blank">
                <?= INSTAGRAM_PROFILE ?>
                <iconify-icon class="px-1 my-auto text-lg text-white" icon="akar-icons:instagram-fill"></iconify-icon>
            </a>
            <iconify-icon class="px-1 my-auto text-lg text-white" icon="cib:facebook-f"></iconify-icon>
        </div>
    </div>
    <!-- ------------------------------------ Desktop ---------------->
    <header class="hidden fixed top-0 bg-white z-50 lg:inline-flex w-full pt-12 pb-2 border-b-[1px] m-ext">
        <a href="<?php echo esc_url(home_url()) ?>">
            <img class="inline-block w-24 mt-auto pr-7" src="<?= LOGOURL ?>" alt="" srcset="">
        </a>
        <div class="flex flex-col w-full my-auto">
            <?php wp_nav_menu(array(
                'theme_location' => 'top_menu',
                'container' => 'nav',
                'menu_class' => 'bt_nav list-none inline-flex flex-row font-semibold uppercase text-base text-green-dark',
                'container_class' => 'inline-block mx-auto',
            ))
            ?>
        </div>
        <?= get_template_part(COMPONENTS . 'icons/i', 'cart', ['classes' => 'mr-auto']) ?> <!-- Icono cart -->
        <?php
            if(!is_page('checkout' )): ?>
            <div class="absolute right-0 top-full m-ext">
                <?php get_search_form() ?>
            </div>
            <?php endif; ?>
    </header>

    <!-- ------------------------------------ Mobile ----------------->
    <header class="sticky shadow top-8 left-0 right-0 z-50 bg-white inline-flex lg:hidden w-full py-3 border-b-[1px] m-ext">
        <a class="my-auto" href="<?= esc_url(home_url()) ?>">
            <img class="inline-block w-14" src="<?= LOGOURL ?>" alt="" srcset="">
        </a>
        <a class="flex my-auto ml-auto" href="https://wa.me/<?= WHATS ?>">
            <iconify-icon class="my-auto text-3xl text-white" icon="logos:whatsapp-icon"></iconify-icon></a>
        <?= get_template_part(COMPONENTS . 'icons/i', 'cart', ['classes' => 'mx-5']) ?> <!-- Icono cart -->
        <button id="mobile-burguer" class="my-auto">
            <iconify-icon class="flex ml-auto text-3xl text-green-dark" icon="heroicons-solid:menu-alt-3"></iconify-icon>
        </button>
    </header>
    <!-- mobile menu -->
    <div id="mobile-menu" class="sticky right-0 z-40 flex-col w-full bg-white top-32 border-b-[1px] shadow-sm">
        <?php wp_nav_menu(array(
            'theme_location' => 'top_menu',
            'container' => 'nav',
            'menu_class' => 'bt_nav list-none inline-flex flex-col font-semibold uppercase text-base text-green-dark',
            'container_class' => 'relative inline-block mt-7 ml-auto lg:mx-auto',
        ))
        ?>
    </div>

