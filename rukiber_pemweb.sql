-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 12:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rukiber_pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `kode_booking` int(11) NOT NULL,
  `kode_pasien` int(11) NOT NULL,
  `kode_dokter` int(11) NOT NULL,
  `hari_praktik` varchar(20) NOT NULL,
  `tanggal_praktik` date NOT NULL,
  `jam_praktik` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`kode_booking`, `kode_pasien`, `kode_dokter`, `hari_praktik`, `tanggal_praktik`, `jam_praktik`) VALUES
(0, 112, 6, '', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `foto` varchar(500) NOT NULL,
  `kode_dokter` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `umur` varchar(50) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `no_izin_praktik` varchar(50) NOT NULL,
  `hari_praktik` varchar(20) NOT NULL,
  `tanggal_praktik` date NOT NULL,
  `jam_praktik` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`foto`, `kode_dokter`, `nama`, `jenis_kelamin`, `umur`, `agama`, `no_hp`, `spesialis`, `no_izin_praktik`, `hari_praktik`, `tanggal_praktik`, `jam_praktik`) VALUES
('2.JPG', 4, 'Papa', '', '20', 'Islam', '09129128752', 'Kucing', '1213akpdsojfih', 'Kamis', '2020-04-21', '14:00:00'),
('figure_2.PNG', 6, '23ewd', 'Perempuan', '12', 'dmnf', 'fnkhf', 'ekrkhewj', 'fkweh', 'jfjf', '2020-04-28', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_obat`
--

CREATE TABLE `tbl_obat` (
  `foto` varchar(500) NOT NULL,
  `kode_obat` int(11) NOT NULL,
  `namaobat` varchar(255) NOT NULL,
  `kategoriobat` varchar(40) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `stockobat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_obat`
--

INSERT INTO `tbl_obat` (`foto`, `kode_obat`, `namaobat`, `kategoriobat`, `keterangan`, `harga`, `stockobat`) VALUES
('gn5.png', 6, 'POKOKNYA INI OBAT YA', 'kapsul', 'MINUM OBATNYA KALAU UDAH MABUK PEMWEB', '120000000', '10000000'),
('download_(4).jpg', 8, 'alga', 'cair', 'lalalalala', '10000000', '11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE `tbl_pasien` (
  `kode_pasien` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `umur` int(10) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`kode_pasien`, `id_user`, `foto`, `nama_pasien`, `umur`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `no_hp`, `alamat`) VALUES
(1, 0, '', 'Ya ini Saya', 20, 'Perempuan', 'Pekanbaru', '2020-04-03', '', '0821386733546', 'bojongsoang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `kode_pesan` int(11) NOT NULL,
  `kode_pasien` int(11) NOT NULL,
  `kode_obat` int(11) NOT NULL,
  `namaobat` varchar(500) NOT NULL,
  `jumlah_pesanan_obat` int(20) NOT NULL,
  `harga_total_obat` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`kode_pesan`, `kode_pasien`, `kode_obat`, `namaobat`, `jumlah_pesanan_obat`, `harga_total_obat`) VALUES
(5, 112, 6, '', 16, 0),
(6, 112, 6, '', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `role` enum('admin','pasien') NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `password`, `nama_user`, `role`, `email`) VALUES
(111, 'angelmetanosa', '202cb962ac59075b964b07152d234b70', 'Angel Metanosa Afinda', 'admin', ''),
(112, 'anandafitri', '250cf8b51c773f3f8dc8b4be867a9a02', 'Ananda Fitri Karimah', 'pasien', ''),
(113, 'rukiber', '827ccb0eea8a706c4c34a16891f84e7b', 'Rukiber Pemweb', 'pasien', 'rururu@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`kode_booking`),
  ADD KEY `kode_dokter` (`kode_dokter`),
  ADD KEY `kode_pasien` (`kode_pasien`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`kode_dokter`);

--
-- Indexes for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`kode_pasien`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`kode_pesan`),
  ADD KEY `kode_pasien` (`kode_pasien`),
  ADD KEY `kode_obat` (`kode_obat`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `kode_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_obat`
--
ALTER TABLE `tbl_obat`
  MODIFY `kode_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `kode_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `kode_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `tbl_booking_ibfk_1` FOREIGN KEY (`kode_dokter`) REFERENCES `tbl_dokter` (`kode_dokter`),
  ADD CONSTRAINT `tbl_booking_ibfk_2` FOREIGN KEY (`kode_pasien`) REFERENCES `tbl_users` (`id_user`);

--
-- Constraints for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD CONSTRAINT `tbl_pasien_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id_user`);

--
-- Constraints for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD CONSTRAINT `tbl_pesan_ibfk_1` FOREIGN KEY (`kode_pasien`) REFERENCES `tbl_users` (`id_user`),
  ADD CONSTRAINT `tbl_pesan_ibfk_2` FOREIGN KEY (`kode_obat`) REFERENCES `tbl_obat` (`kode_obat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
