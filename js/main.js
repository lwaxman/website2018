
$( document ).ready(function() {

	$('#home-button').on('click', function (event) {
	    event.preventDefault();
	    $('html, body').animate({
	        scrollTop: $('#header').offset().top
	    }, 500);
	});

	$('#work-button').on('click', function (event) {
	    event.preventDefault();
	    $('html, body').animate({
	        scrollTop: $('#work').offset().top
	    }, 500);
	});

	$('#about-button').on('click', function (event) {
	    event.preventDefault();
	    $('html, body').animate({
	        scrollTop: $('#about').offset().top
	    }, 500);
	});

	$(window).scroll(function(){
		$('.text').each(function(){
			if(isVisible($(this))){
				$(this).children('span').text('visible');
			}
			else{
				$(this).children('span').text('invisible');
			}
		});

		// $('.text').each(function(){
		// 	if(isScrolledIntoView($(this))){
		// 		$(this).children('span').text('visible');
		// 	}
		// 	else{
		// 		$(this).children('span').text('invisible');
		// 	}
		// });
	});

	function isVisible(elem){
		var $elem = $(elem);
		var $window = $(window);

		var docViewTop = $window.scrollTop();
		var docViewBottom = docViewTop + $window.height();

		var elemTop = $elem.offset().top;
		var elemBottom = elemTop + $elem.height();

		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}


});

