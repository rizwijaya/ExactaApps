<!-- banner start-->
<section class="hero-area banner-6 banner-6-alt" style="background-image: url(<?php echo base_url(); ?>template/assets_landing/images/bg/top_right_bg.png)">
   <div class="banner-item">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <div class="banner-content-wrap">
                  <div class="date-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="900ms">
                     <span class="event-day">23-24</span>
                     <span class="event-month">JANUARI</span>
                     <span class="event-year">2021</span>
                  </div>
                  <h2 class="sub-title color-primary wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">Pameran Kampus dan Try Out Terbesar di Madiun Raya</h2>
                  <h2 class="banner-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">
                     Expo Campus <br> Exacta 2021
                  </h2>
                  <div class="banner-info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                     <div class="icon">
                        <img src="<?php echo base_url(); ?>template/assets_landing/images/shap/Shape-1.png" alt="">
                     </div>
                     <h3>Gedung Padepokan Madiun Kampung Pesilat,
                        Selatan Alun-alun Caruban, Kabupaten Madiun, Jawa Timur</h3>
                  </div>
               </div>
               <!-- Banner content wrap end -->
            </div><!-- col end-->
            <div class="col-md-6">
               <div class="banner-image">
                  <img src="<?php echo base_url(); ?>template/assets_landing/images/hero_area/header_vector.png" alt="">
               </div>
            </div>
         </div><!-- row end-->
         <div class="row">
            <div class="col-12">
               <div class="ts-extra-feature banner-content-wrap">
                  <div class="row align-items-center justify-content-between">
                     <div class="col-md-4">
                        <!-- Countdown end -->
                        <div class="ts-count-down">
                           <div class="countdown clearfix wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                              <div class="counter-item">
                                 <!-- class="days" -->
                                 <span>10</span>
                                 <div class="smalltext">HARI</div>
                                 <b>:</b>
                              </div>
                              <div class="counter-item">
                                 <!-- class="hours" -->
                                 <span>16</span>
                                 <div class="smalltext">JAM</div>
                                 <b>:</b>
                              </div>
                              <div class="counter-item">
                                 <!-- class="minutes" -->
                                 <span>50</span>
                                 <div class="smalltext">MENIT</div>
                                 <b>:</b>
                              </div>
                              <div class="counter-item">
                                 <!-- class="seconds" -->
                                 <span>23</span>
                                 <div class="smalltext">DETIK</div>
                              </div>
                           </div>
                        </div>
                     </div><!-- end col -->
                     <div class="col-md-5">
                        <div class="banner-btn wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="300ms">
                           <a href="<?php echo base_url(); ?>home/view_ticket" class="btn">Beli Ticket yuk</a>
                           <a href="<?php echo base_url(); ?>home/view_ticket" class="btn btn-ticket"> <i class="fa fa-plus-circle" aria-hidden="true"></i> TAMBAHKAN KE KALENDER</a>
                        </div>
                     </div><!-- end col -->
                     <div class="col-md-2 text-right">
                        <div class="ts-image">
                           <img src="<?php echo base_url(); ?>template/assets_landing/images/hero_area/small_vector.png" alt="">
                        </div>
                     </div><!-- end col -->
                  </div><!-- end row -->
               </div><!-- end ts-extra-feature -->
            </div>
         </div>
      </div>
      <!-- Container end -->
   </div>
</section>
<!-- banner end-->

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
               Pilih Ticket Anda
            </h2>
         </div><!-- section title end-->
      </div><!-- col end-->
      <!-- row end-->
      <div class="row">
         <?php foreach ($ticket as $tk) : ?>
            <div class="col-lg-4 mb-4">
               <div class="pricing-item">
                  <img class="pricing-dot " src="<?php echo base_url(); ?>template/assets_landing/images/pricing/dot.png" alt="">
                  <div class="ts-pricing-box">
                     <span class="big-dot"></span>
                     <div class="ts-pricing-header">
                        <h2 class="ts-pricing-name"><?php echo $tk['category']; ?></h2>
                        <h4><span><?php if($tk['end_tgl'] != NULL) { echo date('d/', strtotime($tk['end_tgl'])); } echo date('d-m-Y', strtotime($tk['tgl_expo'])); ?></span></h4>
                        <h3 class="ts-pricing-price">
                           <span style="font-size:40px" class="currency">Rp. <?php echo number_format($tk['harga_ticket'], 0, ',', '.'); ?></span>
                        </h3>
                     </div>
                     <div class="ts-pricing-progress">
                        <p class="amount-progres-text"><?php echo $tk['deskripsi_ticket']; ?></p>
                     </div>
                     <div class="promotional-code">
                        <!-- <p class="promo-code-text">Enter Promotional Code</p> -->
                        <?php if (!empty($transaksi)) { ?>
                           <a href="#" onclick="return confirm('Satu Akun hanya dapat untuk membeli satu ticket, Silahkan mendaftar kembali untuk membeli!')" class="btn pricing-btn">Beli Ticket</a>
                        <?php } elseif ($this->session->userdata('id_user')) { ?>
                           <a href="<?php echo base_url(); ?>home/pilihan_ticket/<?php echo $tk['sts_ticket']; ?>" class="btn pricing-btn">Beli Ticket</a>
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
                     <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Waktu</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#references" role="tab" data-toggle="tab">Bagaimana cara bergabung</a>
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