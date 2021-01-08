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
                 <h3 class="mb-0">Data Username Tryout</h3>
               </div>
               <!-- Button trigger modal -->
               <div class="col text-right">
                 <a class="btn btn-primary mb-0" href="<?php echo base_url(); ?>admin/cetakdaftaruser"><i class="fa fa-print"></i> Cetak Laporan</a>
               </div> 
             </div>
           </div>
           <!-- Isi Tabel -->
           <div class="table-responsive">
             <table class="table align-items-center table-flush">
               <thead class="thead-light">
                 <tr>
                   <th scope="col" class="sort" data-sort="no">No</th>
                   <th scope="col" class="sort" data-sort="nama">Nama</th>
                   <th scope="col" class="sort" data-sort="email">Email</Sh>
                   <th scope="col" class="sort" data-sort="password">Password</Sh>
                   <th scope="col" class="sort" data-sort="asal_sekolah">Asal Sekolah</th>
                   <?php if($this->session->userdata('id_grup') == 3) { ?>
                   <th scope="col" class="sort" data-sort="detail">Detail</th>
                   <?php } ?>
                 </tr>
               </thead>
               <tbody class="list">
                 <?php $no = 1; foreach ($peserta as $ps) : ?>
                   <tr>
                     <th scope="row"><?php echo $no++ ?></th>
                     <td><?php echo $ps['nama']; ?></td>
                     <td><?= $ps['email']; ?></td>
                     <td><?php echo date('Ydm', strtotime($ps['tempat_lahir'])); ?></td>
                     <td><?php echo $ps['asal_sekolah']; ?></td>
                     <?php if($this->session->userdata('id_grup') == 3) { ?>
                     <td>
                       <a href="<?php echo base_url(); ?>daftarpeserta/detail_peserta/<?php echo $ps['id_user']; ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"> Detail </i></a>
                     </td>
                     <?php } ?>
                   </tr>
                 <?php endforeach; ?>
               </tbody>
             </table>
           </div>
           <!-- Ini table nya -->
       </div> <!-- Div Class Container Content-->