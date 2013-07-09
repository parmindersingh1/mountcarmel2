( function( $ ) {

$("#home_content .content-box:nth-child(3n)").addClass("last-block");

$(".sub-menu").mouseover(function() {
   
  if ($(this).parents('li').index() == 0)
   {
   $(this).parents('li').children('a').css({"background-position":"0 -80px"});
  }
   
if ($(this).parents('li').index() == 1)
   {
   $(this).parents('li').children('a').css({"background-position":"-182px -80px"});
  }
if ($(this).parents('li').index() == 2)
   {
   $(this).parents('li').children('a').css({"background-position":"-390px  -80px"});
  }
if ($(this).parents('li').index() == 3)
   {
   $(this).parents('li').children('a').css({"background-position":"-504px -80px"});
  }

});


$(".sub-menu").mouseout(function() {
   
  if ($(this).parents('li').index() == 0)
   {
   $(this).parents('li').children('a').removeAttr("style");
  }
   
if ($(this).parents('li').index() == 1)
   {
   $(this).parents('li').children('a').removeAttr("style");
  }
if ($(this).parents('li').index() == 2)
   {
   $(this).parents('li').children('a').removeAttr("style");
  }
if ($(this).parents('li').index() == 3)
   {
   $(this).parents('li').children('a').removeAttr("style");
  }

});

$(window).load(function() {
    
        $('.flexslider').flexslider({
	            animation: false,
                    //animation: 'slide',
		    controlsContainer: '.flex-container',
                    controlNav: false,
                    directionNav: false
	    });
    });


} )( jQuery );

