<?php

if(!empty($_GET['pesan'])){
  if($_GET['pesan'] == "offline"){
    $pesan = "Mohon Maaf, Sistem Sedang Offline";
  }elseif($_GET['pesan'] == "gagal"){
    $pesan = "Login Gagal";
  }elseif($_GET['pesan'] == "belum_login"){
    $pesan = "Login Dulu Woi";
  }else{
    $pesan = "Anda Gabut Mainan URL??";
  }
}else{
    $pesan = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <title>Document</title>
</head>
<!-- Css Tambahan -->
<style>
      .gradient-custom {
/* fallback for old browsers */
/* background: #6a11cb; */
/* Chrome 10-25, Safari 5.1-6 */
/* background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1)) */ 
}
</style>
<body>


<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-light text-black" style="border-radius: 1rem;">
          <div class="card-body p-5">
            <div class="mb-md-5 mt-md-4 pb-5">
            <form action="login.php" method="post">
              <h2 class="fw-bold mb-2 text-uppercase text-center">Selamat Datang</h2>
              <p class="text-white-50 mb-5">Pusat Layanan WiFi</p>
              <div class="form-outline form-white mb-4">
                 <label class="form-label" for="tipe">Login Sebagai?</label>
                <select class="form-select" aria-label="Default select example" name="tipe" >
                    <option value="pelanggan" selected>Pelanggan</option>
                    <option value="admin">Admin</option> 
                </select>
              </div>
                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" required>
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control" id="password" required>
                </div>
              <!-- buttom -->
              <div class="d-grid gap-2">
              <button class="btn btn-success btn-lg px-5" type="submit">Login</button>
              </div>
              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>
              <p class="small mb-5 pb-lg-2 text-center"><?php echo $pesan ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
</body>
<script src="js/bootstrap.bundle.min.js"></script>
</html>