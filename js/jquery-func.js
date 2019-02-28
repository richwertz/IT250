Cufon.replace('h2', {fontFamily: "MyriadPro-Semibold"});

Cufon.replace('#intro .button', { textShadow: '1px 1px #7f8c19' } )

function mycarousel_initCallback(carousel) {
	    $('.slider-navigation a').bind('click', function() {
	        carousel.scroll($.jcarousel.intval($(this).text()));
	        return false;
	    });	    
	    $('.big-navigation .button-holder a').bind('click', function() {
	        carousel.scroll($.jcarousel.intval($(this).text()));
	        return false;
	    });	        
};
	
function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
	$('.slider-navigation a').removeClass('active');
	$('.slider-navigation a').eq(idx-1).addClass('active');
};

$(document).ready(function(){
	
	$(".slider-holder ul:eq(0)").jcarousel({
		scroll:1,
		auto:6,
		start:1,
		wrap:"both",
        itemFirstInCallback: mycarousel_itemFirstInCallback,
        initCallback: mycarousel_initCallback,
        // This tells jCarousel NOT to autobuild prev/next buttons
        buttonNextHTML: null,
        buttonPrevHTML: null	
	});
	
});

function htmlLoaded(){
	Cufon.now();
}