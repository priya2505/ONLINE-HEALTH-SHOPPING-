-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 11:16 AM
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
-- Table structure for table `f1`
--

CREATE TABLE `f1` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `fdescription` varchar(500) NOT NULL,
  `fdiseases` varchar(500) NOT NULL,
  `fprice` int(30) NOT NULL,
  `fimg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f1`
--

INSERT INTO `f1` (`id`, `fname`, `fdescription`, `fdiseases`, `fprice`, `fimg`) VALUES
(1, 'Dragon fruit', 'Calories: 60 , Protein : 1.2 grams , Carbs: 13 grams , Vitamin C : 3% of the RDI , Fiber : 3 grams , Iron : 4% of the RDI , Magnesium : 10% of the RDI ', '1.protect bad LDL cholesterol from becoming oxidised or damaged\r\n2. brain health and a reduced rate of heart disease\r\n3. reducing then insuling resistance \r\nand fatty liver in obese mice\r\n', 80, '/IP images/dragonfruit.jpg'),
(2, 'Apple', 'Vitamin C , Vitamin K , B-complex vitamins , Calcium , Phosphorous , Magnesium', '1) preventing dementia\r\n2) improving neurological health\r\n3) lowering level of bad cholesterol\r\n4)warding off breast cancer\r\n5) obesity\r\n6) reducing risk of diabetes\r\n', 180, '/IP images/a.jpg'),
(3, 'Kiwi', 'Calories : 42 grams , Protein : 0.8 grams , Total fat : 0.4 grams , Vitamin C : 64 milligrams , Vitamin \r\nA : 3 milligrams , Iron : 0.2 milligrams , Potassium : 252 milligrams , Folate : 17 milligrams', '1) reduce rate of cancer\r\n2) reducing risk of diabetes\r\n3) prevents constipation\r\n4) lowering blood pressure\r\n5) reduces kidney stone formation', 65, '/IP images/kiwi.jpg'),
(4, 'Banana', 'Vitamin B6 : 0.5 mg , Manganese : 0.3 mg , Vitamin C : 9 mg , Potassium : 450 mg , Dietary  Fiber : 3 g , Protein : 1 g , Ribloflavin : 0.1 mg , Vitamin A : 84 IU , Iron : 0.3 mg', '1) prevents asthama \r\n2) prevents cancer\r\n3) prevents high blood pressure\r\n4) prevents cario vascular diseases\r\n', 50, '/IP images/banana.jpg'),
(5, 'Pineapple ', 'Calories : 74 , Total Fat : 0 g , Vitamin C : 28 mg , Calcium : 21 mg , Cholesterol : 0 mg , Protein : 1 g , Sodium : 2 mg , Sugar : 13.7 g , Potassium : 206 mg , Total Carbohydrate : 19.5 g', '1) may help to reduce cancer\r\n2) supresses inflammation\r\n3) may ease symptoms of arthritis\r\n4) speed recovery after surgery', 25, '/IP images/pineapple.jpg'),
(6, 'Watermelon', 'Vitamin C : 21% of the RDI , Vitamin A : 18% of the RDI , Potassium : 5% of the RDI , Magnesium : 4% of the RDI , Vitamins B1,B5 and B6 : 3%  of the RDI', '1) prevents cancer\r\n2) lowers inflammation\r\n3) lowers oxidative stress\r\n4) prevents mascular degeneration\r\n5) prevents mascular soreness', 35, '/IP images/watermelon.jpg'),
(7, 'Grapes', 'Total fat : 0.4 mg , Cholesterol : 0 mg , Sodium : 2 mg , Potassium : 191 mg , Vitamin A : 2% , Vitamin C : 6% , Iron : 1% , Calcium : 1%', '1) protect against cancer\r\n2) protect agaist eye problems\r\n3) helps in cariovascular diseases\r\n4) helpful for diabetic people\r\n5)  prevents high blood pressure\r\n6) prevents constipation\r\n7) helps with alzheimers', 100, '/IP images/grapes.jpg'),
(8, 'Orange', 'Vitamin A , Vitamin C , Magnesium , Calcium , Manganese , Copper ', '1) reduces stroke risk in women\r\n2) prevents skin cancer\r\n3) reduces blood pressure\r\n4) reduces kidney stones formation\r\n5)  reduces diabetes', 100, '/IP images/orange.jpg'),
(9, 'Mango', 'Proteins , Fats , Vitamin A , Vitamin C ,  Vitamin B-6 , Vitamin K , Potassium', '1) asthama prevention\r\n2) breast, prostate, lung cancer\r\n3)helpful for bone related issues\r\n4) heart disease\r\n5)helpful for heart diseases', 250, '/IP images/mango.jpg'),
(10, 'Pomegranate', 'Fiber : 7 grams , Protein : 3 grams , Vitamin C : 30% of the RDI , Vitamin K : 36% of the RDI , Folate : 16% of the RDI , Potassium : 12% of the RDI', '1) breast cancer\r\n2) lowering blood pressure\r\n3) fight arthritis and joint pain\r\n4) reduce risk of heart disease\r\n5) helps treating erectile dysfunction', 90, '/IP images/pomegranate.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f1`
--
ALTER TABLE `f1`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f1`
--
ALTER TABLE `f1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
