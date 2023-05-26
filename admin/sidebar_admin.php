  <style type="text/css">
    .nav-link p,  .nav-link i{
      font-weight: bold;
      letter-spacing: 0.5px;
      color: white;
     }.nav-header {
      color: white !important;
      font-weight: bold;
      letter-spacing: 0.5px;
     }
  </style>

 <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-info" >
    <!-- Brand Logo -->
      <a href="<?=base_url('admin/')?>" class="brand-link" style="border-bottom-color:white !important ; ">
        <img src="<?=base_url('assets/images/')?>gambarnobg.png" alt="pemilos" class="brand-image img-circle elevation-3" style="opacity: .8; width: 30px; height: 35px">
        <span class="judul" style="color: white; font-weight: bolder; margin-left: 33px;">Pemilos</span>
      </a>
    <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2" >
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-header">Profil</li>
              <li class="nav-item">
                <a href="<?=base_url('admin/info_admin')?>" class="nav-link">
                  <i class="fa fa-user-circle" aria-hidden="true" style="margin-left: 6px;"></i>
                  <p style="margin-left: 6px;">Info Data Pribadi</p>
                </a>
              </li>
            <li class="nav-header">Tahun Pemilihan</li>
                <li class="nav-item">
                  <a href="<?=base_url('admin/lihat_tahun')?>" class="nav-link">
                   <i class="fas fa-atlas" style="margin-left: 7px;"></i>
                    <p style="margin-left: 7px">lihat Tahun</p>
                  </a>
                </li>
            <li class="nav-header">Anggota</li>
                <li class="nav-item">
                  <a href="<?=base_url('admin/tambah_user')?>" class="nav-link">
                    <i class="fa fa-cart-plus" aria-hidden="true" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">Tambah User Baru</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?=base_url('admin/anggota')?>" class="nav-link">
                    <i class="fas fa-list" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">List data Anggota</p>
                  </a>
                </li>               
            <li class="nav-header">Pemilihan</li>
             <!--  <li class="nav-item">
                  <a href="<?=base_url('admin/generate')?>" class="nav-link">
                   <i class="fas fa-atlas" style="margin-left: 7px;"></i>
                    <p style="margin-left: 7px">Generate Token</p>
                  </a>
                </li> -->
              <li class="nav-item">
                      <a href="<?=base_url('admin/info_pemilu')?>" class="nav-link" style="margin-left: 6px;">           
                        <i class="fa fa-info" aria-hidden="true" style="margin-left: 6px;"></i>
                        <p style="margin-left: 6px;">Update Info Pemilihan</p>
                      </a>
                </li>
            <li class="nav-header">Keluar Aplikasi</li>
                <li class="nav-item">
                      <a href="<?=base_url('user/logout')?>" class="nav-link">
                        <i class="fa fa-power-off" aria-hidden="true" style="margin-left: 6px;"></i>
                        <p style="margin-left: 6px;">Log Out</p>
                      </a>
                </li>
              <!-- <li class="nav-item">
                <a href="<?=base_url('admin/token')?>"> 
                  <button type="button" class="btn btn-secondary btn-sm">
                    <i class="fa fa-plus-square" aria-hidden="true" style="margin-right: 10px"></i>Generet Token
                  </button>
                </a>
              </li> -->
         </ul>
      </nav>
        
 
    </div>
    <!-- /.sidebar -->
  </aside>
  