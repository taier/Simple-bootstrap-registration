<?php 
include("../engine/login.php");
include ("../includes/header.php");
?>
<body>
    <div class="container">
      <form class="form-signin" role="form" method="POST" action="../engine/login.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" name="email"  class="form-control" placeholder="Email address" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
    </div> <!-- /container -->
  </body>