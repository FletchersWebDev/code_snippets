<?php

$nameoptions_options = get_option( 'nameoptions_option_name' );

if (isset($nameoptions_options['option_id'])){
    require_once(plugin_dir_path(__FILE__).'../custom-code.php');
    require_once(plugin_dir_path(__FILE__).'../custom-code2.php');

    add_filter( 'template_include', 'load_option_template', 99, 1 );
    function load_option_template($option_template) {
        global $wp_query, $post;
            if (is_single() && $post->post_type == ('option')){            
                $option_template = trailingslashit( plugin_dir_path( __FILE__ ) .'../custom-post-types/options' ).'single-option.php';
            }
            
            else if(!is_single() && $post->post_type == ('option')){
                $option_template = trailingslashit( plugin_dir_path( __FILE__ ) .'../custom-post-types/options' ).'archive-option.php';    
            }
            return $option_template;
    }
}