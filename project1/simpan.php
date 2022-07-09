<?php
include"config/koneksi.php";

if(isset($_POST['ip'])){

$sql=mysqli_query($konek, "Insert into dataalat(nama, jenis, mode, ip, keterangan, wireless)
						values ('$_POST[nama]','$_POST[jenis]','$_POST[mode]','$_POST[ip]','$_POST[keterangan]','$_POST[wireless]')");
	

	if(sql){
		header('location:routers.php');


	}else{
		echo"Doi Menolak";
	}

}



?>