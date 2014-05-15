<?php 
/**
* SimpleSlides
* @author Jenn Schiffer
*/

get_header(); ?>

  <div class="page-container">
    <header>
      <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      <h4><?php bloginfo('description'); ?></h4>
    </header>

    <nav>
      <?php wp_nav_menu( array( 'theme_location' => 'simpleslides-menu' ) ); ?>
    </nav>

    <div class="page-content">
      <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <article>
            <h2 class="title"><?php the_title(); ?></h2>
            <div class="content">
              <?php the_content(); ?>
            </div>
          </article>
        <?php endwhile; ?>
      <?php else: ?>
        <h2>No page to display</h2>
      <?php endif; ?>
    </div>

    <footer>
      <p>&copy; <?php echo date('Y') . ' ' . get_bloginfo('name') . ' &bull; <a href="#">SimpleSlides</a> theme by <a href="http://jennmoney.biz">j$</a>'; ?></p>
    </footer>
  </div>
<?php get_footer(); ?>