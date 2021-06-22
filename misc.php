
<?php

//Load WP Header
wp_head(); 

//Load Custom Logo
has_custom_logo() ? the_custom_logo() : ''; 

//Loads WordPress page title
the_title();

// Loads in custom fields if not empty.
?>

<?php if (!empty(get_field('banner_image'))){	?>
    <img src="<?php the_field('banner_image'); ?>"/>
<?php 
}	
?>

<?php

//Loads the page content.
the_content();

//Loads an include file/ template-part
while ( have_posts() ) : the_post();
get_template_part( 'includes/template-parts/footer', 'footer' );
endwhile; // End of the loop.


//Declares a template part name.

/**
 * Template part for footer.
 *
 * @link https://www.halewood-int.com
 *
 * @package Halewood
 */



//Content Wrapper for WooCommerce.
if (is_product()){
    the_post_thumbnail("medium");

    //Content goes here.

}	else if(is_archive()){
    woocommerce_content();
}

//Custom WooCommerce Header
if (is_product()){
    single_post_title();
}
else if (is_archive()){
    echo "Gin Shop";
}


//Displays post content on package
if ( have_posts() ) : 
while ( have_posts() ) : the_post();
//Display post content
endwhile; 
endif; 



?>



