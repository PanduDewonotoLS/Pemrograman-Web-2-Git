<html>
	<head>
		<title>Penggunaan Split</title>
	</head>
	<body>
		<?php
			$tanggal = "17-05-2010";
			list($hari, $bulan, $tahun) = explode('-',$tanggal);

			/* Fungsi Split Tidak Berfungsi
			   Dapat Digantikan Dengan Explode

			 */

			echo "Hari = $hari";
			echo "<br/>";
			echo "Bulan = $bulan";
			echo "<br/>";
			echo "Tahun = $tahun";
			echo "<br/>";
		?>
	</body>
</html>