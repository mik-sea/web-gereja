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
                            <img src="/templateUser/assets/img/logo.png" alt="CoolAdmin" width="70px"/>
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
                    <img src="/templateUser/assets/img/logo.png" alt="ONKP admin" width="70px"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
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
                        <li class="active">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-pencil-square-o"></i>Postingan</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="active">
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
                                            <img src="/<?php echo $session->get("foto_profil")?$session->get("foto_profil") :'images/default.jpg'; ?>" alt="Foto Profil" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $session->get("nama_lengkap"); ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="/<?php echo $session->get("foto_profil")?$session->get("foto_profil") :'images/default.jpg'; ?>" alt="foto profil" />
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
                    <div class="card">
                        <div class="card-header">
                            <strong>Horizontal</strong> Form
                        </div>
                        <div class="card-body card-block">
                            <form action="" method="post" class="form-horizontal">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hf-judul" class=" form-control-label">Judul</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="hf-judul" name="judul" placeholder="Masukkan Judul" class="form-control">
                                        <span class="help-block">Judul berita/layanan</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hf-file" class=" form-control-label">Upload Gambar</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="hf-file" name="file" class="form-control">
                                        <span class="help-block">Ext : jpg/png</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="select" class=" form-control-label">Kategori, Jenis</label>
                                    </div>
                                        <div class="col-3">
                                            <select name="select" id="kategori" class="form-control">
                                                <!-- data dari database -->
                                                <option value="0">Please select</option>
                                                <?php
                                                    foreach($kategori as $k){
                                                ?>
                                                    <option value="<?php echo $k['id_kategori']; ?>"><?php echo $k['nama_kategori']; ?></option>
                                                <?php }?>
                                                <option value="addKategori">Tambah kategori</option>
                                            </select>
                                            <span class="help-block">Kategori</span>
                                        </div>
                                        <div class="col-3">
                                            <select name="select" id="jenis" class="form-control">
                                            </select>
                                            <span class="help-block">Jenis</span>
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class=" form-control-label">Ringkasan</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="ringkasan" id="textarea-input" rows="3" placeholder="Content..." class="form-control"></textarea>
                                        <span class="help-block">Ringkasan berita</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="textarea-input" class="form-control-label">Isi Berita</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                    <textarea name="isi" class="form-control konten"></textarea>
                                        <span class="help-block">Isi berita</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
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
    <script src="/templateAdmin/req/select2/select2.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.konten',
            menubar: true,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | bold italic strikethrough forecolor backcolor | link image | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
    <script>
        $("#kategori").change(function(){
            let id_kategori = $("#kategori").val();
            if(id_kategori == "addKategori"){
                console.log("add");
            }else if(id_kategori == 0){
                $("#jenis").html(`<option disable></option>`)
            }
            else{
                var settings = {
                    "url": "http://localhost:8080/jenis/"+id_kategori,
                    "method": "POST",
                    "timeout": 0,
                    "dataType": "JSON",
                };

                $.ajax(settings).done(function(response){
                    let html;
                    response.forEach(function(res)
                    {
                        html += `<option value='${res.id_jenis}'>${res.jenis_kategori}</option>`
                    })
                    $("#jenis").html(`<option>Please select</option>`+html+`<option value='addJenis'>Tambah Jenis</option>`)
                });
            }
        })
        $("#jenis").change(function(){
            let id_jenis = $("#jenis").val();
            if(id_jenis == "addJenis"){
                console.log("add jenis")
            }
        })
    </script>
    <!-- Main JS-->
    <script src="/templateAdmin/js/main.js"></script>

</body>

</html>
<!-- end document-->
