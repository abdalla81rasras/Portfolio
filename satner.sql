-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 11:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satner`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `description_about` varchar(500) NOT NULL,
  `cv_about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `description_about`, `cv_about`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis quaerat, optio natus odio magni mollitia at tenetur quibusdam animi, placeat est expedita laborum maxime autem. Quas nostrum provident corrupti laborums.', '540cb75550adf33dd14fded85bfc.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `twitter` varchar(500) NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `linkedin` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `facebook`, `twitter`, `instagram`, `linkedin`) VALUES
(1, 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', 'www.linkedin.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `img_feedback` text NOT NULL,
  `name_client` varchar(200) NOT NULL,
  `feed_client` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `img_feedback`, `name_client`, `feed_client`) VALUES
(2, 't1.jpg', 'Elite Martin', 'Him, made can\'t called over won\'t there on divide there male fish beast own his day third seed sixth seas unto. Saw from'),
(3, 't2.jpg', 'Davil Saden', 'Him, made can\'t called over won\'t there on divide there male fish beast own his day third seed sixth seas unto. Saw from'),
(4, 't1.jpg', 'Elite Martin', 'Him, made can\'t called over won\'t there on divide there male fish beast own his day third seed sixth seas unto. Saw from'),
(5, 't2.jpg', 'Davil Saden', 'Him, made can\'t called over won\'t there on divide there male fish beast own his day third seed sixth seas unto. Saw from'),
(6, 't1.jpg', 'Elite Martin', 'Him, made can\'t called over won\'t there on divide there male fish beast own his day third seed sixth seas unto. Saw from'),
(7, 't2.jpg', 'Davil Saden', 'Him, made can\'t called over won\'t there on divide there male fish beast own his day third seed sixth seas unto. Saw from');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id_footer` int(11) NOT NULL,
  `img_footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id_footer`, `img_footer`) VALUES
(1, 'Website Logo (3).png');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(11) NOT NULL,
  `name_tab` varchar(80) NOT NULL,
  `img_tab` text NOT NULL,
  `img_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id_header`, `name_tab`, `img_tab`, `img_logo`) VALUES
(1, 'Satner Portfolio', 'Website Logo.png', 'Website Logo (3).png');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id_home` int(11) NOT NULL,
  `name_home` varchar(200) NOT NULL,
  `department` varchar(250) NOT NULL,
  `phone_home` varchar(250) NOT NULL,
  `email_home` varchar(250) NOT NULL,
  `zoom` varchar(500) NOT NULL,
  `messenger` varchar(500) NOT NULL,
  `cv_home` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id_home`, `name_home`, `department`, `phone_home`, `email_home`, `zoom`, `messenger`, `cv_home`) VALUES
(1, 'Abdalla Rasras', 'Full Stack', '0799048621', 'abdallarasras81@gmail.com', 'www.zoom.com', 'www.messanger.com', 'cv.docx');

-- --------------------------------------------------------

--
-- Table structure for table `imgs_underabout`
--

CREATE TABLE `imgs_underabout` (
  `id_imgs_underabout` int(11) NOT NULL,
  `img_imgs_underabout` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imgs_underabout`
--

INSERT INTO `imgs_underabout` (`id_imgs_underabout`, `img_imgs_underabout`) VALUES
(4, 'html.png'),
(5, 'css.png'),
(6, 'js.png'),
(7, 'scss.png'),
(8, 'database.png'),
(9, 'php.png'),
(10, 'jquey.png'),
(11, 'json.png'),
(14, 'api.png');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `state2` varchar(200) NOT NULL,
  `img_portfolio` text NOT NULL,
  `name_portfolio` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `state`, `state2`, `img_portfolio`, `name_portfolio`) VALUES
(3, 'popular', '', 'Anime-1536x942.png', 'anime'),
(4, 'popular', '', 'Frame-175-1.png', 'renut4u'),
(7, 'upcoming', '', 'ogani-1.jpg', 'ogani'),
(9, 'upcoming', 'latest', 'milina.png', 'milina'),
(10, 'following', '', 'AI_Tech.png', 'ai_teach'),
(11, 'following', '', 'labsky.png', 'labsky'),
(12, 'latest', '', 'conference-v2-1.jpg', 'conference'),
(13, 'latest', '', 'furni.png', 'furni'),
(17, 'popular', '', 'medicare1-1.jpg', 'renut4u');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `title_service1` varchar(200) NOT NULL,
  `description_service1` varchar(500) NOT NULL,
  `title_service2` varchar(200) NOT NULL,
  `description_service2` varchar(500) NOT NULL,
  `title_service3` varchar(200) NOT NULL,
  `description_service3` varchar(500) NOT NULL,
  `title_service4` varchar(200) NOT NULL,
  `description_service4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id_service`, `title_service1`, `description_service1`, `title_service2`, `description_service2`, `title_service3`, `description_service3`, `title_service4`, `description_service4`) VALUES
(1, 'web developing', 'itself togeth created after sea is in beast beginning signs open god you\'re gathering ithe', 'web design', 'itself togeth created after sea is in beast beginning signs open god you\'re gathering ithe', 'database', 'itself togeth created after sea is in beast beginning signs open god you\'re gathering ithe', 'web backend', 'itself togeth created after sea is in beast beginning signs open god you\'re gathering ithe');

-- --------------------------------------------------------

--
-- Table structure for table `under_about`
--

CREATE TABLE `under_about` (
  `id_underabout` int(11) NOT NULL,
  `experience` int(50) NOT NULL,
  `P_E` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `under_about`
--

INSERT INTO `under_about` (`id_underabout`, `experience`, `P_E`) VALUES
(2, 3, '+962 0799048621');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id_home`);

--
-- Indexes for table `imgs_underabout`
--
ALTER TABLE `imgs_underabout`
  ADD PRIMARY KEY (`id_imgs_underabout`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `under_about`
--
ALTER TABLE `under_about`
  ADD PRIMARY KEY (`id_underabout`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `imgs_underabout`
--
ALTER TABLE `imgs_underabout`
  MODIFY `id_imgs_underabout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `under_about`
--
ALTER TABLE `under_about`
  MODIFY `id_underabout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
