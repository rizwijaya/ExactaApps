<!DOCTYPE html>
<html>

<head>
        <!-- CSS
         ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/font-awesome.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/animate.css">
    <!-- magnific -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/magnific-popup.css">
    <!-- carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/owl.carousel.min.css">
    <!-- isotop -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/isotop.css">
    <!-- ico fonts -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/xsIcon.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/style.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>template/assets_landing/css/responsive.css">
</head>

<body>
    <h3>Daftar Peserta yang Hadir</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Photo</th>
                <th scope="col">Nama</th>
                <th scope="col">Asal Sekolah</Sh>
                <th scope="col">Riwayat Perjalanan</th>
                <th scope="col">Tanggal Absen</th>
                <th scope="col">Jam Absen</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($peserta as $ps) : ?>
                <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td>
                        <img width="50px" src="<?php echo base_url(); ?>assets/user_photo/<?php echo $ps['photo_profile']; ?>">
                    </td>
                    <td><?php echo $ps['nama']; ?></td>
                    <td><?php echo $ps['asal_sekolah']; ?></td>
                    <td><?php echo $ps['riwayat']; ?></td>
                    <td><?php echo date('d/m/Y', strtotime($ps['jam_khd'])); ?></td>
                    <td><?php echo date('H:i', strtotime($ps['jam_khd'])); ?> WIB</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>