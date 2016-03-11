<div class="services row first">

<?php

// check if the repeater field has rows of data
if( have_rows('services') ):

  // loop through the rows of data
    while ( have_rows('services') ) : the_row();?>
      <div class="card col-lg-4" style="background-image:url('<?php the_sub_field('thumbnail')
    ?>'); background-position:<?php the_sub_field('thumbnail_focus') ?>" > 
      
      <a href="<?php the_sub_field('link_page'); ?> " class="sub-background text-center">
          <h2><?php the_sub_field('title'); ?></h2>
            <?php the_sub_field('content'); ?>
            <?php
            
              // check if the repeater field has rows of data
              if( have_rows('list') ):?>
                <ul>
              <?php  // loop through the rows of data
                  while ( have_rows('list') ) : the_row();?>
            
                      <li>
                        <?php the_sub_field('item'); ?></li>
               <?php  endwhile;?>
                </ul>
              <?php else :
            
                  // no rows found
            
              endif;
            
              ?>
              <span  class="read-more">
                 READ MORE
              </span>
        
      </a>


   </div>
        

<?php endwhile;

else :

    // no rows found

endif;

?>




 
  
</div>