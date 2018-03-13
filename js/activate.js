var activate = function(id){
	console.log(id);
	var work = document.getElementsByClassName("work")[0];
	for(var c in work.children){
		work.children[c].className = "";
	}
	document.getElementById(id).className += "active";
};


var home_page = false;
window.onload = function(){
	console.log(home_page);


	if(home_page===false){
		document.getElementById("menuToggle").onclick = function(){
			var sidebar = document.getElementById("sidebar"); 
			sidebar.classList.toggle("hidden");
		};
	}

	var menu_items = document.getElementsByClassName("work")[0].children; 

	for(var m in menu_items){
		menu_items[m].onmouseover = function(){
			if(home_page){
				document.getElementById("image_preview").style.background = "url('work/imageThumbnails/"+this.id+".jpg') repeat";
			}else{
				document.getElementById("image_preview").style.background = "url('imageThumbnails/"+this.id+".jpg') repeat";
			}
			document.getElementById("image_preview").style.display = "block";
		};
		menu_items[m].onmouseleave = function(){
			document.getElementById("image_preview").style.display = "none";
		};
	}
};

var is_home_page = function(){
	home_page = true;
};
