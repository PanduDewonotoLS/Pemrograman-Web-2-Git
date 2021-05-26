<?php
	include "koneksiBukuTamu.php";

	$name = $_POST['name'];
	$address = $_POST['address'];
	$message = $_POST['message'];

	date_default_timezone_set('Asia/Jakarta');
	$arrayHari = date('w');
    if($arrayHari == 0)
    {
    	$namaHari = 'Minggu';
    }
    else if($arrayHari == 1)
    {
    	$namaHari = 'Senin';
    }
    else if($arrayHari == 2)
    {
    	$namaHari = 'Selasa';
    }
    else if($arrayHari == 3)
    {
    	$namaHari = 'Rabu';
    }
    else if($arrayHari == 4)
    {
    	$namaHari = 'Kamis';
    }
    else if($arrayHari == 5)
    {
    	$namaHari = 'Jumat';
    }
    else if($arrayHari == 6)
    {
    	$namaHari = 'Sabtu';
    }
    else
    {
    	$namaHari = 'Nama Hari Tidak Valid';
    }
    $keteranganWaktu = $namaHari.' - '.date('d/m/Y - H:i:s');

	$sql = mysqli_query($link, "INSERT INTO table_bukutamu SET name='$name' , address='$address' , message='$message' , waktu='$keteranganWaktu'");
	if($sql)
	{
		echo "1 Record Added";
	}
	else
	{
		echo "Failed To Add Record";
	}
	mysqli_close($link);
	header('location:formBukuTamu.php');
	?>