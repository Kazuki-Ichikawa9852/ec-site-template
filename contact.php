<?php
/* Template Name: Contact Page */
get_header(); ?>

<main class="information-page">
  <?php get_template_part('template-parts/info-subnav'); ?>

  <section class="main-content" id="contact">
    <h2>お問い合わせ</h2>

    <form action="mailto:your@email.com" method="POST" enctype="text/plain">
      <div>
        <label for="name">お名前</label><br>
        <input type="text" id="name" name="お名前" required>
      </div>
      <br>

      <div>
        <label for="phone">電話番号</label><br>
        <input type="tel" id="phone" name="電話番号">
      </div>
      <br>

      <div>
        <label for="email">メールアドレス</label><br>
        <input type="email" id="email" name="メールアドレス" required>
      </div>
      <br>

      <div>
        <label for="inquiry-type">お問い合わせ種類</label><br>
        <select id="inquiry-type" name="お問い合わせ種類" required>
          <option value="">選択してください</option>
          <option value="商品について">商品について</option>
          <option value="注文について">注文について</option>
          <option value="その他">その他</option>
        </select>
      </div>
      <br>

      <div>
        <label for="message">お問い合わせ内容</label><br>
        <textarea id="message" name="お問い合わせ内容" rows="5" required></textarea>
      </div>
      <br>

      <button type="submit">送信</button>
    </form>
  </section>
</main>

<?php get_footer(); ?>
