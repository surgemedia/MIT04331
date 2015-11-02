<?php // WP_Query arguments
    $args = array (
      'post_type'         => 'service',
      'services'          => $post->post_name,
      
    );

    // The Query
    $the_query = new WP_Query( $args );
    // The Loop
    $color= 'odd-background';
    if ( $the_query->have_posts() ) {

      while ( $the_query->have_posts() ) {
        $the_query->the_post();?>
        <div class="service-row <?php echo $color; ?>">
          <div class="container">
            <div class="header text-center">
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
            </div>
                
                <?php

                  // check if the repeater field has rows of data
                  if( have_rows('sub_services') ):?>
                      <div class="services-section">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                  <?php  // loop through the rows of data


                      $place=0;
                      while ( have_rows('sub_services') ) : the_row();
                          $place==0? $class="active": $class="";?>
                          
                      <li role="presentation" class="<?php echo $class;?> col-lg-3 text-center">
                        <a href="#<?php echo $post->post_name.$place;?>" aria-controls="<?php echo $post->post_name.$place;?>" role="tab" data-toggle="tab">
                          <small><?php the_sub_field('title'); ?> </small>
                          <i class="icon-<?php the_sub_field('icon'); ?>"></i>
                          
                        </a>
                      </li>
         
                    <?php $place++; 
                          endwhile;?>
                          </ul>
                          <!-- Tab panes -->
                          <div class="tab-content">
                    
                    <?php  // loop through the rows of data
                      $place=0;
                      while ( have_rows('sub_services') ) : the_row();
                          
                          $place==0? $class="in active": $class="";?>
                          <div role="tabpanel" class="tab-pane fade <?php echo $class;?>" id="<?php echo $post->post_name.$place;?>">
                             <span><?php the_sub_field('title'); ?></span> 
                              <?php the_sub_field('content'); ?>
                          </div>
         
                    <?php  $place++;
                            endwhile;?> 

                        
                            
                              
                              
                            </div>

                          </div>

           <?php       else :

                      // no rows found

                  endif;

                  ?>

          </div>
        </div>

        
    <?php  
      
      if ($color=='odd-background') $color = 'even-background';
      else $color = 'odd-background';
    }
      
    } else {
      // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>