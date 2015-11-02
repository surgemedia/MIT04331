<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  	<div class="row">
  		<div class="col-lg-7">
  			<ul>
  				<li><h3><?php the_field('footer_title','option') ?></h3></li>
  				<li><b>Address </b> <p><?php the_field('address','option') ?></p></li>
  				<li><b>Phone </b> <p><?php the_field('phone','option') ?></p></li>
  			</ul>
  		</div>
  		<div class="col-lg-5">
  			<div class="linkedin">
          FIND US ON
          <img src="<?php the_field('linkedin_logo','option') ?>" alt="<?php echo $image['alt']; ?>" />
        </div>
  		</div>
  	</div>
    <div class="col-lg-12 footer-menu">
      
      <div class="row">
        <div class="col-lg-3">
          <?php wp_nav_menu (array('theme_location' => 'footer-menu-1','menu_class' => 'nav'));?>
        </div> 
        
        <div class="col-lg-3">
          <?php wp_nav_menu (array('theme_location' => 'footer-menu-2','menu_class' => 'nav'));?>
          </div>
        <div class="col-lg-3">
          <?php wp_nav_menu (array('theme_location' => 'footer-menu-3','menu_class' => 'nav'));?>
          </div> 
        <div class="col-lg-3">
          <?php wp_nav_menu (array('theme_location' => 'footer-menu-4','menu_class' => 'nav'));?>
          </div>
      </div>


    </div>
    <div class="copy-right">
      <small><?php the_field('copy_right','option') ?></small>
    </div>
  </div>
</footer>
