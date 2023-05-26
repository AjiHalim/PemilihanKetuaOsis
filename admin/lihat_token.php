<?php 
if ($tahun) {
     foreach ($tahun as  $value) {
      $nama_tahun = $value['tahun_pemilu'];
     }
 } ?>

 <style type="text/css">
 	.tahun {
 		text-decoration: none !important;

 	}
 	.tahun:hover {
 		color : black !important;
 		font-style: italic;

 	}
  /*tombol back*/
    .fa.fa-chevron-left {
      position: absolute;
      right: 3%;
      color: white;
      font-weight: bold;
    }
  /*Untuk Ficture Export*/
      .dataTables_wrapper.dt-bootstrap4 .col-sm-12.col-md-6:last-child{
        display: none;
      }
      .dataTables_wrapper.dt-bootstrap4 .col-sm-12.col-md-6:frist-child{
        display: inline-flex;
      }
      /*untuk mengatur flex dari button*/
       .dt-buttons.btn-group.flex-wrap{
        flex-wrap: nowrap !important;
      }

      /*menghilangkan perintah copy*/
      .dataTables_wrapper.dt-bootstrap4 .btn.btn-secondary.buttons-copy.buttons-html5 {
        display: none;
      }
      /*costom visibiliti*/
      .btn-group .btn.btn-secondary.buttons-collection.dropdown-toggle.buttons-colvis {
        display: none;
      }


  /* .dataTables_wrapper.dt-bootstrap4  .dataTables_filter{
    display: none;
   }*/
   .table.table-bordered.table-striped {
    display: none;
   }
   /*Untuk Top Booton*/
   #back-to-top{
    width: 3%;
   }
   /*TAMPILAN UNTUK HP*/
   @media only screen and (max-width: 700px) {
      .back-to-top{
      	right: 5%;
      }
    }
 </style>

 <div class="content-wrapper">
      <section class="content-header">
          <div class="container-fluid">
            <a href="#">
              <i class="fa fa-list-ol" aria-hidden="true" style="margin-right: 3px"></i>List Token(Kode Random)
            </a>
            <span style="margin: 0 1%"> // </span>
            <a href="#print" style="color: black !important">
              <i class="fa fa-print" aria-hidden="true" style="margin-right: 3px"></i>Print Token
            </a>
          </div>
      </section>
    <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header bg-info">
              <h3 class="card-title">Data Token</h3>
              <?php  
                  if ($this->session->userdata('level') == 'admin') {
                    ?>
                      <a href="<?=base_url('admin/lihat_tahun')?>">
                        <i class="fa fa-chevron-left" aria-hidden="true">Batal</i>
                      </a>
                    <?php
                  }elseif ($this->session->userdata('level') == 'anggota') {
                    ?>
                      <a href="<?=base_url('anggota/lihat_tahun')?>">
                        <i class="fa fa-chevron-left" aria-hidden="true">Batal</i>
                      </a>
                    <?php
                  }
               ?>
              
            </div >
            <div class="card-body">
              <div class="col-md-12">
                <!-- <table id="example1" class="table table-bordered"> -->
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th style="width: 140px">Tahun</th>
                      <th>Token</th>
                      <th style="width: 100px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($token as $key => $value) {
                    ?>
                    <tr>
                      <td><?=$key+1?></td>
                      <td><?=$value['tahun_pemilu']?></td>
                      <td><?=$value['digit']?></td>
                      <td class="text-center">
                        <?php 
                            if ($value['status'] == 0 || $value['status'] == 1) {
                        ?>
                              <a href="<?=base_url('admin/hapus_token/').$this->uri->segment(3).'/'.$value['id_kode']?>">
                                <button class="btn btn-sm btn-danger" style="margin:0" disabled="">hapus</button>
                              </a>
                        <?php 
                          }else{
                        ?>
                            <a href="<?=base_url('admin/hapus_token/').$this->uri->segment(3).'/'.$value['id_kode']?>">
                              <button class="btn btn-sm btn-danger" style="margin:0">hapus</button>
                            </a>
                        <?php
                          }  
                        ?>
                      </td>
                    </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="card" id="print">
              <div class="card-header bg-info">
                <h3 class="card-title"> Export Data Token</h3>
              </div >
            <!-- /.card-header -->
            <div class="card-body">
              <span>Pilih Melalui ektansi apa anda ingin mengexport data token</span>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width: 140px">Tahun</th>
                    <th>Token</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach ($token as $key => $value) {
                      
                  ?>
                    <tr>
                      <td><?=$value['tahun_pemilu']?></td>
                      <td><?=$value['digit']?></td>
                    </tr>
                    <?php
                      }
                    ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-fotter">
              <div class="callout callout-info mb-4" style="width: 95%; margin: auto;">
                <b>Pastikan Sebelum Melakukan Print Token Posisi "Showing 1 to 10 of 17 entries" harus di angka yang terakhir Misalnya "Showing 11 to 17 of 17 entries" </b>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- top Menu -->
      <a id="back-to-top" href="#" class="btn btn-success back-to-top" role="button" aria-label="Scroll to top" style="opacity: 0.7">
        <i class="fas fa-chevron-up"></i>
      </a>
    <!-- /.content -->
     
  </div>
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