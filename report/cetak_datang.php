<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id = $_POST['id_datang'];
	}

	$tanggal = date("m/y");
	$tgl = date("d/M/y");
	$sql_tampil = "select * from tb_datang
									where id_datang ='$id'";

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
	<title>Surat Keterangan Pendatang <?php echo $data['nama_datang']; ?></title>
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
			<h1 style="text-decoration: underline;">SURAT KETERANGAN PENDATANG</h1>
			<h2>Nomor : <?php echo $data['id_datang']. " /Ket.Pendatang/ ". $tanggal; ?></h2>
		</div>

		<article>
			<p class="pembuka">Yang bertandatangan dibawah ini:</p>
			<div class="table">
				<table class="indent-table">
					<tbody>
						<tr>
							<td>Nama Lengkap</td>
							<td class="indent-colon" style="padding: 0 3.5em;">:</td>
							<td>Enip Suparman</td>
						</tr>

						<tr>
							<td>Jabatan</td>
							<td class="indent-colon" style="padding: 0 3.5em;">:</td>
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
							<td style="text-transform: uppercase; font-weight: 800;"><?php echo $data['nama_datang'] ;?></td>
						</tr>
						<tr>
							<td>NIK</td>
							<td class="indent-colon">:</td>
							<td><?php echo $data['nik'] ;?></td>
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
							<td>Tanggal Datang</td>
							<td class="indent-colon">:</td>
							<td><?php echo date("d-M-Y", strtotime($data['tgl_datang'])); ?></td>
						</tr>
					</tbody>
				</table>
			</div>

	<p class="penutup">Benar-benar Telah datang dan berencana untuk tinggal  di Dusun Cisaga Desa Cisaga Kecamatan Cisaga Kabupaten Ciamis Provinsi Jawa Barat.</p>
	<p class="penutup">Demikian Surat ini dibuat, agar dapat digunakan sebagaimana mestinya.</p>
		</article>

		<div class="tanda__tangan">
			<p>	Cisaga, <?php echo $tgl; ?></p>
			<p class="space__for__sign">Kepala Desa Cisaga</p>
			<p>Enip</p>
		</div>
	</main>
<?php } ?>

<script>window.print()</script>
</body>
</html>
