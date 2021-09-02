<?php
/**
 * Template Name: main page 2
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
	
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'blank' ); ?>

	<?php endwhile;  ?>
	

	
	
	
	<script type="text/javascript" src="/wp-content/themes/understrap/js/modernizr.custom.79639.js"></script>
	<script type="text/javascript" src="/wp-content/themes/understrap/js/jquery.ba-cond.min.js"></script>
	<script type="text/javascript" src="/wp-content/themes/understrap/js/jquery.slitslider.js"></script>
	<script type="text/javascript">	
		jQuery(document).ready(function($) {
			
				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),
						slitslider = $( '#slider' ).slitslider( {
							onBeforeChange : function( slide, pos ) {

								$nav.removeClass( 'nav-dot-current' );
								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}
						} ),

						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							$( '#slider' ).on('wheel', (function (e) {
						        e.preventDefault();
						        if (e.originalEvent.deltaY < 0) {
						        	slitslider.next();
						        } else {
						        	slitslider.previous();
						        }
						    }));

							
						};

						return { init : init };

				})(jQuery);

				Page.init();
				
				
			});
		</script>
		<link rel="stylesheet" href="/wp-content/themes/understrap/css/custom.css">
		<style>
            .sl-slider-wrapper {
            	width: 800px;
            	height: 400px;
            	margin: 0 auto;
            	position: relative;
            	overflow: hidden;
            }
            
            .sl-slider {
            	position: absolute;
            	top: 0;
            	left: 0;
            }
            
            /* Slide wrapper and slides */
            
            .sl-slide,
            .sl-slides-wrapper,
            .sl-slide-inner {
            	position: absolute;
            	width: 100%;
            	height: 100%;
            	top: 0;
            	left: 0;
            } 
            
            .sl-slide {
            	z-index: 1;
            }
            
            /* The duplicate parts/slices */
            
            .sl-content-slice {
            	overflow: hidden;
            	position: absolute;
            	-webkit-box-sizing: content-box;
            	-moz-box-sizing: content-box;
            	box-sizing: content-box;
            	background: #fff;
            	-webkit-backface-visibility: hidden;
            	-moz-backface-visibility: hidden;
            	-o-backface-visibility: hidden;
            	-ms-backface-visibility: hidden;
            	backface-visibility: hidden;
            	opacity : 1;
            }
            
            /* Horizontal slice */
            
            .sl-slide-horizontal .sl-content-slice {
            	width: 100%;
            	height: 50%;
            	left: -200px;
            	-webkit-transform: translateY(0%) scale(1);
            	-moz-transform: translateY(0%) scale(1);
            	-o-transform: translateY(0%) scale(1);
            	-ms-transform: translateY(0%) scale(1);
            	transform: translateY(0%) scale(1);
            }
            
            .sl-slide-horizontal .sl-content-slice:first-child {
            	top: -200px;
            	padding: 200px 200px 0px 200px;
            }
            
            .sl-slide-horizontal .sl-content-slice:nth-child(2) {
            	top: 50%;
            	padding: 0px 200px 200px 200px;
            }
            
            /* Vertical slice */
            
            .sl-slide-vertical .sl-content-slice {
            	width: 50%;
            	height: 100%;
            	top: -200px;
            	-webkit-transform: translateX(0%) scale(1);
            	-moz-transform: translateX(0%) scale(1);
            	-o-transform: translateX(0%) scale(1);
            	-ms-transform: translateX(0%) scale(1);
            	transform: translateX(0%) scale(1);
            }
            
            .sl-slide-vertical .sl-content-slice:first-child {
            	left: -200px;
            	padding: 200px 0px 200px 200px;
            }
            
            .sl-slide-vertical .sl-content-slice:nth-child(2) {
            	left: 50%;
            	padding: 200px 200px 200px 0px;
            }
            
            /* Content wrapper */
            /* Width and height is set dynamically */
            .sl-content-wrapper {
            	position: absolute;
            }
            
            .sl-content {
            	width: 100%;
            	height: 100%;
            	background: #fff;
            }
            
            /* Default styles for background colors */
            .sl-slide-horizontal .sl-slide-inner {
            	background: #ddd;
            }
            
            .sl-slide-vertical .sl-slide-inner {
            	background: #ccc;
            }

            
        </style>


	<?php get_footer(); ?>

	<?php wp_footer(); ?>
	
</body>
</html>
