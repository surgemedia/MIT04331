<div class="first content-page text-center">

<?php

// check if the repeater field has rows of data
if( have_rows('content_page') ):

 	// loop through the rows of data
    while ( have_rows('content_page') ) : the_row();?>

        
           <h2> <?php the_sub_field('title');?></h2>
        	 <?php the_sub_field('content'); ?>
        

  <?php  endwhile;

else :

    // no rows found

endif;

?>

</div>
	<?php //wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
