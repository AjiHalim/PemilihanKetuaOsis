<?php  ?>
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
                                      <a href="<?=base_url('anggota/data_tahun/').$value['id_tahun']?>">
                                        <span class="btn btn-success btn-sm" style="width: 45%">Lihat Data</span>
                                      </a>
                                      <a href="<?=base_url('anggota/lihat_token/').$value['id_tahun']?>">
                                          <button class="btn btn-warning btn-sm" style="background-color: success; width: 45% ">Lihat Token</button>
                                        </a>
                                  <?php
                                    }else {
                                      
                                    ?>
                                        <a href="<?=base_url('anggota/lihat_token/').$value['id_tahun']?>">
                                          <button class="btn btn-warning btn-sm" style="background-color: success; width: 45% ">Lihat Token</button>
                                        </a>
                                        
                                  <?php 
                                    } 
                                  ?>
                                </td>
                              </tr>
                            <?php } ?>
                      </tbody>
                    </table>
                  </div>
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
