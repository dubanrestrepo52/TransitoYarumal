<?php 
	
    #Aquí se crea una función que permitirá una ubicación del menú-----------------------------------------
	function register_my_menus(){
		register_nav_menus( 
				array(
					'menu-header' =>_('Menú del encabezado'),
					'menu-footer' =>_('Menú del footer')
				)
		);
	}

	#Aquí se le agrega la función a WP----------------------------------------------------------------------
	add_action( 'init', 'register_my_menus');

	add_theme_support( 'post-thumbnails' );

	// Register Custom Navigation Walker
		require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

		/**
 * Filter the CSS class for a nav menu based on a condition.
 *
 * @param array  $classes The CSS classes that are applied to the menu item's <li> element.
 * @param object $item    The current menu item.
 * @return array (maybe) modified nav menu class.
 */
function wpdocs_special_nav_class( $classes, $item ) {
    if ( 'Movilizarte en Yarumal' == $item->title ) {
        // Notice you can change the conditional from is_single() and $item->title
        $classes[] = "special-class";
    }
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'wpdocs_special_nav_class' , 10, 2 );

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/*Agg funciones a la barrade busqueda*/
	function miplugin_register_topbar(){
		register_sidebar(
			array(
				'id'=>'topbar',
				'name' => 'barra del header',
				'description' => 'topbar para poner barra de busqueda y traductor'
			)
		);
		register_sidebar(
			array(
				'id'=>'topbar2',
				'name' => 'barra del traductor',
				'description' => 'topbar para poner barra  traductor'
			)
		);
	}
		add_action('widgets_init', 'miplugin_register_topbar');