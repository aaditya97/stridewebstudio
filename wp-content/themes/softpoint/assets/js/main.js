jQuery(document).ready(function(jQuery) {

    "use strict";

    jQuery('body').removeClass('sp-loading-now');

    jQuery('#primary-menu').slicknav({
        appendTo        : '.site-branding',
        label           : '',
        allowParentLinks: true
    });

    // For Fixed header & Scroll to top
	jQuery(window).on("scroll resize", function() {
		if (jQuery(window).scrollTop() >= 500) {
            jQuery(".sp-goto-top").css("bottom", "10px");
		}
		if (jQuery(window).scrollTop() < 500) {
            jQuery(".sp-goto-top").css("bottom", "-50px");
		}
	});

    // For Scroll to top
    jQuery(".sp-goto-top").on("click", function() {
		return jQuery("html, body").animate({
			scrollTop: 0
		});
    });

    // Post slider
    var swiper = new Swiper('.sp-post-slider .swiper-container', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Frontpage slider
    var swiper = new Swiper('.swiper-container.sp-main-slider', {
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        }
    });


});
