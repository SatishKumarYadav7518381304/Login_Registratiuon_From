<?php
session_start();
$e=$_POST['email'];
$p=$_POST['pass'];
//echo $e.$p;
include 'connection.php';
$q="select * from tbl_admin where email='$e' and password='$p'";
$res=mysqli_query($con,$q);
//var_dump ($res);
$row=mysqli_fetch_array($res);
//print_r ($row);

if($row!=null)
{
	//echo "Your are write person";
	$_SESSION['adid']=$e;
	header("location:admindashboard.php");
}
else
{
	echo " Your have enter wrong Email-id or Password";
}

?>