<div id="page-banner-area" class="page-banner-area" style="background-image:url(<?php echo base_url(); ?>/template/assets_landing/images/hero_area/banner_bg.jpg)">
  <!-- Subpage title start -->
  <div class="page-banner-title">
    <div class="text-center">
      <h2>Profile</h2>
      <ol class="breadcrumb">
        <li>
          <a href="#">Home /</a>
        </li>
        <li>
          Profile
        </li>
      </ol>
    </div>
  </div><!-- Subpage title end -->
</div>

<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets_form/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets_form/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets_form/vendor/animate/animate.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets_form/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets_form/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets_form/vendor/select2/select2.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets_form/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets_form/css/util.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>template/assets_form/css/main.css">
<style>
  .mt-n1 {
    margin-top: -3.00rem !important;
  }
</style>

<body>
  <div class="container-contact100">
    <div class="wrap-contact100 mb-5 mt-5">
      <form class="contact100-form validate-form" action="<?= base_url() ?>peserta/aksi_lengkap" method="post" enctype="multipart/form-data">
        <span class="contact100-form-title">
          Lengkapi Profile
        </span>
        <p><?php echo $this->session->flashdata('pesan'); ?></p>
        <input class="input100" type="text" value="<?php echo $this->session->userdata('id_user') ?>" id="id_user" name="id_user" hidden>
        <div class="wrap-input100 validate-input" data-validate="Isi Nama lengkap">
          <span class="label-input100">Nama Lengkap</span>
          <input class="input100" type="text" value="<?php echo $this->session->userdata('nama') ?>" id="nama" name="nama" type="text" readonly>
          <span class="focus-input100"></span>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="wrap-input100 validate-input" data-validate="Isi nomor telepon">
              <span class="label-input100">Nomor Telepon</span>
              <input class="input100" type="number" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required="">
              <span class="focus-input100"></span>
            </div>
            <?php echo form_error('no_telp', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
          </div>
          <div class="col-md-6">
            <div class="wrap-input100 validate-input">
              <span class="label-input100">Asal Sekolah</span>
              <input class="input100" placeholder="Asal Sekolah" id="asal_sekolah" name="asal_sekolah" type="text" required="">
              <span class="focus-input100"></span>
            </div>
            <?php echo form_error('asal_sekolah', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
          </div>
        </div>
        <div class="wrap-input100 validate-input">
          <span class="label-input100">Tanggal Lahir</span>
          <input class="input100" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir" type="date" required="">
          <span class="focus-input100"></span>
        </div>
        <div class="wrap-input100 validate-input">
          <span class="label-input100">Upload Foto Identitas Max. 2mb (jpg/jpeg/png/pdf)</span>
          <div>
            <input class="mt-4" type="file" type="file" id="gambar" name="gambar" aria-describedby="inputGroupFileAddon01">
          </div>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Isi riwayat perjalanan">
          <span class="label-input100">Riwayat Perjalanan Format (Kota + Tanggal)</span>
          <textarea class="input100" name="riwayat" required="" id="riwayat" placeholder="Surabaya + 21-23 Desember 2020, Jogja + 1-2 Januari 2021 "></textarea>
          <span class="focus-input100"></span>
        </div>
        <?php echo form_error('riwayat', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
        <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <button class="contact100-form-btn" type="submit" name="submit" id="submit">
              <span>
                Lengkap Profile
                <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
              </span>
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div id="dropDownSelect1"></div>

  <!--===============================================================================================-->
  <script src="<?= base_url() ?>template/assets_form/vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>template/assets_form/vendor/animsition/js/animsition.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>template/assets_form/vendor/bootstrap/js/popper.js"></script>
  <script src="<?= base_url() ?>template/assets_form/vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  <script src="<?= base_url() ?>template/assets_form/vendor/select2/select2.min.js"></script>
  <script>
    $(".selection-2").select2({
      minimumResultsForSearch: 20,
      dropdownParent: $('#dropDownSelect1')
    });
  </script>
  <!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
  <!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <!--===============================================================================================-->
  <script src="js/main.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>

</body>