<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id_pend = $_POST['id_pend'];
	$id_kk = $_POST['id_kk'];
	echo 'ini id penduduk :'.$id_pend. 'dan ini id kk: '. $id_kk;

	// var_dump($rt);
	}

	$tanggal = date("m/y");
	$tgl = date("d/m/y");


?>

