<?php
    include_once "including2.php";
    include_once "RB_connect.php";
    $NATS = $API->comm("/ip/firewall/nat/print");
    
    
?>
<!doctype html>
<html lang="en">
  <head>
    <title>NAT</title>
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
    <h3> NAT </h3><hr>
    <table class="table table-bordered mb-5">
    <thead>
    <tr>
      <th scope="col">Chain</th>
      <th scope="col">Action</th>
      <th scope="col">Protocol</th>
      <th scope="col">IP</th>
      <th scope="col">MAC Address</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <?php foreach ($NATS as $nat): print_r($nat);?>
  <tbody>
    <tr>
      <td style=" width: 180;"><?php echo $nat['chain']; ?></td>
      <td style=" width: 150;"><?php echo $nat['action']; ?></td>
      <td style=" width: 300;"><?php echo $nat['protocol']; ?></td>
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