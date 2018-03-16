
$(document).ready(function(){

	// animate scroll to sections

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
	window.onscroll = function() {
		var workContainer = document.getElementById('work');
		var aboutContainer = document.getElementById('about');
		rotateWorkHand(workContainer);
		rotateAboutHand(aboutContainer);
	}

	function rotateWorkHand(element) {
	    var e = element.getBoundingClientRect();
	    if(e.bottom < window.innerHeight*0.25){
	    //POINT UP
	    	$("#work-button #hand path").css("transform", "rotate(180deg)");
	    	$("#work-button #hand line").css("transform", "rotate(180deg)");

	    }else if(e.top <= 50 && e.bottom >= window.innerHeight*0.75){
	    //POINT LEFT
	    	$("#work-button #hand path").css("transform", "rotate(90deg)");
	    	$("#work-button #hand line").css("transform", "rotate(90deg)");
	    }else if(e.top > window.innerHeight){
    	//POINT DOWN
	    	$("#work-button #hand path").css("transform", "rotate(0deg)");
	    	$("#work-button #hand line").css("transform", "rotate(0deg)");
	    }

	}

	function rotateAboutHand(element) {
	    var e = element.getBoundingClientRect();
		if(e.top <= window.innerHeight*0.75){
		//POINT LEFT
			$("#about-button #hand path").css("transform", "rotate(90deg)");
	    	$("#about-button #hand line").css("transform", "rotate(90deg)");
		}else{
		 //POINT DOWN
			$("#about-button #hand path").css("transform", "rotate(0deg)");
	    	$("#about-button #hand line").css("transform", "rotate(0deg)");
		}
	}

});




