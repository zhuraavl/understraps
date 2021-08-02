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
       
       
       
       
        
	<div class="hero-box mt-5">
 
    <h2 class="">NEWEST FASHION BRANDS</h2>
    
    
    
<!--    <p class="hero-descr"></p>-->

</div>

<div class="minpage-brands">
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






<div class="mainpage-categories">
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
    
        <a href="">New Arrivals</a>
        <a href="">T-Shirts</a>
        <a href="">Hoodies</a>
        <a href="">Jackets</a>
        <a href="">Accessories</a>
    





	</div>
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
        <a href="">New Arrivals</a>
        <a href="">Dresses</a>
        <a href="">T-Shirts</a>
        <a href="">Jackets</a>
        <a href="">Accessories</a>
		
	</div>
</div>



<div class="hero-box">
    <h2 class="">popular<br>products</h2>
</div>
<div class="featires my-3 main-line">
  <?php echo do_shortcode( "[featured_products per_page='15' columns='1' orderby='rand' order='ASC']" ); ?>
  <!--
  <a href="/shop?orderby=rand" class="button-shop">SHOW ALL</a>
  -->
</div>	

	
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
$cats = array_slice($cats, 0, 2); 
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
	
	


<div class="hero-box">
    <h2 class="">Be aware of<br/>what's new</h2>
</div>
<div class="featires my-3 main-line">
  <?php echo do_shortcode( "[products per_page='25' columns='1' orderby='id' order='DESC']" ); ?>
  <!--
  <a href="/shop?orderby=rand" class="button-shop">SHOW ALL</a>
  -->
</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<?php get_footer(); ?>

	<?php wp_footer(); ?>
	
	<style>
        .minpage-brands {
        	margin: 40px 0px 20px 0px;
        }
        .minpage-brands a img {
        	max-height: 70px;
        	margin: 0 auto 0 auto;
        }
        .minpage-brands a {
        	display: inline-block;
        	
        	text-align: center;
        }
        .minpage-brands a span {
        	font-family: ZIGZAG-NotRounded;
            font-size: 16px;
            line-height: 19px;
            text-align: center;
            text-transform: uppercase;
        }
        .mainpage-categories {
        	display: inline-block;
        	text-align: center;
        	width: 100%;
        	
        }
        .mainpage-categories-inner {
        	display: inline-block;
        	vertical-align: top;
        	margin: 0 38px 0 38px;
        	width: 180px;
        	text-align: center;
        }
        .mainpage-categories-inner a {
        	display: block;
        	vertical-align: top;
        	float: none;
            width: 100%;
        	/* font-family: GT America;*/
            font-size: 12px;
            line-height: 32px;
            text-align: center;
            text-transform: uppercase;
        }
        .mainpage-categories-inner a.mainpage-categories-inner-big {
            max-width: 180px;
        	margin: 0 auto 15px auto;
            padding: 13px 0 10px;
            line-height: 24px;
        }
        .mainpage-categories-inner .products.columns-4 {
        	padding: 0 !important;
        	margin-bottom: 0 !important;
        }
        .featires.my-3.main-line {
        	max-width: 100%;
        	margin-top: 60px !important;
        }
        .featires.my-3.main-line img {
        	height: 280px !important;
        	width: auto;
        }
        .woocommerce ul.products.columns-1 li.product {
        	margin: 0!important;
           
        	vertical-align: top;
        }
        .mainpage-recent-brands {
            position: relative;
            overflow: hidden;
        }
        .mainpage-recent-brands-wrapper {
        	width: 50%;
        	display: inline-block;
        	vertical-align: top;
        	padding: 0 3% 0 3%;
        	float: left;
        	margin-bottom: 30px;
        }
        
        .mainpage-recent-brands-wrapper a {
        	font-family: ZIGZAG-NotRounded;
            font-size: 24px;
            line-height: 29px;
            text-align: center;
        	width: 100%;
        	display: inline-block;
        	text-align: center;
        	margin-top: 20px;
        }
        .big-dots {
        	width: 100%;
        	text-align: center;
        	margin: 33px 0 70px 0;
        }
        .big-dots div {
        	width: 25px;
            height: 25px;
            background: #000000;
        	border-radius: 25px;
        	margin: 0 5px 0 5px;
        	display: inline-block;
        	vertical-align: top;
        }
        .mainpage-subscribe {
        	margin-top: 25px;
        }
        @media (max-width: 600px) {
            .minpage-brands {
            	margin: 30px 0 30px 0;
            }
            .minpage-brands a span {
                font-family: Roboto;
                font-size: 14px;
                line-height: 16px;
                text-align: center;
                text-transform: uppercase;
            }
            .mainpage-categories-inner {
            	display: inline-block;
            	vertical-align: top;
            	margin: 0 8px 0 8px;
            	width: 110px;
            	text-align: center;
            }
            .mainpage-categories-inner a {
                font-size: 10px;
                line-height: 24px;
            }
            .mainpage-recent-brands-wrapper { 
            	width: 100%;
            	display: none;
            }
            .mainpage-recent-brands-wrapper:first-child { 
            	display: inline-block;
            }
        }
    </style>
	
	<script>
    jQuery(document).ready(function() {
    	jQuery('.minpage-brands').slick({
    	  arrows: false,
          infinite: true,
          slidesToShow: 8,
          slidesToScroll: 1,
          autoplay: true,
          speed: 300,
          autoplaySpeed: 2000,
          pauseOnHover: true,
          responsive: [
      	    {
      	      breakpoint: 600,
      	      settings: {
      	        slidesToShow: 4
      	      }
      	    }
    	  ]
        });
    
    	let blocked = false;
    	let blockTimeout = null;
    	let prevDeltaY = 0;
    
    	jQuery(".minpage-brands").on('mousewheel DOMMouseScroll wheel', (function(e) {
    	    let deltaY = e.originalEvent.deltaY;
    	    e.preventDefault();
    	    e.stopPropagation();
    
    	    clearTimeout(blockTimeout);
    	    blockTimeout = setTimeout(function(){
    	        blocked = false;
    	    }, 50);
    
    	    
    	    if (deltaY > 0 && deltaY > prevDeltaY || deltaY < 0 && deltaY < prevDeltaY || !blocked) {
    	        blocked = true;
    	        prevDeltaY = deltaY;
    
    	        if (deltaY > 0) {
    	        	jQuery(this).slick('slickNext');
    	        } else {
    	        	jQuery(this).slick('slickPrev');
    	        }
    	    }
    	}));

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
          autoplaySpeed: 10,
          pauseOnHover: false
        });
        
    	
    });
    </script>
</body>
</html>
