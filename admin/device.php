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
    <title>EulaNET - NET Device</title>

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

    <?php 
    require('../db.php');
    
    ?>

    
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
            <a class="nav-link active" href="device.php">
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
        <h1 class="h2">NET Device</h1>
      </div>
      <?php 
        require('../db.php');
        $tipe = "";
        $mode = "";
        $ip = "";
        $lokasi = "";
        $keterangan = "";
        $frekuensi = "";
        $berhasil = "";
        $error = "";

        if(isset($_GET['aksi'])){
          $aksi = $_GET['aksi'];
        }else{
          $aksi = "";
        }
        //Delets Data
        if($aksi == "delete"){
          $idDevDel = $_GET['id'];
          $queryDel = "DELETE FROM net_device WHERE id='$idDevDel'";
          $prosDel = mysqli_query($konek, "DELETE FROM net_device WHERE id='$idDevDel'");
          if($prosDel){
            $berhasil = "Berhasil Menghapus Data";
          }else{
            $error = "Gagal Menghapus Data";
          }
        }else{

        }

        if(isset($_POST['simpan'])){
            $tipe = $_POST['tipe'];
            $mode = $_POST['mode'];
            $ip = $_POST['ip'];
            $lokasi = $_POST['lokasi'];
            $keterangan = $_POST['keterangan'];
            $frekuensi = $_POST['frekuensi'];

            if($tipe && $mode && $ip && $lokasi && $keterangan && $frekuensi){
                $sqlsubmit = "insert into net_device(tipe,mode,ip,lokasi,keterangan,frekuensi) values ('$tipe','$mode','$ip','$lokasi','$keterangan','$frekuensi')";
                $sqlpushsubmit = mysqli_query($konek, $sqlsubmit);
                if($sqlpushsubmit){
                  $berhasil = "Berhasil Menambah Data";
                }else{
                    $error = "Gagal Menambah Data";
                }
            }else{
                $error = "Silahkan Masukkan Semua Data";
            }
        }
      ?>

<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-secondary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Perangkat</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">

        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <input type="text" class="form-control" id="tipe" aria-describedby="tipe" name="tipe" >
        </div>

        <div class="mb-3">
        <label for="mode" class="form-label">Mode</label>
        <select class="form-select" aria-label="Default select example" name="mode" >
                    <option value="AP" selected>AP</option>
                    <option value="Client">Client</option> 
                    <option value="WISP">WISP</option>
                    <option value="Repeater">Repeater</option>
                    <option value="Router">Router</option>
                    <option value="Lainnya">Lainnya</option>   
        </select>

        </div>

        <div class="mb-3">
            <label for="ip" class="form-label">IP</label>
            <input type="text" class="form-control" id="ip" aria-describedby="ip" name="ip" >
        </div>

        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" aria-describedby="lokasi" name="lokasi" >
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" aria-describedby="keterangan" name="keterangan" >
        </div>

        <div class="mb-3">
            <label for="tipe" class="form-label">Frekuensi</label>
            <select class="form-select" aria-label="Default select example" name="frekuensi" >
                    <option value="2,4Ghz" selected>2,4Ghz</option>
                    <option value="5 Ghz">5Ghz</option>
                    <option value="Non Wireless">Non Wireless</option>    
        </select>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">Simpan</button>
      </div>

        </form>
      </div>

    </div>
  </div>
</div>

<!-- Status Input -->
<?php
    
    if($berhasil){
        ?>
        <div class="alert alert-success" role="alert">
         <?php echo $berhasil ?>
         <meta http-equiv="refresh" content="1;url=device.php">
        </div>
        <?php 
    }else{
        
    }

    if($error){
      ?>
      <div class="alert alert-danger" role="alert">
       <?php echo $error ?>
       
      </div>
      <?php 
  }else{

  }

?>





<!-- List Data -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tipe</th>
                <th scope="col">Mode</th>
                <th scope="col">IP</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Frekuensi</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Status</th>
                <th scope="col">Ping</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php

                //List Data
                $selectData = "SELECT * FROM net_device order by ip asc";
                $dataPerangkat = mysqli_query($konek, $selectData);
                $urutan = 1;
                while($data = mysqli_fetch_array($dataPerangkat)):
                    $tipe = $data['tipe'];
                    $mode = $data['mode'];
                    $ip = $data['ip'];
                    $lokasi = $data['lokasi'];
                    $keterangan = $data['keterangan'];
                    $frekuensi = $data['frekuensi'];
                    $idDev = $data['id'];
                    //Ping Per Device
                    require('../config.php');
                    $url="http://$ipPingAPI/getping.php/?ip=$ip";
                    $curl = curl_init();
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                    $ping = curl_exec($curl);
                    curl_close($curl);
                    $decode = json_decode($ping, true);
                    $valuePing = $decode['value'];
                    if($decode['status'] == "Disconnect"){
                      $tdx = '<td class="table-danger scope="row"">';
                    }else{
                      $tdx = '<td class="table-success scope="row">';
                    }
                
            ?>
            <tr>
                <td scope="row"><?php echo $urutan++ ?></td>
                <td scope="row"><?php echo $tipe ?></td>
                <td scope="row"><?php echo $mode ?></td>
                <td scope="row"><?php echo $ip ?></td>
                <td scope="row"><?php echo $lokasi ?></td>
                <td scope="row"><?php echo $frekuensi ?></td>
                <td scope="row"><?php echo $keterangan ?></td>
                <?php echo $tdx . $decode['status'] . '</td>' ?>
                <td scope="row"><?php echo $valuePing ?></td>
                <td scope="row"><a href="device.php?aksi=delete&id=<?php echo $idDev ?>" onClick="return confirm('Yakin Mau Menghapus Data?')" class="btn btn-danger btn-sm" role="button" aria-disabled="true">Hapus</a></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>


    </main>
  </div>
</div>


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="dashboard.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
