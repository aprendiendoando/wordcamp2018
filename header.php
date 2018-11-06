<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri(); ?>/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/manifest.json">
    
    
    <meta name="msapplication-TileColor" content="#2c3e50">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#2c3e50">

    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header" id="header">
      <?php
        if(is_front_page()){
      ?>
        <div class="slider">
            <figure>
                <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?> /img/slider.jpg" alt="Slider" width="1600" height="645">
                <div class="slider--message">
                  <h4 class="title js-animation-slider">I Am Photography</h4>
                  <a class="btn btn--slider btn--slider--white js-animation-slider" href="#project">See My Works</a>
              </div>
            </figure>
        </div> <!-- End Slider -->
      <?php
        }
      ?>
      <div class="header__top <?php if( !is_front_page()){ echo "header__top--internal"; } ?>">
        <h1>
            <a class="logo" href="index.html" title="Isabella - Interactive Digital Experiences"></a>
        </h1> <!-- End Logo -->
        <a class="icon-nav" href="#" id="togle-nav">
          <span></span>
          <span></span>
          <span></span>
        </a> <!-- Icon Hamburg Mobile -->
        <nav class="nav nav--main" data-id="1">
          <ul class="list-none">
            <li><a href="#header">Home</a></li>
            <li><a href="#photostyles">Services</a></li>
            <li><a href="#project">Portfolio</a></li>
            <li><a href="#isabella">Who I am</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contactus">Contact US</a></li>
          </ul>
        </nav> <!-- End Navigation primary-->
      </div> <!-- End header__top -->
    </header> <!-- End Header -->