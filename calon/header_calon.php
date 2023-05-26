<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calon: Pemilos</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://file.smkbatikpwrj.sch.id/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<?=base_url('assets/')?>dist/css/adminlte.min.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <style type="text/css">
    .dropdown-toggle {
      margin-top: 20px;
    }
    .title {
      color: white !important;
      font-weight: bold;
      letter-spacing: 0.5px;
    }
  </style>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-dark bg-info">
    <div class="container" style="margin-left: 10px;">
      <a href="<?=base_url('calon/')?>" class="brand-brand">
        <img src="<?=base_url('assets/images/')?>gambarnobg.png" alt="pemilos" class="brand-image img-circle elevation-3" style="opacity: .8; width: 30px; height: 35px">
        <span class="judul"  style="color: white; font-weight: bolder; margin-right: 20px; font-size: 20px">Pemilos</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav" >
          <li class="nav-item">
            <a href="<?=base_url('Calon/info')?>" class="nav-link title"> Info Data Pribadi </a>

          </li>
          <li class="nav-item">
            <a href="<?=base_url('Calon/edit')?>" class="nav-link title"> Pengaturan Data Pribadi </a>
          </li>
          <!--<li class="nav-item">-->
          <!--  <a href="<?=base_url('Calon/file_save')?>" class="nav-link title"> Foto </a>-->
          <!--</li>-->
         <!--  <li class="nav-item dropdown">
            <a href="#" class="nav-link title" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Data Pribadi<span class="dropdown-toggle"> </span> </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a href="#" class="dropdown-item"> Foto Dan Video Kampanye </a>
                <a href="<?=base_url('Calon/edit')?>" class="dropdown-item"> Pengaturan Data Pribadi </a>
              </div>
          </li> --> 
          <li class="nav-item">
            <a href="<?=base_url('user/logout')?>" class="nav-link title" > Log Out </a>
          </li>
        </ul>
      </div>

    </div>
  </nav>
  <!-- /.navbar -->
