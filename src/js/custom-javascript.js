jQuery(document).ready(function ($) {
 
  $('.single_add_to_cart_button').each(function() {
    $(this).removeClass('disabled');

  
  }); 
  
  
  
//  $('.product-images').each(function() {
//    $(this).addClass('parallax-container');
//    $('.product-images img').addClass('parallax');
//    $('.product-images img').attr('data-parallax','');
//    $('.product-images img').attr('data-scale','true');
//    
//  });
  

  
  
//  $(window).on('resize load', function () {
//    var $el = $('.summary.entry-summary');
//    $el.each(function () {
//        $(this).css('position', 'fixed').css({
//            
//        top: ($(window).height() - $el.height()) / 2
//        });
//    });
//});
//   $(window).on('resize load', function () {
//    var $el = $('.left-product');
//    $el.each(function () {
//        $(this).css('position', 'fixed').css({
//            
//        top: ($(window).height() - $el.height()) / 2
//        });
//    });
//});
//  
  
  
  
  
  
//$( "#tab-pwb_tab-content" ).clone().appendTo( ".brand-description-product" ); 
  
  
$( "#tab-pwb_tab-content" ).clone().appendTo( ".single-brand-info" );



$(".tax-pwb-brand").addClass("hero");


//$(window).scroll(function() {    
//    var scroll = $(window).scrollTop();
//
//    if (scroll >=50) {
//        $(".brand-description-product").addClass("hide");
//        
//      
//      
//    } else {
//        $(".brand-description-product").removeClass("hide");
//        
//    }
//});
//  
  
  
  
  
  
  
  
  
// $.fn.cycle = function(timeout){
//    var $all_elem = $(this)
//    var $time = ($all_elem.length)*300;
//    show_cycle_elem = function(index){
//        if(index == $all_elem.length) return; 
//      
//        $all_elem.hide().eq(index).show();
//        setTimeout(function(){show_cycle_elem(++index)}, timeout);
//        
//    }
//    show_cycle_elem(0);
//     var explode = function(){
//      $all_elem.show();
//      
//    };
//    setTimeout(explode, $time);
//}
//
// $(".product-images img").cycle(300);
//  
//   
//  
//  
//  (function () {
//
//
//    $('.product-images img').hide().first().show();
//    setInterval(function () {
//        $('.product-images img').hide().next().fadeIn().end().appendTo(".product-images");
//    }, 300);
//
//})();
  
  

 
  




$(function() {
    var height = $(window).height();
  $('.to-top').click(function() {
  	$("html, body").animate({ scrollTop: "0" });
    
		return false;
  });
  
}); 
  
 
   
  $('ul.dropdown-menu .menu-item-has-children > a').hover(function() {
  	$('ul.dropdown-menu.show .menu-item-has-children a').removeClass('active');
  	$('ul.dropdown-menu.show .menu-item-has-children .dropdown-menu').hide();
  	$(this).next().show();
  	$(this).addClass('active');
  });
   
  
  




//function scrollanim(){
//  
//  $('.summary.entry-summary, .left-product').addClass('op');
//  
//}
//
//setTimeout(
//    function() {
//        scrollanim();
//      
//    },
//    1000);
//
//

  
  
  
  
  
  
  
//  
//  
//  $('.widget-category-title').click(function() {
//  	$(this).next().fadeIn();
//  });
//  
//  $('.sorty-by-title').click(function() {
//  	$(this).next().fadeIn();
//  });
//  
 
//	$(document).mouseup(function (e){
//		var div = $(".product-categories, .dropdown-sort");
//		if (!div.is(e.target)
//		    && div.has(e.target).length === 0) {
//			div.hide();
//		}
//	});


//  
//if(document.URL.indexOf("?orderby=date") >= 0) {
//  $(".sorty-by-title").text( "Newest" )
//  };
//  if(document.URL.indexOf("?orderby=popularity") >= 0) {
//  $(".sorty-by-title").text( "Popular" )
//  };
// if(document.URL.indexOf("?orderby=price") >= 0) {
//  $(".sorty-by-title").text( "Price ↑" )
//  };
//  if(document.URL.indexOf("?orderby=price-desc") >= 0) {
//  $(".sorty-by-title").text( "Price ↓" )
//  };
//  
//  
  
  
  
  
// 
//  
//$(function(){
//    var current = location.pathname;
//    $('.pwb-row li a').each(function(){
//        var $this = $(this);
//        // if the current path is like this link, make it active
//        if($this.attr('href').indexOf(current) !== -1){
//            $this.addClass('active');
//        }
//    })
//})
//
//
//
//$(function(){
//    var currentBrand = $(".brand-name a").attr('href');
//    $('.pwb-row li a').each(function(){
//        var $this = $(this);
//        // if the current path is like this link, make it active
//        if($this.attr('href').indexOf(currentBrand) !== -1){
//            $this.addClass('active');
//        }
//    })
//})
//  
//  
  
  
// $(function() {
//  
//  $('.value input').click();
//  
//  
//}); 
//  
  
  
  
  
//  function anim(){
//
//    var sum=0;
//    
//    $('.related-category .products .product, .string-grid-products .products .product, .main-line .products .product').each( function(){ sum += $(this).width(); });
//    
//    $('.related-category .products').animate({
//          scrollLeft: "+" + sum + "px"
//        }, 40000, 'linear');
//    $('.string-grid-products .products').animate({
//          scrollLeft: "+" + sum + "px"
//        }, 60000, 'linear');
//    $('.main-line .products').animate({
//          scrollLeft: "+" + sum + "px"
//        }, 70000, 'linear');
//    $('.main-line .products').animate({
//          scrollLeft: 0
//        }, 70000, 'linear');
//  }
//  anim(); // initial kick

//  $('.related-category').on('mouseenter mouseleave',function( e ){
//    var mEnter = e.type=='mouseenter' ?  // if
//         $(".related-category .products").stop( 1 ) :  // is mouseenter (STOP!)
//                               anim() ;  // is mouseleave (ANIM!)
//  });
  
//  
//  $('.string-grid-products').on('mouseenter mouseleave',function( e ){
//    var mEnter = e.type=='mouseenter' ?  // if
//         $(".string-grid-products .products").stop( 1 ) :  // is mouseenter (STOP!)
//                               anim() ;  // is mouseleave (ANIM!)
//  });
//  
//   $('.main-line').on('mouseenter mouseleave',function( e ){
//    var mEnter = e.type=='mouseenter' ?  // if
//         $(".main-line .products").stop( 1 ) :  // is mouseenter (STOP!)
//                               anim() ;  // is mouseleave (ANIM!)
//  });
//  
//  
//  $('.main-line').on('swipe',function( e ){
//    var mEnter = e.type=='swipe' ?  // if
//         $(".main-line .products").stop( 1 ) :  // is mouseenter (STOP!)
//                               anim() ;  // is mouseleave (ANIM!)
//  });
//  
// 
//  
//  
  
  
  
  
  
  
  
 $(function(){
  
     if ($('html').is(':lang(en-us)')) {
      $('#billing_first_name').attr("placeholder", "First name");
       $('#billing_last_name').attr("placeholder", "Last name");
      $('#billing_state').attr("placeholder", "State / Region");
      $('#billing_address_1').attr("placeholder", "Address");
      $('#billing_address_2').attr("placeholder", "Apt / Unit / Building");
      $('#billing_city').attr("placeholder", "City");
      $('#billing_postcode').attr("placeholder", "Zip / Postal code");
      $('#billing_email').attr("placeholder", "E-mail");
      $('#billing_phone').attr("placeholder", "Phone");
      $('#order_comments').attr("placeholder", "Add shipping details (optional)");
       $('#billing_country option:first-child').text('Country');
    } else {
    };
     
    
});

  
  
  
  
   $('.open-mobil').click(function() {
      $('#hedaer').toggleClass('white');
      $(this).toggleClass('show');
      $('.menu-new-menu-container').toggleClass('show');

   });
 
  
//  if ($(window).width() < 661) {
//    $('.side-right-menu li:first-child, .side-right-menu li:nth-child(2)').prependTo('.footer-menu');
//  }
//  else {
//     
//  }
  
  
  
  
  
  
  
  $('.volume-icon').each(function() {

  var num = Math.floor(Math.random() * 2 + 1),
    img = $(this);

  img.attr('src', '/log/' + num + '.svg');
  img.attr('alt', 'Src: ' + img.attr('src'));

});
  
  
  
  
  

});



//
//const slider = document.querySelector('.main-line .products');
//let isDown = false;
//let startX;
//let scrollLeft;
//
//slider.addEventListener('mousedown', (e) => {
//  isDown = true;
//  slider.classList.add('active');
//  startX = e.pageX - slider.offsetLeft;
//  scrollLeft = slider.scrollLeft;
//});
//slider.addEventListener('mouseleave', () => {
//  isDown = false;
//  slider.classList.remove('active');
//});
//slider.addEventListener('mouseup', () => {
//  isDown = false;
//  slider.classList.remove('active');
//});
//slider.addEventListener('mousemove', (e) => {
//  if(!isDown) return;
//  e.preventDefault();
//  const x = e.pageX - slider.offsetLeft;
//  const walk = (x - startX) * 3; //scroll-fast
//  slider.scrollLeft = scrollLeft - walk;
//  console.log(walk);
//});
//
//








//
//
//var ele = document.getElementById ('chang-logo') ;
//
//var fileNames = [
// 
//  "/logos/80.png"
//] ;
//
//function randomImage() {
//  var randomIndex = Math.floor(Math.random() * fileNames.length);
//  ele.style.backgroundImage = 'url(' + fileNames[randomIndex] + ')' ;
//}
//
//randomImage() ;
//setInterval(randomImage, 1000) ;