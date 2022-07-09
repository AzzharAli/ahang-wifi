<?php 
session_start();
require('../db.php');
$dataOnRaw = mysqli_query($konek,"SELECT * FROM system WHERE data = 'loketApp'");
$dataOn = mysqli_fetch_array($dataOnRaw);
if($dataOn['status'] == "true"){

if (!isset($_SESSION['unix'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loket WiFi</title>
</head>
<style>
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
  
  .button {
    border: none;
    color: white;
    padding: 16px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    float: center;
    height: 100%;
    width: 100%;
    align-items: center;
    display: flex;
    justify-content: center;
    margin-top: 20px;
    

  }
.row{
    width: 100%;
}

  .button1 {background-color: #6798f3;} /* Green */
</style>
<body>
    <!-- Navbar -->

    <ul>
    <li><a>Loket WiFi</a></li>
    </ul>
    <hr>

    <div class="row">
        <ul>
    <button onclick="window.location.href='bayar.php'" class="button button1">Pembayaran</button>
    <button onclick="window.location.href='komplain.php'" class="button button1">Komplain</button>
    <button onclick="window.location.href='pasangbaru.php'" class="button button1">Pasang Baru</button>
    <button onclick="window.location.href='logout.php'" class="button button1">Logout</button>
    </ul>
    </div>
    <div style="
    position: fixed;
    left: 0;
    bottom: 0px;
    width: 100%;
    background-color: #d1d1d1;
    color: white;
    text-align: center;
  
  ">
  <p>Created by AHANG</p>
</div>
</body>
</html>
<?php
}else{
    header("location:login.php");
}
?>