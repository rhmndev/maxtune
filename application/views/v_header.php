<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxtune</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- seting base_url( ) untuk memudahkan dalam menghubungkan file view dengan file css nya. -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style.css">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
  <!-- navbar start -->
  <nav>
    <div class="nav-content">
      <div class="logo">
        <img src="<?php echo base_url() ?>assets/img/mylogo.png" alt="maxtune-logo">
      </div>
        <ul class="nav-links">
          <li class="center"><a href="<?php echo base_url().'maxtune' ?>">Home</a></li>
          <li class="center"><a href="<?php echo base_url().'maxtune/about' ?>">About</a></li>
          <li class="center"><a href="<?php echo base_url().'maxtune/services' ?>">Services</a></li>
          <li class="center"><a href="<?php echo base_url().'maxtune/berita' ?>">Berita</a></li>
          <li class="center"><a href="<?php echo base_url().'maxtune/contact' ?>">Contact</a></li>
        </ul>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- jumbotron start -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Bengkel <span>Terpercaya</span><br> untuk Pelayanan<span>Tepat Waktu</span></h1>
    </div>
  </div>
  <!-- jumbotoron end -->

  <!-- title bar start -->
  <div class="d-flex justify-content-center">
    <div class="col-10 title-bar">
      <h1 class="judul"><?php echo $judul ?></h1>
    </div>
  </div>
  <!-- title bar end -->
