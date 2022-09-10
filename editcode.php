<?php
$id=$_POST['stid'];
$n=$_POST['n'];
$fn=$_POST['fn'];
$e=$_POST['e'];
$d=$_POST['dob'];
$g=$_POST['gen'];
$a=$_POST['ag'];
$n=$_POST['n'];
$m=$_POST['mob'];
$c=$_POST['city'];
$add=$_POST['ad'];
$hob=implode(',',$_POST['hob']);
include'connection.php';
$query="update tbl_stinfo set st_name='$n',st_fname='$fn',st_email='$e',st_dob='$d',st_gen='$g',st_age='$a',st_mob='$m',st_city='$c',st_address='$add',st_hob='$hob' where st_id='$id'";
//echo"$query";
$res=mysqli_query($con,$query);
if($res!=null)
{
	header('location:stdisplay.php');
}
else
{
	echo"Data not update this at time";
}
?>