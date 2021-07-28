<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
<div class="row" id="customer_details">
	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

			<div class="col-12 col-md-12" style="padding: 0;">
				
				<?php do_action( 'woocommerce_checkout_billing' ); ?>
			
				<?php do_action( 'woocommerce_checkout_shipping' ); ?>
			</div>
		

		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

	<?php endif; ?>
	<div class="col-12 col-md-12">
	<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>
	
	
	<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

	<div id="order_review" class="woocommerce-checkout-review-order">
		<?php do_action( 'woocommerce_checkout_order_review' ); ?>
	</div>

	<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
</div>
</div>
</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>


<style>
    .woocommerce-checkout {
    	text-align: center !important;
    }
    #customer_details {
    	display: inline-block !important;
    	width: 320px !important;
    	margin: 0 auto 0 auto !important;
    }
    .woocommerce-billing-fields__field-wrapper label,
    .address-field label,
    .woocommerce-additional-fields h3 {
        display: none !important;
    }
    #page-wrapper .woocommerce form .form-row input, 
    #page-wrapper .woocommerce form .form-row textarea {
        width: 100% !important;
    	height: 29px;
        border: 1px solid #000000 !important;
        box-sizing: border-box !important;
        border-radius: 5px !important;
    	text-align: center !important;
    	padding-top: 0 !important;
    	padding-bottom: 0 !important;
    	line-height: 29px;
    	font-size: 12px;
    	color: #000000;
    }
    #page-wrapper .woocommerce-checkout span.select2-selection.select2-selection--single {
    	border: 1px solid #000000 !important;
    	height: 29px;
    }
    #page-wrapper .woocommerce-checkout .h2 {
        font-family: Standard Book;
        font-size: 12px;
        line-height: 14px;
        color: #000000;
    	margin-top: 45px !important;
    	margin-bottom: 20px !important;
    }
    #billing_first_name_field,
    #billing_city_field {
    	width: 147px !important;
    	float: left;
    }
    #billing_last_name_field,
    #billing_postcode_field {
    	width: 147px !important;
    	float: right;
    }
    #billing_email_field,
    #billing_country_field,
    #billing_city_field,
    #billing_postcode_field,
    #billing_address_1_field {
    	margin-bottom: 14px !important;
    }
    #billing_phone_field,
    #billing_first_name_field,
    #billing_last_name_field {
    	margin-bottom: 27px !important;
    }
</style>
<script>
	jQuery(document).ready(function() {
		jQuery('#shipping_method_new input').on('change', function() {
			console.log('222');
		   console.log(jQuery('input[name="shipping_method[123]"]:checked').val());
		});
		
	});
</script>
