<?php
$n=$_POST['n'];
$fn=$_POST['fn'];
$e=$_POST['e'];
$d=$_POST['dob'];
$g=$_POST['gen'];
$a=$_POST['ag'];
$n=$_POST['n'];
$m=$_POST['mob'];
$p=$_POST['pass'];
$c=$_POST['city'];
$add=$_POST['ad'];
$hob=implode(',',$_POST['hob']);
$file_name=$_FILES['pic']['name'];
//echo $file_name."<br/>";
$file_type=$_FILES['pic']['type'];
//echo $file_type."<br/>";
$file_tmp=$_FILES['pic']['tmp_name'];
//echo $file_tmp."<br/>";
$file_size=$_FILES['pic']['size'];
//echo $file_size."<br/>";
move_uploaded_file($file_tmp,"gallery/$file_name");
include"connection.php";
$query="insert into tbl_stinfo(st_name,	st_fname,st_email,st_dob,st_gen,st_age,st_mob,st_pass,st_city,st_address,st_hob,file) value('$n','$fn','$e','$d','$g','$a','$m','$p','$c','$add','$hob','$file_name')";
$result=mysqli_query($con,$query);
if($result!=null){
	header('location:stdisplay.php');
	//echo"data inserted";
}
else
{
	echo"Something went wrong";
}
?>