function check_ie(e){"use strict";var t;if($("html").is(".ie6, .ie7, .ie8")){t=!0;var e=190}if(t)$("#menu").css({display:"block"}),$(".desktop_menu").css({width:"1140px",position:"absolute",left:"0"}),$("#id-for-links").css("width","100%"),$("#social-book-marks2").css("float","left");else var e=0;return e}function set_menu_all(){check_ie();var e=document.getElementById("id-for-links"),t=($(".slicknav_menu"),$(window).scrollTop()),i=document.getElementById("wrapper").offsetWidth;document.getElementById("social-book-marks1");t>35&&i>768?(e.style.position="fixed",e.style.maxWidth="1140px",e.style.minWidth="1140px"):35>t&&i>768&&(e.style.position="relative",e.style.maxWidth="1140px",e.style.minWidth="1140px")}var offset_add_value=190;$(document).ready(function(e){check_ie()});var offset_add_value_ie=check_ie();


function sbmt_close(){
	$("#search-bar1").fadeOut("slow");
}
function search_toggle() {
	$(".left_search_bar").toggle("slow").promise().done(function(){
		
		if($("#search-bar-stick1").hasClass("top_head_stick1")){
			if(window.innerWidth < 769){
				var top_margin = $(".slicknav_menu").innerHeight() + $("#search-bar-stick").innerHeight() + 1;
				$("#search-bar-stick1").css("top", top_margin);
			}else{
				$("#search-bar-stick1").css("top", '');
			}
		}
	 });
}
function links_toggle() {
	$(".right_search_bar").toggle("slow").promise().done(function(){
    	if ( $(this).css('display') == 'none'){
		   $(this).css({"max-height": 0});
		}else{
			$(this).css({"max-height": 'inherit', "line-height": 'inherit'});
		}
		if($("#search-bar-stick1").hasClass("top_head_stick1")){
			if(window.innerWidth < 769){
				var top_margin = $(".slicknav_menu").innerHeight() + $("#search-bar-stick").innerHeight() + 1;
				$("#search-bar-stick1").css("top", top_margin);
			}else{
				$("#search-bar-stick1").css("top", '');
			}
		}
    });
	
}