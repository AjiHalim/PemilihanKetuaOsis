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
 </style>
 <div class="content-wrapper">
      <section class="content-header">
          <div class="container-fluid">
            
          </div>
      </section>
    <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
            <div class="card">
              <div class="card-header bg-info">
                <h3 class="card-title">Buat Token</h3>
                <a href="<?=base_url('admin/lihat_tahun')?>">
                  <i class="fa fa-chevron-left" aria-hidden="true">Batal</i>
                </a>
              </div>
              <form class="form-horizontal" method="post" action="<?=base_url('admin/generate')?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputUsername3" class="col-sm-2 col-form-label">Jumlah Token</label>
                    <div class="col-sm-10">
                      <input type="number" name="id" value="<?=$tahun_generate[0]['id_tahun']?>" hidden>
                      <input type="number" class="form-control" id="inputUsername3" placeholder="Jumlah" name="jumlah" value="0">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-md" style="margin : auto; width: 100%" name="kirim">Buat</button>
                </div>
              </form>
            </div>
          </div>
      </section>
    <!-- /.content -->
  </div>