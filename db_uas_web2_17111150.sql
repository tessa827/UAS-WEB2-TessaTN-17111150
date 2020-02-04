-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Feb 2020 pada 13.23
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas_web2_17111150`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `npm` int(8) NOT NULL,
  `nama_mahasiswa` varchar(48) NOT NULL,
  `kelas` varchar(18) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `agama` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(24) NOT NULL,
  `tgl_lahir` varchar(24) NOT NULL,
  `hobi` text NOT NULL,
  `pendidikan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `npm`, `nama_mahasiswa`, `kelas`, `jenis_kelamin`, `agama`, `alamat`, `tempat_lahir`, `tgl_lahir`, `hobi`, `pendidikan`) VALUES
(1, 17111150, 'Tessa Tiara Ningtias', 'TIF RP 17 CID C', 'P', 'Islam', 'Bandung', 'Bandung', '1999-08-27', 'Renang; Bermain gitar; Bernyanyi; Menggambar;', 'SD Negeri 111 Pindad; SMP Kartika X-1; SMK Kencana Bandung'),
(3, 17111332, 'Kristian Ronaldo', 'TIF RP 17 CID C', 'L', 'Islam', 'Jln. Kiaracondong', 'Bandung', '1998-07-16', 'Main', 'SD1;SMp1;SMK1'),
(4, 2147483647, 'Trias Nugraha', 'TIF RP 19 C', 'L', 'Islam', 'Jl. Antapani', 'Bandung', '2000-02-13', 'Nyanyi', 'SD;SMP;SMk'),
(5, 17111323, 'Anggi Putri', 'TIF RP 17 CID C', 'P', 'Islam', 'Jl. Cinta', 'Bandung', '1999-02-28', 'Lari', 'SD.SMP;MA'),
(6, 17111328, 'Hesty Sugesty', 'TIF RP 17 CID C', 'P', 'Islam', 'Jl.Katapang', 'Bandung', '2000-02-12', 'Organisasi', 'SD;SMP;MA'),
(7, 17111329, 'Ihsan Nur', 'TIF RP 17 CID C', 'L', 'Islam', 'Jl. Ciparay', 'Bandung', '1998-02-14', 'Gombal', 'SD;SMP;MA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(16) NOT NULL,
  `password` varchar(48) NOT NULL,
  `user_type` varchar(9) NOT NULL DEFAULT 'mahasiswa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `user_type`) VALUES
('17111150', '827ccb0eea8a706c4c34a16891f84e7b', 'mahasiswa'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
