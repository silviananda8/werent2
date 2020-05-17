<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Halaman Pemilik Rental</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(''); ?>/assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(''); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!--=== FontAwesome CSS ===-->
  <link href="<?= base_url(''); ?>assets/fontawesome/css/font-awesome.css" rel="stylesheet">
  <link href="<?= base_url('assets/fontawesome/'); ?>css/all.min.css" rel="stylesheet" type="text/css">

  <!-- my css -->
    <link rel="stylesheet" href="<?= base_url(''); ?>/style.css">
    <link rel="stylesheet" href="<?= base_url('')?>/assets/css/jquery-ui.css">
    <link rel="icon" class="fa fa-car fa-lg" style="color: #ffd000; margin-right: 7px;">

    <!-- My fonts -->
    <link href="<?= base_url(''); ?>/assets/css/poppins-font.css" rel="stylesheet">

    <!-- my CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">

    <!-- Date Time Picker -->
    <link href="<?= base_url(''); ?>/assets/css/jquery.datetimepicker.min.css" rel="stylesheet">

        

</head>

<body id="page-top">
   <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-dark topbar static-top shadow" style="background-color: #343a40">
        <i class="fa fa-car fa-2x icon-orange mr-2" style="color: #ffd000" ></i>
        <a class="navbar-brand mt-2" href="<?php echo site_url('rental/c_rental/index');?>"><h4><strong>Werent</strong></h4></a>

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

           <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                
                <span class="mr-2 d-none d-lg-inline text-white"><?php echo $this->session->userdata('NAMA_RENTAL'); ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/uploads/rental/image-profil/') ?><?php echo $this->session->userdata('FOTO_RENTAL'); ?>">
                
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo site_url('rental/c_rental/index');?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile Rental
                </a>
                <a class="dropdown-item" href="<?php echo site_url('rental/c_mobil/daftarKendaraan');?>">
                  <i class="fas fa-car fa-sm fa-fw mr-2 text-gray-400"></i>
                  Daftar Kendaraan
                </a>
                <!-- <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Jadwal Kendaraan
                </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion " id="accordionSidebar" style="background-color: #ffd000">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('rental/c_rental/index');?>">
          <i class="fas fa-user fa-sm fa-fw"></i>
          <span>Profil Rental</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTransaksi" aria-expanded="true" aria-controls="collapseTransaksi">
          <i class="fas fa-money-check-alt"></i>
          <span>Transaksi</span>
        </a>
        <div id="collapseTransaksi" class="collapse" aria-labelledby="headingTransaksi" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="login.html">Belum Dibayar</a>
            <a class="collapse-item" href="register.html">Sudah dikonvirmasi</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTambahKendaraan" aria-expanded="true" aria-controls="collapseTambahKendaraan">
          <i class="fas fa-plus-circle"></i>
          <span>Tambah Kendaraan</span>
        </a>
        <div id="collapseTambahKendaraan" class="collapse" aria-labelledby="headingKendaraan" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('rental/c_mobil/tambahKendaraan');?>">Mobil</a>
            <a class="collapse-item" href="<?php echo site_url('rental/c_motor/tambahKendaraan');?>">Motor</a>
          </div>
        </div>
      </li>
      <!-- <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('rental/c_mobil/tambahKendaraan');?>">
          <i class="fas fa-user fa-sm fa-fw"></i>
          <span>Tambah Kendaraan</span></a>
      </li> -->

            <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseKendaraan" aria-expanded="true" aria-controls="collapseKendaraan">
          <i class="fas fa-fw fa-list-ul"></i>
          <span>Daftar Kendaraan</span>
        </a>
        <div id="collapseKendaraan" class="collapse" aria-labelledby="headingKendaraan" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo site_url('rental/c_mobil/daftarKendaraan');?>">Mobil</a>
            <a class="collapse-item" href="<?php echo site_url('rental/c_motor/daftarKendaraan');?>">Motor</a>
            <!-- <a class="collapse-item" href="register.html">Sedang Disewa</a>
            <a class="collapse-item" href="register.html">Sementara tidak disewa</a> -->
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-plus-circle"></i>
          <span>Jadwal Kendaraan</span></a>
      </li> -->


      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('auth/index');?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-fw fa-calendar-alt"></i>
          <span>Log out</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
