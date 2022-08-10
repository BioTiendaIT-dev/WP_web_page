<?php

function init_template() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );
    wp_enqueue_style( 'tailwind', get_stylesheet_directory_uri().'/assets/css/twOutput.css', '', '1.0', 'all' );
    wp_enqueue_style( 'slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', '', '1.8.1', 'all' );
    
    wp_enqueue_script('iconify', 'https://code.iconify.design/iconify-icon/1.0.0-beta.2/iconify-icon.min.js', '', '1.0', 'all');
    
    wp_enqueue_script('slickjs', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', '', '1.8.1', 'all');
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/assets/js/custom.js', 'slickjs', '1.8.1', 'all');
}
add_action( 'after_setup_theme', 'init_template');