-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2026 at 07:01 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simulasi_pbo_ti1d_nabilaislamicw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` int NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(100) DEFAULT NULL,
  `lokasi_kampus` varchar(100) DEFAULT NULL,
  `jenis_prestasi` varchar(100) DEFAULT NULL,
  `tingkat_prestasi` varchar(50) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(50) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Andi Saputra', 'SMAN 1 Kediri', 87.00, 300000, 'Reguler', 'Teknik Informatika', 'Kampus A', NULL, NULL, NULL, NULL),
(2, 'Budi Pratama', 'SMAN 2 Kediri', 85.00, 300000, 'Reguler', 'Sistem Informasi', 'Kampus B', NULL, NULL, NULL, NULL),
(3, 'Citra Dewi', 'SMKN 1 Kediri', 90.00, 300000, 'Reguler', 'Teknik Elektro', 'Kampus A', NULL, NULL, NULL, NULL),
(4, 'Dimas Arya', 'SMAN 3 Kediri', 84.00, 300000, 'Reguler', 'Manajemen', 'Kampus C', NULL, NULL, NULL, NULL),
(5, 'Eka Putri', 'SMKN 2 Kediri', 88.00, 300000, 'Reguler', 'Akuntansi', 'Kampus B', NULL, NULL, NULL, NULL),
(6, 'Farhan Rizky', 'SMAN 1 Jombang', 82.00, 300000, 'Reguler', 'Teknik Mesin', 'Kampus A', NULL, NULL, NULL, NULL),
(7, 'Gina Lestari', 'SMKN 1 Blitar', 89.00, 300000, 'Reguler', 'Teknik Sipil', 'Kampus C', NULL, NULL, NULL, NULL),
(8, 'Hafiz Ramadhan', 'SMAN 4 Kediri', 91.00, 300000, 'Reguler', 'Teknik Industri', 'Kampus A', NULL, NULL, NULL, NULL),
(9, 'Indah Permata', 'SMKN 3 Kediri', 86.00, 300000, 'Reguler', 'Bisnis Digital', 'Kampus B', NULL, NULL, NULL, NULL),
(10, 'Joko Saputro', 'SMAN 1 Nganjuk', 83.00, 300000, 'Reguler', 'Teknik Kimia', 'Kampus C', NULL, NULL, NULL, NULL),
(11, 'Umar Fadli', 'SMAN 1 Kediri', 95.00, 300000, 'Prestasi', NULL, NULL, 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(12, 'Vina Lestari', 'SMAN 2 Kediri', 94.00, 300000, 'Prestasi', NULL, NULL, 'Basket', 'Provinsi', NULL, NULL),
(13, 'Wahyu Saputra', 'SMKN 1 Kediri', 96.00, 300000, 'Prestasi', NULL, NULL, 'Karya Ilmiah', 'Nasional', NULL, NULL),
(14, 'Xavier Pratama', 'SMAN 1 Blitar', 92.00, 300000, 'Prestasi', NULL, NULL, 'Renang', 'Provinsi', NULL, NULL),
(15, 'Yasmin Aulia', 'SMAN 2 Blitar', 97.00, 300000, 'Prestasi', NULL, NULL, 'Pencak Silat', 'Nasional', NULL, NULL),
(16, 'Zidan Maulana', 'SMKN 1 Madiun', 91.00, 300000, 'Prestasi', NULL, NULL, 'Voli', 'Kabupaten', NULL, NULL),
(17, 'Aisyah Putri', 'SMAN 1 Surabaya', 98.00, 300000, 'Prestasi', NULL, NULL, 'Olimpiade Kimia', 'Internasional', NULL, NULL),
(18, 'Bagas Dwi', 'SMAN 3 Kediri', 93.00, 300000, 'Prestasi', NULL, NULL, 'Futsal', 'Provinsi', NULL, NULL),
(19, 'Cindy Amelia', 'SMAN 1 Nganjuk', 95.00, 300000, 'Prestasi', NULL, NULL, 'Tari', 'Nasional', NULL, NULL),
(20, 'Daffa Rizki', 'SMKN 2 Kediri', 92.00, 300000, 'Prestasi', NULL, NULL, 'Badminton', 'Kabupaten', NULL, NULL),
(21, 'Oki Prasetyo', 'SMAN 1 Surabaya', 86.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK001', 'PT PLN'),
(22, 'Putri Ayu', 'SMAN 5 Surabaya', 88.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK002', 'PT KAI'),
(23, 'Qori Rahma', 'SMKN 2 Kediri', 85.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK003', 'Bank Indonesia'),
(24, 'Rizal Maulana', 'SMAN 1 Blitar', 87.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK004', 'Pertamina'),
(25, 'Salsa Putri', 'SMAN 3 Kediri', 89.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK005', 'Telkom Indonesia'),
(26, 'Tegar Saputra', 'SMKN 1 Kediri', 84.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK006', 'PLN'),
(27, 'Umi Kalsum', 'SMAN 2 Kediri', 90.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK007', 'BPJS Kesehatan'),
(28, 'Vito Pratama', 'SMKN 1 Madiun', 86.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK008', 'Bank Mandiri'),
(29, 'Wulan Sari', 'SMAN 1 Jombang', 91.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK009', 'Bank BRI'),
(30, 'Xena Putri', 'SMAN 1 Malang', 88.00, 300000, 'Kedinasan', NULL, NULL, NULL, NULL, 'SK010', 'Bank BNI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
