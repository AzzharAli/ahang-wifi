<?php
    include_once "including2.php";
    include_once "RB_connect.php";
    require "config/koneksi.php";


    $ARRAY = $API->comm("/system/resource/print");
    $identity = $API->comm("/system/identity/print");
    $routerboard = $API->comm("/system/routerboard/print");


    $first = $ARRAY['0'];
    $memperc = ($first['free-memory']/$first['total-memory']);
    $hddperc = ($first['free-hdd-space']/$first['total-hdd-space']);
    $mem = ($memperc*100);
    $hdd = ($hddperc*100);
    foreach($identity as $name)
    foreach($routerboard as $model)


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <?php
    include_once "heading.php";
    ?>

<div>
    <div class="row no-gutters">
      <div class="col-md-2">

        <?php
        include_once "sidebar.php";
        ?>
      </div>
    <div class="col-md-10 p-3 pt-2 bg-light">
    <h3><i class="fas fa-tachometer-alt mr-2"></i>  Dashboard </h3><hr>
    <div class="row">
    
    <div class="card text-white bg-dark mb-3 ml-4 col-md-4" style="max-width: 22rem;  width: 300px;">
      <div class="card-header"><h5>Device Info</h5></div>
      <div class="card-body">
      <table class="table text-white">
  <tbody>
    <tr>
      <td width="100">Platform</td>
      <td width="150"><?php echo $first['platform']; ?></td>
    </tr>
    <tr>
      <td width="100">Type</td>
      <td width="150"><?php echo $first['board-name']; ?></td>
    </tr>
    <tr>
      <td width="100">Model</td>
      <td width="150"><?php echo $model['model']; ?></td>
    </tr>
    <tr>
      <td width="100">RouterOS</td>
      <td width="150"><?php echo $first['version']; ?></td>
    </tr>
    <tr>
      <td width="100">Architecture</td>
      <td width="150"><?php echo $first['architecture-name']; ?></td>
    </tr>
    <tr>
      <td width="100">Identity</td>
      <td width="150"><?php echo $name['name']; ?></td>
    </tr>
  </tbody>
</table>
      </div>
    </div>

    <div class="card text-white bg-dark mb-3 ml-4 col-md-4" style="max-width: 22rem;  width: 300px;">
      <div class="card-header"><h5>CPU Info</h5></div>
      <div class="card-body">
      <table class="table text-white">
  <tbody>
    <tr>
      <td width="100">CPU</td>
      <td width="150"><?php echo $first['cpu']; ?></td>
    </tr>
    <tr>
      <td width="100">Frequency</td>
      <td width="150"><?php echo $first['cpu-frequency']; ?> Mhz</td>
    </tr>
    <tr>
      <td width="100">Core</td>
      <td width="150"><?php echo $first['cpu-count']; ?></td>
    </tr>
    <tr>
      <td width="100">CPU Load</td>
      <td width="150"><?php echo $first['cpu-load']; ?>%</td>
    </tr>
  </tbody>
</table>
      </div>
    </div>

  <div class="card text-white bg-dark mb-3 ml-4 col-md-4" style="max-width: 22rem;  width: 300px;">
      <div class="card-header"><h5>Memory Info</h5></div>
      <div class="card-body">
      <table class="table text-white">
  <tbody>
    <tr>
      <td width="100">Total</td>
      <td width="150"><?php echo $first['total-memory']; ?> Kb</td>
    </tr>
    <tr>
      <td width="100">Free</td>
      <td width="150"><?php echo $first['free-memory']; ?> Kb</td>
    </tr>
    <tr>
      <td width="100">Usage</td>
      <td width="150"><?php echo number_format($mem,3) ?>%</td>
    </tr>
  </tbody>
</table>
      </div>
    </div>

    <div class="card text-white bg-dark mb-3 ml-4 col-md-4" style="max-width: 22rem;  width: 300px;">
      <div class="card-header"><h5>Disk Info</h5></div>
      <div class="card-body">
      <table class="table text-white">
  <tbody>
    <tr>
      <td width="100">Total</td>
      <td width="150"><?php echo $first['total-hdd-space']; ?> Kb</td>
    </tr>
    <tr>
      <td width="100">Free</td>
      <td width="150"><?php echo $first['free-hdd-space']; ?> Kb</td>
    </tr>
    <tr>
      <td width="100">Usage</td>
      <td width="150"><?php echo number_format($hdd,3) ?>%</td>
    </tr>
  </tbody>
</table><!---<a href="directory.php" class="btn btn-primary btn-lg active mt-5" role="button" aria-pressed="true">Tampilkan Data</a>--->
      </div>
    </div>
  </div>


  
</div>
 
<?php

   $API->disconnect();

?>

</div>
</div>

  </div>
  </div>
    <?php
    include_once "footer.php";
    ?>
</div>

	
<!---<meta http-equiv="refresh" content="3">--->




</html>