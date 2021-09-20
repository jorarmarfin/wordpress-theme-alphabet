<?php

if(!function_exists('preschooltheme_setup')){

    function preschooltheme_setup()
    {
        # Agrego Menus
        register_nav_menus( array(
            'mainmenu-left'=>'Menu Principal izquierda',
            'mainmenu-right'=>'Menu Principal derecha'
        ) );

        # Custom logo.
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
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 900, 400, true );

        # Agregando Sidebar
        register_sidebar(
            array(
                'id'            => 'primary',
                'name'          => 'Primary Sidebar',
                'description'   => 'Bloque lateral en la derecha',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
        register_sidebar(
            array(
                'id'            => 'home-content',
                'name'          => 'Home content',
                'description'   => 'Zona para widgets en la portada',
                'before_widget' => '<div id="%1$s">',
                'after_widget'  => '</div>',
                'before_title'  => '',
                'after_title'   => '',
            )
        );


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

// Search Widget
include_once(get_template_directory() . '/includes/widgets/searchWidget.php');
// Slider Widget
include_once(get_template_directory() . '/includes/widgets/sliderWidget.php');
