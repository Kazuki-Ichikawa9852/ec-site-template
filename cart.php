<?php
/* Template Name: Cart Page */
get_header(); ?>

<main class="cart-page">
  <section class="cart-hero">
    <h1>Cart</h1>
  </section>

  <section class="cart-contents">
    <?php echo do_shortcode('[woocommerce_cart]'); ?>
  </section>
</main>

<?php get_footer(); ?>
