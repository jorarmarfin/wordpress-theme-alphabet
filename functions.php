<?php

if(!function_exists('preschooltheme_setup')){

    function preschooltheme_setup()
    {
        register_nav_menus( array(
            'mainmenu-left'=>'Menu Principal izquierda',
            'mainmenu-right'=>'Menu Principal derecha'
        ) );
        // Custom logo.
        $logo_width  = 120;
        $logo_height = 90;
        add_theme_support(
            'custom-logo',
            array(
                'height'      => $logo_height,
                'width'       => $logo_width,
                'flex-height' => true,
                'flex-width'  => true,
            )
        );
        show_admin_bar( true );


    }

}
add_action('after_setup_theme', 'preschooltheme_setup');

/**
 * Coloca el active en la plantilla
 */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}