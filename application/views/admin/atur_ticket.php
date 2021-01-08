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
                           <?= $this->session->flashdata('pesan'); ?>
                           <h3 class="mb-0">Data Ticket Exacta</h3>
                       </div>
                       <!-- Button trigger modal -->
                       <div class="col text-right">
                           <button type="button" class="btn btn-primary mb-0" data-toggle="modal" data-target="#edit_diskon">Edit Diskon</button>
                       </div>
                   </div>
               </div>
               <!-- Isi Tabel -->
               <div class="table-responsive">
                   <table class="table align-items-center table-flush">
                       <thead class="thead-light">
                           <tr>
                               <th scope="col" class="sort" data-sort="no">No</th>
                               <th scope="col" class="sort" data-sort="nama_sesi">Nama Sesi</th>
                               <th scope="col" class="sort" data-sort="mulai_expo">Mulai Expo</th>
                               <th scope="col" class="sort" data-sort="end_expo">Selesai Expo</th>
                               <th scope="col" class="sort" data-sort="tgl_expo">Tanggal Expo</th>
                               <th scope="col" class="sort" data-sort="harga">Harga Ticket</th>
                               <th scope="col" class="sort" data-sort="kapasitas">Kapasitas</th>
                               <th scope="col" class="sort" data-sort="update">Update</th>
                           </tr>
                       </thead>
                       <tbody class="list">
                           <?php $no = 1;
                            foreach ($ticket as $tk) : ?>
                               <tr>
                                   <th scope="row"><?php echo $no++ ?></th>
                                   <td><?= $tk['nama_sesi']; ?></td>
                                   <td><?php echo date('H:i', strtotime($tk['mulai_expo'])); ?> WIB</td>
                                   <td><?php echo date('H:i', strtotime($tk['end_expo'])); ?> WIB</td>
                                   <td><?php echo date('d/m/Y', strtotime($tk['tgl_expo'])); ?></td>
                                   <td>Rp. <?php echo number_format($tk['harga'], 0, ',', '.'); ?></td>
                                   <td><?= $tk['kapasitas']; ?></td>
                                   <td>
                                       <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_data<?= $tk['id_sesi']; ?>"><i> Perbarui Data Ticket </i></button>
                                   </td>
                               </tr>
                           <?php endforeach; ?>
                       </tbody>
                   </table>
               </div>
               <!-- Ini table nya -->
           </div> <!-- Div Class Container Content-->
           <!-- Modal Tambah Data -->
           <?php foreach ($ticket as $tk) : ?>
               <div class="modal fade" id="tambah_data<?= $tk['id_sesi']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                   <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title" id="judulModal">Update Data Ticket</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body">
                               <form action="<?php echo base_url(); ?>admin/aksi_atur" method="post">
                                   <input type="hidden" class="form-control" id="id_sesi" name="id_sesi" value="<?= $tk['id_sesi'] ?>">
                                   <div class="row">
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label class="form-control-label" for="nama_sesi">Nama Sesi</label>
                                               <input type="text" class="form-control" id="nama_sesi" name="nama_sesi" value="<?= $tk['nama_sesi'] ?>" disabled>
                                           </div>
                                           <div class="form-group">
                                               <label class="form-control-label" for="mulai_expo">Mulai Expo</label>
                                               <input type="time" class="form-control" id="mulai_expo" name="mulai_expo" value="<?php echo date('H:i', strtotime($tk['mulai_expo'])); ?>" required="">
                                           </div>
                                           <div class="form-group">
                                               <label class="form-control-label" for="harga">Harga Ticket</label>
                                               <input type="text" class="form-control" id="harga" name="harga" value="<?php echo $tk['harga'] ?>" required="">
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label class="form-control-label" for="tgl_expo">Tanggal Expo</label>
                                               <input type="date" class="form-control" id="tgl_expo" name="tgl_expo" value="<?php echo date('d/m/Y', strtotime($tk['tgl_expo'])); ?>" required="">
                                           </div>
                                           <div class="form-group">
                                               <label class="form-control-label" for="end_expo">Selesai Expo</label>
                                               <input type="time" class="form-control" id="end_expo" name="end_expo" value="<?php echo date('H:i', strtotime($tk['end_expo'])); ?>" required="">
                                           </div>
                                           <div class="form-group">
                                               <label class="form-control-label" for="kapasitas">Kapasitas</label>
                                               <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="<?php echo $tk['kapasitas'] ?>" required="">
                                           </div>
                                       </div>
                                   </div>
                                   <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       <button type="reset" class="btn btn-danger">reset</button>
                                       <button type="submit" name="submit" id="submit" class="btn btn-primary">Tambah Data</button>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           <?php endforeach; ?>
           <!--End Modal Tambah -->
           <!-- Modal Edit diskon -->
           <div class="modal fade" id="edit_diskon" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
               <div class="modal-dialog">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="judulModal">Update Data Ticket</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <div class="modal-body">
                           <form action="<?php echo base_url(); ?>admin/edit_diskon" method="post">
                               <div class="form-group">
                                   <label class="form-control-label" for="diskon">Potongan harga</label>
                                   <input type="number" class="form-control" id="diskon" name="diskon" value="<?= $disk[0]['diskon'] ?>">
                               </div>
                               <p><strong>Note: </strong> Masukan diskon berdasarkan harga per satuan ticket.</p>
                               <div class="modal-footer">
                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                   <button type="reset" class="btn btn-danger">reset</button>
                                   <button type="submit" name="submit" id="submit" class="btn btn-primary">Tambah Data</button>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
           <!--End Edit Diskon -->