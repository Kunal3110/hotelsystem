	<?php
	
	if(isset($_POST['submit']))
	{
		include("connection.php");
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
		,'$state','$email','$checkin','$checkout','$members')";
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