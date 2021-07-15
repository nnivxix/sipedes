<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT p.nama, d.id_pindah, d.tgl_pindah, d.alasan, d.desa, d.rt, d.rw, d.kec, d.kab, d.prov FROM
		tb_pindah d join tb_pdd p on d.id_pdd=p.id_pend WHERE id_pindah='".$_GET['kode']."'";
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

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">No Sistem</label>
				<div class="col-sm-2">
					<input type="text" class="form-control" id="id_pindah" name="id_pindah" value="<?php echo $data_cek['id_pindah']; ?>"
					 readonly/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama']; ?>"
					 readonly required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Tgl pindah</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" id="tgl_pindah" name="tgl_pindah" value="<?php echo $data_cek['tgl_pindah']; ?>"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alasan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="alasan" name="alasan" value="<?php echo $data_cek['alasan']; ?>"
					 required>
				</div>
			</div>
<p style="font-size: 1.6em; font-weight: 800;">Alamat Tujuan: </p>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Desa</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="desa" name="desa" value="<?php echo $data_cek['desa']; ?>"
					 required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">RT/RW</label>
				<div class="col-sm-3">
					<input type="number" class="form-control" id="rt" name="rt" value="<?php echo $data_cek['rt']; ?>"
					/>
				</div>
				<div class="col-sm-3">
					<input type="number" class="form-control" id="rw" name="rw" value="<?php echo $data_cek['rw']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kecamatan</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kec" name="kec" value="<?php echo $data_cek['kec']; ?>"
					  required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kabupaten</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="kab" name="kab" value="<?php echo $data_cek['kab']; ?>"
					  required>
				</div>
			</div>
		</div>

		<div class="form-group row">
			<label class="col-sm-2 col-form-label">Provinsi</label>
			<div class="col-sm-6">
				<input type="text" class="form-control" id="prov" name="prov" value="<?php echo $data_cek['prov']; ?>"
				  required>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-pindah" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE tb_pindah SET 
		tgl_pindah='".$_POST['tgl_pindah']."',
		alasan='".$_POST['alasan']."',
		desa='".$_POST['desa']."',
		rt='".$_POST['rt']."',
		rw='".$_POST['rw']."',
		kec='".$_POST['kec']."',
		kab='".$_POST['kab']."',
		prov='".$_POST['prov']."'
		WHERE id_pindah='".$_POST['id_pindah']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pindah';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-pindah';
        }
      })</script>";
    }}
