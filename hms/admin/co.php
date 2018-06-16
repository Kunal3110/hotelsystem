<?php
include('connection.php');
$rno=$_GET['rno'];
$q2="update room set status='UnBook' where rno=$rno";
$result=mysql_query($q2);
if(!$result)
{
	die(mysql_error().q2);
}
else
{
	header('location:rd.php');
}


?>