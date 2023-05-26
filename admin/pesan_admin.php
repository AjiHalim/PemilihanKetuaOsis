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
 </style>
 <div class="content-wrapper">
      <section class="content-header">
          <div class="container-fluid">
            
          </div>
      </section>
    <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <?php 
              if ($selesai == 1) { ?>
            <div class="callout">
              <b>
                Maaf Untuk Pemilihan Tahun <?=$nama_tahun?> <br/> Seluruh Pemilih Sudah Menggunakan Suaranya Mohon Segera Di Selesaikan<a href="<?=base_url('admin/lihat_tahun')?>" class = "tahun"> Klik Disini </a>Untuk Menyelesaikan Pemilihan
              </b>
            </div>
            <?php }elseif ($selesai == 0){ ?>
              <div class="callout">
                <b>
                  Pemilihan Tahun <?= $nama_tahun?>. Masih Berlangsung 
                </b>
              </div>
            <?php }else{?>
                  <div class="callout">
                    <b>
                      Maaf Tidak ada pemilihan yang sedang berlangsung
                    </b>
                  </div>
              <?php } ?>

              <!-- <div class="card bg-info mt-4" style="padding: 10px">
                <p>
                  <b>Mohon Maaf Untuk Saat Ini Dalam PengUpload-an File Foto atau Video Belum Bisa Menggunakan Aplikasi Pemilos <br/> Anda Dapat Menghubungi Team Developer Dari Aplikasi Pemilos Melalui Email <i style="font-size: 20px"> timdevpemilossmkbatik@gmail.com</i> Untuk Mengupload File dan Untuk Mengadukan Jika Ada Error Di Aplikasi Terima Kasih</b>
                </p>
              </div> -->
          </div>
      </section>
    <!-- /.content -->
  </div>