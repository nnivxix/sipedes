<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-file"></i> Su-Ket Pindah Datang</h3>
	</div>
	<form action="./report/cetak_pindah.php" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div  class="form-group row">
				<label class="col-sm-3 col-form-label">Nama Kepala Keluarga</label>
				<div class="col-sm-9" style="margin-bottom:1em;">
					<select name="id_kk" id="id_kk" class="kk form-control select2bs4" onchange="getIdKk()">

					</select>
				</div>

				<label class="col-sm-3 col-form-label">Anggota KK</label>
				<div class="col-sm-9 cxbx">
				</div>
			</div>

		</div>
		<div class="card-footer">

			<input type="submit" name="Cetak" value="Cetak" class="btn btn-info">
		</div>
	</form>
</div>
