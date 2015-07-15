<?php 
/* 
 * Template for a category archive page. 
 */
get_header(); 

if ( is_category( 'participate' ) ) {
  get_template_part( 'one-col-template' );
} else {
  get_template_part( 'two-col-template' );
}

get_footer(); ?>
