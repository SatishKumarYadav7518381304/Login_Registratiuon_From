<?php
$id=$_REQUEST['id'];
//echo  $id;
include'connection.php';
$q="delete from tbl_stinfo where  st_id='$id'";
$res=mysqli_query($con,$q);
if($res!=null)
{
header('location:stdisplay.php');	
	
}
else
{
	echo" Data Not Deleted at this time";
}
?>