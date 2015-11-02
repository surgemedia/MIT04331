<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/part-jumbotron', 'hero'); ?>
	  <div class="container">
		  <?php get_template_part('templates/part', 'service-cards'); ?>
	
	  </div>
  <?php get_template_part('templates/part-jumbotron', 'info'); ?>
	  <div class="container">
		  <?php get_template_part('templates/part', 'contact'); ?>
	  </div>
<?php endwhile; ?>
