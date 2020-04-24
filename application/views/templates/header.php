<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">
     <!--=== FontAwesome CSS ===-->
    <link href="<?= base_url(''); ?>assets/fontawesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url('assets/fontawesome/'); ?>css/all.min.css" rel="stylesheet" type="text/css">

    <!-- My fonts -->
    <link href="<?= base_url(''); ?>/assets/css/poppins-font.css" rel="stylesheet">

    <!-- my CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">

    <!-- Date Time Picker -->
    <link href="<?= base_url(''); ?>/assets/css/jquery.datetimepicker.min.css" rel="stylesheet">



    <title>Home Werent</title>
  </head>
  <body>
    

    <!-- navbar -->
 
     
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
            <a class="navbar-brand " href="<?php echo site_url('auth/index');?>"><span class="title-line"><i class="fa fa-car fa-lg" style="color: #ffd000; margin-right: 7px;"></i></span>Werent</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link " href="#">Cara Pesan</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " text-white href="#">Tips & Artikel</a>
                </li>
                <li class="nav-item ">
                  <a class="btn btn-warning font-weight-bolder tombol "  type="button" data-toggle="modal" data-target="#modalMasuk" href="#">Masuk</a>
                </li>
                
              </ul>
            </div>
          </div>
        </nav>

      

    <!-- akhir navbar -->