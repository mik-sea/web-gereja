<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="Gereja ONKP Resort Jawa" name="description">
    <meta content="ONKP Resort Jawa" name="keywords">

    <!-- Favicons -->
    <link href="/templateUser/assets/img/favicon.png" rel="icon">
    <link href="/templateUser/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- tes CSS Files -->
    <link href="/templateUser/assets/tes/animate.css/animate.min.css" rel="stylesheet">
    <link href="/templateUser/assets/tes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/templateUser/assets/tes/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/templateUser/assets/tes/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/templateUser/assets/tes/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/templateUser/assets/tes/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- CSS DATATABLE -->
    <link rel="stylesheet" href="/templateAdmin/assets/modules/datatables.min.css">
    <!-- Template Main CSS File -->
    <link href="/templateUser/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Eterna - v4.6.0
  * Template URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
                <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <!-- <h1><a href="">ONKP Resort Jawa</a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <h1> <a href="<?= base_url('/') ?>"><img src="/templateUser/assets/img/logo.png" alt="" class="img-fluid"> ONKP Resort Jawa</a></h1>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="<?php if ($active == 'home') {
                                        echo 'active';
                                    } ?>" href="<?= base_url('/') ?>">Home</a></li>
                    <li class="dropdown"><a class="<?php if ($active == 'visi' || $active == 'sejarah' || $active == 'struktur' || $active == 'keanggotaan' || $active == 'tataGereja') {
                                                        echo 'active';
                                                    } ?>" href="#"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a <?php if ($active == 'visi') {
                                        echo "style='color:#e96b56'";
                                    } ?> href="<?= base_url('/visi-misi') ?>">Visi & Misi</a></li>
                            <li><a <?php if ($active == 'sejarah') {
                                        echo "style='color:#e96b56'";
                                    } ?> href="<?= base_url('/sejarah') ?>">Sejarah</a></li>
                            <li><a <?php if ($active == 'struktur') {
                                        echo "style='color:#e96b56'";
                                    } ?> href="<?= base_url('/struktur-majelis') ?>">Struktur Majelis</a></li>
                            <li><a <?php if ($active == 'keanggotaan') {
                                        echo "style='color:#e96b56'";
                                    } ?> href="<?= base_url('/keanggotaan') ?>">Keanggotaan</a></li>
                            <li><a <?php if ($active == 'tataGereja') {
                                        echo "style='color:#e96b56'";
                                    } ?> href="<?= base_url('/tata-gereja') ?>">Tata Gereja</a></li>
                            <li><a href="#">Perikopen ONKP</a></li>
                            <li><a href="#">Agende/Liturgi ONKP</a></li>
                            <li><a href="#">Buku Zinuno / Kidung Jemaat</a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Jemaat</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Jakarta</a></li>
                            <li><a href="#">Cikarang</a></li>
                            <li><a href="#">Depok</a></li>
                            <li><a href="#">Tangerang</a></li>
                            <li><a href="#">Bandung</a></li>
                            <li><a href="#">Bandung Timur</a></li>
                            <li><a href="#">Sepatan</a></li>
                            <li><a href="#">Sawangan</a></li>
                            <li><a href="#">Bekasi</a></li>
                            <li><a href="#">Bandung Selatan</a></li>

                        </ul>
                    </li>
                    <li class="dropdown"><a class="<?php if ($active == 'gallery') {
                                                        echo 'active';
                                                    } ?>" href="#"><span>Kegiatan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a <?php if ($active == 'gallery') {
                                        echo "style='color:#e96b56'";
                                    } ?> href="<?= base_url('gallery') ?>">Gallery</a></li>
                            <li><a href="#">Rapat</a></li>
                            <li><a href="#">Ibadah Raya Jemaat</a></li>
                            <li><a href="#">Kegiatan Komisi</a></li>
                            <li><a href="#">Hari Besar Gereja ONKP</a></li>
                            <li><a href="#">Natal</a></li>
                            <li><a href="#">Katekisasi</a></li>
                            <li><a href="#">Baptisan Kudus</a></li>
                            <li><a href="#">Pemberkatan Nikah</a></li>


                        </ul>
                    </li>
                    <li class="dropdown"><a class="<?php if ($active == 'bukuRenungan' || $active == 'sudutPandang') {
                                                        echo 'active';
                                                    } ?>" href="#"><span>Renungan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a <?php if ($active == 'bukuRenungan') {
                                        echo "style='color:#e96b56'";
                                    } ?> href="<?= base_url('/buku-renungan') ?>">Buku Renungan</a></li>
                            <li><a <?php if ($active == 'sudutPandang') {
                                        echo "style='color:#e96b56'";
                                    } ?> href="<?= base_url('/sudut-pandang') ?>">Sudut Pandang</a></li>


                        </ul>
                    </li>
                    <li><a href="<?= base_url('kontak') ?>" class="<?php if ($active == 'kontak') {
                                                                        echo 'active';
                                                                    } ?>">Hubungi Kami</a></li>
                    <li> <a href="<?= base_url('admin'); ?>" class="btn btn-sm btn-primary mx-4 p-1 px-3" style="color: white;">Login</a></li>
                    <!-- <li><a href="blog.html">Blog</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li> -->
                </ul>



                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->