<div id="page-banner-area" class="page-banner-area" style="background-image:url(<?php echo base_url(); ?>/template/assets_landing/images/hero_area/banner_bg.jpg)">
    <!-- Subpage title start -->
    <div class="page-banner-title">
        <div class="text-center">
            <h2>Pendaftaran</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Home /</a>
                </li>
                <li>
                    daftar
                </li>
            </ol>
        </div>
    </div><!-- Subpage title end -->
</div>
<div class="container mb-5">
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <div class="hero-form-content">
                <h2>Daftar</h2>
                <p><?php echo $this->session->flashdata('pesan'); ?></p>
                <form action="<?php echo base_url(); ?>users/registering" method="POST" class="hero-form">
                    <input class="form-control form-control-email" placeholder="Email" id="email" name="email" type="email" required="">
                    <?php echo form_error('email', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
                    <input class="form-control form-control-password" placeholder="Nama" name="nama" id="nama" type="text" required="">
                    <?php echo form_error('nama', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
                    <input class="form-control form-control-password" placeholder="Password" name="password" id="password" type="password" required="">
                    <?php echo form_error('password', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
                    <input class="form-control form-control-password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" type="password" required="">
                    <?php echo form_error('confirm_password', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
                    <button class="btn" type="submit" name="submit"> Daftar</button>
                </form><!-- form end-->
                <p class="mt-4">Sudah Punya Akun? Silahkan <a href="<?php echo base_url(); ?>home/login">masuk.</a></p>
            </div><!-- hero content end-->
        </div>
    </div>
</div>
<!--/ Container end -->