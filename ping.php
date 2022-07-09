<?php
    include 'config.php';

$output=Shell_exec('ping -n 1 '.$ipMikrotik);
if (strpos($output, 'timeout') !== false) {
    echo "Dead";
}else{
    echo "Alive";
}


?>