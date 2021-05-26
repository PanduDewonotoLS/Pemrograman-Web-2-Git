<?php
	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "bukutamu";
	$link = mysqli_connect($servername,$dbusername,$dbpassword,$dbname) or die ("Not Able To Connect To Server");
	if(!$link)
	{
		echo "Database Connection Failed";
	}
	?>