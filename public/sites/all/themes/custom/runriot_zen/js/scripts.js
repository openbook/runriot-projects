$(document).ready(function () {
    mainnav();
    accordion();
    articleslider();
    imageslider();
    maximiseAnchor();
});


/*
	Main Navigation show/hide
*/
function mainnav(){
	var pull 		= $('#navibar');
		menu 		= $('#nav-main ul');
		menuHeight	= menu.height();

	$(pull).on('click', function(e) {
			e.preventDefault();
			menu.slideToggle('fast');
			$(this).toggleClass('active');
	});

	$(window).resize(function() {
	 if ($(window).width() > 600) {
	    $('#nav-main').show();
	}
	});
}


/*
	Definition list accordions
*/
function accordion() {
	var accordionPanels = $('.accordion > dd').hide();
	$('.accordion > dt a').click(function() {
	    accordionPanels.slideUp();
	     $('.accordion > dt').removeClass('active');
	     $(this).parents('dt').addClass('active');
	     $(this).parents().next().slideDown();
	    return false;
	  });
}

 
/*
	Sliders for articles
*/
function articleslider() {
	$('ul.articleslider').bxSlider({
	  minSlides: 3,
	  maxSlides: 3,
	  slideWidth: 360,
	  slideMargin: 10,
	  pager: false
	});
}


/*
	Sliders for images
*/
function imageslider() {
	$('#slides ul').bxSlider({
	  auto: true,
	  pager: true,
	  pause: 5000,
	  speed: 2000
	});
}


/*
	Maximise link area (apple href to container element)
*/
function maximiseAnchor(){
	$("ul.pane-wrapper li").bind("mouseenter",function(){

		if($(this).find("a").length ==1){
			$(this).addClass("max");
		}
	}).bind("mouseleave",function(){
		if($(this).find("a").length == 1){
			$(this).removeClass("max");
		}
	}).bind("click",function(){
		if($(this).find("a").length == 1){
			window.location = $(this).find("a").attr("href")
		}
	})
}


