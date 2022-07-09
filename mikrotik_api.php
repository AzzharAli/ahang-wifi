<?php


require('../api_php/routeros_api.class.php');
require('../config.php');


$API = new RouterosAPI();


$API->connect("$ipMikrotik", "$userAPI", "$passwordAPI");
