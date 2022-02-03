<?php
/**
 * Template Name: main page
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>


<body>
<?php get_header(); ?>

        
        
        <div class="center-main-text">
 

        
        
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'blank' ); ?>

	<?php endwhile;  ?>
	
	</div>
       
       
       
       
        
<!--
	<div class="hero-box">
 
    <h5 class="">NEWEST FASHION BRANDS</h5>
    <p class="hero-descr"></p>

</div>
-->
<div class="py-4"></div>
<div class="featires main-line">
  <?php echo do_shortcode( "[featured_products per_page='15' columns='1' orderby='rand' order='ASC']" ); ?>
  <!--
  <a href="/shop?orderby=rand" class="button-shop">SHOW ALL</a>
  -->
</div>	










<div class="mainpage-categories mt-3">
<!--
	<div class="mainpage-categories-inner">
	<?php 
		
		$args = array(
		    'orderby'    => 'name',
		    'order'      => 'ASC',
		    'hide_empty' => true,
		    'include'    => '141',
		    'pad_counts' => true,
		    'child_of'   => '',
		);
		
		$product_categories = apply_filters(
		    'woocommerce_product_categories',
		    get_terms( 'product_cat', $args )
		    );
		
		if ( $product_categories ) {
		    woocommerce_product_loop_start();
		    
		    foreach ( $product_categories as $category ) {
		        
		        ?>
		        <a href="/product-category/<?php echo $category->slug ?>/" class="button-shop mainpage-categories-inner-big">SHOP <?php echo $category->name ?></a>
		        <?php
		    }
		    
		    woocommerce_product_loop_end();
		}
		
		wc_reset_loop();
		?>
    
        <a href="/product-category/men/?orderby=date">New Arrivals</a>
        <a href="product-category/men/men-t-shirt/">T-Shirts</a>
        <a href="/product-category/men/men-hoodie/">Hoodies</a>
        <a href="/product-category/men/jackets-men/">Jackets</a>
        <a href="/product-category/men/men-trousers/">Trousers</a>
    

	</div>
-->
<!--
	<div class="mainpage-categories-inner">
		
		<?php 
		
		$args = array(
		    'orderby'    => 'name',
		    'order'      => 'ASC',
		    'hide_empty' => true,
		    'include'    => '142',
		    'pad_counts' => true,
		    'child_of'   => '',
		);
		
		$product_categories = apply_filters(
		    'woocommerce_product_categories',
		    get_terms( 'product_cat', $args )
		    );
		
		if ( $product_categories ) {
		    woocommerce_product_loop_start();
		    
		    foreach ( $product_categories as $category ) {
		        
		        ?>
		        <a href="/product-category/<?php echo $category->slug ?>/" class="button-shop mainpage-categories-inner-big">SHOP <?php echo $category->name ?></a>
		        <?php
		    }
		    
		    woocommerce_product_loop_end();
		}
		
		wc_reset_loop();
		?>
        <a href="/product-category/women/?orderby=date">New Arrivals</a>
        <a href="/product-category/women/women-dress/">Dresses</a>
        <a href="/product-category/women/women-shirt/">T-Shirts</a>
        <a href="product-category/women/women-jackets/">Jackets</a>
        <a href="/product-category/women/women-accessories/">Accessories</a>
		
	</div>
-->
</div>



<div class="minpage-brands d-none">
	<?php  
	$brands = array();
	$brands = \Perfect_Woocommerce_Brands\Perfect_Woocommerce_Brands::get_brands(true);
    shuffle($brands);
	
	foreach ($brands as $key => $brand) {
	?>
	
	<a href="/brand/<?php echo $brand->slug ?>/">
<!--
		<img src="< ?php echo (isset($brand->brand_image[0]))? $brand->brand_image[0] : '/wp-content/uploads/woocommerce-placeholder-100x100.png' ?>" height="70" />
		<br/>
-->
		<span><?php echo $brand->name ?></span>
	</a>
    <?php
    }
	?>
</div>






<!--


	
<div class="hero-box mb-3">
    <h2 class="">recent brands added</h2>
</div>	

<div class="mainpage-recent-brands">
<?php 
		
$brands = array();
$brands = \Perfect_Woocommerce_Brands\Perfect_Woocommerce_Brands::get_brands(true);

$cats = array();

foreach ($brands as $key => $brand) {
    $cats[$brand->term_id] = $brand;
}
krsort($cats);
$cats = array_slice($cats, 0, 4); 
foreach ( $cats as $category ) {
    ?>
	   <div class="mainpage-recent-brands-wrapper">
	   		<div class="mainpage-recent-brands-imgs">
	<?php   
	$args = array(
	    'post_type'      => 'product',
	    'posts_per_page' => 5,
	    'paged'          => false
	);
	
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'pwb-brand',
            'field'    => 'slug',
            'terms'    => $category->slug
        )
    );
	
	
	$loop = new \WP_Query($args);
	if ($loop->have_posts()) {
	    while ($loop->have_posts()) : $loop->the_post();
	    $product = wc_get_product(get_the_ID());
	    
	   ?>
	    <?php echo woocommerce_get_product_thumbnail();?><?php echo woocommerce_get_product_thumbnail();?><?php echo woocommerce_get_product_thumbnail();?>
	   <?php 
	    endwhile;
	}
	wp_reset_postdata();
	
	?>
			</div>
            <br>
	        <a href="/brand/<?php echo $category->slug ?>/"><?php echo $category->name ?></a>
		</div>
	<?php
	}
	?>
</div>
	
	
-->


<!--
<div class="hero-box">
    <h2 class="">Be aware of<br/>what's new</h2>
</div>
<div class="featires my-3 main-line">
  < ?php echo do_shortcode( "[products per_page='25' columns='1' orderby='id' order='DESC']" ); ?>
  
</div>
-->
	
	<!--
  <a href="/shop?orderby=rand" class="button-shop">SHOW ALL</a>
  -->
	
	
	
	
	
	
	
	
<!--
	<div class="main-about-text mt-5 pt-5">
  <h2 class="bold">we created 2020s, an online catalog of clothes conceived and created in the 20s, that reflects, characterizes and lets you keep up with what's going on in the culture.</h2>
</div>
	
-->
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php get_footer(); ?>

	<?php wp_footer(); ?>
	
	<style>
        
    </style>
	
	<script>
    jQuery(document).ready(function() {
//    	jQuery('.minpage-brands').slick({
//    	  arrows: false,
//          infinite: true,
//          slidesToShow: 8,
//          slidesToScroll: 1,
//          autoplay: true,
//          speed: 300,
//          autoplaySpeed: 2000,
//          pauseOnHover: true,
//          responsive: [
//      	    {
//      	      breakpoint: 600,
//      	      settings: {
//      	        slidesToShow: 4
//      	      }
//      	    }
//    	  ]
//        });
//    
//    	let blocked = false;
//    	let blockTimeout = null;
//    	let prevDeltaY = 0;
//    
//    	jQuery(".minpage-brands").on('mousewheel DOMMouseScroll wheel', (function(e) {
//    	    let deltaY = e.originalEvent.deltaY;
//    	    e.preventDefault();
//    	    e.stopPropagation();
//    
//    	    clearTimeout(blockTimeout);
//    	    blockTimeout = setTimeout(function(){
//    	        blocked = false;
//    	    }, 50);
//    
//    	    
//    	    if (deltaY > 0 && deltaY > prevDeltaY || deltaY < 0 && deltaY < prevDeltaY || !blocked) {
//    	        blocked = true;
//    	        prevDeltaY = deltaY;
//    
//    	        if (deltaY > 0) {
//    	        	jQuery(this).slick('slickNext');
//    	        } else {
//    	        	jQuery(this).slick('slickPrev');
//    	        }
//    	    }
//    	}));

//		jQuery('.products.columns-1').slick({
//    	  arrows: false,
//          infinite: true,
//          slidesToShow: 6,
//          slidesToScroll: 1,
//          autoplay: true,
//          loop: true,
//          speed: 300,
//          autoplaySpeed: 2000,
//          pauseOnHover: true,
//          responsive: [
//      	    {
//      	      breakpoint: 600,
//      	      settings: {
//      	        slidesToShow: 2
//      	      }
//      	    }
//    	  ]
//        });
//    
//    	jQuery(".products.columns-1").on('mousewheel DOMMouseScroll wheel', (function(e) {
//    	    let deltaY = e.originalEvent.deltaY;
//    	    e.preventDefault();
//    	    e.stopPropagation();
//    
//    	    clearTimeout(blockTimeout);
//    	    blockTimeout = setTimeout(function(){
//    	        blocked = false;
//    	    }, 50);
//    
//    	    
//    	    if (deltaY > 0 && deltaY > prevDeltaY || deltaY < 0 && deltaY < prevDeltaY || !blocked) {
//    	        blocked = true;
//    	        prevDeltaY = deltaY;
//    
//    	        if (deltaY > 0) {
//    	        	jQuery(this).slick('slickNext');
//    	        } else {
//    	        	jQuery(this).slick('slickPrev');
//    	        }
//    	    }
//    	}));
    	jQuery('.mainpage-recent-brands-imgs').slick({
    	  arrows: false,
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          cssEase: 'ease-ut',
          speed: 300,
          autoplaySpeed: 1,
          pauseOnHover: false
        });
        
    	
    });
    </script>
</body>
</html>
