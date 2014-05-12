<?php get_header(); ?>

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <!-- highlightjs style -->
  <!-- custom style -->
  <?php 
    $theId = get_the_ID();
    $simpleslidesCSS = get_post_meta($theId, 'SimpleSlides CSS', true);
    $highlightTheme = get_post_meta($theId, 'SimpleSlides HighlightJS CSS', true);

    // highlightjs theme
    if ( !$highlightTheme ) {
      $highlightTheme = 'default';
    }
    echo '<link rel="stylesheet" href="' . get_bloginfo('template_directory') . '/css/highlightjs/' . $highlightTheme . '.css" />';

    // custom slide css
    if ( $simpleslidesCSS ) {
      echo '<style type="text/css">' . $simpleslidesCSS . '</style>'; 
    }
  ?>

    <article id="simpleslides">
      <?php the_content(); 
        // TODO: hidden tab to display more info about the talk ?
      ?> 
    </article>
  <?php endwhile; ?>

<?php get_footer(); ?>