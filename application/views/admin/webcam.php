       <!-- Card stats -->
       </div>
       </div>
       </div>
       <style>
           #buttonScan {
               display: none;
           }
       </style>
       <div class="container-fluid mt--6">
           <div class="row">
               <div class="col-sm-6">
                   <div class="card">
                       <div class="card-header border-0">
                           <div class="row align-items-center">
                               <div class="col md-6">
                                   <h5 class="mb"><a href="<?php echo base_url() ?>scan"><i class="fas fa-chevron-circle-left"></i>&nbsp;&nbsp;</a>Absensi Scan Barcode</h5>
                               </div>
                           </div>
                       </div>
                       <div class="card-body">
                           <div id="sourceSelectPanel" style="display:none">
                               <label for="sourceSelect">Pilih kamera yang digunakan:</label>
                               <select id="sourceSelect" style="max-width:100%" class="form-control"></select>
                           </div>
                           <div>
                               <video id="video" width="100%" height="80%" style="border: 0px solid gray"></video>
                           </div>
                           <textarea hidden="hidden" name="id_user" id="result"></textarea>
                           <input type="hidden" name="sesi" id="idsesi" value="<?= $id_sesi ?>">
                           <span>
                               <a href="#" id="buttonScan" class="btn btn-danger">Cek</a>
                           </span>
                       </div>
                   </div>
               </div>
               <div class="col-sm-6 ajax-content" id="showResult">

               </div>
           </div>
       </div>

       <script type="text/javascript" src="<?php echo base_url() ?>template/zxing/zxing.min.js"></script>
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
       <!-- <script src="<?php echo base_url() ?>template/jquery-migrate/jquery-migrate.min.js"></script> -->
       <!-- scan 2 -->
       <script type="text/javascript">
           window.addEventListener('load', function() {
               let selectedDeviceId;
               let audio = new Audio("<?php echo base_url() ?>template/audio/beep.mp3");
               const codeReader = new ZXing.BrowserMultiFormatReader()
               console.log('ZXing code reader initialized')
               codeReader.getVideoInputDevices()
                   .then((videoInputDevices) => {
                       const sourceSelect = document.getElementById('sourceSelect')
                       selectedDeviceId = videoInputDevices[0].deviceId
                       if (videoInputDevices.length >= 1) {
                           videoInputDevices.forEach((element) => {
                               const sourceOption = document.createElement('option')
                               sourceOption.text = element.label
                               sourceOption.value = element.deviceId
                               sourceSelect.appendChild(sourceOption)
                           })

                           sourceSelect.onchange = () => {
                               selectedDeviceId = sourceSelect.value;
                           };

                           const sourceSelectPanel = document.getElementById('sourceSelectPanel')
                           sourceSelectPanel.style.display = 'block'
                       }
                       codeReader.decodeFromVideoDevice(selectedDeviceId, 'video', (result, err) => {
                           if (result) {
                               console.log(result)
                               document.getElementById('result').textContent = result.text
                               audio.play();
                               $(document).ready(function() {
                               $('#buttonScan').click();
                               });
                           }

                           if (err && !(err instanceof ZXing.NotFoundException)) {
                               console.error(err)
                               document.getElementById('result').textContent = err
                           }
                       })
                       console.log(`Started continous decode from camera with id ${selectedDeviceId}`)

                       document.getElementById('resetButton').addEventListener('click', () => {
                           codeReader.reset()
                           document.getElementById('result').textContent = '';
                           console.log('Reset.')
                       })

                   })
                   .catch((err) => {
                       console.error(err)
                   })
           })
       </script>

       <script>
           let halaman = '<?= base_url() ?>';
       </script>
       <script>
        $(document).ready(function() {
           $("#buttonScan").click(function() {
               let id_user = $('#result').val();
               let id_sesi = $('#idsesi').val();
               console.log(id_user);
               let url = halaman + 'scan/proses_absen';
               $.ajax({
                   type: 'POST',
                   url: url,
                   data: {
                       id: id_user,
                       sesi: id_sesi
                   },
                   beforeSend: function(msg) {
                       $('#showResult').html('<h1><i class="fa fa-spin fa-refresh" /></h1>')
                   },
                   success: function(msg) {
                       $('#showResult').html(msg);
                   },
                   error: function(jqXHR, textStatus, errorThrown) {
                       alert('error');
                   }
               });
           });
       });
       </script>