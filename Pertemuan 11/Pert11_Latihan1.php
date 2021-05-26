<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "lat_dbase";
	$link = mysqli_connect($servername,$dbusername,$dbpassword,$dbname) or die ("Not Able To Connect To Server");
	if($link)
	{
		echo "Ok...Koneksi Berhasil";
	}
	?>