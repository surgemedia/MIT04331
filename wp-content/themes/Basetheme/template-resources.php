<?php
/**
 * Template Name: Resource Template
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/part-jumbotron', 'hero'); ?>
	
	<?php get_template_part('templates/part', 'resources'); ?>
	
  <?php get_template_part('templates/part-jumbotron', 'info'); ?>
    <div class="container">
      <?php get_template_part('templates/part', 'contact'); ?>
    </div>
<?php endwhile; ?>

  
  



