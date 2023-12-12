<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $judul_halaman ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/NiceAdmin') ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url('assets/NiceAdmin') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/NiceAdmin') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/NiceAdmin') ?>/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?= base_url( ) ?>" class="logo d-flex align-items-center">
        <img src="<?= base_url('assets/NiceAdmin/assets') ?>/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0 " href="#" data-bs-toggle="dropdown" aria-expanded="true">
            <img src="<?= base_url('assets/NiceAdmin') ?>/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $this->session->userdata('nama') ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile " data-popper-placement="bottom-end" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(-20px, 38px);">
            <li class="dropdown-header">
            <?= $this->session->userdata('nama') ?> |
            <?= $this->session->userdata('level') ?>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?= base_url('auth/logout') ?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Log Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <!-- End Icons Nav -->
    <?php $menu = $this->uri->segment(2); ?>
    <li class="nav-item <?php if($menu=='home'){ echo "active";} ?> ">
      <a class="nav-link collapsed" href="<?= base_url('admin/home') ?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item <?php if($menu=='caraousel'){ echo "active";} ?>" >
      <a class="nav-link collapsed" href="<?= base_url('admin/caraousel') ?>">
        <i class="bi bi-menu-button-wide"></i>
        <span>Caraousel</span>
      </a>
    </li>
    <?php if($this->session->userdata('level')=='Admin') { ?>
      <li class="nav-item<?php if($menu=='user'){ echo "active";} ?>">
      <li class="nav-item" >
        <a class="nav-link collapsed" href="<?= site_url('admin/user') ?>">
          <i class="bi bi-person"></i>
          <span>user</span>
        </a>
      </li>
    <?php } ?>
    <?php if($this->session->userdata('level')=='Admin') { ?>
      <li class="nav-item <?php if($menu=='konfigurasi'){ echo "active";} ?>" >
        <a class="nav-link collapsed" href="<?= base_url('admin/konfigurasi') ?>">
          <i class="bi bi-file-earmark"></i>
          <span>Konfigurasi</span>
        </a>
      </li>
    <?php } ?>
    
    <li class="nav-item <?php if($menu=='kategori konten'){ echo "active";} ?>" >
      <a class="nav-link collapsed" href="<?= base_url('admin/kategori') ?>">
        <i class="bi bi-table"></i>
        <span>Kategori Konten</span>
      </a>
    </li>

    <li class="nav-item <?php if($menu=='konten'){ echo "active";} ?>" >
      <a class="nav-link collapsed" href="<?= base_url('admin/konten') ?>">
      <i class="bi bi-card-list"></i>
        <span>Konten</span>
      </a>
    </li><!-- End Error 404 Page Nav -->
    
    </ul>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="container">
      <?= $contents; ?>
    </div><!-- End Page Title -->
  </main>
    <!-- End #main -->



    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </footer><!-- End Footer -->
    

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/quill/quill.min.js"></script>
    <script src="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url('assets/NiceAdmin') ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/NiceAdmin') ?>/assets/js/main.js"></script>
    <script>
        $('#ngilang').delay('slow').slideDown('slow').delay(200).slideUp(600);
    </script>

</body>

</html>