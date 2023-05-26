<style type="text/css">
    .edit {
      width: 70%;
      padding: 10px;
      background: whitesmoke; 
    }



    .nama {
      position: relative;
      color: white;
      font-style: italic;
      font-weight: bolder;
     
    } 
    .form-group.row {
      margin-bottom: 5px;
    }
    .text-muted {
      margin-left: 1.7%;
    }
</style>
<?php 
foreach ($admin as $nilai) {
  $nama = $nilai['name'];
  $username = $nilai['username'];
  $sandi = $nilai['password'];
  $no = $nilai['no-HP'];
}

 ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
            
          </div>
      </section>
    <!-- Main content -->
      <section class="content">
          <div class="container-fluid" >
              <div class="card card-primary">
                  <div class="card-header bg-info" >
                    <h3 class="card-title">Data Admin</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body row">
                    <div class="icon col-sm-6">
                       <strong><i class="fas fa-user mr-1"></i>Nama</strong>
                        <p class="text-muted">
                          <?php echo $nama;?>
                        </p>
                    </div>
                    <hr>

                    <div class="icon col-sm-6">
                      <strong><i class="fas fa-user-circle mr-1"></i>Username</strong>

                    <p class="text-muted">  <?php echo $username;?></p>
                    </div>

                    <hr>

                    <div class="icon col-sm-6">
                      <strong><i class="fas fa-lock mr-1"></i>Password</strong>

                    <p class="text-muted"> <?php echo $sandi;?></p>
                    </div>

                    <hr>

                    <div class="icon col-sm-6">
                      <strong><i class="fa fa-phone mr-1"></i> NO-HP</strong>

                    <p class="text-muted">  <?php echo $no;?></p>
                    </div>
                  </div>

              <!-- /.card-body -->
              </div>
              <div class="edit">
                    <h5>
                     <?php  
                        if ($this->session->userdata('level') == 'admin') {
                          ?>
                              <i>
                                Klik disini <a href="<?=base_url('admin/edit_data')?>"><b>"Edit Data"</b></a> Untuk Mengedit Data
                              </i>
                          <?php
                        }elseif ($this->session->userdata('level') == 'anggota') {
                          ?>
                              <i>
                                Klik disini <a href="<?=base_url('anggota/edit_data')?>"><b>"Edit Data"</b></a> Untuk Mengedit Data
                              </i>
                          <?php
                        }
                     ?>
                    </h5>
              </div>
          </div>
      </section>
    <!-- /.content -->
  </div>
