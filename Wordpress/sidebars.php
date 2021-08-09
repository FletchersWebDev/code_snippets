<?php
//Registering Sidebars in the Functions
add_action(
    'widgets_init', 
       'sidebars'
 );
   function sidebars(){
   
    register_sidebar(
        array(
            'name' => 'Sidebar Name',
            'id' => 'sidebarid',
            'description' => 'Sidebar description',
            'before_widget' => ' ',
            'after_widget' => ' ',
           'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )  
    );
   register_sidebar(
       array(
           'name' => 'Sidebar Name 2',
           'id' => 'sidebarid2',
           'description' => 'Sidebar description',
           'before_widget' => ' ',
           'after_widget' => ' ',
          'before_title' => '<h2 class="widget-title">',
           'after_title' => '</h2>'
       )  
   );
   register_sidebar(
    array(
        'name' => 'Sidebar Name 3',
        'id' => 'sidebarid3',
        'description' => 'Sidebar description',
        'before_widget' => ' ',
        'after_widget' => ' ',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    )  
);
}

//Registering sidebars in the page
if(is_active_sidebar('sidebarid')){
dynamic_sidebar('sidebarid');
};

?>