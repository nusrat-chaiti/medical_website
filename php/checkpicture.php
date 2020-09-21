<?php
session_start();
	//require_once('../php/session_header.php');
	require_once('../service/internservice.php');

	if(isset($_POST['submit'])){
		
		
		$a =  $_SESSION['uname'];
		
		
		$file =  $_FILES['Picture']['name'];
		if($file=="")
		{
			echo "Enter a picture";
			 header("refresh:2; url=../views/picture.html");
		}
		else {
		$tmp_name =  $_FILES['Picture']['tmp_name'];
        $folder = "../image/".$file;
		//echo $folder;
		move_uploaded_file($tmp_name,$folder);
		
		$status = upload($a,$folder);
		echo"Picture upload success";
		 header("refresh:1; url=../views/picture.html");

			
		}
		




		
		
	}
?>
