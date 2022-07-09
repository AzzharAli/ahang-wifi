<?php 
require('../mikrotik_api.php');
require('../function.php');
$getDataInterface = $API->comm('/queue/simple/print');






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
<div class="container-fluid">
    
<table class="table table-light table-hover">
  <thead>
    <tr>
      <th scope="row">ID Client</th>
      <th scope="col">Nama</th>
      <th scope="col">IP</th>
      <th scope="col">Download</th>
      <th scope="col">Upload</th>
      <th scope="col">Total Penggunaan</th>
      <th scope="col">Download Rate</th>
      <th scope="col">Upload Rate</th>

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
        //Speed
        $speedDownload = dataUnitBit(explode('/',$data['max-limit'],2)[1]);
        $speedUpload = dataUnitBit(explode('/',$data['max-limit'],2)[0]);
        //Rate
        $trafficDownload = dataRate(explode('/',$data['rate'],2)[1]);
        $trafficUpload = dataRate(explode('/',$data['rate'],2)[0]);
        //Bytes
        $penggunaanDownload = explode('/',$data['bytes'],2)[1];
        $penggunaanUpload = explode('/',$data['bytes'],2)[0];
        $penggunaanBoth = $penggunaanDownload + $penggunaanUpload;
        $penggunaan = dataPenggunaan($penggunaanBoth);
        //$penggunaan = dataPenggunaan(explode('/',$data['bytes'],2)[1]);
        echo "<tr>";

             //Disable Queue
             if($data['disabled'] == "false"){
                $td = '<td class="table-danger">';
            }else{
                $td = '<td>';
            }
        //Comment
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo "$td $client $pisahStrip</th>";
            }else{
                
            }
        }else{

        }
   

        //Nama
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo " $td . $nama</td>";
            }else{
                
            }
        }else{
            
        }
        //IP
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo " $td . $ip</td>";
            }else{
                
            }
        }else{
            
        }
        //Downspeed
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo " $td . $speedDownload</td>";
            }else{
                
            }
        }else{
            
        }
        //Upspeed
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo " $td . $speedUpload</td>";
            }else{
                
            }
        }else{
            
        }
        //Penggunaan
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo " $td . $penggunaan</td>";
            }else{
                
            }
        }else{
            
        }
        //DownRate
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo " $td . $trafficDownload</td>";
            }else{
                
            }
        }else{
            
        }
        //Uprate
        if(!empty($data['comment'])){
            if(explode('-', $data['comment'], 3)[0] == "cl"){
                echo " $td . $trafficUpload</td>";
            }else{
                
            }
        }else{
            
        }


        echo "</tr>";
        
    }
      ?>

    
  </tbody>
</table>


</div>


    
</body>
<script src="/js/bootstrap.bundle.min.js"></script>

</html>