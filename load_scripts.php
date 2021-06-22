<?php

function load_scripts(){
    //Load CSS
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('default_style', get_template_directory_uri() . '/style.css');

    //Load JavaScript
    wp_enqueue_script('jquery_original', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '3.4.1', true);
    wp_enqueue_script('scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js', array(), 'null', true);
    wp_enqueue_script('dropotron', get_template_directory_uri() . '/assets/js/jquery.dropotron.min.js', array(), 'null', true);
    wp_enqueue_script('scrollex', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js', array(), 'null', true);
    wp_enqueue_script('browser-min', get_template_directory_uri() . '/assets/js/browser.min.js', array(), 'null', true);
    wp_enqueue_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js', array(), 'null', true);
    wp_enqueue_script('util', get_template_directory_uri() . '/assets/js/util.js', array(), 'null', true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), 'null', true);
}
    add_action ('wp_enqueue_scripts', 'load_scripts');
    
?>