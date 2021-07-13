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
          <div class="open-mobil">
            <span></span>
            <span></span>
            <span></span>
          </div>
           <?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'left-side-menu',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 3,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
        </li>
        
        
        <li>
           
        </li>
        
         
      
        
        <li>
          <ul class="side-right-menu">
          <li>
           <?php echo do_shortcode('[fibosearch]'); ?>
            
          </li>
           <li><?php echo do_shortcode('[woo-currency-switcher]')?></li>
           
           
<!--
           <?php
           if ( is_user_logged_in() ) {
   echo '<li><a href="/my-account/" class="nav-link">Orders</a></li>';
} else {
   echo '<li><a href="/my-account/" class="nav-link">Login</a></li>';
}?>
-->
           
          
			   
			    
			    <li><a href="/cart" class="nav-link xoo-wsc-cart-trigger"><span class="bag-title">Bag</span>  <span class="cart-customlocation"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span></a></li>
			  </ul>
           <?php global $woocommerce; ?>
<!--
 <a class="your-class-name" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"
title="<?php _e('Cart View', 'woothemes'); ?>">

<?php echo $woocommerce->cart->get_cart_total(); ?>
</a>
-->
        </li>
      </ul>
     
     
     
    </div>
  
  </div>
</div>
  
  
<!--  <?php echo WC()->cart->get_cart_total(); ?>-->
  
</header>




<!--< ?php dynamic_sidebar( 'category-area' ); ?>-->
<!--< ?php echo do_shortcode( '[pwb-all-brands per_page="30" image_size="full" hide_empty="false" order_by="date" order="ASC" title_position="before"]' ); ?>-->









