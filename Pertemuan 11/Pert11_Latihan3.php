<?php

	include "Pert11_Latihan1.php";
	$input = "INSERT INTO tbl_mhs(FirstName,LastName,Age) VALUES ('Anjar','Prabowo',25)";

	if($input)
	{
		echo "Berhasil Menambah 1 Record!";
	}

	mysqli_query($link , $input);
	?>