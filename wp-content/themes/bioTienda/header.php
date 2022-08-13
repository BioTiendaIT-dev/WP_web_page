<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open() ?>

    <div class="flex flex-row justify-between py-1 font-semibold text-white m-ext bg-green">
        <a href="mailto:hola@alnatural.com">hola@alnatural.com</a>
        <p class="italic">Envios nacionales gratis por compras superiores a $150.000</p>
        <div class="flex flex-row">
            <iconify-icon class="px-1 my-auto text-lg text-white" icon="akar-icons:instagram-fill"></iconify-icon>
            <iconify-icon class="px-1 my-auto text-lg text-white" icon="cib:facebook-f"></iconify-icon>
            <iconify-icon class="px-1 my-auto text-lg text-white" icon="akar-icons:whatsapp-fill"></iconify-icon>
            <a class="px-1 my-auto" href="#">317 2575491</a>
        </div>
    </div>
    <header class="relative inline-flex w-full pt-12 pb-6 m-ext">
        <img class="inline-block mt-auto pr-7" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logoBiotienda.svg" alt="" srcset="">
        <div class="relative flex flex-col w-full">
            <?php get_search_form() ?>
            <?php wp_nav_menu(array(
                'theme_location' => 'top_menu',
                'container' => 'nav',
                'menu_class' => 'bt_nav list-none inline-flex flex-row font-semibold uppercase text-base text-green-dark',
                'container_class' => 'inline-block mx-auto'
            )) 
            ?>
        </div>
        <a class="mt-auto" href="">
            <iconify-icon class="text-3xl mr-11 text-green-dark" icon="el:shopping-cart"></iconify-icon>
        </a>
    </header>