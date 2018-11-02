<?php
function site_scripts() {

     // Register Jquery Easing scripts
    wp_enqueue_script( 'jquery-easing', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array( 'jquery' ), "1.3", true );

    // Register Sticky Navbar scripts
    wp_enqueue_script( 'sticky-navbar', '//cdn.jsdelivr.net/stickynavbar.js/1.3.2/jquery.stickyNavbar.min.js', array( 'jquery' ), "1.3.2", true );

    // Register MapBox scripts
    wp_enqueue_script( 'mapbox', 'https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.js', array( 'jquery' ), "0.38", true );

    // Register sticky-header scripts
    wp_enqueue_script( 'sticky-header-js', get_template_directory_uri() . '/js/sticky-header.js', array( 'jquery' ), "1.0.4", true );

    // Register Waypoints scripts
    wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array( 'jquery' ), "4.0.0", true );

    // Register filterizr scripts
    wp_enqueue_script( 'filterizr-js', get_template_directory_uri() . '/js/jquery.filterizr.js', array( 'jquery' ), "1.0.1", true );

    // Register slick  scripts
    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), "1.6.0", true );
            
    // Adding scripts file in the footer
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), true );
       
    // Register Animate CSS
    wp_enqueue_style( 'animate-css', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css', 'all' );

    // Register Google Fonts

     wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900', false );

     // Register MapBox CSS

     wp_enqueue_style( 'mapbox-css', 'https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.css', false );
    
     // Register main stylesheet
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css', 'all' );

}
add_action('wp_enqueue_scripts', 'site_scripts', 999);