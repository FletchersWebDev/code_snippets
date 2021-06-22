<?php

//Homepage Sidebars
add_action(
   'widgets_init', 
      'homepage_sidebars'
);
  function homepage_sidebars(){
   
  register_sidebar(
      array(
          'name' => 'Front Page, Banner',
          'id' => 'banner',
          'description' => 'Banner Content',
          'before_widget' => ' ',
          'after_widget' => ' ',
         'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>'
      )  
  );
}

//Code for page
   if(is_active_sidebar('banner')){
   dynamic_sidebar('banner');
   };