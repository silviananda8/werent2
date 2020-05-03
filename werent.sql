-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2020 pada 09.32
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `werent`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `artikel` text NOT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `thumbnail`, `artikel`, `tanggal`) VALUES
(1, 'Gunung Bromo', '220cd-280px-mount_bromo_at_sunrise-_showing_its_volcanoes_and_mount_semeru_-background-.jpg', '<p>\n	<span style=\"color: rgba(0, 0, 0, 0.87); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 13px;\">Gunung Bromo atau dalam bahasa Tengger dieja &quot;Brama&quot;, adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru. Bentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi. Ia mempunyai sebuah kawah dengan garis tengah &plusmn; 800 meter dan &plusmn; 600 meter. Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah Bromo.<img alt=\"\" src=\"https://drive.google.com/open?id=14XwxmyRkeN7x_9-3PF1Uc8BQE0MkrckO\" /></span></p>\n', '2020-04-30 13:26:32'),
(8, 'Destinasi Traveling Murah Cocok buat Mahasiswa', 'dbfe8-traveling-murah-wp-600x426.jpg', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Bagi sebagian mahasiswa, mencari destinasi traveling murah menjadi salah satu ritual wajib sebelum merencanakan liburan karena bujet yang pas-pasan. Kalau gak dipersiapkan secara matang, bisa-bisa keuangan bulanan jadi kacau dan dompet makin tipis. Terus tempat liburan kayak apa nih yang bisa dikunjungi?</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Udah pusing urusin tugas kuliah dan masalah organisasi, pasti para mahasiswa membutuhkan sesuatu yang menyegarkan pikiran. Tapi bukan melulu ke mal, melainkan destinasi liburan yang seru dan asik dikunjungi bersama teman-teman. Sayangnya keinginan tersebut gak jarang menemui banyak halangan, salah satunya karena terbatasnya uang.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Menjadi seorang mahasiswa yang tinggal di Indonesia membutuhkan kemampuan pengelolaan uang yang baik, apalagi buat yang merantau dari kota lain. Kita harus pintar mengatur keuangan supaya urusan kuliah, makan serta hiburan dapat terbagi secara rata, kalau ada sisa bisa ditabung untuk keperluan bulan selanjutnya.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Kalau kamu hanya punya bujet sekitar Rp 750 doang, kebetulan banget nih ada destinasi liburan yang patut dicoba. Bukan cuma untuk mahasiswa, kamu-kamu yang udah kerja juga bisa mengunjungi tempat ini lho kalau punya uang terbatas.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Langsung aja kita simak 5 destinasi traveling murah buat mahasiswa yang cuma punya bujet Rp 750 ribu berikut ini.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	Baca juga:&nbsp;<a href=\"https://lifepal.co.id/media/tempat-wisata-yogyakarta-sukses-hidupkan-kenangan/\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; color: rgb(29, 102, 222); text-decoration-line: none; background-color: transparent;\" target=\"_blank\"><span style=\"box-sizing: border-box; font-weight: bolder;\">20 Tempat Wisata Yogyakarta yang Bakal Bangkitkan Kenanganmu</span></a></p>\n<h2 style=\"box-sizing: border-box; margin: 20px 0px; line-height: 1.5; font-size: 28px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">\n	<span style=\"box-sizing: border-box; font-weight: bolder;\">1. Karimunjawa, Jawa Tengah &ndash; Rp 750 ribu</span></h2>\n<figure aria-describedby=\"caption-attachment-94674\" class=\"wp-caption alignnone\" id=\"attachment_94674\" style=\"box-sizing: border-box; margin: 10px 0px 1rem; max-width: 100%; height: auto; font-size: 14px; position: relative; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; width: 640px;\">\n	<img alt=\"traveling murah\" class=\"wp-image-94674\" height=\"424\" sizes=\"(max-width: 640px) 100vw, 640px\" src=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/traveling-murah-karimun-jawa.jpg\" srcset=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014535/traveling-murah-karimun-jawa.jpg 500w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014535/traveling-murah-karimun-jawa-300x199.jpg 300w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014535/traveling-murah-karimun-jawa-450x298.jpg 450w\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;\" width=\"640\" /><figcaption class=\"wp-caption-text\" id=\"caption-attachment-94674\" style=\"box-sizing: border-box; font-size: 10px; color: rgb(153, 153, 153); width: 558px; opacity: 0.7; text-align: right; margin-top: 5px;\">Salah satu sudut Kepulauan Karimunjawa. (Shutterstock)</figcaption></figure>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Dikutip dari</span><a href=\"https://www.hipwee.com/travel/10-destinasi-wisata-yang-cocok-dikunjungi-mahasiswa-dengan-budget-pas-pasan/\" rel=\"nofollow noreferrer noopener\" style=\"box-sizing: border-box; color: rgb(29, 102, 222); text-decoration-line: none; background-color: transparent;\">&nbsp;<span style=\"box-sizing: border-box;\">Hipwee</span></a><span style=\"box-sizing: border-box;\">, destinasi traveling murah pertama yang bisa dikunjungi dengan modal Rp 750 ribu adalah kepulauan Karimunjawa. Kamu perlu menyeberang menaiki kapal kecil terlebih dahulu dari kota Jepara selama kurang lebih 6 jam, jadi siap-siap ya buat yang mengalami mabuk laut.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Di sini kamu akan disajikan pemandangan laut biru dan pantai pasir putih yang masih asri dan indah. Selain bermain-main di pantai kamu juga bisa melakukan snorkeling untuk melihat ikan di karang dasar laut. Nah, berikut ini rincian biayanya:</span></p>\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"border-collapse: collapse; width: 558px; margin-bottom: 1rem; color: rgb(33, 37, 41); display: block; overflow-x: auto; font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<colgroup style=\"box-sizing: border-box;\">\n		<col style=\"box-sizing: border-box;\" width=\"234\" />\n		<col style=\"box-sizing: border-box;\" width=\"100\" />\n	</colgroup>\n	<tbody style=\"box-sizing: border-box;\">\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Pengeluaran&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Pengeluaran</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Bujet&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Bujet</span></td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport bus dari Jakarta ke Pelabuhan Kartini Jepara (Via Semarang): &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport bus dari Jakarta ke Pelabuhan Kartini Jepara (Via Semarang):</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 185.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 185.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kapal dari Pelabuhan Kartini ke Pulau Karimunjawa: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kapal dari Pelabuhan Kartini ke Pulau Karimunjawa:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 90.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 90.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Penginapan per 2 malam: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Penginapan per 2 malam:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 300.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 300.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Snorkeling: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Snorkeling:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 50.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 50.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Biaya Makan per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Biaya Makan per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 125.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 125.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Total biaya: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Total biaya:</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 750.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Rp 750.000</span></td>\n		</tr>\n	</tbody>\n</table>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	Baca juga:&nbsp;<a href=\"https://lifepal.co.id/media/20-tempat-wisata-di-malang/\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; color: rgb(29, 102, 222); text-decoration-line: none; background-color: transparent;\" target=\"_blank\"><span style=\"box-sizing: border-box; font-weight: bolder;\">20 Tempat Wisata di Malang yang Kekinian Banget</span></a></p>\n<h2 style=\"box-sizing: border-box; margin: 20px 0px; line-height: 1.5; font-size: 28px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">\n	<span style=\"box-sizing: border-box; font-weight: bolder;\">2. &nbsp;Tanah Lot, Bali &ndash; Rp 664 ribu</span></h2>\n<figure aria-describedby=\"caption-attachment-94673\" class=\"wp-caption alignnone\" id=\"attachment_94673\" style=\"box-sizing: border-box; margin: 10px 0px 1rem; max-width: 100%; height: auto; font-size: 14px; position: relative; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; width: 641px;\">\n	<img alt=\"traveling murah\" class=\"wp-image-94673\" height=\"423\" sizes=\"(max-width: 641px) 100vw, 641px\" src=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/traveling-murah-tanah-lot.jpg\" srcset=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014533/traveling-murah-tanah-lot.jpg 500w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014533/traveling-murah-tanah-lot-300x198.jpg 300w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014533/traveling-murah-tanah-lot-450x297.jpg 450w\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;\" width=\"641\" /><figcaption class=\"wp-caption-text\" id=\"caption-attachment-94673\" style=\"box-sizing: border-box; font-size: 10px; color: rgb(153, 153, 153); width: 558px; opacity: 0.7; text-align: right; margin-top: 5px;\">Tanah Lot menyimpan keindahan tersendiri. (Shutterstock)</figcaption></figure>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Selanjutnya, ada Tanah Lot yang bisa jadi destinasi traveling murah kamu, biayanya sekitar Rp 664 ribu untuk sekalian bisa muter-muter di Bali. Walaupun udah banyak dikunjungi wisatawan, pesona Bali gak pernah pudar.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Tanah Lot menyajikan pemandangan yang cantik langsung ke laut, terutama ketika cuacanya sedang cerah. Tebingnya yang eksotis juga menambah daya tarik destinasi wisata yang satu ini.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Hal yang harus diperhatikan adalah kamu harus mematuhi rambu yang ada di sekitarnya sebab sangat berbahaya jika terpeleset dan jatuh ke bawah tebing yang tajam. Beberapa kali sempat ada korban jiwa akibat melanggar rambu itu. Berikut rincian biayanya:</span></p>\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"border-collapse: collapse; width: 558px; margin-bottom: 1rem; color: rgb(33, 37, 41); display: block; overflow-x: auto; font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<colgroup style=\"box-sizing: border-box;\">\n		<col style=\"box-sizing: border-box;\" width=\"234\" />\n		<col style=\"box-sizing: border-box;\" width=\"100\" />\n	</colgroup>\n	<tbody style=\"box-sizing: border-box;\">\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Pengeluaran&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Pengeluaran</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Bujet&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Bujet</span></td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kereta dari Jakarta ke Pelabuhan Ketapang (Via Malang): &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kereta dari Jakarta ke Pelabuhan Ketapang (Via Malang):</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 168.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 168.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kapal dari Pelabuhan Ketapang ke Pelabuhan Gilimanuk: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kapal dari Pelabuhan Ketapang ke Pelabuhan Gilimanuk:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 20.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 20.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport bus ke daerah Ubung: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport bus ke daerah Ubung:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 50.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 50.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Sewa motor per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Sewa motor per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 60.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 60.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Penginapan per malam: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Penginapan per malam:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 206.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 206.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Biaya Makan per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Biaya Makan per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 80.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 80.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Tiket masuk tempat wisata: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Tiket masuk tempat wisata:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 80.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 80.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Total biaya: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Total biaya:</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 664.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Rp 664.000</span></td>\n		</tr>\n	</tbody>\n</table>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	Baca juga:&nbsp;<a href=\"https://lifepal.co.id/media/tempat-wisata-di-bandung-terbaru/\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; color: rgb(29, 102, 222); text-decoration-line: none; background-color: transparent;\" target=\"_blank\"><span style=\"box-sizing: border-box; font-weight: bolder;\">20 Tempat Wisata di Bandung Terbaru yang Musti Didatangi</span></a></p>\n<h2 style=\"box-sizing: border-box; margin: 20px 0px; line-height: 1.5; font-size: 28px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">\n	<span style=\"box-sizing: border-box; font-weight: bolder;\">3. Malioboro, DIY &ndash; Rp 518 ribu</span></h2>\n<figure aria-describedby=\"caption-attachment-94672\" class=\"wp-caption alignnone\" id=\"attachment_94672\" style=\"box-sizing: border-box; margin: 10px 0px 1rem; max-width: 100%; height: auto; font-size: 14px; position: relative; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; width: 641px;\">\n	<img alt=\"traveling murah\" class=\"wp-image-94672\" height=\"428\" sizes=\"(max-width: 641px) 100vw, 641px\" src=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/traveling-murah-yogyakarta.jpg\" srcset=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014531/traveling-murah-yogyakarta.jpg 500w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014531/traveling-murah-yogyakarta-300x200.jpg 300w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014531/traveling-murah-yogyakarta-450x301.jpg 450w\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;\" width=\"641\" /><figcaption class=\"wp-caption-text\" id=\"caption-attachment-94672\" style=\"box-sizing: border-box; font-size: 10px; color: rgb(153, 153, 153); width: 558px; opacity: 0.7; text-align: right; margin-top: 5px;\">Belum ke Yogyakarta namanya kalau belum ke Malioboro. (Shutterstock)</figcaption></figure>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Yogyakarta menjadi destinasi traveling murah yang hampir seluruh masyarakat Indonesia ketahui, apalagi di jalan Malioboro. Di sana banyak jajanan sampai pusat oleh-oleh dengan harga cukup terjangkau.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Kalau bosen ke Malioboro kamu bisa memilih destinasi wisata lainnya. Misalnya saja pantai-pantai di sekitar Gunung Kidul seperti Wediombo dan Sadranan yang gak kalah bagus dari pantai-pantai di Bali. Berikut ini estimasi biayanya untuk liburan ke DIY:</span></p>\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"border-collapse: collapse; width: 558px; margin-bottom: 1rem; color: rgb(33, 37, 41); display: block; overflow-x: auto; font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<colgroup style=\"box-sizing: border-box;\">\n		<col style=\"box-sizing: border-box;\" width=\"234\" />\n		<col style=\"box-sizing: border-box;\" width=\"100\" />\n	</colgroup>\n	<tbody style=\"box-sizing: border-box;\">\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Pengeluaran&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Pengeluaran</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Bujet&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Bujet</span></td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kereta dari Jakarta ke Yogyakarta: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kereta dari Jakarta ke Yogyakarta:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 240.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 240.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport angkot: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport angkot:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 8.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 8.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Sewa motor per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Sewa motor per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 60.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 60.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Penginapan per malam: ` &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Penginapan per malam: `</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 120.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 120.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Biaya makan per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Biaya makan per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 90.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 90.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Total biaya: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Total biaya:</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 518.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Rp 518.000</span></td>\n		</tr>\n	</tbody>\n</table>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	Baca juga:&nbsp;<a href=\"https://lifepal.co.id/media/20-tempat-wisata-di-surabaya-kekinian/\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; color: rgb(29, 102, 222); text-decoration-line: none; background-color: transparent;\" target=\"_blank\"><span style=\"box-sizing: border-box; font-weight: bolder;\">20 Tempat Wisata Surabaya yang Bakal Bikin Kamu Betah</span></a></p>\n<h2 style=\"box-sizing: border-box; margin: 20px 0px; line-height: 1.5; font-size: 28px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">\n	<span style=\"box-sizing: border-box; font-weight: bolder;\">4. Ujung Kulon, Banten &ndash; Rp 500 ribu</span></h2>\n<figure aria-describedby=\"caption-attachment-94671\" class=\"wp-caption alignnone\" id=\"attachment_94671\" style=\"box-sizing: border-box; margin: 10px 0px 1rem; max-width: 100%; height: auto; font-size: 14px; position: relative; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; width: 641px;\">\n	<img alt=\"traveling murah\" class=\"wp-image-94671\" height=\"360\" sizes=\"(max-width: 641px) 100vw, 641px\" src=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/traveling-murah-ujung-kulon.jpg\" srcset=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014529/traveling-murah-ujung-kulon.jpg 500w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014529/traveling-murah-ujung-kulon-300x169.jpg 300w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014529/traveling-murah-ujung-kulon-450x253.jpg 450w\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;\" width=\"641\" /><figcaption class=\"wp-caption-text\" id=\"caption-attachment-94671\" style=\"box-sizing: border-box; font-size: 10px; color: rgb(153, 153, 153); width: 558px; opacity: 0.7; text-align: right; margin-top: 5px;\">&lsquo;Harta karun&rsquo; di ujung barat Pulau Jawa. (Shutterstock)</figcaption></figure>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Destinasi traveling murah selanjutnya adalah Ujung Kulon yang berada di Banten, gak jauh dari DKI Jakarta. Buat pecinta pantai pasti cocok banget nih pergi ke lokasi yang satu ini karena terdapat pantai yang indah dan aneka ragam biota laut.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Ada juga pulau yang bisa kamu kunjungi seperti pulau Peucang. Uang yang harus kamu keluarkan sekitar Rp 500 ribu aja, berikut rinciannya:</span></p>\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"border-collapse: collapse; width: 558px; margin-bottom: 1rem; color: rgb(33, 37, 41); display: block; overflow-x: auto; font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<colgroup style=\"box-sizing: border-box;\">\n		<col style=\"box-sizing: border-box;\" width=\"234\" />\n		<col style=\"box-sizing: border-box;\" width=\"100\" />\n	</colgroup>\n	<tbody style=\"box-sizing: border-box;\">\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Pengeluaran&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Pengeluaran</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Bujet&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Bujet</span></td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport bus dari Jakarta ke Labuan: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport bus dari Jakarta ke Labuan:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 100.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 100.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kapal dari Labuan ke Pulau Peucang: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kapal dari Labuan ke Pulau Peucang:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 120.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 120.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Penginapan per malam: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Penginapan per malam:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 125.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 125.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Biaya makan per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Biaya makan per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 100.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 100.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Snorkeling: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Snorkeling:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 55.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 55.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Total biaya: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Total biaya:</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 500.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Rp 500.000</span></td>\n		</tr>\n	</tbody>\n</table>\n<h2 style=\"box-sizing: border-box; margin: 20px 0px; line-height: 1.5; font-size: 28px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">\n	<span style=\"box-sizing: border-box; font-weight: bolder;\">5. Traveling murah ke Pantai Anyer, Banten &ndash; Rp 235 ribu</span></h2>\n<figure aria-describedby=\"caption-attachment-94670\" class=\"wp-caption alignnone\" id=\"attachment_94670\" style=\"box-sizing: border-box; margin: 10px 0px 1rem; max-width: 100%; height: auto; font-size: 14px; position: relative; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; width: 640px;\">\n	<img alt=\"traveling murah\" class=\"wp-image-94670\" height=\"480\" sizes=\"(max-width: 640px) 100vw, 640px\" src=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/traveling-murah-anyer.jpg\" srcset=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014527/traveling-murah-anyer.jpg 500w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014527/traveling-murah-anyer-300x225.jpg 300w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014527/traveling-murah-anyer-450x338.jpg 450w\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;\" width=\"640\" /><figcaption class=\"wp-caption-text\" id=\"caption-attachment-94670\" style=\"box-sizing: border-box; font-size: 10px; color: rgb(153, 153, 153); width: 558px; opacity: 0.7; text-align: right; margin-top: 5px;\">Wisata pantai indah tak jauh dari Jakarta. (Shuttterstock)</figcaption></figure>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Yang terakhir ada Pantai Anyer di provinsi Banten yang beberapa waktu lalu sempat terkena musibah Tsunami. Sekarang kondisinya udah mulai pulih dan bisa jadi tujuan destinasi traveling murah kamu nih.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Di pantai ini kamu dapat menikmati udara segar laut dan bermain pasir di pinggiran pantainya yang indah. Siapkan paling gak dana sekitar Rp 235 ribu untuk bisa liburan kesini. Berikut rincian biayanya:</span></p>\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"border-collapse: collapse; width: 558px; margin-bottom: 1rem; color: rgb(33, 37, 41); display: block; overflow-x: auto; font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<colgroup style=\"box-sizing: border-box;\">\n		<col style=\"box-sizing: border-box;\" width=\"234\" />\n		<col style=\"box-sizing: border-box;\" width=\"100\" />\n	</colgroup>\n	<tbody style=\"box-sizing: border-box;\">\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Pengeluaran&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Pengeluaran</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Bujet&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Bujet</span></td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kereta dari Jakarta ke Cilegon: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kereta dari Jakarta ke Cilegon:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 20.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 20.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport Angkot dari Cilegon ke Pantai Anyer: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport Angkot dari Cilegon ke Pantai Anyer:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 15.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 15.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Penginapan per malam: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Penginapan per malam:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 125.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 125.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Biaya Makan per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Biaya Makan per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 75.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 75.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Total biaya: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Total biaya:</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 235.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Rp 235.000</span></td>\n		</tr>\n	</tbody>\n</table>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Semua biaya di kelima destinasi di atas mungkin aja berbeda satu orang dengan yang lain karena berbagai faktor seperti lokasi tempat tinggal dan referensi pilihan pribadi.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Nah itu dia 5 destinasi traveling murah yang bisa dikunjungi oleh para mahasiswa yang punya bujet gak lebih dari Rp 750 ribu. Tunggu apa lagi, langsung aja rencanakan liburan versi kamu mulai dari sekarang agar punya waktu untuk menabung. Selamat liburan!&nbsp;<span style=\"box-sizing: border-box; font-weight: bolder;\">(Editor: Ruben Setiawan)</span></span></p>\n', '2020-05-01 03:26:55');
INSERT INTO `artikel` (`id`, `judul`, `thumbnail`, `artikel`, `tanggal`) VALUES
(9, '5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi ', '6bc90-inst-image-1-8bbe8c92bb523da0aa8a0ef2359fd6a3_600x400.jpg', '<p>\n	<span style=\"font-size:14px;\"><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\">Jawa Timur merupakan salah satu provinsi di Indonesia yang terkenal dengan wisata alamnya yang melimpah. Salah satu wisata alam yang terkenal di Jawa Timur adalalah wisata air terjunnya. Pemandangan di sekitar air terjunnya yang eksotis dan mempesona, menarik minat wisatawan dari berbagai daerah untuk mengunjunginya. Nah, berikut ini ulasan tentang lima air terjun di Jawa Timur yang wajib banget buat kamu karena pemandangannya yang eksotis banget.</span></span></p>\n<h2 0px=\"\" 20px=\"\" color:=\"\" font-size:=\"\" font-weight:=\"\" line-height:=\"\" margin:=\"\" none=\"\" outline:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \">\n	<strong><span style=\"font-size:14px;\">1. Coban Sewu</span></strong></h2>\n<div class=\"embed-image\" style=\"box-sizing: border-box; position: relative; margin-bottom: 12px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\"><img alt=\"5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi&nbsp;\" src=\"https://cdn.idntimes.com/content-images/community/2019/04/e75ebd6f1fa65a2518dc2b7440c00b71-87f5a65032762ab1064cf4174d210dc8.jpg\" style=\"box-sizing: border-box; outline: none !important; border: 0px; vertical-align: middle; max-width: 100%; width: 765px; height: auto !important;\" /><span class=\"main-article-source\" style=\"box-sizing: border-box; display: block; position: absolute; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.4); text-align: center; color: rgb(255, 255, 255); font-style: italic; padding: 4px 10px; outline: none !important;\">instagram.com/joshuafavian</span></span></div>\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\">Air terjun yang eksotis di Jawa Timur, yang pertama adalah Coban Sewu. Coban yang berarti air terjun, dan Sewu berarti seribu, yang menggambarkan banyaknya mata air yang berada di Coban Sewu ini. Air terjun yang lokasinya berada di dua kabupaten, yaitu Kabupaten Malang dan Lumajang, serta berada di lereng Gunung Semeru ini, memiliki pemandangan alam yang luar biasa eksotisnya. Air terjun dengan ketinggian 180 meter ini, dihiasi oleh tumbuhan hijau segar yang menempel di dinding tebing yang berwarna kecoklatan.</span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\">Meski memiliki pemandangan yang sangat eksotis dan mempesona, para pengunjung harus melewati trak yang lumayan ekstrem jika ingin menuju ke air terjunnya. Namun, itu semua akan terbayarkan dengan keindahan air terjunnya yang sangat menawan, dengan airnya yang sangat jernih. Untuk harga tiket masuknya juga sangat terjangkau, yaitu Rp 10.000/orang.</span></p>\n<h2 0px=\"\" 20px=\"\" color:=\"\" font-size:=\"\" font-weight:=\"\" line-height:=\"\" margin:=\"\" none=\"\" outline:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \">\n	<strong><span style=\"font-size:14px;\">2. Air Terjun Madakaripura</span></strong></h2>\n<div class=\"embed-image\" style=\"box-sizing: border-box; position: relative; margin-bottom: 12px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\"><img alt=\"5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi&nbsp;\" src=\"https://cdn.idntimes.com/content-images/community/2019/04/c4fcb9d8888c3d7d8eca4ee1b10f3a88-47888258bead2ada597873213f9ccd86.jpg\" style=\"box-sizing: border-box; outline: none !important; border: 0px; vertical-align: middle; max-width: 100%; width: 765px; height: auto !important;\" /><span class=\"main-article-source\" style=\"box-sizing: border-box; display: block; position: absolute; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.4); text-align: center; color: rgb(255, 255, 255); font-style: italic; padding: 4px 10px; outline: none !important;\">instagram.com/airterjunmadakaripura</span></span></div>\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\">Nah, ini dia air terjun yang paling terkenal dan paling eksotis di Jawa Timur, yaitu Air Terjun Madakaripura. Dengan ketinggiannya yang mencapai 200 meter, Air Terjun Madakaripura berada di urutan no.1 sebagai air terjun tertinggi di Pulau Jawa, dan menempati urutan ke. 2 sebagai air terjun tertinggi di Indonesia, setelah Air Terjun Ponot yang menempati urutan no. 1, yang lokasinya berada di Sumatra Utara. Air terjun yang masih satu kawasan dengan Taman Nasional Bromo Tengger Semeru (TNBTS) ini, memiliki pemandangan yang luar biasa indahnya, dengan banyaknya tumbuhan hijau yang mengelilingi air terjun dengan sejuta pesona tersebut.</span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\">Warna air kolam yang berada tepat di bawah Air Terjun Madakaripura adalah berwarna sapphire lho, yang otomatis menambah keindahan Air Terjun Madakaripura. Air terjun yang konon tempat bertapanya Mahapatih Gajah Mada ini, mendapat julukan sebagai air terjun abadi, karena debit airnya tidak pernah habis, meskipun sedang musim kemarau. Untuk harga tiket ke Air Terjun Madakaripura juga sangat terjangkau lho, yaitu sekitar Rp 11.000/orang.</span></p>\n<h2 0px=\"\" 20px=\"\" color:=\"\" font-size:=\"\" font-weight:=\"\" line-height:=\"\" margin:=\"\" none=\"\" outline:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \">\n	<strong><span style=\"font-size:14px;\">3. Coban Pelangi</span></strong></h2>\n<div class=\"embed-image\" style=\"box-sizing: border-box; position: relative; margin-bottom: 12px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\"><img alt=\"5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi&nbsp;\" src=\"https://cdn.idntimes.com/content-images/community/2019/03/inst-image-1-8bbe8c92bb523da0aa8a0ef2359fd6a3.jpg\" style=\"box-sizing: border-box; outline: none !important; border: 0px; vertical-align: middle; max-width: 100%; width: 765px; height: auto !important;\" /></span></div>\n<div class=\"embed-image\" style=\"box-sizing: border-box; position: relative; margin-bottom: 12px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\"><span class=\"main-article-source\" style=\"box-sizing: border-box; display: block; position: absolute; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.4); text-align: center; color: rgb(255, 255, 255); font-style: italic; padding: 4px 10px; outline: none !important;\">instagram.com/ahmad_anjarwicaksono</span></span></div>\n<div class=\"embed-image\" style=\"box-sizing: border-box; position: relative; margin-bottom: 12px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<div class=\"split-page split-page3 open\" data-target=\"3\" style=\"box-sizing: border-box; outline: none !important;\">\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Coban Pelangi merupakan salah satu air terjun yang hits lho di Kota Malang. Air terjun yang masih satu kawasan dengan Taman Nasional Bromo Tengger Semeru (TNBTS) ini, memiliki pemandangan yang gak kalah eksotisnya dengan Coban Sewu. Di Coban Pelangi ini, terdapat taman bunga yang sangat cantik dengan bunganya yang warna warni, serta juga terdapat rainbow hill, yang merupakan tebing pandang yang dilengkapi dengan gazebo untuk menikmati keindahan pemandangan Coban Pelangi dari ketinggian.</span></p>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Nah, untuk fasilitasnya sudah lumayan lengkap lho, seperti mushola, kamar mandi, dan juga warung makan. Untuk tiket masuknya juga sangat terjangkau lho, yaitu Rp 10.000/orang, sedangkan untuk tarif parkir kendaraannya sekitar Rp 5.000/motor, dan Rp 10.000/mobil.</span></p>\n	</div>\n	<div class=\"split-page split-page4 open\" data-target=\"4\" style=\"box-sizing: border-box; outline: none !important;\">\n		<h2 0px=\"\" 20px=\"\" color:=\"\" font-size:=\"\" font-weight:=\"\" line-height:=\"\" margin:=\"\" roboto=\"\" style=\"box-sizing: border-box; outline: none !important; font-family: \">\n			<strong><span style=\"font-size:14px;\">4. Coban Kapas Biru</span></strong></h2>\n		<div class=\"embed-image\" style=\"box-sizing: border-box; outline: none !important; position: relative; margin-bottom: 12px;\">\n			<span style=\"font-size:14px;\"><img alt=\"5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi&nbsp;\" src=\"https://cdn.idntimes.com/content-images/community/2019/04/fb814591fc1d2cbc36921ecf9182dcd2-d55a33598e8260272721cece7ee3668a.jpg\" style=\"box-sizing: border-box; outline: none !important; border: 0px; vertical-align: middle; max-width: 100%; width: 765px; height: auto !important;\" /><span class=\"main-article-source\" style=\"box-sizing: border-box; display: block; position: absolute; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.4); text-align: center; color: rgb(255, 255, 255); font-style: italic; padding: 4px 10px; outline: none !important;\">instagram.com/joshuafavian</span></span></div>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Selain Coban Sewu, Coban Kapas Biru juga merupakan air terjun yang terkenal di Jawa Timur. Lokasi keduanya berada sama-sama berada di Lumajang, dan dekat dengan lokasi Puncak B29, yang merupakan objek wisata unggulan di Lumajang. Dinamakan Coban Kapas Biru karena aliran airnya berwarna putih, serta sisi-sisi bagian aliran air terjunnya berwarna kebiruan jika dilihat dari jarak yang jauh.</span></p>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Coban Kapas Biru memiliki pemandangan yang sangat eksotis, karena air terjunnya dikelilingi oleh tebing-tebing tinggi berwana coklat kemerahan dengan lumut-lumutnya yang hijau, dan pepohonan rimbun yang berada di sekitarnya. Fasilitas Coban Kapas Biru juga sudah lumayan lengkap lho, seperti mushola, warung makan, dan toilet. Nah, untuk harga tiket masuknya juga sangat terjangkau, yaitu Rp 7.000/orang.</span></p>\n	</div>\n	<div class=\"split-page split-page5 open\" data-target=\"5\" style=\"box-sizing: border-box; outline: none !important;\">\n		<div class=\"inarticle-ads\" style=\"box-sizing: border-box; outline: none !important; margin: 10px auto;\">\n			&nbsp;</div>\n		<h2 0px=\"\" 20px=\"\" color:=\"\" font-size:=\"\" font-weight:=\"\" line-height:=\"\" margin:=\"\" roboto=\"\" style=\"box-sizing: border-box; outline: none !important; font-family: \">\n			<strong><span style=\"font-size:14px;\">5. Air Terjun Kembar Arum</span></strong></h2>\n		<div class=\"embed-image\" style=\"box-sizing: border-box; outline: none !important; position: relative; margin-bottom: 12px;\">\n			<span style=\"font-size:14px;\"><img alt=\"5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi&nbsp;\" src=\"https://cdn.idntimes.com/content-images/post/20190405/23824592-1957731491182346-2318867720877113344-n-ffeed7eb3cdf8242bbcb8a293d3b189b.jpg\" style=\"box-sizing: border-box; outline: none !important; border: 0px; vertical-align: middle; max-width: 100%; width: 765px; height: auto !important;\" /><span class=\"main-article-source\" style=\"box-sizing: border-box; display: block; position: absolute; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.4); text-align: center; color: rgb(255, 255, 255); font-style: italic; padding: 4px 10px; outline: none !important;\">instagram.com/acheromabwx</span></span></div>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Air Terjun Kembar Arum merupakan air terjun yang letaknya berada di kaki Gunung Raung, Banyuwangi. Air Terjun Kembar Arum ini, termasuk air terjun yang cukup unik lho, karena sumber air terjunnya berasal dari air sungai yang membelah persawahan yang jatuh ke jurang. Aliran air tersebut membentuk sungai-sungai kecil dibawahnya, membuat Air Terjun Kembar Arum semakin unik dan juga eksotis.</span></p>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Air Terjun Kembar Arum ini tidak terlalu dalam lho, sehingga para wisatawan dapat bermain air dan juga berenang. Selain itu, panoramanya juga instagramable abis lho, sehingga nantinya dapat memperindah feed instagrammu. Untuk harga tiket masuknya masih gratis lho, para pengunjung hanya cukup membayar parkir kendaraannya saja, yang diparkirkan di rumah warga setempat.</span></p>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Nah, itulah ulasan dari lima air terjun di Jawa Timur yang eksotis dan wajib banget buat kamu kunjungi. Sudah siap untuk berlibur?</span></p>\n	</div>\n</div>\n<p>\n	&nbsp;</p>\n', '2020-05-03 13:27:19'),
(10, '10 Tips Aman Berkendara Saat Musim Hujan', 'cc625-hujan.jpg', '<p>\n	<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">Akhir tahun telah tiba, itu berarti musim penghujan pun telah datang. Meski banyak yang mensyukuri datangnya musim hujan, hujan juga seringkali dituding sebagai penyebab terjadinya kecelakaan, akibat jalan licin dan tergenang.</span></p>\n<p>\n	<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">Nah, bagaimana caranya agar berkendara tetap aman di musim penghujan? Berikut 10 tips berkendara saat musim hujan, baik bagi kendaraan roda empat atau roda dua:</span></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>1. Rencanakan rute sebelum bepergian</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Pastikan rute jalan yang akan Anda lewati untuk mencapai tujuan. Terlebih saat Anda menuju daerah yang jarang atau belum pernah dikunjungi. Perasaan tersesat akan menimbulkan kebingungan dan menganggu konsentrasi. Terlebih lagi, potensi cuaca dan jarak pandang yang buruk membutuhkan kemampuan mengemudi ekstra hati-hati. Untuk menghindari resiko tersesat, rencanakan rute perjalanan dengan baik.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>2. Periksa semua lampu kendaraan</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Jangan lupa periksa semua lampu kendaraan, apakah semua lampu dapat berfungsi dengan baik. Lampu tersebut bermanfaat membantu Anda melihat di jarak pandang yang terbatas karena hujan. Nyalakan lampu utama meskipun siang hari dan hujan rintik-rintik. Hal ini akan membantu pengendara lain melihat kendaraan Anda.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>3. Periksa kondisi tekanan udara dalam ban</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Kondisi tekanan ban yang cukup dan alur ban yang masih baik akan menghindari kendaraan Anda melayang di atas air (aquaplaning) dan tergelincir (slip) pada saat hujan. Jangan mengambil resiko dengan menggunakan ban yang sudah tipis. Sebagai tindakan preventif, periksa kondisi ban Anda seminggu sekali.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>4. Periksa kondisi utama komponen kendaraan</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Periksa kemudi, pedal rem, gas maupun kopling apakah sudah dalam kondisi baik atau tidak.&nbsp; Berikan perawatan ekstra selama musim hujan karena untuk mengantisipasi keadaan darurat atau akibat kesalahan orang lain yang dapat menyebabkan kecelakaan.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>5. Gunakan alas kaki yang tidak licin</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Gunakan alas kaki yang tidak licin, tahan air dan aman untuk berkendara. Persiapkan juga jas hujan yang berbentuk baju dan celana, bagi pengendara motor, karena jas hujan seperti itu lebih aman dibandingkan yang berbentuk ponco.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>6. Kurangi kecepatan kendaraan</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Kurangi kecepatan dalam mengendarai kendaraan karena pada saat hujan permukaan jalan licin akibat bercampurnya oli dengan air agar ban anda tidak tergelincir (slip). Mengemudikan kendaraan dalam kodisi kecepatan rendah akan membuat alur ban kendaraan anda lebih banyak bersentuhan langsung dengan aspal dan membuat daya cengkeram ban lebih baik.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>7. Jaga jarak aman kendaraan</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Jaga jarak aman dengan pengendara lain. Karena pada saat hujan jarak aman pengereman kendaraan membutuhkan jarak yang lebih jauh daripada kondisi kering.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>8. Jangan sembarang menerobos genangan air</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Jangan langsung menerobos genangan air karena kita tidak tahu kedalamannya. Hal ini bisa mengakibatkan kendaraan Anda mogok atau terperosok ke dalam lubang yang mungkin ada di dalam genangan air tersebut.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>9. Perhatikan marka jalan</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Marka jalan berfungsi untuk membantu Anda agar terhindar dari kecelakaan dan tetap berada di dalam jalur yang benar dan aman.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>10. Jangan menghidupkan mesin bila terjebak banjir</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Jangan menghidupkan mesin jika terjebak banjir dan mogok. Karena air masuk ke saluran pembuangan gas kendaraan Anda,&nbsp; jangan menghidupkan mesin kembali. Lebih baik didorong ke tempat yang aman, karena dikhawatirkan sistem pengapian kendaraan Anda mengalami korsleting dan dapat membuat kendaran terbakar.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Intinya selalu waspada dan berhati-hati di jalan ya moms. Patuhi rambu-rambu lalu lintas, perhatikan marka jalan, dan selalu konsentrasi. [Tri]</p>\n', '2020-05-03 13:38:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel_pariwisata`
--

CREATE TABLE `artikel_pariwisata` (
  `ID_ARTIKEL` int(11) NOT NULL,
  `ID_ADMIN` int(11) NOT NULL,
  `KONTEN_ARTIKEL` varchar(20) DEFAULT NULL,
  `JUDUL_ARTIKEL` varchar(50) DEFAULT NULL,
  `TEXT_ARTIKEL` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `ID_KENDARAAN` int(11) NOT NULL,
  `MERK_KENDARAAN` varchar(20) DEFAULT NULL,
  `NAMA_KENDARAAN` varchar(50) DEFAULT NULL,
  `DESKRIPSI_KENDARAAN` text,
  `JENIS_KENDARAAN` varchar(12) DEFAULT NULL,
  `TRANSISI` varchar(9) DEFAULT NULL,
  `HARGA_SEWA_KENDARAAN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuntungan`
--

CREATE TABLE `keuntungan` (
  `id_keuangan` int(11) NOT NULL,
  `bulan` varchar(15) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keuntungan`
--

INSERT INTO `keuntungan` (`id_keuangan`, `bulan`, `jumlah`) VALUES
(0, 'January', 1000000),
(2, 'february', 1500000),
(3, 'maret', 1300000),
(4, 'april', 1200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `ID_MOBIL` int(11) NOT NULL,
  `ID_KENDARAAN` int(11) NOT NULL,
  `KAPASITAS` int(11) DEFAULT NULL,
  `PINTU` int(11) DEFAULT NULL,
  `AIRBAG` varchar(5) DEFAULT NULL,
  `PENDINGIN_UDARA` varchar(5) DEFAULT NULL,
  `POWER_WINDOWS` varchar(5) DEFAULT NULL,
  `POWER_DOOR_LOCK` varchar(5) DEFAULT NULL,
  `REM_ANTI_LOCK` varchar(5) DEFAULT NULL,
  `POWER_STEERING` varchar(5) DEFAULT NULL,
  `RADIO` varchar(20) DEFAULT NULL,
  `BAGASI` int(11) DEFAULT NULL,
  `SUPIR` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE `motor` (
  `ID_MOTOR` int(11) NOT NULL,
  `ID_KENDARAAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `ID_PEMILIK` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `FOTO_PEMILIK` longblob,
  `REKENING_PEMILIK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `ID_PENYEWA` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `FOTO_PENYEWA` int(11) DEFAULT NULL,
  `REKENING_PENYEWA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `ID_PESAN` int(11) NOT NULL,
  `ID_PENYEWA` int(11) DEFAULT NULL,
  `ID_RENTAL` int(11) NOT NULL,
  `NAMA_PESAN` varchar(50) DEFAULT NULL,
  `DETAIL` text,
  `LOKASI_PENJEMPUTAN` varchar(50) DEFAULT NULL,
  `LOKASI_PENGANTARAN` varchar(50) DEFAULT NULL,
  `TANGGAL_PENGAMBILAN` datetime DEFAULT NULL,
  `TANGGAL_PENGEMBALIAN` datetime DEFAULT NULL,
  `TARIF_JARAK_TEMPUH` int(11) DEFAULT NULL,
  `TARIF_PER_MIL_TAMBAHAN` int(11) DEFAULT NULL,
  `TARIF_JUMLAH_HARI` int(11) DEFAULT NULL,
  `TARIF_JAM_TAMBAHAN` int(11) DEFAULT NULL,
  `TARIF_KENDARAAN` int(11) DEFAULT NULL,
  `TARIF_KENDARAAN_TAMBAHAN` int(11) DEFAULT NULL,
  `TARIF_SEWA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rental`
--

CREATE TABLE `rental` (
  `ID_RENTAL` int(11) NOT NULL,
  `ID_KENDARAAN` int(11) DEFAULT NULL,
  `ID_PEMILIK` int(11) DEFAULT NULL,
  `NAMA_RENTAL` varchar(20) DEFAULT NULL,
  `DESKRIPSI_RENTAL` text,
  `ALAMAT_RENTAL` varchar(50) DEFAULT NULL,
  `FOTO_RENTAL` longblob,
  `LAMA_PEMESANAN_MINIMM` int(11) DEFAULT NULL,
  `JAM_BUKA` time DEFAULT NULL,
  `JAM_TUTUP` time DEFAULT NULL,
  `PERSYARATAN_JARAK_WAKTU_OEMESANAN` int(11) DEFAULT NULL,
  `ATURAN_PEMESANAN` text,
  `KEBIJAKAN_PEMBATALAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_TRANSAKSI` int(11) NOT NULL,
  `ID_PESAN` int(11) DEFAULT NULL,
  `KETERANGAN_TRANSAKSI` text,
  `KOMENTAR_TRANSAKSI` text,
  `RATING` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `DAERAH` varchar(25) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `NEGARA_TETMPAT_TINGGAL` varchar(20) DEFAULT NULL,
  `TELEPON_SELULER` int(11) DEFAULT NULL,
  `KETERANGAN_USER` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `EMAIL`, `PASSWORD`, `NAMA`, `JENIS_KELAMIN`, `DAERAH`, `TANGGAL_LAHIR`, `NEGARA_TETMPAT_TINGGAL`, `TELEPON_SELULER`, `KETERANGAN_USER`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'L', 'SDA', '2020-05-01', 'indonesia', 81876855, 'admin'),
(2, 'user@gmail.com', 'user', 'user', 'P', 'SBY', '2020-05-01', 'Indonesia', 986756334, 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`),
  ADD KEY `FK_TERBAGI` (`ID_USER`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel_pariwisata`
--
ALTER TABLE `artikel_pariwisata`
  ADD PRIMARY KEY (`ID_ARTIKEL`),
  ADD KEY `FK_MEMBUAT` (`ID_ADMIN`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`ID_KENDARAAN`);

--
-- Indeks untuk tabel `keuntungan`
--
ALTER TABLE `keuntungan`
  ADD PRIMARY KEY (`id_keuangan`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`ID_MOBIL`),
  ADD KEY `FK_TERBAGI4` (`ID_KENDARAAN`);

--
-- Indeks untuk tabel `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`ID_MOTOR`),
  ADD KEY `FK_TERBAGI5` (`ID_KENDARAAN`);

--
-- Indeks untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`ID_PEMILIK`),
  ADD KEY `FK_TERBAGI2` (`ID_USER`);

--
-- Indeks untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`ID_PENYEWA`),
  ADD KEY `FK_TERBAGI3` (`ID_USER`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`ID_PESAN`),
  ADD KEY `FK_MEMESAN` (`ID_PENYEWA`),
  ADD KEY `FK_MENYEWAKAN` (`ID_RENTAL`);

--
-- Indeks untuk tabel `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`ID_RENTAL`),
  ADD KEY `FK_MEMPUNYAI` (`ID_PEMILIK`),
  ADD KEY `FK_TERDAPAT` (`ID_KENDARAAN`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `FK_MEMILIKI` (`ID_PESAN`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_TERBAGI` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `artikel_pariwisata`
--
ALTER TABLE `artikel_pariwisata`
  ADD CONSTRAINT `FK_MEMBUAT` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Ketidakleluasaan untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `FK_TERBAGI4` FOREIGN KEY (`ID_KENDARAAN`) REFERENCES `kendaraan` (`ID_KENDARAAN`);

--
-- Ketidakleluasaan untuk tabel `motor`
--
ALTER TABLE `motor`
  ADD CONSTRAINT `FK_TERBAGI5` FOREIGN KEY (`ID_KENDARAAN`) REFERENCES `kendaraan` (`ID_KENDARAAN`);

--
-- Ketidakleluasaan untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD CONSTRAINT `FK_TERBAGI2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  ADD CONSTRAINT `FK_TERBAGI3` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `FK_MEMESAN` FOREIGN KEY (`ID_PENYEWA`) REFERENCES `penyewa` (`ID_PENYEWA`),
  ADD CONSTRAINT `FK_MENYEWAKAN` FOREIGN KEY (`ID_RENTAL`) REFERENCES `rental` (`ID_RENTAL`);

--
-- Ketidakleluasaan untuk tabel `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `FK_MEMPUNYAI` FOREIGN KEY (`ID_PEMILIK`) REFERENCES `pemilik` (`ID_PEMILIK`),
  ADD CONSTRAINT `FK_TERDAPAT` FOREIGN KEY (`ID_KENDARAAN`) REFERENCES `kendaraan` (`ID_KENDARAAN`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_PESAN`) REFERENCES `pesanan` (`ID_PESAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
