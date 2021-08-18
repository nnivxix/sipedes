<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM tb_kepindah WHERE id_kk=".$_GET['kode'];
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
        // var_dump($data_cek);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>

<form action="" method="post" enctype="multipart/form-data">

		<div class="card-body">
				<?php $query_kk = "SELECT * FROM tb_kk WHERE id_kk=".$data_cek['id_kk'];
				$hasil_kk = mysqli_query($koneksi, $query_kk);
				while ($row_kk = mysqli_fetch_array($hasil_kk)) { ?>
		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nama Kepala Keluarga</label>
				<div class="col-sm-6">
					<input type="text" class="form-control"  name="<?php echo $row_kk['kepala']; ?>" value="<?php echo $row_kk['kepala']; ?>"  readonly>
				</div>
			</div>
		</div>
	<?php } ?>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl Pindah</label>
				<div class="col-sm-3">
					<input type="date" class="form-control"  name="pind_renc" value="<?php echo $data_cek['pind_renc']; ?> " required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alasan</label>
				<div class="col-sm-10">
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
				<div class="col-sm-10">
					<input type="text" class="form-control" placeholder="dusun abncd" id="desa" value="<?php echo $data_cek['alamat_tujuan']; ?> " name="alamat_tujuan"
					 required>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="desa" name="pind_desa" value="<?php echo $data_cek['pind_desa']; ?> "
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="kep_rt" name="pind_rt" minlength="2" maxlength="2" value="<?php echo $data_cek['pind_rt']; ?> " />
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" id="rw" name="pind_rw" minlength="2" maxlength="2" value="<?php echo $data_cek['pind_rw']; ?> "/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kec" name="pind_kec" value="<?php echo $data_cek['pind_kec']; ?> " required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kab" name="pind_kab" value="<?php echo $data_cek['pind_kab']; ?> "  required>
				</div>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Provinsi</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="prov" name="pind_prop" value="<?php echo $data_cek['pind_prop']; ?> " required>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Nomor Telpon</label>
			<div class="col-sm-6">
				<input type="text" class="form-control"  name="pind_tel" maxlength="7" value="<?php echo $data_cek['pind_tel']; ?> " >
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Kode Pos</label>
			<div class="col-sm-6">
				<input type="text" class="form-control"  name="kode_pos" maxlength="5"  value="<?php echo $data_cek['kode_pos']; ?> ">
			</div>
		</div>


		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Pemohon</label>
			<div class="col-sm-6">
				<input type="text" class="form-control"  name="pemohon" value="<?php echo $data_cek['pemohon']; ?> " >
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

$id_kk = isset($_POST['id_kk']) ? $_POST['id_kk'] : ' ';
$alasan_pindah = isset($_POST['alasan_pindah']) ? $_POST['alasan_pindah'] : ' ' ;
$alamat_tujuan = isset($_POST['alamat_tujuan']) ? $_POST['alamat_tujuan'] : ' ' ; 
$pind_desa = isset($_POST['pind_desa']) ? $_POST['pind_desa'] : ' ' ;
$pind_tel = isset($_POST['pind_tel']) ? $_POST['pind_tel'] : ' ' ;
$kode_pos = isset($_POST['kode_pos']) ? $_POST['kode_pos'] : ' ' ;
$pind_kab = isset($_POST['pind_kab']) ? $_POST['pind_kab'] : ' ' ;
$pind_kec = isset($_POST['pind_kec']) ? $_POST['pind_kec'] : ' ' ;
$pind_prop = isset($_POST['pind_prop']) ? $_POST['pind_prop'] : ' ' ;
$pind_rt = isset($_POST['pind_rt']) ? $_POST['pind_rt'] : ' ' ;
$pind_rw = isset($_POST['pind_rw']) ? $_POST['pind_rw'] : ' ' ;
$klas_pind = isset($_POST['klas_pind']) ? $_POST['klas_pind'] : ' ' ;
$jen_pind = isset($_POST['jen_pind']) ? $_POST['jen_pind'] : ' ' ;
$stt_kk_tdk_pind = isset($_POST['stt_kk_tdk_pind']) ? $_POST['stt_kk_tdk_pind'] : ' ' ;
$stt_kk = isset($_POST['stt_kk']) ? $_POST['stt_kk'] : ' ' ;
$pind_renc = isset($_POST['pind_renc']) ? $_POST['pind_renc'] : ' ' ;
$pemohon = isset($_POST['pemohon']) ? $_POST['pemohon'] : ' ' ;


    if (isset ($_POST['Simpan'])){
    //mulai proses simpan data
    	$sql_ubah = "UPDATE `tb_kepindah` SET
    	`alasan_pindah` = $alasan_pindah, `alamat_tujuan`=$alamat_tujuan,
    	`pind_desa`=$pind_desa, `pind_tel`=$pind_tel,
    	`pind_kab`=$pind_kab, `pind_prop`=$pind_prop,
    	`pind_rt`=$pind_rt, `pind_rw`=$pind_rw,
    	`klas_pind`=$klas_pind, `jen_pind`=$jen_pind,
    	`stt_kk_tdk_pind`=$stt_kk_tdk_pind, `stt_kk`=$stt_kk,
    	`pind_renc`=$pind_renc, `kode_pos`=$kode_pos,
    	`pind_kec`=$pind_kec,  `pemohon`=$pemohon
    	WHERE `id_kk`=$id_kk";

		$query_simpan = mysqli_query($koneksi, $sql_ubah);

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
