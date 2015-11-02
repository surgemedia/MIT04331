<div class="team-section odd-background" >
  <div class="">
    
    <div class="owl-carousel">
 <?php // WP_Query arguments
    $args = array (
      'post_type'         => 'people',
      
      
    );

    // The Query
    $the_query = new WP_Query( $args );
    // The Loop
    
    if ( $the_query->have_posts() ) {

      while ( $the_query->have_posts() ) {
        $the_query->the_post();?>

        <div >

          <img  src='<?php	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
									echo $feat_image;?>') alt="" >
        	<div class="small-block text-center">
        		<h2><?php the_title(); ?></h2>
						<small><?php the_field('role') ?></small>
        		<div class="">
						<a class="info-more" href>READ MORE</a>
						<div class="custom-nav row">
              <div class="col-lg-6">
                <div class="customPrevBtn">PREVIOUS</div>
              </div>
              <div class="col-lg-6">
                <div class="customNextBtn">NEXT</div>
              </div>
            </div>
            </div>
						<div class="content"> <?php the_content(); ?></div>

						<a class="info-close" href=""><i class="icon-close"></i></a>
        	</div>
        </div>

        
    <?php  
      
      
    }
   ?>

   <?php
    } else {
      // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>

   </div>
  <div class="custom-div"></div>	

  	

  </div>
</div>