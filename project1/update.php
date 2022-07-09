<?php
include"config/koneksi.php";


if(isset($_POST['id'])){
$idcon = $_POST['id'];
$sql=mysqli_query($konek, "UPDATE dataalat SET nama='$_POST[nama]',
													jenis='$_POST[jenis]',
													mode='$_POST[mode]',
													ip='$_POST[ip]',
													keterangan='$_POST[keterangan]',
													wireless='$_POST[wireless]' WHERE id=$idcon");

	

	if(sql){
		header('location:routers.php');


	}else{
		echo"Doi Menolak pembaruan";
	}

}



?>