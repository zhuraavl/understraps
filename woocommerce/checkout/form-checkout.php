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
	<div class="col-12 col-md-12" style="padding: 0;">
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
    .woocommerce-additional-fields h3,
    .payment_method_fondy img,
    .payment_method_paypal img {
        display: none !important;
    }
    #add_payment_method #payment ul.payment_methods li input, .woocommerce-cart #payment ul.payment_methods li input, .woocommerce-checkout #payment ul.payment_methods li input {
    	margin: 0 !important;
        display: inline-block;
        vertical-align: baseline;
    }
    #page-wrapper .woocommerce form .form-row input, 
    #page-wrapper .woocommerce form .form-row textarea {
        width: 100% !important;
    	height: 35px;
        border: 1px solid #000000 !important;
        box-sizing: border-box !important;
        border-radius: 5px !important;
    	text-align: center !important;
    	padding-top: 0 !important;
    	padding-bottom: 0 !important;
    	line-height: 37px !important;
    	font-size: 12px;
    	color: #000000;
    }
    #page-wrapper .woocommerce form .form-row textarea {
      height: 55px;
      padding: 15px 0 !important;
      line-height: 15px !important;
    }
    #page-wrapper .woocommerce-checkout span.select2-selection.select2-selection--single {
    	border: 1px solid #000000 !important;
    	height: 35px;
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
    	width: 155px !important;
    	float: left;
    }
    #billing_last_name_field,
    #billing_postcode_field {
    	width: 155px !important;
    	float: right;
    }
    #billing_email_field,
    #billing_city_field,
    #billing_postcode_field,
    #billing_address_1_field {
    	margin-bottom: 5px !important;
    }
    #billing_country_field {
      margin-bottom: 10px;
    }
    #billing_phone_field,
    #billing_first_name_field,
    #billing_last_name_field {
    	margin-bottom: 10px !important;
    }
    #order_comments_field {
    	margin-bottom: 0 !important;
    }
    #payment {
    	padding-top: 0 !important;
    }
    input[type='radio']:after {
        width: 20px;
        height: 20px;
        border-radius: 14px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: white;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 1px solid #000000;
    }
    input[type='radio']:checked:after {
        width: 20px;
        height: 20px;
        border-radius: 14px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #000000;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 1px solid #000000;
    	-webkit-box-shadow:inset 0px 0px 0px 3px white;
        -moz-box-shadow:inset 0px 0px 0px 3px white;
        box-shadow:inset 0px 0px 0px 3px white;
    }
    input[type='radio'] + label {
    	font-family: Standard Book;
        font-size: 12px;
        line-height: 22px;
        color: #000000;
    	margin-left: 10px;
        margin-bottom: 0;
    	
    	display: inline-block !important;
   }
    #shipping_method > li,
    .wc_payment_methods > li {
    	margin-bottom: 13px !important;
    	text-align :center !important;
    }
    .payment_method_fondy label {
    	background: url(/wp-content/themes/understraps/pic/visa.svg) 100% 50% no-repeat;
    	padding-right: 60px;
    }
    .payment_method_paypal label {
    	background: url(/wp-content/themes/understraps/pic/paypal.svg) 100% 50% no-repeat;
    	padding-right: 50px;
    }
    .wc_payment_methods  label,
    .woocommerce-shipping-methods  label {
    	min-width: 100px;
    	text-align: left;
    }
    .f-container .input-label {
    	text-align: left;
    	font-family: Standard Book;
        font-size: 10px !important;
        line-height: 12px;
        color: #000000 !important;
        opacity: 0.4;
    }
    .woocommerce-checkout-review-order-table {
    	width: 51px;
        height: 51px;
        
        border: 1px solid #000000;
        box-sizing: border-box;
        border-radius: 7px;
    	float: left;
    	margin-right: 12px;
        opacity: 1 !important;
    	
    }
    .woocommerce-checkout-review-order-table img {
      opacity: 1 !important;
      width: 51px !important;
    }
    .woocommerce-checkout-review-order-table td {
    	border-top: 0px solid #000 !important;
    }
    .woocommerce-checkout-review-order-table .brand-name {
    	font-family: ZIGZAG-NotRounded;
        font-size: 12px;
        line-height: 14px;
        color: #000000;
    	text-decoration: none !important;
    }
    .woocommerce-checkout-review-order-table .product-name {
    	font-family: Standard Book;
        font-size: 12px;
        line-height: 14px;
        color: #000000;
    	text-decoration: none !important;
    	padding-left: 0 !important;
    }
    .select2-container--default .select2-results__option[aria-selected=true], .select2-container--default .select2-results__option[data-selected=true] {
      padding-left: 0;
  }
  .select2-search select2-search--dropdown {
    display: none
  }
    .woocommerce-checkout-review-order-table .woocommerce-Price-amount {
	    font-family: Standard Book;
        font-size: 12px;
        line-height: 14px;
        color: #000000;
        opacity: 0.5;
    }
  .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 32px;
    padding: 0;
    padding-top: 3px;
  }
  .woocommerce ul#shipping_method li label {
    font-size: 12px;
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
    body .woocommerce-checkout-subtotal-order-table label {
    	margin-bottom: 0 !important;
    	font-family: Standard Book;
        font-size: 12px !important;
        line-height: 14px !important;
    }
    .woocommerce-privacy-policy-text {
    	font-family: Standard Book;
        font-size: 10px;
        line-height: 12px;
        color: #000000;
        opacity: 0.5;
    	text-align: left;
    }
    #page-wrapper .validate-required .woocommerce-form__input-checkbox {
    	width: 14px !important;
        height: 14px !important;
        border: 1px solid #000000 !important;
        box-sizing: border-box !important;
    	float: left !important;
    	margin: 2px 12px 20px 0 !important;
    	display: inline-block !important;
    	width: 14px !important;
    }
    .woocommerce-terms-and-conditions-checkbox-text {
    	font-family: Standard Book;
        font-size: 12px;
        line-height: 14px;
        color: #000000;
    	text-align: left;
    	width: 85%;
    	display: inline-block;
    }
    
    
    
    
    
.iti {
  position: relative;
  display: inline-block; }
  .iti * {
    box-sizing: border-box;
    -moz-box-sizing: border-box; }
  .iti__hide {
    display: none; }
  .iti__v-hide {
    visibility: hidden; }
  .iti input, .iti input[type=text], .iti input[type=tel] {
    position: relative;
    z-index: 0;
    margin-top: 0 !important;
    margin-bottom: 0 !important;
    padding-right: 36px;
    margin-right: 0; }
  .iti__flag-container {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    padding: 1px; }
  .iti__selected-flag {
    z-index: 1;
    position: relative;
    display: flex;
    align-items: center;
    height: 100%;
    padding: 0 6px 0 8px; }
  .iti__arrow {
    margin-left: 6px;
    width: 0;
    height: 0;
    border-left: 3px solid transparent;
    border-right: 3px solid transparent;
    border-top: 4px solid #555; }
    .iti__arrow--up {
      border-top: none;
      border-bottom: 4px solid #555; }
  .iti__country-list {
    position: absolute;
    z-index: 2;
    list-style: none;
    text-align: left;
    padding: 0;
    margin: 0 0 0 -1px;
    box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
    background-color: white;
    border: 1px solid #CCC;
    white-space: nowrap;
    max-height: 200px;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch; }
    .iti__country-list--dropup {
      bottom: 100%;
      margin-bottom: -1px; }
    @media (max-width: 500px) {
      .iti__country-list {
        white-space: normal; } }
  .iti__flag-box {
    display: inline-block;
    width: 20px; }
  .iti__divider {
    padding-bottom: 5px;
    margin-bottom: 5px;
    border-bottom: 1px solid #CCC; }
  .iti__country {
    padding: 5px 10px;
    outline: none; }
  .iti__dial-code {
    color: #999; }
  .iti__country.iti__highlight {
    background-color: rgba(0, 0, 0, 0.05); }
  .iti__flag-box, .iti__country-name, .iti__dial-code {
    vertical-align: middle; }
  .iti__flag-box, .iti__country-name {
    margin-right: 6px; }
  .iti--allow-dropdown input, .iti--allow-dropdown input[type=text], .iti--allow-dropdown input[type=tel], .iti--separate-dial-code input, .iti--separate-dial-code input[type=text], .iti--separate-dial-code input[type=tel] {
    padding-right: 6px;
    padding-left: 52px;
    margin-left: 0; }
  .iti--allow-dropdown .iti__flag-container, .iti--separate-dial-code .iti__flag-container {
    right: auto;
    left: 0; }
  .iti--allow-dropdown .iti__flag-container:hover {
    cursor: pointer; }
    .iti--allow-dropdown .iti__flag-container:hover .iti__selected-flag {
      background-color: rgba(0, 0, 0, 0.05); }
  .iti--allow-dropdown input[disabled] + .iti__flag-container:hover,
  .iti--allow-dropdown input[readonly] + .iti__flag-container:hover {
    cursor: default; }
    .iti--allow-dropdown input[disabled] + .iti__flag-container:hover .iti__selected-flag,
    .iti--allow-dropdown input[readonly] + .iti__flag-container:hover .iti__selected-flag {
      background-color: transparent; }
  .iti--separate-dial-code .iti__selected-flag {
    background-color: rgba(0, 0, 0, 0.05); }
  .iti--separate-dial-code .iti__selected-dial-code {
    margin-left: 6px; }
  .iti--container {
    position: absolute;
    top: -1000px;
    left: -1000px;
    z-index: 1060;
    padding: 1px; }
    .iti--container:hover {
      cursor: pointer; }

.iti-mobile .iti--container {
  top: 30px;
  bottom: 30px;
  left: 30px;
  right: 30px;
  position: fixed; }

.iti-mobile .iti__country-list {
  max-height: 100%;
  width: 100%; }

.iti-mobile .iti__country {
  padding: 10px 10px;
  line-height: 1.5em; }

.iti__flag {
  width: 20px; }
  .iti__flag.iti__be {
    width: 18px; }
  .iti__flag.iti__ch {
    width: 15px; }
  .iti__flag.iti__mc {
    width: 19px; }
  .iti__flag.iti__ne {
    width: 18px; }
  .iti__flag.iti__np {
    width: 13px; }
  .iti__flag.iti__va {
    width: 15px; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .iti__flag {
      background-size: 5652px 15px; } }
  .iti__flag.iti__ac {
    height: 10px;
    background-position: 0px 0px; }
  .iti__flag.iti__ad {
    height: 14px;
    background-position: -22px 0px; }
  .iti__flag.iti__ae {
    height: 10px;
    background-position: -44px 0px; }
  .iti__flag.iti__af {
    height: 14px;
    background-position: -66px 0px; }
  .iti__flag.iti__ag {
    height: 14px;
    background-position: -88px 0px; }
  .iti__flag.iti__ai {
    height: 10px;
    background-position: -110px 0px; }
  .iti__flag.iti__al {
    height: 15px;
    background-position: -132px 0px; }
  .iti__flag.iti__am {
    height: 10px;
    background-position: -154px 0px; }
  .iti__flag.iti__ao {
    height: 14px;
    background-position: -176px 0px; }
  .iti__flag.iti__aq {
    height: 14px;
    background-position: -198px 0px; }
  .iti__flag.iti__ar {
    height: 13px;
    background-position: -220px 0px; }
  .iti__flag.iti__as {
    height: 10px;
    background-position: -242px 0px; }
  .iti__flag.iti__at {
    height: 14px;
    background-position: -264px 0px; }
  .iti__flag.iti__au {
    height: 10px;
    background-position: -286px 0px; }
  .iti__flag.iti__aw {
    height: 14px;
    background-position: -308px 0px; }
  .iti__flag.iti__ax {
    height: 13px;
    background-position: -330px 0px; }
  .iti__flag.iti__az {
    height: 10px;
    background-position: -352px 0px; }
  .iti__flag.iti__ba {
    height: 10px;
    background-position: -374px 0px; }
  .iti__flag.iti__bb {
    height: 14px;
    background-position: -396px 0px; }
  .iti__flag.iti__bd {
    height: 12px;
    background-position: -418px 0px; }
  .iti__flag.iti__be {
    height: 15px;
    background-position: -440px 0px; }
  .iti__flag.iti__bf {
    height: 14px;
    background-position: -460px 0px; }
  .iti__flag.iti__bg {
    height: 12px;
    background-position: -482px 0px; }
  .iti__flag.iti__bh {
    height: 12px;
    background-position: -504px 0px; }
  .iti__flag.iti__bi {
    height: 12px;
    background-position: -526px 0px; }
  .iti__flag.iti__bj {
    height: 14px;
    background-position: -548px 0px; }
  .iti__flag.iti__bl {
    height: 14px;
    background-position: -570px 0px; }
  .iti__flag.iti__bm {
    height: 10px;
    background-position: -592px 0px; }
  .iti__flag.iti__bn {
    height: 10px;
    background-position: -614px 0px; }
  .iti__flag.iti__bo {
    height: 14px;
    background-position: -636px 0px; }
  .iti__flag.iti__bq {
    height: 14px;
    background-position: -658px 0px; }
  .iti__flag.iti__br {
    height: 14px;
    background-position: -680px 0px; }
  .iti__flag.iti__bs {
    height: 10px;
    background-position: -702px 0px; }
  .iti__flag.iti__bt {
    height: 14px;
    background-position: -724px 0px; }
  .iti__flag.iti__bv {
    height: 15px;
    background-position: -746px 0px; }
  .iti__flag.iti__bw {
    height: 14px;
    background-position: -768px 0px; }
  .iti__flag.iti__by {
    height: 10px;
    background-position: -790px 0px; }
  .iti__flag.iti__bz {
    height: 14px;
    background-position: -812px 0px; }
  .iti__flag.iti__ca {
    height: 10px;
    background-position: -834px 0px; }
  .iti__flag.iti__cc {
    height: 10px;
    background-position: -856px 0px; }
  .iti__flag.iti__cd {
    height: 15px;
    background-position: -878px 0px; }
  .iti__flag.iti__cf {
    height: 14px;
    background-position: -900px 0px; }
  .iti__flag.iti__cg {
    height: 14px;
    background-position: -922px 0px; }
  .iti__flag.iti__ch {
    height: 15px;
    background-position: -944px 0px; }
  .iti__flag.iti__ci {
    height: 14px;
    background-position: -961px 0px; }
  .iti__flag.iti__ck {
    height: 10px;
    background-position: -983px 0px; }
  .iti__flag.iti__cl {
    height: 14px;
    background-position: -1005px 0px; }
  .iti__flag.iti__cm {
    height: 14px;
    background-position: -1027px 0px; }
  .iti__flag.iti__cn {
    height: 14px;
    background-position: -1049px 0px; }
  .iti__flag.iti__co {
    height: 14px;
    background-position: -1071px 0px; }
  .iti__flag.iti__cp {
    height: 14px;
    background-position: -1093px 0px; }
  .iti__flag.iti__cr {
    height: 12px;
    background-position: -1115px 0px; }
  .iti__flag.iti__cu {
    height: 10px;
    background-position: -1137px 0px; }
  .iti__flag.iti__cv {
    height: 12px;
    background-position: -1159px 0px; }
  .iti__flag.iti__cw {
    height: 14px;
    background-position: -1181px 0px; }
  .iti__flag.iti__cx {
    height: 10px;
    background-position: -1203px 0px; }
  .iti__flag.iti__cy {
    height: 14px;
    background-position: -1225px 0px; }
  .iti__flag.iti__cz {
    height: 14px;
    background-position: -1247px 0px; }
  .iti__flag.iti__de {
    height: 12px;
    background-position: -1269px 0px; }
  .iti__flag.iti__dg {
    height: 10px;
    background-position: -1291px 0px; }
  .iti__flag.iti__dj {
    height: 14px;
    background-position: -1313px 0px; }
  .iti__flag.iti__dk {
    height: 15px;
    background-position: -1335px 0px; }
  .iti__flag.iti__dm {
    height: 10px;
    background-position: -1357px 0px; }
  .iti__flag.iti__do {
    height: 14px;
    background-position: -1379px 0px; }
  .iti__flag.iti__dz {
    height: 14px;
    background-position: -1401px 0px; }
  .iti__flag.iti__ea {
    height: 14px;
    background-position: -1423px 0px; }
  .iti__flag.iti__ec {
    height: 14px;
    background-position: -1445px 0px; }
  .iti__flag.iti__ee {
    height: 13px;
    background-position: -1467px 0px; }
  .iti__flag.iti__eg {
    height: 14px;
    background-position: -1489px 0px; }
  .iti__flag.iti__eh {
    height: 10px;
    background-position: -1511px 0px; }
  .iti__flag.iti__er {
    height: 10px;
    background-position: -1533px 0px; }
  .iti__flag.iti__es {
    height: 14px;
    background-position: -1555px 0px; }
  .iti__flag.iti__et {
    height: 10px;
    background-position: -1577px 0px; }
  .iti__flag.iti__eu {
    height: 14px;
    background-position: -1599px 0px; }
  .iti__flag.iti__fi {
    height: 12px;
    background-position: -1621px 0px; }
  .iti__flag.iti__fj {
    height: 10px;
    background-position: -1643px 0px; }
  .iti__flag.iti__fk {
    height: 10px;
    background-position: -1665px 0px; }
  .iti__flag.iti__fm {
    height: 11px;
    background-position: -1687px 0px; }
  .iti__flag.iti__fo {
    height: 15px;
    background-position: -1709px 0px; }
  .iti__flag.iti__fr {
    height: 14px;
    background-position: -1731px 0px; }
  .iti__flag.iti__ga {
    height: 15px;
    background-position: -1753px 0px; }
  .iti__flag.iti__gb {
    height: 10px;
    background-position: -1775px 0px; }
  .iti__flag.iti__gd {
    height: 12px;
    background-position: -1797px 0px; }
  .iti__flag.iti__ge {
    height: 14px;
    background-position: -1819px 0px; }
  .iti__flag.iti__gf {
    height: 14px;
    background-position: -1841px 0px; }
  .iti__flag.iti__gg {
    height: 14px;
    background-position: -1863px 0px; }
  .iti__flag.iti__gh {
    height: 14px;
    background-position: -1885px 0px; }
  .iti__flag.iti__gi {
    height: 10px;
    background-position: -1907px 0px; }
  .iti__flag.iti__gl {
    height: 14px;
    background-position: -1929px 0px; }
  .iti__flag.iti__gm {
    height: 14px;
    background-position: -1951px 0px; }
  .iti__flag.iti__gn {
    height: 14px;
    background-position: -1973px 0px; }
  .iti__flag.iti__gp {
    height: 14px;
    background-position: -1995px 0px; }
  .iti__flag.iti__gq {
    height: 14px;
    background-position: -2017px 0px; }
  .iti__flag.iti__gr {
    height: 14px;
    background-position: -2039px 0px; }
  .iti__flag.iti__gs {
    height: 10px;
    background-position: -2061px 0px; }
  .iti__flag.iti__gt {
    height: 13px;
    background-position: -2083px 0px; }
  .iti__flag.iti__gu {
    height: 11px;
    background-position: -2105px 0px; }
  .iti__flag.iti__gw {
    height: 10px;
    background-position: -2127px 0px; }
  .iti__flag.iti__gy {
    height: 12px;
    background-position: -2149px 0px; }
  .iti__flag.iti__hk {
    height: 14px;
    background-position: -2171px 0px; }
  .iti__flag.iti__hm {
    height: 10px;
    background-position: -2193px 0px; }
  .iti__flag.iti__hn {
    height: 10px;
    background-position: -2215px 0px; }
  .iti__flag.iti__hr {
    height: 10px;
    background-position: -2237px 0px; }
  .iti__flag.iti__ht {
    height: 12px;
    background-position: -2259px 0px; }
  .iti__flag.iti__hu {
    height: 10px;
    background-position: -2281px 0px; }
  .iti__flag.iti__ic {
    height: 14px;
    background-position: -2303px 0px; }
  .iti__flag.iti__id {
    height: 14px;
    background-position: -2325px 0px; }
  .iti__flag.iti__ie {
    height: 10px;
    background-position: -2347px 0px; }
  .iti__flag.iti__il {
    height: 15px;
    background-position: -2369px 0px; }
  .iti__flag.iti__im {
    height: 10px;
    background-position: -2391px 0px; }
  .iti__flag.iti__in {
    height: 14px;
    background-position: -2413px 0px; }
  .iti__flag.iti__io {
    height: 10px;
    background-position: -2435px 0px; }
  .iti__flag.iti__iq {
    height: 14px;
    background-position: -2457px 0px; }
  .iti__flag.iti__ir {
    height: 12px;
    background-position: -2479px 0px; }
  .iti__flag.iti__is {
    height: 15px;
    background-position: -2501px 0px; }
  .iti__flag.iti__it {
    height: 14px;
    background-position: -2523px 0px; }
  .iti__flag.iti__je {
    height: 12px;
    background-position: -2545px 0px; }
  .iti__flag.iti__jm {
    height: 10px;
    background-position: -2567px 0px; }
  .iti__flag.iti__jo {
    height: 10px;
    background-position: -2589px 0px; }
  .iti__flag.iti__jp {
    height: 14px;
    background-position: -2611px 0px; }
  .iti__flag.iti__ke {
    height: 14px;
    background-position: -2633px 0px; }
  .iti__flag.iti__kg {
    height: 12px;
    background-position: -2655px 0px; }
  .iti__flag.iti__kh {
    height: 13px;
    background-position: -2677px 0px; }
  .iti__flag.iti__ki {
    height: 10px;
    background-position: -2699px 0px; }
  .iti__flag.iti__km {
    height: 12px;
    background-position: -2721px 0px; }
  .iti__flag.iti__kn {
    height: 14px;
    background-position: -2743px 0px; }
  .iti__flag.iti__kp {
    height: 10px;
    background-position: -2765px 0px; }
  .iti__flag.iti__kr {
    height: 14px;
    background-position: -2787px 0px; }
  .iti__flag.iti__kw {
    height: 10px;
    background-position: -2809px 0px; }
  .iti__flag.iti__ky {
    height: 10px;
    background-position: -2831px 0px; }
  .iti__flag.iti__kz {
    height: 10px;
    background-position: -2853px 0px; }
  .iti__flag.iti__la {
    height: 14px;
    background-position: -2875px 0px; }
  .iti__flag.iti__lb {
    height: 14px;
    background-position: -2897px 0px; }
  .iti__flag.iti__lc {
    height: 10px;
    background-position: -2919px 0px; }
  .iti__flag.iti__li {
    height: 12px;
    background-position: -2941px 0px; }
  .iti__flag.iti__lk {
    height: 10px;
    background-position: -2963px 0px; }
  .iti__flag.iti__lr {
    height: 11px;
    background-position: -2985px 0px; }
  .iti__flag.iti__ls {
    height: 14px;
    background-position: -3007px 0px; }
  .iti__flag.iti__lt {
    height: 12px;
    background-position: -3029px 0px; }
  .iti__flag.iti__lu {
    height: 12px;
    background-position: -3051px 0px; }
  .iti__flag.iti__lv {
    height: 10px;
    background-position: -3073px 0px; }
  .iti__flag.iti__ly {
    height: 10px;
    background-position: -3095px 0px; }
  .iti__flag.iti__ma {
    height: 14px;
    background-position: -3117px 0px; }
  .iti__flag.iti__mc {
    height: 15px;
    background-position: -3139px 0px; }
  .iti__flag.iti__md {
    height: 10px;
    background-position: -3160px 0px; }
  .iti__flag.iti__me {
    height: 10px;
    background-position: -3182px 0px; }
  .iti__flag.iti__mf {
    height: 14px;
    background-position: -3204px 0px; }
  .iti__flag.iti__mg {
    height: 14px;
    background-position: -3226px 0px; }
  .iti__flag.iti__mh {
    height: 11px;
    background-position: -3248px 0px; }
  .iti__flag.iti__mk {
    height: 10px;
    background-position: -3270px 0px; }
  .iti__flag.iti__ml {
    height: 14px;
    background-position: -3292px 0px; }
  .iti__flag.iti__mm {
    height: 14px;
    background-position: -3314px 0px; }
  .iti__flag.iti__mn {
    height: 10px;
    background-position: -3336px 0px; }
  .iti__flag.iti__mo {
    height: 14px;
    background-position: -3358px 0px; }
  .iti__flag.iti__mp {
    height: 10px;
    background-position: -3380px 0px; }
  .iti__flag.iti__mq {
    height: 14px;
    background-position: -3402px 0px; }
  .iti__flag.iti__mr {
    height: 14px;
    background-position: -3424px 0px; }
  .iti__flag.iti__ms {
    height: 10px;
    background-position: -3446px 0px; }
  .iti__flag.iti__mt {
    height: 14px;
    background-position: -3468px 0px; }
  .iti__flag.iti__mu {
    height: 14px;
    background-position: -3490px 0px; }
  .iti__flag.iti__mv {
    height: 14px;
    background-position: -3512px 0px; }
  .iti__flag.iti__mw {
    height: 14px;
    background-position: -3534px 0px; }
  .iti__flag.iti__mx {
    height: 12px;
    background-position: -3556px 0px; }
  .iti__flag.iti__my {
    height: 10px;
    background-position: -3578px 0px; }
  .iti__flag.iti__mz {
    height: 14px;
    background-position: -3600px 0px; }
  .iti__flag.iti__na {
    height: 14px;
    background-position: -3622px 0px; }
  .iti__flag.iti__nc {
    height: 10px;
    background-position: -3644px 0px; }
  .iti__flag.iti__ne {
    height: 15px;
    background-position: -3666px 0px; }
  .iti__flag.iti__nf {
    height: 10px;
    background-position: -3686px 0px; }
  .iti__flag.iti__ng {
    height: 10px;
    background-position: -3708px 0px; }
  .iti__flag.iti__ni {
    height: 12px;
    background-position: -3730px 0px; }
  .iti__flag.iti__nl {
    height: 14px;
    background-position: -3752px 0px; }
  .iti__flag.iti__no {
    height: 15px;
    background-position: -3774px 0px; }
  .iti__flag.iti__np {
    height: 15px;
    background-position: -3796px 0px; }
  .iti__flag.iti__nr {
    height: 10px;
    background-position: -3811px 0px; }
  .iti__flag.iti__nu {
    height: 10px;
    background-position: -3833px 0px; }
  .iti__flag.iti__nz {
    height: 10px;
    background-position: -3855px 0px; }
  .iti__flag.iti__om {
    height: 10px;
    background-position: -3877px 0px; }
  .iti__flag.iti__pa {
    height: 14px;
    background-position: -3899px 0px; }
  .iti__flag.iti__pe {
    height: 14px;
    background-position: -3921px 0px; }
  .iti__flag.iti__pf {
    height: 14px;
    background-position: -3943px 0px; }
  .iti__flag.iti__pg {
    height: 15px;
    background-position: -3965px 0px; }
  .iti__flag.iti__ph {
    height: 10px;
    background-position: -3987px 0px; }
  .iti__flag.iti__pk {
    height: 14px;
    background-position: -4009px 0px; }
  .iti__flag.iti__pl {
    height: 13px;
    background-position: -4031px 0px; }
  .iti__flag.iti__pm {
    height: 14px;
    background-position: -4053px 0px; }
  .iti__flag.iti__pn {
    height: 10px;
    background-position: -4075px 0px; }
  .iti__flag.iti__pr {
    height: 14px;
    background-position: -4097px 0px; }
  .iti__flag.iti__ps {
    height: 10px;
    background-position: -4119px 0px; }
  .iti__flag.iti__pt {
    height: 14px;
    background-position: -4141px 0px; }
  .iti__flag.iti__pw {
    height: 13px;
    background-position: -4163px 0px; }
  .iti__flag.iti__py {
    height: 11px;
    background-position: -4185px 0px; }
  .iti__flag.iti__qa {
    height: 8px;
    background-position: -4207px 0px; }
  .iti__flag.iti__re {
    height: 14px;
    background-position: -4229px 0px; }
  .iti__flag.iti__ro {
    height: 14px;
    background-position: -4251px 0px; }
  .iti__flag.iti__rs {
    height: 14px;
    background-position: -4273px 0px; }
  .iti__flag.iti__ru {
    height: 14px;
    background-position: -4295px 0px; }
  .iti__flag.iti__rw {
    height: 14px;
    background-position: -4317px 0px; }
  .iti__flag.iti__sa {
    height: 14px;
    background-position: -4339px 0px; }
  .iti__flag.iti__sb {
    height: 10px;
    background-position: -4361px 0px; }
  .iti__flag.iti__sc {
    height: 10px;
    background-position: -4383px 0px; }
  .iti__flag.iti__sd {
    height: 10px;
    background-position: -4405px 0px; }
  .iti__flag.iti__se {
    height: 13px;
    background-position: -4427px 0px; }
  .iti__flag.iti__sg {
    height: 14px;
    background-position: -4449px 0px; }
  .iti__flag.iti__sh {
    height: 10px;
    background-position: -4471px 0px; }
  .iti__flag.iti__si {
    height: 10px;
    background-position: -4493px 0px; }
  .iti__flag.iti__sj {
    height: 15px;
    background-position: -4515px 0px; }
  .iti__flag.iti__sk {
    height: 14px;
    background-position: -4537px 0px; }
  .iti__flag.iti__sl {
    height: 14px;
    background-position: -4559px 0px; }
  .iti__flag.iti__sm {
    height: 15px;
    background-position: -4581px 0px; }
  .iti__flag.iti__sn {
    height: 14px;
    background-position: -4603px 0px; }
  .iti__flag.iti__so {
    height: 14px;
    background-position: -4625px 0px; }
  .iti__flag.iti__sr {
    height: 14px;
    background-position: -4647px 0px; }
  .iti__flag.iti__ss {
    height: 10px;
    background-position: -4669px 0px; }
  .iti__flag.iti__st {
    height: 10px;
    background-position: -4691px 0px; }
  .iti__flag.iti__sv {
    height: 12px;
    background-position: -4713px 0px; }
  .iti__flag.iti__sx {
    height: 14px;
    background-position: -4735px 0px; }
  .iti__flag.iti__sy {
    height: 14px;
    background-position: -4757px 0px; }
  .iti__flag.iti__sz {
    height: 14px;
    background-position: -4779px 0px; }
  .iti__flag.iti__ta {
    height: 10px;
    background-position: -4801px 0px; }
  .iti__flag.iti__tc {
    height: 10px;
    background-position: -4823px 0px; }
  .iti__flag.iti__td {
    height: 14px;
    background-position: -4845px 0px; }
  .iti__flag.iti__tf {
    height: 14px;
    background-position: -4867px 0px; }
  .iti__flag.iti__tg {
    height: 13px;
    background-position: -4889px 0px; }
  .iti__flag.iti__th {
    height: 14px;
    background-position: -4911px 0px; }
  .iti__flag.iti__tj {
    height: 10px;
    background-position: -4933px 0px; }
  .iti__flag.iti__tk {
    height: 10px;
    background-position: -4955px 0px; }
  .iti__flag.iti__tl {
    height: 10px;
    background-position: -4977px 0px; }
  .iti__flag.iti__tm {
    height: 14px;
    background-position: -4999px 0px; }
  .iti__flag.iti__tn {
    height: 14px;
    background-position: -5021px 0px; }
  .iti__flag.iti__to {
    height: 10px;
    background-position: -5043px 0px; }
  .iti__flag.iti__tr {
    height: 14px;
    background-position: -5065px 0px; }
  .iti__flag.iti__tt {
    height: 12px;
    background-position: -5087px 0px; }
  .iti__flag.iti__tv {
    height: 10px;
    background-position: -5109px 0px; }
  .iti__flag.iti__tw {
    height: 14px;
    background-position: -5131px 0px; }
  .iti__flag.iti__tz {
    height: 14px;
    background-position: -5153px 0px; }
  .iti__flag.iti__ua {
    height: 14px;
    background-position: -5175px 0px; }
  .iti__flag.iti__ug {
    height: 14px;
    background-position: -5197px 0px; }
  .iti__flag.iti__um {
    height: 11px;
    background-position: -5219px 0px; }
  .iti__flag.iti__un {
    height: 14px;
    background-position: -5241px 0px; }
  .iti__flag.iti__us {
    height: 11px;
    background-position: -5263px 0px; }
  .iti__flag.iti__uy {
    height: 14px;
    background-position: -5285px 0px; }
  .iti__flag.iti__uz {
    height: 10px;
    background-position: -5307px 0px; }
  .iti__flag.iti__va {
    height: 15px;
    background-position: -5329px 0px; }
  .iti__flag.iti__vc {
    height: 14px;
    background-position: -5346px 0px; }
  .iti__flag.iti__ve {
    height: 14px;
    background-position: -5368px 0px; }
  .iti__flag.iti__vg {
    height: 10px;
    background-position: -5390px 0px; }
  .iti__flag.iti__vi {
    height: 14px;
    background-position: -5412px 0px; }
  .iti__flag.iti__vn {
    height: 14px;
    background-position: -5434px 0px; }
  .iti__flag.iti__vu {
    height: 12px;
    background-position: -5456px 0px; }
  .iti__flag.iti__wf {
    height: 14px;
    background-position: -5478px 0px; }
  .iti__flag.iti__ws {
    height: 10px;
    background-position: -5500px 0px; }
  .iti__flag.iti__xk {
    height: 15px;
    background-position: -5522px 0px; }
  .iti__flag.iti__ye {
    height: 14px;
    background-position: -5544px 0px; }
  .iti__flag.iti__yt {
    height: 14px;
    background-position: -5566px 0px; }
  .iti__flag.iti__za {
    height: 14px;
    background-position: -5588px 0px; }
  .iti__flag.iti__zm {
    height: 14px;
    background-position: -5610px 0px; }
  .iti__flag.iti__zw {
    height: 10px;
    background-position: -5632px 0px; }
.iti--allow-dropdown {
	width: 100% !important; 
}
  	
.iti__flag {
  height: 15px;
  box-shadow: 0px 0px 1px 0px #888;
  background-image: url("/wp-content/themes/understraps/img/flags.png");
  background-repeat: no-repeat;
  background-color: #DBDBDB;
  background-position: 20px 0; }
  @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .iti__flag {
      background-image: url("/wp-content/themes/understraps/img/flags@2x.png"); } }

.iti__flag.iti__np {
  background-color: transparent; }
</style>

<script type="text/javascript" src="/wp-content/themes/understraps/js/intlTelInput.js"></script>	

<script>
	jQuery(document).ready(function() {


		var input = document.querySelector("#billing_phone");
		window.intlTelInput(input, {
		  initialCountry: "auto",
		  geoIpLookup: function(callback) {
			jQuery.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
		      var countryCode = (resp && resp.country) ? resp.country : "us";
		      callback(countryCode);
		    });
		  },
		  utilsScript: "/wp-content/themes/understraps/js/utils.js?1613236686837" // just for formatting/placeholders etc
		});
	});
</script>
