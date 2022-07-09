<?php
session_start();
if($_SESSION['admin_status']!="ngewaifu"){
  header("location:../index.php?pesan=belum_login");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="AHANG">
    <meta name="generator" content="Hugo 0.98.0">
    <title>EulaNET - Pelanggan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-light sticky-top bg-light flex-md-nowrap p-0">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">EulaNET</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="status.php">
              <span data-feather="file" class="align-text-bottom"></span>
              Status
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="pelanggan.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Pelanggan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="traffic.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Traffic
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="device.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hdd-stack" viewBox="0 0 16 16">
            <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"/>
            <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
            <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
            </svg>
              NET Device
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Report</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="keuangan.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Keuangan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="gangguan.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Gangguan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="log.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Log
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="history.php">
              <span data-feather="file-text" class="align-text-bottom"></span>
              Histori
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Router</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
          <a class="nav-link" href="reboot.php" onclick="return confirm('Yakin mau reboot routernya?');">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bootstrap-reboot" viewBox="0 0 16 16">
  <path d="M1.161 8a6.84 6.84 0 1 0 6.842-6.84.58.58 0 1 1 0-1.16 8 8 0 1 1-6.556 3.412l-.663-.577a.58.58 0 0 1 .227-.997l2.52-.69a.58.58 0 0 1 .728.633l-.332 2.592a.58.58 0 0 1-.956.364l-.643-.56A6.812 6.812 0 0 0 1.16 8z"/>
  <path d="M6.641 11.671V8.843h1.57l1.498 2.828h1.314L9.377 8.665c.897-.3 1.427-1.106 1.427-2.1 0-1.37-.943-2.246-2.456-2.246H5.5v7.352h1.141zm0-3.75V5.277h1.57c.881 0 1.416.499 1.416 1.32 0 .84-.504 1.324-1.386 1.324h-1.6z"/>
</svg>
              Reboot
            </a>
          </li>
        </ul>

      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Daftar Pelanggan</h1>
      </div>

<!-- isi -->


<table class="table table-light table-hover">
  <thead>
    <tr>
      <!-- <th scope="row">ID Client</th> -->
      <th scope="col">Nama</th>
      <th scope="col">IP</th>
      <th scope="col">Download</th>
      <th scope="col">Upload</th>
      <th scope="col">Total Penggunaan</th>
      <th scope="col">Down Rate</th>
      <th scope="col">Up Rate</th>
      <th scope="col">Pembayaran</th>

    </tr>
  </thead>
  <tbody>
      <?php
    require('../mikrotik_api.php');
    require('../function.php');
    require('../db.php');
    $getDataInterface = $API->comm('/queue/simple/print');
    foreach($getDataInterface as $data){
        if(empty($data['comment'])){
            $pisahStrip = "";
        }else{

            if(explode('-', $data['comment'], 3)[0] == "cl"){
                $pisahStrip = explode('-', $data['comment'], 3)[1];
            }else{
                $pisahStrip = "";
            }
        }
        if($pisahStrip == ""){
            $client = "";
        }else{
            $client = "Client";
        }
        $nama = $data['name'];
        $ip = $data['target'];
        //Speed
        $speedDownload = dataUnitBit(explode('/',$data['max-limit'],2)[1]);
        $speedUpload = dataUnitBit(explode('/',$data['max-limit'],2)[0]);
        //Rate
        $trafficDownload = dataRate(explode('/',$data['rate'],2)[1]);
        $trafficUpload = dataRate(explode('/',$data['rate'],2)[0]);
        //Bytes
        $penggunaanDownload = explode('/',$data['bytes'],2)[1];
        $penggunaanUpload = explode('/',$data['bytes'],2)[0];
        $penggunaanBoth = $penggunaanDownload + $penggunaanUpload;
        $penggunaan = dataPenggunaan($penggunaanBoth);
        //Status Pembayaran
        if(!empty($data['comment'])){
          $idPLDB = explode('-', $data['comment'], 3)[1];
        }else{
          $idPLDB = 0;
        }
        $golekiDataUser = mysqli_query($konek,"SELECT * FROM user_client WHERE api_id='$idPLDB'");


        // foreach($golekiDataUser as $viewHoetang);
        // if(empty($viewHoetang['pembayaran'])){
        //   $statusHoetang = "Sudah Dibayar Jokowi";
        // }if($viewHoetang['pembayaran'] == "false"){
        //   $statusHoetang = "Belum Dibayar";
        // }else{
        //   $statusHoetang = "Lunas";
        // }


        //$penggunaan = dataPenggunaan(explode('/',$data['bytes'],2)[1]);
        echo "<tr>";
        //Comment
        // if(!empty($data['comment'])){
        //     if(explode('-', $data['comment'], 3)[0] == "cl"){
        //         echo "<th> $client $pisahStrip</th>";
        //     }else{
                
        //     }
        // }else{

        // }
        //Nama
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo "<td>$nama</td>";
            }else{
                
            }
        }else{
            
        }
        //IP
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo "<td>$ip</td>";
            }else{
                
            }
        }else{
            
        }
        //Downspeed
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo "<td>$speedDownload</td>";
            }else{
                
            }
        }else{
            
        }
        //Upspeed
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo "<td>$speedUpload</td>";
            }else{
                
            }
        }else{
            
        }
        //Penggunaan
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo "<td>$penggunaan</td>";
            }else{
                
            }
        }else{
            
        }
        //DownRate
        if(!empty($data['comment'])){
          if(explode('-', $data['comment'], 3)[0] == "cl"){
              echo "<td>$trafficDownload</td>";
          }else{
              
          }
      }else{
          
      }
      //Uprate
      if(!empty($data['comment'])){
          if(explode('-', $data['comment'], 3)[0] == "cl"){
              echo "<td>$trafficUpload</td>";
          }else{
              
          }
      }else{
          
      }
      //Hoetang
      if(!empty($data['comment'])){
        if(explode('-', $data['comment'], 3)[0] == "cl"){
          foreach($golekiDataUser as $viewHoetang){
            if(!empty($viewHoetang['pembayaran'])){
              if($viewHoetang['pembayaran'] == "true"){
                ?><td class="table-success">Lunas</td> <?php
              }else{
                ?><td class="table-danger">Belum Lunas</td> <?php
              }
            }else{
                ?><td class="table-primary" >Gratis</td><?php
            }
          }

        }else{
            
        }
    }else{
        
    }


        echo "</tr>";
        
    }
      ?>

    
  </tbody>
</table>




    </main>
  </div>
</div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="dashboard.js"></script>
    <script>

    </script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
