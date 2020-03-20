-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2020 pada 07.02
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dapen_pal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `tanggal`, `gambar`, `judul`, `konten`) VALUES
(3, '2020-01-23 09:01:32', '1579744892_1_jpeg.jpeg', 'Butuh Kapal Selam Dan Jet, Prabowo Koordinasi Ke Pindad, PT PAL, Dan PT DI', '\"Jadi ini bagian dari, istilahnya kita mau liat langsung apa yang terjadi di Pindad, maksudnya itu belanja masalahlah. Kalau ada masalah kita mesti lihat, kan kita juga ingin mengembangkan industri pertahanan nasional. Supaya kita berperan dan berbicara di kawasan,\" ujar Trenggono di Kemhan, Jalan Medan Merdeka Barat, Jakarta Pusat, Selasa (5/11/2019).'),
(4, '2020-01-30 09:40:15', '1580352015_berita2_jpeg.jpeg', 'Didampingi Luhut-Prabowo, Jokowi Tinjau Kapal Selam  Alugoro-405 di PT PAL', 'Presiden Joko Widodo (Jokowi) meninjau kapal selam \r\nKRI Alugoro-405 di PT PAL. Jokowi didampingi Menteri \r\nPertahanan Prabowo Subianto. Jokowi bersama rombongan \r\ntiba di kawasan PT PAL Indonesia, Senin (27/1/2020), \r\nsekitar 10.30 WIB. Selain oleh Prabowo, Jokowi didampingi \r\nsejumlah menteri lainnya, antara lain Menko Kemaritiman \r\ndan Investasi Luhut Binsar Panjaitan; Menko Politik, Hukum, \r\ndan Keamanan Mahfud Md; Menko PMK Muhadjir Effendy; \r\nKepala Staf Kepresidenan Moeldoko; Menteri Luar Negeri \r\nRetno Marsudi; serta Menteri Keuangan Sri Mulyani.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_kepesertaan`
--

CREATE TABLE `laporan_kepesertaan` (
  `id_laporan` int(11) NOT NULL,
  `tgl_akhir` date NOT NULL,
  `jml_akhir1` int(11) NOT NULL,
  `tambah_akhir` int(11) NOT NULL,
  `kurang_akhir` int(11) NOT NULL,
  `jml_akhir2` int(11) NOT NULL,
  `jml_normal` int(11) NOT NULL,
  `jml_cepat` int(11) NOT NULL,
  `jml_meninggal` int(11) NOT NULL,
  `jml_tunda` int(11) NOT NULL,
  `jml_kurang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_kepesertaan`
--

INSERT INTO `laporan_kepesertaan` (`id_laporan`, `tgl_akhir`, `jml_akhir1`, `tambah_akhir`, `kurang_akhir`, `jml_akhir2`, `jml_normal`, `jml_cepat`, `jml_meninggal`, `jml_tunda`, `jml_kurang`) VALUES
(0, '2020-01-09', 1000, 150, 25, 40, 100, 500, 300, 100, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_keuangan`
--

CREATE TABLE `laporan_keuangan` (
  `id_laporan` int(11) NOT NULL,
  `periode_awal` date NOT NULL,
  `periode_akhir` date NOT NULL,
  `file_1` varchar(50) NOT NULL,
  `file_2` varchar(50) NOT NULL,
  `file_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan_keuangan`
--

INSERT INTO `laporan_keuangan` (`id_laporan`, `periode_awal`, `periode_akhir`, `file_1`, `file_2`, `file_3`) VALUES
(27, '2020-01-02', '2020-01-03', '1580352521_laporan_neto_pdf.pdf', '1580352521_laporan_neraca_pdf.pdf', '1580352521_laporan_hasilusaha_pdf.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(2, 'dapen', 'fdf5d23492f82fccad53f840f7b82545');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_file`
--

CREATE TABLE `tb_file` (
  `id_file` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tgl_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_file`
--

INSERT INTO `tb_file` (`id_file`, `nama`, `file`, `deskripsi`, `tgl_upload`) VALUES
(37, 'form A', '1579658994_Form_A_pdf.pdf', 'form untuk pensiun normal', '2020-01-22 09:09:54'),
(38, 'form B', '1579659029_Form_B_pdf.pdf', 'form untuk pensiun meninggal', '2020-01-22 09:10:29'),
(39, 'Laporan Asset Neto', '1579659056_Laporan_neto_pdf.pdf', 'Periode 2018-2019', '2020-01-22 09:10:56'),
(40, 'Laporan Neraca', '1579659077_neraca_pdf.pdf', 'Periode 2018-2019', '2020-01-22 09:11:17'),
(41, 'Laporan Hasil Usaha', '1579659098_Laporan_HasilUsaha_pdf.pdf', 'Periode 2018-2019', '2020-01-22 09:11:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `tgl_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_gambar`
--

INSERT INTO `tb_gambar` (`id_gambar`, `nama_gambar`, `gambar`, `deskripsi`, `tgl_upload`) VALUES
(11, 'Peresmian Kapal Selam', '1579744182_6_jpg.jpg', 'Diresmikan Bersama Angkatan Laut di PT.PAL', '2020-01-23 08:49:42'),
(17, 'Prabowo Ke PT. PAL', '1580302492_1580090531_berita_jpeg_jpeg.jpeg', 'Koordinasi Mengenai Kapal Perang', '2020-01-29 19:54:52'),
(19, 'Pengarahan Pendiri', '1580352344_1580352256164_flyme_IMG-20200130-WA0002_jpg.jpg', 'Pengarahan Pendiri', '2020-01-30 09:45:44');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan_kepesertaan`
--
ALTER TABLE `laporan_kepesertaan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `laporan_kepesertaan`
--
ALTER TABLE `laporan_kepesertaan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan_keuangan`
--
ALTER TABLE `laporan_keuangan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_file`
--
ALTER TABLE `tb_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
