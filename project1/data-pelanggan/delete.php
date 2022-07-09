<?php
include "config/koneksi.php";
if(isset($_GET[id])){

$sql=mysqli_query($con, "Delete from tabel_pelanggan where ip='$_GET[id]'");
	

	if(sql){
		header('Location:index.php');
	}else{
		echo "Gagal Menghapus Kenangan";
	}

}

?>