<?php
	include "koneksiPert12.php";

	$DELETE = "DELETE FROM tbl_mhs WHERE LastName='Prabowo'";
	mysqli_query($link , $DELETE);

	if($DELETE)
	{
		echo "<br>1 Record Berhasil Dihapus!";
	}
	else
	{
		echo "<br>Record Gagal Dihapus!";
	}
	?>


