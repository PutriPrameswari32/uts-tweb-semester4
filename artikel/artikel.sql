-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 04:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `redaksi` text NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `foto`, `judul`, `penulis`, `tgl`, `redaksi`, `konten`) VALUES
(2, '5-Tips-for-Java-beginners-to-level-up-their-programming-skills.jpg', 'Kenapa Java Programming Sangat Dibutuhkan?', 'Putri Prameswari', '2021-04-06', 'Sebagian dari kita mungkin sudah akrab dengan istilah Java Programming bukan? Nah, sebelum kita mengetahui lebih lanjut soal Java Programming, alangkah baiknya kita bahas terlebih dahulu apa itu bahasa pemrograman. ', 'Apa Itu Bahasa Pemrograman Java?\r\nTernyata, jumlah bahasa pemrograman ini sangat banyak. Tentu saja developer atau programmer tidak menggunakan seluruh bahasa pemrograman yang ada. Mereka hanya menggunakan 1 atau 2 bahasa pemrograman dalam membangun atau mengembangkan software.\r\n<br><br>\r\nMenurut Tiobe, salah satu lembaga riset yang telah beberapa tahun berupaya membuat peringkat bahasa pemrograman populer dunia yang diwujudkan dalam bentuk TIOBE Programming Community Index edisi bulan Desember 2014, Java masih menjadi bahasa pemrograman terpopuler.\r\n<br><br>\r\nKemudian PYPL Popularity of Programming Language juga merilis 11 bahasa pemrograman yang banyak dipakai sampai pada bulan November 2014 dan menunjukan Java berada di posisi pertama.\r\n<br><br>\r\nBahasa Pemrograman Java terlahir untuk pertama kalinya dari sebuah proyek asuhan SUN MICROSYSTEM yang dimotori oleh Patrick Naughton, Mike Sheridan, James Gosling dan Bill Joy beserta dengan sembilan rekan mereka dari SUN MICROSYSTEM.\r\n<br><br>\r\nJava sebagai salah satu bahasa pemrograman yang sudah ada sejak era 1990-an, kini semakin berkembang dan melebarkan dominasinya di berbagai bidang. Salah satu penggunaan terbesar Java adalah dalam pembuatan aplikasi native untuk Android. Selain itu Java pun menjadi pondasi bagi berbagai bahasa pemrograman seperti Kotlin, Scala, Clojure, Groovy, JRuby, Jython, dan lainnya yang memanfaatkan Java Virtual Machine sebagai rumahnya.\r\n<br><br>\r\nJava pun akrab dengan dunia sains dan akademik. Cukup banyak akademisi di Indonesia yang menggunakan Java sebagai alat bantu untuk menyelesaikan skripsi atau tugas akhir dengan berbagai topik yang didominasi kecerdasan buatan, data mining, enterprise architecture, aplikasi mobile, dan lainnya. Di dunia web development sendiri, Java memiliki berbagai web framework unggulan seperti Spring, Play Framework, Spark, Jakarta Struts, dan Java Server Pages.\r\n<br><br>\r\nJava menjadi salah satu bahasa pemrograman terpopuler bukan karena tanpa alasan, bahasa pemrograman ini memiliki beberapa kelebihan seperti misalnya bisa berjalan di sistem operasi yang berbeda-beda, kemudian bahasa pemrograman ini termasuk kedalam pemrograman OOP (pemrograman orientasi objek) sehingga programer lebih mudah dalam menyusun program menggunakan bahasa ini, selain itu bahasa ini juga memiliki library yang lengkap sehingga akan sangat memudahkan programer. Dan saat ini merupakan era dimana smartphone Android sangat banyak digunakan. Aplikasi dalam smartphone Android dibangun menggunakan bahasa Java, sehingga banyak juga programer-programer yang menggunakan bahasa ini karena memang sedang banyak dibutuhkan.\r\n<br><br>\r\nMungkin Anda akan bertanya-tanya, kenapa sih harus mempelajari pemrograman java bagi kita-kita yang masih awam. Beberapa penjelasan tentang Java dari situs java.lyracc.com di bawah ini mungkin bisa memberi pencerahan kepada kita semua.\r\n<br><br>\r\nBahasa pemrograman lain yang telah ada sebelum Java lahir sudah merupakan bahasa yang baik dan mudah dipelajari oleh programmer profesional. Akan tetapi, para programmer ini menginginkan sesuatu yang baru yang memiliki banyak hal yang menyelesaikan masalah mereka. Utamanya adalah keamanan kode mereka. Hal ini melahirkan pikiran yang revolusioner untuk menemukan bahasa pemrograman lain yang disebut Java. Tidak hanya keamanan tapi juga beberapa hal yang sering disebut sebagai Java-Buzzwords. Kata-kata ini menjelaskan berbagai fitur tambahan dan beberapa hal yang membuat Java demikian sukses dan diterima oleh dunia perangkat lunak.\r\n<br><br>\r\nSeperti diuraikan sebelumnya, Java lahir dari suatu pemikiran mendalam akan bahasa pemrograman yang ada pada saat itu, seperti C dan C++. Hal ini akan memudahkan programmer profesional untuk dapat mengerti lebih jelas tentang Java, fungsionalitas, dan lain sebagainya apabila ia memiliki pengetahuan dasar tentang C++ dan konsep pemrograman berorientasi objek. Tujuannya agar konsep dasar dari teknologi Java dapat dimengerti dengan mudah, dan programmer dapat segera menghasilkan sesuatu sedini mungkin. Tidak hanya ini, penemu Java memastikan bahwa Java juga bermula dari bahasa pemrograman dasar yang sudah ada pada saat itu. Kemudian mereka membuang berbagai fitur yang rumit dan membingungkan.\r\n<br><br>\r\nBahasa pemrograman Java didesain sejak awal untuk menjadi bahasa yang berorientasi objek. Setelah kira-kira 30 tahun, akhirnya teknologi objek menjadi kenyataan dan diterima oleh sebagian besar komunitas pemrograman. Konsep berorientasi objek memungkinkan pembuatan software yang kompleks, berbasis network, sehingga dapat disimpulkan bahwa teknologi Java menghasilkan platform pembuatan perangkat lunak yang baik dan efisien serta berorientasi objek.'),
(3, '09-25-09-images-60d14a6106310e0cc376db32.jpg', 'Cara Jitu agar Komputer/Laptop Tidak Lemot', 'Admin Tampan', '2021-01-23', 'Lantas langkah apa yang musti Anda lakukan ketika mengetahu perangkat Anda lemot?', 'Sebelum mengawali tips agar komputer (PC) dan laptop tidak lemot, Penulis akan membahas terlebih dahulu prihal apa-apa saja penyebab mengapa perangkat tidak lemot.<br>\r\n\r\nBagi Anda pengguna komputer maupun laptop, sejatinya Anda pastinya merasakan dalam kurun waktu tertentu kedua jenis perangkat yang Anda gunakan terasa lambat atau lemot. Anda merasa apa yang Anda alami jauh berbeda disaat awal Anda memiliki perangkat itu saat masih baru dimana aktivitas pada perangkat terasa cepat dan ringan (akses data).<br>\r\n\r\nFaktanya apa yang Anda rasakan merupakan suatu yang umum terjadi dimana performa baik komputer maupun laptop seiring waktu menurun. Namun penurunan performa bukanlah dilandasi oleh akumulasi perangkat yang termakan umur, melainkan disebabkan oleh beberapa faktor, di antaranya :<br>\r\n\r\n<b>1. Kapasitas harddisk (media penyimpanan) semakin penuh</b>\r\nSeiring penggunaan perangkat maka umum yang terjadi ialah beban yang diemban perangkat semakin bertambah banyak. Hal ini merupakan sesuatu yang wajar dimana saat (perangkat) kondisi baru media penyimpanan hanya (umum) berisikan sistem operasi saja sehingga Anda merasakan kendala atau beban kinerja perangkat masih sangat kecil.<br>\r\n\r\nKetika Anda mulai menginstall berbagai macam aplikasi sesuai kebutuhan Anda berikut menyimpan kesemua data-data dalam perangkat maka otomatis beban kinerja perangkat akan bertambah dan membutuhkan waktu lebih untuk mengaksesnya.<br>\r\n<b>2. Virus komputer</b>\r\nSeperti Anda ketahui virus komputer merupakan masalah klasik baik komputer maupun laptop alami lepas dari basis sistem operasi masing-masing perangkat.<br>\r\n\r\nPeran virus komputer sangat berperan besar terhadap memburuknya kinerja perangkat Anda miliki karena beberapa virus mampu memodifikasi data pada sistem operasi agar bekerja lebih keras (tidak normal). Bahkan ada virus komputer yang dengan sengaja merusak data pada sistem operasi agar tidak berjalan, alhasil Anda tidak bisa berbuat apa-apa selain menginstall ulang sistem operasi perangkat.<br>\r\n\r\n<b>3. Spesifikasi perangkat tidak memadai</b>\r\nDari beberapa permasalahan mengapa perangkat Anda menjadi lemot ialah disebabkan oleh tidak memadainya spesifikasi perangkat Anda.<br>\r\n\r\nKebanyakan kasus perangkat menjadi lemot ialah karena tak sedikit pemilik memaksakan perangkatnya tidak sesuai dengan rekomendasi yang aplikasi butuhkan. <br>\r\n\r\nAlhasil memang saat awal penggunaan sebagai pengguna Anda tidak merasakan bahwa perangkat Anda bekerja ekstra keras. Namun ketika perangkat diminta untuk mengerjakan aktivitas yang berat semisal editing foto dan video, rendering 3D, gaming, dan sebagainya, perangkat Anda bekerja sampai pada limitnya dan menyebabkan performa menurun drastis.<br>\r\n\r\nLantas langkah apa yang musti Anda lakukan ketika mengetahu perangkat Anda lemot?\r\n\r\n'),
(4, 'ss-di-laptop-1-60ba3f148ede484086288ee2.jpg', 'Cara SS di Laptop dan Mengolah Hasil Tangkapan Layar', 'Prames', '2020-07-24', 'Bagi kamu yang sudah terbiasa bekerja menggunakan laptop, mengambil gambar tangkapan layar bukan perkara sulit. Jadi cara ss di laptop barangkali terlalu receh bagimu. ', '<b>Menangkap Gambar yang Muncul di Layar Komputer</b><br><br>\r\nSesuai dengan istilahnya, untuk menangkap gambar pada layar komputer, kita pun dapat menggunakan tombol print screen (disingkat PrtSc).<br><br>\r\n\r\nPada keyboard laptop posisinya di kanan atas, antara F12 dan PauseBreak. Sedangkan di keyboard desktop, lokasi tombol print screen tergabung bersama kelompok tombol angka. Lebih baik berpatokan pada nama (PrtSc atau PtSc) daripada lokasi. Yang jelas tombol ini biasanya berada di kanan atas.<br><br>\r\n\r\nCukup tentukan tampilan layar yang hendak dijadikan gambar, kemudian tekan tombol PrtSc tadi. Gambar pada layar otomatis tersalin.<br><br>\r\n\r\n<b>Di Mana Menempel Hasil Tangkapan Layar Komputer?</b><br><br>\r\nSetelah gambar pada layar di-copy, ke mana sebaiknya menempelkan hasilnya? Jawabnya tergantung kebutuhanmu. Tapi idealnya hasil tangkapan ini dijadikan file gambar dulu sebelum disisipkan ke dalam dokumen.<br><br>\r\n\r\nUntuk itu, sebaiknya kamu menggunakan program Paint yang pasti ada di sistem operasi Windows (dengan asumsi kamu menggunakan Windows). Hm, masa pengguna Linux atau Mac cari info SS di laptop, hehe.<br><br>\r\n\r\nUntuk Windows 10, kamu cukup ketik \"Paint\" di kolom pencarian sebelah kiri bawah (Type here to search), nantinya akan muncul program atau aplikasi Paint di hasil pencarianmu. Klik Paint (bukan Paint 3D), maka kertas kerja baru akan terbuka.<br><br>');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `foto`) VALUES
(2, 'image_4.png'),
(3, 'image_7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `hobi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `foto`, `nama`, `nim`, `kelas`, `hobi`) VALUES
(1, 'profil.png', 'Prames', '11950125164', 'G', 'makan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`foto`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
