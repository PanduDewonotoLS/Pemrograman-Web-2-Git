<?php
	include "koneksiPert12.php";

	$UPDATE = "UPDATE tbl_mhs SET Age='36' WHERE FirstName='Karina' AND LastName='Suwandi'";
	mysqli_query($link , $UPDATE);

	if($UPDATE)
	{
		echo "<br>1 Record Berhasil Dirubah!";
	}
	else
	{
		echo "<br>Record Gagal Dirubah!";
	}
	?>


