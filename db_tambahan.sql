-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jul 2023 pada 16.27
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

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
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(5) NOT NULL,
  `tema` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_agenda` text COLLATE latin1_general_ci NOT NULL,
  `tempat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pengirim` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_mulai` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `tgl_selesai` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `jam` varchar(15) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tema`, `isi_agenda`, `tempat`, `pengirim`, `tgl_mulai`, `tgl_selesai`, `tgl_posting`, `jam`) VALUES
(57, 'SHALAT JUMAT', '<p>Khotib : &nbsp;<br />\r\nDr. Tgk. H. Amri Fatmi Anziz, Lc, MA<br />\r\nUlama Aceh, Doktor Aqidah dan Filsafat Universitas Al-Azhar-Mesir<br />\r\n???? Judul :<br />\r\nBernegara Dengan Amanah</p>\r\n', 'MASJID JAMIâ€™ ADDAâ€™WAH', 'admin', '2023-07-07', '2023-07-07', '04/07/2023', '12:00');

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

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kat`, `judul`, `tanggal`, `jam`, `isi`, `dilihat`, `gambar`) VALUES
(1, 1, 'Cara Menghitung Zakat Mal dan Contohnya', '25/06/2023', '03:19 PM', '<p><em>Bagi kamu yang ingin menunaikan kewajiban zakat mal, berikut ini cara menghitung zakat mal yang harus kamu ketahui.</em></p>\r\n\r\n<p>Membayar zakat merupakan salah satu dari lima kewajiban utama umat Muslim yang wajib ditunaikan. Banyak orang memanfaatkan kedatangan bulan Ramadan untuk menunaikan kewajiban membayar zakat tersebut. Zakat adalah persyaratan dari Allah SWT kepada orang-orang yang menerima karunia berupa harta kekayaan agar harta kekayaan tersebut menjadi halal baginya. Ada 2 jenis zakat yang biasa dibayar pada bulan Ramadan. Yaitu, zakat fitrah yang wajib dikeluarkan oleh orang Islam dan zakat mal atau zakat harta yang wajib dikeluarkan oleh mereka yang sudah memenuhi syarat sebagai wajib zakat.</p>\r\n', 0, '25062023031949.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(4) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `keterangan`, `gambar`) VALUES
(2, 'DEWAN PROGREMING', '<p>kl</p>\r\n', '01072023050918.jpg');

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
(2, 'zakat', '05062023062255.jpg');

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
(9, '', 'Sedakah Melalui Kami', 'Sedekah', '', '<p>Masjid Jama&#39;i Addawah Bandung Baru dengan senang hati mengumumkan bahwa kami sekarang menerima donasi melalui QRIS (Quick Response Code Indonesian Standard). QRIS adalah metode pembayaran digital yang mudah dan aman, memungkinkan Anda untuk berdonasi secara praktis dan efisien.</p>\r\n\r\n<p>QRIS memungkinkan para jamaah dan masyarakat luas untuk berdonasi langsung menggunakan ponsel pintar mereka. Caranya sangat sederhana. Cukup ikuti langkah-langkah di bawah ini:</p>\r\n\r\n<ol>\r\n	<li>Buka aplikasi pembayaran digital (seperti GoPay, OVO, DANA, LinkAja, dll.) di ponsel Anda.</li>\r\n	<li>Pilih menu &quot;Scan QR&quot; atau &quot;Bayar dengan QRIS&quot;.</li>\r\n	<li>Arahkan kamera ponsel Anda ke QR Code yang tersedia di Masjid Jama&#39;i Addawah Bandung Baru.</li>\r\n	<li>Verifikasi jumlah donasi yang ingin Anda berikan dan ikuti petunjuk di aplikasi pembayaran digital untuk menyelesaikan pembayaran.</li>\r\n</ol>\r\n\r\n<p>Dengan menggunakan QRIS, Anda dapat berdonasi dengan cepat dan efisien. Setiap donasi Anda akan digunakan untuk mendukung berbagai kegiatan keagamaan, pemeliharaan fasilitas, dan pengembangan masjid kami.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/simasjid/1.jpg\" style=\"height:857px; width:650px\" /></p>\r\n\r\n<p><strong>Berdonasi melalui Nomor Kontak 081279258145</strong></p>\r\n\r\n<p>Selain melalui QRIS, Anda juga dapat berdonasi dengan mengirimkan dana ke nomor kontak berikut: 081279258145. Nomor ini telah disediakan secara khusus untuk menerima donasi dari para jamaah dan pihak yang ingin memberikan kontribusi kepada Masjid Jama&#39;i Addawah Bandung Baru.</p>\r\n\r\n<p>Anda dapat menggunakan aplikasi pembayaran digital atau metode transfer bank untuk mengirimkan donasi Anda ke nomor kontak tersebut. Pastikan untuk mencantumkan tujuan donasi dengan jelas saat melakukan transfer.</p>\r\n\r\n<p>Masjid Jama&#39;i Addawah Bandung Baru sangat menghargai setiap kontribusi dan donasi yang diberikan. Semua donasi akan digunakan dengan penuh tanggung jawab dan akan membantu kami dalam menjalankan kegiatan keagamaan dan pengembangan masjid.</p>\r\n\r\n<p>Terima kasih atas dukungan dan partisipasi Anda dalam memajukan Masjid Jama&#39;i Addawah Bandung Baru. Semoga Allah SWT membalas kebaikan Anda dengan berlipat ganda. Jazakumullah khairan katsiran.</p>\r\n\r\n<p>Jika Anda memiliki pertanyaan lebih lanjut tentang donasi atau ingin mengetahui lebih lanjut tentang Masjid Jama&#39;i Addawah Bandung Baru, jangan ragu untuk menghubungi kami melalui nomor kontak yang telah disebutkan di atas.</p>\r\n', '', 'hal'),
(10, '', 'Struktur Organisasi', 'struktru organisasi', '', '<p>agagag</p>\r\n', '', 'halpro');

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
(12, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@yahoo.com', 'ebmapdt4ps4gl285s3r9881875', '04/07/2023', '04:19 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`id_kritik`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `id_kritik` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
