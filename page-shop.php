<?php
/* Template Name: Shop Page */
get_header(); ?>

<?php get_template_part('template-parts/shop-header'); ?>

<main class="shop-page">
<section class="product-list">
  <ul class="products">
    <?php
    $args = array(
      'post_type' => 'product',
      'posts_per_page' => 12
    );
    $loop = new WP_Query($args);

    if ( $loop->have_posts() ) :
      while ( $loop->have_posts() ) : $loop->the_post();
        global $product;
        echo '<li class="product">';
          echo '<a href="' . get_permalink() . '">';
            echo woocommerce_get_product_thumbnail();
            echo '<h2 class="product-title">' . get_the_title() . '</h2>';
            echo '<span class="price">' . $product->get_price_html() . '</span>';
          echo '</a>';
          woocommerce_template_loop_add_to_cart(); // ← ここ！
        echo '</li>';
      endwhile;
    else :
      // 商品がないときはダミーを表示
      for ($i = 0; $i < 6; $i++) {
        echo '<li class="product dummy">';
        echo '<div class="dummy-thumb" style="width:100%;height:250px;background:#eee;"></div>';
        echo '<h2 class="product-title">商品名</h2>';
        echo '<span class="price">¥1,000</span>';
        echo '</li>';
      }
    endif;

    wp_reset_query();
    ?>
  </ul>
</section>


</main>

<?php get_footer(); ?>
