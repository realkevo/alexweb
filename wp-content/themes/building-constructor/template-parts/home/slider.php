<?php
/**
 * Template part for displaying slider section
 *
 * @package Building Constructor
 * @subpackage building_constructor
 */

?>
<?php $static_image= get_stylesheet_directory_uri() . '/assets/images/sliderimage.png'; ?>
<?php if( get_theme_mod( 'building_constructor_slider_show_hide') != '') { ?>
<section id="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <?php $construction_hub_slide_pages = array();
      for ( $construction_hub_count = 1; $construction_hub_count <= 4; $construction_hub_count++ ) {
        $construction_hub_mod = intval( get_theme_mod( 'construction_hub_slider_page' . $construction_hub_count ));
        if ( 'page-none-selected' != $construction_hub_mod ) {
          $construction_hub_slide_pages[] = $construction_hub_mod;
        }
      }
      if( !empty($construction_hub_slide_pages) ) :
        $construction_hub_args = array(
          'post_type' => 'page',
          'post__in' => $construction_hub_slide_pages,
          'orderby' => 'post__in'
        );
        $construction_hub_query = new WP_Query( $construction_hub_args );
        if ( $construction_hub_query->have_posts() ) :
          $i = 1;
    ?>
    <div class="carousel-inner" role="listbox">
      <?php  while ( $construction_hub_query->have_posts() ) : $construction_hub_query->the_post(); ?>
        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
         <?php if(has_post_thumbnail()){ ?>
               <img src="<?php the_post_thumbnail_url('full'); ?>"/> <?php }else {echo ('<img src="'.$static_image.'">'); } ?>
          <div class="carousel-caption">
            <div class="inner_carousel">
              <p class="slider-top"><?php echo esc_html(get_theme_mod('building_constructor_slider_top','')); ?></p>
               <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
               <p><?php echo wp_trim_words( get_the_content(),20 );?></p>
                  <div class="more-btn">
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('GET A QUOTE','building-constructor'); ?></a>
                  </div>
            </div>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
        <div class="no-postfound"></div>
      <?php endif;
    endif;?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span>
      <span class="screen-reader-text"><?php esc_html_e('Previous','building-constructor'); ?></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span>
      <span class="screen-reader-text"><?php esc_html_e('Next','building-constructor'); ?></span>
    </a>
  </div>
  <div class="clearfix"></div>
</section>
 <?php }?>
