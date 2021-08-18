<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Pindah</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-pindah" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>KK</th>
						<th>Nama Kepala Kel.</th>
						<th>Tanggal</th>
						<th>Tujuan</th>
						<th>Alasan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
			  $sql = $koneksi->query("SELECT * FROM tb_kepindah");
              while ($data= $sql->fetch_assoc()) {
              	// var_dump($data);
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>							<?php
								$query_kk = "SELECT * FROM tb_kk WHERE id_kk=".$data['id_kk'];
								$hasil_kk = mysqli_query($koneksi, $query_kk);
								while ($row_kk = mysqli_fetch_array($hasil_kk)) {
								 ?>
							<?php echo $row_kk['no_kk']; ?>
						</td>
						<td>
<?php echo $row_kk['kepala'];
								} ?>
						</td>
						<td>
							<?php echo $data['pind_renc']; ?>
						</td>
						<td>
							<?php echo "Dusun ". $data['alamat_tujuan'] . " RT ". $data['pind_rt']. " RW " . $data['pind_rw']. " Kecamatan ". $data['pind_kec']. " Kabupaten " . $data['pind_kab']. " Provinsi ". $data['pind_prop'];?>
						</td>
						<td>
							<?php
							if($data['alasan_pindah'] == 1){
								echo "Pekerjaan";
							} elseif($data['alasan_pindah'] == 2){
								echo "Pendidikan";
							} elseif ($data['alasan_pindah'] == 3){
								echo "Keamanan";
							} elseif ($data['alasan_pindah'] == 4){
								echo "Kesehatan";
							} elseif ($data['alasan_pindah'] == 5){
								echo "Perumahan";
							} elseif ($data['alasan_pindah'] == 6){
								echo "Keluarga";
							} else{
								echo "Lainnya";
							}


							 ?>


						</td>
						
						
						<td>
							<a href="?page=edit-pindah&kode=<?php echo $data['id_kk']; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
							<a href="?page=del-pindah&kode= <?php echo $data['id_kk']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" title="Hapus" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->
