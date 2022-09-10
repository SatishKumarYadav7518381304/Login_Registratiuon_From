<?php
$host='Localhost';
$user="root";
$pass="";
$db="miniproject";

$con=mysqli_connect($host,$user,$pass,$db);

if($con!=null)
{
	
}
else
{
	echo "Server Error";
}
?>