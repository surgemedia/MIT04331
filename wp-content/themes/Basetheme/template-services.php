<?php
/**
 * Template Name: Services Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/part-jumbotron', 'hero'); ?>
	
	<?php get_template_part('templates/part', 'services'); ?>
	
  <?php get_template_part('templates/part-jumbotron', 'info'); ?>
    <div class="container">
      <?php get_template_part('templates/part', 'contact'); ?>
    </div>
<?php endwhile; ?>

  
  



