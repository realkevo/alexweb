<?php

$construction_hub_tp_theme_css = '';

//theme-color
$construction_hub_tp_color_option = get_theme_mod('construction_hub_tp_color_option');

if($construction_hub_tp_color_option != false){
$construction_hub_tp_theme_css .='button[type="submit"],.top-header,.main-navigation .menu > ul > li.highlight,.box:before,.box:after,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.page-numbers,.prev.page-numbers,.next.page-numbers,span.meta-nav,#theme-sidebar button[type="submit"],#footer button[type="submit"],#comments input[type="submit"],.site-info,.book-tkt-btn a.register-btn,.logo,.search-box i,#our_project i,.toggle-nav button ,.more-btn a,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover, .main-navigation ul ul,.error-404 [type="submit"],.wc-block-cart__submit-container a,.wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button,.woocommerce ul.products li.product .onsale, .woocommerce span.onsale,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link#theme-sidebar .wp-block-search .wp-block-search__label:before,#theme-sidebar h3:before, #theme-sidebar h1.wp-block-heading:before, #theme-sidebar h2.wp-block-heading:before, #theme-sidebar h3.wp-block-heading:before,#theme-sidebar h4.wp-block-heading:before, #theme-sidebar h5.wp-block-heading:before, #theme-sidebar h6.wp-block-heading:before,#theme-sidebar .wp-block-search .wp-block-search__label:before {';
$construction_hub_tp_theme_css .='background-color: '.esc_attr($construction_hub_tp_color_option).';';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_color_option != false){
$construction_hub_tp_theme_css .='#theme-sidebar .textwidget a,#footer .textwidget a,.comment-body a,.entry-content a,.entry-summary a,.page-template-front-page .media-links a:hover,.topbar-home i.fas.fa-phone-volume,#theme-sidebar h3,.headerbox i,.main-navigation .current_page_item > a,.readmore-btn a,#theme-sidebar h2.wp-block-heading,.main-navigation .current_page_item > a, .main-navigation .current-menu-item > a, .main-navigation .current_page_ancestor > a,.main-navigation a:hover,.post_tag a:hover ,.nav-links a, .page-box h4 a ,.box-content li a, .comments-area a,.box-content a, .woocommerce-MyAccount-content a, .woocommerce-privacy-policy-text a, .woocommerce-cart-form a,a.added_to_cart.wc-forward,.wc-block-components-totals-coupon-link,.wc-block-components-product-name, #theme-sidebar .wp-block-search .wp-block-search__label,a ,.box-info i, #slider .inner_carousel h1 a:hover, #our_project h3 a:hover, span.simplep a:hover, .search-box i:hover{';
$construction_hub_tp_theme_css .='color: '.esc_attr($construction_hub_tp_color_option).';';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_color_option != false){
$construction_hub_tp_theme_css .='.readmore-btn a,.post_tag a:hover, .more-btn a, .search_inner form.search-form{';
	$construction_hub_tp_theme_css .='border-color: '.esc_attr($construction_hub_tp_color_option).';';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_color_option != false){
$construction_hub_tp_theme_css .='.page-box,#theme-sidebar section {';
	$construction_hub_tp_theme_css .='border-bottom-color: '.esc_attr($construction_hub_tp_color_option).';';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_color_option != false){
$construction_hub_tp_theme_css .=' .page-box,#theme-sidebar section{';
	$construction_hub_tp_theme_css .='border-left-color: '.esc_attr($construction_hub_tp_color_option).';';
$construction_hub_tp_theme_css .='}';
}

if($construction_hub_tp_color_option != false){
$construction_hub_tp_theme_css .='@media screen and (max-width:1000px){';
$construction_hub_tp_theme_css .='.nav ul li a:hover{';
	$construction_hub_tp_theme_css .='color: '.esc_attr($construction_hub_tp_color_option).';';
$construction_hub_tp_theme_css .='} }';
}

//hover color
$construction_hub_tp_color_option_link = get_theme_mod('construction_hub_tp_color_option_link');

if($construction_hub_tp_color_option_link != false){
$construction_hub_tp_theme_css .='.prev.page-numbers:focus, .prev.page-numbers:hover, .next.page-numbers:focus, .next.page-numbers:hover,span.meta-nav:hover, #comments input[type="submit"]:hover,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #footer button[type="submit"]:hover, #theme-sidebar button[type="submit"]:hover,.book-tkt-btn a.register-btn:hover,.more-btn a:hover,.book-tkt-btn a.bar-btn i:hover,.page-numbers:hover, .main-navigation ul ul a:hover,.wc-block-cart__submit-container a:hover,.wc-block-grid__product-add-to-cart.wp-block-button .wp-block-button__link:hover {';
	$construction_hub_tp_theme_css .='background: '.esc_attr($construction_hub_tp_color_option_link).';';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_color_option_link != false){
$construction_hub_tp_theme_css .='a:hover,#theme-sidebar a:hover,.media-links i:hover, .search-box i:hover,#footer li a:hover, .page-box h4 a:hover, .box-content li a:hover ,.post_tag a:hover,#footer .tagcloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
	$construction_hub_tp_theme_css .='color: '.esc_attr($construction_hub_tp_color_option_link).';';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_color_option_link != false){
$construction_hub_tp_theme_css .='#footer .tagcloud a:hover, .readmore-btn a:hover,p.wp-block-tag-cloud a:hover, .post_tag a:hover, #theme-sidebar .widget_tag_cloud a:hover,#footer p.wp-block-tag-cloud a:hover{';
	$construction_hub_tp_theme_css .='border-color: '.esc_attr($construction_hub_tp_color_option_link).';';
$construction_hub_tp_theme_css .='}';
}

//preloader//

$construction_hub_tp_preloader_color1_option = get_theme_mod('construction_hub_tp_preloader_color1_option');
$construction_hub_tp_preloader_color2_option = get_theme_mod('construction_hub_tp_preloader_color2_option');
$construction_hub_tp_preloader_bg_option = get_theme_mod('construction_hub_tp_preloader_bg_option');


if($construction_hub_tp_preloader_color1_option != false){
$construction_hub_tp_theme_css .='.center1{';
	$construction_hub_tp_theme_css .='border-color: '.esc_attr($construction_hub_tp_preloader_color1_option).' !important;';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_preloader_color1_option != false){
$construction_hub_tp_theme_css .='.center1 .ring::before{';
	$construction_hub_tp_theme_css .='background: '.esc_attr($construction_hub_tp_preloader_color1_option).' !important;';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_preloader_color2_option != false){
$construction_hub_tp_theme_css .='.center2{';
	$construction_hub_tp_theme_css .='border-color: '.esc_attr($construction_hub_tp_preloader_color2_option).' !important;';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_preloader_color2_option != false){
$construction_hub_tp_theme_css .='.center2 .ring::before{';
	$construction_hub_tp_theme_css .='background: '.esc_attr($construction_hub_tp_preloader_color2_option).' !important;';
$construction_hub_tp_theme_css .='}';
}
if($construction_hub_tp_preloader_bg_option != false){
$construction_hub_tp_theme_css .='.loader{';
	$construction_hub_tp_theme_css .='background: '.esc_attr($construction_hub_tp_preloader_bg_option).';';
$construction_hub_tp_theme_css .='}';
}

// footer-bg-color
$construction_hub_tp_footer_bg_color_option = get_theme_mod('construction_hub_tp_footer_bg_color_option');

if($construction_hub_tp_footer_bg_color_option != false){
$construction_hub_tp_theme_css .='#footer{';
	$construction_hub_tp_theme_css .='background: '.esc_attr($construction_hub_tp_footer_bg_color_option).' !important;';
$construction_hub_tp_theme_css .='}';
}
