<?php

//Removes the word archive from Products page
add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
    $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
    $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
    $title = '<span class="vcard">' . get_the_author() . '</span>' ;
    }
    
    return $title;
   });

//Unhook WooCommerce Wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//Remove the WooCommerce description box from admin panel
function remove_product_editor() {
    remove_post_type_support( 'product', 'editor' );
  }
  add_action( 'init', 'remove_product_editor' );

//Remove WordCommerce description, reviews and additional_information tabs from product page
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

//Remove WooCommerce Short Description
function remove_the_short_description() {
    remove_meta_box( 'postexcerpt', 'product', 'normal');
   } 
   add_action('add_meta_boxes', 'remove_the_short_description', 999);

//Disables default styles in WooCommerce
if (class_exists('Woocommerce')){
    add_filter( 
        'woocommerce_enqueue_styles', 
        '__return_empty_array' 
    );
}


?>