<?php

function simpleslides_scripts() {
  wp_enqueue_script(
    'custom-script',
    get_stylesheet_directory_uri() . '/js/simpleslides.js',
    array( 'jquery' )
  );
}

add_action( 'wp_enqueue_scripts', 'simpleslides_scripts' );

?>