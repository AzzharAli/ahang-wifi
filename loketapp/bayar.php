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
    /* Style the table */
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  margin-bottom:70px;
}

/* Style table headers and table data */
th, td {
  text-align: center;
  padding: 16px;
  border: 1px solid #ddd;
}

th:first-child, td:first-child {
  text-align: left;
}

/* Zebra-striped table rows */
tr:nth-child(even) {

}

.fa-check {
  color: green;
}

.fa-remove {
  color: red;
}
.button {
    border: none;
    color: white;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    float: center;
    padding-right:3px;
  }

  .button-success{
    background-color: #04AA6D;
  }
  .button-danger{
    background-color: #df4759;
  }
  .footer {
  position: fixed;
  left: 0;
  bottom: 0px;
  width: 100%;
  background-color: #d1d1d1;
  color: white;
  text-align: center;

}
  
</style>
<?php
session_start();
 
if (!isset($_SESSION['unix'])) {
    header("Location: login.php");
}
include '../db.php';
if(isset($_GET['aksi'])){
    $aksi = $_GET['aksi'];
  }else{
    $aksi = "";
  }

if($aksi == "bayar"){
    $idnya = $_GET['id'];
    $updateData = mysqli_query($konek, "UPDATE user_client SET pembayaran='true' WHERE id=$idnya");
    ?><meta http-equiv="refresh" content="0;url=bayar.php"><?php
}
if($aksi == "batal"){
    $idnya = $_GET['id'];
    $updateData = mysqli_query($konek, "UPDATE user_client SET pembayaran='false' WHERE id=$idnya");
    ?><meta http-equiv="refresh" content="0;url=bayar.php"><?php
}else{
    
}

$getRawData = mysqli_query($konek, 'SELECT * FROM user_client order by api_id asc');



?>
<body>
    <!-- Navbar -->

    <ul>
    <li><a>Pembayaran WiFi</a></li>
    </ul>
    <hr>
<!-- tabel -->
<!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<table>
  <tr>
    <th style="width:40%">Nama</th>
    <th>Status Bayar</th>
    <!-- <th>Aksi</th> -->
  </tr>
  <?php while($data = mysqli_fetch_array($getRawData)):
    if(!empty($data['pembayaran'])){
        if($data['pembayaran'] == "false"){
            $checkList = '<td><i class="fa fa-remove"></i></td>';
        }else{
            $checkList = '<td><i class="fa fa-check"></i></td>';
        }
    }
    $userID = $data['id'];
    ?>
  <tr>
    <?php
        if(!empty($data['pembayaran'])){
            ?> <td> <?php echo $data['nama'] ?> </td> <?php
        }else{

        }

        // if(!empty($data['pembayaran'])){
            // ?><?php //echo $checkList ?> <?php
        // }else{

        // }

        if(!empty($data['pembayaran'])){
            if($data['pembayaran'] == "false"){
                ?> <td><a onClick="return confirm('Yakin <?php echo $data['nama'] ?> Sudah membayar?')" href="bayar.php?aksi=bayar&id=<?php echo $userID ?>" class="button button-danger" >Belum Membayar</a></td> <?php
            }if($data['pembayaran'] == "true"){
                ?> <td><a onClick="return confirm('Yakin Membatalkan Pembayaran <?php echo $data['nama'] ?> ?')" href="bayar.php?aksi=batal&id=<?php echo $userID ?>" class="button button-success" >Sudah Membayar</a></td> <?php
            }
            
        }else{

        }
    ?>

    
  </tr>
  <?php endwhile; ?>
</table>
<div class="footer">
  <p>Created by AHANG</p>
</div>

</body>
</html>