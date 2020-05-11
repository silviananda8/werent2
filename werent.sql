-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 07:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.28

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `artikel` text NOT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `thumbnail`, `artikel`, `tanggal`) VALUES
(1, 'Gunung Bromo', '220cd-280px-mount_bromo_at_sunrise-_showing_its_volcanoes_and_mount_semeru_-background-.jpg', '<p>\n	<span style=\"color: rgba(0, 0, 0, 0.87); font-family: Roboto, RobotoDraft, Helvetica, Arial, sans-serif; font-size: 13px;\">Gunung Bromo atau dalam bahasa Tengger dieja &quot;Brama&quot;, adalah sebuah gunung berapi aktif di Jawa Timur, Indonesia. Gunung ini memiliki ketinggian 2.329 meter di atas permukaan laut dan berada dalam empat wilayah kabupaten, yakni Kabupaten Probolinggo, Kabupaten Pasuruan, Kabupaten Lumajang, dan Kabupaten Malang. Gunung Bromo terkenal sebagai objek wisata utama di Jawa Timur. Sebagai sebuah objek wisata, Bromo menjadi menarik karena statusnya sebagai gunung berapi yang masih aktif. Gunung Bromo termasuk dalam kawasan Taman Nasional Bromo Tengger Semeru. Bentuk tubuh Gunung Bromo bertautan antara lembah dan ngarai dengan kaldera atau lautan pasir seluas sekitar 10 kilometer persegi. Ia mempunyai sebuah kawah dengan garis tengah &plusmn; 800 meter dan &plusmn; 600 meter. Sedangkan daerah bahayanya berupa lingkaran dengan jari-jari 4 km dari pusat kawah Bromo.<img alt=\"\" src=\"https://drive.google.com/open?id=14XwxmyRkeN7x_9-3PF1Uc8BQE0MkrckO\" /></span></p>\n', '2020-04-30 13:26:32'),
(8, 'Destinasi Traveling Murah Cocok buat Mahasiswa', 'dbfe8-traveling-murah-wp-600x426.jpg', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Bagi sebagian mahasiswa, mencari destinasi traveling murah menjadi salah satu ritual wajib sebelum merencanakan liburan karena bujet yang pas-pasan. Kalau gak dipersiapkan secara matang, bisa-bisa keuangan bulanan jadi kacau dan dompet makin tipis. Terus tempat liburan kayak apa nih yang bisa dikunjungi?</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Udah pusing urusin tugas kuliah dan masalah organisasi, pasti para mahasiswa membutuhkan sesuatu yang menyegarkan pikiran. Tapi bukan melulu ke mal, melainkan destinasi liburan yang seru dan asik dikunjungi bersama teman-teman. Sayangnya keinginan tersebut gak jarang menemui banyak halangan, salah satunya karena terbatasnya uang.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Menjadi seorang mahasiswa yang tinggal di Indonesia membutuhkan kemampuan pengelolaan uang yang baik, apalagi buat yang merantau dari kota lain. Kita harus pintar mengatur keuangan supaya urusan kuliah, makan serta hiburan dapat terbagi secara rata, kalau ada sisa bisa ditabung untuk keperluan bulan selanjutnya.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Kalau kamu hanya punya bujet sekitar Rp 750 doang, kebetulan banget nih ada destinasi liburan yang patut dicoba. Bukan cuma untuk mahasiswa, kamu-kamu yang udah kerja juga bisa mengunjungi tempat ini lho kalau punya uang terbatas.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Langsung aja kita simak 5 destinasi traveling murah buat mahasiswa yang cuma punya bujet Rp 750 ribu berikut ini.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	Baca juga:&nbsp;<a href=\"https://lifepal.co.id/media/tempat-wisata-yogyakarta-sukses-hidupkan-kenangan/\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; color: rgb(29, 102, 222); text-decoration-line: none; background-color: transparent;\" target=\"_blank\"><span style=\"box-sizing: border-box; font-weight: bolder;\">20 Tempat Wisata Yogyakarta yang Bakal Bangkitkan Kenanganmu</span></a></p>\n<h2 style=\"box-sizing: border-box; margin: 20px 0px; line-height: 1.5; font-size: 28px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">\n	<span style=\"box-sizing: border-box; font-weight: bolder;\">1. Karimunjawa, Jawa Tengah &ndash; Rp 750 ribu</span></h2>\n<figure aria-describedby=\"caption-attachment-94674\" class=\"wp-caption alignnone\" id=\"attachment_94674\" style=\"box-sizing: border-box; margin: 10px 0px 1rem; max-width: 100%; height: auto; font-size: 14px; position: relative; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; width: 640px;\">\n	<img alt=\"traveling murah\" class=\"wp-image-94674\" height=\"424\" sizes=\"(max-width: 640px) 100vw, 640px\" src=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/traveling-murah-karimun-jawa.jpg\" srcset=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014535/traveling-murah-karimun-jawa.jpg 500w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014535/traveling-murah-karimun-jawa-300x199.jpg 300w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014535/traveling-murah-karimun-jawa-450x298.jpg 450w\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;\" width=\"640\" /><figcaption class=\"wp-caption-text\" id=\"caption-attachment-94674\" style=\"box-sizing: border-box; font-size: 10px; color: rgb(153, 153, 153); width: 558px; opacity: 0.7; text-align: right; margin-top: 5px;\">Salah satu sudut Kepulauan Karimunjawa. (Shutterstock)</figcaption></figure>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Dikutip dari</span><a href=\"https://www.hipwee.com/travel/10-destinasi-wisata-yang-cocok-dikunjungi-mahasiswa-dengan-budget-pas-pasan/\" rel=\"nofollow noreferrer noopener\" style=\"box-sizing: border-box; color: rgb(29, 102, 222); text-decoration-line: none; background-color: transparent;\">&nbsp;<span style=\"box-sizing: border-box;\">Hipwee</span></a><span style=\"box-sizing: border-box;\">, destinasi traveling murah pertama yang bisa dikunjungi dengan modal Rp 750 ribu adalah kepulauan Karimunjawa. Kamu perlu menyeberang menaiki kapal kecil terlebih dahulu dari kota Jepara selama kurang lebih 6 jam, jadi siap-siap ya buat yang mengalami mabuk laut.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Di sini kamu akan disajikan pemandangan laut biru dan pantai pasir putih yang masih asri dan indah. Selain bermain-main di pantai kamu juga bisa melakukan snorkeling untuk melihat ikan di karang dasar laut. Nah, berikut ini rincian biayanya:</span></p>\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"border-collapse: collapse; width: 558px; margin-bottom: 1rem; color: rgb(33, 37, 41); display: block; overflow-x: auto; font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<colgroup style=\"box-sizing: border-box;\">\n		<col style=\"box-sizing: border-box;\" width=\"234\" />\n		<col style=\"box-sizing: border-box;\" width=\"100\" />\n	</colgroup>\n	<tbody style=\"box-sizing: border-box;\">\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Pengeluaran&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Pengeluaran</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Bujet&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Bujet</span></td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport bus dari Jakarta ke Pelabuhan Kartini Jepara (Via Semarang): &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport bus dari Jakarta ke Pelabuhan Kartini Jepara (Via Semarang):</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 185.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 185.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kapal dari Pelabuhan Kartini ke Pulau Karimunjawa: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kapal dari Pelabuhan Kartini ke Pulau Karimunjawa:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 90.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 90.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Penginapan per 2 malam: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Penginapan per 2 malam:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 300.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 300.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Snorkeling: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Snorkeling:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 50.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 50.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Biaya Makan per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Biaya Makan per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 125.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 125.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Total biaya: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Total biaya:</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 750.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Rp 750.000</span></td>\n		</tr>\n	</tbody>\n</table>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	Baca juga:&nbsp;<a href=\"https://lifepal.co.id/media/20-tempat-wisata-di-malang/\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; color: rgb(29, 102, 222); text-decoration-line: none; background-color: transparent;\" target=\"_blank\"><span style=\"box-sizing: border-box; font-weight: bolder;\">20 Tempat Wisata di Malang yang Kekinian Banget</span></a></p>\n<h2 style=\"box-sizing: border-box; margin: 20px 0px; line-height: 1.5; font-size: 28px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">\n	<span style=\"box-sizing: border-box; font-weight: bolder;\">2. &nbsp;Tanah Lot, Bali &ndash; Rp 664 ribu</span></h2>\n<figure aria-describedby=\"caption-attachment-94673\" class=\"wp-caption alignnone\" id=\"attachment_94673\" style=\"box-sizing: border-box; margin: 10px 0px 1rem; max-width: 100%; height: auto; font-size: 14px; position: relative; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; width: 641px;\">\n	<img alt=\"traveling murah\" class=\"wp-image-94673\" height=\"423\" sizes=\"(max-width: 641px) 100vw, 641px\" src=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/traveling-murah-tanah-lot.jpg\" srcset=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014533/traveling-murah-tanah-lot.jpg 500w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014533/traveling-murah-tanah-lot-300x198.jpg 300w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014533/traveling-murah-tanah-lot-450x297.jpg 450w\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;\" width=\"641\" /><figcaption class=\"wp-caption-text\" id=\"caption-attachment-94673\" style=\"box-sizing: border-box; font-size: 10px; color: rgb(153, 153, 153); width: 558px; opacity: 0.7; text-align: right; margin-top: 5px;\">Tanah Lot menyimpan keindahan tersendiri. (Shutterstock)</figcaption></figure>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Selanjutnya, ada Tanah Lot yang bisa jadi destinasi traveling murah kamu, biayanya sekitar Rp 664 ribu untuk sekalian bisa muter-muter di Bali. Walaupun udah banyak dikunjungi wisatawan, pesona Bali gak pernah pudar.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Tanah Lot menyajikan pemandangan yang cantik langsung ke laut, terutama ketika cuacanya sedang cerah. Tebingnya yang eksotis juga menambah daya tarik destinasi wisata yang satu ini.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Hal yang harus diperhatikan adalah kamu harus mematuhi rambu yang ada di sekitarnya sebab sangat berbahaya jika terpeleset dan jatuh ke bawah tebing yang tajam. Beberapa kali sempat ada korban jiwa akibat melanggar rambu itu. Berikut rincian biayanya:</span></p>\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"border-collapse: collapse; width: 558px; margin-bottom: 1rem; color: rgb(33, 37, 41); display: block; overflow-x: auto; font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<colgroup style=\"box-sizing: border-box;\">\n		<col style=\"box-sizing: border-box;\" width=\"234\" />\n		<col style=\"box-sizing: border-box;\" width=\"100\" />\n	</colgroup>\n	<tbody style=\"box-sizing: border-box;\">\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Pengeluaran&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Pengeluaran</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Bujet&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Bujet</span></td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kereta dari Jakarta ke Pelabuhan Ketapang (Via Malang): &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kereta dari Jakarta ke Pelabuhan Ketapang (Via Malang):</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 168.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 168.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kapal dari Pelabuhan Ketapang ke Pelabuhan Gilimanuk: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kapal dari Pelabuhan Ketapang ke Pelabuhan Gilimanuk:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 20.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 20.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport bus ke daerah Ubung: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport bus ke daerah Ubung:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 50.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 50.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Sewa motor per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Sewa motor per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 60.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 60.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Penginapan per malam: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Penginapan per malam:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 206.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 206.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Biaya Makan per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Biaya Makan per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 80.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 80.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Tiket masuk tempat wisata: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Tiket masuk tempat wisata:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 80.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 80.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Total biaya: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Total biaya:</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 664.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Rp 664.000</span></td>\n		</tr>\n	</tbody>\n</table>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	Baca juga:&nbsp;<a href=\"https://lifepal.co.id/media/tempat-wisata-di-bandung-terbaru/\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; color: rgb(29, 102, 222); text-decoration-line: none; background-color: transparent;\" target=\"_blank\"><span style=\"box-sizing: border-box; font-weight: bolder;\">20 Tempat Wisata di Bandung Terbaru yang Musti Didatangi</span></a></p>\n<h2 style=\"box-sizing: border-box; margin: 20px 0px; line-height: 1.5; font-size: 28px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">\n	<span style=\"box-sizing: border-box; font-weight: bolder;\">3. Malioboro, DIY &ndash; Rp 518 ribu</span></h2>\n<figure aria-describedby=\"caption-attachment-94672\" class=\"wp-caption alignnone\" id=\"attachment_94672\" style=\"box-sizing: border-box; margin: 10px 0px 1rem; max-width: 100%; height: auto; font-size: 14px; position: relative; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; width: 641px;\">\n	<img alt=\"traveling murah\" class=\"wp-image-94672\" height=\"428\" sizes=\"(max-width: 641px) 100vw, 641px\" src=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/traveling-murah-yogyakarta.jpg\" srcset=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014531/traveling-murah-yogyakarta.jpg 500w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014531/traveling-murah-yogyakarta-300x200.jpg 300w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014531/traveling-murah-yogyakarta-450x301.jpg 450w\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;\" width=\"641\" /><figcaption class=\"wp-caption-text\" id=\"caption-attachment-94672\" style=\"box-sizing: border-box; font-size: 10px; color: rgb(153, 153, 153); width: 558px; opacity: 0.7; text-align: right; margin-top: 5px;\">Belum ke Yogyakarta namanya kalau belum ke Malioboro. (Shutterstock)</figcaption></figure>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Yogyakarta menjadi destinasi traveling murah yang hampir seluruh masyarakat Indonesia ketahui, apalagi di jalan Malioboro. Di sana banyak jajanan sampai pusat oleh-oleh dengan harga cukup terjangkau.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Kalau bosen ke Malioboro kamu bisa memilih destinasi wisata lainnya. Misalnya saja pantai-pantai di sekitar Gunung Kidul seperti Wediombo dan Sadranan yang gak kalah bagus dari pantai-pantai di Bali. Berikut ini estimasi biayanya untuk liburan ke DIY:</span></p>\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"border-collapse: collapse; width: 558px; margin-bottom: 1rem; color: rgb(33, 37, 41); display: block; overflow-x: auto; font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<colgroup style=\"box-sizing: border-box;\">\n		<col style=\"box-sizing: border-box;\" width=\"234\" />\n		<col style=\"box-sizing: border-box;\" width=\"100\" />\n	</colgroup>\n	<tbody style=\"box-sizing: border-box;\">\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Pengeluaran&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Pengeluaran</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Bujet&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Bujet</span></td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kereta dari Jakarta ke Yogyakarta: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kereta dari Jakarta ke Yogyakarta:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 240.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 240.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport angkot: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport angkot:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 8.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 8.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Sewa motor per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Sewa motor per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 60.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 60.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Penginapan per malam: ` &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Penginapan per malam: `</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 120.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 120.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Biaya makan per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Biaya makan per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 90.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 90.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Total biaya: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Total biaya:</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 518.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Rp 518.000</span></td>\n		</tr>\n	</tbody>\n</table>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	Baca juga:&nbsp;<a href=\"https://lifepal.co.id/media/20-tempat-wisata-di-surabaya-kekinian/\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; color: rgb(29, 102, 222); text-decoration-line: none; background-color: transparent;\" target=\"_blank\"><span style=\"box-sizing: border-box; font-weight: bolder;\">20 Tempat Wisata Surabaya yang Bakal Bikin Kamu Betah</span></a></p>\n<h2 style=\"box-sizing: border-box; margin: 20px 0px; line-height: 1.5; font-size: 28px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">\n	<span style=\"box-sizing: border-box; font-weight: bolder;\">4. Ujung Kulon, Banten &ndash; Rp 500 ribu</span></h2>\n<figure aria-describedby=\"caption-attachment-94671\" class=\"wp-caption alignnone\" id=\"attachment_94671\" style=\"box-sizing: border-box; margin: 10px 0px 1rem; max-width: 100%; height: auto; font-size: 14px; position: relative; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; width: 641px;\">\n	<img alt=\"traveling murah\" class=\"wp-image-94671\" height=\"360\" sizes=\"(max-width: 641px) 100vw, 641px\" src=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/traveling-murah-ujung-kulon.jpg\" srcset=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014529/traveling-murah-ujung-kulon.jpg 500w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014529/traveling-murah-ujung-kulon-300x169.jpg 300w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014529/traveling-murah-ujung-kulon-450x253.jpg 450w\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;\" width=\"641\" /><figcaption class=\"wp-caption-text\" id=\"caption-attachment-94671\" style=\"box-sizing: border-box; font-size: 10px; color: rgb(153, 153, 153); width: 558px; opacity: 0.7; text-align: right; margin-top: 5px;\">&lsquo;Harta karun&rsquo; di ujung barat Pulau Jawa. (Shutterstock)</figcaption></figure>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Destinasi traveling murah selanjutnya adalah Ujung Kulon yang berada di Banten, gak jauh dari DKI Jakarta. Buat pecinta pantai pasti cocok banget nih pergi ke lokasi yang satu ini karena terdapat pantai yang indah dan aneka ragam biota laut.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Ada juga pulau yang bisa kamu kunjungi seperti pulau Peucang. Uang yang harus kamu keluarkan sekitar Rp 500 ribu aja, berikut rinciannya:</span></p>\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"border-collapse: collapse; width: 558px; margin-bottom: 1rem; color: rgb(33, 37, 41); display: block; overflow-x: auto; font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<colgroup style=\"box-sizing: border-box;\">\n		<col style=\"box-sizing: border-box;\" width=\"234\" />\n		<col style=\"box-sizing: border-box;\" width=\"100\" />\n	</colgroup>\n	<tbody style=\"box-sizing: border-box;\">\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Pengeluaran&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Pengeluaran</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Bujet&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Bujet</span></td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport bus dari Jakarta ke Labuan: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport bus dari Jakarta ke Labuan:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 100.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 100.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kapal dari Labuan ke Pulau Peucang: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kapal dari Labuan ke Pulau Peucang:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 120.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 120.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Penginapan per malam: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Penginapan per malam:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 125.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 125.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Biaya makan per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Biaya makan per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 100.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 100.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Snorkeling: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Snorkeling:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 55.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 55.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Total biaya: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Total biaya:</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 500.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Rp 500.000</span></td>\n		</tr>\n	</tbody>\n</table>\n<h2 style=\"box-sizing: border-box; margin: 20px 0px; line-height: 1.5; font-size: 28px; color: rgb(0, 0, 0); font-family: Montserrat, sans-serif;\">\n	<span style=\"box-sizing: border-box; font-weight: bolder;\">5. Traveling murah ke Pantai Anyer, Banten &ndash; Rp 235 ribu</span></h2>\n<figure aria-describedby=\"caption-attachment-94670\" class=\"wp-caption alignnone\" id=\"attachment_94670\" style=\"box-sizing: border-box; margin: 10px 0px 1rem; max-width: 100%; height: auto; font-size: 14px; position: relative; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; width: 640px;\">\n	<img alt=\"traveling murah\" class=\"wp-image-94670\" height=\"480\" sizes=\"(max-width: 640px) 100vw, 640px\" src=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/traveling-murah-anyer.jpg\" srcset=\"https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014527/traveling-murah-anyer.jpg 500w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014527/traveling-murah-anyer-300x225.jpg 300w, https://blog-media.lifepal.co.id/wp-content/uploads/2019/04/20014527/traveling-murah-anyer-450x338.jpg 450w\" style=\"box-sizing: border-box; vertical-align: middle; border-style: none; max-width: 100%; height: auto;\" width=\"640\" /><figcaption class=\"wp-caption-text\" id=\"caption-attachment-94670\" style=\"box-sizing: border-box; font-size: 10px; color: rgb(153, 153, 153); width: 558px; opacity: 0.7; text-align: right; margin-top: 5px;\">Wisata pantai indah tak jauh dari Jakarta. (Shuttterstock)</figcaption></figure>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Yang terakhir ada Pantai Anyer di provinsi Banten yang beberapa waktu lalu sempat terkena musibah Tsunami. Sekarang kondisinya udah mulai pulih dan bisa jadi tujuan destinasi traveling murah kamu nih.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Di pantai ini kamu dapat menikmati udara segar laut dan bermain pasir di pinggiran pantainya yang indah. Siapkan paling gak dana sekitar Rp 235 ribu untuk bisa liburan kesini. Berikut rincian biayanya:</span></p>\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" dir=\"ltr\" style=\"border-collapse: collapse; width: 558px; margin-bottom: 1rem; color: rgb(33, 37, 41); display: block; overflow-x: auto; font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<colgroup style=\"box-sizing: border-box;\">\n		<col style=\"box-sizing: border-box;\" width=\"234\" />\n		<col style=\"box-sizing: border-box;\" width=\"100\" />\n	</colgroup>\n	<tbody style=\"box-sizing: border-box;\">\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Pengeluaran&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Pengeluaran</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Bujet&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Bujet</span></td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport kereta dari Jakarta ke Cilegon: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport kereta dari Jakarta ke Cilegon:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 20.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 20.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Transport Angkot dari Cilegon ke Pantai Anyer: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Transport Angkot dari Cilegon ke Pantai Anyer:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 15.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 15.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Penginapan per malam: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Penginapan per malam:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 125.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 125.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Biaya Makan per hari: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Biaya Makan per hari:</td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 75.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				Rp 75.000</td>\n		</tr>\n		<tr style=\"box-sizing: border-box;\">\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Total biaya: &quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Total biaya:</span></td>\n			<td data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rp 235.000&quot;}\" style=\"box-sizing: border-box; padding: 0.75rem; vertical-align: top; border: 1px solid rgb(223, 223, 223); max-width: 576px;\">\n				<span style=\"box-sizing: border-box; font-weight: bolder;\">Rp 235.000</span></td>\n		</tr>\n	</tbody>\n</table>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Semua biaya di kelima destinasi di atas mungkin aja berbeda satu orang dengan yang lain karena berbagai faktor seperti lokasi tempat tinggal dan referensi pilihan pribadi.</span></p>\n<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: rgb(94, 94, 94); font-family: Montserrat, sans-serif; font-size: 14px;\">\n	<span style=\"box-sizing: border-box;\">Nah itu dia 5 destinasi traveling murah yang bisa dikunjungi oleh para mahasiswa yang punya bujet gak lebih dari Rp 750 ribu. Tunggu apa lagi, langsung aja rencanakan liburan versi kamu mulai dari sekarang agar punya waktu untuk menabung. Selamat liburan!&nbsp;<span style=\"box-sizing: border-box; font-weight: bolder;\">(Editor: Ruben Setiawan)</span></span></p>\n', '2020-05-01 03:26:55');
INSERT INTO `artikel` (`id`, `judul`, `thumbnail`, `artikel`, `tanggal`) VALUES
(9, '5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi ', '6bc90-inst-image-1-8bbe8c92bb523da0aa8a0ef2359fd6a3_600x400.jpg', '<p>\n	<span style=\"font-size:14px;\"><span style=\"color: rgb(51, 51, 51); font-family: Roboto, sans-serif;\">Jawa Timur merupakan salah satu provinsi di Indonesia yang terkenal dengan wisata alamnya yang melimpah. Salah satu wisata alam yang terkenal di Jawa Timur adalalah wisata air terjunnya. Pemandangan di sekitar air terjunnya yang eksotis dan mempesona, menarik minat wisatawan dari berbagai daerah untuk mengunjunginya. Nah, berikut ini ulasan tentang lima air terjun di Jawa Timur yang wajib banget buat kamu karena pemandangannya yang eksotis banget.</span></span></p>\n<h2 0px=\"\" 20px=\"\" color:=\"\" font-size:=\"\" font-weight:=\"\" line-height:=\"\" margin:=\"\" none=\"\" outline:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \">\n	<strong><span style=\"font-size:14px;\">1. Coban Sewu</span></strong></h2>\n<div class=\"embed-image\" style=\"box-sizing: border-box; position: relative; margin-bottom: 12px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\"><img alt=\"5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi&nbsp;\" src=\"https://cdn.idntimes.com/content-images/community/2019/04/e75ebd6f1fa65a2518dc2b7440c00b71-87f5a65032762ab1064cf4174d210dc8.jpg\" style=\"box-sizing: border-box; outline: none !important; border: 0px; vertical-align: middle; max-width: 100%; width: 765px; height: auto !important;\" /><span class=\"main-article-source\" style=\"box-sizing: border-box; display: block; position: absolute; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.4); text-align: center; color: rgb(255, 255, 255); font-style: italic; padding: 4px 10px; outline: none !important;\">instagram.com/joshuafavian</span></span></div>\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\">Air terjun yang eksotis di Jawa Timur, yang pertama adalah Coban Sewu. Coban yang berarti air terjun, dan Sewu berarti seribu, yang menggambarkan banyaknya mata air yang berada di Coban Sewu ini. Air terjun yang lokasinya berada di dua kabupaten, yaitu Kabupaten Malang dan Lumajang, serta berada di lereng Gunung Semeru ini, memiliki pemandangan alam yang luar biasa eksotisnya. Air terjun dengan ketinggian 180 meter ini, dihiasi oleh tumbuhan hijau segar yang menempel di dinding tebing yang berwarna kecoklatan.</span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\">Meski memiliki pemandangan yang sangat eksotis dan mempesona, para pengunjung harus melewati trak yang lumayan ekstrem jika ingin menuju ke air terjunnya. Namun, itu semua akan terbayarkan dengan keindahan air terjunnya yang sangat menawan, dengan airnya yang sangat jernih. Untuk harga tiket masuknya juga sangat terjangkau, yaitu Rp 10.000/orang.</span></p>\n<h2 0px=\"\" 20px=\"\" color:=\"\" font-size:=\"\" font-weight:=\"\" line-height:=\"\" margin:=\"\" none=\"\" outline:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \">\n	<strong><span style=\"font-size:14px;\">2. Air Terjun Madakaripura</span></strong></h2>\n<div class=\"embed-image\" style=\"box-sizing: border-box; position: relative; margin-bottom: 12px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\"><img alt=\"5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi&nbsp;\" src=\"https://cdn.idntimes.com/content-images/community/2019/04/c4fcb9d8888c3d7d8eca4ee1b10f3a88-47888258bead2ada597873213f9ccd86.jpg\" style=\"box-sizing: border-box; outline: none !important; border: 0px; vertical-align: middle; max-width: 100%; width: 765px; height: auto !important;\" /><span class=\"main-article-source\" style=\"box-sizing: border-box; display: block; position: absolute; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.4); text-align: center; color: rgb(255, 255, 255); font-style: italic; padding: 4px 10px; outline: none !important;\">instagram.com/airterjunmadakaripura</span></span></div>\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\">Nah, ini dia air terjun yang paling terkenal dan paling eksotis di Jawa Timur, yaitu Air Terjun Madakaripura. Dengan ketinggiannya yang mencapai 200 meter, Air Terjun Madakaripura berada di urutan no.1 sebagai air terjun tertinggi di Pulau Jawa, dan menempati urutan ke. 2 sebagai air terjun tertinggi di Indonesia, setelah Air Terjun Ponot yang menempati urutan no. 1, yang lokasinya berada di Sumatra Utara. Air terjun yang masih satu kawasan dengan Taman Nasional Bromo Tengger Semeru (TNBTS) ini, memiliki pemandangan yang luar biasa indahnya, dengan banyaknya tumbuhan hijau yang mengelilingi air terjun dengan sejuta pesona tersebut.</span></p>\n<p style=\"box-sizing: border-box; margin: 0px 0px 20px; line-height: 1.89; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\">Warna air kolam yang berada tepat di bawah Air Terjun Madakaripura adalah berwarna sapphire lho, yang otomatis menambah keindahan Air Terjun Madakaripura. Air terjun yang konon tempat bertapanya Mahapatih Gajah Mada ini, mendapat julukan sebagai air terjun abadi, karena debit airnya tidak pernah habis, meskipun sedang musim kemarau. Untuk harga tiket ke Air Terjun Madakaripura juga sangat terjangkau lho, yaitu sekitar Rp 11.000/orang.</span></p>\n<h2 0px=\"\" 20px=\"\" color:=\"\" font-size:=\"\" font-weight:=\"\" line-height:=\"\" margin:=\"\" none=\"\" outline:=\"\" roboto=\"\" style=\"box-sizing: border-box; font-family: \">\n	<strong><span style=\"font-size:14px;\">3. Coban Pelangi</span></strong></h2>\n<div class=\"embed-image\" style=\"box-sizing: border-box; position: relative; margin-bottom: 12px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\"><img alt=\"5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi&nbsp;\" src=\"https://cdn.idntimes.com/content-images/community/2019/03/inst-image-1-8bbe8c92bb523da0aa8a0ef2359fd6a3.jpg\" style=\"box-sizing: border-box; outline: none !important; border: 0px; vertical-align: middle; max-width: 100%; width: 765px; height: auto !important;\" /></span></div>\n<div class=\"embed-image\" style=\"box-sizing: border-box; position: relative; margin-bottom: 12px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<span style=\"font-size:14px;\"><span class=\"main-article-source\" style=\"box-sizing: border-box; display: block; position: absolute; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.4); text-align: center; color: rgb(255, 255, 255); font-style: italic; padding: 4px 10px; outline: none !important;\">instagram.com/ahmad_anjarwicaksono</span></span></div>\n<div class=\"embed-image\" style=\"box-sizing: border-box; position: relative; margin-bottom: 12px; color: rgb(51, 51, 51); font-family: Roboto, sans-serif; font-size: 18px; outline: none !important;\">\n	<div class=\"split-page split-page3 open\" data-target=\"3\" style=\"box-sizing: border-box; outline: none !important;\">\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Coban Pelangi merupakan salah satu air terjun yang hits lho di Kota Malang. Air terjun yang masih satu kawasan dengan Taman Nasional Bromo Tengger Semeru (TNBTS) ini, memiliki pemandangan yang gak kalah eksotisnya dengan Coban Sewu. Di Coban Pelangi ini, terdapat taman bunga yang sangat cantik dengan bunganya yang warna warni, serta juga terdapat rainbow hill, yang merupakan tebing pandang yang dilengkapi dengan gazebo untuk menikmati keindahan pemandangan Coban Pelangi dari ketinggian.</span></p>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Nah, untuk fasilitasnya sudah lumayan lengkap lho, seperti mushola, kamar mandi, dan juga warung makan. Untuk tiket masuknya juga sangat terjangkau lho, yaitu Rp 10.000/orang, sedangkan untuk tarif parkir kendaraannya sekitar Rp 5.000/motor, dan Rp 10.000/mobil.</span></p>\n	</div>\n	<div class=\"split-page split-page4 open\" data-target=\"4\" style=\"box-sizing: border-box; outline: none !important;\">\n		<h2 0px=\"\" 20px=\"\" color:=\"\" font-size:=\"\" font-weight:=\"\" line-height:=\"\" margin:=\"\" roboto=\"\" style=\"box-sizing: border-box; outline: none !important; font-family: \">\n			<strong><span style=\"font-size:14px;\">4. Coban Kapas Biru</span></strong></h2>\n		<div class=\"embed-image\" style=\"box-sizing: border-box; outline: none !important; position: relative; margin-bottom: 12px;\">\n			<span style=\"font-size:14px;\"><img alt=\"5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi&nbsp;\" src=\"https://cdn.idntimes.com/content-images/community/2019/04/fb814591fc1d2cbc36921ecf9182dcd2-d55a33598e8260272721cece7ee3668a.jpg\" style=\"box-sizing: border-box; outline: none !important; border: 0px; vertical-align: middle; max-width: 100%; width: 765px; height: auto !important;\" /><span class=\"main-article-source\" style=\"box-sizing: border-box; display: block; position: absolute; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.4); text-align: center; color: rgb(255, 255, 255); font-style: italic; padding: 4px 10px; outline: none !important;\">instagram.com/joshuafavian</span></span></div>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Selain Coban Sewu, Coban Kapas Biru juga merupakan air terjun yang terkenal di Jawa Timur. Lokasi keduanya berada sama-sama berada di Lumajang, dan dekat dengan lokasi Puncak B29, yang merupakan objek wisata unggulan di Lumajang. Dinamakan Coban Kapas Biru karena aliran airnya berwarna putih, serta sisi-sisi bagian aliran air terjunnya berwarna kebiruan jika dilihat dari jarak yang jauh.</span></p>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Coban Kapas Biru memiliki pemandangan yang sangat eksotis, karena air terjunnya dikelilingi oleh tebing-tebing tinggi berwana coklat kemerahan dengan lumut-lumutnya yang hijau, dan pepohonan rimbun yang berada di sekitarnya. Fasilitas Coban Kapas Biru juga sudah lumayan lengkap lho, seperti mushola, warung makan, dan toilet. Nah, untuk harga tiket masuknya juga sangat terjangkau, yaitu Rp 7.000/orang.</span></p>\n	</div>\n	<div class=\"split-page split-page5 open\" data-target=\"5\" style=\"box-sizing: border-box; outline: none !important;\">\n		<div class=\"inarticle-ads\" style=\"box-sizing: border-box; outline: none !important; margin: 10px auto;\">\n			&nbsp;</div>\n		<h2 0px=\"\" 20px=\"\" color:=\"\" font-size:=\"\" font-weight:=\"\" line-height:=\"\" margin:=\"\" roboto=\"\" style=\"box-sizing: border-box; outline: none !important; font-family: \">\n			<strong><span style=\"font-size:14px;\">5. Air Terjun Kembar Arum</span></strong></h2>\n		<div class=\"embed-image\" style=\"box-sizing: border-box; outline: none !important; position: relative; margin-bottom: 12px;\">\n			<span style=\"font-size:14px;\"><img alt=\"5 Air Terjun di Jawa Timur yang Eksotis dan Wajib Kamu Kunjungi&nbsp;\" src=\"https://cdn.idntimes.com/content-images/post/20190405/23824592-1957731491182346-2318867720877113344-n-ffeed7eb3cdf8242bbcb8a293d3b189b.jpg\" style=\"box-sizing: border-box; outline: none !important; border: 0px; vertical-align: middle; max-width: 100%; width: 765px; height: auto !important;\" /><span class=\"main-article-source\" style=\"box-sizing: border-box; display: block; position: absolute; bottom: 0px; right: 0px; background-color: rgba(0, 0, 0, 0.4); text-align: center; color: rgb(255, 255, 255); font-style: italic; padding: 4px 10px; outline: none !important;\">instagram.com/acheromabwx</span></span></div>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Air Terjun Kembar Arum merupakan air terjun yang letaknya berada di kaki Gunung Raung, Banyuwangi. Air Terjun Kembar Arum ini, termasuk air terjun yang cukup unik lho, karena sumber air terjunnya berasal dari air sungai yang membelah persawahan yang jatuh ke jurang. Aliran air tersebut membentuk sungai-sungai kecil dibawahnya, membuat Air Terjun Kembar Arum semakin unik dan juga eksotis.</span></p>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Air Terjun Kembar Arum ini tidak terlalu dalam lho, sehingga para wisatawan dapat bermain air dan juga berenang. Selain itu, panoramanya juga instagramable abis lho, sehingga nantinya dapat memperindah feed instagrammu. Untuk harga tiket masuknya masih gratis lho, para pengunjung hanya cukup membayar parkir kendaraannya saja, yang diparkirkan di rumah warga setempat.</span></p>\n		<p style=\"box-sizing: border-box; outline: none !important; margin: 0px 0px 20px; line-height: 1.89;\">\n			<span style=\"font-size:14px;\">Nah, itulah ulasan dari lima air terjun di Jawa Timur yang eksotis dan wajib banget buat kamu kunjungi. Sudah siap untuk berlibur?</span></p>\n	</div>\n</div>\n<p>\n	&nbsp;</p>\n', '2020-05-03 13:27:19'),
(10, '10 Tips Aman Berkendara Saat Musim Hujan', 'cc625-hujan.jpg', '<p>\n	<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">Akhir tahun telah tiba, itu berarti musim penghujan pun telah datang. Meski banyak yang mensyukuri datangnya musim hujan, hujan juga seringkali dituding sebagai penyebab terjadinya kecelakaan, akibat jalan licin dan tergenang.</span></p>\n<p>\n	<span style=\"color: rgb(51, 51, 51); font-family: Montserrat, sans-serif; font-size: 18px;\">Nah, bagaimana caranya agar berkendara tetap aman di musim penghujan? Berikut 10 tips berkendara saat musim hujan, baik bagi kendaraan roda empat atau roda dua:</span></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>1. Rencanakan rute sebelum bepergian</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Pastikan rute jalan yang akan Anda lewati untuk mencapai tujuan. Terlebih saat Anda menuju daerah yang jarang atau belum pernah dikunjungi. Perasaan tersesat akan menimbulkan kebingungan dan menganggu konsentrasi. Terlebih lagi, potensi cuaca dan jarak pandang yang buruk membutuhkan kemampuan mengemudi ekstra hati-hati. Untuk menghindari resiko tersesat, rencanakan rute perjalanan dengan baik.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>2. Periksa semua lampu kendaraan</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Jangan lupa periksa semua lampu kendaraan, apakah semua lampu dapat berfungsi dengan baik. Lampu tersebut bermanfaat membantu Anda melihat di jarak pandang yang terbatas karena hujan. Nyalakan lampu utama meskipun siang hari dan hujan rintik-rintik. Hal ini akan membantu pengendara lain melihat kendaraan Anda.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>3. Periksa kondisi tekanan udara dalam ban</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Kondisi tekanan ban yang cukup dan alur ban yang masih baik akan menghindari kendaraan Anda melayang di atas air (aquaplaning) dan tergelincir (slip) pada saat hujan. Jangan mengambil resiko dengan menggunakan ban yang sudah tipis. Sebagai tindakan preventif, periksa kondisi ban Anda seminggu sekali.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>4. Periksa kondisi utama komponen kendaraan</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Periksa kemudi, pedal rem, gas maupun kopling apakah sudah dalam kondisi baik atau tidak.&nbsp; Berikan perawatan ekstra selama musim hujan karena untuk mengantisipasi keadaan darurat atau akibat kesalahan orang lain yang dapat menyebabkan kecelakaan.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>5. Gunakan alas kaki yang tidak licin</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Gunakan alas kaki yang tidak licin, tahan air dan aman untuk berkendara. Persiapkan juga jas hujan yang berbentuk baju dan celana, bagi pengendara motor, karena jas hujan seperti itu lebih aman dibandingkan yang berbentuk ponco.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>6. Kurangi kecepatan kendaraan</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Kurangi kecepatan dalam mengendarai kendaraan karena pada saat hujan permukaan jalan licin akibat bercampurnya oli dengan air agar ban anda tidak tergelincir (slip). Mengemudikan kendaraan dalam kodisi kecepatan rendah akan membuat alur ban kendaraan anda lebih banyak bersentuhan langsung dengan aspal dan membuat daya cengkeram ban lebih baik.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>7. Jaga jarak aman kendaraan</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Jaga jarak aman dengan pengendara lain. Karena pada saat hujan jarak aman pengereman kendaraan membutuhkan jarak yang lebih jauh daripada kondisi kering.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>8. Jangan sembarang menerobos genangan air</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Jangan langsung menerobos genangan air karena kita tidak tahu kedalamannya. Hal ini bisa mengakibatkan kendaraan Anda mogok atau terperosok ke dalam lubang yang mungkin ada di dalam genangan air tersebut.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>9. Perhatikan marka jalan</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Marka jalan berfungsi untuk membantu Anda agar terhindar dari kecelakaan dan tetap berada di dalam jalur yang benar dan aman.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	<b>10. Jangan menghidupkan mesin bila terjebak banjir</b></p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Jangan menghidupkan mesin jika terjebak banjir dan mogok. Karena air masuk ke saluran pembuangan gas kendaraan Anda,&nbsp; jangan menghidupkan mesin kembali. Lebih baik didorong ke tempat yang aman, karena dikhawatirkan sistem pengapian kendaraan Anda mengalami korsleting dan dapat membuat kendaran terbakar.</p>\n<p style=\"margin: 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 18px; font-family: Montserrat, sans-serif; vertical-align: baseline; line-height: 26.5px; color: rgb(51, 51, 51); overflow-wrap: break-word;\">\n	Intinya selalu waspada dan berhati-hati di jalan ya moms. Patuhi rambu-rambu lalu lintas, perhatikan marka jalan, dan selalu konsentrasi. [Tri]</p>\n', '2020-05-03 13:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_pariwisata`
--

CREATE TABLE `artikel_pariwisata` (
  `ID_ARTIKEL` int(11) NOT NULL,
  `ID_ADMIN` int(11) NOT NULL,
  `KONTEN_ARTIKEL` varchar(20) DEFAULT NULL,
  `JUDUL_ARTIKEL` varchar(50) DEFAULT NULL,
  `TEXT_ARTIKEL` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `kab_kota`
--

CREATE TABLE `kab_kota` (
  `id_kab` int(4) NOT NULL,
  `kota` varchar(80) DEFAULT NULL,
  `id_prov` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kab_kota`
--

INSERT INTO `kab_kota` (`id_kab`, `kota`, `id_prov`) VALUES
(1, 'Aceh Barat', 1),
(2, 'Aceh Barat Daya', 1),
(3, 'Aceh Besar', 1),
(4, 'Aceh Jaya', 1),
(5, 'Aceh Selatan', 1),
(6, 'Aceh Singkil', 1),
(7, 'Aceh Tamiang', 1),
(8, 'Aceh Tengah', 1),
(9, 'Aceh Tenggara', 1),
(10, 'Aceh Timur', 1),
(11, 'Aceh Utara', 1),
(12, 'Bener Meriah', 1),
(13, 'Bireuen', 1),
(14, 'Gayo Lues', 1),
(15, 'Nagan Raya', 1),
(16, 'Pidie', 1),
(17, 'Pidie Jaya', 1),
(18, 'Simeulue', 1),
(19, 'Banda Aceh', 1),
(20, 'Langsa', 1),
(21, 'Lhokseumawe', 1),
(22, 'Sabang', 1),
(23, 'Subulussalam', 1),
(24, 'Asahan', 2),
(25, 'Batu Bara', 2),
(26, 'Dairi', 2),
(27, 'Deli Serdang', 2),
(28, 'Humbang Hasundutan', 2),
(29, 'Karo', 2),
(30, 'Labuhanbatu', 2),
(31, 'Labuhanbatu Selatan', 2),
(32, 'Labuhanbatu Utara', 2),
(33, 'Langkat', 2),
(34, 'Mandailing Natal', 2),
(35, 'Nias', 2),
(36, 'Nias Barat', 2),
(37, 'Nias Selatan', 2),
(38, 'Nias Utara', 2),
(39, 'Padang Lawas', 2),
(40, 'Padang Lawas Utara', 2),
(41, 'Pakpak Bharat', 2),
(42, 'Samosir', 2),
(43, 'Serdang Bedagai', 2),
(44, 'Simalungun', 2),
(45, 'Tapanuli Selatan', 2),
(46, 'Tapanuli Tengah', 2),
(47, 'Tapanuli Utara', 2),
(48, 'Toba Samosir', 2),
(49, 'Binjai', 2),
(50, 'Gunungsitoli', 2),
(51, 'Medan', 2),
(52, 'Padangsidempuan', 2),
(53, 'Pematangsiantar', 2),
(54, 'Sibolga', 2),
(55, 'Tanjungbalai', 2),
(56, 'Tebing Tinggi', 2),
(57, 'Agam', 3),
(58, 'Dharmasraya', 3),
(59, 'Kepulauan Mentawai', 3),
(60, 'Lima Puluh ', 3),
(61, 'Padang Pariaman', 3),
(62, 'Pasaman', 3),
(63, 'Pasaman Barat', 3),
(64, 'Pesisir Selatan', 3),
(65, 'Sijunjung', 3),
(66, 'Solok', 3),
(67, 'Solok Selatan', 3),
(68, 'Tanah Datar', 3),
(69, 'Bukittinggi', 3),
(70, 'Padang', 3),
(71, 'Padangpanjang', 3),
(72, 'Pariaman', 3),
(73, 'Payakumbuh', 3),
(74, 'Sawahlunto', 3),
(75, 'Solok', 3),
(76, 'Bengkalis', 4),
(77, 'Indragiri Hilir', 4),
(78, 'Indragiri Hulu', 4),
(79, 'Kampar', 4),
(80, 'Kepulauan Meranti', 4),
(81, 'Kuantan Singingi', 4),
(82, 'Pelalawan', 4),
(83, 'Rokan Hilir', 4),
(84, 'Rokan Hulu', 4),
(85, 'Siak', 4),
(86, 'Dumai', 4),
(87, 'Pekanbaru', 4),
(88, 'Bintan', 5),
(89, 'Karimun', 5),
(90, 'Kepulauan Anambas', 5),
(91, 'Lingga', 5),
(92, 'Natuna', 5),
(93, 'Batam', 5),
(94, 'Tanjung Pinang', 5),
(95, 'Batanghari', 6),
(96, 'Bungo', 6),
(97, 'Kerinci', 6),
(98, 'Merangin', 6),
(99, 'Muaro Jambi', 6),
(100, 'Sarolangun', 6),
(101, 'Tanjung Jabung Barat', 6),
(102, 'Tanjung Jabung Timur', 6),
(103, 'Tebo', 6),
(104, 'Jambi', 6),
(105, 'Sungaipenuh', 6),
(106, 'Bengkulu Selatan', 7),
(107, 'Bengkulu Tengah', 7),
(108, 'Bengkulu Utara', 7),
(109, 'Kaur', 7),
(110, 'Kepahiang', 7),
(111, 'Lebong', 7),
(112, 'Mukomuko', 7),
(113, 'Rejang Lebong', 7),
(114, 'Seluma', 7),
(115, 'Bengkulu', 7),
(116, 'Banyuasin', 8),
(117, 'Empat Lawang', 8),
(118, 'Lahat', 8),
(119, 'Muara Enim', 8),
(120, 'Musi Banyuasin', 8),
(121, 'Musi Rawas', 8),
(122, 'Musi Rawas Utara', 8),
(123, 'Ogan Ilir', 8),
(124, 'Ogan Komering Ilir', 8),
(125, 'Ogan Komering Ulu', 8),
(126, 'Ogan Komering Ulu Selatan', 8),
(127, 'Ogan Komering Ulu Timur', 8),
(128, 'Penukal Abab Lematang Ilir', 8),
(129, 'Lubuklinggau', 8),
(130, 'Pagar Alam', 8),
(131, 'Palembang', 8),
(132, 'Prabumulih', 8),
(133, 'Bangka', 9),
(134, 'Bangka Barat', 9),
(135, 'Bangka Selatan', 9),
(136, 'Bangka Tengah', 9),
(137, 'Belitung', 9),
(138, 'Belitung Timur', 9),
(139, 'Pangkal Pinang', 9),
(140, 'Lampung Barat', 10),
(141, 'Lampung Selatan', 10),
(142, 'Lampung Tengah', 10),
(143, 'Lampung Timur', 10),
(144, 'Lampung Utara', 10),
(145, 'Mesuji', 10),
(146, 'Pesawaran', 10),
(147, 'Pesisir Barat', 10),
(148, 'Pringsewu', 10),
(149, 'Tanggamus', 10),
(150, 'Tulang Bawang', 10),
(151, 'Tulang Bawang Barat', 10),
(152, 'Way Kanan', 10),
(153, 'Bandar Lampung', 10),
(154, 'Metro', 10),
(155, 'Lebak', 11),
(156, 'Pandeglang', 11),
(157, 'Serang', 11),
(158, 'Tangerang', 11),
(159, 'Cilegon', 11),
(160, 'Serang', 11),
(161, 'Tangerang', 11),
(162, 'Tangerang Selatan', 11),
(163, 'Bandung', 12),
(164, 'Bandung Barat', 12),
(165, 'Bekasi', 12),
(166, 'Bogor', 12),
(167, 'Ciamis', 12),
(168, 'Cianjur', 12),
(169, 'Cirebon', 12),
(170, 'Garut', 12),
(171, 'Indramayu', 12),
(172, 'Karawang', 12),
(173, 'Kuningan', 12),
(174, 'Majalengka', 12),
(175, 'Pangandaran', 12),
(176, 'Purwakarta', 12),
(177, 'Subang', 12),
(178, 'Sukabumi', 12),
(179, 'Sumedang', 12),
(180, 'Tasikmalaya', 12),
(181, 'Bandung', 12),
(182, 'Banjar', 12),
(183, 'Bekasi', 12),
(184, 'Bogor', 12),
(185, 'Cimahi', 12),
(186, 'Cirebon', 12),
(187, 'Depok', 12),
(188, 'Sukabumi', 12),
(189, 'Tasikmalaya', 12),
(190, 'Kepulauan Seribu', 13),
(191, 'Jakarta Barat', 13),
(192, 'Jakarta Pusat', 13),
(193, 'Jakarta Selatan', 13),
(194, 'Jakarta Timur', 13),
(195, 'Jakarta Utara', 13),
(196, 'Banjarnegara', 14),
(197, 'Banyumas', 14),
(198, 'Batang', 14),
(199, 'Blora', 14),
(200, 'Boyolali', 14),
(201, 'Brebes', 14),
(202, 'Cilacap', 14),
(203, 'Demak', 14),
(204, 'Grobogan', 14),
(205, 'Jepara', 14),
(206, 'Karanganyar', 14),
(207, 'Kebumen', 14),
(208, 'Kendal', 14),
(209, 'Klaten', 14),
(210, 'Kudus', 14),
(211, 'Magelang', 14),
(212, 'Pati', 14),
(213, 'Pekalongan', 14),
(214, 'Pemalang', 14),
(215, 'Purbalingga', 14),
(216, 'Purworejo', 14),
(217, 'Rembang', 14),
(218, 'Semarang', 14),
(219, 'Sragen', 14),
(220, 'Sukoharjo', 14),
(221, 'Tegal', 14),
(222, 'Temanggung', 14),
(223, 'Wonogiri', 14),
(224, 'Wonosobo', 14),
(225, 'Magelang', 14),
(226, 'Pekalongan', 14),
(227, 'Salatiga', 14),
(228, 'Semarang', 14),
(229, 'Surakarta', 14),
(230, 'Tegal', 14),
(231, 'Bantul', 15),
(232, 'Gunungkidul', 15),
(233, 'Kulon Progo', 15),
(234, 'Sleman', 15),
(235, 'Yogyakarta', 15),
(236, 'Bangkalan', 16),
(237, 'Banyuwangi', 16),
(238, 'Blitar', 16),
(239, 'Bojonegoro', 16),
(240, 'Bondowoso', 16),
(241, 'Gresik', 16),
(242, 'Jember', 16),
(243, 'Jombang', 16),
(244, 'Kediri', 16),
(245, 'Lamongan', 16),
(246, 'Lumajang', 16),
(247, 'Madiun', 16),
(248, 'Magetan', 16),
(249, 'Malang', 16),
(250, 'Mojokerto', 16),
(251, 'Nganjuk', 16),
(252, 'Ngawi', 16),
(253, 'Pacitan', 16),
(254, 'Pamekasan', 16),
(255, 'Pasuruan', 16),
(256, 'Ponorogo', 16),
(257, 'Probolinggo', 16),
(258, 'Sampang', 16),
(259, 'Sidoarjo', 16),
(260, 'Situbondo', 16),
(261, 'Sumenep', 16),
(262, 'Trenggalek', 16),
(263, 'Tuban', 16),
(264, 'Tulungagung', 16),
(265, 'Batu', 16),
(266, 'Blitar', 16),
(267, 'Kediri', 16),
(268, 'Madiun', 16),
(269, 'Malang', 16),
(270, 'Mojokerto', 16),
(271, 'Pasuruan', 16),
(272, 'Probolinggo', 16),
(273, 'Surabaya', 16),
(274, 'Badung', 17),
(275, 'Bangli', 17),
(276, 'Buleleng', 17),
(277, 'Gianyar', 17),
(278, 'Jembrana', 17),
(279, 'Karangasem', 17),
(280, 'Klungkung', 17),
(281, 'Tabanan', 17),
(282, 'Denpasar', 17),
(283, 'Bima', 18),
(284, 'Dompu', 18),
(285, 'Lombok Barat', 18),
(286, 'Lombok Tengah', 18),
(287, 'Lombok Timur', 18),
(288, 'Lombok Utara', 18),
(289, 'Sumbawa', 18),
(290, 'Sumbawa Barat', 18),
(291, 'Bima', 18),
(292, 'Mataram', 18),
(293, 'Alor', 19),
(294, 'Belu', 19),
(295, 'Ende', 19),
(296, 'Flores Timur', 19),
(297, 'Kupang', 19),
(298, 'Lembata', 19),
(299, 'Malaka', 19),
(300, 'Manggarai', 19),
(301, 'Manggarai Barat', 19),
(302, 'Manggarai Timur', 19),
(303, 'Nagekeo', 19),
(304, 'Ngada', 19),
(305, 'Rote Ndao', 19),
(306, 'Sabu Raijua', 19),
(307, 'Sikka', 19),
(308, 'Sumba Barat', 19),
(309, 'Sumba Barat Daya', 19),
(310, 'Sumba Tengah', 19),
(311, 'Sumba Timur', 19),
(312, 'Timor Tengah Selatan', 19),
(313, 'Timor Tengah Utara', 19),
(314, 'Kupang', 19),
(315, 'Bengkayang', 20),
(316, 'Kapuas Hulu', 20),
(317, 'Kayong Utara', 20),
(318, 'Ketapang', 20),
(319, 'Kubu Raya', 20),
(320, 'Landak', 20),
(321, 'Melawi', 20),
(322, 'Mempawah', 20),
(323, 'Sambas', 20),
(324, 'Sanggau', 20),
(325, 'Sekadau', 20),
(326, 'Sintang', 20),
(327, 'Pontianak', 20),
(328, 'Singkawang', 20),
(329, 'Balangan', 21),
(330, 'Banjar', 21),
(331, 'Barito Kuala', 21),
(332, 'Hulu Sungai Selatan', 21),
(333, 'Hulu Sungai Tengah', 21),
(334, 'Hulu Sungai Utara', 21),
(335, 'baru', 21),
(336, 'Tabalong', 21),
(337, 'Tanah Bumbu', 21),
(338, 'Tanah Laut', 21),
(339, 'Tapin', 21),
(340, 'Banjarbaru', 21),
(341, 'Banjarmasin', 21),
(342, 'Barito Selatan', 22),
(343, 'Barito Timur', 22),
(344, 'Barito Utara', 22),
(345, 'Gunung Mas', 22),
(346, 'Kapuas', 22),
(347, 'Katingan', 22),
(348, 'waringin Barat', 22),
(349, 'waringin Timur', 22),
(350, 'Lamandau', 22),
(351, 'Murung Raya', 22),
(352, 'Pulang Pisau', 22),
(353, 'Sukamara', 22),
(354, 'Seruyan', 22),
(355, 'Palangka Raya', 22),
(356, 'Berau', 23),
(357, 'Kutai Barat', 23),
(358, 'Kutai Kartanegara', 23),
(359, 'Kutai Timur', 23),
(360, 'Mahakam Ulu', 23),
(361, 'Paser', 23),
(362, 'Penajam Paser Utara', 23),
(363, 'Balikpapan', 23),
(364, 'Bontang', 23),
(365, 'Samarinda', 23),
(366, 'Bulungan', 24),
(367, 'Malinau', 24),
(368, 'Nunukan', 24),
(369, 'Tana Tidung', 24),
(370, 'Tarakan', 24),
(371, 'Boalemo', 25),
(372, 'Bone Bolango', 25),
(373, 'Gorontalo', 25),
(374, 'Gorontalo Utara', 25),
(375, 'Pohuwato', 25),
(376, 'Gorontalo', 25),
(377, 'Majene', 26),
(378, 'Mamasa', 26),
(379, 'Mamuju', 26),
(380, 'Mamuju Tengah', 26),
(381, 'Pasangkayu', 26),
(382, 'Polewali Mandar', 26),
(383, 'Bantaeng', 27),
(384, 'Barru', 27),
(385, 'Bone', 27),
(386, 'Bulukumba', 27),
(387, 'Enrekang', 27),
(388, 'Gowa', 27),
(389, 'Jeneponto', 27),
(390, 'Kepulauan Selayar', 27),
(391, 'Luwu', 27),
(392, 'Luwu Timur', 27),
(393, 'Luwu Utara', 27),
(394, 'Maros', 27),
(395, 'Pangkajene dan Kepulauan', 27),
(396, 'Pinrang', 27),
(397, 'Sidenreng Rappang', 27),
(398, 'Sinjai', 27),
(399, 'Soppeng', 27),
(400, 'Takalar', 27),
(401, 'Tana Toraja', 27),
(402, 'Toraja Utara', 27),
(403, 'Wajo', 27),
(404, 'Makassar', 27),
(405, 'Palopo', 27),
(406, 'Parepare', 27),
(407, 'Bombana', 28),
(408, 'Buton', 28),
(409, 'Buton Selatan', 28),
(410, 'Buton Tengah', 28),
(411, 'Buton Utara', 28),
(412, 'Kolaka', 28),
(413, 'Kolaka Timur', 28),
(414, 'Kolaka Utara', 28),
(415, 'Konawe', 28),
(416, 'Konawe Kepulauan', 28),
(417, 'Konawe Selatan', 28),
(418, 'Konawe Utara', 28),
(419, 'Muna', 28),
(420, 'Muna Barat', 28),
(421, 'Wakatobi', 28),
(422, 'Bau-Bau', 28),
(423, 'Kendari', 28),
(424, 'Banggai', 29),
(425, 'Banggai Kepulauan', 29),
(426, 'Banggai Laut', 29),
(427, 'Buol', 29),
(428, 'Donggala', 29),
(429, 'Morowali', 29),
(430, 'Morowali Utara', 29),
(431, 'Parigi Moutong', 29),
(432, 'Poso', 29),
(433, 'Sigi', 29),
(434, 'Tojo Una-Una', 29),
(435, 'Tolitoli', 29),
(436, 'Palu', 29),
(437, 'Bolaang Mongondow', 30),
(438, 'Bolaang Mongondow Selatan', 30),
(439, 'Bolaang Mongondow Timur', 30),
(440, 'Bolaang Mongondow Utara', 30),
(441, 'Kepulauan Sangihe', 30),
(442, 'Kepulauan Siau Tagulandang Biaro', 30),
(443, 'Kepulauan Talaud', 30),
(444, 'Minahasa', 30),
(445, 'Minahasa Selatan', 30),
(446, 'Minahasa Tenggara', 30),
(447, 'Minahasa Utara', 30),
(448, 'Bitung', 30),
(449, 'mobagu', 30),
(450, 'Manado', 30),
(451, 'Tomohon', 30),
(452, 'Buru', 31),
(453, 'Buru Selatan', 31),
(454, 'Kepulauan Aru', 31),
(455, 'Maluku Barat Daya', 31),
(456, 'Maluku Tengah', 31),
(457, 'Maluku Tenggara', 31),
(458, 'Kepulauan Tanimbar', 31),
(459, 'Seram Bagian Barat', 31),
(460, 'Seram Bagian Timur', 31),
(461, 'Ambon', 31),
(462, 'Tual', 31),
(463, 'Halmahera Barat', 32),
(464, 'Halmahera Tengah', 32),
(465, 'Halmahera Timur', 32),
(466, 'Halmahera Selatan', 32),
(467, 'Halmahera Utara', 32),
(468, 'Kepulauan Sula', 32),
(469, 'Pulau Morotai', 32),
(470, 'Pulau Taliabu', 32),
(471, 'Ternate', 32),
(472, 'Tidore Kepulauan', 32),
(473, 'Asmat', 33),
(474, 'Biak Numfor', 33),
(475, 'Boven Digoel', 33),
(476, 'Deiyai', 33),
(477, 'Dogiyai', 33),
(478, 'Intan Jaya', 33),
(479, 'Jayapura', 33),
(480, 'Jayawijaya', 33),
(481, 'Keerom', 33),
(482, 'Kepulauan Yapen', 33),
(483, 'Lanny Jaya', 33),
(484, 'Mamberamo Raya', 33),
(485, 'Mamberamo Tengah', 33),
(486, 'Mappi', 33),
(487, 'Merauke', 33),
(488, 'Mimika', 33),
(489, 'Nabire', 33),
(490, 'Nduga', 33),
(491, 'Paniai', 33),
(492, 'Pegunungan Bintang', 33),
(493, 'Puncak', 33),
(494, 'Puncak Jaya', 33),
(495, 'Sarmi', 33),
(496, 'Supiori', 33),
(497, 'Tolikara', 33),
(498, 'Waropen', 33),
(499, 'Yahukimo', 33),
(500, 'Yalimo', 33),
(501, 'Jayapura', 33),
(502, 'Fakfak', 34),
(503, 'Kaimana', 34),
(504, 'Manokwari', 34),
(505, 'Manokwari Selatan', 34),
(506, 'Maybrat', 34),
(507, 'Pegunungan Arfak', 34),
(508, 'Raja Ampat', 34),
(509, 'Sorong', 34),
(510, 'Sorong Selatan', 34),
(511, 'Tambrauw', 34),
(512, 'Teluk Bintuni', 34),
(513, 'Teluk Wondama', 34),
(514, 'Sorong', 34);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `ID_KENDARAAN` int(5) NOT NULL,
  `ID_RENTAL` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `keuntungan`
--

CREATE TABLE `keuntungan` (
  `id_keuangan` int(11) NOT NULL,
  `bulan` varchar(15) DEFAULT NULL,
  `jumlah` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `keuntungan`
--

INSERT INTO `keuntungan` (`id_keuangan`, `bulan`, `jumlah`) VALUES
(1, 'January', 1000000),
(2, 'february', 1500000),
(3, 'maret', 1300000),
(4, 'april', 1200000);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `ID_MOBIL` int(11) NOT NULL,
  `ID_RENTAL` int(11) DEFAULT NULL,
  `FOTO` varchar(50) DEFAULT NULL,
  `MERK_KENDARAAN` varchar(20) DEFAULT NULL,
  `NAMA_KENDARAAN` varchar(50) DEFAULT NULL,
  `KAPASITAS` int(11) DEFAULT NULL,
  `PINTU` int(11) DEFAULT NULL,
  `PENDINGIN_UDARA` varchar(5) DEFAULT NULL,
  `DESKRIPSI_KENDARAAN` text,
  `TRANSISI` varchar(9) DEFAULT NULL,
  `SUPIR` varchar(5) DEFAULT NULL,
  `HARGA_SEWA_KENDARAAN` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`ID_MOBIL`, `ID_RENTAL`, `FOTO`, `MERK_KENDARAAN`, `NAMA_KENDARAAN`, `KAPASITAS`, `PINTU`, `PENDINGIN_UDARA`, `DESKRIPSI_KENDARAAN`, `TRANSISI`, `SUPIR`, `HARGA_SEWA_KENDARAAN`) VALUES
(1, 1, 'renault.PNG', 'Renault', 'Trezor', 2, 2, 'AC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac diam massa. Nunc eleifend, lorem at feugiat dapibus, lectus arcu cursus velit, vel viverra lectus odio pellentesque ipsum. Etiam ac magna ex. Integer justo dolor, pharetra fermentum consectetur eu, feugiat a sem. In varius erat quis neque tincidunt pretium. Sed cursus porta ipsum. Nulla euismod tristique justo, tempus iaculis magna dictum ut. Etiam non risus sit amet tellus blandit blandit. Donec quis sollicitudin odio, ac malesuada ante. Sed ornare tellus et lorem viverra, vitae congue magna auctor. Nam hendrerit lacus quis nisi dapibus, et condimentum metus facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'Otomatis', NULL, '1.500.00'),
(2, 1, '1-porsche-911-c4s-2019-uk-fd-hero-front_0.jpg', 'Porsche', '911Carrera', 2, 2, 'AC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac diam massa. Nunc eleifend, lorem at feugiat dapibus, lectus arcu cursus velit, vel viverra lectus odio pellentesque ipsum. Etiam ac magna ex. Integer justo dolor, pharetra fermentum consectetur eu, feugiat a sem. In varius erat quis neque tincidunt pretium. Sed cursus porta ipsum. Nulla euismod tristique justo, tempus iaculis magna dictum ut. Etiam non risus sit amet tellus blandit blandit. Donec quis sollicitudin odio, ac malesuada ante. Sed ornare tellus et lorem viverra, vitae congue magna auctor. Nam hendrerit lacus quis nisi dapibus, et condimentum metus facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'Manual', NULL, '2.500.000'),
(3, 1, 'tesla.jpg', 'Tesla', 'Model X', 8, 4, 'AC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac diam massa. Nunc eleifend, lorem at feugiat dapibus, lectus arcu cursus velit, vel viverra lectus odio pellentesque ipsum. Etiam ac magna ex. Integer justo dolor, pharetra fermentum consectetur eu, feugiat a sem. In varius erat quis neque tincidunt pretium. Sed cursus porta ipsum. Nulla euismod tristique justo, tempus iaculis magna dictum ut. Etiam non risus sit amet tellus blandit blandit. Donec quis sollicitudin odio, ac malesuada ante. Sed ornare tellus et lorem viverra, vitae congue magna auctor. Nam hendrerit lacus quis nisi dapibus, et condimentum metus facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'Otomatis', NULL, '2.000.000'),
(4, 2, 'b1.jpg', 'a', 'b', 2, 2, NULL, 'aaaaaaaaaa', 'manual', NULL, '2000000'),
(8, 1, 'callaction-bg.jpg', 'rrrrrr', 'tttttt', 2, 2, NULL, 'yyyyyyy', 'manual', NULL, '555555');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `ID_MOTOR` int(11) NOT NULL,
  `ID_RENTAL` int(11) DEFAULT NULL,
  `FOTO` varchar(50) DEFAULT NULL,
  `MERK_KENDARAAN` varchar(20) DEFAULT NULL,
  `NAMA_KENDARAAN` varchar(50) DEFAULT NULL,
  `DESKRIPSI_KENDARAAN` text,
  `JENIS_KENDARAAN` varchar(12) DEFAULT NULL,
  `TRANSISI` varchar(9) DEFAULT NULL,
  `HARGA_SEWA_KENDARAAN` varchar(11) DEFAULT NULL,
  `KAPASITAS` int(11) DEFAULT NULL,
  `PINTU` int(11) DEFAULT NULL,
  `PENDINGIN_UDARA` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`ID_MOTOR`, `ID_RENTAL`, `FOTO`, `MERK_KENDARAAN`, `NAMA_KENDARAAN`, `DESKRIPSI_KENDARAAN`, `JENIS_KENDARAAN`, `TRANSISI`, `HARGA_SEWA_KENDARAAN`, `KAPASITAS`, `PINTU`, `PENDINGIN_UDARA`) VALUES
(1, 2, '2000000005.jpg', 'DUCATI', 'Panigale V4', NULL, 'motor', 'Manual', '1.300.000', 1, 0, 'Tidak'),
(4, 1, NULL, 'Kaw', 'Nin', 'motor woww', NULL, NULL, '600', 1, NULL, NULL),
(7, 1, 'avatar4.png', 'm', 'n', 'd', NULL, NULL, '9', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `ID_PEMILIK` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `FOTO_PEMILIK` varchar(100) DEFAULT NULL,
  `REKENING_PEMILIK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`ID_PEMILIK`, `ID_USER`, `FOTO_PEMILIK`, `REKENING_PEMILIK`) VALUES
(1, 2, NULL, NULL),
(2, 3, NULL, NULL),
(5, 4, NULL, NULL),
(7, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
--

CREATE TABLE `penyewa` (
  `ID_PENYEWA` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `FOTO_PENYEWA` varchar(50) NOT NULL,
  `REKENING_PENYEWA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`ID_PENYEWA`, `ID_USER`, `FOTO_PENYEWA`, `REKENING_PENYEWA`) VALUES
(1, 2, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `ID_PESAN` int(11) NOT NULL,
  `ID_PENYEWA` int(11) DEFAULT NULL,
  `ID_Mobil` int(11) DEFAULT NULL,
  `ID_RENTAL` int(11) DEFAULT NULL,
  `KODE_PEMESANAN` varchar(6) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`ID_PESAN`, `ID_PENYEWA`, `ID_Mobil`, `ID_RENTAL`, `KODE_PEMESANAN`, `NAMA_PESAN`, `DETAIL`, `LOKASI_PENJEMPUTAN`, `LOKASI_PENGANTARAN`, `TANGGAL_PENGAMBILAN`, `TANGGAL_PENGEMBALIAN`, `TARIF_JARAK_TEMPUH`, `TARIF_PER_MIL_TAMBAHAN`, `TARIF_JUMLAH_HARI`, `TARIF_JAM_TAMBAHAN`, `TARIF_KENDARAAN`, `TARIF_KENDARAAN_TAMBAHAN`, `TARIF_SEWA`) VALUES
(1, 1, 3, NULL, 'GJGC8D', 'test', NULL, NULL, NULL, '2020-05-11 10:42:55', '2020-05-12 10:43:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 2, NULL, 'GJGC5D', NULL, NULL, NULL, NULL, '2020-05-13 11:09:47', '2020-05-14 11:09:52', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prov`
--

CREATE TABLE `prov` (
  `ID_PROV` int(3) NOT NULL,
  `Provinsi` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `prov`
--

INSERT INTO `prov` (`ID_PROV`, `Provinsi`) VALUES
(1, 'ACEH'),
(2, 'SUMATERA UTARA'),
(3, 'SUMATERA BARAT'),
(4, 'RIAU'),
(5, 'KEPULAUAN RIAU'),
(6, 'JAMBI'),
(7, 'BENGKULU'),
(8, 'SUMATERA SELATAN'),
(9, 'KEPULAUAN BANGKA BELITUNG'),
(10, 'LAMPUNG'),
(11, 'BANTEN'),
(12, 'JAWA BARAT'),
(13, 'JAKARTA'),
(14, 'JAWA TENGAH'),
(15, 'YOGYAKARTA'),
(16, 'JAWA TIMUR'),
(17, 'BALI'),
(18, 'NUSA TENGGARA BARAT'),
(19, 'NUSA TENGGARA TIMUR'),
(20, 'KALIMANTAN BARAT'),
(21, 'KALIMANTAN SELATAN'),
(22, 'KALIMANTAN TENGAH'),
(23, 'KALIMANTAN TIMUR'),
(24, 'KALIMANTAN UTARA'),
(25, 'GORONTALO'),
(26, 'SULAWESI BARAT'),
(27, 'SULAWESI SELATAN'),
(28, 'SULAWESI TENGGARA'),
(29, 'SULAWESI TENGAH'),
(30, 'SULAWESI UTARA'),
(31, 'MALUKU'),
(32, 'MALUKU UTARA'),
(33, 'PAPUA'),
(34, 'PAPUA BARAT');

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `ID_RENTAL` int(11) NOT NULL,
  `ID_PEMILIK` int(11) DEFAULT NULL,
  `ID_KOTA` int(4) DEFAULT NULL,
  `NAMA_RENTAL` varchar(20) DEFAULT NULL,
  `DESKRIPSI_RENTAL` text,
  `ALAMAT_RENTAL` varchar(50) DEFAULT NULL,
  `FOTO_RENTAL` varchar(100) DEFAULT NULL,
  `LAMA_PEMESANAN_MINIMUM` int(11) DEFAULT NULL,
  `JAM_BUKA` time DEFAULT NULL,
  `JAM_TUTUP` time DEFAULT NULL,
  `PERSYARATAN_JARAK_WAKTU_PEMESANAN` int(11) DEFAULT NULL,
  `KEBIJAKAN_PEMBATALAN` text,
  `HARI_1` varchar(7) DEFAULT NULL,
  `HARI_2` varchar(7) DEFAULT NULL,
  `PERSYARATAN_PENYEWA` text,
  `PENGANTARAN` set('ya','tidak','','') NOT NULL,
  `PENGEMBALIAN` set('ya','tidak','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `rental`
--

INSERT INTO `rental` (`ID_RENTAL`, `ID_PEMILIK`, `ID_KOTA`, `NAMA_RENTAL`, `DESKRIPSI_RENTAL`, `ALAMAT_RENTAL`, `FOTO_RENTAL`, `LAMA_PEMESANAN_MINIMUM`, `JAM_BUKA`, `JAM_TUTUP`, `PERSYARATAN_JARAK_WAKTU_PEMESANAN`, `KEBIJAKAN_PEMBATALAN`, `HARI_1`, `HARI_2`, `PERSYARATAN_PENYEWA`, `PENGANTARAN`, `PENGEMBALIAN`) VALUES
(1, 1, 192, 'Jaya Abadi Showroom', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac diam massa. Nunc eleifend, lorem at feugiat dapibus, lectus arcu cursus velit, vel viverra lectus odio pellentesque ipsum. Etiam ac magna ex. Integer justo dolor, pharetra fermentum consectetur eu, feugiat a sem. In varius erat quis neque tincidunt pretium. Sed cursus porta ipsum. Nulla euismod tristique justo, tempus iaculis magna dictum ut. Etiam non risus sit amet tellus blandit blandit. Donec quis sollicitudin odio, ac malesuada ante. Sed ornare tellus et lorem viverra, vitae congue magna auctor. Nam hendrerit lacus quis nisi dapibus, et condimentum metus facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'Jl. Kenangan', 'header-bg1.jpg', 1, '08:00:13', '22:00:52', 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac diam massa. Nunc eleifend, lorem at feugiat dapibus, lectus arcu cursus velit, vel viverra lectus odio pellentesque ipsum. Etiam ac magna ex. Integer justo dolor, pharetra fermentum consectetur eu, feugiat a sem. In varius erat quis neque tincidunt pretium. Sed cursus porta ipsum. Nulla euismod tristique justo, tempus iaculis magna dictum ut. Etiam non risus sit amet tellus blandit blandit. Donec quis sollicitudin odio, ac malesuada ante. Sed ornare tellus et lorem viverra, vitae congue magna auctor. Nam hendrerit lacus quis nisi dapibus, et condimentum metus facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'Selasa', 'Minggu', '1.Harga sewa mobil murah di Bali kami cantumkan di website adalah harga nett dan hanya berlaku untuk warga negara Indonesia (WNI) yang memiliki KTP.\r\n2.Rental mobil tanpa supir atau rent car Bali self drive, penyewa yang akan mengemudikan mobil diwajibkan memiliki SIM A yang masih berlaku. Penyewa diharapkan untuk memberikan data diri secara lengkap, seperti alamat tempat tinggal, nama tempat menginap seperti hotel, villa di Bali beserta nomer kamar dan nama penyewa yang terdaftar di hotel atau villa. Wira rental mobil Bali tidak akan mengunakan data pribadi dari penyewa selain untuk keperluan penyewaan mobil.\r\n3.Kartu identitas penyewa (KTP) akan disimpan atau di pinjam selama masa penyewaan, dan akan kami kembalikan pada saat pengembalian kendaraan yang disewa.\r\n4.Jika penggunaan mobil oleh penyewa melebihi dari waktu kesepakatan penyewaan, maka akan dikenakan biaya over time sebesar 10% dari harga sewa per hari. Jika over time melebihi dari 5 jam, maka akan di hitung biaya sewa selama 1 hari.\r\n5.Pick up dan delivery service dari mobil sewa kami, tidak di kenakan biaya untuk kawasan Denpasar, Kuta, Seminyak, Legian, Jimbaran, Sanur. Diluar wilayah tersebut akan dikenakan biaya bahan bakar. Pelayanan pick up dan delivery service secara gratis hanya berlaku pada jam 07:00 – 21:00 (waktu Bali). Pengantaran kendaraan dan penjemputan mobil di luar dari waktu diatas, akan dikenakan biaya sebesar Rp.20.000 (wilayah Denpasar, Kuta, Seminyak, Legian, Jimbaran, Sanur) diluar wilayah tersebut akan dikenakan biaya tambahan penggunaan bahan bakar.\r\n6.Pemakaian kendaraan hanya diperbolehkan khusus untuk penggunaan diwilayah provinsi Bali. Pengunaan kendaraan diluar provinsi Bali maka akan dikenakan sanksi sesuai dengan aturan dan ketentuan asosiasi penyewaan mobil Bali.\r\n7.Wira Rental Mobil & Tour Bali berhak menolak pesanan pelanggan, jika pelanggan menunjukan prilaku tidak sopan, menghina, mencaci, melakukan tindak kekerasan.', 'ya', 'ya'),
(2, 2, 273, 'Sumber Makmur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac diam massa. Nunc eleifend, lorem at feugiat dapibus, lectus arcu cursus velit, vel viverra lectus odio pellentesque ipsum. Etiam ac magna ex. Integer justo dolor, pharetra fermentum consectetur eu, feugiat a sem. In varius erat quis neque tincidunt pretium. Sed cursus porta ipsum. Nulla euismod tristique justo, tempus iaculis magna dictum ut. Etiam non risus sit amet tellus blandit blandit. Donec quis sollicitudin odio, ac malesuada ante. Sed ornare tellus et lorem viverra, vitae congue magna auctor. Nam hendrerit lacus quis nisi dapibus, et condimentum metus facilisis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.', 'Jl. Jatinegara', NULL, NULL, '08:00:00', '22:00:59', NULL, NULL, 'Senin', 'Minggu', NULL, '', ''),
(4, 5, 247, 'hmm showroom', 'kkkkkk', 'Jl. Cassablanca', 'flhtt4rrfb9412.jpg', 1, '08:00:00', '22:00:00', 7, 'nnnnnnnnn', NULL, NULL, 'mmmmmm', 'ya', 'ya'),
(5, 7, 249, 'akbar showroom', 'iiiii', 'jl. kertas', 'avatar3.png', 3, '07:00:00', '10:00:00', 10, 'hhhhhhhhh', NULL, NULL, 'gggggg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_TRANSAKSI` int(11) NOT NULL,
  `ID_PESAN` int(11) DEFAULT NULL,
  `KETERANGAN_TRANSAKSI` text,
  `KOMENTAR_TRANSAKSI` text,
  `RATING` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID_USER` int(11) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `KOTA` varchar(25) DEFAULT NULL,
  `TANGGAL_LAHIR` date DEFAULT NULL,
  `NEGARA_TEMPAT_TINGGAL` varchar(20) DEFAULT NULL,
  `TELEPON_SELULER` int(11) DEFAULT NULL,
  `KETERANGAN_USER` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `EMAIL`, `PASSWORD`, `NAMA`, `JENIS_KELAMIN`, `KOTA`, `TANGGAL_LAHIR`, `NEGARA_TEMPAT_TINGGAL`, `TELEPON_SELULER`, `KETERANGAN_USER`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'L', 'SDA', '2020-05-01', 'indonesia', 81876855, 'admin'),
(2, 'user@gmail.com', 'user', 'user', NULL, 'Surabaya', '2000-07-25', 'Indonesia', 123456789, 'user'),
(3, 'rahadianhanif98@gmail.com', 'alvern', 'Alvern', NULL, NULL, NULL, NULL, NULL, 'user'),
(4, 'coba@gmail.com', '123', 'coba', NULL, NULL, NULL, NULL, NULL, 'user'),
(5, 'ikhwan@gmail.com', '123', 'ikhwan', NULL, NULL, NULL, NULL, NULL, 'user'),
(6, 'akbar25@gmail.com', '123', 'akbar', NULL, NULL, NULL, NULL, NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`) USING BTREE,
  ADD KEY `ID_USER` (`ID_USER`) USING BTREE;

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `artikel_pariwisata`
--
ALTER TABLE `artikel_pariwisata`
  ADD PRIMARY KEY (`ID_ARTIKEL`) USING BTREE,
  ADD KEY `ID_ADMIN` (`ID_ADMIN`) USING BTREE;

--
-- Indexes for table `kab_kota`
--
ALTER TABLE `kab_kota`
  ADD PRIMARY KEY (`id_kab`) USING BTREE,
  ADD KEY `id_prov` (`id_prov`) USING BTREE;

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`ID_KENDARAAN`) USING BTREE,
  ADD KEY `ID_RENTAL` (`ID_RENTAL`) USING BTREE;

--
-- Indexes for table `keuntungan`
--
ALTER TABLE `keuntungan`
  ADD PRIMARY KEY (`id_keuangan`) USING BTREE;

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`ID_MOBIL`) USING BTREE,
  ADD KEY `ID_RENTAL` (`ID_RENTAL`) USING BTREE;

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`ID_MOTOR`) USING BTREE,
  ADD KEY `ID_RENTAL` (`ID_RENTAL`) USING BTREE;

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`ID_PEMILIK`) USING BTREE,
  ADD KEY `ID_USER` (`ID_USER`) USING BTREE;

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`ID_PENYEWA`) USING BTREE,
  ADD KEY `ID_USER` (`ID_USER`) USING BTREE;

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`ID_PESAN`) USING BTREE,
  ADD UNIQUE KEY `KODE_PEMESANAN` (`KODE_PEMESANAN`),
  ADD KEY `ID_PENYEWA` (`ID_PENYEWA`) USING BTREE,
  ADD KEY `ID_RENTAL` (`ID_RENTAL`) USING BTREE,
  ADD KEY `ID_Mobil` (`ID_Mobil`) USING BTREE;

--
-- Indexes for table `prov`
--
ALTER TABLE `prov`
  ADD PRIMARY KEY (`ID_PROV`) USING BTREE;

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`ID_RENTAL`) USING BTREE,
  ADD KEY `ID_PEMILIK` (`ID_PEMILIK`) USING BTREE,
  ADD KEY `ID_KOTA` (`ID_KOTA`) USING BTREE;

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`) USING BTREE,
  ADD KEY `ID_PESAN` (`ID_PESAN`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_USER`) USING BTREE,
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `ID_KENDARAAN` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keuntungan`
--
ALTER TABLE `keuntungan`
  MODIFY `id_keuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `ID_MOBIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `ID_MOTOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `ID_PEMILIK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `ID_PENYEWA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `ID_PESAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `ID_RENTAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `ID_TRANSAKSI` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `artikel_pariwisata`
--
ALTER TABLE `artikel_pariwisata`
  ADD CONSTRAINT `artikel_pariwisata_ibfk_1` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `kab_kota`
--
ALTER TABLE `kab_kota`
  ADD CONSTRAINT `kab_kota_ibfk_1` FOREIGN KEY (`id_prov`) REFERENCES `prov` (`ID_PROV`);

--
-- Constraints for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`ID_RENTAL`) REFERENCES `rental` (`ID_RENTAL`);

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil_ibfk_1` FOREIGN KEY (`ID_RENTAL`) REFERENCES `rental` (`ID_RENTAL`);

--
-- Constraints for table `motor`
--
ALTER TABLE `motor`
  ADD CONSTRAINT `motor_ibfk_1` FOREIGN KEY (`ID_RENTAL`) REFERENCES `rental` (`ID_RENTAL`);

--
-- Constraints for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD CONSTRAINT `pemilik_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD CONSTRAINT `penyewa_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`ID_PENYEWA`) REFERENCES `penyewa` (`ID_PENYEWA`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`ID_RENTAL`) REFERENCES `rental` (`ID_RENTAL`),
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`ID_Mobil`) REFERENCES `mobil` (`ID_MOBIL`);

--
-- Constraints for table `rental`
--
ALTER TABLE `rental`
  ADD CONSTRAINT `rental_ibfk_1` FOREIGN KEY (`ID_PEMILIK`) REFERENCES `pemilik` (`ID_PEMILIK`),
  ADD CONSTRAINT `rental_ibfk_2` FOREIGN KEY (`ID_KOTA`) REFERENCES `kab_kota` (`id_kab`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`ID_PESAN`) REFERENCES `pesanan` (`ID_PESAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
