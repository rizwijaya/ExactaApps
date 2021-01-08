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
    <h3>Data Username Tryout Peserta</h3>
    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="sort" data-sort="no">No</th>
                <th scope="col" class="sort" data-sort="nama">Nama</th>
                <th scope="col" class="sort" data-sort="email">Email</Sh>
                <th scope="col" class="sort" data-sort="password">Password</Sh>
                <th scope="col" class="sort" data-sort="asal_sekolah">Asal Sekolah</th>
            </tr>
        </thead>
        <tbody class="list">
            <?php $no = 1;
            foreach ($peserta as $ps) : ?>
                <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td><?php echo $ps['nama']; ?></td>
                    <td><?= $ps['email']; ?></td>
                    <td><?php echo date('Ydm', strtotime($ps['tempat_lahir'])); ?></td>
                    <td><?php echo $ps['asal_sekolah']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

        <script type="text/javascript">
            window.print();
        </script>

</body>

</html>