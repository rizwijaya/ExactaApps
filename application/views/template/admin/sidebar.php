<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="<?php echo base_url(); ?>admin">
                    <img src="<?php echo base_url(); ?>template/assets_admin/img/brand/blue.png" class="navbar-brand-img" alt="...">
                </a>
                <div class="ml-auto">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>admin">
                                <i class="ni ni-shop text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>scan">
                                <i class="ni ni-archive-2 text-green"></i>
                                <span class="nav-link-text">Absensi QR</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#navbar-scan" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-scan">
                                <i class="ni ni-archive-2 text-green"></i>
                                <span class="nav-link-text">Absensi QR</span>
                            </a>
                            <div class="collapse show" id="navbar-scan">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>scan/sesi1" class="nav-link">Absen Sesi 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>scan/sesi2" class="nav-link">Absen Sesi 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>scan/sesi3" class="nav-link">Absen Sesi 3</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>daftarpeserta/pembayaran">
                                <i class="ni ni-single-copy-04 text-pink"></i>
                                <span class="nav-link-text">Pembayaran</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-peserta" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-peserta">
                                <i class="ni ni-ui-04 text-info"></i>
                                <span class="nav-link-text">Daftar Peserta</span>
                            </a>
                            <div class="collapse show" id="navbar-peserta">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>daftarpeserta/peserta_sesi/1" class="nav-link">Peserta Hari 1 Sesi 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>daftarpeserta/peserta_sesi/2" class="nav-link">Peserta Hari 1 Sesi 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>daftarpeserta/peserta_sesi/3" class="nav-link">Peserta Hari 2 Sesi 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>daftarpeserta/peserta_sesi/4" class="nav-link">Peserta Hari 2 Sesi 2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>daftarpeserta/semua_peserta" class="nav-link">Semua Peserta</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#navbar-peserta2" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="navbar-peserta2">
                                <i class="ni ni-align-left-2 text-default"></i>
                                <span class="nav-link-text">Rekap Absen</span>
                            </a>
                            <div class="collapse show" id="navbar-peserta2">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>daftarpeserta/peserta_hadir" class="nav-link">Peserta Hadir</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url(); ?>daftarpeserta/peserta_tidakhadir" class="nav-link">Peserta Tidak Hadir</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <?php if ($this->session->userdata('id_grup') == 3) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>admin/tambah_panitia">
                                <i class="ni ni-ungroup text-orange"></i>
                                <span class="nav-link-text">Tambah Panitia</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>admin/atur_ticket">
                                <i class="ni ni-map-big text-primary"></i>
                                <span class="nav-link-text">Atur Ticket Expo</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>admin/daftaruser">
                                <i class="ni ni-map-big text-orange"></i>
                                <span class="nav-link-text">Daftar Username</span>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">Setelan</h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <i class="ni ni-ui-04"></i>
                                <span class="nav-link-text">Reset Password</span>
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>users/logout">
                                <i class="ni ni-chart-pie-35"></i>
                                <span class="nav-link-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div>
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->

                    <ul class="navbar-nav align-items-center ml-md-auto">

                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ni ni-ungroup"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default dropdown-menu-right">
                                <div class="row shortcuts px-4">
                                    <a href="<?php echo base_url(); ?>daftarpeserta/peserta_sesi/1" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                                            <i class="ni ni-calendar-grid-58"></i>
                                        </span>
                                        <small>Peserta Sesi 1</small>
                                    </a>
                                    <a href="<?php echo base_url(); ?>daftarpeserta/peserta_sesi/2" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                                            <i class="ni ni-email-83"></i>
                                        </span>
                                        <small>Peserta Sesi 2</small>
                                    </a>
                                    <a href="<?php echo base_url(); ?>daftarpeserta/peserta_sesi/3" class="col-4 shortcut-item">
                                        <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                                            <i class="ni ni-credit-card"></i>
                                        </span>
                                        <small>Peserta Sesi 3</small>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img alt="Image placeholder" src="<?php echo base_url(); ?>template/assets_admin/img/theme/team-4.jpg">
                                    </span>
                                    <div class="media-body ml-2 d-none d-lg-block">
                                        <span class="mb-0 text-sm font-weight-bold"><?php echo $this->session->userdata('nama') ?></span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Selamat Datang, <?php echo $this->session->userdata('nama') ?>!</h6>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="<?php echo base_url(); ?>users/logout" class="dropdown-item">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"><?= $title ?></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                    <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                    <li class="breadcrumb-item"><a href="#"><?= $menu ?></a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $sub_menu ?></li>
                                </ol>
                            </nav>
                        </div>

                    </div>