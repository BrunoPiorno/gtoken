jQuery.noConflict();

const initDropdown = () => {
	jQuery('.js-dropdown-open').unbind('click').on('click', function (e) {
		e.stopPropagation();
		let elem = $(this).parents('.dropdown');

		elem.hasClass('js-open') ?
			elem.removeClass('js-open').find('.js-dropdown-open').next().slideUp() :
			elem.addClass('js-open').find('.js-dropdown-open').next().slideDown();

		elem.siblings('.dropdown.js-open').removeClass('js-open').find('.js-dropdown-open').next().slideUp();
	});
};

jQuery(document).ready(function ($) {
	initDropdown();

	jQuery(document).mouseup(e => {
		var container = $('.dropdown.js-open');
		(!container.is(e.target) && container.has(e.target).length === 0) && container.removeClass('js-open').find('.js-dropdown-open').next().slideUp();
	});
});