<style>
    img {
        left: 0px;
    }

    .imgA1 {
        height: auto;
        position: relative;
        width: 100%;
        z-index: 3;
    }

    .imgB1 {
        position: absolute;
        z-index: 3;
        top: 3px;
        left: 59%;
        width: 18%
    }
</style>
<div class="card">
    <div class="card-header">
        <?= $this->session->flashdata('message'); ?>
        <h5>Hasil Scan Barcode</h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-warning btn-icon" href="#!" role="button"><i class="fas fa-user">&nbsp;</i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">&nbsp;Nomor Transaksi</div>
                        <p class="chat-header text-muted">&nbsp;<?= $id_transaksi ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-danger btn-icon" href="#!" role="button"><i class="fas fa-user">&nbsp;</i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">&nbsp;Nama Peserta</div>
                        <p class="chat-header text-muted">&nbsp;<?= $nama ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-primary btn-icon" href="#!" role="button"><i class="fas fa-at">&nbsp;</i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">&nbsp;Email</div>
                        <p class="chat-header text-muted">&nbsp;<?= $email ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="media">
                    <div class="media-left">
                        <a class="btn btn-outline-success btn-icon" href="#!" role="button"><i class="fas fa-mobile-alt">&nbsp;</i>
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="chat-header">&nbsp;No Telepon</div>
                        <p class="chat-header text-muted">&nbsp;<?= $no_telp ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <img class="img-responsive imgA1" src="<?php echo base_url(); ?>assets/user_identitas/<?= $photo_identitas ?>" />
                <img class="img-responsive imgB1" src="<?php echo base_url('assets/qr_code/') . $id_user . $id_transaksi . 'code.png'; ?>" />
            </div>
        </div>
    </div>
</div>