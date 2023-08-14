-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2023 at 06:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `secondname`, `username`, `password`) VALUES
(9, 'admin', 'admin', 'admin ', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `completedorders`
--

CREATE TABLE `completedorders` (
  `id` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `servedby` varchar(255) NOT NULL,
  `completed_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `dates` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `tagnumber` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `tagnumber`, `name`, `telephone`) VALUES
(1, '001', 'olumide okebunmi', '0201482964'),
(11, '002', 'gustav', '0559091523'),
(12, '012', 'nana yaw', '0558699684'),
(13, '013', 'reagan', '0208404800'),
(14, '014', 'hans', '0246031926'),
(15, '015', 'Mr samuel Baidu', '0243255915'),
(16, '016', 'mawuli', '0240499990'),
(18, '017', 'senyo', '0244976212'),
(20, '019', 'Mr Tonny', '0244281005'),
(21, '021', 'james', '0550719879'),
(22, '022', 'Emma', '0544242981'),
(23, '023', 'Kwesi', '0551439154'),
(24, '024', 'Bohyeba', '0262047467'),
(25, '025', 'Rev.opoku', '0244745722'),
(26, '026', 'MR. Asare', '0244366137'),
(27, '027', 'Baaba', '0544205586'),
(28, '028', 'Gladstone', '0243211439'),
(29, '029', 'Mr. Edward', '0264360004'),
(30, '030', 'Nana', '0244858388'),
(31, '031', 'Mad Angela', '0246599263'),
(32, '032', 'Jake', '0244786168'),
(33, '033', 'Addison', '0244833485'),
(34, '034', 'Lawrence', '0249113513'),
(35, '035', 'Bagur', '0244372395'),
(36, '036', 'Asenso', '0248370813'),
(37, '037', 'Mr Bernard', '0244804505'),
(38, '038', 'Debrah', '0242922277'),
(39, '039', 'Foster', '0244259861'),
(40, '040', 'J B', '0240142330'),
(41, '041', 'Mr  Stephe ', '0243528855'),
(42, '042', 'jones', '0249577665'),
(43, '043', 'Alhaji  Mohammed', '0246461204'),
(44, '044', 'gorge', '0556558797'),
(45, '045', 'Mohammed', '0244360846'),
(46, '046', 'Daniel', '0243748840'),
(47, '047', 'sheimage', '0248157274'),
(48, '048', 'derrick', '0205877197'),
(49, '049', 'Deborah', '0593064423'),
(50, '050', 'oko', '0246243137'),
(51, '051', 'Mr   Razak', '0206300292'),
(52, '052', 'Wilfred', '0542932974'),
(53, '053', 'Fynn', '0243556200'),
(54, '054', 'Patrick', '0554605519'),
(55, '055', 'Ejiro', '0548871681'),
(56, '056', 'Dr  Abroakwah', '0504558585'),
(57, '057', 'Robert', '0243115452'),
(58, '058', 'Jate', '0207279090'),
(59, '059', 'Favor', '0544804172'),
(60, '060', 'Becky', '0553765609'),
(61, '061', 'Kennet', '0592152330'),
(62, '062', 'Kwame', '0204400114'),
(63, '063', 'Joe Omari', '0558058539'),
(64, '064', 'ps Gideon', '0244891900'),
(65, '065', 'jonas', '0240283395'),
(66, '066', 'Deborah', '0599333093'),
(67, '067', 'Hecks', '0248991195'),
(68, '068', 'Jonathan', '0206457727'),
(69, '069', 'Sister Mercy', '0243102599'),
(70, '070', 'Tingn', '0243971292'),
(71, '071', 'Barbara', '0206990106'),
(72, '072', 'Maa  Gifty', '0244562594'),
(73, '073', 'Newlove', '0246467089'),
(74, '074', 'Akosua', '0246653805'),
(75, '075', 'Mama  Norvisi', '0558479901'),
(76, '076', 'Joseph', '0592770714'),
(77, '077', 'Dennis', '0509679502'),
(78, '078', 'Charles', '0593333170'),
(79, '079', 'Rosita', '0559404673'),
(80, '080', 'Cyril', '0263372851'),
(81, '081', 'NII', '0552502911'),
(82, '082', 'Emmanuel', '0248110208'),
(83, '083', 'Rita', '0598169298'),
(84, '084', 'Jessica', '0553833952'),
(85, '085', 'Jeremiah', '0247708354'),
(86, '086', 'James', '0556218690'),
(87, '087', 'Rev. Forson', '0241876840'),
(88, '088', 'Mary', '0244670281'),
(89, '089', 'Kwame', '0247050734'),
(90, '090', 'Prince', '0501235510'),
(91, '091', 'Felix', '0551644905'),
(92, '092', 'Nelly', '0553084454'),
(93, '093', 'sandra', '0209634439'),
(94, '094', 'Zack', '0202019631'),
(95, '095', 'Timothy', '0245152356'),
(96, '096', 'joejoe', '0554111467'),
(97, '097', 'Elijah', '0245817684'),
(98, '098', 'Marius', '0557078123'),
(99, '099', 'sandra Addo', '0596611336'),
(100, '100', 'Davis', '0243555020'),
(101, '101', 'Rockson', '0554528782'),
(102, '102', 'Alex', '0262514232'),
(103, '103', 'Mr..yeboah', '0244637454'),
(104, '104', 'Prosper', '0548430232'),
(105, '105', 'Christiana', '0507353597'),
(106, '106', 'Maame Akua', '0244768433'),
(107, '107', 'Judith', '0541000821'),
(108, '108', 'Atwene  Boana', '0273176771'),
(109, '109', 'Kwesi Nyamekye', '0244848431'),
(110, '110', 'Kate', '0243914750'),
(111, '111', 'kwesi Dennis', '0552532423'),
(112, '112', 'Mr Ayerno', '0208114308'),
(113, '113', 'Aunty  Diana', '0244363064'),
(114, '114', 'Telvin', '0544241591'),
(115, '115', 'Kwesi', '0531866885'),
(116, '116', 'Justice', '0244765478'),
(117, '117', 'Gideon', '0549799865'),
(118, '118', 'King Charles', '0267011101'),
(119, '119', '1 Million', '0596077718'),
(120, '120', 'Jandal', '0206445410'),
(121, '121', 'Rashida', '0599957982'),
(122, '122', 'SD', '0546016118'),
(123, '123', 'Mable', '0248294879'),
(124, '124', 'AmaCBG', '0248619895'),
(125, '125', 'Eugene', '0553776199'),
(126, '126', 'Patrick', '0243385334');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `secondname`, `DOB`, `username`, `telephone`, `password`) VALUES
(7, 'Florence', 'Agyekum', '1999-09-19', 'Florence Agyekum', '0559404673', '0559404673'),
(4, 'hilda', 'baci', '2023-06-02', 'hilda baci', '024537687', 'cookhaton');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `item`, `price`, `date`) VALUES
(1, 'shirt - washing & ironing', 10, '2023-06-14 00:00:00'),
(2, 'shirt washing', 4, '2023-06-14 00:00:00'),
(3, 'shirt ironing', 6, '2023-06-14 00:00:00'),
(4, 'Trouser washing&ironing', 10, '2023-06-14 00:00:00'),
(5, 'boxer washing', 2, '2023-06-14 00:00:00'),
(6, 'boxer washing&ironing', 4, '2023-06-14 00:00:00'),
(7, 'boxer ironing', 2, '2023-06-14 00:00:00'),
(8, 'trouser washing', 6, '2023-06-14 00:00:00'),
(11, 'Lacoste washing&ironing', 6, '2023-06-14 17:00:01'),
(12, 'Lacoste washing', 3, '2023-06-14 17:00:01'),
(13, 'Lacoste ironing', 4, '2023-06-14 17:00:20'),
(14, 'dress washing&ironing', 12, '2023-06-20 21:04:03'),
(16, 'suit jacket (Men) washing&ironing', 20, '2023-06-20 21:33:01'),
(17, 'suit jacket(Men) washing only', 15, '2023-06-20 21:33:51'),
(18, 'suit jacket(Men) ironing only', 15, '2023-06-20 21:34:09'),
(19, 'suit jacket (Ladies) washing&ironing', 18, '2023-06-20 21:34:53'),
(20, 'suit jacket(Ladies) washing only', 8, '2023-06-20 21:35:43'),
(21, 'suit jacket(Ladies) ironing only', 10, '2023-06-20 21:35:57'),
(22, 'tracksuit pant washing&ironing ', 10, '2023-06-20 22:14:35'),
(23, 'tracksuit pant washing', 5, '2023-06-20 22:15:08'),
(24, 'track suit pant ironing ', 6, '2023-06-20 22:15:23'),
(25, 'complete kaftan washing&ironing', 20, '2023-06-20 22:16:30'),
(26, 'complete kaftan washing', 10, '2023-06-20 22:17:10'),
(27, 'complete kaftan ironing', 13, '2023-06-20 22:17:26'),
(28, 'kaftan top washing&ironing', 10, '2023-06-20 22:18:49'),
(29, 'kaftan top washing', 5, '2023-06-20 22:19:03'),
(30, 'kaftan top ironing', 6, '2023-06-20 22:19:16'),
(31, 'slit and kaba washing&ironing ', 18, '2023-06-20 22:20:16'),
(32, 'slit and kaba washing', 9, '2023-06-20 22:20:40'),
(33, 'slit and kaba ironing ', 10, '2023-06-20 22:21:10'),
(34, 'smock washing&ironing', 18, '2023-06-20 22:21:29'),
(35, 'smock washing', 18, '2023-06-20 22:22:13'),
(36, 'smock ironing', 10, '2023-06-20 22:22:31'),
(40, 'singlet washing&ironing', 4, '2023-07-08 09:25:14'),
(41, 'skirt - washing & ironing', 8, '2023-07-08 10:14:22'),
(42, 'skirt - washing ', 5, '2023-07-08 10:14:48'),
(43, 'skirt - ironing', 5, '2023-07-08 10:15:06'),
(44, 'shorts washing & ironing', 7, '2023-07-08 13:38:08'),
(45, 'shorts washing', 6, '2023-07-08 13:38:38'),
(46, 'shorts  ironing', 5, '2023-07-08 13:39:17'),
(47, 't-shirt washing ', 3, '2023-07-08 13:40:55'),
(48, 'skirt - washing & ironing', 6, '2023-07-08 13:42:43'),
(49, 'skirt -  ironing', 3, '2023-07-08 13:43:14'),
(50, 'boxers', 3, '2023-07-08 13:44:05'),
(51, 'complete suit  washinng&ironing', 30, '2023-07-08 13:46:31'),
(52, 'complete suit  washing', 18, '2023-07-08 13:47:32'),
(53, 'complete suit  ironing', 18, '2023-07-08 13:48:02'),
(54, ' complete suit (ladies) washing&ironing', 25, '2023-07-08 13:50:03'),
(55, 'complete suit(ladies) washing', 15, '2023-07-08 13:51:23'),
(56, 'complete suit(ladies) ironing', 18, '2023-07-08 13:56:16'),
(57, 'pillow', 15, '2023-07-08 13:59:45'),
(58, 'pillow case', 3, '2023-07-08 14:00:09'),
(59, 'jalabia washing & ironing', 15, '2023-07-08 14:01:16'),
(60, 'jalaia washing', 8, '2023-07-08 14:02:04'),
(61, 'jalabia  ironing', 8, '2023-07-08 14:03:34'),
(62, 'Agbada(3pieces)', 35, '2023-07-08 14:06:39'),
(63, 'Agbada(3pieces)washing)', 20, '2023-07-08 14:08:11'),
(64, 'Agbada(3pieces)ironing', 20, '2023-07-08 14:09:18'),
(65, 'suit(3pieces)', 35, '2023-07-08 14:11:26'),
(66, 'suit(3pieces)washing', 20, '2023-07-08 14:12:12'),
(67, 'towel small ', 8, '2023-07-08 14:18:27'),
(68, 'towel medium', 10, '2023-07-08 14:39:53'),
(69, 'towel large', 15, '2023-07-08 14:40:07'),
(70, 'duvet small', 20, '2023-07-08 14:40:37'),
(71, 'duvet medium', 25, '2023-07-08 14:40:50'),
(72, 'duvet large', 30, '2023-07-08 14:41:01'),
(73, 'duvet x-large', 35, '2023-07-08 14:41:19'),
(74, 'bedsheet small', 10, '2023-07-08 14:45:37'),
(75, 'bedsheet medium', 12, '2023-07-08 14:46:11'),
(76, 'bedsheet large', 14, '2023-07-08 14:46:45'),
(77, 'cloth(kente,african print)', 30, '2023-07-08 15:47:42'),
(78, 'cloth(ironing)', 20, '2023-07-08 15:48:55'),
(79, 'cloth(washing)3', 30, '2023-07-08 15:49:50'),
(80, 'dress(wash&iron)', 12, '2023-07-08 15:50:41'),
(81, 'dress(washing)', 6, '2023-07-08 15:52:06'),
(82, 'Dress(ironing)', 7, '2023-07-08 15:53:03'),
(83, 'sweaterhoody(washing &  ironing)', 15, '2023-07-08 15:54:39'),
(84, 'sweater/hoody(washing)', 6, '2023-07-08 15:56:08'),
(85, 'sweater/hoody(ironing)', 8, '2023-07-08 16:02:16'),
(86, 'wedding gown(washing&ironing)', 70, '2023-07-08 16:04:08'),
(87, 'wedding gown(washing)', 85, '2023-07-08 16:04:37'),
(88, 'wedding gown(ironing)', 50, '2023-07-08 16:05:07'),
(89, 'socks', 2, '2023-07-08 16:07:01'),
(90, 'handkerchief', 1, '2023-07-08 16:07:55'),
(91, 'Tableclothes(washing&ironing)', 8, '2023-07-08 16:10:59'),
(92, 'Tableclothes(washing)', 5, '2023-07-08 16:11:37'),
(93, 'Tableclothes(ironing)', 5, '2023-07-08 16:12:23'),
(94, 'Blanket(small)', 20, '2023-07-08 16:15:37'),
(95, 'Blanket(medium)', 25, '2023-07-08 16:16:40'),
(96, 'Blanket(large)', 30, '2023-07-08 16:17:30'),
(97, 'Blanket( x-large)', 35, '2023-07-08 16:18:43'),
(98, 'curtains(1&haif yards)', 12, '2023-07-08 16:25:26'),
(99, 'curtains(2&haif yards)', 20, '2023-07-08 16:26:29'),
(100, 'carpet(small)', 70, '2023-07-08 16:28:34'),
(101, 'carpet(medium)', 90, '2023-07-08 16:29:14'),
(102, 'carpet(large)', 180, '2023-07-08 16:29:50'),
(103, 'delivery', 30, '2023-07-10 16:54:16'),
(104, 't-shirt - washing & ironing', 6, '2023-07-10 16:55:34'),
(105, 'tops  washing', 3, '2023-07-11 16:55:47'),
(106, 'T shirts(washing &ironing)', 6, '2023-07-12 11:15:42'),
(107, 'Top Only', 7, '2023-07-14 10:58:33'),
(108, 'tops  washing', 3, '2023-07-14 10:59:04'),
(109, 'Bedwashing(washing)', 6, '2023-07-14 13:08:54'),
(110, 'Top and down', 18, '2023-07-15 13:25:05'),
(111, 'Top and down (washing and ironing)', 18, '2023-07-15 13:26:33'),
(112, 'suit(3pieces)ironing only', 20, '2023-07-18 16:07:13'),
(113, 'Door Mat', 25, '2023-07-24 17:01:04'),
(114, 'Door Mat', 30, '2023-07-24 17:01:19'),
(115, 'T shirts(ironing)', 3, '2023-07-24 18:08:37'),
(116, 'T shirts(washing )', 3, '2023-07-24 18:09:11'),
(117, 'Morning   coat', 15, '2023-07-25 09:53:32'),
(118, 'Dress(B)', 20, '2023-07-25 14:21:59'),
(119, 'Dress(s)', 15, '2023-07-25 14:22:51'),
(120, 'Bra', 5, '2023-07-25 16:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `id` int(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `paymethod` varchar(255) NOT NULL,
  `ExpressAmount` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `total` int(255) NOT NULL,
  `initialPayment` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `servedby` varchar(255) NOT NULL,
  `Dates` varchar(255) NOT NULL,
  `completed` int(255) NOT NULL,
  `completed_date` varchar(255) NOT NULL,
  `Amount_due` int(11) GENERATED ALWAYS AS (`total` - `initialPayment`) VIRTUAL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`id`, `order_id`, `item`, `quantity`, `customer`, `telephone`, `sex`, `paymethod`, `ExpressAmount`, `price`, `total`, `initialPayment`, `order_date`, `servedby`, `Dates`, `completed`, `completed_date`) VALUES
(254, '64abeb0c8ea6a', 'towel medium', 2, 'Emma', '0544242981', 'male', 'Cash', 0, 10, 65, 0, '2023-07-10 11:27:08', 'Florence Agyekum', '2023-07-10', 1, '2023-07-25, 11:58:17'),
(253, '64abddfb4235d', 'Blanket(small)', 1, 'james', '0550719879', 'male', 'MOMO', 0, 20, 20, 20, '2023-07-10 10:31:23', 'Florence Agyekum', '2023-07-10', 1, '2023-07-25, 11:58:02'),
(252, '64abdafe149b4', 'Lacoste washing&ironing', 1, 'Mr Tonny', '0244281005', 'male', 'MOMO', 0, 6, 70, 0, '2023-07-10 10:18:38', 'Florence Agyekum', '2023-07-10', 0, '0'),
(251, '64abdafe149b4', 'Trouser washing&ironing', 1, 'Mr Tonny', '0244281005', 'male', 'MOMO', 0, 10, 70, 0, '2023-07-10 10:18:38', 'Florence Agyekum', '2023-07-10', 0, '0'),
(250, '64abdafe149b4', 'shorts washing & ironing', 2, 'Mr Tonny', '0244281005', 'male', 'MOMO', 0, 7, 70, 0, '2023-07-10 10:18:38', 'Florence Agyekum', '2023-07-10', 0, '0'),
(248, '64abce380023f', 'shirt - washing & ironing', 4, 'senyo', '0244976212', 'male', 'MOMO', 0, 10, 40, 0, '2023-07-10 09:24:08', 'Florence Agyekum', '2023-07-10', 1, '2023-07-24, 17:38:24'),
(249, '64abdafe149b4', 'shirt - washing & ironing', 4, 'Mr Tonny', '0244281005', 'male', 'MOMO', 0, 10, 70, 0, '2023-07-10 10:18:38', 'Florence Agyekum', '2023-07-10', 1, '2023-07-25, 12:15:26'),
(244, '64a9adacaab39', 'shirt - washing & ironing', 5, 'mawuli', '0240499990', 'male', 'MOMO', 0, 10, 50, 0, '2023-07-08 18:40:44', 'Florence Agyekum', '2023-07-08', 1, '2023-07-24, 17:38:19'),
(243, '64a9aabe95486', 'Trouser washing&ironing', 3, 'Mr samuel Baidu', '0243255915', 'male', 'Cash', 0, 10, 30, 0, '2023-07-08 18:28:14', 'Philip Olumide ', '2023-07-08', 0, '0'),
(242, '64a9a5c40ecd2', 'shirt - washing & ironing', 7, 'hans', '0246031926', 'male', 'Cash', 0, 10, 70, 0, '2023-07-08 18:07:00', 'Philip Olumide ', '2023-07-08', 1, '2023-07-24, 17:38:12'),
(241, '64a977ca8f676', 'duvet medium', 1, 'reagan', '0208404800', 'male', 'MOMO', 0, 25, 43, 0, '2023-07-08 14:50:50', 'Florence Agyekum', '2023-07-08', 1, '2023-07-17, 09:29:27'),
(240, '64a977ca8f676', 'pillow case', 2, 'reagan', '0208404800', 'male', 'MOMO', 0, 3, 43, 0, '2023-07-08 14:50:50', 'Florence Agyekum', '2023-07-08', 0, '0'),
(239, '64a977ca8f676', 'bedsheet medium', 1, 'reagan', '0208404800', 'male', 'MOMO', 0, 12, 43, 0, '2023-07-08 14:50:50', 'Florence Agyekum', '2023-07-08', 0, '0'),
(238, '64a97072c96cc', 'towel small ', 1, 'nana yaw', '0558699684', 'male', 'Cash', 0, 8, 66, 40, '2023-07-08 14:19:30', 'Florence Agyekum', '2023-07-08', 1, '2023-07-12, 19:05:31'),
(237, '64a97072c96cc', 'boxer washing', 1, 'nana yaw', '0558699684', 'male', 'Cash', 0, 2, 66, 0, '2023-07-08 14:19:30', 'Florence Agyekum', '2023-07-08', 1, '2023-07-12, 19:05:27'),
(236, '64a97072c96cc', 'boxer washing', 3, 'nana yaw', '0558699684', 'male', 'Cash', 0, 2, 66, 0, '2023-07-08 14:19:30', 'Florence Agyekum', '2023-07-08', 1, '2023-07-12, 19:05:37'),
(235, '64a97072c96cc', 'shorts washing', 4, 'nana yaw', '0558699684', 'male', 'Cash', 0, 6, 66, 0, '2023-07-08 14:19:30', 'Florence Agyekum', '2023-07-08', 1, '2023-07-12, 19:05:42'),
(234, '64a97072c96cc', 't-shirt washing ', 2, 'nana yaw', '0558699684', 'male', 'Cash', 0, 3, 66, 0, '2023-07-08 14:19:30', 'Florence Agyekum', '2023-07-08', 1, '2023-07-12, 19:05:47'),
(233, '64a97072c96cc', 'Lacoste washing', 2, 'nana yaw', '0558699684', 'male', 'Cash', 0, 3, 66, 0, '2023-07-08 14:19:30', 'Florence Agyekum', '2023-07-08', 1, '2023-07-12, 19:05:53'),
(228, '64a933e6d91fc', 'siglet washig&iroig', 6, 'gustav', '0559091523', 'male', 'MOMO', 0, 4, 80, 0, '2023-07-08 10:01:10', 'Florence Agyekum', '2023-07-08', 1, '2023-07-14, 20:25:51'),
(230, '64a933e6d91fc', 'Trouser washing&ironing', 1, 'gustav', '0559091523', 'male', 'MOMO', 0, 10, 80, 0, '2023-07-08 10:01:10', 'Florence Agyekum', '2023-07-08', 1, '2023-07-14, 20:25:56'),
(231, '64a97072c96cc', 'jalaia washing', 1, 'nana yaw', '0558699684', 'male', 'Cash', 0, 8, 66, 0, '2023-07-08 14:19:30', 'Florence Agyekum', '2023-07-08', 1, '2023-07-12, 19:06:02'),
(232, '64a97072c96cc', 'trouser washing', 1, 'nana yaw', '0558699684', 'male', 'Cash', 0, 6, 66, 0, '2023-07-08 14:19:30', 'Florence Agyekum', '2023-07-08', 1, '2023-07-12, 19:06:07'),
(229, '64a933e6d91fc', 'shirt - washing & ironing', 4, 'gustav', '0559091523', 'male', 'MOMO', 0, 10, 80, 0, '2023-07-08 10:01:10', 'Florence Agyekum', '2023-07-08', 1, '2023-07-14, 20:26:00'),
(227, '64a933e6d91fc', 'Lacoste washing&ironing', 1, 'gustav', '0559091523', 'male', 'MOMO', 0, 6, 80, 0, '2023-07-08 10:01:10', 'Florence Agyekum', '2023-07-08', 1, '2023-07-14, 20:26:05'),
(255, '64abeb0c8ea6a', 'pillow case', 7, 'Emma', '0544242981', 'male', 'Cash', 0, 3, 65, 20, '2023-07-10 11:27:08', 'Florence Agyekum', '2023-07-10', 1, '2023-07-25, 11:58:29'),
(256, '64abeb0c8ea6a', 'bedsheet medium', 2, 'Emma', '0544242981', 'male', 'Cash', 0, 12, 65, 20, '2023-07-10 11:27:08', 'Florence Agyekum', '2023-07-10', 1, '2023-07-25, 11:58:35'),
(257, '64abee90dedda', 'towel large', 1, 'Kwesi', '0551439154', 'male', 'Cash', 0, 15, 40, 40, '2023-07-10 11:42:08', 'Florence Agyekum', '2023-07-10', 1, '2023-07-14, 20:26:33'),
(258, '64abee90dedda', 'duvet medium', 1, 'Kwesi', '0551439154', 'male', 'Cash', 0, 25, 40, 40, '2023-07-10 11:42:08', 'Florence Agyekum', '2023-07-10', 1, '2023-07-14, 20:26:25'),
(259, '64ac18d19bb3d', 'shirt - washing & ironing', 1, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 10, 111, 111, '2023-07-10 14:42:25', 'Florence Agyekum', '2023-07-10', 1, '2023-07-25, 11:58:42'),
(260, '64ac18d19bb3d', 'shorts washing & ironing', 3, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 7, 111, 111, '2023-07-10 14:42:25', 'Florence Agyekum', '2023-07-10', 1, '2023-07-25, 11:58:47'),
(261, '64ac18d19bb3d', 't-shirt washing ', 10, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 3, 111, 111, '2023-07-10 14:42:25', 'Florence Agyekum', '2023-07-10', 1, '2023-07-25, 11:59:09'),
(262, '64ac18d19bb3d', 'Trouser washing&ironing', 3, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 10, 111, 111, '2023-07-10 14:42:25', 'Florence Agyekum', '2023-07-10', 1, '2023-07-15, 11:41:55'),
(263, '64ac18d19bb3d', 'tracksuit pant washing&ironing ', 1, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 10, 111, 111, '2023-07-10 14:42:25', 'Florence Agyekum', '2023-07-10', 1, '2023-07-15, 11:41:48'),
(264, '64ac18d19bb3d', 'towel medium', 1, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 10, 111, 111, '2023-07-10 14:42:25', 'Florence Agyekum', '2023-07-10', 1, '2023-07-15, 11:41:41'),
(265, '64ac1bf95377c', 'complete suit  washinng&ironing', 2, 'Rev.opoku', '0244745722', 'male', 'MOMO', 0, 30, 80, 0, '2023-07-10 14:55:53', 'Florence Agyekum', '2023-07-10', 1, '2023-07-14, 20:26:55'),
(266, '64ac1bf95377c', 'complete kaftan washing&ironing', 1, 'Rev.opoku', '0244745722', 'male', 'MOMO', 0, 20, 80, 0, '2023-07-10 14:55:53', 'Florence Agyekum', '2023-07-10', 1, '2023-07-14, 20:26:48'),
(267, '64ac3a6209bcb', 'dress washing&ironing', 1, 'MR. Asare', '0244366137', 'male', 'Cash', 0, 12, 117, 0, '2023-07-10 17:05:38', 'Florence Agyekum', '2023-07-10', 1, '2023-07-12, 19:05:03'),
(268, '64ac3a6209bcb', 'shirt - washing & ironing', 6, 'MR. Asare', '0244366137', 'male', 'Cash', 0, 10, 117, 0, '2023-07-10 17:05:38', 'Florence Agyekum', '2023-07-10', 1, '2023-07-12, 19:04:57'),
(269, '64ac3a6209bcb', 'bedsheet medium', 2, 'MR. Asare', '0244366137', 'male', 'Cash', 0, 12, 117, 0, '2023-07-10 17:05:38', 'Florence Agyekum', '2023-07-10', 1, '2023-07-12, 19:04:51'),
(270, '64ac3a6209bcb', 'pillow case', 7, 'MR. Asare', '0244366137', 'male', 'Cash', 0, 3, 117, 0, '2023-07-10 17:05:38', 'Florence Agyekum', '2023-07-10', 1, '2023-07-12, 19:05:09'),
(271, '64ac4b6fa8ebd', 'dress washing&ironing', 1, 'Baaba', '0544205586', 'female', 'MOMO', 0, 12, 30, 30, '2023-07-10 18:18:23', 'Florence Agyekum', '2023-07-10', 1, '2023-07-15, 11:41:13'),
(272, '64ac4b6fa8ebd', 'suit jacket (Ladies) washing&ironing', 1, 'Baaba', '0544205586', 'female', 'MOMO', 0, 18, 30, 30, '2023-07-10 18:18:23', 'Florence Agyekum', '2023-07-10', 1, '2023-07-15, 11:41:25'),
(273, '64ac57b6b0cb6', 'complete kaftan washing&ironing', 3, 'Gladstone', '0243211439', 'male', 'MOMO', 0, 20, 70, 0, '2023-07-10 19:10:46', 'Florence Agyekum', '2023-07-10', 1, '2023-07-25, 11:59:23'),
(274, '64ac57b6b0cb6', 'kaftan top washing&ironing', 1, 'Gladstone', '0243211439', 'male', 'MOMO', 0, 10, 70, 0, '2023-07-10 19:10:46', 'Florence Agyekum', '2023-07-10', 1, '2023-07-25, 11:59:28'),
(275, '64ac58c59a6be', 'complete kaftan washing&ironing', 1, 'James  Musa', '0208404800', 'male', 'Cash', 0, 20, 20, 20, '2023-07-10 19:15:17', 'Florence Agyekum', '2023-07-10', 1, '2023-07-25, 11:59:35'),
(276, '64ad09bd87cde', 'shirt - washing & ironing', 3, 'Mr. Edward', '0264360004', 'male', 'MOMO', 0, 10, 30, 0, '2023-07-11 07:50:21', 'Florence Agyekum', '2023-07-11', 1, '2023-07-15, 11:41:35'),
(277, '64ad0aac8686a', 'shirt - washing & ironing', 4, 'senyo', '0244976212', 'male', 'MOMO', 0, 10, 40, 0, '2023-07-11 07:54:20', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:01:18'),
(278, '64ad14e395319', 'complete kaftan ironing', 5, 'Nana', '0244858388', 'male', 'MOMO', 0, 13, 77, 71, '2023-07-11 08:37:55', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:01:27'),
(279, '64ad14e395319', 'trouser washing', 1, 'Nana', '0244858388', 'male', 'MOMO', 0, 6, 77, 71, '2023-07-11 08:37:55', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:14:12'),
(280, '64ad14e395319', 'shirt ironing', 1, 'Nana', '0244858388', 'male', 'MOMO', 0, 6, 77, 71, '2023-07-11 08:37:55', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:14:54'),
(281, '64ad2eeac1bda', 'shirt - washing & ironing', 3, 'Mad Angela', '0246599263', 'female', 'MOMO', 0, 10, 121, 0, '2023-07-11 10:28:58', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:15:03'),
(282, '64ad2eeac1bda', 'dress washing&ironing', 3, 'Mad Angela', '0246599263', 'female', 'MOMO', 0, 12, 121, 0, '2023-07-11 10:28:58', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:15:08'),
(283, '64ad2eeac1bda', 'Trouser washing&ironing', 2, 'Mad Angela', '0246599263', 'female', 'MOMO', 0, 10, 121, 0, '2023-07-11 10:28:58', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:15:14'),
(284, '64ad2eeac1bda', ' complete suit (ladies) washing&ironing', 1, 'Mad Angela', '0246599263', 'female', 'MOMO', 0, 25, 121, 0, '2023-07-11 10:28:58', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:15:20'),
(285, '64ad2eeac1bda', 'shirt - washing & ironing', 1, 'Mad Angela', '0246599263', 'female', 'MOMO', 0, 10, 121, 0, '2023-07-11 10:28:58', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:15:31'),
(286, '64ad8a796e28b', 'tops  washing', 10, 'Jake', '0244786168', 'female', 'MOMO', 0, 3, 102, 0, '2023-07-11 16:59:37', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:15:40'),
(287, '64ad8a796e28b', 'dress(washing)', 3, 'Jake', '0244786168', 'female', 'MOMO', 0, 6, 102, 0, '2023-07-11 16:59:37', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:15:44'),
(288, '64ad8a796e28b', 'towel medium', 1, 'Jake', '0244786168', 'female', 'MOMO', 0, 10, 102, 0, '2023-07-11 16:59:37', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:15:52'),
(289, '64ad8a796e28b', 'slit and kaba washing', 1, 'Jake', '0244786168', 'female', 'MOMO', 0, 9, 102, 0, '2023-07-11 16:59:37', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:15:58'),
(290, '64ad8a796e28b', 'skirt - ironing', 1, 'Jake', '0244786168', 'female', 'MOMO', 0, 5, 102, 0, '2023-07-11 16:59:37', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:16:02'),
(291, '64ad8a796e28b', 'trouser washing', 5, 'Jake', '0244786168', 'female', 'MOMO', 0, 6, 102, 0, '2023-07-11 16:59:37', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:16:08'),
(292, '64adad5feb26d', 'complete suit  washinng&ironing', 2, 'Addison', '0244833485', 'male', 'MOMO', 0, 30, 60, 50, '2023-07-11 19:28:31', 'Florence Agyekum', '2023-07-11', 1, '2023-07-25, 12:16:13'),
(293, '64ae663ae35cf', 'suit jacket (Men) washing&ironing', 1, 'Lawrence', '0249113513', 'male', 'Cash', 0, 20, 20, 0, '2023-07-12 08:37:14', 'Florence Agyekum', '2023-07-12', 1, '2023-07-25, 12:16:19'),
(294, '64ae7db70eca4', 'complete kaftan washing&ironing', 1, 'Bagur', '0244372395', 'male', 'MOMO', 0, 20, 20, 0, '2023-07-12 10:17:27', 'Florence Agyekum', '2023-07-12', 1, '2023-07-25, 12:16:24'),
(295, '64ae87e012038', 'Trouser washing&ironing', 1, 'Mr  Edward', '0264360004', 'male', 'MOMO', 0, 10, 16, 0, '2023-07-12 11:00:48', 'Florence Agyekum', '2023-07-12', 1, '2023-07-25, 12:16:30'),
(296, '64ae87e012038', 'shirt ironing', 1, 'Mr  Edward', '0264360004', 'male', 'MOMO', 0, 6, 16, 0, '2023-07-12 11:00:48', 'Florence Agyekum', '2023-07-12', 1, '2023-07-25, 12:16:35'),
(297, '64ae88cc87e82', 'cloth(kente,african print)', 1, 'One   Million', '0558699684', 'male', 'Cash', 0, 30, 30, 0, '2023-07-12 11:04:44', 'Florence Agyekum', '2023-07-12', 1, '2023-07-25, 12:16:41'),
(298, '64ae89d8e1c24', 'bedsheet small', 1, 'Asenso', '0248370813', 'male', 'Cash', 0, 10, 33, 0, '2023-07-12 11:09:12', 'Florence Agyekum', '2023-07-12', 0, '0'),
(299, '64ae89d8e1c24', 'pillow case', 2, 'Asenso', '0248370813', 'male', 'Cash', 0, 3, 33, 0, '2023-07-12 11:09:12', 'Florence Agyekum', '2023-07-12', 0, '0'),
(300, '64ae89d8e1c24', 'pillow case', 2, 'Asenso', '0248370813', 'male', 'Cash', 0, 3, 33, 0, '2023-07-12 11:09:12', 'Florence Agyekum', '2023-07-12', 0, '0'),
(301, '64ae89d8e1c24', 'shorts washing & ironing', 1, 'Asenso', '0248370813', 'male', 'Cash', 0, 7, 33, 0, '2023-07-12 11:09:12', 'Florence Agyekum', '2023-07-12', 0, '0'),
(302, '64ae89d8e1c24', 'shirt washing', 1, 'Asenso', '0248370813', 'male', 'Cash', 0, 4, 33, 0, '2023-07-12 11:09:12', 'Florence Agyekum', '2023-07-12', 0, '0'),
(303, '64ae8d5f21351', 'duvet small', 2, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 20, 132, 0, '2023-07-12 11:24:15', 'Florence Agyekum', '2023-07-12', 1, '2023-07-25, 12:16:48'),
(304, '64ae8d5f21351', 'Blanket(small)', 2, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 20, 132, 0, '2023-07-12 11:24:15', 'Florence Agyekum', '2023-07-12', 1, '2023-07-25, 12:16:54'),
(305, '64ae8d5f21351', 'bedsheet small', 2, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 10, 132, 0, '2023-07-12 11:24:15', 'Florence Agyekum', '2023-07-12', 1, '2023-07-25, 12:17:05'),
(306, '64ae8d5f21351', 'bedsheet small', 2, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 10, 132, 0, '2023-07-12 11:24:15', 'Florence Agyekum', '2023-07-12', 0, '0'),
(307, '64ae8d5f21351', 'curtains(1&haif yards)', 1, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 12, 132, 0, '2023-07-12 11:24:15', 'Florence Agyekum', '2023-07-12', 0, '0'),
(308, '64ae8f0da00e0', 'duvet small', 2, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 20, 131, 0, '2023-07-12 11:31:25', 'Florence Agyekum', '2023-07-12', 0, '0'),
(309, '64ae8f0da00e0', 'Blanket(small)', 2, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 20, 131, 0, '2023-07-12 11:31:25', 'Florence Agyekum', '2023-07-12', 0, '0'),
(310, '64ae8f0da00e0', 'bedsheet small', 2, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 10, 131, 0, '2023-07-12 11:31:25', 'Florence Agyekum', '2023-07-12', 0, '0'),
(311, '64ae8f0da00e0', 'curtains(1&haif yards)', 1, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 12, 131, 0, '2023-07-12 11:31:25', 'Florence Agyekum', '2023-07-12', 0, '0'),
(312, '64ae8f0da00e0', 'boxer washing', 2, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 2, 131, 0, '2023-07-12 11:31:25', 'Florence Agyekum', '2023-07-12', 0, '0'),
(313, '64ae8f0da00e0', 'shorts washing', 1, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 6, 131, 0, '2023-07-12 11:31:25', 'Florence Agyekum', '2023-07-12', 0, '0'),
(314, '64ae8f0da00e0', 'Lacoste washing', 1, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 3, 131, 0, '2023-07-12 11:31:25', 'Florence Agyekum', '2023-07-12', 0, '0'),
(315, '64ae8f0da00e0', 'Lacoste washing', 1, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 3, 131, 0, '2023-07-12 11:31:25', 'Florence Agyekum', '2023-07-12', 0, '0'),
(316, '64ae8f0da00e0', 'pillow case', 1, 'Mr Bernard', '0244804505', 'male', 'MOMO', 0, 3, 131, 0, '2023-07-12 11:31:25', 'Florence Agyekum', '2023-07-12', 0, '0'),
(317, '64ae923b97f2a', 'complete kaftan washing&ironing', 1, 'Debrah', '0242922277', 'male', 'Cash', 0, 20, 20, 10, '2023-07-12 11:44:59', 'Florence Agyekum', '2023-07-12', 0, '0'),
(318, '64ae9364c86a1', 'complete kaftan washing&ironing', 2, 'Foster', '0244259861', 'male', 'MOMO', 0, 20, 50, 10, '2023-07-12 11:49:56', 'Florence Agyekum', '2023-07-12', 0, '0'),
(319, '64ae9364c86a1', 'shirt - washing & ironing', 1, 'Foster', '0244259861', 'male', 'MOMO', 0, 10, 50, 10, '2023-07-12 11:49:56', 'Florence Agyekum', '2023-07-12', 0, '0'),
(320, '64aedcb492db1', 'complete kaftan washing&ironing', 2, 'J B', '0240142330', 'male', 'MOMO', 0, 20, 40, 40, '2023-07-12 17:02:44', 'Florence Agyekum', '2023-07-12', 0, '0'),
(321, '64afb75fcad28', 'shirt - washing & ironing', 12, 'Mr  Stephe ', '0243528855', 'male', 'MOMO', 0, 10, 140, 0, '2023-07-13 08:35:43', 'Florence Agyekum', '2023-07-13', 0, '0'),
(322, '64afb75fcad28', 'complete kaftan washing&ironing', 1, 'Mr  Stephe ', '0243528855', 'male', 'MOMO', 0, 20, 140, 0, '2023-07-13 08:35:43', 'Florence Agyekum', '2023-07-13', 0, '0'),
(323, '64afec785ea64', 'sweaterhoody(washing &  ironing)', 1, 'jones', '0249577665', 'male', 'MOMO', 0, 15, 28, 28, '2023-07-13 12:22:16', 'Florence Agyekum', '2023-07-13', 0, '0'),
(324, '64afec785ea64', 'bedsheet small', 1, 'jones', '0249577665', 'male', 'MOMO', 0, 10, 28, 28, '2023-07-13 12:22:16', 'Florence Agyekum', '2023-07-13', 0, '0'),
(325, '64afec785ea64', 'pillow case', 1, 'jones', '0249577665', 'male', 'MOMO', 0, 3, 28, 28, '2023-07-13 12:22:16', 'Florence Agyekum', '2023-07-13', 0, '0'),
(326, '64b010cab0c8b', 'complete kaftan washing&ironing', 5, 'Alhaji  Mohammed', '0246461204', 'male', 'MOMO', 0, 20, 161, 75, '2023-07-13 14:57:14', 'Florence Agyekum', '2023-07-13', 0, '0'),
(327, '64b010cab0c8b', 'jalabia washing & ironing', 1, 'Alhaji  Mohammed', '0246461204', 'male', 'MOMO', 0, 15, 161, 75, '2023-07-13 14:57:14', 'Florence Agyekum', '2023-07-13', 0, '0'),
(328, '64b010cab0c8b', 'shirt - washing & ironing', 2, 'Alhaji  Mohammed', '0246461204', 'male', 'MOMO', 0, 10, 161, 75, '2023-07-13 14:57:14', 'Florence Agyekum', '2023-07-13', 0, '0'),
(329, '64b010cab0c8b', 'Trouser washing&ironing', 1, 'Alhaji  Mohammed', '0246461204', 'male', 'MOMO', 0, 10, 161, 75, '2023-07-13 14:57:14', 'Florence Agyekum', '2023-07-13', 0, '0'),
(330, '64b010cab0c8b', 'Trouser washing&ironing', 1, 'Alhaji  Mohammed', '0246461204', 'male', 'MOMO', 0, 10, 161, 75, '2023-07-13 14:57:14', 'Florence Agyekum', '2023-07-13', 0, '0'),
(331, '64b010cab0c8b', 'Lacoste washing&ironing', 1, 'Alhaji  Mohammed', '0246461204', 'male', 'MOMO', 0, 6, 161, 75, '2023-07-13 14:57:14', 'Florence Agyekum', '2023-07-13', 0, '0'),
(332, '64b02634d4336', 'shirt - washing & ironing', 6, 'gorge', '0556558797', 'male', 'MOMO', 0, 10, 177, 0, '2023-07-13 16:28:36', 'Florence Agyekum', '2023-07-13', 0, '0'),
(333, '64b02634d4336', 'shorts washing & ironing', 3, 'gorge', '0556558797', 'male', 'MOMO', 0, 7, 177, 0, '2023-07-13 16:28:36', 'Florence Agyekum', '2023-07-13', 0, '0'),
(334, '64b02634d4336', 'Lacoste washing&ironing', 6, 'gorge', '0556558797', 'male', 'MOMO', 0, 6, 177, 0, '2023-07-13 16:28:36', 'Florence Agyekum', '2023-07-13', 0, '0'),
(335, '64b02634d4336', 'Trouser washing&ironing', 6, 'gorge', '0556558797', 'male', 'MOMO', 0, 10, 177, 0, '2023-07-13 16:28:36', 'Florence Agyekum', '2023-07-13', 0, '0'),
(336, '64b056de2da3b', 'Trouser washing&ironing', 1, 'Mr Asare', '0244366137', 'male', 'MOMO', 0, 10, 62, 0, '2023-07-13 19:56:14', 'Florence Agyekum', '2023-07-13', 0, '0'),
(337, '64b056de2da3b', 'shirt - washing & ironing', 2, 'Mr Asare', '0244366137', 'male', 'MOMO', 0, 10, 62, 0, '2023-07-13 19:56:14', 'Florence Agyekum', '2023-07-13', 0, '0'),
(338, '64b056de2da3b', 'bedsheet small', 2, 'Mr Asare', '0244366137', 'male', 'MOMO', 0, 10, 62, 0, '2023-07-13 19:56:14', 'Florence Agyekum', '2023-07-13', 0, '0'),
(339, '64b056de2da3b', 'Lacoste washing&ironing', 1, 'Mr Asare', '0244366137', 'male', 'MOMO', 0, 6, 62, 0, '2023-07-13 19:56:14', 'Florence Agyekum', '2023-07-13', 0, '0'),
(340, '64b056de2da3b', 'Lacoste washing&ironing', 1, 'Mr Asare', '0244366137', 'male', 'MOMO', 0, 6, 62, 0, '2023-07-13 19:56:14', 'Florence Agyekum', '2023-07-13', 0, '0'),
(341, '64b057eaed0db', 'shirt - washing & ironing', 2, 'mawuli', '0240499990', 'male', 'Cash', 100, 10, 40, 0, '2023-07-13 20:00:42', 'Florence Agyekum', '2023-07-13', 0, '0'),
(342, '64b11ce668517', 'shirt - washing & ironing', 1, 'Mohammed', '0244360846', 'male', 'Cash', 0, 10, 80, 0, '2023-07-14 10:01:10', 'Florence Agyekum', '2023-07-14', 0, '0'),
(343, '64b11ce668517', 'tracksuit pant washing&ironing ', 1, 'Mohammed', '0244360846', 'male', 'Cash', 0, 10, 80, 0, '2023-07-14 10:01:10', 'Florence Agyekum', '2023-07-14', 0, '0'),
(344, '64b11ce668517', 'Lacoste washing&ironing', 2, 'Mohammed', '0244360846', 'male', 'Cash', 0, 6, 80, 0, '2023-07-14 10:01:10', 'Florence Agyekum', '2023-07-14', 0, '0'),
(345, '64b11ce668517', 'T shirts(washing &ironing)', 4, 'Mohammed', '0244360846', 'male', 'Cash', 0, 6, 80, 0, '2023-07-14 10:01:10', 'Florence Agyekum', '2023-07-14', 0, '0'),
(346, '64b11ce668517', 'T shirts(washing &ironing)', 4, 'Mohammed', '0244360846', 'male', 'Cash', 0, 6, 80, 0, '2023-07-14 10:01:10', 'Florence Agyekum', '2023-07-14', 0, '0'),
(347, '64b11ed362e3e', 'duvet medium', 1, 'Daniel', '0243748840', 'male', 'MOMO', 0, 25, 63, 0, '2023-07-14 10:09:23', 'Florence Agyekum', '2023-07-14', 0, '0'),
(348, '64b11ed362e3e', 'Blanket(small)', 1, 'Daniel', '0243748840', 'male', 'MOMO', 0, 20, 63, 0, '2023-07-14 10:09:23', 'Florence Agyekum', '2023-07-14', 0, '0'),
(349, '64b11ed362e3e', 'bedsheet medium', 1, 'Daniel', '0243748840', 'male', 'MOMO', 0, 12, 63, 0, '2023-07-14 10:09:23', 'Florence Agyekum', '2023-07-14', 0, '0'),
(350, '64b11ed362e3e', 'T shirts(washing &ironing)', 1, 'Daniel', '0243748840', 'male', 'MOMO', 0, 6, 63, 0, '2023-07-14 10:09:23', 'Florence Agyekum', '2023-07-14', 0, '0'),
(351, '64b12623c2583', 'shirt - washing & ironing', 3, 'Mr Senyo', '0244976212', 'male', 'MOMO', 0, 10, 30, 0, '2023-07-14 10:40:35', 'Florence Agyekum', '2023-07-14', 0, '0'),
(352, '64b1279645193', 'complete kaftan washing&ironing', 1, 'sheimage', '0248157274', 'female', 'MOMO', 0, 20, 20, 0, '2023-07-14 10:46:46', 'Florence Agyekum', '2023-07-14', 0, '0'),
(353, '64b128da57c99', 'shorts washing & ironing', 1, 'derrick', '0205877197', 'male', 'MOMO', 0, 7, 7, 0, '2023-07-14 10:52:10', 'Florence Agyekum', '2023-07-14', 0, '0'),
(354, '64b12b05c4dcd', 'skirt - washing & ironing', 1, 'Deborah', '0593064423', 'female', 'MOMO', 0, 8, 29, 0, '2023-07-14 11:01:25', 'Florence Agyekum', '2023-07-14', 0, '0'),
(355, '64b12b05c4dcd', 'suit jacket (Ladies) washing&ironing', 1, 'Deborah', '0593064423', 'female', 'MOMO', 0, 18, 29, 0, '2023-07-14 11:01:25', 'Florence Agyekum', '2023-07-14', 0, '0'),
(356, '64b12b05c4dcd', 'tops  washing', 1, 'Deborah', '0593064423', 'female', 'MOMO', 0, 3, 29, 0, '2023-07-14 11:01:25', 'Florence Agyekum', '2023-07-14', 0, '0'),
(357, '64b12e8183a36', 'slit and kaba washing&ironing ', 2, 'Maa', '0593064423', 'female', 'Cash', 0, 18, 36, 0, '2023-07-14 11:16:17', 'Florence Agyekum', '2023-07-14', 0, '0'),
(358, '64b13e6a173a9', 'complete suit  washinng&ironing', 2, 'oko', '0246243137', 'male', 'MOMO', 0, 30, 95, 0, '2023-07-14 12:24:10', 'Florence Agyekum', '2023-07-14', 0, '0'),
(359, '64b13e6a173a9', 'suit(3pieces)', 1, 'oko', '0246243137', 'male', 'MOMO', 0, 35, 95, 0, '2023-07-14 12:24:10', 'Florence Agyekum', '2023-07-14', 0, '0'),
(360, '64b1439f5e8c8', 'shirt - washing & ironing', 1, 'Mr   Razak', '0206300292', 'male', 'Cash', 0, 10, 76, 0, '2023-07-14 12:46:23', 'Florence Agyekum', '2023-07-14', 0, '0'),
(361, '64b1439f5e8c8', 'boxer washing&ironing', 3, 'Mr   Razak', '0206300292', 'male', 'Cash', 0, 4, 76, 0, '2023-07-14 12:46:23', 'Florence Agyekum', '2023-07-14', 0, '0'),
(362, '64b1439f5e8c8', 'Trouser washing&ironing', 1, 'Mr   Razak', '0206300292', 'male', 'Cash', 0, 10, 76, 0, '2023-07-14 12:46:23', 'Florence Agyekum', '2023-07-14', 0, '0'),
(363, '64b1439f5e8c8', 'singlet washing&ironing', 2, 'Mr   Razak', '0206300292', 'male', 'Cash', 0, 4, 76, 0, '2023-07-14 12:46:23', 'Florence Agyekum', '2023-07-14', 0, '0'),
(364, '64b1439f5e8c8', 'pillow case', 2, 'Mr   Razak', '0206300292', 'male', 'Cash', 0, 3, 76, 0, '2023-07-14 12:46:23', 'Florence Agyekum', '2023-07-14', 0, '0'),
(365, '64b1439f5e8c8', 'bedsheet small', 3, 'Mr   Razak', '0206300292', 'male', 'Cash', 0, 10, 76, 0, '2023-07-14 12:46:23', 'Florence Agyekum', '2023-07-14', 0, '0'),
(366, '64b14a6365dab', 'Bedwashing(washing)', 3, 'Wilfred', '0542932974', 'male', 'MOMO', 0, 6, 64, 30, '2023-07-14 13:15:15', 'Florence Agyekum', '2023-07-14', 0, '0'),
(367, '64b14a6365dab', 'pillow case', 1, 'Wilfred', '0542932974', 'male', 'MOMO', 0, 3, 64, 30, '2023-07-14 13:15:15', 'Florence Agyekum', '2023-07-14', 0, '0'),
(368, '64b14a6365dab', 'shorts washing', 1, 'Wilfred', '0542932974', 'male', 'MOMO', 0, 6, 64, 30, '2023-07-14 13:15:15', 'Florence Agyekum', '2023-07-14', 0, '0'),
(369, '64b14a6365dab', 'shirt washing', 1, 'Wilfred', '0542932974', 'male', 'MOMO', 0, 4, 64, 30, '2023-07-14 13:15:15', 'Florence Agyekum', '2023-07-14', 0, '0'),
(370, '64b14a6365dab', 'T shirts(washing &ironing)', 3, 'Wilfred', '0542932974', 'male', 'MOMO', 0, 6, 64, 30, '2023-07-14 13:15:15', 'Florence Agyekum', '2023-07-14', 0, '0'),
(371, '64b14a6365dab', 'singlet washing&ironing', 1, 'Wilfred', '0542932974', 'male', 'MOMO', 0, 4, 64, 30, '2023-07-14 13:15:15', 'Florence Agyekum', '2023-07-14', 0, '0'),
(372, '64b14a6365dab', 'tracksuit pant washing', 1, 'Wilfred', '0542932974', 'male', 'MOMO', 0, 5, 64, 30, '2023-07-14 13:15:15', 'Florence Agyekum', '2023-07-14', 0, '0'),
(373, '64b14a6365dab', 'sweater/hoody(washing)', 1, 'Wilfred', '0542932974', 'male', 'MOMO', 0, 6, 64, 30, '2023-07-14 13:15:15', 'Florence Agyekum', '2023-07-14', 0, '0'),
(374, '64b158ea8c4af', 'slit and kaba washing&ironing ', 1, 'Mr Foster', '0244259861', 'male', 'MOMO', 0, 18, 57, 0, '2023-07-14 14:17:14', 'Florence Agyekum', '2023-07-14', 0, '0'),
(375, '64b158ea8c4af', 'duvet medium', 1, 'Mr Foster', '0244259861', 'male', 'MOMO', 0, 25, 57, 0, '2023-07-14 14:17:14', 'Florence Agyekum', '2023-07-14', 0, '0'),
(376, '64b158ea8c4af', 'bedsheet large', 1, 'Mr Foster', '0244259861', 'male', 'MOMO', 0, 14, 57, 0, '2023-07-14 14:17:14', 'Florence Agyekum', '2023-07-14', 0, '0'),
(377, '64b15b4d8a5e5', 'complete kaftan washing&ironing', 2, 'sandra Addo', '0559091523', 'female', 'MOMO', 0, 20, 110, 0, '2023-07-14 14:27:25', 'Florence Agyekum', '2023-07-14', 0, '0'),
(378, '64b15b4d8a5e5', 'dress washing&ironing', 3, 'sandra Addo', '0559091523', 'female', 'MOMO', 0, 12, 110, 0, '2023-07-14 14:27:25', 'Florence Agyekum', '2023-07-14', 0, '0'),
(379, '64b15b4d8a5e5', 'shirt - washing & ironing', 1, 'sandra Addo', '0559091523', 'female', 'MOMO', 0, 10, 110, 0, '2023-07-14 14:27:25', 'Florence Agyekum', '2023-07-14', 0, '0'),
(380, '64b15b4d8a5e5', 'bedsheet medium', 1, 'sandra Addo', '0559091523', 'female', 'MOMO', 0, 12, 110, 0, '2023-07-14 14:27:25', 'Florence Agyekum', '2023-07-14', 0, '0'),
(381, '64b15b4d8a5e5', 'dress washing&ironing', 1, 'sandra Addo', '0559091523', 'female', 'MOMO', 0, 12, 110, 0, '2023-07-14 14:27:25', 'Florence Agyekum', '2023-07-14', 0, '0'),
(382, '64b17e7c66a94', 'complete suit  ironing', 1, 'Mr Fynn', '0243556200', 'male', 'Cash', 0, 18, 36, 18, '2023-07-14 16:57:32', 'Florence Agyekum', '2023-07-14', 0, '0'),
(383, '64b17e7c66a94', 'complete suit  ironing', 1, 'Fynn', '0243556200', 'male', 'Cash', 0, 18, 36, 18, '2023-07-14 16:57:32', 'Florence Agyekum', '2023-07-14', 0, '0'),
(384, '64b181000fa4d', 'duvet small', 1, 'Patrick', '0554605519', 'male', 'Cash', 0, 20, 20, 0, '2023-07-14 17:08:16', 'Florence Agyekum', '2023-07-14', 0, '0'),
(385, '64b1883a12a63', 'curtains(1&haif yards)', 2, 'Ejiro', '0548871681', 'female', 'Cash', 0, 12, 98, 50, '2023-07-14 17:39:06', 'Florence Agyekum', '2023-07-14', 0, '0'),
(386, '64b1883a12a63', 'pillow case', 8, 'Ejiro', '0548871681', 'female', 'Cash', 0, 3, 98, 50, '2023-07-14 17:39:06', 'Florence Agyekum', '2023-07-14', 0, '0'),
(387, '64b1883a12a63', 'bedsheet medium', 3, 'Ejiro', '0548871681', 'female', 'Cash', 0, 12, 98, 50, '2023-07-14 17:39:06', 'Florence Agyekum', '2023-07-14', 0, '0'),
(388, '64b1883a12a63', 'bedsheet large', 1, 'Ejiro', '0548871681', 'female', 'Cash', 0, 14, 98, 50, '2023-07-14 17:39:06', 'Florence Agyekum', '2023-07-14', 0, '0'),
(389, '64b195e4ce11e', 'shirt - washing & ironing', 7, 'Dr  Abroakwah', '0504558585', 'male', 'MOMO', 0, 10, 325, 50, '2023-07-14 18:37:24', 'Florence Agyekum', '2023-07-14', 0, '0'),
(390, '64b195e4ce11e', 'dress washing&ironing', 3, 'Dr  Abroakwah', '0504558585', 'male', 'MOMO', 0, 12, 325, 50, '2023-07-14 18:37:24', 'Florence Agyekum', '2023-07-14', 0, '0'),
(391, '64b195e4ce11e', 'slit and kaba washing&ironing ', 1, 'Dr  Abroakwah', '0504558585', 'male', 'MOMO', 0, 18, 325, 50, '2023-07-14 18:37:24', 'Florence Agyekum', '2023-07-14', 0, '0'),
(392, '64b195e4ce11e', 'T shirts(washing &ironing)', 2, 'Dr  Abroakwah', '0504558585', 'male', 'MOMO', 0, 6, 325, 50, '2023-07-14 18:37:24', 'Florence Agyekum', '2023-07-14', 0, '0'),
(393, '64b195e4ce11e', 'Trouser washing&ironing', 6, 'Dr  Abroakwah', '0504558585', 'male', 'MOMO', 0, 10, 325, 50, '2023-07-14 18:37:24', 'Florence Agyekum', '2023-07-14', 0, '0'),
(394, '64b195e4ce11e', 'Lacoste washing&ironing', 1, 'Dr  Abroakwah', '0504558585', 'male', 'MOMO', 0, 6, 325, 50, '2023-07-14 18:37:24', 'Florence Agyekum', '2023-07-14', 0, '0'),
(395, '64b195e4ce11e', 'Lacoste washing&ironing', 1, 'Dr  Abroakwah', '0504558585', 'male', 'MOMO', 0, 6, 325, 50, '2023-07-14 18:37:24', 'Florence Agyekum', '2023-07-14', 0, '0'),
(396, '64b195e4ce11e', 'pillow case', 15, 'Dr  Abroakwah', '0504558585', 'male', 'MOMO', 0, 3, 325, 50, '2023-07-14 18:37:24', 'Florence Agyekum', '2023-07-14', 0, '0'),
(397, '64b195e4ce11e', 'bedsheet medium', 6, 'Dr  Abroakwah', '0504558585', 'male', 'MOMO', 0, 12, 325, 50, '2023-07-14 18:37:24', 'Florence Agyekum', '2023-07-14', 0, '0'),
(398, '64b2842a9195b', 'dress washing&ironing', 1, 'Robert', '0243115452', 'male', 'MOMO', 0, 12, 52, 52, '2023-07-15 11:34:02', 'Florence Agyekum', '2023-07-15', 0, '0'),
(399, '64b2842a9195b', 'complete kaftan washing&ironing', 1, 'Robert', '0243115452', 'male', 'MOMO', 0, 20, 52, 52, '2023-07-15 11:34:02', 'Florence Agyekum', '2023-07-15', 0, '0'),
(400, '64b2842a9195b', 'shirt - washing & ironing', 2, 'Robert', '0243115452', 'male', 'MOMO', 0, 10, 52, 52, '2023-07-15 11:34:02', 'Florence Agyekum', '2023-07-15', 0, '0'),
(401, '64b2a03fc08c1', 'Top and down (washing and ironing)', 1, 'Jate', '0207279090', 'female', 'Cash', 0, 18, 48, 0, '2023-07-15 13:33:51', 'Florence Agyekum', '2023-07-15', 0, '0'),
(402, '64b2a03fc08c1', 'towel medium', 3, 'Jate', '0207279090', 'female', 'Cash', 0, 10, 48, 0, '2023-07-15 13:33:51', 'Florence Agyekum', '2023-07-15', 0, '0'),
(403, '64b2a5814ddc6', 'curtains(1&haif yards)', 3, 'Favor', '0544804172', 'female', 'MOMO', 0, 12, 48, 0, '2023-07-15 13:56:17', 'Florence Agyekum', '2023-07-15', 0, '0'),
(404, '64b2a5814ddc6', 'bedsheet medium', 1, 'Favor', '0544804172', 'female', 'MOMO', 0, 12, 48, 0, '2023-07-15 13:56:17', 'Florence Agyekum', '2023-07-15', 0, '0'),
(405, '64b2d2e9604cf', 'towel large', 3, 'Becky', '0553765609', 'male', 'MOMO', 0, 15, 264, 100, '2023-07-15 17:10:01', 'Florence Agyekum', '2023-07-15', 0, '0'),
(406, '64b2d2e9604cf', 'jalabia washing & ironing', 1, 'Becky', '0553765609', 'male', 'MOMO', 0, 15, 264, 100, '2023-07-15 17:10:01', 'Florence Agyekum', '2023-07-15', 0, '0'),
(407, '64b2d2e9604cf', 'smock washing&ironing', 1, 'Becky', '0553765609', 'male', 'MOMO', 0, 18, 264, 100, '2023-07-15 17:10:01', 'Florence Agyekum', '2023-07-15', 0, '0'),
(408, '64b2d2e9604cf', 'singlet washing&ironing', 5, 'Becky', '0553765609', 'male', 'MOMO', 0, 4, 264, 100, '2023-07-15 17:10:01', 'Florence Agyekum', '2023-07-15', 0, '0'),
(409, '64b2d2e9604cf', 'Lacoste washing&ironing', 11, 'Becky', '0553765609', 'male', 'MOMO', 0, 6, 264, 100, '2023-07-15 17:10:01', 'Florence Agyekum', '2023-07-15', 0, '0'),
(410, '64b2d2e9604cf', 'T shirts(washing &ironing)', 6, 'Becky', '0553765609', 'male', 'MOMO', 0, 6, 264, 100, '2023-07-15 17:10:01', 'Florence Agyekum', '2023-07-15', 0, '0'),
(411, '64b2d2e9604cf', 'shirt - washing & ironing', 3, 'Becky', '0553765609', 'male', 'MOMO', 0, 10, 264, 100, '2023-07-15 17:10:01', 'Florence Agyekum', '2023-07-15', 0, '0'),
(412, '64b2d2e9604cf', 'Trouser washing&ironing', 2, 'Becky', '0553765609', 'male', 'MOMO', 0, 10, 264, 100, '2023-07-15 17:10:01', 'Florence Agyekum', '2023-07-15', 0, '0'),
(413, '64b2d2e9604cf', 'shorts washing & ironing', 2, 'Becky', '0553765609', 'male', 'MOMO', 0, 7, 264, 100, '2023-07-15 17:10:01', 'Florence Agyekum', '2023-07-15', 0, '0'),
(414, '64b4f1e09773e', 'suit(3pieces)', 1, 'Kennet', '0592152330', 'male', 'MOMO', 0, 35, 35, 20, '2023-07-17 07:46:40', 'Florence Agyekum', '2023-07-17', 0, '0'),
(415, '64b4f3d00469a', 'complete suit  washinng&ironing', 3, 'Kwame', '0204400114', 'male', 'Cash', 0, 30, 90, 90, '2023-07-17 07:54:56', 'Florence Agyekum', '2023-07-17', 0, '0'),
(416, '64b4f664338ee', 'towel medium', 3, 'Joe Omari', '0558058539', 'male', 'Cash', 0, 10, 30, 0, '2023-07-17 08:05:56', 'Florence Agyekum', '2023-07-17', 0, '0'),
(417, '64b50522db796', 'Trouser washing&ironing', 1, 'ps Gideon', '0244891900', 'male', 'Cash', 0, 10, 42, 42, '2023-07-17 09:08:50', 'Florence Agyekum', '2023-07-17', 0, '0'),
(418, '64b50522db796', 'shirt - washing & ironing', 2, 'ps Gideon', '0244891900', 'male', 'Cash', 0, 10, 42, 42, '2023-07-17 09:08:50', 'Florence Agyekum', '2023-07-17', 0, '0'),
(419, '64b50522db796', 'Lacoste washing&ironing', 2, 'ps Gideon', '0244891900', 'male', 'Cash', 0, 6, 42, 42, '2023-07-17 09:08:50', 'Florence Agyekum', '2023-07-17', 0, '0'),
(420, '64b512a04ac13', 'shirt - washing & ironing', 2, 'jonas', '0240283395', 'male', 'Cash', 0, 10, 190, 0, '2023-07-17 10:06:24', 'Florence Agyekum', '2023-07-17', 0, '0'),
(421, '64b512a04ac13', 'complete suit  washinng&ironing', 3, 'jonas', '0240283395', 'male', 'Cash', 0, 30, 190, 0, '2023-07-17 10:06:24', 'Florence Agyekum', '2023-07-17', 0, '0'),
(422, '64b512a04ac13', 'complete kaftan washing&ironing', 4, 'jonas', '0240283395', 'male', 'Cash', 0, 20, 190, 0, '2023-07-17 10:06:24', 'Florence Agyekum', '2023-07-17', 0, '0'),
(423, '64b51d75e9a97', 'skirt - washing & ironing', 3, 'Deborah', '0599333093', 'female', 'Cash', 0, 8, 24, 0, '2023-07-17 10:52:37', 'Florence Agyekum', '2023-07-17', 0, '0'),
(424, '64b55330a9196', 'complete kaftan washing&ironing', 1, 'Hecks', '0248991195', 'male', 'Cash', 0, 20, 136, 0, '2023-07-17 14:41:52', 'Florence Agyekum', '2023-07-17', 0, '0'),
(425, '64b55330a9196', 'shirt - washing & ironing', 7, 'Hecks', '0248991195', 'male', 'Cash', 0, 10, 136, 0, '2023-07-17 14:41:52', 'Florence Agyekum', '2023-07-17', 0, '0'),
(426, '64b55330a9196', 'Trouser washing&ironing', 4, 'Hecks', '0248991195', 'male', 'Cash', 0, 10, 136, 0, '2023-07-17 14:41:52', 'Florence Agyekum', '2023-07-17', 0, '0'),
(427, '64b55330a9196', 'Lacoste washing&ironing', 1, 'Hecks', '0248991195', 'male', 'Cash', 0, 6, 136, 0, '2023-07-17 14:41:52', 'Florence Agyekum', '2023-07-17', 0, '0'),
(428, '64b567a925931', 'curtains(2&haif yards)', 8, 'Jonathan', '0206457727', 'male', 'Cash', 0, 20, 232, 232, '2023-07-17 16:09:13', 'Florence Agyekum', '2023-07-17', 0, '0'),
(429, '64b567a925931', 'curtains(1&haif yards)', 6, 'Jonathan', '0206457727', 'male', 'Cash', 0, 12, 232, 232, '2023-07-17 16:09:13', 'Florence Agyekum', '2023-07-17', 0, '0'),
(430, '64b5822d5f0f1', 'complete kaftan washing&ironing', 1, 'Mr  Asare', '0244366137', 'male', 'MOMO', 0, 20, 40, 0, '2023-07-17 18:02:21', 'Florence Agyekum', '2023-07-17', 0, '0'),
(431, '64b5822d5f0f1', 'shirt - washing & ironing', 2, 'Mr  Asare', '0244366137', 'male', 'MOMO', 0, 10, 40, 0, '2023-07-17 18:02:21', 'Florence Agyekum', '2023-07-17', 0, '0'),
(432, '64b582efc06b2', 'complete kaftan washing&ironing', 1, 'Mr Asaer', '0244366137', 'male', 'MOMO', 0, 20, 20, 0, '2023-07-17 18:05:35', 'Florence Agyekum', '2023-07-17', 0, '0'),
(433, '64b58cd4b3f6b', 'Blanket(small)', 1, 'Sister Mercy', '0243102599', 'female', 'Cash', 0, 20, 30, 0, '2023-07-17 18:47:48', 'Florence Agyekum', '2023-07-17', 0, '0'),
(434, '64b58cd4b3f6b', 'shirt - washing & ironing', 1, 'Sister Mercy', '0243102599', 'female', 'Cash', 0, 10, 30, 0, '2023-07-17 18:47:48', 'Florence Agyekum', '2023-07-17', 0, '0'),
(435, '64b58e46ddace', 'complete kaftan washing&ironing', 2, 'Tingn', '0243971292', 'male', 'Cash', 0, 20, 40, 0, '2023-07-17 18:53:58', 'Florence Agyekum', '2023-07-17', 0, '0'),
(436, '64b659eadb5a5', 'complete kaftan washing&ironing', 1, 'Barbara', '0206990106', 'female', 'Cash', 0, 20, 74, 0, '2023-07-18 09:22:50', 'Florence Agyekum', '2023-07-18', 0, '0'),
(437, '64b659eadb5a5', 'smock washing&ironing', 1, 'Barbara', '0206990106', 'female', 'Cash', 0, 18, 74, 0, '2023-07-18 09:22:51', 'Florence Agyekum', '2023-07-18', 0, '0'),
(438, '64b659eadb5a5', 'smock washing&ironing', 1, 'Barbara', '0206990106', 'female', 'Cash', 0, 18, 74, 0, '2023-07-18 09:22:51', 'Florence Agyekum', '2023-07-18', 0, '0'),
(439, '64b659eadb5a5', 'smock washing&ironing', 1, 'Barbara', '0206990106', 'female', 'Cash', 0, 18, 74, 0, '2023-07-18 09:22:51', 'Florence Agyekum', '2023-07-18', 0, '0'),
(440, '64b65a68aab39', 'complete kaftan washing&ironing', 1, 'Barbara', '0206990106', 'female', 'Cash', 0, 20, 38, 20, '2023-07-18 09:24:56', 'Florence Agyekum', '2023-07-18', 0, '0'),
(441, '64b65a68aab39', 'smock washing&ironing', 1, 'Barbara', '0206990106', 'female', 'Cash', 0, 18, 38, 20, '2023-07-18 09:24:56', 'Florence Agyekum', '2023-07-18', 0, '0'),
(442, '64b66839e58ab', 'slit and kaba washing&ironing ', 1, 'Maa  Gifty', '0244562594', 'female', 'MOMO', 0, 18, 18, 0, '2023-07-18 10:23:53', 'Florence Agyekum', '2023-07-18', 0, '0'),
(443, '64b6693a6a4be', 'Trouser washing&ironing', 3, 'Newlove', '0246467089', 'male', 'Cash', 0, 10, 96, 96, '2023-07-18 10:28:10', 'Florence Agyekum', '2023-07-18', 0, '0'),
(444, '64b6693a6a4be', 'smock washing&ironing', 1, 'Newlove', '0246467089', 'male', 'Cash', 0, 18, 48, 96, '2023-07-18 10:28:10', 'Florence Agyekum', '2023-07-18', 0, '0'),
(445, '64b66c8007a0d', 'shirt - washing & ironing', 4, 'Akosua', '0246653805', 'male', 'Cash', 0, 10, 91, 0, '2023-07-18 10:42:08', 'Florence Agyekum', '2023-07-18', 0, '0'),
(446, '64b66c8007a0d', 'suit jacket(Ladies) washing only', 1, 'Akosua', '0246653805', 'male', 'Cash', 0, 8, 91, 0, '2023-07-18 10:42:08', 'Florence Agyekum', '2023-07-18', 0, '0'),
(447, '64b66c8007a0d', 'shorts  ironing', 2, 'Akosua', '0246653805', 'male', 'Cash', 0, 5, 91, 0, '2023-07-18 10:42:08', 'Florence Agyekum', '2023-07-18', 0, '0'),
(448, '64b66c8007a0d', 'Dress(ironing)', 1, 'Akosua', '0246653805', 'male', 'Cash', 0, 7, 91, 0, '2023-07-18 10:42:08', 'Florence Agyekum', '2023-07-18', 0, '0'),
(449, '64b66c8007a0d', 'skirt - ironing', 1, 'Akosua', '0246653805', 'male', 'Cash', 0, 5, 91, 0, '2023-07-18 10:42:08', 'Florence Agyekum', '2023-07-18', 0, '0'),
(450, '64b66c8007a0d', 'tops  washing', 1, 'Akosua', '0246653805', 'male', 'Cash', 0, 3, 91, 0, '2023-07-18 10:42:08', 'Florence Agyekum', '2023-07-18', 0, '0'),
(451, '64b66c8007a0d', 'complete suit(ladies) ironing', 1, 'Akosua', '0246653805', 'male', 'Cash', 0, 18, 91, 0, '2023-07-18 10:42:08', 'Florence Agyekum', '2023-07-18', 0, '0'),
(452, '64b6715057349', 'slit and kaba washing&ironing ', 4, 'Mama  Norvisi', '0558479901', 'female', 'Cash', 0, 18, 134, 0, '2023-07-18 11:02:40', 'Florence Agyekum', '2023-07-18', 0, '0'),
(453, '64b6715057349', 'dress washing&ironing', 1, 'Mama  Norvisi', '0558479901', 'female', 'Cash', 0, 12, 134, 0, '2023-07-18 11:02:40', 'Florence Agyekum', '2023-07-18', 0, '0'),
(454, '64b6715057349', 'shirt - washing & ironing', 1, 'Mama  Norvisi', '0558479901', 'female', 'Cash', 0, 10, 134, 0, '2023-07-18 11:02:40', 'Florence Agyekum', '2023-07-18', 0, '0'),
(455, '64b6715057349', 'Trouser washing&ironing', 4, 'Mama  Norvisi', '0558479901', 'female', 'Cash', 0, 10, 134, 0, '2023-07-18 11:02:40', 'Florence Agyekum', '2023-07-18', 0, '0'),
(456, '64b67f1b7e412', 'slit and kaba washing&ironing ', 1, 'Joseph', '0592770714', 'male', 'Cash', 0, 18, 68, 0, '2023-07-18 12:01:31', 'Florence Agyekum', '2023-07-18', 0, '0'),
(457, '64b67f1b7e412', 'complete kaftan washing&ironing', 1, 'Joseph', '0592770714', 'male', 'Cash', 0, 20, 68, 0, '2023-07-18 12:01:31', 'Florence Agyekum', '2023-07-18', 0, '0'),
(458, '64b67f1b7e412', 'shirt - washing & ironing', 3, 'Joseph', '0592770714', 'male', 'Cash', 0, 10, 68, 0, '2023-07-18 12:01:31', 'Florence Agyekum', '2023-07-18', 0, '0'),
(459, '64b6895841ea6', 'sweater/hoody(washing)', 1, 'Dennis', '0509679502', 'male', 'Cash', 0, 6, 22, 20, '2023-07-18 12:45:12', 'Florence Agyekum', '2023-07-18', 0, '0'),
(460, '64b6895841ea6', 'tracksuit pant washing', 1, 'Dennis', '0509679502', 'male', 'Cash', 0, 5, 22, 20, '2023-07-18 12:45:12', 'Florence Agyekum', '2023-07-18', 0, '0'),
(461, '64b6895841ea6', 'towel small ', 1, 'Dennis', '0509679502', 'male', 'Cash', 0, 8, 22, 20, '2023-07-18 12:45:12', 'Florence Agyekum', '2023-07-18', 0, '0'),
(462, '64b6895841ea6', 'Lacoste washing', 1, 'Dennis', '0509679502', 'male', 'Cash', 0, 3, 22, 20, '2023-07-18 12:45:12', 'Florence Agyekum', '2023-07-18', 0, '0'),
(463, '64b68ca3e22b4', 'complete kaftan washing&ironing', 2, 'Charles', '0593333170', 'male', 'Cash', 0, 20, 40, 0, '2023-07-18 12:59:15', 'Florence Agyekum', '2023-07-18', 0, '0'),
(464, '64b68dfd0ed4a', 'wedding gown(washing&ironing)', 1, 'Robert 2', '0559091523', 'male', 'Cash', 0, 70, 130, 0, '2023-07-18 13:05:01', 'Florence Agyekum', '2023-07-18', 0, '0'),
(465, '64b68dfd0ed4a', 'complete kaftan washing&ironing', 3, 'Robert 2', '0559091523', 'male', 'Cash', 0, 20, 130, 0, '2023-07-18 13:05:01', 'Florence Agyekum', '2023-07-18', 0, '0'),
(466, '64b69b5150b21', 'dress washing&ironing', 1, 'Rosita', '0559404673', 'female', 'Cash', 0, 12, 32, 0, '2023-07-18 14:01:53', 'Florence Agyekum', '2023-07-18', 0, '0'),
(467, '64b69b5150b21', 'towel medium', 1, 'Rosita', '0559404673', 'female', 'Cash', 0, 10, 32, 0, '2023-07-18 14:01:53', 'Florence Agyekum', '2023-07-18', 0, '0'),
(468, '64b69b5150b21', 'bedsheet small', 1, 'Rosita', '0559404673', 'female', 'Cash', 0, 10, 32, 0, '2023-07-18 14:01:53', 'Florence Agyekum', '2023-07-18', 0, '0'),
(469, '64b69c58ed63e', 'shirt - washing & ironing', 1, 'Cyril', '0263372851', 'male', 'MOMO', 0, 10, 38, 0, '2023-07-18 14:06:16', 'Florence Agyekum', '2023-07-18', 0, '0'),
(470, '64b69c58ed63e', 'Trouser washing&ironing', 1, 'Cyril', '0263372851', 'male', 'MOMO', 0, 10, 38, 0, '2023-07-18 14:06:16', 'Florence Agyekum', '2023-07-18', 0, '0'),
(471, '64b69c58ed63e', 'Lacoste washing&ironing', 2, 'Cyril', '0263372851', 'male', 'MOMO', 0, 6, 38, 0, '2023-07-18 14:06:16', 'Florence Agyekum', '2023-07-18', 0, '0'),
(472, '64b69c58ed63e', 'T shirts(washing &ironing)', 1, 'Cyril', '0263372851', 'male', 'MOMO', 0, 6, 38, 0, '2023-07-18 14:06:16', 'Florence Agyekum', '2023-07-18', 0, '0'),
(473, '64b69fc5628cd', 'suit(3pieces)', 2, ' Ps Thompson', '0243556200', 'male', 'MOMO', 0, 35, 90, 0, '2023-07-18 14:20:53', 'Florence Agyekum', '2023-07-18', 0, '0'),
(474, '64b69fc5628cd', 'suit(3pieces)washing', 1, ' Ps Thompson', '0243556200', 'male', 'MOMO', 0, 20, 90, 0, '2023-07-18 14:20:53', 'Florence Agyekum', '2023-07-18', 0, '0'),
(475, '64b6ac9def52e', 'bedsheet small', 1, 'James', '0550719879', 'female', 'MOMO', 0, 10, 18, 18, '2023-07-18 15:15:41', 'Florence Agyekum', '2023-07-18', 0, '0'),
(476, '64b6ac9def52e', 'towel small ', 1, 'James', '0550719879', 'female', 'MOMO', 0, 8, 18, 18, '2023-07-18 15:15:41', 'Florence Agyekum', '2023-07-18', 0, '0'),
(477, '64b6ba23f1d70', 'suit jacket (Men) washing&ironing', 2, 'Ps Thompson', '0243556200', 'male', 'Cash', 0, 20, 130, 0, '2023-07-18 16:13:23', 'Florence Agyekum', '2023-07-18', 0, '0'),
(478, '64b6ba23f1d70', 'suit(3pieces)', 2, 'Ps Thompson', '0243556200', 'male', 'Cash', 0, 35, 130, 0, '2023-07-18 16:13:23', 'Florence Agyekum', '2023-07-18', 0, '0'),
(479, '64b6ba23f1d70', 'suit(3pieces)ironing only', 1, 'Ps Thompson', '0243556200', 'male', 'Cash', 0, 20, 130, 0, '2023-07-18 16:13:23', 'Florence Agyekum', '2023-07-18', 0, '0'),
(480, '64b6bd0ddf280', 'bedsheet small', 2, 'Dr   Razak', '0206300292', 'male', 'MOMO', 0, 10, 82, 0, '2023-07-18 16:25:49', 'Florence Agyekum', '2023-07-18', 0, '0'),
(481, '64b6bd0ddf280', 'pillow', 1, 'Dr   Razak', '0206300292', 'male', 'MOMO', 0, 15, 82, 0, '2023-07-18 16:25:49', 'Florence Agyekum', '2023-07-18', 0, '0'),
(482, '64b6bd0ddf280', 'Trouser washing&ironing', 1, 'Dr   Razak', '0206300292', 'male', 'MOMO', 0, 10, 82, 0, '2023-07-18 16:25:49', 'Florence Agyekum', '2023-07-18', 0, '0'),
(483, '64b6bd0ddf280', 'shirt - washing & ironing', 1, 'Dr   Razak', '0206300292', 'male', 'MOMO', 0, 10, 82, 0, '2023-07-18 16:25:49', 'Florence Agyekum', '2023-07-18', 0, '0'),
(484, '64b6bd0ddf280', 'jalabia washing & ironing', 1, 'Dr   Razak', '0206300292', 'male', 'MOMO', 0, 15, 82, 0, '2023-07-18 16:25:49', 'Florence Agyekum', '2023-07-18', 0, '0'),
(485, '64b6bd0ddf280', 'boxer washing&ironing', 1, 'Dr   Razak', '0206300292', 'male', 'MOMO', 0, 4, 82, 0, '2023-07-18 16:25:49', 'Florence Agyekum', '2023-07-18', 0, '0'),
(486, '64b6bd0ddf280', 'boxer washing&ironing', 1, 'Dr   Razak', '0206300292', 'male', 'MOMO', 0, 4, 82, 0, '2023-07-18 16:25:49', 'Florence Agyekum', '2023-07-18', 0, '0'),
(487, '64b6bd0ddf280', 'singlet washing&ironing', 1, 'Dr   Razak', '0206300292', 'male', 'MOMO', 0, 4, 82, 0, '2023-07-18 16:25:49', 'Florence Agyekum', '2023-07-18', 0, '0'),
(488, '64b6db703b39f', 'shorts washing & ironing', 2, 'NII', '0552502911', 'male', 'Cash', 0, 7, 114, 0, '2023-07-18 18:35:28', 'Florence Agyekum', '2023-07-18', 0, '0'),
(489, '64b6db703b39f', 'shirt - washing & ironing', 6, 'NII', '0552502911', 'male', 'Cash', 0, 10, 114, 0, '2023-07-18 18:35:28', 'Florence Agyekum', '2023-07-18', 0, '0'),
(490, '64b6db703b39f', 'Trouser washing&ironing', 4, 'NII', '0552502911', 'male', 'Cash', 0, 10, 114, 0, '2023-07-18 18:35:28', 'Florence Agyekum', '2023-07-18', 0, '0'),
(491, '64b7873406963', 'complete kaftan washing&ironing', 4, 'Emmanuel', '0248110208', 'male', 'Cash', 0, 20, 80, 80, '2023-07-19 06:48:20', 'Florence Agyekum', '2023-07-19', 0, '0'),
(492, '64b7880c01299', 'dress washing&ironing', 4, 'Sandra Addo', '0244858388', 'female', 'Cash', 0, 12, 61, 0, '2023-07-19 06:51:56', 'Florence Agyekum', '2023-07-19', 0, '0'),
(493, '64b7880c01299', 'bedsheet small', 1, 'Sandra Addo', '0244858388', 'female', 'Cash', 0, 10, 61, 0, '2023-07-19 06:51:56', 'Florence Agyekum', '2023-07-19', 0, '0'),
(494, '64b7880c01299', 'pillow case', 1, 'Sandra Addo', '0244858388', 'female', 'Cash', 0, 3, 61, 0, '2023-07-19 06:51:56', 'Florence Agyekum', '2023-07-19', 0, '0'),
(495, '64b7be966c508', 'towel medium', 1, 'Rita', '0598169298', 'female', 'MOMO', 0, 10, 10, 0, '2023-07-19 10:44:38', 'Florence Agyekum', '2023-07-19', 0, '0'),
(496, '64b7c2481a9c6', 'duvet small', 1, 'Matilda', '0559404673', 'female', 'Cash', 0, 20, 20, 0, '2023-07-19 11:00:24', 'Florence Agyekum', '2023-07-19', 0, '0'),
(497, '64b7c803d8166', 'shirt - washing & ironing', 5, 'Dr  Abroakwah', '0504558585', 'male', 'Cash', 0, 10, 167, 0, '2023-07-19 11:24:51', 'Florence Agyekum', '2023-07-19', 0, '0'),
(498, '64b7c803d8166', 'complete kaftan washing&ironing', 1, 'Dr  Abroakwah', '0504558585', 'male', 'Cash', 0, 20, 167, 0, '2023-07-19 11:24:51', 'Florence Agyekum', '2023-07-19', 0, '0'),
(499, '64b7c803d8166', 'dress washing&ironing', 3, 'Dr  Abroakwah', '0504558585', 'male', 'Cash', 0, 12, 167, 0, '2023-07-19 11:24:51', 'Florence Agyekum', '2023-07-19', 0, '0'),
(500, '64b7c803d8166', 'Trouser washing&ironing', 4, 'Dr  Abroakwah', '0504558585', 'male', 'Cash', 0, 10, 167, 0, '2023-07-19 11:24:51', 'Florence Agyekum', '2023-07-19', 0, '0'),
(501, '64b7c803d8166', 'pillow case', 7, 'Dr  Abroakwah', '0504558585', 'male', 'Cash', 0, 3, 167, 0, '2023-07-19 11:24:51', 'Florence Agyekum', '2023-07-19', 0, '0'),
(502, '64b7f166beba8', 'jalaia washing', 1, 'Jessica', '0553833952', 'female', 'Cash', 0, 8, 79, 0, '2023-07-19 14:21:26', 'Florence Agyekum', '2023-07-19', 0, '0'),
(503, '64b7f166beba8', 'jalaia washing', 1, 'Jessica', '0553833952', 'female', 'MOMO', 0, 8, 79, 0, '2023-07-19 14:21:26', 'Florence Agyekum', '2023-07-19', 0, '0'),
(504, '64b7f166beba8', 't-shirt washing ', 10, 'Jessica', '0553833952', 'female', 'MOMO', 0, 3, 79, 0, '2023-07-19 14:21:26', 'Florence Agyekum', '2023-07-19', 0, '0'),
(505, '64b7f166beba8', 'shorts washing', 4, 'Jessica', '0553833952', 'female', 'MOMO', 0, 6, 79, 0, '2023-07-19 14:21:26', 'Florence Agyekum', '2023-07-19', 0, '0'),
(506, '64b7f166beba8', 'tracksuit pant washing', 1, 'Jessica', '0553833952', 'female', 'MOMO', 0, 5, 79, 0, '2023-07-19 14:21:26', 'Florence Agyekum', '2023-07-19', 0, '0'),
(507, '64b7f166beba8', 'boxer washing', 2, 'Jessica', '0553833952', 'female', 'MOMO', 0, 2, 79, 0, '2023-07-19 14:21:26', 'Florence Agyekum', '2023-07-19', 0, '0'),
(508, '64b805b06b031', 'bedsheet medium', 2, 'Emma', '0559404673', 'male', 'Cash', 0, 12, 45, 0, '2023-07-19 15:48:00', 'Florence Agyekum', '2023-07-19', 0, '0'),
(509, '64b805b06b031', 'pillow case', 7, 'Emma', '0559404673', 'male', 'Cash', 0, 3, 45, 0, '2023-07-19 15:48:00', 'Florence Agyekum', '2023-07-19', 0, '0'),
(510, '64b8073625c92', 'duvet medium', 2, 'Jeremiah', '0247708354', 'male', 'MOMO', 0, 25, 241, 0, '2023-07-19 15:54:30', 'Florence Agyekum', '2023-07-19', 0, '0'),
(511, '64b8073625c92', 'bedsheet medium', 3, 'Jeremiah', '0247708354', 'male', 'MOMO', 0, 12, 241, 0, '2023-07-19 15:54:30', 'Florence Agyekum', '2023-07-19', 0, '0');
INSERT INTO `orderitems` (`id`, `order_id`, `item`, `quantity`, `customer`, `telephone`, `sex`, `paymethod`, `ExpressAmount`, `price`, `total`, `initialPayment`, `order_date`, `servedby`, `Dates`, `completed`, `completed_date`) VALUES
(512, '64b8073625c92', 'pillow case', 6, 'Jeremiah', '0247708354', 'male', 'MOMO', 0, 3, 241, 0, '2023-07-19 15:54:30', 'Florence Agyekum', '2023-07-19', 0, '0'),
(513, '64b8073625c92', 'complete kaftan washing&ironing', 1, 'Jeremiah', '0247708354', 'male', 'MOMO', 0, 20, 241, 0, '2023-07-19 15:54:30', 'Florence Agyekum', '2023-07-19', 0, '0'),
(514, '64b8073625c92', 'Trouser washing&ironing', 3, 'Jeremiah', '0247708354', 'male', 'MOMO', 0, 10, 241, 0, '2023-07-19 15:54:30', 'Florence Agyekum', '2023-07-19', 0, '0'),
(515, '64b8073625c92', 'towel small ', 1, 'Jeremiah', '0247708354', 'male', 'MOMO', 0, 8, 241, 0, '2023-07-19 15:54:30', 'Florence Agyekum', '2023-07-19', 0, '0'),
(516, '64b8073625c92', 'shirt - washing & ironing', 4, 'Jeremiah', '0247708354', 'male', 'MOMO', 0, 10, 241, 0, '2023-07-19 15:54:30', 'Florence Agyekum', '2023-07-19', 0, '0'),
(517, '64b8073625c92', 't-shirt washing ', 6, 'Jeremiah', '0247708354', 'male', 'MOMO', 0, 3, 241, 0, '2023-07-19 15:54:30', 'Florence Agyekum', '2023-07-19', 0, '0'),
(518, '64b8073625c92', 'Lacoste washing&ironing', 1, 'Jeremiah', '0247708354', 'male', 'MOMO', 0, 6, 241, 0, '2023-07-19 15:54:30', 'Florence Agyekum', '2023-07-19', 0, '0'),
(519, '64b8073625c92', 'shorts washing & ironing', 1, 'Jeremiah', '0247708354', 'male', 'MOMO', 0, 7, 241, 0, '2023-07-19 15:54:30', 'Florence Agyekum', '2023-07-19', 0, '0'),
(520, '64b8073625c92', 'singlet washing&ironing', 2, 'Jeremiah', '0247708354', 'male', 'MOMO', 0, 4, 241, 0, '2023-07-19 15:54:30', 'Florence Agyekum', '2023-07-19', 0, '0'),
(521, '64b8367002204', 'complete kaftan washing&ironing', 1, 'James', '0556218690', 'male', 'Cash', 0, 20, 62, 0, '2023-07-19 19:16:00', 'Florence Agyekum', '2023-07-19', 0, '0'),
(522, '64b8367002204', 'tracksuit pant washing&ironing ', 1, 'James', '0556218690', 'male', 'Cash', 0, 10, 62, 0, '2023-07-19 19:16:00', 'Florence Agyekum', '2023-07-19', 0, '0'),
(523, '64b8367002204', 'Trouser washing&ironing', 1, 'James', '0556218690', 'male', 'Cash', 0, 10, 62, 0, '2023-07-19 19:16:00', 'Florence Agyekum', '2023-07-19', 0, '0'),
(524, '64b8367002204', 'shirt - washing & ironing', 1, 'James', '0556218690', 'male', 'Cash', 0, 10, 62, 0, '2023-07-19 19:16:00', 'Florence Agyekum', '2023-07-19', 0, '0'),
(525, '64b8367002204', 'T shirts(washing &ironing)', 2, 'James', '0556218690', 'male', 'Cash', 0, 6, 62, 0, '2023-07-19 19:16:00', 'Florence Agyekum', '2023-07-19', 0, '0'),
(526, '64b90a361c595', 'complete kaftan washing&ironing', 6, 'Rev. Forson', '0241876840', 'male', 'Cash', 0, 20, 246, 0, '2023-07-20 10:19:34', 'Florence Agyekum', '2023-07-20', 0, '0'),
(527, '64b90a361c595', 'shirt - washing & ironing', 11, 'Rev. Forson', '0241876840', 'male', 'Cash', 0, 10, 246, 0, '2023-07-20 10:19:34', 'Florence Agyekum', '2023-07-20', 0, '0'),
(528, '64b90a361c595', 'Trouser washing&ironing', 1, 'Rev. Forson', '0241876840', 'male', 'Cash', 0, 10, 246, 0, '2023-07-20 10:19:34', 'Florence Agyekum', '2023-07-20', 0, '0'),
(529, '64b90a361c595', 'T shirts(washing &ironing)', 1, 'Rev. Forson', '0241876840', 'male', 'Cash', 0, 6, 246, 0, '2023-07-20 10:19:34', 'Florence Agyekum', '2023-07-20', 0, '0'),
(530, '64b92d6882c0a', 'Blanket(small)', 1, 'Mary', '0244670281', 'female', 'Cash', 0, 20, 20, 0, '2023-07-20 12:49:44', 'Florence Agyekum', '2023-07-20', 0, '0'),
(531, '64b947f0ecbff', 'duvet small', 1, 'Kwame', '0247050734', 'male', 'MOMO', 0, 20, 20, 20, '2023-07-20 14:42:56', 'Florence Agyekum', '2023-07-20', 0, '0'),
(532, '64b94c76ee79c', 'shirt - washing & ironing', 2, 'Prince', '0501235510', 'male', 'Cash', 0, 10, 40, 40, '2023-07-20 15:02:14', 'Florence Agyekum', '2023-07-20', 0, '0'),
(533, '64b94c76ee79c', 'Trouser washing&ironing', 2, 'Prince', '0501235510', 'male', 'Cash', 0, 10, 40, 40, '2023-07-20 15:02:14', 'Florence Agyekum', '2023-07-20', 0, '0'),
(534, '64b953a275460', 'shirt - washing & ironing', 15, 'Nana  Ntodi', '0559091523', 'male', 'MOMO', 0, 10, 150, 40, '2023-07-20 15:32:50', 'Florence Agyekum', '2023-07-20', 0, '0'),
(535, '64b97ab50aa9a', 'Blanket(small)', 1, 'Felix', '0551644905', 'male', 'Cash', 0, 20, 66, 0, '2023-07-20 18:19:33', 'Florence Agyekum', '2023-07-20', 0, '0'),
(536, '64b97ab50aa9a', 'bedsheet large', 1, 'Felix', '0551644905', 'male', 'Cash', 0, 14, 66, 0, '2023-07-20 18:19:33', 'Florence Agyekum', '2023-07-20', 0, '0'),
(537, '64b97ab50aa9a', 'bedsheet medium', 1, 'Felix', '0551644905', 'male', 'Cash', 0, 12, 66, 0, '2023-07-20 18:19:33', 'Florence Agyekum', '2023-07-20', 0, '0'),
(538, '64b97ab50aa9a', 'Blanket(small)', 1, 'Felix', '0551644905', 'male', 'Cash', 0, 20, 66, 0, '2023-07-20 18:19:33', 'Florence Agyekum', '2023-07-20', 0, '0'),
(539, '64b98dc49d940', 'duvet large', 2, 'Patrick', '0554605519', 'male', 'MOMO', 0, 30, 60, 0, '2023-07-20 19:40:52', 'Florence Agyekum', '2023-07-20', 0, '0'),
(540, '64b98e3b6894b', 'kaftan top washing&ironing', 1, 'Todd', '0554605519', 'male', 'MOMO', 0, 10, 10, 0, '2023-07-20 19:42:51', 'Florence Agyekum', '2023-07-20', 0, '0'),
(541, '64ba554028bb4', 'complete kaftan washing&ironing', 2, 'Nelly', '0553084454', 'male', 'Cash', 0, 20, 40, 0, '2023-07-21 09:52:00', 'Florence Agyekum', '2023-07-21', 0, '0'),
(542, '64ba7218bb868', 'slit and kaba washing&ironing ', 2, 'sandra', '0209634439', 'female', 'Cash', 0, 18, 36, 0, '2023-07-21 11:55:04', 'Florence Agyekum', '2023-07-21', 0, '0'),
(543, '64ba75e84ebfb', 'towel medium', 1, 'Zack', '0202019631', 'male', 'Cash', 0, 10, 66, 0, '2023-07-21 12:11:20', 'Florence Agyekum', '2023-07-21', 0, '0'),
(544, '64ba75e84ebfb', 'shorts washing & ironing', 2, 'Zack', '0202019631', 'male', 'Cash', 0, 7, 66, 0, '2023-07-21 12:11:20', 'Florence Agyekum', '2023-07-21', 0, '0'),
(545, '64ba75e84ebfb', 'boxer washing', 3, 'Zack', '0202019631', 'male', 'Cash', 0, 2, 66, 0, '2023-07-21 12:11:20', 'Florence Agyekum', '2023-07-21', 0, '0'),
(546, '64ba75e84ebfb', 'Lacoste washing&ironing', 1, 'Zack', '0202019631', 'male', 'Cash', 0, 6, 66, 0, '2023-07-21 12:11:20', 'Florence Agyekum', '2023-07-21', 0, '0'),
(547, '64ba75e84ebfb', 'T shirts(washing &ironing)', 5, 'Zack', '0202019631', 'male', 'Cash', 0, 6, 66, 0, '2023-07-21 12:11:20', 'Florence Agyekum', '2023-07-21', 0, '0'),
(548, '64ba7bd8f06bf', 'Trouser washing&ironing', 3, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 10, 89, 0, '2023-07-21 12:36:40', 'Florence Agyekum', '2023-07-21', 0, '0'),
(549, '64ba7bd8f06bf', 'T shirts(washing &ironing)', 6, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 6, 89, 0, '2023-07-21 12:36:40', 'Florence Agyekum', '2023-07-21', 0, '0'),
(550, '64ba7bd8f06bf', 'shirt - washing & ironing', 1, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 10, 89, 0, '2023-07-21 12:36:40', 'Florence Agyekum', '2023-07-21', 0, '0'),
(551, '64ba7bd8f06bf', 'shorts washing & ironing', 1, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 7, 89, 0, '2023-07-21 12:36:40', 'Florence Agyekum', '2023-07-21', 0, '0'),
(552, '64ba7bd8f06bf', 'boxer washing', 1, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 2, 89, 0, '2023-07-21 12:36:40', 'Florence Agyekum', '2023-07-21', 0, '0'),
(553, '64ba7bd8f06bf', 'boxer washing', 2, 'Bohyeba', '0262047467', 'male', 'MOMO', 0, 2, 89, 0, '2023-07-21 12:36:40', 'Florence Agyekum', '2023-07-21', 0, '0'),
(554, '64ba93cd37e24', 'Blanket(small)', 1, 'wilfred', '0542932974', 'male', 'MOMO', 0, 20, 20, 0, '2023-07-21 14:18:53', 'Florence Agyekum', '2023-07-21', 0, '0'),
(555, '64bab15eb3983', 'complete kaftan washing&ironing', 4, 'Timothy', '0245152356', 'male', 'MOMO', 0, 20, 98, 98, '2023-07-21 16:25:02', 'Florence Agyekum', '2023-07-21', 0, '0'),
(556, '64bab15eb3983', 'smock washing&ironing', 1, 'Timothy', '0245152356', 'male', 'MOMO', 0, 18, 98, 98, '2023-07-21 16:25:02', 'Florence Agyekum', '2023-07-21', 0, '0'),
(557, '64babaca32afa', 'dress washing&ironing', 1, 'joejoe', '0554111467', 'male', 'Cash', 0, 12, 32, 10, '2023-07-21 17:05:14', 'Florence Agyekum', '2023-07-21', 0, '0'),
(558, '64babaca32afa', 'complete kaftan washing&ironing', 1, 'joejoe', '0554111467', 'male', 'Cash', 0, 20, 32, 10, '2023-07-21 17:05:14', 'Florence Agyekum', '2023-07-21', 0, '0'),
(559, '64bac889f31a1', 'bedsheet small', 1, 'Elijah', '0245817684', 'male', 'Cash', 0, 10, 10, 10, '2023-07-21 18:03:53', 'Florence Agyekum', '2023-07-21', 0, '0'),
(560, '64bac94aa4cc1', 'bedsheet small', 2, 'Marius', '0557078123', 'male', 'Cash', 0, 10, 80, 0, '2023-07-21 18:07:06', 'Florence Agyekum', '2023-07-21', 0, '0'),
(561, '64bac94aa4cc1', 'pillow', 2, 'Marius', '0557078123', 'male', 'Cash', 0, 15, 80, 0, '2023-07-21 18:07:06', 'Florence Agyekum', '2023-07-21', 0, '0'),
(562, '64bac94aa4cc1', 'pillow', 2, 'Marius', '0557078123', 'male', 'Cash', 0, 15, 80, 0, '2023-07-21 18:07:06', 'Florence Agyekum', '2023-07-21', 0, '0'),
(563, '64bac9d34a05c', 'bedsheet small', 2, 'Marius', '0557078123', 'male', 'Cash', 0, 10, 26, 26, '2023-07-21 18:09:23', 'Florence Agyekum', '2023-07-21', 0, '0'),
(564, '64bac9d34a05c', 'pillow case', 2, 'Marius', '0557078123', 'male', 'Cash', 0, 3, 26, 26, '2023-07-21 18:09:23', 'Florence Agyekum', '2023-07-21', 0, '0'),
(565, '64bad050edf2c', 'complete kaftan washing&ironing', 1, 'sandra Addo', '0596611336', 'female', 'MOMO', 0, 20, 32, 0, '2023-07-21 18:37:04', 'Florence Agyekum', '2023-07-21', 0, '0'),
(566, '64bad050edf2c', 'dress washing&ironing', 1, 'sandra Addo', '0596611336', 'female', 'MOMO', 0, 12, 32, 0, '2023-07-21 18:37:04', 'Florence Agyekum', '2023-07-21', 0, '0'),
(567, '64bad29e3d90b', 'Blanket(medium)', 1, 'Davis', '0243555020', 'male', 'Cash', 0, 25, 60, 0, '2023-07-21 18:46:54', 'Florence Agyekum', '2023-07-21', 0, '0'),
(568, '64bad29e3d90b', 'suit(3pieces)', 1, 'Davis', '0243555020', 'male', 'Cash', 0, 35, 60, 0, '2023-07-21 18:46:54', 'Florence Agyekum', '2023-07-21', 0, '0'),
(569, '64bad302ec2fc', 'Blanket(small)', 1, 'Davis', '0243555020', 'male', 'Cash', 0, 20, 50, 50, '2023-07-21 18:48:34', 'Florence Agyekum', '2023-07-21', 0, '0'),
(570, '64bad302ec2fc', 'complete suit  washinng&ironing', 1, 'Davis', '0243555020', 'male', 'Cash', 0, 30, 50, 50, '2023-07-21 18:48:34', 'Florence Agyekum', '2023-07-21', 0, '0'),
(571, '64bae47415f84', 'slit and kaba washing&ironing ', 4, 'Mama Norvisi', '0558479901', 'female', 'Cash', 0, 18, 154, 0, '2023-07-21 20:03:00', 'Florence Agyekum', '2023-07-21', 0, '0'),
(572, '64bae47415f84', 'dress washing&ironing', 1, 'Mama Norvisi', '0558479901', 'female', 'Cash', 0, 12, 154, 0, '2023-07-21 20:03:00', 'Florence Agyekum', '2023-07-21', 0, '0'),
(573, '64bae47415f84', 'shirt - washing & ironing', 3, 'Mama Norvisi', '0558479901', 'female', 'Cash', 0, 10, 154, 0, '2023-07-21 20:03:00', 'Florence Agyekum', '2023-07-21', 0, '0'),
(574, '64bae47415f84', 'Trouser washing&ironing', 4, 'Mama Norvisi', '0558479901', 'female', 'Cash', 0, 10, 154, 0, '2023-07-21 20:03:00', 'Florence Agyekum', '2023-07-21', 0, '0'),
(575, '64bba66bc2b17', 'smock washing&ironing', 3, 'Timothy', '0243556200', 'male', 'Cash', 0, 18, 54, 0, '2023-07-22 09:50:35', 'Florence Agyekum', '2023-07-22', 0, '0'),
(576, '64bba89fae63d', 'towel large', 1, 'Rockson', '0554528782', 'male', 'Cash', 0, 15, 94, 0, '2023-07-22 09:59:59', 'Florence Agyekum', '2023-07-22', 0, '0'),
(577, '64bba89fae63d', 'duvet x-large', 1, 'Rockson', '0554528782', 'male', 'Cash', 0, 35, 94, 0, '2023-07-22 09:59:59', 'Florence Agyekum', '2023-07-22', 0, '0'),
(578, '64bba89fae63d', 'boxer washing&ironing', 5, 'Rockson', '0554528782', 'male', 'Cash', 0, 4, 94, 0, '2023-07-22 09:59:59', 'Florence Agyekum', '2023-07-22', 0, '0'),
(579, '64bba89fae63d', 't-shirt - washing & ironing', 2, 'Rockson', '0554528782', 'male', 'Cash', 0, 6, 94, 0, '2023-07-22 09:59:59', 'Florence Agyekum', '2023-07-22', 0, '0'),
(580, '64bba89fae63d', 'singlet washing&ironing', 3, 'Rockson', '0554528782', 'male', 'Cash', 0, 4, 94, 0, '2023-07-22 09:59:59', 'Florence Agyekum', '2023-07-22', 0, '0'),
(581, '64bbce7be783b', 'smock washing&ironing', 3, 'Alex', '0262514232', 'male', 'Cash', 0, 18, 54, 54, '2023-07-22 12:41:31', 'Florence Agyekum', '2023-07-22', 0, '0'),
(582, '64bbfdbf25572', 'Trouser washing&ironing', 2, 'Mr..yeboah', '0244637454', 'male', 'Cash', 0, 10, 38, 20, '2023-07-22 16:03:11', 'Florence Agyekum', '2023-07-22', 0, '0'),
(583, '64bbfdbf25572', 'smock washing&ironing', 1, 'Mr..yeboah', '0244637454', 'male', 'Cash', 0, 18, 38, 20, '2023-07-22 16:03:11', 'Florence Agyekum', '2023-07-22', 0, '0'),
(584, '64bc007554a82', 'smock washing&ironing', 4, 'Prosper', '0548430232', 'male', 'Cash', 0, 18, 72, 0, '2023-07-22 16:14:45', 'Florence Agyekum', '2023-07-22', 0, '0'),
(585, '64bc034fe4d32', 'Bedwashing(washing)', 1, 'Christiana', '0507353597', 'female', 'Cash', 0, 6, 38, 0, '2023-07-22 16:26:55', 'Florence Agyekum', '2023-07-22', 0, '0'),
(586, '64bc034fe4d32', 'pillow case', 3, 'Christiana', '0507353597', 'female', 'Cash', 0, 3, 38, 0, '2023-07-22 16:26:55', 'Florence Agyekum', '2023-07-22', 0, '0'),
(587, '64bc034fe4d32', 'trouser washing', 1, 'Christiana', '0507353597', 'female', 'Cash', 0, 6, 38, 0, '2023-07-22 16:26:55', 'Florence Agyekum', '2023-07-22', 0, '0'),
(588, '64bc034fe4d32', 'dress(washing)', 1, 'Christiana', '0507353597', 'female', 'Cash', 0, 6, 38, 0, '2023-07-22 16:26:55', 'Florence Agyekum', '2023-07-22', 0, '0'),
(589, '64bc034fe4d32', 'tops  washing', 1, 'Christiana', '0507353597', 'female', 'Cash', 0, 3, 38, 0, '2023-07-22 16:26:55', 'Florence Agyekum', '2023-07-22', 0, '0'),
(590, '64bc034fe4d32', 'towel small ', 1, 'Christiana', '0507353597', 'female', 'Cash', 0, 8, 38, 0, '2023-07-22 16:26:55', 'Florence Agyekum', '2023-07-22', 0, '0'),
(591, '64bc06ef07e35', 'duvet small', 1, 'Maame Akua', '0244768433', 'female', 'MOMO', 0, 20, 56, 0, '2023-07-22 16:42:23', 'Florence Agyekum', '2023-07-22', 0, '0'),
(592, '64bc06ef07e35', 'bedsheet medium', 2, 'Maame Akua', '0244768433', 'female', 'MOMO', 0, 12, 56, 0, '2023-07-22 16:42:23', 'Florence Agyekum', '2023-07-22', 0, '0'),
(593, '64bc06ef07e35', 'pillow case', 4, 'Maame Akua', '0244768433', 'female', 'MOMO', 0, 3, 56, 0, '2023-07-22 16:42:23', 'Florence Agyekum', '2023-07-22', 0, '0'),
(594, '64bc1a6392f9f', 'Trouser washing&ironing', 2, 'Mr Asare', '0244366137', 'male', 'Cash', 0, 10, 111, 0, '2023-07-22 18:05:23', 'Florence Agyekum', '2023-07-22', 0, '0'),
(595, '64bc1a6392f9f', 'bedsheet medium', 3, 'Mr Asare', '0244366137', 'male', 'Cash', 0, 12, 111, 0, '2023-07-22 18:05:23', 'Florence Agyekum', '2023-07-22', 0, '0'),
(596, '64bc1a6392f9f', 'pillow case', 1, 'Mr Asare', '0244366137', 'male', 'Cash', 0, 3, 111, 0, '2023-07-22 18:05:23', 'Florence Agyekum', '2023-07-22', 0, '0'),
(597, '64bc1a6392f9f', 'towel medium', 4, 'Mr Asare', '0244366137', 'male', 'Cash', 0, 10, 111, 0, '2023-07-22 18:05:23', 'Florence Agyekum', '2023-07-22', 0, '0'),
(598, '64bc1a6392f9f', 'dress washing&ironing', 1, 'Mr Asare', '0244366137', 'male', 'Cash', 0, 12, 111, 0, '2023-07-22 18:05:23', 'Florence Agyekum', '2023-07-22', 0, '0'),
(599, '64bc1fec726ac', 'duvet medium', 1, 'Judith', '0541000821', 'female', 'Cash', 0, 25, 43, 0, '2023-07-22 18:29:00', 'Florence Agyekum', '2023-07-22', 0, '0'),
(600, '64bc1fec726ac', 'bedsheet medium', 1, 'Judith', '0541000821', 'female', 'Cash', 0, 12, 43, 0, '2023-07-22 18:29:00', 'Florence Agyekum', '2023-07-22', 0, '0'),
(601, '64bc1fec726ac', 'pillow case', 2, 'Judith', '0541000821', 'female', 'Cash', 0, 3, 43, 0, '2023-07-22 18:29:00', 'Florence Agyekum', '2023-07-22', 0, '0'),
(602, '64bc2dddab087', 'singlet washing&ironing', 8, 'Gustav', '0559091523', 'male', 'MOMO', 0, 4, 166, 56, '2023-07-22 19:28:29', 'Florence Agyekum', '2023-07-22', 0, '0'),
(603, '64bc2dddab087', 'shirt - washing & ironing', 9, 'Gustav', '0559091523', 'male', 'MOMO', 0, 10, 166, 56, '2023-07-22 19:28:29', 'Florence Agyekum', '2023-07-22', 0, '0'),
(604, '64bc2dddab087', 'towel medium', 1, 'Gustav', '0559091523', 'male', 'MOMO', 0, 10, 166, 56, '2023-07-22 19:28:29', 'Florence Agyekum', '2023-07-22', 0, '0'),
(605, '64bc2dddab087', 'T shirts(washing &ironing)', 4, 'Gustav', '0559091523', 'male', 'MOMO', 0, 6, 166, 56, '2023-07-22 19:28:29', 'Florence Agyekum', '2023-07-22', 0, '0'),
(606, '64bc2dddab087', 'towel medium', 1, 'Gustav', '0559091523', 'male', 'MOMO', 0, 10, 166, 56, '2023-07-22 19:28:29', 'Florence Agyekum', '2023-07-22', 0, '0'),
(607, '64bc3635e3274', 'complete kaftan washing&ironing', 5, 'Atwene  Boana', '0273176771', 'male', 'MOMO', 0, 20, 112, 0, '2023-07-22 20:04:05', 'Florence Agyekum', '2023-07-22', 0, '0'),
(608, '64bc3635e3274', 'dress washing&ironing', 1, 'Atwene  Boana', '0273176771', 'male', 'MOMO', 0, 12, 112, 0, '2023-07-22 20:04:05', 'Florence Agyekum', '2023-07-22', 0, '0'),
(609, '64be2742d3071', 'suit jacket (Men) washing&ironing', 3, 'Kwesi Nyamekye', '0244848431', 'male', 'MOMO', 0, 20, 60, 0, '2023-07-24 07:24:50', 'Florence Agyekum', '2023-07-24', 0, '0'),
(610, '64be2eb3dd834', 'duvet large', 1, 'Kate', '0243914750', 'female', 'Cash', 0, 30, 30, 0, '2023-07-24 07:56:35', 'Florence Agyekum', '2023-07-24', 0, '0'),
(611, '64be2f95d1a3c', 'shirt - washing & ironing', 6, 'Mr Edward', '0264360004', 'male', 'MOMO', 0, 10, 60, 0, '2023-07-24 08:00:21', 'Florence Agyekum', '2023-07-24', 0, '0'),
(612, '64be3086d87a1', 'slit and kaba washing&ironing ', 2, 'Enestina', '0559091523', 'female', 'Cash', 0, 18, 85, 0, '2023-07-24 08:04:22', 'Florence Agyekum', '2023-07-24', 0, '0'),
(613, '64be3086d87a1', ' complete suit (ladies) washing&ironing', 1, 'Enestina', '0559091523', 'female', 'Cash', 0, 25, 85, 0, '2023-07-24 08:04:22', 'Florence Agyekum', '2023-07-24', 0, '0'),
(614, '64be3086d87a1', 'dress washing&ironing', 2, 'Enestina', '0559091523', 'female', 'Cash', 0, 12, 85, 0, '2023-07-24 08:04:22', 'Florence Agyekum', '2023-07-24', 0, '0'),
(615, '64be335751bb7', 'suit jacket (Ladies) washing&ironing', 2, 'Ernestina', '0559091523', 'female', 'Cash', 0, 18, 96, 0, '2023-07-24 08:16:23', 'Florence Agyekum', '2023-07-24', 0, '0'),
(616, '64be335751bb7', 'slit and kaba washing&ironing ', 2, 'Ernestina', '0559091523', 'female', 'Cash', 0, 18, 96, 0, '2023-07-24 08:16:23', 'Florence Agyekum', '2023-07-24', 0, '0'),
(617, '64be335751bb7', 'dress washing&ironing', 2, 'Ernestina', '0559091523', 'female', 'Cash', 0, 12, 96, 0, '2023-07-24 08:16:23', 'Florence Agyekum', '2023-07-24', 0, '0'),
(618, '64be343bdeeff', 'Lacoste washing&ironing', 2, 'Senyo', '0244976212', 'male', 'MOMO', 0, 6, 42, 0, '2023-07-24 08:20:11', 'Florence Agyekum', '2023-07-24', 0, '0'),
(619, '64be343bdeeff', 'shirt - washing & ironing', 3, 'Senyo', '0244976212', 'male', 'MOMO', 0, 10, 42, 0, '2023-07-24 08:20:11', 'Florence Agyekum', '2023-07-24', 0, '0'),
(620, '64be59a39e55c', 'complete kaftan washing&ironing', 1, 'Ps  Gideon', '0244891900', 'male', 'Cash', 0, 20, 38, 0, '2023-07-24 10:59:47', 'Florence Agyekum', '2023-07-24', 0, '0'),
(621, '64be59a39e55c', 'T shirts(washing &ironing)', 2, 'Ps  Gideon', '0244891900', 'male', 'Cash', 0, 6, 38, 0, '2023-07-24 10:59:47', 'Florence Agyekum', '2023-07-24', 0, '0'),
(622, '64be59a39e55c', 'Lacoste washing&ironing', 1, 'Ps  Gideon', '0244891900', 'male', 'Cash', 0, 6, 38, 0, '2023-07-24 10:59:47', 'Florence Agyekum', '2023-07-24', 0, '0'),
(623, '64be648522134', 'complete suit  ironing', 1, 'kwesi Dennis', '0552532423', 'male', 'Cash', 0, 18, 18, 18, '2023-07-24 11:46:13', 'Florence Agyekum', '2023-07-24', 0, '0'),
(624, '64be71fd8d217', 'shirt - washing & ironing', 6, 'Mr Ayerno', '0208114308', 'male', 'Cash', 0, 10, 70, 70, '2023-07-24 12:43:41', 'Florence Agyekum', '2023-07-24', 0, '0'),
(625, '64be71fd8d217', 'Trouser washing&ironing', 1, 'Mr Ayerno', '0208114308', 'male', 'Cash', 0, 10, 70, 70, '2023-07-24 12:43:41', 'Florence Agyekum', '2023-07-24', 0, '0'),
(626, '64be7407d0ee5', 'complete kaftan washing&ironing', 1, 'Nelly', '0553084454', 'male', 'MOMO', 0, 20, 20, 0, '2023-07-24 12:52:23', 'Florence Agyekum', '2023-07-24', 0, '0'),
(627, '64be850b023a4', 'shirt - washing & ironing', 7, 'Aunty  Diana', '0244363064', 'female', 'Cash', 0, 10, 196, 0, '2023-07-24 14:04:59', 'Florence Agyekum', '2023-07-24', 0, '0'),
(628, '64be850b023a4', 'Trouser washing&ironing', 5, 'Aunty  Diana', '0244363064', 'female', 'Cash', 0, 10, 196, 0, '2023-07-24 14:04:59', 'Florence Agyekum', '2023-07-24', 0, '0'),
(629, '64be850b023a4', 'tracksuit pant washing&ironing ', 1, 'Aunty  Diana', '0244363064', 'female', 'Cash', 0, 10, 196, 0, '2023-07-24 14:04:59', 'Florence Agyekum', '2023-07-24', 0, '0'),
(630, '64be850b023a4', 'slit and kaba washing&ironing ', 1, 'Aunty  Diana', '0244363064', 'female', 'Cash', 0, 18, 196, 0, '2023-07-24 14:04:59', 'Florence Agyekum', '2023-07-24', 0, '0'),
(631, '64be850b023a4', 'complete suit  washinng&ironing', 1, 'Aunty  Diana', '0244363064', 'female', 'Cash', 0, 30, 196, 0, '2023-07-24 14:04:59', 'Florence Agyekum', '2023-07-24', 0, '0'),
(632, '64be850b023a4', 'suit jacket (Ladies) washing&ironing', 1, 'Aunty  Diana', '0244363064', 'female', 'Cash', 0, 18, 196, 0, '2023-07-24 14:04:59', 'Florence Agyekum', '2023-07-24', 0, '0'),
(633, '64be95e2672cd', 'curtains(1&haif yards)', 5, 'Telvin', '0544241591', 'male', 'Cash', 0, 12, 100, 50, '2023-07-24 15:16:50', 'Florence Agyekum', '2023-07-24', 0, '0'),
(634, '64be95e2672cd', 'curtains(2&haif yards)', 2, 'Telvin', '0544241591', 'male', 'Cash', 0, 20, 100, 50, '2023-07-24 15:16:50', 'Florence Agyekum', '2023-07-24', 0, '0'),
(635, '64be98a913f7e', 'duvet small', 1, 'Ray', '0554605519', 'male', 'Cash', 0, 20, 20, 0, '2023-07-24 15:28:41', 'Florence Agyekum', '2023-07-24', 0, '0'),
(636, '64be9bdff0035', 'pillow', 3, 'Bernard', '0244804505', 'male', 'Cash', 0, 15, 191, 0, '2023-07-24 15:42:23', 'Florence Agyekum', '2023-07-24', 0, '0'),
(637, '64be9bdff0035', 'towel small ', 7, 'Bernard', '0244804505', 'male', 'Cash', 0, 8, 191, 0, '2023-07-24 15:42:23', 'Florence Agyekum', '2023-07-24', 0, '0'),
(638, '64be9bdff0035', 'towel large', 3, 'Bernard', '0244804505', 'male', 'Cash', 0, 15, 191, 0, '2023-07-24 15:42:23', 'Florence Agyekum', '2023-07-24', 0, '0'),
(639, '64be9bdff0035', 'towel large', 3, 'Bernard', '0244804505', 'male', 'Cash', 0, 15, 191, 0, '2023-07-24 15:42:23', 'Florence Agyekum', '2023-07-24', 0, '0'),
(640, '64beaf10b3186', 'Door Mat', 1, 'Jate', '0207279090', 'female', 'Cash', 0, 25, 59, 0, '2023-07-24 17:04:16', 'Florence Agyekum', '2023-07-24', 0, '0'),
(641, '64beaf10b3186', 'towel medium', 1, 'Jate', '0207279090', 'female', 'Cash', 0, 10, 59, 0, '2023-07-24 17:04:16', 'Florence Agyekum', '2023-07-24', 0, '0'),
(642, '64beaf10b3186', 'pillow case', 4, 'Jate', '0207279090', 'female', 'Cash', 0, 3, 59, 0, '2023-07-24 17:04:16', 'Florence Agyekum', '2023-07-24', 0, '0'),
(643, '64beaf10b3186', 'bedsheet medium', 1, 'Jate', '0207279090', 'female', 'Cash', 0, 12, 59, 0, '2023-07-24 17:04:16', 'Florence Agyekum', '2023-07-24', 0, '0'),
(644, '64beb27ab6b83', 'complete suit  washinng&ironing', 1, 'Tingan', '0243971292', 'male', 'Cash', 0, 30, 34, 0, '2023-07-24 17:18:50', 'Florence Agyekum', '2023-07-24', 0, '0'),
(645, '64beb27ab6b83', 'boxer washing&ironing', 1, 'Tingan', '0243971292', 'male', 'Cash', 0, 4, 34, 0, '2023-07-24 17:18:50', 'Florence Agyekum', '2023-07-24', 0, '0'),
(646, '64beb43ba11a7', 'duvet small', 1, 'Cynthia', '0243556200', 'female', 'Cash', 0, 20, 20, 0, '2023-07-24 17:26:19', 'Florence Agyekum', '2023-07-24', 0, '0'),
(647, '64beb4f1688f8', 'bedsheet small', 1, 'Utra  Sound', '0559404673', 'male', 'Cash', 0, 10, 10, 0, '2023-07-24 17:29:21', 'Florence Agyekum', '2023-07-24', 0, '0'),
(648, '64beb5b174811', 'shirt - washing & ironing', 2, 'Prince', '0596611336', 'male', 'Cash', 0, 10, 20, 0, '2023-07-24 17:32:33', 'Florence Agyekum', '2023-07-24', 0, '0'),
(649, '64beb802cd4f6', 'duvet medium', 2, 'Kwesi', '0205734721', 'male', 'Cash', 0, 25, 128, 50, '2023-07-24 17:42:26', 'Florence Agyekum', '2023-07-24', 0, '0'),
(650, '64beb802cd4f6', 'bedsheet medium', 2, 'Kwesi', '0205734721', 'male', 'Cash', 0, 12, 128, 50, '2023-07-24 17:42:26', 'Florence Agyekum', '2023-07-24', 0, '0'),
(651, '64beb802cd4f6', 'towel large', 2, 'Kwesi', '0205734721', 'male', 'Cash', 0, 15, 128, 50, '2023-07-24 17:42:26', 'Florence Agyekum', '2023-07-24', 0, '0'),
(652, '64beb802cd4f6', 'pillow case', 8, 'Kwesi', '0205734721', 'male', 'Cash', 0, 3, 128, 50, '2023-07-24 17:42:26', 'Florence Agyekum', '2023-07-24', 0, '0'),
(653, '64bebf08d7bf4', 'T shirts(ironing)', 7, 'Justice', '0244765478', 'male', 'Cash', 0, 3, 113, 0, '2023-07-24 18:12:24', 'Florence Agyekum', '2023-07-24', 0, '0'),
(654, '64bebf08d7bf4', 'shirt ironing', 3, 'Justice', '0244765478', 'male', 'Cash', 0, 6, 113, 0, '2023-07-24 18:12:24', 'Florence Agyekum', '2023-07-24', 0, '0'),
(655, '64bebf08d7bf4', 'track suit pant ironing ', 2, 'Justice', '0244765478', 'male', 'Cash', 0, 6, 113, 0, '2023-07-24 18:12:24', 'Florence Agyekum', '2023-07-24', 0, '0'),
(656, '64bebf08d7bf4', 'jalabia  ironing', 1, 'Justice', '0244765478', 'male', 'Cash', 0, 8, 113, 0, '2023-07-24 18:12:24', 'Florence Agyekum', '2023-07-24', 0, '0'),
(657, '64bebf08d7bf4', 'towel medium', 1, 'Justice', '0244765478', 'male', 'Cash', 0, 10, 113, 0, '2023-07-24 18:12:24', 'Florence Agyekum', '2023-07-24', 0, '0'),
(658, '64bebf08d7bf4', 'bedsheet medium', 2, 'Justice', '0244765478', 'male', 'Cash', 0, 12, 113, 0, '2023-07-24 18:12:24', 'Florence Agyekum', '2023-07-24', 0, '0'),
(659, '64bebf08d7bf4', 'pillow case', 6, 'Justice', '0244765478', 'male', 'Cash', 0, 3, 113, 0, '2023-07-24 18:12:24', 'Florence Agyekum', '2023-07-24', 0, '0'),
(660, '64bebf08d7bf4', 'boxer ironing', 1, 'Justice', '0244765478', 'male', 'Cash', 0, 2, 113, 0, '2023-07-24 18:12:24', 'Florence Agyekum', '2023-07-24', 0, '0'),
(661, '64becdeba7e00', 'duvet medium', 1, 'Gideon', '0549799865', 'male', 'Cash', 0, 25, 31, 31, '2023-07-24 19:15:55', 'Florence Agyekum', '2023-07-24', 0, '0'),
(662, '64becdeba7e00', 'pillow case', 2, 'Gideon', '0549799865', 'male', 'Cash', 0, 3, 31, 31, '2023-07-24 19:15:55', 'Florence Agyekum', '2023-07-24', 0, '0'),
(663, '64bed25aad30c', 'complete suit  washinng&ironing', 1, 'King Charles', '0267011101', 'male', 'Cash', 0, 30, 160, 0, '2023-07-24 19:34:50', 'Florence Agyekum', '2023-07-24', 0, '0'),
(664, '64bed25aad30c', 'suit jacket (Men) washing&ironing', 2, 'King Charles', '0267011101', 'male', 'Cash', 0, 20, 160, 0, '2023-07-24 19:34:50', 'Florence Agyekum', '2023-07-24', 0, '0'),
(665, '64bed25aad30c', 'dress washing&ironing', 1, 'King Charles', '0267011101', 'male', 'Cash', 0, 12, 160, 0, '2023-07-24 19:34:50', 'Florence Agyekum', '2023-07-24', 0, '0'),
(666, '64bed25aad30c', 'suit jacket (Ladies) washing&ironing', 1, 'King Charles', '0267011101', 'male', 'Cash', 0, 18, 160, 0, '2023-07-24 19:34:50', 'Florence Agyekum', '2023-07-24', 0, '0'),
(667, '64bed25aad30c', 'shirt - washing & ironing', 6, 'King Charles', '0267011101', 'male', 'Cash', 0, 10, 160, 0, '2023-07-24 19:34:50', 'Florence Agyekum', '2023-07-24', 0, '0'),
(668, '64bf98c867681', 'cloth(kente,african print)', 1, 'one  million', '0201482964', 'male', 'Cash', 0, 30, 30, 0, '2023-07-25 09:41:28', 'Florence Agyekum', '2023-07-25', 0, '0'),
(669, '64bf995a0f276', 'cloth(kente,african print)', 1, '1 Million', '0596077718', 'male', 'Cash', 0, 30, 30, 0, '2023-07-25 09:43:54', 'Florence Agyekum', '2023-07-25', 0, '0'),
(670, '64bf9bed05398', 'bedsheet medium', 2, 'Jandel', '0206445410', 'male', 'Cash', 0, 12, 39, 0, '2023-07-25 09:54:53', 'Florence Agyekum', '2023-07-25', 0, '0'),
(671, '64bf9bed05398', 'Morning   coat', 1, 'Jandal', '0206445410', 'male', 'Cash', 0, 15, 39, 0, '2023-07-25 09:54:53', 'Florence Agyekum', '2023-07-25', 0, '0'),
(672, '64bf9e0704dc5', 'duvet medium', 1, 'Cynthia', '0201482964', 'female', 'Cash', 0, 25, 25, 0, '2023-07-25 10:03:51', 'Florence Agyekum', '2023-07-25', 0, '0'),
(673, '64bf9e9262319', 'bedsheet medium', 1, 'Ultra sound', '0559404673', 'male', 'MOMO', 0, 12, 12, 0, '2023-07-25 10:06:10', 'Florence Agyekum', '2023-07-25', 0, '0'),
(674, '64bf9f52aaebf', 'shirt - washing & ironing', 2, 'Bright', '0243556200', 'male', 'Cash', 0, 10, 20, 0, '2023-07-25 10:09:22', 'Florence Agyekum', '2023-07-25', 0, '0'),
(675, '64bfb12c5cfe1', 'Blanket(medium)', 1, 'Rashida', '0599957982', 'male', 'MOMO', 0, 25, 31, 0, '2023-07-25 11:25:32', 'Florence Agyekum', '2023-07-25', 0, '0'),
(676, '64bfb12c5cfe1', 'pillow case', 2, 'Rashida', '0599957982', 'male', 'MOMO', 0, 3, 31, 0, '2023-07-25 11:25:32', 'Florence Agyekum', '2023-07-25', 0, '0'),
(677, '64bfdd0f1255e', 'Dress(B)', 1, 'SD', '0546016118', 'male', 'Cash', 0, 20, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(678, '64bfdd0f1255e', 'Dress(s)', 3, 'SD', '0546016118', 'male', 'Cash', 0, 15, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(679, '64bfdd0f1255e', 'dress washing&ironing', 9, 'SD', '0546016118', 'male', 'Cash', 0, 12, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(680, '64bfdd0f1255e', 'slit and kaba washing&ironing ', 1, 'SD', '0546016118', 'male', 'Cash', 0, 18, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(681, '64bfdd0f1255e', 'Top Only', 1, 'SD', '0546016118', 'male', 'Cash', 0, 7, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(682, '64bfdd0f1255e', 'bedsheet medium', 1, 'SD', '0546016118', 'male', 'Cash', 0, 12, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(683, '64bfdd0f1255e', 'shirt - washing & ironing', 5, 'SD', '0546016118', 'male', 'Cash', 0, 10, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(684, '64bfdd0f1255e', 'complete kaftan washing&ironing', 2, 'SD', '0546016118', 'male', 'Cash', 0, 20, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(685, '64bfdd0f1255e', 'Top and down (washing and ironing)', 1, 'SD', '0546016118', 'male', 'Cash', 0, 18, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(686, '64bfdd0f1255e', 'Trouser washing&ironing', 4, 'SD', '0546016118', 'male', 'Cash', 0, 10, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(687, '64bfdd0f1255e', 'Lacoste washing&ironing', 4, 'SD', '0546016118', 'male', 'Cash', 0, 6, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(688, '64bfdd0f1255e', 'T shirts(washing &ironing)', 5, 'SD', '0546016118', 'male', 'Cash', 0, 6, 412, 0, '2023-07-25 14:32:47', 'Florence Agyekum', '2023-07-25', 0, '0'),
(689, '64bfefafce4f8', 'suit jacket (Men) washing&ironing', 1, 'Mable', '0248294879', 'female', 'Cash', 0, 20, 20, 20, '2023-07-25 15:52:15', 'Florence Agyekum', '2023-07-25', 0, '0'),
(690, '64bff2e030fdd', 'Bra', 1, 'AmaCBG', '0248619895', 'female', 'Cash', 0, 5, 36, 0, '2023-07-25 16:05:52', 'Florence Agyekum', '2023-07-25', 0, '0'),
(691, '64bff2e030fdd', 'Bra', 1, 'AmaCBG', '0248619895', 'female', 'Cash', 0, 5, 36, 0, '2023-07-25 16:05:52', 'Florence Agyekum', '2023-07-25', 0, '0'),
(692, '64bff2e030fdd', 'shirt - washing & ironing', 1, 'AmaCBG', '0248619895', 'female', 'Cash', 0, 10, 36, 0, '2023-07-25 16:05:52', 'Florence Agyekum', '2023-07-25', 0, '0'),
(693, '64bff2e030fdd', 'skirt - washing & ironing', 1, 'AmaCBG', '0248619895', 'female', 'Cash', 0, 8, 36, 0, '2023-07-25 16:05:52', 'Florence Agyekum', '2023-07-25', 0, '0'),
(694, '64bff2e030fdd', 'towel small ', 1, 'AmaCBG', '0248619895', 'female', 'Cash', 0, 8, 36, 0, '2023-07-25 16:05:52', 'Florence Agyekum', '2023-07-25', 0, '0'),
(695, '64c01cfb7d363', 'shirt ironing', 1, 'Eugene', '0553776199', 'male', 'MOMO', 0, 6, 6, 6, '2023-07-25 19:05:31', 'Florence Agyekum', '2023-07-25', 0, '0'),
(696, '64c0e1cd71a98', 'bedsheet medium', 5, 'Patrick', '0243385334', 'male', 'Cash', 0, 12, 96, 96, '2023-07-26 09:05:17', 'Florence Agyekum', '2023-07-26', 0, '0'),
(697, '64c0e1cd71a98', 'pillow case', 2, 'Patrick', '0243385334', 'male', 'Cash', 0, 3, 96, 96, '2023-07-26 09:05:17', 'Florence Agyekum', '2023-07-26', 0, '0'),
(698, '64c0e1cd71a98', 'towel medium', 3, 'Patrick', '0243385334', 'male', 'Cash', 0, 10, 96, 96, '2023-07-26 09:05:17', 'Florence Agyekum', '2023-07-26', 0, '0'),
(699, '64c0f163c246d', 'shirt - washing & ironing', 5, 'Mr Asare', '0244366137', 'female', 'Cash', 0, 10, 145, 0, '2023-07-26 10:11:47', 'Florence Agyekum', '2023-07-26', 0, '0'),
(700, '64c0f163c246d', 'Trouser washing&ironing', 1, 'Mr Asare', '0244366137', 'female', 'Cash', 0, 10, 145, 0, '2023-07-26 10:11:47', 'Florence Agyekum', '2023-07-26', 0, '0'),
(701, '64c0f163c246d', 'wedding gown(washing)', 1, 'Mr Asare', '0244366137', 'female', 'Cash', 0, 85, 145, 0, '2023-07-26 10:11:47', 'Florence Agyekum', '2023-07-26', 0, '0'),
(702, '64c0fb996b028', 'complete kaftan washing&ironing', 1, 'Jeremiah', '0247708354', 'male', 'Cash', 0, 20, 162, 0, '2023-07-26 10:55:21', 'Florence Agyekum', '2023-07-26', 0, '0'),
(703, '64c0fb996b028', 'Trouser washing&ironing', 4, 'Jeremiah', '0247708354', 'male', 'Cash', 0, 10, 162, 0, '2023-07-26 10:55:21', 'Florence Agyekum', '2023-07-26', 0, '0'),
(704, '64c0fb996b028', 'shirt - washing & ironing', 6, 'Jeremiah', '0247708354', 'male', 'Cash', 0, 10, 162, 0, '2023-07-26 10:55:21', 'Florence Agyekum', '2023-07-26', 0, '0'),
(705, '64c0fb996b028', 'singlet washing&ironing', 3, 'Jeremiah', '0247708354', 'male', 'Cash', 0, 4, 162, 0, '2023-07-26 10:55:21', 'Florence Agyekum', '2023-07-26', 0, '0'),
(706, '64c0fb996b028', 'T shirts(washing &ironing)', 4, 'Jeremiah', '0247708354', 'male', 'Cash', 0, 6, 162, 0, '2023-07-26 10:55:21', 'Florence Agyekum', '2023-07-26', 0, '0'),
(707, '64c0fb996b028', 'Lacoste washing&ironing', 1, 'Jeremiah', '0247708354', 'male', 'Cash', 0, 6, 162, 0, '2023-07-26 10:55:21', 'Florence Agyekum', '2023-07-26', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `previousbalance`
--

CREATE TABLE `previousbalance` (
  `id` int(255) NOT NULL,
  `previousAmount` int(255) NOT NULL,
  `Balance_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `previousbalance`
--

INSERT INTO `previousbalance` (`id`, `previousAmount`, `Balance_date`) VALUES
(2, 1319, '2023-07-10 17:28:47');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `unitprice` int(255) NOT NULL,
  `dates` varchar(255) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `supplier` varchar(255) NOT NULL,
  `invoice` int(255) NOT NULL,
  `receipt_number` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `loggedby` varchar(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `items`, `unitprice`, `dates`, `purchase_date`, `supplier`, `invoice`, `receipt_number`, `quantity`, `loggedby`, `total`) VALUES
(49, 'bleach', 1, '2023-07-10', '2023-07-10 17:27:38', 'burstclean', 455, 333, 3, 'Philip Olumide ', 644),
(48, 'doreen', 1, '2023-07-10', '2023-07-10 17:27:38', 'burstclean', 455, 333, 190, 'Philip Olumide ', 641),
(47, 'liquid soap', 1, '2023-07-10', '2023-07-10 17:27:38', 'burstclean', 455, 333, 250, 'Philip Olumide ', 451),
(46, 'prepaid', 1, '2023-07-10', '2023-07-10 17:27:38', 'burstclean', 455, 333, 201, 'Philip Olumide ', 201),
(45, 'bolt', 1, '2023-07-08', '2023-07-08 17:08:01', 'burstclean', 6677, 4, 19, 'Philip Olumide ', 599),
(44, 'boss', 1, '2023-07-08', '2023-07-08 17:08:01', 'burstclean', 6677, 4, 580, 'Philip Olumide ', 580);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completedorders`
--
ALTER TABLE `completedorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `previousbalance`
--
ALTER TABLE `previousbalance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `completedorders`
--
ALTER TABLE `completedorders`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=708;

--
-- AUTO_INCREMENT for table `previousbalance`
--
ALTER TABLE `previousbalance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
