<div class="two-col-content">
  <?php get_sidebar(); ?>

  <?php if ( have_posts() ) : 
  while ( have_posts() ) : 
  the_post(); ?>
  <div class="two-col-post" id="<?php the_title(); ?>">
    <h1><?php the_title(); ?></h1>
    <?php get_template_part( 'image-post-template' ); ?>
  </div><!-- .two-col-post -->

  <?php endwhile; 
  else: ?>
  <div class="two-col-post">
    <p>Sorry, no posts of that category could be found.</p>
  </div><!-- .two-col-post -->
  <?php endif; ?>
</div><!-- .two-col-content -->
