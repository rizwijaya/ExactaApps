        <!-- Card stats -->
        <div class="row">
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Peserta Bergabung</h5>
                    <span class="h2 font-weight-bold mb-0"><?php foreach ($total_terdaftar['0'] as $td) { echo $td;} ?> Orang</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                      <i class="ni ni-active-40"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2">EXACTA</span>
                  <span class="text-nowrap">2021</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Pembelian Ticket</h5>
                    <span class="h2 font-weight-bold mb-0"><?php foreach ($total_beli['0'] as $tb) { echo $tb;} ?> Ticket</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                      <i class="ni ni-money-coins"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2">EXACTA</span>
                  <span class="text-nowrap">2021</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Banyak Panitia</h5>
                    <span class="h2 font-weight-bold mb-0"><?php foreach ($total_panitia['0'] as $tp) { echo $tp;} ?> Orang</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                      <i class="ni ni-chart-pie-35"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2">EXACTA</span>
                  <span class="text-nowrap">2021</span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-6">
            <div class="card card-stats">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Peserta Hadir</h5>
                    <span class="h2 font-weight-bold mb-0"><?php foreach ($total_absen['0'] as $ta) { echo $ta;} ?> Orang</span>
                  </div>
                  <div class="col-auto">
                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="ni ni-chart-bar-32"></i>
                    </div>
                  </div>
                </div>
                <p class="mt-3 mb-0 text-sm">
                  <span class="text-success mr-2">EXACTA</span>
                  <span class="text-nowrap">2021</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        </div>
        </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
         <div class="card mb-4">
             <div class="card-body">
               <div class="card">
                 <!-- List group -->
                 <div class="row">
                   <div class="col-md-12">
                     <img class="card-img-top" height="100%" src="<?php echo base_url(); ?>template/assets_admin/img/dashboard/logo.png" alt="Photo Profile">
                   </div>
                 </div>
               </div>
             </div>
         </div> <!-- Div Class Container Content-->