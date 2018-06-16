<?php
$hostname="localhost";
$dbname="hotel";
$dbuser="root";
$dbpass="";
$dbcon=mysql_connect($hostname,$dbuser,$dbpass);
if(!$dbcon)
{
die("COuld Not make connection to localhost".mysql_error());
}
$con=mysql_select_db($dbname);
if(!$con)
{
die("Could not connect to db".mysql_error());
}







?>