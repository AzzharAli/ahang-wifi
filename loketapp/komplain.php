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
  $sqlQuery = mysqli_query($konek, "INSERT INTO komplain(nama,gangguan,waktu,status) VALUES ('$nama','$gangguan','$waktu','Laporan Diterima')");
  ?> <meta http-equiv="refresh" content="1;url=komplain.php"> <?php
}
//Hapus Data
if(isset($_GET['aksi'])){
  if($_GET['aksi'] == "hapus"){
    $idHapus = $_GET['id'];
    mysqli_query($konek,"DELETE FROM komplain where id='$idHapus'");
  }
}
$getRawData = mysqli_query($konek, 'SELECT * FROM komplain order by id asc');

?>
<body>

     <ul>
    <li><a>Komplain Gangguan</a></li>
    </ul>
    <hr>
    <ul>
    <li><a>List Komplain</a></li>
    </ul>
    <table>
    <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Gangguan</th>
    </tr>
    <?php while($data = mysqli_fetch_array($getRawData)):?>
    <tr>
        <td><a onClick="return confirm('Yakin Menghapus Laporan <?php echo $data['nama'] ?> ?')" href="komplain.php?aksi=hapus&id=<?php echo $data['id'] ?>"><i class="fa fa-remove"></a></i></td>
        <td><?php echo $data['nama'] ?></td>
        <td><?php echo $data['gangguan'] ?></td>
    </tr>
    <?php endwhile; ?>
    </table>
    <hr>
    <ul>
    <li><a>Tambah Laporan</a></li>
    </ul>
    <div>
  <form action="" method="POST">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama">

    <label for="gangguan">Gangguan</label>
    <input type="text" id="gangguan" name="gangguan">

  
    <input type="submit" value="Simpan" name="simpan">
  </form>
</div>


</body>
</html>