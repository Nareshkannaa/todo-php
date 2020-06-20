<?php 
session_start();
include('link.php')
 ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
  <title>Todo-Signup</title>
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>

  <div class="header">
  	<h3>Register</h3>
  </div>
   <div id="error">
	 <?php

      if(isset($_SESSION["errors"]))
      {
        echo $_SESSION["errors"];
      }

    ?>
  <form method="POST" action="link.php">
  	
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username"  required>
  	</div>
  	
		

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password"  required>
  	</div>
  	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="register">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>

</html>