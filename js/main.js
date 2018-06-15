
$(document).ready(function(){

	var menuOpen = false; 

	$("#menuToggle").on('click', function(event){
		menuOpen =! menuOpen; 
		if(menuOpen){
			$('.buttons').css("left", "0px");
		}else{
			$('.buttons').css("left", "100vw");
		}
	});

	$('#workButton').on('click', function(event){
		if( $(this).hasClass("index") ){
		    event.preventDefault();
		}
		
	    $('html, body').animate({
	        scrollTop: $('#work').offset().top
	    }, 500);
	    if(menuOpen && window.innerWidth < 992){
	    	$('.buttons').css("left", "100vw");
	    	menuOpen =! menuOpen; 
	    }
	});

	$(window).resize(function() {
		console.log(window.innerWidth);
		if( window.innerWidth >= 992){
			$('.buttons').css("left", "auto");
		}else{
			$('.buttons').css("left", "100vw");
		}
	});

});
