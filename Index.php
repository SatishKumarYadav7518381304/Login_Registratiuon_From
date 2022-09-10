<?php
?>
<!doctype html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container border border-danger rounded col-sm-4 mt-5">
<h1 class="text-center mt-5"> Admin Login</h1>
<form class="mt-5" action="logincode.php" method="post">
<label class="form-label">Enter Your E-mail</label>
<input type="email" class="form-control" name="email"/>
<label class="form-label">Password</label>
<input type="password" class="form-control" name="pass"/>
<div class="d-grid">
<input type="submit" class="btn btn-primary mt-5 mb-3 "/>
</div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>