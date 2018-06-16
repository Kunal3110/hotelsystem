<?php
include("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/logo.png" type="img/icon" rel="icon">
	
</head>
<body>
<div id="full">
	<div style="background-image:url('img/b1.jpg');background-size:100% 700px; width:100%; height:800px;">
	<div id="header">
		<div id="logo">
			<h1><font color="white">My project</font></h1>
		</div>
		<div id = "nav">
		<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">Contact</a></li>
		<li><a href="#">Book My Stay</a></li>
		<li><a href="#">Our Hotels</a></li>
		<li><a href="#">Help</a></li>
	    </ul>
		</div>
	</div>
	<div id="banner"><br><br><br><br><br><br><br><br><br>
	<center><div style="background:rgba(255,255,255,.5);width:80%">
	<form action="alogin.php" method="post">
	<table>
	<tr>
	<td width="50%" height="50%">Username</td>
	<td width="50%" height="50%" ><input type="text" name="uname" placeholder="Username"></td>
	</tr>
	<tr>
	<td width="50%" height="50%">Password</td>
	<td width="50%" height="50%" ><input type="password" name="password" placeholder="Password"></td>
	</tr>
	<tr>
	<td colspan="2"><input type="submit" name="sub" value="Login"></td>
	</form>
	
	
	</table>
	
	
	</div></center>
	</div>
	<div>
	<center></center>
	</div>
	</div>
	
</div>


</body>
</html>	