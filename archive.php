<?php 
/* 
 * Template for a generic archive page.
 */
get_header(); ?>

<div class="one-col-content">
  <div class="main-title">
  Archive
  </div><!-- .main-title -->

  <?php $categories = array( 'about', 'team', 'studies', 'community', 'participate', 'join' );
  foreach ( $categories as $category ) : ?>
  <div class="one-col-post">
    <h1><?php echo ucfirst( $category ); ?></h1> 
    <ul>
    <?php 
    $args = array( 
    'posts_per_page' => -1, 
    'orderby' => 'title', 
    'order' => 'ASC', 
    'category_name' => $category,
    );

    $results = get_posts( $args );
    foreach ( $results as $post ) : 
    setup_postdata($post); ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php endforeach; 
    wp_reset_postdata(); ?>
    </ul>
  </div><!-- .one-col-post -->
  <?php endforeach; ?>
</div><!-- .one-col-content -->

<?php get_footer(); ?>
