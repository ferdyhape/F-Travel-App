/*========================================================================
EXCLUSIVE ON themeforest.net
Template Name   : Appiya - App Landing Page
Author: ThemeAtelier
Created: December 2022
Last update: December 2022
========================================================================*/

/* TABLE OF CONTENTS
	1. PRELOADER
	2. ADD CLASS HEADER
	3. NAV COLLAPSE
	4. NAV SMOOTH SCROLL
	5. FIXED HEADER
	6. TEXT ANIMATION
	7. SCREENSHOTS SLIDER
	8. TESTIMONIAL SLIDER
	9. CONTACT FORM
*/
var PATH = {};
(function ($) {
	"use strict"

	/******************** 1. PRELOADER ********************/
	PATH.preLoader = function () {
		$(".loader").fadeOut();
			$(".loader-wrapper").delay(1000).fadeOut("slow");
	}

	/******************** 2. ADD CLASS HEADER ********************/
	PATH.HeaderSticky = function () {
		$(".navbar-toggler").on("click", function (a) {
			a.preventDefault(),
				$(".navbar").addClass("fixed-header")
		});
	}

	/******************** 3. NAV COLLAPSE ********************/
	PATH.MenuClose = function () {
		$('.navbar-nav .nav-link').on('click', function () {
			var toggle = $('.navbar-toggler').is(':visible');
			if (toggle) {
				$('.navbar-collapse').collapse('hide');
			}
		});
	}

	/******************** 4. NAV SMOOTH SCROLL ********************/
	PATH.HeaderScroll = function () {
		$('header a[href*="#"]:not([href="#"])').on('click', function () {
			var PathName = location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname;
			if (PathName) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - 65,
					}, 1000);
					return false;
				}
			}
		});
	}

	/******************** 5. FIXED HEADER ********************/
	PATH.HeaderFixed = function () {
		var varHeaderFix = $(window).scrollTop() >= 60,
		$navbar = $('.navbar');
		if (varHeaderFix) {
			$navbar.addClass('fixed-header');
		} else {
			$navbar.removeClass('fixed-header');
		}
	}

	/******************** 6. TEXT ANIMATION ********************/
	PATH.textAnimation = function () {
		var $tlt1 = $('.tlt1'),
			$tlt = $('.tlt');
			
		if( $tlt1.length ){
			$tlt1.textillate({
				loop: true,
				in: {
					effect: 'fadeInDown',
				},
				out: {
					effect: 'flip',
				},
			});
		}
		//
		if( $tlt.length ){
			$tlt.textillate({
				loop: true,
				in: {
					effect: 'fadeInRight',
				},
				out: {
					effect: 'fadeOutLeft',
				},
			});
		}
	}

	/******************** 7. SCREENSHOTS SLIDER ********************/
	PATH.shotsSlider = function(){
	var cswiper = new Swiper('.screenshot-swiper', {
			effect: 'coverflow',
			grabCursor: true,
			centeredSlides: true,
			slidesPerView: 'auto',
			coverflowEffect: {
			  rotate: 50,
			  stretch: 0,
			  depth: 100,
			  modifier: 1,
			  slideShadows : true,
			},
			loop: true,
			// pagination: {
			//   el: '.swiper-pagination',
			// },
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			  },
	});
	}
	
	/******************** 8. TESTIMONIAL SLIDER ********************/
	PATH.sliderTestimonial = function () {
	var vswiper = new Swiper('.testimonialSwiper', {
	speed: 2000,
	autoplay: {
	  delay: 2000,
	},
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	},
	});
	}

	/******************** 9. CONTACT FORM ********************/
	PATH.contactForm = function () {
	function isValidEmail(emailAddress) {
		var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
		return pattern.test(emailAddress);
	};
	var $contact = $("#contact-form");
	if ($contact.length) {
		$contact.on('submit', function (e) {
			e.preventDefault();
			var success = $(this).find('.email-success'),
				failed = $(this).find('.email-failed'),
				loader = $(this).find('.email-loading'),
				postUrl = $(this).attr('action');
			var data = {
				name: $(this).find('.contact-name').val(),
				email: $(this).find('.contact-email').val(),
				subject: $(this).find('.contact-subject').val(),
				message: $(this).find('.contact-message').val()
			};
			if (isValidEmail(data['email']) && (data['message'].length > 1) && (data['name'].length > 1)) {
				$.ajax({
					type: "POST",
					url: postUrl,
					data: data,
					beforeSend: function () {
						loader.fadeIn(1000);
					},
					success: function (data) {
						loader.fadeOut(1000);
						success.delay(500).fadeIn(1000);
						failed.fadeOut(500);
					},
					error: function (xhr) { // if error occured
						loader.fadeOut(1000);
						failed.delay(500).fadeIn(1000);
						success.fadeOut(500);
					},
					complete: function () {
						loader.fadeOut(1000);
					}
				});
			} else {
				loader.fadeOut(1000);
				failed.delay(500).fadeIn(1000);
				success.fadeOut(500);
			}
			return false;
		});
	}
	}

/* Document ready function */
	$(function(){
		PATH.textAnimation(),
		PATH.MenuClose(),
		PATH.HeaderScroll(),
		PATH.HeaderSticky();
		PATH.contactForm();
	});

/* Window on scroll function */
	$(window).on("scroll", function () {
		PATH.HeaderFixed();
	});

/* Window on load function */
$(window).on('load', function () {
	PATH.sliderTestimonial();
	PATH.shotsSlider();
	PATH.preLoader();
});

})(jQuery);

