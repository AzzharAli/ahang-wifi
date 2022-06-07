<?php
//PING API
$ip = $_GET['ip'];
$ping = exec("ping -n 1 $ip");

$data = array('ping' => $ping);
header('Content-Type: application/json');
echo json_encode($data);
?>

