$(document).ready(function () {
    mainnav();
    accordion();
    articleslider();
    imageslider();
    maximiseAnchor();
    toolTip();
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
	var cur_stus;
	 
	$('dl.accordion dd').hide();
	$('dl.accordion dt').attr('stus', '');
	
	$('dl.accordion dt:first-of-type').addClass('active');
	$('dl.accordion dd:first-of-type').slideDown();
	
	$('dl.accordion dt').click(function(){
	    cur_stus = $(this).attr('stus');
	    if(cur_stus != "active")
	    {
	        //reset everthing - content and attribute
	        $('dl.accordion dd').slideUp();
	        $('dl.accordion dt').attr('stus', '');
	        $('dl.accordion dt').removeClass('active');
	         
	        //then open the clicked data
	        $(this).next().slideDown();
	        $(this).attr('stus', 'active');
	        $(this).addClass('active');
	    }
	    //Remove else part if do not want to close the current opened data
	    else
	    {
	        $(this).next().slideUp();
	        $(this).attr('stus', '');
	        $(this).removeClass('active');
	    }
	    return false;
	});
	  
}

/*
	Course nav highlight
*/
var lastId,
    topMenu = $("#sub-nav"),
    topMenuHeight = topMenu.outerHeight(),
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

$(window).scroll(function(){
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }                   
});



/*
	Sliders for articles
*/

var varMaxSlides,
    width = $(window).width();

if (width < 400) {
    varMaxSlides = 1;
    varWidthSlide = 290;
} else {
    varMaxSlides = 3;
    varWidthSlide = 330;
}



function articleslider() {
	$('ul.articleslider').bxSlider({
	  minSlides: 1,
	  maxSlides: varMaxSlides,
	  slideWidth: 330,
	  slideMargin: 10,
	  pager: false,
	  autoHidePager: true
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
	  speed: 2000,
	  autoHidePager: true
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


/*
	Maximise link area (apple href to container element)
*/
function toolTip(){
	$('.tooltip').css('display', 'inline-block');

	$('.tooltip').hover(function(){
	  $(this).find('span').css('top','-7em').show();
	} ,function(){
	  $(this).find('span').css('top','-6.5em').hide();
	});   
}
	

/*
	Sticky header - from 600px wide and up (tablet+)
*/ 
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
        $("header#masthead").addClass("sticky");
    } else {
        $("header#masthead").removeClass("sticky");
    }
});

/*
	Sticky course nav
*/
 var $window = $(window),
       $stickyEl = $('#sub-nav'),
       elTop = $stickyEl.offset().top;

   $window.scroll(function() {
        $stickyEl.toggleClass('sticky', $window.scrollTop() > elTop);
        $('section').toggleClass('sticky-section', $window.scrollTop() > elTop);
    });



/*
	Smooth scrolling
*/
var $root = $('html, body');
$('#sub-nav a').click(function() {
    $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
    return false;
});




	
	
	