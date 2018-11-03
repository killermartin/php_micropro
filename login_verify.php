<?php

session_start();
$msg="";
$usid=$_POST["uid"];
$passw=$_POST["pass"];

//echo $usid."  ".$passw;
if(empty($usid) or empty($passw))
	$msg='<center><h3 style="color:red">Fields cannot be empty<h3></center>';
	
else
	{
		include("conn.php");
		$sql="select * from info where Userid='$usid' and Pwd='$passw'";
		$r=mysqli_query($con,$sql)or die(mysqli_error($con));
		$rctr=mysqli_num_rows($r);
		if($rctr>0)
			{
			     $_SESSION['uid']=$usid;
				$msg='<center><h3 style="color:blue">Successfully Signed In<h3></center>';
			}
		else
			$msg='<center><h3 style="color:red">Invalid Userid or Password entered<h3></center>';
	}
			
header("Location:index.php?ms=".$msg); 

?>