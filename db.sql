-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 02:04 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(3) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(999) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `user_id`, `title`, `content`, `created_at`, `image`) VALUES
(3, '5f0641ece3dce313d4cf0716', 'Vest Hem Junajted â€“ poÄetak nove ere', 'U prestonici Engleske postoji mnogo veÄ‡ih klubova, ali u samom Londonu najviÅ¡e navijaÄa ima upravo fudbalski klub Vest Hem Junajted. Jedino objaÅ¡njenje je to Å¡to je fudbal nekada bio igra i zabava radniÄke, da ne zvuÄi pregrubo, â€œniÅ¾eâ€ klase stanovniÅ¡tva. Upravo oni su i osnovali ÄŒekiÄ‡are, Å¡to je najpoznatiji nadimak tima iz Njuhema u IstoÄnom Londonu. Prvo ime kluba bilo je Temz Ajronvorks F.C. a kao glavni inicijatori pominju se lokalni fudbalski sudija Dejv Tejlor i biznismen Arnold Hils.\r\n\r\n\r\nPreimenovanje se desilo 1900., a 1904. godine klub je premeÅ¡ten  na stadion Bolin Graund (ili Apton Park), na kom joÅ¡ uvek igra. Trenutni kapacitet tribina je 35,016 mesta. Pripalo im je pravo na Olimpijski stadion u Londonu, gde je trebalo da preÄ‘u posle Igara 2012., ali zbog tuÅ¾be gradskog rivala Totenhema , to nije ozvaniÄeno. 22.marta 2013. objavljeno je da je klub ipak dobio Olimpijski stadion kapaciteta 80,000 mesta , na 99 godina, a na njega Ä‡e preÄ‡i uoÄi sezon', '2020-06-24 23:53:04', 'dist/img/uploads/FB_IMG_1568461371420.jpg'),
(7, '5f0641ece3dce313d4cf0716', 'Illustration-2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>', '2020-06-24 23:50:54', 'dist/img/uploads/bg-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(1, 'Crni 256gb'),
(2, 'Crni 32gb'),
(3, '64gb'),
(4, 'Crni 128gb'),
(7, 'Sivi 32gb'),
(8, 'Plavi 64gb'),
(9, 'Dual Sim Crni 64gb'),
(10, 'Silikon'),
(14, 'Mobilna oprema'),
(16, 'Tablet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `sId` varchar(255) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `sId`, `productId`, `productName`, `price`, `quantity`, `image`) VALUES
(28, 'hb1dkvk8ptdfhleq375m01e891', 1, ' Ariyan Lorem Ipsum fsdfasdaf', 525.00, 1, 'upload/a2d9ff0c56.png'),
(47, 'ncan4pfmi5206kbsa33ben8dfq', 1, 'Vreme Cuda', 300.00, 1, 'upload/24bdf0aefc.jpg'),
(93, 'qosf95gm03apuu802hb4leri6r', 1, 'Huawei P30', 813.00, 1, 'upload/5835d3d011.jpg'),
(100, 'nurvfna00q8tvler2e9kted7fl', 7, 'Maska', 5.00, 1, 'upload/8acbf97486.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(4, 'Xiaomi'),
(6, 'Nokia'),
(9, 'Huawei'),
(10, 'Samsung'),
(11, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_compare`
--

CREATE TABLE `tbl_compare` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_compare`
--

INSERT INTO `tbl_compare` (`id`, `cmrId`, `productId`, `productName`, `price`, `image`) VALUES
(1, 0, 2, 'Galaxy S10', 612.00, 'upload/f82a1ccc49.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_copy`
--

CREATE TABLE `tbl_copy` (
  `id` int(11) NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_copy`
--

INSERT INTO `tbl_copy` (`id`, `copyright`) VALUES
(1, 'Elmaz Feratovic - Internet Tehnologije');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zip` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `is_admin` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `username`, `name`, `address`, `city`, `country`, `zip`, `phone`, `email`, `pass`, `is_admin`) VALUES
(11, 'marko', 'Marko', 'Podgorica, Podgorica', 'Podgorica', 'Mne', '81000', '+38269984129', 'janko@test.com', '12345', 1),
(13, 'luka', 'Luka Popovic', 'Podgorica, Podgorica', 'Podgorica', 'Ð¦Ñ€Ð½Ð° Ð“Ð¾Ñ€Ð°', '81000', '+3826999842', 'luka@admin.com', 'secret', 0),
(15, '', 'Karlito Brigante', 'Tolosi', 'Podgorica', 'Ð¦Ñ€Ð½Ð° Ð“Ð¾Ñ€Ð°', '81000', '+38269891329', 'ivan@ivan.com', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `m_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_message`
--

INSERT INTO `tbl_message` (`m_id`, `message`, `name`, `email`, `phone`, `date`, `status`) VALUES
(9, 'sasawawadddddddddd', 'marko Marko', 'marko@outlook.com', '069891329', '2020-07-09 17:19:09', 0),
(10, 'wawaa', 'guest', 'ivan@ivan.com', '069123456', '2020-07-09 17:12:05', 1),
(11, 'Note : Returns TRUE if var exists and has value other than NULL, FALSE otherwise. If you want to check for false , 0 etc You can then use empty() ...', 'Uliks Fehmi', 'uliks@mail.com', '+382 66 665123', '2020-07-09 17:22:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `o_id` int(11) NOT NULL,
  `cmrId` varchar(255) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`o_id`, `cmrId`, `productId`, `productName`, `quantity`, `price`, `image`, `status`, `date`) VALUES
(14, '5f0641ece3dce313d4cf0716', 2, 'Galaxy S10', 1, 612.00, 'upload/f82a1ccc49.jpg', 1, '2020-07-07 16:17:12'),
(15, '5f0641ece3dce313d4cf0716', 7, 'Maska', 5, 5.00, 'upload/8acbf97486.jpg', 1, '2021-02-03 11:50:20'),
(16, '5f0641ece3dce313d4cf0716', 4, 'Ajfon 11', 4, 1112.00, 'upload/5b351db616.jpg', 1, '2021-02-03 11:50:20'),
(17, '5f0641ece3dce313d4cf0716', 2, 'Galaxy S10', 1, 612.00, 'upload/f82a1ccc49.jpg', 1, '2021-02-03 11:50:20'),
(18, '5f0641ece3dce313d4cf0716', 7, 'Maska', 1, 5.00, 'upload/8acbf97486.jpg', 0, '2021-02-23 11:29:45'),
(19, '5f0641ece3dce313d4cf0716', 1, 'Huawei P30', 1, 813.00, 'upload/5835d3d011.jpg', 1, '2021-02-23 11:29:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `body` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `body`, `price`, `image`, `type`) VALUES
(1, 'Huawei P30', 9, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 813.00, 'upload/5835d3d011.jpg', 1),
(2, 'Galaxy S10', 10, 4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 612.00, 'upload/f82a1ccc49.jpg', 1),
(4, 'Ajfon 11', 11, 3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 1112.00, 'upload/5b351db616.jpg', 1),
(5, 'Wifi slusalice', 11, 14, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 12.00, 'upload/b73bb8152f.jpg', 0),
(6, 'Punjac', 9, 14, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 9.00, 'upload/7e88726d43.jpg', 1),
(7, 'Maska', 11, 14, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 5.00, 'upload/8acbf97486.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sessions`
--

CREATE TABLE `tbl_sessions` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `logged_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sessions`
--

INSERT INTO `tbl_sessions` (`id`, `user_id`, `logged_at`) VALUES
(494, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(495, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(496, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(497, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(498, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(499, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(500, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(501, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(502, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(503, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(504, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(505, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(506, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(507, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(508, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(509, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(510, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(511, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(530, 'a42a596fc71e17828440030074d15e74', '2021-01-15 02:00:34'),
(608, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(609, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(610, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(611, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(612, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(613, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(614, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(615, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(616, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(617, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(618, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(619, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(620, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(621, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(622, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(623, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(624, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(625, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(626, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(627, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(628, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(629, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(630, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(631, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(632, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(633, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(634, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(635, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(636, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(637, 'a42a596fc71e17828440030074d15e74', '2021-02-15 02:00:34'),
(638, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(639, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(640, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(641, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(642, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(643, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(644, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(645, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(646, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(647, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(648, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(649, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(650, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(651, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(652, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(653, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(654, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(655, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(656, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(657, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(658, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(659, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(660, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(661, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(662, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(663, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(664, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(665, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(666, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(667, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(668, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(669, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(670, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(671, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(672, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(673, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(674, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(675, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(676, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(677, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(678, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(679, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(680, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(681, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(682, 'a42a596fc71e17828440030074d15e74', '2021-03-15 02:00:34'),
(683, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(684, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(685, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(686, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(687, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(688, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(689, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(690, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(691, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(692, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(693, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(694, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(695, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(696, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(697, 'a42a596fc71e17828440030074d15e74', '2021-04-15 01:00:34'),
(698, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(699, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(700, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(701, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(702, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(703, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(704, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(705, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(706, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(707, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(708, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(709, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(710, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(711, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(712, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(713, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(714, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(715, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(716, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(717, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(718, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(719, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(720, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(721, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(722, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(723, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(724, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(725, 'a42a596fc71e17828440030074d15e74', '2021-05-15 01:00:34'),
(726, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(727, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(728, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(729, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(730, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(731, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(732, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(733, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(734, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(735, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(736, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(737, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(738, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(739, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(740, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(741, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(742, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(743, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(744, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(745, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(746, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(747, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(748, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(749, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(750, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(751, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(752, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(753, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(754, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(755, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(756, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(757, 'a42a596fc71e17828440030074d15e74', '2021-06-15 01:00:34'),
(758, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(759, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(760, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(761, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(762, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(763, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(764, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(765, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(766, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(767, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(768, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(769, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(770, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(771, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(772, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(773, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(774, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(775, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(776, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(777, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(778, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(779, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(780, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(781, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(782, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(783, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(784, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(785, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(786, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(787, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(788, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(789, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(790, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(791, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(792, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(793, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(794, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(795, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(796, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(797, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(798, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(799, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(800, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(801, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(802, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(803, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(804, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(805, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(806, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(807, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(808, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(809, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(810, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(811, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(812, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(813, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(814, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(815, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(816, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(817, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(818, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(819, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(820, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(821, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(822, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(823, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(824, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(825, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(826, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(827, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(828, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(829, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(830, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(831, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(832, 'a42a596fc71e17828440030074d15e74', '2021-07-15 01:00:34'),
(833, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(834, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(835, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(836, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(837, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(838, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(839, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(840, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(841, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(842, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(843, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(844, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(845, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(846, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(847, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(848, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(849, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(850, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(851, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(852, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(853, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(854, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(855, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(856, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(857, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(858, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(859, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(860, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(861, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(862, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(863, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(864, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(865, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(866, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(867, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(868, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(869, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(870, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(871, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(872, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(873, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(874, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(875, 'a42a596fc71e17828440030074d15e74', '2021-08-15 01:00:34'),
(876, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(877, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(878, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(879, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(880, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(881, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(882, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(883, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(884, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(885, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(886, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(887, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(888, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(889, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(890, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(891, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(892, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(893, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(894, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(895, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(896, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(897, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(898, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(899, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(900, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(901, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(902, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(903, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(904, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(905, 'a42a596fc71e17828440030074d15e74', '2021-09-15 01:00:34'),
(906, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(907, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(908, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(909, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(910, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(911, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(912, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(913, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(914, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(915, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(916, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(917, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(918, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(919, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(920, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(921, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(922, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(923, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(924, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(925, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(926, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(927, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(928, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(929, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(930, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(931, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(932, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(933, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(934, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(935, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(936, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(937, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(938, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(939, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(940, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(941, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(942, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(943, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(944, 'a42a596fc71e17828440030074d15e74', '2021-10-15 01:00:34'),
(945, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(946, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(947, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(948, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(949, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(950, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(951, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(952, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(953, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(954, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(955, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(956, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(957, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(958, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(959, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(960, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(961, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(962, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(963, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(964, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(965, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(966, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(967, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(968, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(969, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(970, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(971, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(972, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(973, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(974, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(975, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(976, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(977, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(978, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(979, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(980, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(981, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(982, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(983, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(984, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(985, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(986, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(987, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(988, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(989, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(990, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(991, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(992, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(993, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(994, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(995, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(996, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(997, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(998, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(999, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1000, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1001, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1002, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1003, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1004, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1005, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1006, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1007, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1008, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1009, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1010, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1011, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1012, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1013, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1014, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1015, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1016, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1017, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1018, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1019, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1020, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1021, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1022, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1023, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1024, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1025, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1026, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1027, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1028, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1029, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1030, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1031, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1032, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1033, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1034, 'a42a596fc71e17828440030074d15e74', '2021-11-15 02:00:34'),
(1035, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1036, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1037, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1038, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1039, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1040, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1041, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1042, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1043, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1044, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1045, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1046, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1047, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1048, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1049, 'a42a596fc71e17828440030074d15e74', '2021-12-15 02:00:34'),
(1050, 'cb4b69eb9bd10da82c15dca2f86a1385', '2021-12-16 01:18:21'),
(1051, 'cb4b69eb9bd10da82c15dca2f86a1385', '2021-12-16 01:18:30'),
(1052, 'cb4b69eb9bd10da82c15dca2f86a1385', '2021-12-16 16:15:51'),
(1053, 'cb4b69eb9bd10da82c15dca2f86a1385', '2021-12-17 09:24:43'),
(1054, 'cb4b69eb9bd10da82c15dca2f86a1385', '2021-12-17 16:37:46'),
(1055, 'cb4b69eb9bd10da82c15dca2f86a1385', '2021-12-18 09:44:13'),
(1056, '708be71b9ab6e0a84252760579ade9f1', '2021-12-18 09:45:03'),
(1057, 'cb4b69eb9bd10da82c15dca2f86a1385', '2021-12-18 17:06:49'),
(1058, 'cb4b69eb9bd10da82c15dca2f86a1385', '2021-12-19 09:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `gp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `fb`, `tw`, `ln`, `gp`) VALUES
(1, 'https://www.facebook.com/ariyan', 'https://twitter.com/ariyan', 'https://linkedin.com/ariyan', 'https://www.google.com/ariyan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `zip` varchar(8) NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `image`, `address`, `phone`, `zip`, `country`, `city`, `created_at`, `updated_at`, `is_admin`) VALUES
('3569df159ec477451530c4455b2a9e86', 'Colette', 'sinisa94', 'tajywe@mailinator.com', '$2y$10$IWCe5eht48YoymV.GQK4hOYRrgp/UwMunbqFsGmUdCEtJ4wDiGToy', NULL, 'Voluptate ab numquam eum velit', '+38268089077', '35662', 'Rwanda, RW', 'Qui et quasi quidem odio eos e', '2021-12-09 02:56:41', '2021-12-10 05:27:25', 1),
('373e4c5d8edfa8b74fd4b6791d0cf6dc', 'Geoffrey Holcomb', 'famuhy', 'xedujasuji@mailinator.com', '$2y$10$JtVZie6X0p8YxQ2UX8KhnuRgzX6419zmQyMSa1M8yTrs9Aa2PEil.', 'uploads/9b3386782e.jpg', 'Qui molestias voluptates moles', '+195 74 053 004', '25163', 'Saudi Arabia, SA', 'Ea incidunt maiores fugit co', '2021-12-19 11:45:42', NULL, 1),
('58f1e2bfc0c0c182f1afdab7cae02402', 'Kylynn Chavez', 'pyfag', 'xaqebime@mailinator.com', '$2y$10$Rg4CAHwUCAnymD1C9R08m.tEUmTlW1KczYmU2w3KOUeMDt/3KFUla', NULL, 'Aliquid voluptas nobis eligend', '+124 66 479 615', '15361', 'Tunisia, TN', 'Minim aut aut aut est quo quo', '2021-12-17 10:37:44', NULL, 0),
('5e9fb672ee46be628a141b594d7c6f3e', 'Jillian Lyons', 'xocoxuxoj', 'sidaba@mailinator.com', '$2y$10$o6HodGJWkibd3Zz.OCkOXOifby1VnNbBTwZW5sjsFLAXlhGv40Y3a', NULL, 'Pariatur Aliquip qui cumque r', '+160 71 696 239', '39003', 'Svalbard and Jan Mayen, SJ', 'Irure dolore aut earum culpa', '2021-12-17 10:52:25', NULL, 0),
('5f0641ece3dce313d4cf0716', 'Admin', 'admin', 'admin@mail.com', '$2y$10$IWCe5eht48YoymV.GQK4hOYRrgp/UwMunbqFsGmUdCEtJ4wDiGToy', NULL, 'Vijenac kosovskih junaka', '+38269123456', '81000', 'Montenegro, ME', 'Podgorica', '2021-12-04 00:35:45', '2021-12-08 22:44:59', 1),
('619953730129049907919279f29bd9d7', 'Lucas Battle', 'xujeciloq', 'wilopol@mailinator.com', '$2y$10$fNwBse4AfiEFZ22f06.zA.mT9JMecjKvw3igUjkcxMcxzUw3McLWO', NULL, 'Soluta tempor sed temporibus a', '+156 14 618 573', '11804', 'Venezuela, VE', 'Ut amet illum accusantium ad', '2021-12-14 23:50:00', NULL, 1),
('6de4bfe9504589a457d6e92fae4f9613', 'Sean Mullen', 'kokigo', 'zuraxefoj@mailinator.com', '$2y$10$mRuRFgtI26fiSEwHxuH1Jux8VEHtXTDOVu7VbYp1aUnjt64YgKhs2', NULL, 'Placeat natus molestiae solut', '+173 14 949 884', '75548', 'Vanuatu, VU', 'Ipsam libero temporibus evenie', '2021-12-16 03:37:53', NULL, 1),
('708be71b9ab6e0a84252760579ade9f1', 'Adara Donovan', 'marko', 'jadyg@mailinator.com', '$2y$10$SyyGmql.45Py452XmjbhruUab5sPoJhxkFkH5YCI1gVu4IK4PLPmS', 'uploads/c458265366.jpg', 'Quae sint dolorem assumenda te', '+182 42 024 962', '34651', 'Belarus, BY', 'Cupiditate in enim quod commod', '2021-12-18 09:44:46', NULL, 1),
('7cf64379eb6f29a4d25c4b6a2df713e4', 'Benjamin Mcmahon', 'xonalocof', 'vibi@mailinator.com', '$2y$10$zvOrWBGGodhzGsi2FmViSerdLiulIQwh3pMuzPsUdvb5Phf07KmCm', 'uploads/7e8069617b.jpg', 'Dolore excepturi itaque recusa', '+194 93 952 077', '57004', 'Luxembourg, LU', 'Esse qui minima quas non do m', '2021-12-17 18:56:18', NULL, 0),
('7f83c19d8adc72f08f8fde30a57eef79', 'Germaine Rogers', 'nanagitic', 'kewupyjoka@mailinator.com', '$2y$10$2T5jOBcn8lTtzZs6c8t1OuPMo7eZh.7Wqv3eiaAeoTUlo1ct93s.6', NULL, 'Modi omnis consectetur labore', '+140 34 734 529', '46662', 'South Africa, ZA', 'In perspiciatis illum incidu', '2021-12-16 03:47:27', NULL, 1),
('9a02387b02ce7de2dac4b925892f68fb', 'Carter Mccormick', 'tibezyveno', 'xuhuh@mailinator.com', '$2y$10$/ttAcvaUcvgMrsvRkkI/HO5jx.ZT1VTKEGDBFYpQ76n3yMjBViYqa', NULL, 'Exercitation voluptate esse i', '+173 51 135 584', '42165', 'Haiti, HT', 'Enim quisquam quasi similique', '2021-12-16 03:34:10', NULL, 0),
('9b523b0c92185f39a0da77a82c51b46a', 'Scott Fuentes', 'qyqog', 'vukydor@mailinator.com', '$2y$10$ALL415g4By/93fkT2eV6FOPW6OP6dkPHwD/ZxW7eOVhIPLFVvuvOi', NULL, 'Cillum ut et mollitia dolore u', '+163 74 482 747', '95056', 'Norfolk Island, NF', 'Obcaecati fuga Quos dolore au', '2021-12-14 22:54:03', NULL, 0),
('a42a596fc71e17828440030074d15e74', 'Hyacinth Deleon', 'wytani', 'madewut@mailinator.com', '$2y$10$2yUX0eIYim1euoZ.MMFo3Ohv.kWPSFRb.hx/VDs5mYmJLW1Y1yjiK', NULL, 'Assumenda reprehenderit ullam', '+185 39 556 197', '66097', 'Saint Kitts and Nevis, KN', 'Sed sunt magna corrupti culp', '2021-12-14 23:50:06', NULL, 1),
('b6417f112bd27848533e54885b66c288', 'Denton Stein', 'user1', 'mowe@mailinator.com', '$2y$10$IWCe5eht48YoymV.GQK4hOYRrgp/UwMunbqFsGmUdCEtJ4wDiGToy', NULL, 'Distinctio Esse culpa sint', '+120 49 322 411', '52939', 'Albania, AL', 'Unde non aspernatur harum ipsu', '2021-12-14 23:49:54', NULL, 1),
('cb4b69eb9bd10da82c15dca2f86a1385', 'SiniÅ¡a B.', 'sinisa', 'sinisa.becic@outlook.com', '$2y$10$FB8zu4Ov6gMqVMJxq9rgx.Ul.MSeI9XeZPQrl.KZa0u6.wata2CeW', NULL, 'Podgorica', '+38268089077', '81000', 'Argentina, AR', 'Buenos Aires', '2021-12-06 23:29:55', '2021-12-07 17:47:32', 1),
('d756d3d2b9dac72449a6a6926534558a', 'Avye Morrow', 'xehed', 'fifalo@mailinator.com', '$2y$10$6H7wfsvZ2F9sDrm7R1vwd.HDizQjB8GdFCh5nv9l8P4Y.FwAcFBwy', 'uploads/d09e34782b.png', 'Praesentium duis qui qui et ea', '+178 17 257 087', '49239', 'Panama, PA', 'Dolor irure pariatur Quae fac', '2021-12-17 18:56:42', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wlist`
--

CREATE TABLE `tbl_wlist` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wlist`
--

INSERT INTO `tbl_wlist` (`id`, `cmrId`, `productId`, `productName`, `price`, `image`) VALUES
(3, 0, 6, 'Punjac', 9.00, 'upload/7e88726d43.jpg'),
(7, 1, 4, 'Ajfon 11', 1112.00, 'upload/5b351db616.jpg'),
(10, 5, 2, 'Galaxy S10', 612.00, 'upload/f82a1ccc49.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_author` (`user_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_compare`
--
ALTER TABLE `tbl_compare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_copy`
--
ALTER TABLE `tbl_copy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `cmrId` (`cmrId`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `tbl_product_ibfk_1` (`catId`),
  ADD KEY `tbl_product_ibfk_2` (`brandId`);

--
-- Indexes for table `tbl_sessions`
--
ALTER TABLE `tbl_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `constraint_user_id_sessions_id` (`user_id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_wlist`
--
ALTER TABLE `tbl_wlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_compare`
--
ALTER TABLE `tbl_compare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_copy`
--
ALTER TABLE `tbl_copy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_sessions`
--
ALTER TABLE `tbl_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1059;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_wlist`
--
ALTER TABLE `tbl_wlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD CONSTRAINT `blog_author` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`cmrId`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`catId`) REFERENCES `tbl_category` (`catId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`brandId`) REFERENCES `tbl_brand` (`brandId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_sessions`
--
ALTER TABLE `tbl_sessions`
  ADD CONSTRAINT `constraint_user_id_sessions_id` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
