-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2017 pada 08.59
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `solusihamil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id_account` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `passwoord` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_account`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `account`
--

INSERT INTO `account` (`id_account`, `nama`, `username`, `passwoord`) VALUES
('acc_sobib', 'Sobib Husain', 'sobib', '5625e6d971b42d4c94bbc1e8bab163bd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `gambar`, `content`, `tanggal`) VALUES
('art_a', 'a', 'image/corel.png', 'ndf', '2017-06-04'),
('art_b', 'b', 'image/corel.png', 'sd', '2017-06-04'),
('art_c', 'c', 'image/corel.png', 'sd', '2017-06-04'),
('art_d', 'd', 'image/corel.png', 'sd', '2017-06-04'),
('art_djfj', 'djfj', 'image/codecode.jpg', ' jnsjdknjsd', '2017-06-02'),
('art_haha', 'haha', 'image/Betadine.JPEG', ' ini adlaah hal yh', '2017-06-02'),
('art_j', 'j', 'image/corel.png', ' shjdbsjh d jha sdjh ', '2017-06-02'),
('art_jsndjs', 'jsndjs', 'image/coba.png', ' jnjknj', '2017-06-02'),
('art_sd', 'ndfj', 'image/corel.png', 'guygu', '2017-06-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `content` mediumtext NOT NULL,
  `harga` varchar(20) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `judul`, `gambar`, `content`, `harga`) VALUES
('prod_Alfafa', 'Alfafa', 'image/IMG_20170531_004023.jpg', 'Alfafa merupakan suatu produk yang sangat bermanffat bagi ibu yang sedang hamil dan lainnay karena itu Alfafa sangat manjur dalam menyembuhkan penyakit seperti di bawah ini\r\n</br>\r\n<h2>Manfaat Alfafa:</h2>\r\n<br/><br/>\r\n<ul>\r\n<li>Membantu fungsi hati utk membersihkan tubuh dari racun-racun kimia sintesis</li>\r\n<li>Memperbaiki sel telur sehingga menjadi matang</li> \r\n<li>memperbaiki kualitas sperma</li>\r\n<li>Mencegah pertumbuhan bakteri</li>\r\n<li>Meningkatkan sistem kekebalan tubuh</li>\r\n<li>Meningkatkan fungsi hati</li>\r\n<li>Melancarkan peredaran darah</li>\r\n<li>Menghilangkan bau badan dan nafas tak sedap</li>\r\n<li>Meningkatkan metabolisme</li>\r\n<li>Memperbaiki sistem pencernaan</li>\r\n<li>Mempercepat penyembuhan luka</li>\r\n<li>Menyeimbangkan kadar racun dan alkali dalam darah</li>\r\n<li>Memperbanyak jumlah sel darah merah</li>\r\n<li>Mencegah anemia</li>\r\n<li>Meningkatkan fungsi paru-paru</li>\r\n<li>Mengurangi rasa sakit dan proses inflamasi dalam tubuh</li>\r\n<li>Memberikan zat besi ke dalam darah</li>\r\n<li>Menormalkan suhu badan</li>\r\n<li>Melegakan sakit tenggorokan</li>\r\n<li>Mengurangi radikal bebas dan melambatkan proses penuaan</li>\r\n<li>Bersifat realease,repair, dan rejuvenate yg seimbang</li>', 'Rp.400.000'),
('prod_Maca-Mx', 'Maca-Mx', 'image/maca-mx.jpg', '  \r\n<br> Maca bekerja menyeimbangkan fungsi hormon reproduksi. memperbaiki kondisi organ reproduksi yang tidak sempurna. Menyuburkan sistem reproduksi. Zat yang terkandung dalam Maca Mx:<br>\r\n<ul>\r\n <ol>Lepidium Peruvianum</ol>\r\n <ol>Tribulus Terresteris</ol>\r\n <ol>Serat buah2an</ol>\r\n <ol>Spirulina</ol>\r\n <ol>Ekstrsk bayam</ol>\r\n <ol>Ekstrak seledri</ol>\r\n <ol>Ekstrak the hijau</ol>\r\n <ol>Ekstra biji anggur</ol>\r\n <ol>Mineral,Vitamin</ol>\r\n</ul>\r\n\r\n<h2>Manfaat  Maca Mx  :</h2>\r\n<ul>\r\n<ol>Meningkatkan Vitalitas dan kebugaran.</ol>\r\n<ol>Memulihkan tenaga.</ol>\r\n<ol>Meningkatkan kesuburan.</ol>\r\n<ol>Meningkatkan kesehatan.</ol>\r\n<ol>Meningkatkan sklus sperma.</ol>\r\n<ol>Menyembuhkan segala penyakit. </ol>\r\n<ol>DLL.</ol> \r\n</ul>\r\n\r\n<br/>Maca telah digunakan sejak ribuan tahun lalu oleh suku asli Inca dikawasan pegunungan Andes,Peru.Kini dikembangkan oleh negara maju seperti USA,Canada,Inggris,Belanda,Swiss,Aus', 'Rp.600.000'),
('prod_Seagold', 'Seagold', 'image/IMG_20170222_113916.jpg', '<br> Seagold merupakan obat yang sangat manjur dalam memperbaiki induk induk sel sperma dan sel lainnya karena itu produk ini sangat bagus untuk kesehatan bunda dan coba \r\n<h2>Khasiatnya seagold : </h2>\r\n<ul>\r\n<li>Memperbaiki kerusakan sel serta menjaga kesehatan sel</li> \r\n<li>Memperkuat fungsi hati utk mengeluarkan anti bodi sehingga baik untuk sistem imun</li>\r\n<li>Meningkatkan produksi insulin</li>\r\n<li>Membantu penyembuhan masalah stroke dan asma</li>\r\n<li>Mengatasi keluhan asam urat dan osteoarthiritis</li>\r\n<li>Mempercepat penyembuhan luka(luka luar maupun luka dalam)</li> \r\n<li>Meningkatkan fungsi ginjal</li>\r\n<li>Mencegah penyumbatan kolesterol dlm darah</li>\r\n<li>meningkatkan vitalitas kaum pria</li>\r\n<li>Memperbaiki dan menumbuhkan sel baru.</li>\r\n<li>Mencerdaskan otak anak pada kandungan.</li>\r\n<li>Melancarkan peredaran darah.</li>\r\n<li>Memperbaiki siklus haid.</li>\r\n<li>Mengatasi sumbatan jantung.</li>\r\n<li>Regenerasi sel beta pankreas.</li>\r\n<li>Menghentikan pertumbuhan kanker.</li>\r\n<li>Bersifat Repair</li>\r\n<li>Dll</li>    ', 'Rp. 500.000'),
('prod_Zoexury', 'Zoexury', 'image/IMG_20170531_004440.jpg', '</br></br>\r\nZoexury memiliki komposisi "PALING LENGKAP" diantara minuman antioksidan yang ada dipasaran saat ini.\r\nKemasan botol plastik yang aman membuat zoexury mudah dibawa kemanapun anda pergi tanpa takut pecah tatkala jatuh. Kemasan Zoexury 1000ml botol putih berbingkai warna anggur yang menandakan komposisi buahnya sangat lengkap sebagai nutrisi kesehatan yang\r\nhandal untuk membantu menjaga kesehatan keluarga anda, dengan izin ALLAH dan kombinasi herbal kami, mampu mengobati Stroke, asam urat,\r\ndiabetes, impotensi, kanker rahim, mioma, batu ginjal, aman untuk menjaga lever dll.\r\n<br/><h2>Kandungan Dalam Zoexury</h2>\r\n\r\n<ul>\r\n  <li>Blueberry</li>\r\n  <li>Cranberry</li>\r\n  <li>Grape seed</li>\r\n  <li>Rosella</li>\r\n  <li>Hawthorn Berry</li>\r\n  <li>Goji Berry</li>\r\n  <li>Acai Berry</li>\r\n  <li>Acerola</li>\r\n  <li>Tomato Extract</li>\r\n  <li>Green Tea</li>\r\n  <li>Prune</li>\r\n  <li>Maqui berry</li>\r\n  <li>Passion fruit</li>\r\n  <li>Kiwi, dsb</li>\r\n</ul>\r\n\r\n<br/><h2>Manfaat zoexury</h2> \r\n<ul>\r\n  <li>Anti oksidan terlengkap (optimal antioxidants)</li>\r\n  <li>Menormalkan tekanan darah</li>\r\n  <li>Mengatur kekentalan darah</li>\r\n  <li>Mencegah penyempitan pembuluh darah</li>\r\n  <li>Merawat kesehatan jantung</li>\r\n  <li>Meredakan kegelisahan dan insomnia</li>\r\n  <li>Memperlancar aliran darah</li>\r\n  <li>Membersihkan saluran pencernaan</li>\r\n  <li>Meluruhkan batu ginjal</li>\r\n  <li>Menetralisir racun</li>\r\n  <li>Menyeimbangkan kadar gula darah</li>\r\n  <li>Memulihkan stamina</li>\r\n  <li>Menjaga kesehatan organ penting tubuh</li>\r\n  <li>Memulihkan fungsi liver</li>\r\n  <li>Melancarkan ekskresi</li>\r\n  <li>Menjaga kesehatan tulang dan sendi</li>\r\n  <li>Menurunkan kolestrol dan asam urat</li>\r\n  <li>Mempercepat penyembuhan luka</li>\r\n</ul> ', 'Rp. 350.000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
