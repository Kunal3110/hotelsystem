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
	<th width="10%" height="50px">Name</th>
	<th width="10%" height="50px">ID</th>
	<th width="10%" height="50px">Add</th>
	<th width="10%" height="50px">City</th>
	<th width="10%" height="50px">State</th>
	<th width="10%" height="50px">Email</th>
	<th width="10%" height="50px">Check In date</th>
	<th width="10%" height="50px">Check Out date</th>
	<th width="10%" height="50px">Member</th>
	</tr>
	<?php
	$q1="select * from form";
	$run=mysql_query($q1);
	while($row=mysql_fetch_array($run))
	{
		$name=$row['name'];
		$id=$row['id'];
		$add=$row['add'];
		$city=$row['city'];
		$state=$row['state'];
		$email=$row['email'];
		$cidate=$row['cidate'];
		$codate=$row['codate'];
		$person=$row['person'];
		?>
	
	<tr>
	<td width="10%" height="50px"><center><?php echo $name; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $id; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $add; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $city; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $state; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $email; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $cidate; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $codate; ?></center></td>
	<td width="10%" height="50px"><center><?php echo $person; ?></center></td>
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