
<h3>Rekap Keluar Surat Kematian</h3>

<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>KK</th>
			<th>Pemohon</th>
			<th>Tanggal Cetak</th>
		</tr>
	</thead>
	<tbody>
		<?php
$no = 1;
$sql = "SELECT * FROM rekap_pdh JOIN tb_kk ON rekap_pdh.id_kk = tb_kk.id_kk";

	$query_tampil = mysqli_query($koneksi, $sql);
	$no=1;
	while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		// var_dump($data);

 ?>
		<tr>
			<td><?php echo $no++; ?></td>

			<td><?php echo $data['no_kk']. " - ". $data['kepala']; ?></td>

			<td><?php echo $data['pemohon']; ?> </td>
			<td><?php echo $data['tgl_cetak']; ?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>

