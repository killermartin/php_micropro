<?php
$rsg="";
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
		<div id="login">
		<p>

			<form method="POST" action="login_verify.php">
 
				<table align="center">
					<tr>
						<td><input type="text" name="uid" placeholder="Enter User Id"/></td>
					</tr>
					<tr>
						<td><input type="password" name="pass" placeholder="Enter Password"/></td>
					</tr>
					<tr>
						<td align="center"><input type="Submit" name="s1" value="Sign In"/></td>
					</tr>
				</table>
			</form>
			<a href="register.php">New User Sign-up</a>
		</p>
</div><!-- end of login div -->
<h3>Menu 1</h3>
<h3>Menu 2</h3>
<h3>Menu 3</h3>
<h3>Menu 4</h3>
<h3>Menu 5</h3>
</div><!-- end of left div -->
<div id="right">
<p>
<h2><font color="red">User Registration</font></h2>
<form method="post" action="register_me.php">
 
				<table align="center">
					<tr>
						<td><input type="text" name="uid" placeholder="Enter User ID"/></td>
					</tr>
					<tr>
						<td><input type="password" name="pass" placeholder="Enter Password"/></td>
					</tr>
					<tr>
						<td align="center"><input type="text" name="unm" placeholder="Enter Full Name" />									</td>
						<tr>
						<td align="center"><input type="text" name="city" placeholder="Enter City" /></td>
					</tr>
					<tr>
						<td align="center"><input type="submit" value="Register" name="s1"/></td>
				</table>
			</form>
</p>
<center><?php if(isset($_GET["rmsg"])) $rsg=$_GET["rmsg"]; echo $rsg;?></center>
</div><!-- end of right div -->
<div id="footer">
<center> &copy;opyright protected 2018 </center>
</div><!-- end of footer  div -->
</div><!-- end of content div -->
</div><!-- end of main div -->
</center>
</body>
</html>
