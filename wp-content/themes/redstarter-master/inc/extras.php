<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );



if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'rectangle-thumb', 650, 450, true );
    add_image_size( 'tile-thumb', 800, 200, true );
    add_image_size('square-thumb', 800, 800, true);
}

function change_pro_query($query) {
    //global $query;

    if (is_post_type_archive( 'product' ) ) {
        // change the default posts per page
        //echo "<h1>Hello!</h1>";
        $query->set( 'posts_per_page', '16' );
        //print_r($query);

    }
}

add_action( 'pre_get_posts', 'change_pro_query' );