
/* Resto rallye -
 *
 * JS Document - /js/script.js
 *
 * coded By Maxime Lefebvre & Marcel Pirnay
 * started at 14-11-14
 */

// start your work here.


( function( $ ){
	"use strict";

	var timeAnimation = 350;

  var _confLiLogin = function(){
    $(".js-menu").append("<li class='log'><span class='icon-user'></span><span class='visuallyhidden'>se connecter</span></li>");
    var loginButton = $(".js-menu").children("li").last();
		loginButton.click(_animBoxLogin);
  }

	var _animBoxLogin = function(){
		$(".js-login").slideToggle(timeAnimation);

		$(window).scroll(function(){
			$(".js-login").slideUp(timeAnimation);
		});
	}

	var _openBoxIfErrorValidation = function(){
		if($(".error").length){
			// if an error span tag exist, open the log box when page reload
			$(".js-login").slideDown(timeAnimation);
		};
	}




  $(function(){
    //onload

    _confLiLogin();
		_openBoxIfErrorValidation();


  });

})( jQuery );
