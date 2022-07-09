<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Komplain</title>
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
  /* Style the table */
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
  table-layout:fixed;
}

/* Style table headers and table data */
th, td {
  text-align: center;
  padding: 16px;
  overflow:hidden;
}

th:first-child, td:first-child {
  text-align: left;
}

/* Zebra-striped table rows */

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.footer {
  position: fixed;
  left: 0;
  bottom: 0px;
  width: 100%;
  height:10px;
  background-color: #d1d1d1;
  color: white;
  text-align: center;

}
.fa-check {
  color: green;
}

.fa-remove {
  color: red;
}
</style>
<?php
session_start();
 
if (!isset($_SESSION['unix'])) {
    header("Location: login.php");
}
$nama = "";
$gangguan = "";
$waktu = "";
include '../db.php';
if(isset($_POST['simpan'])){
  $nama = $_POST['nama'];
  $gangguan = $_POST['gangguan'];
  $waktu = time();
  $sqlQuery = mysqli_query($konek, "INSERT INTO komplain(nama,gangguan,waktu) VALUES ('$nama','$gangguan','$waktu')");
  ?> <meta http-equiv="refresh" content="1;url=komplain.php"> <?php
}

?>
<body>

    <ul>
    <li><a>Tambah Data Pelanggan</a></li>
    </ul>
    <div>
  <form action="pasangbaru.php" method="POST">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama">

    <label for="email">Email</label>
    <input type="text" id="email" name="email">

    <label for="paket">Paket</label>
    <select name="paket" id="paket">
        <option value="2">2mbps/100.000</option>
        <option value="3">3mbps/150.000</option>
        <option value="4">4mbps/200.000</option>
        <option value="5">5mbps/250.000</option>
        <option value="10">10mbps/500.000</option>
    </select>

    <label for="telepon">Telpon/WA</label>
    <input type="text" id="telepon" name="telepon">

    <label for="alamat">Alamat</label>
    <input type="text" id="alamat" name="alamat">

  
    <input type="submit" value="Simpan" name="simpan">
  </form>
</div>


</body>
</html>