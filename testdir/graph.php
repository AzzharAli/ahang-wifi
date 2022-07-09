<?php
require('../mikrotik_api.php');
$getDataInterface = $API->comm('/queue/simple/print');

function dataAllTraffic($dataMasuk){
    foreach($dataMasuk as $dataInt):
        if(!empty($dataInt['comment'])){
            if($dataInt['comment'] == "ALL-TOTAL"){
                $out = explode('/', $dataInt['rate'], 2)[1];
                if ($out >= 1000000){
                    $out = number_format($out / 1000000);
                }else{
                    $out = '0';
                }
                return($out);
                $out = "0";
            }
        }else{
        
        }
        endforeach;
        $API->disconnect();
}


$dataPoints = array();


for($i = 0; $i < 1; $i++){


	array_push($dataPoints, array("x" => $i, "y" => 0));
}
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var dataPoints = <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>;
 
var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2",
	title: {
		text: "Ether 1 Download"
	},
	axisX:{
		title: "Time in millisecond"
	},
	axisY:{
		suffix: " Mbps"
	},
	data: [{
		type: "line",
		yValueFormatString: "#,##0.0#",
		toolTipContent: "{y} Mbps",
		dataPoints: dataPoints
	}]
});
chart.render();
 
var updateInterval = 1000;
setInterval(function () { updateChart() }, updateInterval);
 
var xValue = dataPoints.length;
var yValue = dataPoints[dataPoints.length - 1].y;
 
function updateChart() {
	yValue += (Math.random() - 0.5) * 0.1;
	dataPoints.push({ x: xValue, y: <?php echo  ?> });
	xValue++;
	chart.render();
};
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>     