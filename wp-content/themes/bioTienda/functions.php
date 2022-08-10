<?php

function init_template() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    // ---------------------- Register menus ----------------------
    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );

    // ---------------------- Register Styles ----------------------
    wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', '', '1.8.1', 'all' );
    wp_enqueue_style( 'slickTheme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', 'slick', '1.8.1', 'all' );
    wp_enqueue_style( 'tailwind', get_stylesheet_directory_uri().'/assets/css/twOutput.css', '', '1.0', 'all' );
    
    // ---------------------- Register Scripts ----------------------
    wp_enqueue_script('iconify', 'https://code.iconify.design/iconify-icon/1.0.0-beta.2/iconify-icon.min.js', '', '1.0', 'all');
    wp_enqueue_script('slickjs', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', '', '1.8.1', 'all');
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/assets/js/custom.js', 'slickjs', '1.8.1', 'all');
}
add_action( 'after_setup_theme', 'init_template');