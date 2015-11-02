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
                  
            <div class="resource-item">
              
               <small><i><?php the_time( 'd F Y'); ?></i></small> 
               <?php switch ($value->slug) {
                  case 'newsletters': 
                  case 'useful-links':?>
                    <a href="<?php echo the_field('url'); ?>" target="_blank"><h2><?php the_title(); ?></h2></a>
                  <?php  break;
                  case 'forms': $file = get_field('file'); ?>
                     <a href="<?php echo $file['url']; ?>"><h2><?php the_title(); ?></h2></a>
                  <?php  break;
                  default:
                    # code...
                    break;
                } ?>

                <?php the_content(); ?>
                
                <?php switch ($value->slug) {
                  case 'newsletters': $file = get_field('file'); ?>
                     <a href="<?php echo $file['url']; ?>">Read More</a>
                  <?php  break;
                  case 'useful-links': ?>
                     <a href="<?php echo the_field('url'); ?>" target="_blank"><?php echo the_field('url'); ?></a>
                  <?php  break;
                  case 'forms': $file = get_field('file'); ?>
                     <a href="<?php echo $file['url']; ?>"><?php echo $file['filename']; ?></a>
                  <?php  break;
                  default:
                    # code...
                    break;
                } ?>
                
            </div>
 


                
                    
                      
                      
                   
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

        
   