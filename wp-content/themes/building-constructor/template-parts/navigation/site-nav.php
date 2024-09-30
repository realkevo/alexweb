<?php 
/*
* Display Theme menus
*/
?>

<div class="menubar py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-5 col-sm-5 align-self-center">
		        <div class="logo">
		          	<?php if( has_custom_logo() ) construction_hub_the_custom_logo(); ?>
		          		<?php if( get_theme_mod('construction_hub_site_title_text',true) == 1){ ?>
		            <?php if (is_front_page() && is_home()) : ?>
		                <h1 class="text-capitalize">
		                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
		                </h1> 
		              <?php else : ?>
		                  <p class="text-capitalize site-title">
		                      <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
		                  </p>
		              <?php endif; ?>
		          <?php }?>
		        </div>
	     	</div>
			<div class="menubox col-lg-8 col-md-4 col-sm-4 col-6 align-self-center">
		  		<div class="innermenubox">	      			
			          	<div class="toggle-nav mobile-menu">
		        			<button onclick="construction_hub_open_nav()" class="responsivetoggle"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','building-constructor'); ?></span></button>
		      			</div>
		 	 		<div id="mySidenav" class="nav sidenav">
		    			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'building-constructor' ); ?>">
			              	<?php
			                  	wp_nav_menu( array( 
				                    'theme_location' => 'primary-menu',
				                    'container_class' => 'main-menu clearfix' ,
				                    'menu_class' => 'clearfix',
				                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
				                    'fallback_cb' => 'wp_page_menu',
			                  	) );
			              	?>
		      				<a href="javascript:void(0)" class="closebtn mobile-menu" onclick="construction_hub_close_nav()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','building-constructor'); ?></span></a>
		        		</nav>
		      		</div>
		  			<div class="clearfix"></div>
				</div>
			</div>
			<div class=" col-lg-1 col-md-2 col-sm-2 col-6 align-self-center">
				<div class="search-box">
					<?php if(get_theme_mod('construction_hub_search_icon',true) != ''){ ?>
						<button class="search_btn"><i class="fas fa-search"></i></button>
					<?php }?>
			    </div>
		  	</div>
		</div>
		<div class="search_outer">
		  	<div class="search_inner">
		    	<?php get_search_form(); ?>
		    </div>
		</div>
	</div>
</div>