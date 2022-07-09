
<!doctype html>
<html lang="en">
  <head>
    <?php
    include_once "including2.php";
    require "config/koneksi.php";
    $tampil = mysqli_query($konek, "Select * from dataalat");
    include_once "heading.php";
    ?>

<div>
    <div class="row no-gutters">
    <div class="col-md-2">

      <?php
        include_once "sidebar.php";
      ?>
      </div>
    <div class="col-md-10 p-3 pt-2">
    <h3><i class="fas fa-server mr-2"></i>  Data Router </h3><hr>
    <!---isi--->
<div class="container-fluid">
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis</th>
      <th scope="col">Mode</th>
      <th scope="col">IP</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Wireless</th>
      <th scope="col">Action</th>
  </thead>
  <tbody>
  <?php
  	$no=1;
  	while($r=mysqli_fetch_array($tampil)){
  		echo"	<tr><td>$no</td>
  					<td>$r[nama]</td>
  					<td>$r[jenis]</td>
  					<td>$r[mode]</td>
  					<td>$r[ip]</td>
  					<td>$r[keterangan]</td>
  					<td>$r[wireless]</td>
  					<td>";
  			?>
            <a href=<?php echo 'edit.php?id=' . $r["id"] ?> >
            <button type='button' class='btn btn-primary'>Edit</button> 					
  					</a>
  					<a href=<?php echo 'delete.php?id=' . $r["id"] ?> >
  					<button type='button' class='btn btn-danger'>Hapus</button>
  					</a>
  					</td></tr>
  			<?php
  					$no++;

  	}

  ?>

  <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#gakmodal">
  Tambah Data
</button>

<!-- Modal -->
<div class="modal fade" id="gakmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah data Perangkat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="simpan.php" method="POST">
          <div class="form-group">
            <label for="nama">Nama Perangkat</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Perangkat" name="nama">
          </div>
          <div class="form-group">
            <label for="jenis">Jenis</label>
            <select type="text" class="form-control" name="jenis" id="jenis">
                  <option></option>
                  <option value="outdoor">Outdoor</option>
                  <option value="indoor">Indoor</option>
                </select>
          </div>
          <div class="form-group">
            <label for="mode">Mode</label>
            <select type="text" class="form-control" name="mode" id="mode">
                  <option></option>
                  <option value="AP">AP</option>
                  <option value="WISP">WISP</option>
                  <option value="Router">Router</option>
                  <option value="Client Bridge">Client Bridge</option>
                  <option value="Client Router">Client Router</option>
                </select>
          </div>
          <div class="form-group">
            <label for="ip">IP</label>
            <input type="text" class="form-control" id="ip" placeholder="Masukkan Alamat IP Perangkat" name="ip">
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" placeholder="Masukkan Keterangan Perangkat" name="keterangan">
          </div>
          <div class="form-group">
            <label for="wireless">Tipe Wireless</label>
            <select type="text" class="form-control" name="wireless" id="wireless">
                  <option></option>
                  <option value="only 2,4Ghz">Hanya 2,4Ghz</option>
                  <option value="only 5Ghz">Hanya 5Ghz</option>
                  <option value="both 2,4Ghz & 5Ghz">Dual 2,4Ghz & 5Ghz</option>
                  <option value="none">No Wireless</option>
                </select>
          </div>

          </div>
          <div class="modal-footer">
        <button type="reset" class="btn btn-danger">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
      </div>
        </form>
      </div>

    </div>
  </div>
</div>
    
  </tbody>
</table>
    <!---end isi--->
    </div>
    <?php
    include_once "footer.php";
    ?>  
  </div>

</div>






</html>