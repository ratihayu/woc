-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jun 2017 pada 09.45
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
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `USER_ID` int(11) NOT NULL,
  `USERNAME` varchar(100) DEFAULT NULL,
  `NAMA_TEKNISI` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `FILTER` varchar(50) NOT NULL DEFAULT 'HD',
  `CLOSED_DATE` datetime DEFAULT NULL,
  `CLOSED_BY` int(11) DEFAULT NULL,
  `HD` int(11) NOT NULL,
  `ACTUAL_SOLUTION` text,
  `KETERANGAN_KENDALA` text,
  `WORKZONE` varchar(50) NOT NULL,
  `SUMMARY` text,
  `STATUS` varchar(10) NOT NULL DEFAULT 'OPEN',
  `NO_SERVICE` varchar(100) NOT NULL,
  `DATEK` varchar(100) DEFAULT NULL,
  `KETERANGAN_CLOSED` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ticket`
--

INSERT INTO `ticket` (`ID_INCIDENT`, `RECAP_DATE`, `CUSTOMER_NAME`, `ALPRO`, `REPORT_DATE`, `PRIORITY`, `TTR_SEGMENT`, `FILTER`, `CLOSED_DATE`, `CLOSED_BY`, `HD`, `ACTUAL_SOLUTION`, `KETERANGAN_KENDALA`, `WORKZONE`, `SUMMARY`, `STATUS`, `NO_SERVICE`, `DATEK`, `KETERANGAN_CLOSED`) VALUES
('IN12787814', '2017-06-15 04:18:34', 'ASSET DUMMY SEGMENT DCS', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'KTA', '[NN/bp fariz/085877722224 ] bp fariz / IKR terputus terjuntai tidak rapi  [Z_NN]', 'OPEN', 'DEFAULT_NN_NAS_DCS_VOICE', '', NULL),
('IN13187893', '2017-06-15 04:18:34', '', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'DEFAULT-NAS', '[02752971732/BU RADITE /081568445373] BU RADITE / PRVSIONING INDIHOME 3P 10MBPS [Z_NN][DCS]', 'OPEN', 'Non Numbering', '', NULL),
('IN13319154', '2017-06-15 04:18:34', 'ASSET DUMMY SEGMENT DCS', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'MGE', '[NN/NUCH ARIFIN/081391666686] bp.arfin // Provisioning PSB 3P 10mbps [Z_NN]', 'OPEN', 'DEFAULT_NN_NAS_DCS_VOICE', '', NULL),
('IN13354456', '2017-06-15 04:18:34', '', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', '', '[NN/bpk budi/08113444880] bpk budi ingin pemasangan indihome 2p call terputus [Z_PERMINTAAN]', 'OPEN', 'DEFAULT_NN_NAS_DCS_VOICE', '', NULL),
('IN14639105', '2017-06-15 04:18:34', '', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'DEFAULT-NAS', '[146146100284/ibu desi/08562884111] ibu desi / provisioning PSB 3p / SC-3699937 / 146146100284 [Z_NN][DCS]', 'OPEN', 'Non Numbering', '', NULL),
('IN14890536', '2017-06-15 04:18:34', '', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'MGE', '[NN/DEWI/081328411977] DEWI/02935891862/081328411977 [A_INTERNET]', 'OPEN', 'DEFAULT_NN_NAS_DCS_INTERNET', '', NULL),
('IN15345255', '2017-06-15 04:18:34', '', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'WOS', '[02863302546/bp fajar/085201101200] bp fajar//02863302546//Provisioning PSB [Z_NN][DCS]', 'OPEN', 'Non Numbering', '', NULL),
('IN15454234', '2017-06-15 04:18:34', 'ASSET DUMMY SEGMENT DCS', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'WOS', '[NN/Bp Fajar/085201101200] Bp Fajar / Provisining 3P INDIHOME 10 MBPS [Z_NN]', 'OPEN', 'DEFAULT_NN_NAS_DCS_VOICE', '', NULL),
('IN16075528', '2017-06-15 04:18:34', 'ASSET DUMMY SEGMENT DCS', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'PWJ', '[NN/Bp Sunaryadi/0895622571323] Bp Sunaryadi / provisioning / MYIR-10012123730001 [Z_NN]', 'OPEN', 'DEFAULT_NN_NAS_DCS_VOICE', '', NULL),
('IN16346267', '2017-06-15 04:18:34', '', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'DEFAULT-NAS', '[02933201487/ BU SITA /085643360203] provisioning  [Z_NN][DCS]', 'OPEN', 'Non Numbering', '', NULL),
('IN16350250', '2017-06-15 04:18:34', '', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'MGE', '[02742833381/POSAN /089671362226 ] POSAN / 02742833381 / psb 3p 10 mbps [Z_NN][DCS]', 'OPEN', 'Non Numbering', '', NULL),
('IN16929818', '2017-06-15 04:18:33', 'CHRISTANTO', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'MUN', '[141146102044/bp reno/08161867270] 0293585343 / BP PRIMA / psb blom akatif STB hybrid [A_IPTV][DCS]', 'OPEN', '141146102044', 'Fiber - ODP-MUN-FAA/09 FAA/D02/01.09', NULL),
('IN16977005', '2017-06-15 04:18:33', 'BMT HUSNUL FAIZAH', 'Copper', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 7, 0, 'SOLUTION_INTERNET,INTERNET - MODEM/ONT,MODEM/ONT HANG', 'keterangan_kendala', 'TEM', '[141148101274/bu fatimah/081228407786] ibu fatimah / 141148101274 / minta disettingkan ke komputer dan gadget / pelanggan tdk mengetahui password modemnya [A_INTERNET][DCS]', 'OPEN', '141148101274', 'Non Fiber - 4MG TMG_47_1 FDE12', NULL),
('IN17006561', '2017-06-15 04:18:34', 'ATHAR SUJATMOKO', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'PWJ', '[146138100474/bp athar/081284326980] 146138100474 // Perangkat Pelanggan Belum Lengkap // bp athar cp: 081284326980', 'OPEN', '146138100474', 'Fiber - ODP-PWJ-FAQ/017 FAQ/D02/017.01', NULL),
('IN17066180', '2017-06-15 04:18:34', 'BMT MAKMUR GEMILANG', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'SWT', '[146174109856/Bapak Candra/08122713554] Bapak Candra / minta ptugas dtang setting Modem ke Bridge / 146174109856 [A_INTERNET][DCS]', 'OPEN', '146174109856', 'Fiber - ODP-SWT-FMRE/31 FMRE/D01/31.01', NULL),
('IN17068430', '2017-06-15 04:18:34', 'SMK MAARIF BOROBUDUR', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'SWT', '[141164100963/ade/085647607507] stb minta dipasang [A_IPTV][DCS]', 'OPEN', '141164100963', 'Fiber - ODP-SWT-FAH/002 FAH/D01/002.01', NULL),
('IN17077491', '2017-06-15 04:18:34', 'kusmaryanto', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'KBM', '[142141100142/kusmaryanto/02876601945] 2nd stb belum aktif [A_IPTV][DCS]', 'OPEN', '142141100142', 'Fiber - ODP-KBM-FAC/04 FAC/D02/04-04', NULL),
('IN17098293', '2017-06-15 04:18:33', 'NUR AHMAD', 'Copper', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'TEM', '[02934902795/MBAK RATNA/085743358342] TELPON MATI [A_VOICE][DCS]', 'OPEN', '02934902795', 'Non Fiber - 4MG TMG_47_1 FDJ35', NULL),
('IN17099732', '2017-06-15 06:24:37', 'RAHEL TUTY RAHAYU AMELYA', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'MGE', '[143175100276/BU RAHEL  /081353135888] GANGGUAN USEETV. STB PERTAMA GANGGUAN KODE 1302.PELANGGAN MINTA TEKNISI DATANG KE LOKASI [A_IPTV][DCS]', 'OPEN', '143175100276', 'Fiber - ODP-MGE-FD/022 FD/D03/022.01', NULL),
('IN17100420', '2017-06-15 04:18:34', 'SRI NOERBOEATI', 'Copper', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'TEM', '[0293492171/bp kusnadi/081350438110] bp kusnadi tlp matot 0293492171 [A_VOICE][DCS]', 'OPEN', '0293492171', 'Non Fiber - 4MG TMG_47_1 RB75', NULL),
('IN17101255', '2017-06-15 04:18:34', 'EKO LUJI NUGRAHANTO', 'Copper', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'WOS', '[142373100838/EKO LUJI NUGRAHANTO/08122520457] tlp & inet mati [A_INTERNET][DCS]', 'OPEN', '142373100838', 'Non Fiber - 4MG WS1_47_1 RK13', NULL),
('IN17102002', '2017-06-15 04:18:34', 'DULHADI', 'Copper', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'MUN', '[02933285197/pak dul/085868442703] tlp mati [A_VOICE][DCS]', 'OPEN', '02933285197', 'Non Fiber - 4MG MKD_47_1 FDF30', NULL),
('IN17102189', '2017-06-15 04:18:34', 'SUHAINI MAKFULAINI', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'WOS', '[141373101680/mahfud/085227006194] tlp & inet mati [A_INTERNET][DCS]', 'OPEN', '141373101680', '', NULL),
('IN17102476', '2017-06-15 04:18:33', 'UNTUNG PRPATOHARDJO', 'Copper', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'TEM', '[02934903003/IBU CIK/085725878969] TELPON MATI [A_VOICE][DCS]', 'OPEN', '02934903003', '', NULL),
('IN17102511', '2017-06-15 04:18:33', 'KHUNDORI', 'Copper', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'WOS', '[141373100852/ bp khundori/081327030753] bu ifa 0286324532 141373100852 ganti pass wifi inet  [A_INTERNET][DCS]', 'OPEN', '141373100852', '', NULL),
('IN17102664', '2017-06-15 04:18:34', 'SUGIARTO', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'PWJ', '[141138100497/SUGIARTO/02757530823] SUGIARTO // 02757530823 // USEETV tidak bisa buka youtube [A_IPTV][DCS]', 'OPEN', '141138100497', '', NULL),
('IN17103088', '2017-06-15 04:18:34', 'YASRI', '', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'PRN', '[0293598107/b esti/085643216216] pots matot / TAN / 0293598107 / b esti [A_VOICE][DCS]', 'OPEN', '0293598107', '', NULL),
('IN17103246', '2017-06-15 04:18:33', 'NURZAINI', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'MTY', '[0293327367/nur /081510970807] tlp matot [A_VOICE][DCS]', 'OPEN', '0293327367', '', NULL),
('IN17106297', '2017-06-15 06:24:37', 'BAMBANG SRI TEJO SINARKO', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'MTY', '[0293325013/BU WIDIA /081327707793] bu widia / 0293325013/ telp panggilan masuk / panggilan keluar  ok / sejak di ganti fo / sering kendala / sdh 2 hari  [DCS]', 'OPEN', '0293325013', 'Fiber - ODP-MTY-FAD/028 FAD/D02/028.01', NULL),
('IN17110002', '2017-06-15 06:24:37', 'KANDI WERDININGSIH', 'Copper', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'MGE', '[141137107304/IBU KANDI/081227230979] ibu kandi / inet lambat /  141137107304 [DCS]', 'OPEN', '141137107304', 'Non Fiber - 4MG MG1_47_1 RN13', NULL),
('IN17112652', '2017-06-15 06:24:37', 'YUSTINUS YULIANTO', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'MGE', '[141137103152/ibu rina  /085729066618] ibu rina  02933216250 usee tv yuotube tdk bisa [DCS]', 'OPEN', '141137103152', 'Fiber - ODP-MGE-FA/075 FA/D04/075.01', NULL),
('IN17113098', '2017-06-15 06:24:37', 'EKO HAJIANTO', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'WOS', '[02863302624/eko/081317511144] tlp tdk dpt memanggil [A_VOICE][DCS]', 'OPEN', '02863302624', 'Fiber - ODP-WOS-FAM/027 FAM/D03/027.01', NULL),
('IN17113221', '2017-06-15 06:24:37', 'DWI BUDI PRASETYOWATI', 'Fiber', '0000-00-00 00:00:00', 0, 0, 'HD', '0000-00-00 00:00:00', 0, 0, '', 'keterangan_kendala', 'MGE', '[141137101534/JOKO SUYONO/08174103821] INET DC. SEJAK KEMARIN. LAMPU LOS MERAH [A_INTERNET][DCS]', 'OPEN', '141137101534', 'Fiber - ODP-MGE-FDE/007  FDE/D02/007.01', NULL),
('IN17259077', '2017-06-14 06:49:39', 'KAHAR MURDANIANTO', 'Copper', '2017-06-14 10:57:50', NULL, NULL, 'HD', NULL, NULL, 2, NULL, NULL, 'Temanggung', '[02934901668/KAHAR MURDANIANTO/085729811059] TELPON MATI [A_VOICE][DCS]', 'OPEN', '02934903003', NULL, 'Jemper di dislam lepas sambung kembali/jemper ulang tes ok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`ID_AKUN`);

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
