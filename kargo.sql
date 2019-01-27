-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2018 at 09:44 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(4) NOT NULL,
  `id_tamu` int(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `subjudul` varchar(70) NOT NULL,
  `isi` text NOT NULL,
  `image` text NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `id_tamu`, `judul`, `subjudul`, `isi`, `image`, `tgl`) VALUES
(27, 0, 'Mengenal DA Cargo', 'Domestic Andalan Cargo adalah perusahaan ekspedisi jasa transportasi', '  Domestic Andalan Cargo adalah perusahaan ekspedisi jasa transportasi, handling dan pengiriman barang via darat dan laut yang berdiri mulai 2009.\r\n\r\nDengan berbekal pengalaman dan jaringan yang dimiliki kami terus mengembangkan diri mengikuti permintaan pasar serta memberikan pelayanan yang terbaik demi memberikan kepuasan kepada pelanggan dalam hal pengiriman barang melalui darat dan laut.\r\n\r\nLingkup palayanan yang sangat complex mulai dari pengiriman consumer goods, project cargo, general cargo, personal effect, mobil, alat –alat berat keseluruh Indonesia dengan service LCL maupun FCL', 'brosur.jpg', '2018-06-28'),
(28, 0, 'Projek DAC', 'Projek Pengiriman', 'Projek besar ini adalah pengiriman evaporator ke alamat tujuan kota indramayu.\r\n\r\npengiriman dikemas secara efisien dan terhindar dari kerusakan.', 'evaporator_indramayu.jpg', '2018-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_terima`
--

CREATE TABLE `bukti_terima` (
  `id` varchar(10) NOT NULL,
  `tgl` date NOT NULL,
  `pembeli` varchar(30) NOT NULL,
  `no_brg` int(10) NOT NULL,
  `ket_brg` varchar(255) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_tamu` int(30) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pesan` text NOT NULL,
  `tgl` varchar(12) NOT NULL,
  `waktu` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_tamu`, `nama`, `email`, `pesan`, `tgl`, `waktu`) VALUES
(6, 'Sinar Setyawan', 'sinarsetyawan0@gmail.com', 'semua bagus untuk dinikmati bagi kalangan yang sekarang ini digemari', '30-12-2018', '04:35:56'),
(7, 'Fians', 'fians@gmail.com', 'good Job !!!', '30-12-2016', '04:37:25'),
(8, 'edi', 'edi@gmail.com', 'sukses selalu DA Cargo', '30-12-2016', '04:47:06'),
(13, 'Bagus', 'bagussetyaw@gmail.com', 'sukses untuk kemajuannya DA Cargo nya', '30-12-2016', '10:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(16) NOT NULL,
  `jadwal` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `jadwal`) VALUES
(1, '07.00 - 09.00'),
(2, '09.30 - 11.30'),
(3, '13.30 - 14.30'),
(4, '15.30 - 17.35'),
(22, '19.00 - 21.00');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `nm_peserta` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `kd_jabatan` varchar(15) NOT NULL,
  `kd_program` int(10) NOT NULL,
  `id_jadwal` varchar(15) NOT NULL,
  `tgl` date NOT NULL,
  `hari` varchar(30) NOT NULL,
  `jk` varchar(12) NOT NULL,
  `kemampuan` varchar(14) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `tugas` int(3) NOT NULL,
  `uts` int(3) NOT NULL,
  `uas` int(3) NOT NULL,
  `na` int(4) NOT NULL,
  `absen` int(5) NOT NULL,
  `tagihan` int(27) NOT NULL,
  `status_bayar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`nm_peserta`, `password`, `kd_jabatan`, `kd_program`, `id_jadwal`, `tgl`, `hari`, `jk`, `kemampuan`, `agama`, `alamat`, `tugas`, `uts`, `uas`, `na`, `absen`, `tagihan`, `status_bayar`) VALUES
('Bambang1', 'bdba96c2c9be75d57fc747945c501274', '', 9, '1', '2016-12-30', 'selasa', 'Laki-Laki', 'Dasar', 'Islam', 'Jalan sendang umulyo', 0, 0, 0, 0, 2, 220000, 'Belum_Terbayar'),
('bintang', '801dc3c9e3bcd2a3cf428f3b79b312b6', 'A002', 4, '4', '2016-12-31', '', 'Laki-Laki', 'Dasar', 'Islam', 'Jalan sendang umulyo', 80, 70, 0, 45, 2, 280000, 'Belum_Terbayar'),
('fransiska1', '', 'A002', 4, '1', '2016-12-31', 'selasa', 'Laki-Laki', 'Dasar', 'Islam', 'jalan sendang utara 3 no 28', 90, 79, 0, 51, 3, 280000, 'Terbayar'),
('Jojon', '', 'A002', 9, '2', '2016-12-31', '', 'Perempuan', 'Ahli', 'Hindu', 'jalan sendang utara 3 no 28', 80, 0, 0, 24, 7, 300000, 'Terbayar'),
('Juri', '', 'A002', 9, '1', '2016-12-31', '', 'Laki-Laki', 'Dasar', 'Islam', 'Jalan sendang umulyo', 90, 80, 0, 51, 1, 900000, 'Terbayar'),
('Kakak', '', 'A002', 4, '3', '2016-12-21', '', 'Laki-Laki', 'Menengah', 'Budha', 'Jalan sendang umulyo', 80, 80, 90, 84, 0, 450000, 'Terbayar'),
('krisna1', '', 'A002', 3, '1', '2016-12-31', '', 'Laki-Laki', 'Dasar', 'Islam', 'jalan sendang utara 3 No 28 			', 90, 0, 0, 27, 0, 500000, 'Terbayar'),
('lalapoooo', '', 'A002', 3, '1', '2016-12-31', 'senin', 'Perempuan', 'Dasar', 'Islam', 'jal', 80, 90, 0, 51, 0, 220000, 'Terbayar'),
('mbakyeyen', '', '', 9, '2', '2016-12-06', 'selasa', 'Perempuan', 'Dasar', 'Islam', 'jalan jalan', 0, 0, 0, 0, 0, 300000, 'Terbayar'),
('Paimah', '', '', 9, '2', '2016-12-31', '', 'Laki-Laki', 'Dasar', 'Islam', 'lala sari', 0, 0, 0, 0, 0, 900000, 'Terbayar');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `kd_jabatan` varchar(30) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `lulusan` varchar(18) NOT NULL,
  `absen` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`kd_jabatan`, `nama_p`, `password`, `jabatan`, `alamat`, `agama`, `kota`, `lulusan`, `absen`) VALUES
('A001', 'Sinar Setyawan', '09aef27ad1ed2307c6a1d260bed2b321', 'Admin', 'admin', 'Islam', 'Semarang', 'D3', 0),
('A002', 'Bambang', '624a2ab0d13036e48293f844d292f899', 'Pendidik', 'kelurahan', 'Islam', 'Semarang', 'SMA', 4),
('A003', 'bendahara', 'd41d8cd98f00b204e9800998ecf8427e', 'Pimpinan', 'jalan rahayu', 'Islam', 'Jakarta', 'SMA', 2),
('A004', 'okta', '411d2f5092ce942f2163866113f28168', 'Bendahara', 'jalan sendang utara 3 no 28', 'Islam', 'Semarang', 'S2', 3),
('A005', 'Braja Murti', '09aef27ad1ed2307c6a1d260bed2b321', 'Admin', 'jalan jalan ajah', 'Kristen', 'Jakarta', 'S3', 0),
('A009', 'Danang', '6a17faad3b1275fd2558d5435c58440e', 'Admin', 'rahayu', 'Islam', 'Semarang', 'SMA', 0),
('A010', 'adit', '407b056f5e6197a948b7f836567fb63d', 'Pimpinan', 'banyumanik', 'islam', 'semarang', 'udinus', 3),
('A011', 'adittama', '407b056f5e6197a948b7f836567fb63d', 'Admin', 'Banyumanik', 'islam', 'Semarang', 'Udinus', 15);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `kd_jabatan` varchar(20) NOT NULL,
  `nama_p` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `lulusan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `program_pelatihan`
--

CREATE TABLE `program_pelatihan` (
  `kd_program` int(12) NOT NULL,
  `program_pelatihan` varchar(60) NOT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_pelatihan`
--

INSERT INTO `program_pelatihan` (`kd_program`, `program_pelatihan`, `harga`) VALUES
(3, 'Menjahit Paket Dasar', 220000),
(4, 'Menjahit Pakaian Tingkat Terampil', 280000),
(9, 'Menjahit Tingkat Mahir', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `satuan` varchar(15) DEFAULT NULL,
  `harga_barang` int(15) DEFAULT NULL,
  `stok` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_barang`
--

INSERT INTO `tabel_barang` (`id_barang`, `nama_barang`, `satuan`, `harga_barang`, `stok`) VALUES
('B-0001', 'Pasir', 'Truk', 2000000, 50),
('B-0002', 'Semen', 'Karung', 100000, 100),
('B-0003', 'Cat', 'Kaleng', 150000, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jual`
--

CREATE TABLE `tabel_jual` (
  `id` int(11) NOT NULL,
  `id_nota` varchar(15) DEFAULT NULL,
  `id_barang` varchar(15) DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `satuan` varchar(15) DEFAULT NULL,
  `harga_barang` int(15) DEFAULT NULL,
  `jumlah_barang` double DEFAULT NULL,
  `diskon` int(3) DEFAULT NULL,
  `total_harga` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_jual`
--

INSERT INTO `tabel_jual` (`id`, `id_nota`, `id_barang`, `nama_barang`, `satuan`, `harga_barang`, `jumlah_barang`, `diskon`, `total_harga`) VALUES
(1, 'B-0009', 'B-0002', 'Semen', 'Karung', 100000, 2, 0, 200000),
(2, 'B-0009', 'B-0001', 'Pasir', 'Truk', 2000000, 2, 0, 4000000),
(3, 'B-0009', 'B-0003', 'Cat', 'Kaleng', 150000, 2, 0, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kons`
--

CREATE TABLE `tabel_kons` (
  `id_kons` int(10) NOT NULL,
  `nama_kons` varchar(50) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `alamat_kons` varchar(100) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kons`
--

INSERT INTO `tabel_kons` (`id_kons`, `nama_kons`, `password`, `jenis_kelamin`, `alamat_kons`, `no_telp`) VALUES
(1, 'adit', '407b056f5e6197a948b7f836567fb63d', 'Laki-laki', 'Banyumanik', '0882153'),
(2, 'dhanang', 'ece067328a353d2bcb4bde1bcbc8da7b', 'Laki-laki', 'udinus', '00000'),
(3, 'Grishelda', 'bc101a61000875e2672a9d3e981f3b75', 'Perempuan', 'Ungaran', '09998'),
(4, 'tama', '486b6c6b267bc61677367eb6b6458764', 'Laki-Laki', 'a', '1'),
(5, 'Grisheldaa', '47bce5c74f589f4867dbd57e9ca9f808', 'Perempuan', 'aaa', '111'),
(6, 'Grisheldaa', '47bce5c74f589f4867dbd57e9ca9f808', 'Laki-Laki', '111', '111'),
(7, 'aditsnapz', '486b6c6b267bc61677367eb6b6458764', 'Laki-Laki', 'aaa', '088'),
(8, 'aditsnapz2', '47bce5c74f589f4867dbd57e9ca9f808', 'Laki-Laki', 'aa', '000'),
(9, 'alfan', '582d74b3e980c1915e16fe6326bfda3d', 'Laki-Laki', 'udinus', '0000000');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_nota`
--

CREATE TABLE `tabel_nota` (
  `id_nota` varchar(15) NOT NULL,
  `tgl_nota` date NOT NULL,
  `id_kons` int(10) DEFAULT NULL,
  `total_nota` int(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_nota`
--

INSERT INTO `tabel_nota` (`id_nota`, `tgl_nota`, `id_kons`, `total_nota`, `status`, `note`) VALUES
('B-0009', '2018-09-01', 3, 4200000, 'Terbayar', 'data pertama');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `user` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`) VALUES
(1, 'adit', 'cf5d1ed0e84a3d37bb3d596c2a54a4cb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_terima`
--
ALTER TABLE `bukti_terima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`nm_peserta`),
  ADD KEY `kd_jabatan` (`kd_jabatan`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indexes for table `program_pelatihan`
--
ALTER TABLE `program_pelatihan`
  ADD PRIMARY KEY (`kd_program`);

--
-- Indexes for table `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tabel_jual`
--
ALTER TABLE `tabel_jual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jual_nota` (`id_nota`),
  ADD KEY `fk_jual_barang` (`id_barang`);

--
-- Indexes for table `tabel_kons`
--
ALTER TABLE `tabel_kons`
  ADD PRIMARY KEY (`id_kons`);

--
-- Indexes for table `tabel_nota`
--
ALTER TABLE `tabel_nota`
  ADD PRIMARY KEY (`id_nota`),
  ADD KEY `fk_nota_kons` (`id_kons`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_tamu` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `program_pelatihan`
--
ALTER TABLE `program_pelatihan`
  MODIFY `kd_program` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tabel_jual`
--
ALTER TABLE `tabel_jual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_kons`
--
ALTER TABLE `tabel_kons`
  MODIFY `id_kons` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_jual`
--
ALTER TABLE `tabel_jual`
  ADD CONSTRAINT `fk_jual_barang` FOREIGN KEY (`id_barang`) REFERENCES `tabel_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jual_nota` FOREIGN KEY (`id_nota`) REFERENCES `tabel_nota` (`id_nota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabel_nota`
--
ALTER TABLE `tabel_nota`
  ADD CONSTRAINT `fk_nota_kons` FOREIGN KEY (`id_kons`) REFERENCES `tabel_kons` (`id_kons`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
