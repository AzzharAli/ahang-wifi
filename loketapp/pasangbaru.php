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
    background-color: #6798f3;
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
include '../db.php';
//Hapus Data
if(isset($_GET['aksi'])){
  if($_GET['aksi'] == "hapus"){
    $idHapus = $_GET['id'];
    mysqli_query($konek,"DELETE FROM pasangbaru where id='$idHapus'");
  }
}
//tambah Data
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $paket = $_POST['paket'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    $sqlQuery = mysqli_query($konek, "INSERT INTO pasangbaru(nama,email,paket,telepon,alamat,status) VALUES ('$nama','$email','$paket','$telepon','$alamat','Register')");
  }
$getRawData = mysqli_query($konek, 'SELECT * FROM pasangbaru order by id asc');

?>
<body>

     <ul>
    <li><a>Pasang Baru</a></li>
    </ul>
    <hr>
    <ul>
    <li><a>List Pelanggan</a></li>
    </ul>
    <table>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Status</th>
    </tr>
    <?php while($data = mysqli_fetch_array($getRawData)):?>
    <tr>
        <td><a onClick="return confirm('Yakin Menghapus Data <?php echo $data['nama'] ?> ?')" href="pasangbaru.php?aksi=hapus&id=<?php echo $data['id'] ?>"><i class="fa fa-remove"></a></i></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['status'] ?></td>
    </tr>
    <?php endwhile; ?>
    </table>
    <hr>
    <button onclick="window.location.href='tambahpsb.php'" class="button button1">Tambah Data</button>


</body>
</html>