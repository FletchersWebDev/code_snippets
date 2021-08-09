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