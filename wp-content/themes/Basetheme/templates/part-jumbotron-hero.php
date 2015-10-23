<div class="jumbotron hero filter-purple-light" style="background:url('<?php
		$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		echo $feat_image;
		?>') center/cover;">
  <div class="container">
    
    <h1><?php the_field('hero_title'); ?></h1>
  	<p><?php the_content() ?></p>
  	
  		<p>
  			<i class="icon-chevron"></i>
  		</p>
  	

  </div>
</div>