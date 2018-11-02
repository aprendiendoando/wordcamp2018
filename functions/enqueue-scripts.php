<?php
function site_scripts() {

    wp_enqueue_script('jquery');
     
    // Register Animate CSS
    wp_enqueue_style( 'animate-css', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css', 'all' );

    // Register Google Fonts

     wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900', false );

     // Register MapBox CSS

     wp_enqueue_style( 'mapbox-css', 'https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.css', false );
    
     // Register main stylesheet
    wp_enqueue_style( 'main-css', get_template_directory_uri() . '/css/main.css', 'all' );


    // Javascript

    

    wp_enqueue_script( 'mapbox-js', 'https://api.mapbox.com/mapbox-gl-js/v0.38.0/mapbox-gl.js', array(), '0.3.8', true );

    wp_enqueue_script( 'navbar-js', '//cdn.jsdelivr.net/stickynavbar.js/1.3.2/jquery.stickyNavbar.min.js', array(), '1.3.2', true );

    wp_enqueue_script( 'easing-js', 'http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array(), '1.3', true );

    wp_enqueue_script( 'stickyheader-js', get_template_directory_uri() . '/js/sticky-header.js', array(), '1.0.4', true );

    wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '4.0.0', true );

    wp_enqueue_script( 'filterizr-js', get_template_directory_uri() . '/js/jquery.filterizr.js', array(), '1.2.5', true );

    wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/js/slick.min.js', array(), '1.6.0', true );
    
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );









}
add_action('wp_enqueue_scripts', 'site_scripts');