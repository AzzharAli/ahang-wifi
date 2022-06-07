<?php 
require('../mikrotik_api.php');
$getDataInterface = $API->comm('/queue/simple/print');

function dataUnitBit($bytes)
    {
        if ($bytes >= 1000000000)
        {
            $bytes = number_format($bytes / 1000000000) . ' Gbps';
        }
        elseif ($bytes >= 1000000)
        {
            $bytes = number_format($bytes / 1000000) . ' Mbps';
        }
        elseif ($bytes >= 1000)
        {
            $bytes = number_format($bytes / 1000) . ' Kbps';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bps';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' bit';
        }
        else
        {
            $bytes = 'Unlimited';
        }

        return $bytes;
}

function dataPenggunaan($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <title>Document</title>
</head>
<body>
<div class="comtainer-fluid">
    
<table class="table table-primary table-hover table-striped">
  <thead>
    <tr>
      <th scope="row">ID Client</th>
      <th scope="col">Nama</th>
      <th scope="col">IP</th>
      <th scope="col">Download</th>
      <th scope="col">Upload</th>
      <th scope="col">Total Penggunaan</th>
    </tr>
  </thead>
  <tbody>
      <?php
    foreach($getDataInterface as $data){
        if(empty($data['comment'])){
            $pisahStrip = "";
        }else{

            if(explode('-', $data['comment'], 3)[0] == "cl"){
                $pisahStrip = explode('-', $data['comment'], 3)[1];
            }else{
                $pisahStrip = "";
            }
        }
        if($pisahStrip == ""){
            $client = "";
        }else{
            $client = "Client";
        }
        $nama = $data['name'];
        $ip = $data['target'];
        $speedDownload = dataUnitBit(explode('/',$data['max-limit'],2)[1]);
        $speedUpload = dataUnitBit(explode('/',$data['max-limit'],2)[0]);
        $penggunaanDownload = explode('/',$data['bytes'],2)[1];
        $penggunaanUpload = explode('/',$data['bytes'],2)[0];
        $penggunaanBoth = $penggunaanDownload + $penggunaanUpload;
        $penggunaan = dataPenggunaan($penggunaanBoth);
        //$penggunaan = dataPenggunaan(explode('/',$data['bytes'],2)[1]);
        echo "<tr>";
        echo "<th> $client $pisahStrip</th>";
        echo "<td>$nama</td>";
        echo "<td>$ip</td>";
        echo "<td>$speedDownload</td>";
        echo "<td>$speedUpload</td>";
        echo "<td>$penggunaan</td>";

    }
      ?>

    </tr>
  </tbody>
</table>


</div>


    
</body>
<script src="/js/bootstrap.bundle.min.js"></script>
</html>