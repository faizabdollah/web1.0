( function($) {
  'use strict';  
$(function(e) {

/*-------------------------------------------------------------------------------
		Cart Item Toggle
	-------------------------------------------------------------------------------*/
	$('#cart-item-bar').on('click', function(e) {
		   $(".header").toggleClass("showcart");
	});
	$('.cart_item_close').on('click', function(e) {
		   $(".header").removeClass("showcart");
	});
	
/*------------------------------------------------------------------
Feature Product Slider
-------------------------------------------------------------------*/
	$('#feature-products_slider .owl-carousel').owlCarousel({
	loop:true,
	margin:30,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:2},
		800:{items:2},
		1000:{items:3}
	}
	})
/*------------------------------------------------------------------
Feature Product Slider 2
-------------------------------------------------------------------*/
	$('#feature-products_slider2 .owl-carousel').owlCarousel({
	loop:true,
	margin:30,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:2},
		800:{items:3},
		1000:{items:4}
	}
	})	

/*------------------------------------------------------------------
Feature Product Slider 3
-------------------------------------------------------------------*/
	$('#feature_products_slider3 .owl-carousel').owlCarousel({
	loop:true,
	margin:20,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:2},
		800:{items:3},
		1000:{items:5}
	}
	})	


/*------------------------------------------------------------------
Collection Slider 1
-------------------------------------------------------------------*/
	$('#collection_slider1 .owl-carousel').owlCarousel({
	loop:true,
	margin:20,
	nav:false,
	dots:true,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:2000,
	responsive:{
		0:{items:1},
		600:{items:1},
		1000:{items:1}
	}
	})

/*------------------------------------------------------------------
Collection Slider 2
-------------------------------------------------------------------*/
	$('#collection_slider2 .owl-carousel').owlCarousel({
	loop:true,
	margin:20,
	nav:false,
	dots:true,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:3000,
	responsive:{
		0:{items:1},
		600:{items:1},
		1000:{items:1}
	}
	})
	
	/*------------------------------------------------------------------
Trending Product Slider 1
-------------------------------------------------------------------*/
	$('#trending_product_slider1 .owl-carousel').owlCarousel({
	loop:true,
	margin:20,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:4000,
	responsive:{
		0:{items:1},
		600:{items:1},
		1000:{items:1}
	}
	})
/*------------------------------------------------------------------
Trending Product Slider 2
-------------------------------------------------------------------*/
	$('#trending_product_slider2 .owl-carousel').owlCarousel({
	loop:true,
	margin:20,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:1},
		1000:{items:1}
	}
	})
/*------------------------------------------------------------------
New Product Slider
-------------------------------------------------------------------*/
	$('#new-products_slider .owl-carousel').owlCarousel({
	loop:true,
	margin:30,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:2},
		1000:{items:4}
	}
	})
	
/*------------------------------------------------------------------
Popular Categories Slider
-------------------------------------------------------------------*/
	$('#popular_category .owl-carousel').owlCarousel({
	loop:true,
	margin:30,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:2},
		1000:{items:4}
	}
	})
	
	
/*------------------------------------------------------------------
Popular Categories Slider
-------------------------------------------------------------------*/
	$('#clients_slider .owl-carousel').owlCarousel({
	loop:true,
	margin:30,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:2},
		1000:{items:4}
	}
	})
	
/*------------------------------------------------------------------
Similar Product Slider 
-------------------------------------------------------------------*/
	$('#similar_products_slider .owl-carousel').owlCarousel({
	loop:true,
	margin:30,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:2},
		1000:{items:4}
	}
	})
	
	
/*------------------------------------------------------------------
Similar Product Slider 2
-------------------------------------------------------------------*/
	$('#similar_products_slider2 .owl-carousel').owlCarousel({
	loop:true,
	margin:30,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:1},
		1000:{items:1}
	}
	})

/*------------------------------------------------------------------
About Slider
-------------------------------------------------------------------*/
	$('#about_slider .owl-carousel').owlCarousel({
	loop:true,
	margin:30,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:1},
		1000:{items:1}
	}
	})	
/*------------------------------------------------------------------
 Product Detail Slider 1
-------------------------------------------------------------------*/
  $('#detail_carousel1').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 130,
    itemMargin: 5,
    asNavFor: '#detail_slider1'
  });
 
  $('#detail_slider1').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#detail_carousel1"
  })
	
/*------------------------------------------------------------------
 Product Detail Slider 2
-------------------------------------------------------------------*/
  $('#detail_carousel2').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 130,
    itemMargin: 5,
    asNavFor: '#detail_slider2'
  });
 
  $('#detail_slider2').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#detail_carousel2"
  })


/*------------------------------------------------------------------
 Product Detail Slider 1
-------------------------------------------------------------------*/
  $('#detail_carousel3').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    itemWidth: 130,
    itemMargin: 5,
    asNavFor: '#detail_slider3'
  });
 
  $('#detail_slider3').flexslider({
    animation: "slide",
    controlNav: false,
    animationLoop: false,
    slideshow: false,
    sync: "#detail_carousel3"
  })
  
  
  /*------------------------------------------------------------------
Team Slider
-------------------------------------------------------------------*/
	$('#team_slider .owl-carousel').owlCarousel({
	loop:true,
	margin:20,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:1},
		800:{items:2},
		1000:{items:3}
	}
	})
	
	  /*------------------------------------------------------------------
Client Slider
-------------------------------------------------------------------*/
	$('#client_slider .owl-carousel').owlCarousel({
	loop:true,
	margin:20,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
	autoplay:true,
	autoplayTimeout:5000,
	responsive:{
		0:{items:1},
		600:{items:1},
		800:{items:1},
		1000:{items:1}
	}
	})		
/*-------------------------------------------------------------------------------
	  Background slider
-------------------------------------------------------------------------------*/
	$('#slideshow .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
	autoplay:true,
    autoplayTimeout:5000,
	nav:true,
	dots:false,
	navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
    responsive:{
        0:{items:1},
        1000:{items:1}
    }
	})



/*-------------------------------------------------------------------------------
	  Product List And Grid View
-------------------------------------------------------------------------------*/

$(document).ready(function() {
    $('#list').on('click',function(event) {
        event.preventDefault();
        $('#products .item').addClass('list-group-view');
		$('#list').addClass('active');
		$('#grid').removeClass('active');
    });
    $('#grid').on('click',function(event) {
        event.preventDefault();
        $('#products .item').removeClass('list-group-view');
        $('#products .item').addClass('grid-group-view');
		$('#grid').addClass('active');
		$('#list').removeClass('active');
    });
});


/*------------------------------------------------------------------
back to top
-------------------------------------------------------------------*/
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 2000 || document.documentElement.scrollTop > 2000) {
        document.getElementById("back-top").style.opacity = 1;
    } else {
        document.getElementById("back-top").style.opacity = 0;
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
	document.body.scroll_top_duration = 7000;
} 
});
})(jQuery);