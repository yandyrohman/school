-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jul 2021 pada 17.30
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `title`, `text`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'SMK BISA!', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias ad laboriosam dolor quod odit quaerat officia nisi dicta nostrum necessitatibus soluta eveniet esse quo nihil vero hic, obcaecati veritatis! Explicabo.', '<iframe width=\"853\" height=\"480\" src=\"https://www.youtube.com/embed/8ZUmGj5fMbQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2021-07-30 08:55:36', '2021-07-30 08:55:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `achievment`
--

CREATE TABLE `achievment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `story` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `achievment`
--

INSERT INTO `achievment` (`id`, `title`, `rank`, `year`, `location`, `story`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'Futsal Cianjur Cup 2021 jhgjhg jhgfjhgf h', '1', '2021', 'Canjur', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic impedit qui beatae?\r\n', '1627180987.jpg', '2021-07-24 21:43:07', '2021-07-24 22:22:09'),
(4, 'Liburan Cup', 'klnl', '5000', 'jlkjn', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic', '1627195452.jpg', '2021-07-25 01:44:12', '2021-07-25 01:44:12'),
(5, 'Prestasi Baru', 'kjb', '8787', 'hkjhbk', 'kjhkj jh kj kjh kjhbjh', '1627197125.jpg', '2021-07-25 02:12:05', '2021-07-25 02:12:05'),
(6, 'Bambang Cup 2021', '1', '2021', 'Cianjur', 'hbkjbjkhb jhbkjh hb kjhb jkhb kjhb kjhb kjhb ', '1627203373.jpg', '2021-07-25 03:56:13', '2021-07-25 03:56:13'),
(7, 'Euyyy Challenge', '1', '2000', 'Bandung', 'jhbkjhb', '1627203420.jpg', '2021-07-25 03:56:47', '2021-07-25 03:57:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `class`
--

CREATE TABLE `class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `major_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `class`
--

INSERT INTO `class` (`id`, `major_id`, `name`, `grade`, `created_at`, `updated_at`) VALUES
(1, 2, 'X RPL 1', 10, '2021-03-10 22:06:48', '2021-03-10 22:06:48'),
(4, 2, 'XI RPL 1', 11, '2021-03-10 22:06:59', '2021-03-10 22:06:59'),
(6, 2, 'XII RPL 1', 12, '2021-03-10 22:13:21', '2021-03-10 22:13:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id`, `name`, `link`, `summary`, `created_at`, `updated_at`) VALUES
(5, 'Jadwal UAS', 'https://youtube.com', 'jhbkjhb khbk ', '2021-07-30 09:42:21', '2021-07-30 09:42:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `title`, `text`, `is_active`, `created_at`, `updated_at`) VALUES
(9, 'Eskul futsal resmi dibubarkan', '<p>yahaha hayu kjhkjh kjbkjhb kjhbkjhb kjhbkjhb kjhbkjhb kjhbkjhb kjbkjhb kjhbjkh jkhjb kjhkjhkjh jkkjhbkjh kjhkjh</p>\r\n', 1, '2021-07-24 21:32:44', '2021-07-25 04:12:41'),
(10, 'Baru', '<p>jbkjhbkjh</p>\r\n', 1, '2021-07-25 02:11:39', '2021-07-25 02:11:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `extra`
--

CREATE TABLE `extra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `extra`
--

INSERT INTO `extra` (`id`, `name`, `photo`, `text`, `schedule`, `created_at`, `updated_at`) VALUES
(4, 'Karate', '1627189515.jpg', 'hkjhbkj kjhbkjhb kjhbkjb kjhbkjhb kjhbkjhb kjhbkjb kjhb', 'Senin, Kamis', '2021-07-25 00:05:15', '2021-07-25 00:05:15'),
(5, 'Futsal', '1627189532.jpg', 'jhkjh kjhkj kjhkjh kjhkjhkj h', 'Minggu', '2021-07-25 00:05:32', '2021-07-25 00:05:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `face`
--

CREATE TABLE `face` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `facility`
--

CREATE TABLE `facility` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `facility`
--

INSERT INTO `facility` (`id`, `name`, `text`, `photo`, `created_at`, `updated_at`) VALUES
(5, 'Kantin Geulis', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic', '1627189584.jpg', '2021-07-25 00:06:24', '2021-07-25 02:06:49'),
(7, 'Pijat ++', 'sfdf drgdf drgd', '1627192718.jpg', '2021-07-25 00:58:38', '2021-07-25 00:58:38'),
(8, 'Balap Kuda', 'ssss', '1627192732.jpg', '2021-07-25 00:58:52', '2021-07-25 00:58:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `text`, `count`, `created_at`, `updated_at`) VALUES
(7, 'Liburan', 'jkhbkj kjhb kjhb kjh ', 2, '2021-07-24 21:44:47', '2021-07-24 21:44:47'),
(8, 'Galeri Baru', 'jhkjh h jhvj hgjh gjhg hg hg hjfg hg h fhgh jgfhg fjh gfjhg f rusak keyboard euyyyy!!!', 2, '2021-07-25 02:15:33', '2021-07-25 02:15:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `major`
--

CREATE TABLE `major` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `major`
--

INSERT INTO `major` (`id`, `photo`, `name`, `text`, `created_at`, `updated_at`) VALUES
(8, '1627657524.jpg', 'Rekayasa Perangkat Lunak', 'jhkjhbk kjhkjh kjhkjhkghj', '2021-07-30 10:05:24', '2021-07-30 10:05:24'),
(9, '1627658072.jpg', 'Teknik Komputer Jaringan', 'hgjhg jhgjhg hgjhgfj hgfjhfjh gjhfjhfg j', '2021-07-30 10:14:32', '2021-07-30 10:14:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_02_28_001359_create_all', 1),
(3, '2021_03_08_121337_add_column_in_profile', 2),
(4, '2021_03_11_011158_delete_column_in_staff', 3),
(5, '2021_03_11_011408_delete_column_in_student', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `photo`, `text`, `created_at`, `updated_at`) VALUES
(4, 'Pohon tumbang sesatkan jalan', '1627189743.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hicLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hicLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hicLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hicLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hicLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hicLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hicLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hicLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hicLorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem distinctio recusandae, nam accusantium minus iste velit, totam corrupti fugiat, minima ipsa architecto provident qui. A neque hic', '2021-07-25 00:09:03', '2021-07-25 02:05:22'),
(5, 'Gedung II kebakaran', '1627193506.jpg', 'jhjhgjhg hgjhggh ghgh hgghg ghghg ghgh hg', '2021-07-25 01:11:46', '2021-07-25 01:11:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo`
--

CREATE TABLE `photo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `photo`
--

INSERT INTO `photo` (`id`, `gallery_id`, `photo`, `created_at`, `updated_at`) VALUES
(19, '7', '1627181106.jpg', '2021-07-24 21:45:06', '2021-07-24 21:45:06'),
(21, '7', '1627181148.jpg', '2021-07-24 21:45:48', '2021-07-24 21:45:48'),
(22, '8', '1627197340.jpg', '2021-07-25 02:15:40', '2021-07-25 02:15:40'),
(23, '8', '1627197345.jpg', '2021-07-25 02:15:45', '2021-07-25 02:15:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `logo`, `name`, `address`, `phone`, `wa`, `email`, `schedule`, `facebook`, `youtube`, `instagram`, `twitter`, `text`, `created_at`, `updated_at`) VALUES
(1, '', 'SMK HEHE BOY', 'Tokyo deket rumah kaori', '3209987', '081221212', 'sekolah@gmail.com', 'Senin - Jum\'at | 07.00 - 17.00', 'facebook.com', 'yutub.com', 'ig.com', 'tw.com', 'Pada suatu hari seorang bujangan sedang berfikir keras..', '2021-07-24 21:20:39', '2021-07-24 21:20:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `teacher_number`, `name`, `position`, `gender`, `birth_date`, `birth_place`, `religion`, `address`, `village`, `district`, `city`, `province`, `phone`, `email`, `photo`, `created_at`, `updated_at`) VALUES
(22, '123123', 'Peter Parker', 'a', 'L', '2000-12-12', 'cianjur', 'islam', 'Tokyo deket rumah kaori', 'kg', 'kjhbk', 'kjhb', 'kjh', '089898', 'ee', '1627200477.jpg', '2021-07-25 03:07:57', '2021-07-25 03:07:57'),
(23, '123123', 'Neneng Cantil', 'b', 'L', '2000-12-12', 'cianjur', 'islam', 'Tokyo deket rumah kaori', 'kg', 'f', 'f', 'f', 'f', 'f', '1627200509.jpg', '2021-07-25 03:08:29', '2021-07-25 03:08:29'),
(24, '123123', 'Wakarimashita', 'c', 'L', '2000-12-12', 'y', 'islam', 'y', 'y', 'y', 'y', 'y', 'y', 'y', '1627200533.jpg', '2021-07-25 03:08:53', '2021-07-25 03:08:53'),
(25, '333', 'Sopo Jarwo', 'a', 'L', '2000-12-12', 'u', 'islam', 'u', 'u', 'u', 'u', 'u', 'u', 'u', '1627200585.jpg', '2021-07-25 03:09:45', '2021-07-25 03:09:45'),
(26, '222', 'Puncak Komedi', 'a', 'L', '2000-12-12', 'ii', 'islam', 'i', 'i', 'i', 'i', 'i', 'i', 'q', '1627200622.jpg', '2021-07-25 03:10:12', '2021-07-25 03:10:22'),
(27, '33', 'Aku Siapa', 'a', 'L', '2000-12-12', 'i', 'islam', 'i', 'i', 'i', 'i', 'i', 'i', 'i', '1627200686.jpg', '2021-07-25 03:11:26', '2021-07-25 03:11:26'),
(28, '00', 'Ucok', 'a', 'L', '2000-12-12', 'o', 'islam', 'o', 'oo', 'o', 'o', 'o', 'o', 'o', '1627200703.jpg', '2021-07-25 03:11:43', '2021-07-25 03:11:43'),
(29, '5555', 'Ihhhhh', 'e', 'L', '2000-12-12', 'o', 'islam', 'o', 'o', 'o', 'o', 'oo', 'o', 'o', '1627201868.jpg', '2021-07-25 03:31:08', '2021-07-25 03:31:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `student`
--

CREATE TABLE `student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class_id` int(11) NOT NULL,
  `student_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_student_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dad_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mom_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `birth_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `created_at`, `updated_at`) VALUES
(1, 'yandi', '123', 'email@email.email', 'Bambang', 1, '2021-03-23 17:08:27', '2021-03-23 17:17:57'),
(3, 'ujang', '123', 'email.com', 'Ujang', 2, '2021-03-23 17:20:17', '2021-03-23 17:20:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vm`
--

CREATE TABLE `vm` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `vm`
--

INSERT INTO `vm` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(11, 'visi', 'Ini visi saya', '2021-07-30 09:14:25', '2021-07-30 09:14:25'),
(13, 'misi', 'Misi Dua', '2021-07-30 09:14:41', '2021-07-30 09:14:41'),
(14, 'misi', 'Misi Satu', '2021-07-30 09:14:48', '2021-07-30 09:14:48'),
(15, 'misi', 'Misi Tiga', '2021-07-30 09:14:52', '2021-07-30 09:14:52');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `achievment`
--
ALTER TABLE `achievment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_major_id_index` (`major_id`);

--
-- Indeks untuk tabel `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `extra`
--
ALTER TABLE `extra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `face`
--
ALTER TABLE `face`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photo_gallery_id_index` (`gallery_id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_class_id_index` (`class_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vm`
--
ALTER TABLE `vm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `achievment`
--
ALTER TABLE `achievment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `class`
--
ALTER TABLE `class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `download`
--
ALTER TABLE `download`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `extra`
--
ALTER TABLE `extra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `face`
--
ALTER TABLE `face`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `facility`
--
ALTER TABLE `facility`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `major`
--
ALTER TABLE `major`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `photo`
--
ALTER TABLE `photo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `vm`
--
ALTER TABLE `vm`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
