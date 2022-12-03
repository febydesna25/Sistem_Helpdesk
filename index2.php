<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Aplikasi Helpdesk Laundry</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php">Aplikasi Helpdesk Laundry</a>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Fitur
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index2.php?p=home"  data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-home"></i>Home</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="index2.php?p=data_bagian"  data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-fw fa-table"></i>Data Bagian</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index2.php?p=data_item"  data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-fw fa-table"></i>Data Item Masalah</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="index2.php?p=data_tiketmasuk" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Data Ticket Masuk</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index2.php?p=data_penanganan" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Data Penanganan</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index2.php?p=rating_penanganan" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Rating Penanganan</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index2.php?p=laporantiket" data-target="#submenu-5" aria-controls="submenu-5"><i class=" fas fa-prescription-bottle"></i>Laporan Ticket Masuk</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index2.php?p=laporan_penanganan" data-target="#submenu-5" aria-controls="submenu-5"><i class=" fas fa-prescription-bottle"></i>Laporan Penanganan</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index2.php?p=laporan_rating" data-target="#submenu-5" aria-controls="submenu-5"><i class=" fas fa-prescription-bottle"></i>Laporan Rating</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php" data-target="#submenu-5" aria-controls="submenu-5"><i class=" fas fa-sign-out-alt"></i>Logout</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="card">
                    <?php
                    $p=isset($_GET['p']) ? $_GET['p'] : 'home';
                    if ($p=='home') include('home.php');
                    if ($p=='data_bagian') include('data_bagian.php');
                    if ($p=='data_kategori') include('data_kategori.php');
                    if ($p=='item_masalah') include('item_masalah.php');
                    if ($p=='data_item') include('data_item.php');
                    if ($p=='edit_item') include('edit_item.php');
                    if ($p=='hapus_item') include('hapus_item.php');
                    if ($p=='form_tiketmasuk') include('form_tiketmasuk.php');
                    if ($p=='data_tiketmasuk') include('data_tiketmasuk.php');
                    if ($p=='edit_tiket') include('edit_tiket.php');
                    if ($p=='hapus_tiket') include('hapus_tiket.php');
                    if ($p=='input_penanganan') include('input_penanganan.php');
                    if ($p=='data_penanganan') include('data_penanganan.php');
                    if ($p=='edit_penanganan') include('edit_penanganan.php');
                    if ($p=='hapus_penanganan') include('hapus_penanganan.php');
                    if ($p=='input_rating') include('input_rating.php');
                    if ($p=='rating_penanganan') include('rating_penanganan.php');
                    if ($p=='edit_rating') include('edit_rating.php');
                    if ($p=='hapus_rating') include('hapus_rating.php');
                    if ($p=='laporantiket') include('laporantiket.php');
                    if ($p=='laporan_penanganan') include('laporan_penanganan.php');
                    if ($p=='laporan_rating') include('laporan_rating.php');
                    if ($p=='print_tiket') include('print_tiket.php');
                    if ($p=='print_penanganan') include('print_penanganan.php');
                    if ($p=='print_rating') include('print_rating.php');
                    ?>
                    </div>
                    <div class="row">
                    </div>
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>