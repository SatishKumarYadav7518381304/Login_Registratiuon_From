
<?php
session_start();
      if(!isset($_SESSION['adid'])){
      header('location:index.php');
}
?>
<!doctype html>
<?php
include'headerlink.php';
?>
  <body>
  <?php
  include'header.php';
  ?>
    <h1 class="text-center">Registration Page</h1>
	<div class="container" style="background-color:orange">
	<form action="stregcode.php" method="post" enctype="multipart/form-data">
	<div class="mb-4">
	<label for="n" class="form_label">Name</label>
	<input type="text" id="n" class="form-control" name="n"/>
	</div>
	<div class="mb-4">
	<label for="f" class="form_label"> Father Name</label>
	<input type="text" id="f" class="form-control" name="fn"/>
	</div>
		<div class="mb-4">
	<label for="e" class="form_label"> Email</label>
	<input type="email" id="e" class="form-control" name="e"/>
	</div>
	
		<div class="mb-4">
	<label for="d" class="form_label">D.O.B</label>
	<input type="date" id="d" class="form-control" name="dob"/>
	</div>
	<div class="mb-4">
	<label for="g" class="from-label">Gender</label>
	&nbsp; &nbsp; &nbsp; &nbsp;
	<input type="radio" name="gen" value="male" class="form-check-input" />Male
	&nbsp; &nbsp; &nbsp; &nbsp;
	<input type="radio" name="gen" value="female" class="form-check-input" />Female
	
	</div>
		<div class="mb-4">
	<label for="a" class="form_label"> Age</label>
	<input type="Number" id="a" class="form-control" name="ag"/>
	</div>
		<div class="mb-4">
	<label for="c" class="form_label"> Contact No.</label>
	<input type="text" id="c" class="form-control " name="mob"/>
	</div>
		<div class="mb-4">
	<label for="p" class="form_label"> Password</label>
	<input type="password" id="p" class="form-control" name="pass"/>
	</div>
	<div class="mb-4">
	<label for="city" class="from-label">Select City</label>
	<select name="city" class="form-select" >
	<option  disabled selected>--Select your city---</option>
	<option value="1">Lucknow</option>
	<option >Varansi</option>
	<option>Meerut</option>
	<option> Ayodhaya</option>
	<option>Delhi</option>
	</select>
	</div>
	
	
	
		<div class="mb-4">
	<label for="add" class="form_label"> Address</label>
	<textarea id="add" class="form-control" name="ad"></textarea>
	</div>
			<div class="mb-4">
			<label for="hb" class="from-label">Hobbies</label>
			<input type="checkbox" name="hob[]" class="form-check-input" value="s" />Singing
						<input type="checkbox"  name="hob[]" class="form-check-input" value="d" />Dancing
									<input type="checkbox"  name="hob[]" class="form-check-input" value="p" />Playing
			</div>
			<div class="mb-4">
			<label for="pic">Upload Your Pic</label>
			<input type ="file" name="pic" id="pic" class="form-control"/>
			</div>

	<div class="mb-5 d-grid">
	<input type="submit" class=" btn btn-primary">
	</div>
	</form>
	</div>
	<?php include'footer.php';?>
	<?php include'footerlink.php';?>
    
  </body>
</html>
