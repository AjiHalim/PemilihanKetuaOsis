<style type="text/css">
  @media screen and (max-width:  600px) {
      .text-center .btn-sm {
          width: 100% !important;
          margin-left: 0 !important;
      }
  }
</style>
<div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
                <div style="width: 25%;" class="col-md-4">
                    <?php
                        if ($tambah ==  1) { ?>
                           <a href="<?=base_url('admin/create_tahun')?>"> 
                              <button type="button" class="btn btn-success btn-sm" disabled="">
                                <i class="fa fa-plus-square" aria-hidden="true" style="margin-right: 10px"></i>Tambah Tahun
                              </button>
                            </a>
                    <?php }else{ ?>
                             <a href="<?=base_url('admin/create_tahun')?>"> 
                                <button type="button" class="btn btn-success btn-sm">
                                  <i class="fa fa-plus-square" aria-hidden="true" style="margin-right: 10px"></i>Tambah Tahun
                                </button>
                              </a>
                    <?php  } ?>
                              
                </div>
                  <?php echo @$_SESSION['error']; ?>
                  <?php  echo @$_SESSION['tidak_ada']; ?>
            </div>
            <div class="card mt-3">
              <div class="card-header bg-info">
                <h5>Data Tahun Pemilihan</h5>
              </div>
              <div class="card-body pad table-responsive">
                <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th style="width: 140px">Tahun</th>
                          <th>Status</th>
                          <th style="width: 100px">Jml Token</th>
                          <th style="width: 500px">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                            $no = 0;
                            $data_1 = 0; 
                            foreach ($list as $value) {  ?>
                              <tr>
                                <td><?php echo ++$no; ?></td>
                                <td><?php echo $value['tahun_pemilu']; ?></td>
                                <td>
                                  <?php 
                                    if ($value['status'] ==  0) {
                                        echo "Sudah Selesai";
                                    }if ($value['status'] ==  1) {
                                        echo "Berlangsung";
                                        $data_1++;
                                    }if($value['status'] ==  2){
                                      echo "Belum Di Mulai";

                                    }
                                    ?>                                           
                                </td>
                                <td class="text-center">
                                  <?php echo $value['jml_token']; ?>
                                </td>
                                <td class="text-center">
                                  <?php 
                                    if ($value['status'] ==  0) {
                                  ?>
                                      <a href="<?=base_url('admin/data_tahun/').$value['id_tahun'];?>">
                                        <span class="btn btn-success btn-sm" style="width: 45%">Lihat Data</span>
                                      </a>
                                      <a href="<?=base_url('admin/lihat_token/').$value['id_tahun']?>">
                                          <button class="btn btn-warning btn-sm" style="background-color: success; width: 45% ">Lihat Token</button>
                                        </a>
                                  <?php
                                    }if ($value['status'] ==  1) {
                                      
                                    ?>
                                        <button class="btn btn-primary btn-sm" style="background-color: primary ; width: 45%" data-toggle="modal" data-target="#exampleModal">Ganti Status</button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Apa Anda Yakin Ingin Mengakhiri Pemilihan Tahun <?php echo $value['tahun_pemilu']?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <div class="row">
                                                  <a href="<?=base_url('admin/status_tahun')?>" class="col-sm-6">
                                                    <button type="button" class="btn btn-primary btn-block">Ganti Status</button>
                                                  </a>
                                                  <a href="<?=base_url('admin/lihat_tahun')?>" class="col-sm-6">
                                                    <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                                                  </a>
                                                </div>  
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <a href="<?=base_url('admin/lihat_token/').$value['id_tahun']?>">
                                          <button class="btn btn-warning btn-sm" style="background-color: success; width: 45% ">Lihat Token</button>
                                        </a>
                                        
                                  <?php 
                                    }if($value['status'] ==  2){
                                       if ($data_1) {
                                  ?>
                                        <a href="<?=base_url('admin/aktif_pemilu')?>">
                                          <button class="btn btn-warning btn-sm" style="background-color: warning; width: 30%" disabled="">Aktifkan Pemilihan</button>
                                        </a>
                                        <a href="<?=base_url('admin/generate/').$value['id_tahun']?>">
                                          <button class="btn btn-warning btn-sm" style="background-color: success; width: 25% ">Buat Token</button>
                                        </a>
                                        <a href="<?=base_url('admin/lihat_token/').$value['id_tahun']?>">
                                          <button class="btn btn-warning btn-sm" style="background-color: success; width: 25% ">Lihat Token</button>
                                        </a>
                                  <?php
                                      }else {
                                  ?>
                                        <a href="<?=base_url('admin/aktif_pemilu')?>">
                                          <button class="btn btn-warning btn-sm" style="background-color: warning; width: 30%" >Aktifkan Pemilihan</button>
                                        </a>
                                        <a href="<?=base_url('admin/generate/').$value['id_tahun']?>">
                                          <button class="btn btn-warning btn-sm" style="background-color: success; width: 25% ">Buat Token</button>
                                        </a>
                                        <a href="<?=base_url('admin/lihat_token/').$value['id_tahun']?>">
                                          <button class="btn btn-warning btn-sm" style="background-color: success; width: 25% ">Lihat Token</button>
                                        </a>
                                  <?php 
                                      } } 
                                  ?>
                                </td>
                              </tr>
                            <?php } ?>
                      </tbody>
                    </table>
                  </div>
 <!--                  <div class="col-md-3">                    
                   
                  </div> -->
                </div>

              </div>
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
    </section>
  </div>
