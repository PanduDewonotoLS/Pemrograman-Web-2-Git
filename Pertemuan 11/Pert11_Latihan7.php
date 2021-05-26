<?php
	include "Pert11_Latihan1.php";

	$hasil = mysqli_query($link, "SELECT * FROM tbl_mhs");
	$hit = mysqli_num_rows($hasil);
	echo "Jumlah Record $hit";
	?>