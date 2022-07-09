<?php
  include_once "including2.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Traffic Monitoring</title>
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
    <div class="col-md-10 p-3 pt-2">
    <h3><i class="fas fa-chart-bar mr-2"></i>  Traffic Monitoring </h3><hr>
    <!---isi--->
    <?php
    include_once "tikmon.php";
    ?>
    <!---end isi--->
    </div>
  </div>
  <?php
    include_once "footer.php";
  ?>
</div>






</html>