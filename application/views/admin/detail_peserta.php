       <!-- Card stats -->
       </div>
       </div>
       </div>
       <!-- Page content -->
       <div class="container-fluid mt--6">
         <div class="card mb-4">
           <?php foreach ($detail as $dt) : ?>
             <div class="card-body">
               <div class="card">
                 <!-- List group -->
                 <div class="row">
                   <div class="col-md-3">
                     <img class="card-img-top" height="320px" src="<?php echo base_url(); ?>assets/user_photo/<?php echo $dt['photo_profile']; ?>" alt="Photo Profile">
                   </div>
                   <div class="col-md-9">
                     <ul class="list-group list-group-flush">
                         <br>
                       <li class="list-group-item">Nama Peserta : <?php echo $dt['nama'] ?></li>
                       <li class="list-group-item">Asal Sekolah : <?php echo $dt['asal_sekolah'] ?> </li>
                       <li class="list-group-item">Nomor Telepon : <?php echo $dt['no_telp'] ?></li>
                       <li class="list-group-item">Tanggal Lahir : <?php echo date('d/m/Y', strtotime($dt['tempat_lahir'])); ?></li>
                       <li class="list-group-item">Sesi Expo : <?php echo date('H:i', strtotime($expo[0]['mulai_expo'])); ?> - <?php echo date('H:i', strtotime($expo[0]['end_expo'])); ?> WIB (<?php echo date('d/m/Y', strtotime($expo[0]['tgl_expo'])); ?>)</li>
                       <?php if(!empty($expo[2]['mulai_expo'])) { ?>
                       <li class="list-group-item">Sesi Expo : <?php echo date('H:i', strtotime($expo[2]['mulai_expo'])); ?> - <?php echo date('H:i', strtotime($expo[2]['end_expo'])); ?> WIB (<?php echo date('d/m/Y', strtotime($expo[2]['tgl_expo'])); ?>)</li>
                       <?php } ?>
                       <li class="list-group-item">Riwayat Perjalanan : <?php echo $dt['riwayat'] ?></li>
                     </ul>
                   </div>
                 </div>

                 <!-- Card body -->
                 <div class="card-body">
                     <br><br>
                   <div class="row">
                       <div class="col-md-3">
                       <h3 class="card-title mb-3">Ticket Barcode Peserta</h3>
                       <img class="card-img-top" height="250px" src="<?php echo base_url(); ?>assets/qr_code/<?php echo $dt['barcode']; ?>" alt="Barcode">
                       </div>
                       <div class="col-md-5">
                       <h3 class="card-title mb-3">Kartu Identitas Peserta</h3>
                       <img class="card-img-top" height="250px" src="<?php echo base_url(); ?>assets/user_identitas/<?php echo $dt['photo_identitas']; ?>" alt="Photo Identitas">
                       </div>
                   </div>
                   <!-- <p class="card-text mb-4">Terdapat beberapa fasilitas pada</p> -->
                   <div class="col text-right">
                       <br>
                     <a class="btn btn-danger mb-0" href="<?php echo base_url(); ?>admin">Kembali</a>
                   </div>
                 </div>
               </div>
             </div>
           <?php endforeach; ?>
         </div> <!-- Div Class Container Content-->