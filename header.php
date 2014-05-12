<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php wp_title(''); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php 
    // hide front-end admin bar on slides
    if ( is_single() ) { 
      show_admin_bar( false ); 
    } 
  ?>
  
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>