<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Simpan'])){
		$id = $_POST['id_pend'];
		// $id_pend = isset($_POST['id_pend']) ? $_POST['id_pend'] : ' ' ;
		$now = date("Y-m-d");
		$uniqueid = uniqid(rand());
		$sql_simpan = "INSERT INTO rekap_pdd(id, id_pend, tgl_cetak, jenis_surat)
			VALUES('$uniqueid', '$id', '$now', 'domisili')";

		$query_simpan = mysqli_query($koneksi, $sql_simpan);
		// mysqli_close($koneksi);
}

	$tanggal = date("m/y");
	$tgl = date("d-M-Y");
	$sql_tampil = "select * from tb_pdd
									where id_pend ='$id'";

	$query_tampil = mysqli_query($koneksi, $sql_tampil);
	$no=1;
	while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Surat Keterangan Domisili <?php echo $data['nama']; ?></title>
</head>
<body>
	<main>
		<header>
			<!-- logo -->
			<div class="logo1">
					<img class="ciamis" src="../dist/img/izin.png">
			</div>
			<div class="kop">
				<h1>PEMERINTAH KABUPATEN CIAMIS</h1>
				<h2>KECAMATAN CISAGA</h2>
				<H2>DESA CISAGA</H2>
				<p>Jln. Raya Ciamis-Banjar No.231 CISAGA 46386 </p>
			</div>
		</header>
		<div class="line"></div>

		<div class="nomor__surat">
			<h1 style="text-decoration: underline;">SURAT KETERANGAN DOMISILI</h1>
			<h2>Nomor : <?php echo $data['id_pend']. " /Ket.Domisili/ " .$tanggal; ?></h2>
		</div>

		<article>
			<p class="pembuka">Yang bertandatangan dibawah ini:</p>
			<div class="table">
				<table class="indent-table">
					<tbody>
						<tr>
							<td>Nama Lengkap</td>
							<td class="indent-colon" style="padding: 0 4.1em;">:</td>
							<td style="text-transform: uppercase; font-weight: 800;">Enip Suparman</td>
						</tr>

						<tr>
							<td>Jabatan</td>
							<td class="indent-colon" style="padding: 0 4.1em;">:</td>
							<td>Kepala Desa</td>
						</tr>
					</tbody>
				</table>
			</div>
			<p class="pembuka">Dengan ini menerangkan bahwa:</p>
			<div class="table">
				<table class="indent-table">
					<tbody>
						<tr>
							<td>Nama Lengkap</td>
							<td class="indent-colon">:</td>
							<td><?php echo $data['nama']; ?></td>
						</tr>
						<tr>
							<td>Jenis Kelamin</td>
							<td class="indent-colon">:</td>
							<td><?php
							$jekel = $data['jekel'];
							if ($jekel == 'PR'){
								echo "Perempuan";
							}else {
								echo "Laki-Laki";
							}
							 ?></td>
						</tr>
						<tr>
							<td>Tempat, Tgl lahir</td>
							<td class="indent-colon">:</td>
							<td><?php
							$str_date = strtotime($data['tgl_lh']);
							$date_tgl = date("d-m-Y", $str_date);
							echo $data['tempat_lh']. ", ". $date_tgl; ?></td>
						</tr>
						<tr>
							<td>Kewarganegaraan</td>
							<td class="indent-colon">:</td>
							<td>Indonesia</td>
						</tr>
						<tr>
							<td>Agama</td>
							<td class="indent-colon">:</td>
							<td><?php echo $data['agama'] ?></td>
						</tr>
						<tr>
							<td>Pekerjaan</td>
							<td class="indent-colon">:</td>
							<td><?php echo $data['pekerjaan'] ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td class="indent-colon">:</td>
							<td><?php echo "Desa ". $data['desa']. " RT ". $data['rt']. " RW ". $data['rw']; ?></td>
						</tr>

					</tbody>
				</table>
			</div>

	<p class="penutup">Orang Tersebut benar-benar warga Desa Kami dan berdomisili di alamat tersebut diatas, sampai saat ini KArtu Tanda Penduduknya habis masa penggunaanya, mengingat masih dalam proses Pembuatan KTP Baru, dan surat ini sebagai pengganti sementara untuk dipergunakan seperlunya.</p>
	<p class="penutup">Demikian surat ini kami buat dengan sebenar-benarnya agar yang berkepentingan menjadi tahu.</p>
		</article>
<?php } ?>
		<div class="tanda__tangan">
			<p>	Cisaga, <?php echo $tgl; ?></p>
			<p class="space__for__sign">Kepala Desa Cisaga</p>
			<p>Enip</p>
		</div>
	</main>

	<script> window.print() </script>
</body>
</html>





