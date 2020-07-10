-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 10, 2020 at 06:50 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hybriddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `id` int(11) NOT NULL,
  `nm_domain` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`id`, `nm_domain`, `title`, `status`) VALUES
(1, 'http://localhost/batihatta/', 'Sistem Pendukung Keputusan : Pemilihan Lokasi Stand pada Batik Hatta', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alter`
--

CREATE TABLE `tbl_alter` (
  `id_alter` int(10) NOT NULL,
  `nm_alter` varchar(255) NOT NULL,
  `is_null` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_alter`
--

INSERT INTO `tbl_alter` (`id_alter`, `nm_alter`, `is_null`) VALUES
(1, 'TRANSMART', 'N'),
(2, 'JAVA MALL', 'N'),
(3, 'DP MALL', 'N'),
(4, 'HAHAHA', 'N'),
(5, 'MALANG PLASA', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_alternatif`
--

CREATE TABLE `tbl_alternatif` (
  `id_alternatif` varchar(255) NOT NULL,
  `id_bobot` varchar(255) NOT NULL,
  `pembagi1` float DEFAULT NULL,
  `pembagi2` float DEFAULT NULL,
  `pembagi3` float DEFAULT NULL,
  `pembagi4` float DEFAULT NULL,
  `pembagi5` float DEFAULT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_alternatif`
--

INSERT INTO `tbl_alternatif` (`id_alternatif`, `id_bobot`, `pembagi1`, `pembagi2`, `pembagi3`, `pembagi4`, `pembagi5`, `created_time`) VALUES
('059624', '623710', 51.7494, 45.8258, 7.81025, 63.8044, 54.4151, '2020-07-07 10:04:09'),
('087169', '139407', 12.1655, 2.23607, 2.23607, 2.23607, 2.82843, '2020-07-06 20:47:48'),
('240519', '371982', 2.23607, 2.23607, 2.23607, 2.23607, 2.23607, '2020-07-07 09:39:16'),
('297013', '029467', 143.513, 118.558, 150.393, 132.008, 162.975, '2020-07-04 11:08:51'),
('316974', '607421', 4.47214, 4.47214, 12.6491, 22.3607, 4.47214, '2020-07-06 23:03:34'),
('317084', '520687', 6, 6.63325, 4, 5.19615, 5.38516, '2020-07-04 11:15:16'),
('325674', '169748', 2.23607, 2.23607, 2.23607, 2.23607, 2.23607, '2020-07-06 21:06:41'),
('348152', '216547', 212.024, 2121.07, 3.74166, 3.74166, 3.74166, '2020-07-07 19:57:29'),
('356981', '382470', 80.7775, 49.94, 90.978, 70.0214, 23.0434, '2020-07-07 09:40:27'),
('362095', '903754', 68.0661, 68.0074, 76.0263, 76.0263, 76.0263, '2020-07-04 11:11:50'),
('371546', '825069', 143.513, 118.558, 150.393, 132.008, 162.975, '2020-07-01 22:49:10'),
('410827', '156730', 149.255, 169.579, 136.653, 68.8622, 143.746, '2020-07-08 14:23:11'),
('597648', '401862', 3.74166, 17.1464, 12.6491, 20.9762, 2.82843, '2020-07-04 13:06:17'),
('643982', '031597', 143.513, 118.558, 150.393, 132.008, 162.975, '2020-07-03 11:09:52'),
('681527', '861950', 11.1803, 11.1803, 11.1803, 2.23607, 2.23607, '2020-07-07 10:17:31'),
('712593', '415280', 63.2772, 55.5788, 45.6508, 45.5741, 45.4973, '2020-07-04 10:35:21'),
('876502', '598267', 121.445, 118.444, 169.859, 151.017, 129.569, '2020-07-03 11:32:49'),
('938145', '482017', 58.8727, 141.584, 156.825, 136.704, 140.862, '2020-07-02 00:09:34'),
('958671', '436175', 7.28011, 6.63325, 6.7082, 7.48331, 8.77496, '2020-07-04 12:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bobot`
--

CREATE TABLE `tbl_bobot` (
  `id_bobot` varchar(100) NOT NULL,
  `id_total` varchar(100) DEFAULT NULL,
  `bobot` float DEFAULT NULL,
  `bobot2` float DEFAULT NULL,
  `bobot3` float DEFAULT NULL,
  `bobot4` float DEFAULT NULL,
  `bobot5` float DEFAULT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `status_bobot` varchar(255) DEFAULT NULL,
  `status_hitung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bobot`
--

INSERT INTO `tbl_bobot` (`id_bobot`, `id_total`, `bobot`, `bobot2`, `bobot3`, `bobot4`, `bobot5`, `created_time`, `status_bobot`, `status_hitung`) VALUES
('216547', 'nrYowl', 0.2, 0.2, 0.2, 0.2, 0.2, '2020-07-07 19:56:54', 'SELESAI - RANKING KELUAR', 'INPUT BOBOT'),
('317640', 'LnrfvY', 0.2, 0.2, 0.2, 0.2, 0.2, '2020-07-08 11:27:10', 'HITUNG ALTERNATIF', 'INPUT BOBOT'),
('613458', 'NrDEVe', 0.2, 0.2, 0.2, 0.2, 0.2, '2020-07-08 13:29:55', 'HITUNG ALTERNATIF', 'INPUT BOBOT'),
('703185', NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-10 23:45:14', 'PROSES HITUNG', 'INPUT BOBOT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` int(20) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `nilai_banding` int(11) NOT NULL,
  `is_null` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `nama_kriteria`, `nilai_banding`, `is_null`) VALUES
(1, 'LOKASI', 1, 'N'),
(2, 'LABA', 1, 'N'),
(3, 'KEAMANAN', 1, 'N'),
(4, 'BIAYA SEWA', 1, 'N'),
(5, 'TITI LITIK', 1, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ranking`
--

CREATE TABLE `tbl_ranking` (
  `id_ranking` varchar(255) NOT NULL,
  `id_bobot` varchar(255) NOT NULL,
  `id_alternatif` varchar(255) NOT NULL,
  `nilai_v` float DEFAULT NULL,
  `nm_alter` varchar(255) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ranking`
--

INSERT INTO `tbl_ranking` (`id_ranking`, `id_bobot`, `id_alternatif`, `nilai_v`, `nm_alter`, `created_time`) VALUES
('017385', '607421', '316974', 1, '', '2020-07-06 23:03:34'),
('023974', '861950', '681527', 0.585786, '', '2020-07-07 10:17:32'),
('024536', '623710', '059624', 0.343632, '', '2020-07-07 10:04:09'),
('036719', '607421', '316974', 0.531157, '', '2020-07-06 23:03:34'),
('057326', '415280', '712593', 0.339075, '', '2020-07-04 10:35:23'),
('063251', '169748', '325674', 0, '', '2020-07-06 21:06:41'),
('076593', '382470', '356981', 0.818277, '', '2020-07-07 09:40:27'),
('130864', '861950', '681527', 0, '', '2020-07-07 10:17:32'),
('135280', '156730', '410827', 0.125475, 'CITRALAND', '2020-07-08 14:23:11'),
('147239', '139407', '087169', 0, '', '2020-07-06 20:47:48'),
('197804', '169748', '325674', 0, '', '2020-07-06 21:06:42'),
('204163', '607421', '316974', 0, '', '2020-07-06 23:03:34'),
('219805', '401862', '597648', 0.444691, '', '2020-07-04 13:06:17'),
('234570', '382470', '356981', 0.458627, '', '2020-07-07 09:40:27'),
('240859', '156730', '410827', 0.155315, 'PARAGON', '2020-07-08 14:23:11'),
('263871', '903754', '362095', 0.469072, '', '2020-07-04 11:11:51'),
('294587', '169748', '325674', 0, '', '2020-07-06 21:06:41'),
('295703', '623710', '059624', 0.188407, '', '2020-07-07 10:04:09'),
('302761', '401862', '597648', 0.0769996, '', '2020-07-04 13:06:17'),
('324915', '861950', '681527', 0, '', '2020-07-07 10:17:32'),
('326914', '598267', '876502', 0.396298, '', '2020-07-03 11:32:49'),
('350241', '139407', '087169', 0, '', '2020-07-06 20:47:48'),
('371295', '382470', '356981', 0.167877, '', '2020-07-07 09:40:27'),
('372184', '216547', '348152', 0.210851, '', '2020-07-07 19:57:30'),
('374106', '216547', '348152', 0.508294, '', '2020-07-07 19:57:30'),
('375846', '520687', '317084', 0.554533, '', '2020-07-04 11:15:16'),
('403712', '415280', '712593', 0.383658, '', '2020-07-04 10:35:23'),
('453067', '401862', '597648', 0.365586, '', '2020-07-04 13:06:17'),
('458132', '415280', '712593', 0.62493, '', '2020-07-04 10:35:23'),
('470126', '598267', '876502', 0.687272, '', '2020-07-03 11:32:49'),
('475632', '598267', '876502', 0.255311, '', '2020-07-03 11:32:49'),
('475930', '903754', '362095', 1, '', '2020-07-04 11:11:51'),
('503891', '903754', '362095', 1, '', '2020-07-04 11:11:51'),
('514697', '169748', '325674', 0, '', '2020-07-06 21:06:42'),
('534691', '371982', '240519', 0, '', '2020-07-07 09:39:16'),
('543079', '139407', '087169', 0, '', '2020-07-06 20:47:48'),
('546923', '436175', '958671', 0.305295, '', '2020-07-04 12:22:28'),
('561702', '029467', '297013', 0.66271, '', '2020-07-04 11:08:52'),
('562378', '156730', '410827', 0.35217, 'TRANSMART', '2020-07-08 14:23:11'),
('564798', '156730', '410827', 0.428929, 'DP MALL', '2020-07-08 14:23:11'),
('572184', '216547', '348152', 0.155939, '', '2020-07-07 19:57:29'),
('583907', '598267', '876502', 0.44338, '', '2020-07-03 11:32:49'),
('586079', '031597', '643982', 0.299227, '', '2020-07-03 11:09:52'),
('591703', '607421', '316974', 0.531157, '', '2020-07-06 23:03:35'),
('597641', '903754', '362095', 1, '', '2020-07-04 11:11:50'),
('602193', '169748', '325674', 0, '', '2020-07-06 21:06:41'),
('602389', '415280', '712593', 0.64939, '', '2020-07-04 10:35:23'),
('621839', '371982', '240519', 0, '', '2020-07-07 09:39:16'),
('621953', '382470', '356981', 0.447084, '', '2020-07-07 09:40:27'),
('623504', '029467', '297013', 0.299227, '', '2020-07-04 11:08:51'),
('642705', '216547', '348152', 0.510559, '', '2020-07-07 19:57:30'),
('659130', '031597', '643982', 0.75968, '', '2020-07-03 11:09:53'),
('673401', '031597', '643982', 0.745486, '', '2020-07-03 11:09:53'),
('680215', '029467', '297013', 0.745486, '', '2020-07-04 11:08:52'),
('695084', '520687', '317084', 0.725756, '', '2020-07-04 11:15:16'),
('697132', '031597', '643982', 0.157199, '', '2020-07-03 11:09:52'),
('698701', '623710', '059624', 0.33309, '', '2020-07-07 10:04:09'),
('731540', '415280', '712593', 0.438689, '', '2020-07-04 10:35:23'),
('762810', '031597', '643982', 0.66271, '', '2020-07-03 11:09:53'),
('786521', '436175', '958671', 0.694705, '', '2020-07-04 12:22:28'),
('792105', '861950', '681527', 0, '', '2020-07-07 10:17:32'),
('793820', '520687', '317084', 0.250098, '', '2020-07-04 11:15:16'),
('803562', '156730', '410827', 0.638526, 'JAVA MALL', '2020-07-08 14:23:11'),
('805749', '401862', '597648', 0.243402, '', '2020-07-04 13:06:17'),
('806539', '371982', '240519', 0, '', '2020-07-07 09:39:16'),
('821604', '029467', '297013', 0.75968, '', '2020-07-04 11:08:52'),
('826705', '598267', '876502', 0.603334, '', '2020-07-03 11:32:49'),
('841530', '436175', '958671', 0.694705, '', '2020-07-04 12:22:28'),
('845726', '623710', '059624', 0.342329, '', '2020-07-07 10:04:09'),
('849617', '623710', '059624', 0.675371, '', '2020-07-07 10:04:09'),
('854761', '382470', '356981', 0.111158, '', '2020-07-07 09:40:27'),
('854910', '436175', '958671', 0.305295, '', '2020-07-04 12:22:28'),
('865024', '401862', '597648', 0.555309, '', '2020-07-04 13:06:17'),
('921046', '139407', '087169', 0.278884, '', '2020-07-06 20:47:48'),
('921537', '371982', '240519', 0, '', '2020-07-07 09:39:16'),
('921547', '903754', '362095', 0.530928, '', '2020-07-04 11:11:51'),
('923586', '607421', '316974', 0.531157, '', '2020-07-06 23:03:35'),
('925037', '861950', '681527', 0.414214, '', '2020-07-07 10:17:32'),
('938170', '216547', '348152', 0.155939, '', '2020-07-07 19:57:29'),
('941075', '520687', '317084', 0.561821, '', '2020-07-04 11:15:16'),
('943508', '371982', '240519', 0, '', '2020-07-07 09:39:17'),
('945037', '029467', '297013', 0.157199, '', '2020-07-04 11:08:51'),
('958624', '436175', '958671', 0.694705, '', '2020-07-04 12:22:28'),
('960483', '520687', '317084', 0.339281, '', '2020-07-04 11:15:16'),
('987051', '139407', '087169', 0.721116, '', '2020-07-06 20:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perb_kriteria`
--

CREATE TABLE `tb_perb_kriteria` (
  `id_kriteria` varchar(5) NOT NULL,
  `nilai_banding` int(5) NOT NULL,
  `kriteria1` varchar(30) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `kriteria2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perb_kriteria`
--

INSERT INTO `tb_perb_kriteria` (`id_kriteria`, `nilai_banding`, `kriteria1`, `nm_banding`, `kriteria2`) VALUES
('B01 ', 1, 'LOKASI', '1. Sama penting dengan', 'LOKASI'),
('B02 ', 1, 'LABA', '1. Sama penting dengan', 'LABA'),
('B03 ', 1, 'KEAMANAN', '1. Sama penting dengan', 'KEAMANAN'),
('B04 ', 1, 'BIAYA SEWA', '1. Sama penting dengan', 'BIAYA SEWA'),
('B05 ', 1, 'TATA LETAK', '1. Sama penting dengan', 'TATA LETAK');

-- --------------------------------------------------------

--
-- Table structure for table `tb_total`
--

CREATE TABLE `tb_total` (
  `id_total` varchar(255) NOT NULL,
  `total_1` float NOT NULL,
  `total_2` float NOT NULL,
  `total_3` float NOT NULL,
  `total_4` float NOT NULL,
  `total_5` float NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_total`
--

INSERT INTO `tb_total` (`id_total`, `total_1`, `total_2`, `total_3`, `total_4`, `total_5`, `created_time`) VALUES
('0H4b8n', 1, 1, 1, 1, 1, '2020-07-06 20:57:41'),
('2LhWZF', 12, 10.33, 5.58, 4.16, 3.33, '2020-07-04 12:50:49'),
('3cFbUo', 1, 1, 1, 1, 1, '2020-07-08 12:18:10'),
('3rMgV7', 1, 1, 1, 1, 1, '2020-07-06 21:05:42'),
('4ZdSgz', 10, 5.5, 5.83, 5, 3.5, '2020-07-03 23:13:49'),
('6uLm85', 1, 1, 1, 1, 1, '2020-07-04 13:37:13'),
('7oGZlm', 1, 1, 1, 1, 1, '2020-07-04 13:49:38'),
('8QLOCm', 1, 1, 1, 1, 1, '2020-07-08 13:05:25'),
('aQK2dW', 1, 1, 1, 1, 1, '2020-07-04 12:50:13'),
('bHGODZ', 1, 1, 1, 1, 1, '2020-07-04 11:14:44'),
('cTY520', 26, 21.14, 12.31, 5.42, 1.87, '2020-07-01 13:20:37'),
('DhaXuI', 1, 1, 1, 1, 1, '2020-07-07 10:02:36'),
('eOJCnU', 9, 13.33, 7.5, 11.08, 2.28, '2020-07-04 12:22:04'),
('fuXanO', 1, 1, 1, 1, 1, '2020-07-06 22:46:37'),
('JmuyBP', 15, 7.25, 8.33, 2.95, 3.33, '2020-07-03 11:31:46'),
('kcn2WM', 20, 15.33, 13.33, 5.59, 2.12, '2020-07-02 00:08:38'),
('knEB0a', 11, 12.5, 7.83, 5.91, 2.16, '2020-07-01 18:04:52'),
('LnrfvY', 1, 1, 1, 1, 1, '2020-07-08 11:27:13'),
('lWj5xR', 1, 1, 1, 1, 1, '2020-07-06 20:43:49'),
('NrDEVe', 1, 1, 1, 1, 1, '2020-07-08 13:30:26'),
('nrYowl', 1, 1, 1, 1, 1, '2020-07-07 19:57:03'),
('OikfQH', 1, 1, 1, 1, 1, '2020-07-04 12:16:23'),
('P50JRy', 1, 1, 1, 1, 1, '2020-07-06 20:57:29'),
('P98Jkw', 1, 1, 1, 1, 1, '2020-07-07 10:17:14'),
('pdWfYb', 2, 2, 1, 1, 1, '2020-07-06 20:43:12'),
('pnEGjo', 20, 8.2, 6.53, 4.25, 2.53, '2020-07-04 11:07:08'),
('PwXR08', 20, 8.2, 6.53, 4.25, 2.53, '2020-07-03 11:02:32'),
('qn0p19', 9, 12.5, 9.33, 3.86, 2.58, '2020-07-07 09:39:53'),
('rKUnDx', 20, 8.2, 6.53, 4.25, 2.53, '2020-07-01 22:39:57'),
('SzK9Vw', 1, 1, 1, 1, 1, '2020-07-04 11:11:25'),
('TlnzIY', 1, 1, 1, 1, 1, '2020-07-06 23:00:39'),
('UAdX1u', 20, 8.2, 6.53, 4.25, 2.53, '2020-07-01 18:12:25'),
('WAYFQ3', 1, 1, 1, 1, 1, '2020-07-06 18:56:22'),
('z7DFjG', 1, 1, 1, 1, 1, '2020-07-06 18:30:46'),
('Zsvnk4', 1, 1, 1, 1, 1, '2020-07-04 13:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `status`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_alter`
--
ALTER TABLE `tbl_alter`
  ADD PRIMARY KEY (`id_alter`);

--
-- Indexes for table `tbl_alternatif`
--
ALTER TABLE `tbl_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_ranking`
--
ALTER TABLE `tbl_ranking`
  ADD PRIMARY KEY (`id_ranking`);

--
-- Indexes for table `tb_perb_kriteria`
--
ALTER TABLE `tb_perb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_total`
--
ALTER TABLE `tb_total`
  ADD PRIMARY KEY (`id_total`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `domain`
--
ALTER TABLE `domain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  MODIFY `id_kriteria` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
