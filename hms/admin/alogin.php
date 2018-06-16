<?php
if(isset($_POST['sub']))
	{
		include("connection.php");
	
		$uname=$_POST['uname'];
		 $password=$_POST['password'];
		$query="select * from admin";
		$check=mysql_query($query);
		$row=mysql_fetch_array($check);
		  $u=$row['uname'];
		  $p=$row['password'];
          if($uname==$u && $password==$p)
		  {
			  header("Location:ahome.php");
			  
			  }
	      else
		  {echo "Invalid Credentials";
	  }
	}
	
	?>