<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Su-Ket Pindah Datang</h3>
	</div>
	<form action="./report/cetak_pindah.php" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div  class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Surat</label>
					<div class="col-sm-10">
					<select name="jenis_surat" id="id_pend" class="form-control select2bs4" required>
						<!-- <option selected="selected">Pilih Jenis Surat</option> -->
						<option selected value="Surat Keterangan Pindah Datang WNI">Surat Datang</option>
					</select>
				</div>


				<label class="col-sm-2 col-form-label">Penduduk</label>
				<div class="col-sm-10">
					<select name="id_kk" id="id_kk" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Data -</option>
						<?php
				// ambil data dari database
				$query = "SELECT * FROM tb_kk JOIN tb_kepindah ON tb_kk.id_kk = tb_kepindah.id_kk";
				// var_dump($query);
				$hasil = mysqli_query($koneksi, $query);
				while ($row = mysqli_fetch_array($hasil)) {


				?>
				<option value="<?php echo $row['id_kk'] ?>">
							<?php echo $row['no_kk'] .' - '. $row['kepala'] ?>
						</option>
						<?php	}	?>
					</select>

				</div>
			</div>

		</div>
		<div class="card-footer">

			<input type="submit" name="Cetak" value="Cetak" class="btn btn-info">
		</div>
	</form>
</div>
