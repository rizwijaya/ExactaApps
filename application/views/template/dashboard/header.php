<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs ================================================== -->
    <meta charset="utf-8">

    <!-- Mobile Specific Metas ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Site Title -->
    <title>Exacta 2021 - Expo Campus, Sharing, and Faculties Fair</title>



    <!-- CSS
         ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/animate.css">
    <!-- magnific -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/magnific-popup.css">
    <!-- carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/owl.carousel.min.css">
    <!-- isotop -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/isotop.css">
    <!-- ico fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/xsIcon.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/responsive.css">

</head>

<body>
    <div class="body-inner">
        <!-- Header start -->
        <header id="header" class="header header header-transparent">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-2 col-6">
                        <!-- logo-->
                        <a class="navbar-brand logo" href="<?php echo base_url(); ?>home">
                            <img src="<?php echo base_url(); ?>template/assets_landing/images/logos/logo-alt.png" alt="">
                        </a>
                    </div><!-- end col -->

                    <div class="col-lg-8">
                        <nav class="navbar navbar-expand-lg text-lg-center justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="dropdown nav-item active">
                                        <a href="<?php echo base_url(); ?>home" class="">Home</i></a>
                                    </li>
                                    <li class="dropdown nav-item active">
                                        <a href="<?php echo base_url(); ?>home/view_ticket" class="">Pesan Ticket</i></a>
                                    </li>
                                    <?php if (!empty($transaksi)) { ?>
                                        <li class="dropdown nav-item active">
                                            <a href="<?php echo base_url(); ?>home/invoice" class="">Ticket Saya</i></a>
                                        </li>
                                    <?php } ?>
                                    <?php if ($this->session->userdata('id_grup') == 2 || $this->session->userdata('id_grup') == 3) { ?>
                                        <li class="dropdown nav-item active">
                                            <a href="<?php echo base_url(); ?>panitia" class="">Panitia</i></a>
                                        </li>
                                    <?php } ?>
                                    <?php if ($this->session->userdata('id_user')) { ?>
                                        <li class="dropdown nav-item">
                                            <a href="#" class="" data-toggle="dropdown">Halo, <?php echo $this->session->userdata('nama') ?> <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <?php if ($this->session->userdata('id_grup') == 1) { ?>
                                                    <?php if (!empty($myprofile)) { ?>
                                                        <li><a href="#popup_1" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">Profile Saya</a></li>
                                                    <?php } ?>
                                                <?php } ?>
                                                <!-- <li><a href="#">Ganti Password</a></li> -->
                                                <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
                                            </ul>
                                        </li>
                                    <?php } else { ?>
                                        <li class="dropdown nav-item active">
                                            <a href="<?php echo base_url(); ?>home/login" class="">Login</i></a>
                                        </li>
                                        <li class="dropdown nav-item active">
                                            <a href="<?php echo base_url(); ?>home/register" class="">Register</i></a>
                                        </li>
                                    <?php } ?>
                            </div>
                        </nav>
                    </div>
                    <!-- end col -->
                </div>
            </div><!-- container end-->
        </header>
        <!--/ Header end -->
        <!-- popup start-->
        <?php if ($this->session->userdata('id_user')) { ?>
            <?php if ($this->session->userdata('id_grup') == 1) { ?>
                <?php foreach ($myprofile as $mp) : ?>
                    <div id="popup_1" class="container ts-speaker-popup mfp-hide">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-img">
                                    <img src="<?php echo base_url(); ?>assets/user_photo/<?= $mp['photo_profile'] ?>" alt="">
                                </div>
                            </div><!-- col end-->
                            <div class="col-lg-6">
                                <div class="ts-speaker-popup-content">
                                    <h3 class="ts-title"><?= $mp['nama'] ?></h3>
                                    <span class="speakder-designation"><?= $mp['asal_sekolah'] ?></span>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><strong>Tanggal Lahir</strong> : <?php echo date('d/m/Y', strtotime($mp['tempat_lahir'])); ?></li>
                                        <li class="list-group-item"><strong>Nomor Telepon</strong> : <?= $mp['no_telp'] ?></li>
                                        <li class="list-group-item"><strong>Email</strong> : <?= $mp['email'] ?></li>
                                        <?php if (!empty($getexpo)) { ?>
                                            <?php foreach ($getexpo as $ge) : ?>
                                                <li class="list-group-item"><strong>Sesi Expo</strong> : <?php echo date('H:i', strtotime($ge['mulai_expo'])); ?> - <?php echo date('H:i', strtotime($ge['end_expo'])); ?> WIB (<?php echo date('d/m/Y', strtotime($ge['tgl_expo'])); ?>)</li>
                                            <?php endforeach; ?>
                                        <?php } else { ?>
                                            <li class="list-group-item"><strong>Sesi Expo</strong> : Belum Melakukan Pembelian</li>
                                        <?php } ?>
                                        <li class="list-group-item"><strong>Riwayat Perjalanan</strong> : <?= $mp['riwayat'] ?></li>
                                    </ul>
                                </div><!-- ts-speaker-popup-content end-->
                            </div><!-- col end-->
                        </div><!-- row end-->
                    </div><!-- popup end-->
                <?php endforeach; ?>
            <?php } ?>
        <?php } ?>
    </div> <!-- col end-->
    </div> <!-- col end-->