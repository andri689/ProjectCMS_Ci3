-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 07:47 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(11, 'contoh 1', '20230912025058.jpg'),
(12, 'contoh 2', '20230912025119.jpg'),
(13, 'contoh 3', '20230912025202.jpg'),
(14, 'contoh 3', '20230915062632.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'otomotif'),
(2, 'sejarah'),
(6, 'informasi penting'),
(8, 'tanaman');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'ADnugroho', 'anak sekolah', 'https://www.instagram.com/andri', 'https://www.facebook.com/Andrian Dwi Nugroho', 'andri@gmail.com', 'karang RT 1 RW 15 Tegalgede Karanganyar', '+62 8898908899');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(5, 'bunga mawar', 'Mawar[1] atau ros[2] (Rosa) adalah tumbuhan perdu, pohonnya berduri, bunganya berbau wangi dan berwarna indah, terdiri atas daun bunga yang bersusun;[2] meliputi ratusan jenis, tumbuh tegak atau memanjat, batangnya berduri, bunganya beraneka warna, seperti merah, putih, merah jambu, merah tua, dan berbau harum.[1] Mawar liar terdiri dari 100 spesies lebih, kebanyakan tumbuh di belahan bumi utara yang berudara sejuk. Spesies ini umumnya merupakan tanaman semak yang berduri atau tanaman memanjat yang tingginya bisa mencapai 2 sampai 5 meter. Walaupun jarang ditemui, tinggi tanaman mawar yang merambat di tanaman lain bisa mencapai 20 meter.\r\n\r\nSebagian besar spesies mempunyai daun yang panjangnya antara 5–15 cm dengan dua-dua berlawanan (pinnate). Daun majemuk yang tiap tangkai daun terdiri dari paling sedikit 3 atau 5 hingga 9 atau 13 anak daun dan daun penumpu (stipula) berbentuk lonjong, pertulangan menyirip, tepi tepi beringgit, meruncing pada ujung daun dan berduri pada batang yang dekat ke tanah. Mawar sebetulnya bukan tanaman tropis, sebagian besar spesies merontokkan seluruh daunnya dan hanya beberapa spesies yang ada di Asia Tenggara yang selalu berdaun hijau sepanjang tahun.\r\n\r\nBunganya terdiri dari 5 helai daun mahkota dengan perkecualian Rosa sericea yang hanya memiliki 4 helai daun mahkota. Di antara warna yang dimiliki oleh mawar adalah putih, merah muda, kuning, dan biru pada beberapa spesies. Ovari berada di bagian bawah daun mahkota dan daun kelopak.', '20230912025419.jpg', 'bunga-mawar', '6', '2023-09-12', 'admin'),
(7, 'GTR R35', 'Antara tahun 1969 hingga 1974, dan antara tahun 1989 hingga 2002, Nissan mencoba memproduksi versi performa yang lebih tinggi dari jajaran Skyline yang kemudian disebut sebagai Nissan Skyline GT-R.\r\n\r\nSama seperti Skyline GTR sebelumnya, Nissan GTR merupakan mobil sport berpenggerak empat roda dan menggunakan mesin 6 silinder twin-turbo, dan \"darah\" dari Skyline GTR terlihat jelas dari desain lampu belakangnya yang membulat. Bedanya, walaupun masih memakai mesin 6 silinder twin-turbo, mesin Skyline GTR yang legendaris, RB26DETT, telah diganti dengan mesin VR38DETT yang berkonfigurasi V serta dengan isi slinder yang lebih besar, yaitu 3.800 CC (di mana sebelumnya, RB26DETT mempunyai kapasitas 2.600 CC).\r\n\r\nNissan GT-R, walaupun tidak lagi mencantumkan nama \"Skyline\" lagi, masih termasuk dalam generasi penerus mobil sport NIssan Skyline GT-R, dan oleh sebab itu juga, kode sasisnya CBA-R35 (DBA-R35 untuk model 2013), atau biasa disebut R35, dan oleh sebab itu juga, mobil ini sering dipanggil oleh sebutan yang aslinya dipersembahkan untuk Nissan Skyline GT-R BNR32, yaitu The Godzilla.', '20230912061311.jpg', 'GTR-R35', '1', '2023-09-12', 'admin'),
(9, 'bunga mawar merah', 'kkkdwnbbbebhbhcehcbehbchba jbwq jciw ', '20230919045036.jpg', 'bunga-mawar-merah', '8', '2023-09-19', 'admin'),
(13, 'contoh 1', 'nbh', '20230929032131.jpg', 'contoh-1', '6', '2023-09-29', 'admin'),
(14, 'jjjjj', 'jnjb', '20231006082130.jpg', 'jjjjj', '6', '2023-10-06', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(14, 'admin', 'Dwi', 'c4ca4238a0b923820dcc509a6f75849b', 'Admin'),
(20, 'andrian', 'Andrian', 'c4ca4238a0b923820dcc509a6f75849b', 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
