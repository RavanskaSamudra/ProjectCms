-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2024 at 09:23 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(32, 'nb-9096', '20241119015747.jpg'),
(33, 'NIKE AIR Force 1 ', '20241119060825.jpg'),
(34, 'Stussy', '20241119071641.jpg'),
(35, 'polo', '20241119071928.jpg'),
(36, 'Xerofang Vandal skin', '20241119072908.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(11, 'Sneakers'),
(12, 'Clothes');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `judul_website` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_website` text COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `no_wa` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'ASB', 'Halo selamat datang di blog saya,mungkin ini simple tapi kalian bisa request di ig di bawah okeyyy', 'https://www.instagram.com/ravanska_adhityasa/', 'https://www.facebook.com/rose.pasta.397?mibextid=ZbWKwL', 'antoniussamudra2@gmail.com', 'Jalan serayu 1,blok c2.23, Perum Bumi Saraswati, Perum Saraswati, Gaum, Kec. Tasikmadu, Kabupaten Karanganyar, Jawa Tengah 57722', 'https://bit.ly/m/Ravenskyzz');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `judul` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` int NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(47, ' Nike Air Jordan 1 Retro High OG Dark Mocha', 'Nike Air Jordan 1 Retro High OG \"Dark Mocha\" menghadirkan kombinasi desain klasik dan modern yang memikat, dengan warna netral berupa cokelat gelap, hitam, dan putih yang cocok untuk segala gaya. Sepatu ini dibuat dari material premium, seperti kulit halus pada toe box dan panel samping, serta suede cokelat pada bagian tumit, menciptakan tampilan elegan dan mewah.\r\n\r\nKeunggulannya terletak pada desain versatile yang mudah dipadukan dengan berbagai outfit, mulai dari streetwear hingga smart casual. Selain itu, eksklusivitasnya membuat sepatu ini sangat diminati oleh kolektor, sekaligus memiliki nilai jual yang tinggi di pasar resale. Sol putih yang empuk dan outsole hitam yang tahan lama memastikan kenyamanan sekaligus daya tahan optimal.\r\n\r\nJika kamu ingin tampil stylish sambil memiliki sepatu bernilai koleksi tinggi, Dark Mocha adalah pilihan sempurna!', '20241216101430.jpg', '-Nike-Air-Jordan-1-Retro-High-OG-Dark-Mocha', 11, '2024-12-16', 'admin'),
(48, 'Converse Chuck Taylor All Star 70s High Leather Black White Original', 'Di tahun 1970, Chuck Taylor All Star berubah menjadi salah satu sneakers basket terbaik yang pernah ada. Chuck 70 merayakan warisan tersebut dengan menyatukan detail yang berasal dari arsip-arsip dengan pembaharuan modern. Bantalan insole Ortholite dan jahitan lidah bersayap menjadikan kenyamanan jauh lebih baik lagi. Midsole egret glossy dan patch bintang pergelangan kaki yang khas menguarkan gaya vintage dan ikonik dari sepatu ini. Terbaharui dalam warna-warna arsip pada kanvas premium.\r\n\r\nFitur dan Benefit\r\nSepatu high-top dengan upper kanvas premium dalam warna musiman\r\nJahitan tongue bersayap untuk dukungan tambahan\r\nPatch bintang pergelangan kaki dan plat lisensi\r\nTerinspirasi dari arsip, midsole egret glossy\r\nBantalan insole Ortholite\r\n\r\nHarap diperhatikan bahwa ini adalah produk unisex yang mengikuti ukuran pria (dalam US).\r\nOleh karena itu, mohon mengacu pada size chart yang tersedia di bawah ini sebagai referensi ukuran Anda.\r\n\r\nMengenai Ukuran: Selisih 1-2 cm mungkin terjadi dikarenakan proses pengembangan dan produksi.\r\n\r\nMengenai Warna: Warna sesungguhnya mungkin dapat berbeda. Hal ini dikarenakan setiap layar memiliki kemampuan yang berbeda-beda untuk menampilkan warna, kami tidak dapat menjamin bahwa warna yang Anda lihat adalah warna akurat dari produk tersebut.sssssss', '20241216101819.jpg', 'Converse-Chuck-Taylor-All-Star-70s-High-Leather-Black-White-Original', 11, '2024-12-16', 'admin'),
(49, 'qolati Mens Cargo Pants Water Resistants Ripstop Sweatpants', '**Qolati Men\'s Cargo Pants Water Resistant Ripstop Sweatpants** adalah celana serbaguna yang menggabungkan gaya modern dengan fungsionalitas tinggi. Terbuat dari bahan ripstop tahan sobek dan dilengkapi fitur tahan air, celana ini cocok untuk berbagai aktivitas outdoor seperti hiking, camping, atau traveling. Dengan desain cargo yang dilengkapi banyak kantong praktis, serta pinggang elastis yang nyaman, celana ini memastikan fleksibilitas dan kenyamanan maksimal.  \r\n\r\nCocok dipadukan dengan t-shirt, hoodie, atau jaket, celana ini menjadi pilihan tepat untuk gaya kasual maupun sporty. Tampil stylish sambil tetap fungsional, **Qolati Men\'s Cargo Pants** adalah solusi sempurna untuk pria aktif. **Dapatkan sekarang dan tingkatkan gaya serta kenyamananmu!', '20241216104428.jpg', 'qolati-Mens-Cargo-Pants-Water-Resistants-Ripstop-Sweatpants', 12, '2024-12-16', 'admin'),
(50, 'Nike x Stussy The Wide World Tribe White Tee', '**Nike x Stüssy The Wide World Tribe White Tee** adalah kaos kolaborasi antara dua brand streetwear legendaris yang memadukan desain grafis bold dengan gaya kasual yang nyaman. Terbuat dari bahan katun premium, kaos ini menawarkan kenyamanan maksimal sepanjang hari, dengan tampilan warna putih bersih yang mudah dipadukan dengan berbagai celana. Grafis *The Wide World Tribe* yang ikonik, menampilkan logo Nike dan Stüssy, menjadikannya sebagai statement piece yang wajib dimiliki para penggemar streetwear.  \r\n\r\nDengan desain yang unik dan terbatas, **Nike x Stüssy The Wide World Tribe White Tee** menjadi pilihan tepat untuk tampil stylish dan beda. Jangan lewatkan kesempatan untuk memiliki kaos ikonis ini!s', '20241216120823.jpg', 'Nike-x-Stussy-The-Wide-World-Tribe-White-Tee', 12, '2024-12-16', 'admin'),
(51, 'G DRAGON PEACEMINUSONE x NIKE AIR FORCE 1 PARANOISE ORIGINAL', 'Dengan serangkaian alat kreatif di ujung jarinya, seniman visioner G-Dragon bertekad menciptakan utopianya sendiri. Meski ada kekuatan yang menghalangi utopianya, dia tetap berharap bahwa suatu hari mimpinya akan menjadi kenyataan. Saat ia terus berkreasi, harapannya pun semakin besar, dan kini ia membagikan harapan tersebut di bawah lapisan cat putih, dalam iterasi baru AF-1 Low x PEACEMINUSONE.\r\n\r\n\r\nSeiring waktu, cat putih di bagian atas sepatu akan hilang dan memperlihatkan desain gaya bebas G-Dragon, yang mewakili keyakinannya pada penciptaan. Dengan logo label fesyennya, PEACEMINUSONE, di bagian lidahnya, AF-1 ini juga menampilkan coretan cat pada midsole, tali ekstra tebal, dan cetakan grafis khusus pada lapisan kaus kaki.', '20241216121617.jpg', 'G-DRAGON-PEACEMINUSONE-x-NIKE-AIR-FORCE-1-PARANOISE-ORIGINAL', 11, '2024-12-16', 'admin'),
(52, 'Nike x Peaceminusone G-Dragon Long Sleeve Black', 'Nike x Peaceminusone G-Dragon Long Sleeve Black adalah kolaborasi eksklusif antara Nike dan Peaceminusone, brand milik G-Dragon, yang menghadirkan long sleeve stylish dengan desain khas streetwear. Terbuat dari bahan katun premium, kaos ini menawarkan kenyamanan maksimal sepanjang hari. Dengan grafis ikonik seperti bunga dan elemen visual lainnya, kaos ini mencerminkan filosofi unik dari G-Dragon dan cocok untuk kamu yang ingin tampil dengan gaya urban yang penuh karakter.\r\n\r\nTersedia dalam warna hitam yang elegan, Nike x Peaceminusone G-Dragon Long Sleeve Black sangat versatile, mudah dipadukan dengan berbagai jenis celana, baik itu jeans atau jogger. Jangan lewatkan kesempatan untuk memiliki item fashion eksklusif ini dan tunjukkan gaya unikmu dengan sentuhan kolaborasi legendaris!s', '20241216122601.jpg', 'Nike-x-Peaceminusone-G-Dragon-Long-Sleeve-Black', 12, '2024-12-16', 'admin'),
(53, 'WAVE TO EARTH 0.1 FLAWS AND ALL T SHIRT TEE', '**Kaos Band Wave to Earth 0.1 Flaws and All T-Shirt Tee** hadir dengan desain grafis yang unik dan penuh makna, menggambarkan tema *Flaws and All*, yang merayakan ketidaksempurnaan sebagai bagian dari perjalanan hidup. Terbuat dari bahan katun berkualitas tinggi, kaos ini nyaman dipakai sehari-hari dan memberikan tampilan kasual yang edgy. Desain bold dan artistik dari band **Wave to Earth** membuat kaos ini menjadi pilihan yang tepat untuk kamu yang ingin tampil beda dengan gaya yang berani.  \r\n\r\nDengan warna netral yang mudah dipadukan dengan berbagai outfit, kaos ini cocok untuk hangout santai atau menunjang penampilan streetwear kamu. Tampil keren dengan kaos yang punya filosofi kuat, **Wave to Earth 0.1 Flaws and All T-Shirt Tee** adalah pilihan fashion yang wajib dimiliki!', '20241216124026.jpg', 'WAVE-TO-EARTH-0.1-FLAWS-AND-ALL-T-SHIRT-TEE', 12, '2024-12-16', 'admin'),
(54, 'New Balance 2002R Protection Pack - Mirage Grey', '**New Balance 2002R Protection Pack - Mirage Grey** hadir dengan desain ikonik yang memadukan tampilan retro dan sentuhan modern. Sepatu ini menampilkan detail *unfinished* dengan lapisan suede premium yang memberikan kesan *worn-in look* yang unik dan penuh karakter. Warna **Mirage Grey** yang netral membuatnya mudah dipadukan dengan berbagai gaya, baik untuk tampilan kasual maupun streetwear.  \r\n\r\nDilengkapi dengan teknologi **ABZORB midsole** dan **N-ergy outsole**, sepatu ini menawarkan kenyamanan maksimal, meredam guncangan, dan cocok digunakan sepanjang hari. Dengan material berkualitas tinggi dan desain yang artistik, **New Balance 2002R Protection Pack - Mirage Grey** adalah pilihan sempurna untuk kamu yang ingin tampil stylish dan berbeda.', '20241217010019.jpg', 'New-Balance-2002R-Protection-Pack---Mirage-Grey', 11, '2024-12-17', 'admin'),
(55, 'adidas spezial earth strata', '\r\nAdidas Spezial Earth Strata adalah sepatu yang menggabungkan desain klasik dengan elemen modern, menawarkan tampilan retro yang elegan dengan sentuhan material dan detail terkini. Terbuat dari bahan berkualitas tinggi, sepatu ini memberikan kenyamanan maksimal dan daya tahan yang luar biasa. Warna earthy yang natural membuatnya mudah dipadukan dengan berbagai gaya pakaian, baik untuk tampilan kasual sehari-hari maupun streetwear.\r\n\r\nDengan sol karet yang tahan lama, Adidas Spezial Earth Strata cocok digunakan untuk berbagai aktivitas, memberi kenyamanan sepanjang hari. Sepatu ini adalah pilihan sempurna bagi kamu yang menginginkan kombinasi gaya retro dan kenyamanan modern dalam satu paket', '20241217042433.jpg', 'adidas-spezial-earth-strata', 11, '2024-12-17', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(70) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`) VALUES
(11, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(12, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Kontributor'),
(13, 'agung', 'agung', 'e59cd3ce33a68f536c19fedb82a7936f', 'Kontributor'),
(14, 'candra', 'candra', '2614ae3c375c3095dc536283672548bd', 'Kontributor'),
(15, 'adhitya', 'samudra', '8515a4039f88efec072208ba8c859e10', 'Kontributor');

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
  MODIFY `id_caraousel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
