<?php get_header(); ?>

  <div class="page-container">
    <header>
      <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
      <h4><?php bloginfo('description'); ?></h4>
    </header>

    <?php wp_nav_menu( array( 'theme_location' => 'simpleslides-menu' ) ); ?>

    <div class="page-content">
      <?php if ( have_posts() ): ?>
          <ol>
            <?php while ( have_posts() ) : the_post(); ?>
            <li>
              <article>
                <a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">
                  <h2 class="title"><?php the_title(); ?></h2>
                  <div class="excerpt">
                    <?php the_excerpt(); ?>
                  </div>
                </a>
              </article>
            </li>
            <?php endwhile; ?>
          </ol>
        <?php else: ?>
        <h2>No slides to display</h2>
      <?php endif; ?>
    </div>

    <footer>
      <p>&copy; <?php echo date('Y') . ' ' . get_bloginfo('name') . ' &bull; <a href="#">SimpleSlides</a> theme by <a href="http://jennmoney.biz">j$</a>'; ?></p>
    </footer>
  </div>
<?php get_footer(); ?>