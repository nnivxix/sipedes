<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id = $_POST['id_pend'];



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

		<div class="nomor__surat">
			<h1 style="text-transform:uppercase;">Surat Keterangan Pindah Datang WNI</h1>
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
						<tr>
							<td></td>
							<td style="padding: 0 4.1em";></td>
							<td> <?php echo "Kecamatan ". $data['kec']; ?></td>
						</tr>
						<tr>
							<td></td>
							<td style="padding: 0 4.1em;"></td>
							<td> <?php echo  "Kabupaten ". $data['kab']; ?></td>
						</tr>
						<tr>
							<td ></td>
							<td style="padding: 0 4.1em;"></td>
							<td> <?php echo  "Provinsi " .$data['prov']; ?></td>
						</tr>
							<br>
						<?php } ?>
						<?php
							$sql_pd = "select * from tb_pindah
							where id_pdd ='$id'";

							$query_pd = mysqli_query($koneksi, $sql_pd);
							$no=1;
							while ($data_pd = mysqli_fetch_array($query_pd,MYSQLI_BOTH)) {
							// var_dump($data_pd); ?>
						<tr>
							<td>Alamat Tujuan </td>
							<td class="indent-colon" style="padding: 0 4.1em;">:</td>
							<td><?php echo "Desa ". $data_pd['desa']. " RT" . $data_pd['rt'] . " RW". $data_pd['rw']; ?></td>
						</tr>
						<tr>
							<td></td>
							<td style="padding: 0 4.1em";></td>
							<td> <?php echo "Kecamatan ". $data_pd['kec']; ?></td>
						</tr>
						<tr>
							<td></td>
							<td style="padding: 0 4.1em;"></td>
							<td> <?php echo  "Kabupaten ". $data_pd['kab']; ?></td>
						</tr>
						<tr>
							<td ></td>
							<td style="padding: 0 4.1em;"></td>
							<td> <?php echo  "Provinsi " .$data_pd['prov']; ?></td>
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
	// window.print();
</script>
</body>
</html>



