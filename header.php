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
    #hedaer {
    	background: white;
    	transition: top 0.2s ease-in-out !important;
    }
    .volume-icon,
    .volume-icon-box {
    	margin-top: 50px;
    }
    #hedaer .py-2 {
    	padding: 0 !important;
    }
    .header-slim > li {
    	width: auto !important;
    }
    body header#hedaer ul.dropdown-menu.show {
    	top: 40px!important;
    	padding-top: 100px;
    	padding-bottom: 100px;
    }
    #main-menu > li > ul {
    	padding-left: 10%;
    	padding-right: 10%;
    }
    #main-menu > li > ul > li {
    	width: 19%;
    	vertical-align: top;
    }
    #main-menu > li > ul.brand-dropdown {
    	width: 100% !important;
    	column-width: 18%;
    	column-count: 5;
    	column-gap: 1%;
    }
    #main-menu > li > ul.brand-dropdown > li {
    	width: 100% !important;
    }
    #main-menu > li > ul > li  a {
    	font-family: Standard Book;
        font-size: 14px !important;
        line-height: 30px !important;
        text-align: center;
        color: #000000;
    	padding: 0 !important;
    	border: 0px solid #000 !important;
    	cursor: pointer;
    }
    #main-menu > li > ul > li.menu-item-object-custom > a {
    	
        font-size: 12px !important;
        line-height: 14px !important;
        text-transform: capitalize;
        color: #000000;
        opacity: 0.7;
    	padding-bottom: 20px !important;
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
    @media (max-width: 600px) {
        #main-menu > li > ul > li {
        	width: 48%;
        	vertical-align: top;
        }
        #main-menu > li > ul.brand-dropdown {
        	width: 100% !important;
        	column-width: 48%;
        	column-count: 2;
        	column-gap: 1%;
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
                var num = Math.floor(Math.random() * 2 + 1),
                    img = jQuery(this);
                img.attr('src', '/log/' + num + '.svg');
                img.attr('alt', 'Src: ' + img.attr('src'));
              });
        });
        
        
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = jQuery('header').outerHeight();

        jQuery(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = jQuery(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                jQuery('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + jQuery(window).height() < jQuery(document).height()) {
                    jQuery('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
        
	});
</script>
	
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
          			<a title="brands" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-6917">brands</a>
					<ul class="dropdown-menu brand-dropdown" aria-labelledby="menu-item-dropdown-6917" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(372px, 38px, 0px);">
						
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
				<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6917" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-6917 nav-item">
				
					<div style="display: none !important"><?php echo do_shortcode('[woo-currency-switcher]')?></div>
				
					<?php 
					   $modsss = frameWcu::_()->getModule('currency');
					  
					   $currencyModel = frameWcu::_()->getModule('currency')->getModel();
					   $currencies = $currencyModel->getCurrencies();
					   
					   
					?>

          			<a title="currency" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-6917"><?php echo $modsss->currentCurrency ?></a>
					<ul class="dropdown-menu currency-dropdown" aria-labelledby="menu-item-dropdown-6917" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(372px, 38px, 0px);">
						<?php foreach ($currencies as $key => $currency) {?>
							<?php if($modsss->currentCurrency != $currency['name']) { ?>
    							<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-10963" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10965 nav-item serch-menu-item">
        							<a title="<?php echo $currency['name']?>" class="nav-link" onclick="wcuUpdateUrlParam('currency', '<?php echo $currency['name']?>');"><?php echo $currency['name']?></a>
        						</li>
							<?php }?>
						<?php }?>
					</ul>
				</li>
				<li><a href="/cart" class="nav-link xoo-wsc-cart-trigger"><span class="bag-title">Bag</span>  <span class="cart-customlocation"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a></li>
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









