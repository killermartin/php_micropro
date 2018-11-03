<?php

session_start();

$msg="";
$city=$_POST["ncity"];
$npasswd=$_POST["npwd"];
$usid=$_SESSION['uid'];

//echo $usid."  ".$passw;
if(!empty($city) or !empty($npasswd))
	
	{
		include("conn.php");
		$sql="update info set Pwd='$npasswd',City='$city' where Userid='$usid'";
		$r=mysqli_query($con,$sql)or die(mysqli_error($con));
		$msg='<center><h3 style="color:blue">Successfully Updated<h3></center>';
			
	}
			
header("Location:profile.php?ms=".$msg); 

?>