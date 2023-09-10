(function ($) {
	"use strict";

	var windowOn = $(window);


	////////////////////////////////////////////////////
	// 09. Sidebar Js
	$(".tp-menu-bar").on("click", function () {
		$(".tpoffcanvas").addClass("opened");
		$(".body-overlay").addClass("apply");
	});
	$(".close-btn").on("click", function () {
		$(".tpoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});
	$(".body-overlay").on("click", function () {
		$(".tpoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});

	
	////////////////////////////////////////////////////
	// 05. Mobile Menu Js
	$('#mobile-menu').meanmenu({
		meanMenuContainer: '.mobile-menu',
		meanScreenWidth: "991",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});

	////////////////////////////////////////////////////
	// 04. Body overlay Js
	$(".body-overlay").on("click", function () {
		$(".offcanvas__area").removeClass("offcanvas-opened");
		$(".body-overlay").removeClass("opened");
	});



	////////////////////////////////////////////////////
	// 07. Data CSS Js
	$("[data-background").each(function () {
		$(this).css("background-image", "url( " + $(this).attr("data-background") + "  )");
	});

	///////////////////////////////////////////////////
	// 01.  Scroll to top
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 245) {
			$('.scroll-to-target').removeClass('open');

		} else {
			$('.scroll-to-target').addClass('open');
		}
	});


	


	///////////////////////////////////////////////////
	// 02. Scroll Up Js
	if ($('.scroll-to-target').length) {
		$(".scroll-to-target").on('click', function () {
		var target = $(this).attr('data-target');
		// animate
		$('html, body').animate({
			scrollTop: $(target).offset().top
		}, 1000);
	
		});
	}
	

	////////////////////////////////////////////////////
	// 05. Sidebar Js
	$(".tp-search-toggle").on("click", function () {
		$(".tp-sidebar-area").addClass("tp-searchbar-opened");
		$(".search-body-overlay").addClass("opened");
	});
	$(".tpsearchbar__close").on("click", function () {
		$(".tp-sidebar-area").removeClass("tp-searchbar-opened");
		$(".search-body-overlay").removeClass("opened");
	});
	$(".search-body-overlay").on("click", function () {
		$(".tp-sidebar-area").removeClass("tp-searchbar-opened");
		$(".search-body-overlay").removeClass("opened");
	});


	///////////////////////////////////////////////////
	// 07. Sticky Header Js
	windowOn.on('scroll', function () {
		var scroll = windowOn.scrollTop();
		if (scroll < 250) {
			$("#header-sticky").removeClass("header-sticky");
		} else {
			$("#header-sticky").addClass("header-sticky");
		}
	});


	////////////////////////////////////////////////////
	// 00. Brand Js
	var brandswiper = new Swiper('.tpbrand__active', {
		// Optional parameters
		loop: true,
		slidesPerView: 4,
		spaceBetween: 40,
		observer: true,
		observeParents: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	
	////////////////////////////////////////////////////
	// 00. Brand Js
	var brandswiper = new Swiper('.tpbrand__two__active', {
		// Optional parameters
		loop: true,
		slidesPerView: 5,
		observer: true,
		observeParents: true,
		autoplay: {
			delay: 3500,
			disableOnInteraction: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	
	////////////////////////////////////////////////////
	// 00. Brand Js
	var brandswiper = new Swiper('.tpsolid__active', {
		// Optional parameters
		loop: true,
		slidesPerView: 3,
		observer: true,
		observeParents: true,
		spaceBetween: 30,
		autoplay: {
			delay: 4500,
			disableOnInteraction: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 3,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 2,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});
	
	////////////////////////////////////////////////////
	// 00. Brand Js
	var brandswiper = new Swiper('.tpbrand__three__active', {
		// Optional parameters
		loop: true,
		slidesPerView: 5,
		observer: true,
		observeParents: true,
		autoplay: {
			delay: 3500,
			disableOnInteraction: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 5,
			},
			'992': {
				slidesPerView: 4,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	});

	
	////////////////////////////////////////////////////
	// 00. Brand Js
	var tpproductswiper = new Swiper('.tpfeature__active', {
		// Optional parameters
		loop: true,
		slidesPerView: 4,
		spaceBetween: 30,
		observer: true,
		observeParents: true,
		autoplay: {
			delay: 3500,
			disableOnInteraction: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 4,
			},
			'992': {
				slidesPerView: 3,
			},
			'768': {
				slidesPerView: 3,
			},
			'576': {
				slidesPerView: 2,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		pagination: {
			el: ".tpfeature__pagination",
			clickable: true,
		},
	});


		////////////////////////////////////////////////////
	// 00. Slider Js
	var tpproductswiper = new Swiper('.tptesti-active', {
		// Optional parameters
		loop: true,
		slidesPerView: 1,
		observer: true,
		observeParents: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		// Navigation arrows
		navigation: {
			nextEl: '.tpproduct-btn__nxt',
			prevEl: '.tpproduct-btn__prv',
		},
	});


		////////////////////////////////////////////////////
	// 00. Slider Js
	var tpproductswiper = new Swiper('.tptesti-active-2', {
		// Optional parameters
		loop: true,
		slidesPerView: 1,
		observer: true,
		observeParents: true,
		// effect: "fade",
		autoplay: {
			delay: 5000,
			disableOnInteraction: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		// Navigation arrows
		navigation: {
			nextEl: '.tptestimonial-btn__nxt',
			prevEl: '.tptestimonial-btn__prv',
		},
	});


		////////////////////////////////////////////////////
	// 00. Slider Js
	var tpproductswiper = new Swiper('.tptesti-active', {
		// Optional parameters
		loop: true,
		slidesPerView: 1,
		observer: true,
		observeParents: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: true,
		},
		breakpoints: {
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
		// Navigation arrows
		navigation: {
			nextEl: '.tpproduct-btn__nxt',
			prevEl: '.tpproduct-btn__prv',
		},
	});


	////////////////////////////////////////////////////
	// 19. Counter Js
	$('.counter').counterUp({
		delay: 10,
		time: 1000
	});

	////////////////////////////////////////////////////
	// 20. Counter Js
	new WOW().init();

	///////////////////////////////////////////////////
	// 10. Magnific Js
	$(".popup-video").magnificPopup({
		type: "iframe",
	});

	////////////////////////////////////////////////////
	// 25. Swiper Js
	var projectswiper = new Swiper('.blog-post-slider-active', {
		// Optional parameters
		loop: true,
		slidesPerView: 1,
		spaceBetween: 0,
		loop:true,
		// Navigation arrows
		navigation: {
		  nextEl: '.blog-nav-next',
		  prevEl: '.blog-nav-prev',
		},

		breakpoints: {
			'1200': {
				slidesPerView: 1,
			},
			'992': {
				slidesPerView: 1,
			},
			'768': {
				slidesPerView: 1,
			},
			'576': {
				slidesPerView: 1,
			},
			'0': {
				slidesPerView: 1,
			},
		},
	  });


})(jQuery);