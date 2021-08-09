<?php
//Loading Styles and Scripts

//Load Scripts
function load_scripts(){
    //Load CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/styles/main.css');
    wp_enqueue_style('default_style', get_template_directory_uri() . '/style.css');

    //Load JavaScript
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
    add_action ('wp_enqueue_scripts', 'load_scripts');

?>