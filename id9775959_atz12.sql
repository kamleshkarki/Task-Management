-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 02, 2019 at 06:00 AM
-- Server version: 10.3.14-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id9775959_atz12`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` varchar(11) NOT NULL,
  `ename` varchar(30) NOT NULL,
  `dname` varchar(33) NOT NULL,
  `pname` varchar(22) NOT NULL,
  `rto` varchar(33) NOT NULL,
  `status` varchar(33) NOT NULL,
  `pending` varchar(33) NOT NULL DEFAULT 'Yes',
  `task` varchar(1052) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `ename`, `dname`, `pname`, `rto`, `status`, `pending`, `task`, `date`) VALUES
('2019RA09', 'Kamlesh karki', 'Business Development', 'Atzcart', 'Manish Pareek', 'completed', '', 'Create Atz cart task management,create and update new feature,collaborate with team for product listing.', '2019-06-24'),
('2019BDE18', 'Sonam Yadav', 'Business Development', 'ATZCart', 'Manish Pareek', 'pending', '50-99%', 'Product Listing; Apparels, Resolved issues related to websites, Meeting on ATZCart', '2019-06-24'),
('2019MSE02', 'SMITA DEORE', 'Business development', 'Atzcart', 'Manish Pareek', 'completed', '', 'Product listing on electronic,Access Control Panel,Locks,Brackets items as well as food products.', '2019-06-24'),
('2019MSE01', 'Makarand Jadhav', 'Business Development', 'ATZ Cart', 'Manish Pareek', 'pending', '50-99%', 'Worked on Product Listing of Electronics, CCTV Products.', '2019-06-24'),
('2019MSE02', 'SMITA DEORE', 'Business development', 'Atzcart', 'Manish Pareek', 'completed', '', 'Listing of electronics category(Exit switches,Network Video Recorder (NVR)) ', '2019-06-26'),
('2019MSE01', 'Makarand Jadhav', 'Business Development', 'Atz Cart', 'Manish Pareek', 'pending', '50-99%', 'Completed Electronics Category product listing. And started Listing on Gifts and Toys Category.', '2019-06-25'),
('2019MSE02', 'Smita Deore', 'Business development', 'Atz Cart', 'Manish Pareek', 'completed', '', 'Electronic,garment product listing,36 product updated.', '2019-06-25'),
('2019RA09', 'Kamlesh karki', 'Business Development', 'Atz Cart', 'Manish Pareek', 'completed', '', 'Create data validation for data tracker, maintain the data sheet for daily tracker and monthly tracker,maintain overall data set.', '2019-06-25'),
('2019BDE18', 'Sonam Yadav', 'Business Development', 'Atz Cart', 'Manish Pareek', 'completed', '', 'Working on Kurtis,and children clothing.', '2019-06-25'),
('2019MSE01', 'Makarand Jadhav', 'Business Development', 'ATZCart', 'Manish Pareek', 'pending', '50-99%', 'Completed water bottle category, toys. Working on mens wallet.', '2019-06-26'),
('2019RA09', 'Kamlesh Karki', 'Business Development', 'ATZCart', 'Manish Pareek', 'pending', '50-99%', 'Connected with countrywide and took appointment for 27th June, Create dashboard for Employee Task Management.', '2019-06-26'),
('2019BDE18', 'Sonam Yadav', 'Business Development', 'ATZCart', 'Manish Pareek', 'pending', '50-99%', 'Worked on product listing of Kurtis, T-shirts, worked on issues related to product category specification.', '2019-06-26'),
('2019MSE02', 'Smita Deore', 'Business Development', 'ATZCart', 'Manish Pareek2', 'completed', '', 'Listing of electronics and garments products .', '2019-06-27'),
('2019MSE01', 'Makarand Jadhav', 'Business Development', 'ATZ Cart', 'Manish Pareek', 'pending', '50-99%', 'Completed Toys, Wire Cables and Cable Assembly category, started working on Kurtis.', '2019-06-27'),
('2019RA09', 'Kamlesh Karki', 'Business Development', 'ATZ Cart', 'Manish Pareek', 'pending', '50-99%', 'Concerned with Makarand for Product Listing, Data Management.\r\n', '2019-06-27'),
('2019BDE18', 'Sonam Yadav', 'Business Development', 'ATZCart', 'Manish Pareek', 'completed', '', 'Product Listing of Women Kurtis, Kids Lehenga Choli, Shared Accessories catalog with designer.', '2019-06-27'),
('2019MSE02', 'SMITA DEORE', 'Business development', 'Atzcart', 'Manish Pareek', 'completed', '', 'Listing of Lehenga & choli(completed 5 catalog)', '2019-06-28'),
('2019MSE01', 'Makarand Jadhav', 'Business Development', 'ATZ Cart', 'Manish Pareek', 'completed', '50-99%', 'Completed product listing on Kurtis, Lehenga, and electronics category.', '2019-06-28'),
('2019MSE02', 'SMITA DEORE', 'Business development', 'Atzcart', 'Manish Pareek', 'completed', '', 'Listing of Garment (lehenga and choli) and callings', '2019-07-01'),
('2019RA09', 'Kamlesh Karki', 'Business Development', 'ATZCart', 'Manish Pareek', 'pending', '50-99%', 'Maintain data set for atz cart, product listing for women,electronic,create data set in Tableau', '2019-07-01'),
('2019MSE01', 'Makarand Jadhav', 'Business Development', 'ATZ Cart', 'Manish Pareek', 'pending', '50-99%', 'completed product listing on the womens category of sarees, fashion, accessories', '2019-07-01'),
('2019BDE18', 'Sonam Yadav', 'Business Development', 'ATZCart', 'Manish Pareek', 'completed', '', 'Worked on product listing western wear, worked on Mahindra and mahindra Work breakdown structure', '2019-07-01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
