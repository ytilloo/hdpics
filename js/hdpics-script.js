
var pics_list_arr=new Array();
for(j=1;j<11;j++){
pics_list_arr.push(j+'.jpg');
}

var i=0;
var varslide=false;
var slideit=0;
var imgloaded=false;

function showPic(){
	
img_main.src="hdimages/"+pics_list_arr[i];
}


function nextPic(){
if(i<pics_list_arr.length-1) {i++;}else{i=0;}
showPic();

}

function prevPic(){
if(i>0) {i--;}else{i=pics_list_arr.length-1;}
showPic();
}

function slideshow(){
	
var btnslide=document.getElementById("btnslide");
	if(btnslide.value=="Slideshow"){
		var timeout="4000";
		slideit=setInterval("nextPic()",timeout);
		btnslide.value="Pause";
	}else{
		clearInterval(slideit);
		btnslide.value="Slideshow";
	}
}

