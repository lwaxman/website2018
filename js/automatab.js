var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');

var d = new Date;
var timeOfDay = d.getHours();

var nightMode = false;

var cells = [];
var ruleset;
var cellSize = 8;
var width = 0, height = 0;
var cellCount;
var count = 0;
var switchCounter = 0;
var newCount = 0;
var switchCount;
var remaining = height;
var piece; 

var perHeight = 1; 
var perWidth = 1; 

var chooseStart;

var colourOne, colourTwo; 

setup();

function setup(){

	chooseStart = Math.round(Math.random()*3);

	if(chooseStart = 1){
		ruleset = [1, 0, 0, 1, 1, 1, 0, 0];
	}else{
		ruleset = [0, 0, 0, 0, 1, 0, 1, 1];
	}

	width = window.innerWidth*perWidth;
	height = window.innerHeight*perHeight;

	canvas.width = width;
	canvas.height = height;

	// if(width<=800){
	// 	cellSize=16; 
	// }

	cellCount = width/cellSize; 
	cells = [cellCount];

	for(var q=0; q<cellCount; q++){
		var cellType = Math.round(Math.random()*(2+1)-1);
		cells[q] = cellType;
	}

	var pieceHeight = height/cellSize;
	piece = Math.round(Math.random()*(pieceHeight-cellSize)+cellSize);
	switchCount = Math.round(Math.random()*(100-20)+20);

	if(timeOfDay>=19 || timeOfDay<=5){
		nightMode = true;
	}

	makeNewColours();
	background(colourTwo);

	draw();
}

function draw(){
	drawCells(count, cells);
	updateCells(cells);
	count++;
	switchCounter++;
	if(count>=(height/cellSize)){
		count = 0; 
	} 

	if(switchCounter >= switchCount){
		makeNewRules();	
		makeNewColours();
		switchCounter = 0;
		switchCount = Math.round(Math.random()*(100-20)+20);
	}

	setTimeout(draw, 33);
}

window.onresize = function(event) {

	width = window.innerWidth*perWidth;
	height = window.innerHeight*perHeight;

	canvas.width = width;
	canvas.height = height;

	background(colourTwo);

	cellCount = width/cellSize; 
	cells = [cellCount];

	for(var q=0; q<cellCount; q++){
		var cellType = Math.round(Math.random()*(2+1)-1);
		cells[q] = cellType;
	}
};

function background(color){
	context.beginPath();
    context.rect(0, 0, width, height);
    context.fillStyle = color;
    context.fill();
}

// http://stackoverflow.com/questions/1484506/random-color-generator-in-javascript
function getRandomColour() {
    var letters = '0123456789ABCDEF'.split('');
    var nightLetters = '012345678'.split('');
    var color = '#';
    if(nightMode){
    	for (var i = 0; i < 6; i++ ) {
			color += nightLetters[Math.floor(Math.random() * 9)];
		}
    }else{
	    for (var i = 0; i < 6; i++ ) {
			color += letters[Math.floor(Math.random() * 16)];
		}	
    }
    return color;
}

/********************************************* RULES **/


function rules (a, b, c) {
	if 		(a === 1 && b === 1 && c === 1){ return ruleset[0]; }  
	else if (a === 1 && b === 1 && c === 0){ return ruleset[1]; }
	else if (a === 1 && b === 0 && c === 1){ return ruleset[2]; }
	else if (a === 1 && b === 0 && c === 0){ return ruleset[3]; }
	else if (a === 0 && b === 1 && c === 1){ return ruleset[4]; }
	else if (a === 0 && b === 1 && c === 0){ return ruleset[5]; }
	else if (a === 0 && b === 0 && c === 1){ return ruleset[6]; }
	else if (a === 0 && b === 0 && c === 0){ return ruleset[7]; }
	return 0;
}

function updateCells(cells){	
	for (var i = 0; i < cells.length; i++){
		var left, middle, right;
		if(i==0){
			left   = cells[cells.length-1];
			middle = cells[i];
			right  = cells[i+1];
		}else if(i==cells.length){
			left   = cells[i-1];
			middle = cells[i];
			right  = cells[i+1];
		}else{
			left   = cells[i-1];
			middle = cells[i];
			right  = cells[0];
		}
		var newstate = rules(left,middle,right);
		cells[i] = newstate;
	}
}

function drawCells(count, cells){
	for(var i=0; i<cells.length; i++) {
		context.beginPath();
		context.rect(i*cellSize,count*cellSize,cellSize,cellSize);
		if (cells[i] == 0) context.fillStyle = colourOne;
		else context.fillStyle = colourTwo;
		context.fill();
	}
}

function makeNewRules(){
	for(var q=0; q<cellCount; q++){
		var cellType = Math.round(Math.random()*(2+1)-1);
		cells[q] = cellType;
	}
	for(var r=0; r<8; r++){
		ruleset[r] = Math.round(Math.random()*(2+1)-1);
	}
	var pieceHeight = height/cellSize;
	piece = Math.round(Math.random()*(pieceHeight-cellSize)+cellSize);
}

function makeNewColours(){
	colourOne = getRandomColour();
	colourTwo = getRandomColour();
}
