-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Des 2021 pada 04.40
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor_itera_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `file` varchar(500) NOT NULL,
  `hasilupload` varchar(500) NOT NULL,
  `aspek` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lapor`
--

INSERT INTO `lapor` (`id`, `isi`, `file`, `hasilupload`, `aspek`, `waktu`) VALUES
(38, 'Respon situs siakad lambat sehingga terkadang lama untuk melakukan akses ke situs. Semoga dapat dilakukan perbaikan agar seluruh informasi dapat disampaikan dengan cepat.', 'respon-web-lambat.jpeg', '', 'staff', '2021-12-21 21:12:13'),
(39, 'Mahasiswa kesulitan dalam mengakses elearning dikarenakan terkadang terjadi error seperti yang ada pada gambar. Oleh karena itu akan lebih baik jika dilakukan perbaikan secepat mungkin.\r\n', 'elearning-error.jpeg', '', 'mahasiswa', '2021-12-21 21:13:51'),
(40, 'Elearning sering mengalami error karena server down. Dan ini akan mempengaruhi kegiatan pembelajaran dan pemberian materi  yang memang biasa dilakukan melalui web elearning. ', 'error-learning.jpeg', '', 'pengajaran', '2021-12-21 21:15:38'),
(41, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati fugit impedit praesentium, quidem laudantium odio illum, earum iure molestias repellendus quia nam temporibus illo ad itaque molestiae deserunt pariatur vitae.\r\nLorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nulla nobis tenetur odio, necessitatibus quisquam cum ea, nihil cumque dicta maxime, eius quidem a veniam mollitia repudiandae vitae quos fuga?\r\n\r\n', 'ini-dummy-lorem.pdf', '', 'staff', '2021-12-21 21:17:38'),
(42, 'Sebaiknya jumlah pohon di sekitar gedung diperbanyak agar tempat berteduh dapat lebih banyak. Selain itu dengan menambah pohon dapat menyerap gas CO2 di sekitar.', 'pohon-kurang.jpeg', '', 'infrastruktur', '2021-12-21 21:19:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
