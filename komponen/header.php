<?php  
  foreach ($tahun as $value) {
    $tahun_pemilu = $value['tahun_pemilu'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>pemilos SMK Batik Perbaik Purworejo</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://file.smkbatikpwrj.sch.id/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="https://file.smkbatikpwrj.sch.id/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
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
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-info">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color: white !important">
          <i class="fas fa-bars"></i>
        </a>
      </li>
      <li class="nav-item" style="padding-top: 7px;">
        <!-- <b >Pemilu Tahun <?= $tahun_pemilu ;?></b> -->
      </li>
      
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <span> 
          <?php              
          // if ($_SESSION['level'] == "admin" ) {
          //  echo "Selamat Datang " . $_SESSION['nama'];
          // }elseif($_SESSION['level'] == "calon"){
          //   echo "Selamat Datang " . $_SESSION['nama'];
          // }

          echo "Selamat Datang " . $_SESSION['nama'];
          ?>  
        </span>
      </li>
    </ul>
  </nav>