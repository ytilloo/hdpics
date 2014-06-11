<br>
<script>
var pics_list_arr=new Array();

var i=0;
var removeAttribute=false;

function showPic(){
	//alert(i+pics_list_arr[i]);

		
	var width = img_main.clientWidth;
	var height = img_main.clientHeight;
	
	//alert("img width"+width+"img height"+height);
	
	img_main.src="hdimages/top10/"+pics_list_arr[i];
	
	
	updateOrientation();
	
	//alert("screen width"+screen.width+"screen height"+screen.height);
	
	//iph5 - 320x568
}

function nextPic(){
		//alert(i);
	if(i<pics_list_arr.length-1) {i++;}else{i=0;}
	showPic();

	}

function prevPic(){
	if(i>0) {i--;}else{i=pics_list_arr.length-1;}
	showPic();
	}

function openPic(){
	//alert("open");
	if(!removeAttribute){
	img_main.removeAttribute("width");
	removeAttribute=true;
	}else{
	img_main.width=screen.width;
	removeAttribute=false;
	}
        
}

function updateOrientation(){
//alert(window.orientation);

if(window.orientation==0){
img_main.width=screen.width;
}else{
img_main.width=(screen.height);
}
return;
}
</script>

<?php

$loc = "hdimages/top10";

$ite=new RecursiveDirectoryIterator($loc);
$no=0;
if (is_dir($loc)) {
foreach (new RecursiveIteratorIterator($ite) as $filename=>$cur) {
        	
        	if($filename != "." && $filename != ".." && (strpos($filename,'.jpg') || strpos($filename,'.png'))
   	   && !strpos($filename,'DS_Store')&& !strpos($filename,'svn') 
   	&& !strpos($filename,'AppleDouble')  && !strpos($filename,'._')) {
   	
            #echo $filename."<br>";
            echo "<script>pics_list_arr.push('".basename($filename)."')</script>";
        $no++;
        	}
    }
}
#echo $no;

?>

<body onorientationchange="updateOrientation();" onLoad="showPic();">

<div align="center">
<input type="button" value="Prev" onClick="prevPic();">
<input type="button" value="Next" align="right" onClick="nextPic();">
</div>
<div align="center" style="margin:0;padding:0;overflow-x:hidden">
<a id="img_href" href="#"><img id="img_main" src="../icons/icon_hdpics.png" align="center" onClick="openPic();"></a>
<div>

