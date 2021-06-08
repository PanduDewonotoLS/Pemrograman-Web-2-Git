<?php
	session_start();
	if(isset($_SESSION['login'])){
		echo "<center>";
		echo "<h1>Selamat Datang ".$_SESSION['login']."</h1>";
		echo "<h2>Halaman Ini Hanya Bisa Diakses Jika Anda Sudah Login</h2>";
		echo "<h2>Klik <a href='session3.php'>Di Sini (session3.php)</a> untuk LOGOUT</h2>";
		echo "</center>";
	}else{
		echo '<body style="background-color:lightblue">';
		echo "<center>";
		echo "<h2>";
		die ("Anda Belum Login! Anda Tidak Berhak Masuk Ke Halaman Ini, Silahkan Login Terlebih Dahulu! <a href='session1.php'> Di Sini</a>");
		echo "</h2>";
		echo "</center>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		body{
			background: lightblue;
		}
	</style>
</head>
<body>

</body>
</html>