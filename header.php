<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title(); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <style type="text/css">
  /*  Custom CSS to make the presentation pretty. */
    body { font-family: Garamond, Georgia, serif;}
  </style>

  <?php 
    // hide front-end admin bar on slides
    if ( is_single() ) { 
      show_admin_bar( false ); 
    } 
  ?>
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>