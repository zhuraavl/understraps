<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $product_tabs ) ) : ?>

	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
			<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
				<li style="padding: 0 0.5em;" class="<?php echo esc_attr( $key ); ?>_tab" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
					<a href="#tab-<?php echo esc_attr( $key ); ?>">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
					</a>
				</li>
			<?php endforeach; ?>
			<?php 
			global  $post ;
			$prod_id = size_chart_get_product_chart_id( $post->ID );
			if($prod_id) {
			?>
			<li style="padding: 0 0.5em;">
					<p class="" id="chart-button">SIZE GUIDE</p>
            	<script>
            	(function($) {

            		$('.tabs #chart-button').click(function() {
            			var modal = document.getElementById('md-size-chart-modal');
            			modal.style.display = 'block';
            			$('.woocommerce div.product').css('z-index', '104');
            			$('.woocommerce-tabs').hide();
            		});
            		$('.outer-height-buy .button-wrapper').hide();
            		$('div#md-size-chart-modal .remodal-close').click(function() {
            			$('.woocommerce-tabs').show();
            			$('.woocommerce div.product').css('z-index', '100');
            		});

            		$('div.md-size-chart-overlay').click(function() {
            			$('.woocommerce-tabs').show();
            			$('.woocommerce div.product').css('z-index', '100');
            		});

            		
            	})(jQuery);
            	            	
            	</script>
            	<style>
            	.woocommerce div.product {
            		/*z-index: 104;*/
            	}
                .woocommerce div.product .woocommerce-tabs ul.tabs li p {
                    font-size: 12px;
                    font-weight: 400;
                	cursor: pointer;
                	display: inline-block !important;
                }
                .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
                    background: transparent !important;
                }
            	</style>
			</li>
			<?php 
			}
			?>
		</ul>
		
		
		
		<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
			<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr( $key ); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
				<?php
				if ( isset( $product_tab['callback'] ) ) {
					call_user_func( $product_tab['callback'], $key, $product_tab );
				}
				?>
			</div>
		<?php endforeach; ?>

		<?php do_action( 'woocommerce_product_after_tabs' ); ?>
	</div>

<?php endif; ?>
