-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 11:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `hop`
--

CREATE TABLE `hop` (
  `hosname` varchar(50) NOT NULL,
  `hosdes` varchar(500) NOT NULL,
  `hosdisease` varchar(500) NOT NULL,
  `hoscontact` varchar(20) NOT NULL,
  `hosimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hop`
--

INSERT INTO `hop` (`hosname`, `hosdes`, `hosdisease`, `hoscontact`, `hosimage`) VALUES
('Hinduja hospital', 'Multispeciality health care hospital and is considered as the best hospital in Mumbai', 'Veer Savarkar Marg, Cadel Road, Mahim, Mumbai - 400016 Near Bombay Scottish School ', '(022) 28984821', '/IP images/hinduja.jpg'),
('J J Hospital', 'General Surgery, Ophthalmology, Otorhinolaryngology, Obstetrics and Gynaecology, Orthopaedics and Anaesthesia\r\n', 'J J Marg, Nagpada-Mumbai Central, Off Jijabhoy Road, Mumbai, Maharashtra 400008\r\n', '(022)28089242', '/IP images/jj.jpg'),
('H.N. Reliance Foundation Hospital', 'Multispeciality health care hospital with \r\n', 'Raja Rammohan Roy Road, Prarthana Samaj, Girgaon, Mumbai, Maharashtra 400004\r\n', '(022)28334456', '/IP images/reliance.jpg'),
('Saifee hospital', 'Multispeciality hospital', 'Hospital in Charni Road, near Charni. road station, Mumbai\r\n', '(022)28089232', '/IP images/saifee.jpg'),
('Jaslok hospital', 'speciality: urology, gynecology, oncology, general and GI surgery, colorectal and pelvic flood surgery\r\n', '15-Dr. Deshmukh marg, ', '(022)26823145', '/IP images/jaslok.jpg'),
('Lilavati hospital', 'best child care hospital', 'Lilavati Hospital, A-791, Bandra Reclamation Rd, Bandra West, Mumbai, Maharashtra 400050', '(022)26068232', '/IP images/lilavati.jpg'),
('Breach Candy hospital', 'best recommenended for knee replacement operations', '60 A, Bhulabhai Desai Marg, Cumballa Hill, Mumbai, Maharashtra 400026\r\n', '(022)28029594', '/IP images/breachcandy.jpg'),
('Bombay hospital', 'Multispeciality health care hospital. provides all treatment under one roof', '2, Vitthaldas Thackersey Marg, Near to Liberty Cinema, New Marine Lines Marine Lines, Mumbai, Maharashtra 400020', '(022)28045538', '/IP images/bombay.jpg'),
('Nanavati hospital', 'best super speciality hospital with  good infrastructure', 'SV Rd, near LIC, LIC Colony, Suresh Colony, Vile Parle West, Mumbai Maharashtra 400056', '(022)22916631', '/IP images/nanavati.jpg'),
('Tata Memorial Hospital', 'Speciality: Cancer treatments\r\n', 'Dr. E, Dr Ernest Borges Rd, Parel, Mumbai, Maharashtra 400012', '(022)26068242', '/IP images/tata.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
