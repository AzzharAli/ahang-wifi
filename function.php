<?php
//Function untuk kecepatan
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

//Function untuk rate
function dataRate($bytes)
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
            $bytes = '0';
        }

        return $bytes;
}

//Function for Datapenggunaan 
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
//Ping Value

function splitPingJson($splitPingJson){ 
    $decode = json_decode($splitPingJson, true);
    //$pings2 = explode('=', $pings1, 9)[3];
    //$pings = explode('"', $splitPingJson, 10)[3];
    return($decode['value']);
  }

//Client Connect Status
function statusConnectClient($deviceConnect){
    $decode = json_decode($deviceConnect, true);
    $read = $decode['status'];
    if($read == "Connected"){
        $status = "Normal";
    }else{
        $status = "Gangguan";
    }
    return($status);
}


?>