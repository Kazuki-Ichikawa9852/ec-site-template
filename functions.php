<?php
function enqueue_theme_styles() {
  wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

// カスタムメニューの登録

function register_my_menus() {
    register_nav_menus(array(
      'global-nav' => __('Global Navigation')
    ));
  }
  add_action('init', 'register_my_menus');

  add_filter('woocommerce_enable_order_notes_field', '__return_false');
  add_filter('woocommerce_cart_needs_shipping_address', '__return_false');
  remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10);
