!function($){"use strict";var n=function(){$(".js-menu").append("<li class='log'><span class='icon-user'></span><span class='visuallyhidden'>se connecter</span></li>");var n=$(".js-menu").children("li").last();n.click(s)},s=function(){$(".js-login").slideToggle("slow"),$(window).scroll(function(){$(".js-login").slideUp("slow")})};$(function(){n()})}(jQuery);