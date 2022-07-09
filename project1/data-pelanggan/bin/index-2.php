<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>BLNET</title>

    <!--bootstrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

    <body>
    <?php
      include"config/koneksi.php";
      $tampil=mysqli_query($con, "Select * datapelanggan");
    ?>
      <section class="tabel text-center mt-4">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <h5 class="card-header bg-secondary text-white">Data Pelaggan</h5>
                <div class="card-body">
                  <table class="table table-borderless table-dark">
                    <thead>
                     <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Nama</th>
                       <th scope="col">Alamat</th>
                       <th scope="col">Tipe Jarak</th>
                       <th scope="col">Frekuensi</th>
                       <th scope="col">Server ID</th>
                       <th scope="col">Paket Bandwidth</th>
                     </tr>
                     </thead>
                    <tbody>
                      <?php
                        $no=1;
                        while($r=mysql_fetch_array($tampil)){
                          echo"<tr><td>$no</td>
                                    <td>$r[namapelanggan]</td>
                                    <td>$r[alamatpelanggan]</td>
                                    <td>$r[tipejarak]</td>
                                    <td>$r[frekuensi]</td>
                                    <td>$r[idserver]
                                    <button type='button' class='btn btn-primary'>Edit</button>
                                    <button type='button' class='btn btn-danger'>Hapus</button>
                                    </td></tr>";
                                    $no++;

                        }

                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


    <!-- Javascript -->
    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Javascript -->
    </body>
  </html>