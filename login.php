<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['tipe'];

include 'db.php';
include 'config.php';

$dataOnRaw = mysqli_query($konek,"SELECT * FROM system WHERE data = 'systemOnline'");
  $dataOn = mysqli_fetch_array($dataOnRaw);
  if($dataOn['status'] == "true"){
    
    $output=Shell_exec('ping -n 1 '.$ipCekRouter);
if (strpos($output, 'unreachable') !== false) {
    header("location:index.php?pesan=offline");
}elseif (strpos($output, 'timeout') !== false) {
    header("location:index.php?pesan=offline");
}else{
    

    if($login == "pelanggan"){
        $autoredir = "client";
        $db_name = "user_client";
        $golekiDataUser = mysqli_query($konek,"SELECT * FROM $db_name WHERE email='$email' and password='$password'");
        $cekDataUser = mysqli_num_rows($golekiDataUser);
        if($cekDataUser > 0){
        $_SESSION['email'] = $email;
        $_SESSION['user_status'] = "ngewaifu";
        header("location: $autoredir");
        }else{
        header("location:index.php?pesan=gagal&tipe=user");
        }
    }else{
        $autoredir = "admin";
        $db_name = "user_admin";
        $golekiDataUser = mysqli_query($konek,"SELECT * FROM $db_name WHERE email='$email' and password='$password'");
        $cekDataUser = mysqli_num_rows($golekiDataUser);
        if($cekDataUser > 0){
        $_SESSION['email'] = $email;
        $_SESSION['admin_status'] = "ngewaifu";
        header("location: $autoredir");
        }else{
        header("location:index.php?pesan=gagal&tipe=admin");
        }
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

}


  }else{
    header("location:index.php?pesan=offline");
  }



        
        








?>

