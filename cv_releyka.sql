-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2025 at 06:43 PM
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
-- Database: `cv_releyka`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `headline` varchar(255) DEFAULT NULL,
  `tagline` text,
  `foto` varchar(255) DEFAULT NULL,
  `foto_about` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `headline`, `tagline`, `foto`, `foto_about`) VALUES
(1, 'Releyka Nahya Kesuma', 'Frontend & UI/UX enthusiast focused on creating user-friendly digital experiences.', 'I blend design and code to create smooth digital experiences that feel intuitive, fast, and delightful to use.', 'laptop.png\r\n', 'about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int NOT NULL,
  `biodata_id` int NOT NULL,
  `nama_sekolah` varchar(255) NOT NULL,
  `tahun` varchar(50) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `biodata_id`, `nama_sekolah`, `tahun`, `logo`) VALUES
(1, 1, 'SDN CIBEUREUM HILIR 5', '2010 – 2015', 'sd_logo.jpeg'),
(2, 1, 'SMP NEGERI 2 NAMANG', '2015 – 2018', 'smp_logo.jpeg'),
(3, 1, 'SMA NEGERI 2 PANGKALPINANG', '2018 – 2021', 'sma_logo.jpeg'),
(4, 1, 'UNIVERSITAS MUHAMMADIYAH SUKABUMI', '2023 – Now', 'ummi_logo.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int NOT NULL,
  `biodata_id` int NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `durasi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `biodata_id`, `posisi`, `perusahaan`, `deskripsi`, `durasi`) VALUES
(1, 1, 'Frontend Developer', 'XYZ Company', 'Bekerja sebagai frontend developer di XYZ Company, membangun dan memelihara aplikasi web menggunakan HTML, CSS, JavaScript, dan React.', 'January 2023 - Present'),
(2, 1, 'UI/UX Designer Intern', 'ABC Studio', 'Magang sebagai desainer UI/UX, berfokus pada desain antarmuka aplikasi mobile dan website dengan menggunakan tools seperti Figma dan Adobe XD.', 'June 2022 - December 2022');

-- --------------------------------------------------------

--
-- Table structure for table `experience_points`
--

CREATE TABLE `experience_points` (
  `id` int NOT NULL,
  `experience_id` int NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `experience_points`
--

INSERT INTO `experience_points` (`id`, `experience_id`, `isi`) VALUES
(1, 1, 'Implementasi desain responsif untuk pengalaman pengguna yang optimal'),
(2, 1, 'Pengembangan fitur interaktif dengan React dan Redux'),
(3, 1, 'Pengujian dan optimisasi performa aplikasi web'),
(4, 2, 'Mendesain wireframes dan prototipe interaktif untuk aplikasi mobile'),
(5, 2, 'Melakukan pengujian kegunaan dan memberi rekomendasi desain'),
(6, 2, 'Bekerja sama dengan tim developer untuk implementasi desain');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int NOT NULL,
  `biodata_id` int NOT NULL,
  `label` varchar(50) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `biodata_id`, `label`, `value`) VALUES
(1, 1, 'Name', 'Releyka Nahya Kesuma'),
(2, 1, 'Date of Birth', 'January 6, 2006'),
(3, 1, 'Location', 'Sukabumi, Indonesia'),
(4, 1, 'Phone Number', '+62 812 3456 7890');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `biodata_id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `biodata_id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 1, 'Aplikasi Donasi - KasihAksi', 'KasihAksi adalah aplikasi donasi digital yang mempermudah proses donasi dengan transparansi, keamanan, dan kemudahan akses.', 'kasihaksi.jpeg'),
(2, 1, 'Website Pemesanan Tiket - KeretaKu', 'KeretaKu adalah desain UI/UX untuk website pemesanan tiket kereta yang berfokus pada pengalaman pemesanan yang lebih cepat, jelas, dan mudah digunakan.', 'kereta.jpeg'),
(3, 1, 'Website Duta Baca - DUTABACAKOTSI', 'DUTABACAKOTSI merupakan desain UI/UX untuk platform literasi yang menyediakan informasi profil duta baca, artikel, kegiatan literasi, dan program edukatif.', 'dutabaca.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `project_points`
--

CREATE TABLE `project_points` (
  `id` int NOT NULL,
  `project_id` int NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `project_points`
--

INSERT INTO `project_points` (`id`, `project_id`, `isi`) VALUES
(1, 1, 'Donasi mudah, aman, dan cepat'),
(2, 1, 'Transparansi untuk donatur'),
(3, 1, 'Laporan real-time untuk pengelolaan yang lebih baik'),
(4, 2, 'Desain responsif untuk desktop dan mobile'),
(5, 2, 'Hierarki informasi yang rapi dan mudah dibaca'),
(6, 2, 'Pencarian rute & jadwal yang lebih intuitif'),
(7, 3, 'Berita & artikel literasi'),
(8, 3, 'Navigasi yang jelas dan mobile-friendly'),
(9, 3, 'Layout yang simple namun tetap modern');

-- --------------------------------------------------------

--
-- Table structure for table `project_skills`
--

CREATE TABLE `project_skills` (
  `id` int NOT NULL,
  `project_id` int NOT NULL,
  `skill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `project_skills`
--

INSERT INTO `project_skills` (`id`, `project_id`, `skill`) VALUES
(1, 1, 'Mobile App Development'),
(2, 1, 'Flutter'),
(3, 1, 'Backend Integration'),
(4, 2, 'UI/UX Design'),
(5, 2, 'Figma'),
(6, 2, 'Visual Design (Desktop + Mobile)'),
(7, 3, 'Responsive Web Design'),
(8, 3, 'Style Guide & Component System'),
(9, 3, 'UI/UX Design');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `biodata_id` int NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `persentase` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `biodata_id`, `kategori`, `skill`, `persentase`) VALUES
(1, 1, 'Development', 'HTML & CSS', 85),
(2, 1, 'Development', 'Bootstrap', 80),
(3, 1, 'Development', 'JavaScript', 60),
(4, 1, 'Development', 'PHP / CodeIgniter', 55),
(5, 1, 'Design', 'UI Layouting', 75),
(6, 1, 'Design', 'Canva / Figma', 70),
(7, 1, 'Other', 'Public Speaking', 65),
(8, 1, 'Other', 'Teamwork & Organizing', 80);

-- --------------------------------------------------------

--
-- Table structure for table `tech`
--

CREATE TABLE `tech` (
  `id` int NOT NULL,
  `biodata_id` int NOT NULL,
  `icon` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tech`
--

INSERT INTO `tech` (`id`, `biodata_id`, `icon`, `nama`) VALUES
(1, 1, 'bi bi-filetype-html', 'HTML & CSS'),
(2, 1, 'bi bi-bootstrap-fill', 'Bootstrap'),
(3, 1, 'bi bi-filetype-js', 'JavaScript'),
(4, 1, 'bi bi-brush', 'UI/UX Design'),
(5, 1, 'bi bi-git', 'Git & Github');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `experience_points`
--
ALTER TABLE `experience_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experience_id` (`experience_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `project_points`
--
ALTER TABLE `project_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_skills`
--
ALTER TABLE `project_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- Indexes for table `tech`
--
ALTER TABLE `tech`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experience_points`
--
ALTER TABLE `experience_points`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project_points`
--
ALTER TABLE `project_points`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `project_skills`
--
ALTER TABLE `project_skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tech`
--
ALTER TABLE `tech`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `experience_points`
--
ALTER TABLE `experience_points`
  ADD CONSTRAINT `experience_points_ibfk_1` FOREIGN KEY (`experience_id`) REFERENCES `experience` (`id`);

--
-- Constraints for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD CONSTRAINT `personal_info_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `project_points`
--
ALTER TABLE `project_points`
  ADD CONSTRAINT `project_points_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `project_skills`
--
ALTER TABLE `project_skills`
  ADD CONSTRAINT `project_skills_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);

--
-- Constraints for table `tech`
--
ALTER TABLE `tech`
  ADD CONSTRAINT `tech_ibfk_1` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
