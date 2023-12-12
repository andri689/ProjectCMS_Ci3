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
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Kategori</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <?php foreach ($kategori as $kate) { ?>
                                <li class="dropdown"><a
                                        href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><span>
                                            <?= $kate['nama_kategori'] ?>
                                        </span> </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php foreach ($kategori as $kate) { ?>
                        <li><a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a></li>
                    <?php } ?>
                    <li><a href="<?= base_url('auth') ?>" class="getstarted">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

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
        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">
                        <article class="entry entry-single">
                            <div class="entry-img">
                                <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                            </div>
                            <h2 class="entry-title">
                                <a href="blog-single.html">Blog Detail Page</a>
                            </h2>
                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                            href="blog-single.html"><?= $konten->judul; ?></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                            href="blog-single.html"><?= $konten->nama_kategori; ?></a>
                                    </li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a>
                                        </a></li>
                                </ul>
                            </div>
                            <div class="mb-5">
                                <img class="img-fluid rounded w-100 mb-4"
                                    src="<?= base_url('assets/upload/konten/' . $konten->foto) ?>" />
                            </div>

                            <div class="entry-content">
                                <p>
                                    <?= $konten->keterangan; ?>
                                </p>

                        </article><!-- End blog entry -->

                        <div class="blog-author d-flex align-items-center">
                            <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
                            <div>
                                <h4>Jane Smith</h4>
                                <div class="social-links">
                                    <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                                    <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                                </div>
                                <p>
                                    Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus
                                    accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse
                                    et accusantium ut unde voluptas.
                                </p>
                            </div>
                        </div><!-- End blog author bio -->

                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Search</h3>
                            <div class="sidebar-item search-form">
                                <form action="">
                                    <input type="text">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div><!-- End sidebar search formn-->

                            <div class="mb-5">
                            <h2 class="mb-4">Categories</h3>
                                <?php foreach ($kategori as $kate) { ?>
                                    <ul class="list-group list-group-flush" >
                                        <li class="list-group-item d-flex justify-content-between align-items-center px-0" ><a href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"
                                        ><?= $kate['nama_kategori'] ?> <span>(25)</span></a></li>
                                    </ul>
                                <?php } ?>
                            </div><!-- End sidebar categories-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

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
                                <?= $konfig->profil_website; ?>
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
                                        href="<?= base_url('home/kategori/' . $kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a>
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