<?php
$uid=$_POST["uid"];
$pass=$_POST["pass"];
$nam=$_POST["unm"];
$city=$_POST["city"];
$register="";
if(empty($uid)||empty($pass)||empty($nam)||empty($city))
	 $register="<h3 style='color:red'>All fields are to be entered!!</h3>";
else
	{
		include("conn.php");
		$sql="insert into info(Userid,Pwd,Name,City) values('$uid','$pass','$nam','$city')"; 
	    mysqli_query($con,$sql) or die(mysqli_error($con));
		$register="<h3 style='color:blue'>Successfully Registered</h3>";
	   
	}	
 header("Location:register.php?rmsg=".$register);


?>
