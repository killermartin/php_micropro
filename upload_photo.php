<?php

session_start();

$usid="";
$msg="";
if(isset($_FILES["fnm"]))
{
	$fnm=$_FILES["fnm"]["name"];
	$tmp=$_FILES["fnm"]["tmp_name"];
	$pth="images/".$fnm;
	$usid=$_SESSION['uid'];

		include("conn.php");
		$sql="update info set Photo='$fnm' where Userid='$usid'";
		$r=mysqli_query($con,$sql)or die(mysqli_error($con));
		move_uploaded_file($tmp,$pth);
		$msg='<center><h3 style="color:blue">Successfully Uploaded<h3></center>';
			
	}
			
header("Location:imgupload.php?ms=".$msg); 

?>