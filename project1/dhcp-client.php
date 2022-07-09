<?php
    include_once "including2.php";
    include_once "RB_connect.php";
    $DHCP = $API->comm("/ip/dhcp-server/lease/print");
    

    
      
    
    
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Tabel DHCP Client</title>
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
    <h3><i class="fas fa-list-ol mr-2"></i> Tabel DHCP Client </h3><hr>
    <table class="table table-bordered mb-5">
    <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Server</th>
      <th scope="col">Hostname</th>
      <th scope="col">IP</th>
      <th scope="col">MAC Address</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <?php foreach ($DHCP as $dhcptable): ?>
  <tbody>
    <tr>
      <td style=" width: 180;"><?php echo $dhcptable['client-id']; ?></td>
      <td style=" width: 150;"><?php echo $dhcptable['server']; ?></td>
      <td style=" width: 300;"><?php echo $dhcptable['host-name']; ?></td>
      <td style=" width: 180;"><?php echo $dhcptable['address']; ?></td>
      <td style=" width: 180;"><?php echo $dhcptable['mac-address']; ?></td>
      <td   ><?php echo $dhcptable['status']; ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>

    </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</div>




<?php
     $API->disconnect();
?>