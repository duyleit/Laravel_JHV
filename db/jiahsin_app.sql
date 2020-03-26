-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 11:24 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jiahsin_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(72) NOT NULL,
  `slug` varchar(32) DEFAULT NULL,
  `numberPosts` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `numberPosts`) VALUES
(1, 'phalcon php', 'phalcon-php-te', 1),
(2, 'phong cảnh', 'phong-canh', 1),
(5, 'test123', 'test-test-123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `code`, `name`) VALUES
(1, 'JHV', 'Jiahsin'),
(2, 'SHM', 'Shimmer');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `code`, `name`) VALUES
(1, 'AC', 'Kế Toán|会计|Accounting'),
(2, 'GA', 'Tổng Vụ|一般事情|General Affair'),
(3, 'HR', 'Nhân Sự|人力资源|Human Resource'),
(4, 'IN', 'Y tế|医务室|Infirmary'),
(5, 'IT', 'CNTT|信息技术|IT'),
(6, 'WIP', 'Kiểm Hàng');

-- --------------------------------------------------------

--
-- Table structure for table `department_tempt`
--

CREATE TABLE `department_tempt` (
  `id` int(5) NOT NULL,
  `code` varchar(5) NOT NULL COMMENT 'Code',
  `name` varchar(64) NOT NULL COMMENT 'Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department_tempt`
--

INSERT INTO `department_tempt` (`id`, `code`, `name`) VALUES
(1, 'AC', 'Kế Toán|会计|Accounting'),
(2, 'GA', 'Tổng Vụ|一般事情|General Affair'),
(3, 'HR', 'Nhân Sự|人力资源|Human Resource'),
(4, 'IN', 'Y tế|医务室|Infirmary'),
(5, 'IT', 'CNTT|信息技术|IT'),
(6, 'WH', 'Kho|仓库|Warehouse');

-- --------------------------------------------------------

--
-- Table structure for table `health_class`
--

CREATE TABLE `health_class` (
  `id` int(5) NOT NULL,
  `code` varchar(5) DEFAULT NULL COMMENT 'Code',
  `name` varchar(64) NOT NULL COMMENT 'Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `health_class`
--

INSERT INTO `health_class` (`id`, `code`, `name`) VALUES
(1, '1', 'Bad'),
(2, '2', 'Sick'),
(3, '3', 'Normal'),
(4, '4', 'Good'),
(5, '5', 'Very good');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(5) NOT NULL,
  `code` varchar(5) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `location_internal`
--

CREATE TABLE `location_internal` (
  `id` int(5) NOT NULL,
  `code` varchar(5) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `medicine_basic`
--

CREATE TABLE `medicine_basic` (
  `id` int(11) NOT NULL COMMENT 'Id',
  `code` varchar(10) DEFAULT NULL COMMENT 'Code',
  `name` varchar(64) NOT NULL COMMENT 'Name',
  `unit_code` varchar(5) NOT NULL,
  `specification` varchar(250) NOT NULL,
  `approval_no` varchar(25) DEFAULT NULL,
  `manufactory` varchar(250) NOT NULL,
  `min_stock` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_basic`
--

INSERT INTO `medicine_basic` (`id`, `code`, `name`, `unit_code`, `specification`, `approval_no`, `manufactory`, `min_stock`) VALUES
(4, '', 'ALPHA CHOAY', 'PIL', '500mg', '', 'Công ty dược phẩm Long An', 0),
(5, 'AS0026', 'ALAXAN', 'BOX', '125mg*12', '', 'Công ty dược phẩm Long An', 0),
(6, '', '3B', 'BOX', '50mg', '', 'Công ty cổ phần dược phẩm Hậu Giang', 0),
(7, '', 'PANADOLE', 'BOX', '25mg', '', 'CÔNG TY DƯỢC PHẨM HẬU GIANG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_stock`
--

CREATE TABLE `medicine_stock` (
  `id` int(11) NOT NULL COMMENT 'Id',
  `user_code` varchar(11) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL COMMENT 'Code',
  `name` varchar(64) NOT NULL COMMENT 'Name',
  `category` varchar(50) DEFAULT NULL,
  `unit_code` varchar(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `specification` varchar(250) NOT NULL,
  `approval_no` varchar(25) DEFAULT NULL,
  `mfg_date` date DEFAULT NULL,
  `exp_date` date NOT NULL,
  `forbidden` varchar(10) DEFAULT 'no',
  `special` varchar(250) DEFAULT NULL,
  `manufactory` varchar(250) DEFAULT NULL,
  `note` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicine_stock`
--

INSERT INTO `medicine_stock` (`id`, `user_code`, `code`, `name`, `category`, `unit_code`, `quantity`, `price`, `amount`, `specification`, `approval_no`, `mfg_date`, `exp_date`, `forbidden`, `special`, `manufactory`, `note`) VALUES
(1, 'I12758', 'AS0026', 'ALAXAN', NULL, 'BOX', 20, 150000, 3000000, '125mg*12', '', '2018-05-02', '2019-05-02', '0', '', 'Công ty dược phẩm Long An', ''),
(2, 'I12758', '', 'ALPHA CHOAY', NULL, 'PIL', 50, 25000, 1250000, '500mg', '', '2018-05-03', '2019-05-03', '0', '', 'Công ty dược phẩm Long An', ''),
(5, 'I12758', 'AS0026', 'ALAXAN', NULL, 'BOX', 25, 175000, 4375000, '125mg*12', '', '2018-05-03', '2020-06-17', '0', '', 'Công ty dược phẩm Long An', ''),
(6, 'I12758', '', '3B', NULL, 'BOX', 15, 85000, 1275000, '50mg', '', '2018-05-03', '2017-08-15', '0', '', 'Công ty cổ phần dược phẩm Hậu Giang', ''),
(7, 'I12758', '', 'ALPHA CHOAY', NULL, 'PIL', 0, 150000, 2250000, '500mg', '', '2018-05-04', '2018-05-24', '0', '', 'Công ty dược phẩm Long An', '');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_room_booking`
--

CREATE TABLE `meeting_room_booking` (
  `id` int(22) NOT NULL,
  `user_code` varchar(11) NOT NULL,
  `com_code` varchar(5) NOT NULL,
  `dept_code` varchar(5) NOT NULL,
  `room_code` varchar(5) NOT NULL,
  `presiding` varchar(128) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meeting_room_booking`
--

INSERT INTO `meeting_room_booking` (`id`, `user_code`, `com_code`, `dept_code`, `room_code`, `presiding`, `title`, `content`, `start`, `end`, `status`) VALUES
(2, 'I12758', 'JHV', 'HR', 'SO1', 'John', 'test', 'test', '2018-04-18 16:32:00', '2018-04-18 16:32:00', 1),
(3, 'I12758', 'JHV', 'IT', 'SO1', 'Mr.Steven', 'Phổ biến phần mềm đặt phòng họp', '<p>- Chính sách bảo mật</p><p>- Hướng dẫn sử dụng</p>', '2018-04-22 07:33:00', '2018-04-22 08:33:00', 1),
(4, 'I11174', 'JHV', 'AC', 'SO2', 'Ms Mai', 'TIPTOP TSCĐ', '<p>- TSCĐ</p><p>- Tạo mã TSCĐ</p><p>- Nhập liệu TIPTOP<br><p><br></p></p>', '2018-04-22 10:14:00', '2018-04-22 11:14:00', 1),
(5, 'steven', 'JHV', 'IT', 'SO2', 'Mr. Max', 'Tổng quan hệ thống TIPTOP', '<p>- Giới thiệu TIPTOP</p><p>- Lộ trình triển khai ứng dụng<br><p>- Phân chia trách nhiệm liên đới<br></p></p>', '2018-04-22 13:22:00', '2018-04-22 13:22:00', 1),
(6, 'I12758', 'JHV', 'IT', 'SO1', 'Matt', 'Các vấn đề chung kế toán', '<p>- Tài chính</p><p>- TSCĐ<br><p><br></p></p>', '2018-04-24 08:30:00', '2018-04-24 11:30:00', 1),
(7, 'AS0174', 'SHM', 'GA', 'SO1', 'Mr.Wang Qiang', 'Họp đầu tháng', '<p>ABC<br><p><br></p></p>', '2018-04-24 14:00:00', '2018-04-24 16:00:00', 1),
(8, 'I12758', 'SHM', 'IT', 'SO1', 'John', 'test', '<p>test<br><p><br></p></p>', '2018-05-04 09:41:00', '2018-05-04 09:41:00', 1),
(9, 'I12758', 'JHV', 'IT', 'SO2', 'Mr Max', 'Họp IT đầu tháng 5', 'test<p><br></p>', '2018-05-05 09:00:00', '2018-05-05 10:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2019_11_14_080932_create_table_posts', 1),
(5, '2019_11_14_102336_add_column_table_posts', 1),
(7, '2019_11_25_091922_create_user_table', 2),
(8, '2019_12_10_063156_add_user_column_table', 3),
(9, '2020_03_12_094407_create_role_table', 4),
(10, '2020_03_12_094856_create_roletest_table', 4),
(11, '2020_03_12_111709_create_company_table', 5),
(12, '2020_03_12_111902_create_dept_table', 6),
(13, '2020_03_12_115431_create_user_table', 7),
(14, '2020_03_12_121713_create_users_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(5) NOT NULL,
  `code` varchar(5) DEFAULT NULL COMMENT 'Code',
  `name` varchar(64) NOT NULL COMMENT 'Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `code`, `name`) VALUES
(1, 'EMP', 'Nhân viên|雇员|Employee'),
(2, 'TLD', 'Trưởng nhóm|队长|Team Leader'),
(3, 'MNG', 'Quản lý|经理|Manager');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`, `title`, `content`) VALUES
(1, '2019-11-20 17:00:00', '2019-12-18 19:47:52', 'testsss123789', 'noi dung chỉ testss123'),
(3, '2019-12-03 01:55:32', '2019-12-03 02:07:55', 'test123456', '<p>noi dung123</p><ul><li>test</li></ul>'),
(4, '2019-12-05 19:36:38', '2020-02-20 20:49:44', 'test1', 'asds21022020'),
(7, '2019-12-10 20:38:42', '2019-12-10 20:38:42', 'test_1112', 'asd'),
(8, '2020-02-20 21:22:02', '2020-02-20 21:22:02', 'test_2102', '<p>Aenean eaque ducimus cillum ab delectus. Augue neque ipsam. Fugiat, incididunt ipsam voluptatibus labore. Saepe sagittis vitae consequat sit inventore mus rutrum, anim ullam incidunt aute, scelerisque dictumst. .<p>'),
(9, '2020-02-22 02:06:23', '2020-02-22 02:06:23', 'test_1111', 'asasd');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `code`, `name`) VALUES
(1, 'ADM', 'Admin'),
(2, 'USR', 'User'),
(3, 'GST', 'Guest');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(5) NOT NULL,
  `code` varchar(5) NOT NULL COMMENT 'Code',
  `name` varchar(64) NOT NULL COMMENT 'Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `code`, `name`) VALUES
(1, 'SO1', 'SO1'),
(2, 'SO2', 'SO2');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(5) NOT NULL,
  `code` varchar(5) NOT NULL COMMENT 'Code',
  `name` varchar(64) NOT NULL COMMENT 'Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `code`, `name`) VALUES
(1, 'THL', 'Thiên Long');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(5) NOT NULL,
  `code` varchar(5) NOT NULL COMMENT 'Code',
  `name` varchar(64) NOT NULL COMMENT 'Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `code`, `name`) VALUES
(4, 'BOX', 'Hộp|框|Box'),
(5, 'PIL', 'Viên|丸|Pill'),
(6, 'TUB', 'Ống|管|Tube');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_extend` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `code`, `pass`, `fullname`, `role_code`, `com_code`, `dept_code`, `email`, `phone_extend`, `status`) VALUES
(1, 'I13042', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'Lê Duy', 'ADM', 'JHV', 'IT', 'Duy.Le@jiahsin.com.vn', '1159', 1),
(2, 'I12758', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'John Nguyễn', 'ADM', 'JHV', 'IT', 'PhucNguyen.Pham@jiahsin.com.vn', '1159', 1),
(3, 'steven', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'Steven Chang', 'ADM', 'JHV', 'IT', 'steven.chang@jiahsin.com.vn', '1159', 1),
(4, 'user_test', '$2y$10$gp1HRb0EPk5T3ygYsdplseXAcuak1n3Y/xfLvDHwPJvN5tqgGibZm', 'Test', 'ADM', 'JHV', 'IT', 'Test@jiahsin.com.vn', '1159', 1),
(5, 'I13042', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'Lê Duy', 'ADM', 'JHV', 'IT', 'Duy.Le@jiahsin.com.vn', '1159', 1),
(6, 'I12758', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'John Nguyễn', 'ADM', 'JHV', 'IT', 'PhucNguyen.Pham@jiahsin.com.vn', '1159', 1),
(7, 'steven', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'Steven Chang', 'ADM', 'JHV', 'IT', 'steven.chang@jiahsin.com.vn', '1159', 1),
(8, 'user_test', '$2y$10$gp1HRb0EPk5T3ygYsdplseXAcuak1n3Y/xfLvDHwPJvN5tqgGibZm', 'Test', 'ADM', 'JHV', 'IT', 'Test@jiahsin.com.vn', '1159', 1),
(9, 'I113', '$2y$08$NzJrRDF3dnYyQ01uTGh6e.MtTeGmA7k985TYeIFBfcI8lYQ6BXyp6', 'tester', 'GST', 'JHV', 'IN', 'jsvendor@jiahsin.com.vn', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `com_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_extend` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `code`, `pass`, `fullname`, `role_code`, `com_code`, `dept_code`, `email`, `phone_extend`, `status`) VALUES
(1, 'I13042', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'Lê Duy', 'ADM', 'JHV', 'IT', 'Duy.Le@jiahsin.com.vn', '1159', 1),
(2, 'I12758', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'John Nguyễn', 'ADM', 'JHV', 'IT', 'PhucNguyen.Pham@jiahsin.com.vn', '1159', 1),
(3, 'steven', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05m.', 'Steven Chang', 'ADM', 'JHV', 'IT', 'steven.chang@jiahsin.com.vn', '1159', 1),
(4, 'user_test', '$2y$10$gp1HRb0EPk5T3ygYsdplseXAcuak1n3Y/xfLvDHwPJvN5tqgGibZm', 'Test', 'ADM', 'JHV', 'IT', 'Test@jiahsin.com.vn', '1159', 1),
(99, 'I113', '$2y$10$Tv9YBt3KDC9swj.sWUAnXO3jDN5c3I3FOHzrUjI/lllQJj74H.tBa', 'Davincy', 'USR', 'JHV', 'AC', 'jsvendor@jiahsin.com.vn', '111', 1),
(100, 'I1122', '$2y$10$3fcMo42ZJmoFVh2MGE4nle0nM6Tb/XtMzOm8HHHI4dqpW/3K.cwR2', 'Davincy123', 'ADM', 'JHV', 'AC', 'jsvendor@jiahsin.com.vn', '111', 1),
(101, 'I999', '$2y$10$jJXP30lLWSgY1gYjEr5xwO8SB0l2zSExQETy.S9wcsztOgBUB7oTi', 'Owen', 'USR', 'JHV', 'HR', 'jsvendor@jiahsin.com.vn', '113', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_temp`
--

CREATE TABLE `user_temp` (
  `id` int(11) NOT NULL,
  `code` varchar(11) NOT NULL COMMENT 'User',
  `pass` varchar(128) NOT NULL COMMENT 'Password',
  `fullname` varchar(64) NOT NULL COMMENT 'Fullname',
  `role_code` varchar(5) NOT NULL COMMENT 'Role',
  `com_code` varchar(5) NOT NULL COMMENT 'Company',
  `dept_code` varchar(5) DEFAULT NULL COMMENT 'Department',
  `posi_code` varchar(5) DEFAULT NULL COMMENT 'Position',
  `email` varchar(64) NOT NULL COMMENT 'Email',
  `phone_extend` varchar(16) DEFAULT NULL COMMENT 'Phone extend',
  `about` text COMMENT 'About',
  `common_disease` int(11) NOT NULL DEFAULT '0',
  `occupational_disease` int(11) NOT NULL DEFAULT '0',
  `labor_accident` int(11) NOT NULL DEFAULT '0',
  `poison_area` int(11) NOT NULL DEFAULT '0',
  `health_class_code` varchar(5) NOT NULL DEFAULT '5',
  `expiry_health_check` date DEFAULT NULL,
  `status` int(5) DEFAULT NULL COMMENT 'Status'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_temp`
--

INSERT INTO `user_temp` (`id`, `code`, `pass`, `fullname`, `role_code`, `com_code`, `dept_code`, `posi_code`, `email`, `phone_extend`, `about`, `common_disease`, `occupational_disease`, `labor_accident`, `poison_area`, `health_class_code`, `expiry_health_check`, `status`) VALUES
(1, 'I12758', '$2y$08$RDAzc0gwKys3aFBNQ3E5TOzlJCpuCv9itp1WYNOMVtsm/HgT17lwG', 'John Nguyen', 'ADM', 'JHV', 'IT', 'TLD', 'PhucNguyen.Pham@jiahsin.com.vn', '1159', '', 0, 0, 0, 0, '5', NULL, 1),
(2, 'I13042', '$2y$08$V2U2TlN3K1J0elhrbFRmV.5gC5huJ/Z4EdKUQoTP05mF4BoR91iQ.', 'Lê Duy', 'ADM', 'JHV', 'IT', 'EMP', 'Duy.Le@jiahsin.com.vn', '1159', '', 0, 0, 0, 0, '5', NULL, 1),
(3, 'A0630', '$2y$08$ZXA3UjVBMzhIejBpTVJWW.XciFg246xGNO686l11tVKsWCqUd60Ba', 'Đinh Thị Xuân Mai', 'USR', 'JHV', 'AC', 'TLD', 'Mai.dinh@jiahsin.com.vn', '1110', '', 0, 0, 0, 0, '5', NULL, 1),
(4, 'C3878', '$2y$08$M2RRRTRyZjVxeG5LeHoxauAy1asLMU2EO.nMADcwXyW4XWcX1jeSK', 'Huỳnh Thanh Hưng', 'USR', 'JHV', 'AC', 'EMP', 'Hung.Huynh@jiahsin.com.vn', '1110', '', 0, 0, 0, 0, '5', NULL, 1),
(5, 'G5959', '$2y$08$RWVkQkl0Qi91OHZIQmxwZOmvjY2IrvGKW2EK2B21kamRIM9LwUfYC', 'Phạm Trần Kiều Mi', 'USR', 'JHV', 'AC', 'EMP', 'Mi.pham@jiahsin.com.vn', '1109', '', 0, 0, 0, 0, '5', NULL, 1),
(6, 'H8097', '$2y$08$TTd6MzFaMVJCVW0zUndkTeadzzzm7bm6GV09klj3gd3Gd7LKueAPu', 'Ngô Thị Hiền', 'USR', 'JHV', 'AC', 'EMP', 'Hien.Ngo@jiahsin.com.vn', '1110', '', 0, 0, 0, 0, '5', NULL, 1),
(9, 'I12028', '$2y$08$K0ovbC9GSWE2TGxBVWdxNeREsVx8/eyJrVb9kc0SM4nyzcCl2oLYO', 'Nguyễn Thị Kim The', 'USR', 'JHV', 'AC', 'EMP', 'Accounting.JHV@jiahsin.com.vn', '1109', '', 0, 0, 0, 0, '5', NULL, 1),
(11, 'B2286', '$2y$08$bUFjSE5qYW5HZXdQdDR6LuUwHczG8.ZimgjvIqKZxr17sSxR7IiuG', 'Lê Thị Kim Trang', 'USR', 'JHV', 'WH', 'EMP', 'Khovatlieu.Trang@jiahsin.com.vn', '1250', '', 0, 0, 0, 0, '5', NULL, 1),
(12, 'A0205', '$2y$08$Y2RyT1BjNFNhdXFSOE5ER.B0Rg/l2RzngliFvjzqOVtgZ/pJLMEsi', 'Thái Nhựt Phong', 'USR', 'JHV', 'AC', 'TLD', 'khovatlieu.phong@jiahsin.com.vn', '1222', '', 0, 0, 0, 0, '5', NULL, 1),
(13, 'A0071', '$2y$08$M1hLdXNQUXNEM0hwOUhIS.ay2cYFaYXoa0OPF6ZC5F3/1C8EHwb7i', 'Lương Bội Văn', 'USR', 'JHV', 'GA', 'TLD', 'van.luong@jiahsin.com.vn', '1180', '', 0, 0, 0, 0, '5', NULL, 1),
(14, 'steven', '$2y$08$K1Bhb0MrL3czUUhaSXNRV.3gY9ukdD9oDpR.db2YmIzY1lOFu4WnO', 'Steven Chang', 'ADM', 'JHV', 'IT', 'MNG', 'steven.chang@jiahsin.com.vn', '1159', '', 0, 0, 0, 0, '5', NULL, 1),
(15, 'AS0174', '$2y$08$WnQvWFd1VXRkV2RkcGJRN.a.66PtNpB3/P7JOSb5ZDaiBb6T9/7ai', 'Nguyễn Thị Hồng Diễm', 'USR', 'SHM', 'GA', 'EMP', 'Diem.Nguyen@shimmer.com.vn', '0', '', 0, 0, 0, 0, '5', NULL, 1),
(99, 'user_test', '$2y$10$mpebTQGu2L689X9SC3JQ9O5OVZ6ere3kUk0Z3z8DDr5CZhiAB/yxK', 'tester', 'ADM', 'JHV', 'IT', NULL, 'jsvendor@jiahsin.com.vn', '1166', NULL, 0, 0, 0, 0, '5', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(5) NOT NULL,
  `code` varchar(5) NOT NULL COMMENT 'Code',
  `name` varchar(64) NOT NULL COMMENT 'Name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `code`, `name`) VALUES
(1, 'X01', 'Xe 01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_tempt`
--
ALTER TABLE `department_tempt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`code`);

--
-- Indexes for table `health_class`
--
ALTER TABLE `health_class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`code`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `location_internal`
--
ALTER TABLE `location_internal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `medicine_basic`
--
ALTER TABLE `medicine_basic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `unit_code` (`unit_code`);

--
-- Indexes for table `medicine_stock`
--
ALTER TABLE `medicine_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_code` (`unit_code`);

--
-- Indexes for table `meeting_room_booking`
--
ALTER TABLE `meeting_room_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `com_code` (`com_code`),
  ADD KEY `dept_code` (`dept_code`),
  ADD KEY `room_code` (`room_code`),
  ADD KEY `user_code` (`user_code`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`code`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
