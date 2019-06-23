-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 03:30 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile` text NOT NULL,
  `is_active` enum('0','1') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isDeleted` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `first_name`, `last_name`, `mobile`, `email`, `password`, `profile`, `is_active`, `created_date`, `updated_date`, `isDeleted`) VALUES
(1, 'Sharad', 'Chavan', 232324, 'sharad@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '75754_aaa.jpg', '1', '2019-05-11 04:00:00', '2019-06-08 06:19:54', '0');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `app_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `app_date` datetime NOT NULL,
  `problem` text NOT NULL,
  `isCompleted` enum('0','1','2') NOT NULL DEFAULT '2' COMMENT '0 = cancel, 1 = complete, 2 = pending',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_date` date NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isDeleted` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`app_id`, `doc_id`, `patient_id`, `department_id`, `app_date`, `problem`, `isCompleted`, `status`, `created_date`, `updated_date`, `isDeleted`) VALUES
(5, 4, 1, 3, '2019-12-01 01:59:00', 'sss			', '2', '1', '2019-04-22', '2019-06-10 12:18:36', '0'),
(6, 2, 2, 4, '2019-12-01 13:59:00', 'julaab', '2', '1', '2019-04-22', '2019-06-10 12:18:36', '0'),
(7, 7, 1, 3, '2022-12-01 12:00:00', 'aaaaaaaa			', '2', '1', '2019-04-22', '2019-06-10 12:18:36', '0'),
(8, 9, 1, 2, '2019-12-31 12:00:00', 'swdcvfwrgfw                 			', '2', '1', '2019-02-22', '2019-06-10 12:18:36', '0'),
(9, 1, 1, 1, '2019-12-01 14:02:00', 'sharad			', '2', '1', '2019-02-22', '2019-06-10 12:18:36', '0'),
(10, 5, 4, 6, '2020-12-01 10:58:00', 'asdewq                                     ', '2', '1', '2018-12-22', '2019-06-10 12:18:36', '0'),
(11, 4, 4, 1, '2019-12-01 01:00:00', 'problem is problem', '2', '1', '2018-12-22', '2019-06-10 12:21:19', '0'),
(17, 1, 1, 1, '2019-12-31 13:59:00', '					aefvad				', '2', '1', '2018-12-22', '2019-06-10 12:18:36', '0'),
(18, 1, 4, 4, '2019-12-31 00:58:00', 'asdewq									', '2', '1', '2019-01-22', '2019-06-10 12:21:23', '0'),
(19, 1, 4, 4, '2018-12-31 00:59:00', 'qswdfc									', '2', '1', '2019-06-22', '2019-06-10 12:21:34', '0'),
(20, 1, 10, 2, '2019-12-31 12:59:00', 'qwerty				', '2', '1', '2019-06-22', '2019-06-10 12:24:34', '0'),
(24, 1, 1, 1, '2019-12-31 12:59:00', 'wswsede', '0', '0', '2019-06-22', '2019-06-10 12:28:18', '0'),
(31, 3, 1, 1, '2019-12-31 12:59:00', '								csdvds					', '1', '1', '2019-06-02', '2019-06-10 12:41:30', '0'),
(38, 1, 1, 1, '2019-12-31 12:59:00', '									asdasd', '2', '1', '2019-06-02', '2019-06-10 12:41:33', '1'),
(39, 1, 1, 1, '2019-06-13 07:17:00', 'asdasd				', '2', '1', '2019-06-02', '2019-06-10 12:18:36', '0'),
(41, 8, 12, 5, '2019-06-25 08:16:00', 'asach123 test', '2', '1', '2019-06-10', '2019-06-10 12:21:38', '0');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_date` date NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isDeleted` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `description`, `status`, `created_date`, `updated_date`, `isDeleted`) VALUES
(1, 'Deva', 'bbbbbb', '0', '0000-00-00', '2019-06-09 07:13:03', '1'),
(2, 'Gynaecology', 'ggggggggg', '1', '0000-00-00', '2019-05-28 14:54:11', '0'),
(3, 'Neonatal', 'qwerty', '1', '0000-00-00', '2019-05-22 10:06:00', '1'),
(4, 'Pharmacy', 'blood test', '0', '0000-00-00', '2019-06-11 11:02:27', '0'),
(5, 'Microbiology', 'micro bio', '1', '0000-00-00', '2019-05-22 10:06:10', '1'),
(7, 'mbbs123', 'doc', '0', '0000-00-00', '2019-05-22 10:13:52', '1'),
(8, 'test desc', 'sada', '1', '0000-00-00', '2019-05-28 14:54:09', '0'),
(11, 'BHMS', 'sardi', '1', '0000-00-00', '2019-06-08 15:18:27', '0'),
(12, 'BAMS', 'asass', '1', '0000-00-00', '2019-05-28 14:54:07', '0'),
(13, 'bbms', 'aaabbbccc', '1', '0000-00-00', '2019-05-28 14:54:54', '0'),
(14, 'qwerty', 'asdf', '0', '0000-00-00', '2019-06-08 15:17:41', '0'),
(15, 'ddd', 'aswqaswqa', '1', '0000-00-00', '2019-06-02 12:02:34', '1'),
(16, 'zzzz', 'aaaaa', '0', '0000-00-00', '2019-06-08 15:17:43', '0'),
(17, 'zzxzczcx', 'pppppppp', '1', '0000-00-00', '2019-05-28 15:01:05', '1'),
(18, 'mbbs123', 'cfsfsrgcwxfwxgf', '1', '0000-00-00', '2019-06-03 14:32:21', '0');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `specialist` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `profile_pic_source` varchar(255) DEFAULT NULL,
  `short_bio` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `sex` enum('1','0') NOT NULL DEFAULT '1',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_date` datetime NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isDeleted` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `f_name`, `l_name`, `email`, `password`, `designation`, `dept_id`, `address`, `specialist`, `mobile`, `profile_pic_source`, `short_bio`, `dob`, `blood_group`, `sex`, `status`, `created_date`, `updated_date`, `isDeleted`) VALUES
(1, 'sharad', 'chavan', 'sharad@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test', 1, 'test', 'wfx', 2147483647, '47900_xyz.jpg', 'sdea\r\ncqc\r\ndxASC\r\ncswc\r\n', '2019-12-01', 'AB+', '1', '1', '2018-08-02 00:00:00', '2019-06-08 14:09:05', '0'),
(3, 'ashish123', 'rawal', 'ashish@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'sss', 1, 'sss', 'sss', 2147483647, 'abc.jpg', 'deswaq\r\nafeaf\r\nqefqef\r\nqefc', '2019-12-01', 'AB+', '0', '0', '2019-04-02 00:00:00', '2019-06-08 15:25:44', '0'),
(4, 'ashish', 'rawal', 'ashish1@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'sss', 2, 'sss', 'sss', 2147483647, 'aaa.jpg', 'deswaq', '2019-12-01', 'AB+', '1', '1', '2019-02-17 00:00:00', '2019-06-08 13:01:28', '0'),
(5, 'sharad', 'chavan', 'sharad@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test', 2, 'qwerty sgvsvvsw vwrvwv wvrwr', 'test', 234554234, 'sss.jpg', 'efwef', '1994-12-01', 'A+', '0', '1', '2019-01-01 00:00:00', '2019-06-08 15:25:49', '0'),
(7, 'test', 'teste', 'test@test.test', '098f6bcd4621d373cade4e832627b4f6', 'test', 2, 'test', 'test', 123, 'aaa.jpg', 'test', '2019-05-08', 'A+', '1', '1', '2019-03-09 00:00:00', '2019-06-08 13:01:34', '0'),
(8, 'test1', 'teste', 'test@test.test', '098f6bcd4621d373cade4e832627b4f6', 'test', 3, 'test', 'test', 123, 'abc.jpg', 'test', '2019-05-08', 'A+', '0', '1', '2019-03-14 00:00:00', '2019-06-08 15:18:54', '0'),
(9, 'deva', 'shinde', 'deva@email.com', '098f6bcd4621d373cade4e832627b4f6', 'qqqefeq', 3, 'cswwf', 'qefvfq', 43421134, 'abc.jpg', 'aegfqegqe', '2019-05-02', 'A+', '1', '0', '2019-02-28 00:00:00', '2019-06-08 13:02:08', '0'),
(13, 'sss', 'sss', 'sss@gmail.com', '9f6e6800cfae7749eb6c486619254b9c', 'sss', 3, 'sss', 'sss', 111, 'xyz.jpg', 'sss', '2019-12-31', 'A+', '1', '1', '2019-08-09 00:00:00', '2019-06-08 13:02:08', '0'),
(16, 'aaa', 'aaa', 'aaa@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'aaa', 3, 'aaa', 'aaa', 111, '86002_sss.jpg', 'sdfsdf', '2019-12-31', 'A+', '1', '0', '2018-10-09 00:00:00', '2019-06-08 13:02:08', '0'),
(20, 'komal', 'joshi', 'k@g.com', '098f6bcd4621d373cade4e832627b4f6', 'sss', 3, 'aaabbb', 'aaa', 1111, 'aaa.jpg', 'aaabbbb', '2019-12-01', 'A+', '0', '1', '2019-05-12 00:00:00', '2019-06-08 13:02:08', '0'),
(21, 'ashish', 'rawak', 'a@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'aaa', 3, 'aabbb', 'aaa', 2211, '8134_abc.jpg', 'aaa', '2019-12-01', 'A+', '1', '1', '2019-05-12 00:00:00', '2019-06-08 13:02:08', '0'),
(23, 'qwert111222', 'qwert', 'q@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'qwert', 3, 'qwert', 'qwert', 124354566, '47900_xyz.jpg', '12345', '2019-12-31', 'O+', '1', '1', '2019-05-21 00:00:00', '2019-06-08 13:02:08', '0'),
(24, 'sharad', 'pawar', 'sharad@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'asas', 3, 'asas', 'asas', 121212, '54277_xyz.jpg', 'asas', '2019-12-31', 'O+', '1', '1', '2019-05-28 00:00:00', '2019-06-08 13:02:08', '0'),
(41, 'asds', 'dcdef', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '54277_xyz.jpg', 'aedfca', '0000-00-00', 'B+', '1', '1', '2019-05-12 00:00:00', '2019-06-08 13:02:08', '0'),
(42, 'aefc', 'acdvc', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '54277_xyz.jpg', 'aedfca', '0000-00-00', 'B+', '1', '1', '2019-05-12 00:00:00', '2019-06-08 13:02:08', '0'),
(43, 'cf', 'av', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, 'aaa.jpg', 'aedfca', '0000-00-00', 'B+', '1', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(44, 'qefc', 'aev', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, 'aaa.jpg', 'aedfca', '0000-00-00', 'B+', '1', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(45, 'adv', 'qaev', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '86002_sss.jpg', 'aedfca', '0000-00-00', 'B+', '1', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(46, 'cfqe', 'asv', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '86002_sss.jpg', 'aedfca', '0000-00-00', 'B+', '0', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(47, 'fcaq', 'qe', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '86002_sss.jpg', 'aedfca', '0000-00-00', 'B+', '0', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(48, 'aefc', 'vfeq', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, 'aaa.jpg', 'aedfca', '0000-00-00', 'B+', '0', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(49, 'qecf', 'cew', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '47900_xyz.jpg', 'aedfca', '0000-00-00', 'B+', '0', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(50, 'aefc', 'fcve4fad', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '47900_xyz.jpg', 'aedfca', '0000-00-00', 'B+', '1', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(51, 'aefc', 'qwww', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '47900_xyz.jpg', 'aedfca', '0000-00-00', 'B+', '0', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(52, 'cae', 'fas', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '47900_xyz.jpg', 'aedfca', '0000-00-00', 'B+', '1', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(53, 'cae', 'fqe', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '47900_xyz.jpg', 'aedfca', '0000-00-00', 'B+', '0', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(54, 'vf', 'faee', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '47900_xyz.jpg', 'aedfca', '0000-00-00', 'B+', '1', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(55, 'qewg', 'www', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, '47900_xyz.jpg', 'aedfca', '0000-00-00', 'B+', '0', '1', '2019-05-02 00:00:00', '2019-06-08 13:02:08', '0'),
(56, 'roshan', 'deorukhkar', 'eera@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'test', 3, 'test', 'test', 1234567890, '59609_abc.jpg', 'test', '2019-06-11', 'B+', '1', '1', '2019-06-03 00:00:00', '2019-06-08 13:02:08', '0'),
(58, 'asds', 'dcdef', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '1', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(59, 'aefc', 'acdvc', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '1', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(60, 'cf', 'av', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '1', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(63, 'cfqe', 'asv', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '0', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(64, 'fcaq', 'qe', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '0', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(65, 'aefc', 'vfeq', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '0', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(66, 'qecf', 'cew', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '0', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(67, 'aefc', 'fcve4fad', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '1', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(68, 'aefc', 'qwww', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '0', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(69, 'cae', 'fas', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '1', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(70, 'cae', 'fqe', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '0', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(71, 'vf', 'faee', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '1', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(72, 'qewg', 'fqe', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '0', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(73, 'cw', 'fa', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'cxasdec', 3, 'csdv', 'csdv', 124124, NULL, 'aedfca', '0000-00-00', 'B+', '1', '1', '0000-00-00 00:00:00', '2019-06-08 13:02:08', '0'),
(74, 'xxx', 'xxx', 'xxx@xxx.xxx', 'f561aaf6ef0bf14d4208bb46a4ccb3ad', 'xxx', 3, 'xxx', 'xxx', 1111, '22753_aaa.jpg', 'xxx', '2019-12-31', 'AB+', '1', '1', '2019-06-04 00:00:00', '2019-06-08 13:02:08', '0'),
(75, 'tt', 'ddd', 'sharad@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'dxsc', 3, 'aac', 'sac', 1, '35256_aaa.jpg', 'xassdc', '2018-12-31', 'AB+', '1', '1', '2019-06-04 00:00:00', '2019-06-08 13:02:08', '0'),
(76, 'qf', 'wvv', 'vw@csd.cdwecv', 'test', 'srwrv', 1, 'cserv', 'csfdrv', 31313, 'abc.jpg', 'wsrfvwrgf', '2018-12-31', 'O+', '1', '1', '2019-06-08 01:15:57', '2019-06-08 13:15:57', '0');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `highest_degree` varchar(50) NOT NULL,
  `college/university` text NOT NULL,
  `passout_year` year(4) NOT NULL,
  `other_certification` text NOT NULL,
  `description` text NOT NULL,
  `date_of_certificate` date NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `user_id`, `highest_degree`, `college/university`, `passout_year`, `other_certification`, `description`, `date_of_certificate`, `updated_date`) VALUES
(1, 46, 'mbbs', 'wefqef', 2019, 'no', 'no', '2019-12-31', '2019-06-17 13:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `logo_path` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `isDeleted` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo_path`, `description`, `created_date`, `updated_date`, `status`, `isDeleted`) VALUES
(2, '64770_aaa.jpg', 'qwertasdfgh', '2019-05-26', '2019-06-11 12:25:01', '1', '0'),
(3, '64005_aaa.jpg', 'aefgaf', '2019-05-26', '2019-06-04 08:53:53', '1', '0'),
(4, '35123_aaa.jpg', 'Deva', '2019-05-26', '2019-06-04 08:53:56', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `pic_source` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `sex` enum('1','0') NOT NULL DEFAULT '1',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `address` varchar(255) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isDeleted` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `fname`, `lname`, `mobile`, `pic_source`, `dob`, `blood_group`, `sex`, `status`, `address`, `created_date`, `updated_date`, `isDeleted`) VALUES
(1, 'sharad', 'chavan', 86232323, 'sss.jpg', '2020-01-31', 'AB-', '0', '0', 'pune', '2019-05-22', '2019-06-10 10:35:55', '0'),
(2, 'testq', 'tesdt', 213441, 'aaa.jpg', '2019-05-08', 'A+', '1', '1', '124124', '2019-05-12', '2019-06-08 14:23:18', '1'),
(4, 'komal', 'joshi', 765675765, 'abc.jpg', '2019-12-01', 'A+', '0', '1', 'pune', '2019-05-12', '2019-06-02 11:49:42', '0'),
(10, 'aaa', 'aaa', 2147483647, 'aaa.jpg', '2019-01-01', 'A+', '1', '1', 'KEA Softtech, Office no 306, pearl square,hadpsar-handewadi road,', '2019-05-12', '2019-06-02 11:49:47', '0'),
(11, 'aaa', 'aaa', 2147483647, '481418_abc.jpg', '2019-01-01', 'A+', '1', '1', 'KEA Softtech, Office no 306, pearl square,hadpsar-handewadi road,', '2019-05-12', '2019-06-02 11:50:23', '0'),
(12, 'ashish', 'rawal', 24322323, '978024_aaa.jpg', '2019-12-31', 'A+', '1', '1', 'adaef', '2019-05-22', '2019-06-02 11:49:58', '0'),
(13, 'sharad', 'don', 123213, '349925_abc.jpg', '2019-12-31', 'AB+', '1', '1', 'asdsas', '2019-05-22', '2019-06-02 11:50:17', '0'),
(14, 'abc', 'xyz', 1212121, '823511_aaa.jpg', '2018-12-31', 'O+', '1', '1', 'sasasas', '2019-05-28', '2019-06-02 11:50:07', '0'),
(15, 'qqqq', 'www', 121123121, '464200_xyz.jpg', '2018-12-30', 'O+', '0', '1', 'sasasa', '2019-05-28', '2019-06-02 11:50:11', '0'),
(17, 'pat123', 'pat123', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '2019-04-12', '2019-06-02 11:50:57', '0'),
(18, 'pat124', 'pat124', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '2019-04-12', '2019-06-02 11:50:59', '0'),
(19, 'pat125', 'pat125', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '2019-04-12', '2019-06-02 11:50:30', '0'),
(20, 'pat126', 'pat126', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '2019-04-12', '2019-06-02 11:50:32', '0'),
(21, 'pat127', 'pat127', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '2019-03-12', '2019-06-02 11:50:34', '0'),
(22, 'pat128', 'pat128', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '2019-03-12', '2019-06-02 11:50:36', '0'),
(23, 'pat129', 'pat129', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '2019-01-12', '2019-06-02 11:50:38', '0'),
(24, 'pat130', 'pat130', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '2018-10-12', '2019-06-02 11:51:01', '0'),
(25, 'pat131', 'pat131', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '2019-05-12', '2019-06-02 11:51:03', '0'),
(26, 'pat132', 'pat132', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '2019-05-12', '2019-06-02 11:50:40', '0'),
(27, 'pat133', 'pat133', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '2019-05-12', '2019-06-02 11:50:43', '0'),
(28, 'pat134', 'pat134', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '2019-05-12', '2019-06-02 11:50:45', '0'),
(29, 'pat135', 'pat135', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '2019-05-12', '2019-06-02 11:50:46', '0'),
(30, 'pat136', 'pat136', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '2019-05-12', '2019-06-02 11:50:49', '0'),
(31, 'pat137', 'pat137', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '2019-05-12', '2019-06-02 12:02:44', '1'),
(32, 'pat420', 'pat420', 124124, '464200_xyz.jpg', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '2019-05-12', '2019-06-02 11:56:07', '0'),
(33, 'f_name', ' l_name', 0, '', '0000-00-00', 'blood_grou', '', '1', 'address', '0000-00-00', '2019-06-03 07:57:02', '0'),
(34, 'pat123', 'pat123', 124124, '', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(35, 'pat124', 'pat124', 124124, '', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(36, 'pat125', 'pat125', 124124, '', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(37, 'pat126', 'pat126', 124124, '', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(38, 'pat127', 'pat127', 124124, '', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(39, 'pat128', 'pat128', 124124, '', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(40, 'pat129', 'pat129', 124124, '', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(41, 'pat130', 'pat130', 124124, '', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(42, 'pat131', 'pat131', 124124, '', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(43, 'pat132', 'pat132', 124124, '', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(44, 'pat133', 'pat133', 124124, '', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(45, 'pat134', 'pat134', 124124, '', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(46, 'pat135', 'pat135', 124124, '', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(47, 'pat136', 'pat136', 124124, '', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(48, 'pat137', 'pat137', 124124, '', '0000-00-00', 'B+', '0', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(49, 'pat138', 'pat138', 124124, '', '0000-00-00', 'B+', '1', '1', 'sfedfwefaef', '0000-00-00', '2019-06-03 07:57:02', '0'),
(50, 'sssddd', 'asadas', 2147483647, '../upload/441327_admin.png', '2019-06-01', 'A+', '1', '1', 'aecascff', '2019-06-03', '2019-06-07 12:26:36', '1'),
(51, 'roshan', 'deuorukhkar', 2147483647, 'admin.png', '2019-12-31', 'O+', '1', '1', 'KEA Softtech, Office no 306, pearl square,hadpsar-handewadi road,', '2019-06-08', '2019-06-08 14:31:03', '0'),
(52, 'wwww', 'aaaaaaa', 2147483647, 'aaa.jpg', '2019-12-31', 'O+', '1', '1', 'assawecxafqc dqwa', '2019-06-10', '2019-06-10 12:45:10', '0');

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `professional_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `short_bio` varchar(255) NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`professional_id`, `user_id`, `department`, `description`, `short_bio`, `updated_date`) VALUES
(1, 46, 'neurology', 'asasas', 'vfvfvfsdv', '2019-06-17 11:40:09');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `available_days` varchar(10) NOT NULL,
  `start_time` varchar(13) NOT NULL,
  `close_time` varchar(13) NOT NULL,
  `per_patient_time` varchar(10) NOT NULL,
  `serial_visibility` varchar(10) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_date` date NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isDeleted` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `doctor_name`, `available_days`, `start_time`, `close_time`, `per_patient_time`, `serial_visibility`, `status`, `created_date`, `updated_date`, `isDeleted`) VALUES
(1, 'satyam', 'sunday', '14:57', '22:59', '10 min', 'sequential', '1', '0000-00-00', '2019-05-28 15:50:03', '0'),
(7, 'sharad chavan', 'tuesday', '12:59', '12:59', '10 min', 'timestamp', '1', '2019-05-22', '2019-05-26 06:58:41', '0'),
(8, 'komal joshi', 'thursday', '12:59', '12:59', '20 min', 'sequential', '0', '2019-05-22', '2019-05-22 11:32:00', '0'),
(9, 'sharad chavan', 'tuesday', '12:59', '00:59', '20 min', 'timestamp', '1', '2019-05-28', '2019-06-11 10:37:10', '0'),
(10, 'komal joshi', 'wednesday', '12:59', '01:58', '10 min', 'timestamp', '1', '2019-05-28', '2019-06-11 10:37:14', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `mobile_otp` int(11) NOT NULL,
  `dob` date NOT NULL,
  `sex` enum('1','0') NOT NULL COMMENT '1 = Male, 0 = Female',
  `type` enum('1','0') NOT NULL COMMENT '1 = doctor, 0 = patient',
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `isVerified` enum('1','0') NOT NULL DEFAULT '0',
  `created_date` date NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isDeleted` enum('1','0') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `email`, `password`, `address`, `mobile`, `mobile_otp`, `dob`, `sex`, `type`, `status`, `isVerified`, `created_date`, `updated_date`, `isDeleted`) VALUES
(46, 'test123', 'sharad@gmail.com', '5a105e8b9d40e1329780d62ea2265d8a', 'KEA Softtech, Office no 306, pearl square,hadpsar-handewadi road,', '8623818894', 557826, '2019-12-31', '1', '1', '1', '1', '2019-06-15', '2019-06-22 13:06:53', '0'),
(57, 'test ', '', '098f6bcd4621d373cade4e832627b4f6', '', '9999999999', 317297, '0000-00-00', '0', '1', '1', '1', '2019-06-21', '2019-06-22 13:31:38', '0'),
(62, 'qwerty', '', '5e8667a439c68f5145dd2fcbecf02209', '', '8623818888', 465600, '0000-00-00', '0', '0', '1', '1', '2019-06-22', '2019-06-22 13:31:34', '0'),
(63, 'asdasd', '', '784039240dff400b54eb9089639dbe2d', '', '1231231234', 749, '0000-00-00', '1', '0', '1', '0', '2019-06-22', '2019-06-22 13:54:55', '0'),
(64, 'asdasd', '', 'd86dd898f34e28e8c47192fec35db085', '', '1232131231', 836014, '0000-00-00', '1', '0', '1', '0', '2019-06-22', '2019-06-22 13:56:43', '0'),
(65, 'test test', '', '098f6bcd4621d373cade4e832627b4f6', '', '1234567890', 344108, '0000-00-00', '1', '0', '1', '1', '2019-06-22', '2019-06-22 14:26:31', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD PRIMARY KEY (`professional_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `professional`
--
ALTER TABLE `professional`
  MODIFY `professional_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
