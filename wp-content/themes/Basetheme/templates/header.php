<header class="banner" role="banner">
  <div class="fluid-container">
    
    <div class="brand col-lg-3">
      <a class="" href="<?= esc_url(home_url('/')); ?>">
        <img src="<?php the_field('company_logo','option') ?>" alt="<?php bloginfo('name'); ?>" width='360'>
      </a>
    </div>
    <nav class="navbar navbar-default col-xs-12 col-lg-6">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-navigation" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse" id="primary-navigation">
          <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation','depth'=> 7,'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
              endif;
          ?>
          
          
      </div>
    </nav>
    <div class="contact-icons text-right col-lg-3">
          
            
              <span class="icon-envelope" aria-hidden="true"></span>
              <span class="icon-outline-phone" aria-hidden="true"></span>
            <div class="line"></div>
            <span class="icon-linkedin" aria-hidden="true"></span>
          </div>
  </div>
</header>
