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
<div class="container bg-secondary text-white">
<h2>Data Pelanggan</h2>
<p>Edit Data Pelanggan BLNET</p>
</div>

<div class="container">
	<form action="update.php" method="POST">

	<?php
		include"config/koneksi.php";

		if(isset($_GET['id'])){
			$sql=mysqli_query($con, "Select * from tabel_pelanggan where ip ='$_GET[id]'");
			$r=mysqli_fetch_array($sql);
		
}
	?>
		<div class="form-group">
			<label for="ip">IP</label>
			<input type="ip" class="form-control" id="ip"name="ip" value="<?php echo $r['ip']; ?>">
			<input type"hidden" class="form-control" id="kode" name="kode" value="<?php echo $r['ip']; ?>"hidden>
		</div>
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type"nama" class="form-control" id="nama" name="nama" value="<?php echo $r['nama']; ?>">
		</div>
		<div class="form-group">
			<label for="alamat">Alamat</label>
			<input type="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat" name="alamat" value="<?php echo $r['alamat']; ?>">
		</div>
		<div class="form-group">
			<label for="alamat">Tipa Jarak</label>
			<select type="tipe" class="form-control" name="tipe" id="tipe">
        		<option value="jarak tipe 1">jarak tipe 1-min 70 meter</option>
        		<option value="jarak tipe 2">jarak tipe 2-min 2 kilometer</option>
      		</select>
		</div>
		<div class="form-group">
			<label for="alamat">Paket</label>
			<select type="paket" class="form-control" name="paket" id="paket">
        		<option value="RP 50.000 - upto 1mbps">RP 50.000 - upto 1mbps</option>
        		<option value="RP 100.000 - upto 2mbps">RP 100.000 - upto 2mbps</option>
        		<option value="RP 150.000 - upto 3mbps">RP 150.000 - upto 3mbps</option>
        		<option value="RP 200.000 - upto 4mbps">RP 200.000 - upto 4mbps</option>
      		</select>
		</div>
		<div class="form-group">
			<label for="alamat">Frekuensi</label>
			<select type="frekuensi" class="form-control" name="frekuensi" id="frekuensi">
        		<option value="2,4Ghz">2,4 Ghz</option>
        		<option value="5Ghz">5 Ghz</option>
      		</select>
		</div>
		<div class="form-group">
			<label for="id_server">ID Server</label>
			<input type="id_server" class="form-control" id="id_server" name="id_server" value="<?php echo $r['id_server']; ?>">
		</div>
		<button type="submit" class="btn btn-success">Submit</button>

		</div>
	</form>
</div>
</body>
</html>