<?php
    include_once "including2.php";
    include_once "RB_connect.php";
    $queuetree = $API->comm("/queue/simple/print");  
?>
<!doctype html>
<html lang="en">
<html>
  <head><title>Limitasi Data</title>
    <?php
    include_once "heading.php";
    ?>
</head>
<body>

<div>
    <div class="row no-gutters">
    <div class="col-md-2">

      <?php
        include_once "sidebar.php";
      ?>
      </div>
    <div class="col-md-10 p-3 pt-2">
    <h3><i class="fa fa-percent"></i> Limitasi Data </h3><hr>
    <!---isi--->
    <table class="table table-bordered mb-5">
    <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Parent</th>
      <th scope="col">Limit at</th>
      <th scope="col">Max Limit</th>
      <th scope="col">Jumlah Data</th>
      <th scope="col">Data</th>
    </tr>
  </thead>
  <?php foreach ($queuetree as $queuelimit): ?>
  <tbody>
    <tr>
      <td style=" width: 280;"><?php echo $queuelimit['name']; ?></td>
      <td style=" width: 150;"><?php echo $queuelimit['parent']; ?></td>
      <td style=" width: 100;"><?php echo $queuelimit['limit-at']; ?></td>
      <td style=" width: 180;"><?php echo $queuelimit['max-limit']; ?></td>
      <td style=" width: 180;"><?php echo $queuelimit['bytes']; ?></td>
      <td   ><?php echo $queuelimit['rate']; ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
    <!---end isi--->
    </div>
  </div>
  <?php
    include_once "footer.php";
    ?>
</div>




</body>

</html>