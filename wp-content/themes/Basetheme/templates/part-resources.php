<div class="resources">
  <div class="container">
 

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
    <?php $first=true;
          foreach (get_terms('category',array('orderby'=>'description')) as $key=>$value) {
           $first==true ? $class="active": $class=""; ?>
         
                  
              <li role="presentation" class="col-lg-3 text-center <?php echo $class;?>" >
                <a href="#<?php echo $value->slug;?>" aria-controls="<?php echo $value->slug;?>" role="tab" data-toggle="tab">
                  <small><?php echo $value->name; ?> </small>
                  <i class="icon-<?php the_field('icon', $value); ?>"></i>
                  
                </a>
              </li>
 
            
                 
   <?php $first=false; } ?>
    
    </ul>
   
<div class="tab-content">
<?php $first=true;
    foreach (get_terms('category',array('orderby'=>'description')) as $key=>$value) {
    $first==true ? $class="in active": $class="";?>
    <div role="tabpanel" class="tab-pane fade <?php echo $class;?>" id="<?php echo $value->slug;?>">

  <?php // WP_Query arguments
    $args = array (
      'post_type'         => 'post',
      'category_name'          => $value->slug
    );
    
    // The Query
    $the_query = new WP_Query( $args );
    // The Loop
    
    if ( $the_query->have_posts() ) {
      
      while ( $the_query->have_posts() ) {
        $the_query->the_post();?>
                  <!-- Tab panes -->
                  
            

                     <span><?php the_title(); ?></span> 
                      <?php the_content(); ?>
                  
 


                
                    
                      
                      
                   
    <?php  
      
     

      }
      
    } else {
      // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
    </div>
              
    
            
                 
   <?php $first=false;
     } ?>


     </div>
       

  </div>
</div>

        
   