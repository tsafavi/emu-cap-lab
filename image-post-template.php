<?php $post_content = $post->post_content;
$search_pattern = '~<img [^\>]*data-image-type=\"change-on-hover[^\>]*>~i';
preg_match_all( $search_pattern, $post_content, $attachments );

if ( count( $attachments[0] ) == 2 ) : ?>
  <div class="img-container">
  <?php echo $attachments[0][0];
  echo $attachments[0][1]; ?>
  </div>

  <?php $post_content = preg_replace( $search_pattern, '', $post_content );
  $post_content = apply_filters( 'the_content', $post_content ); 
  echo $post_content; 

else: 
  the_content(); 
endif; ?> 

