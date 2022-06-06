<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['tipe'];

include 'db.php';

if($login == "pelanggan"){
    $autoredir = "client";
    $db_name = "user_client";
}else{
    $autoredir = "admin";
    $db_name = "user_admin";
}

$golekiDataUser = mysqli_query($konek,"SELECT * FROM $db_name WHERE email='$email' and password='$password'");

$cekDataUser = mysqli_num_rows($golekiDataUser);

if($cekDataUser > 0){
	$_SESSION['email'] = $email;
	$_SESSION['user_status'] = "ngewaifu";
	header("location: $autoredir");
}else{
	header("location:index.php?pesan=gagal");
}


?>

