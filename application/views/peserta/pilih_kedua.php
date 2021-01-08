<div id="page-banner-area" class="page-banner-area" style="background-image:url(<?php echo base_url(); ?>/template/assets_landing/images/hero_area/banner_bg.jpg)">
   <!-- Subpage title start -->
   <div class="page-banner-title">
      <div class="text-center">
         <h2>Ticket Hari 2</h2>
         <ol class="breadcrumb">
            <li>
               <a href="#">Home /</a>
            </li>
            <li>
               Ticket
            </li>
         </ol>
      </div>
   </div><!-- Subpage title end -->
</div>
<!-- ts speaker start-->
<section class="ts-intro box-style">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 mx-auto">
            <h2 class="section-title text-center">
               <span>Datang dan Ramaikan</span>
               Kenapa kamu harus datang?
            </h2>
         </div><!-- col end-->
      </div><!-- row end-->
      <div class="row">
         <div class="col-md-4 item">
            <div class="about-intro-text text-center mb-60">
               <i class="icon-speaker"></i>
               <h3 class="ts-title">Bertemu Tokoh Keren</h3>
               <p>
                  DiExacta 2021 kamu akan bertemu dengan para tokoh keren yang akan memberikan inpirasi.
               </p>
            </div><!-- single intro text end-->
         </div><!-- end col-->
         <div class="col-md-4 item">
            <div class="about-intro-text text-center mb-60">
               <i class="icon icon-netwrorking"></i>
               <h3 class="ts-title">Konsultasikan Mimpimu</h3>
               <p>
                  Konsultasikan mimpimu untuk berkuliah di kampus impian
               </p>
            </div><!-- single intro text end-->
         </div><!-- end col-->
         <div class="col-md-4 item">
            <div class="about-intro-text text-center mb-60">
               <i class="icon icon-fun"></i>
               <h3 class="ts-title">Acara Sesuai Protokol Kesehatan</h3>
               <p>
                  Acara akan diadakan sesuai dengan protokol kesehatan yang ada dan tetap menjaga jarak.
               </p>
            </div><!-- single intro text end-->
         </div><!-- end col-->
         <div class="indicator"></div>
      </div><!-- row end -->
   </div><!-- end container -->
</section>
  <!-- Ticket Selling-->
  <section class="ts-pricing gradient" style="background-image: url(<?php echo base_url(); ?>template/assets_landing/images/pricing/pricing_img.jpg)">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h2 class="section-title white">
               <span>Daftar harga ticket</span>
               Pilih Ticket Hari Kedua
            </h2>
         </div><!-- section title end-->
      </div><!-- col end-->
      <!-- row end-->
      <div class="row">
      <div class="col-lg-2"></div>
         <?php foreach ($ticket as $tk) : ?>
            <div class="col-lg-4 mb-4">
               <?php $dt = $this->peserta_model->sesi1($tk['id_sesi']);
               foreach ($dt['0'] as $cetak) : ?>
                  <div class="pricing-item <?php if(!($cetak < $tk['kapasitas'])) { echo 'disebled'; }?>">
                     <img class="pricing-dot " src="<?php echo base_url(); ?>template/assets_landing/images/pricing/dot.png" alt="">
                     <div class="ts-pricing-box">
                        <span class="big-dot"></span>
                        <div class="ts-pricing-header">
                           <h2 class="ts-pricing-name"><?php echo $tk['nama_sesi']; ?></h2>
                           <h4><span>Jam <?php echo date('H:i', strtotime($tk['mulai_expo'])); ?> - <?php echo date('H:i', strtotime($tk['end_expo'])); ?> WIB</span></h4>
                           <h3 class="ts-pricing-price">
                              <span style="font-size:40px" class="currency"><?php $disc = $tk['harga_ticket'] - $disk[0]['diskon']; ?>  Rp. <?php echo number_format($disc, 0, ',', '.'); ?></span>
                           </h3>
                        </div>
                        <div class="ts-pricing-progress">

                           <p class="amount-progres-text">Pelaksanaan <?php echo date('d/m/Y', strtotime($tk['tgl_expo'])); ?></p>
                           <div class="ts-progress">
                              <div class="ts-progress-inner" style="width: <?php $sum = ($cetak / $tk['kapasitas']) * 100;
                                                                           echo $sum; ?>%"></div>
                           </div>
                           <p class="ts-pricing-value"><?php echo $cetak; ?> / <?php echo $tk['kapasitas']; ?></p>
                        </div>
                        <div class="promotional-code">
                           <!-- <p class="promo-code-text">Enter Promotional Code</p> -->
                           <?php if (!($cetak < $tk['kapasitas'])) { ?>
                              <a href="#" class="btn pricing-btn">Beli Ticket</a>
                           <?php } elseif (!empty($transaksi)) { ?>
                              <a href="#" onclick="return confirm('Satu Akun hanya dapat untuk membeli satu ticket, Silahkan mendaftar kembali untuk membeli!')" class="btn pricing-btn">Beli Ticket</a>
                           <?php } elseif ($this->session->userdata('id_user')) { ?>
                              <a href="<?php echo base_url(); ?>home/order_ticket/<?php echo $hari1; ?>/<?php echo $tk['id_sesi']; ?>" class="btn pricing-btn">Beli Ticket</a>
                           <?php } else { ?>
                              <a href="<?php echo base_url(); ?>home/login/" class="btn pricing-btn">Beli Ticket</a>
                           <?php } ?>
                           <!-- <p class="vate-text">All prices exclude 25% VAT</p> -->
                        </div>
                     </div><!-- ts pricing box-->
                     <img class="pricing-dot1 " src="<?php echo base_url(); ?>/template/assets_landing/images/pricing/dot.png" alt="">
                  </div>
            </div>
         <?php endforeach; ?>
      <?php endforeach; ?>
      <div class="col-lg-2"></div> 
      <!-- col end-->
      </div>
   </div><!-- container end-->
   <div class="speaker-shap">
      <img class="shap2" src="<?php echo base_url(); ?>template/assets_landing/images/shap/pricing_memphis1.png" alt="">
   </div>
</section>
<!-- End Ticket -->

<!-- ts map direction start-->
<section class="ts-map-direction wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <h2 class="column-title">
               <span>Temukan lokasinya</span>
               Gedung Padepokan Madiun Kampung Pesilat
            </h2>

            <div class="ts-map-tabs">
               <ul class="nav" role="tablist">
                  <li class="nav-item">
                     <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Lokasinya</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Time</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#references" role="tab" data-toggle="tab">How to get there</a>
                  </li>
               </ul>

               <!-- Tab panes -->
               <div class="tab-content direction-tabs">
                  <div role="tabpanel" class="tab-pane active" id="profile">
                     <div class="direction-tabs-content">
                        <h3>Selatan Alun-alun Caruban</h3>
                        <p class="derecttion-vanue">
                           Kecamatan Mejayan, Kabupaten Madiun, Jawa Timur
                        </p>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="contact-info-box">
                                 <h3>Informasi Pemesanan Tiket </h3>
                                 <p><strong>Nama:</strong> Arienda Devi</p>
                                 <p><strong>Telp:</strong> 0862-7328-2321</p>
                                 <p><strong>Email: </strong> arienda@exacta.com</p>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="contact-info-box">
                                 <h3>Bantuan Layanan IT </h3>
                                 <p><strong>Nama:</strong> Rizqi Wijaya</p>
                                 <p><strong>Telp:</strong> 0821-2322-2222</p>
                                 <p><strong>Email: </strong> rizqi@exacta.com</p>
                              </div>
                           </div>
                        </div><!-- row end-->
                     </div><!-- direction tabs end-->
                  </div><!-- tab pane end-->
                  <div role="tabpanel" class="tab-pane fade" id="buzz">
                     <div class="direction-tabs-content">
                        <h3>Selatan Alun-alun Caruban</h3>
                        <p class="derecttion-vanue">
                        Kecamatan Mejayan, Kabupaten Madiun, Jawa Timur
                        </p>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="contact-info-box">
                                 <h3>Informasi Ticket </h3>
                                 <p><strong>Nama:</strong> Arienda Devi</p>
                                 <p><strong>Telp:</strong> 0862-7328-2321</p>
                                 <p><strong>Email: </strong> arienda@exacta.com</p>
                              </div>

                           </div>
                           <div class="col-md-6">
                              <div class="contact-info-box">
                                 <h3>Programmer Details </h3>
                                 <p><strong>Nama:</strong> Rizqi Wijaya</p>
                                 <p><strong>Telp:</strong> 0821-2322-2222</p>
                                 <p><strong>Email: </strong> rizqi@exacta.com</p>
                              </div>
                           </div>
                        </div><!-- row end-->
                     </div><!-- direction tabs end-->
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="references">
                     <div class="direction-tabs-content">
                        <h3>Selatan Alun-alun Caruban</h3>
                        <p class="derecttion-vanue">
                        Kecamatan Mejayan, Kabupaten Madiun, Jawa Timur
                        </p>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="contact-info-box">
                                 <h3>Informasi Ticket </h3>
                                 <p><strong>Nama:</strong> Arienda Devi</p>
                                 <p><strong>Telp:</strong> 0862-7328-2321</p>
                                 <p><strong>Email: </strong> arienda@exacta.com</p>
                              </div>

                           </div>
                           <div class="col-md-6">
                              <div class="contact-info-box">
                                 <h3>Programmer Details </h3>
                                 <p><strong>Name:</strong> Rizqi Wijaya</p>
                                 <p><strong>Telp:</strong> 0821-2322-2222</p>
                                 <p><strong>Email: </strong> rizqi@exacta.com</p>
                              </div>
                           </div>
                        </div><!-- row end-->
                     </div><!-- direction tabs end-->
                  </div>
               </div>
            </div><!-- map tabs end-->

         </div><!-- col end-->
         <div class="col-lg-6 offset-lg-1">
            <div class="ts-map">
               <div class="mapouter">
                  <div class="gmap_canvas">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1662.997884412085!2d111.65142386344655!3d-7.54246251168787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79c7c33fcdcbfb%3A0x4077ab285757214a!2sAlun-Alun%20Reksogati%20Caruban%20Kabupaten%20Madiun!5e0!3m2!1sid!2sid!4v1606628906158!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>

               </div>
            </div>
         </div>
      </div><!-- col end-->
   </div><!-- container end-->
   <div class="speaker-shap">
      <img class="shap1" src="<?php echo base_url(); ?>template/assets_landing/images/shap/Direction_memphis3.png" alt="">
      <img class="shap2" src="<?php echo base_url(); ?>template/assets_landing/images/shap/Direction_memphis2.png" alt="">
      <img class="shap3" src="<?php echo base_url(); ?>template/assets_landing/images/shap/Direction_memphis4.png" alt="">
      <img class="shap4" src="<?php echo base_url(); ?>template/assets_landing/images/shap/Direction_memphis1.png" alt="">
   </div>
</section>
<!-- ts map direction end-->