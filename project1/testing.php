<?php
    include_once "including.php";
    include_once "RB_connect.php";
    $ARRAY = $API->comm("/queue/tree/print");

    foreach($ARRAY as $a);

    print_r($a)
    
      
    
    
?>  