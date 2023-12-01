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

	$('.with-submenu .site-menu__first-level').click(function (e) {
		if ($(window).width() < 1051) {
			e.preventDefault();

			p = $(this).closest('.with-submenu');

			if ($('.submenu', p).attr('aria-hidden') == 'false') {

				$('.submenu', p).attr('aria-hidden', 'true');
				$(this).attr('aria-selected', 'true');
			} else {
				$('.submenu', p).attr('aria-hidden', 'false');
				$(this).attr('aria-selected', 'false');

			}

		}
	});

	$(window).scroll(() => {

		if ($('.block-tabs .tabs-content-in').css('position') == 'sticky') {
			currentScroll = $('.tabs-content-out').position().top - $(window).scrollTop();
			if (currentScroll < 0) {

				currentitem = Math.floor(currentScroll / 1000) * -1 - 1;

				//only activate de button if is not selected
				if ($('.tabs li:eq(' + currentitem + ') button').attr('aria-selected') !== 'true')
					$('.tabs li:eq(' + currentitem + ') button').click();
			}
		}

	});

	jQuery('body').on('click', function (e) {
		if (jQuery(e.target).closest('.site-menu').length == 0) {
			jQuery('.site-menu__item.hover').removeClass('hover');
		}
	})

	if (document.querySelector('.slider-partners')) {
		const opciones = {
			loop: false,
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


});
