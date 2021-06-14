<?php
	$value = 'Pandu';
	$value2 = 'Pandu Dewonoto Laut Santoso';
	setcookie("username",$value);
	setcookie("namalengkap",$value2,time()+3600); /* Expire In 1 Hour */
	echo "<h1>Ini Halaman Pengesetan Cookie</h1>";
	echo "<h2>Klik <a href='pert15_cookie2.php'>Di Sini</a> Untuk Pemeriksaan Cookies</h2>";
?>