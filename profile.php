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
$photo="images/".$res["Photo"];



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
<img src="<?php echo $photo;?>" height="80px" width="80px" />
<h3><font color="red">Welcome <?php echo " ".$name;?></font></h3>
<h3><font color="red">From <?php echo " ".$city;?></font></h3>
</p>
<p>
<center>
<h3>Update Account</h3>
			<form method="POST" action="update_account.php">
 				<table align="center">
					<tr>
						<td><input type="password" name="npwd" value="<?php echo $pwd;?>" /></td>
					</tr>
					<tr>
						<td><input type="text" name="ncity" value="<?php echo $city;?>" /></td>
					</tr>
					<tr>
						<td align="center"><input type="Submit" name="s1" value="Sign In"/></td>
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
