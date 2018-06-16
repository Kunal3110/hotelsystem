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
		<li><a href="ahome">Home</a></li>
		<li><a href="room.php">Room Update</a></li>
		<li><a href="booking.php">Booking</a></li>
		<li><a href="rd.php">Room Details</a></li>
		<li><a href="#">Help</a></li>
	    </ul>
		</div>
	</div>
	<div id="banner"><br><br><br><br><br><br><br><br><br>
	<h1 style="color:blue;text-align:center;">Welcome Admin</h1>
	<div style="background-color:rgba(255,255,255,0.7);">
	<table>
	<tr>
	<th width="25%" height="50px">Room No</th>
	<th width="25%" height="50px">Room Type</th>
	<th width="25%" height="50px">Price</th>
	<th width="25%" height="50px">Status</th>
	<th width="25%" height="50px">Option</th>
	
	</tr>
	<?php
	$q1="select * from room";
	$run=mysql_query($q1);
	while($row=mysql_fetch_array($run))
	{
		$rno=$row['rno'];
		$type=$row['type'];
		$price=$row['price'];
		$status=$row['status'];
		?>
	<tr>
	<td width="25%" height="50px"><center><?php echo $rno;?></center></td>
	<td width="25%" height="50px"><center><?php echo $type;?></center></td>
	<td width="25%" height="50px"><center><?php echo $price;?></center></td>
	<td width="25%" height="50px"><center><?php echo $status;?></center></td>
	<td ><a style="color:blue;" href="co.php? rno=<?php echo $rno; ?>">Check out</td>
	</tr>
	<?php
	}
	?>
	</table>
	</div>
	</div>
	<div>
	<center></center>
	</div>
	</div>
	
</div>


</body>
</html>	