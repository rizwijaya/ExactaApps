       <!-- Card stats -->
       </div>
       </div>
       </div>
       <div class="container-fluid mt--6">
         <div class="row justify-content-center">
           <div class="col-lg-6 card-wrapper">
             <!-- Page content -->
             <div class="card mb-4">
               <!-- Card header -->
               <div class="card-header">
                 <h3 class="mb-0">Tambah Panitia Baru</h3>
                 <?php echo $this->session->flashdata('pesan'); ?>
               </div>
               <!-- Card body -->
               <div class="card-body">
                 <form id="user-form" method="POST" action="<?php echo base_url(); ?>admin/tambah_aksi">
                   <div class="form-group row">
                     <label class="col-md-3 col-form-label form-control-label">Email</label>
                     <div class="col-md-9"><input class="form-control" id="email" name="email" type="email" required="">
                     <span class="invalidFeedback" style="color: red">
                     <?php echo form_error('email', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
                            </span></div>
                   </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-form-label form-control-label">Nama Panitia</label>
                     <div class="col-md-9"><input class="form-control" name="nama" id="nama" type="text" required=""">
                     <span class="invalidFeedback" style="color: red">
                     <?php echo form_error('nama', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
                            </span></div>
                   </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-form-label form-control-label">Password</label>
                     <div class="col-md-9"><input class="form-control" name="password" id="password" type="password" required="">
                     <span class="invalidFeedback" style="color: red">
                     <?php echo form_error('password', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
                            </span></div>
                   </div>
                   <div class="form-group row">
                     <label class="col-md-3 col-form-label form-control-label">Confirm Password</label>
                     <div class="col-md-9"><input class="form-control" type="password" name="confirm_password" id="confirm_password" type="password" required="">
                     <span class="invalidFeedback" style="color: red">
                     <?php echo form_error('confirm_password', '<div style="font-size:13px" class="text-danger">', '</div>') ?>
                            </span></div>
                   </div>
                   <div class="modal-footer">
                     <button type="submit" name="submit" id="submit" class="btn btn-primary">Tambahkan Panitia</button>
                   </div>
                 </form>
               </div>
             </div>
             <!-- End Page content -->
           </div>
         </div>