<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>


<section class="white-bg subscribe-and-socials-footer mb-5">
<div class="hero-box mainpage-subscribe-title">
    <h2 class="">Subscribe to our<br/>updates</h2>
</div>
<div class="mainpage-subscribe">
	<?php echo do_shortcode('[contact-form-7 id="233" title="Contact form 1"]') ?>  
	<div class="socs">
		<a href="https://www.instagram.com/2020s.shop.official/"><img src="http://2020s.shop/wp-content/themes/understrap/pic/instagram-2.svg" alt="" width="20px"></a>
		<a href=""><img src="http://2020s.shop/wp-content/themes/understrap/pic/face.svg" alt="" width="10px"></a>
		<a href=""><img src="http://2020s.shop/wp-content/themes/understrap/pic/pin.svg" alt="" width="20px"></a>
		<a href=""><img src="http://2020s.shop/wp-content/themes/understrap/pic/twitt.svg" alt="" width="20px"></a>
	</div>
</div>
</section>




<!--
<div class="subscribe-form pt-5 pb-4 mb-3">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="mb-3">Join Our Newsletter</h4>
        < ?php echo do_shortcode('[contact-form-7 id="233" title="Contact form 1"]') ?>  
      </div>
    </div>
  </div>
</div>
-->
 


<div class="wrapper" id="wrapper-footer">
  
	<div class="container-fluid">
    
    
   
		<div class="row py-3">
      
      <div class="col-12 col-sm-12 text-center footer-menu">
       <ul>
       <li><a href="/about/">About</a></li>
       <li><a href="/shipping/">Shipping & Returns</a></li>
       <li><a href="/terms/">Terms</a></li>
       <li><a href="/contact/">Contact</a></li>
        
        
        <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-6917">
				
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
        
        </ul>
      </div>
     <div class="pay-icos text-center">
<!--        <img src="< ?php echo get_template_directory_uri(); ?>/pic/image7.svg" alt="" class="mx-1" width="35px">-->
        <img src="<?php echo get_template_directory_uri(); ?>/pic/image8.svg" alt="" class="mx-1" width="35px">
        <img src="<?php echo get_template_directory_uri(); ?>/pic/image10.svg" alt="" class="mx-1" width="35px">
        <img src="<?php echo get_template_directory_uri(); ?>/pic/image9.svg" alt="" class="mx-1" width="35px">
     </div>
      

	

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
<!--<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax-js.js"></script>

<script>
	jQuery(document).ready(function() {
        jQuery('.mainpage-subscribe .wpcf7-submit').attr('value', '↳');
        jQuery('.mainpage-subscribe .wpcf7-submit').hide();
        jQuery('.mainpage-subscribe .wpcf7-email').on('change', function(){
        	jQuery('.mainpage-subscribe .wpcf7-submit').show();
        });
        <?php 
  		  if(isset($_GET['opencart'])) {
  		?>
  			console.log('111');

  			jQuery('#menu-item-dropdown-bag').trigger("click");
  			//jQuery('#bag-link').addClass("show");
  			//jQuery('#bag-link ul').addClass("show");
  			//jQuery('#menu-item-dropdown-bag').attr("aria-expanded", "true");
  		<?php 
  	        }
  		?>
	});
</script>
<style>
.socs {
	width: 100%;
	display: inline-block;
	text-align: center;
	margin: 0px 0 5px 0;
}
.socs a {
	display: inline-block;
	vertical-align: top;
	margin: 0 15px 0 15px;
}
.socs i {
	font-size: 20px;
	padding-top: 10px;
}
.pay-icos {
	width: 100%;
	display: block;
	margin-top: 30px;
	margin-bottom: 10px;
}
.pay-icos img {
    margin: 0 10px 0 10px;
}
.mainpage-subscribe input {
	text-align: center;
}
.mainpage-subscribe .wpcf7-submit {
	font-family: Inter !important;
    font-size: 16px !important;
    line-height: 30px !important;
    text-align: center !important;
    color: #000000 !important;
	display: none;
}
.mainpage-subscribe-title h2 {
	font-family: ZIGZAG-NotRounded;
    font-size: 24px;
    line-height: 29px;
    text-align: center;
    color: #000000;
	margin-bottom: 15px;
}
.home .mainpage-subscribe-title h2 {
	font-family: ZIGZAG-NotRounded;
    font-style: normal;
    font-weight: normal;
    font-size: 60px;
    line-height: 72px;
    text-align: center;
    color: #000000;
	margin-bottom: 25px;
}
.home .socs {
	margin-bottom: 85px;
}
#wrapper-footer {
    margin-top: 0 !important;
    padding-top: 0 !important;
}


</style>


</body>

</html>

