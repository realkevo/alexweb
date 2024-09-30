<?php
/**
 * Template part for displaying Our Project section
 *
 * @package Construction Hub
 * @subpackage construction_hub
 */
?>
<?php $construction_hub_static_image= get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if( get_theme_mod( 'construction_hub_show_hide_project_secton') != '') { ?>
<section id="our_project">
  <div class="container">
    <?php if( get_theme_mod('construction_hub_our_project_title') != '' || get_theme_mod('construction_hub_our_project_para') != ''){ ?>
      <div class="project_bg">
        <?php if( get_theme_mod('construction_hub_our_project_title') != ''){ ?>
          <h2 class="text-uppercase"><?php echo esc_html(get_theme_mod('construction_hub_our_project_title','')); ?></h2>
        <?php }?>
        <?php if( get_theme_mod('construction_hub_our_project_para') != ''){ ?>
          <p><?php echo esc_html(get_theme_mod('construction_hub_our_project_para','')); ?></p>
        <?php }?>
      </div>
    <?php }?>
    <div class="row">
      <?php $construction_hub_project_pages = array();
      for ( $construction_hub_count = 1; $construction_hub_count <= 3; $construction_hub_count++ ) {
          $construction_hub_mod = intval( get_theme_mod( 'construction_hub_about_page' . $construction_hub_count ));
        if ( 'page-none-selected' != $construction_hub_mod ) {
          $construction_hub_project_pages[] = $construction_hub_mod;
        }
      }
      if( !empty($construction_hub_project_pages) ) :
        $construction_hub_args = array(
          'post_type' => 'page',
          'post__in' => $construction_hub_project_pages,
          'orderby' => 'post__in'
        );
        $construction_hub_query = new WP_Query( $construction_hub_args );
      if ( $construction_hub_query->have_posts() ) :
        $construction_hub_count = 0;
        while ( $construction_hub_query->have_posts() ) : $construction_hub_query->the_post(); ?>
          <div class="col-lg-4 col-md-6">
            <div class="project_box">
              <div class="project-img">
              <?php if(has_post_thumbnail()){ ?>
                <img src="<?php (the_post_thumbnail_url('full')); ?>"/> <?php }else {echo ('<img src="'.$construction_hub_static_image.'">'); } ?>
              </div>
              <div class="project_text">
                <div class="row">
                  <div class="col-lg-10 col-md-10 col-8 align-self-center">
                    <h3 class="pb-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  </div>
                  <div class="col-lg-2 col-md-2 col-4 align-self-center">
                    <a href="<?php the_permalink(); ?>"><i class="fas fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
        <?php $construction_hub_count++; endwhile;
        wp_reset_postdata();?>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
      endif;?>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
 <?php }?>
