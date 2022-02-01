-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 05:37 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelompok-ii`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb-3b1`
--

CREATE TABLE `tb-3b1` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `bidang_keahlian` varchar(255) NOT NULL,
  `rekognisi_dan_bukti_pendukung` varchar(255) NOT NULL,
  `tingkat_wilayah` varchar(255) NOT NULL,
  `tingkat_nasional` varchar(255) NOT NULL,
  `tingkat_internasional` varchar(255) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb-3b2`
--

CREATE TABLE `tb-3b2` (
  `id` int(11) NOT NULL,
  `sumber_pembiayaan` varchar(255) NOT NULL,
  `jml_judul_penelitian_TS_2` int(11) NOT NULL,
  `jml_judul_penelitian_TS_1` int(11) NOT NULL,
  `jml_judul_penelitian_TS` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb-3b3`
--

CREATE TABLE `tb-3b3` (
  `id` int(11) NOT NULL,
  `sumber_pembiayaan` varchar(255) NOT NULL,
  `jml_judul_pkm_TS_2` int(11) NOT NULL,
  `jml_judul_pkm_TS_1` int(11) NOT NULL,
  `jml_judul_pkm_TS` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb-3b4-1`
--

CREATE TABLE `tb-3b4-1` (
  `id` int(11) NOT NULL,
  `jenis_publikasi` varchar(255) NOT NULL,
  `jml_judul_TS_2` int(11) NOT NULL,
  `jml_judul_TS_1` int(11) NOT NULL,
  `jml_judul_TS` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb-3b4-2`
--

CREATE TABLE `tb-3b4-2` (
  `id` int(11) NOT NULL,
  `jenis_publikasi` varchar(255) NOT NULL,
  `jml_judul_TS_2` int(11) NOT NULL,
  `jml_judul_TS_1` int(11) NOT NULL,
  `jml_judul_TS` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb-3b5`
--

CREATE TABLE `tb-3b5` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `jml_artikel_sitasi` int(10) NOT NULL,
  `jumlah_sitasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb-3b6`
--

CREATE TABLE `tb-3b6` (
  `id` int(11) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `nama_produk_jasa` text NOT NULL,
  `deskripsi_produk_jasa` text NOT NULL,
  `bukti` text NOT NULL,
  `tahun` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb-3b7-1`
--

CREATE TABLE `tb-3b7-1` (
  `id` int(11) NOT NULL,
  `luaran_penelitian_dan_pkm` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `keterangan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb-3b7-2`
--

CREATE TABLE `tb-3b7-2` (
  `id` int(11) NOT NULL,
  `luaran_penelitian_dan_pkm` varchar(255) NOT NULL,
  `tahun` int(11) NOT NULL,
  `keterangan` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb-3b73`
--

CREATE TABLE `tb-3b73` (
  `id` int(11) NOT NULL,
  `luaran_penelitian_pkm` varchar(125) NOT NULL,
  `tahun` year(4) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb-3b74`
--

CREATE TABLE `tb-3b74` (
  `id` int(11) NOT NULL,
  `luaran_penelitian_pkm` varchar(125) NOT NULL,
  `tahun` year(4) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb-4`
--

CREATE TABLE `tb-4` (
  `id` int(11) NOT NULL,
  `jenis_penggunaan` varchar(125) NOT NULL,
  `upps_ts_2` float NOT NULL,
  `upps_ts_1` float NOT NULL,
  `upps_ts` float NOT NULL,
  `upps_ts_rata` float NOT NULL,
  `ps_ts_2` float NOT NULL,
  `ps_ts_1` float NOT NULL,
  `ps_ts` float NOT NULL,
  `ps_ts_rata` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb-4`
--

INSERT INTO `tb-4` (`id`, `jenis_penggunaan`, `upps_ts_2`, `upps_ts_1`, `upps_ts`, `upps_ts_rata`, `ps_ts_2`, `ps_ts_1`, `ps_ts`, `ps_ts_rata`) VALUES
(1, '2', 100, 200, 300, 400, 500, 600, 700, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_01password`
--

CREATE TABLE `tb_01password` (
  `id_password` varchar(120) NOT NULL,
  `id_fakultas` varchar(5) DEFAULT NULL,
  `id_prodi` varchar(5) DEFAULT NULL,
  `nidn_dosen` varchar(12) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL,
  `jabatan` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_01password`
--

INSERT INTO `tb_01password` (`id_password`, `id_fakultas`, `id_prodi`, `nidn_dosen`, `username`, `jabatan`) VALUES
('22e604fc0a0d6aab3017e19e4928f3e4', 'F0001', '41221', '0407057804', 'ace', '41221.02'),
('36fcbeec6861e54b259cbd751fc875f4', 'F0001', '55201', '409049101', 'dianti', '0.00'),
('539550f8af2adb91d1e4cbbdf9fc1162', 'F0001', '55201', '0', 'ahmadsuryan', '0.00'),
('579c5b2deb6c2d27a4b9048367f9361c', 'F0001', '55201', '222206001', 'Nana Karyana Kurdi', '55201.02'),
('5c4a8cffa6d32ba238fe0c4a155f0d61', 'F0001', '55201', '409088804', 'sutadi', '55201.01'),
('698358ed6b160bf2a30003b223b46766', 'F0003', '0', '429097304', 'agusbagianto', '0.00'),
('831167d1d11e16b877055beb00ffec4b', 'F0001', '48201', '0429119501', 'kokoak', '48201.02'),
('b222eaaab63ae22bd572e365d767fb7f', 'F0001', '20201', '1122077801', 'adiyasri', '0.00'),
('bc998cf2e0a825a30202867c918c8713', 'F0001', '54201', '405058406', 'utan sahiro ritongga', '54201.02'),
('d6fa1ae8fee889007cafbc33d02e8f83', 'F0003', 'F0032', '0402067302', 'daduk', 'F0032.02'),
('ee849101537b1244b0d5bda7994315b0', 'F0001', '41221', '0', 'fahmiilmanfahrudin', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_02fakultas`
--

CREATE TABLE `tb_02fakultas` (
  `kode_pts` varchar(5) DEFAULT NULL,
  `id_fakultas` varchar(5) NOT NULL,
  `nama_fakultas` varchar(28) DEFAULT NULL,
  `strata` varchar(2) DEFAULT NULL,
  `nomor_sk` varchar(8) DEFAULT NULL,
  `tgl_sk` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_02fakultas`
--

INSERT INTO `tb_02fakultas` (`kode_pts`, `id_fakultas`, `nama_fakultas`, `strata`, `nomor_sk`, `tgl_sk`) VALUES
('PTS01', 'F0001', 'Fakultas Sains dan Teknologi', 'S1', 'xx/xx/xx', '12/31/2021'),
('PTS01', 'F0002', 'Fakultas Sosial Humaniora', 'S1', 'xx/xx/xx', '12/31/2021'),
('PTS01', 'F0003', 'Fakultas Ekonomi dan Bisnis', 'S1', 'xx/xx/xx', '12/31/2021'),
('PTS01', 'F0004', 'Fakultas Agama Islam', 'S1', 'xx/xx/xx', '12/31/2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_03prodi`
--

CREATE TABLE `tb_03prodi` (
  `id_kodefakultas` varchar(5) DEFAULT NULL,
  `id_kodeprodi` varchar(5) NOT NULL,
  `nama_prodi` varchar(45) DEFAULT NULL,
  `jenjang` varchar(2) DEFAULT NULL,
  `reguler` varchar(2) DEFAULT NULL,
  `no_reguler` varchar(2) DEFAULT NULL,
  `nomor_sk` varchar(10) DEFAULT NULL,
  `tgl_sk` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_03prodi`
--

INSERT INTO `tb_03prodi` (`id_kodefakultas`, `id_kodeprodi`, `nama_prodi`, `jenjang`, `reguler`, `no_reguler`, `nomor_sk`, `tgl_sk`) VALUES
('F0001', '20201', 'Teknik Elekto', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0001', '26201', 'Teknik Industri', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0001', '41221', 'Teknologi Pangan', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0001', '48201', 'Farmasi', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0001', '54201', 'Agribisnis', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0001', '54207', 'Bioteknologi', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0001', '55201', 'Informatika', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0002', '63201', 'Administrasi Publik', 'S1', 'Ya', 'Ya', 'xx/xx/xxxx', '10/30/2021'),
('F0002', '70201', 'Ilmu Komunikasi', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0002', '73201', 'Psikologi', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0002', '90211', 'Kriya Tekstil & Fashion', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0003', 'F0031', 'Akuntasi', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0003', 'F0032', 'Manajemen', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0004', 'F0041', 'Pendidikan Agama Islam (PAI)', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0004', 'F0042', 'Pendidikan Agama Islam Anak Usia Dini (PAUD) ', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0004', 'F0043', 'Ekonomi Syariah', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0004', 'F0044', 'Komunikasi Penyiaran Islam', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021'),
('F0004', 'F0045', 'Hukum Keluarga Islam', 'S1', 'Ya', 'No', 'xx/xx/xxxx', '10/30/2021');

-- --------------------------------------------------------

--
-- Table structure for table `tb_04dosenumb`
--

CREATE TABLE `tb_04dosenumb` (
  `id_kodeprodi` varchar(5) DEFAULT NULL,
  `id_nidn` varchar(12) NOT NULL,
  `nama_dosen` varchar(53) DEFAULT NULL,
  `jabatan` varchar(15) DEFAULT NULL,
  `no_hp1` varchar(15) DEFAULT NULL,
  `no_hp2` varchar(15) DEFAULT NULL,
  `email` varchar(42) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_04dosenumb`
--

INSERT INTO `tb_04dosenumb` (`id_kodeprodi`, `id_nidn`, `nama_dosen`, `jabatan`, `no_hp1`, `no_hp2`, `email`) VALUES
('48201', '\'021119204', 'AYU SHALIHAT, S.Farm., M.Si., Apt', '48201.02', '085723551777', NULL, ''),
('48201', '\'02123028701', 'AHMAD HIDAYATULLAH, M.Pd', '48201.02', '089503366719', NULL, ''),
('41221', '\'0403029501', 'FAHMI ILMAN FAHRUDIN, S.TP., MoFT', '41221.02', '085946277112', NULL, ''),
('48201', '\'0407089103', 'ARDILLA KEMALA DEWI, S. Far., M.S.Far., Apt', '48201.02', '082382385917', NULL, ''),
('48201', '\'0407119402', 'ABDURAHMAN RIDHO, S. Farm, M. Farm., Apt', '48201.02', '08976343795', NULL, ''),
('73201', '\'0408039403', 'YUSRINDA SILVIANIS DIWANTI, S.Psi., M.Psi., Psikolog ', '73201.02', '85659696135', NULL, 'yusrindacliwanti@gmail.com'),
('20201', '\'0409048609', 'DWI PURLIANTORO, S.Si, M.Pd', '20201.02', '081320755465', NULL, ''),
('48201', '\'0409089502', 'MAULIDWINA BETHASARI, S.Farm., M.Farm., Apt', '48201.02', '081223842060', NULL, ''),
('63201', '\'0410127907', 'MOHAMAD HILAL NU\'MAN. SH, M.Kn', '63201.02', '087727309326', NULL, NULL),
('73201', '\'0411099003', 'OKA IVAN ROBIYANTO, S.Psi., M.Psi., Psikolog', '73201.02', '81214748491', NULL, NULL),
('73201', '\'0413069303', 'LISMA AISYATUL AZIZAH, S.Psi., M.Psi., Psikolog', '73201.02', '0857 2413 1813 ', NULL, 'lismaazizah@gmail.com'),
('63201', '\'0413076907', 'DRS. H. DIKDIK DAHLAN LUKMAN, M.HUM', '63201.02', NULL, NULL, NULL),
('48201', '\'0414097203', 'RUDIAWAN EDWIN, S.Si., M.PKim', '48201.02', '081321018911', NULL, ''),
('55201', '\'0415036701', 'AHMAD SURYAN, ST., MT.', '55201.02', '08121442691 ', NULL, ''),
('48201', '\'0425079601', 'NURUL AMBARDHANI, S.Si., M.Si.', '48201.02', '085278754428', NULL, ''),
('20201', '022125916', 'SYAFRUDIN MASRI, ST, M.Eng, Prof. Mad. Dr. Ir. ', '04164.01', '082127303259', NULL, ''),
('F0032', '0314125505', 'Dr. ACEP EDISON., SE.,MM., Ak.,CA.', 'F0032.02', '08122376510', NULL, 'acep.edi2014@gmail.com'),
('63201', '0401018011', 'ENDANG IRAWAN SUPRIYADI, S.Sos, M.AP', '63201.02', '087825485240 ', NULL, 'endangirawan.ei@gmail.com'),
('26201', '0401106902', 'VIVAYANI WAHYU DEWANTI, IR. MT', '26201.02', '0818222226', NULL, ''),
('F0031', '0402028005', 'VERAWATY, SE.Akt, M.Ak', 'F0031.02', NULL, NULL, NULL),
('F0031', '0402028303', 'RUSTANDI, SE., M.Ak.', 'F0031.02', NULL, NULL, NULL),
('41221', '0402028402', 'DR. KHAIRIAH, S.P., M.T', '41221.02', '087822059584', NULL, ''),
('90211', '0402056404', 'SAFTIYANINGSIH KEN ATIK, Dra. M.Ds', '90211.01', '081573799131', NULL, ''),
('F0032', '0402067302', 'Dr. DADUK MERDIKA MANSUR, ST., MM', 'F0032.02', '082126901801', NULL, ''),
('F0032', '0402067701', 'YENI ANDRIYANI, S.S., M.Pd', 'F0032.02', NULL, NULL, NULL),
('54207', '0402098703', 'LUTHFIA HASTIANI MUHARRAM, S.Si, M.Si', '54207.02', '082117556524', NULL, ''),
('F0032', '0403037709', 'RIFQI ALI MUBAROK, S.Ag., M.Si', 'F0032.02', NULL, NULL, NULL),
('F0032', '0404047108', 'IIS DEWI FITRIANI, SE., MM', 'F0032.02', NULL, NULL, NULL),
('F0032', '0404068002', 'HELIN GARLINIA YUDAWISASTRA, SE., M.Si.', 'F0032.02', '08112202468', NULL, 'Yudawisastra.helin@gmail.com'),
('48201', '0404068007', 'ASTI YUNIA RINDARWATI, M. Farm, Apt', '48201.02', '081222851025', NULL, ''),
('F0031', '0404086702', 'Dr. Drs. IA KURNIA, M.Pd', '04164.02', NULL, NULL, NULL),
('73201', '0405018702', 'DEVI ANISA NASRAH, S.Psi, M.Psi', '73201.02', '08119855571', '081259826558', 'devianisah1@gmail.com'),
('90211', '0405056908', 'HAYUN SHOBRI, SH, MH ', '90211.02', '0818620029', NULL, NULL),
('54201', '0405058406', 'UTAN SAHIRO RITONGA,SP, M.Sc', '54201.02', '08126593673', NULL, ''),
('48201', '0405108903', 'TITIAN DARU ASMARA TUGON, S.Farm, M.Farm', '48201.02', '082115477440 ', NULL, 'titiandaru@gmail.com'),
('63201', '0405118604', 'RIKKI MAULANA YUSUP, S.IP., M.AP', '63201.02', '081321039709', NULL, ''),
('41221', '0405118605', 'PUTRI WIDYANTI HARLINA, Ph.D.,M.Eng.,M.Si.,S.Pt.', '41221.02', '081316889866', NULL, 'pu3_widyanti@yahoo.com'),
('26201', '0405129003', 'DEDY CHANDRA H,ST, MT', '26201.02', '085860499917', NULL, ''),
('63201', '0406027604', 'SETIADIN, S.Pd, S.Sos, M.AP', '63201.01', '082122989776', NULL, ''),
('63201', '0406029501', 'TATI, S.Pd, M.PA', '63201.02', '089648961573', NULL, ''),
('63201', '0406049203', 'FATMAWATI, S. IP, M. AP', '63201.02', '085255063516', NULL, 'imakkacici64@gmail.com'),
('F0031', '0406087003', 'TOTO SUGIHYANTO, SE., M.Ak', 'F0031.02', NULL, NULL, NULL),
('54207', '0406098002', 'WULAN PERTIWI, S.Si, M.Si', '54207.02', '08981980609', NULL, ''),
('70201', '0407018302', 'YUTI YUNIARTI, S.Pd, M.Pd', '70201.02', '081213324442 ', NULL, 'tiedre815@gmail.com'),
('70201', '0407018804', 'AGUNG TIRTA WIBAWA, S.Sos, M. Ag', '70201.02', '08987964760', NULL, 'twbangeut@gmail.com '),
('70201', '0407027206', 'ARIEF PERMADI, M.Sos', '70201.02', NULL, NULL, NULL),
('F0032', '0407056605', 'NENENG NURBAETI AMIN, SE., M.Si', 'F0032.02', NULL, NULL, NULL),
('41221', '0407057804', 'Dr. ACE SOMANTRI, S.HI, M.Ag', '41221.02', '08170246405', NULL, ''),
('73201', '0407108903', 'ANGGI ANGGRAENI, S.Psi, M.Psi, Psikolog', '73201.02', '086524248134', NULL, 'ghie_psy08@yahoo.com'),
('70201', '0407129202', 'DANISSA CITRA UTHAMI, M.Pd', '70201.02', '085795138532', NULL, ''),
('F0031', '0408027206', 'ABIN SUARSA, SE.,MM, CA', 'F0031.04', NULL, NULL, NULL),
('54201', '0408048901', 'WIDHI NETRANING PERTIWI, S.Pd, M.Sc', '54201.02', '085200982474', NULL, ''),
('73201', '0408068004', 'NURLAELA HAMIDAH, S.Psi., MM., M.Psi.,Psikolog', '73201.02', '081809805811', NULL, 'nurlaela.hamidah@gmail.com'),
('41221', '0408108901', 'Dr. PUSPITA NURLILASARI, S.T.', '41221.02', '081293339349', NULL, 'p.nurlilasari@gmail.com'),
('55201', '0409049101', 'DIANTI EKA APRILIA, S.Kom, MT', '55201.02', '89655985350', NULL, 'dianti91@gmail.com'),
('55201', '0409088804', 'SUTADI TRIPUTRA, S.ST., MT', '55201.01', '081345907472', NULL, ''),
('F0032', '0409106501', 'Dr. Dra. ALFIANA, MM.', 'F0032.02', '085624209799', NULL, 'alfi.ana65@gmail.com'),
('54201', '0409119104', 'ALGHIF ARUNI NUR RUKMAN, S.P, M.Si', '54201.02', '082310133311', NULL, ''),
('F0031', '0409126401', 'Dr. WASIFAH HANIM, S.E.,M.Si.', 'F0031.02', '08122095936', NULL, 'hanim9@gmail.com'),
('70201', '0410106610', 'EUIS EVI PUSPITASARI, Dra. M.Si', '70201.01', '085795918615', NULL, ''),
('73201', '0410118610', 'NOVY YULIANTY, S.Psi., M.Psi., Psikolog', '73201.02', '081802001033', NULL, 'novy.psikolog@gmail.com'),
('41221', '0411027501', 'Dr. SYAHRIL, ST, MM', '41221.02', '0811886648', NULL, ''),
('F0032', '0411047001', 'ASEP SUWARNA, SE., MM', 'F0032.02', '081221458058', NULL, 'asepswrn@gmail.com'),
('54201', '0411097004', 'INDRA IRJANI DEWIJANTI, SP. MP', '54201.02', '081323000222 ', '087718045445 ', ''),
('48201', '0411109301', 'RAHMAD RIZKI FAZLI, S.Pd, M,Si, Dr.', '48201.02', '085277243650', NULL, ''),
('F0032', '0412106201', 'Dr. SUPARJIMAN, MM.', 'F0032.02', '081214379777', NULL, 'suparjiman77@gmail.com'),
('41221', '0414087804', 'SAEPUL ADNAN, S.Si, M.Si', '41221.01', '085624491639', NULL, ''),
('F0031', '0415076704', 'Dr. SUGIARTININGSIH, SE., M.Si.', 'F0031.02', '081321197953', NULL, NULL),
('54207', '0416019102', 'NISA IHSANI, S.Si, M.Si', '54207.02', '085624100601 ', '088970905133', ''),
('48201', '0416019401', 'NANDA RAUDHATIL JANNAH, S. Si, M.Si.P', '48201.02', '85356106793', NULL, 'nandaraudhatil@gmail.com'),
('55201', '0416068505', 'AILA GEMA SAFITRI, ST, MT', '55201.02', '081379775880', NULL, ''),
('73201', '0416097104', 'Dr. IRIANTI USMAN NATANEGARA, S.Pd, MA', '73201.02', NULL, NULL, NULL),
('54201', '0416098301', 'ENI KUSUMAWATI, S.P, M.Si', '54201.02', '81280504671', NULL, 'enikusumawati1@gmail.com'),
('73201', '0416098504', 'RIYANDA UTARI, S.Psi, M.Psi, Psikolog', '73201.01', '08179292462', NULL, ''),
('F0032', '0416127203', 'WANDY ZULKARNAEN, SE., MM', 'F0032.02', NULL, NULL, NULL),
('F0032', '0417026705', 'Dr. JAJANG BURHANUDIN, MM.', 'F0032.02', '82321383692', NULL, ''),
('54201', '0417048803', 'YAYU ULFAH MARLIANI, S.P, M.Si', '54201.02', '082116869457', NULL, 'saya.yayu@gmail.com'),
('54201', '0417087608', 'AGUS SUTANDI, S.TP, M.P', '54201.02', '081280125567', NULL, 'apaysutandi@gmail.com'),
('54207', '0417108509', 'ITA FITRIYYAH, M.Si', '54207.02', '081221905758', NULL, ''),
('F0032', '0418057403', 'INDRA SASANGKA, SE., MM', 'F0032.01', NULL, NULL, NULL),
('41221', '0418079102', 'HADI YUSUF FATUROCHMAN, ST., M.Si', '41221.02', '85315271718', NULL, 'hadi_yusuf_fatur@yahoo.co.id'),
('55201', '0418119001', 'FIRAS ATQIYA, S.Si, M.Si, M.Sc', '55201.02', '82117938439', NULL, 'firas.umbandung@gmail.com'),
('90211', '0419019003', 'DION DARSA SABRIAN, S.Ds, M.Ds', '90211.02', '082216161412', NULL, ''),
('70201', '0419068705', 'ULFA YUNIATI, S.I.Kom., M.Si', '70201.02', '085282958587', NULL, ''),
('54201', '0419098407', 'TRI HANIFAWATI, S.Si, M.Sc', '54201.02', '085725933961', NULL, ''),
('70201', '0421098206', 'RIDWAN SETIAWAN DARADJAT, S.Sos., M.I.Kom', '70201.02', '085220416886', NULL, ''),
('41221', '0421109003', 'SAKINA YETI KIPTIYAH, S.TP, M.Sc', '41221.02', '08561799683', NULL, ''),
('55201', '0423029001', 'RINANDA FEBRIANI, S.ST, MT', '55201.02', '08566344565', NULL, ''),
('20201', '0423038306', 'FAJRIN NURUL HAQ, Lc, M.Hum', '20201.02', '082214266897', NULL, ''),
('70201', '0423078902', 'ENDRIAN KURNIADI, S. Kom., M.I.Kom', '70201.02', '81226971717', NULL, 'endriankurniadi@gmauil.com'),
('73201', '0423089003', 'RIKA DWI AGUSTININGSIH, M.Psi., Psikolog', '73201.02', NULL, NULL, NULL),
('73201', '0424028902', 'FIRDAUS DWI SUWANDI, S.Psi, M.Psi, Psikolog', '73201.02', '081224690024', NULL, 'firdausdwisuwandi10@gmail.com'),
('63201', '0424038005', 'AHMAD ZAINI MIFTAH, S.IP, M.AP', '63201.02', '08112031924', NULL, ''),
('20201', '0424088502', 'PUJO LAKSONO, ST, MT', '20201.01', '087722264357', NULL, 'kakaganteng@gmail.com'),
('F0031', '0424098506', 'ERFAN ERFIANSYAH, SE., M.Ak', 'F0031.01', NULL, NULL, NULL),
('26201', '0424108206', 'ACHMAD MIFTAH FARIDL, ST., MT', '26201.02', '08156196634', NULL, ''),
('54207', '0424128503', 'QORI ATUR RODIAH SUHADA, M.Si', '54207.02', '089673499726', NULL, ''),
('F0032', '0425027107', 'YAYAN SOFYAN, SE., MM', 'F0032.02', '083820323906', NULL, 'yayansoftyan1971@yahoo.co.id'),
('20201', '0425028705', 'MULKI REZKA BUDI PRATAMA, ST., MT', '20201.02', '08562107181', NULL, ''),
('26201', '0425097501', 'Dr. EVAN NUGRAHA, ST. MT', '26201.02', '08112252080 ', '085221768855', NULL),
('54207', '0425109002', 'HARYANTO, S.Si, M.Si', '54207.02', '85291408915', NULL, 'haryantoharyanto2@gmail.com'),
('F0031', '0426018504', 'INUGRAH RATIA PRATIWI, S.E., M.Ak., Ak., CA.', 'F0031.02', '08112233857', NULL, 'inugrahr@gmail.com'),
('48201', '0426019002', 'FAUZIA NINGRUM SYAPUTRI, S. Farm, M.Farm, Apt', '48201.02', '085343853539', NULL, ''),
('20201', '0426048504', 'JAYA KUNCARA ROSASUSILA, ST, MT. ', '20201.02', '085226209164', NULL, ''),
('55201', '0426108805', 'RIRIN SUHARSIH, S.Pd, MT', '55201.02', '085294611911 ', '089605602494', ''),
('48201', '0426128502', 'Dr. DWINTHA LESTARI, S.Farm., M.Si., Apt.', '48201.02', '08112358585', '2287707851', 'dwintha85@gmail.com'),
('41221', '0427019101', 'RATNA SARI LISTYANINGRUM, S.T.P, M.Si', '41221.02', '085729905386', NULL, ''),
('54207', '0427049103', 'MUHAMMAD FAUZI, S.P., M.P', '54207.02', '81224447489', NULL, 'muhammadfauzi2791@gmail.com'),
('41221', '0427058603', 'MAE AMELIANAWATI, S.TP, M.Si', '41221.02', '081394238783', NULL, ''),
('70201', '0427075501', 'Dr. AZIZ TAUFIK HIRZI, S.I.P., M.Si.', '70201.02', '08122141155', NULL, 'taufikhirzi@gmail.com'),
('48201', '0427089202', 'RIZKY DWI LARASATI, S.Farm., M.S. Farm., Apt', '48201.02', '081235368477', NULL, ''),
('F0044', '0427097804', 'RONI TABRONI, S.Sos, M.Si', 'F0044.02', '085222742489', NULL, ''),
('90211', '0428036805', 'Dr. H. KOMARUDIN KUDIYA, S.IP, M.Ds', '90211.02', '0811237590', NULL, ''),
('54201', '0428049203', 'REZA FIKRI ALFATAH, SP, M.Sc', '54201.02', '085132652134', NULL, ''),
('F0032', '0428056501', 'BUDI SADARMAN, SE., MM', 'F0032.02', NULL, NULL, NULL),
('63201', '0428127605', 'METI MEDIYASTUTI SOfYAN, S.Sos, M.AP', '63201.02', '085722209797', NULL, ''),
('73201', '0428127901', 'ROVI HUSNAINI, S.Th.I, M.Ag.', '73201.02', '081320705688', NULL, ''),
('48201', '0429079201 ', 'ANIS PUJI RAHAYU, S.Farm., M.Si, Apt', '48201.01', '085220557562', NULL, ''),
('F0031', '0429097304', 'AGUS BAGIANTO, SE., MM., M.Ak', 'F0031.02', NULL, NULL, NULL),
('20201', '0429098702', 'MUHAMMAD AFIT, ST, MT', '20201.02', '085624106929', NULL, ''),
('48201', '0429119501', 'ZULKAIDA, S.Farm., M.S.Farm.,Apt', '48201.02', '082291801595', NULL, ''),
('F0031', '0430068505', 'YUNIATI, SE., M.Ak', 'F0031.02', NULL, NULL, NULL),
('54207', '0430088702', 'NELIS HERNAHADINI, S.Si, M.Si', '54207.02', '081323019217', NULL, 'hamasah. nerisu@emai l. com '),
('73201', '0430118404', 'Dr. LILI SURYANI BATUBARA, M.Hum', '73201.02', '081361461561', NULL, ''),
('F0032', '0431077706', 'ASEP RUDIYANA, SH., MH', 'F0032.02', NULL, NULL, NULL),
('54207', '0431078403', 'NOVIANI ARIFINA ISTIQOMAH, S.Si, M.Si', '54207.01', '081218065940', NULL, ''),
('70201', '08897623419', 'Dr. Hj. NENNY KENCANAWATI, M.Si.', '70201.02', '08112195707', '0811214564', 'nennymk@gmail.com'),
('54201', '1012068602', 'SAWALNI, S.Pd, MM', '54201.02', '081266661272', NULL, ''),
('54201', '1025116903', 'Dr. IVONNE AYESHA, S.P., M.P. ', '54201.02', '081374536383 ', NULL, 'drivonneayesha@gmail.com'),
('20201', '1122077801', 'ADI YASRI, ST, MT', '20201.02', '81350759130', '082116778093', 'adiyasrii@gmail.com'),
('F0041', '2018127401', 'Dr. HENDAR RIYADI, M.Ag', 'Dekan FAI', NULL, NULL, NULL),
('20201', '20201.0201S', 'Dr. IHSAN IMADUDDIN, S.Si, M.Si', '20201.02', '085318883318', NULL, ''),
('F0042', '2101018811', 'YENNY YUANITA, M.Sn', 'F0042.02', NULL, NULL, NULL),
('F0042', '2102118202', 'ESTY FATINISA, S.Psi.,M.Pd', 'F0042.01', NULL, NULL, NULL),
('F0043', '2103069202', 'YUDISTIA TEGUH A. FIKRI, S.E.Sy.,M.E', 'F0043.01', NULL, NULL, NULL),
('F0044', '2104069102', 'FEMI FAUZIAH ALAMSYAH, M.Hum', 'F0044.02', NULL, NULL, NULL),
('F0042', '2105109101', 'RIZKA SAPUTRI, S.Pd.I.,M.Pd', 'F0042.02', NULL, NULL, NULL),
('F0042', '2106048202', 'ANWAR RIFAI, M.Ag', 'F0042.02', NULL, NULL, NULL),
('F0042', '2106048902', 'YULIA NUR ANISA, S.Psi.,M.Pd', 'F0042.02', NULL, NULL, NULL),
('F0041', '2107078204', 'SUPALA, M.Ag', 'F0041.02', NULL, NULL, NULL),
('F0042', '2107119004', 'ISYA SITI AISYATUL MBZ, M.Pd', 'F0042.02', NULL, NULL, NULL),
('F0042', '2108097301', 'DITA HANDAYANI, M.Ag', 'F0042.02', NULL, NULL, NULL),
('F0042', '2109077302', 'DIAN KUSUMAWATI, M.Pd', 'F0042.02', NULL, NULL, NULL),
('F0045', '2109089302', 'AZHAR MUHAMMAD AKBAR, S.Sy,MH', 'F0045.02', NULL, NULL, NULL),
('F0042', '2111099201', 'TAUFIK MAULANA, S.Pd.I.,M.Pd', 'F0042.02', NULL, NULL, NULL),
('F0045', '2111108002', 'FAIZAL ALMAUDUDI, S.Th.I.,M.Ag', 'F0045.01', NULL, NULL, NULL),
('F0044', '2112027403', 'SAFAAT RAHMAT SELAMET, M.Hum', 'F0044.02', NULL, NULL, NULL),
('70201', '2113028601', 'AHMAD RIFAI, S.Sos.I, M.Ag', '70201.02', '081572707676', NULL, ''),
('F0041', '2114017101', 'SITTI CHADIDJAH, M.Ag', 'F0041.01', NULL, NULL, NULL),
('F0041', '2114037301', 'HJ. MUKHLISHOH, M.Ag', 'F0041.02', NULL, NULL, NULL),
('F0044', '2114037301X', 'H. RAHMAT ALAMSYAH, M.Ag', 'F0044.02', NULL, NULL, NULL),
('F0043', '2114037603', 'Dr. HENI MULYASARI, ST.,M.Ag', 'F0043.02', NULL, NULL, NULL),
('F0043', '2115028002', 'DADANG MULYANA, S.H.,M.E', 'F0043.02', NULL, NULL, NULL),
('F0045', '2115069001', 'SHOPA HAFITRIANI, MH', 'F0045.02', NULL, NULL, NULL),
('F0041', '2115078701', 'MIFTAHUL HUDA, S.Pd.I., M.Ag', 'F0041.02', NULL, NULL, NULL),
('F0045', '2116017602', 'YUDI DARYADI, S.Fil.I.,M.Ag', 'F0045.02', NULL, NULL, NULL),
('F0043', '2116067501', 'YUDI HARIYADI, S.E.,MM', 'F0043.02', NULL, NULL, NULL),
('70201', '2117037502', 'IJANG FAISAL, M.SI', '70201.02', '087708772192', NULL, NULL),
('F0043', '2117077001', 'LINA MARLINA, S.Pd.,M.E.Sy', 'F0043.02', NULL, NULL, NULL),
('F0044', '2117107001', 'SITI MARLIDA, M.Ag', 'F0044.02', NULL, NULL, NULL),
('F0044', '2117118601', 'SYARIF SYAHIDIN, M.Sos', 'F0044.01', NULL, NULL, NULL),
('F0045', '2118098402', 'Dr. FIKFIK TAUFIK, SS.,M.Sy', 'F0045.02', NULL, NULL, NULL),
('F0043', '2123099101', 'IRAWATI, M.E.Sy', 'F0043.02', NULL, NULL, NULL),
('F0045', '2127018903', 'INDRA BUDI JAYA, S.H.,M.H', 'F0045.02', NULL, NULL, NULL),
('F0043', '2127106902', 'MOLLY MUSTIKASARI, S.Sos.,M.E', 'F0043.02', NULL, NULL, NULL),
('F0044', '2127128803', 'M. FAHMI AMRULLAH, M.Ag', 'F0044.02', NULL, NULL, NULL),
('F0041', '2128016001', 'H. MUHTADIN, M.Ag', 'Wakil Dekan FAI', NULL, NULL, NULL),
('F0041', '2129038603', 'MOCHAMAD FADLANI SALAM, S.Pd.I.,M.Pd', 'F0041.02', NULL, NULL, NULL),
('55201', '222206001', 'NANA KARYANA KURDI, SE, M.Kom', '55201.02', '081369617274', NULL, NULL),
('26201', '26201.0201S', 'BUDIAN MARYADI, ST, M.Sc', '26201.02', '85940752080', NULL, ''),
('26201', '26201.0202S', 'RANGGA WIRAWAN, S.Si., M.Si', '26201.02', '81322111546', NULL, 'rangga.090012@gmail.com'),
('48201', '48201.0201S', 'Dr. ERI AMALIA, S.Si., M.HS., Apt', '48201.02', '0816617650', NULL, ''),
('48201', '48201.0202S', 'Prof. RESMI MUSTARICHIE, Ph.D., MSc., Apt.', '48201.02', '81395949697', NULL, 'resmimustarichie@gmail.com'),
('54207', '54207.0201S', 'DRA. MAELITA R. MOEIS, PH.D', '54207.02', '082117906414', NULL, 'mrmoeis@bdg.centrin.net.id'),
('54207', '54207.0202S', 'RAHEEL SHAHZAD, Ph.D.,M.Agr., B.Sc.', '54207.02', '', NULL, 'raheelbiochem@gmail.com'),
('55201', '55201.0201S', 'FAUZIYAH ASTRID, M.Pd', '55201.02', '81322707279', NULL, 'adeastrid18@gmail.com'),
('70201', '70201.0201S', 'RESTI ERNAWATI, S.Sos, M.Ikom', '70201.02', '089677850372', NULL, ''),
('73201', '73201.0201S', 'ISMAN RAHMANI YUSRON, MA', '73201.02', '08122125163', NULL, 'rahmaniyusron@gmail.com'),
('63201', '8802180018', 'Dr. Ir. Hj. LATIFAH, MT', '63201.02', '81220815875', NULL, ''),
('41221', '8808623419', 'PROF. DR. IR. ELLYZA NURDIN, MS ', '41221.02', '08121425410 ', NULL, 'ellyza_n@yahoo.com; ellyzanurdin@gmail.com'),
('26201', '8866223419', 'Dr. Ir. ARIEF YUNAN, M.Si', '26201.02', '0811592111', NULL, ''),
('90211', '90211.0201S', 'ASEP MIFTAHUL FALAH, S. Sn., M.F.A', '90211.02', '89644710041', NULL, 'asepmiftahulfalah@gmail.com'),
('90211', '90211.0202S', 'Dr. FENDI ADIATMONO, S.Sn, M.Sn, Ph.D, ', '90211.02', '08586222400 ', NULL, 'fendiadiatmono@yahoo.com'),
('F0041', '907098', 'ANDRIYANA, M.Pd', 'F0041.02', NULL, NULL, NULL),
('90211', '9900984869', 'PROF. DR. H. NANANG RIZALI, M.S.D', '90211.02', NULL, NULL, NULL),
('F0032', '9900990294', 'IKHSAN KAMIL, SE., MM', 'F0032.02', NULL, NULL, NULL),
('26201', '9903000286', 'INTEN TEJAASIH, IR. MT', '26201.01', '08129491825', NULL, ''),
('F0032', '9904007133', 'Dr. H. HILMAN, SH., M.Hum', 'F0032.02', NULL, NULL, NULL),
('F0045', '9904200783', 'EKA ISKANDAR, SS.,M.Ag', 'F0045.02', NULL, NULL, NULL),
('F0031', '9904214005', 'HENDRIYANA, SE, M.Ak', 'F0031.02', NULL, NULL, NULL),
('F0031', 'F0031.0201S', 'Dr. KARSAM, SE, Ak. M.Ak, CA., QMSA., CPMA., CPA', 'F0031.02', '089627903989', NULL, 'Karsamse86@gmail.com'),
('F0031', 'F0031.0202S', 'Dr. TRIS SUDARTO, Ak., M.Si, CA., CPMA.', 'F0031.02', '0811881150', NULL, ''),
('F0031', 'F0031.0203S', 'H. QUR\'ANI NOOR, S.E., M.E., AK.', 'F0031.02', '081222929999', NULL, 'viviku1971@gmail.com'),
('F0031', 'F0031.0204S', 'SITI KODARIAH, S.S., M.Hum', 'F0031.02', NULL, NULL, NULL),
('F0032', 'F0032.0201S', 'Dr. ERIS SUDARISWAN, MM', 'F0032.02', '081314069999', NULL, 'erissudariswan@gmail.com'),
('F0032', 'F0032.0202S', 'Dr. Ir. SITI MARDIANA, MT., M.S.I.S.ec', 'F0032.02', '081223040002', NULL, ''),
('F0032', 'F0032.0203S', 'M. DZULFAQORI J, S.Pd, M.SEI.', 'F0032.02', NULL, NULL, NULL),
('F0041', 'F0041.0201S', 'Dr. Hj. IMAS KURNIASIH, S.Ag., M.Ag', 'F0041.02', NULL, NULL, NULL),
('F0041', 'F0041.0202S', 'Dr. HERNAWATI, S. Pd., M.Pd.', 'F0041.02', NULL, NULL, NULL),
('F0041', 'F0041.0203S', 'Dr. AHMAD ZAELANI AW, S.Ag., M.Ag ', 'F0041.02', NULL, NULL, NULL),
('F0041', 'F0041.0204S', 'IIM IBROHIM, S.Pd.I., M.Ag', 'F0041.02', NULL, NULL, NULL),
('F0041', 'F0041.0205S', 'Dr. RAHMAT FADHLI, Ed.M', 'F0041.02', NULL, NULL, NULL),
('F0041', 'F0041.0206S', 'SARAH ADILLA WANDASARI, S.Pd.I.,MA', 'F0041.02', NULL, NULL, NULL),
('F0042', 'F0042.0201S', 'LILIS LISMARINA, M.Pd', 'F0042.02', NULL, NULL, NULL),
('F0042', 'F0042.0202S', 'Dr. TATY SUTIATY, M.Pd', 'F0042.02', '085860738822', NULL, 'setiatyt@gmail.com'),
('F0043', 'F0043.0201S', 'ARIF NURRAKHMAN, , SE., M.M', 'F0043.02', NULL, NULL, NULL),
('F0044', 'F0044.0201S', 'Dr. CECEP TAUFIKURROHMAN, M.Ag', 'F0044.02', '081394765323', NULL, 'abdicecepgarut@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb-3b1`
--
ALTER TABLE `tb-3b1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb-3b2`
--
ALTER TABLE `tb-3b2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb-3b3`
--
ALTER TABLE `tb-3b3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb-3b4-1`
--
ALTER TABLE `tb-3b4-1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb-3b4-2`
--
ALTER TABLE `tb-3b4-2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb-3b5`
--
ALTER TABLE `tb-3b5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb-3b6`
--
ALTER TABLE `tb-3b6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb-3b7-1`
--
ALTER TABLE `tb-3b7-1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb-3b7-2`
--
ALTER TABLE `tb-3b7-2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb-3b73`
--
ALTER TABLE `tb-3b73`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb-3b74`
--
ALTER TABLE `tb-3b74`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb-4`
--
ALTER TABLE `tb-4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_01password`
--
ALTER TABLE `tb_01password`
  ADD PRIMARY KEY (`id_password`);

--
-- Indexes for table `tb_02fakultas`
--
ALTER TABLE `tb_02fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `tb_03prodi`
--
ALTER TABLE `tb_03prodi`
  ADD PRIMARY KEY (`id_kodeprodi`);

--
-- Indexes for table `tb_04dosenumb`
--
ALTER TABLE `tb_04dosenumb`
  ADD PRIMARY KEY (`id_nidn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb-3b1`
--
ALTER TABLE `tb-3b1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb-3b2`
--
ALTER TABLE `tb-3b2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb-3b3`
--
ALTER TABLE `tb-3b3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb-3b4-1`
--
ALTER TABLE `tb-3b4-1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb-3b4-2`
--
ALTER TABLE `tb-3b4-2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb-3b5`
--
ALTER TABLE `tb-3b5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb-3b6`
--
ALTER TABLE `tb-3b6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb-3b7-1`
--
ALTER TABLE `tb-3b7-1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb-3b7-2`
--
ALTER TABLE `tb-3b7-2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb-3b73`
--
ALTER TABLE `tb-3b73`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb-3b74`
--
ALTER TABLE `tb-3b74`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb-4`
--
ALTER TABLE `tb-4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
