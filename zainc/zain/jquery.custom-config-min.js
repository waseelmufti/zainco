jQuery(document).ready(function(){function e(){$("#responsive-slider-with-blocks-1").royalSlider({arrowsNav:!1,arrowsNavAutoHide:!1,controlNavigationSpacing:0,controlNavigation:"bullets",imageScaleMode:"fill",autoScaleSlider:!0,autoScaleSliderHeight:200,blockLoop:!0,loop:!0,numImagesToPreload:1,addActiveClass:!0,usePreloader:!1,transitionType:"fade",fadeinLoadedSlide:!0,keyboardNavEnabled:!0,slidesSpacing:0,autoPlay:{enabled:!0,pauseOnHover:!1,stopAtAction:!0,delay:7e3}})}function a(){$("#gallery-2").royalSlider({fullscreen:{enabled:!0,nativeFS:!0},controlNavigation:"thumbnails",thumbs:{orientation:"horizontal",spacing:0,fitInViewport:!0},autoPlay:{enabled:!0,pauseOnHover:!0,stopAtAction:!1,delay:6e3},imageScaleMode:"fit",transitionType:"fade",imageScalePadding:0,autoScaleSlider:!0,autoScaleSliderWidth:640,autoScaleSliderHeight:545,loop:!0,arrowsNav:!0,arrowsNavAutoHide:!0,keyboardNavEnabled:!0})}function o(){var e=$(this).scrollTop();Math.abs(i-e)<=l||(e>i&&e>r?$("#dropdown-navwrap, #header").removeClass("unscrolled").addClass("scrolled"):e<i&&e<r&&$("#dropdown-navwrap, #header").removeClass("scrolled").addClass("unscrolled"),i=e)}$(function(){$("#slider-range-min").slider({range:"min",value:200,min:0,max:1e3,step:25,slide:function(e,a){$("#amount-budget-range-min").val("£"+a.value),$("#button-budget-range-min").attr("href","/search_page.php?budget="+a.value)}}),$("#amount-budget-range-min").val("£"+$("#slider-range-min").slider("value"))});var n,i=0,l=5,r=$("#header").outerHeight();$(window).scroll(function(e){n=!0}),setInterval(function(){n&&(o(),n=!1)},0),$(function(){var e={header:"ui-icon-plus",activeHeader:"ui-icon-minus"};$("#accordion-tech").accordion({heightStyle:"content",collapsible:!0,icons:e})}),o(),e(),a()}(jQuery));