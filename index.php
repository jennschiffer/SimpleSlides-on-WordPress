<?php get_header(); ?>

  <h1>my slides</h1>

  <?php if ( have_posts() ): ?>
    <h2>Latest Slides</h2>
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

<?php get_footer(); ?>