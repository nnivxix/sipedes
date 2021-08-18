
<h3>Rekap Keluar Surat Kematian</h3>

<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tanggal Cetak</th>
		</tr>
	</thead>
	<tbody>
		<?php
$no = 1;
$sql = "SELECT * FROM rekap_pdd JOIN tb_pdd ON rekap_pdd.id_pend = tb_pdd.id_pend WHERE jenis_surat = 'mati' ";

	$query_tampil = mysqli_query($koneksi, $sql);
	$no=1;
	while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		// var_dump($data);

 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['tgl_cetak']; ?></td>
		</tr>
	<?php } ?>
	</tbody>
</table>

