<?php
	
	$valueSatu = 10;
	$valueDua = 20;
	$arr[0] = "Teknik";
	$arr[1] = "Informatika";
	$arr2 = array("Universitas" , "Pamulang");
	$arr3["Semester"] = "Semester 6";
	$arr3["Reguler"] = "Reguler B";
	$arr3["Kelas"] = "Kelas 06TPLM001";

	echo "<i><b>";
	echo "<u>Pandu Dewonoto Laut Santoso - 181011400505</u><br>";

	if ($valueSatu < $valueDua) 
	{
		foreach ($arr as $Prodi)
	 	{
			echo $Prodi . " ";
		}
		echo "<br>";
		foreach ($arr2 as $NamaKampus)
		{
			echo $NamaKampus . " ";
		}
		echo "<br>";
		foreach ($arr3 as $Detailkelas => $Value) 
		{
			echo $DetailKelas . "<br>";
		}
	}
	else
	{
		print "$valueSatu Lebih Besar Dari $valueDua";
	}
	echo "</i></b>";

	?>