// Healthiness App JavaScripts


$(document).ready(function(){


// SHOW/HIDE MOBILE MENU

$(".ou-mobile-menu-toggle").click(function(){
$("#ou-header nav").toggleClass("visible");
$('a.ou-mobile-menu-toggle').toggleClass('closed open')
	return false;
})


// FILTER NAV
// this adds/removes a class to the filter nav on click for mobile users

//var screencheck = window.matchMedia("(max-width: 768px)");
//if (screencheck.matches) {

//$(".filters ul.tabs > li > a").click(function(){
	
//	var t=$(this).parent();
	
//	return t.hasClass("open")?t.removeClass("open"):(
	
//	$(".tabs > li.open").removeClass("open"),t.addClass("open")),!1
	
//	return false;
	
//});

//}




});

