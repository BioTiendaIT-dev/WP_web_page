<?php

/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {
    global $product;
    $rating_count = $product->get_rating_count();
	$tabs['reviews']['title'] = __( 'Reseñas' ) . " ($rating_count)";				// Rename the reviews tab
	$tabs['description']['title'] = __( 'Descripción' );
	// $tabs['additional_information']['title'] = __( 'Información adicional' );	// Rename the additional information tab

	return $tabs;

}

/**
 * Add a custom product data tab
 */
add_filter('woocommerce_product_tabs', 'woo_new_product_tab');
function woo_new_product_tab($tabs)
{

    // Adds the new tab

    $tabs['historia'] = array(
        'title'     => __('Historia', 'woocommerce'),
        'priority'     => 50,
        'callback'     => 'woo_new_product_tab_content'
    );

    return $tabs;
}
function woo_new_product_tab_content()
{

    // The new tab content

    echo '<h2>Historia</h2>';
    echo '<p>Aqui inicia la historia del producto</p>';
}


?>