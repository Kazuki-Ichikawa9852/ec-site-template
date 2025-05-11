<?php
/*
Template Name: FAQ Page
*/
get_header(); ?>

<div class="information-page">
  <?php get_template_part('template-parts/info-subnav'); ?>
  <div class="main-content">
    <h2>FAQ</h2>
    <div class="faq-section">
      <div class="faq-item">
        <div class="faq-question">Q. 注文後のキャンセルはできますか？</div>
        <div class="faq-answer">A. 発送前であれば可能です。お問い合わせフォームよりご連絡ください。</div>
      </div>
      <div class="faq-item">
        <div class="faq-question">Q. ギフト包装は可能ですか？</div>
        <div class="faq-answer">A. はい、ギフト包装のオプションをご用意しております。</div>
      </div>
    </div>
  </div>
</div>

<script>
  document.querySelectorAll('.faq-question').forEach((q) => {
    q.addEventListener('click', () => {
      q.nextElementSibling.classList.toggle('open');
    });
  });
</script>

<?php get_footer(); ?>
