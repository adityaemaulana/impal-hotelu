-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Okt 2019 pada 11.18
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(100) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `fasilitas` varchar(50) NOT NULL,
  `fotofasilitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `id_kamar`, `fasilitas`, `fotofasilitas`) VALUES
(1, 1, 'Shower', 'shower.png'),
(2, 1, 'AC', 'ac.png'),
(3, 2, 'Shower', 'shower.png'),
(4, 2, 'TV LCD', 'tv.png'),
(5, 2, 'Air Conditioner', 'ac.png'),
(6, 2, 'Sarapan Gratis', 'toaster.png'),
(7, 3, 'WiFi', 'wifi.png'),
(8, 3, 'TV Kabel', 'tv.png'),
(9, 3, 'Shower', 'shower.png'),
(10, 3, 'Air Conditioner', 'ac.png'),
(11, 4, 'WiFi', 'wifi.png'),
(12, 4, 'Air Conditioner', 'ac.png'),
(13, 4, 'TV Kabel', 'tv.png'),
(14, 4, 'Sarapan Gratis', 'toaster.png'),
(15, 4, 'Shower', 'shower.png'),
(16, 4, 'Bathub', 'bathub.png'),
(17, 5, 'WiFi', 'wifi.png'),
(18, 5, 'Air Conditioner', 'ac.png'),
(19, 5, 'TV Kabel', 'tv.png'),
(20, 5, 'Sarapan Gratis', 'toaster.png'),
(21, 5, 'Shower', 'shower.png'),
(22, 5, 'Bathub', 'bathub.png'),
(23, 5, 'Brankas', 'brankas.png'),
(24, 6, 'WiFi', 'wifi.png'),
(25, 6, 'TV Kabel', 'tv.png'),
(26, 6, 'Air Conditioner', 'ac.png'),
(27, 6, 'Shower', 'shower.png'),
(28, 6, 'Bathub', 'bathub.png'),
(29, 6, 'Sarapan Gratis', 'toaster.png'),
(30, 6, 'Minibar', 'minibar.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id` int(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `penjelasan` varchar(3000) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `harga` int(100) NOT NULL,
  `imageUrl` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id`, `nama`, `penjelasan`, `tipe`, `status`, `harga`, `imageUrl`) VALUES
(1, '101', 'Standard Room dilengkapi dengan satu buah tempat tidur berukuran single untuk satu orang. Fasilitas pada kamar ini yaitu AC, peralatan mandi gratis, sandal, meja tulis, air minum kemasan gratis, TV LCD, fasilitas membuat kopi teh. Kamar Standar tanpa sarapan pagi.', 'Standard Room', 'tersedia', 460000, 'standar.jpg'),
(2, '201', 'Superior Room dilengkapi dengan dua buah tempat tidur masing – masing berukuran single. Fasilitas pada kamar ini yaitu WiFi, AC, peralatan mandi gratis, sandal, meja tulis, air minum kemasan gratis, TV LCD, fasilitas membuat kopi teh. Dilengkapi dengan sarapan pagi.', 'Superior Room', 'tersedia', 540000, 'superior.jpg'),
(3, '301', 'Grand Deluxe Room dilengkapi dengan satu buah tempat tidur berukuran double (ranjang besar) atau Twin. Fasilitas pada kamar ini yaitu WiFi, AC, peralatan mandi gratis, sandal, meja tulis, air minum kemasan gratis, TV LCD, fasilitas membuat kopi teh, dan brankas. Dilengkapi dengan sarapan pagi. Luas masing-masing kamar adalah 27m2. Setiap sudut kamar dirancang modern minimalis, kami menyediakan Anda kamar merokok dan kamar bebas rokok.', 'Grand Deluxe Room', 'tersedia', 700000, 'grand.jpg'),
(4, '401', 'Tipe Kamar Bussines Bed: tempat tidur kembar Ukuran kamar: 27,0 sqm Hiburan - WiFi gratis, TV LCD 42 inci dengan saluran premium Makanan & Minuman - Pembuat kopi / teh, minibar, layanan kamar 24 jam, dan air kemasan gratis. Fasilitas Kamar: Mini Kulkas, AC, Brankas dalam kamar, Fasilitas Sofa Kursi Kursi: Pengering rambut, Kamar mandi pribadi, pancuran, sandal, dan perlengkapan mandi lengkap gratis', 'Deluxe Room', 'tersedia', 1000000, 'deluxe.jpg'),
(5, '501', 'Dengan luas kamar 32 sqm, nikmati pemandangan menghadap kota bandung, dengan dekorasi yang modern dan akses Internet berkecepatan tinggi. Dilengkapi tempat tidur untuk menjamin kenyamanan Anda. dan preferensi kamar untuk merokok tergantung pada ketersediaan kamar yang dapat ditentukan pada saat Anda check-in.', 'Club King', 'tersedia', 1953000, 'king.jpg'),
(6, '601', 'Nikmati pemandangan gunung dan kota yang menakjubkan menyambut Anda di suite seluas 70 m2 yang luas terletak di lantai 5 sampai dengan lantai 15. Jadikan diri Anda senyaman di rumah sendiri dengan menikmati ruang tamu yang terpisah lengkap dengan sofa yang nyaman, kursi santai dan area kerja dengan WIFI berkecepatan tinggi, dilengkapi dengan karya seni bernuansa Indonesia kontemporer yang unik. Nikmati akses ke Executive Lounge yang menyajikan santapan pagi, minuman, koktail malam dan canapes.', 'The Suite', 'tersedia', 3150000, 'suite.jpg'),
(7, '133', '', 'standard', 'tersedia', 150000, ''),
(8, '123', '', 'Deluxe', 'tersedia', -150, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamarfoto`
--

CREATE TABLE `kamarfoto` (
  `id_kamar` int(11) NOT NULL,
  `fotokamar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamarfoto`
--

INSERT INTO `kamarfoto` (`id_kamar`, `fotokamar`) VALUES
(1, 'std1.jpg'),
(1, 'std2.jpg'),
(2, 'supe1.jpg'),
(2, 'supe2.jpg'),
(3, 'gd1.jpg'),
(3, 'gd2.jpg'),
(4, 'del1.jpg'),
(4, 'del2.jpg'),
(5, 'ck1.png'),
(5, 'ck2.png'),
(6, 'ts1.jpg'),
(6, 'ts2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `umur` int(5) NOT NULL,
  `imageUrl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `nama`, `jabatan`, `username`, `password`, `jeniskelamin`, `umur`, `imageUrl`) VALUES
(2, 'Aditya Eka Maulana', 'Human Resource', 'maulanaaditya', '123123', 'Laki-Laki', 17, ''),
(3, 'Dema Rahayu', 'Receptionist', 'test@gmail.com', 'test123123', 'Perempuan', 23, '$img'),
(4, 'Rahadian Yusuf', 'Human Resource', 'hadian@gmail.com', '123456', 'Laki-Laki', 18, '$img'),
(5, 'Crisanadenta Wintang Kencana', 'Manager', 'crisanadenta@gmail.c', '123456', 'Perempuan', 20, '$img');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `umur` int(5) NOT NULL,
  `imageUrl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`nama`, `email`, `username`, `password`, `jeniskelamin`, `umur`, `imageUrl`) VALUES
('Aditya Eka Maulana', 'adityaemaulana@gmail.com', 'aemaulana', 'abcdef', 'Laki-Laki', 18, '1769911.jpg'),
('Tira Vieri', 'tiratira@gmail.com', 'tira', 'tira', 'Male', 21, 'Tp_ModulJRK2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `idkamar` int(100) NOT NULL,
  `durasi` int(11) NOT NULL,
  `totalbayar` int(100) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `username`, `idkamar`, `durasi`, `totalbayar`, `jenis`, `status`, `tanggal`) VALUES
('5c05a67cb7c8a', 'aemaulana', 1, 2, 460000, 'Virtual BCA', 'dipesan', '2018-12-03'),
('5c05a721de7ab', 'aemaulana', 1, 2, 460000, 'Virtual BCA', 'dipesan', '2018-12-03'),
('5c05a747f242c', 'aemaulana', 1, 2, 460000, 'Virtual BCA', 'dipesan', '2018-12-03'),
('5c05a8d9d380c', 'aemaulana', 1, 2, 460000, 'Virtual BCA', 'dipesan', '2018-12-03'),
('5c05ac1f7b720', 'aemaulana', 2, 2, 540000, 'Virtual BCA', 'dipesan', '2018-12-03'),
('5c05acbc62b77', 'aemaulana', 2, 2, 540000, 'Virtual BCA', 'dipesan', '2018-12-03'),
('5c05ad32060f8', 'aemaulana', 2, 2, 540000, 'Virtual BCA', 'dipesan', '2018-12-03'),
('5c05ad71244d5', 'aemaulana', 2, 2, 540000, 'Virtual BCA', 'dipesan', '2018-12-03'),
('5c05b0605b33b', 'aemaulana', 2, 2, 540000, 'Virtual BCA', 'dipesan', '2018-12-03'),
('5c05b0d9b3049', 'aemaulana', 2, 2, 540000, 'Virtual BCA', 'dipesan', '2018-12-03'),
('5c05b148816db', 'aemaulana', 2, 2, 540000, 'Virtual BCA', 'dipesan', '2018-12-03'),
('5c063505a95f5', 'aemaulana', 2, 2, 540000, 'Virtual BCA', 'dipesan', '2018-12-04'),
('5c0880dea46a0', 'tira', 2, 2, 540000, 'Virtual BCA', 'dipesan', '2018-12-06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
