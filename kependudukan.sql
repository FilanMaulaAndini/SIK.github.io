-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 05:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kependudukan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_keluarga`
--

CREATE TABLE `daftar_keluarga` (
  `id` int(11) NOT NULL,
  `KK_Lama` varchar(15) NOT NULL,
  `nama` varchar(16) DEFAULT NULL,
  `jk` varchar(16) DEFAULT NULL,
  `tempat_lahir` varchar(16) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `pendidikan` varchar(20) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `status_kawin` varchar(15) DEFAULT NULL,
  `shdk` varchar(10) DEFAULT NULL,
  `paspor` varchar(16) DEFAULT NULL,
  `kitas` varchar(16) DEFAULT NULL,
  `ayah` varchar(16) DEFAULT NULL,
  `ibu` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_keluarga`
--

INSERT INTO `daftar_keluarga` (`id`, `KK_Lama`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pendidikan`, `pekerjaan`, `status_kawin`, `shdk`, `paspor`, `kitas`, `ayah`, `ibu`) VALUES
(20, '350721170308007', 'haah', 'Perempuan', 'hska', '1999-11-11', 'Katholik', 'SD/Sederajat', 'Bidan', 'Belum Menikah', 'Lainnya', '111', '111', 'hjk', 'hkj'),
(21, '350721170308007', 'popp', 'Perempuan', '7968', '1999-06-09', 'Kristen', 'Belum Tamat SD/Seder', 'Apoteker', 'Menikah', 'Kepala Kel', '631286', '87', 'hoho', 'ho');

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `No_KK` varchar(16) NOT NULL,
  `Nama_Lengkap` varchar(30) DEFAULT NULL,
  `NIK` varchar(16) NOT NULL,
  `Jenis_Kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `Tempat_Lahir` varchar(30) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Agama` enum('Islam','Kristen','Katholik','Hindu','Budha') DEFAULT NULL,
  `No_Telp` varchar(16) NOT NULL,
  `No_RT` int(11) NOT NULL,
  `No_RW` int(11) NOT NULL,
  `Dusun` varchar(15) NOT NULL,
  `Kode_pos` int(11) NOT NULL,
  `Pendidikan` enum('Belum Tamat SD/Sederajat','Tidak Tamat SD/Sederajat','SD/Sederajat','SMP/Sederajat','SMA/Sederajat','D1','D2','D3','S1','S2') NOT NULL,
  `Pekerjaan` enum('Apoteker','Bidan','Buruh Tani/Perkebunan/Peternakan','Dosen/Guru','Industri','Karyawan BUMd/BUMN/Honorer/Swasta','Polisi/TNI','Konstruksi/Mekanik','RT','Pedagang','ASN','Pelajar','Wiraswasta','Belum/Tidak Bekerja','Lainnya') NOT NULL,
  `Gol_darah` enum('A','B','O','AB') NOT NULL,
  `Status_kawin` varchar(15) NOT NULL,
  `Tanggal_kawin` date NOT NULL,
  `SHDK` enum('Kepala Keluarga','Istri','Anak','Menantu','Mertua','Orang Tua','Suami','Cucu','Famili Lain','Lainnya') NOT NULL,
  `Status_keberadaan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`No_KK`, `Nama_Lengkap`, `NIK`, `Jenis_Kelamin`, `Tempat_Lahir`, `Tanggal_Lahir`, `Agama`, `No_Telp`, `No_RT`, `No_RW`, `Dusun`, `Kode_pos`, `Pendidikan`, `Pekerjaan`, `Gol_darah`, `Status_kawin`, `Tanggal_kawin`, `SHDK`, `Status_keberadaan`) VALUES
('3507211703080077', 'Sanap', '3507210101320014', 'Laki-laki', 'Malang', '1932-01-01', 'Islam', '', 3, 1, 'Gondowangi', 65158, 'SD/Sederajat', 'Buruh Tani/Perkebunan/Peternakan', 'A', '', '0000-00-00', 'Kepala Keluarga', 'Ada'),
('3507211703080077', 'Warnoto', '3507210407680004', 'Laki-laki', 'Malang', '1968-07-04', 'Islam', '-', 3, 1, 'Gondowangi', 65158, 'S1', 'Buruh Tani/Perkebunan/Peternakan', 'A', 'Belum Menikah', '0000-00-00', 'Anak', 'Ada'),
('3507211703080080', 'Tjahyo Santoso', '3507211208680008', 'Laki-laki', 'Malang', '1968-08-12', 'Islam', '-', 3, 1, 'Gondowangi', 65158, 'SMP/Sederajat', 'Konstruksi/Mekanik', 'A', 'Sudah Menikah', '0000-00-00', 'Kepala Keluarga', 'Ada'),
('3507211703080080', 'Aditya Dwi Prasetyo', '3507211301040002', 'Laki-laki', 'Malang', '2004-01-13', 'Islam', '-', 3, 1, 'Gondowangi', 65158, 'Belum Tamat SD/Sederajat', 'Pelajar', 'A', 'Belum Menikah', '0000-00-00', 'Anak', 'Ada'),
('3507211703080087', 'Wajib', '3507212104420004', 'Laki-laki', 'Malang', '1942-04-21', 'Islam', '-', 3, 1, 'Gonodowangi', 65158, 'SD/Sederajat', 'Buruh Tani/Perkebunan/Peternakan', 'A', 'Sudah Menikah', '0000-00-00', 'Kepala Keluarga', 'Ada'),
('3507211703080081', 'Rudjianto', '3507212301800004', 'Laki-laki', 'Malang', '1980-01-23', 'Islam', '-', 3, 1, 'Gondowangi', 65158, 'SMA/Sederajat', 'Lainnya', 'A', 'Sudah Menikah', '0000-00-00', 'Kepala Keluarga', 'Ada'),
('3507211703080077', 'Paiyah', '3507214101380033', 'Perempuan', 'Malang', '1938-01-01', 'Islam', '-', 3, 1, 'Gondowangi', 65158, 'SD/Sederajat', 'Buruh Tani/Perkebunan/Peternakan', 'A', 'Sudah Menikah', '0000-00-00', 'Istri', 'Ada'),
('3507211703080080', 'Tirum', '3507214711710002', 'Perempuan', 'Malang', '1971-11-07', 'Islam', '-', 3, 1, 'Gondowangi', 65158, 'SD/Sederajat', 'Lainnya', 'A', 'Sudah Menikah', '0000-00-00', 'Istri', 'Ada'),
('3507210708180002', 'Djuarah', '3507215501450002', 'Perempuan', 'Malang', '1945-01-15', 'Islam', '-', 3, 1, 'Gondowangi', 65158, 'SD/Sederajat', 'RT', 'A', 'Pernah Menikah', '0000-00-00', 'Kepala Keluarga', 'Ada'),
('3507211703080081', 'Juwita Kristiani', '3507215911770003', 'Perempuan', 'Malang', '1977-11-19', 'Islam', '-', 3, 1, 'Gonodowangi', 65158, 'SMA/Sederajat', 'Lainnya', 'A', 'Sudah Menikah', '0000-00-00', 'Istri', 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_desa`
--

CREATE TABLE `informasi_desa` (
  `id_info` int(11) NOT NULL,
  `Judul` varchar(30) NOT NULL,
  `Isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_desa`
--

INSERT INTO `informasi_desa` (`id_info`, `Judul`, `Isi`) VALUES
(7, 'uihfuank', 'jcz dsakjfn fsakl\r\n\r\nUse data attributes to easily control the position of the carousel. data-slide accepts the keywords prev or next, which alters the slide position relative to its current position. Alternatively, use data-slide-to to pass a raw slide index to the carousel data-slide-to=\"2\", which shifts the slide position to a particular index beginning with 0.\r\n\r\nThe data-ride=\"carousel\" attribute is used to mark a carousel as animating starting at page load. If you don’t use data-ride=\"carousel\" to initialize your carousel, you have to initialize it yourself. It cannot be used in combination with (redundant and unnecessary) explicit JavaScript initialization of the same carousel.\r\n\r\ngdsajgsgsfjd'),
(8, 'desa gondowangi', 'hsdjk');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_miskin`
--

CREATE TABLE `kategori_miskin` (
  `NIK` varchar(16) NOT NULL,
  `Fasilitas_buang_air` enum('Milik Sendiri','Tidak memiliki','Bersama sama RT lain','Lain-lain') DEFAULT NULL,
  `Luas_lantai` enum('Kurang dari 8 meter persegi','Sama dengan 8 meter persegi','Lebih dari 8 meter persegi') DEFAULT NULL,
  `Jenis_lantai` enum('Tanah','Bambu','Kayu Murahan','Ubin Keramik','Lain-lain') DEFAULT NULL,
  `Sumber_air_minum` enum('Sumur/Mata Air tidak terlindung','Sungai','Air Hujan','PDAM','Lain-lain') DEFAULT NULL,
  `Jenis_dinding` enum('Bambu','Rumbia','Kayu Berkualitas Rendah','Tembok Tanpa Diplester','Lain-lain') DEFAULT NULL,
  `Sumber_penerangan` enum('Dengan Listrik','Tanpa Listrik') DEFAULT NULL,
  `BB_memasak` enum('Kayu Bakar','Arang','Minyak Tanah','Gas/Elpiji','Lain-lain') DEFAULT NULL,
  `Konsumsi_daging` enum('Ya','Tidak') DEFAULT NULL,
  `Satu_pakaian_pertahun` enum('Ya','Tidak') DEFAULT NULL,
  `Satudua_kali_makan` enum('Ya','Tidak') DEFAULT NULL,
  `Bayar_pengobatan` enum('Ya','Tidak') DEFAULT NULL,
  `Sumber_penghasilan_Kepala_RT` enum('Petani dengan Luas Lahan 500 m2','Buruh Tani/Nelayan','Buruh Bangunan/Perkebunan','Pendapatan dibawah Rp. 600.000,- per Bulan','Lain-lain') DEFAULT NULL,
  `Pendidikan_tertinggi_Kepala_RT` enum('S1','D3','D2','D1','SLTA/Sederajat','SLTP/Sederajat','SD/Sederajat','Tidak Tamat SD/Sederajat','Tidak Sekolah','Lainnya') DEFAULT NULL,
  `TabunganBarang_Jual` enum('Ya','Tidak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_miskin`
--

INSERT INTO `kategori_miskin` (`NIK`, `Fasilitas_buang_air`, `Luas_lantai`, `Jenis_lantai`, `Sumber_air_minum`, `Jenis_dinding`, `Sumber_penerangan`, `BB_memasak`, `Konsumsi_daging`, `Satu_pakaian_pertahun`, `Satudua_kali_makan`, `Bayar_pengobatan`, `Sumber_penghasilan_Kepala_RT`, `Pendidikan_tertinggi_Kepala_RT`, `TabunganBarang_Jual`) VALUES
('3507210101320014', 'Bersama sama RT lain', 'Kurang dari 8 meter persegi', 'Tanah', 'Sungai', 'Bambu', 'Tanpa Listrik', 'Kayu Bakar', 'Ya', 'Ya', 'Ya', 'Ya', 'Petani dengan Luas Lahan 500 m2', 'Tidak Sekolah', 'Ya'),
('3507210407680004', 'Milik Sendiri', 'Kurang dari 8 meter persegi', 'Ubin Keramik', 'Sumur/Mata Air tidak terlindung', 'Bambu', 'Tanpa Listrik', 'Kayu Bakar', 'Ya', 'Ya', 'Ya', 'Ya', 'Petani dengan Luas Lahan 500 m2', 'Tidak Sekolah', 'Ya'),
('3507211208680008', 'Milik Sendiri', 'Sama dengan 8 meter persegi', 'Ubin Keramik', 'PDAM', 'Lain-lain', 'Tanpa Listrik', 'Gas/Elpiji', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Lain-lain', 'D1', 'Tidak'),
('3507211301040002', 'Tidak memiliki', 'Kurang dari 8 meter persegi', 'Tanah', 'Sungai', 'Rumbia', 'Tanpa Listrik', 'Arang', 'Ya', 'Ya', 'Ya', 'Ya', 'Buruh Bangunan/Perkebunan', 'Tidak Tamat SD/Sederajat', 'Ya'),
('3507212104420004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3507212301800004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3507214101380033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3507214711710002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3507215501450002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3507215911770003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `NIK_pemohon` varchar(16) DEFAULT NULL,
  `No_surat` int(11) NOT NULL,
  `jenis_surat` varchar(40) DEFAULT NULL,
  `tanggal_pengajuan` datetime DEFAULT current_timestamp(),
  `tanggal_terima` datetime DEFAULT current_timestamp(),
  `Nama_lahir` varchar(16) DEFAULT NULL,
  `Jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `Jam_lahir` time DEFAULT NULL,
  `Hari_lahir` enum('Senin','Selasa','Rabu','Kamis','Jum''at','Sabtu','Minggu') NOT NULL,
  `Tanggal_lahir` date DEFAULT NULL,
  `Tempat_lahir` varchar(16) DEFAULT NULL,
  `Nama_ayah` varchar(16) DEFAULT NULL,
  `Nama_ibu` varchar(16) DEFAULT NULL,
  `Anak_ke` int(11) DEFAULT NULL,
  `Tanggal_kematian` date DEFAULT NULL,
  `Hari_mati` enum('Senin','Selasa','Rabu','Kamis','Jum''at','Sabtu') DEFAULT NULL,
  `Sebab_kematian` varchar(50) DEFAULT NULL,
  `Lokasi_kematian` varchar(50) DEFAULT NULL,
  `Tanggal_menikah` date DEFAULT NULL,
  `Wali_dari` varchar(16) DEFAULT NULL,
  `Keperluan` varchar(16) DEFAULT NULL,
  `Status_perceraian` varchar(30) DEFAULT NULL,
  `NIK_suami` varchar(16) DEFAULT NULL,
  `NIK_istri` varchar(16) DEFAULT NULL,
  `KK_Lama` varchar(15) DEFAULT NULL,
  `NIK_KK_Lama` varchar(16) DEFAULT NULL,
  `KK_ditempati` varchar(15) DEFAULT NULL,
  `NIK_KK_ditempati` varchar(16) DEFAULT NULL,
  `Alasan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`NIK_pemohon`, `No_surat`, `jenis_surat`, `tanggal_pengajuan`, `tanggal_terima`, `Nama_lahir`, `Jenis_kelamin`, `Jam_lahir`, `Hari_lahir`, `Tanggal_lahir`, `Tempat_lahir`, `Nama_ayah`, `Nama_ibu`, `Anak_ke`, `Tanggal_kematian`, `Hari_mati`, `Sebab_kematian`, `Lokasi_kematian`, `Tanggal_menikah`, `Wali_dari`, `Keperluan`, `Status_perceraian`, `NIK_suami`, `NIK_istri`, `KK_Lama`, `NIK_KK_Lama`, `KK_ditempati`, `NIK_KK_ditempati`, `Alasan`) VALUES
(NULL, 82, 'Surat Keterangan Menikah', '2020-08-08 11:18:19', '2020-08-08 11:18:19', NULL, NULL, NULL, 'Senin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2000-11-11', NULL, NULL, NULL, '3507210407680004', '3507215911770003', NULL, NULL, NULL, NULL, NULL),
(NULL, 83, 'Surat Keterangan Menikah', '2020-08-08 11:40:46', '2020-08-08 11:40:46', NULL, NULL, NULL, 'Senin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2000-11-11', NULL, NULL, NULL, '3507210101320014', '3507214101380033', NULL, NULL, NULL, NULL, NULL),
(NULL, 89, 'Surat Permohonan KK Baru', '2020-08-08 11:52:49', '2020-08-08 11:52:49', NULL, NULL, NULL, 'Senin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '350721170308007', '3507210101320014', NULL, NULL, '56'),
(NULL, 91, 'Surat Permohonan KK Baru', '2020-08-08 14:34:05', '2020-08-08 14:34:05', NULL, NULL, NULL, 'Senin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '350721170308007', '3507210101320014', NULL, NULL, 'pindah'),
('3507210101320014', 92, 'Surat Keterangan Lahir', '2020-08-08 14:37:06', '2020-08-08 14:37:06', 'ginting', 'Laki-laki', '11:11:00', 'Senin', '2020-11-11', 'malang', 'jojo', 'jiji', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3507211208680008', 93, 'Surat Pengantar SKCK', '2020-08-08 14:43:03', '2020-08-08 14:43:03', NULL, NULL, NULL, 'Senin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3507211208680008', 94, 'Surat Keterangan Wali', '2020-08-08 14:43:43', '2020-08-08 14:43:43', NULL, NULL, NULL, 'Senin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kak', 'ksjal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_keluarga`
--
ALTER TABLE `daftar_keluarga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftar_keluarga_ibfk_1` (`KK_Lama`);

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `informasi_desa`
--
ALTER TABLE `informasi_desa`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `kategori_miskin`
--
ALTER TABLE `kategori_miskin`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`No_surat`),
  ADD KEY `surat_ibfk_1` (`NIK_pemohon`),
  ADD KEY `NIK_istri` (`NIK_istri`),
  ADD KEY `NIK_suami` (`NIK_suami`),
  ADD KEY `KK_Lama` (`KK_Lama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_keluarga`
--
ALTER TABLE `daftar_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `informasi_desa`
--
ALTER TABLE `informasi_desa`
  MODIFY `id_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `No_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftar_keluarga`
--
ALTER TABLE `daftar_keluarga`
  ADD CONSTRAINT `daftar_keluarga_ibfk_1` FOREIGN KEY (`KK_Lama`) REFERENCES `surat` (`KK_Lama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kategori_miskin`
--
ALTER TABLE `kategori_miskin`
  ADD CONSTRAINT `kategori_miskin_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `data_penduduk` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
  ADD CONSTRAINT `surat_ibfk_1` FOREIGN KEY (`NIK_pemohon`) REFERENCES `data_penduduk` (`NIK`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `surat_ibfk_2` FOREIGN KEY (`NIK_istri`) REFERENCES `data_penduduk` (`NIK`),
  ADD CONSTRAINT `surat_ibfk_3` FOREIGN KEY (`NIK_suami`) REFERENCES `data_penduduk` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
