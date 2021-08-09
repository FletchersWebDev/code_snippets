<?php
//Navigation in page template
    wp_nav_menu(
        array(
                'theme_location' => 'primary',
                'menu_class' => 'primary-menu'
            )
    );     
?>

<?php
//Navigation in functions
    wp_nav_menu(
        array(
                'theme_location' => 'primary',
                'menu_class' => 'primary-menu'
            )
    );     
?>

<?php

?>

<?php

//Register the menus
register_nav_menus(
    array(
        'primary' => 'The Main Menu',     
        'social' => 'Social Menu',
        'footer' => 'Footer Menu'
    )
);

?>