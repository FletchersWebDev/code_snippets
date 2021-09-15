<?php

/**
    * The title of the page, template or template part.
    * 
    * @package 
    * @subpackage 
    * @since 
*/


//Pulling in separate pages to functions
require_once('assets/functions/function-page.php');

//WordPress Full Control
remove_filter('the_content', 'wpautop');

//Remove Function / Custom Post Type
add_action( 'after_setup_theme','remove_functionName', 100 );

function remove_functionName() {   
    remove_action( 'init', 'functionName');    
}