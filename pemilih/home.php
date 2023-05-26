<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pemilihan Ketua OSIS SMK Batik Perbaik</title>

	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="https://file.smkbatikpwrj.sch.id/assets/plugins/fontawesome-free/css/all.min.css">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  	<style type="text/css">
  		.login{
  			position: fixed;
		    right: 1.25rem;
		    z-index: 1032;
		    opacity: 0.7;
  		}
  	</style>
</head>
<body>

	<div class="container">
		<a href="<?=base_url('user/');?>" class="login">
			<button class="btn btn-warning" style="font-weight: bold;">Login</button>
		</a>
		<?php 
			foreach ($tahun_depan as $value) {
				$tahun_akan_datang  = $value['tahun_pemilu'];
			}

			foreach ($aktif as $key) {
				// print_r($key);
				$tahun_pemilu = $key['tahun_pemilu'];
			}
			if (!$tahun) {
				if ($tahun_depan) {
			?>
					<div class="card-body">
					    <section class="py-5 text-center container">
						    <div class="row py-lg-5">
						      <div class="col-lg-6 col-md-8 mx-auto">
						        <h2 class="fw-light">Aplikasi Pemilihan Berbasis WEB <br/>SMK Batik Perbaik</h2>
						        <p class="lead text-muted">Maaf Tidak Ada Pemilihan Untuk Saat ini</p><br/>
						        <p class="lead text-muted">Pemilihan Tahun <b><?php echo $tahun_akan_datang ?></b>
						        	Akan Di Laksanakan Harap Tunggu, Terima Kasih
						        </p>
						      </div>
						    </div>
			  			</section>
					</div>
			<?php
					} else {
						if ($aktif) {
						?>
							<div class="card-body">
							    <section class="py-5 text-center container">
								    <div class="row py-lg-5">
								      <div class="col-lg-6 col-md-8 mx-auto">
								        <h2 class="fw-light">Aplikasi Pemilihan Berbasis WEB <br/>SMK Batik Perbaik</h2>
								        <p class="lead text-muted">Hasil Pemilihan tahun 
								        	<b>
								        		<?php 
													echo $tahun_pemilu;
													$this->load->view('admin/info_pemilu');
												 ?>	
								        	</b>
								        </p>
								      </div>
								    </div>
					  			</section>
							</div>
						<?php
						} else {
						?>
							<div class="card-body">
							    <section class="py-5 text-center container">
								    <div class="row py-lg-5">
								      <div class="col-lg-6 col-md-8 mx-auto">
								        <h2 class="fw-light">Aplikasi Pemilihan Berbasis WEB <br/>SMK Batik Perbaik</h2>
								        <p class="lead text-muted">Maaf Tidak Ada Pemilihan Untuk Saat ini</p><br/>
								        </p>
								      </div>
								    </div>
					  			</section>
							</div>
						<?php
						}
						
			?>			
			<?php
				}
			}else {
			?>
				<div class="card mt-3">
				  <div class="card-body">
				    <section class="py-5 text-center container">
					    <div class="row py-lg-5">
					      <div class="col-lg-6 col-md-8 mx-auto">
					        <h1 class="fw-light">Pemilihan Ketua OSIS <br/>SMK Batik Perbaik</h1>
					        <p class="lead text-muted">Pemilihan Ketua OSIS Tahun 2023 telah dimulai dan akan dilaksanakan sampai tanggal 20 September 2023, klik tombol di bawah ini untuk melakukan pemilihan, jika ingin melihat data calon silahkan scroll ke bawah</p>

					        <a href="<?=base_url('pemilih/pilih')?>" class="btn btn-success btn-block">
					        	<b>Pilih Calon</b>
					        </a>
					      </div>
					    </div>
		  			</section>
				  </div>
				</div>
				<div class="card card-dark">
				  <div class="card-header">
				  	Calon Ketua dan Wakil ketua OSIS periode 2023/2024
				  </div>
				 <div class="card-body">
				  	<div class="row">   
			          	<?php 
			          		$no =0;
			          		foreach ($list as $value) {
			          			++$no;
			          	?>
				          	<div class="col-md-4">
				          		<div class="card">
						            <div class="card-body box-profile">
						                <div class="text-center">
						<?php 
							switch ($no) {
								case 1:
						?>
									<img class="profile-user-img img-fluid" src="<?=base_url('assets/images/ca_02/foto_profil2.jpg')?>">
						<?php
									break;
								case 2:
						?>
									
									<img class="profile-user-img img-fluid" src="<?=base_url('assets/images/ca_03/foto_profil3.jpg')?>">
						<?php
									break;
								case 3:
						?>
									
									<img class="profile-user-img img-fluid" src="<?=base_url('assets/images/ca_01/foto_profil.jpg')?>">
						<?php
									break;
								default:
						?>
									 <img class="profile-user-img img-fluid" src="<?=base_url('assets/images/Sayu.jpg')?>" alt="User profile picture">
						<?php				
									break;
							}
						 ?>				                 
						                </div>
						                <h3 class="profile-username text-center"><?= $value['nama'] . " dan " . $value['nama_wakil']?></h3>
						                <p class="text-muted text-center">
						                	<b>Calon No. <?=$no ;?></b>
						                </p>
						                <a href="#calon_<?=$no;?>" class="btn btn-primary btn-block"><b>Lihat Profil</b></a>
						            </div>
					        	</div>
					        </div>
			          	<?php
			          		}
			          	 ?>    
				       </div>
				  </div>
				  <!-- /.card-body -->
				</div>

				<?php 
				$calon = 0;
					foreach ($list as $data) {
						++$calon
				?>
					<div class="card card-dark" id="calon_<?=$calon?>">
					  <div class="card-header">
					  	Profil Calon No.<?= $calon;?>
					  </div>
					  <div class="card-body">
			            <strong><i class="fas fa-book mr-1"></i> Biodata</strong>
			            <div class="row">
					        <div class="col-md-6">
					        	<div class="card card-secondary">
					        		<div class="card-header">
					        			Calon Ketua No.<?=$calon;?>
					        		</div>
					        		<div class="card-body">
					        			<strong>Video Kampanye</strong>
						              	<div class="text-center">
							              <img class="profile-user-img img-fluid" src="http://localhost/aset/assets/images/user.png" alt="User profile picture">
							            </div>
							            <hr>
							            <strong>Nama</strong>
						              	<div class="text-muted">
							              <?=$data['nama']; ?>
							            </div>
							            <hr>
							            
							            <strong>Pengalaman ORGANISASI</strong>
						              	<div class="text-muted">
							             <?=$data['peng_organisasi']?>
							            </div>
							            <hr>
							            <strong>Kelas</strong>
						              	<div class="text-muted">
							             	<?=$data['kelas']; ?>
							            </div>
							            
							        </div>
					        	</div>
					    	</div>
					    	<div class="col-md-6">
					    		<div class="card card-secondary">
					        		<div class="card-header">
					        			Calon Wakil Ketua No.<?=$calon;?>
					        		</div>
					        		<div class="card-body">
					        			<strong>Video</strong>
						              	<div class="text-center">
							              <img class="profile-user-img img-fluid" src="http://localhost/aset/assets/images/user.png" alt="User profile picture">
							            </div>
							            <hr>
							            <strong>Nama</strong>
						              	<div class="text-muted">
							              <?=$data['nama_wakil']; ?>
							            </div>
							            <hr>
							            <strong>Pengalaman ORGANISASI</strong>
						              	<div class="text-muted">
							              <?=$data['peng_organisasi_wakil']?>
							            </div>
							            <hr>
							            <strong>Kelas</strong>
						              	<div class="text-muted">
							             	<?=$data['kelas_wakil']; ?>
							            </div>					
							        </div>
					        	</div>
					    	</div>
					    </div>
			            <hr>

			            <strong><i class="far fa-file-alt mr-1"></i> Visi dan Misi</strong>
			            <p class="text-muted">
			            	<div class="row">
			            		<div class="col-sm-6">
			            			<div class="card card-secondary">
				            			<div class="card-header">
				            				Visi
				            			</div>
				            			<div class="card-body">
				            				<?php  echo $data['visi'] ?>
				            			</div>
				            		</div>
			            		</div>
			            		<div class="col-sm-6">
			            			<div class="card card-secondary ">
				            			<div class="card-header">
				            				Misi
				            			</div>
				            			<div class="card-body">
				            				<?php echo $data['misi']  ?>
				            			</div>
				            		</div>
			            		</div>
			            	</div>
			            </p>
					  </div>
					</div>
			<?php		
				}
			 ?>
			 <div>
			 	<a href="<?=base_url('pemilih/pilih')?>" class="btn btn-success btn-block mb-4">
		        	<b>Pilih Calon</b>
		        </a>
			 </div>
			<?php
			}
			 ?>
		 <!-- tombol back to atas -->
		<a id="back-to-top" href="#" class="btn btn-success back-to-top" role="button" aria-label="Scroll to top" style="opacity: 0.7">
	      <i class="fas fa-chevron-up"></i>
	    </a>
	</div>
<!-- jQuery -->
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="<?=base_url('assets/')?>dist/js/adminlte.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>

<!-- 
	//CONTROLER
		public function home_pemilih()
		{
			$this->load->model('pemilih_model');

			$data['list'] = $this->pemilih_model->data();
			$this->load->view('pemilih/home', $data);
		}
	//MODEL
		public function data(){
				// $data = $this->db->get('')->result_array();

				$list = $this->db->query('select * from data_pribadi cross join data_caketos_cawalos where data_pribadi.id_user = data_caketos_cawalos.id_user')->result_array();	

				return $list;
		}

 -->