<?php
	session_start();
	if (isset($_SESSION['login'])) {
		unset($_SESSION);
		session_destroy();
		echo "<center>";
		echo "<h1>Anda Sudah Berhasil LOGOUT!</h1>";
		echo "<h2>Klik <a href='session1.php'>Di Sini</a> Untuk LOGIN kembali</h2>";
		echo "<h2>Anda Sekarang Tidak Bisa Masuk Ke Halaman <a href='session2.php'>session2.php</a> Lagi</h2>";
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