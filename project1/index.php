<?php

    require "config/koneksi.php";
?>

<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ngepet_custom/style.css" rel="stylesheet">
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome/css/brands.css" rel="stylesheet">
    <link href="fontawesome/css/solid.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/ngepet_custom/ngepet_custom_jam.js"></script>

<html>
<head><title>Login</title></head>

<body>
    <div class="container bg-light form-login">
        <form action="login.php" method="post">        
  <h1 class="text-center">Login Admin</h1><br><br>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username" autofocus>
            </div>
            <div class="form-group">
              <label >Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
          </form>
    </div>
</body>

</html>

