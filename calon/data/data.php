<!-- data pribadi -->
     <div class="card col-sm-9" >
      <div class="card-header bg-primary">
        <h3>Data Pribadi Calon Ketows dan Waketos</h3>
      </div>
      <div class="card-body">
        <div class="card-header">
                <h3 class="card-title" >Visi Misi dan Program Kerja</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style=" border-bottom: 2px solid black">

                    <div class="icon">
                      <strong><i class="fa fa-book mr-1"></i>visi</strong>
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>

                      <hr>

                    <div class="icon">
                      <strong><i class="fa fa-bookmark mr-1"></i>Misi</strong>
                      <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                      <hr>
                    <div class="icon">
                        <strong><i class="fa fa-briefcase mr-1"></i>Program Kerja</strong>
                        <p class="text-muted">
                                1. meningkatkan keimanan siswa sekolah<br/>
                                2. meningkatkan keimanan siswa sekolah<br/>
                                3. meningkatkan keimanan siswa sekolah<br/>
                                4. meningkatkan keimanan siswa sekolah<br/>
                                5. meningkatkan keimanan siswa sekolah<br/>
                                6. meningkatkan keimanan siswa sekolah<br/>
                                7. meningkatkan keimanan siswa sekolah<br/>
                                8. meningkatkan keimanan siswa sekolah<br/>
                                9. meningkatkan keimanan siswa sekolah<br/>
                               10. meningkatkan keimanan siswa sekolah<br/>
                          </p>
                    </div>
        </div>
      <!-- data akun -->
        <div class="card-header">
                  <h3 class="card-title" >Data Akun</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body row" style="border-bottom: 2px solid black">
                      <div class="icon col-sm-6">
                        <strong><i class="fas fa-user-circle mr-1"></i>Nama Akun</strong>
                        <p class="text-muted"><?php echo $nama_akun ?></p>
                      </div>

                      <hr>

                      <div class="icon col-sm-6">
                        <strong><i class="fas fa-lock mr-1"></i>Password</strong>
                        <p class="text-muted"><?php echo $pangkat ?></p>
                      </div>
          </div>

        <!-- data calon ketua osis -->
              <div class="card-header">
                <h3 class="card-title" >Data Calon Ketua Osis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body row" style="display: flex; border-bottom: 2px solid black">
                  <div class="icon col-sm-2">
                   <strong><i class="fas fa-user mr-1"></i>Nama</strong>
                    <p class="text-muted">
                        <?php echo $nama;?>
                    </p>
                </div>
      

                <div class="icon col-sm-2">
                  <strong><i class="fa fa-phone mr-1"></i> NO-HP</strong>
                  <p class="text-muted"><?php echo $no;?></p>
                </div>
                <div class="icon col-sm-2">
                  <strong><i class="fa fa-map-marker mr-1"></i> Alamat</strong>
                  <p class="text-muted"><?php echo $alamat; ?></p>
                </div>
                <div class="icon col-sm-2">
                  <strong><i class="fa fa-id-card mr-1"></i> NIS</strong>
                  <p class="text-muted"><?php echo $nis; ?></p>
                </div>

                <div class="icon col-sm-2">
                  <strong><i class="fa fa-star mr-1"></i>Agama</strong>

                   <p class="text-muted"><?php echo $agama; ?></p>
                </div>
                <div class="icon col-sm-2">
                  <strong><i class="fa fa-mars mr-1"></i><i class="fa fa-venus mr-1"></i> Jenis-Kelamin</strong>

                   <p class="text-muted"><?php echo $jk; ?></p>
                </div>

              </div>
             <!-- info calon wakil ketua osis -->
              <div class="card-header">
                <h3 class="card-title" >Data Calon Wakil Ketua Osis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body row" style="display: flex;">
                <div class="icon col-sm-2">
                   <strong><i class="fas fa-user mr-1"></i>Nama</strong>
                    <p class="text-muted">
                        <?php echo $nama_wakil; ?>
                    </p>
                </div>
                  <div class="icon col-sm-2">
                    <strong><i class="fa fa-phone mr-1"></i> NO-HP</strong>

                    <p class="text-muted"><?php echo $no_wakil; ?></p>
                </div>
                <div class="icon col-sm-2">
                  <strong><i class="fa fa-map-marker mr-1"></i> Alamat</strong>

                   <p class="text-muted"><?php echo $alamat_wakil; ?></p>
                </div>
                 <div class="icon col-sm-2">
                  <strong><i class="fa fa-id-card mr-1"></i> NIS</strong>

                   <p class="text-muted"><?php echo $nis_wakil; ?></p>
                </div>
                <div class="icon col-sm-2">
                  <strong><i class="fa fa-star mr-1"></i>Agama</strong>

                   <p class="text-muted"><?php echo $agama_wakil; ?></p>
                </div>
                <div class="icon col-sm-2">
                  <strong><i class="fa fa-mars mr-1"></i><i class="fa fa-venus mr-1"></i> Jenis-Kelamin</strong>

                   <p class="text-muted"><?php echo $jk_wakil; ?></p>
                </div>
              </div>

      </div>
              <!-- /.card-body -->
    </div>