$(document).ready(function () {
    accordion();
    articleslider();
});



// Just testing
//$(window).load(function(){
//		alert('boo');
//});



function accordion() {
	var accordionPanels = $('.accordion > dd').hide();
	$('.accordion > dt > a').click(function() {
	    accordionPanels.slideUp();
	     $('.accordion > dt').removeClass('active');
	     $(this).parent('dt').addClass('active');
	     $(this).parent().next().slideDown();
	    return false;
	  });
}

 

function articleslider() {
	$('ul.articleslider').bxSlider({
	  minSlides: 3,
	  maxSlides: 3,
	  slideWidth: 360,
	  slideMargin: 10
	});
}