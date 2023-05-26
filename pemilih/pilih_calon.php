<?php
 ?>
	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>pemilos | Boxed Layout</title>
	<title></title>
	<style type="text/css">
		.box {
			position: relative;
		}
		button.luncur {
			position: absolute;
			bottom: 10px;
			width: 90%;
		}
		/*untuk input type radionya */
		input[type="radio"] {
			height: 30px;
			cursor: pointer;
			-ms-transform: scale(2); /* Untu IE  */
		    -webkit-transform: scale(2); /* untuk Chrome, Mozilla,Safari, Opera */
		    transform: scale(2);
		}
		/*from-chek*/
		.form-check 
		{
			position:absolute;
	    	left: 37%;
		}
		

		@media screen and (max-width: 577px) {
			.box {
				margin-top: 7%;	
			}
		  .col-sm-4 {
		  	margin-bottom: 15%;
		  	/*border-top: 0.1px solid black;*/
		  	padding-top: 5%;
		  }
		  .form-check 
			{
				position:absolute;
		    	left: 45%;
			}
		}
	</style>
</head>
<body>
	
 <div class="card-body box" style="margin: auto;">
 	<div style="min-height: 170px;">
	 	<div class="card" style="width: 87%; margin: auto;">
			<div class="card-header">
				<h1 class="card-title" style="font-family: Heltavica;" class="btn btn-small btn-primary">Pilih Calon</h1>
				 <?php 
						// if (!is_null($pesan)) {
						if ($pesan) { ?>
						<div class="callout mt-4">
							<i>
								<b><?=$pesan?></b>
							</i>
						</div>
					<?php }if($error) {
					?>
						<div class="callout mt-4">
							<i>
								<b>Maaf Anda Harus MeMilih Calon</b>
							</i>
						</div>
					<?php
						} 
					?>
			</div>
			<div class="card-body" style="padding: 3% 5%">
				<table class="table table-bordered" style="margin-bottom: 80px; width: 350px;">
					<center>
						<form action="<?=base_url('pemilih/proses')?>" method="post">
							<div class="row align-items-start">
							   <?php $no =0;
							   		foreach ($list as $value) {
							   	?>
							   		<div class="col-sm-4">
								    	<h5 class="offset-sm-2 bg-secondary" style="margin: auto">Calon Ke. <?php echo ++$no?></h5>
								<?php
									switch ($no) {
										case 1:
								?>
											<img src="<?=base_url('assets/images/ca_02/foto_profil2.jpg')?>" class = "img-thumbnail">
								<?php
											break;
										case 2:
								?>	
											<img src="<?=base_url('assets/images/ca_03/foto_profil3.jpg')?>" class = "img-thumbnail">
								<?php
											break;
										case 3:
								?>
											<img src="<?=base_url('assets/images/ca_01/foto_profil.jpg')?>" class = "img-thumbnail">
								<?php
											break;
										
										default:
								?>
											<img src="<?=base_url('assets/images/satu.png')?>" class = "img-thumbnail">
								<?php
											break;
									}
								  ?>
								    	
								      	<div class="flex-container">
											<div class="offset-sm-2 col-sm-10">
												<div class="form-check">
												  <input class="form-check-input" type="radio" value="calon_<?=$no;?>" id="flexCheckDefault" name ="pil_calon">
												</div>

											</div>
										</div>
								    </div>
							   	<?php		
							   		}
							    ?>
							    
					  	<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary btn-block luncur" data-toggle="modal" data-target="#exampleModal">
							  Pilih Calon
							</button>
								<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Masukan Kode Random</h5>
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							          <h3 aria-hidden="true">&times;</h3>
							        </button>
							      </div>
							      <div class="modal-body">
							      		<div class="card-body" style="padding-top: 30px">
								            <input type="text" class="form-control" id="inputEmail3" placeholder="Silahkan isi Kode random untuk melanjutkan."
								            name="kode">
								            <p class="help-block mt-3"><i>Klik Tombol / lambang <b>"x"</b>Di atas,  jika ingin Membatalkan Pemilihan dan Kembali Ke Halaman Pilih Calon</i></p>
								        </div>
							      </div>
							      <div class="modal-footer row justify-content-around">
							        <button type="submit" class="btn btn-primary col-sm-10" name="kirim">Kirim</button>
							      </div>
							    </div>
							  </div>
							</div>
						</form>
					</center>
				</table>
			</div>
		</div>
	</div>
</div>

</body>
</html>
<?php  ?>
<!-- 
	// controlernyya
		$this->load->model('pemilih_model');

		$data['list'] = $this->pemilih_model->foto();
	//modelnya 

	public function foto(){
		$this->db->select('id_pribadi');
		$data = $this->db->get('data_pribadi')->result_array();
			
		return $data;
	}
-->
	
