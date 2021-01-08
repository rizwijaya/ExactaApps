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
                           <h3 class="mb-0">Absensi QR Code</h3>
                           <?= $this->session->flashdata('pesan'); ?>
                       </div>
                   </div>
               </div>
               <!-- Isi Tabel -->
               <div class="table-responsive">
                   <table class="table align-items-center table-flush">
                       <thead class="thead-light">
                           <tr>
                               <th scope="col" class="sort" data-sort="no">No</th>
                               <th scope="col" class="sort" data-sort="absen">Absen QR</th>
                               <th scope="col" class="sort" data-sort="nama_sesi">Nama Sesi</th>
                               <th scope="col" class="sort" data-sort="mulai_expo">Mulai Expo</th>
                               <th scope="col" class="sort" data-sort="end_expo">Selesai Expo</th>
                               <th scope="col" class="sort" data-sort="tgl_expo">Tanggal Expo</th>
                               <th scope="col" class="sort" data-sort="harga">Harga Ticket</th>
                               <th scope="col" class="sort" data-sort="kapasitas">Kapasitas</th>
                           </tr>
                       </thead>
                       <tbody class="list">
                           <?php $no = 1;
                            foreach ($ticket as $tk) : ?>
                               <tr>
                                   <th scope="row"><?php echo $no++ ?></th>
                                   <td>
                                       <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>scan/webcam/<?= $tk['id_sesi']; ?>"><i> Absen Sekarang </i></a>
                                   </td>
                                   <td><?= $tk['nama_sesi']; ?></td>
                                   <td><?php echo date('H:i', strtotime($tk['mulai_expo'])); ?> WIB</td>
                                   <td><?php echo date('H:i', strtotime($tk['end_expo'])); ?> WIB</td>
                                   <td><?php echo date('d/m/Y', strtotime($tk['tgl_expo'])); ?></td>
                                   <td>Rp. <?php echo number_format($tk['harga'], 0, ',', '.'); ?></td>
                                   <td><?= $tk['kapasitas']; ?> Orang</td>
                               </tr>
                           <?php endforeach; ?>
                       </tbody>
                   </table>
               </div>
               <!-- Ini table nya -->
           </div> <!-- Div Class Container Content-->