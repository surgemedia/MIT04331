<div class="jumbotron filter-purple" style="background:url('<?php
		the_field('background','option');
		?>') center/cover;">
  
  <div class="container">
    	
    		<h1><?php bloginfo('name'); ?></h1>
    
  	<?php 

		$images = get_field('logo_gallery','option');

		if( $images ): ?>
		    <ul class="logos">
		        <?php foreach( $images as $image ): ?>
		            <li>
		                <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
		            </li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>

    <?php the_field('info_content', 'option'); ?>
  	
  </div>
</div>