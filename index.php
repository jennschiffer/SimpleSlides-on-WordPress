<?php get_header(); ?>

  <div class="page-container">
    <header>
      <h1><?php bloginfo('name'); ?></h1>
      <h4><?php bloginfo('description'); ?></h4>
    </header>

      <?php if ( have_posts() ): ?>
          <ol>
            <?php while ( have_posts() ) : the_post(); ?>
            <li>
              <article>
                <h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
              </article>
            </li>
            <?php endwhile; ?>
          </ol>
        <?php else: ?>
        <h2>No slides to display</h2>
      <?php endif; ?>

    <footer>
      <p>&copy; <?php echo date('Y') . ' ' . bloginfo('name') . ' &bull; <a href="#">SimpleSlides</a> theme by <a href="http://jennmoney.biz">j$</a>'; ?></p>
    </footer>
  </div>
<?php get_footer(); ?>