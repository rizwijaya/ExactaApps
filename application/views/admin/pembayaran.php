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
                           <h3 class="mb-0">Data Pembayaran</h3>
                           <p><?php echo $this->session->flashdata('pesan'); ?></p>
                       </div>
                   </div>
               </div>
               <!-- Isi Tabel -->
               <div class="table-responsive">
                   <table class="table align-items-center table-flush">
                       <thead class="thead-light">
                           <tr>
                               <th scope="col" class="sort" data-sort="no_transaksi">No.Transaksi</th>
                               <th scope="col" class="sort" data-sort="photo">Photo</th>
                               <th scope="col" class="sort" data-sort="nama">Nama</th>
                               <th scope="col" class="sort" data-sort="asal_sekolah">Asal Sekolah</th>
                               <th scope="col" class="sort" data-sort="no_telp">Nomor Telepon</th>
                               <th scope="col" class="sort" data-sort="total">Total Bayar</th>
                               <th scope="col" class="sort" data-sort="invoice">Invoice</th>
                               <th scope="col" class="sort" data-sort="kelola">Kelola</th>
                           </tr>
                       </thead>
                       <tbody class="list">
                           <?php foreach ($pembayaran as $ps) : ?>
                               <tr>
                                   <th scope="row" class="text-primary">#00<?php echo $ps['id_transaksi'] ?></th>
                                   <td>
                                       <img width="50px" src="<?php echo base_url(); ?>assets/user_identitas/<?php echo $ps['photo_identitas']; ?>">
                                   </td>
                                   <td><?php echo $ps['nama']; ?></td>
                                   <td><?php echo $ps['asal_sekolah']; ?></td>
                                   <td><?php echo $ps['no_telp']; ?></td>
                                   <td>Rp. <?php echo number_format($ps['total'], 0, ',', '.'); ?></td>
                                   <td>
                                       <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#update_modal<?php echo $ps['id_transaksi']; ?>"><i> Detail Invoice </i></button>
                                   </td>
                                   <td>
                                       <a class="btn btn-sm btn-success mr-2" href="<?php echo base_url(); ?>/transaksi/selesai/<?php echo $ps['id_transaksi']; ?>"><i class='fas fa-check' onclick="return confirm('Apakah anda yakin untuk menerima Transaksi?')"></i></a>
                                       <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>/transaksi/cancel/<?php echo $ps['id_transaksi']; ?>"><i class='fas fa-times' onclick="return confirm('Apakah anda yakin untuk membatalkan Transaksi?')"></i></a>
                                   </td>
                               </tr>
                           <?php endforeach; ?>
                       </tbody>
                   </table>
               </div>
               <!-- Ini table nya -->
               <!-- Modal Tambah Data -->
               <?php foreach ($pembayaran as $ps) : ?>
                   <div class="modal fade" id="update_modal<?php echo $ps['id_transaksi']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                       <div class="modal-dialog modal-lg">
                           <div class="modal-content">
                               <div class="modal-header">
                                   <h5 class="modal-title" id="judulModal">Bukti Pembayaran</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div>
                               <div class="modal-body">
                                   <img width="100%" height="100%" src="<?php echo base_url(); ?>assets/bukti_bayar/<?php echo $ps['bukti_pembayaran']; ?>">
                               </div>
                           </div>
                       </div>
                   </div>
               <?php endforeach; ?>
               <!--End Modal Tambah -->
           </div> <!-- Div Class Container Content-->