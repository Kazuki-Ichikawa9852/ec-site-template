<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- ハンバーガーのトグルボタン -->
<button id="menu-toggle" class="menu-toggle">☰</button>

<!-- メニュー本体 -->
<nav id="site-navigation" class="global-nav right-vertical">
  <?php wp_nav_menu(array(
    'theme_location' => 'global-nav',
    'container' => false,
    'menu_class' => 'menu-items'
  )); ?>
</nav>


<!-- サイトタイトルなど -->
<header>
  <div class="site-title">
    <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
  </div>
</header>

<script>
  document.getElementById('menu-toggle').addEventListener('click', function () {
    document.getElementById('site-navigation').classList.toggle('open');
  });
</script>
