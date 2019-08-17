
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<title>Sistem Informasi Pendidikan</title>
<!-- Favicon-->
<link rel="icon" href="<?= base_url();?>assets/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

<!-- Bootstrap Core Css -->
<link href="<?= base_url();?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Waves Effect Css -->
<link href="<?= base_url();?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

<!-- Animation Css -->
<link href="<?= base_url();?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

<!-- Morris Chart Css-->
<link href="<?= base_url();?>assets/plugins/morrisjs/morris.css" rel="stylesheet" />

<!-- JQuery DataTable Css -->
<link href="<?= base_url();?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

<!-- Bootstrap DatePicker Css -->
<link href="<?= base_url();?>assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

<!-- Bootstrap Select Css -->
<link href="<?= base_url();?>assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<!-- Custom Css -->
<link href="<?= base_url();?>assets/css/style.css" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
<link href="<?= base_url();?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>Please wait...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="START TYPING...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">SISTEM INFORMASI PENDIDIKAN MOROWALI</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <!-- <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li> -->
                <!-- #END# Call Search -->
                
                <li class="dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                        <i class="material-icons">more_vert</i>
                        <span class="label-count"></span>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="<?= base_url();?>administrator"><i class="material-icons">person</i>Admin</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="<?= base_url();?>login/logout" onclick="return confirm('Apakah Anda yakin ingin keluar?')"><i class="material-icons">input</i>Sign Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="<?= base_url();?>assets/images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dinas Pendidikan Morowali</div>
                <div class="email">Kabupaten  Sulawesi Tengah</div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li id="menu1">
                    <a href="<?= base_url();?>">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li id="menu2">
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">swap_calls</i>
                        <span>Data Pendidikan</span>
                    </a>
                    <ul class="ml-menu">
                        <li id="menu2-1">
                            <a href="<?= base_url();?>pendidikanusia">Penduduk Berdasarkan Usia Sekolah</a>
                        </li>
                        <li id="menu2-2">
                            <a href="<?= base_url();?>paud">Pendidikan Anak Usia Dini</a>
                        </li>
                        <li id="menu2-3">
                            <a href="<?= base_url();?>tk">Sekolah Taman Kanak-Kanak</a>
                        </li>

                        <li id="menu2-4">
                            <a href="<?= base_url();?>sd">Pendidikan Dasar</a>
                        </li>
                        <li id="menu2-5">
                            <a href="">Pendidikan Menengah Pertama</a>
                        </li>
                        <li id="menu2-6">
                            <a href="">Pendidikan Menengah Atas dan Kejuruan</a>
                        </li>
                        <!-- <li id="menu2-7">
                            <a href="">Pendidikan Non-Formal</a>
                        </li> -->
                    </ul>
                </li>
                <li id="menu3">
                    <a href="<?= base_url();?>pegawai">
                        <i class="material-icons">people</i>
                        <span>Kepegawaian </span>
                    </a>
                </li>
                <li id="menu4">
                    <a href="<?= base_url();?>konsultasi">
                        <i class="material-icons">forum</i>
                        <span>Konsultasi </span>
                    </a>
                </li>
                <li id="menu6">
                    <a href="<?= base_url();?>absen">
                        <i class="material-icons">archive</i>
                        <span>Absen </span>
                    </a>
                </li>
                <li id="menu5">
                    <a href="<?= base_url();?>administrator">
                        <i class="material-icons">assignment_ind</i>
                        <span>Administrator </span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2019<a href="javascript:void(0);">&nbsp;Muaz - Code XV Developer</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>