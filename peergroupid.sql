-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2021 pada 07.58
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peergroupid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `cover` varchar(255) NOT NULL,
  `sumber_cover` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `text`, `cover`, `sumber_cover`) VALUES
(1, 'Yuk, Belajar Memulai Karir di Dunia Startup', 'Muhammad Perwira Hutama A.', '<p class=\"paragraph\">Perusahaan startup (perusahaan rintisan) sedang populer belakangan ini. Karena, perusahaan rintisan berbasis tekonologi dan digital ini menyediakan ragam aplikasi dan layanan yang memudahkan kehidupan masyarakat. </p>\r\n                    <p class=\"paragraph\">Dari sisi lain, perusahaan startup  juga merupakan tempat generasi muda berkumpul dengan lingkungan kerja menyenangkan, jam kerja fleksibel, serta prospek kerja menjanjikan. </p>\r\n                    <p class=\"paragraph\">Dengan berbagai kelebihan seperti itu, tak heran banyak orang bermimpi menjadi bagian dari perusahaan startup. Mimpi tidak akan terjadi tanpa persiapan sehingga orang-orang mulai berlomba-lomba mengembangkan potensi diri mereka. Captainers, pasti salah satunya, kan? </p>\r\n                    <p class=\"paragraph\">Nah, karena itu, kita akan membagikan beberapa hal yang harus kamu siapkan untuk meniti karir di tempat impian banyak orang. Yuk, langsung saja kita lihat apa yang perlu dipersiapkan untuk menjadi bagian dari stratup. Check this out! </p>\r\n                    <h5>1.	Harus Bisa Beradaptasi</h5>\r\n                    <p class=\"paragraph text-list-paragraph\">Captainers perlu tahu, nih, kalau lingkungan kerja di startup berbeda dengan perusahaan lainnya. Seperti yang dikatakan sebelumnya, perusahaan stratup biasanya didominasi oleh para generasi muda sehingga lingkungan kerja lebih menyenangkan, jam kerja fleksibel, dan arus kerjanya lebih cepat mengalami perubahan. </p>\r\n                    <p class=\"paragraph text-list-paragraph\">Lebih lanjut, dilansir dari The Balance Careers, perusahaan biasanya mencari orang-orang yang termotivasi dan dapat mempelajari berbagai hal secara mandiri. Dengan demikian, kamu harus memiliki inisiatif untuk mengerjakan sesuatu tanpa perintah atasan atau orang lain. </p>\r\n                    <p class=\"paragraph text-list-paragraph\">Jadi, sebelum memutuskan bergabung dengan perusahaan startup, kamu harus bisa beradaptasi dengan lingkungan kerja yang tidak seperti biasanya. Bisa, kan, Capt? Pasti bisa! </p>\r\n                    <h5>2.	Tingkatkan Kemampuan</h5>\r\n                    <p class=\"paragraph text-list-paragraph\">Sebelum kamu melamar pekerjaan ke perusahaan seperti ini, kamu harus memahami dulu, nih, seperti apa posisi yang kamu tuju tersebut. Setelah itu, kamu bisa buat strategi untuk meningkatkan kemampuan dan pengetahuan yang bisa mendorong kamu mencapai tujuan itu. </p>\r\n                    <p class=\"paragraph text-list-paragraph\">Gunakan teknologi yang sudah semakin berkembang sekarang ini untuk mengembangkan kemampuan kamu. Sudah banyak startup gratis yang menyediakan berbagai pelatihan secara daring seperti Udemy, Coursera, dan Hacktiv8. </p>\r\n                    <p class=\"paragraph text-list-paragraph\">Yuk, mulai gunakan kemajuan teknologi untuk kembangkan kemampuan kamu. Semakin meyakinkan kemampuan yang kamu miliki, maka semakin besar juga peluang meraih karir yang diimpikan. Semangat, Captainers! </p>\r\n                    <h5>3.	Perluas Relasi</h5>\r\n                    <p class=\"paragraph text-list-paragraph\">Di zaman sekarang, relasi merupakan salah satu hal penting yang dapat mendorong kita meniti karir, termasuk di bidang startup. Dengan memperbanyak relasi, kita juga memperluas jangkauan karir yang kita inginkan.</p>\r\n                    <p class=\"paragraph text-list-paragraph\">Ada banyak cara memperluas relasi, salah satunya memanfaatkan LinkedIn, sebuah platform profesional bagi pencari kerja dan recruiter. LinkedIn menyediakan banyak informasi yang berhubungan dengan karir atau pekerjaan. Mulai dari berbagai tip dan trik, cerita pengalaman kerja, sampai lowongan pekerjaan.</p>\r\n                    <p class=\"paragraph text-list-paragraph\">Lewat LinkedIn kamu bisa mempelajari perusahaan tujuanmu dan mencari relasi dengan orang-orang didalamnya. Sebelum pergi ke suatu tujuan, Captainers tentu harus mengenal bagaimana keadaan lingkungan dan orang-orang di sekitarnya, kan? </p>\r\n                    <p class=\"paragraph text-list-paragraph\">Mulai sekarang, Captainers bisa langsung buat akun LinkedIn-nya dan terus kembangkan relasi didalamnya, ya! </p>\r\n                    <h5>4.	Mulailah Dengan Curriculum Vitae (CV) yang Menarik</h5>\r\n                    <p class=\"paragraph text-list-paragraph\">Yap, setelah Captainers yakin ingin berkarir di dunia startup, langkah selanjutnya yang tidak kalah penting harus kamu lakukan adalah membuat atau memperbaharui CV. CV merupakan informasi data seseorang seperti identitas diri, pendidikan, pengalaman, dan kemampuan yang dimiliki. </p>\r\n                    <p class=\"paragraph text-list-paragraph\">Hal pertama yang akan dilirik recuiter adalah CV. Semakin menarik CV yang kamu lampirkan, maka semakin terbuka kesempatan menjadi bagian dari mereka. Seorang Profesional Human Resources and Senior Employer Branding Lazada Indonesia, Samuel Ray, mengungkapkan CV yang baik tidak perlu panjang dan bertele-tele. Hal yang paling penting adalah kamu dapat menjelaskan seluruh pengalaman kamu dengan kalimat yang singkat dan jelas, serta bahasa yang baik. </p>\r\n                    <p class=\"paragraph text-list-paragraph\">Selain itu, pastikan CV kamu sudah berbasis Applicant Tracking System (ATS), ya! Agar CV-mu tidak terlewat ketika proses penyaringan oleh sistem yang digunakan perusahaan. </p>\r\n                    <p class=\"paragraph text-list-paragraph\">Nah, itu dia keempat hal yang harus Captainers siapkan sebelum melanjutkan langkah menuju perusahaan startup impian. Jangan lama-lama, segera siapkan dirimu. Nantikan berbagai tip menarik dari Peer Group ID lainnya, ya!</p>', 'header artikel.jpg', 'Pixabay.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
