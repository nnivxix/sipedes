<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
		$id = $_POST['lahir'];
	}

	$tanggal = date("m/y");
	$tgl = date("d/M/y");
	

$sql_tampil = "select * from tb_lahir where id_lahir='$id'";
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
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
	<title>Surat Kelahiran <?php echo $data['nama']; ?></title>
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
			<h1 style="text-decoration: underline;">SURAT KETERANGAN KELAHIRAN</h1>
			<h2>Nomor : <?php echo $data['id_lahir']."/Ket.Kelahiran/".$tanggal; ?></h2>
		</div>

		<article>
			<p class="pembuka">Untuk yang bersangkutan dibawah ini</p>
			<div class="table">
				<table class="indent-table">
					<tbody>
						<tr>
							<td>Hari</td>
							<td class="indent-colon" style="padding: 0 2.5em;">:</td>
							<td>
								<?php
								$hari = date('l', strtotime($data['tgl_lh']));
								// echo date('l', strtotime($data['tgl_lh']));
								if ($hari == "Sunday"){
									echo "Minggu";
								}
								elseif ($hari == "Monday"){
									echo "Senin";
								}
								elseif ($hari == "Thursday"){
									echo "Selasa";
								}
								elseif ($hari == "Wednesday"){
									echo "Rabu";
								}
								elseif ($hari == "Tuesday"){
									echo "Kamis";
								}
								elseif ($hari == "Friday"){
									echo "Jumat";
								}
								else {
									echo "Sabtu";
								}
								 ?>
							</td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td class="indent-colon" style="padding: 0 2.5em;">:</td>
							<td><?php echo date("d-M-Y", strtotime($data['tgl_lh'])); ?></td>
						</tr>

						<tr>
							<td>Tempat Kelahiran</td>
							<td class="indent-colon" style="padding: 0 2.5em;">:</td>
							<td>Ciamis</td>
						</tr>
					</tbody>
				</table>
			</div>
			<p class="pembuka">Telah Lahir seorang Anak
				<?php
					if ($data['jekel'] == 'LK'){
						echo "Laki-Laki";
					} else {
						echo "Perempuan";
					}
			 ?> bernama:</p>
			<p style="font-size: 2em; text-align: center; font-weight: 800;"><?php echo $data['nama'] ?></p>

			<?php

				$sql_ortu = "SELECT * FROM tb_kk WHERE id_kk = '$data[id_kk]'";
				$sql_ortu_tampil = mysqli_query($koneksi,$sql_ortu);
				while ($data_ortu = mysqli_fetch_array($sql_ortu_tampil, MYSQLI_BOTH)){

		 ?>
			<p class="pembuka">Dari Orang Tua:</p>

			<div class="table">
				<table class="indent-table">
					<tbody>
						<tr>
							<td>Nama Lengkap</td>
							<td class="indent-colon">:</td>
							<td><?php echo $data_ortu['kepala']; ?></td>
						</tr>
						<tr>
							<td>NIK</td>
							<td class="indent-colon">:</td>
							<td><?php echo $data_ortu['no_kk']; ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td class="indent-colon">:</td>
							<td><?php echo  "Desa ".$data_ortu['desa']. "RT " .$data_ortu['rt']." RW ".$data_ortu['rw']." Kecamatan ".$data_ortu['kec']." Kabupaten ".$data_ortu['kab']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<p class="pembuka">Surat Keterangan ini dibuat berdasarkan keterangan pelapor :</p>
			<div class="table">
				<table class="indent-table">
					<tbody>
						<tr>
							<td>Nama Lengkap</td>
							<td class="indent-colon">:</td>
							<td><?php echo $data_ortu['kepala']; ?></td>
						</tr>
						<tr>
							<td>NIK</td>
							<td class="indent-colon">:</td>
							<td><?php echo $data_ortu['no_kk']; ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td class="indent-colon">:</td>
							<td><?php echo  "Desa ".$data_ortu['desa']. "RT " .$data_ortu['rt']." RW ".$data_ortu['rw']." Kecamatan ".$data_ortu['kec']." Kabupaten ".$data_ortu['kab']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
<?php } ?>
			<p class="penutup">Hubungan pelapor dengan bayi : <span style="text-decoration:underline;">Orang Tua Kandung</span> </p>
		</article>
<?php } ?>
		<div class="tanda__tangan">
			<p>	Cisaga, <?php echo $tgl; ?></p>
			<p class="space__for__sign">Kepala Desa Cisaga</p>
			<p>Enip</p>
		</div>
	</main>
</body>
</html>

