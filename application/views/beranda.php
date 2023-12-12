<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>
        <?= $judul; ?>
    </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets/front/') ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('assets/front/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="<?= base_url('assets/front/') ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets/front/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/front/') ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url('assets/front/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="<?= base_url('assets/front/') ?>assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">
                    <?= $konfig->judul_website; ?>
                </a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <?php foreach ($kategori as $kate) { ?>
                                <li class="dropdown"><a
                                        href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><span>
                                            <?= $kate['nama_kategori'] ?>
                                        </span></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php foreach ($kategori as $kate) { ?>
                        <li><a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
                                <?= $kate['nama_kategori'] ?>
                            </a></li>
                    <?php } ?>
                    <li><a href="<?= base_url('auth') ?>" class="getstarted">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <?php $no = 1;
                foreach ($caraousel as $aa) { ?>
                    <div class="carousel-item <?php if ($no == 1) {
                        echo 'active';
                    } ?>">
                        <img src="<?= base_url('assets/upload/caraousel/' . $aa['foto']) ?>" class="d-block w-100">
                    </div>
                    <?php $no++;
                } ?>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Selamat Datang</h2>
                    <ol>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>Blog</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container">
                <div class="row">
                    <?php foreach ($konten as $uu) { ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <article class="entry">
                                <div class="entry-img">
                                    <img src="<?= base_url('assets/upload/konten/' . $uu['foto']) ?>" class="img-fluid"
                                        style="height: 200px; width: 100%;">
                                </div>
                                <h4 class="">
                                    <?= $uu['judul'] ?>
                                </h4>
                                <div class="entry-meta">
                                    <ul>
                                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                                href="blog-single.html">
                                                <?= $uu['nama'] ?>
                                            </a></li>
                                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                                href="blog-single.html"><time datetime="2020-01-01">
                                                    <?= $uu['nama_kategori'] ?>
                                                </time></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <div class="read-more">
                                        <a href="<?= base_url('home/artikel/' . $uu['slug']) ?>">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </article><!-- End blog entry -->
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="blog-pagination">
                        <ul class="justify-content-center">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>
        
        </section><!-- End Blog Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>
                                <?= $konfig->judul_website; ?>
                            </h3>
                            <p>
                                <?= $konfig->judul_website; ?>
                            </p>
                            <div class="social-links mt-3">
                                <a href="<?= $konfig->facebook; ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="<?= $konfig->instagram; ?>" class="instagram"><i
                                        class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-rht"></i> <a href="<?= base_url() ?>"></a></li>
                            <?php foreach ($kategori as $kate) { ?>
                                <li><i class="bx bx-chevron-right"></i> <a
                                        href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>">
                                        <?= $kate['nama_kategori'] ?>
                                    </a>
                                <?php } ?>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Alamat</h4>
                        <p>
                            <?= $konfig->alamat; ?>
                        </p>
                        <h4>Contact Us</h4>
                        <p>
                            <strong>Phone:
                                <?= $konfig->no_wa; ?>
                            </strong> <br>
                            <strong>Email:
                                <?= $konfig->email; ?>
                            </strong> <br>
                        </p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>
                        <?= $konfig->judul_website; ?>
                    </span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/front/') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets/front/') ?>/assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="<?= base_url('assets/front/') ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/front/') ?>/assets/js/main.js"></script>

</body>

</html>