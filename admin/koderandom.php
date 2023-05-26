<div class="content-wrapper">
	<section class="content">
      <div class="container-fluid">
      	<div class="card">
      		<div class="card-header">
      			<h3>Masukan Batas Token</h3>
      		</div>
      		<div class="card-body">
      			<form method="post" action="<?=base_url('admin/token')?>">
      				<tr>
      					<input class="form-control" type="number" name="batas" placeholder="Masukan Jumlah Token">
      				</tr>
      				<tr>
      					<input class="btn btn-primary" type="submit" name="kirim" value="kirim">
      				</tr>
      			</form>
      		</div>
      		<div class="card-fotter">
      			
      		</div>
      	</div>
      	<div class="card">
      		<div class="card-header">
      			<h3>Data Kode Random</h3>
      		</div>
      		<div class="card-body">
      			<table id="example2" class="table table-bordered table-hover">
	                <thead>
	                    <tr>
	                      <th style="width: 3%">NO</th>
	                      <th style="width: 20%">kode random</th>
	                      <th>Tahun pemilihan</th>
	                    </tr>
	                </thead>
	                <tbody>
	        	<?php 
	        		$no = 0;
						foreach ($kode as $nilai) { ?>
							<tr>
								<td><?php echo ++$no; ?></td>
								<td><?php echo $nilai['digit']; ?></td>
								<td><?php echo $nilai['id_tahun']; ?></td>
							</tr>	
						<?php } ?>
	              </tbody>
              </table>
      		</div>
      	</div>
      	<!-- <div class="callout">
      		Maaf Jika data Tidak Ada Maka Harap refres perangkat Anda
      	</div> -->
      </div>
  	</section>
</div>
 <!-- /.content-wrapper -->
  <footer class="main-footer" style="font-weight: bold; letter-spacing: 0.5px;">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">pemilos</a>.</strong> created by team 1 || 
    <span><b>Oleh Siswa, Dari Siswa, dan Untuk Siswa</b></span>
  </footer>

</div>
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
