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
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-143786884-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-143786884-3');
</script>


</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>



  
 
  
  
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









