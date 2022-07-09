<?php
require('../config.php');
exec("ping -n 1 $ipMikrotik", $output, $status);
if($status == "0"){
    echo "ON";
}else{
    echo "OFF";
}
echo "<br>";
echo $output['2'];
echo "<br>";
echo $status;
?>