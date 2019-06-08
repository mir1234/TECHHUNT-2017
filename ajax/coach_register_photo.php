<?php
	include("../include/function.php");
	if(isset($_REQUEST['go_techhunt']))
	{
		$link=$_REQUEST['image'];
	
		$file=$_FILES[$link];
		$image_name=photo_upload($file,0,100000,"jpg,gif,png,jpeg,bmp",'../images/coach',$path='');
		
		echo $image_name;
	}

?>