<?php
/**
 * Template part for displaying About section
 *
 * @package Building Constructor
 * @subpackage building_constructor
 */
?>
<?php if( get_theme_mod( 'building_constructor_about_show_hide') != '') { ?>
<section id="about" class="py-5">
  <div class="container">
    <div class="row">
      <?php $building_constructor_about_page = array();
        $building_constructor_mod = absint( get_theme_mod( 'building_constructor_about_page' ));
        if ( 'page-none-selected' != $building_constructor_mod ) {
          $building_constructor_about_page[] = $building_constructor_mod;
        }
      if( !empty($building_constructor_about_page) ) :
        $building_constructor_args = array(
          'post_type' => 'page',
          'post__in' => $building_constructor_about_page,
          'orderby' => 'post__in'
        );
        $building_constructor_query = new WP_Query( $building_constructor_args );
        if ( $building_constructor_query->have_posts() ) :
          while ( $building_constructor_query->have_posts() ) : $building_constructor_query->the_post(); ?>
            <div class="col-lg-6 col-md-6 align-self-center">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
               <p><?php echo wp_trim_words( get_the_content() );?></p> 
              <div class="more-btn">
                <a href="<?php the_permalink(); ?>"><?php esc_html_e('View Our Services','building-constructor'); ?></a>
                </a>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 align-self-center">
              <div class="about-box-img">
                <?php the_post_thumbnail(); ?>
                <div class="about-box-inner-img">
                  <?php if( get_theme_mod('building_constructor_about_tittle') != ''){ ?>
                    <i class="fas fa-quote-right"></i>
                    <p><?php echo esc_html(get_theme_mod('building_constructor_about_tittle','')); ?></p>
                  <?php }?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
      endif;
      wp_reset_postdata()?>
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<?php }?>