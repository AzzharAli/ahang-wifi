<?php
  include_once "RB_connect.php";
  $UPTIME = $API->comm("/system/resource/print");

  $first = $UPTIME['0'];
?>
    <ul class="nav flex-column pt-4 pr-3 mb-5 bg-dark">
      <li class="nav-item">
        <a class="nav-link text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>  Dashboard</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="monitoring.php"><i class="fas fa-chart-bar mr-2"></i>  Traffic Monitoring</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="routers.php"><i class="fas fa-server mr-2"></i>  Data Router</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="dhcp-client.php"><i class="fas fa-list-ol mr-2"></i>  DHCP Client</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="limitasi.php"><i class="fa fa-percent mr-2 "></i> Limitasi</a><hr class="bg-secondary">
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="log.php"><i class="fas fa-clipboard-list mr-2"></i>  Log</a><hr class="bg-secondary">
        </li>
    </ul>
    <div class="card text-center" style="width: 18rem;">
      <div class="card-body">
    <h5 class="card-title">Uptime</h5>
    <p class="card-text"><?php echo $first ['uptime'] ?></p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#rebootmodal">
      Reboot
    </button>
    <div class="modal fade" id="rebootmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Reboot Mikrotik</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah anda ingin mereboot MikroTik?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary">Reboot</button>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>