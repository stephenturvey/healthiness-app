// Healthiness App JavaScripts


$(document).ready(function(){


// SHOW/HIDE MOBILE MENU

$(".ou-mobile-menu-toggle").click(function(){
$("#ou-header nav").toggleClass("visible");
$('a.ou-mobile-menu-toggle').toggleClass('closed open')
	return false;
})

// SHOW/HIDE FEEDBACK

$(".feedback-list-toggle").hide(); 

$(".feedback-list-trigger").click(function(){

var $self = $(this);

$(this).toggleClass("arrow-down arrow-up");

if ($self.text() == "Full details")
	   $self.text("Less details");
else
        $self.text("Full details");

$(this).parent().prev(".feedback-list-toggle").slideToggle();
	return false;
})

// SHOW/HIDE MOBILE FILTERS

$("a.mobile-filters").click(function(){

var $self = $(this);

$("#filters").toggleClass("visible");

$(this).toggleClass("arrow-down arrow-up");

if ($self.text() == "Show filters")
	   $self.text("Hide filters");
else
        $self.text("Show filters");

	return false;
})



// FILTER NAV OLD VERSION
// this adds/removes a class to the filter nav on click for mobile users

//var screencheck = window.matchMedia("(max-width: 413px)");
//if (screencheck.matches) {

//$(".filters ul.tabs > li > a").click(function(){
	
//	var t=$(this).parent();
	
//	return t.hasClass("open")?t.removeClass("open"):(
	
//	$(".tabs > li.open").removeClass("open"),t.addClass("open")),!1
	
//	return false;
	
//});

//}

// FILTER NAV
// this adds/removes a class to the filter nav on click for mobile users

var screencheck = window.matchMedia("(max-width: 1024px)");
if (screencheck.matches) {

$(".filters ul.tabs > li > a").click(function(){
	
	$target = $(this).parent();
	$siblings = $(this).parent().siblings('li');
		
    if($target.hasClass('open')){
	  		  
			$target.removeClass('open');
			
			$target.addClass('closed'); 
	}	
	
    else if($target.hasClass('closed')){
			
			$target.removeClass('closed');
			
			$siblings.removeClass('open');
			
			$siblings.addClass('closed');
			
			$target.addClass('open');
    }

    else if($siblings.hasClass('open')){
			
			$siblings.removeClass('open');
			
			$siblings.addClass('closed');
			
			$target.addClass('open');
    }
	
    else if($siblings.hasClass('closed')){
			
			$target.addClass('open');

    }
	
	else {$target.addClass('open');}
		
	return false;
	
});

}


});

