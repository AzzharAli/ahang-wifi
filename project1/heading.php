<?php
  include_once "RB_connect.php";
  $UPTIME = $API->comm("/system/resource/print");

  $first = $UPTIME['0'];
?>
  <nav class="navbar navbar-expand-lg navbar-light bgbar">
   <a style="color: #ffffff" class="navbar-brand" href="#"><h2>MikroTik Monitoring</h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
    </ul>
    <span class="navbar-text text-white">
    <div class="btn-group dropleft border-primary bg-primary rounded">
      <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <a class="text-white"><?php echo $_SESSION['username'];?></a> <img src="img/<?php echo $_SESSION['username']; ?>.png" class="rounded-circle" width="30" height="30"></img>  
      </button>
    <div class="dropdown-menu bg-transparent border-0">
      <div class="container-fluid">
      <div class="card bg-primary" style="width: 18rem;">
        <img src="img/<?php echo $_SESSION['username']; ?>.png" class="card-img-top rounded"></img>
      <div class="card-body">
      <h3 class="card-title text-white">Selamat datang, <b><?php echo $_SESSION['username'];?></b></h3>
    <a href="logout.php" class="btn btn-danger text-white">Logout</a>
  </div>
</div>
</div>
</div>
</div>
</span>
</div>
</nav>
