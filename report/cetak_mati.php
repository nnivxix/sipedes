<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
		$id = $_POST['id_mendu'];
		// var_dump($id);
	}

	$tanggal = date("m/y");
	$tgl = date("d/m/y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
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

		<?php
		// $sql_tampil = "SELECT * FROM tb_mendu JOIN tb_pdd ON (tb_mendu.id_pdd = tb_pdd.id_pend) where tb_mendu.id_mendu = '$id'";
			$sql_tampil = "SELECT
			m.id_mendu, m.tgl_mendu, m.sebab,
			p.nik, p.nama, p.tempat_lh, p.tgl_lh,  p.jekel, p.desa, p.rt, p.rw, p.agama, p.pekerjaan
			from tb_mendu m inner join tb_pdd p
			on m.id_pdd = p.id_pend
			where id_mendu ='$id'";
			
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
		<div class="nomor__surat">
			<h1 style="text-decoration: underline;">SURAT KETERANGAN KEMATIAN</h1>
			<h2>Nomor : <?php echo $data['id_mendu']. "/Ket.Kematian/" . $tanggal; ?></h2>
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
							<?php
							$str_date = strtotime($data['tgl_lh']);
							$date_tgl = date("d-m-Y", $str_date);
							echo gettype($data['tgl_lh']);
							 ?>
							<td><?php echo $data['tempat_lh']. ", ". $date_tgl; ?></td>
						</tr>
						<tr>
							<td>Kewarganegaraan</td>
							<td class="indent-colon">:</td>
							<td>Indonesia</td>
						</tr>
						<tr>
							<td>Agama</td>
							<td class="indent-colon">:</td>
							<td><?php echo $data['agama']; ?></td>
						</tr>
						<tr>
							<td>Pekerjaan Terakhir</td>
							<td class="indent-colon">:</td>
							<td><?php echo $data['pekerjaan']; ?></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td class="indent-colon">:</td>
							<td><?php echo "Desa ". $data['desa']. " RT ". $data['rt']. " RW ". $data['rw']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>

	<p class="penutup">Yang bertempat di Dusun Cisaga Desa Cisaga Kecamatan Cisaga Kabupaten Ciamis Provinsi Jawa Barat.</p>
	<p class="penutup">Menurut sepengetahuan kami bahwa nama tersebut diatas telah meniggal dunia pada:</p>
	<div class="table">
		<table class="indent-table">
			<tbody>
				<tr>
					<td>Hari</td>
					<td style="padding: 0 3em;">:</td>
					<td><?php
					$hari = date('l', $data['tgl_mendu']);

					// echo $hari;
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
				?></td>
				</tr>
				<tr>
					<td>Tanggal</td>
					<td style="padding: 0 3em;">:</td>
					<td><?php echo $data['tgl_mendu']; ?></td>
				</tr>
				<tr>
					<td>Disebabkan Karena</td>
					<td style="padding: 0 3em;">:</td>
					<td><?php echo $data['sebab']; ?></td>
				</tr>
				<tr>
					<td>Di</td>
					<td style="padding: 0 3em;">:</td>
					<td><?php echo $data['tempat_lh']; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
		</article>
<?php } ?>
		<div class="tanda__tangan">
			<p>	Cisaga, 12 Februari 2021</p>
			<p class="space__for__sign">Kepala Desa Cisaga</p>
			<p>Enip</p>
		</div>
	</main>
</body>
</html>



















