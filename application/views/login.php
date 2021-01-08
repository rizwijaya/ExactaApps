<div id="page-banner-area" class="page-banner-area" style="background-image:url(<?php echo base_url(); ?>/template/assets_landing/images/hero_area/banner_bg.jpg)">
  <!-- Subpage title start -->
  <div class="page-banner-title">
    <div class="text-center">
      <h2>Login</h2>
      <ol class="breadcrumb">
        <li>
          <a href="#">Home /</a>
        </li>
        <li>
          Login
        </li>
      </ol>
    </div>
  </div><!-- Subpage title end -->
</div>
<div class="container mb-5">
  <div class="row">
    <div class="col-lg-4 mx-auto">
      <div class="hero-form-content">
        <h2>Login</h2>
        <p><?php echo $this->session->flashdata('pesan'); ?></p>
        <form action="<?php echo base_url(); ?>users/checkinglogin" method="POST" class="hero-form">
          <input class="form-control form-control-email" placeholder="Email" id="email" name="email" type="email" required="">
          <?php echo form_error('email', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
          <input class="form-control form-control-password" placeholder="Password" name="password" id="password" type="password" required="">
          <?php echo form_error('password', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
          <button class="btn" type="submit" name="submit"> Login</button>
        </form><!-- form end-->
        <p class="mt-4">Belum Punya Akun? Silahkan <a href="<?php echo base_url(); ?>home/register">daftar.</a></p>
      </div><!-- hero content end-->
    </div>
  </div>
</div>
<!--/ Container end -->