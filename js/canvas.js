var canvas = document.getElementById('headerCanvas');
var c = canvas.getContext("2d");
width = window.innerWidth;
height = window.innerHeight*0.6;
canvas.width = width;
canvas.height = height;

var mouseX;
var mouseY;
var pMouseX;
var pMouseY;
var hoverLink = false;

if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)==false ) {

	console.log("not mobile");
	setup();

}

function setup(){
	width = window.innerWidth;
	height = window.innerHeight*0.6;
	canvas.width = width;
	canvas.height = height;
	background("rgba(224,236,255,1)");
	draw();
};

function draw(){
	c.lineWidth = 20;//50
	c.lineCap = "round";
	c.lineJoin = "round";
	background("rgba(224,236,255,0.05)");
	c.strokeStyle = "#6988FF";

	c.beginPath();
	c.moveTo(pMouseX, pMouseY);
	c.lineTo(mouseX, mouseY);
	c.stroke();
	c.closePath();

	c.beginPath();
	c.moveTo(width-pMouseX, height-pMouseY);
	c.lineTo(width-mouseX, height-mouseY);
	c.stroke();
	c.closePath();

	c.beginPath();
	c.moveTo(pMouseX, height-pMouseY);
	c.lineTo(mouseX, height-mouseY);
	c.stroke();
	c.closePath();

	c.beginPath();
	c.moveTo(width-pMouseX, pMouseY);
	c.lineTo(width-mouseX, mouseY);
	c.stroke();
	c.closePath();

	setTimeout(draw, 10);
};

$("a").bind("mouseenter", function(){
	hoverLink = true;
});
$("a").bind("mouseleave", function(){
	hoverLink = false;
});

function background(color){
	c.beginPath();
    c.rect(0, 0, width, height);
    c.fillStyle = color;
    c.fill();
    c.closePath();
}

document.onmousemove = function(e){
	pMouseX = mouseX; 
	pMouseY = mouseY; 
	mouseX = e.clientX;
	mouseY = e.clientY;
};

window.onresize = function(event) {
    setup();
};

