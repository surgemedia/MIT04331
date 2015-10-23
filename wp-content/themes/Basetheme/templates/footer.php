<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  	<div class="row">
  		<div class="col-lg-7">
  			<ul>
  				<li><h2><?php the_field('footer_title','option') ?></h2></li>
  				<li><?php the_field('address','option') ?></li>
  				<li><?php the_field('phone','option') ?></li>
  			</ul>
  		</div>
  		<div class="col-lg-5 text-center">
  			
  		</div>
  	</div>
  </div>
</footer>
