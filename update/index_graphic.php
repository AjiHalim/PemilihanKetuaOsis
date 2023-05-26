<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/x-icon" href="<?=base_url('assets/images/')?>Smk_batik300.png">
	<title>SMK BATIK PERBAIK | PEMILOS 2022</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://file.smkbatikpwrj.sch.id/assets/plugins/fontawesome-free/css/all.min.css">
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

	<link rel="stylesheet" href="https://file.smkbatikpwrj.sch.id/assets/plugins/sweetalert2/sweetalert2.min.css">
</head>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Raleway&family=Roboto&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Raleway&family=Roboto&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
	* {
		margin: 0;
		font-family: 'Poppins', sans-serif;
		font-family: 'Raleway', sans-serif;
		font-family: 'Roboto', sans-serif;
		/*box-sizing: border-box;*/
	}
	body {
		/*background-color: red;*/
	}
	div.jumbo-pemilos {
		position: relative;
		background-image: url("<?=base_url('assets/images/')?>bg_about.png");
		box-shadow: 3px 3px 3px #888888;
	}

	.container-md {
		padding-left: 0;
		padding-right: 0;
	}

	div.jumbo-pemilos:before {
	  	content: ' ';
	  	display: block;
	  	position: absolute;
	  	left: 0;
	  	top: 0;
	  	width: 100%;
	  	height: 100%;
	  	opacity: 0.2;
	  	background-image: url("<?=base_url('assets/images/')?>Smk_batik300.png");
	  	background-repeat: no-repeat;
  		background-position: 90% 50%;
  		/*background-position: right;*/
	}

  	div.jumbo-pemilos p {
    	color: red;
  	}

  	div.pemilos-vote .card {
  		border: 0px solid;
  		border-bottom: 5px dotted #f6dc67ab;
  		border-radius: 0px;
  	}

	article div.pemilos-chart div.card.card-danger {
		border: 0px;
	}

	article div.pemilos-chart h2,
  	article div.pemilos-vote h2,
  	article div.gallery-event h2,
  	article div.profil-event h2 {
  		background-color: gold;
  		background-image: url("<?=base_url('assets/images/')?>header.jpg");
  		color: white;
  		padding-top: 15px;
  		padding-bottom: 15px;
  		font-size: 24px;
  		box-shadow: 3px 3px 3px #888888;
  	}

  	article div.gallery-event .carousel.slide {
  		max-width: 600px;
  		/*text-align: center;*/
  		margin: auto;
  	}

  	article div.galery-photo {
  		background-image: url("<?=base_url('assets/images/')?>bg_about.png");
  		padding-bottom: 15px;
  	}

  	article div.profil-event {
  		background-image: url("<?=base_url('assets/images/')?>contact_bg.jpg");
  	}

  	div.pemilos-chart img.candidate-img,
  	div.pemilos-vote img.candidate-img {
  		max-width: 200px;
  		max-height: 200px;
  		object-fit: cover;
  		margin: 5px auto;
  		background-color: lightblue;
  		border-radius: 100px;
  		border: #f6dc67ab solid 15px;
  		box-shadow: 3px 3px 3px #888888;
  	}

  	.copyright {
  		margin-top: 35px;
  		padding-bottom: 35px;
  		background-color: black;
  		color: white;
  		box-shadow: 3px 3px 3px #888888;
  	}
  	.copyright p {
	    border-top: #909090 solid 1px;
	    color: #fff;
	    font-size: 17px;
	    line-height: 22px;
	    text-align: center;
	    padding-top: 25px;
	    margin-top: 25px;
	    font-weight: 400;
	}

	.copyright a {
	    color: #fff;
	    text-decoration: none;
	}

	.modal-paslon .modal-dialog .modal-content .modal-body {
		background-image: url("<?=base_url('assets/images/')?>bg_about.png");
		/*min-height: 700px;*/
	}

	.pemilos-vote .card-body h5 {
		min-height: 120px;
	}

	.modal-paslon img {
		max-width: 300px;
		max-height: 300px;
		border: 15px solid gold;
		border-radius: 150px;
		object-fit: cover;
		box-shadow: 3px 3px 3px #888888;
	}

	.modal-paslon .card .card-body {
		min-height: 240px; 
	}

	.modal-paslon .card .card-vm {
		text-align: left;
	}

	.modal-pilih-kandidat .modal-body {
		text-align: center;
	}

	.modal-pilih-kandidat img {
		max-width: 140px;
		max-height: 140px;
		border: 7px solid gold;
		border-radius: 70px;
		object-fit: cover;
		box-shadow: 3px 3px 3px #888888;
	}


	div.pemilos-vote div.card {
  		position: relative;
		/* background-color: lightgoldenrodyellow; */
  	}

  	div.pemilos-vote div.candidate-no {
	  	text-align: center;
	}

	div.pemilos-chart div.candidate-no h1,
	div.pemilos-vote div.candidate-no h1 {
	  	position: absolute;
	  	/*text-align: center;*/
	  	font-size: 130px;
	  	top: 50%;
  		left: 50%;
  		transform: translate(-50%, -110%);
  		color: white;
  		text-shadow: 3px 3px 3px #888888;
  		opacity: 40%;
	}
	div.pemilos-chart div.candidate-no h1 {
		transform: translate(-50%, -90%);
	}
	.login{
  			position: fixed;
		    right: 1.25rem;
		    z-index: 1032;
			top: 1.25rem;
		    opacity: 0.7;
  	}

  	.pemilos-chart .final-election {
  		text-align: center;
		margin-left: 10px;
		margin-right: 10px;

  	}

  	.final-election .card{
  		border: 1px solid red;
		margin-left: 10px;
		margin-right: 10px;
  	}
	@media only screen and (max-width: 991px) {
	  div.jumbo-pemilos h1,
	  div.jumbo-pemilos h2 {
	    background-color: black;
	    color: white;
	    text-align: center;
		padding: 5px;
	  }
	  div.jumbo-pemilos p {
	    background-color: black;
	    color: red;
	    width: 100%;
	    text-align: center;
	  }
	  /*.card.coba {
	  	width: 1000px;
	  }*/
	  
  	}

</style>
<body>
	<div class="container-md">
		<header>
			<a href="<?=base_url('user/');?>" class="login">
				<button class="btn btn-warning" style="font-weight: bold;">Login</button>
			</a>
		<div class="p-5 mb-0 bg-light rounded-0 jumbo-pemilos">
		  	<div class="container-fluid py-5">
			  <h1 class="display-5 fw-bold">SMK BATIK PERBAIK</h1>
			  <h2 class="display-9 fw-bold">PEMILIHAN KETUA OSIS 2022/2023</h2>
			  <p class="col-md-8 fs-4">Ayo!!! <strong>Gunakan Hak Suaramu.</strong></p>
			  <!-- <button class="btn btn-primary btn-lg" type="button">Pilih Calon</button> -->
			</div>
		</div>
		</header>
		<content>
			<!-- <article>
			<?php
			if (isset($_SESSION['success'])) {
			?>
				<div class="alert alert-success mt-3" role="success">
				<?=$_SESSION['success']?>
				</div>
			<?php
			}
			?>
			<?php
			if (isset($_SESSION['error'])) {
			?>
				<div class="alert alert-danger mt-3" role="danger">
				<?=$_SESSION['error']?>
				</div>
			<?php
			}
			?>
			</article> -->
			<article>
				<div class="pemilos-chart mt-3">
					<h2 class="text-center">GRAFIK PEMILIHAN</h2>
					<?php
					if ($tahundipilih['status'] == 1) {
					?>
		            <div class="row">
						<div class="col">
							<!-- PIE CHART -->
				            <div class="card card-danger">
				              <div class="card-body">
				                <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
				              </div>
				              <!-- /.card-body -->
				            </div>
						</div>
					</div>
					<?php
					}
					?>
					<?php
					if ($tahundipilih['status'] == 0) {
					?>
					<div class="row final-election">
						<div class="col">
							<h3>Pemilihan Telah Berakhir</h3>
							<p>Terima kasih telah menggunakan hak pilih yang kalian miliki untuk berpartisipasi dalam pemilihan<br/>Selamat untuk calon yang terpilih, semoga dapat mengemban amanat sebaik-baiknya untuk satu tahun ke depan.</p>
							<p>Berdasarkan keseluruhan data suara yang masuk maka hasil pemilihan Ketua dan Wakil ketua OSIS tahun 2022/2023 adalah sebagai berikut :</p>
						</div>
					</div>
					
					<div class="row final-election">
						<div class="col-md-6">
							<h3>Suara Terbanyak</h3>
					    	<div class="card mb-5">
								<div class="candidate-no">
							  		<img src="<?=base_url('assets/images/profil/'.$chart_hasilpemilihan['pemenang']['foto_paslon'])?>" class="card-img-top candidate-img" alt="Calon_<?=$chart_hasilpemilihan['pemenang']['id_seri']?>">
									<h1><?=$chart_hasilpemilihan['pemenang']['id_seri']?></h1>	
							  	</div>
							  <div class="card-body">
							    <h5 class="card-title text-center"><?=$chart_hasilpemilihan['pemenang']['nama']?> <br/>&<br/> <?=$chart_hasilpemilihan['pemenang']['nama_wakil']?></h5>
							  </div>
							</div>
						</div>
						<div class="col-md-6">
							<!-- PIE CHART WINNER-->
							<h3>Statistik Hasil Pemilihan</h3>
				            <div class="card">
				              <div class="card-body">
				                <canvas id="pieChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
				              </div>
				              <!-- /.card-body -->
				            </div>
						</div>
					</div>
					<?php
					}
					?>
				</div>
			</article>
			<article>
				<div class="pemilos-vote mt-3">
					<h2 class="text-center">PASANGAN CALON</h2>
					<div class="row gx-2 mb-3">
						<?php
						foreach ($data_calon as $key_data => $value_data) {
						?>
						<div class="col-sm-4 mt-1">
					    	<div class="card mb-5">
								<div class="candidate-no">
							  		<img src="<?=base_url('assets/images/profil/'.$value_data['foto_paslon'])?>" class="card-img-top candidate-img" alt="Calon_<?=$value_data['id_seri']?>">
									<h1><?=$value_data['id_seri']?></h1>	
							  	</div>
							  <div class="card-body">
							    <h5 class="card-title text-center"><?=$value_data['nama']?> <br/>&<br/> <?=$value_data['nama_wakil']?></h5>
							    <div class="text-center">
									<?php
									if ($tahundipilih['status'] == 1) {
									?>
							    	<button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#selectcandidate_<?=$value_data['id_seri']?>">PILIH No.<?=$value_data['id_seri']?></button>
							    	<?php } ?>
									<button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#profil_paslon_<?=$value_data['id_seri']?>">CEK PROFIL</button>
								</div>
							  </div>
							</div>
					    </div>
						<?php
						}
						?>
					</div>
				</div>
			</article>
			<!--<article>-->
			<!--	<div class="gallery-event galery-photo">-->
			<!--		<h2 class="text-center">GALERI</h2>	-->
			<!--		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">-->
			<!--		  <div class="carousel-indicators">-->
			<!--		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>-->
			<!--		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>-->
			<!--		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
			<!--		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>-->
			<!--		  </div>-->
			<!--		  <div class="carousel-inner">-->
			<!--		    <div class="carousel-item active">-->
			<!--		      <img src="<?=base_url('assets/images/')?>galeri/1.jpg" class="d-block w-100" alt="semua">-->
			<!--		    </div>-->
			<!--		    <div class="carousel-item">-->
			<!--		      <img src="<?=base_url('assets/images/')?>galeri/no1.jpg" class="d-block w-100" alt="kandidat no 1">-->
			<!--		    </div>-->
			<!--		    <div class="carousel-item">-->
			<!--		      <img src="<?=base_url('assets/images/')?>galeri/no2.jpg" class="d-block w-100" alt="kandidat no 2">-->
			<!--		    </div>-->
			<!--		    <div class="carousel-item">-->
			<!--		      <img src="<?=base_url('assets/images/')?>galeri/no3.jpg" class="d-block w-100" alt="kandidat no 3">-->
			<!--		    </div>-->
			<!--		  </div>-->
			<!--		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">-->
			<!--		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
			<!--		    <span class="visually-hidden">Previous</span>-->
			<!--		  </button>-->
			<!--		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">-->
			<!--		    <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
			<!--		    <span class="visually-hidden">Next</span>-->
			<!--		  </button>-->
			<!--		</div>-->
			<!--	</div>-->
			<!--</article>-->
			<!--<article>-->
				<div class="gallery-event galery-video">
					<h2 class="text-center mt-3">VIDEO PASLON</h2>	
					<div class="row row-cols-1 row-cols-md-3 g-4">
					  <div class="col">
					    <div class="card">
					      <iframe height="300px" src="https://www.youtube.com/embed/buzPmWO1mE4" title="PASLON KETUA DAN WAKIL KETUA OSIS SMK BATIK PERBAIK PURWOREJO PERIODE 2022/2023 KANDIDAT NO 01" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					    </div>

					    <!-- https://youtu.be/tcjk3xyNKk4 Harus Lengkap -->
					    <!-- https://youtu.be/buzPmWO1mE4 
							embed harus ketambahan ini
					    -->
					  </div>
					  <div class="col">
					    <div class="card">
					      <iframe height="300" src="https://www.youtube.com/embed/L4y8VFixpQc" title="PASLON KETUA DAN WAKIL KETUA OSIS SMK BATIK PERBAIK PURWOREJO PERIODE 2022/2023 KANDIDAT NOMER 02" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					    </div>
					  </div>
					  <div class="col">
					    <div class="card">
					      <iframe height="300" src="https://www.youtube.com/embed/Zchl7WUVn7A" title="PASLON KETUA DAN WAKIL KETUA OSIS SMK BATIK PERBAIK PURWOREJO PERIODE 2022/2023 KANDIDAT NO 03" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					    </div>
					  </div>
					  <?php 
					  $no = 0;
					  	foreach ($kerja as $value) {
					  		?>
					  			<div class="col">
								    <div class="card coba">
								     <?php 
								     	echo $value['video'];
								      ?>
								    </div>
								</div>
					  		<?php
					  	}
					   ?>
					</div>
				</div>
			</article>
		</content>
		<footer>
			<div class="copyright">
		      <div class="container">
		        <div class="row">
		          <div class="col-md-10 offset-md-1">
		            <p>Copyright 2022  OSIS SMK BATIK PERBAIK PURWOREJO. By <a target="_blank" rel="nofollow noopener" href="#">RPL-SMK BATIK</a></p>
		          </div>
		        </div>
		      </div>
		    </div>
		</footer>

	</div>
	<!-- akhir dari program -->

	<!-- Modal -->
	<?php
	foreach ($data_calon as $key_data => $value_data) {
	?>
	<div class="modal fade modal-paslon" id="profil_paslon_<?=$value_data['id_seri']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-fullscreen">
	    <div class="modal-content">
	      <!-- <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel"><strong>Profil Paslon 1</strong></h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div> -->
	      <div class="modal-body">
	        <div class="container text-center">
	        	<img src="<?=base_url('assets/images/profil/'.$value_data['foto_paslon'])?>" class="card-img-top candidate-img" alt="Calon_1">
				<div class="row">
				    <div class="col-lg-6 mt-2">
				      	<div class="card">
						  <div class="card-body">
						    <h5 class="card-title">Calon Ketua</h5>
						    <div>
						    	<p class="candidate-name"><strong><?=$value_data['nama']?></strong></p>
						    	<p class="card-text"><strong>Kelas :</strong> <?=$value_data['kelas']?></p>
						    	<p class="card-text"><strong>Organisasi :</strong><br/><?=$value_data['peng_organisasi']?></p>
						    </div>
						    
						  </div>
						</div>
				    </div>
				    <div class="col-lg-6 mt-2">
				    	<div class="card">
						  <div class="card-body">
						    <h5 class="card-title">Calon Wakil</h5>

						    <div>
						    	<p class="candidate-name"><strong><?=$value_data['nama_wakil']?></strong></p>
						    	<p class="card-text"><strong>Kelas :</strong> <?=$value_data['kelas_wakil']?></p>
						    	<p class="card-text"><strong>Organisasi :</strong><br/> <?=$value_data['peng_organisasi_wakil']?></p>
						    </div>
						  </div>
						</div>
				    </div>
				</div>
				<div class="row">
				    <div class="col-lg-12 mt-2">
				      	<div class="card">
						  <div class="card-body card-vm">
						    <h5 class="card-title">Visi</h5>
						    <div>
						    	<p><?=$value_data['visi']?></p>
						    </div>
						    <h5 class="card-title">Misi</h5>
						    <div>
						    	<p><?=$value_data['misi']?></p>
						    </div>
						  </div>
						</div>
				    </div>
				</div>
			</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
	      </div>
	    </div>
	  </div>
	</div>
	<?php } ?>

	<!-- Modal -->
	<?php
	if ($tahundipilih['status'] == 1) {
	foreach ($data_calon as $key_data => $value_data) {
	?>
	<div class="modal fade modal-pilih-kandidat" id="selectcandidate_<?=$value_data['id_seri']?>" tabindex="-1" aria-labelledby="modalselectcandidate" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="modalselectcandidate">kandidat Pilihanmu</h5>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      </div>
	      <div class="modal-body">
	       <form action="<?=base_url('pemilih/proses')?>"method= 'post' >
		       	<img src="<?=base_url('assets/images/profil/'.$value_data['foto_paslon'])?>" class="card-img-top candidate-img" alt="Calon_1">
		        <h5 class="card-title text-center mt-5 mb-5"><?=$value_data['nama']?> <br>&amp;<br> <?=$value_data['nama_wakil']?></h5>
		        <p>Jika sudah yakin dengan kandidat pilihanmu, silahkan masukkan kode <strong>TOKEN</strong> kemudian klik <strong>pilih</strong>, jika belum yakin silahkan tekan tombol <strong>batal</strong>.</p>
		        <div class="input-group mb-3 mt-5">
					<input type="text" name="pil_calon" hidden="" value="<?=$value_data['id_user']?>"> 
				  <span class="input-group-text" id="inputGroup-sizing-default">TOKEN</span>
				  <input oninvalid="this.setCustomValidity('Masukan 8 digit kode TOKEN disini')" required type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="kode" id="token_<?=$value_data['id_user']?>">
				</div>
	       
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-success" onclick="klikini('token_<?=$value_data['id_user']?>')">Pilih</button>
	        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
	      </div>
	     </form>
	    </div>
	  </div>
	</div>
	<?php } } ?>
	
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/jquery/jquery.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/chart.js/Chart.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/sweetalert2/sweetalert2.all.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script type="text/javascript">
	function klikini(id) {
		if($('#'+id).val() !== '') {
			$('.modal-pilih-kandidat').modal('hide');
			swal.showLoading();
		}
	}
	//-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
	<?php
	if ($tahundipilih['status'] == 1) {
	?>
    var pieData        = {
      labels: [
          'Suara Belum Digunakan',
          'Suara Digunakan',
      ],
      datasets: [
        {
          data: [<?=$statistik_suara['total_suara_belumdigunakan']?>,<?=$statistik_suara['total_suara_digunakan']?>],
          // backgroundColor : ['#f56954', '#00a65a'],
          backgroundColor : ['#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
        }
      ]
    }
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })
	<?php
	}
	?>
	<?php
	if ($tahundipilih['status'] == 0) {
	?>
    // PIE HASIL
    var pieDataHasil        = {
      labels: <?=json_encode($chart_hasilpemilihan['labels'])?>,
      datasets: [
        {
          data: <?=json_encode($chart_hasilpemilihan['datasets'])?>,
          // backgroundColor : ['#f56954', '#00a65a'],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de']
        }
      ]
    }
    var pieChartCanvas2 = $('#pieChart2').get(0).getContext('2d');
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas2, {
      type: 'pie',
      data: pieDataHasil,
      options: pieOptions
    })
	<?php
	}
	?>

	<?php if (isset($_SESSION['success'])) { ?>
	function sukes($pesan) {
		Swal.fire(
			'SELAMAT!',
			$pesan,
			'success'
		)
	}
	sukes('<?=$_SESSION['success']?>')
	<?php } ?>
	<?php if (isset($_SESSION['error'])) { ?>
	function gagal($pesan) {
		Swal.fire(
			'GAGAL MEMILIH!',
			$pesan,
			'error'
		)
	}
	gagal('<?=$_SESSION['error']?>')
	<?php } ?>
</script>
</body>
</html>