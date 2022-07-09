<?php
require('../mikrotik_api.php');
$getDataInterface = $API->comm('/interface/print');
$allview = json_encode($getDataInterface);

// /echo $allview;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"> 
    <title>Document</title>
</head>
<body>

<?php
foreach($getDataInterface as $view):
if(!empty($view['default-name'])){
    if($view['default-name'] == "ether1"){
        $bytes = $view['rx-byte'] + $view['tx-byte'];
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }
        echo $bytes;
    }else{

    }
}else{

}
endforeach;
?>

    
</body>
<script src="/js/bootstrap.bundle.min.js"></script>
</html>