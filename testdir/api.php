<?php


require('../mikrotik_api.php');
require('../function.php');
$api_id = 1;



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
    

     $allview = json_encode($getDataInterface);
     echo $allview;    
   //   foreach($getDataInterface as $data){
   //    if(!empty($data['comment'])){
   //       if(explode('-', $data['comment'], 3)[0] == "cl"){
   //          if(explode('-', $data['comment'], 3)[1] == $api_id){
   //             $value = $data['bytes'];
   //             echo "<th> $value</th>";
   //          }else{

   //          }
   //       }else{
             
   //       }
   //   }else{

   //   }
   //   }
    
    // foreach($getDataInterface as $data){
    //     echo(explode('/',$data['max-limit'],2)[1]) . '<br>';
    // }



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