<?php
	include "Pert11_Latihan1.php";

	$hasil = mysqli_query($link, "SELECT * FROM tbl_mhs");
	while($data = mysqli_fetch_row($hasil))
	{
		echo "$data[0].$data[1] $data[2] $data[3]<br>";
	}