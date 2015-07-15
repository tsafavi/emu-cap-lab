<?php 

/*
 * Adds CSS stylesheets and Javascript to header element.
 */
function add_theme_scripts() {
  wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' );
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'PT Serif', 'http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700italic' );
  wp_enqueue_style( 'Lato', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', get_template_directory_uri(). '/js/jquery.min.js' );
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
}

/*
 * Makes the home page display posts in the About category.
 */
function set_home_to_about( $query ) {
  if ( $query->is_home() && $query->is_main_query() ) {
    $query->set( 'category_name', 'about' );
  }
}

/*
 * Removes the post result limit.
 */
function remove_limits( $limits ) {
  return "";
}

add_filter( 'show_admin_bar', '__return_false' );
add_filter( 'post_limits', 'remove_limits' );
add_action( 'pre_get_posts', 'set_home_to_about' );
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
?>
