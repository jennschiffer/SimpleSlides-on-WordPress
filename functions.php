<?php

// enqueue them styles and javascripts
function simpleslides_scripts() {
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.min.css', array(), '3.0.1', true );
  wp_enqueue_style( 'simpleslides', get_stylesheet_uri() );
  wp_enqueue_script( 'highlightjs', get_template_directory_uri() . '/js/highlight.pack.js', array(), '8.0.0', true );
  wp_enqueue_script( 'simpleslides', get_template_directory_uri() . '/js/simpleslides.js', array('jquery','highlightjs'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'simpleslides_scripts' );

?>