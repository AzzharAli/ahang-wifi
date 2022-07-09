<?php
    include_once "including2.php";
    include_once "RB_connect.php";
    $files = $API->comm("/file/print");   
    
?>
<!doctype html>
<html lang="en">
    <table class="table table-bordered mb-5">
    <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Ekstensi</th>
      <th scope="col">Ukuran</th>
      <th scope="col">Waktu Dibuat</th>
    </tr>
  </thead>
  <?php foreach ($files as $file):?>
  <tbody>
    <tr>
      <td style=" width: 180;"><?php echo $file['name']; ?></td>
      <td style=" width: 150;"><?php echo $file['type']; ?></td>
      <td style=" width: 150;"><?php echo $file['size']; ?></td>
      <td   ><?php echo $file['creation-time']; ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>




<?php
     $API->disconnect();
?>