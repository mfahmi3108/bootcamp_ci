-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2022 pada 08.10
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_bootcamp_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `ID` int(225) NOT NULL,
  `Nama Customer` varchar(225) NOT NULL,
  `No HP` int(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`ID`, `Nama Customer`, `No HP`, `Email`, `Alamat`) VALUES
(220100001, 'Lesti', 123456789, 'lestibillar@gnail.com', 'Jakarta Selatan'),
(220100002, 'Billar', 223456789, 'billar@gnail.com', 'Jakarta Timur'),
(220100003, 'Aldi', 323456789, 'aldi@gnail.com', 'Jakarta Barat'),
(220100004, 'Thaher', 423456789, 'thaher@gnail.com', 'Jakarta Utara'),
(220100005, 'Alip Tiktok', 523456789, 'kamunanya@gnail.com', 'Jakarta Pusat');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220100006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
