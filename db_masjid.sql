-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2023 pada 11.28
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_masjid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_kat` int(3) DEFAULT NULL,
  `judul` text NOT NULL,
  `tanggal` varchar(11) NOT NULL,
  `jam` varchar(9) NOT NULL,
  `isi` text NOT NULL,
  `dilihat` int(5) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(3) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `gambar_kat` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `gambar_kat`) VALUES
(1, 'INFORMASI', '05062023060930.jpg'),
(2, 'PPDB', '05062023062255.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kritik`
--

CREATE TABLE `kritik` (
  `id_kritik` int(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kritik`
--

INSERT INTO `kritik` (`id_kritik`, `nama`, `email`, `pesan`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alias` text NOT NULL,
  `alamat` text NOT NULL,
  `isi` text NOT NULL,
  `peta` text NOT NULL,
  `status_profil` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `tahun`, `nama`, `alias`, `alamat`, `isi`, `peta`, `status_profil`) VALUES
(1, '0823232724274', 'MASJID JAMIâ€™ ADDAâ€™WAH ', 'admin@gmail.com', 'Jl. Bandung Baru, Adi Luwih, Pringsewu Regency, Lampung 35674', '<p>Masjid Jama&#39;i Addawah Bandung Baru yang terletak di Jl. Bandung Baru, Adi Luwih, Pringsewu Regency, Lampung 35674 adalah salah satu masjid penting dan pusat kegiatan keagamaan di wilayah tersebut. Berikut adalah profil singkat tentang Masjid Jama&#39;i Addawah Bandung Baru, Masjid Jama&#39;i Addawah Bandung Baru merupakan tempat ibadah yang penting dan memiliki peran yang signifikan dalam kehidupan umat Muslim di wilayah Pringsewu. Dengan kegiatan keagamaan dan sosial yang diadakan, masjid ini menjadi pusat spiritual dan sarana pemberdayaan masyarakat setempat.</p>\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7945.932424215545!2d104.94688063859942!3d-5.267944273792061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e47343955555555%3A0x772d143110688807!2sMasjid%20Ad%20Da%2Cwah!5e0!3m2!1sen!2sid!4v1687593172065!5m2!1sen!2sid\" width=\"1200\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'pro'),
(7, '', 'BESARAN ZAKAT MAL', 'ZAKAT MAL', '', '<p>Cara Hitung Zakat Mal Cara menghitung zakat mal bisa dilakukan dengan menggunakan rumus 2,5% x jumlah harta yang tersimpan selama 1 tahun. Contohnya, di 1 Januari 2022, Anda memiliki emas sebanyak 200 g. Maka nisab harta kekayaan berupa Zakat mal = 200 g x 2,5% = 5 g Jadi, zakat mal yang harus Anda keluarkan yaitu sebesar 5 g atau setara dengan uang Rp4.690.495 (harga 1 g emas = Rp938.099). Selain menghitung sendiri, saat ini BAZNAS juga memiliki kalkulator zakat yang bisa membantu menghitung zakat mal secara online. Kalkulator zakat tersebut bisa diakses lewat tautan https://baznas.go.id/kalkulatorzakat.<br />\r\n&nbsp;</p>\r\n', '', 'hal'),
(8, '', 'Besaran Zakat Fitrah', 'ZAKAT FITRAH', '', '<p>Zakat fitrah wajib ditunaikan bagi setiap jiwa, dengan syarat beragama Islam, hidup pada saat bulan Ramadhan, dan memiliki kelebihan rezeki atau kebutuhan pokok untuk malam dan Hari Raya Idul Fitri. Besarannya adalah beras atau makanan pokok seberat 2,5 kg atau 3,5 liter per jiwa.</p>\r\n\r\n<p>Para ulama, diantaranya Shaikh Yusuf Qardawi telah membolehkan zakat fitrah ditunaikan dalam bentuk uang yang setara dengan 1 sha&rsquo; gandum, kurma atau beras. Nominal zakat fitrah yang ditunaikan dalam bentuk uang, menyesuaikan dengan harga beras yang dikonsumsi.</p>\r\n\r\n<p>Berdasarkan SK Ketua BAZNAS No. 07 Tahun 2023 tentang Zakat Fitrah dan Fidyah untuk wilayah Ibukota DKI Jakarta Raya dan Sekitarnya, ditetapkan bahwa nilai zakat fitrah setara dengan uang sebesar Rp45.000,-/hari/jiwa</p>\r\n', '', 'hal'),
(9, '', 'Sedakah Melalui Kami', 'Sedekah', '', '<p>Masjid Jama&#39;i Addawah Bandung Baru dengan senang hati mengumumkan bahwa kami sekarang menerima donasi melalui QRIS (Quick Response Code Indonesian Standard). QRIS adalah metode pembayaran digital yang mudah dan aman, memungkinkan Anda untuk berdonasi secara praktis dan efisien.</p>\r\n\r\n<p>QRIS memungkinkan para jamaah dan masyarakat luas untuk berdonasi langsung menggunakan ponsel pintar mereka. Caranya sangat sederhana. Cukup ikuti langkah-langkah di bawah ini:</p>\r\n\r\n<ol>\r\n	<li>Buka aplikasi pembayaran digital (seperti GoPay, OVO, DANA, LinkAja, dll.) di ponsel Anda.</li>\r\n	<li>Pilih menu &quot;Scan QR&quot; atau &quot;Bayar dengan QRIS&quot;.</li>\r\n	<li>Arahkan kamera ponsel Anda ke QR Code yang tersedia di Masjid Jama&#39;i Addawah Bandung Baru.</li>\r\n	<li>Verifikasi jumlah donasi yang ingin Anda berikan dan ikuti petunjuk di aplikasi pembayaran digital untuk menyelesaikan pembayaran.</li>\r\n</ol>\r\n\r\n<p>Dengan menggunakan QRIS, Anda dapat berdonasi dengan cepat dan efisien. Setiap donasi Anda akan digunakan untuk mendukung berbagai kegiatan keagamaan, pemeliharaan fasilitas, dan pengembangan masjid kami.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/simasjid/1.jpg\" style=\"height:857px; width:650px\" /></p>\r\n\r\n<p><strong>Berdonasi melalui Nomor Kontak 081279258145</strong></p>\r\n\r\n<p>Selain melalui QRIS, Anda juga dapat berdonasi dengan mengirimkan dana ke nomor kontak berikut: 081279258145. Nomor ini telah disediakan secara khusus untuk menerima donasi dari para jamaah dan pihak yang ingin memberikan kontribusi kepada Masjid Jama&#39;i Addawah Bandung Baru.</p>\r\n\r\n<p>Anda dapat menggunakan aplikasi pembayaran digital atau metode transfer bank untuk mengirimkan donasi Anda ke nomor kontak tersebut. Pastikan untuk mencantumkan tujuan donasi dengan jelas saat melakukan transfer.</p>\r\n\r\n<p>Masjid Jama&#39;i Addawah Bandung Baru sangat menghargai setiap kontribusi dan donasi yang diberikan. Semua donasi akan digunakan dengan penuh tanggung jawab dan akan membantu kami dalam menjalankan kegiatan keagamaan dan pengembangan masjid.</p>\r\n\r\n<p>Terima kasih atas dukungan dan partisipasi Anda dalam memajukan Masjid Jama&#39;i Addawah Bandung Baru. Semoga Allah SWT membalas kebaikan Anda dengan berlipat ganda. Jazakumullah khairan katsiran.</p>\r\n\r\n<p>Jika Anda memiliki pertanyaan lebih lanjut tentang donasi atau ingin mengetahui lebih lanjut tentang Masjid Jama&#39;i Addawah Bandung Baru, jangan ragu untuk menghubungi kami melalui nomor kontak yang telah disebutkan di atas.</p>\r\n', '', 'hal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_log` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `jam_log` varchar(10) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `email`, `id_session`, `tgl_log`, `jam_log`) VALUES
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@yahoo.com', 'ct97lf8pd9o3stlrcj5vbhkod3', '24/06/2023', '10:28 AM');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id_kritik` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
