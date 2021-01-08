-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2021 pada 01.41
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exacta3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sesi` int(11) NOT NULL,
  `tgl_khd` date NOT NULL,
  `jam_khd` time NOT NULL,
  `absen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `id_user`, `id_sesi`, `tgl_khd`, `jam_khd`, `absen`) VALUES
(23, 19, 2, '2020-11-30', '10:09:14', 1),
(24, 19, 6, '2020-11-30', '10:53:27', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_ticket`
--

CREATE TABLE `category_ticket` (
  `sts_ticket` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `tgl_expo` date DEFAULT NULL,
  `end_tgl` date DEFAULT NULL,
  `harga_ticket` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL,
  `deskripsi_ticket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `category_ticket`
--

INSERT INTO `category_ticket` (`sts_ticket`, `category`, `tgl_expo`, `end_tgl`, `harga_ticket`, `date_created`, `date_updated`, `deskripsi_ticket`) VALUES
(1, 'Single Ticket (Hari 1)', '2021-01-23', NULL, 15000, '2020-11-28', '2020-11-28', 'Single ticket untuk satu sesi pada hari pertama.'),
(2, 'Single Ticket (Hari 2)', '2021-01-24', NULL, 15000, '2020-11-28', '2020-11-28', 'Single ticket untuk satu sesi pada hari kedua.'),
(3, 'Special Ticket (2 Sesi)', '2021-01-24', '2021-01-23', 20000, '2020-11-28', '2020-11-28', 'Special ticket untuk dua sesi dengan harga yang lebih murah.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_sesi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `id_transaksi`, `id_sesi`) VALUES
(1, 391, 2),
(2, 391, 4),
(3, 392, 4),
(4, 393, 2),
(5, 393, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `disk`
--

CREATE TABLE `disk` (
  `id_disk` int(11) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `disk`
--

INSERT INTO `disk` (`id_disk`, `diskon`) VALUES
(1, 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `grup`
--

CREATE TABLE `grup` (
  `id_grup` int(11) NOT NULL,
  `nama_grup` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `grup`
--

INSERT INTO `grup` (`id_grup`, `nama_grup`, `date_created`, `date_updated`) VALUES
(1, 'peserta', '2020-11-22', '2020-11-22'),
(2, 'panitia', '2020-11-22', '2020-11-22'),
(3, 'admin', '2020-11-22', '2020-11-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_telp` varchar(200) NOT NULL,
  `asal_sekolah` varchar(200) NOT NULL,
  `tempat_lahir` date NOT NULL,
  `photo_identitas` varchar(200) NOT NULL,
  `photo_profile` varchar(200) NOT NULL DEFAULT 'default.jpg',
  `riwayat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `id_user`, `no_telp`, `asal_sekolah`, `tempat_lahir`, `photo_identitas`, `photo_profile`, `riwayat`) VALUES
(13, 19, '065432121232', 'SMAN 1 Mejayan', '1999-01-04', 'v5SD9sysRa7LSRxKbGgjko9wVZHEstT7YpLYZjPB.jpeg', 'default.jpg', 'Surabaya - Solo - Tanggerang'),
(14, 20, '085638293201', 'SMAN 1 Mejayan', '2000-01-28', 'v5SD9sysRa7LSRxKbGgjko9wVZHEstT7YpLYZjPB1.jpeg', 'default.jpg', 'Surabaya - Solo - Yoyakarta'),
(15, 21, '086434324324', 'SMAN 1 Mejayan', '2002-01-29', 'ktp4.jpg', 'default.jpg', 'Solo -Surabaya - Jakarta'),
(16, 22, '081946101530', 'SMAN MH Thamrin', '2020-11-29', '', 'default.jpg', 'Surabaya'),
(17, 23, '085736746653', 'Undip', '2020-11-29', '', 'default.jpg', 'Semarang'),
(18, 24, '085649335368', 'xxx', '2020-11-29', '', 'default.jpg', 'madiun'),
(19, 26, '082264746058', 'SMA N 1 Mejayan', '2001-12-01', 'DSC_0504_copy.jpg', 'default.jpg', 'Aman Terkendali Gaes'),
(20, 28, '085231539589', 'SMAN 1 Mejayan', '2000-10-10', 'WhatsApp_Image_2020-11-29_at_3_26_16_PM.jpeg', 'default.jpg', 'mejayan (20/11/20)'),
(21, 29, '082310952863', 'Smansa', '2000-12-25', '8B8C768C-9EC0-4B7B-90D5-174A4F50F475.png', 'default.jpg', 'Tidak ada'),
(22, 30, '085729950518', 'SMA Negeri 1 Madiun', '2001-04-18', 'maxresdefault.jpg', 'default.jpg', 'Semarang 28 November 2020'),
(23, 32, '054343523432', 'SMAN 1 Mejayan', '2001-01-29', 'ktp2.jpg', 'default.jpg', 'Surabaya + 23 Januari 2020'),
(24, 33, '085647382932', 'SMAN 1 Mejayan', '2001-01-30', 'ktp3.jpg', 'default.jpg', 'Surabaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sesi_expo`
--

CREATE TABLE `sesi_expo` (
  `id_sesi` int(11) NOT NULL,
  `nama_sesi` varchar(200) NOT NULL,
  `mulai_expo` time NOT NULL DEFAULT current_timestamp(),
  `end_expo` time NOT NULL,
  `tgl_expo` date DEFAULT NULL,
  `harga` varchar(200) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `sts_ticket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sesi_expo`
--

INSERT INTO `sesi_expo` (`id_sesi`, `nama_sesi`, `mulai_expo`, `end_expo`, `tgl_expo`, `harga`, `kapasitas`, `sts_ticket`) VALUES
(1, 'Hari 1 (Sesi 1)', '08:00:00', '11:15:00', '2021-01-23', '15000', 200, 1),
(2, 'Hari 1 (Sesi 2)', '12:30:00', '15:30:00', '2021-01-23', '15000', 200, 1),
(3, 'Hari 2 (Sesi 1)', '08:00:00', '11:15:00', '2021-01-24', '15000', 200, 2),
(4, 'Hari 2 (Sesi 2)', '12:30:00', '15:30:00', '2021-01-24', '15000', 200, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `nama`, `date_created`, `date_updated`) VALUES
(1, 'Belum dibayar', '2020-11-24', '2020-11-24'),
(2, 'Menunggu Konfirmasi', '2020-11-24', '2020-11-24'),
(3, 'Pembayaran Berhasil', '2020-11-24', '2020-11-24'),
(4, 'Pembayaran Gagal', '2020-11-24', '2020-11-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sts_absen`
--

CREATE TABLE `sts_absen` (
  `id_sts_absen` int(11) NOT NULL,
  `absen` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `date_created` date NOT NULL,
  `date_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sts_absen`
--

INSERT INTO `sts_absen` (`id_sts_absen`, `absen`, `nama`, `date_created`, `date_updated`) VALUES
(1, 0, 'Tidak Hadir', '2020-11-25', '2020-11-25'),
(2, 1, 'Hadir', '2020-11-25', '2020-11-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_sesi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `barcode` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `id_user`, `id_sesi`, `id_transaksi`, `barcode`) VALUES
(30, 33, 4, 391, '33391code.png'),
(31, 33, 2, 391, '33391code.png'),
(32, 19, 6, 393, '19393code.png'),
(33, 19, 2, 393, '19393code.png'),
(34, 32, 4, 392, '32392code.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bukti_pembayaran` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `bukti_pembayaran`, `status`, `total`) VALUES
(391, 33, 'bukti4.jpg', 3, 20000),
(392, 32, 'bukti5.jpg', 3, 15000),
(393, 19, 'bukti6.jpg', 3, 20000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `id_grup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `nama`, `id_grup`) VALUES
(1, 'admin@admin.com', '$2y$10$qQXbqQHIxEYoT8tdHTVxEOoX0/J27FFoSRc/uhwfopGlXxAkKOgie', 'Rizqi Wijaya', 3),
(2, 'panitia@panitia.com', '$2y$10$.8DBbws1BiPUaKNCeBGiw.e47CXM3zEXYr7D/rBap5xcj2SM/2y9m', 'Panitia', 2),
(5, 'panitiabaru@panitia.com', '$2y$10$B2g0w3l0vn/xMA/zQTlQWeJ.FtY/SCWMvzBtq0I9q8KqKwbxiFyIC', 'Panitia kedua', 2),
(19, 'peserta@gmail.com', '$2y$10$ZdTFcRSCzJSWp98TGN5x1Oj43ekM5Ue/kNj6LfOBMOBhZfmErJ5KW', 'Rizqi Wijaya', 1),
(20, 'peserta1@peserta.com', '$2y$10$gRCCyuq75nWZDgxwF/iE6ucS9QPBxTcsZ6Jk0gQ1ohU28Ah0vX8uW', 'Rizqi Wijaya', 1),
(21, 'roo123@gmail.com', '$2y$10$zG0RiTTR.0jnrJLzp6fY6eqkDAsypQHRAEAci72GgGni2TjiVfJ7a', 'Rizqi Wijaya', 1),
(22, 'dhidantomy@gmail.com', '$2y$10$mcgYPJQ/OQd72WfsM1jl8e5vS3AisTjUDDK1Iz3VoZ4dMr/LfSVTW', 'Dhidan Tomyagistyawan', 1),
(23, 'niramadhanti@gmail.com', '$2y$10$Bu4IfmoD2P5Patv7QwuN..UOyIqgYsNJUgr6GLX5QFVhgSkTqMRUe', 'niramadhanti@gmail.com', 1),
(24, 'marshandashellapramesta12@gmail.com', '$2y$10$iOZlP19XdaZxJEEzR0k5meVZS8vw8CntIpVrUFDnDjnamm4oqoWsW', 'Shella', 1),
(25, 'lalala5@gmail.com', '$2y$10$hSX0igE3IAe64D/Z7reoOezyenqXS/mhDBafBBBEn5/TKyAnwrno2', 'Dhidun', 1),
(26, 'huseinwisnu@gmail.com', '$2y$10$pNukC2Nop5v1ap8aqI.8AuqtgETkEZNWe/Qu16Ri1Sq3HZtrsD0.K', 'Husein Wisnu Jabbar', 1),
(27, 'agusblawong642@gmail.com', '$2y$10$fZldA0Rf3uIBqLb8wQ8Wy.qF6FWPA7xQIPoqHH8MmTUgyzacIWDna', 'Bima', 1),
(28, 'sellorenzakbar@gmail.com', '$2y$10$i26b0Oi8tF3a.XuXAXVgbe7FZXU/eMdTjgl5HCXVQV6uHfMLVmIhi', 'Sella Lorenza', 1),
(29, 'dessyputri488@gmail.com', '$2y$10$k4UW4pc8mORRewvv/uEpe.6gv3CvLU7mWibxj/6vDoQ34gveZpQRi', 'Dessy Putri Ramadhani', 1),
(30, 'wisnusetoharyobhaskoro@gmail.com', '$2y$10$FacUdvPEp4JhOKJL86DPxe9QGwOzltEDEesEdosWNNOnX81H3hse2', 'Wisnuseto', 1),
(31, 'aghadwi@gmail.com', '$2y$10$pIv0FUugi9LLLqOvVQ.lF.Zve75vqX7nUbLspose47A5T14/YTyHO', 'Agha Dwi Mahendra', 2),
(32, 'test@gmail.com', '$2y$10$nbLYsHQ7fp3yddx7jRQUS.iXvewX0r1qBUgxB0MwzqFQafQxBa0KC', 'Rizqi Wijaya', 1),
(33, 'reg@gmail.com', '$2y$10$otGJu4.oFGx2y3ICv.dOGeqoGISix6RjhVMUsuRQyU50339Y.c7.O', 'Register beli', 1),
(34, 'peserta123@peserta.com', '$2y$10$r7MwL.X1YFNK5P1fZkMsFOjW2J16eXbtt.RnbcnkF6A.Q4N0.vhmC', 'Peserta 3', 1),
(35, 'pesertatest@gmail.com', '$2y$10$2dEN9Olki1uyZyVNnnEok.bBfh71G67El5qkHZAH8s2BhVm4JUl2W', 'Test Peserta', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indeks untuk tabel `category_ticket`
--
ALTER TABLE `category_ticket`
  ADD PRIMARY KEY (`sts_ticket`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indeks untuk tabel `disk`
--
ALTER TABLE `disk`
  ADD PRIMARY KEY (`id_disk`);

--
-- Indeks untuk tabel `grup`
--
ALTER TABLE `grup`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indeks untuk tabel `sesi_expo`
--
ALTER TABLE `sesi_expo`
  ADD PRIMARY KEY (`id_sesi`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `sts_absen`
--
ALTER TABLE `sts_absen`
  ADD PRIMARY KEY (`id_sts_absen`);

--
-- Indeks untuk tabel `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `category_ticket`
--
ALTER TABLE `category_ticket`
  MODIFY `sts_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `disk`
--
ALTER TABLE `disk`
  MODIFY `id_disk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `grup`
--
ALTER TABLE `grup`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `sesi_expo`
--
ALTER TABLE `sesi_expo`
  MODIFY `id_sesi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sts_absen`
--
ALTER TABLE `sts_absen`
  MODIFY `id_sts_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=394;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
