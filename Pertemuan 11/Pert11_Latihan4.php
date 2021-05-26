<?php

	include "Pert11_Latihan1.php";

	$input = "INSERT INTO tbl_mhs(FirstName,LastName,Age) VALUES ('Karina','Suwandi',29)";
	mysqli_query($link , $input);

	$input2 = "INSERT INTO tbl_mhs(FirstName,LastName,Age) VALUES ('Glenn','Gandari',32)";
	mysqli_query($link , $input2);

	if($input AND $input2)
	{
		echo "Berhasil Menambah 2 Record!";
	}
	else
	{
		echo "Gagal Menambah 2 Record";
	}

	?>