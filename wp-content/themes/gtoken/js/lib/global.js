jQuery.noConflict();
jQuery(document).ready(function ($) {

	/*
	$('a[href^="#"]').on('click', function(e){
		e.preventDefault();
		const el = $($(this).attr('href'));
		el.length && $('html, body').animate({ scrollTop: el.offset().top - 90}, 500);
		return false;
	});
	*/

	$('body').on('click', 'select', (e) => {
		$(e.target).toggleClass('active');
	});

	$('body').on('blur', 'select', (e) => {
		$(e.target).removeClass('active');
	});


	$(window).scroll(function () {
		if ($(window).scrollTop() > 50) {
			$('body').addClass('scrolled');
		} else {
			$('body').removeClass('scrolled');
		}
	});

	$('.responsive__btn').click(() => {
		$('body').toggleClass('menuopen');
	});


	jQuery('body').on('click', function (e) {
		if (jQuery(e.target).closest('.site-menu').length == 0) {
			jQuery('.site-menu__item.hover').removeClass('hover');
		}
	})

	if (document.querySelector('.slider-partners')) {
		const opciones = {
			loop: true,
			autoplay: {
				delay: 4000
			},
			navigation: {
				nextEl: ".swiper-button-next",
				prevEl: ".swiper-button-prev",
			},
			slidesPerView: 1,
			loopedSlides: 1,

			breakpoints: {
				600: {
					slidesPerView: 1,
					loopedSlides: 2
				},
				900: {
					slidesPerView: 2,
					loopedSlides: 2
				},
				1100: {
					slidesPerView: 3,
					loopedSlides: 2
				}
			}
		}
		new Swiper('.slider-partners', opciones);
	}


	jQuery('.site-menu__first-level').on('click', () => {
		jQuery('body').removeClass('menuopen');
	});

});
