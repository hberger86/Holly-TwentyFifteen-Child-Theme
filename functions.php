<?php

function theme_enqueue_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

   wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style( 'google-font-geo400', '//fonts.googleapis.com/css?family=Geo:400' );
    wp_enqueue_style( 'google-font-geo400italic', '//fonts.googleapis.com/css?family=Geo:400italic' );
    wp_enqueue_style( 'google-font-gabriela', '//fonts.googleapis.com/css?family=Gabriela' );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

?>