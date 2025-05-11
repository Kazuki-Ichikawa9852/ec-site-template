<div class="shop-top-menu">
  <!-- 商品検索フォーム -->
  <form role="search" method="get" class="shop-search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" class="search-field" placeholder="商品を検索…" value="<?php echo get_search_query(); ?>" name="s" />
    <input type="hidden" name="post_type" value="product" />
  </form>

  <!-- マイページ -->
  <a class="shop-top-link" href="<?php echo wc_get_page_permalink('myaccount'); ?>">マイページ</a>

  <!-- カート -->
  <a class="shop-top-link" href="<?php echo wc_get_cart_url(); ?>">カート</a>
</div>
