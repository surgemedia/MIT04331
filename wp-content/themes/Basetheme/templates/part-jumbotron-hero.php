<div class="jumbotron hero <?php the_field('hero_focus_on_mobile'); ?> filter-purple-light" style="background-image:url('<?php
		$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		echo $feat_image;
		?>');">
  <div class="container">
    
    <h1><?php the_field('hero_title'); ?></h1>
  	<p><?php the_field('hero_content'); ?></p>
  	
  		<p>
  			<span class="scrollDown">  <i class="icon-chevron"></i></span>
  		</p>
  	

  </div>
</div>