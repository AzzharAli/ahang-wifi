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
			$sql=mysqli_query($konek, "Select * from dataalat where id ='$_GET[id]'");
			$r=mysqli_fetch_array($sql);
		
}
	?>
		<div class="form-group">
			<label for="nama">IP</label>
			<input type="text" class="form-control" id="nama"name="nama" value="<?php echo $r['nama']; ?>">	
			<div class="form-group">
            <label for="jenis">Jenis</label>
            <select type="text" class="form-control" name="jenis" id="jenis">
                  <option></option>
                  <option value="outdoor">Outdoor</option>
                  <option value="indoor">Indoor</option>
                </select>
        </div>
		<div class="form-group">
            <label for="mode">Mode</label>
            <select type="text" class="form-control" name="mode" id="mode">
                  <option></option>
                  <option value="AP">AP</option>
                  <option value="WISP">WISP</option>
                  <option value="Router">Router</option>
                  <option value="Client Bridge">Client Bridge</option>
                  <option value="Client Router">Client Router</option>
                </select>
          </div>
		<div class="form-group">
			<label for="ip">IP</label>
			<input type="text" class="form-control" id="ip" name="ip" value="<?php echo $r['ip']; ?>">
		</div>
		<div class="form-group">
			<label for="keterangan">Keterangan</label>
			<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $r['keterangan']; ?>">
		</div>
		<div class="form-group">
            <label for="wireless">Tipe Wireless</label>
            <select type="text" class="form-control" name="wireless" id="wireless">
                  <option></option>
                  <option value="only 2,4Ghz">Hanya 2,4Ghz</option>
                  <option value="only 5Ghz">Hanya 5Ghz</option>
                  <option value="both 2,4Ghz & 5Ghz">Dual 2,4Ghz & 5Ghz</option>
                  <option value="none">No Wireless</option>
                </select>
          </div>
		  <input type="text" class="form-control" id="id"name="id" value="<?php echo $_GET['id']; ?>" hidden>	
		<button type="submit" class="btn btn-success">Submit</button>

		</div>
	</form>
</div>
</body>
</html>