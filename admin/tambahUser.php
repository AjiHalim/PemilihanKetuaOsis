
  <style type="text/css">
    .btn {
      width: 90%;
      margin: 10px 0 0 15px;
    }.nama {
      position: relative;
      color: white;
      font-style: italic;
      font-weight: bolder;
     
    } 
    .link_{
      text-decoration: none !important;
    }
    .link_:hover{
      color :purple !important;
      text-decoration: none !important;
    }
  </style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
            
          </div>
      </section>
    <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
          		<div class="card" >
					<div class="card-header bg-info">
						<h3 class="card-title">Buat Username Dan Password Untuk Calon Ketua Osis dan Anggota Baru</h3>
				 	</div>
					<form class="form-horizontal" method="post" action="<?=base_url('admin/tambah')?>">
						<div class="card-body">
							<div class="form-group row">
								<label for="inputUsername3" class="col-sm-2 col-form-label">Username</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputUsername3" placeholder="Username" name="name">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="sandi">
								</div>
							</div>	
							<div class="flex-container row" style="display: flex;">
								<label class="col-sm-2">Gabung Sebagai  </label>
								<div class="form-check col-sm-10">
									<input type="radio" class="form-check-input" id="exampleCheck2" name="level" value="anggota">
									<label class="form-check-label" for="exampleCheck2"  style="margin-right: 20px;">Anggota</label>
									<br/>
									<input type="radio" class="form-check-input" id="exampleCheck2" name="level" value="calon">
									<label class="form-check-label" for="exampleCheck2">calon</label>
								</div>
							</div>

						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-primary btn-md" style="margin : auto; width: 100%" name="kirim">Buat</button>
						</div>
					</form>
				</div>
          </div>
           <?php if ($this->uri->segment(3) == 1) { ?>
              <div class="callout callout-primaryfo mt-5">
                <b>Maaf Calon Sudah Berjumlah 3 (Calon Max 3 calon)</b><br/>
                <i style="margin-left: 5%">Anda Sudah Tidak Bisa Menambah Calon Lagi</i>
              </div>
          <?php } else{ ?>
              <div class="callout callout-primaryfo mt-5">
              	<b>Admin hanya perlu Membuat username dan Password Untuk Data Lain akan di isi oleh Anggota / calon</b>
              </div>
          <?php } ?>
          <?php 
            if ($this->session->flashdata('nihil')) {
             ?>
                <div class="callout callout-primaryfo mt-1">
                  <b>Maaf Anda Perlu Membuat Tahun Pemilihan / Jika Sudah Aktif Tahun Pemilihan Maka Tidak Bisa Menambah Calon Lagi  </b><br/>
                  <b><a href="<?=base_url("admin/lihat_tahun")?>" class="link_">klik di-sini</a> Pengaturan Tahun</b>
                </div>
             <?php
            }
           ?>
      </section>
    <!-- /.content -->
  </div>