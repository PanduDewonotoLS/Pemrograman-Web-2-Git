<?php
	include "Pert11_Latihan1.php";

	$hasil = mysqli_query($link, "SELECT * FROM tbl_mhs");
	while($data = mysqli_fetch_array($hasil))
	{
		echo "$data[mhsID].$data[FirstName] $data[LastName] $data[Age]<br>";
	}