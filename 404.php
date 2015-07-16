<?php 
/*
 * Template for 404 Not Found pages.
 */
get_header(); ?>

<div class="one-col-content">
  <div class="one-col-post">
    <h1>Whoops!</h1>
    <p>Unfortunately, the page you were looking for doesn't seem to exist.</p>
    <p>You could go back to <a href="javascript:history.back()">where you were</a>, 
    or head to our <a href="<?php echo esc_url( home_url( '/' ) ); ?>">homepage</a>.</p>
  </div><!-- .one-col-post -->
</div><!-- .one-col-content -->

<?php get_footer(); ?>
