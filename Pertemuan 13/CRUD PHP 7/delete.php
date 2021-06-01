<?php
	include "config.php";
	
	$id = $_GET['id'];

	$query = mysqli_query($mysqli, "DELETE FROM users WHERE id='$id'");
	@$sql .= mysqli_query($mysqli, "ALTER TABLE users DROP id");
	@$sql .= mysqli_query($mysqli, "ALTER TABLE users ADD id INT NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST");
	mysqli_multi_query($connect , $query);
	header("Location:index.php");
?>