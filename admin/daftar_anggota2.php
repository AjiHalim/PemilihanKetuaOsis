<?php  
?>
<div class="content-wrapper">
	<section class="content mt-3">
		<?php echo @$_SESSION['hapus']; ?> 
		<?php echo @$_SESSION['upgrade']; ?> 
      <div class="card" >
        <!-- <form action="<?=base_url('calon/proses_update')?>" method="post" > -->
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Admin </a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Anggota</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Calon</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    
							<div class="table-responsive ">
						 		<table class="table mt-1">
								  <thead class="bg-info">
								    <tr class="table-active">
								      <th scope="col" style="width: 3%">No</th>
								      <th scope="col">Username</th>
								      <th scope="col">Status</th>
								    </tr>
								  </thead>
									<?php 
									  	$hitung = 0;
									  	$jumlah = 0;
									  	foreach ($admin as $a ) {
									  		$jumlah +=1;
								  	?>
								  	<tbody>
								  		 <tr class = 'table-active' style="font-weight: bold;">
								  		 	<td><?php echo ++$hitung?></td>
								  			 <td><?php echo $a['username'] ?></td>
								  			 <td>Aktif</td>
								  		 </tr>
								  	</tbody>	 
							  	<?php } ?>
								</table>
								<i><?php echo "<h5> Jumlah Admin : " .$jumlah . "</h5>" ?></i>
							</div>

						
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">                    
                      <div class="table-responsive ">
					 		<table class="table mt-1">
							  <thead class="bg-info">
							    <tr class="table-active" style="font-weight: bold;">
							      <th scope="col" style="width: 3%">No</th>
							      <th scope="col">Username</th>
							      <th scope="col">Status</th>
							      <th scope="col">Putusan</th>				      
							    </tr>
							  </thead>

							  	<?php 
								  	$hitung = 0;
								  	$jumlah = 0;
								  	foreach ($anggota as $a ){
								  		$jumlah +=1; 
								  		// $id = $a['id_user'];
							  	?>
								  	<tbody>
								  	<tr class = 'table-active' style="font-weight: bold;" >
								  		 	<td><?php echo ++$hitung?></td>
								  			 <td><?php echo $a['username'] ?></td>
								  			 <td>Aktif</td>
								  			 <td class="row">
								  			 	<a href="#" class="col-sm-6">
								  			 		<div class="btn btn-secondary"  data-toggle="modal" data-target="#exampleModalCenter_<?=$a['id_user']?>">Info Akun</div>
								  			 	</a>
								  			 	<a href="#" class="col-sm-6">
								  			 		<div class="btn btn-warning " data-toggle="modal" data-target="#exampleM_<?=$a['id_user']?>">Edit Status</div>
								  			 	</a>
								  			 </td>
								  		 </tr>
								  	</tbody>	 
							  	<?php } ?>
							</table>
							<i><?php echo "<h5> Jumlah Anggota : " .$jumlah . "</h5>" ?></i>
						</div>
                  </div>
                  <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                 
						<div class="table-responsive ">
					 		<table class="table mt-1">
							  <thead class="bg-info">
							     <tr class="table-active" >
							      <th scope="col" style="width: 3%">No</th>
							      <th scope="col">Username</th>
							      <th scope="col">Status</th>
							      <th scope="col">Info</th>
							    </tr>
							  </thead>
								<?php 
								  	$hitung = 0;
								  	$jumlah = 0;
								  	foreach ($calon as $a ) {
								  		$jumlah +=1;
							  	?>
								  	<tbody>
								  		 <tr class = 'table-active' style="font-weight: bold;">
								  		 	<td><?php echo ++$hitung?></td>
								  			 <td><?php echo $a['username'] ?></td>
								  			 <td>Aktif</td>
								  			 <td class="row">
								  			 	<div class="btn btn-warning col-sm-5" data-toggle="modal" data-target="#example2_<?=$a['id_user']?>">Info Calon</div>		<div class="btn btn-danger col-sm-5" data-toggle="modal" data-target="#example_<?=$a['id_user']?>">Hapus</div>
								  			 	
								  			 </td>
								  		 </tr>
								  	</tbody>	 
							  	<?php } ?>
							</table>
							<i><?php echo "<h5> Jumlah Calon Ketua Osis dan Wakil Ketua Osis : " .$jumlah . "</h5>" ?></i>
						</div>
					
              </div>
                  <!-- /.tab-pane -->
            </div>
                <!-- /.tab-content -->
          </div><!-- /.card-body -->   
      </div>
    </section>
</div>
<!-- keputusan  hapus -->
<?php 
$no = 0;
	foreach ($calon as $a ){
		?>
			<div class="modal fade" id="example_<?=$a['id_user']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Apa Anda Yakin Ingin Data</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <center>
			      	<div class="modal-body row">
  						<b>
  							Calon Atas Username : <?= $a['username'];?><br>
  							Tahun Calon : <?= $a['tahun_pemilu']?>
  						</b> 
			      	</div>
			      <div class="modal-footer row" style="display: block;">
			      	<div class="row">
			      		<a href="<?=base_url('admin/anggota')?>" class="col-sm-6">
			      			<button class="btn btn-primary">NO</button>
				      	</a>
				      	<a href="<?=base_url('admin/delete/').$a['id_user']?>" class="col-sm-6">
				      		<button class="btn btn-danger" data-toggle="modal" data-target=".bd-example-modal-sm">Yes</button>
				      	</a>
			      	</div>
			      </div>
			      </center>
			    </div>
			  </div>
			</div>

  			<!-- info calon -->
			<div class="modal fade bd-example-modal-lg" id="example2_<?=$a['id_user']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100% !important">
			  <div class="modal-dialog modal-lg" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Info Lengkap Calon</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			      </div>
			      <center>
			      	<div class="modal-body row" >
  						<b>
  							<table class="table table-bordered" >
							  <thead style="width: 100% !important;">
							    <tr>
							      <th scope="col">NO</th>
							      <th scope="col">Username</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row"><?= ++$no?></th>
							      <td><?= $a['username']?></td>
							  </tbody>
							</table>

							<div class="row mt-2 mb-2">
								
								  <div class="icon col-sm-3">
			                       <strong><i class="fas fa-user mr-1"></i>Nama</strong>
			                        <p class="text-muted">
			                            <?php echo $a['nama'];?>
			                        </p>
			                      </div>
			                      <div class="icon col-sm-3">
			                        <strong><i class="fa fa-phone mr-1"></i> NO-HP</strong>
			                        <p class="text-muted"><?php echo $a['no-hp'];?></p>
			                      </div>
			                      <div class="icon col-sm-3">
			                        <strong><i class="fa fa-map-marker mr-1"></i> Alamat</strong>
			                        <p class="text-muted"><?php echo $a['alamat']; ?></p>
			                      </div>
			                      <div class="icon col-sm-3">
			                        <strong><i class="fa fa-id-card mr-1"></i>KELAS</strong>
			                        <p class="text-muted"><?php echo $a['kelas']; ?></p>
			                      </div>

									<!-- Wakil -->

								  <div class="icon col-sm-3">
			                       <strong><i class="fas fa-user mr-1"></i>Nama Wakil</strong>
			                        <p class="text-muted">
			                            <?php echo $a['nama_wakil'];?>
			                        </p>
			                      </div>
			                      <div class="icon col-sm-3">
			                        <strong><i class="fa fa-phone mr-1"></i> NO-HP Wakil</strong>
			                        <p class="text-muted"><?php echo $a['no_hp_wakil'];?></p>
			                      </div>
			                      <div class="icon col-sm-3">
			                        <strong><i class="fa fa-map-marker mr-1"></i> Alamat Wakil</strong>
			                        <p class="text-muted"><?php echo $a['alamat_wakil']; ?></p>
			                      </div>
			                      <div class="icon col-sm-3">
			                        <strong><i class="fa fa-id-card mr-1"></i>KELAS Wakil</strong>
			                        <p class="text-muted"><?php echo $a['kelas_wakil']; ?></p>
			                      </div>
							</div>
							<b>Calon Pemilihan Periode Tahun <?php echo $a['tahun_pemilu'] ?></b>
  						</b> 
			      	</div>
			      <div class="modal-footer row" style="display: block;">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal" style="">Close</button>
			      </div>
			      </center>
			    </div>
			  </div>
			</div>
<?php
  	}
?>

<!-- Modal Info akun  -->
<?php $no = 0;
	foreach ($anggota as $value) {
	?>
		<div class="modal fade" id="exampleModalCenter_<?=$value['id_user']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Data Akun Anggota</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <table class="table table-bordered">
				  <thead>
				    <tr>
				      <th scope="col">NO</th>
				      <th scope="col">Username</th>
				      <th scope="col">No HP</th>
				      <th scope="col">Name</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row"><?= ++$no?></th>
				      <td><?= $value['username']?></td>
				      <td><?= $value['no-HP']?></td>
				      <td><?= $value['name']?></td>
				  </tbody>
				</table>
				<b>Masuk Menjadi Anggota Sejak Pemilihan Tahun <?php echo $value['tahun_pemilu'] ?></b>
		      </div>
		      <div class="modal-footer" style="display: inline;">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal" style="">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
	<?php
}  ?>

<!-- Modal Update Status -->

<?php 
	foreach ($anggota as $value) {
	?>
		<div class="modal fade" id="exampleM_<?=$value['id_user']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLongTitle">Update Status Anggota</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       <div class="row">
		       		<a href="<?=base_url('admin/delete/').$value['id_user']?>"  class="col-sm-6">
		       			<button class="btn btn-danger btn-block">Hapus Akun</button></a>
		       		<a href="<?=base_url('admin/update_status/').$value['id_user']?>" class="col-sm-6">
		       			<button class="btn btn-primary">Jadikan Admin</button></a>
		       </div>
		      </div>
		      <div class="modal-footer" style="display: inline;">
		        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal" style="">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
	<?php
}  ?>