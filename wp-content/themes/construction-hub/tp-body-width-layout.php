<?php
$construction_hub_tp_theme_css = '';
//body layout//

$construction_hub_theme_lay = get_theme_mod( 'construction_hub_tp_body_layout_settings','Full');
if($construction_hub_theme_lay == 'Container'){
	$construction_hub_tp_theme_css .='body{';
		$construction_hub_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto !important; margin-left: auto !important;';
	$construction_hub_tp_theme_css .='}';
	$construction_hub_tp_theme_css .='@media screen and (max-width:575px){';
		$construction_hub_tp_theme_css .='body{';
			$construction_hub_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left: 0px';
		$construction_hub_tp_theme_css .='} }';
	$construction_hub_tp_theme_css .='.page-template-custom-home-page .home-page-header{';
		$construction_hub_tp_theme_css .='width: 97%;';
	$construction_hub_tp_theme_css .='}';
}else if($construction_hub_theme_lay == 'Container Fluid'){
	$construction_hub_tp_theme_css .='body{';
		$construction_hub_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
	$construction_hub_tp_theme_css .='}';
	$construction_hub_tp_theme_css .='@media screen and (max-width:575px){';
		$construction_hub_tp_theme_css .='body{';
			$construction_hub_tp_theme_css .='max-width: 100%; padding-right:0px; padding-left:0px';
		$construction_hub_tp_theme_css .='} }';
}else if($construction_hub_theme_lay == 'Full'){
	$construction_hub_tp_theme_css .='body{';
		$construction_hub_tp_theme_css .='max-width: 100%;';
	$construction_hub_tp_theme_css .='}';
}


//scroll-top-alignmemt

$construction_hub_scroll_position = get_theme_mod( 'construction_hub_scroll_top_position','Right');
if($construction_hub_scroll_position == 'Right'){
    $construction_hub_tp_theme_css .='#return-to-top{';
        $construction_hub_tp_theme_css .='right: 20px;';
    $construction_hub_tp_theme_css .='}';
}else if($construction_hub_scroll_position == 'Left'){
    $construction_hub_tp_theme_css .='#return-to-top{';
        $construction_hub_tp_theme_css .='left: 20px;';
    $construction_hub_tp_theme_css .='}';
}else if($construction_hub_scroll_position == 'Center'){
    $construction_hub_tp_theme_css .='#return-to-top{';
        $construction_hub_tp_theme_css .='right: 50%;left: 50%;';
    $construction_hub_tp_theme_css .='}';
}

// site title font size option
$construction_hub_site_title_font_size = get_theme_mod('construction_hub_site_title_font_size', 25);{
$construction_hub_tp_theme_css .='.logo h1 a, .logo p a{';
$construction_hub_tp_theme_css .='font-size: '.esc_attr($construction_hub_site_title_font_size).'px !important;';
$construction_hub_tp_theme_css .='}';
}


// site tagline font size option
$construction_hub_site_tagline_font_size = get_theme_mod('construction_hub_site_tagline_font_size', 10);{
$construction_hub_tp_theme_css .='.logo p{';
$construction_hub_tp_theme_css .='font-size: '.esc_attr($construction_hub_site_tagline_font_size).'px;';
$construction_hub_tp_theme_css .='}';
}

// related post
$construction_hub_related_post_mob = get_theme_mod('construction_hub_related_post_mob', true);
$construction_hub_related_post = get_theme_mod('construction_hub_remove_related_post', true);
$construction_hub_tp_theme_css .= '.related-post-block {';
if ($construction_hub_related_post == false) {
    $construction_hub_tp_theme_css .= 'display: none;';
}
$construction_hub_tp_theme_css .= '}';
$construction_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($construction_hub_related_post == false || $construction_hub_related_post_mob == false) {
    $construction_hub_tp_theme_css .= '.related-post-block { display: none; }';
}
$construction_hub_tp_theme_css .= '}';

// slider btn
$construction_hub_slider_buttom_mob = get_theme_mod('construction_hub_slider_buttom_mob', true);
$construction_hub_slider_button = get_theme_mod('construction_hub_slider_button', true);
$construction_hub_tp_theme_css .= '#slider .more-btn {';
if ($construction_hub_slider_button == false) {
    $construction_hub_tp_theme_css .= 'display: none;';
}
$construction_hub_tp_theme_css .= '}';
$construction_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($construction_hub_slider_button == false || $construction_hub_slider_buttom_mob == false) {
    $construction_hub_tp_theme_css .= '#slider .more-btn { display: none; }';
}
$construction_hub_tp_theme_css .= '}';

//return to header mobile				
$construction_hub_return_to_header_mob = get_theme_mod('construction_hub_return_to_header_mob', true);
$construction_hub_return_to_header = get_theme_mod('construction_hub_return_to_header', true);
$construction_hub_tp_theme_css .= '.return-to-header{';
if ($construction_hub_return_to_header == false) {
    $construction_hub_tp_theme_css .= 'display: none;';
}
$construction_hub_tp_theme_css .= '}';
$construction_hub_tp_theme_css .= '@media screen and (max-width: 575px) {';
if ($construction_hub_return_to_header == false || $construction_hub_return_to_header_mob == false) {
    $construction_hub_tp_theme_css .= '.return-to-header{ display: none; }';
}
$construction_hub_tp_theme_css .= '}';


//footer bg image
$construction_hub_footer_widget_image = get_theme_mod('construction_hub_footer_widget_image');
if($construction_hub_footer_widget_image != false){
$construction_hub_tp_theme_css .='#footer{';
$construction_hub_tp_theme_css .='background: url('.esc_attr($construction_hub_footer_widget_image).');';
$construction_hub_tp_theme_css .='}';
}

//related products
$construction_hub_related_product = get_theme_mod('construction_hub_related_product',true);
if($construction_hub_related_product == false){
$construction_hub_tp_theme_css .='.related.products{';
	$construction_hub_tp_theme_css .='display: none;';
$construction_hub_tp_theme_css .='}';
}

//menu font size
$construction_hub_menu_font_size = get_theme_mod('construction_hub_menu_font_size', 14);{
$construction_hub_tp_theme_css .='.main-navigation a, .main-navigation li.page_item_has_children:after,.main-navigation li.menu-item-has-children:after{';
	$construction_hub_tp_theme_css .='font-size: '.esc_attr($construction_hub_menu_font_size).'px;';
$construction_hub_tp_theme_css .='}';
}

// menu text transform
$construction_hub_menu_text_tranform = get_theme_mod( 'construction_hub_menu_text_tranform','Capitalize');
if($construction_hub_menu_text_tranform == 'Uppercase'){
$construction_hub_tp_theme_css .='.main-navigation a {';
	$construction_hub_tp_theme_css .='text-transform: uppercase;';
$construction_hub_tp_theme_css .='}';
}else if($construction_hub_menu_text_tranform == 'Lowercase'){
$construction_hub_tp_theme_css .='.main-navigation a {';
	$construction_hub_tp_theme_css .='text-transform: lowercase;';
$construction_hub_tp_theme_css .='}';
}
else if($construction_hub_menu_text_tranform == 'Capitalize'){
$construction_hub_tp_theme_css .='.main-navigation a {';
	$construction_hub_tp_theme_css .='text-transform: capitalize;';
$construction_hub_tp_theme_css .='}';
}

//======================= slider Content layout ===================== //

$construction_hub_slider_content_layout = get_theme_mod('construction_hub_slider_content_layout', 'CENTER-ALIGN'); 
$construction_hub_tp_theme_css .= '#slider .carousel-caption{';
switch ($construction_hub_slider_content_layout) {
    case 'LEFT-ALIGN':
        $construction_hub_tp_theme_css .= 'text-align:left; right: 35%; left: 20%';
        break;
    case 'CENTER-ALIGN':
        $construction_hub_tp_theme_css .= 'text-align:center; left: 25%; right: 25%';
        break;
    case 'RIGHT-ALIGN':
        $construction_hub_tp_theme_css .= 'text-align:right; left: 35%; right: 20%';
        break;
    default:
        $construction_hub_tp_theme_css .= 'text-align:left; right: 35%; left: 20%';
        break;
}
$construction_hub_tp_theme_css .= '}';

//sale position
$construction_hub_scroll_position = get_theme_mod( 'construction_hub_sale_tag_position','right');
if($construction_hub_scroll_position == 'right'){
$construction_hub_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $construction_hub_tp_theme_css .='right: 25px !important;';
$construction_hub_tp_theme_css .='}';
}else if($construction_hub_scroll_position == 'left'){
$construction_hub_tp_theme_css .='.woocommerce ul.products li.product .onsale{';
    $construction_hub_tp_theme_css .='left: 25px !important; right: auto !important;';
$construction_hub_tp_theme_css .='}';
}


//Font Weight
$construction_hub_menu_font_weight = get_theme_mod( 'construction_hub_menu_font_weight','500');
if($construction_hub_menu_font_weight == '100'){
$construction_hub_tp_theme_css .='.main-navigation a{';
    $construction_hub_tp_theme_css .='font-weight: 100;';
$construction_hub_tp_theme_css .='}';
}else if($construction_hub_menu_font_weight == '200'){
$construction_hub_tp_theme_css .='.main-navigation a{';
    $construction_hub_tp_theme_css .='font-weight: 200;';
$construction_hub_tp_theme_css .='}';
}else if($construction_hub_menu_font_weight == '300'){
$construction_hub_tp_theme_css .='.main-navigation a{';
    $construction_hub_tp_theme_css .='font-weight: 300;';
$construction_hub_tp_theme_css .='}';
}else if($construction_hub_menu_font_weight == '400'){
$construction_hub_tp_theme_css .='.main-navigation a{';
    $construction_hub_tp_theme_css .='font-weight: 400;';
$construction_hub_tp_theme_css .='}';
}else if($construction_hub_menu_font_weight == '500'){
$construction_hub_tp_theme_css .='.main-navigation a{';
    $construction_hub_tp_theme_css .='font-weight: 500;';
$construction_hub_tp_theme_css .='}';
}else if($construction_hub_menu_font_weight == '600'){
$construction_hub_tp_theme_css .='.main-navigation a{';
    $construction_hub_tp_theme_css .='font-weight: 600;';
$construction_hub_tp_theme_css .='}';
}else if($construction_hub_menu_font_weight == '700'){
$construction_hub_tp_theme_css .='.main-navigation a{';
    $construction_hub_tp_theme_css .='font-weight: 700;';
$construction_hub_tp_theme_css .='}';
}else if($construction_hub_menu_font_weight == '800'){
$construction_hub_tp_theme_css .='.main-navigation a{';
    $construction_hub_tp_theme_css .='font-weight: 800;';
$construction_hub_tp_theme_css .='}';
}else if($construction_hub_menu_font_weight == '900'){
$construction_hub_tp_theme_css .='.main-navigation a{';
    $construction_hub_tp_theme_css .='font-weight: 900;';
$construction_hub_tp_theme_css .='}';
}


// header
$construction_hub_slider_arrow = get_theme_mod('construction_hub_slider_arrow', false);
if ($construction_hub_slider_arrow == false) {
$construction_hub_tp_theme_css .= '.headerbox {';
    $construction_hub_tp_theme_css .= 'margin-top:10em;';
}
$construction_hub_tp_theme_css .= '}';

