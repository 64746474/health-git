-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2024 at 11:14 AM
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
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `registrationId` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mob` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sdate` date NOT NULL,
  `add1` varchar(255) NOT NULL,
  `state1` varchar(255) NOT NULL,
  `district1` varchar(255) NOT NULL,
  `block1` varchar(255) NOT NULL,
  `postal1` varchar(255) NOT NULL,
  `sysmed` varchar(255) NOT NULL,
  `type11` varchar(255) NOT NULL,
  `type2` varchar(255) NOT NULL,
  `oname` varchar(255) NOT NULL,
  `omob` varchar(255) NOT NULL,
  `ophone` varchar(255) NOT NULL,
  `oemail` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `state2` varchar(255) NOT NULL,
  `district2` varchar(255) NOT NULL,
  `block2` varchar(255) NOT NULL,
  `postal2` varchar(255) NOT NULL,
  `clinical` varchar(255) DEFAULT NULL,
  `poly` varchar(255) DEFAULT NULL,
  `disp` varchar(255) DEFAULT NULL,
  `health` varchar(255) DEFAULT NULL,
  `daycare` varchar(255) DEFAULT NULL,
  `includes` varchar(255) DEFAULT NULL,
  `dentalc` varchar(255) DEFAULT NULL,
  `dentalh` varchar(255) DEFAULT NULL,
  `dialab` varchar(255) DEFAULT NULL,
  `radio` varchar(255) DEFAULT NULL,
  `ultra` varchar(255) DEFAULT NULL,
  `misc` varchar(255) DEFAULT NULL,
  `collec` varchar(255) DEFAULT NULL,
  `collec_no` varchar(255) DEFAULT NULL,
  `allied` varchar(255) DEFAULT NULL,
  `ayur` varchar(255) DEFAULT NULL,
  `yoga` varchar(255) DEFAULT NULL,
  `unani` varchar(255) DEFAULT NULL,
  `stiddra` varchar(255) DEFAULT NULL,
  `homeo` varchar(255) DEFAULT NULL,
  `natura` varchar(255) DEFAULT NULL,
  `ser_1` varchar(255) DEFAULT NULL,
  `spec_1` varchar(255) DEFAULT NULL,
  `spec_2` varchar(255) DEFAULT NULL,
  `spec_3` varchar(255) DEFAULT NULL,
  `med_spec` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `registrationId`, `name`, `mob`, `phone`, `email`, `sdate`, `add1`, `state1`, `district1`, `block1`, `postal1`, `sysmed`, `type11`, `type2`, `oname`, `omob`, `ophone`, `oemail`, `add2`, `state2`, `district2`, `block2`, `postal2`, `clinical`, `poly`, `disp`, `health`, `daycare`, `includes`, `dentalc`, `dentalh`, `dialab`, `radio`, `ultra`, `misc`, `collec`, `collec_no`, `allied`, `ayur`, `yoga`, `unani`, `stiddra`, `homeo`, `natura`, `ser_1`, `spec_1`, `spec_2`, `spec_3`, `med_spec`, `created_at`, `updated_at`) VALUES
(91, 'REGTAS2194', 'Tashi Gyalsan', '5678489903', '987654321', 'nil@gmail.com', '2024-03-13', 'sakti', 'A', '1', '102', '194101', '[\"Allopathy\"]', 'Central Govt.', 'Partnership', 'nilza angmo', '0987654321', '222', 'nil@gmail.com', 'add 123', 'Normal distribution ', 'Normal distribution ', 'Normal distribution ', '110000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '[\"Family Medicine\",\"Physical Medicine Rehabilitation\",\"Sports Medicine\"]', '', '[\"Surgical Oncology\"]', '[\"Immunology\",\"Medical Genetics\"]', NULL, NULL),
(92, '92', 'padma stanzen padma', '1234567651', '1432567541', 'stanzenpadma12345678@gmail.com', '2024-04-02', '1234', 'ladakh', 'leh', '', '', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, '12345', 'stanzen', '2345654789', '7050604934', 'pama@gmail.com', '2024-04-04', 'skalzangling', 'ladakh', 'leh', '104', '194101', '', '', '', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'REGPAD1673', 'padma stanzen', '01234543210', '01234543210', 'stanzenpadma123@gmail.com', '0005-04-13', 't', 'A', '1', '102', '1234', '[\"Allopathy\"]', 'State Govt.', 'Individual Proprietorship', 'thinly', '01234543211', '09622379306', 'stanzenpadma123456@gmail.com', 'skalzangling,leh ladakh', 'Normal distribution ', 'Normal distribution ', 'Normal distribution ', '1234', '[\"Single Practioner\"]', '[\"Consultation Services Only\"]', '[\"Disprnsery\"]', '[\"Health Checkup Center\"]', '[\"Medical\"]', '[\"Hospital Level 1A\"]', '[\"Single Practioner\"]', '[\"Oral and Maxillofacial Surgery\"]', '[\"Pathology\"]', '[\"General Radiology\"]', '[\"Ultrasound\"]', '[\"Electrocardiography (ECG)\"]', '[\"Yes\"]', '1234567', '[\"Audiology\"]', '[\"Aushadh Chikitsa\"]', '[\"Ashtang\"]', '[\"Matab Jarahat\"]', '[\"Maruthuvam\"]', '[\"Single Practioner\"]', '[\"Single Practioner\"]', '[\"General Practices Services\"]', '[\"Anaesthesiology\"]', '[\"Ophthalmology\"]', '[\"Cardiovascular Thoracic Surgery\"]', '[\"Cardiology\",\" Medical Genetics\"]', NULL, NULL),
(95, 'REGSTA5528', 'stanzen padma', '01234543210', '01234543210', 'admin@gmail.com', '0456-03-12', 'lehhhhhhhh', 'A', '1', '101', '1234', '[\"Allopathy\",\"Unani\",\"Homeopathy\"]', 'Central Govt.', 'Individual Proprietorship', 'thinly', '01234543210', '01234543210', 'stanzenpadma123456@gmail.com', 'skalzangling,leh ladakh', 'Normal distribution ', 'Normal distribution ', 'Normal distribution ', '1234', '[\"Single Practioner\"]', '[\"Consultation Services Only\"]', '[\"Disprnsery\"]', '[\"Health Checkup Center\"]', '[\"Medical\"]', '[\"Hospital Level 1A\",\"Hospital Level 1B<\",\"Hospital Level 2\"]', '[\"Single Practioner\"]', '[\"Oral and Maxillofacial Surgery\",\"Oral Pathology and Microbiology\"]', '[\"Biochemistry\"]', '[\"Interventional Radiology\"]', '', '[\"Echocardiography\"]', '[\"No\"]', '13456', '[\"Audiology\"]', '[\"Aushadh Chikitsa\"]', '[\"Ashtang\"]', '[\"Matab Jarahat\"]', '[\"Maruthuvam\"]', '[\"Single Practioner\"]', '[\"Single Practioner\"]', '[\"General Practices Services\"]', '[\"Aviation Medicine\"]', '[\"Ophthalmology\"]', '[\"Cardiovascular Thoracic Surgery\"]', '[\"Cardiology\"]', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `registrationId` varchar(255) NOT NULL,
  `total_no` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `registration_no` varchar(255) NOT NULL,
  `nature_of_service` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `registrationId`, `total_no`, `category`, `name`, `qualification`, `registration_no`, `nature_of_service`, `created_at`, `updated_at`) VALUES
(37, '123', 1, 'Example category', 'Example name', 'Example qualification', 'Example registration no', 'Example nature of service', NULL, NULL),
(38, '123', 1, 'Example category', 'Example name', 'Example qualification', 'Example registration no', 'Example nature of service', NULL, NULL),
(39, '0', 1, 'Array', 'Array', 'Array', 'Array', 'Array', NULL, NULL),
(40, '0', 1, '', '', '', '', '', NULL, NULL),
(41, '0', 2, 'Array', 'Array', 'Array', 'Array', 'Array', NULL, NULL),
(42, '0', 1, '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dici`
--

CREATE TABLE `tbl_dici` (
  `qual_id` int(225) NOT NULL,
  `deci` varchar(225) NOT NULL,
  `deci_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_dici`
--

INSERT INTO `tbl_dici` (`qual_id`, `deci`, `deci_id`) VALUES
(1, 'Diskit', 101),
(1, 'Durbuk', 102),
(1, 'Khaltsi\r\n', 103),
(1, 'Kharu\r\n', 104),
(1, 'Leh', 105),
(1, 'Nyoma', 106),
(2, 'Drass', 107),
(2, 'Kargil', 108),
(2, 'Sankoo', 109),
(2, 'Shakar Chiktan\r\n', 110);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qual`
--

CREATE TABLE `tbl_qual` (
  `id` int(225) NOT NULL,
  `qual` varchar(225) NOT NULL,
  `qual_id` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_qual`
--

INSERT INTO `tbl_qual` (`id`, `qual`, `qual_id`) VALUES
(1, 'LEH', 1),
(2, 'KARGIL', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `user_type` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone_no`, `user_type`, `password`, `created_at`) VALUES
(67, 'nilza angmo', 'nil@gmail.com', '1234567890', 'admin', '3d2e1fe7a1df52066ce84e97a3f8e718c6f5a301', '2024-03-12 05:38:36'),
(68, 'nilza angmo', 'tashi@gmail.com', '9208765432', '', '3d2e1fe7a1df52066ce84e97a3f8e718c6f5a301', '2024-03-12 06:55:02'),
(69, 'padma', 'abc@xyz.com', '9999876543', '', '3d2e1fe7a1df52066ce84e97a3f8e718c6f5a301', '2024-03-12 11:12:57'),
(70, 'padma', 'padma@gmail.com', '0987654321', '', '3d2e1fe7a1df52066ce84e97a3f8e718c6f5a301', '2024-03-28 05:35:33'),
(71, 'dorjay', 'xyz@gmail.com', '09622379306', '', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-03-28 10:20:14'),
(73, 'dorjay', 'admin@gmail.com', 'admin111@gmail.com', 'user', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-03-29 06:00:51'),
(74, 'padma', 'stanzenpadma123@gmail.com', '01234543210', 'admin', '9bcdefa2b8bf7f07747b1bcfc66dea069115905f', '2024-03-29 11:11:52'),
(76, 'padma', 'stanzenpadma12345@gmail.com', '0123451234', 'admin', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-03-29 12:25:16'),
(77, 'thinly', 'stanzenpadma123456@gmail.com', '1234512348', 'user', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-04-01 09:37:55'),
(78, 'dorjay', 'stanzenpadma1@gmail.com', '0123454321', '', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-04-01 09:43:19'),
(81, 'dorjay', 'stanzenpadma11111@gmail.com', '0123456555', 'user', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-04-01 10:06:09'),
(82, 'dolma', 'dolma@gmail.com', '', 'user', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-04-01 10:09:22'),
(83, 'dolma', 'dolma123@gmail.com', '1111111110', 'user', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-04-01 10:11:53'),
(84, 'dorjay', 'stanzenpadma111@gmail.com', '0123455555', 'user', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-04-01 10:24:23'),
(86, 'dorjay', 'xyz11@gmail.com', '02223334456', 'user', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-04-01 10:37:10'),
(87, 'dorjay', 'xyz123@gmail.com', '0966789875', 'user', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-04-01 10:45:58'),
(88, 'dorjay', 'xyz1234@gmail.com', '0963456547', 'user', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-04-01 10:47:47'),
(89, 'abcd', 'abcd@gmail.com', '1233214565', 'user', '2fae29b197ba0efb3e18ffba09b8dc8bb36d1aba', '2024-04-08 05:43:25'),
(90, 'abcdef', 'abcdef@gmail.com', '01111111110', 'user', '209ff794c89c2371baca6b70aa019a42e8dfec9b', '2024-05-07 10:58:47'),
(92, 'padma', 'xyz1111@gmail.com', '9622379306', 'user', '209ff794c89c2371baca6b70aa019a42e8dfec9b', '2024-05-08 12:03:32'),
(93, 'padma', 'xyz1111234@gmail.com', '1023845678', 'user', '209ff794c89c2371baca6b70aa019a42e8dfec9b', '2024-05-08 12:03:59'),
(94, 'padma', 'fhdkhgrj@gmail.com', '1028567925', 'user', '209ff794c89c2371baca6b70aa019a42e8dfec9b', '2024-05-08 12:04:26'),
(113, 'stanzenpadma', 'stanpama@gmail.com', '1029304999', '', '209ff794c89c2371baca6b70aa019a42e8dfec9b', '2024-05-09 07:21:55'),
(114, 'pama', 'xyz@gmail.com12345', '1234565432', '', '209ff794c89c2371baca6b70aa019a42e8dfec9b', '2024-05-09 07:24:47'),
(115, 'stan', 'xyz@gmail.com000000', '1010101929', '', '209ff794c89c2371baca6b70aa019a42e8dfec9b', '2024-05-09 07:25:34'),
(116, 'pamastan', 'xyz@gmail.com101010', '2039485670', '', '209ff794c89c2371baca6b70aa019a42e8dfec9b', '2024-05-09 07:27:31'),
(117, 'padmSTANZEN', 'xyz@gmail.com2222', '0000009987', 'user', '209ff794c89c2371baca6b70aa019a42e8dfec9b', '2024-05-09 07:35:30');



-- query table

CREATE TABLE `query` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `Registration_ID` VARCHAR(255) NOT NULL,
  `CMO` VARCHAR(255) NOT NULL,
  `DC` VARCHAR(255) NOT NULL,
  `Add_DC` VARCHAR(255) NOT NULL,
  `SSP` VARCHAR(255) NOT NULL,
  `Medical_Superintendent` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)  -- Set `id` as the primary key
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `s.no` (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dici`
--
ALTER TABLE `tbl_dici`
  ADD PRIMARY KEY (`deci_id`);

--
-- Indexes for table `tbl_qual`
--
ALTER TABLE `tbl_qual`
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
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_dici`
--
ALTER TABLE `tbl_dici`
  MODIFY `deci_id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=989;

--
-- AUTO_INCREMENT for table `tbl_qual`
--
ALTER TABLE `tbl_qual`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
