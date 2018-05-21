var adjustMenu = function () {
        var ww = $(window).width();
        if (ww < 740) {
        	$(".nav").hide();
					$(".toggleMenu").css("display", "inline-block");
					if (!$(".toggleMenu").hasClass("active")) {
						$(".nav").hide();
					} else {
						$(".nav").show();
					}
					$(".nav li").off('mouseenter mouseleave');
					$(".nav li a.parent").off('click').on('click', function(e) {
						// must be attached to anchor element to prevent bubbling
						if(!$(this).parent("li").hasClass("hover")){
							e.preventDefault();
						}
						$(this).parent("li").toggleClass("hover");
					});



				}
				else if (ww >= 739) {
					$(".toggleMenu").css("display", "none");
					// $(".nav").show();
          $(".nav").css("display", "");
					$(".nav li").removeClass("hover");
					$(".nav li a").off('click');
					$(".nav li").hover(
					function () {
					$(this).addClass('hover', 10);
					},
					function () {
					$(this).removeClass("hover", 10);
					});
					// $(".nav li").off('mouseenter mouseleave').on('mouseenter mouseleave', function() {
					//  	// must be attached to li so that mouseleave is not triggered when hover over submenu
					//  	$(this).toggleClass('hover');
					// });
				}
    };
    $(window).on('resize orientationchange load', adjustMenu);

$(document).ready(function () {
    // your original document ready handler
    // EXCEPT for the adjustMenu() call
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".nav").toggle();
	});
});
