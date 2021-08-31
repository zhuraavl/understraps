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




add_shortcode( 'gallery', 'gallery_shortcode1' );

/**
 * Builds the Gallery shortcode output.
 *
 * This implements the functionality of the Gallery Shortcode for displaying
 * WordPress images on a post.
 *
 * @since 2.5.0
 *
 * @param array $attr {
 *     Attributes of the gallery shortcode.
 *
 *     @type string       $order      Order of the images in the gallery. Default 'ASC'. Accepts 'ASC', 'DESC'.
 *     @type string       $orderby    The field to use when ordering the images. Default 'menu_order ID'.
 *                                    Accepts any valid SQL ORDERBY statement.
 *     @type int          $id         Post ID.
 *     @type string       $itemtag    HTML tag to use for each image in the gallery.
 *                                    Default 'dl', or 'figure' when the theme registers HTML5 gallery support.
 *     @type string       $icontag    HTML tag to use for each image's icon.
 *                                    Default 'dt', or 'div' when the theme registers HTML5 gallery support.
 *     @type string       $captiontag HTML tag to use for each image's caption.
 *                                    Default 'dd', or 'figcaption' when the theme registers HTML5 gallery support.
 *     @type int          $columns    Number of columns of images to display. Default 3.
 *     @type string|int[] $size       Size of the images to display. Accepts any registered image size name, or an array
 *                                    of width and height values in pixels (in that order). Default 'thumbnail'.
 *     @type string       $ids        A comma-separated list of IDs of attachments to display. Default empty.
 *     @type string       $include    A comma-separated list of IDs of attachments to include. Default empty.
 *     @type string       $exclude    A comma-separated list of IDs of attachments to exclude. Default empty.
 *     @type string       $link       What to link each image to. Default empty (links to the attachment page).
 *                                    Accepts 'file', 'none'.
 * }
 * @return string HTML content to display gallery.
 */
function gallery_shortcode1( $attr ) {
    $post = get_post();
    
    static $instance = 0;
    $instance++;
    
    if ( ! empty( $attr['ids'] ) ) {
        // 'ids' is explicitly ordered, unless you specify otherwise.
        if ( empty( $attr['orderby'] ) ) {
            $attr['orderby'] = 'post__in';
        }
        $attr['include'] = $attr['ids'];
    }
    
    /**
     * Filters the default gallery shortcode output.
     *
     * If the filtered output isn't empty, it will be used instead of generating
     * the default gallery template.
     *
     * @since 2.5.0
     * @since 4.2.0 The `$instance` parameter was added.
     *
     * @see gallery_shortcode()
     *
     * @param string $output   The gallery output. Default empty.
     * @param array  $attr     Attributes of the gallery shortcode.
     * @param int    $instance Unique numeric ID of this gallery shortcode instance.
     */
    $output = apply_filters( 'post_gallery', '', $attr, $instance );
    
    if ( ! empty( $output ) ) {
        return $output;
    }
    
    $html5 = current_theme_supports( 'html5', 'gallery' );
    $atts  = shortcode_atts(
        array(
            'order'      => 'ASC',
            'orderby'    => 'menu_order ID',
            'id'         => $post ? $post->ID : 0,
            'itemtag'    => $html5 ? 'figure' : 'dl',
            'icontag'    => $html5 ? 'div' : 'dt',
            'captiontag' => $html5 ? 'figcaption' : 'dd',
            'columns'    => 3,
            'size'       => 'thumbnail',
            'include'    => '',
            'exclude'    => '',
            'link'       => '',
        ),
        $attr,
        'gallery'
        );
    
    $id = (int) $atts['id'];
    
    if ( ! empty( $atts['include'] ) ) {
        $_attachments = get_posts(
            array(
                'include'        => $atts['include'],
                'post_status'    => 'inherit',
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'order'          => $atts['order'],
                'orderby'        => $atts['orderby'],
            )
            );
        
        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[ $val->ID ] = $_attachments[ $key ];
        }
    } elseif ( ! empty( $atts['exclude'] ) ) {
        $attachments = get_children(
            array(
                'post_parent'    => $id,
                'exclude'        => $atts['exclude'],
                'post_status'    => 'inherit',
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'order'          => $atts['order'],
                'orderby'        => $atts['orderby'],
            )
            );
    } else {
        $attachments = get_children(
            array(
                'post_parent'    => $id,
                'post_status'    => 'inherit',
                'post_type'      => 'attachment',
                'post_mime_type' => 'image',
                'order'          => $atts['order'],
                'orderby'        => $atts['orderby'],
            )
            );
    }
    
    if ( empty( $attachments ) ) {
        return '';
    }
    
    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment ) {
            if ( ! empty( $atts['link'] ) ) {
                if ( 'none' === $atts['link'] ) {
                    $output .= wp_get_attachment_image( $att_id, $atts['size'], false, $attr );
                } else {
                    $output .= wp_get_attachment_link( $att_id, $atts['size'], false );
                }
            } else {
                $output .= wp_get_attachment_link( $att_id, $atts['size'], true );
            }
            $output .= "\n";
        }
        return $output;
    }
    
    $itemtag    = tag_escape( $atts['itemtag'] );
    $captiontag = tag_escape( $atts['captiontag'] );
    $icontag    = tag_escape( $atts['icontag'] );
    $valid_tags = wp_kses_allowed_html( 'post' );
    if ( ! isset( $valid_tags[ $itemtag ] ) ) {
        $itemtag = 'dl';
    }
    if ( ! isset( $valid_tags[ $captiontag ] ) ) {
        $captiontag = 'dd';
    }
    if ( ! isset( $valid_tags[ $icontag ] ) ) {
        $icontag = 'dt';
    }
    
    $columns   = (int) $atts['columns'];
    $itemwidth = $columns > 0 ? floor( 100 / $columns ) : 100;
    $float     = is_rtl() ? 'right' : 'left';
    
    $selector = "gallery-{$instance}";
    
    $gallery_style = '';
    
    /**
     * Filters whether to print default gallery styles.
     *
     * @since 3.1.0
     *
     * @param bool $print Whether to print default gallery styles.
     *                    Defaults to false if the theme supports HTML5 galleries.
     *                    Otherwise, defaults to true.
     */
    if ( apply_filters( 'use_default_gallery_style', ! $html5 ) ) {
        $type_attr = current_theme_supports( 'html5', 'style' ) ? '' : ' type="text/css"';
        
        $gallery_style = "
        <style{$type_attr}>
        #{$selector} {
        margin: auto;
    }
    #{$selector} .gallery-item {
    float: {$float};
    margin-top: 10px;
    text-align: center;
    width: {$itemwidth}%;
    }
    #{$selector} img {
    border: 2px solid #cfcfcf;
    }
    #{$selector} .gallery-caption {
    margin-left: 0;
    }
    /* see gallery_shortcode() in wp-includes/media.php */
    </style>\n\t\t";
    }
    
    $size_class  = sanitize_html_class( is_array( $atts['size'] ) ? implode( 'x', $atts['size'] ) : $atts['size'] );
    $gallery_div = '<div class="container demo-2"><div id="slider" class="sl-slider-wrapper"><div class="sl-slider">';
    
    /**
     * Filters the default gallery shortcode CSS styles.
     *
     * @since 2.5.0
     *
     * @param string $gallery_style Default CSS styles and opening HTML div container
     *                              for the gallery shortcode output.
     */
    $output = apply_filters( 'gallery_style', $gallery_style . $gallery_div );
    
    $i = 0;
    
    foreach ( $attachments as $id => $attachment ) {
        
        $attr = ( trim( $attachment->post_excerpt ) ) ? array( 'aria-describedby' => "$selector-$id" ) : '';
        
        if ( ! empty( $atts['link'] ) && 'file' === $atts['link'] ) {
            $image_output = wp_get_attachment_image_url( $id, $atts['size'], false, false, false, $attr );
        } elseif ( ! empty( $atts['link'] ) && 'none' === $atts['link'] ) {
            $image_output = wp_get_attachment_image_url( $id, $atts['size'], false, $attr );
        } else {
            $image_output = wp_get_attachment_image_url( $id, $atts['size'], true, false, false, $attr );
        }
        
        $image_meta = wp_get_attachment_metadata( $id );
        
        $orientation = '';
        
        if ( isset( $image_meta['height'], $image_meta['width'] ) ) {
            $orientation = ( $image_meta['height'] > $image_meta['width'] ) ? 'portrait' : 'landscape';
        }
        
        if($i%2 == 0) {
            $output .= '<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1" style="background-image: url('. $image_output.')"></div>
						</div>
					</div>';
        } else {
            $output .= '<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1" style="background-image: url('. $image_output.')"></div>
						</div>
					</div>';
        }
        
        
       $i ++;
        
    }
    
    
    $output .= "
		</div><!-- /sl-slider -->
         

			</div><!-- /slider-wrapper -->

        </div>";
    
    return $output;
}
