<?php
	include "../inc/koneksi.php";
	
	if (isset ($_POST['Cetak'])){
	$id_pend = $_POST['id_pend'];
	$id_kk = $_POST['id_kk'];

	}

	$tanggal = date("m/y");
	$tgl = date("d/m/y");


	$sql_data_kk = "SELECT * FROM `tb_kk` WHERE id_kk =".$id_kk;
	$query_data_kk = mysqli_query($koneksi, $sql_data_kk);
	while($data_kk = mysqli_fetch_array($query_data_kk, MYSQLI_BOTH)){

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
	<title>Surat Pindah Untuk KK <?php echo $data_kk['kepala']; ?></title>
</head>
<body>
	<main>
			<h1 style="font-size: 14px; text-align:center;">SURAT KETERANGAN PINDAH DATANG WNI</h1>

		<article>
			<div class="form form__daerah__asal">
				<h1 class="info__form__daerah__asal">Data Daerah Asal</h1>

				<p class="nokk">1. Nomor Kartu Keluarga</p>
				<!-- <tr >320 730 12334 3433 43</tr> -->
				<table class="isi__nokk">
					<tbody>
						<tr>
							<?php $no_kk = str_split($data_kk['no_kk']); ?>
							<?php for($i = 0; $i < count($no_kk); $i++){
								echo "<td style='width: 3em;border: 1px solid black;padding: 0 1px;text-align: center;'> $no_kk[$i] </td>";
							 } ?>
						</tr>
					</tbody>
				</table>

				<p class="kepala__keluarga">2. Nama Kepala Keluarga</p>
				<p class="isi__kepala__keluarga"><?php echo $data_kk['kepala']; ?></p>

				<p class="alamat">3. Alamat</p>
				<p class="isi__alamat"><?php echo $data_kk['alamat_kk'] ?></p>
				<?php
					$rt = str_split($data_kk['rt']);
					$rw = str_split($data_kk['rw']);
					$kodepos = str_split($data_kk['kodepos__kk']);
					// var_dump($kodepos);
				 ?>
				<p class="rt">RT <?php foreach($rt as $t){ ?>
					<?php	echo "<span class='rtrw' style='margin: 0 -2px;'>$t</span>"; } ?></p>

				<p class="rw">RW <?php foreach($rw as $w){ ?>
					<?php echo  "<span class='rtrw' style='margin: 0 -2px;'>$w</span>"; } ?></p>


				<p class="desa">a. Desa/Kelurahan</p>
				<p class="isi__desa"><?php echo $data_kk['desa']; ?></p>

				<p class="kab">c. Kab/Kota</p>
				<p class="isi__kab"><?php echo $data_kk['kab']; ?></p>

				<p class="kec">b. Kecamatan</p>
				<p class="isi__kec"><?php echo $data_kk['kec']; ?></p>

				<p class="prop">d. Propinsi</p>
				<p class="isi__prop"><?php echo $data_kk['prov']; ?></p>

				<p class="kodepos"><span style="padding-right: 15px;">Kode Pos</span>
					<?php foreach ($kodepos as $kpos) {echo "<span class='rtrw' style='margin: 0 -1px;'>$kpos</span>";}?>
				</p>

				<p class="telp">Telepon</p>
				<p class="isi__telp"><span class="rtrw" style="margin: 0 -2px;">0</span>
				<span class="rtrw" style="margin: 0 -2px;">2</span>
				<span class="rtrw" style="margin: 0 -2px;">1</span>
				<span class="rtrw" style="margin: 0 -2px;">4</span>
				<span class="rtrw" style="margin: 0 -2px;">4</span>
				<span class="rtrw" style="margin: 0 -2px;">4</span> </p>

			</div>
		<?php } ?>
		<?php  $sql_data_kepindah = "SELECT * FROM `tb_kepindah` WHERE id_kk =".$id_kk;
				$query_data_kepindah = mysqli_query($koneksi, $sql_data_kepindah);
				while($data_kepindah = mysqli_fetch_array($query_data_kepindah, MYSQLI_BOTH)){

					?>
			<div class="form form__data__kepindahan">
				<h1 class="info__data__kepindahan">Data Kepindahan</h1>
				<p class="alasan">1. Alasan Pindah</p>
				<div class="isi__alasan">
					<div class="selected__alasan"><?php echo $data_kepindah['alasan_pindah']; ?></div>
					<span class="pilihan__alasan pek">1. Pekerjaan</span>
					<span class="pilihan__alasan pend">2. Pendidikan</span>
					<span class="pilihan__alasan keam">3. Keamanan</span>
					<span class="pilihan__alasan kes">4. Kesehatan</span>
					<span class="pilihan__alasan perum">5. Perumahan</span>
					<span class="pilihan__alasan kel">6. Keluarga</span>
					<span class="pilihan__alasan lainnya">7. Lainnya Sebutkan</span>
				</div>

				<p class="alamat">2. Alamat Tujuan Pindah</p>
				<p class="isi__alamat"><?php echo $data_kepindah['alamat_tujuan']; ?></p>
				<?php
					$rt_pind = str_split($data_kepindah['pind_rt']);
					$rw_pind = str_split($data_kepindah['pind_rw']);
					$kodepos_pind = str_split($data_kepindah['kode_pos']);

				   ?>
				<p class="rt">RT <?php foreach($rw_pind as $w_pind){ ?>
					<?php echo  "<span class='rtrw' style='margin: 0 -2px;'>$w_pind</span>"; } ?></p>
				<p class="rw">RW <?php foreach($rt_pind as $t_pind){ ?>
					<?php echo  "<span class='rtrw' style='margin: 0 -2px;'>$t_pind</span>"; } ?></p>

				<p class="desa">a. Desa/Keluraharan</p>
				<p class="isi__desa"><?php echo $data_kepindah['pind_desa']; ?></p>

				<p class="kab">c. Kab/Kota</p>
				<p class="isi__kab"><?php echo $data_kepindah['pind_kab']; ?></p>

				<p class="kec">b. Kecamatan</p>
				<p class="isi__kec"><?php echo $data_kepindah['pind_kec']; ?></p>

				<p class="prop">d. Propinsi</p>
				<p class="isi__prop"><?php echo $data_kepindah['pind_prop']; ?></p>


				<p class="kodepos"><span style="padding-right: 15px;">Kode Pos</span>
				<?php foreach ($kodepos_pind as $kpos_pind) {echo "<span class='rtrw' style='margin: 0 -1px;'>$kpos_pind</span>";}?> </p>

				<p class="telp">Telepon</p>
				<p class="isi__telp">
					<span class="rtrw" style="margin: 0 -2px;">0</span>
					<span class="rtrw" style="margin: 0 -2px;">2</span>
					<span class="rtrw" style="margin: 0 -2px;">1</span>
					<span class="rtrw" style="margin: 0 -2px;">4</span>
					<span class="rtrw" style="margin: 0 -2px;">4</span>
					<span class="rtrw" style="margin: 0 -2px;">4</span>
				</p>

				<p class="klasif__pindah">3. Klasifikasi Pindah</p>
				<div class="isi__alasan">
					<div class="selected__alasan"><?php echo $data_kepindah['klas_pind']; ?></div>
					<span class="pilihan__alasan link__desa">1. Dalam Satu Desa/Kelurahan</span>
					<span class="pilihan__alasan antar__desa">2. Antar Desa/Kelurahan</span>
					<span class="pilihan__alasan antar__kec">3. Antar Kecamatan</span>
					<span class="pilihan__alasan antar__kab">4. Antar Kab/Kota</span>
					<span class="pilihan__alasan antar__prop">5. Antar Propinsi</span>
				</div>

				<p class="klasif__kepin">4. Jenis Kepindahan</p>
				<div class="isi__alasan">
					<div class="selected__alasan"><?php echo $data_kepindah['jen_pind']; ?></div>
					<span class="pilihan__alasan kep__kel">1. Kep. Keluarga</span>
					<span class="pilihan__alasan kep__kel__sel">2. Kep.Keluarga dan Seluruh Angg. Keluarga</span>
					<span class="pilihan__alasan kep__kel__sbg">3. Kep.Keluarga dan Sbg. Angg.Keluarga</span>
					<span class="pilihan__alasan kep__angg">4. Anggota Keluarga</span>
				</div>

				<p class="status__kk">5. Status Nomor KK Bagi Yang Tidak Pindah</p>
				<div class="isi__alasan">
					<div class="selected__alasan"><?php echo $data_kepindah['stt_kk_tdk_pind']; ?></div>
					<span class="pilihan__alasan nump__kk">1. Numpang KK</span>
					<span class="pilihan__alasan kk__baru">2. Membuat KK Baru</span>
					<span class="pilihan__alasan no__angg">3. Tidak ada Anggota Keluarga Yang Ditinggal </span>
					<span class="pilihan__alasan kk__tetap">4. Nomor KK Tetap</span>
				</div>

				<p class="status__kk__pdh">6. Status KK Bagi Yang Pindah</p>
				<div class="isi__alasan">
					<div class="selected__alasan"><?php echo $data_kepindah['stt_kk']; ?></div>
					<span class="pilihan__alasan nump__kk__pdh">1. Numpang KK</span>
					<span class="pilihan__alasan mb__kk__baru">2.Membuat KK Baru</span>
					<span class="pilihan__alasan kep__kel__tetap">3. Nama Kepala Keluarga dan Nomor KK Tetap</span>
				</div>

				<?php
					$pind_hari = date('d',strtotime($data_kepindah['pind_renc']));
					$pind_bulan = date('m', strtotime($data_kepindah['pind_renc']));
					$pind_tahun = date('Y', strtotime($data_kepindah['pind_renc']));
				 ?>

				<p class="rencana__pdh">7. Rencana Tanggal Pindah</p>
				<table class="isi__tgl__pdh">
					<tbody>
						<tr>
							<?php foreach(str_split($pind_hari) as $p_hari){
								echo "<td class='td__tgl__pind'>$p_hari</td>";
							} ?>
							<td class="td__tgl__pind kosong"></td>
							<?php foreach(str_split($pind_bulan) as $p_bulan){
								echo "<td class='td__tgl__pind'>$p_bulan</td>";
							} ?>
							<td class="td__tgl__pind kosong"></td>
							<?php foreach(str_split($pind_tahun) as $p_tahun){
								echo "<td class='td__tgl__pind'>$p_tahun</td>";
							} ?>
						</tr>
					</tbody>
				</table>


				<p class="kel__pindah">8. Keluarga Yang Pindah</p>
				<table class="table__kel__pindah">
					<thead>
						<tr>
							<th colspan="2">NO</th>
							<th colspan="16">NIK</th>
							<th colspan="2">NAMA</th>
							<th colspan="2">SHDK</th>
						</tr>
					</thead>
					<tbody>
					<?php
				$no_urut_kk = 1;
				foreach($id_pend as $idp){
					$sql_data_pend = "SELECT * FROM `tb_pdd` WHERE id_pend =".$idp;
				$query_data_pend = mysqli_query($koneksi, $sql_data_pend);
				while($data_pend = mysqli_fetch_array($query_data_pend, MYSQLI_BOTH)){
					 ?>
						<tr>
							<td colspan="2"><?php echo $no_urut_kk++; ?></td>
							<?php foreach(str_split($data_pend['nik']) as $nik){echo "<td>$nik</td>"; } ?>
							<td class="td__kk_nama" colspan="2"><?php echo $data_pend['nama']; ?></td>
							<td></td>
							<td></td>
						</tr>
					<?php } ?>
				<?php } ?>
				<?php
				if (count($idp) <= 1 ){
						for($i = 0; $i < 6; $i++){
					include "tb_anggota_pdh.php";
				}
				} else if(count($idp) <= 2 ) {
						for($i = 0; $i < 5; $i++){
					include "tb_anggota_pdh.php";
				}
				} elseif (count($idp) <= 3){
					for($i = 0; $i < 4; $i++){
					include "tb_anggota_pdh.php";
				}
				} else{
					for($i = 0; $i < 7; $i++){
					include "tb_anggota_pdh.php";
				}
				}

				 ?>

					</tbody>
				</table>

				<div class="tanda__tangan">
					<div class="camat">
						<p>Diketahui oleh:</p>
						<p>Camat</p>
						<p style="margin-bottom: 30px;">No. ........... Tgl......20....</p>
						<p>(.................................)</p>
						<p>NIP.</p>
					</div>
					<div class="pemohon">
						<p style="margin: 30px 0;">Pemohon</p>
						<p style="margin-top: 45px; text-transform: uppercase;  text-decoration: underline; font-weight: bolder;"><?php echo $data_kepindah['pemohon']; ?></p>
						<?php } ?>
					</div>
					<div class="kades">
						<p>Dikeluarkan Oleh:</p>
						<p>A.n. Kepala Desa Cisaga</p>
						<p><b>NO.475/211/II/DS-<?php echo date(Y); ?>/TGL <?php echo date("d-m-Y"); ?></b></p>
						<p style="margin: 50px 0 0 0; text-transform: uppercase; font-weight:bolder; text-decoration: underline;">Wawan S, SIP</p>
					</div>
				</div>
			</div>

			<div class="form form__data__daerah__tujuan">
				<h1 class="info__form__daerah__tujuan">DATA DAERAH TUJUAN</h1>
				<p class="nokk">1. Nomor Kartu Keluarga</p>
				<table class="isi__nokk">
					<tbody>
						<tr>
							<?php
								for($i = 0 ; $i < 16 ; $i++){
									echo "<td style='width: 3em;border: 1px solid black;padding: 0 1px;text-align: center;'></td>";
								}
							 ?>

						</tr>
					</tbody>
				</table>
				<p class="kepala__keluarga">2. Nama Kepala Keluarga</p>
				<p class="isi__kepala__keluarga" style="height: 14px;"></p>
				<p class="nokk">3. NIK Kepala Keluarga</p>
				<table class="isi__nokk">
					<tbody>
						<tr>
								<?php
								for($i = 0 ; $i < 16 ; $i++){
									echo "<td style='width: 3em;border: 1px solid black;padding: 0 1px;text-align: center;'></td>";
								}
							 ?>
						</tr>
					</tbody>
				</table>
				<p class="status__kk__pdh">4. Status KK Bagi yang Tidak Pindah</p>
				<div class="isi__alasan">
					<div class="selected__alasan" style="height: 15px; width: 30%;"></div>
					<span class="pilihan__alasan nump__kk__pdh">1. Numpang KK</span>
					<span class="pilihan__alasan mb__kk__baru">2.Membuat KK Baru</span>
					<span class="pilihan__alasan kep__kel__tetap">3. Nama Kepala Keluarga dan Nomor KK Tetap</span>
				</div>

				<p class="rencana__pdh">5. Rencana Tanggal Pindah</p>
				<table class="isi__tgl__pdh">
					<tbody>
						<tr>
							<td class="td__tgl__pind" style="height: 14px;"></td>
							<td class="td__tgl__pind" style="height: 14px;"></td>
							<td class="td__tgl__pind kosong"></td>
							<td class="td__tgl__pind" style="height: 14px;"></td>
							<td class="td__tgl__pind" style="height: 14px;"></td>
							<td class="td__tgl__pind kosong"></td>
							<td class="td__tgl__pind" style="height: 14px;"></td>
							<td class="td__tgl__pind" style="height: 14px;"></td>
							<td class="td__tgl__pind" style="height: 14px;"></td>
							<td class="td__tgl__pind" style="height: 14px;"></td>
						</tr>
					</tbody>
				</table>

				<p class="alamat">6. Alamat</p>
				<p class="isi__alamat" style="height:14px;"></p>

				<p class="rt">RT <span class="rtrw" style="margin-left: 10px;padding: 3px 10px;"></span><span class="rtrw" style="padding: 3px 10px;"></span></p>

				<p class="rw">RW <span class="rtrw" style="margin-left: 10px;padding: 3px 10px;"></span><span class="rtrw" style="padding: 3px 10px;"></span></p>


				<p class="desa">a. Desa/Kelurahan</p>
				<p class="isi__desa" style="height: 14px;"></p>

				<p class="kab">c. Kab/Kota</p>
				<p class="isi__kab" style="height: 14px;"></p>

				<p class="kec">b. Kecamatan</p>
				<p class="isi__kec" style="height: 14px;"></p>

				<p class="prop">d. Propinsi</p>
				<p class="isi__prop" style="height: 14px;"></p>

								<p class="kel__pindah">8. Keluarga Yang Datang</p>
				<table class="table__kel__pindah">
					<thead>
						<tr>
							<th style="width: 79px;">NO</th>
							<th colspan="16" style="width: 191px;">NIK</th>
							<th colspan="2" style="width: 64px;">NAMA</th>
							<th colspan="2">SHDK</th>
						</tr>
					</thead>
					<tbody>
						<?php for($i =0 ; $i <7 ; $i++){
							include('tb_anggota_kk_datang.php');
						} ?>
					</tbody>
				</table>

				<div class="tanda__tangan" style="margin: 0 auto;">
					<div class="camat camat__datang">
						<p>Diketahui oleh:</p>
						<p>Camat</p>
						<p style="margin-bottom: 30px;">No. ........... Tgl......20....</p>
						<p>(.................................)</p>
						<p>NIP.</p>
					</div>

					<div class="kades">
						<p>Diterima Oleh:</p>
						<p style="margin-bottom: 45px;">Kepala Desa/Lurah</p>
						<p>(.................................)</p>
						<p>NIP.</p>
					</div>
				</div>




			</div>

	</main>
	<script>
		window.print();
	</script>
</body>
</html>
