-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2023 at 04:20 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kecamatanlahat`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL,
  `judul` text NOT NULL,
  `kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idpesan` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `nohp` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idpesan`, `nama`, `email`, `nohp`, `pesan`) VALUES
(3, 'Yanto', 'yanto@gmail.com', '08491284921', 'Keren'),
(0, 'Udin', 'udin@gmail.com', '0841924921412', 'Tukang parkirnya kalo bisa gak ada lagi');

-- --------------------------------------------------------

--
-- Table structure for table `suratbedanama`
--

CREATE TABLE `suratbedanama` (
  `idsuratbedanama` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `tempatlahir` varchar(64) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` text DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `pekerjaan` text NOT NULL,
  `nosuratlain` text NOT NULL,
  `namasuratlain` text NOT NULL,
  `namalain` text NOT NULL,
  `alamatlain` text NOT NULL,
  `status` text NOT NULL,
  `keterangan` text DEFAULT NULL,
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `keterangansurat` text NOT NULL,
  `scankk` text NOT NULL,
  `scansuratlain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratbedanama`
--

INSERT INTO `suratbedanama` (`idsuratbedanama`, `iduser`, `nik`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `alamat`, `pekerjaan`, `nosuratlain`, `namasuratlain`, `namalain`, `alamatlain`, `status`, `keterangan`, `dibuat`, `keterangansurat`, `scankk`, `scansuratlain`) VALUES
(1, 21, '01825908190512', 'Fian', 'Palembang', '2000-07-07', 'Laki-Laki', 'Islam', 'Jl. Palembang', 'Programmer', '1231313', 'KTP', 'Fian', 'Jl. Palembang', 'Di Setujui', 'Silahkan datang ke kantor desa untuk mengambil surat', '2023-07-04 17:05:40', 'Melamar Kerja', 'Akta Kelahiran.pdf', 'ijazah sma.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `suratbelummenikah`
--

CREATE TABLE `suratbelummenikah` (
  `idsuratbelummenikah` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `tempatlahir` varchar(64) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` text DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `pekerjaan` text NOT NULL,
  `statusperkawinan` text NOT NULL,
  `keterangansurat` text NOT NULL,
  `status` text NOT NULL,
  `keterangan` text DEFAULT NULL,
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `kewarganegaraan` text NOT NULL,
  `scankk` text NOT NULL,
  `scanktp` text NOT NULL,
  `tanggalberlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratbelummenikah`
--

INSERT INTO `suratbelummenikah` (`idsuratbelummenikah`, `iduser`, `nik`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `alamat`, `pekerjaan`, `statusperkawinan`, `keterangansurat`, `status`, `keterangan`, `dibuat`, `kewarganegaraan`, `scankk`, `scanktp`, `tanggalberlaku`) VALUES
(1, 21, '01825908190512', 'Fian', 'Palembang', '2000-07-07', 'Laki-Laki', 'Islam', 'Jl. Palembang', 'Programmer', 'Menikah', 'Membuat surat akte nikah', 'Di Setujui', 'Silahkan datang ke kantor desa untuk mengambil surat', '2023-05-23 17:02:17', 'Indonesia', 'kk.jpg', 'ktp.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `suratdomisili`
--

CREATE TABLE `suratdomisili` (
  `idsuratdomisili` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `tempatlahir` varchar(64) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` text DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `pekerjaan` text NOT NULL,
  `statusperkawinan` text NOT NULL,
  `keterangansurat` text NOT NULL,
  `status` text NOT NULL,
  `keterangan` text DEFAULT NULL,
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `kewarganegaraan` text NOT NULL,
  `scankk` text NOT NULL,
  `scanktp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratdomisili`
--

INSERT INTO `suratdomisili` (`idsuratdomisili`, `iduser`, `nik`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `alamat`, `pekerjaan`, `statusperkawinan`, `keterangansurat`, `status`, `keterangan`, `dibuat`, `kewarganegaraan`, `scankk`, `scanktp`) VALUES
(1, 16, '07648127412', 'Sugeng Uchiha', 'Palembang', '2000-07-07', 'Laki-Laki', 'Islam', 'Jl. Palembang', 'Programmer', 'Belum Menikah', 'untuk daftar pekerjaan', 'Di Setujui', 'Silahkan datang ke kantor desa untuk mengambil surat', '2023-06-25 12:41:11', '', '3 Surat Pernyataan.pdf', 'Surat Keterangan Bebas Narkoba.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `suratktp`
--

CREATE TABLE `suratktp` (
  `idsuratktp` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `tempatlahir` varchar(64) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` text DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `pekerjaan` text NOT NULL,
  `statusperkawinan` text NOT NULL,
  `keterangansurat` text NOT NULL,
  `status` text NOT NULL,
  `keterangan` text DEFAULT NULL,
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `kewarganegaraan` text NOT NULL,
  `nokk` text NOT NULL,
  `scankk` text NOT NULL,
  `scanktp` text NOT NULL,
  `tanggalberlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratktp`
--

INSERT INTO `suratktp` (`idsuratktp`, `iduser`, `nik`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `alamat`, `pekerjaan`, `statusperkawinan`, `keterangansurat`, `status`, `keterangan`, `dibuat`, `kewarganegaraan`, `nokk`, `scankk`, `scanktp`, `tanggalberlaku`) VALUES
(1, 21, '01825908190512', 'Fian', 'Palembang', '2000-07-07', 'Laki-Laki', 'Islam', 'Jl. Palembang', 'Programmer', 'Belum Menikah', '-', 'Di Setujui', 'Silahkan datang ke kantor desa untuk mengambil surat', '2023-05-23 17:01:50', 'Indonesia', '', 'kk.jpg', 'ktp.jpg', '2023-06-23'),
(2, 16, '07648127412', 'Sugeng Uchiha', 'Palembang', '2000-07-07', 'Laki-Laki', 'Budha', 'Jl. Palembang', 'Programmer', 'Menikah', 'Mengurus KTP', 'Di Setujui', 'Silahkan datang ke kantor desa untuk mengambil surat', '2023-06-20 15:04:53', 'Chinese', '167112038120922', '5ef2e96f255bc.jpg', '', '2023-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `suratskck`
--

CREATE TABLE `suratskck` (
  `idsuratskck` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `tempatlahir` varchar(64) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` text DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `pekerjaan` text NOT NULL,
  `statusperkawinan` text NOT NULL,
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `kewarganegaraan` text NOT NULL,
  `keterangansurat` text NOT NULL,
  `scankk` text NOT NULL,
  `scanktp` text NOT NULL,
  `tanggalberlaku` date NOT NULL,
  `status` text NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratskck`
--

INSERT INTO `suratskck` (`idsuratskck`, `iduser`, `nik`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `alamat`, `pekerjaan`, `statusperkawinan`, `dibuat`, `kewarganegaraan`, `keterangansurat`, `scankk`, `scanktp`, `tanggalberlaku`, `status`, `keterangan`) VALUES
(1, 21, '01825908190512', 'Fian', 'Palembang', '2000-07-07', 'Laki-Laki', 'Islam', 'Jl. Palembang', 'Programmer', 'Belum Menikah', '2023-05-23 15:34:27', 'Indonesia', 'Untuk melamar pekerjaan', 'kk.jpg', 'ktp.jpg', '2023-06-23', 'Di Setujui', 'Silahkan datang ke kantor desa untuk mengambil surat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `tempatlahir` varchar(64) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `jeniskelamin` text DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `pekerjaan` text NOT NULL,
  `statusperkawinan` text NOT NULL,
  `level` text NOT NULL,
  `statusaktif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nik`, `nama`, `tempatlahir`, `tanggallahir`, `jeniskelamin`, `agama`, `alamat`, `pekerjaan`, `statusperkawinan`, `level`, `statusaktif`) VALUES
(2, 'admin', 'admin', '07648127411', 'Administrator', 'Palembang', '2000-01-01', 'Laki-Laki', 'Islam', 'Jl. Palembang', 'Admin', 'Menikah', 'Admin', 'Aktif'),
(16, 'sugeng', 'sugeng', '07648127412', 'Sugeng Uchiha', 'Palembang', '2000-07-07', 'Laki-Laki', 'Islam', 'Jl. Palembang', 'Programmer', 'Belum Menikah', 'Penduduk', 'Aktif'),
(17, 'kepaladukcapil', 'kepaladukcapil', '07648127413', 'Dr. Agus', 'Palembang', '2000-07-07', 'Laki-Laki', 'Islam', 'Jl. Palembang', 'PNS', 'Menikah', 'Kepala Dukcapil', 'Aktif'),
(18, 'yanto', 'yanto', '123', 'Yanto', 'Palembang', '2000-01-01', 'Laki-Laki', 'Islam', 'Jl. Palembang', 'Programmer', 'Belum Menikah', 'Penduduk', 'Aktif'),
(19, '12345', '12345', '12345', 'Budi', 'Palembang', '2000-07-07', 'Laki-Laki', 'Islam', 'Jl. Palembang', 'Programmer', 'Belum Menikah', 'Penduduk', 'Aktif'),
(21, 'fian', 'fian', '01825908190512', 'Fian', 'Palembang', '2000-07-07', 'Laki-Laki', 'Islam', 'Jl. Palembang', 'Programmer', 'Belum Menikah', 'Penduduk', 'Aktif'),
(24, 'superadmin', 'superadmin', '073456743234', 'superadmin', 'palembang', '2007-07-04', 'Laki-Laki', 'Islam', 'polsri', 'superadmin', 'Belum Menikah', 'Admin', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratbedanama`
--
ALTER TABLE `suratbedanama`
  ADD PRIMARY KEY (`idsuratbedanama`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `suratbelummenikah`
--
ALTER TABLE `suratbelummenikah`
  ADD PRIMARY KEY (`idsuratbelummenikah`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `suratdomisili`
--
ALTER TABLE `suratdomisili`
  ADD PRIMARY KEY (`idsuratdomisili`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `suratktp`
--
ALTER TABLE `suratktp`
  ADD PRIMARY KEY (`idsuratktp`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `iduser_2` (`iduser`);

--
-- Indexes for table `suratskck`
--
ALTER TABLE `suratskck`
  ADD PRIMARY KEY (`idsuratskck`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suratbedanama`
--
ALTER TABLE `suratbedanama`
  MODIFY `idsuratbedanama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suratbelummenikah`
--
ALTER TABLE `suratbelummenikah`
  MODIFY `idsuratbelummenikah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suratdomisili`
--
ALTER TABLE `suratdomisili`
  MODIFY `idsuratdomisili` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suratktp`
--
ALTER TABLE `suratktp`
  MODIFY `idsuratktp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suratskck`
--
ALTER TABLE `suratskck`
  MODIFY `idsuratskck` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `suratbedanama`
--
ALTER TABLE `suratbedanama`
  ADD CONSTRAINT `suratbedanama_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suratbelummenikah`
--
ALTER TABLE `suratbelummenikah`
  ADD CONSTRAINT `suratbelummenikah_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suratdomisili`
--
ALTER TABLE `suratdomisili`
  ADD CONSTRAINT `suratdomisili_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suratktp`
--
ALTER TABLE `suratktp`
  ADD CONSTRAINT `suratktp_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suratskck`
--
ALTER TABLE `suratskck`
  ADD CONSTRAINT `suratskck_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
