-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2020 pada 15.16
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `hybriddb`
--
CREATE DATABASE IF NOT EXISTS `hybriddb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hybriddb`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `domain`
--

CREATE TABLE IF NOT EXISTS `domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_domain` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `domain`
--

INSERT INTO `domain` (`id`, `nm_domain`, `title`, `status`) VALUES
(1, 'http://localhost/batihatta/new/', 'Sistem Pendukung Keputusan : Pemilihan Lokasi Stand', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_alternatif`
--

CREATE TABLE IF NOT EXISTS `tbl_alternatif` (
  `id_alternatif` int(15) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL,
  `pembagi` float DEFAULT NULL,
  `lokasi` float DEFAULT NULL,
  `laba` float DEFAULT NULL,
  `keamanan` float DEFAULT NULL,
  `biaya_sewa` float DEFAULT NULL,
  `tata_letak` float DEFAULT NULL,
  PRIMARY KEY (`id_alternatif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bobot`
--

CREATE TABLE IF NOT EXISTS `tbl_bobot` (
  `id_bobot` varchar(255) NOT NULL,
  `id_total` varchar(255) NOT NULL,
  `lokasi` float DEFAULT NULL,
  `laba` float DEFAULT NULL,
  `keamanan` float DEFAULT NULL,
  `biaya_sewa` float DEFAULT NULL,
  `tata_letak` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kriteria`
--

CREATE TABLE IF NOT EXISTS `tbl_kriteria` (
  `id_kriteria` int(20) NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
(4, 'lokasi'),
(5, 'laba'),
(6, 'keamanan '),
(7, 'biaya sewa '),
(8, 'tata letak ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_topsis`
--

CREATE TABLE IF NOT EXISTS `tbl_topsis` (
  `aplus` int(11) NOT NULL,
  `amin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `status`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
