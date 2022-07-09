<?php

    require "config/koneksi.php";


    $username = $_POST['username'];
    $password = md5($_POST['password']);
     
    $login = mysqli_query($konek,("SELECT * FROM user where username='$username' and password='$password'"));
    $cek = mysqli_num_rows($login);
     
    if($cek > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:dashboard.php");
    }else{
        header("location:index.php");
    }
?>