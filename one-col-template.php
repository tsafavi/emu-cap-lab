<div class="one-col-content">
  <?php if ( is_front_page() ) : ?>
    <div class="main-title">
    <?php echo bloginfo( 'title' ); ?>
      <div class="caption">
      <?php echo bloginfo( 'description' ); ?>
      </div><!-- .caption -->
    </div> <!-- .main-title -->
  <?php elseif ( is_page() ) : ?>
    <div class="main-title">
    <?php wp_title(''); ?>
    </div><!-- .main-title -->
  <?php endif; ?>
	
  <?php if ( have_posts() ) :
  while ( have_posts() ) : 
  the_post(); ?>
  <div class="one-col-post" id="<?php the_title(); ?>">
    <h1><?php the_title(); ?></h1>
    <?php if ( is_preview() ): ?>
    <h3><em>Note: this is a preview.</em></h3>
    <?php endif; ?>
    <?php get_template_part( 'image-post-template' ); ?>
    <?php if ( is_single() ) : ?>
    <p class="addon">
    <?php bloginfo( 'title' ); ?> | 
    <?php echo get_the_category()[0]->cat_name; ?> | 
    <?php the_date( 'F Y' ); ?> </p>
    <?php endif; ?>
  </div><!-- .one-col-post -->
  <?php endwhile; 
  endif; ?>
</div><!-- .one-col-content -->
