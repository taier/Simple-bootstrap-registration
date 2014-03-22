<?php 
include("../engine/welcome.php");
include ("../includes/header.php");
$role = getLoginRole();
?>

</body>
<div class="container">
	<div class="welcome" >
	        <h2><? echo "Login as " . $role; ?></h2>
	        <?php if($role != 'Guest') { ?>
			 <a href="../pages/logout.php" class="btn btn-warning btn-lg" role="button"> Sign Out </a> 
			 <?php } else { ?>
			 <a href="../pages/login.php" class="btn btn-primary btn-lg" role="button"> Sign In </a> 
			 </br></br>
			 <a href="../pages/registration.php" class="btn btn-primary btn-lg" role="button"> Sign Up </a> 
			 <?php } ?>
	</div>
</div>
</body>

