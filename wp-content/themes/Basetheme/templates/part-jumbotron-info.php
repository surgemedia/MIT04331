<div class="jumbotron info filter-purple" style="background:url('<?php
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
		                <div>
		                	<img src="<?php echo aq_resize($image[url],130,130); ?>" alt="<?php echo $image['alt']; ?>" />
		                </div>
		            </li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>

    <div class="content">
    	<?php the_field('info_content', 'option'); ?>
    </div>
		<?php $page = get_page_by_title( 'About M&A' );
      if(!($page->ID == get_the_ID())) {?>
        <a href="<?php echo site_url();?>/about-ma">Learn More</a>
     <?php } ?>
		
  </div>
</div>