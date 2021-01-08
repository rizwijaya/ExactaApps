<div id="page-banner-area" class="page-banner-area" style="background-image:url(<?php echo base_url(); ?>/template/assets_landing/images/hero_area/banner_bg.jpg)">
    <!-- Subpage title start -->
    <div class="page-banner-title">
        <div class="text-center">
            <h2>Invoice Pembayaran</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="#">Home /</a>
                </li>
                <li>
                    Invoice
                </li>
            </ol>
        </div>
    </div><!-- Subpage title end -->
</div>
<!--All-->
<section class="sptb" data-select2-id="64">
    <div class="container" data-select2-id="63">
        <div class="row" data-select2-id="62">
            <!-- Checkout Table -->
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card mb-0">
                    <div class="card-header alert alert-success">
                        <h3 class="card-title mt-2">Invoice Pembayaran Anda</h3>
                    </div>
                    <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan') ?></span>
                    <?php if ($invoice[0]['status'] == 4) { ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">Pembayaran gagal, bukti pembayaran tidak sesuai. Silahkan upload ulang atau hubungi administrator bila terjadi kesalahan. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</button></div>
                    <?php } ?>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><strong>Nomor Transaksi</strong></td>
                                        <td>:</td>
                                        <td class="text-primary">#00<?= $invoice[0]['id_transaksi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Nama Peserta</strong></td>
                                        <td>:</td>
                                        <td><?= $invoice[0]['nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Asal Sekolah</strong></td>
                                        <td>:</td>
                                        <td><?= $invoice[0]['asal_sekolah']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tanggal Lahir</strong></td>
                                        <td>:</td>
                                        <td><?php echo date('d/m/Y', strtotime($invoice[0]['tempat_lahir'])); ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Sesi Expo</strong></td>
                                        <td>:</td>
                                        <td> <?php echo date('H:i', strtotime($invoice[0]['mulai_expo'])); ?> WIB - <?php echo date('H:i', strtotime($invoice[0]['end_expo'])); ?> WIB (<?php echo date('d/m/Y', strtotime($invoice[0]['tgl_expo'])); ?>) </td>
                                    </tr>
                                    <?php if (!empty($invoice[1]['tgl_expo'])) { ?>
                                        <tr>
                                            <td><strong>Sesi Expo 2</strong></td>
                                            <td>:</td>
                                            <td> <?php echo date('H:i', strtotime($invoice[1]['mulai_expo'])); ?> WIB - <?php echo date('H:i', strtotime($invoice[1]['end_expo'])); ?> WIB (<?php echo date('d/m/Y', strtotime($invoice[1]['tgl_expo'])); ?>) </td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td class="text-success"><strong>Total Pembayaran</strong></td>
                                        <td class="text-success">:</td>
                                        <td class="text-success"><strong>Rp. <?php echo number_format($invoice[0]['total'], 0, ',', '.'); ?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col text-right">
                            <?php if ($invoice[0]['status'] == 3) { ?>
                                    <button type="button" class="btn btn-secondary icons" data-toggle="modal" data-target="#exampleModal<?= $invoice[0]['id_transaksi']; ?>">Lihat Ticket Anda</button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Checkout Table -->
            <!--Right Side Content-->
            <div class="col-xl-4 col-lg-4 col-md-12" data-select2-id="61">
                <div class="card">
                    <div class="card-header alert alert-danger">
                        <h3 class="card-title mt-2">Informasi Pembayaran</h3>
                    </div>
                    <div class="card-body">
                        <p>Silahkan melakukan pembayaran melalui Nomor Rekening atau E-Wallet dibawah ini:</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Bank Mandiri: </strong> 3242323232322</li>
                            <li class="list-group-item"><strong>Bank BRI: </strong> 3242323232322</li>
                            <li class="list-group-item"><strong>OVO/GOPAY: </strong> 085606394242</li>
                        </ul>
                        <br>
                        <p class="mb-0"><strong>Note:</strong> Sertakan Nomor Transaksi untuk mempercepat proses verifikasi pembayaran.(Maksimal upload 2mb.)</p>
                        <?php if (empty($invoice[0]['bukti_pembayaran'])) { ?>
                            <button style="width: 100%;" type="button" class="btn btn-danger mt-3" data-toggle="modal" data-target="#update_modal<?= $invoice[0]['id_transaksi']; ?>">Upload Bukti Bayar</button>
                        <?php } elseif ($invoice[0]['status'] == 2) { ?>
                            <button style="width: 100%;" type="button" class="btn btn-warning mt-3"><i><i class="fa fa-clock-o"></i></i> Menunggu Konfirmasi</button>
                        <?php } elseif ($invoice[0]['status'] == 3) { ?>
                            <button style="width: 100%;" type="button" class="btn btn-success mt-3"><i><i class="fa fa-check"></i></i> Pembayaran berhasil</button>
                        <?php } elseif ($invoice[0]['status'] == 4) { ?>
                            <button style="width: 100%;" type="button" class="btn btn-danger mt-3" data-toggle="modal" data-target="#update_modal<?= $invoice[0]['id_transaksi']; ?>">Upload ulang</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!--/Right Side Content-->
            <!-- Form Modal Upload Bukti Bayar -->
            <div class="modal fade" id="update_modal<?= $invoice[0]['id_transaksi']; ?>" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="judulModal">Upload Bukti Pembayaran</h5>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url(); ?>peserta/upload_bukti" method="post" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" id="id_transaksi" name="id_transaksi" value="<?= $invoice[0]['id_transaksi']; ?>">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_transaksi">Nomor Transaksi</label>
                                    <input type="text" class="form-control" value="#00<?= $invoice[0]['id_transaksi']; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="merk">Nama Peserta</label>
                                    <input type="text" class="form-control" value="<?= $invoice[0]['nama'] ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label" for="tahun">Total Pembayaran</label>
                                    <input type="text" class="form-control" value="Rp. <?php echo number_format($invoice[0]['total'], 0, ',', '.'); ?>" disabled>
                                </div>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="gambar">Upload Bukti Pembayaran</label>
                                    <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran">
                                </div>
                                <div class="modal-footer mt-5">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" id="submit" class="btn btn-secondary">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Modal Upload Bukti Bayar -->
            <!-- Ticket Hari 1 Modal -->
            <div class="modal fade" id="exampleModal<?= $invoice[0]['id_transaksi']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ticket Exacta 2021</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img width="100%" src="<?php echo base_url(); ?>assets/qr_code/<?php echo $barcode[0]['barcode']; ?>">
                            <br>
                            <br>
                            <p><strong>Note:</strong> Silahkan tunjukan barcode tersebut, saat melakukan check-in.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ticket Modal end -->
        </div>
    </div>
</section>
<!--End All-->