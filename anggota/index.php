<?php
	 class Proses {

				public function konek()
				{
						$mysqli = new mysqli("localhost","hanasa","1","data_penduduk",3306);

						/* check connection */
						if ($mysqli->connect_errno) {
								printf("Connect failed: %s\n", $mysqli->connect_error);
								exit();
						}
						return $mysqli;
				}


				function select_kk(){
						$mysqli= $this->konek();
						$sql = "SELECT * FROM tb_kk JOIN tb_kepindah ON tb_kk.id_kk = tb_kepindah.id_kk";
						$result = $mysqli->query($sql);

						$data = [];
						while($row=$result->fetch_assoc()){
								$data[]=$row;
						}

						return $data;
				}


				public function response($data)
				{
						header('Content-Type: application/json');
						echo json_encode($data);
				}


				function select_anggota($id_kk){
						$mysqli= $this->konek();
						$sql = "Select * from tb_anggota JOIN tb_pdd ON tb_anggota.id_pend=tb_pdd.id_pend  where id_kk = {$id_kk} and status='Pindah'";
						$result = $mysqli->query($sql);
						$data = [];
						while($row=$result->fetch_assoc()){
								$data[]=$row;
						}
						return $data;
				}
	 }




		if(isset($_GET['kk']) && $_GET['kk']==0){
				$proses = new Proses;
				$proses->response($proses->select_kk());
		}


		if(isset($_GET['anggota']) && isset($_GET['kk'])){
				$proses      = new Proses;
				$id_kk = $_GET['kk'];
				$proses->response($proses->select_anggota($id_kk));
		}
 ?>
