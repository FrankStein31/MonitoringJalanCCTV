-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 07:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `publication_year` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description_book` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `pdf_file` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  `qrcode` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `publisher`, `publication_year`, `category_id`, `description_book`, `image`, `pdf_file`, `is_deleted`, `qrcode`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Title A', 'alpa', 'alpa', 2024, 1, 'blablabal', '/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAYGBgYGBgYHBwYJCgkKCQ0MCwsMDRQODw4PDhQfExYTExYTHxshGxkbIRsxJiIiJjE4Ly0vOEQ9PURWUVZwcJYBBgYGBgYGBgcHBgkKCQoJDQwLCwwNFA4PDg8OFB8TFhMTFhMfGyEbGRshGzEmIiImMTgvLS84RD09RFZRVnBwlv/CABEIAa4C2AMBIQACEQEDEQH/xAAcAAEAAwADAQEAAAAAAAA', 'url file', 1, NULL, '2024-05-14 04:13:59', '2024-07-12 15:38:02', '2024-07-10 01:31:21'),
(2, 'Title B', 'alpa 2', 'alpa 2', 2024, 1, 'blablabal', '/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAYGBgYGBgYHBwYJCgkKCQ0MCwsMDRQODw4PDhQfExYTExYTHxshGxkbIRsxJiIiJjE4Ly0vOEQ9PURWUVZwcJYBBgYGBgYGBgcHBgkKCQoJDQwLCwwNFA4PDg8OFB8TFhMTFhMfGyEbGRshGzEmIiImMTgvLS84RD09RFZRVnBwlv/CABEIAa4C2AMBIQACEQEDEQH/xAAcAAEAAwADAQEAAAAAAAA', 'url file', 1, NULL, '2024-05-14 04:22:02', '2024-07-10 01:31:27', '2024-07-10 01:31:27'),
(3, 'dummy 2', 'dummy 2', 'dummy 2', 2024, 1, 'dummy 2', '/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAYGBgYGBgYHBwYJCgkKCQ0MCwsMDRQODw4PDhQfExYTExYTHxshGxkbIRsxJiIiJjE4Ly0vOEQ9PURWUVZwcJYBBgYGBgYGBgcHBgkKCQoJDQwLCwwNFA4PDg8OFB8TFhMTFhMfGyEbGRshGzEmIiImMTgvLS84RD09RFZRVnBwlv/CABEIAa4C2AMBIQACEQEDEQH/xAAcAAEAAwADAQEAAAAAAAA', 'url file', 1, NULL, '2024-05-14 04:23:01', '2024-06-23 10:18:30', '2024-05-14 04:26:29'),
(4, 'Pendidikan Agama', 'Lodry Iza Fadian', 'Jawa Post', 2024, 1, 'ini buku pendidikan', '/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAYGBgYGBgYHBwYJCgkKCQ0MCwsMDRQODw4PDhQfExYTExYTHxshGxkbIRsxJiIiJjE4Ly0vOEQ9PURWUVZwcJYBBgYGBgYGBgcHBgkKCQoJDQwLCwwNFA4PDg8OFB8TFhMTFhMfGyEbGRshGzEmIiImMTgvLS84RD09RFZRVnBwlv/CABEIAa4C2AMBIQACEQEDEQH/xAAcAAEAAwADAQEAAAAAAAA', 'url file', 1, NULL, '2024-06-23 10:02:28', '2024-07-02 21:36:32', '2024-07-02 21:36:32'),
(5, 'Pendidikan Budaya', 'Alpardfm', 'Sunda Post', 2020, 1, 'ini buku pendidikan', '/images/1719950848607-images.jpeg', '/pdfs/1719950848608-262-Article Text-837-2-10-20211212.pdf', 1, NULL, '2024-06-23 10:02:50', '2024-07-10 01:31:29', '2024-07-10 01:31:29'),
(6, 'cobaaa', 'cobaa', 'cobaa', 2024, 3, 'cobaaaa', '/images/1719949275654-Kerusakan-jaringan.png', '/pdfs/1719949275660-1636-3559-2-PB.pdf', 1, NULL, '2024-07-02 19:41:15', '2024-07-02 19:43:08', '2024-07-02 19:43:08'),
(7, 'haiii', 'haiii', 'raul', 2002, 3, 'latihan', '/images/1719949374365-images.jpeg', '/pdfs/1719949374365-jurnel 4.pdf', 1, NULL, '2024-07-02 19:42:26', '2024-07-02 19:43:00', '2024-07-02 19:43:00'),
(8, 'Buku Agama ', 'Abd. Rahman Hery Nugroho', 'Pusat perbukuan', 2017, 2, 'Buku agama kelas 11', '/images/1719956666232-Screenshot 2024-07-03 044217.png', '/pdfs/1719956666246-Islam-BS-KLS-XI.pdf', 1, NULL, '2024-07-02 21:44:26', '2024-07-02 23:40:14', '2024-07-02 23:40:14'),
(9, 'buku agama islam', 'julius', 'gramedia', 2019, 2, 'buku agama kelas 11', '/images/1720798383779-Kerusakan-jaringan.png', '/pdfs/1720798383787-9.Julius Bimbingan[1].pdf', 0, NULL, '2024-07-02 23:43:30', '2024-07-12 15:33:03', '2024-07-02 23:43:30'),
(10, 'Buku Matematika Kelas XII', 'Abdur Rahman As’ari, Tjang Daniel Chandra, Ipung Yuwono', 'Pusat Kurikulum dan Perbukuan, Balibang, Kemendikbud', 2018, 3, 'Buku Matematika XII', '/images/1720576889819-Screenshot 2024-07-10 083953.png', '/pdfs/1720576889820-Kelas XII Matematika BS press.pdf', 0, NULL, '2024-07-10 01:40:55', '2024-07-10 02:01:29', '2024-07-10 01:40:55'),
(11, 'Bahasa Indonesia: untuk SMA/SMK/MA/MAK Kelas X (Edisi Revisi)', 'Fadillah Tri Aulia, Sefi Indra Gumilar', 'Pusat Kurikulum dan Perbukuan', 2020, 10, 'Bahasa Indonesia kelas X', '/images/1720578131105-Screenshot 2024-07-10 084817.png', '/pdfs/1720578131107-Bahasa_Indonesia_BS_KLS_X_Rev.pdf', 0, NULL, '2024-07-10 01:55:29', '2024-07-10 02:22:11', '2024-07-10 01:55:29'),
(12, 'Pendidikan Pancasila SMA/MA/SMK/MAK Kelas XII', 'Dwi Astuti Setiawan, Hatim Gazali, Ida Rohayani', 'Pusat Perbukuan', 2023, 1, 'Pendidikan Pancasila XII', '/images/1720577283474-Screenshot 2024-07-10 090444.png', '/pdfs/1720577283475-Pendidikan-Pancasila-BS-KLS-XII.pdf', 0, NULL, '2024-07-10 02:08:03', '2024-07-10 02:08:03', '2024-07-10 02:08:03'),
(13, 'Buku agama islam 2', 'Pak Rinanza', 'Gramedia', 2024, 2, 'Buku agama kelas 2', '/images/1720598157051-Screenshot 2024-07-03 044217.png', '/pdfs/1720598157062-Islam-BS-KLS-XI.pdf', 0, NULL, '2024-07-10 07:55:57', '2024-07-10 07:55:57', '2024-07-10 07:55:57'),
(14, 'coba', 'coba', 'coba', 2023, 1, 'coba', '/images/1720798417902-Kerusakan-jaringan.png', '/pdfs/1720798417905-9.Julius Bimbingan[1].pdf', 1, NULL, '2024-07-12 15:33:37', '2024-07-12 15:35:08', '2024-07-12 15:35:08'),
(15, 'coba', 'coba', 'coba', 2003, 1, 'coba', '/images/1720798531889-Kerusakan-jaringan.png', '/pdfs/1720798531895-9.Julius Bimbingan[1].pdf', 1, NULL, '2024-07-12 15:35:31', '2024-07-12 15:37:51', '2024-07-12 15:37:51'),
(16, 'coba', 'coba', 'coba', 2003, 1, 'coba', '/images/1720798707942-Kerusakan-jaringan.png', '/pdfs/1720798707950-9.Julius Bimbingan[1].pdf', 0, NULL, '2024-07-12 15:38:27', '2024-07-12 15:38:27', '2024-07-12 15:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pendidikan kewarganegaraan', 0, '2024-05-15 04:22:34', '2024-07-02 19:43:42', '2024-06-27 17:40:40'),
(2, 'Agama', 0, '2024-05-15 04:22:46', '2024-05-15 04:22:46', '2024-06-27 17:40:40'),
(3, 'Matematika', 0, '2024-05-15 04:22:52', '2024-07-10 01:34:47', '2024-06-27 17:40:40'),
(4, 'dummy 2', 1, '2024-05-15 04:23:10', '2024-05-15 04:24:28', '2024-05-15 04:24:28'),
(5, 'dummy', 1, '2024-05-15 04:24:02', '2024-07-10 01:34:52', '2024-07-10 01:34:52'),
(6, 'Komik', 1, '2024-07-02 19:43:28', '2024-07-02 19:43:48', '2024-07-02 19:43:48'),
(7, 'Komik', 1, '2024-07-02 21:54:34', '2024-07-10 01:34:57', '2024-07-10 01:34:57'),
(8, 'buku sejarah', 1, '2024-07-02 23:44:41', '2024-07-10 01:49:04', '2024-07-10 01:49:04'),
(9, 'IPA', 1, '2024-07-09 07:50:27', '2024-07-09 16:11:46', '2024-07-09 16:11:46'),
(10, 'Bahasa Indonesia', 0, '2024-07-10 01:49:21', '2024-07-10 01:49:21', '2024-07-10 01:49:21'),
(11, 'kjb', 1, '2024-07-12 07:01:17', '2024-07-12 07:01:20', '2024-07-12 07:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `geofance`
--

CREATE TABLE `geofance` (
  `id` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `radius` varchar(255) NOT NULL,
  `is_deleted` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `geofance`
--

INSERT INTO `geofance` (`id`, `NAME`, `latitude`, `longitude`, `radius`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'kos', '-7.8103503', '111.9799455', '100', 0, '2024-07-09 07:49:19', '2024-07-15 16:02:23', NULL),
(2, 'rumah', '-7.8486088', '112.0480863', '1000', 0, '2024-07-09 07:45:02', '2024-07-12 06:51:20', NULL),
(4, 'kampus', '-7.8111275', '111.9793074', '1000', 0, '2024-07-10 06:58:53', '2024-07-15 16:01:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request_books`
--

CREATE TABLE `request_books` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `request_text` text DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_books`
--

INSERT INTO `request_books` (`id`, `user_id`, `request_text`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Text 1', 0, '2024-05-15 04:26:15', '2024-05-15 04:26:15', '2024-06-27 17:41:25'),
(2, 2, 'Text 2', 0, '2024-05-15 04:26:24', '2024-05-15 04:26:24', '2024-06-27 17:41:25'),
(3, 3, 'Text 3', 0, '2024-05-15 04:26:30', '2024-05-15 04:26:30', '2024-06-27 17:41:25'),
(4, 4, 'Text Dummy 2', 1, '2024-05-15 04:26:37', '2024-05-15 04:28:22', '2024-05-15 04:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `review_text` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `book_id`, `user_id`, `review_text`, `rating`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, 'Text 1', 1, 0, '2024-05-15 04:31:31', '2024-05-15 04:31:31', '2024-06-27 17:41:35'),
(2, 2, NULL, 'Text 2', 2, 0, '2024-05-15 04:31:40', '2024-05-15 04:31:40', '2024-06-27 17:41:35'),
(3, 3, NULL, 'Text 3', 3, 0, '2024-05-15 04:31:48', '2024-05-15 04:31:48', '2024-06-27 17:41:35'),
(4, 4, 4, 'Text Dummy 2', 4, 1, '2024-05-15 04:31:59', '2024-05-15 04:33:10', '2024-05-15 04:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `role` enum('admin','member','student') NOT NULL,
  `access_token` text DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `nis`, `class`, `role`, `access_token`, `is_deleted`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Alpa', 'alpa@gmail.com', '12345', '12345', 10, 'student', '', 0, '2024-06-23 04:25:10', '2024-06-23 04:25:56', '2024-06-27 17:42:06'),
(2, 'rina', 'rina@gmail.com', '12345', '12345', 11, 'student', NULL, 0, '2024-06-23 10:00:25', '2024-07-02 21:55:25', '2024-06-27 17:42:06'),
(3, 'admin', 'admin@gmail.com', '12345', NULL, NULL, 'admin', NULL, 0, '2024-07-02 19:05:46', '2024-07-02 19:05:46', '2024-07-02 19:05:46'),
(4, 'rivo', 'nerujulius@gmail.com', '12345', '2002', 2, 'student', '', 0, '2024-07-02 19:55:59', '2024-07-02 19:56:55', '2024-07-02 19:55:59'),
(5, 'rina', 'rina2@gmail.com', '12345', '3001', 3, 'student', NULL, 0, '2024-07-02 23:51:02', '2024-07-02 23:59:19', '2024-07-02 23:51:02'),
(6, 'bufikha', 'bukikha@gmail.com', '12346', '2003', 12, 'student', NULL, 0, '2024-07-10 07:51:53', '2024-07-10 07:54:10', '2024-07-10 07:51:53'),
(7, 'jihan', 'jihan@gmail.com', '12345', '2009', 12, 'member', '', 0, '2024-07-12 07:09:30', '2024-07-12 07:09:30', '2024-07-12 07:09:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geofance`
--
ALTER TABLE `geofance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_books`
--
ALTER TABLE `request_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `geofance`
--
ALTER TABLE `geofance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `request_books`
--
ALTER TABLE `request_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
