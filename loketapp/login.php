<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    /* Bordered form */
form {
    border: 3px solid #f1f1f1;
  }
  
  /* Full-width inputs */
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  
  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  
  /* Add a hover effect for buttons */
  button:hover {
    opacity: 0.8;
  }
  
  /* Extra style for the cancel button (red) */
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }
  
  /* Center the avatar image inside this container */
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
  }
  
  /* Avatar image */
  img.avatar {
    width: 40%;
    border-radius: 50%;
  }
  
  /* Add padding to containers */
  .container {
    padding: 16px;
  }
  
  /* The "Forgot password" text */
  span.psw {
    float: right;
    padding-top: 16px;
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
      display: block;
      float: none;
    }
    .cancelbtn {
      width: 100%;
    }
  }
  .label {
    color: white;
    padding: 8px 20px;
    width: 100%;
  }
  
  .success {background-color: #04AA6D;} /* Green */
  .info {background-color: #2196F3;} /* Blue */
  .warning {background-color: #ff9800;} /* Orange */
  .danger {background-color: #f44336;} /* Red */
  .other {background-color: #e7e7e7; color: black;} /* Gray */
  .footer {
    position: fixed;
    left: 0;
    bottom: 0px;
    width: 100%;
    background-color: #d1d1d1;
    color: white;
    text-align: center;
  
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgb(231, 231, 231);
  }
  
  li {
    float: center;
  }
  
  li a {
    display: block;
    color: rgb(0, 0, 0);
    text-align: center;
    padding: 10px 12px;
    text-decoration: none;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    font-size: 20px;
  }
</style>
<?php
session_start();
require('../db.php');
$dataOnRaw = mysqli_query($konek,"SELECT * FROM system WHERE data = 'loketApp'");
$dataUnixRaw = mysqli_query($konek,"SELECT * FROM system WHERE data = 'appUnixCode'");
$dataOn = mysqli_fetch_array($dataOnRaw);
$dataUnix = mysqli_fetch_array($dataUnixRaw);
if($dataOn['status'] == "true"){

$gagal = "";
$unixCodeSet = $dataUnix['status'];
if(isset($_SESSION['unix'])){
    header("location: index.php");
}else{

}

if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        $gagal = "Kode Unik Salah";
    }else{

    }
}
if(isset($_POST['submit'])) {
    $unixInput = $_POST['unix'];
    if($unixInput == $unixCodeSet){
        $_SESSION['unix'] = $unixInput;
        $_SESSION['unix_status'] = "ngewaifu";
        ?><meta http-equiv="refresh" content="0;url=index.php"><?php
    }else{
      ?><meta http-equiv="refresh" content="0;url=login.php?pesan=gagal"><?php
    }
}else{

}

?>
<body>
    <ul>
    <li><a>Loket</a></li>
    </ul>
    <hr>
<form action="" method="POST">

  <div class="container">
    <label for="unix"><b>Otentikasi Aplikasi</b></label>
    <input type="text" placeholder="Masukkan Kode Unik" name="unix" required>

    <button type="submit" name="submit">Masuk</button><br>
    <?php
    if($gagal){
        ?><br><span class="label warning"><?php echo $gagal ?></span><?php
    }else{

    }
    ?>
  </div>

</form>
<div class="footer">
  <p>Created by AHANG</p>
</div>
<?php 
}else{
  ?>
  <ul>
    <li><a>Data TIdak Ditemukan</a><br>
    <img style="display: block;margin-left: auto;margin-right: auto;width: 50%;" src="eula.webp" width="200px" alt="failed"><br>
    <p style="text-align:center;"> Aplikasi Dinonaktifkan Oleh Admin </p>
    </li>
    </ul>


  <?php
} ?>
</body>
</html>