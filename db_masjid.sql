-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2023 pada 11.17
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

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kat`, `judul`, `tanggal`, `jam`, `isi`, `dilihat`, `gambar`) VALUES
(1, 1, 'SDN BUMI JAYA Menggelar Karya dan Pentas Seni Projek', '05/06/2023', '10:44 AM', '<p>Kamis, 22 Desember 2022 SDN BUMI JAYA Menggelar Karya dan Pentas Seni Projek Penguatan Profil Pelajar Pancasila (P5) SDN BUMI JAYA. Tahun Ajaran 2022/2023. P5 merupakan singkatan dari Projek Penguatan Profil Pelajar Pancasila. Projek ini merupakan bagian dari Kurikulum Merdeka. Dimana tujuannya agar menciptakan siswa yang tergambar sebagai profil pelajar pancasila. Kelas 1 dan Kelas 4 mengangkat tema &quot;Cerdas Memilah Sampah&quot; . Banyak sekali aktifitas seru dan beragam kreatifitas yang ditampilkan. Banyak yang dipamerkan dari hasil daur ulang barang yang tidak terpakai karya dari siswa siswi kelas 1 dan kelas 4 SDIT Yabis. Diharapkan dengan adanya kegiatan P5 dengan tema &quot;Cerdas Memilah Sampah&quot; ini dapat mengembangkan bakat siswa siswi yang kreatif dalam mengolah barang tidak terpakai dan menjadikan barang yang bermanfaat untuk digunakan dengan kreatifitas yang menarik.</p>\r\n', 0, '05062023104409.jpg'),
(2, 1, 'SDN Bumi Jaya Meriahkan Hari Pancasila dengan Berbagai Kegiatan Edukatif', '05/06/2023', '10:49 AM', '<p>SDN Bumi Jaya merayakan Hari Pancasila dengan semangat dan antusiasme yang tinggi pada hari ini. Para siswa dan guru-guru di sekolah ini turut berpartisipasi dalam serangkaian kegiatan edukatif untuk meningkatkan pemahaman dan penghayatan terhadap nilai-nilai Pancasila.</p>\r\n\r\n<p>Dalam rangka perayaan Hari Pancasila, SDN Bumi Jaya menggelar upacara bendera yang dihadiri oleh seluruh siswa, guru, dan staf sekolah. Upacara dimulai dengan penghormatan kepada bendera merah putih dan dilanjutkan dengan pembacaan teks Pancasila oleh salah satu siswa yang dipilih secara acak. Hal ini bertujuan untuk mengingatkan siswa akan pentingnya memahami dan mengamalkan nilai-nilai Pancasila dalam kehidupan sehari-hari.</p>\r\n\r\n<p>Selain upacara bendera, SDN Bumi Jaya juga mengadakan serangkaian kegiatan edukatif. Siswa-siswa diberikan kesempatan untuk mengikuti berbagai workshop dan diskusi terkait Pancasila dan maknanya. Para guru dengan penuh dedikasi menyampaikan pengetahuan dan nilai-nilai Pancasila kepada siswa melalui ceramah, presentasi, serta kegiatan kreatif seperti pembuatan poster dan lukisan yang menggambarkan nilai-nilai Pancasila.</p>\r\n\r\n<p>&quot;Sangat penting bagi kita untuk mengingat dan memperkuat pemahaman tentang Pancasila sebagai dasar negara dan pandangan hidup bangsa Indonesia. Melalui kegiatan ini, kami berharap siswa-siswa kami dapat menginternalisasi nilai-nilai Pancasila dan menerapkannya dalam kehidupan sehari-hari,&quot; kata Ibu Maria, salah satu guru di SDN Bumi Jaya.</p>\r\n\r\n<p>Selain itu, SDN Bumi Jaya juga mengundang seorang narasumber dari lembaga pemerintah setempat untuk memberikan ceramah tentang pentingnya menjaga kebhinekaan dan menjunjung tinggi nilai-nilai persatuan dalam bingkai Pancasila. Narasumber tersebut memberikan pengalaman dan wawasan yang berharga kepada siswa-siswa.</p>\r\n\r\n<p>Kepala Sekolah SDN Bumi Jaya, Bapak Ahmad, menyampaikan apresiasinya terhadap semangat dan partisipasi aktif dari siswa dan guru dalam perayaan Hari Pancasila. &quot;Kami sangat bangga melihat semangat siswa-siswa kami dalam memperingati Hari Pancasila. Semoga dengan kegiatan ini, kita dapat menjaga dan menerapkan nilai-nilai Pancasila sebagai landasan hidup kita,&quot; ujar Bapak Ahmad.</p>\r\n\r\n<p>Perayaan Hari Pancasila di SDN Bumi Jaya tidak hanya menjadi momen bersejarah, tetapi juga menjadi momentum untuk mengajarkan generasi muda tentang pentingnya persatuan, keragaman, dan keadilan dalam membangun negara yang lebih baik.</p>\r\n', 0, '05062023104919.jpg'),
(3, 1, 'SDN Bumi Jaya Menyelenggarakan Upacara Seni untuk Menggali Bakat dan Kreativitas Siswa', '05/06/2023', '10:51 AM', '<p><strong>Bumi Jaya</strong> - SDN Bumi Jaya mengadakan perayaan istimewa dengan menyelenggarakan Upacara Seni, di mana setiap siswa diberikan kesempatan untuk menampilkan bakat dan kreativitas mereka di berbagai bidang seni. Acara tersebut bertujuan untuk mendorong dan memotivasi siswa untuk mengembangkan minat mereka dalam seni serta meningkatkan rasa percaya diri dan ekspresi diri mereka.</p>\r\n\r\n<p>Dalam upacara tersebut, seluruh siswa, guru, dan staf sekolah berkumpul di lapangan sekolah yang dihiasi dengan nuansa seni. Upacara dimulai dengan kata sambutan dari Kepala Sekolah SDN Bumi Jaya, Ibu Siti, yang menjelaskan pentingnya pengembangan bakat dan minat dalam seni untuk pertumbuhan holistik siswa.</p>\r\n\r\n<p>Setiap kelas diberikan kesempatan untuk menampilkan pertunjukan seni yang telah mereka siapkan dengan penuh semangat dan dedikasi. Beberapa kelas menampilkan tarian tradisional, sementara yang lain menyajikan drama pendek, vokal grup, band, atau pementasan teater. Siswa-siswa ini menunjukkan kemampuan mereka di depan seluruh sekolah dan mendapatkan tepuk tangan yang meriah dari penonton.</p>\r\n\r\n<p>&quot;Upacara Seni ini adalah momen yang sangat berharga bagi siswa-siswa kami. Kami berharap melalui kegiatan ini, siswa-siswa dapat menemukan minat dan bakat mereka dalam seni, dan lebih percaya diri dalam mengekspresikan diri melalui kreativitas mereka,&quot; ujar Ibu Siti.</p>\r\n\r\n<p>Selain itu, beberapa siswa juga mendapatkan penghargaan khusus atas prestasi dan dedikasi mereka dalam bidang seni. Penghargaan diberikan kepada siswa yang menunjukkan kemajuan yang luar biasa, keunikan dalam ekspresi seni, atau berpartisipasi aktif dalam kegiatan seni di sekolah.</p>\r\n\r\n<p>Bapak Rahman, salah satu guru seni di SDN Bumi Jaya, mengungkapkan kegembiraannya melihat semangat dan bakat siswa dalam acara tersebut. &quot;Ini adalah kesempatan bagi siswa kami untuk menunjukkan kemampuan dan potensi mereka di bidang seni. Kami berharap dapat mendukung dan mengarahkan mereka untuk terus berkembang dalam bakat mereka,&quot; ucap Bapak Rahman.</p>\r\n\r\n<p>Upacara Seni ini tidak hanya memberikan kesempatan bagi siswa untuk menampilkan kreativitas mereka, tetapi juga sebagai ajang apresiasi dan inspirasi bagi mereka yang hadir. Semua siswa dan guru di SDN Bumi Jaya terinspirasi untuk menggali bakat dan minat mereka dalam seni serta terus berusaha untuk berkembang lebih jauh.</p>\r\n\r\n<p>Dengan adanya Upacara Seni ini, SDN Bumi Jaya telah memberikan ruang dan kesempatan bagi siswa-siswa untuk mengeks</p>\r\n', 0, '05062023105109.jpg');

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
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
