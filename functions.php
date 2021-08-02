<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}





function displayProductName($item) {
    $productName = get_the_title($item['id']);
    return $productName;
}

add_shortcode('product_name', 'displayProductName');




//Brand description shortcode
function custom_pwb_brand_title() {
  
  global $product;
   $product_id = $product->get_id();
   $brands = wp_get_post_terms( $product_id, 'pwb-brand' );
   foreach( $brands as $brand ) echo '<a href="'.get_term_link($brand->term_id).'">'.$brand->name.'</a>';
}
add_shortcode( 'custom_pwb_brandtitle', 'custom_pwb_brand_title' );






function custom_product_description($atts){
    global $product;

    try {
        if( is_a($product, 'WC_Product') ) {
            return wc_format_content( $product->get_description("shortcode") );
        }

        return "Product description shortcode run outside of product context";
    } catch (Exception $e) {
        return "Product description shortcode encountered an exception";
    }
}
add_shortcode( 'custom_product_description', 'custom_product_description' );





function my_shortcode_product_price() {
    $html = '';

    global $product;

    $price = wc_get_price_to_display( $product, array( 'price' => $product->get_price() ) );

    $args = array(
            'ex_tax_label'       => false,
            'currency'           => 'USD',
            'decimal_separator'  => '.',
            'thousand_separator' => ' ',
            'decimals'           => 2,
            'price_format'       => '%2$s&nbsp;%1$s',
        );

    $html = "<span>" . wc_price( $price, $args ) . "</span>";

    return $html;
 }
 add_shortcode( 'product_price', 'my_shortcode_product_price' );












function custom_pwb_brand_info() {
    if( is_product_taxonomy() ){
    $brands = wp_get_post_terms( get_the_ID(), 'pwb-brand' );
    
    foreach( $brands as $brand ) {
      $attachment_id = get_term_meta( $brand->term_id, 'pwb_brand_image', true );
      $brand_banner_id = get_term_meta($brand->term_id, 'pwb_brand_banner', true);
      $attachment_src = wp_get_attachment_image_src( $attachment_id,'full' );
      $banner_src = wp_get_attachment_image_src( $brand_banner_id,'full' );
      echo '<div class="brand-description">';
      echo '<img src="'.$attachment_src[0].'" alt="">';
      echo '<p>'.$brand->description.'</p>';
      echo '</div>';
      echo '<div class="pic-bg" style="background-image: url('.$banner_src[0].');"></div>';
      
     
    }
  }
}
add_shortcode( 'custom_pwb_brand', 'custom_pwb_brand_info' );












add_action( 'woocommerce_before_shop_loop_item_title', 'aq_display_brand_before_title' );
 function aq_display_brand_before_title(){
   global $product;
   $product_id = $product->get_id();
   $brands = wp_get_post_terms( $product_id, 'pwb-brand' );
   foreach( $brands as $brand ) echo '<div class="product-info-single-main"><p>'.$brand->name.'</p>';
 }


/**
 * Remove related products output
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );



//
//add_filter( 'style_loader_src',  'sdt_remove_ver_css_js', 9999, 2 );
//add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999, 2 );
//
//function sdt_remove_ver_css_js( $src, $handle ) 
//{
//    $handles_with_version = [ 'style' ]; // <-- Adjust to your needs!
//
//    if ( strpos( $src, 'ver=' ) && ! in_array( $handle, $handles_with_version, true ) )
//        $src = remove_query_arg( 'ver', $src );
//
//    return $src;
//}
// remove version from head
remove_action('wp_head', 'wp_generator');

// remove version from rss
add_filter('the_generator', '__return_empty_string');

// remove version from scripts and styles
function remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'remove_version_scripts_styles', 9999);






// Register Widgets
function custom_sidebar() {
  $args = array(
'id' => 'category-area',
'name' => __( 'Category top', 'text_domain' ),
'description' => __( 'This is my widget description.', 'text_domain' ),
'before_title' => '<p class="widget-category-title">',
'after_title' => '</p>',
'before_widget' => '<section id="%1$s" class="widget %2$s">',
'after_widget' => '</section>',
);
register_sidebar( $args );
}
add_action( 'widgets_init', 'custom_sidebar' );




/* WooCommerce Add To Cart Text */

add_filter('woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_add_to_cart_text');
 
function woocommerce_custom_add_to_cart_text() {
return __('Buy', 'woocommerce');
}






// define the woocommerce_dropdown_variation_attribute_options_args callback 
function filter_woocommerce_dropdown_variation_attribute_options_args( $array ) { 

    // Find the name of the attribute for the slug we passed in to the function
    $attribute_name = wc_attribute_label($array['attribute']);

    // Create a string for our select
    $select_text = '' . $attribute_name;

    $array['show_option_none'] = __( $select_text, 'woocommerce' );
    return $array; 
}; 

// add the filter 
add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'filter_woocommerce_dropdown_variation_attribute_options_args', 10, 1 ); 









// Change "Default Sorting" to "Our sorting" on shop page and in WC Product Settings
function skyverge_change_default_sorting_name( $catalog_orderby ) {
    $catalog_orderby = str_replace("Default sorting", "Sort by random", $catalog_orderby);
    return $catalog_orderby;
}
add_filter( 'woocommerce_catalog_orderby', 'skyverge_change_default_sorting_name' );
add_filter( 'woocommerce_default_catalog_orderby_options', 'skyverge_change_default_sorting_name' );









add_filter( 'woocommerce_checkout_fields' , 'custom_remove_woo_checkout_fields' );
function custom_remove_woo_checkout_fields( $fields ) {
    // remove billing fields

    unset($fields['billing']['billing_company']);
    unset($fields['shipping']['shipping_company']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['shipping']['shipping_address_2']);
    unset($fields['billing']['billing_state']);

    
    return $fields;
}




add_filter('woocommerce_shortcode_products_query', 'wh_woocommerce_shortcode_products_orderby');

function wh_woocommerce_shortcode_products_orderby($args)
{

    $standard_array = ['menu_order', 'title', 'date', 'rand', 'id'];
//  print_r($args['orderby']);
    if (isset($args['orderby']) && !in_array($args['orderby'], $standard_array))
    {
        $args['meta_key'] = '_featured';
        $args['orderby'] = 'meta_value_num';
    }
//  print_r($args);
    return $args;
}



function vnm_wc_redirect_account_dashboard( $wp ) {

    if ( !is_admin() ) {
        //  Uncomment the following line if you want to see what the current request is
        //die( $wp->request );

        //  The following will only match if it's the root Account page; all other endpoints will be left alone

        if ( $wp->request === 'my-account' ) {
            wp_redirect( site_url( '/my-account/orders/' ) );
            exit;
        }
    }
}

add_action( 'parse_request', 'vnm_wc_redirect_account_dashboard', 10, 1 );


add_filter( 'woocommerce_checkout_fields', 'misha_email_first' );

function misha_email_first( $checkout_fields ) {
    $checkout_fields['billing']['billing_email']['priority'] = 1;
    $checkout_fields['billing']['billing_phone']['priority'] = 2;
    $checkout_fields['billing']['billing_first_name']['priority'] = 3;
    $checkout_fields['billing']['billing_last_name']['priority'] = 4;
    $checkout_fields['billing']['billing_country']['priority'] = 5;
    $checkout_fields['billing']['billing_city']['priority'] = 5;
    $checkout_fields['billing']['billing_postcode']['priority'] = 5;
    $checkout_fields['billing']['billing_address_1']['priority'] = 8;
    
    return $checkout_fields;
}

add_filter( 'woocommerce_product_tabs', 'misha_rename_additional_info_tab' );

function misha_rename_additional_info_tab( $tabs ) {

	$tabs['description']['title'] = 'INFO';
	$tabs['additional_information']['title'] = 'DETAILS';

	return $tabs;

}
function add_to_cart_redirect_to_cart() {
    wp_safe_redirect(  $_SERVER['REQUEST_URI'] .'?opencart=1' );
    die();
}
add_action('woocommerce_add_to_cart','add_to_cart_redirect_to_cart', 100 );