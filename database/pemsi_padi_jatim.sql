-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2023 at 11:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemsi_padi_jatim`
--

-- --------------------------------------------------------

--
-- Table structure for table `produksi_padi`
--

CREATE TABLE `produksi_padi` (
  `tahun` int(11) NOT NULL,
  `skenario` varchar(20) NOT NULL,
  `produktivitas` decimal(8,3) DEFAULT NULL,
  `luas_panen` int(11) DEFAULT NULL,
  `produksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produksi_padi`
--

INSERT INTO `produksi_padi` (`tahun`, `skenario`, `produktivitas`, `luas_panen`, `produksi`) VALUES
(2012, 'base_model', '6.200', 1975720, 12249464),
(2012, 'skenario1', '6.200', 1975720, 12249464),
(2012, 'skenario2', '6.200', 1975720, 12249464),
(2012, 'skenario3', '6.200', 1975720, 12249464),
(2013, 'base_model', '5.809', 2036967, 11833558),
(2013, 'skenario1', '5.809', 2036967, 11833558),
(2013, 'skenario2', '5.809', 2036967, 11833558),
(2013, 'skenario3', '5.809', 2036967, 11833558),
(2014, 'base_model', '5.891', 2071596, 12203214),
(2014, 'skenario1', '5.891', 2071596, 12203214),
(2014, 'skenario2', '5.891', 2071596, 12203214),
(2014, 'skenario3', '5.891', 2071596, 12203214),
(2015, 'base_model', '6.120', 2150317, 13160947),
(2015, 'skenario1', '6.120', 2150317, 13160947),
(2015, 'skenario2', '6.120', 2150317, 13160947),
(2015, 'skenario3', '6.120', 2150317, 13160947),
(2016, 'base_model', '5.918', 2277185, 13477507),
(2016, 'skenario1', '5.918', 2277185, 13477507),
(2016, 'skenario2', '5.918', 2277185, 13477507),
(2016, 'skenario3', '5.918', 2277185, 13477507),
(2017, 'base_model', '5.611', 2284017, 12815007),
(2017, 'skenario1', '5.611', 2284017, 12815007),
(2017, 'skenario2', '5.611', 2284017, 12815007),
(2017, 'skenario3', '5.611', 2284017, 12815007),
(2018, 'base_model', '5.790', 1827213, 10580070),
(2018, 'skenario1', '5.790', 1827213, 10580070),
(2018, 'skenario2', '5.790', 1827213, 10580070),
(2018, 'skenario3', '5.790', 1827213, 10580070),
(2019, 'base_model', '5.611', 1701136, 9544693),
(2019, 'skenario1', '5.611', 1701136, 9544693),
(2019, 'skenario2', '5.611', 1701136, 9544693),
(2019, 'skenario3', '5.611', 1701136, 9544693),
(2020, 'base_model', '5.751', 1760675, 10125727),
(2020, 'skenario1', '5.751', 1760675, 10125727),
(2020, 'skenario2', '5.751', 1760675, 10125727),
(2020, 'skenario3', '5.751', 1760675, 10125727),
(2021, 'base_model', '5.671', 1746590, 9904095),
(2021, 'skenario1', '5.671', 1746590, 9904095),
(2021, 'skenario2', '5.671', 1746590, 9904095),
(2021, 'skenario3', '5.671', 1746590, 9904095),
(2022, 'base_model', '5.710', 1704672, 9734061),
(2022, 'skenario1', '5.710', 1704672, 9734061),
(2022, 'skenario2', '5.710', 1704672, 9734061),
(2022, 'skenario3', '5.710', 1704672, 9734061),
(2023, 'base_model', '5.531', 1622848, 8975848),
(2023, 'skenario1', '6.200', 1975720, 12249464),
(2023, 'skenario2', '6.200', 1975720, 12249464),
(2023, 'skenario3', '6.200', 1975720, 12249464),
(2024, 'base_model', '5.357', 1544951, 8276694),
(2024, 'skenario1', '6.743', 2204904, 14867286),
(2024, 'skenario2', '6.941', 2204904, 15304014),
(2024, 'skenario3', '7.099', 2204904, 15653334),
(2025, 'base_model', '5.189', 1470793, 7631999),
(2025, 'skenario1', '7.333', 2460672, 18044562),
(2025, 'skenario2', '7.770', 2460672, 19120254),
(2025, 'skenario3', '8.129', 2460672, 20003070),
(2026, 'base_model', '5.026', 1400195, 7037522),
(2026, 'skenario1', '7.975', 2746110, 21900848),
(2026, 'skenario2', '8.699', 2746110, 23888118),
(2026, 'skenario3', '9.308', 2746110, 25561506),
(2027, 'base_model', '4.868', 1332986, 6489349),
(2027, 'skenario1', '8.673', 3064659, 26581260),
(2027, 'skenario2', '9.738', 3064659, 29844908),
(2027, 'skenario3', '10.658', 3064659, 32664514),
(2028, 'base_model', '4.715', 1269003, 5983876),
(2028, 'skenario1', '9.433', 3420160, 32261920),
(2028, 'skenario2', '10.902', 3420160, 37287092),
(2028, 'skenario3', '12.204', 3420160, 41741300),
(2029, 'base_model', '4.567', 1208090, 5517775),
(2029, 'skenario1', '10.259', 3816898, 39156588),
(2029, 'skenario2', '12.205', 3816898, 46585080),
(2029, 'skenario3', '13.975', 3816898, 53340340),
(2030, 'base_model', '4.424', 1150102, 5087980),
(2030, 'skenario1', '11.157', 4259659, 47524708),
(2030, 'skenario2', '13.663', 4259659, 58201628),
(2030, 'skenario3', '16.002', 4259659, 68162504);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produksi_padi`
--
ALTER TABLE `produksi_padi`
  ADD PRIMARY KEY (`tahun`,`skenario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
