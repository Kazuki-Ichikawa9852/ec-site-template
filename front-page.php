<?php get_header(); ?>

<!-- ヒーローセクション -->
<section id="hero">
  <div class="hero-content">
    <h1>メイン画像</h1>
    <p>季節限定、手作りスイーツをお届けします。</p>
    <a href="<?php echo get_permalink( get_page_by_path('onlineshop') ); ?>" class="cta-button">購入はこちら</a>
  </div>
</section>

<!-- 商品紹介セクション -->
<section id="products">
  <h2>商品一覧</h2>
  <div class="product-list">
    <div class="product-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/sample1.jpg" alt="商品1" />
      <h3>バターサンド</h3>
    </div>
    <div class="product-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/sample2.jpg" alt="商品2" />
      <h3>チーズタルト</h3>
    </div>
    <div class="product-item">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/sample3.jpg" alt="商品3" />
      <h3>ショコラケーキ</h3>
    </div>
  </div>
</section>

<!-- 店舗情報セクション -->
<section id="shop-info">
  <h2>店舗のご案内</h2>
  <p>○○市△△にある実店舗でのお受け取りも可能です。</p>
</section>

<?php get_footer(); ?>

