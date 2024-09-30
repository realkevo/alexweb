<?php

$construction_hub_tp_theme_css = '';

//theme-color
$construction_hub_tp_color_option = get_theme_mod('construction_hub_tp_color_option');

if($construction_hub_tp_color_option != false){
$construction_hub_tp_theme_css .='button[type="submit"],.top-header,.main-navigation .menu > ul > li.highlight,.box:before,.box:after,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info,.book-tkt-btn a.register-btn, .headerbox ,.search-box i,#our_project i,.toggle-nav button ,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.more-btn a,.main-navigation ul ul a:hover,.error-404 [type="submit"],.wc-block-cart__submit-container a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button#theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before,#theme-sidebar .wp-block-search .wp-block-search__label:before{';
$construction_hub_tp_theme_css .='background: '.esc_attr($construction_hub_tp_color_option).';';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_color_option != false){
$construction_hub_tp_theme_css .='a,#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3,.main-navigation .current_page_item > a,.box-content a,
.about-box-img i,.page-box h4 a,.readmore-btn a:hover,.main-navigation a:hover ,.wp-block-search .wp-block-search__label,span.meta-nav:hover,#theme-sidebar h3, #theme-sidebar h1.wp-block-heading, #theme-sidebar h2.wp-block-heading, #theme-sidebar h3.wp-block-heading,#theme-sidebar h4.wp-block-heading, #theme-sidebar h5.wp-block-heading, #theme-sidebar h6.wp-block-heading,.box-info i,a.added_to_cart.wc-forward ,#theme-sidebar .wp-block-search .wp-block-search__label, #slider .inner_carousel h1 a:hover, #about h2 a:hover, .main-navigation a:hover, .logo h1 a:hover, .logo p a:hover, .simplep.email a:hover, #slider .inner_carousel p.slider-top, .readmore-btn a, #footer .tagcloud a:hover, #footer p.wp-block-tag-cloud a:hover, .search_inner form.search-form{';
$construction_hub_tp_theme_css .='color: '.esc_attr($construction_hub_tp_color_option).';';
$construction_hub_tp_theme_css .='}';
}

if($construction_hub_tp_color_option != false){
$construction_hub_tp_theme_css .='#slider .carousel-caption,.readmore-btn a,.readmore-btn a, #footer .tagcloud a:hover, #footer p.wp-block-tag-cloud a:hover, .search_inner form.search-form {';
	$construction_hub_tp_theme_css .='border-color: '.esc_attr($construction_hub_tp_color_option).';';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_color_option != false){
$construction_hub_tp_theme_css .='.page-box,#theme-sidebar section {';
    $construction_hub_tp_theme_css .='border-left-color: '.esc_attr($construction_hub_tp_color_option).';';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_color_option != false){
$construction_hub_tp_theme_css .='.page-box,#theme-sidebar section {';
    $construction_hub_tp_theme_css .='border-bottom-color: '.esc_attr($construction_hub_tp_color_option).';';
$construction_hub_tp_theme_css .='}';
}

//hover color
$construction_hub_tp_color_option_link = get_theme_mod('construction_hub_tp_color_option_link');

if($construction_hub_tp_color_option_link != false){
$construction_hub_tp_theme_css .='.prev.page-numbers:focus, .prev.page-numbers:hover, .next.page-numbers:focus,span.meta-nav:hover, #comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #footer button[type="submit"]:hover, #theme-sidebar button[type="submit"]:hover,.book-tkt-btn a.register-btn:hover,.more-btn a:hover,.book-tkt-btn a.bar-btn i:hover,#projetcs-sec .box:hover .box-content,#projetcs-sec .tab button:hover,.search-box i:hover,.page-numbers:hover,.more-btn a:hover,.page-numbers:hover,.woocommerce ul.products li.product .onsale,.wc-block-cart__submit-container a:hover,.woocommerce span.onsale,.next.page-numbers:hover,span.page-numbers.current{';
	$construction_hub_tp_theme_css .='background: '.esc_attr($construction_hub_tp_color_option_link).';';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_color_option_link != false){
$construction_hub_tp_theme_css .='a:hover,#theme-sidebar a:hover,.media-links i:hover,.social-media i:hover,.readmore-btn a:hover, .post_tag a:hover,#theme-sidebar .widget_tag_cloud a:hover,#footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover,#footer li a:hover {';
	$construction_hub_tp_theme_css .='color: '.esc_attr($construction_hub_tp_color_option_link).';';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_color_option_link != false){
$construction_hub_tp_theme_css .='#footer .tagcloud a:hover,.readmore-btn a:hover,.post_tag a:hover,#theme-sidebar .widget_tag_cloud a:hover,#theme-sidebar .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
	$construction_hub_tp_theme_css .='border-color: '.esc_attr($construction_hub_tp_color_option_link).';';
$construction_hub_tp_theme_css .='}';
}

//Social icon Font size
$building_constructor_social_icon_fontsize = get_theme_mod('building_constructor_social_icon_fontsize');
$construction_hub_tp_theme_css .='.social-media a i{';
$construction_hub_tp_theme_css .='font-size: '.esc_attr($building_constructor_social_icon_fontsize).'px;';
$construction_hub_tp_theme_css .='}';


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