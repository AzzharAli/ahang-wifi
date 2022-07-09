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


<?php
session_start();
    if (!isset($_SESSION['username'])){
        header("Location: index.php");
    }
?>