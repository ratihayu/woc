-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Jul 2017 pada 04.23
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `ID_AKUN` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `NAMA_LENGKAP` varchar(100) NOT NULL,
  `OTORITAS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`ID_AKUN`, `USERNAME`, `PASSWORD`, `NAMA_LENGKAP`, `OTORITAS`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Admin'),
(2, 'ratih', 'a5bd72a3d2c4d1686415f93a46fc7a0a', 'Ratih', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `UPDATE_ID` int(11) NOT NULL,
  `MESSAGE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`UPDATE_ID`, `MESSAGE_ID`) VALUES
(307736518, 22),
(307736519, 38),
(307736520, 44),
(307736521, 45),
(307736522, 47),
(307736523, 49),
(307736524, 50),
(307736525, 51),
(307736526, 52),
(307736527, 53),
(307736528, 54),
(307736529, 55),
(307736530, 56),
(307736531, 57),
(307736532, 58),
(307736533, 59);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `USER_ID` int(11) NOT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `NAMA_TEKNISI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`USER_ID`, `USERNAME`, `NAMA_TEKNISI`) VALUES
(1, 'HD', 'HD'),
(287789202, 'ratihayuindraswari', 'Ratih Ayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ticket`
--

CREATE TABLE `ticket` (
  `ID_INCIDENT` varchar(20) NOT NULL,
  `RECAP_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `CUSTOMER_NAME` varchar(100) NOT NULL,
  `ALPRO` varchar(50) DEFAULT NULL,
  `REPORT_DATE` datetime NOT NULL,
  `PRIORITY` int(11) DEFAULT NULL,
  `TTR_SEGMENT` int(11) DEFAULT NULL,
  `FILTER` varchar(50) DEFAULT 'HD',
  `CLOSED_DATE` datetime DEFAULT NULL,
  `CLOSED_BY` int(11) DEFAULT NULL,
  `HD` int(11) DEFAULT NULL,
  `ACTUAL_SOLUTION` text,
  `KETERANGAN_KENDALA` text,
  `WORKZONE` varchar(50) NOT NULL,
  `SUMMARY` text,
  `STATUS` varchar(10) NOT NULL DEFAULT 'OPEN',
  `NO_SERVICE` varchar(100) NOT NULL,
  `DATEK` varchar(100) DEFAULT NULL,
  `KETERANGAN_CLOSED` text,
  `KETERANGAN_PENDING` text,
  `TECHNICIAN_ASSIGNED` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`ID_AKUN`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`UPDATE_ID`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ID_INCIDENT`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `ID_AKUN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
