<?php

$ip = $_GET['ip'];
exec("ping -n 1 $ip", $output, $status);
$fetch = $output[2];
if(!empty(explode(':', $fetch, 2)[1])){
$split = explode(':', $fetch, 2)[1];
}else{
$split = "Ping Gagal";    
}
if($status == 0){
	$pink = "Connected";
}else{
	$pink = "Disconnect";
}
$print = $split . "|" . $pink;
$json = array('ip' => $ip, 'value' => $split, 'status' => $pink);
echo(json_encode($json));
//print_r($print);

?>