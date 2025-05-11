<?php
/* Template Name: News Page */
get_header(); ?>

<main class="information-page">
  <?php get_template_part('template-parts/info-subnav'); ?>

  <section class="main-content">
    <h2>NEWS</h2>

    <?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5,
    );
    $news_query = new WP_Query($args);
    if ($news_query->have_posts()) :
      while ($news_query->have_posts()) : $news_query->the_post(); ?>
        <div class="news-item">
          <h3><?php the_title(); ?></h3>
          <p class="date"><?php echo get_the_date(); ?></p>
          <p><?php the_excerpt(); ?></p>
        </div>
      <?php endwhile;
    else : ?>
      <p>お知らせはまだありません。</p>
    <?php endif;
    wp_reset_postdata();
    ?>
  </section>
</main>

<?php get_footer(); ?>
