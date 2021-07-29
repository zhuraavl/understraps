<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>



<!--
<div class="left-product">
  
  
  <div class="brand-name"><?php echo do_shortcode( '[custom_pwb_brandtitle]' ); ?></div>
 
  <h4><?php echo do_shortcode( '[product_name]' ); ?></h4>
  <?php echo $product->get_categories( ', ', '<span class="posted_in">' . _n( '', '', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '</span>' ); ?>
  <p>
  <?php echo do_shortcode( '[custom_product_description]' ); ?>
  </p>
</div>

<div class="brand-description-product">
  
</div>
-->



<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
  <div class="product-images parallax-container">
  <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" class="parallax" data-parallax="" data-scale="true"/>
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>
  
  
  </div>
  
	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>


























<section class="single-brand-info-box">
<div class="single-brand-info"></div>

</section>



<section class="white-bg">

<div class="text-center product-brand-bottom-title">
 <p>OTHER IN <?php echo do_shortcode( '[custom_pwb_brandtitle]' ); ?></p>
  
</div>

<div class="row">
      <div class="col-12 string-grid-products px-0 pb-3 pt-5 text-center product-page-brands-bottom">
        
      
<?php 
		
		$brands = wp_get_post_terms(get_the_ID(), 'pwb-brand');
		
		if (!is_wp_error($brands)) {
		    
		    if (sizeof($brands) > 0) {
		        
		        foreach ($brands as $brand) {
		            
		            $args = array(
		                'orderby' => 'rand',
		                'post_type' => 'product', 
		                'posts_per_page' => 15, 
		                'paged' => 1,
		                'post__not_in' => array(get_the_ID()),
		                'tax_query' => array(
		                    array(
		                        'taxonomy' => 'pwb-brand',
		                        'terms' => $brand->term_id,
		                        'field' => 'id'
		                    ),
		                )
		            );
		            // The Query
		            $products = new WP_Query( $args );
		            
		            if ( $products->have_posts() ) {
		                echo '<ul class="products columns-5">';
		                while ( $products->have_posts() ) {
		                    
		                    $products->the_post();
		                    
		                    wc_get_template_part( 'content', 'product' );
		                }
		                echo '</ul>';
		            }
		            
		            wp_reset_postdata();
		        }
		        
		    }
		}
		
		?>
     
      </div>
    </div>






<!--/////////-->
<div class="row py-5">
  <div class="col-12 px-0">
<div class="text-center text-uppercase"><p class="small-title">OTHER IN  <?php echo wc_get_product_category_list($product->get_id()) ?></p></div>
<div class="related-category">
<?php

if ( is_singular('product') ) {

  global $post;

  // get categories
  $terms = wp_get_post_terms( $post->ID, 'product_cat' );
  foreach ( $terms as $term ) $cats_array[] = $term->term_id;

  $query_args = array( 'post__not_in' => array( $post->ID ), 'posts_per_page' => 12, 'no_found_rows' => 1, 'orderby'        => 'rand', 'post_status' => 'publish', 'post_type' => 'product', 'tax_query' => array( 
    array(
      'taxonomy' => 'product_cat',
      'field' => 'id',
      'terms' => $cats_array
    )));

  $r = new WP_Query($query_args);
		
  if ($r->have_posts()) {
    ?>
    <ul class="products">
      <?php while ($r->have_posts()) : $r->the_post(); global $product; ?>
        <li <?php wc_product_class( '', $product ); ?>>
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
 
  
	do_action( 'woocommerce_before_shop_loop_item_title' );
 ?>

  <?php
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
   
	 * @hooked woocommerce_template_loop_product_title - 5
   
	 */
	do_action( 'woocommerce_shop_loop_item_title' );
 ?>

 

  <?php
	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
	
</li>
      <?php endwhile; ?>
    </ul>
    <?php
    // Reset the global $the_post as this query will have stomped on it
    wp_reset_query();

  }

}
?>

</div>
    
  </div>
</div>
</section>


































 

<?php do_action( 'woocommerce_after_single_product' ); ?>
