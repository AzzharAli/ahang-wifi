
<html>
<head>
	<title> Tabel Pelanggan </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="js/jquery.js"</script>
		<script src="js/bootstrap.min.js"</script>
</head>

<body>
<?php
	include"config/koneksi.php";
	$tampil=mysqli_query($con, "Select * from tabel_pelanggan");
?>

<div class="container bg-secondary text-white">
<h2>Data Pelanggan</h2>
<p>Tabel Data Pelanggan BLNET</p>
</div>

<div class="container">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">IP WAN</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tipe Jarak</th>
      <th scope="col">Frekuensi Transmisi</th>
      <th scope="col">Paket</th>
      <th scope="col">Server ID</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  	$no=1;
  	while($r=mysqli_fetch_array($tampil)){
  		echo"	<tr><td>$no</td>
  					<td>$r[ip]</td>
  					<td>$r[nama]</td>
  					<td>$r[alamat]</td>
  					<td>$r[tipe]</td>
  					<td>$r[frekuensi]</td>
  					<td>$r[paket]</td>
  					<td>$r[id_server]</td>
  					<td>";
  			?>
  					<a href=<?php echo 'edit.php?id=' . $r["ip"] ?> >
  					
  					</a>
  					<a href=<?php echo 'delete.php?id=' . $r["ip"] ?> >
  					<button type='button' class='btn btn-danger'>Hapus</button>
  					</a>
  					</td></tr>
  			<?php
  					$no++;

  	}

  ?>

  <a href="tambah_data.php"><button type="button" class="btn btn-info">Tambah Daftar</button>
    
  </tbody>
</table>
</div>

</body>
</html>