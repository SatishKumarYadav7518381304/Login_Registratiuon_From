<?php
session_start();
      if(!isset($_SESSION['adid'])){
      header('location:index.php');
}
include 'connection.php';
$query="select * from tbl_stinfo";
$result=mysqli_query($con,$query);

?>

<?php include'headerlink.php';?>
<
</head>
<body>
<div class="container">
<?php include'header.php';?>
</div>
<div class="container">
<table border="1" class="table table-responsive">
<tr>
<td><b><u>S.No</b></td>
<td><b><u>Name</u></b></td>
<td><b><u> Father Name</u></b></td>
<td><b><u>Email</u></b></td>
<td><b><u>D.O.B</u></b></td>
<td><b><u>Gander</u></b></td>
<td><b><u>Age</u></b></td>
<td><b><u>Mobile No.</u></b></td>
<td> <b><u>City</u></b></td>
<td><b><u>Address </u></b></td>
<td><b><u>Hobbies</u></b></td>
<td><b><u>Image</u></b></td>
<td><b><u>Delete</u></b></td>
<td><b><u>Update </u></b></td>

</tr>
<?php
$count=1;
while($row=mysqli_fetch_array($result)){
?>
	<tr>
	<td><?php echo $count;$count++?></td>
	<td><?php echo $row['st_name'];?></td>
    <td><?php echo $row['st_fname'];?></td>
	<td><?php echo $row['st_email'];?></td>
    <td><?php echo $row['st_dob'];?></td>
	<td><?php echo $row['st_gen'];?></td>
	<td><?php echo $row['st_age'];?></td>
	<td><?php echo $row['st_mob'];?></td>
	<td><?php echo $row['st_city'];?></td>
	<td><?php echo $row['st_address'];?></td>
	<td><?php echo $row['st_hob'];?></td>
     <td><img src="gallery/<?php echo $row['file'];?>"height="100px" width="100px"/></td>
	<td><a href="stdel.php?id=<?php echo $row['st_id'];?>"> Delete</a></td>
	<td><a href="edit.php?id=<?php echo $row['st_id'];?>"> Update</a></td>
	
	<td><a> 


	</tr>
	<?php
}
?>
</table>
</div>
<div class="container">
<?php include'footer.php';?>
</div>
<div class="container">
<?php include'footerlink.php';?>
</div>
</body>
</html>