<?php
$id=$_REQUEST['id'];
//echo $id;
include'connection.php';
$q="select * from tbl_stinfo where st_id='$id'";
$res=mysqli_query($con,$q);
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>From Control</title>
  </head>
  <body>
    <h1 class="text-center">Update Page</h1>
	<div class="container" style="background-color:pink">
	
 <?php
	if($row=mysqli_fetch_array($res))
	{
	?>
	<form action="editcode.php" method="post">
	<input type="hidden" name="stid" value="<?php echo $row['st_id'];?>"/>
	<div class="mb-4">
	<label for="n" class="form_label">Name</label>
	<input type="text" id="n" class="form-control" name="n" value="<?php echo $row['st_name'];?>"/>
	</div>
	<div class="mb-4">
	<label for="f" class="form_label"> Father Name</label>
	&nbsp
	<input type="text" id="f" class="form-control" name="fn"/ value="<?php echo $row['st_fname'];?>">
	</div>
		<div class="mb-4">
	<label for="e" class="form_label"> Email</label>
	<input type="email" id="e" class="form-control" name="e" value="<?php echo $row['st_email'];?>"/>
	</div>
	
		<div class="mb-4">
	<label for="d" class="form_label">D.O.B</label>
	<input type="date" id="d" class="form-control" name="dob" value="<?php echo $row['st_dob'];?>" />
	</div>
	<div class="mb-4">
	<label for="g" class="from-label">Gender</label>
	&nbsp; &nbsp; &nbsp; &nbsp;
	<?php
	//echo $row['st_gen'];
	$male=""; $female="";
	if($row['st_gen']=='male')
	{
		$male="checked";
	}
	else
	{
		$female="checked";
	}
	?>
	<input type="radio" name="gen" value="male" class="form-check-input"<?php echo $male; ?>/>Male
	&nbsp; &nbsp; &nbsp; &nbsp;
	<input type="radio" name="gen" value="female" class="form-check-input"<?php echo $female; ?>/>Female
	
	</div>
		<div class="mb-4">
	<label for="a" class="form_label"> Age</label>
	<input type="Number" id="a" class="form-control" name="ag" value="<?php echo $row['st_age'];?>" />
	</div>
		<div class="mb-4">
	<label for="c" class="form_label"> Contact No.</label>
	<input type="text" id="c" class="form-control " name="mob" value="<?php echo $row['st_mob'];?>"/>
	<div class="mb-4">
	<label for="city" class="from-label">Select City</label>
	<select name="city" class="form-select" required>
	<option selected disabled hidden value="">
	<?php
	echo $row['st_city'];
	?>
	</option>
	<option >Lucknow</option>
	<option >Varansi</option>
	<option>Meerut</option>
	<option> Ayodhaya</option>
	<option>Delhi</option>
	</select>
	</div>
	
	
	
		<div class="mb-4">
	<label for="add" class="form_label"> Address</label>
	<textarea id="add" class="form-control" name="ad"> <?php echo $row['st_address'];?></textarea>
	</div>
			<div class="mb-4">
			<label for="hb" class="from-label">Hobbies</label>
			<?php
			$s="";$d="";$p="";
			$hob=explode(',',$row['st_hob']);
			//echo $hob;
			//print_r($hob); 
            foreach($hob as $h)
			{ 
			if($h=='s')
			   {
				$s="checked";
			   }
			else if($h=='d')
			     {
			     $d="checked";
			      }
			    else if($h=='p')
			      {
			      $p="checked";
			       }
			}			
			
			
			?>
			<input type="checkbox" name="hob[]" class="form-check-input" value="s" <?php echo $s;?> />Singing
		    <input type="checkbox"  name="hob[]" class="form-check-input" value="d" <?php echo $d;?> />Dancing
			<input type="checkbox"  name="hob[]" class="form-check-input" value="p" <?php echo $p;?> />Playing
		  	</div>
			</div>

	<div class="mb-5 d-grid">
	<input type="submit" class=" btn btn-primary">
	</div>
	</form>
	<?php
	}
	?>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

    
 
 