(function ($) {
    "use strict";

    /* === Preloader === */

  (function () {
    $(window).load(function() {
        $('#pre-status').fadeOut();
        $('#st-preloader').delay(350).fadeOut('slow');
    });
}());

/* === Back To Top === */

(function () {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.scroll-up').fadeIn();
        } else {
            $('.scroll-up').fadeOut();
        }
    });
    $('.scroll-up a').click(function(){
          $('html, body').animate({scrollTop : 0},800);
          return false;
      });
}());

    $.fn.rozaAccessibleDropDown = function () {
		var el = $(this);

		$("a", el).focus(function() {
		    $(this).parents("li").addClass("hover");
		}).blur(function() {
		    $(this).parents("li").removeClass("hover");
		});
	}

    $(".menu-close").on('click', function(){
       $("a.slicknav_btn").removeClass("slicknav_open");
       $(".slicknav_nav").css("display", "none");
    });

    jQuery(document).ready(function($){
    	$("#primary-menu").rozaAccessibleDropDown();
        // Mobile Menu
        $("#primary-menu").slicknav({
            'allowParentLinks': true,
            'prependTo': '.roza-responsive-menu',
            'nestedParentLinks': false,
            'closeOnClick': true,
        });
    });
}(jQuery)); 