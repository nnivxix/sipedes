<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penduduk</label>
				<div class="col-sm-6">
					<select name="id_kk" id="id_pdd" class="form-control select2bs4" required>
						<option selected="selected">- Pilih Penduduk -</option>

												<?php
				// ambil data dari database
				$query = "select * from tb_kk";
				$hasil = mysqli_query($koneksi, $query);
				while ($row = mysqli_fetch_array($hasil)) {
				?>
						<option value="<?php echo $row['id_kk'] ?>">
							<?php echo $row['id_kk'] ?>
							-
							<?php echo $row['kepala'] ?>
						</option>
						<?php
				}
				?>
					</select>

					</select>
				</div>
			</div>


			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Pindah</label>
				<div class="col-sm-3">
					<input type="date" class="form-control"  name="pind_renc" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alasan</label>
				<div class="col-sm-6">
					<select name="alasan_pindah">
						<option value="1">Pekerjaan</option>
						<option value="2">Pendidikan</option>
						<option value="3">Keamanan</option>
						<option value="4">Kesehatan</option>
						<option value="5">Perumahan</option>
						<option value="6">Keluarga</option>
						<option value="7">Lainnya</option>
					</select>
				</div>
			</div>
<p style="font-size: 1.6em; font-weight: 800;">Alamat Tujuan: </p>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat Tujuan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" placeholder="dusun abncd" id="desa" name="alamat_tujuan"
					 required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="desa" name="pind_desa"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="kep_rt" name="pind_rt" />
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rw" name="pind_rw" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kec" name="pind_kec" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kab" name="pind_kab" value="ciamis"  required>
				</div>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Provinsi</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="prov" name="pind_prop"  required>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nomor Telpon</label>
			<div class="col-sm-6">
				<input type="text" class="form-control"  name="pind_tel" >
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Kode Post</label>
			<div class="col-sm-6">
				<input type="text" class="form-control"  name="kode_pos" >
			</div>
		</div>


		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Pemohon</label>
			<div class="col-sm-6">
				<input type="text" class="form-control"  name="pemohon" >
			</div>
		</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Klasifikasi Pindah</label>
				<div class="col-sm-6">
					<select name="jen_pind">
						<option value="1">Dalam Satu Desa/Kelurahan</option>
						<option value="2">Antar Desa/Kelurahan</option>
						<option value="3">Antar Kecamatan</option>
						<option value="4">Antar Kab/Kota</option>
						<option value="5">Antar Propinsi</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jenis Kepindahan</label>
				<div class="col-sm-6">
					<select name="klas_pind" id="">
						<option value="1">Kep. Keluarga</option>
						<option value="2">Kep.Keluarga dan Seluruh Angg. Keluarga</option>
						<option value="3">Kep.Keluarga dan Sbg. Angg.Keluarga</option>
						<option value="4">Anggota Keluarga</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status Nomor KK Bagi Yang Tidak Pindah</label>
				<div class="col-sm-6">
					<select name="stt_kk_tdk_pind">
						<option value="1">Numpang KK</option>
						<option value="2">Membuat KK Baru</option>
						<option value="3">Tidak ada Anggota Keluarga Yang Ditinggal</option>
						<option value="4">Nomor KK Tetap</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Status KK Bagi yang Tidak Pindah</label>
				<div class="col-sm-6">
					<select name="stt_kk" >
						<option value="1">Numpang KK</option>
						<option value="2">Membuat KK Baru</option>
						<option value="4">Nama Kepala Keluarga dan Nomor KK Tetap</option>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-pindah" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

	$id_kk = $_POST['id_kk'];
	$alasan_pindah = $_POST['alasan_pindah'];
	$alamat_tujuan =   $_POST['alamat_tujuan'];
	$pind_desa =   $_POST['pind_desa'];
	$pind_tel = $_POST['pind_tel'];
	$kode_pos = $_POST['kode_pos'];
	$pind_kab =   $_POST['pind_kab'];
	$pind_kec =   $_POST['pind_kec'];
	$pind_prop =   $_POST['pind_prop'];
	$pind_rt =   $_POST['pind_rt'];
	$pind_rw =   $_POST['pind_rw'];
	$klas_pind =   $_POST['klas_pind'];
	$jen_pind =   $_POST['jen_pind'];
	$stt_kk_tdk_pind =   $_POST['stt_kk_tdk_pind'];
	$stt_kk =   $_POST['stt_kk'];
	$pind_renc =   $_POST['pind_renc'];
	$pemohon = $_POST['pemohon'];
    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data


    	$sql_pindah = "INSERT INTO `tb_kepindah` (`alasan_pindah`, `alamat_tujuan`, `pind_desa`, `pind_tel`, `pind_kab`, `pind_prop`, `pind_rt`, `pind_rw`, `klas_pind`, `jen_pind`, `stt_kk_tdk_pind`, `stt_kk`, `pind_renc`, `kode_pos`, `pind_kec`, `id_kk`, `pemohon`) VALUES ('$alasan_pindah', '$alamat_tujuan', '$pind_desa', '$pind_tel', '$pind_kab', '$pind_prop', '$pind_rt', '$pind_rw', '$klas_pind', '$jen_pind', '$stt_kk_tdk_pind', '$stt_kk', '$pind_renc', $kode_pos, '$pind_kec', '$id_kk', '$pemohon')";

		$query_simpan = mysqli_query($koneksi, $sql_pindah);
		
		// $sql_ubah = "UPDATE tb_pdd SET
		// 	status='Pindah'
		// 	WHERE id_pend='".$_POST['id_pdd']."'";
		// $query_ubah = mysqli_query($koneksi, $sql_ubah);

		mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-pindah';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-pindah';
          }
      })</script>";
    }}

    ?>
