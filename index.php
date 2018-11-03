<?php
$ms="";
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
<li><a href="profile.php">PROFILE</a></li>
<li><a href="imgupload.php">IMAGE UPLOAD</a></li>
<li><a href="user.php"><br />USER DETAILS</a></li>
<li><a href="allusr.php">ALL USER</a></li>
<li><a href="logout.php">LOG OUT</a></li>

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
		<br/>
		<?php if(isset($_REQUEST['ms'])) $ms=$_REQUEST['ms']; echo $ms;?>
</div><!-- end of login div -->
<h3>Menu 1</h3>
<h3>Menu 2</h3>
<h3>Menu 3</h3>
<h3>Menu 4</h3>
<h3>Menu 5</h3>
</div><!-- end of left div -->
<div id="right">
<p>
<h1><font color="red">Welcome to mywebsite.com</font></h1>
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
