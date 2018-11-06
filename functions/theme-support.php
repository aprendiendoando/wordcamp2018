<?php
	
// Adding WP Functions & Theme Support
function isabella_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
	
	// Default thumbnail size
    add_image_size( 'blog', 800, 1020, true );	
		
} /* end theme support */

add_action( 'after_setup_theme', 'isabella_theme_support' );

function isabella_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'isabella_excerpt_length', 999 );