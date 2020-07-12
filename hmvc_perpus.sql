-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 08:12 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmvc_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `ang_id` varchar(100) NOT NULL,
  `ang_nama` varchar(100) NOT NULL,
  `ang_lahir` date NOT NULL,
  `ang_jk` enum('L','P') NOT NULL,
  `ang_alamat` text NOT NULL,
  `ang_telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`ang_id`, `ang_nama`, `ang_lahir`, `ang_jk`, `ang_alamat`, `ang_telp`, `email`, `password`) VALUES
('ANG-2019000001', 'Bimo Adiparwa', '1998-06-19', 'L', 'Bekasi Barat', '085890951080', 'bimoadiparwa98@gmail.com', 'dc647eb65e6711e155375218212b3964'),
('ANG-2019000002', 'Anggita Azizah Amalia', '1998-04-14', 'L', 'Puri Nusaphala Blok O No.4, Bekasi', '08992223287', 'aanggitaazizah@yahoo.com', '171618e9641e26fe869cb6282d881c49');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `buku_id` varchar(100) NOT NULL,
  `buku_isbn` varchar(100) NOT NULL,
  `buku_gambar` varchar(255) DEFAULT NULL,
  `buku_judul` varchar(100) NOT NULL,
  `buku_deskripsi` text NOT NULL,
  `buku_halaman` varchar(4) NOT NULL,
  `buku_kategori` varchar(100) NOT NULL,
  `genre` enum('Fiksi','Non-Fiksi') NOT NULL,
  `kd_rak` varchar(10) DEFAULT NULL,
  `buku_penulis` varchar(100) NOT NULL,
  `buku_penerbit` varchar(100) NOT NULL,
  `buku_tahun` varchar(4) NOT NULL,
  `buku_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`buku_id`, `buku_isbn`, `buku_gambar`, `buku_judul`, `buku_deskripsi`, `buku_halaman`, `buku_kategori`, `genre`, `kd_rak`, `buku_penulis`, `buku_penerbit`, `buku_tahun`, `buku_stock`) VALUES
('BUK-2019000001', '222019000001', 'Analisi_Regresi_Edisi_Kedua.jpg', 'Analisi Regresi Edisi Kedua', 'Deskripsi Buku', '308', 'KAT-2019000004', 'Non-Fiksi', 'S001', 'PEN-2019000004', 'PUB2019001', '2008', 4),
('BUK-2019000002', '222019000002', 'Origami_Hati.jpg', 'Origami Hati', 'Deskripsi Buku', '300', 'KAT-2019000002', 'Fiksi', 'N001', 'PEN-2019000001', 'PUB2019001', '2018', 5),
('BUK-2019000003', '222019000003', 'Satu_Hari_di_2018.jpg', 'Satu Hari di 2018', 'Deskripsi', '248', 'KAT-2019000002', 'Fiksi', 'N001', 'PEN-2019000001', 'PUB2019002', '2018', 5),
('BUK-2019000004', '222019000004', 'Sebuah_Usaha_Melupakan.jpg', 'Sebuah Usaha Melupakan', 'Deskripsi Buku', '300', 'KAT-2019000002', 'Fiksi', 'N001', 'PEN-2019000002', 'PUB2019001', '2016', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kat_id` varchar(100) NOT NULL,
  `kat_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kat_id`, `kat_nama`) VALUES
('KAT-2019000001', 'Sejarah'),
('KAT-2019000002', 'Novel'),
('KAT-2019000003', 'Cerita Pendek'),
('KAT-2019000004', 'Statistika');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `id_peminjaman` varchar(100) NOT NULL,
  `ang_id` varchar(100) NOT NULL,
  `buku_id` varchar(100) NOT NULL,
  `kat_id` varchar(100) NOT NULL,
  `pen_id` varchar(100) NOT NULL,
  `penerbit_id` varchar(100) NOT NULL,
  `pet_id` varchar(100) NOT NULL,
  `jumlah` tinyint(1) NOT NULL DEFAULT '1',
  `tgl_pinjam` date NOT NULL,
  `tgl_harus_kembali` date NOT NULL,
  `status` enum('Pending','Sedang Dipinjam','Sudah Dikembalikan','Dibatalkan') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `id_peminjaman`, `ang_id`, `buku_id`, `kat_id`, `pen_id`, `penerbit_id`, `pet_id`, `jumlah`, `tgl_pinjam`, `tgl_harus_kembali`, `status`) VALUES
(1, 'PIN-22082019000001', 'ANG-2019000002', 'BUK-2019000001', 'KAT-2019000004', 'PEN-2019000004', 'PUB2019001', 'PET-2019000002', 1, '2019-08-22', '2019-08-29', 'Sudah Dikembalikan');

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `TG_Pinjam` AFTER INSERT ON `peminjaman` FOR EACH ROW BEGIN
	UPDATE buku SET buku_stock=buku_stock-NEW.jumlah
    WHERE buku_id = NEW.buku_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `penerbit_id` varchar(100) NOT NULL,
  `penerbit_nama` varchar(100) NOT NULL,
  `penerbit_alamat` text NOT NULL,
  `penerbit_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`penerbit_id`, `penerbit_nama`, `penerbit_alamat`, `penerbit_telp`) VALUES
('PUB2019001', 'Gramedia', 'Jakarta', '0214461284'),
('PUB2019002', 'Balai Pustaka', 'Yogyakarta', '0218661286');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id` int(11) NOT NULL,
  `id_peminjaman` varchar(100) NOT NULL,
  `pet_id` varchar(100) NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` varchar(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `jumlah` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`id`, `id_peminjaman`, `pet_id`, `tgl_kembali`, `denda`, `nominal`, `jumlah`) VALUES
(1, 'PIN-22082019000001', 'PET-2019000002', '2019-08-22', 'Tidak Denda', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `pen_id` varchar(100) NOT NULL,
  `pen_nama` varchar(100) NOT NULL,
  `pen_lahir` date NOT NULL,
  `pen_jk` enum('L','P') NOT NULL,
  `pen_alamat` text NOT NULL,
  `pen_telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`pen_id`, `pen_nama`, `pen_lahir`, `pen_jk`, `pen_alamat`, `pen_telp`) VALUES
('PEN-2019000001', 'Soren Asmussen', '2019-08-12', 'L', 'Depok', '081256789098'),
('PEN-2019000002', 'Robert M. Gray', '2019-08-26', 'L', 'Jakarta', '082345618907'),
('PEN-2019000003', 'Charles M Grinstead, J. Laurie Snell', '2019-08-05', 'L', 'Bogor', '087425697123'),
('PEN-2019000004', 'R.K. Sembiring', '2019-08-09', 'L', 'Malang', '098765432123'),
('PEN-2019000005', 'Ronald E. Walpole, Raymond H. Myers', '2019-08-26', 'L', 'Padang', '082345609127'),
('PEN-2019000006', 'Ruey S. Tsay', '2019-08-12', 'P', 'Medan', '08124586974');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `pet_id` varchar(100) NOT NULL,
  `pet_nama` varchar(100) NOT NULL,
  `pet_lahir` date NOT NULL,
  `pet_jk` enum('L','P') NOT NULL,
  `pet_alamat` text NOT NULL,
  `pet_telp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('Admin','Pustakawan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`pet_id`, `pet_nama`, `pet_lahir`, `pet_jk`, `pet_alamat`, `pet_telp`, `email`, `password`, `role`) VALUES
('PET-2019000001', 'Bimo Adiparwa', '1998-06-19', 'L', 'Bekasi', '08999196298', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
('PET-2019000002', 'Felisia Handayani', '1997-11-09', 'L', 'Depok', '085855882244', 'pustakawan@pustakawan.com', '1fa3f5ae016e4b0691eb5c1b4fd9b951', 'Pustakawan');

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE `tmp` (
  `buku_id` varchar(100) NOT NULL,
  `ang_id` varchar(100) NOT NULL,
  `pen_id` varchar(100) NOT NULL,
  `penerbit_id` varchar(100) NOT NULL,
  `kat_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ang_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_id`),
  ADD KEY `buku_penulis` (`buku_penulis`),
  ADD KEY `buku_penerbit` (`buku_penerbit`),
  ADD KEY `buku_kategori` (`buku_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kat_id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`penerbit_id`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`pen_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`pet_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tmp`
--
ALTER TABLE `tmp`
  ADD KEY `buku_id` (`buku_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`buku_penulis`) REFERENCES `penulis` (`pen_id`),
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`buku_penerbit`) REFERENCES `penerbit` (`penerbit_id`),
  ADD CONSTRAINT `buku_ibfk_3` FOREIGN KEY (`buku_kategori`) REFERENCES `kategori` (`kat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
