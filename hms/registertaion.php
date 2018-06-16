<?php
include("connection.php");
 $r=$_GET['room'];
$ci=$_GET['ci'];
$co=$_GET['co'];
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
	<div id="bg" style="background-image:url(''); width:100%; height:900px;">
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
	<div id="banner">
	<div id="form">
	<form action="" method="post">
	<table style="color:red;">
	<?php
	$q1="select * from room where status = 'UnBook'";
		$run=mysql_query($q1);
		$row=mysql_fetch_array($run);
		echo $rno=$row['rno'];
	$q="select * from room where status = 'UnBook'";
	$run=mysql_query($q);
	$num = mysql_num_rows($run);
	if($r<=$num)
		
		{
			?>
			<tr>
	<td>Status</td>
	<td><input type="text" value="Available"></td>
	</tr>
	<tr>
	<td>Name</td>
	<td><input type="text" name="name" placeholder="name"></td>
	</tr>
	<tr>
	<td>ID No.</td>
	<td><input type="text" name="id" placeholder="Enter Id"></td>
	</tr>
	<tr>
	<td>Address</td>
	<td><input type="text" name="address" placeholder="Enter Address"></td>
	</tr>
	<tr>
	<td>City</td>
	<td><select name="city">
	<option>--select--</option>
	<option>Udaipur</option>
	<option>Delhi</option>
	<option>Jaipur</option>
	<option>Ahmedabad</option>
	<option>Jodhpur</option>
	</select>
	</tr>
	<tr>
	<td>State</td>
	<td><select name="state">
	<option>--select--</option>
	<option>Rajasthan</option>
	<option>Delhi</option>
	<option>UP</option>
	<option>Gujarat</option>
	<option>MP</option>
	</select>
	</tr>
	<tr>
	<td> Enter Email </td>
	<td> <input type="email" name="email" placeholder="Enter Email"></td>
	</tr>
	<tr>
	<td>CheckIn</td>
	<td><input type="date" name="checkin" value="<?php echo $ci; ?>"></td>
	<td>Checkout</td>
	<td><input type="date" name="checkout" value="<?php echo $co; ?>"></td>
	<tr>
	<td>Number Of persons</td>
	<td><input type="number" name="members"></td>
	</tr>
	<tr>
	<td><input style="width :80px; height:30px; border-radius:20px; opacity:0.8;" type="submit" name="submit" value="Submit"></td>
	</tr>
			
	<?php		
		}
		else
		{
			?>
			<td>Status</td>
	<td><input type="text" value="Not-Available"></td>
	</tr>
			<?php
		}
		
	?>
	
	
	
	
	
	</table>
	</form>
		<?php
	
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$id=$_POST['id'];
		$add=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$email=$_POST['email'];
		$cidate=$_POST['checkin'];
		$codate=$_POST['checkout'];
		$person=$_POST['members'];
		
		$q="insert into form values('$name','$id','$add','$city'
		,'$state','$email','$cidate','$codate','$members')";
		$q2="update room set status='Booked' where rno=$rno";
		$check=mysql_query($q);
		$check2=mysql_query($q2);
		if(!$check && !$check2)
{
	
		die("unable to execute the query ". mysql_error().$q+$q2);
	
		}
		else
			
			{
				echo "Inserted and registeration complete";
			
	
		}

	}
	
	?>

	</div>
	</div>
	</div>
	
</div>


</body>
</html>	