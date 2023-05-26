<?php 
// print_r($list); exit();
   foreach ($list as $value) {
      $foto_paslon = $value['foto_paslon'];
      $nama = $value['nama'];
       $kelas = $value['kelas'];
       $pengalaman = $value['peng_organisasi'];
       $Alamat = $value['alamat'];
          $no = $value['no-hp'];

          $nama_wakil = $value['nama_wakil'];
       $kelas_wakil = $value['kelas_wakil'];
       $Alamat_wakil = $value['alamat_wakil'];
      $pengalaman_wakil = $value['peng_organisasi_wakil'];
    $no_wakil = $value['no_hp_wakil'];
  }
  foreach ($kerja as $key ) {
    $visi = $key['visi'];
    $misi = $key['misi'];
    $video = $key['video'];
    $program = $key['program_kerja'];
  }
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="width: 80%; margin: auto;">
      <div class="card" >
        <form action="<?=base_url('calon/proses_update')?>" method="post" enctype="multipart/form-data">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Program Kerja dan Visi-Misi </a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Biodata Diri</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                        <!-- <div class="form-group">
                          <label for="foto_paslon">Foto Paslon :</label>
                          <input type="file" id="foto_paslon" class="form-control"  value="<?php echo $foto_paslon?>" name="foto_paslon">
                        </div> -->
                        <div class="form-group">
                          <label for="inputName">Visi</label>
                          <textarea name="visi"  class="form-control" rows="4"><?php echo $visi?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="inputName">Misi</label>
                          <textarea name="misi"  class="form-control" rows="4"><?php echo $misi?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="inputDescription">Program Kerja</label>
                          <textarea id="inputDescription" class="form-control" rows="4" name="program"><?=$program?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="inputEstimatedDuration">Video Kampanye :</label>
                          <textarea name="video" class="form-control" style="height: 100px"><?=$video?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="inputEstimatedDuration">Video Kampanye Contoh :</label>
                          <textarea readonly="" class="form-control" style="height: 100px">
                            <?php echo "<iframe height='300px' src='https://www.youtube.com/embed/buzPmWO1mE4' title='PASLON KETUA DAN WAKIL KETUA OSIS SMK BATIK PERBAIK PURWOREJO PERIODE 2022/2023 KANDIDAT NO 01' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"?>
                          </textarea>
                        </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="settings">
                    <div class="row">
                        <div class="col-sm-6" style="padding-right: 0;" >
                             <div class="card-header mt-3">
                                <h3 class="card-title"><b>Biodata Ketua Osis</b></h3>
                              </div>
                              <div class="card-body">
                              <div class="form-group">
                                <label for="inputEstimatedBudget">Nama :</label>
                                <input type="text" id="inputEstimatedBudget" class="form-control"  value="<?php echo $nama?>" name="nama">
                              </div>
                              <div class="form-group">
                                <label for="inputSpentBudget">Kelas :</label>
                                <input type="text" id="inputSpentBudget" class="form-control"  value="<?php echo $kelas?>" name="kelas">
                              </div>
                               <div class="form-group">
                                  <label for="inputEstimatedDuration">NO HP :</label>
                                  <input type="text" id="inputEstimatedDuration" class="form-control"  value="<?php echo $no?>" name="no" placeholder="Mohon Diisi Untuk Data ADMIN Data tidak akan di Tampilkan di Page Pemilih">
                              </div>
                              <div class="form-group">
                                  <label for="inputEstimatedDuration">Alamat :</label>
                                  <input type="text" id="inputEstimatedDuration" class="form-control"  value="<?php echo $Alamat?>" name="alamat" placeholder="Mohon Di isi ">
                              </div>
                              <div class="form-group">
                                <label for="inputEstimatedDuration">Pengalaman Organisasi :</label>
                                <textarea class="form-control" name="pengalaman">
                                  <?=$pengalaman ?>
                                </textarea>
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="padding-left: 0;">
                            <div class="card-header mt-3">
                              <h3 class="card-title"><b>Biodata Wakil Ketua Osis</b></h3>
                            </div>
                            <div class="card-body" style="border-left: 1px solid grey">
                              <div class="form-group">
                                <label for="inputEstimatedBudget">Nama :</label>
                                <input type="text" id="inputEstimatedBudget" class="form-control"  value="<?php echo $nama_wakil?>" name="nama_wakil">
                              </div>
                              <div class="form-group">
                                <label for="inputSpentBudget">Kelas :</label>
                                <input type="text" id="inputSpentBudget" class="form-control"  value="<?php echo $kelas_wakil?>" name="kelas_wakil">
                              </div>
                              <div class="form-group">
                                <label for="inputEstimatedDuration">NO HP :</label>
                                <input type="text" id="inputEstimatedDuration" class="form-control"  value="<?php echo $no_wakil?>" name="no_wakil" placeholder="Mohon Diisi Untuk Data ADMIN Data tidak akan di Tampilkan di Page Pemilih">
                              </div>
                              <div class="form-group">
                                <label for="inputEstimatedDuration">Alamat :</label>
                                <input type="text" id="inputEstimatedDuration" class="form-control"  value="<?php echo $Alamat_wakil?>" name="alamat_wakil" placeholder="Mohon Di isi">
                              </div>
                              <div class="form-group">
                                <label for="inputEstimatedDuration">Pengalaman Organisasi :</label>
                                <textarea class="form-control" name="pengalaman_wakil">
                                  <?=$pengalaman_wakil ?>
                                </textarea>
                              </div>

                            </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body --> 
             <div class="col-12">
              <input type="submit" value="Update" class="btn btn-success float-right" style="width: 100%; margin-bottom: 30px" name="kirim">
            </div>
        </form>
        <div class="callout mb-4" style="width: 97%; margin:auto; ">Pastikan Dalam Mengisi Data <b><i>"Sesuai Dengan Data Diri"</i> dan Mematuhi Norma Yang Berlaku</b></div> 
      </div>
    </section>
  </div>
  