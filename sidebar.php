<?php if ( have_posts() ) : ?>
<div class="sidebar">
  <?php if ( !is_single() && !is_preview() ) : ?>
  <div class="title"><?php wp_title(''); ?></div>
  <?php endif; ?>

  <ul>
  <?php while ( have_posts() ) : 
  the_post(); ?>
  <li><a href="#<?php the_title(); ?>"><?php the_title(); ?></a></li>
  <?php endwhile; ?> 
</div><!-- .sidebar -->
<?php endif; ?>
