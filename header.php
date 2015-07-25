<?php
/* 
 * Template for displaying the head element + main navigation.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <?php if ( is_front_page() ) : ?>
  <title><?php bloginfo( 'title' ); ?></title>
  <?php else : ?>
  <title><?php wp_title(''); ?></title>
  <?php endif; 
  wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header">
  <i class="fa fa-bars"></i>
  <div class="nav"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">About</a><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>">Team</a><a href="<?php echo esc_url( home_url( '/studies/' ) ); ?>">Studies</a><a href="<?php echo esc_url( home_url( '/community/' ) ); ?>">Community</a><a href="<?php echo esc_url( home_url( '/participate/' ) ); ?>">Participate</a><a href="<?php echo esc_url( home_url( '/join/' ) ); ?>">Join</a>
  </div><!-- .nav -->
</div><!-- .header -->

<div class="wrapper">
<div class="content">
