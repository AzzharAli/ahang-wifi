<?php
include "config/koneksi.php";
include "including2.php";
if(isset($_GET[id])){

$sql=mysqli_query($konek, "Delete from dataalat where id='$_GET[id]'");
	

	if(sql){
		header('Location:routers.php');
	}else{
		echo "Gagal Menghapus Kenangan";
	}

}

?>