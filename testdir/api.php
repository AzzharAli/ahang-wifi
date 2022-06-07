<?php


require('../mikrotik_api.php');



// $API->debug = true;


//Interface List

   $getDataInterface = $API->comm('/queue/simple/print');
    // foreach($getDataInterface as $data){
    //     if(empty($data['comment'])){
    //         $commentData = "";
    //     }else{
    //         $commentData = $data['comment'];
    //     }
    //     echo $data['.id'] . "  |    " . $data['name'] . " | " . $commentData . '<br>';
    // }
    

    // All View
    // $allview = json_encode($getDataInterface);
    // echo $allview;    

    
    foreach($getDataInterface as $data){
        echo(explode('/',$data['max-limit'],2)[1]) . '<br>';
    }



// $getDataInterface = $API->comm('/queue/simple/print');

// function commentRead($inputData){
//     $explode1 = explode("-",$inputData);
//     return($explode1);
// }
// foreach ($getDataInterface as $viewData) {
//     //commentRead();
//     echo $viewData['comment'];
// }

   $API->disconnect();


?>


!