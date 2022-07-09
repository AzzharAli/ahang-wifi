<?php
if(empty($_GET['query'])){
    $out = array('error'=>'Masukkan Query Dengan benar');
}else{
    $rand = rand(0,100) . " %";
    $out = array('query'=>$_GET['query'], 'return'=>$rand);
}
header('Content-Type: application/json');
echo json_encode($out);
?>