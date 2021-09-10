<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

?>



  <header class="woocommerce-products-header text-center pt-5 pb-4">
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
      <h1 class="hero-title"><?php woocommerce_page_title(); ?></h1>
      <?php endif; ?>

        <?php
	/**
	 * Hook: woocommerce_archive_description.
	 *
	 * @hooked woocommerce_taxonomy_archive_description - 10
	 * @hooked woocommerce_product_archive_description - 10
	 */
	do_action( 'woocommerce_archive_description' );
	?>
  </header>
  <!-- 
<div class="woocommerceCategories">
<?php 
if( is_product_category() ) {
    $main_term = get_queried_object();
    
    //print_r($main_term);
    
    $args_query = array(
        'taxonomy' => 'product_cat',
        'hide_empty' => false,
        'child_of' => $main_term->term_id
    );
    
        // Loop through WP_Term Objects
        foreach ( get_terms( $args_query ) as $term ) {
            if( $term->term_id != $main_term->term_id ) {
                // $term->slug; // Slug
                
                // Output each (linked) term name…
                echo sprintf( '<a href="%s">%s</a>', get_term_link( $term->term_id, 'product_cat' ), $term->name );
            }
        }
}
?>
</div>
 -->

<?php
if ( is_product_category() ) {

    $term_id  = get_queried_object_id();
    $taxonomy = 'product_cat';

    // Get subcategories of the current category
    $terms    = get_terms([
        'taxonomy'    => $taxonomy,
        'hide_empty'  => true,
        'parent'      => get_queried_object_id()
    ]);

    $output = '<ul class="subcategories-list">';

    // Loop through product subcategories WP_Term Objects
    foreach ( $terms as $term ) {
        $term_link = get_term_link( $term, $taxonomy );

        $output .= '<li class="'. $term->slug .'"><a href="'. $term_link .'">'. $term->name .'</a></li>';
    }

    echo $output . '</ul>';
}
  
?>

<div class="filter-open-wrapper" style="text-align: center; line-height: 28px; padding-top: 5px; cursor: pointer;" onclick="jQuery('.wpfMainWrapper').show(); jQuery(this).hide();">+</div>
<?php echo do_shortcode('[wpf-filters id=1]') ?>
<!-- 
  <div class="position-relative overflow-md-hidden bottom-menu-box">
    <div class="row category-menu-top">
      <div class="col-12 position-static">
        <ul class="top-page-menu">
       <li>
         <?php do_action( 'woocommerce_before_shop_loop' );?>
       </li>
     </ul>
      </div>
    </div>
  </div>
 -->

  <?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );
?>


<div class="position-relative overflow-md-hidden bottom-menu-box">
    <div class="row category-menu-top">
      <div class="col-12 position-static">
        <ul class="top-page-menu">
       <li>
         <?php do_action( 'woocommerce_before_shop_loop' );?>
       </li>
     </ul>
      </div>
    </div>
  </div>

<?php

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
?>
<style>
.wpfMainWrapper {
	text-align: center;
}
.wpfMainWrapper .wpfFilterWrapper {
	min-width: auto !important;
	display: inline-block !important;
	margin-bottom: 0 !important;
	padding-bottom: 0 !important;
}
.wpfMainWrapper .wpfFilterWrapper .wfpTitle {
    font-size: 12px;
    line-height: 28px;
    color: #000000;
	text-transform: uppercase;
	font-weight: normal !important;
    font-family: 'Standard Book';
}
  @media (max-width: 575.98px) {
    .wpfMainWrapper .wpfFilterWrapper .wfpTitle {
      font-size: 10px;
    }
  }
.wpfMainWrapper .wpfFilterWrapper .wpfFilterTitle .fa-plus:before {
    content: "" !important;
       width: 7px;
    height: 7px;
    border-top: 1px solid #000;
    border-right: 1px solid #000;
    margin-right: 15px;
    transform: rotate(135deg);
    margin-bottom: 3px;
}
.wpfMainWrapper .wpfFilterWrapper .wpfFilterTitle .fa-minus:before {
	 content: "" !important;
       width: 7px;
    height: 7px;
    border-top: 1px solid #000;
    border-right: 1px solid #000;
    margin-right: 15px;
    transform: rotate(-45deg);
        margin-bottom: -1px;
}
.wpfMainWrapper .wpfFilterWrapper .wpfFilterTitle .wpfTitleToggle {
    font-size: 12px;
    line-height: 28px;
    color: #000000;
	text-transform: uppercase;
	font-weight: normal !important;
}
.wpfFilterContent {
	position: absolute;
    background: white;
    width: 100%;
    left: 0;
    height: auto !important;
    z-index: 103;
}
.wpfFilterContent .wpfFilterVerScroll { 
	max-height: 20000px !important;
	padding: 25px 15% 40px 15%;	
}
#wpfBlock_1 .wpfFilterContent .wpfFilterVerScroll {
	/*column-width: 15%;
	column-count: 4;
	column-gap: 3%;*/
	text-align: center;
}
#wpfBlock_1 li {
	text-align: center;
	width: 25% !important;
	display: inline-block;
}
.wpfFilterVerScroll li .wpfCheckbox,
.wpfFilterButtons,
.bottom-menu-box {
	display: none !important;
}
.wpfFilterVerScroll li .wpfFilterTaxNameWrapper {
	font-family: Standard Book;
    font-size: 12px;
    line-height: 24px;
    text-align: center;
    color: #000000;
}
.wpfCheckboxChecked .wpfFilterTaxNameWrapper {
    font-weight: bold !important;
}
.wpfFilterWrapper i, .wpfFilterWrapper svg {
	float: initial !important;
	margin-left: 10px !important;
}
#wpfBlock_Category {
	width: 100% !important;
}
.woocommerceCategories {
	text-align: center;
	margin: 25px 0 32px 0;
}
.woocommerceCategories a {
	font-family: Standard Book;
    font-size: 14px;
    line-height: 28px;
    color: #000000;
	margin: 0 10px 0 10px;
}
.wpfActiveReal .wfpTitle,
.wpfActiveReal .fa-minus {
	opacity: 0.5;
}

.wpfFilterVerScroll li label {
	text-align: center;  
}
.wpfLoaderLayout,
.wpfPreviewLoader {
	display: none !important;
}

  
</style>
<script>
jQuery( document ).ready(function() {
	jQuery('.wpfFilterWrapper').each(function(){
		if(!jQuery(this).hasClass('wpfNotActive')) {
			jQuery(this).children('.wpfFilterTitle').trigger("click");
		}
	});
	jQuery('.wpfCheckbox').each(function(){
		if(jQuery(this).children('input').prop("checked")) {
			jQuery(this).parent().addClass('wpfCheckboxChecked');
		}
	});
	jQuery('.wpfCheckbox').on('click', function(){
    	jQuery('.wpfCheckbox').each(function(){
    		if(jQuery(this).children('input').prop("checked")) {
    			jQuery(this).parent().addClass('wpfCheckboxChecked');
    		} else {
    			jQuery(this).parent().removeClass('wpfCheckboxChecked');
    		}
    	});
	});	
	jQuery('.wpfFilterWrapper').on('click', function(){
		jQuery(this).toggleClass('wpfActiveReal');
	});	
	jQuery('.wpfMainWrapper').hide();

	jQuery('.wpfFilterTitle').on('click', function(){
		jQuery('.wpfFilterContent').addClass('wpfHide');
		jQuery('.wpfFilterContent').addClass('wpfBlockAnimated');
		jQuery('.wpfFilterWrapper').not(jQuery(this).parent()).removeClass('wpfActiveReal');
		jQuery('.wpfFilterTitle').not(this).children('.fa-minus').removeClass('fa-minus').addClass('fa-plus');
		jQuery(this).closest('.wpfFilterContent').removeClass('wpfHide');
		jQuery(this).closest('.wpfFilterContent').removeClass('wpfBlockAnimated');
	});
});
</script>