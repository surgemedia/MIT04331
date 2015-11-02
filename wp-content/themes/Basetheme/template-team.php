<?php
/**
 * Template Name: Team Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/part-jumbotron', 'hero'); ?>
	  <!-- <div class="container">
	  </div> -->
     <?php get_template_part('templates/part', 'team'); ?>
	  <div class="container">
		  <?php get_template_part('templates/part', 'contact'); ?>
	  </div>
<?php endwhile; ?>
