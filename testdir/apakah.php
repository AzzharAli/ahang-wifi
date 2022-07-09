<?php
if(empty($_GET['query'])){
    $out = array('error'=>'Masukkan Query Dengan benar');
}else{ 
    $rand = rand(0,1);
    if($rand == 0){
        $out = array('query'=>$_GET['query'], 'return'=>'Tidak');
    }else{
        $out = array('query'=>$_GET['query'], 'return'=>'Ya');
    }
}
header('Content-Type: application/json');
echo json_encode($out);
?>