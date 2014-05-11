<?php get_header(); ?>

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <article id="simpleslides">
      <?php the_content(); 
        // TODO: hidden tab to display more info about the talk ?
      ?> 
    </article>
  <?php endwhile; ?>

<?php get_footer(); ?>