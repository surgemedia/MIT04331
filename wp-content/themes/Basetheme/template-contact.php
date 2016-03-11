<?php
/**
 * Template Name: Contact Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/part-jumbotron', 'hero'); ?>
	<div class="container">
	  <?php get_template_part('templates/part', 'contact'); ?>
  </div>
  <?php 

		$location = get_field('google_map');

		if( !empty($location) ):
		
		?>
	
		<div class="acf-map">
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
		</div>
	<?php endif; ?>
<?php endwhile; ?>
