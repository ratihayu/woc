-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jun 2017 pada 06.31
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
  `KETERANGAN_PENDING` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`ID_INCIDENT`, `RECAP_DATE`, `CUSTOMER_NAME`, `ALPRO`, `REPORT_DATE`, `PRIORITY`, `TTR_SEGMENT`, `FILTER`, `CLOSED_DATE`, `CLOSED_BY`, `HD`, `ACTUAL_SOLUTION`, `KETERANGAN_KENDALA`, `WORKZONE`, `SUMMARY`, `STATUS`, `NO_SERVICE`, `DATEK`, `KETERANGAN_CLOSED`, `KETERANGAN_PENDING`) VALUES
('IN12787814', '2017-06-19 15:16:00', 'ASSET DUMMY SEGMENT DCS', '', '2017-01-30 21:38:22', 0, 0, 'HD', '2017-06-20 06:16:53', 1, 1, '', 'NON NUMBERING & PROVISIONING | NON NUMBERING | TREG-4 JATENG | Kabel (KU/KR) terjuntai / tidak rapi', 'KTA', '[NN/bp fariz/085877722224 ] bp fariz / IKR terputus terjuntai tidak rapi  [Z_NN]', 'OPEN', 'DEFAULT_NN_NAS_DCS_VOICE', '', '           ', '           '),
('IN13187893', '2017-06-19 15:16:00', '', '', '2017-02-10 11:50:17', 0, 0, 'HD', '2017-06-20 05:22:12', 1, 0, '', 'NON NUMBERING & PROVISIONING | PROVISIONING | TREG-4 JATENG | Provisioning', 'DEFAULT-NAS', '[SC-3289776][02752971732/BU RADITE /081568445373] BU RADITE / PRVSIONING INDIHOME 3P 10MBPS [Z_NN][DCS]', 'CLOSED', 'Non Numbering', '', ' ', ' '),
('IN13319154', '2017-06-19 15:16:00', 'ASSET DUMMY SEGMENT DCS', '', '2017-02-14 13:51:16', 0, 0, 'HD', '2017-06-20 05:23:07', 1, 0, 'SOLUSI untuk CONNECTIVITY INTEGRASI / MODIFY TRIAL / PSB / MUTASI', 'NON NUMBERING & PROVISIONING | PROVISIONING | TREG-4 JATENG | Provisioning', 'MGE', '[NN/NUCH ARIFIN/081391666686] bp.arfin // Provisioning PSB 3P 10mbps [Z_NN]', 'CLOSED', 'DEFAULT_NN_NAS_DCS_VOICE', '', ' ', ' '),
('IN13354456', '2017-06-19 15:16:00', '', '', '2017-02-15 21:35:13', 0, 0, 'HD', '2017-06-20 05:23:30', 1, 0, '', 'Permintaan | Permintaan 2P POTS-Inet (exist. cust 1P)/ Paket Indihome Subsidi / Disabilitas', '', '[NN/bpk budi/08113444880] bpk budi ingin pemasangan indihome 2p call terputus [Z_PERMINTAAN]', 'CLOSED', 'DEFAULT_NN_NAS_DCS_VOICE', '', ' ', ' '),
('IN14639105', '2017-06-19 15:16:00', '', '', '2017-03-23 10:00:05', 0, 0, 'HD', '2017-06-20 05:26:56', 1, 0, '', 'NON NUMBERING & PROVISIONING | PROVISIONING | TREG-4 JATENG | Provisioning', 'DEFAULT-NAS', '[146146100284/ibu desi/08562884111] ibu desi / provisioning PSB 3p / SC-3699937 / 146146100284 [Z_NN][DCS]', 'CLOSED', 'Non Numbering', '', ' ', ' '),
('IN14890536', '2017-06-19 15:16:00', '', '', '2017-03-31 08:46:22', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'INTERNET | Teknis | Perangkat Pelanggan | Perangkat Pelanggan - Sharing Koneksi LAN/WiFi', 'MGE', '[NN/DEWI/081328411977] DEWI/02935891862/081328411977 [A_INTERNET]', 'OPEN', 'DEFAULT_NN_NAS_DCS_INTERNET', '', NULL, NULL),
('IN15345255', '2017-06-19 15:16:00', '', '', '2017-04-14 08:42:35', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'NON NUMBERING & PROVISIONING | PROVISIONING | TREG-4 JATENG | Provisioning', 'WOS', '[02863302546/bp fajar/085201101200] bp fajar//02863302546//Provisioning PSB [Z_NN][DCS]', 'OPEN', 'Non Numbering', '', NULL, NULL),
('IN15454234', '2017-06-19 15:16:00', 'ASSET DUMMY SEGMENT DCS', '', '2017-04-18 10:56:04', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'NON NUMBERING & PROVISIONING | PROVISIONING | TREG-4 JATENG | Provisioning', 'WOS', '[NN/Bp Fajar/085201101200] Bp Fajar / Provisining 3P INDIHOME 10 MBPS [Z_NN]', 'OPEN', 'DEFAULT_NN_NAS_DCS_VOICE', '', NULL, NULL),
('IN16075528', '2017-06-19 15:16:00', 'ASSET DUMMY SEGMENT DCS', '', '2017-05-06 11:47:57', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'NON NUMBERING & PROVISIONING | PROVISIONING | TREG-4 JATENG | Provisioning', 'PWJ', '[NN/Bp Sunaryadi/0895622571323] Bp Sunaryadi / provisioning / MYIR-10012123730001 [Z_NN]', 'OPEN', 'DEFAULT_NN_NAS_DCS_VOICE', '', NULL, NULL),
('IN16346267', '2017-06-19 15:16:00', '', '', '2017-05-15 12:05:54', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'NON NUMBERING & PROVISIONING | PROVISIONING | TREG-4 JATENG | Provisioning', 'DEFAULT-NAS', '[02933201487/ BU SITA /085643360203] provisioning  [Z_NN][DCS]', 'OPEN', 'Non Numbering', '', NULL, NULL),
('IN16350250', '2017-06-19 15:16:00', '', '', '2017-05-15 13:25:45', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'NON NUMBERING & PROVISIONING | PROVISIONING | TREG-4 JATENG | Provisioning', 'MGE', '[02742833381/POSAN /089671362226 ] POSAN / 02742833381 / psb 3p 10 mbps [Z_NN][DCS]', 'OPEN', 'Non Numbering', '', NULL, NULL),
('IN16929818', '2017-06-19 15:16:00', 'CHRISTANTO', 'Fiber', '2017-06-02 15:48:30', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'IPTV | Non Teknis | Non Teknis - PSB belum aktif', 'MUN', '[141146102044/bp reno/08161867270] 0293585343 / BP PRIMA / psb blom akatif STB hybrid [A_IPTV][DCS]', 'OPEN', '141146102044', 'Fiber - ODP-MUN-FAA/09 FAA/D02/01.09', NULL, NULL),
('IN17068430', '2017-06-19 15:16:00', 'SMK MAARIF BOROBUDUR', 'Fiber', '2017-06-07 11:25:36', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'IPTV | Teknis | Jaringan Layak | Jaringan Layak - LiveTV putus-putus', 'SWT', '[141164100963/ade/085647607507] stb minta dipasang [A_IPTV][DCS]', 'OPEN', '141164100963', 'Fiber - ODP-SWT-FAH/002 FAH/D01/002.01', NULL, NULL),
('IN17225163', '2017-06-19 15:16:00', 'HARYATNO', 'Fiber', '2017-06-12 16:16:49', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'INTERNET | Teknis | Bisa Browsing | Bisa Browsing - Lambat', 'MGE', '[146137119468/ibu iin/08122723968] 146137119468 // 2nd stb belum dipasang // ibu iin cp: 08122723968', 'OPEN', '146137119468', 'Fiber - ODP-MGE-FA/049 FA/D07/049.01', NULL, NULL),
('IN17263015', '2017-06-19 15:16:00', 'ASSET DUMMY SEGMENT DCS', '', '2017-06-13 16:12:34', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'NON NUMBERING & PROVISIONING | PROVISIONING | TREG-4 JATENG | Provisioning', 'BLR', '[NN/Bapak teguh/085749540300] Bapak teguh sc4445015 / damonz07@gmail.com 085749540300 085646406811 [Z_NN]', 'OPEN', 'DEFAULT_NN_NAS_DCS_VOICE', '', NULL, NULL),
('IN17314773', '2017-06-19 15:16:00', 'GRACE SIMON', 'Copper', '2017-06-15 09:40:38', 0, 0, 'HD', '0000-00-00 00:00:00', 7, 0, 'SOLUTION_IPTV,IPTV - SET TOP BOX,ADAPTOR RUSAK', 'INTERNET | Teknis | Tidak Bisa Browsing | Tidak Bisa Browsing - Tidak Bisa Koneksi', 'MGE', '[141137107396/Nn GRACE SIMON/081392657076] bu GRACE SIMON  / 141137107396 / inet tbc, no simptom [A_INTERNET][DCS]', 'OPEN', '141137107396', 'Non Fiber - 4MG MG1_47_1 RR44', NULL, NULL),
('IN17317317', '2017-06-19 15:16:00', 'ASSET DUMMY SEGMENT DCS', '', '2017-06-15 10:10:13', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'NON NUMBERING & PROVISIONING | PROVISIONING | TREG-4 JATENG | Provisioning', 'PWJ', '[NN/YHANU/081328211100] yhanu / MYIR-10014547430003 / provisioning PSB / 081328211100 [Z_NN]', 'OPEN', 'DEFAULT_NN_NAS_DCS_VOICE', '', NULL, NULL),
('IN17352670', '2017-06-19 15:16:00', 'MULYANTO HARTONO', 'Fiber', '2017-06-16 09:48:06', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'VOICE | Teknis | Jaringan Layak - Fiber | Jaringan Layak - Fiber - Telepon mati/Tidak ada nada', 'MGE', '[02933217776/ibu dwi /085743716699] 02933217776 ibu dwi telp matot  [A_VOICE][DCS]', 'OPEN', '02933217776', 'Fiber - ODP-MGE-FP/012 FP/D01/012.01', NULL, NULL),
('IN17354672', '2017-06-19 15:16:00', 'IRWAN GIANTORO', 'Copper', '2017-06-16 10:17:53', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'VOICE | Teknis | Jaringan Layak - Fiber | Jaringan Layak - Fiber - Telepon mati/Tidak ada nada', 'MGE', '[0293311384/ibu mega/0816675616] ibu mega / telp matot  2 hari / 0293311384 [DCS]', 'OPEN', '0293311384', 'Non Fiber - 4MG MG1_47_1 RD13', NULL, NULL),
('IN17360184', '2017-06-19 15:16:00', 'LUSIANA RIKA INDRA', 'Copper', '2017-06-16 11:52:18', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'VOICE | Teknis | Jaringan Layak - Non Fiber | Jaringan Layak - Non Fiber - Tidak bisa memanggil', 'WOS', '[0286323125/bp arif /085226052255 ] bp arif // 085226052255 // TBM // ganggaun 3 hari  [A_VOICE][DCS]', 'OPEN', '0286323125', 'Non Fiber - 4MG WS1_47_1 RJ30', NULL, NULL),
('IN17360476', '2017-06-19 15:16:01', '', '', '2017-06-16 12:02:31', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'NON NUMBERING & PROVISIONING | PROVISIONING | TREG-4 JATENG | Provisioning', 'KBM', '[146141400355/BP BEKTI/087732522466] BP BEKTI // 0287382078  // migrasi 1p-2p netizen 2 10 Mbps ( provisioning 146141400355) [Z_NN][DCS]', 'OPEN', 'Non Numbering', '', NULL, NULL),
('IN17361509', '2017-06-19 15:16:00', 'VIVI', 'Copper', '2017-06-16 12:38:06', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'VOICE | Teknis | Jaringan Tdk Bisa Diukur | Jaringan Tdk Bisa Diukur - Telepon mati/Tidak ada nada', 'MGE', '[0293368233/bu lutvi/082220643335] bp samudro // 0293368233 // telp matot [A_VOICE][DCS]', 'OPEN', '0293368233', 'Non Fiber - 4MG MG1_47_1 RF71', NULL, NULL),
('IN17362051', '2017-06-19 15:16:00', 'BUDIYARTO', 'Copper', '2017-06-16 12:52:45', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'VOICE | Teknis | Jaringan Tdk Bisa Diukur | Jaringan Tdk Bisa Diukur - Telepon mati/Tidak ada nada', 'MGE', '[0293364367/bp hari /081328736102]  bp hari /  matot / 0293364367 [A_VOICE][DCS]', 'OPEN', '0293364367', 'Non Fiber - 4MG MG1_47_1 RG73', NULL, NULL),
('IN17362253', '2017-06-19 15:16:00', 'CHOIRUL HUDAN', 'Copper', '2017-06-16 12:57:20', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'VOICE | Teknis | Jaringan Tdk Bisa Diukur | Jaringan Tdk Bisa Diukur - Telepon mati/Tidak ada nada', 'MGE', '[0293311112/ibu HUDAN/081228681744] tlp matot [A_VOICE][DCS]', 'OPEN', '0293311112', 'Non Fiber - 4MG MG1_47_1 RF75', NULL, NULL),
('IN17363003', '2017-06-19 15:16:00', 'BRI UNIT MAGELANG SELATAN', 'Fiber', '2017-06-16 13:14:05', 0, 1, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'IPTV | Teknis | Perangkat Pelanggan | Perangkat Pelanggan - Petugas Diminta Datang', 'MGE', '[142175101301/bp agus/08122765181] pasang stb. sejak psb belum pernah ada stb di lokasi [A_IPTV][DES]', 'OPEN', '142175101301', 'Fiber - ODP-MGE-FK/016 FK/D01/016-01', NULL, NULL),
('IN17363440', '2017-06-19 15:16:00', 'ABDUL MUIN', 'Copper', '2017-06-16 13:22:47', 0, 0, 'HD', '2017-06-19 17:30:14', 1, 0, '', 'VOICE | Teknis | Jaringan Tdk Bisa Diukur | Jaringan Tdk Bisa Diukur - Telepon mati/Tidak ada nada', 'MGE', '[0293361947/bayu/081328724452] tlp matot. tidak ada nada sambung, dipanggil tidak berdering [A_VOICE][DCS]', 'OPEN', '0293361947', 'Non Fiber - 4MG MG1_47_1 RJ21', ' sip', ' '),
('IN17364166', '2017-06-19 15:16:00', 'PASAR REJOWINANGUN', 'Fiber', '2017-06-16 13:36:08', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', '', 'MGE', '[146137109048/ibu alfin/085727061700] ibu afin - bpk david  /  146137109048 / tbc / modem diganti  / minta petugas datang ke lokasi. [A_INTERNET][DCS]', 'OPEN', '146137109048', 'Fiber - ODP-MG-FRR/12 FRR/D06/05.12', NULL, NULL);

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
