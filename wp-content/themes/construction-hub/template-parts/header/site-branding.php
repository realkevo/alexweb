<?php
/*
* Display Logo and contact details
*/
?>

<div class="container">
  <div class=" headerbox">
    <div class="row m-0 contact-section">
      <div class=" call col-lg-4 col-md-4">
        <?php if(get_theme_mod( 'construction_hub_call' ) != '' || get_theme_mod( 'construction_hub_call_text' ) != '' ) { ?>
       <i class="<?php echo esc_attr(get_theme_mod('construction_hub_phone_icon','fas fa-phone')); ?> "></i><span class="infotext"><?php echo esc_html( get_theme_mod('construction_hub_call_text','') ); ?></span>
        
          <span class="simplep"><a href="tel:<?php echo esc_html( get_theme_mod('construction_hub_call','') ); ?>"><?php echo esc_html( get_theme_mod('construction_hub_call','') ); ?></a></span>
        <?php } ?>
      </div>
      <div class="col-lg-4 col-md-4 position-relative">
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
          <?php $construction_hub_description = get_bloginfo( 'description', 'display' );
          if ( $construction_hub_description || is_customize_preview() ) : ?>
              <?php if( get_theme_mod('construction_hub_site_tagline_text',false)){ ?>
              <p class="site-description"><?php echo esc_html($construction_hub_description); ?></p>
            <?php }?>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 email">
        <?php if( get_theme_mod( 'construction_hub_mail' ) != '' || get_theme_mod( 'construction_hub_mail_text' ) != ''  ) { ?>
       <i class="<?php echo esc_attr(get_theme_mod('construction_hub_mail_icon','fas fa-at')); ?> "></i><span class="infotext"><?php echo esc_html( get_theme_mod('construction_hub_mail_text','')); ?></span>
       
          <span class="simplep"><a href="mailto:<?php echo esc_html( get_theme_mod('construction_hub_mail','') ); ?>"><?php echo esc_html( get_theme_mod('construction_hub_mail','') ); ?></a></span>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
