
$(document).ready(function(){

	$('#home-button').on('click', function(event){
	    event.preventDefault();
	    $('html, body').animate({
	        scrollTop: $('#header').offset().top
	    }, 500);
	});

	$('#work-button').on('click', function(event){
	    event.preventDefault();
	    $('html, body').animate({
	        scrollTop: $('#work').offset().top
	    }, 500);
	});

	$('#about-button').on('click', function(event){
	    event.preventDefault();
	    $('html, body').animate({
	        scrollTop: $('#about').offset().top
	    }, 500);
	});

	//hand rotation functions trigger on scroll
	var workContainer = document.getElementById('work');
	var aboutContainer = document.getElementById('about');
	window.onscroll = function() {
		rotateWorkHand(workContainer);
		rotateAboutHand(aboutContainer);
	}

	function rotateWorkHand(element) {
	    var e = element.getBoundingClientRect();
	    if(e.bottom < window.innerHeight*0.25){
	    //POINT UP
	    	$("#work-button .hand").css("transform", "rotate(180deg)");
	    }else if(e.top <= 50 && e.bottom >= window.innerHeight*0.75){
	    //POINT LEFT
	    	$("#work-button .hand").css("transform", "rotate(90deg)");
	    }else if(e.top > window.innerHeight){
    	//POINT DOWN
	    	$("#work-button .hand").css("transform", "rotate(0deg)");
	    }
	}

	function rotateAboutHand(element) {
	    var e = element.getBoundingClientRect();
		if(e.top <= window.innerHeight*0.75){
		//POINT LEFT
			$("#about-button .hand").css("transform", "rotate(90deg)");
		}else{
		 //POINT DOWN
			$("#about-button .hand").css("transform", "rotate(0deg)");
		}
	}

});




