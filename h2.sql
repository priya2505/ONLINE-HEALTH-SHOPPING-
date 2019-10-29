-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 11:17 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `h2`
--

CREATE TABLE `h2` (
  `id` int(61) NOT NULL,
  `hname` varchar(30) NOT NULL,
  `hdisease` varchar(500) NOT NULL,
  `hprice` int(30) NOT NULL,
  `himage` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h2`
--

INSERT INTO `h2` (`id`, `hname`, `hdisease`, `hprice`, `himage`, `quantity`) VALUES
(51, 'Chamomile', '1) helps in anxiety 2) reducing stress 3) helps in insomnia 4) helps fighting against cancer', 855, '/IP images/chamomile.jpg', 0),
(52, 'Lavender', '1) helps in anxiety 2) helps reducing stress 3) helps lowering the blood pressure 4) helps in migrane\r\n', 300, '/IP images/lavender.jpg', 0),
(53, 'Grapeseed extract', '1) helps in cancer 2) lowering LDL(bad) cholesterol 3) helps in leg vein circulation 4) helps in endema 5) lowering blood pressure\r\n', 500, '/IP images/grapeseed.jpg', 0),
(54, 'Echinacea', '1) helps in cold 2) boosts immunity 3) helps in bronchitis 4) helps in upper respiratory infection\r\n', 269, '/IP images/echinacea.jpg', 0),
(55, 'Tea Tree oil', '1) helps reducing acne 2) helps in cuts 3) helps reducing dandruff 4) helpful in insect bites\r\n', 169, '/IP images/teatreeoil.jpg', 0),
(56, 'Flax seed', '1) decreasing obesity 2) regulating blood flow 3) preventing colon cancer 4) reduces inflammation 5) helps in hot flashes\r\n', 100, '/IP images/flaxseed.jpg', 0),
(57, 'Evening Primrose oil', '1) PMS 2) milk skin conditions 3) reduces breast pain 4) helps in menopause 5) reduces inflammation 6) helps in diabetic neuropathy 7) helps in multiple sclerosis 8) helps maintaining blood pressure\r\n', 599, '/IP images/primroseoil.jpg', 0),
(58, 'Turmeric', '1) preventing cancer 2) several skin diseases 3) stopping DNA mutations 4) reduces pain caused by arthritis\r\n', 160, '/IP images/turmeric.jpg', 0),
(59, 'Ginkgo', '1) helps in dimentia 2) helps in alzheimer 3) helpful for eye health 4) reduces inflammation 5) heals bones 6) helps in diabetes 7) helps reducing anxiety 8) helps in dealing with depression\r\n', 499, '/IP images/ginkgo.jpg', 0),
(60, 'Basil', '1) boosting immunity 2) ward off infections 3) ward off influenza\r\n', 25, '/IP images/basil.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `h2`
--
ALTER TABLE `h2`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `h2`
--
ALTER TABLE `h2`
  MODIFY `id` int(61) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
