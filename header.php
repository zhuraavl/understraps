<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />


	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/font.css">
	
	
	
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W2KTD5X');</script>
<!-- End Google Tag Manager -->
	
	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<!--
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143786884-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143786884-3');
</script>
-->


	<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1218444878607650');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1218444878607650&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


<link rel='stylesheet' id='pwb-lib-slick-css'  href='/wp-content/plugins/perfect-woocommerce-brands/assets/lib/slick/slick.css' type='text/css' media='all' />
<script type='text/javascript' src='/wp-content/plugins/perfect-woocommerce-brands/assets/lib/slick/slick.min.js' id='pwb-lib-slick-js'></script>
	
<style>
    .product .summary {
    	height: 90px;
    }
    .outer-height-tabs {
    	height: 173px;
    }


header#hedaer ul.dropdown-menu.show {
	max-height: 100000000000px !important;
}
header#hedaer #bag-link ul.dropdown-menu.show,
header#hedaer ul.brand-dropdown.dropdown-menu.show {
	max-height: 100vh !important;
}

    #hedaer {
    	background: white;
    	transition: top 0.2s ease-in-out !important;
    }
    
    #hedaer .py-2 {
    	padding: 0 !important;
    }
    .header-slim > li {
    	width: auto !important;
    }
    body header#hedaer ul.dropdown-menu.show {
    	top: 40px!important;
    	padding-top: 120px;
    	padding-bottom: 100px !important;
    }
    #main-menu > li > ul {
    	padding-left: 10%;
    	padding-right: 10%;
    }
    #main-menu > li > ul > li {
    	width: 19%;
    	vertical-align: top;
    }
    #main-menu > li > ul.brand-dropdown ul {
    	width: 100% !important;
    	column-width: 18%;
    	column-count: 3;
    	column-gap: 1%;
    	padding-left: 20% !important;
    	padding-right: 20% !important;
    	box-sizing: border-box;
    	max-height: 1000000vh !important;
    }
    #main-menu > li > ul.brand-dropdown > li {
    	width: 100% !important;
    }
    #main-menu > li > ul > li  a {
    	font-family: Standard Book;
        font-size: 12px !important;
        line-height: 26px !important;
        text-align: center;
        color: #000000;
    	padding: 0 !important;
    	border: 0px solid #000 !important;
    	cursor: pointer;
    }
    #main-menu > li > ul > li  a:hover {
        opacity: .7;
    }
    #main-menu > li > ul > li.menu-item-object-custom > a {
    	
        font-size: 10px !important;
        line-height: 14px !important;
        text-transform: uppercase;
        color: #000000;
        opacity: 0.7;
    	padding-bottom: 15px !important;
    }
    #main-menu > li > ul > li > ul {
    	position: relative !important;
        top: 0 !important;
        left: 0 !important;
        z-index: 1000;
        display: inline-block !important;
    	border: 0px solid #000 !important;
    	padding-bottom: 20px !important;
    	padding-top: 20px !important;
    	overflow: hidden !important;
    }
    #main-menu > li > ul > li > ul >li {
    	width: 100% !important;
    }
    #main-menu div > ul > li {
    	width: 100%;
    }
    .menu-new-menu-container .left-side-menu li.newsymbol {
    	padding-bottom: 30px !important;
    }
    .serch-menu-item {
    	width: 50% !important;
    }    
    .serch-menu-item .dgwt-wcas-no-submit .dgwt-wcas-sf-wrapp input[type=search].dgwt-wcas-search-input {
    	text-align: center !important;
    	border: 0px solid #ddd !important;
    	border-bottom: 1px solid #000000 !important;
    	border-radius: 0 !important;
    }
    .serch-menu-item .dgwt-wcas-no-submit .dgwt-wcas-sf-wrapp input[type=search].dgwt-wcas-search-input {
        font-family: Standard Book;
        font-size: 16px;
        line-height: 19px;
        color: #000000;
    	font-style: normal !important;
        font-weight: normal !important;
    }
    .serch-menu-item .dgwt-wcas-no-submit .dgwt-wcas-sf-wrapp input[type=search].dgwt-wcas-search-input::placeholder {
        opacity: 0.5;
    	font-style: normal !important;
        font-weight: normal !important;
    }
    .serch-menu-item .dgwt-wcas-no-submit .dgwt-wcas-sf-wrapp svg,
    .dgwt-wcas-suggestions-wrapp {
    	display: none !important;
    }
    .custom-answer .dgwt-wcas-suggestion {
    	display: inline-block !important;
    	width: 100% !important;
    }
    .custom-answer .dgwt-wcas-suggestion .dgwt-wcas-si,
    .custom-answer .dgwt-wcas-suggestion .dgwt-wcas-content-wrapp {
    	display: inline-block !important;
    	vertical-align: top;
    	margin: 10px 0 10px 0;
    }
    .custom-answer .dgwt-wcas-suggestion .dgwt-wcas-content-wrapp {
    	width: auto !important;
    }
    .custom-answer .dgwt-wcas-suggestion .dgwt-wcas-content-wrapp .dgwt-wcas-st-title {
    	line-height: 50px !important;
    }
    #main-menu > li > ul.search-dropdown > li .custom-answer .dgwt-wcas-suggestion-more .dgwt-wcas-st-more {
    	width: 217px !important;
        height: 42px !important;
    	display: inline-block !important;
    	border: 1px solid #000000 !important;
        box-sizing: border-box;
        border-radius: 50px;
    	font-family: Standard Book;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        line-height: 42px;
        color: #000000;
    }
    #main-menu .cart-customlocation {
    	width: auto !important;
        border: 0px solid !important;
    }
    .nav-up {
        top: -70px !important;
    }
#hedaer #new-woocommerce-cart-form table.cart .product-thumbnail img {
    	max-width: 156px !important;
    	max-height: 152px !important;
    	border-radius: 15px !important;
    }
    #hedaer #new-woocommerce-cart-form table.cart .product-thumbnail a {
    	display: inline-block !important;
    	border: 1px solid rgba(0, 0, 0, 0.2) !important;
        box-sizing: border-box !important;
        border-radius: 15px !important;
    	width: 158px !important;
    	height: 154px !important;
    	text-align: center !important;
    	margin-right: 15px !important;
    }
    #hedaer #new-woocommerce-cart-form table.cart .product-thumbnail {
    	padding-left: 0 !important;
    	padding-right: 0 !important;
    }
    #hedaer #new-woocommerce-cart-form table.cart .product-name {
    	text-align: center !important;
    	position: relative !important;
    	vertical-align: top !important;
    	adding-left: 0 !important;
    	padding-right: 0 !important;
    }
    #hedaer #new-woocommerce-cart-form table.cart .product-name .brand-name {
    	font-family: Standard Book !important;
        font-size: 12px !important;
        line-height: 14px !important;
        color: #000000 !important;
    }
    #hedaer #new-woocommerce-cart-form table.cart .product-name .product-name-inner {
    	font-family: Standard Book !important;
        font-size: 12px !important;
        line-height: 14px !important;
        color: #000000 !important;
    }
    #hedaer #new-woocommerce-cart-form table.cart .product-name .q-price {
    	position: absolute !important;
    	top: 115px !important;
    	width: 94% !important;
        text-align: center !important;
    }
    #hedaer #new-woocommerce-cart-form table.cart .product-name .q-price .quantity {
    	width: auto !important;
    	display: inline-block !important;
    }
    #hedaer #new-woocommerce-cart-form table.cart .product-name .q-price,
    #hedaer #new-woocommerce-cart-form table.cart .product-name .q-price span,
    #hedaer #new-woocommerce-cart-form table.cart .product-name .q-price .woocommerce-Price-amount bdi {
    	font-family: Standard Book !important;
        font-size: 12px !important;
        line-height: 14px !important;
        color: #000000 !important;
    }
    #hedaer #new-woocommerce-cart-form table.cart .product-name .q-price a.remove {
    	font-family: Standard Book !important;
        font-size: 10px !important;
        line-height: 12px !important;
        text-transform: uppercase !important;
        color: #000000 !important;
        opacity: 0.5 !important;
    	height: auto !important;
    	width: 100% !important;
    	margin-top: 5px !important;
    }
    #hedaer #new-woocommerce-cart-form table.cart .product-name .q-price  a.remove:hover {
    	background: transparent !important;
    }
    #hedaer #new-woocommerce-cart-form .woocommerce-cart-form {
    	width: 320px !important;
    	margin: auto !important;
    	text-align: center !important;
    }
    #hedaer #new-woocommerce-cart-form .woocommerce-cart-form__cart-item {
    	border-bottom: 0px solid transparent !important;
    }
    .woocommerce-checkout-review-order-table .product-total {
	    font-family: Standard Book !important;
        font-size: 12px !important;
        line-height: 14px !important;
        color: #000000 !important;
    	width: 50px !important;
        padding-right: 0px !important;
        text-align: right !important;
    	border-top: 0px solid #000 !important;
    }
    .woocommerce-checkout-subtotal-order-table td,
    .woocommerce-checkout-subtotal-order-table th {
    	font-family: Standard Book !important;
        font-size: 12px !important;
        line-height: 14px !important;
        color: #000000 !important;
    	padding: 0 0 7px 0 !important;
    	border: 0px solid transparent !important;
    	
    }
    #hedaer #new-woocommerce-cart-form .checkout-button {
    	width: 215px !important;
        height: 40px !important;
        background: #000000 !important;
        border: 1px solid #000000 !important;
        box-sizing: border-box !important;
        border-radius: 50px !important;
    	font-family: Standard Book !important;
        font-size: 12px !important;
        text-align: center !important;
        color: #FFFFFF !important;
    	margin : auto !important;
    	float: none !important;
    	text-transform: uppercase !important;
    	display: inline-block;
        line-height: 40px !important;
    }
    #hedaer #new-woocommerce-cart-form .woocommerce-cart-form__contents {
    	width: 100% !important;
    }
    #hedaer #new-woocommerce-cart-form .woocommerce-cart-form__contents td {
    	padding: 10px 0 10px 0 !important;
    }
    #hedaer #new-woocommerce-cart-form .cart-enter-email {
    	font-family: Standard Book !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 12px !important;
        line-height: 14px !important;
        text-align: center !important;
        color: #000000 !important;
    }
    #hedaer #new-woocommerce-cart-form .cart-input-email {
        opacity: 0.5 !important;
        border: 1px solid #000000 !important;
        box-sizing: border-box !important;
        border-radius: 5px !important;
    	margin-bottom: 20px !important;
    	text-align: center !important;
    	width: 100% !important;
    	height: 35px !important;
    	line-height: 35px !important;
    	font-family: Standard Book !important;
        font-size: 14px !important;
        line-height: 17px !important;
        color: #000000 !important;
    }
    #hedaer #new-woocommerce-cart-form .cart-have-account {
        display: block !important;
    	margin: 15px 0 0 0 !important;
    }
    .product-name-inner {
    	display: inline-block;
    }
    @media (max-width: 600px) {
    	#main #wpfBlock_1 li {
    		width: 50% !important;
        }
        body header#hedaer ul.dropdown-menu.show {
        	top: 20px!important;
        	padding-top: 120px;
        	padding-bottom: 100px !important;
        }
        #main-menu > li > ul > li {
        	width: 48%;
        	vertical-align: top;
        }
        #main-menu > li > ul.brand-dropdown ul {
        	width: 100% !important;
        	column-width: 48%;
        	column-count: 2;
        	column-gap: 1%;
        	padding-left: 5% !important;
        	padding-right: 5% !important;
        	box-sizing: border-box;
        }
        #main-menu > li > ul.wo-men-dropdown {
    	   width: 100% !important;
        	column-width: 48%;
        	column-count: 2;
        	column-gap: 1%;
        	padding-left: 5% !important;
        	padding-right: 5% !important;
        	box-sizing: border-box;
        }
        #main-menu > li > ul.wo-men-dropdown > li {
    	   width: 100% !important;
        	padding-top: 0px !important;
        	padding-bottom: 35px !important;
        }
        
        .serch-menu-item {
        	width: 100% !important;
        }    
        header#hedaer ul.dropdown-menu.show {
        	width: 100% !important;
        }
        .volume-icon-box {
        	top: 0 !important;
        } 
        .menu-new-menu-container {
        	display: inline-block !important;
        	top: 10px !important;
        }
        body header#hedaer ul.dropdown-menu.show {
        	padding-top: 100px !important;
        }
        .wo-men-dropdown > li:first-child,
        .wo-men-dropdown > li:last-child {
        	float: left;
        }
        .wo-men-dropdown > li:last-child {
        	padding-top: 35px !important;
        }
        .js-dgwt-wcas-enable-mobile-form {
        	display: none !important;
        }
        .bag-title {
        	display: inline-block !important;
        }
        body header#hedaer .menu-new-menu-container .left-side-menu > li {
        	padding: 0 10px !important;
        }
        .woocommerce table.shop_table_responsive tr td::before, .woocommerce-page table.shop_table_responsive tr td::before {
        	content: "" !important; 
        }
    }
    
</style>
	
<script>
	jQuery(document).ready(function() {
		
        jQuery('#main-menu > li > ul > li.menu-item-object-custom > a').attr('href', '#');
        jQuery( "#main-menu > li > ul > li.menu-item-object-custom > a" ).click(function( event ) {
      	  event.preventDefault();
      	});

        jQuery("body").on('DOMSubtreeModified', ".dgwt-wcas-suggestions-wrapp", function() {
        	jQuery( ".custom-answer").html('');
        	jQuery( ".custom-answer").prepend( jQuery( ".dgwt-wcas-suggestions-wrapp > a" ) );
        	jQuery( ".dgwt-wcas-st-more").html(jQuery( ".dgwt-wcas-st-more").html().replace('...',''));
        });

        jQuery("#main-menu > li > a").on('click', function() {
        	jQuery('.volume-icon').each(function () {
                var num = Math.floor(Math.random() * 38 + 1),
                    img = jQuery(this);
                img.attr('src', '/log/' + num + '.svg');
                img.attr('alt', 'Src: ' + img.attr('src'));
              });
        });
        
        
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 0;
        var navbarHeight = jQuery('header').outerHeight();

        jQuery(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 1);

        function hasScrolled() {
            var st = jQuery(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;

			console.log(jQuery('.menu-item.show').outerHeight());
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > 0 && !jQuery('.menu-item.show').outerHeight()){
                // Scroll Down
                jQuery('header').removeClass('nav-down').addClass('nav-up');
                jQuery('.volume-icon-box').removeClass('logo-down').addClass('logo-up');
                jQuery('.volume-icon').removeClass('logo-down').addClass('logo-up');
            } else {
                // Scroll Up
                if(st + jQuery(window).height() < jQuery(document).height()) {
                    jQuery('header').removeClass('nav-up').addClass('nav-down');
                    jQuery('.volume-icon-box').removeClass('logo-up').addClass('logo-down');
                    jQuery('.volume-icon').removeClass('logo-up').addClass('logo-down');
                }
            }
            
            lastScrollTop = st;
        }
	});
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.cookie.js"></script>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W2KTD5X"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


  
 
  
  
<!--  <img class="volume-icon" src='/log/2.svg'>-->
   



<div class="site" id="page">
    
  <img class="volume-icon" src="">
<a href="/" class="volume-icon-box"></a>
	




<header id="hedaer">
 
<div class="container-fluid">

  <div class="row align-items-center py-2">
    <div class="col-12 text-center">
    
      <ul class="header-slim">
       
       
        <li>
          <div class="menu-new-menu-container">
          	<ul id="main-menu" class="left-side-menu">
          		<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6917" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-6917 nav-item">
          			<a title="women" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-6917">women</a>
					<ul class="dropdown-menu wo-men-dropdown" aria-labelledby="menu-item-dropdown-6917" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(372px, 38px, 0px);">
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-10963" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-10963 nav-item">
							<a title="Shop Women" href="#" class="dropdown-item">Shop Women</a>
    						<?php wp_nav_menu(
            					array(
            						'theme_location'  => 'primary',
            					    'menu'            => 'shop-women',
            						'container_class' => '',
            						'container_id'    => '',
            						'menu_class'      => 'menu-under',
            						'fallback_cb'     => '',
            						'menu_id'         => 'shop-women',
            						'depth'           => 1,
            						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            					)
            				); ?>
						</li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-109631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-109631 nav-item">
							<a title="Women Clothing" href="#" class="dropdown-item">Women Clothing</a>
    						<?php wp_nav_menu(
            					array(
            						'theme_location'  => 'primary',
            					    'menu'            => 'women-clothing',
            						'container_class' => '',
            						'container_id'    => '',
            						'menu_class'      => 'menu-under',
            						'fallback_cb'     => '',
            						'menu_id'         => 'women-clothing',
            						'depth'           => 1,
            						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            					)
            				); ?>
						</li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-109631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-109631 nav-item">
							<a title="Shoes & Accessories" href="#" class="dropdown-item">Shoes & Accessories</a>
    						<?php wp_nav_menu(
            					array(
            						'theme_location'  => 'primary',
            					    'menu'            => 'shoes-accessories',
            						'container_class' => '',
            						'container_id'    => '',
            						'menu_class'      => 'menu-under',
            						'fallback_cb'     => '',
            						'menu_id'         => 'shoes-accessories',
            						'depth'           => 1,
            						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            					)
            				); ?>
						</li>
					</ul>
				</li>
				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6917" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-6917 nav-item">
          			<a title="men" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-6917">men</a>
					<ul class="dropdown-menu wo-men-dropdown" aria-labelledby="menu-item-dropdown-6917" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(372px, 38px, 0px);">
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-10963" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-10963 nav-item">
							<a title="Shop Men" href="#" class="dropdown-item">Shop Men</a>
    						<?php wp_nav_menu(
            					array(
            						'theme_location'  => 'primary',
            					    'menu'            => 'shop-men',
            						'container_class' => '',
            						'container_id'    => '',
            						'menu_class'      => 'menu-under',
            						'fallback_cb'     => '',
            						'menu_id'         => 'shop-men',
            						'depth'           => 1,
            						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            					)
            				); ?>
						</li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-109631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-109631 nav-item">
							<a title="Men Clothing" href="#" class="dropdown-item">Men Clothing</a>
    						<?php wp_nav_menu(
            					array(
            						'theme_location'  => 'primary',
            					    'menu'            => 'men-clothing',
            						'container_class' => '',
            						'container_id'    => '',
            						'menu_class'      => 'menu-under',
            						'fallback_cb'     => '',
            						'menu_id'         => 'men-clothing',
            						'depth'           => 1,
            						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            					)
            				); ?>
						</li>
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-109631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-109631 nav-item">
							<a title="Shoes & Accessories" href="#" class="dropdown-item">Shoes & Accessories</a>
    						<?php wp_nav_menu(
            					array(
            						'theme_location'  => 'primary',
            					    'menu'            => 'shoes-accessories-men',
            						'container_class' => '',
            						'container_id'    => '',
            						'menu_class'      => 'menu-under',
            						'fallback_cb'     => '',
            						'menu_id'         => 'shoes-accessories-men',
            						'depth'           => 1,
            						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
            					)
            				); ?>
						</li>
					</ul>
				</li>
				
				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6917" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-6917 nav-item">
          			
          			<script type="text/javascript">
    				jQuery(document).ready(function() {
                        var iScrolled = 0;
    					jQuery('.menu-item-dropdown-brands').on("click", function(){
    
    						if(jQuery('#menu-item-dropdown-brands').attr('aria-expanded') == 'true') {
    							jQuery('#page').css('height', '100%');
    							jQuery('#page').css('overflow', 'show');
    							jQuery(window).scrollTop(iScrolled);
    						} else {
    							iScrolled = jQuery(window).scrollTop();
    							jQuery(window).scrollTop(0);
    							jQuery('#page').css('height', '100px');
    							jQuery('#page').css('overflow', 'hidden');
    						}
    					});
    					jQuery('#page').on("click", function(){
    						if(jQuery('#menu-item-dropdown-brands').attr('aria-expanded') == 'true' || jQuery('#menu-item-dropdown-bag').attr('aria-expanded') == 'true') {
    							jQuery('#page').css('height', '100%');
    							jQuery('#page').css('overflow', 'show');
    							jQuery(window).scrollTop(iScrolled);
    						}
    					});
    				});
                    </script>
          			
          			<a title="brands" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link menu-item-dropdown-brands" id="menu-item-dropdown-brands">brands</a>
					<ul class="dropdown-menu brand-dropdown" aria-labelledby="menu-item-dropdown-6917" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(372px, 38px, 0px);">
						<li>
						<div id="new-woocommerce-cart-form" style="margin-bottom: 40px !important;">
        							<ul>
						<?php  
                    	$brands = array();
                    	$brands = \Perfect_Woocommerce_Brands\Perfect_Woocommerce_Brands::get_brands(true);
                    	
                    	$lastsymbol = '';
                    	$newsymbol = '';
                 
                    	$i = 1;
                    	$brandss = array();
                    	
                    	foreach ($brands as $brand) {
                    	    $brandss[$i] = $brand;
                    	    $i++;
                    	}
                    	
                    	foreach ($brandss as $key => $brand) {
                    	    $lastsymbol = mb_strtolower(mb_substr($brand->name,0,1));
                    	    if(isset($brandss[$key+1])) {
                    	        $newsymbol = mb_strtolower(mb_substr($brandss[$key+1]->name,0,1));
                    	    } else {
                    	        $newsymbol = '';
                    	    }
                    	    if($lastsymbol != $newsymbol) {
                    	?>
                        	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-10963" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10965 nav-item newsymbol">
    							<a title="<?php echo $brand->name ?>" href="/brand/<?php echo $brand->slug ?>/" class="nav-link"><?php echo $brand->name ?></a>
    						</li>
                        <?php
                    	    } else {
                    	?>
                    		<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-10963" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10965 nav-item">
    							<a title="<?php echo $brand->name ?>" href="/brand/<?php echo $brand->slug ?>/" class="nav-link"><?php echo $brand->name ?></a>
    						</li>
                    	<?php 
                    	    }
                        }
                    	?>
						</ul>
						</div>
						</li>
					</ul>
				</li>
				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6917" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-6917 nav-item">
          			<a title="search" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-6917">search</a>
					<ul class="dropdown-menu search-dropdown" aria-labelledby="menu-item-dropdown-6917" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(372px, 38px, 0px);">
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-10963" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10965 nav-item serch-menu-item">
							<?php echo do_shortcode('[fibosearch]'); ?>
							<div class="custom-answer">
							</div>	
						</li>
					</ul>
				</li>
				
				<li id="bag-link">
				
				<script type="text/javascript">
				jQuery(document).ready(function() {
                    var iScrolled = 0;
					jQuery('.menu-item-dropdown-bag').on("click", function(){

						if(jQuery('#menu-item-dropdown-bag').attr('aria-expanded') == 'true') {
							jQuery('#page').css('height', '100%');
							jQuery('#page').css('overflow', 'show');
							jQuery(window).scrollTop(iScrolled);
						} else {
							iScrolled = jQuery(window).scrollTop();
							jQuery(window).scrollTop(0);
							jQuery('#page').css('height', '100px');
							jQuery('#page').css('overflow', 'hidden');
						}
					});
					
				});
                 </script>
                 
				
					<a title="Bag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link menu-item-dropdown-bag" id="menu-item-dropdown-bag" ><span class="bag-title">Bag</span>  <span class="cart-customlocation"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a>
					<ul class="dropdown-menu currency-dropdown menu-item-dropdown-bag" aria-labelledby="menu-item-dropdown-6917" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(372px, 38px, 0px);">
						<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-10963" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10965 nav-item serch-menu-item">
        							<div id="new-woocommerce-cart-form" style="margin-bottom: 40px !important;">
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
					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>" style="display: table-row !important">
						<td class="product-thumbnail"  style="display: table-cell !important">
						<?php
						$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

						if ( ! $product_permalink ) {
							echo $thumbnail; // PHPCS: XSS ok.
						} else {
						    printf( '<a href="%s" style="background: url(%s) center center no-repeat; background-size: contain;"></a>', esc_url( $product_permalink ), wp_get_attachment_image_url( $_product->get_image_id(), 'thumbnail' ) ); // PHPCS: XSS ok.
						}
						?>
						</td>
						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>"  style="display: table-cell !important">
						
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
						<br/>
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
	
<table class="shop_table woocommerce-checkout-subtotal-order-table" style="width: 100%">
	<tfoot>

		<tr class="cart-subtotal">
			<th  style="text-align: left; font-weight: normal;"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
			<td style="text-align: right;"><?php wc_cart_totals_subtotal_html(); ?></td>
		</tr>

		<tr class="woocommerce-shipping-totals shipping">
    		<th  style="text-align: left; font-weight: normal;">Shipping</th>
    		<td data-title="Shipping" style="text-align: right;">
    			Calculated at Checkout
    		</td>
    	</tr>


		<?php do_action( 'woocommerce_review_order_before_order_total' ); ?>

		<tr class="order-total">
			<th  style="text-align: left; font-weight: normal;"><?php esc_html_e( 'Total', 'woocommerce' ); ?></th>
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
</form>	
</div>
        				</li>
					</ul>
				</li>
			</ul>
		</div>
          
          
          
          
          
          
          
           
<!--
           <?php
           if ( is_user_logged_in() ) {
   echo '<li><a href="/my-account/" class="nav-link">Orders</a></li>';
} else {
   echo '<li><a href="/my-account/" class="nav-link">Login</a></li>';
}?>
-->
           

           <?php global $woocommerce; ?>
<!--
 <a class="your-class-name" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"
title="<?php _e('Cart View', 'woothemes'); ?>">

<?php echo $woocommerce->cart->get_cart_total(); ?>
</a>
-->

     
    </div>
  
  </div>
</div>
  
  
<!--  <?php echo WC()->cart->get_cart_total(); ?>-->
  
</header>




<!--< ?php dynamic_sidebar( 'category-area' ); ?>-->
<!--< ?php echo do_shortcode( '[pwb-all-brands per_page="30" image_size="full" hide_empty="false" order_by="date" order="ASC" title_position="before"]' ); ?>-->









