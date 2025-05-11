<?php
defined( 'ABSPATH' ) || exit;
?>

<main class="cart-page">
  <h1>カート</h1>

  <?php if ( WC()->cart->is_empty() ) : ?>
    <p>現在カートに商品はありません。</p>
  <?php else : ?>

    <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

      <table class="cart-table">
        <thead>
          <tr>
            <th>商品</th>
            <th>数量</th>
            <th>小計</th>
            <th>削除</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
              $_product   = $cart_item['data'];
              $product_id = $cart_item['product_id'];
              if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 ) :
          ?>
            <tr>
              <td class="product-name">
                <?php echo wp_kses_post( $_product->get_image() ); ?>
                <span><?php echo wp_kses_post( $_product->get_name() ); ?></span>
              </td>

              <td class="product-quantity">
                <?php
                  echo woocommerce_quantity_input( array(
                    'input_name' => "cart[{$cart_item_key}][qty]",
                    'input_value' => $cart_item['quantity'],
                    'min_value'   => '0',
                    'product_name' => $_product->get_name(),
                  ), $_product, false );
                ?>
              </td>

              <td class="product-subtotal">
                <?php echo wc_price( $_product->get_price() * $cart_item['quantity'] ); ?>
              </td>

              <td class="product-remove">
                <?php
                  echo apply_filters( 'woocommerce_cart_item_remove_link',
                    sprintf(
                      '<a href="%s" class="remove" aria-label="%s">×</a>',
                      esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                      __( 'Remove this item', 'woocommerce' )
                    ),
                    $cart_item_key
                  );
                ?>
              </td>
            </tr>
          <?php endif; endforeach; ?>
        </tbody>
      </table>

      <div class="cart-totals">
        <p>小計: <?php wc_cart_totals_subtotal_html(); ?></p>
        <div class="cart-buttons">
          <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>">更新</button>
          <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button alt">購入手続きへ進む</a>
        </div>
      </div>

      <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
    </form>

  <?php endif; ?>
</main>
