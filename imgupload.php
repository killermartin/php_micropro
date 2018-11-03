<?php
session_start();
if(!isset($_SESSION['uid']))
	header("Location:index.php");
include("conn.php");

$ms="";
$uid=$_SESSION['uid'];

$sql="select * from info where Userid='$uid'";
$r=mysqli_query($con,$sql);
$res=mysqli_fetch_array($r);
$name=$res["Name"];
$pwd=$res["Pwd"];
$city=$res["City"];
$photo=$res["Photo"];



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="menutab.css" type="text/css" rel="stylesheet" />
</head>

<body bgcolor="#CCCCCC">
<center>
<div id="main">
<div id="navbar">
<div id="holder" algin="center">
<ul>
<li><a href="index.php">HOME</a></li>
<li><a href="profile.jsp">PROFILE</a></li>
<li><a href="imgupload.jsp">IMAGE UPLOAD</a></li>
<li><a href="user.jsp"><br />USER DETAILS</a></li>
<li><a href="allusr.jsp">ALL USER</a></li>
<li><a href="logout.jsp">LOG OUT</a></li>

</ul>
</div><!-- End of div holder -->

</div><!-- End of div navbar-->
</center>
<center>
<div id="content">
	<div id="left">

<h3>Menu 1</h3>
<h3>Menu 2</h3>
<h3>Menu 3</h3>
<h3>Menu 4</h3>
<h3>Menu 5</h3>
</div><!-- end of left div -->
<div id="right">

<p>
<center>
<h3>Upload Photo</h3>
			<form method="POST" action="upload_photo.php" enctype="multipart/form-data">
 				<table align="center">
					<tr>
						<td><input type="file" name="fnm" /></td>
					</tr>
					<tr>
						<td><input type="submit" name="s1" value="Upload Photo" /></td>
					</tr>
					
				</table>
			</form>
			<?php if(isset($_REQUEST['ms'])) $ms=$_REQUEST['ms']; echo $ms;?>
			</center>
</p>
</div><!-- end of right div -->
<div id="footer">
<center> &copy;opyright protected 2018 </center>
</div><!-- end of footer  div -->
</div><!-- end of content div -->
</div><!-- end of main div -->
</center>
</body>
</html>
