<?php
	if (isset($_COOKIE['username'])) {
		echo "<h1>Cookie 'username' Ada. Isinya : ".$_COOKIE['username'];
	}
	else{
		echo "<h1>Cookie 'username' Tidak Ada.</h1>";
	}
	if (isset($_COOKIE['namalengkap'])) {
		echo "<h1>Cookie 'namalengkap' Ada. Isinya : ".$_COOKIE['namalengkap'];
	}
	else{
		echo "<h1>Cookie 'namalengkap' Tidak Ada.</h1>";
	}
	echo "<h2>Klik <a href='pert15_cookie3.php'>Di Sini</a> Untuk Penghapusan Cookies</h2>";
?>