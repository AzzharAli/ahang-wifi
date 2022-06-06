<?php
$konek = mysqli_connect("localhost","root","Wifilemot100kbps","ahangwifi");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksinya tidak wangi : " . mysqli_connect_error();
}
 
?>