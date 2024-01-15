<?php
require dirname(__FILE__) . '/vendor/autoload.php';
require dirname(__FILE__) . '/inc/INFO_CONST.php';
require dirname(__FILE__) . '/inc/replacement_functions/load.php';
require dirname(__FILE__) . '/inc/tabs.php';
require dirname(__FILE__) . '/inc/post_types.php';

function init_template()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('woocommerce');
    // ---------------------- Register menus ----------------------
    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal',
            'footer_menu_one' => 'Menú Footer Uno',
            'footer_menu_two' => 'Menú Footer Dos',
        )
    );

    // ---------------------- Register Styles ----------------------
    wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css', '', '1.8.1', 'all');
    wp_enqueue_style('slickTheme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css', 'slick', '1.8.1', 'all');
    wp_enqueue_style('swiper_styles', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css', '', '1.8.1', 'all');

    wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap', '', '1.0', 'all');
    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/style.css', 'custom', '1.0', 'all');
    if (!is_admin()) {
        wp_enqueue_style('bt_zoom_feature', get_stylesheet_directory_uri() . '/node_modules/drift-zoom/dist/drift-basic.css', 'fonts', '1.0', 'all');
        wp_enqueue_style('tailwind', get_stylesheet_directory_uri() . '/assets/css/twOutput.css', ['fonts', 'bt_zoom_feature'], '1.0', 'all');
    }
    // ---------------------- Register Scripts ----------------------
    wp_enqueue_script('iconify', 'https://code.iconify.design/iconify-icon/1.0.0-beta.2/iconify-icon.min.js', '', '1.0', 'all');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', '', '1.8.1', 'all');
    wp_enqueue_script('bt_npm_imports', get_stylesheet_directory_uri() . '/node_modules/drift-zoom/dist/Drift.js', '', '1.8.1', 'all');
    wp_enqueue_script('bt_npm_anime', get_stylesheet_directory_uri() . '/node_modules/animejs/lib/anime.js', '', '1.8.1', 'all');
    wp_enqueue_script('bt_swiper', get_stylesheet_directory_uri() . '/assets/js/swipers.js', 'swiper', '1.8.1', 'all');
    wp_enqueue_script('bt_buttons', get_stylesheet_directory_uri() . '/assets/js/buttons.js', '', '1.0', 'all');
    wp_enqueue_script('hoverInteractions', get_stylesheet_directory_uri() . '/assets/js/hoverInteractions.js', '', '1.8.1', 'all');
    wp_enqueue_script('custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', [], '1.8.1', 'all');
    wp_enqueue_script('main_animation', get_stylesheet_directory_uri() . '/assets/js/mainAnimation.js', ['bt_npm_anime'], '1.8.1', 'all');
    wp_enqueue_script('bt_zoom_galleries_js', get_stylesheet_directory_uri() . '/assets/js/zoomFeature.js', 'bt_swiper', '1.8.1', 'all');
    wp_enqueue_script('galleries', get_stylesheet_directory_uri() . '/assets/js/galleries.js', 'bt_swiper', '1.8.1', 'all');
    
}
add_action('after_setup_theme', 'init_template');
function bioT_add_sidebar()
{
    register_sidebar(
        array(
            'name' => 'shop',
            'id' => 'shop',
            'description' => 'Zona de Widgets para la tienda principal',
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '',
            'after_widget' => ''
        )
    );
}
// add_action( 'widgets_init', 'bioT_add_sidebar' );


/**
 * Product Loop Items.
 *
 * @see woocommerce_template_loop_product_link_open()
 * @see woocommerce_template_loop_product_link_close()
 * @see woocommerce_template_loop_add_to_cart()
 * @see woocommerce_template_loop_product_thumbnail()
 * @see woocommerce_template_loop_product_title()
 * @see woocommerce_template_loop_category_link_open()
 * @see woocommerce_template_loop_category_title()
 * @see woocommerce_template_loop_category_link_close()
 * @see woocommerce_template_loop_price()
 * @see woocommerce_template_loop_rating()
 */
// add_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
// add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);
// add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

// add_action('woocommerce_before_subcategory', 'woocommerce_template_loop_category_link_open', 10);
// add_action('woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10);
// add_action('woocommerce_after_subcategory', 'woocommerce_template_loop_category_link_close', 10);

// add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
// add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
