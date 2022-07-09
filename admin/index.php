<?php
session_start();
if($_SESSION['admin_status']!="ngewaifu"){
  header("location:../index.php?pesan=belum_login");
}

require('../mikrotik_api.php');
$getDataResource = $API->comm('/system/resource/print');
$getDataRouterBoard = $API->comm('/system/routerboard/print');
$getDataInterface = $API->comm('/interface/print');
foreach($getDataResource as $view);
foreach($getDataRouterBoard as $viewBoard);
function penggunaanEther1($getDataInterfaceF){
  foreach($getDataInterfaceF as $view):
    if(!empty($view['default-name'])){
        if($view['default-name'] == "ether1"){
            $bytes = $view['rx-byte'] + $view['tx-byte'];
            if ($bytes >= 1073741824)
            {
                $bytes = number_format($bytes / 1073741824, 2) . ' GB';
            }
            elseif ($bytes >= 1048576)
            {
                $bytes = number_format($bytes / 1048576, 2) . ' MB';
            }
            elseif ($bytes >= 1024)
            {
                $bytes = number_format($bytes / 1024, 2) . ' KB';
            }
            elseif ($bytes > 1)
            {
                $bytes = $bytes . ' bytes';
            }
            elseif ($bytes == 1)
            {
                $bytes = $bytes . ' byte';
            }
            else
            {
                $bytes = '0 bytes';
            }
            return $bytes;
        }else{
    
        }
    }else{
    
    }
    endforeach;
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
    <title>EulaNET - Dashboard</title>

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
            <a class="nav-link active" aria-current="page" href="index.php">
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
            <a class="nav-link" href="pelanggan.php">
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
        <h1 class="h2">Dashboard</h1>
      </div>

      <?php
      require('../db.php');
      //Update Setting
      if(isset($_POST['submit'])){
        $systemOnlineStatus = $_POST['systemOnline'];
        $autoRefreshStatus = $_POST['autoRefresh'];
        $loketAppEnable = $_POST['loketApp'];
        $AppUnixCode = $_POST['appUnixCode'];
        mysqli_query($konek,"UPDATE system SET status='$systemOnlineStatus' where data='systemOnline'");
        mysqli_query($konek,"UPDATE system SET status='$autoRefreshStatus' where data='autoRefresh'");
        mysqli_query($konek,"UPDATE system SET status='$loketAppEnable' where data='loketApp'");
        mysqli_query($konek,"UPDATE system SET status='$AppUnixCode' where data='appUnixCode'");
      }
      //System Set
      $systemSetting = mysqli_query($konek,"SELECT * FROM system");
      //Jumlah Client
      $dataUserRaw = mysqli_query($konek,"SELECT * FROM user_client WHERE harga != 0");
      $jumlahUser = mysqli_num_rows($dataUserRaw);
      //jumlah Alat
      $dataAlatRaw = mysqli_query($konek,"SELECT * FROM net_device");
      $jumlahAlat = mysqli_num_rows($dataAlatRaw);
      ?>


<!-- isi -->
      <div class="row">
        <!-- Col 1 -->
        <div class="col-sm-3">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                <h5 class="card-title">Pelanggan</h5>
                <h1> <?php echo $jumlahUser ?> </h1>
                </div>
                <div class="col-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                </svg>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <!-- Col 2 -->
        <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                <h5 class="card-title">NET Device</h5>
                <h1> <?php echo $jumlahAlat ?> </h1>
                </div>
                <div class="col-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-hdd-stack" viewBox="0 0 16 16">
                <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"/>
                <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"/>
                <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Col 3 -->
        <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                <h5 class="card-title">Penggunaan</h5>
                <h1> <?php echo penggunaanEther1($getDataInterface); ?> </h1>
                </div>
                <div class="col-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
                </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Col 4 -->
        <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-7">
                <h5 class="card-title">Saldo</h5>
                <h1> 1.300.000 </h1>
                </div>
                <div class="col-5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
                </svg>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>

      <div class="row">
        <div class="col-sm-6">
          <!-- Info -->
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Router Info</h1>
      </div>
      <div class="card mt-4">
      <table class="table">
    <tbody>
        <tr>
            <td width="20%">Model</th>
            <td><?php echo $viewBoard['model']; ?></th>
        </tr>
        <tr>
            <td width="20%">Uptime</th>
            <td><?php echo $view['uptime']; ?></th>
        </tr>
        <tr>
            <td width="20%">Router OS</th>
            <td><?php echo $view['version']; ?></th>
        </tr>
        <tr>
            <td width="20%">CPU</th>
            <td><?php echo $view['cpu-load'] . "%"; ?></th>
        </tr>
        <tr>
            <td width="20%">Frekuensi CPU</th>
            <td><?php echo $view['cpu-frequency']; ?></th>
        </tr>
        <tr>
            <td width="20%">Arsitektur</th>
            <td><?php echo $view['architecture-name']; ?></th>
        </tr>
        <tr>
            <td width="20%">Board</th>
            <td><?php echo $view['board-name']; ?></th>
        </tr>
    </tbody>
</table> 
      </div>

        </div>
        <div class="col-sm-6">
          <!-- Pengaturan -->
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengaturan Aplikasi</h1>
      </div>
      <div class="card mt-4">
        <form action="" method="POST">
          <?php while($dataSetting = mysqli_fetch_array($systemSetting)): ?>
            <div class="row mt-3">
              <?php if($dataSetting['data'] == "systemOnline"){
                ?>
                <div class="col-4 text-center"><p class="h5 ">System Online Enable</p></div>
                <div class="col-4"><input type="text" class="form-control" id="systemOnline" name="systemOnline" value="<?php echo $dataSetting['status'] ?>"></div>
                <div class="col-4">true / false</div>
                
                <?php
              }else{} ?>
            </div>
            <div class="row">
              <?php if($dataSetting['data'] == "autoRefresh"){
                ?>
                <div class="col-4 text-center"><p class="h5 ">Auto Refresh Enable</p></div>
                <div class="col-4"><input type="text" class="form-control" id="autoRefresh" name="autoRefresh" value="<?php echo $dataSetting['status'] ?>"></div>
                <div class="col-4">true / false</div>
                <?php
              }else{} ?>
            </div>  
            <div class="row">
              <?php if($dataSetting['data'] == "loketApp"){
                ?>
                <div class="col-4 text-center"><p class="h5 ">Loket App Enable</p></div>
                <div class="col-4"><input type="text" class="form-control" id="loketApp" name="loketApp" value="<?php echo $dataSetting['status'] ?>"></div>
                <div class="col-4">true / false</div>
                <?php
              }else{} ?>
            </div>
            <div class="row">
              <?php if($dataSetting['data'] == "appUnixCode"){
                ?>
                <div class="col-4 text-center"><p class="h5 ">Loket App Unix Code</p></div>
                <div class="col-4"><input type="text" class="form-control" id="appUnixCode" name="appUnixCode" value="<?php echo $dataSetting['status'] ?>"></div>
                <div class="col-4">Tergantung User</div>
                <?php
              }else{} ?>
            </div>

              
            <?php endwhile; ?>
          <div class="d-grid gap-2">
          <button style="margin-left:20px;margin-right:20px; margin-top:30px;" class="btn btn-success mb-3" name="submit" type="submit">Save</button>
          </div>
          </form>


      </div>
        </div>
      </div>



      

      



    </main>
  </div>
</div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="dashboard.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
