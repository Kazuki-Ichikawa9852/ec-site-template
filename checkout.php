<?php
/* Template Name: Checkout Page */
get_header(); ?>

<main class="checkout-page">
  <h1 class="checkout-title">購入手続き</h1>
  <?php echo do_shortcode('[woocommerce_checkout]'); ?>
</main>

<?php get_footer(); ?>
