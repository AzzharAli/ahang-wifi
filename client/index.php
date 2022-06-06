<?php
session_start();
if($_SESSION['user_status']!="ngewaifu"){
  header("location:../index.php?pesan=belum_login");
}
include '../db.php';
// API Mikrotik Dummy Variable
$penggunaan = "1334354";


//DB
$userSpecific = $_SESSION['email'];
$dataUserRaw = mysqli_query($konek,"SELECT * FROM user_client WHERE email='$userSpecific'");
foreach($dataUserRaw as $dataUser);
$hargaView = number_format($dataUser['harga']);
$getIp = $dataUser['ip'];
$namaUser = $dataUser['nama'];
$banter = $dataUser['kecepatan'];
//ping GET From Server
$url="http://home.eula.my.id/getping.php/?ip=$getIp";
 
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$ping = curl_exec($curl);
curl_close($curl);


//$ping = exec("ping -n 1 www.google.com");
?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    
    <!-- <link rel="stylesheet" href="/css/bootstrap-icons.css"> -->
    <title>Pusat Layanan</title>
  </head>
  <style>
    .green-color {
        color:green;
    }
    .blue-color {
        color:blue;
    }
    .red-color {
        color:red;
    }
  </style>
  <body>
      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">AHANG WiFi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      </div>
      <div class="navbar-nav ms-auto">
        <!-- Dropdown NAV -->
        <div class="dropdown">
            <a class="btn btn-outline-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $namaUser ?>
            </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item" href="profil.php">Profil</a></li>
    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
  </ul>
</div>

      </div>
    </div>
  </div>
</nav>

<!-- End Navbar -->

<div class="container" style="">
    <div class="row">
        <!-- Col 1 -->
        <div class="col-md-3">
            <div class="card text-center" style="max-width: 50rem; height: 20rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">Layanan Anda</h5>
                    <h1><?php echo $banter ?></h1>
                    <h5 class="card-title">Mbps</h5>
                    <a class="btn btn-outline-secondary" href=" https://api.whatsapp.com/send/?phone=+6285608698687&text=Mau Upgrade Paket Dari <?php echo $banter ?> Mbps ke " role="button">Upgrade</a>
                    
                </div>
            </div>

        </div>

        <!-- Col 2 -->
        <div class="col-md-9">
            <!-- Tagihan -->
            <div class="card mb-3" style="max-width: 100rem;">
                <div class="card-body">
                    <p class="card-text">Tagihan Bulanan Anda <span class="badge bg-danger">Belum Dibayar</span></p>
                    <h5 class="card-title">Rp. <?php echo $hargaView ?></h5>
                </div>
            <div class="card-footer">Bayar Sebelum 20 Januari 2023 </div>
            </div>
            <!-- Penggunaan -->
            <div class="card mb-3" style="max-width: 100rem;">
                <div class="card-body">
                    <p class="card-text">Total Penggunaan</p>
                    <h5 class="card-title">10GB</h5>
                </div>
            <div class="card-footer">Terhitung Sejak 1 Januari 2023 Jam 00:00 </div>
            </div>

            <!-- Status Jaringan -->
            <div class="card mb-3" style="max-width: 100rem;">
                <div class="card-body">
                    <p class="card-text">Status Jaringan</p>
                    <h5 class="card-title"><i class="bi bi-wifi"></i> Normal</h5><!-- Normal <i class="bi bi-wifi"></i> | Gangguan Massal | Perbaikan <i class="bi bi-wifi-off"></i> -->
                </div>
            <div class="card-footer">Ping Server <?php echo $ping ?></div>
            </div>



        </div>
    </div>
</div>








    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>