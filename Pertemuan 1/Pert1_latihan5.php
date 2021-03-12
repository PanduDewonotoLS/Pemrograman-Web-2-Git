<?php
	
	/* Ini adalah bagian komentar antar baris pada script PHP.
	Komentar ini baru akan selesai
	ketika diakhiri dengan */	

	?>

	<html>
		<head>
			<title>Test Penyisipan PHP Pada HTML</title>
		</head>
		<body>
			Kapal Asing, Silahkan Identifikasi Diri Anda!<br>

			<?php

				$namad = "Jean";
				$namat = "Luc";
				$namab = "Piccard";
				$nilai1 = 25;
				$nilai2 = 50;
				$hasil = $nilai1*$nilai2;
				$a = 2;
				$b = 3;
				$hsl = pow($a,$b);

				?>

				<b>Ini Adalah Kapal Federasi Planet USS Enterprise<br>

					<?php

						echo "Saya $namab, $namad $namat $namab, Kapten Kapal</b><br>";
						echo "$nilai1 x $nilai2 = $hasil<br>";
						echo "$a ^ $b = $hsl";

						?>

		</body>
	</html>
