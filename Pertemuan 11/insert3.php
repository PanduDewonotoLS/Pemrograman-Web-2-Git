<?php
	include "Pert11_Latihan1.php";

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];

	$sql = mysqli_query($link, "INSERT INTO tbl_mhs SET FirstName='$firstname' , LastName='$lastname' , Age='$age'");
	if($sql)
	{
		echo "1 Record Added";
	}
	else
	{
		echo "Failed To Add Record";
	}

	mysqli_close($link);
	?>