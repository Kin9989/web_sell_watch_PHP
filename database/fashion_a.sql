-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 10:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(9) NOT NULL,
  `id_order` int(9) NOT NULL,
  `id_pro` int(9) NOT NULL,
  `quantity` int(9) NOT NULL DEFAULT 0,
  `prices` double(10,2) NOT NULL DEFAULT 0.00,
  `size` varchar(5) NOT NULL,
  `name_pro` varchar(50) DEFAULT NULL,
  `img_pro` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catalog`
--

CREATE TABLE `tbl_catalog` (
  `id_catalog_k` int(4) NOT NULL,
  `catalog_name` varchar(50) NOT NULL,
  `prioritize` int(4) NOT NULL DEFAULT 0,
  `display_ctl` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_catalog`
--

INSERT INTO `tbl_catalog` (`id_catalog_k`, `catalog_name`, `prioritize`, `display_ctl`) VALUES
(99, 'G-Shock', 1, 1),
(100, 'CITIZEN ', 1, 1),
(101, 'Pierre Lannier', 1, 1),
(102, 'Hublot ', 1, 1),
(103, 'Orient ', 1, 1),
(104, 'Montblanc', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ban` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `fname`, `lname`, `sex`, `address`, `email`, `phone`, `user`, `password`, `ban`) VALUES
(32, 'A', 'Nguyễn Văn ', 1, 'DHVL', 'ngvana@gmail.com', '09213123', 'nhatthuong1234', '123456', 1),
(39, 'B', 'Nguyễn Văn ', 1, '123', '20022@gmail.com', '123213321', 'adminthuong', '123456', 0),
(40, 'Ngoc B', 'Nguyen', 1, '1', '2002@gmail.com', '123213123', 'adminthuong42342', '123456', 1),
(41, 'ha', 'Hi', 1, '12323', 'han@gmail.com', '09233009', 'test112', '123', 0),
(42, 'Huynh', 'Sy', 1, 'TPHCM', 'Sy@gmail.com', '123123', 'Sy_123', '123456', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(9) NOT NULL,
  `invoice_id` varchar(20) NOT NULL,
  `total_prices` double(10,0) NOT NULL DEFAULT 0,
  `payment` tinyint(1) NOT NULL DEFAULT 1,
  `id_user` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL DEFAULT 'Not note',
  `due_date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'Pending',
  `employee_pr` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `invoice_id`, `total_prices`, `payment`, `id_user`, `fname`, `lname`, `phone`, `email`, `address`, `notes`, `due_date`, `status`, `employee_pr`) VALUES
(149, 'KINGSMAN406076', 5500000, 0, 42, 'Huynh', 'Sy', '123123', 'Sy@gmail.com', 'TPHCM', 'Not note', '2023-11-25', 'Pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(6) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `product_img` varchar(50) NOT NULL,
  `product_prices` int(10) NOT NULL DEFAULT 0,
  `catalog_id` int(4) NOT NULL,
  `employee_entry` int(11) NOT NULL,
  `entry_date` date NOT NULL DEFAULT current_timestamp(),
  `sup_id` int(11) NOT NULL,
  `view` tinyint(4) NOT NULL DEFAULT 0,
  `special` tinyint(4) NOT NULL DEFAULT 0,
  `old_prices` int(11) NOT NULL DEFAULT 0,
  `description` varchar(255) NOT NULL,
  `size` varchar(5) NOT NULL DEFAULT 'L'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `product_name`, `quantity`, `product_img`, `product_prices`, `catalog_id`, `employee_entry`, `entry_date`, `sup_id`, `view`, `special`, `old_prices`, `description`, `size`) VALUES
(104, 'Đồng Hồ G-Shock GA-2100SB-1ADR  ', 23, 'G-shock1.jpg', 2487000, 99, 1, '2023-11-29', 14, 1, 1, 4145000, 'Đồng hồ điện tử cho Nam', '45.5'),
(105, 'Đồng Hồ G-Shock GMA-S2100BA-4ADR   ', 20, 'G-shock2.jpg', 2902000, 99, 1, '2023-11-29', 14, 2, 2, 3628000, 'Đồng hồ điện tử cho Nữ', '42.9 '),
(106, 'Đồng Hồ G-SHOCK GD-100GB-1DR  ', 22, 'GS3.jpg', 3357000, 99, 1, '2023-11-29', 14, 3, 3, 4197000, 'Đồng hồ điện tử cho Nam', '51.2'),
(107, 'Đồng Hồ CITIZEN C7 NH8397-80H ', 21, 'citizen2.jpg', 7341000, 100, 1, '2023-11-29', 14, 1, 1, 9177000, 'Đồng hồ thời trang cho Nam', '40'),
(108, 'Đồng Hồ Citizen Tsuyosa Pantone  NJ0158-89Y ', 38, 'citizen3.jpg', 9508000, 100, 1, '2023-11-29', 14, 2, 2, 11885000, 'Đồng hồ thời trang cho Nam', '40'),
(109, 'Đồng Hồ Citizen C7 NH8394-70H ', 60, 'citizen1.jpg', 9177000, 100, 1, '2023-11-29', 14, 3, 3, 0, 'Đồng hồ thời trang cho Nam', '40'),
(110, 'Đồng Hồ Citizen C7 NH8390-71L', 30, 'citizen4.jpg', 8177000, 100, 1, '2023-11-29', 14, 4, 4, 0, 'Đồng hồ thời trang cho Nam', '40'),
(111, 'Đồng Hồ Casio  GBD-200SM-1A5DR ', 24, 'GS4.jpg', 5441000, 99, 1, '2023-11-29', 14, 4, 4, 0, 'Đồng hồ thời trang cho Nam', '46'),
(112, 'Đồng Hồ Pierre Lannier 255F466 ', 22, 'PL1.jpg', 6670000, 101, 1, '2023-11-29', 14, 1, 1, 0, 'Đồng hồ thời trang cho Nam', '42'),
(113, 'Đồng Hồ Pierre Lannier 254C433', 18, 'PL2.jpg', 6000000, 101, 1, '2023-11-29', 14, 2, 2, 0, 'Đồng hồ thời trang cho Nam', '42'),
(114, 'Đồng Hồ Pierre Lannier 318B468 ', 26, 'PL3.jpg', 9000000, 101, 1, '2023-11-29', 14, 3, 3, 0, 'Đồng hồ thời trang cho Nam', '42'),
(115, 'Đồng Hồ Pierre Lannier 203F439', 10, 'PL4.jpg', 3670000, 101, 1, '2023-11-29', 14, 4, 4, 0, 'Đồng hồ thời trang cho Nam', '42'),
(116, 'Đồng Hồ Hublot 642.NM.0170.RX', 15, 'H1.jpg', 539000000, 102, 1, '2023-11-29', 14, 1, 1, 0, 'Đồng hồ thời trang cho Nam', '42'),
(117, 'Đồng Hồ Hublot 341.PX.7180.LR.1204', 9, 'H2.jpg', 760000000, 102, 1, '2023-11-29', 14, 2, 2, 0, 'Đồng hồ thời trang cho Nam', '42'),
(118, 'Đồng Hồ Hublot  542.NX.1171.LR.1104', 5, 'H3.jpg', 290000000, 102, 1, '2023-11-29', 14, 3, 3, 0, 'Đồng hồ thời trang cho Nam', '42'),
(119, 'Đồng Hồ Hublot 341.XN.1280.NR.1204', 52, 'H4.jpg', 640000000, 102, 1, '2023-11-29', 14, 4, 4, 0, 'Đồng hồ thời trang cho Nam', '42'),
(120, 'Đồng Hồ Orient FAG00002W0', 32, 'O1.jpg', 8690000, 103, 1, '2023-11-29', 14, 1, 1, 0, 'Đồng hồ cơ cho Nam', '42.5'),
(121, 'Đồng Hồ Orient RA-AR0001S10B', 5, 'O2.jpg', 11760000, 103, 1, '2023-11-29', 14, 2, 2, 0, 'Đồng hồ cơ cho Nam', '42.5'),
(122, 'Đồng Hồ Orient RA-AA0B02R19B', 23, 'O3.jpg', 7800000, 103, 1, '2023-11-29', 14, 3, 3, 0, 'Đồng hồ cơ cho Nam', '42.5'),
(123, 'Đồng Hồ Orient RA-AR0005Y10B', 24, 'O4.jpg', 9050000, 103, 1, '2023-11-29', 14, 4, 4, 0, 'Đồng hồ cơ cho Nam', '42.5'),
(124, 'Đồng Hồ Montblanc - 114336', 25, 'MB1.jpg', 50000000, 104, 1, '2023-11-29', 14, 1, 1, 0, 'Đồng hồ thời trang cho Nam', '42'),
(125, 'Đồng hồ Montblanc - 111624 ', 24, 'Mb2.jpg', 62000000, 104, 1, '2023-11-29', 14, 2, 2, 0, 'Đồng hồ thời trang cho Nam', '42.5'),
(126, 'Đồng hồ Montblanc - 107340', 26, 'Mb3.jpg', 132000000, 104, 1, '2023-11-29', 14, 3, 3, 0, 'Đồng hồ thời trang cho Nam', '42.5'),
(127, 'Đồng hồ Montblan - 111185', 44, 'Mb4.jpg', 200000000, 104, 1, '2023-11-29', 14, 4, 4, 0, 'Đồng hồ thời trang cho Nam', '42.5'),
(128, 'Đồng Hồ Casio GA-2200M-1ADR  ', 11, 'GS5.jpg', 3310000, 99, 1, '2023-11-29', 14, 5, 5, 0, 'Đồng hồ thời trang cho Nam', '47'),
(129, 'Đồng Hồ Casio GA-2100SRS-7ADR', 23, 'GS7.jpg', 3333000, 99, 1, '2023-11-29', 14, 6, 6, 0, 'Đồng hồ thời trang cho Nam', '45.4'),
(130, 'Đồng Hồ Casio GA-900-1ADR ', 20, 'GS6.jpg', 3050000, 99, 1, '2023-11-29', 14, 7, 7, 0, 'Đồng hồ thời trang cho Nam', '49.5'),
(131, 'Đồng Hồ Casio GA-100-1A2DR ', 4, 'GS8.jpg', 2950000, 99, 1, '2023-11-29', 14, 8, 8, 0, 'Đồng hồ thời trang cho Nam', '45.5'),
(132, 'Đồng Hồ nam Citizen Eco-Drive AR5004-59H  Dây Kim Loại - Viền Mặt Mạ Vàng Hồng', 12, 'C5.jpg', 79058000, 100, 1, '2023-11-29', 14, 5, 5, 0, 'Đồng hồ thời trang cho Nam', '42'),
(133, 'Đồng Hồ Nữ Citizen EE4019-11A Dây Da Thật - Kết Nối Bluetooth', 30, 'C6.jpg', 4990000, 100, 1, '2023-11-29', 14, 6, 6, 0, 'Đồng hồ thời trang cho Nữ', '39'),
(134, 'Đồng Hồ Nam Citizen EcoDrive Bluetooth BZ1045-05E Dây Nhựa - Mặt Kính Sapphire', 63, 'C7.jpg', 22058000, 100, 1, '2023-11-29', 14, 7, 7, 0, 'Đồng hồ thời trang cho Nam', '42.5'),
(135, 'Đồng Hồ Nữ Citizen FRA36-2431 Dây đeo Kim loại - Mặt thủy tinh Pha lê', 10, 'C8.jpg', 3408000, 100, 1, '2023-11-29', 14, 8, 8, 0, 'Đồng hồ thời trang cho Nữ', '39'),
(136, 'Đồng Hồ Pierre Lannier 317B131', 9, 'PL5.jpg', 8170000, 101, 1, '2023-11-29', 14, 5, 5, 0, 'Đồng hồ thời trang cho Nam', '42'),
(137, 'Đồng Hồ Pierre Lannier 258L168', 10, 'PL6.jpg', 4500000, 101, 1, '2023-11-29', 14, 6, 6, 0, 'Đồng hồ thời trang cho Nam', '42'),
(138, 'Đồng Hồ Pierre Lannier 229F468', 26, 'PL7.jpg', 7000000, 101, 1, '2023-11-29', 14, 7, 7, 0, 'Đồng hồ thời trang cho Nam', '42.5'),
(139, 'Đồng Hồ Pierre Lannier 200F484', 28, 'PL8.jpg', 4170000, 101, 1, '2023-11-29', 14, 8, 8, 0, 'Đồng hồ thời trang cho Nam', '42.5'),
(140, 'Đồng Hồ Orient 42.8mm Nam RA-TX0201L10B', 34, 'O5.jpg', 6530000, 103, 1, '2023-11-29', 14, 5, 5, 0, 'Đồng hồ thời trang cho Nam', '42.8'),
(141, 'Đồng Hồ Orient RE-AU0005L00B', 23, 'O6.jpg', 13020000, 103, 1, '2023-11-29', 14, 6, 6, 18600000, 'Đồng hồ thời trang cho Nam', '42.5'),
(142, 'Đồng Hồ Orient RF-QA0006S10B', 32, 'O7.jpg', 2510000, 103, 1, '2023-11-29', 14, 7, 7, 3350000, 'Đồng hồ thời trang cho Nữ', '37'),
(143, 'Đồng Hồ Orient RE-AV0120L00B', 21, 'O8.jpg', 19880000, 103, 1, '2023-11-29', 14, 8, 8, 28400000, 'Đồng hồ thời trang cho Nam', '42'),
(144, 'Đồng Hồ Montblanc -114854', 13, 'MB5.jpg', 6800000, 104, 1, '2023-11-29', 14, 5, 5, 52000000, 'Đồng hồ thời trang cho Nam', '40.5'),
(145, 'Đồng Hồ Montblanc -114366', 33, 'MB6.jpg', 45000000, 104, 1, '2023-11-29', 14, 6, 6, 50000000, 'Đồng hồ thời trang cho Nữ', '32'),
(146, 'Đồng Hồ Montblanc- MB116522', 15, 'MB7.jpg', 35550000, 104, 1, '2023-11-29', 14, 7, 7, 0, 'Đồng hồ thời trang cho Nam', '42'),
(147, 'Đồng Hồ Montblanc  MB117577', 6, 'MB8.jpg', 45000000, 104, 1, '2023-11-29', 14, 8, 8, 50000000, 'Đồng hồ thời trang cho Nam', '40'),
(148, 'Đồng Hồ Hublot - 541.OX.1181.LR.1104', 11, 'H5.jpg', 720000000, 102, 1, '2023-11-29', 14, 5, 5, 0, 'Đồng hồ thời trang cho Nam', '42'),
(149, 'Đồng Hồ Hublot - 641.CI.0180.RX.SEA ', 10, 'H6.jpg', 640000000, 102, 1, '2023-11-29', 14, 6, 6, 0, 'Đồng hồ thời trang cho Nam', '42'),
(150, 'Đồng Hồ Hublot - 361.PX.7180.LR.1204 ', 4, 'H7.jpg', 528000000, 102, 1, '2023-11-29', 14, 7, 7, 0, 'Đồng hồ thời trang cho Nam', '38'),
(151, 'Đồng Hồ Hublot - 662.NX.1170.LR.1204', 14, 'H8.jpg', 385000000, 102, 1, '2023-11-29', 14, 8, 8, 0, 'Đồng hồ thời trang cho Nam', '39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `sup_id` int(11) NOT NULL,
  `sup_name` varchar(255) NOT NULL,
  `sup_address` varchar(255) NOT NULL,
  `sup_bank` int(11) NOT NULL,
  `sup_tax_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`sup_id`, `sup_name`, `sup_address`, `sup_bank`, `sup_tax_code`) VALUES
(14, 'Tick Tock Watch ', 'VN', 9009009, 123),
(16, 'Homes', 'US', 1231231, 123123);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name_us` varchar(50) DEFAULT NULL,
  `address_us` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password_us` varchar(20) NOT NULL,
  `role_us` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name_us`, `address_us`, `email`, `user`, `password_us`, `role_us`) VALUES
(1, 'admin', 'DHVL', '20522000@gm.uit.edu.vn', 'admin', '123456', 1),
(2, 'User unknow', 'Bình Dương', '20521381@gm.uit.edu.vn', 'admin123', '123123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_order` (`id_order`),
  ADD KEY `FK_product` (`id_pro`);

--
-- Indexes for table `tbl_catalog`
--
ALTER TABLE `tbl_catalog`
  ADD PRIMARY KEY (`id_catalog_k`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_employee` (`employee_pr`),
  ADD KEY `FK_client_check` (`id_user`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_product_catalog` (`catalog_id`),
  ADD KEY `fk_employee_entry` (`employee_entry`),
  ADD KEY `fk_supplier` (`sup_id`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `tbl_catalog`
--
ALTER TABLE `tbl_catalog`
  MODIFY `id_catalog_k` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `FK_order` FOREIGN KEY (`id_order`) REFERENCES `tbl_order` (`id`),
  ADD CONSTRAINT `FK_product` FOREIGN KEY (`id_pro`) REFERENCES `tbl_product` (`id_product`);

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `FK_client_check` FOREIGN KEY (`id_user`) REFERENCES `tbl_client` (`id`),
  ADD CONSTRAINT `FK_employee` FOREIGN KEY (`employee_pr`) REFERENCES `tbl_user` (`id`);

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `fk_employee_entry` FOREIGN KEY (`employee_entry`) REFERENCES `tbl_user` (`id`),
  ADD CONSTRAINT `fk_product_catalog` FOREIGN KEY (`catalog_id`) REFERENCES `tbl_catalog` (`id_catalog_k`),
  ADD CONSTRAINT `fk_supplier` FOREIGN KEY (`sup_id`) REFERENCES `tbl_supplier` (`sup_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
