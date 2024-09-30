"use strict";

var _wp = wp,
    apiFetch = _wp.apiFetch;
jQuery(function ($) {
  var constructobuildRedirectToKitPage = function constructobuildRedirectToKitPage(res) {
    // if( res?.status && 'active' === res.status ) {
    window.location = "".concat(window.constructobuild.constructobuild_kit_gallery); // }
  }; // Activate constructobuild.


  $(document).on('click', '.constructobuild-activate-constructobuild', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('constructobuild-importing-constructobuild');
    apiFetch({
      path: '/wp/v2/plugins/constructobuild/constructobuild',
      method: 'POST',
      data: {
        "status": "active"
      }
    }).then(function (res) {
      constructobuildRedirectToKitPage(res);
    })["catch"](function () {
      constructobuildRedirectToKitPage({});
    });
  });
  $(document).on('click', '.constructobuild-install-constructobuild', function () {
    $(this).html('<span class="dashicons dashicons-update"></span> Loading...').addClass('constructobuild-importing-constructobuild');
    apiFetch({
      path: '/wp/v2/plugins',
      method: 'POST',
      data: {
        "slug": "constructobuild",
        "status": "active"
      }
    }).then(function (res) {
      constructobuildRedirectToKitPage(res);
    })["catch"](function () {
      constructobuildRedirectToKitPage({});
    });
  });
  $(document).on('click', '.constructobuild-admin-notice .notice-dismiss', function () {
    console.log(ajaxurl + "?action=constructobuild_hide_theme_info_noticebar");
    apiFetch({
      url: ajaxurl + "?action=constructobuild_hide_theme_info_noticebar&constructobuild-nonce-name=".concat(window.constructobuild.constructobuild_nonce),
      method: 'POST'
    }).then(function (res) {
      console.log(res);
    })["catch"](function (res) {
      console.log(res);
    });
  });
});