<?php

register_nav_menus(
    array(
        'primary' => 'The Main Menu',
        'social' => 'Social Menu'
    )
);


//Goes into the theme files.
wp_nav_menu(
    array(
        'theme_location' => 'primary',
         )
);     

?>

