<?php
include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home (Hotel Management)</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="img/logo.png" type="img/icon" rel="icon">
</head>
<body>
<div id="full">
	<div id="bg" style="background-image:url('img/b1.jpg'); width:100%; height:1200px;">
	<div id="header">
		<div id="logo">
			<h1><font color="white">My project</font></h1>
		</div>
		<div id = "nav">
		<ul>
		<li><a href="ahome.php">Home</a></li>
		<li><a href="room.php">Room Update</a></li>
		<li><a href="booking.php">Booking</a></li>
		<li><a href="rd.php">Room Details</a></li>
		<li><a href="#">Help</a></li>
	    </ul>
		</div>
	</div>
	<div id="banner">
	<center><div id="form">
	<form action="" method="post">
	<table style="color:red;">
	<tr>
	<td>Status</td>
	<td><input type="text" name="status" placeholder="Enter Status"></td>
	</tr>
	<tr>
	<td>Room No</td>
	<td><input type="text" name="rno" placeholder="Enter Room No"></td>
	</tr>
	<td>Room Type</td>
	<td><input type="text" name="type" placeholder="Enter Room Type"></td>
	</tr>
	<tr>
	<td>Room Price</td>
	<td><input type="text" name="price" placeholder="Enter Address"></td>
	</tr>
	
	
	<tr>
	<td><input style="width :80px; height:30px; border-radius:20px; opacity:0.8;" type="submit" name="submit" value="Submit"></td>
	</tr>
	
	
	</table>
	</form>
	<?php
	
	if(isset($_POST['submit']))
	{
	
	$status = $_POST['status'];
		$rno=$_POST['rno'];
		$type=$_POST['type'];
		$price=$_POST['price'];
		$q="insert into room(status,rno,type,price) values('$status','$rno','$type','$price')";
		$check=mysql_query($q);
		if(!$check)
{
		die("unable to execute the query ". mysql_error().$q);
	
		}
		else
{
			echo "Inserted Successfully";	
	
		}

	}
	
	?>
	
	</div></center>
	</div>
	</div>
	
</div>


</body>
</html>	