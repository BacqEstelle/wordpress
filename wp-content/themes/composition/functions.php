<?php
// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

// Ajout du menu
register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );

require get_template_directory() . '/bootstrap-navwalker.php';
register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
) );
function remove_page_from_query_string($query_string)
{ 
    if ($query_string['name'] == 'page' && isset($query_string['page'])) {
        unset($query_string['name']);
        $query_string['paged'] = $query_string['page'];
    }      
    return $query_string;
}
add_filter('request', 'remove_page_from_query_string');

add_filter( 'the_excerpt', 'shortcode_unautop');
add_filter( 'the_excerpt', 'do_shortcode');
