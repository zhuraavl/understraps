<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.9.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>
<div id="new-woocommerce-cart-form">
<form class="woocommerce-cart-form"  action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>
	
	<table class="shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<tbody>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
						<td class="product-thumbnail">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
							printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
						}
						?>
						</td>
						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
						
						<?php 
    						$brands = wp_get_post_terms($_product->get_parent_id(), 'pwb-brand');
    					?>
    					<a href="/brand/<?php echo $brands[0]->slug ?>/" class="brand-name">
    						<?php 
    						    echo $brands[0]->name;
    						?>
    					</a>
						<br/>
						<?php
						if ( ! $product_permalink ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
						} else {
							echo str_replace(' - ', '<br/>', wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s" class="product-name-inner">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) ));
						}

						do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

						// Meta data.
						echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

						// Backorder notification.
						if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
							echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
						}
						?>
						
						
						<div class="q-price">
						<?php
						if ( $_product->is_sold_individually() ) {
							$product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
						} else {
							$product_quantity = woocommerce_quantity_input(
								array(
									'input_name'   => "cart[{$cart_item_key}][qty]",
									'input_value'  => $cart_item['quantity'],
									'max_value'    => $_product->get_max_purchase_quantity(),
									'min_value'    => '0',
									'product_name' => $_product->get_name(),
								),
								$_product,
								false
							);
						}

						echo $cart_item['quantity'] ; //apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
						?>
						<span>X</span>
						<?php
							echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
						?>
						<?php
							echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								'woocommerce_cart_item_remove_link',
								sprintf(
									'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">remove</a>',
									esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
									esc_html__( 'Remove this item', 'woocommerce' ),
									esc_attr( $product_id ),
									esc_attr( $_product->get_sku() )
								),
								$cart_item_key
							);
						?>
						</div>
						
						</td>


					</tr>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

			<tr>
				<td colspan="6" class="actions">

					<?php if ( wc_coupons_enabled() ) { ?>
						<div class="coupon">
							<label for="coupon_code"><?php esc_html_e( 'Coupon:', 'woocommerce' ); ?></label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>"><?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?></button>
							<?php do_action( 'woocommerce_cart_coupon' ); ?>
						</div>
					<?php } ?>

					<button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Update cart', 'woocommerce' ); ?></button>

					<?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
				</td>
			</tr>

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
	<?php do_action( 'woocommerce_after_cart_table' ); ?>
	
<table class="shop_table woocommerce-checkout-subtotal-order-table">
	<tfoot>

		<tr class="cart-subtotal">
			<th><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
			<td style="text-align: right;"><?php wc_cart_totals_subtotal_html(); ?></td>
		</tr>

		<?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
			<tr class="cart-discount coupon-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
				<th><?php wc_cart_totals_coupon_label( $coupon ); ?></th>
				<td style="text-align: right;"><?php wc_cart_totals_coupon_html( $coupon ); ?></td>
			</tr>
		<?php endforeach; ?>
		<tr class="woocommerce-shipping-totals shipping">
    		<th>Shipping</th>
    		<td data-title="Shipping" style="text-align: right;">
    			Calculated at Checkout
    		</td>
    	</tr>

		<?php foreach ( WC()->cart->get_fees() as $fee ) : ?>
			<tr class="fee">
				<th><?php echo esc_html( $fee->name ); ?></th>
				<td style="text-align: right;"><?php wc_cart_totals_fee_html( $fee ); ?></td>
			</tr>
		<?php endforeach; ?>

		<?php if ( wc_tax_enabled() && ! WC()->cart->display_prices_including_tax() ) : ?>
			<?php if ( 'itemized' === get_option( 'woocommerce_tax_total_display' ) ) : ?>
				<?php foreach ( WC()->cart->get_tax_totals() as $code => $tax ) : // phpcs:ignore WordPress.WP.GlobalVariablesOverride.OverrideProhibited ?>
					<tr class="tax-rate tax-rate-<?php echo esc_attr( sanitize_title( $code ) ); ?>">
						<th><?php echo esc_html( $tax->label ); ?></th>
						<td style="text-align: right;"><?php echo wp_kses_post( $tax->formatted_amount ); ?></td>
					</tr>
				<?php endforeach; ?>
			<?php else : ?>
				<tr class="tax-total">
					<th><?php echo esc_html( WC()->countries->tax_or_vat() ); ?></th>
					<td style="text-align: right;"><?php wc_cart_totals_taxes_total_html(); ?></td>
				</tr>
			<?php endif; ?>
		<?php endif; ?>

		<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

		<tr class="order-total">
			<th><?php esc_html_e( 'Total', 'woocommerce' ); ?></th>
			<td style="text-align: right;"><?php wc_cart_totals_order_total_html(); ?></td>
		</tr>

		<?php do_action( 'woocommerce_review_order_after_order_total' ); ?>

	</tfoot>
</table>

	<p class="cart-enter-email">Enter your email to login or continue to<br/>checkout as a guest.</p>
	<?php 
	   $mail = '';
	   if(isset($_COOKIE['cartemail'])) {
	       $mail = $_COOKIE['cartemail'];
	   }
	?>
	
	<input class="cart-input-email" form="test"  type="email" placeholder="Your email..." value="<?php echo $mail ?>" onchange="jQuery.cookie('cartemail', jQuery(this).val(), { expires: 7, path: '/' });" />
	
<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="checkout-button button alt wc-forward">
	<?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?>
</a>
<a href="/my-account/orders/" class="cart-have-account">I HAVE ACCOUNT</a>


<style>
    #new-woocommerce-cart-form table.cart .product-thumbnail img {
    	max-width: 156px !important;
    	max-height: 152px !important;
    	border-radius: 15px;
    }
    #new-woocommerce-cart-form table.cart .product-thumbnail a {
    	display: inline-block;
    	border: 1px solid rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        border-radius: 15px;
    	width: 158px !important;
    	height: 154px !important;
    	text-align: center;
    	margin-right: 15px;
    }
    #new-woocommerce-cart-form table.cart .product-thumbnail {
    	padding-left: 0 !important;
    	padding-right: 0 !important;
    }
    #new-woocommerce-cart-form table.cart .product-name {
    	text-align: center;
    	position: relative;
    	vertical-align: top !important;
    	adding-left: 0 !important;
    	padding-right: 0 !important;
    }
    #new-woocommerce-cart-form table.cart .product-name .brand-name {
    	font-family: Standard Book;
        font-size: 12px;
        line-height: 14px;
        color: #000000;
    }
    #new-woocommerce-cart-form table.cart .product-name .product-name-inner {
    	font-family: Standard Book;
        font-size: 12px;
        line-height: 14px;
        color: #000000;
    }
    #new-woocommerce-cart-form table.cart .product-name .q-price {
    	position: absolute;
    	top: 115px;
    	width: 94%;
        text-align: center;
    }
    #new-woocommerce-cart-form table.cart .product-name .q-price .quantity {
    	width: auto;
    	display: inline-block;
    }
    #new-woocommerce-cart-form table.cart .product-name .q-price,
    #new-woocommerce-cart-form table.cart .product-name .q-price span,
    #new-woocommerce-cart-form table.cart .product-name .q-price .woocommerce-Price-amount bdi {
    	font-family: Standard Book;
        font-size: 12px;
        line-height: 14px;
        color: #000000;
    }
    #new-woocommerce-cart-form table.cart .product-name .q-price a.remove {
    	font-family: Standard Book;
        font-size: 10px;
        line-height: 12px;
        text-transform: uppercase;
        color: #000000 !important;
        opacity: 0.5;
    	height: auto !important;
    	width: 100% !important;
    	margin-top: 5px !important;
    }
    #new-woocommerce-cart-form table.cart .product-name .q-price  a.remove:hover {
    	background: transparent !important;
    }
    #new-woocommerce-cart-form .woocommerce-cart-form {
    	width: 320px;
    	margin: auto;
    	text-align: center;
    }
    #new-woocommerce-cart-form .woocommerce-cart-form__cart-item {
    	border-bottom: 0px solid transparent !important;
    }
    .woocommerce-checkout-review-order-table .product-total {
	    font-family: Standard Book;
        font-size: 12px !important;
        line-height: 14px;
        color: #000000;
    	width: 50px;
        padding-right: 0px !important;
        text-align: right;
    	border-top: 0px solid #000 !important;
    }
    .woocommerce-checkout-subtotal-order-table td,
    .woocommerce-checkout-subtotal-order-table th {
    	font-family: Standard Book;
        font-size: 12px !important;
        line-height: 14px !important;
        color: #000000;
    	padding: 0 0 7px 0 !important;
    	border: 0px solid transparent !important;
    }
    #new-woocommerce-cart-form .checkout-button {
    	width: 215px !important;
        height: 40px !important;
        background: #000000 !important;
        border: 1px solid #000000 !important;
        box-sizing: border-box !important;
        border-radius: 50px !important;
    	font-family: Standard Book !important;
        font-size: 12px !important;
        line-height: 14px !important;
        text-align: center !important;
        color: #FFFFFF !important;
    	margin : auto !important;
    	float: none !important;
    	text-transform: uppercase !important;
    }
    #new-woocommerce-cart-form .woocommerce-cart-form__contents {
    	width: 100% !important;
    }
    #new-woocommerce-cart-form .woocommerce-cart-form__contents td {
    	padding: 10px 0 10px 0 !important;
    }
    #new-woocommerce-cart-form .cart-enter-email {
    	font-family: Standard Book;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        line-height: 14px;
        text-align: center;
        color: #000000;
    }
    #new-woocommerce-cart-form .cart-input-email {
        opacity: 0.5;
        border: 1px solid #000000;
        box-sizing: border-box;
        border-radius: 5px;
    	margin-bottom: 20px;
    	text-align: center;
    	width: 100%;
    	height: 35px;
    	line-height: 35px;
    	font-family: Standard Book;
        font-size: 14px;
        line-height: 17px;
        color: #000000;
    }
    #new-woocommerce-cart-form .cart-have-account {
        display: block;
    	margin: 15px 0 0 0;
    }

</style>
</form>	
</div>

<?php do_action( 'woocommerce_before_cart_collaterals' ); ?>



<?php do_action( 'woocommerce_after_cart' ); ?>

