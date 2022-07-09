<?php
include"config/koneksi.php";

if(isset($_POST['ip'])){

$sql=mysqli_query($con, "Insert into tabel_pelanggan(ip, nama, alamat, tipe, paket, frekuensi, id_server)
						values ('$_POST[ip]','$_POST[nama]','$_POST[alamat]','$_POST[tipe]','$_POST[paket]','$_POST[frekuensi]','$_POST[id_server]')");
	

	if(sql){
		header('location:index.php');


	}else{
		echo"Doi Menolak";
	}

}



?>