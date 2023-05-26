<?php
  foreach ($list as $value) {
    $nama = $value['nama'];
     // $nis = $value['nis'];
      $alamat = $value['alamat'];
       $kelas = $value['kelas'];
        $pengalaman = $value['peng_organisasi'];
         // $agama = $value['agama'];
          $no = $value['no-hp'];

          $nama_wakil = $value['nama_wakil'];
         // $nis_wakil = $value['nis_wakil'];
        $alamat_wakil = $value['alamat_wakil'];
       $kelas_wakil = $value['kelas_wakil'];
      $pengalaman_wakil = $value['peng_organisasi_wakil'];
     // $agama_wakil = $value['agama_wakil']; 
    $no_wakil = $value['no_hp_wakil'];

    $nama_akun = $value['name'];
    $pangkat = $value['level'];
    $username = $value['username'];
    $password = $value['password'];
    
  }foreach ($kerja as $nilai) {
    $visi = $nilai['visi'];
    $misi = $nilai['misi'];
    $progker = $nilai['program_kerja'];
  }

  $jumlah = 0;
  $pemilih = 0;

  $data = array(
      'a' => 0, 
      'b' => 0,
      'c' => 0,

  );
  foreach ($kode as $value) {
      ++$jumlah; 
  }
  // print_r($key);
  // exit();
  foreach ($total as $key) {
    ++$pemilih;
    if ($pemilih < $jumlah ) {
        // if ($key['pilih'] == "calon_1") {
        //   ++$data['a'];
        // }elseif ($key['pilih'] == "calon_2") {
        //   ++$data['b'];
        // }elseif ($key['pilih'] == "calon_3") {
        //   ++$data['c'];
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

  // ambil data pemilih

  
  ?>
<style type="text/css">
  @media only screen and (max-width: 1312px) {
   .col-sm-3.kartu{
    width: 100%;
    }
}
</style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </section>
    <div class="row">
      <div class="col-sm-3 kartu" style="height: 100%; margin-left: 20px;">
          <div class="card card-primary card-outline" >
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?=base_url('assets/')?>dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                      <img class="profile-user-img img-fluid img-circle" 
                      src="<?=base_url('assets/images/')?>sayu_2.jpg"
                      alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $nama; ?> && <?php echo $nama_wakil; ?> </h3>
                <ul class="list-group list-group-unbordered mb-3" style="display: flex;">
                  <li class="list-group-item">
                    <b>Jumlah Pemilih</b> <a class="float-right"><?php echo $pemilih ?></a>
                  <li class="list-group-item">
                    <b>Pemilih</b><a class="float-right">
                      <?php 
                        if ($total) {
                          if ($key['id_seri'] == 1) {
                            echo $data['a'];
                          } elseif($key['id_seri'] == 2) {
                            echo $data['b'];
                          }elseif($key['id_seri'] == 3) {
                            echo $data['c'];
                          }elseif($key['id_seri'] == 4) {
                            echo $data['d'];
                          }elseif($key['id_seri'] == 5) {
                            echo $data['e'];
                          }elseif($key['id_seri'] == 6) {
                            echo $data['f'];
                          }
                        } else {
                          ?>
                            <b>Belum Ada Pemilihan</b>
                          <?php
                        }
                        
                        // exit();
                       ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Total suara</b><a class="float-right"><?php echo $jumlah ?></a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Statistic</b></a>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
    <!-- Main content -->
    <section class="content col-sm-8">
      <div class="card" >
        <form action="<?=base_url('calon/proses_update')?>" method="post" >
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Program Kerja dan Visi-Misi </a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Info Akun</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Biodata Diri</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <div class="icon">
                      <strong><i class="fa fa-book mr-1"></i>visi</strong>
                      <p class="text-muted"><?php echo $visi;?></p>
                    </div>

                      <hr>

                    <div class="icon">
                      <strong><i class="fa fa-bookmark mr-1"></i>Misi</strong>
                      <p class="text-muted"><?php echo $misi;?></p>
                    </div>
                      <hr>
                    <div class="icon">
                        <strong><i class="fa fa-briefcase mr-1"></i>Program Kerja</strong>
                        <p class="text-muted">
                                <?php echo $progker;?>
                          </p>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">                    
                      <div class="row">
                        <div class="icon col-sm-6">
                          <strong>
                            <i class="fa fa-id-card" aria-hidden="true"></i>
                            Pangkat
                          </strong>
                          <p class="text-muted"><?php echo $pangkat ?></p>
                        </div>
                        <div class="icon col-sm-6">
                          <strong><i class="fas fa-user-circle mr-1"></i>Username</strong>
                          <p class="text-muted"><?php echo $username ?></p>
                        </div>
                        <hr>
                        <div class="icon col-sm-6">
                          <strong><i class="fas fa-lock mr-1"></i>Password</strong>
                          <p class="text-muted"><?php echo $password ?></p>
                        </div>
                      </div>
                  </div>
                  <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                  <div class="card-header" style="padding-top: 0">
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
                        <strong><i class="fa fa-id-card mr-1"></i>KELAS</strong>
                        <p class="text-muted"><?php echo $kelas; ?></p>
                      </div>
                      <div class="icon col-sm-2">
                        <strong><i class="fa fa-trophy" aria-hidden="true"></i> Pengalaman Berorganisasi</strong>

                         <p class="text-muted"><?php echo $pengalaman; ?></p>
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
                      <strong><i class="fa fa-id-card mr-1"></i> KELAS</strong>

                       <p class="text-muted"><?php echo $kelas_wakil; ?></p>
                    </div>
                    <div class="icon col-sm-2">
                      <strong><i class="fa fa-trophy" aria-hidden="true"></i> Pengalaman Berorganisasi</strong>

                       <p class="text-muted"><?php echo $pengalaman_wakil; ?></p>
                    </div>
                  </div>
              </div>
                  <!-- /.tab-pane -->
            </div>
                <!-- /.tab-content -->
          </div><!-- /.card-body -->   
      </div>
    </section>
    </div>
  </div>