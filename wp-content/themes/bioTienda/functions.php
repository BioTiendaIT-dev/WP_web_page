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
}
add_action( 'after_setup_theme', 'init_template');