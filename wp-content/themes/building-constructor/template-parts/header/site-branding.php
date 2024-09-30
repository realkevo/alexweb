<?php 
/*
* Display Logo and contact details
*/
?>

<div class="headerbox py-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-4 align-self-center">
        <?php if( get_theme_mod( 'construction_hub_call_text' ) != '' || get_theme_mod( 'construction_hub_call' ) != '') { ?>
          <p class="mb-0 simplep"><i class="<?php echo esc_attr(get_theme_mod('construction_hub_phone_icon','fas fa-phone')); ?> me-2"></i><span><?php echo esc_html( get_theme_mod('construction_hub_call_text','') ); ?></span> <a href="tel:<?php echo esc_html( get_theme_mod('construction_hub_call','') ); ?>"><?php echo esc_html( get_theme_mod('construction_hub_call','') ); ?></a></p>
        <?php } ?>
      </div>
      <div class="col-lg-4 col-md-4 align-self-center mail-box">
        <?php if( get_theme_mod( 'construction_hub_mail_text' ) != '' || get_theme_mod( 'construction_hub_mail' ) != '') { ?>
        <p class="mb-0 text-center text-md-right simplep email"><i class="<?php echo esc_attr(get_theme_mod('construction_hub_mail_icon','fas fa-envelope')); ?> me-2"></i></i><span><?php echo esc_html( get_theme_mod('construction_hub_mail_text','') ); ?></span>  <a href="mailto:<?php echo esc_html( get_theme_mod('construction_hub_mail','') ); ?>"><?php echo esc_html( get_theme_mod('construction_hub_mail','') ); ?></a></p>
        <?php } ?>
      </div>
      <div class="col-lg-3 col-md-4 social-media text-center text-md-right align-self-center">
        <?php if( get_theme_mod( 'building_constructor_facebook_url' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'building_constructor_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f me-3"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'building_constructor_twitter_url' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'building_constructor_twitter_url','' ) ); ?>"><i class="fab fa-twitter me-3"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'building_constructor_instagram_url' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'building_constructor_instagram_url','' ) ); ?>"><i class="fab fa-instagram me-3"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'building_constructor_youtube_url' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'building_constructor_youtube_url','' ) ); ?>"><i class="fab fa-youtube me-3"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'building_constructor_pint_url' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'building_constructor_pint_url','' ) ); ?>"><i class="fab fa-pinterest me-3"></i></a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/navigation/site-nav' ); ?>