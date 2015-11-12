<div class="contact first">
  
    <?php
    // query for the about page
    $your_query = new WP_Query( 'pagename=contactenquiry' );
    // "loop" through query (even though it's just one page) 
    while ( $your_query->have_posts() ) : $your_query->the_post();?>
        <div class="col-lg-4 text-center content">
          <h2><?php the_field("hero_title"); ?></h2>
          <?php the_content(); ?>

        </div>

        <div class="col-lg-8">
          <div class="form">
             <?php echo do_shortcode('[gravityform id=1 title=false description=false ajax=true tabindex=49]') ?>
          </div>
        </div>
    <?php endwhile;
    // reset post data (important!)
    wp_reset_postdata();
    ?>
   
  
</div>