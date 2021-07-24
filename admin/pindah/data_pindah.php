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
              	var_dump($data);
            ?>

					<tr>
						<td>
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['no_kk']; ?>
						</td>
						<td>
							<?php echo $data['kepala']; ?>
						</td>
						<td>
							<?php echo $data['pind_renc']; ?>
						</td>
						<td>
							<?php echo "Dusun ". $data['alamat_tujuan'] . " RT ". $data['pind_rt']. " RW " . $data['pind_rw']. " Kecamatan ". $data['pind_kec']. " Kabupaten " . $data['pind_kab']. " Provinsi ". $data['pind_prop'];?>
						</td>
						<td>
							<?php echo $data['alasan_pindah']; ?>
						</td>
						<td>

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
