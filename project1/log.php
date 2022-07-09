<?php
    include_once "including2.php";
    include_once "RB_connect.php";
    $LOG = $API->comm("/log/print");
   
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Log</title>
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
    <h3><i class="fas fa-clipboard-list mr-2"></i>  Log </h3><hr>
<?php foreach ($LOG as $totable): ?>
    <table class="table table-bordered">
  <tbody>
    <tr>
      <td style=" width: 140;"><?php echo $totable['time']; ?></td>
      <td style=" width: 300;"><?php echo $totable['topics']; ?></td>
      <td class="collog"><?php echo $totable['message']; ?></td>
    </tr>
  </tbody>
</table>

<?php endforeach; ?>
    </div>
    </div>
    <?php
    include_once "footer.php";
    ?>
</div>




<?php
     $API->disconnect();
?>