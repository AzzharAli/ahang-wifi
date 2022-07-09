<?php
include"config/koneksi.php";


if(isset($_POST['ip'])){

$sql=mysqli_query($con, "Update tabel_pelanggan set ip='$_POST[ip]',
													nama='$_POST[nama]',
													alamat='$_POST[alamat]',
													tipe='$_POST[tipe]',
													frekuensi='$_POST[frekuensi]',
													paket='$_POST[paket]',
													id_server='$_POST[id_server]'");

	

	if(sql){
		header('location:index.php');


	}else{
		echo"Doi Menolak";
	}

}



?>