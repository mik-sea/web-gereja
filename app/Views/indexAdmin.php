<!DOCTYPE html>
<html lang="en">
<?php
$session = session();
?>

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Dashboard <?= $session->get("tipe") ?></title>

    <!-- Fontfaces CSS-->
    <link href="/templateAdmin/css/font-face.css" rel="stylesheet" media="all">
    <link href="/templateAdmin/req/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/templateAdmin/req/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/templateAdmin/req/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="/templateAdmin/req/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- req CSS-->
    <link href="/templateAdmin/req/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/templateAdmin/req/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/templateAdmin/req/wow/animate.css" rel="stylesheet" media="all">
    <link href="/templateAdmin/req/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/templateAdmin/req/slick/slick.css" rel="stylesheet" media="all">
    <link href="/templateAdmin/req/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/templateAdmin/req/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="/templateAdmin/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="/dashboardAdmin">
                            <img src="/templateUser/assets/img/logo.png" alt="CoolAdmin" width="70px" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-group"></i>Keanggotaan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="/tambahAnggota">Tambah Anggota</a>
                                </li>
                                <li>
                                    <a href="/verifikasiAnggota">Verifikasi Anggota</a>
                                </li>
                                <li>
                                    <a href="/verifikasiAnggota">Anggota</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-pencil-square-o"></i>Postingan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="/tambahAnggota">Verifikasi Postingan</a>
                                </li>
                                <li>
                                    <a href="/verifikasiAnggota">Postingan Artikel</a>
                                </li>
                                <li>
                                    <a href="/verifikasiAnggota">Postingan Jadwal</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/dashboardAdmin">
                    <img src="/templateUser/assets/img/logo.png" alt="ONKP admin" width="70px" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-group"></i>Keanggotaan</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/tambahAnggota">Tambah Anggota</a>
                                </li>
                                <li>
                                    <a href="/verifikasiAnggota">Verifikasi Anggota</a>
                                </li>
                                <li>
                                    <a href="/verifikasiAnggota">Anggota</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="js-arrow" href="#">
                                <i class="fas fa-pencil-square-o"></i>Postingan</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="/tambahPostingan">Tambah Postingan</a>
                                </li>
                                <li>
                                    <a href="/tambahAnggota">Verifikasi Postingan</a>
                                </li>
                                <li>
                                    <a href="/verifikasiAnggota">Postingan Artikel</a>
                                </li>
                                <li>
                                    <a href="/verifikasiAnggota">Postingan Jadwal</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <!-- searching -->
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <!-- end searching -->
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="/<?php echo $session->get("foto_profil") ? $session->get("foto_profil") : 'images/default.jpg'; ?>" alt="Foto Profil" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#"><?php echo $session->get("nama_lengkap"); ?></a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="/<?php echo $session->get("foto_profil") ? $session->get("foto_profil") : 'images/default.jpg'; ?>" alt="foto profil" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#"><?php echo $session->get("nama_lengkap"); ?></a>
                                                </h5>
                                                <span class="email"><?php echo $session->get("email"); ?></span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="/logout">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>Anggota</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2>388,688</h2>
                                                <span>Total Artikel</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="/templateAdmin/req/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="/templateAdmin/req/bootstrap-4.1/popper.min.js"></script>
    <script src="/templateAdmin/req/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- req JS       -->
    <script src="/templateAdmin/req/slick/slick.min.js">
    </script>
    <script src="/templateAdmin/req/wow/wow.min.js"></script>
    <script src="/templateAdmin/req/animsition/animsition.min.js"></script>
    <script src="/templateAdmin/req/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="/templateAdmin/req/counter-up/jquery.waypoints.min.js"></script>
    <script src="/templateAdmin/req/counter-up/jquery.counterup.min.js">
    </script>
    <script src="/templateAdmin/req/circle-progress/circle-progress.min.js"></script>
    <script src="/templateAdmin/req/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="/templateAdmin/req/chartjs/Chart.bundle.min.js"></script>
    <script src="/templateAdmin/req/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="/templateAdmin/js/main.js"></script>

</body>

</html>
<!-- end document-->