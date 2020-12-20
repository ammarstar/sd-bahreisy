-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2020 at 03:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdbahreisy`
--

-- --------------------------------------------------------

--
-- Table structure for table `multiuser`
--

CREATE TABLE `multiuser` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiuser`
--

INSERT INTO `multiuser` (`id`, `nama`, `username`, `password`, `kategori`) VALUES
(1, 'ammar', 'ammar', '12345', 'Tata Usaha');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `nama_gambar` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id`, `judul`, `isi`, `nama_gambar`, `gambar`) VALUES
(1, 'Visi Sekolah', '<p>Unggul Dalam Prestasi Berdasarkan Imtaq dan Iptek, Berakhlaqul karimah, Terampil Dan mandiri.</p>', '', ''),
(2, 'Misi Sekolah', '<p>Untuk mencapai visi sebagaimana tersebut diatas maka dirumuskan misi sebagai berikut :</p><ul><li>Mengembangkan sumber daya secara optimal dalam rangka mempersiapkan siswa di era global</li><li>Menumbuhkan semangat keunggulan kepada segenap warga sekolah secara intensif</li><li>Mengembangkan spiritual emosional dan intelektual siswa secara menyeluruh</li><li>Memiliki komitmen Keislaman(IMTAQ), Keilmuan(IPTEQ), Kebudayaan (Multisosiokultural), Keindonesiaan( Nation character building )</li></ul>', '', ''),
(3, 'Tujuan Sekolah', '<ul><li>Tujuan umum Pendidikan adalah mengembangkan potensi peserta didik agar menjadi manusia yang beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia, sehat, berilmu, cakap, kreatif, mandiri, dan menjadi warga negara yang demokratis</li><li>Tujuan Pendidikan Dasar adalah meletakkan dasar kecerdasan, pengetahuan, kepribadian akhlak mulia serta ketrampilan untuk hidup mandiri dan mengikuti pendidikan lebih lanjut</li></ul>', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_syarat`
--

CREATE TABLE `tb_syarat` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `utama`
--

CREATE TABLE `utama` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `nama_gambar` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utama`
--

INSERT INTO `utama` (`id`, `judul`, `isi`, `nama_gambar`, `gambar`) VALUES
(1, 'Sejarah SD Bahreisy', '<p>Sekolahan ini berada di kawasan lokasi masjid ampel yaitu tepatnya di jalan ampel kembang. sekolahan SD BAHREISY merupakan salah satu sekolahan yang telah lama berdiri di kota surabaya, yakni sejak 4 januari 1949. tetapi pada awal pendirian sekolahan ini tidak bersifat formal pendidikan sebagaimana sistem pembelajaran saat ini, tetapi pada awal pendirian sekolahan ini hanya sebatas pembelajaran keagamaan saja yakni seperti mengaji ataupun pembelajaran bidang keagamaan.</p>', '', 'DSC00541.JPG'),
(2, 'Kegiatan Potong Kurban Idul Adhah', '<p>Pada bulan dzulhijjah atau pada idul adha mengadakan kegiatan potong kurban yang secara rutin dilaksanakan setiap tahun yang telah dimulai dari tahun 2016. Tujuan dari kegiatan ini adalah untuk memeriahkan idul qurban serta memberikan pembelajaran potong hewan kepada siswa dan siswi SD BAHREISY ini. Daging hasil qurban ini akan dibagikan kepada wali murid yang kurang mampu, serta kepada warga sekitar yang membutuhkan.</p>', '', ''),
(3, 'Ujian Praktek Memasak', '<p>setiap tahun disekolah SD BAHREISY selalu diadakan kegiatan memasak untuk yang diperuntukkan untuk nilai dalam pelajaran tata boga, tetapi selain untuk nilai pelajaran tujuan dari diadakannya ujian praktek memasak adalah untuk melatih siswa menjadi mandiri agar tidak selalu meminta bantuan orang lain dalam memasak.</p>', '', 'DSCN0018.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `multiuser`
--
ALTER TABLE `multiuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_syarat`
--
ALTER TABLE `tb_syarat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utama`
--
ALTER TABLE `utama`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `multiuser`
--
ALTER TABLE `multiuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_syarat`
--
ALTER TABLE `tb_syarat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utama`
--
ALTER TABLE `utama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
