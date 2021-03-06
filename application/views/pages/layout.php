<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>School Web</title>
  <link rel="stylesheet" href="<?= base_url('/css/home.css') ?>">
  <link rel="stylesheet" href="<?= base_url('/css/page-layout.css') ?>">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>
<body>

  <?php $this->load->view('nav') ?>
  
  <div class="page-layout-bg">
    <img src="<?= base_url('img/banner.jpg') ?>">
    <div class="page-layout-title">JUDUL HALAMAN</div>
  </div>

  <div class="page-layout-nav">
    <a href="#">Home</a>
    <i class="material-icons">keyboard_arrow_right</i>
    <a href="#">Judul Halaman</a>
  </div>

  <div class="page-layout-second-title">
    <div class="page-layout-second-title-text">Judul Halaman</div>
    <div class="page-layout-second-title-border"></div>
  </div>

  <div class="page-layout-box">
    
    <div class="page-layout-box-container">
      body
    </div>

    <?php $this->load->view('footer') ?>

  </div>

</body>
</html>

