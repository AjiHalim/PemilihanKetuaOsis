<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.card{
			margin: auto;
			border-radius: 10%;
			width: 90%;
		}

		/*Untuk Login*/
		.login{
  			position: fixed;
		    right: 1.25rem;
		    z-index: 1032;
			top: 1.25rem;
		    opacity: 0.7;
  		}
	</style>
</head>
<body>
	<a href="<?=base_url('user/');?>" class="login">
		<button class="btn btn-secondary" style="font-weight: bold;">Login</button>
	</a>
	<?php 
		if ($pesan) {
			foreach ($selesai as $value) {
				$tahun_selesai = $value['tahun_selesai'];
			}
			?>
        		<div class="card mt-4">
        			<div class="card-header bg-warning">
        				<h3>Maaf Tidak ada Pemilian untuk saat ini</h3>
        			</div>
        		</div>

        		<div class="card mt-4">
        			<div class="card-header bg-success">
        				<h3>Pemilihan sebelumnya untuk tahun <?=$tahun_selesai?></h3>

        				<br/>

        				<p>
        					Selamat Atas terpilihnya  <b> <?=$listPemenang[0]['nama']?> dan <?=$listPemenang[0]['nama_wakil']?></b> Sebagai Ketua Osis dan Wakil Ketua Osis Yang Baru
        				</p>
        			</div>
        		</div>
			<?php
		}else if ($tahundisiapkan) {
			?>
				<div class="card mt-4">
        			<div class="card-header bg-info">
        				<h3>pemilihan tahun <?=$tahundisiapkan['tahun_pemilu']?> Akan Segera Di Laksanakan </h3>
        			</div>
        		</div>
			<?php
		}
		
	 ?>
</body>
</html>