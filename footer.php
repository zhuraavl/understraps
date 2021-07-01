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


<!--
<div class="subscribe-form pt-5 pb-4 mb-3">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h4 class="mb-3">Join Our Newsletter</h4>
        <?php echo do_shortcode('[contact-form-7 id="233" title="Contact form 1"]') ?>  
      </div>
    </div>
  </div>
</div>
-->
 


<div class="wrapper" id="wrapper-footer">
  
	<div class="container-fluid">
    
    
   
		<div class="row py-3">
      <div class="col-12 col-sm-3 social text-center text-md-left">
      <a href="https://www.instagram.com/2020s.shop.official/" target="_blank" class="px-1"><img src="<?php echo get_template_directory_uri(); ?>/pic/instagram-2.svg" alt="" width="20px"></a>
      <a href="" class="px-1"><img src="<?php echo get_template_directory_uri(); ?>/pic/telegram.svg" alt="" width="20px"></a></div>
      <div class="col-12 col-sm-6 text-center footer-menu">
        <a href="https://2020s.shop/about/">About</a>
        <a href="https://2020s.shop/shipping/">Shipping</a>
        <a href="https://2020s.shop/returns/">Returns</a>
        <a href="https://2020s.shop/terms/">Terms</a>
        
        <a href="https://2020s.shop/contact/">Contact</a>
      </div>
     <div class="col-12 col-sm-3 pay-icos text-center text-md-right">
          <img src="<?php echo get_template_directory_uri(); ?>/pic/pay2.png" alt="" class="mx-1" width="25px">
        <img src="<?php echo get_template_directory_uri(); ?>/pic/pay3.png" alt="" class="mx-1" width="25px">
     </div>
      

	

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
<!--<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>-->
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery.marquee@1.5.0/jquery.marquee.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/parallax-js.js"></script>



</body>

</html>

