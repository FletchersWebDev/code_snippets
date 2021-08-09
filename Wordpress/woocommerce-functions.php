//Disables default styles in WooCommerce
if (class_exists('Woocommerce')){
    add_filter( 
        'woocommerce_enqueue_styles', 
        '__return_empty_array' 
    );
}

//Remove WooCommerce Short Description
function remove_the_short_description() {
    remove_meta_box( 'postexcerpt', 'product', 'normal', 'cocktail', 'gin');
   } 
   add_action('add_meta_boxes', 'remove_the_short_description', 999);

//Support for WooCommerce
function halewood_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
    'thumbnail_image_width' => 500,
    'single_image_width'    => 800,
            'product_grid'          => array(
                'default_rows'    => 3,
                'min_rows'        => 2,
                'max_rows'        => 8,
                'default_columns' => 4,
                'min_columns'     => 2,
                'max_columns'     => 2,
            ),
    ) );
    }
    add_action( 'after_setup_theme', 'halewood_add_woocommerce_support' );

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

//Remove The Order By Field from WooCommerce
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

//Remove The WooCommerce Breadcrumb
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );

//Remove The Result Count from WooCommerce
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

//Remove Product Title from the archive page
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

//Remove the add to cart button from WooCommerce SHOP page
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart');

//Remove the Product Title from the WooCommerce SHOP page
remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);

//Remove Related Products from the WooCommerce product package
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

?>