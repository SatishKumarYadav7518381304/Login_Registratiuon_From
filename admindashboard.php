<?php
session_start();
      if(!isset($_SESSION['adid'])){
      header('location:index.php');
}
?>
<!doctype html>
<html lang="en">
<?php include'headerlink.php' ?>




  <body>
  <?php
  include'header.php';
  
  ?>

  <h1>
  <?php 
  echo $_SESSION['adid'];
  
  ?>
  </h1>
<?php
include'footer.php';
?>
    
    <?php
	include'footerlink.php';
	?>
  
   
  </body>
</html>