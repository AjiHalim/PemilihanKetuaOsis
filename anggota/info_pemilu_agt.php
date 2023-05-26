<style type="text/css">
  .bg-secondary{
    padding : 10px; 
  }
  table td {
    padding: 5px; 
  }
</style>
  <div class="content-wrapper">
    <!-- Main content -->
    <!-- <ul class="navbar-nav ml-auto"> -->
	<section class="content">
	    <div class="container-fluid">
	      <div class="row">
	        <div class="col-12">
	          <?php
	            $jumlah = 0;

	            if (!$tahun) {
	           ?>
	           		<div class="card mt-3">
	           			<div class="card-header  bg-info">
	           				<h4>Tidak Ada Pemilihan Yang Aktif</h4>
	           			</div>
	           			<div class="card-body">
	           				JIka ingin melihat Hasil Pemilu Anda Harus Mengaktifkan tahun Pemilihan
	           				<a href="<?=base_url('admin/lihat_tahun')?>">Klik di Sini</a>
	           			</div>
	           		</div>
	           <?php
	            } else {
	              $pemilih = 0;
	              	// echo $_SESSION['data_2'];
	                $data = array(
	                    'a' => 0, 
	                    'b' => 0,
	                    'c' => 0,
	                    'd' => 0,
	                    'e' => 0,
	                    'f' => 0.

	                );
	                foreach ($tahun as $key) {
	                  $tahun_aktif = $key['id_tahun'];
	                  // print_r($key);
	                }
	                foreach ($kode as $value) {
	                    if ($value['id_tahun'] == $tahun_aktif) {
	                         ++$jumlah; 
	                    }
	                   
	                }
	                foreach ($list as $key) {
	                	if ($key['id_tahun'] == $tahun_aktif) {
	                        ++$pemilih;
	                        // print_r($key);
	                    }
	                  
	                  if ($pemilih <= $jumlah ) {
	                      // if ($key['pilih'] == "calon_1") {
	                      //   ++$data['a'];
	                      // }elseif ($key['pilih'] == "calon_2") {
	                      //   ++$data['b'];
	                      // }elseif ($key['pilih'] == "calon_3") {
	                      //   ++$data['c'];
	                      // }elseif ($key['pilih'] == "calon_4") {
	                      //   ++$data['d'];
	                      // }elseif ($key['pilih'] == "calon_5") {
	                      //   ++$data['e'];
	                      // }elseif ($key['pilih'] == "calon_6") {
	                      //   ++$data['f'];
	                      // }
	                  	switch ($key['id_seri']) {
	                  		case 1:
	                  			++$data['a'];
	                  			break;
	                  		case 2:
	                  			++$data['b'];
	                  			break;
	                  		case 3:
	                  			++$data['c'];
	                  			break;
	                  		case 4:
	                  			++$data['d'];
	                  			break;
	                  		case 5:
	                  			++$data['e'];
	                  			break;
	                  		case 6:
	                  			++$data['f'];
	                  			break;
	                  		default:
	                  			
	                  			break;
	                  	}
	                  }
	                }
	              ?>
	             <div class="card mt-3 mb-3" style="width: 98%; margin: auto; ">
	                <div class="card-header bg-info">
	                <h3>Statistik</h3>
	              </div>
	              <div class="card-body row">
	                 <div class="col-sm-6">
	                   <div class="info-box">
	                      <span class="info-box-icon bg-primary">
	                        <i class="far fa-flag"></i>
	                      </span>
	                      <div class="info-box-content">
	                        <span class="info-box-text">Jumlah suara </span>
	                        <span class="info-box-number"><?php echo $jumlah ?></span>
	                      </div>
	                      <!-- /.info-box-content -->
	                    </div>
	                    <!-- /.info-box -->
	                 </div>
	                 <div class=" col-sm-6 ">
	                    <div class="info-box shadow-sm">
	                        <span class="info-box-icon bg-success">
	                          <i class="far fa-flag"></i>
	                        </span>
	                       <div class="info-box-content">
	                          <span class="info-box-text">Jumlah Pemilihan</span>
	                            <span class="info-box-number"><?php echo $pemilih ?></span>
	                      </div>

	                    </div>
	                  </div>
	                 <div class="col-sm-6"></div><!--jangan Di utak atik -->
	                <table class="bg-secondary mb-4" style="width: 100%">
	                </table><!--jangan Di utak atik -->
	              <?php 
	                $no =0;
	                foreach ($jml as$value) {
	                  ++$no;
	              ?>
	                  <div class="col-md-4 col-sm-6 col-12">
	              <?php if ($no == 1) {
	              ?>
	                      <div class="info-box bg-warning">
	              <?php
	                    } elseif ($no == 2) {
	              ?>
	                      <div class="info-box bg-success">
	              <?php
	                    }elseif ($no == 3) {
	              ?>
	                      <div class="info-box bg-danger">
	              <?php
	                    } else{
	              ?>
	                      <div class="info-box bg-secondary">
	              <?php
	                    }
	               ?>
	                        <span class="info-box-icon">
	                          <!-- <i class="far fa-calendar-alt"></i> -->
	                <?php
	                	switch ($no) {
	                		case 1:
	                ?>
	                			<img src="<?=base_url('assets/images/ca_02/foto_profil2.jpg')?>" style = "height: 100%">
	                <?php
	                			break;
	                		case 2:
	                ?>
	                			<img src="<?=base_url('assets/images/ca_03/foto_profil3.jpg')?>" style = "height: 100%">
	                <?php
	                			break;
	                		case 3:
	                ?>
	                			<img src="<?=base_url('assets/images/ca_01/foto_profil.jpg')?>" style = "height: 100%">
	                <?php
	                			break;
	                		default:
	               	?>
	               				<img src="<?=base_url('assets/images/satu.png')?>" style = "height: 100%" >
	               	<?php
	                			break;
	                	}
	                ?>          
	                          
	                        </span>
	                        <div class="info-box-content">
	                          <span class="info-box-text">Calon ke.<?= $no?></span>
	                          <span class="info-box-number">
	                            <b>Jumlah pemilih</b> :
	                            <?php 
	                              $persen = 0;
	                              switch ($no) {
	                                case 1:
	                                  echo $data['a'];
	                            ?>
	                                </span>
	                                  <div class="progress">
	                                      <div class="progress-bar" style="width : <?=$data['a'] / $pemilih * 100?>%"></div>
	                                  </div>
	                                  <span class="progress-description">
	                                    <?php 
	                                      $persen = $data['a'] / $pemilih * 100;
	                                      echo number_format($persen,2);
	                                      // echo number_format(($data['a'] / $pemilih * 100), 2);
	                                      $this->session->set_userdata('data_1', $persen);

	                                    ?>%
	                                </span>
	                            <?php
	                                  break;
	                                case 2:
	                                  echo $data['b'];
	                              ?>
	                                    <div class="progress">
	                                        <div class="progress-bar" style="width : <?=$data['b'] / $pemilih * 100?>%"></div>
	                                    </div>
	                                     <span class="progress-description">
	                                      <?php 
	                                        $persen = $data['b'] / $pemilih * 100;
	                                        echo number_format($persen,2);
	                                        $this->session->set_userdata('data_2', $persen);
	                                        // echo $_SESSION['data_2'];
	                                      ?>%
	                                    </span>
	                              <?php
	                                  break;
	                                case 3:
	                                  echo $data['c'];
	                              ?>
	                                    <div class="progress">
	                                        <div class="progress-bar" style="width : <?=$data['c'] / $pemilih * 100?>%"></div>
	                                    </div>
	                                    <span class="progress-description">
	                                        <?php 
	                                          $persen = $data['c'] / $pemilih * 100;
	                                          echo number_format($persen,2);
	                                          $this->session->set_userdata('data_3', $persen);
	                                        ?>%
	                                    </span>
	                                <?php
	                                  break;
	                                case 4:
	                                  echo $data['d'];
	                                ?>
	                                    <div class="progress">
	                                        <div class="progress-bar" style="width : <?=$data['d'] / $pemilih * 100?>%"></div>
	                                    </div>
	                                    <span class="progress-description">
	                                        <?php 
	                                          $persen = $data['d'] / $pemilih * 100;
	                                          echo number_format($persen,2);
	                                          $this->session->set_userdata('data_4', $persen);
	                                        ?>%
	                                    </span>
	                                <?php
	                                  break;
	                                case 5:
	                                  echo $data['e'];
	                                ?>
	                                    <div class="progress">
	                                        <div class="progress-bar" style="width : <?=$data['e'] / $pemilih * 100?>%"></div>
	                                    </div>
	                                    <span class="progress-description">
	                                        <?php 
	                                          $persen = $data['e'] / $pemilih * 100;
	                                          echo number_format($persen,2);
	                                          $this->session->set_userdata('data_5', $persen);
	                                        ?>%
	                                    </span>
	                                <?php
	                                 break;
	                                default:
	                                  echo $data['f'];
	                                  ?>
	                                    <div class="progress">
	                                        <div class="progress-bar" style="width : <?=$data['f'] / $pemilih * 100?>%"></div>
	                                    </div>
	                                    <span class="progress-description">
	                                        <?php 
	                                          $persen = $data['f'] / $pemilih * 100;
	                                          echo number_format($persen,2);
	                                          $this->session->set_userdata('data_6', $persen);
	                                        ?>%
	                                    </span>
	                                <?php
	                                  break;
	                                 } ?> 
	                        </div>
	                      </div>
	                  </div>
	                <?php
	                  }
	                 ?>
	              </div> 
	              </div>
	            </div>
	            </div>
	            <div class="col-12">
	              <div class="card">
	                <div class="card-header bg-info">
	                  <h4>Data Pemilihan</h4>
	                </div>
	                <!-- /.card-header -->
	                <div class="card-body">
	                  <table id="example2" class="table table-bordered table-hover">
	                    <thead>
	                        <tr>
	                          <th style="width: 3%">NO</th>
	                          <th style="width: 20%">Tahun Pemilihan</th>
	                          <th>Pemilih</th>
	                          <th>Calon</th>
	                        </tr>
	                    </thead>
	                    <tbody>
	            	<?php 
	            		$no = 0;
								foreach ($list as $nilai) { ?>
	    							<tr>
	    								<td><?php echo ++$no; ?></td>
	                        			<td><?php echo $nilai['tahun_pemilu']; ?></td>
	    								<td><?php echo $nilai['digit']; ?></td>
	    								<td><?php echo $nilai['pilih']; ?></td>
	    							</tr>
						<?php } ?>
	                  </tbody>
	                  </table>
	                </div>
	                <!-- /.card-body -->
	              </div>
	              <!-- /.card -->
	            </div>
	            <!-- /.col -->
	        <?php
	            }
	        ?>
		 </div>
		</div>
	</section>
	</div>
	<!-- ini footer -->
	<footer class="main-footer" style="font-weight: bold; letter-spacing: 0.5px;">
	      <div class="float-right d-none d-sm-block">
	          <b>Version</b> 3.2.0
	      </div>
	      <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">pemilos</a>.</strong> created by team 1 || 
	      <span><b>Oleh Siswa, Dari Siswa, dan Untuk Siswa</b></span>
		 </footer>

	
  <!-- jQuery -->
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/jszip/jszip.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
