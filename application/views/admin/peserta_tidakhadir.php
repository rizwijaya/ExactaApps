       <!-- Card stats -->
       </div>
       </div>
       </div>
       <!-- Page content -->
       <div class="container-fluid mt--6">
         <div class="card mb-4">
           <!-- Table dimulai -->
           <div class="card-header border-0">
             <div class="row align-items-center">
               <div class="col">
                 <h3 class="mb-0">Data Peserta yang <?php echo $table; ?></h3>
               </div>
                <!-- Button trigger modal -->
                <div class="col text-right">
                 <a class="btn btn-primary mb-0" href="<?php echo base_url(); ?>daftarpeserta/cetak_tidakhadir"><i class="fa fa-print"></i> Cetak Laporan</a>
               </div> 
             </div>
           </div>
           <!-- Isi Tabel -->
           <div class="table-responsive">
             <table class="table align-items-center table-flush">
               <thead class="thead-light">
                 <tr>
                   <th scope="col" class="sort" data-sort="no">No</th>
                   <th scope="col" class="sort" data-sort="photo">Photo</th>
                   <th scope="col" class="sort" data-sort="nama">Nama</th>
                   <th scope="col" class="sort" data-sort="tgl_lahir">Tanggal Lahir</th>
                   <th scope="col" class="sort" data-sort="asal_sekolah">Asal Sekolah</Sh>
                   <th scope="col" class="sort" data-sort="riwayat">Riwayat Perjalanan</th>
                 </tr>
               </thead>
               <tbody class="list">
                 <?php $no = 1; foreach ($peserta as $ps) : ?>
                   <tr>
                     <th scope="row"><?php echo $no++ ?></th>
                     <td>
                       <img width="50px" src="<?php echo base_url(); ?>assets/user_photo/<?php echo $ps['photo_profile']; ?>">
                     </td>
                     <td><?php echo $ps['nama']; ?></td>
                     <td><?php echo date('d/m/Y', strtotime($ps['tempat_lahir'])); ?></td>
                     <td><?php echo $ps['asal_sekolah']; ?></td>
                     <td><?php echo $ps['riwayat']; ?></td>
                   </tr>
                 <?php endforeach; ?>
               </tbody>
             </table>
           </div>
           <!-- Ini table nya -->
       </div> <!-- Div Class Container Content-->