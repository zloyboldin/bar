<?php
  $post = $wp_query->post;
 
  if (in_category('kitchen')) {
      include(TEMPLATEPATH.'/single-kitchen.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>