<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id = $_POST['id_pend'];

	$desa = $_POST['desa'];
	$rt = $_POST['rt'];
	$rw = $_POST['rw'];
	$kecamatan = $_POST['kecamatan'];
	$kabupaten = $_POST['kabupaten'];
	$provinsi = $_POST['provinsi'];
	// var_dump($rt);
	}

	$tanggal = date("m/y");
	$tgl = date("d/m/y");

	$sql_tampil = "select * from tb_pdd
	where status='Pindah' and id_pend ='$id'";

	$query_tampil = mysqli_query($koneksi, $sql_tampil);
	$no=1;
	while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
	// var_dump($data);
?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
	<title>Surat Pindah <?php echo $data['nama']; ?></title>
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
			<h1 style="text-decoration: underline;">SURAT KETERANGAN PINDAH</h1>
			<h2>Nomor : <?php echo $data['id_pend']. "/Ket.Pindah/". $tanggal; ?></h2>
		</div>

		<article>
			<p class="pembuka">Yang bertanda tangan dibawah ini, menerangkan permohonan pindah dengan data sebagai berikut:</p>
			<div class="table">
				<table class="indent-table">
					<tbody>
						<tr>
							<td>NIK</td>
							<td class="indent-colon" style="padding: 0 4.1em;">:</td>
							<td><?php echo $data['nik']; ?></td>
						</tr>

						<tr>
							<td>Nama Lengkap</td>
							<td class="indent-colon" style="padding: 0 4.1em;">:</td>
							<td><?php echo $data['nama']; ?></td>
						</tr>

						<tr>
							<td>Alamat Sekarang </td>
							<td class="indent-colon" style="padding: 0 4.1em;">:</td>
							<td><?php echo "Desa ". $data['desa']. " RT ". $data['rt']. " RW ". $data['rw']; ?></td>
						</tr>
							<br>
						<tr>
							<td>Alamat Tujuan </td>
							<td class="indent-colon" style="padding: 0 4.1em;">:</td>
							<td><?php echo "Desa ". $desa. " RT" . $rt . " RW". $rw; ?></td>
						</tr>
						<tr>
							<td></td>
							<td style="padding: 0 4.1em";></td>
							<td> <?php echo "Kecamatan ". $kecamatan; ?></td>
						</tr>
						<tr>
							<td></td>
							<td style="padding: 0 4.1em;"></td>
							<td> <?php echo  "Kabupaten ". $kabupaten; ?></td>
						</tr>
						<tr>
							<td ></td>
							<td style="padding: 0 4.1em;"></td>
							<td> <?php echo  "Provinsi " .$provinsi; ?></td>
						</tr>

					</tbody>
				</table>
			</div>

			<p class="penutup">Demikian Surat pengantar pindah ini dibuat agar digunakan sebagaimana mestinya.</p>
		</article>

		<div class="tanda__tangan">
			<p>	Cisaga, <?php echo $tgl; ?></p>
			<p class="space__for__sign">Kepala Desa Cisaga</p>
			<p>Enip</p>
		</div>
	</main>
<?php } ?>

<script>
	window.print();
</script>
</body>
</html>



