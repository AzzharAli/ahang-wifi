<?php
require('routeros_api.class.php');

$API = new routerosAPI();

$API->debug = false;

if ($API->connect('186.186.0.1', 'apiuser', 'apiuser')) 
?>