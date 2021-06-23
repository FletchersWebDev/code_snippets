<?php

//Support for featured image 
add_theme_support( 'post-thumbnails' );

//Support for Custom Logo
add_theme_support('custom-logo');

//Adds custom class to the custom logo
add_filter( 'get_custom_logo', 'change_logo_class' );
function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo', 'title', $html );
    return $html;
}

//Support for WooCommerce
function halewood_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 150,
    'single_image_width'    => 300,
            'product_grid'          => array(
                'default_rows'    => 3,
                'min_rows'        => 2,
                'max_rows'        => 8,
                'default_columns' => 4,
                'min_columns'     => 2,
                'max_columns'     => 5,
            ),
    ) );
    }
    add_action( 'after_setup_theme', 'halewood_add_woocommerce_support' );

//Support for zoom and magnification in WooCommerce
add_action  ( 
            'after_setup_theme', 
            'halewood_zoom_setup'
            ); 

function halewood_zoom_setup() {
    add_theme_support( 'wc-product-gallery-zoom' );
}

//Adds Lightbox, Zoom and Slider Support for WooCommerce
add_action( 
    'after_setup_theme', 
    'halewood_lightbox_zoom_slider_setup'
); 
function halewood_lightbox_zoom_slider_setup() {
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}

?>