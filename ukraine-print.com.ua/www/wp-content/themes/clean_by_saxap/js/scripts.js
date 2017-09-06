

function setHeiHeight() {
    jQuery('#intro').css({
        height: jQuery(window).height() + 'px'
    });
}
setHeiHeight();
jQuery(window).resize( setHeiHeight );


    jQuery(document).ready(function() {

	jQuery('.wp1').waypoint(function() {
		jQuery('.wp1').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	jQuery('.wp2').waypoint(function() {
		jQuery('.wp2').addClass('animated fadeInUp');
	}, {
		offset: '75%'
	});
	jQuery('.wp3').waypoint(function() {
		jQuery('.wp3').addClass('animated fadeInRight');
	}, {
		offset: '75%'
	});

	jQuery('.flexslider').flexslider({
		animation: "slide",
        itemMargin: 20
	});

	jQuery('.single_image').fancybox({
		padding: 4
	});

    jQuery('[data-toggle="tooltip"]').tooltip();


	jQuery('.nav-toggle').click(function() {
		jQuery(this).toggleClass('active');
		jQuery('.header-nav').toggleClass('open');
		event.preventDefault();
	});

	jQuery('.header-nav li a').click(function() {
		jQuery('.nav-toggle').toggleClass('active');
		jQuery('.header-nav').toggleClass('open');

	});

	jQuery(function() {
		jQuery(window).scroll(function() {
			var scroll = jQuery(window).scrollTop();

			if (scroll >= 20) {
				jQuery('section.navigation').addClass('fixed');
				jQuery('header').css({
					"border-bottom": "none",
					"padding": "5px 0"
				});
				jQuery('header .member-actions').css({
					"top": "26px"
				});
				jQuery('header .navicon').css({
					"top": "14px"
				});
			} else {
				jQuery('section.navigation').removeClass('fixed');
				jQuery('header').css({
					"padding": "15px 0"
				});
				jQuery('header .member-actions').css({
					"top": "41px"
				});
				jQuery('header .navicon').css({
					"top": "22px"
				});
			}
		});
	});

	jQuery(function() {

		jQuery('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {

				var target = jQuery(this.hash);
				target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					jQuery('html,body').animate({
						scrollTop: target.offset().top
					}, 2000);
					return false;
				}
			}
		});

	});

    jQuery("div[id^='portfolioModal']").each(function(){

        var currentModal = jQuery(this);

        currentModal.find('.btn-next').click(function(){
            currentModal.modal('hide');
            currentModal.closest("div[id^='portfolioModal']").nextAll("div[id^='portfolioModal']").first().modal('show');
        });

        currentModal.find('.btn-prev').click(function(){
            currentModal.modal('hide');
            currentModal.closest("div[id^='portfolioModal']").prevAll("div[id^='portfolioModal']").first().modal('show');
        });

    });

    jQuery(".modal-wide").on("show.bs.modal", function() {
        var height = jQuery(window).height() - 100;
        jQuery(this).find(".modal-body").css("max-height", height);
    });

});