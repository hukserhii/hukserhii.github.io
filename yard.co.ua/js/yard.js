$(function(){$("a.page-scroll").bind("click",function(event){var $anchor=$(this);$("html, body").stop().animate({scrollTop:$($anchor.attr("href")).offset().top},1500,"easeInOutExpo");event.preventDefault();});});$("body").scrollspy({target:".navbar-fixed-top"});$(".navbar-collapse ul li a").click(function(){$(".navbar-toggle:visible").click();});$(document).ready(function(){$(window).scroll(function(){if($(this).scrollTop()>1000){$(".scrollup").fadeIn();}else{$(".scrollup").fadeOut();}});$(".scrollup").click(function(){$("html, body").animate({scrollTop:0},1000);return false;});});