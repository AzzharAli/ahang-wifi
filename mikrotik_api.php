<?php


require('../api_php/routeros_api.class.php');


$API = new RouterosAPI();
$ipMikrotik = "home.eula.my.id";
$userAPI = "eula";
$passwordAPI = "vengeancewillbemine";

if ($API->connect("$ipMikrotik", "$userAPI", "$passwordAPI")) {
 }
?>