<?php 
include("../engine/registration.php");
include ("../includes/header.php");
?>
<body>
    <div class="container">
      <form class="form-signup" role="form" method="POST" action="../engine/registration.php">
        <h2 class="form-signup-heading">Registration</h2>
        <input type="text" name="fname" id="name" onkeyup="checkName();" class="form-control" placeholder="Your Name" required autofocus>
        <input type="text" name="lname" id="lname" onkeyup="checkLastName()" class="form-control" placeholder="Your Last Name" required>
        <input type="email" name ="email" id="email" onkeyup="checkEmail()" class="form-control" placeholder="Email address" required>
        <input type="password" name="password" id="password" onkeyup="checkFirstPass()" class="form-control" placeholder="Password" required>
        <input type="password" name="password2" id="password2" onkeyup="checkSecondPass();" class="form-control" placeholder="Password one more time" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
      </form>
    </div> <!-- /container -->
  </body>

