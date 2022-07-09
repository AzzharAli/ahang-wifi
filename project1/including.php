<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fi=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ngepet_custom/style.css" rel="stylesheet">
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="fontawesome/css/brands.css" rel="stylesheet">
    <link href="fontawesome/css/solid.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/ngepet_custom/ngepet_custom_jam.js"></script>
	<!-- Bootstrap CSS END-->
	<!-- Database Connect -->
	<?php
		//include "config/koneksi.php"
	?>
	<!-- Database Connect END -->
    <!---monitoring include--->
    <script type="text/javascript" src="graph/highchart/js/highcharts.js"></script>
    <script type="text/javascript" src="graph/highchart/js/themes/gray.js"></script>


    <script type="text/javascript" src="js/jquery.min.js"></script> 
<script type="text/javascript" src="highchart/js/highcharts.js"></script>
<script> 
	var chart;
	
	function requestDatta(interface) {
		$.ajax({
			url: 'data.php?interface='+interface,
			datatype: "json",
			success: function(data) {
				 var midata = JSON.parse(data);
				// console.log(midata);
				if( midata.length > 0 ) {
					var TX=parseInt(midata[0].data);
					var RX=parseInt(midata[1].data);
					var x = (new Date()).getTime(); 
					shift=chart.series[0].data.length > 19;
					chart.series[0].addPoint([x, TX], true, shift);
					chart.series[1].addPoint([x, RX], true, shift);
					document.getElementById("tabletx").innerHTML=convert(TX);
					document.getElementById("tablerx").innerHTML=convert(RX);
				}else{
					document.getElementById("tabletx").innerHTML="0";
					document.getElementById("tablerx").innerHTML="0";
				}
			},
			error: function(XMLHttpRequest, textStatus, errorThrown) { 
				console.error("Status: " + textStatus + " request: " + XMLHttpRequest); console.error("Error: " + errorThrown); 
			}       
		});
	}	

	$(document).ready(function() {
			Highcharts.setOptions({
				global: {
					useUTC: false
				}
			});
	

           chart = new Highcharts.Chart({
			   chart: {
				renderTo: 'graph',
				animation: Highcharts.svg,
				type: 'line',
				events: {
					load: function () {
						setInterval(function () {
							requestDatta(document.getElementById("interface").value);
						}, 1000);
					}				
			}
		 },
		 title: {
			text: 'Monitoring'
		 },
		 xAxis: {
			type: 'datetime',
				tickPixelInterval: 150,
				maxZoom: 20 * 1000
		 },
		 
		yAxis: {
                            minPadding: 0.2,
                            maxPadding: 0.2,
                            title: {
                              text: 'Traffic'
                            },
                            labels: {
                              formatter: function () {      
                                var bytes = this.value;                          
                                var sizes = ['bps', 'kbps', 'Mbps', 'Gbps', 'Tbps'];
                                if (bytes == 0) return '0 bps';
                                var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
                                return parseFloat((bytes / Math.pow(1024, i)).toFixed(2)) + ' ' + sizes[i];                    
                              },
                            },       
                        },
            series: [{
                name: 'TX',
                data: []
            }, {
                name: 'RX',
                data: []
            }],
			  tooltip: {
        headerFormat: '<b>{series.name}</b><br/>',
        pointFormat: '{point.x:%Y-%m-%d %H:%M:%S}<br/>{point.y}'
    },


	  });
  });
  function convert( bytes) {      
                                                  
                                var sizes = ['bps', 'kbps', 'Mbps', 'Gbps', 'Tbps'];
                                if (bytes == 0) return '0 bps';
                                var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
                                return parseFloat((bytes / Math.pow(1024, i)).toFixed(2)) + ' ' + sizes[i];                    
                              }
</script>
	<!---monitoring include end--->
