<?php
function registrar_preguntas_frecuentes()
{
    $labels = array(
        'name'                  => _x('Preguntas Frecuentes', 'Nombre general del post type', 'text-domain'),
        'singular_name'         => _x('Pregunta Frecuente', 'Nombre singular del post type', 'text-domain'),
        'menu_name'             => __('Preguntas Frecuentes', 'text-domain'),
        'add_new'               => __('Agregar Nueva', 'text-domain'),
        'add_new_item'          => __('Agregar Nueva Pregunta Frecuente', 'text-domain'),
        'edit_item'             => __('Editar Pregunta Frecuente', 'text-domain'),
        'new_item'              => __('Nueva Pregunta Frecuente', 'text-domain'),
        'view_item'             => __('Ver Pregunta Frecuente', 'text-domain'),
        'view_items'            => __('Ver Preguntas Frecuentes', 'text-domain'),
        'search_items'          => __('Buscar Pregunta Frecuente', 'text-domain'),
        'not_found'             => __('No se encontraron Preguntas Frecuentes', 'text-domain'),
        'not_found_in_trash'    => __('No se encontraron Preguntas Frecuentes en la papelera', 'text-domain'),
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'hierarchical'          => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-chat', // Puedes cambiar el ícono, mira la lista aquí: https://developer.wordpress.org/resource/dashicons/
        'capability_type'       => 'post',
        'supports'              => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'               => array('slug' => 'preguntas-frecuentes'), // Cambia 'preguntas-frecuentes' al slug que prefieras.
    );

    register_post_type('pregunta_frecuente', $args);
}

add_action('init', 'registrar_preguntas_frecuentes');


?>