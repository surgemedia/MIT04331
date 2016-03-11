<header class="banner" role="banner">
  <div class="fluid-container">
    
    <div class="brand col-md-3 col-lg-3">
      <a class="" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php the_field('company_logo','option') ?>" alt="<?php bloginfo('name'); ?>" width='350'>
      </a>
    </div>
    <nav class="navbar navbar-default col-xs-2 col-sm-6">
    <!--   <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-navigation" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div> -->

      <!-- <div class="collapse navbar-collapse" id="primary-navigation"> -->
          <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation','depth'=> 7,'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
              endif;
          ?>
          
          
      <!-- </div> -->
    </nav>
    <div class="contact-icons text-right col-xs-3">
          
            
              <span class="email icon-envelope" aria-hidden="true">
                <div><a href="mailto:<?php the_field('email','option');?>" target="_top"><?php the_field('email','option'); ?></a></div>
              </span>
              <span class="phone icon-outline-phone" aria-hidden="true">
                <div><a href="tel:<?php echo "+61".str_replace(' ', '', substr(get_field('phone','option'), 1)); ?>"><?php the_field('phone','option'); ?></a></div>
              </span>
            <div class="line"></div>
            <a href="<?php the_field('linkedin','option')?> " class="icon-linkedin" aria-hidden="true" target="_blank"></a>
          </div>
  </div>
</header>
