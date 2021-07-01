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
       
       
       
       
        
	<div class="hero-box">
 
    <h2 class="">NEWEST FASHION BRANDS</h2>
    
    
    
<!--    <p class="hero-descr"></p>-->

</div>
	
	<div class="featires my-3 main-line">
      
	  
	  <?php echo do_shortcode( "[featured_products per_page='25' columns='10' orderby='rand' order='ASC']" ); ?>
	  
	  <a href="/shop?orderby=rand" class="button-shop">SHOW ALL</a>
	  
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	<div class="container py-5">
	<div class="row justify-content-center subsctibe pt-5 pb-5">
          <div class="col-12 col-md-12 col-sm-12 text-center">
           
           <ul class="flag-s">
             <li>🇪🇺</li>
             <li>🇺🇸</li>
             <li>🇨🇳</li>
             <li>🇯🇵</li>
             <li>🇨🇦</li>
             <li>🇷🇺</li>
             <li>🇦🇺</li>
           </ul>
            <h2 class="bold mb-0 mb-3">Brands from other countries soon</h2>
            
             
             <?php echo do_shortcode('[contact-form-7 id="233" title="Contact form 1"]') ?>  
             <p class="mb-1" style="font-size: 14px;">Subscribe to our updates!</p>
           
            
             
          </div>
        </div>
	
	</div>
	
	
	
	
	
	
	
	
	
	
	
	
	<?php get_footer(); ?>

	<?php wp_footer(); ?>
</body>
</html>
