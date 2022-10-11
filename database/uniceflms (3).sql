-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2022 at 10:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uniceflms`
--

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `id` int(11) NOT NULL,
  `block_name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL,
  `ci_id` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `creation_date` date NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`id`, `block_name`, `state_id`, `ci_id`, `status`, `creation_date`, `modification_date`) VALUES
(1, 'Narayanpur', 7, 134, 1, '2022-08-31', '0000-00-00'),
(2, ' Orchha', 7, 134, 1, '2022-09-02', '0000-00-00'),
(3, 'Bhairamgarh', 7, 119, 1, '2022-09-03', '0000-00-00'),
(4, 'Bhopalpatnam', 7, 119, 1, '2022-09-03', '0000-00-00'),
(5, 'Bijapur', 7, 119, 1, '2022-09-03', '0000-00-00'),
(6, 'Usoor', 7, 119, 1, '2022-09-03', '0000-00-00'),
(7, 'Geedam', 7, 121, 1, '2022-09-05', '0000-00-00'),
(9, 'Kuakonda', 7, 121, 1, '2022-09-05', '0000-00-00'),
(11, 'Katekalyan', 7, 121, 1, '2022-09-05', '0000-00-00'),
(12, 'Dantewada', 7, 121, 1, '2022-09-05', '0000-00-00'),
(13, 'Makdi', 7, 129, 1, '2022-09-06', '0000-00-00'),
(14, 'Pharasgaon', 7, 129, 1, '2022-09-06', '0000-00-00'),
(15, 'Kondagaon', 7, 129, 1, '2022-09-06', '0000-00-00'),
(16, 'Baderajpur', 7, 129, 1, '2022-09-06', '0000-00-00'),
(17, 'Keshkal ', 7, 129, 1, '2022-09-06', '0000-00-00'),
(18, 'Katekalyan', 7, 121, 1, '2022-09-09', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `ci_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `state_id` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`ci_id`, `name`, `state_id`, `status`) VALUES
(1, 'Nicobar', 1, 0),
(2, 'North and Middle Andaman', 1, 0),
(3, 'South Andaman', 1, 0),
(4, 'Anantapur', 2, 0),
(5, 'Chittoor', 2, 0),
(6, 'East Godavari', 2, 0),
(7, 'Guntur', 2, 0),
(8, 'Krishna', 2, 0),
(9, 'Kurnool', 2, 0),
(10, 'Prakasam', 2, 0),
(11, 'Srikakulam', 2, 0),
(12, 'Sri Potti Sriramulu Nellore', 2, 0),
(13, 'Visakhapatnam', 2, 0),
(14, 'Vizianagaram', 2, 0),
(15, 'West Godavari', 2, 0),
(16, 'YSR District (Cuddapah)', 2, 0),
(17, 'Anjaw', 3, 0),
(18, 'Changlang', 3, 0),
(19, 'Dibang Valley', 3, 0),
(20, 'East Kameng', 3, 0),
(21, 'East Siang', 3, 0),
(22, 'Kamle', 3, 0),
(23, 'Kra Daadi', 3, 0),
(24, 'Kurung Kumey', 3, 0),
(25, 'Lepa Rada', 3, 0),
(26, 'Lohit', 3, 0),
(27, 'Longding', 3, 0),
(28, 'Lower Dibang Valley', 3, 0),
(29, 'Lower Siang', 3, 0),
(30, 'Lower Subansiri', 3, 0),
(31, 'Namsai', 3, 0),
(32, 'Pakke Kessang', 3, 0),
(33, 'Papum Pare', 3, 0),
(34, 'Shi Yomi', 3, 0),
(35, 'Siang', 3, 0),
(36, 'Tawang', 3, 0),
(37, 'Tirap', 3, 0),
(38, 'Upper Siang', 3, 0),
(39, 'Upper Subansiri', 3, 0),
(40, 'West Kameng', 3, 0),
(41, 'West Siang', 3, 0),
(42, 'Baksa', 4, 0),
(43, 'Barpeta', 4, 0),
(44, 'Biswanath', 4, 0),
(45, 'Bongaigaon', 4, 0),
(46, 'Cachar', 4, 0),
(47, 'Charaideo', 4, 0),
(48, 'Chirang', 4, 0),
(49, 'Darrang', 4, 0),
(50, 'Dhemaji', 4, 0),
(51, 'Dhubri', 4, 0),
(52, 'Dibrugarh', 4, 0),
(53, 'Dima Hasao (NC Hills)', 4, 0),
(54, 'Goalpara', 4, 0),
(55, 'Golaghat', 4, 0),
(56, 'Hailakandi', 4, 0),
(57, 'Hojai', 4, 0),
(58, 'Jorhat', 4, 0),
(59, 'Kamrup', 4, 0),
(60, 'Kamrup Metropolitan', 4, 0),
(61, 'Karbi Anglong', 4, 0),
(62, 'Karimganj', 4, 0),
(63, 'Kokrajhar', 4, 0),
(64, 'Lakhimpur', 4, 0),
(65, 'Majuli', 4, 0),
(66, 'Morigaon', 4, 0),
(67, 'Nagaon', 4, 0),
(68, 'Nalbari', 4, 0),
(69, 'Sivasagar', 4, 0),
(70, 'Sonitpur', 4, 0),
(71, 'South Salamara-Mankachar', 4, 0),
(72, 'Tinsukia', 4, 0),
(73, 'Udalguri', 4, 0),
(74, 'West Karbi Anglong', 4, 0),
(75, 'Araria', 5, 0),
(76, 'Arwal', 5, 0),
(77, 'Aurangabad', 5, 0),
(78, 'Banka', 5, 0),
(79, 'Begusarai', 5, 0),
(80, 'Bhagalpur', 5, 0),
(81, 'Bhojpur', 5, 0),
(82, 'Buxar', 5, 0),
(83, 'Darbhanga', 5, 0),
(84, 'East Champaran (Motihari)', 5, 0),
(85, 'Gaya', 5, 0),
(86, 'Gopalganj', 5, 0),
(87, 'Jamui', 5, 0),
(88, 'Jehanabad', 5, 0),
(89, 'Kaimur (Bhabua)', 5, 0),
(90, 'Katihar', 5, 0),
(91, 'Khagaria', 5, 0),
(92, 'Kishanganj', 5, 0),
(93, 'Lakhisarai', 5, 0),
(94, 'Madhepura', 5, 0),
(95, 'Madhubani', 5, 0),
(96, 'Munger', 5, 0),
(97, 'Muzaffarpur', 5, 0),
(98, 'Nalanda', 5, 0),
(99, 'Nawada', 5, 0),
(100, 'Patna', 5, 0),
(101, 'Purnia', 5, 0),
(102, 'Rohtas', 5, 0),
(103, 'Saharsa', 5, 0),
(104, 'Samastipur', 5, 0),
(105, 'Saran', 5, 0),
(106, 'Sheikhpura', 5, 0),
(107, 'Sheohar', 5, 0),
(108, 'Sitamarhi', 5, 0),
(109, 'Siwan', 5, 0),
(110, 'Supaul', 5, 0),
(111, 'Vaishali', 5, 0),
(112, 'West Champaran', 5, 0),
(113, 'Chandigarh', 6, 0),
(114, 'Balod', 7, 0),
(115, 'Baloda Bazar', 7, 0),
(116, 'Balrampur', 7, 0),
(117, 'Bastar', 7, 0),
(118, 'Bemetara', 7, 0),
(119, 'Bijapur', 7, 1),
(120, 'Bilaspur', 7, 0),
(121, 'Dantewada (South Bastar)', 7, 1),
(122, 'Dhamtari', 7, 0),
(123, 'Durg', 7, 0),
(124, 'Gariyaband', 7, 0),
(125, 'Janjgir-Champa', 7, 0),
(126, 'Jashpur', 7, 0),
(127, 'Kabirdham (Kawardha)', 7, 0),
(128, 'Kanker (North Bastar)', 7, 0),
(129, 'Kondagaon', 7, 1),
(130, 'Korba', 7, 0),
(131, 'Korea (Koriya)', 7, 0),
(132, 'Mahasamund', 7, 0),
(133, 'Mungeli', 7, 0),
(134, 'Narayanpur', 7, 1),
(135, 'Raigarh', 7, 0),
(136, 'Raipur', 7, 0),
(137, 'Rajnandgaon', 7, 0),
(138, 'Sukma', 7, 0),
(139, 'Surajpur', 7, 0),
(140, 'Surguja', 7, 0),
(141, 'Dadra & Nagar Haveli', 8, 0),
(142, 'Daman', 9, 0),
(143, 'Diu', 9, 0),
(144, 'Central Delhi', 10, 0),
(145, 'East Delhi', 10, 0),
(146, 'New Delhi', 10, 0),
(147, 'North Delhi', 10, 0),
(148, 'North East Delhi', 10, 0),
(149, 'North West Delhi', 10, 0),
(150, 'Shahdara', 10, 0),
(151, 'South Delhi', 10, 0),
(152, 'South East Delhi', 10, 0),
(153, 'South West Delhi', 10, 0),
(154, 'West Delhi', 10, 0),
(155, 'North Goa', 11, 0),
(156, 'South Goa', 11, 0),
(157, 'Ahmedabad', 12, 0),
(158, 'Amreli', 12, 0),
(159, 'Anand', 12, 0),
(160, 'Aravalli', 12, 0),
(161, 'Banaskantha', 12, 0),
(162, 'Bharuch', 12, 0),
(163, 'Bhavnagar', 12, 0),
(164, 'Botad', 12, 0),
(165, 'Chhota Udepur', 12, 0),
(166, 'Dahod', 12, 0),
(167, 'Dangs (Ahwa)', 12, 0),
(168, 'Devbhoomi Dwarka', 12, 0),
(169, 'Gandhinagar', 12, 0),
(170, 'Gir Somnath', 12, 0),
(171, 'Jamnagar', 12, 0),
(172, 'Junagadh', 12, 0),
(173, 'Kachchh', 12, 0),
(174, 'Kheda (Nadiad)', 12, 0),
(175, 'Mahisagar', 12, 0),
(176, 'Mehsana', 12, 0),
(177, 'Morbi', 12, 0),
(178, 'Narmada (Rajpipla)', 12, 0),
(179, 'Navsari', 12, 0),
(180, 'Panchmahal', 12, 0),
(181, 'Patan', 12, 0),
(182, 'Porbandar', 12, 0),
(183, 'Rajkot', 12, 0),
(184, 'Sabarkantha', 12, 0),
(185, 'Surat', 12, 0),
(186, 'Surendranagar', 12, 0),
(187, 'Tapi', 12, 0),
(188, 'Vadodara', 12, 0),
(189, 'Valsad', 12, 0),
(190, 'Ambala', 13, 0),
(191, 'Bhiwani', 13, 0),
(192, 'Charkhi Dadri', 13, 0),
(193, 'Faridabad', 13, 0),
(194, 'Fatehabad', 13, 0),
(195, 'Gurugram', 13, 0),
(196, 'Hisar', 13, 0),
(197, 'Jhajjar', 13, 0),
(198, 'Jind', 13, 0),
(199, 'Kaithal', 13, 0),
(200, 'Karnal', 13, 0),
(201, 'Kurukshetra', 13, 0),
(202, 'Mahendragarh', 13, 0),
(203, 'Nuh', 13, 0),
(204, 'Palwal', 13, 0),
(205, 'Panchkula', 13, 0),
(206, 'Panipat', 13, 0),
(207, 'Rewari', 13, 0),
(208, 'Rohtak', 13, 0),
(209, 'Sirsa', 13, 0),
(210, 'Sonipat', 13, 0),
(211, 'Yamunanagar', 13, 0),
(212, 'Bilaspur', 14, 0),
(213, 'Chamba', 14, 0),
(214, 'Hamirpur', 14, 0),
(215, 'Kangra', 14, 0),
(216, 'Kinnaur', 14, 0),
(217, 'Kullu', 14, 0),
(218, 'Lahaul & Spiti', 14, 0),
(219, 'Mandi', 14, 0),
(220, 'Shimla', 14, 0),
(221, 'Sirmaur', 14, 0),
(222, 'Solan', 14, 0),
(223, 'Una', 14, 0),
(224, 'Anantnag', 15, 0),
(225, 'Bandipore', 15, 0),
(226, 'Baramulla', 15, 0),
(227, 'Budgam', 15, 0),
(228, 'Doda', 15, 0),
(229, 'Ganderbal', 15, 0),
(230, 'Jammu', 15, 0),
(231, 'Kathua', 15, 0),
(232, 'Kishtwar', 15, 0),
(233, 'Kulgam', 15, 0),
(234, 'Kupwara', 15, 0),
(235, 'Poonch', 15, 0),
(236, 'Pulwama', 15, 0),
(237, 'Rajouri', 15, 0),
(238, 'Ramban', 15, 0),
(239, 'Reasi', 15, 0),
(240, 'Samba', 15, 0),
(241, 'Shopian', 15, 0),
(242, 'Srinagar', 15, 0),
(243, 'Udhampur', 15, 0),
(244, 'Bokaro', 16, 0),
(245, 'Chatra', 16, 0),
(246, 'Deoghar', 16, 0),
(247, 'Dhanbad', 16, 0),
(248, 'Dumka', 16, 0),
(249, 'East Singhbhum', 16, 0),
(250, 'Garhwa', 16, 0),
(251, 'Giridih', 16, 0),
(252, 'Godda', 16, 0),
(253, 'Gumla', 16, 0),
(254, 'Hazaribag', 16, 0),
(255, 'Jamtara', 16, 0),
(256, 'Khunti', 16, 0),
(257, 'Koderma', 16, 0),
(258, 'Latehar', 16, 0),
(259, 'Lohardaga', 16, 0),
(260, 'Pakur', 16, 0),
(261, 'Palamu', 16, 0),
(262, 'Ramgarh', 16, 0),
(263, 'Ranchi', 16, 0),
(264, 'Sahibganj', 16, 0),
(265, 'Seraikela-Kharsawan', 16, 0),
(266, 'Simdega', 16, 0),
(267, 'West Singhbhum', 16, 0),
(268, 'Bagalkot', 17, 0),
(269, 'Ballari (Bellary)', 17, 0),
(270, 'Belagavi', 17, 0),
(271, 'Bengaluru Rural', 17, 0),
(272, 'BengaluruUrban', 17, 0),
(273, 'Bidar', 17, 0),
(274, 'Chamarajanagar', 17, 0),
(275, 'Chikballapur', 17, 0),
(276, 'Chikkamagaluru', 17, 0),
(277, 'Chitradurga', 17, 0),
(278, 'Dakshina Kannada', 17, 0),
(279, 'Davangere', 17, 0),
(280, 'Dharwad', 17, 0),
(281, 'Gadag', 17, 0),
(282, 'Hassan', 17, 0),
(283, 'Haveri', 17, 0),
(284, 'Kalaburagi', 17, 0),
(285, 'Kodagu', 17, 0),
(286, 'Kolar', 17, 0),
(287, 'Koppal', 17, 0),
(288, 'Mandya', 17, 0),
(289, 'Mysuru', 17, 0),
(290, 'Raichur', 17, 0),
(291, 'Ramanagara', 17, 0),
(292, 'Shivamogga', 17, 0),
(293, 'Tumakuru', 17, 0),
(294, 'Udupi', 17, 0),
(295, 'Uttara Kannada', 17, 0),
(296, 'Vijayapura', 17, 0),
(297, 'Yadgir', 17, 0),
(298, 'Alappuzha', 18, 0),
(299, 'Ernakulam', 18, 0),
(300, 'Idukki', 18, 0),
(301, 'Kannur', 18, 0),
(302, 'Kasaragod', 18, 0),
(303, 'Kollam', 18, 0),
(304, 'Kottayam', 18, 0),
(305, 'Kozhikode', 18, 0),
(306, 'Malappuram', 18, 0),
(307, 'Palakkad', 18, 0),
(308, 'Pathanamthitta', 18, 0),
(309, 'Thiruvananthapuram', 18, 0),
(310, 'Thrissur', 18, 0),
(311, 'Wayanad', 18, 0),
(312, 'Kargil', 38, 0),
(313, 'Leh', 38, 0),
(314, 'Lakshadweep', 19, 0),
(315, 'Agar Malwa', 20, 0),
(316, 'Alirajpur', 20, 0),
(317, 'Anuppur', 20, 0),
(318, 'Ashoknagar', 20, 0),
(319, 'Balaghat', 20, 0),
(320, 'Barwani', 20, 0),
(321, 'Betul', 20, 0),
(322, 'Bhind', 20, 0),
(323, 'Bhopal', 20, 0),
(324, 'Burhanpur', 20, 0),
(325, 'Chhatarpur', 20, 0),
(326, 'Chhindwara', 20, 0),
(327, 'Damoh', 20, 0),
(328, 'Datia', 20, 0),
(329, 'Dewas', 20, 0),
(330, 'Dhar', 20, 0),
(331, 'Dindori', 20, 0),
(332, 'Guna', 20, 0),
(333, 'Gwalior', 20, 0),
(334, 'Harda', 20, 0),
(335, 'Hoshangabad', 20, 0),
(336, 'Indore', 20, 0),
(337, 'Jabalpur', 20, 0),
(338, 'Jhabua', 20, 0),
(339, 'Katni', 20, 0),
(340, 'Khandwa', 20, 0),
(341, 'Khargone', 20, 0),
(342, 'Mandla', 20, 0),
(343, 'Mandsaur', 20, 0),
(344, 'Morena', 20, 0),
(345, 'Narsinghpur', 20, 0),
(346, 'Neemuch', 20, 0),
(347, 'Niwari', 20, 0),
(348, 'Panna', 20, 0),
(349, 'Raisen', 20, 0),
(350, 'Rajgarh', 20, 0),
(351, 'Ratlam', 20, 0),
(352, 'Rewa', 20, 0),
(353, 'Sagar', 20, 0),
(354, 'Satna', 20, 0),
(355, 'Sehore', 20, 0),
(356, 'Seoni', 20, 0),
(357, 'Shahdol', 20, 0),
(358, 'Shajapur', 20, 0),
(359, 'Sheopur', 20, 0),
(360, 'Shivpuri', 20, 0),
(361, 'Sidhi', 20, 0),
(362, 'Singrauli', 20, 0),
(363, 'Tikamgarh', 20, 0),
(364, 'Ujjain', 20, 0),
(365, 'Umaria', 20, 0),
(366, 'Vidisha', 20, 0),
(367, 'Ahmednagar', 21, 0),
(368, 'Akola', 21, 0),
(369, 'Amravati', 21, 0),
(370, 'Aurangabad', 21, 0),
(371, 'Beed', 21, 0),
(372, 'Bhandara', 21, 0),
(373, 'Buldhana', 21, 0),
(374, 'Chandrapur', 21, 0),
(375, 'Dhule', 21, 0),
(376, 'Gadchiroli', 21, 0),
(377, 'Gondia', 21, 0),
(378, 'Hingoli', 21, 0),
(379, 'Jalgaon', 21, 0),
(380, 'Jalna', 21, 0),
(381, 'Kolhapur', 21, 0),
(382, 'Latur', 21, 0),
(383, 'Mumbai City', 21, 0),
(384, 'Mumbai Suburban', 21, 0),
(385, 'Nagpur', 21, 0),
(386, 'Nanded', 21, 0),
(387, 'Nandurbar', 21, 0),
(388, 'Nashik', 21, 0),
(389, 'Osmanabad', 21, 0),
(390, 'Palghar', 21, 0),
(391, 'Parbhani', 21, 0),
(392, 'Pune', 21, 0),
(393, 'Raigad', 21, 0),
(394, 'Ratnagiri', 21, 0),
(395, 'Sangli', 21, 0),
(396, 'Satara', 21, 0),
(397, 'Sindhudurg', 21, 0),
(398, 'Solapur', 21, 0),
(399, 'Thane', 21, 0),
(400, 'Wardha', 21, 0),
(401, 'Washim', 21, 0),
(402, 'Yavatmal', 21, 0),
(403, 'Bishnupur', 22, 0),
(404, 'Chandel', 22, 0),
(405, 'Churachandpur', 22, 0),
(406, 'Imphal East', 22, 0),
(407, 'Imphal West', 22, 0),
(408, 'Jiribam', 22, 0),
(409, 'Kakching', 22, 0),
(410, 'Kamjong', 22, 0),
(411, 'Kangpokpi', 22, 0),
(412, 'Noney', 22, 0),
(413, 'Pherzawl', 22, 0),
(414, 'Senapati', 22, 0),
(415, 'Tamenglong', 22, 0),
(416, 'Tengnoupal', 22, 0),
(417, 'Thoubal', 22, 0),
(418, 'Ukhrul', 22, 0),
(419, 'East Garo Hills', 23, 0),
(420, 'East Jaintia Hills', 23, 0),
(421, 'East Khasi Hills', 23, 0),
(422, 'North Garo Hills', 23, 0),
(423, 'Ri Bhoi', 23, 0),
(424, 'South Garo Hills', 23, 0),
(425, 'South West Garo Hills', 23, 0),
(426, 'South West Khasi Hills', 23, 0),
(427, 'West Garo Hills', 23, 0),
(428, 'West Jaintia Hills', 23, 0),
(429, 'West Khasi Hills', 23, 0),
(430, 'Aizawl', 24, 0),
(431, 'Champhai', 24, 0),
(432, 'Kolasib', 24, 0),
(433, 'Lawngtlai', 24, 0),
(434, 'Lunglei', 24, 0),
(435, 'Mamit', 24, 0),
(436, 'Saiha', 24, 0),
(437, 'Serchhip', 24, 0),
(438, 'Dimapur', 25, 0),
(439, 'Kiphire', 25, 0),
(440, 'Kohima', 25, 0),
(441, 'Longleng', 25, 0),
(442, 'Mokokchung', 25, 0),
(443, 'Mon', 25, 0),
(444, 'Peren', 25, 0),
(445, 'Phek', 25, 0),
(446, 'Tuensang', 25, 0),
(447, 'Wokha', 25, 0),
(448, 'Zunheboto', 25, 0),
(449, 'Angul', 26, 0),
(450, 'Balangir', 26, 0),
(451, 'Balasore', 26, 0),
(452, 'Bargarh', 26, 0),
(453, 'Bhadrak', 26, 0),
(454, 'Boudh', 26, 0),
(455, 'Cuttack', 26, 0),
(456, 'Deogarh', 26, 0),
(457, 'Dhenkanal', 26, 0),
(458, 'Gajapati', 26, 0),
(459, 'Ganjam', 26, 0),
(460, 'Jagatsinghapur', 26, 0),
(461, 'Jajpur', 26, 0),
(462, 'Jharsuguda', 26, 0),
(463, 'Kalahandi', 26, 0),
(464, 'Kandhamal', 26, 0),
(465, 'Kendrapara', 26, 0),
(466, 'Kendujhar (Keonjhar)', 26, 0),
(467, 'Khordha', 26, 0),
(468, 'Koraput', 26, 0),
(469, 'Malkangiri', 26, 0),
(470, 'Mayurbhanj', 26, 0),
(471, 'Nabarangpur', 26, 0),
(472, 'Nayagarh', 26, 0),
(473, 'Nuapada', 26, 0),
(474, 'Puri', 26, 0),
(475, 'Rayagada', 26, 0),
(476, 'Sambalpur', 26, 0),
(477, 'Sonepur', 26, 0),
(478, 'Sundargarh', 26, 0),
(479, 'Karaikal', 27, 0),
(480, 'Mahe', 27, 0),
(481, 'Puducherry', 27, 0),
(482, 'Yanam', 27, 0),
(483, 'Amritsar', 28, 0),
(484, 'Barnala', 28, 0),
(485, 'Bathinda', 28, 0),
(486, 'Faridkot', 28, 0),
(487, 'Fatehgarh Sahib', 28, 0),
(488, 'Fazilka', 28, 0),
(489, 'Ferozepur', 28, 0),
(490, 'Gurdaspur', 28, 0),
(491, 'Hoshiarpur', 28, 0),
(492, 'Jalandhar', 28, 0),
(493, 'Kapurthala', 28, 0),
(494, 'Ludhiana', 28, 0),
(495, 'Mansa', 28, 0),
(496, 'Moga', 28, 0),
(497, 'Muktsar', 28, 0),
(498, 'Shahid Bhagat Singh Nagar', 28, 0),
(499, 'Pathankot', 28, 0),
(500, 'Patiala', 28, 0),
(501, 'Rupnagar', 28, 0),
(502, 'Sahibzada Ajit Singh Nagar', 28, 0),
(503, 'Sangrur', 28, 0),
(504, 'Tarn Taran', 28, 0),
(505, 'Ajmer', 29, 0),
(506, 'Alwar', 29, 0),
(507, 'Banswara', 29, 0),
(508, 'Baran', 29, 0),
(509, 'Barmer', 29, 0),
(510, 'Bharatpur', 29, 0),
(511, 'Bhilwara', 29, 0),
(512, 'Bikaner', 29, 0),
(513, 'Bundi', 29, 0),
(514, 'Chittorgarh', 29, 0),
(515, 'Churu', 29, 0),
(516, 'Dausa', 29, 0),
(517, 'Dholpur', 29, 0),
(518, 'Dungarpur', 29, 0),
(519, 'Hanumangarh', 29, 0),
(520, 'Jaipur', 29, 0),
(521, 'Jaisalmer', 29, 0),
(522, 'Jalore', 29, 0),
(523, 'Jhalawar', 29, 0),
(524, 'Jhunjhunu', 29, 0),
(525, 'Jodhpur', 29, 0),
(526, 'Karauli', 29, 0),
(527, 'Kota', 29, 0),
(528, 'Nagaur', 29, 0),
(529, 'Pali', 29, 0),
(530, 'Pratapgarh', 29, 0),
(531, 'Rajsamand', 29, 0),
(532, 'Sawai Madhopur', 29, 0),
(533, 'Sikar', 29, 0),
(534, 'Sirohi', 29, 0),
(535, 'Sri Ganganagar', 29, 0),
(536, 'Tonk', 29, 0),
(537, 'Udaipur', 29, 0),
(538, 'East Sikkim', 30, 0),
(539, 'North Sikkim', 30, 0),
(540, 'South Sikkim', 30, 0),
(541, 'West Sikkim', 30, 0),
(542, 'Ariyalur', 31, 0),
(543, 'Chengalpattu', 31, 0),
(544, 'Chennai', 31, 0),
(545, 'Coimbatore', 31, 0),
(546, 'Cuddalore', 31, 0),
(547, 'Dharmapuri', 31, 0),
(548, 'Dindigul', 31, 0),
(549, 'Erode', 31, 0),
(550, 'Kallakurichi', 31, 0),
(551, 'Kanchipuram', 31, 0),
(552, 'Kanyakumari', 31, 0),
(553, 'Karur', 31, 0),
(554, 'Krishnagiri', 31, 0),
(555, 'Madurai', 31, 0),
(556, 'Nagapattinam', 31, 0),
(557, 'Namakkal', 31, 0),
(558, 'Nilgiris', 31, 0),
(559, 'Perambalur', 31, 0),
(560, 'Pudukkottai', 31, 0),
(561, 'Ramanathapuram', 31, 0),
(562, 'Ranipet', 31, 0),
(563, 'Salem', 31, 0),
(564, 'Sivaganga', 31, 0),
(565, 'Tenkasi', 31, 0),
(566, 'Thanjavur', 31, 0),
(567, 'Theni', 31, 0),
(568, 'Thoothukudi', 31, 0),
(569, 'Tiruchirappalli', 31, 0),
(570, 'Tirunelveli', 31, 0),
(571, 'Tirupathur', 31, 0),
(572, 'Tiruppur', 31, 0),
(573, 'Tiruvallur', 31, 0),
(574, 'Tiruvannamalai', 31, 0),
(575, 'Tiruvarur', 31, 0),
(576, 'Vellore', 31, 0),
(577, 'Viluppuram', 31, 0),
(578, 'Virudhunagar', 31, 0),
(579, 'Adilabad', 32, 0),
(580, 'Bhadradri Kothagudem', 32, 0),
(581, 'Hyderabad', 32, 0),
(582, 'Jagtial', 32, 0),
(583, 'Jangaon', 32, 0),
(584, 'Jayashankar Bhoopalpally', 32, 0),
(585, 'Jogulamba Gadwal', 32, 0),
(586, 'Kamareddy', 32, 0),
(587, 'Karimnagar', 32, 0),
(588, 'Khammam', 32, 0),
(589, 'Komaram Bheem Asifabad', 32, 0),
(590, 'Mahabubabad', 32, 0),
(591, 'Mahabubnagar', 32, 0),
(592, 'Mancherial', 32, 0),
(593, 'Medak', 32, 0),
(594, 'Medchal', 32, 0),
(595, 'Nagarkurnool', 32, 0),
(596, 'Nalgonda', 32, 0),
(597, 'Nirmal', 32, 0),
(598, 'Nizamabad', 32, 0),
(599, 'Peddapalli', 32, 0),
(600, 'Rajanna Sircilla', 32, 0),
(601, 'Rangareddy', 32, 0),
(602, 'Sangareddy', 32, 0),
(603, 'Siddipet', 32, 0),
(604, 'Suryapet', 32, 0),
(605, 'Vikarabad', 32, 0),
(606, 'Wanaparthy', 32, 0),
(607, 'Warangal (Rural)', 32, 0),
(608, 'Warangal (Urban)', 32, 0),
(609, 'Yadadri Bhuvanagiri', 32, 0),
(610, 'Dhalai', 33, 0),
(611, 'Gomati', 33, 0),
(612, 'Khowai', 33, 0),
(613, 'North Tripura', 33, 0),
(614, 'Sepahijala', 33, 0),
(615, 'South Tripura', 33, 0),
(616, 'Unakoti', 33, 0),
(617, 'West Tripura', 33, 0),
(618, 'Almora', 37, 0),
(619, 'Bageshwar', 37, 0),
(620, 'Chamoli', 37, 0),
(621, 'Champawat', 37, 0),
(622, 'Dehradun', 37, 0),
(623, 'Haridwar', 37, 0),
(624, 'Nainital', 37, 0),
(625, 'Pauri Garhwal', 37, 0),
(626, 'Pithoragarh', 37, 0),
(627, 'Rudraprayag', 37, 0),
(628, 'Tehri Garhwal', 37, 0),
(629, 'Udham Singh Nagar', 37, 0),
(630, 'Uttarkashi', 37, 0),
(631, 'Agra', 34, 0),
(632, 'Aligarh', 34, 0),
(633, 'Allahabad', 34, 0),
(634, 'Ambedkar Nagar', 34, 0),
(635, 'Amethi (Chatrapati Sahuji Mahr', 34, 0),
(636, 'Amroha (J.P. Nagar)', 34, 0),
(637, 'Auraiya', 34, 0),
(638, 'Azamgarh', 34, 0),
(639, 'Baghpat', 34, 0),
(640, 'Bahraich', 34, 0),
(641, 'Ballia', 34, 0),
(642, 'Balrampur', 34, 0),
(643, 'Banda', 34, 0),
(644, 'Barabanki', 34, 0),
(645, 'Bareilly', 34, 0),
(646, 'Basti', 34, 0),
(647, 'Bhadohi', 34, 0),
(648, 'Bijnor', 34, 0),
(649, 'Budaun', 34, 0),
(650, 'Bulandshahr', 34, 0),
(651, 'Chandauli', 34, 0),
(652, 'Chitrakoot', 34, 0),
(653, 'Deoria', 34, 0),
(654, 'Etah', 34, 0),
(655, 'Etawah', 34, 0),
(656, 'Faizabad', 34, 0),
(657, 'Farrukhabad', 34, 0),
(658, 'Fatehpur', 34, 0),
(659, 'Firozabad', 34, 0),
(660, 'Gautam Buddha Nagar', 34, 0),
(661, 'Ghaziabad', 34, 0),
(662, 'Ghazipur', 34, 0),
(663, 'Gonda', 34, 0),
(664, 'Gorakhpur', 34, 0),
(665, 'Hamirpur', 34, 0),
(666, 'Hapur (Panchsheel Nagar)', 34, 0),
(667, 'Hardoi', 34, 0),
(668, 'Hathras', 34, 0),
(669, 'Jalaun', 34, 0),
(670, 'Jaunpur', 34, 0),
(671, 'Jhansi', 34, 0),
(672, 'Kannauj', 34, 0),
(673, 'Kanpur Dehat', 34, 0),
(674, 'Kanpur Nagar', 34, 0),
(675, 'Kanshiram Nagar (Kasganj)', 34, 0),
(676, 'Kaushambi', 34, 0),
(677, 'Kushinagar (Padrauna)', 34, 0),
(678, 'Lakhimpur - Kheri', 34, 0),
(679, 'Lalitpur', 34, 0),
(680, 'Lucknow', 34, 0),
(681, 'Maharajganj', 34, 0),
(682, 'Mahoba', 34, 0),
(683, 'Mainpuri', 34, 0),
(684, 'Mathura', 34, 0),
(685, 'Mau', 34, 0),
(686, 'Meerut', 34, 0),
(687, 'Mirzapur', 34, 0),
(688, 'Moradabad', 34, 0),
(689, 'Muzaffarnagar', 34, 0),
(690, 'Pilibhit', 34, 0),
(691, 'Pratapgarh', 34, 0),
(692, 'RaeBareli', 34, 0),
(693, 'Rampur', 34, 0),
(694, 'Saharanpur', 34, 0),
(695, 'Sambhal (Bhim Nagar)', 34, 0),
(696, 'Sant Kabir Nagar', 34, 0),
(697, 'Shahjahanpur', 34, 0),
(698, 'Shamali (Prabuddh Nagar)', 34, 0),
(699, 'Shravasti', 34, 0),
(700, 'Siddharth Nagar', 34, 0),
(701, 'Sitapur', 34, 0),
(702, 'Sonbhadra', 34, 0),
(703, 'Sultanpur', 34, 0),
(704, 'Unnao', 34, 0),
(705, 'Varanasi', 34, 0),
(706, 'Alipurduar', 36, 0),
(707, 'Bankura', 36, 0),
(708, 'Birbhum', 36, 0),
(709, 'Cooch Behar', 36, 0),
(710, 'Dakshin Dinajpur', 36, 0),
(711, 'Darjeeling', 36, 0),
(712, 'Hooghly', 36, 0),
(713, 'Howrah', 36, 0),
(714, 'Jalpaiguri', 36, 0),
(715, 'Jhargram', 36, 0),
(716, 'Kalimpong', 36, 0),
(717, 'Kolkata', 36, 0),
(718, 'Malda', 36, 0),
(719, 'Murshidabad', 36, 0),
(720, 'Nadia', 36, 0),
(721, 'North 24 Parganas', 36, 0),
(722, 'Paschim Medinipur', 36, 0),
(723, 'Paschim Burdwan', 36, 0),
(724, 'Purba Burdwan', 36, 0),
(725, 'Purba Medinipur', 36, 0),
(726, 'Purulia', 36, 0),
(727, 'South 24 Parganas', 36, 0),
(728, 'Uttar Dinajpur', 36, 0),
(747, 'kanpur', 6, 0),
(748, 'kanpur', 12, 0);

-- --------------------------------------------------------

--
-- Table structure for table `completed_assignment`
--

CREATE TABLE `completed_assignment` (
  `cas_id` int(255) NOT NULL,
  `maid` bigint(20) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `completed_level`
--

CREATE TABLE `completed_level` (
  `cl_id` int(255) NOT NULL,
  `uid` bigint(20) NOT NULL,
  `maid` bigint(20) NOT NULL,
  `level_id` bigint(20) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `sid` int(5) NOT NULL,
  `ci_id` int(5) NOT NULL,
  `block_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `emp_name` text NOT NULL,
  `emp_contact` text NOT NULL,
  `emp_gender` varchar(100) NOT NULL,
  `emp_email` text NOT NULL,
  `emp_password` text NOT NULL,
  `status` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `role_id`, `sid`, `ci_id`, `block_id`, `sector_id`, `emp_name`, `emp_contact`, `emp_gender`, `emp_email`, `emp_password`, `status`, `creation_date`, `modification_date`) VALUES
(2, 1, 0, 0, 0, 0, 'Admin', '9560031521', 'male', 'admin@matri.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-08-26', '2022-08-26'),
(11, 2, 7, 134, 1, 1, 'Thaneshwar Prasad Diwan', '7587486818', 'Male', '', '', 1, '2022-09-02', '0000-00-00'),
(12, 2, 7, 134, 1, 1, 'Dharmendra Haldar', '9407754958', 'Male', '', '', 1, '2022-09-02', '0000-00-00'),
(13, 2, 7, 134, 1, 1, 'Gautam Rangari', '8103009003', 'Male', '', '', 1, '2022-09-02', '0000-00-00'),
(14, 2, 7, 134, 1, 1, 'Ashok Verma', '7587182754', 'Male', '', '', 1, '2022-09-02', '0000-00-00'),
(15, 2, 7, 134, 1, 1, 'Prabhas Pal', '9406288449', 'Male', '', '', 1, '2022-09-02', '0000-00-00'),
(16, 2, 7, 134, 1, 1, 'Anita Salam', '7587327411', 'Female', '', '', 1, '2022-09-02', '0000-00-00'),
(17, 2, 7, 134, 1, 1, 'Dinesh Bhardwaj', '7587060424', 'Male', '', '', 1, '2022-09-02', '0000-00-00'),
(18, 2, 7, 134, 1, 1, 'Bajaru Ram Sori', '9406410867', 'Male', '', '', 1, '2022-09-02', '0000-00-00'),
(19, 2, 7, 134, 1, 1, 'Parasram Yadav', '7587303305', 'Male', '', '', 1, '2022-09-02', '0000-00-00'),
(20, 2, 7, 134, 1, 1, 'Mojesh Lee', '7647087116', 'Male', '', '', 1, '2022-09-02', '0000-00-00'),
(21, 2, 7, 119, 3, 11, 'Ratna Rakesh Masih', '7489016475', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(22, 2, 7, 119, 3, 12, 'Dorislal', '8223970459', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(23, 2, 7, 119, 3, 13, 'Kaushal Prasad Veervansh', '7587066460', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(24, 2, 7, 119, 3, 14, 'Ranveer Singh Rajput', '6265444153', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(25, 2, 7, 119, 3, 15, 'Mohan Dandsena ', '9165279878', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(26, 2, 7, 119, 4, 16, 'Shanta Markam', '8839881067', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(27, 2, 7, 119, 4, 17, 'Katgori Wenkanraju', '6267050811', 'Female', '', '', 1, '2022-09-03', '0000-00-00'),
(28, 2, 7, 119, 4, 18, 'Nathu Ram Ahirwar ', '7067313645', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(29, 2, 7, 119, 4, 19, 'Shanta Markam', '8839881067', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(30, 2, 7, 119, 5, 20, 'Manjulata Sahu', '6263585209', 'Female', '', '', 1, '2022-09-03', '0000-00-00'),
(31, 2, 7, 119, 5, 21, 'Jala Kashyap', '7722862770', 'Female', '', '', 1, '2022-09-03', '0000-00-00'),
(32, 2, 7, 119, 5, 22, 'Akshay Netam', '6260667427', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(33, 2, 7, 119, 5, 23, 'Satyapal Manjhi', '6260114934', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(34, 2, 7, 119, 6, 24, 'Girdhar Deslehri', '8959114315', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(35, 2, 7, 119, 6, 25, 'Ramgopal Yadav', '8319340478', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(36, 2, 7, 119, 6, 26, 'Tarun Gothi', '6261629815', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(37, 2, 7, 119, 6, 27, 'Umesh Thakur', '7999738697', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(38, 2, 7, 119, 6, 28, 'Sunil Goud', '7587763800', 'Male', '', '', 1, '2022-09-03', '0000-00-00'),
(39, 2, 7, 121, 7, 29, 'Mahendra Kumar Bachela', '7828338593', 'Female', '', '', 1, '2022-09-05', '0000-00-00'),
(40, 2, 7, 121, 7, 30, 'Sohan Lal Thakur', '7999731932', 'Male', '', '', 1, '2022-09-05', '0000-00-00'),
(41, 2, 7, 121, 7, 31, 'Kanchi Nareti', '6264641592', 'Female', '', '', 1, '2022-09-05', '0000-00-00'),
(42, 2, 7, 121, 9, 32, 'Sarvesh Kumar Morla', '9009888017', 'Male', '', '', 1, '2022-09-05', '0000-00-00'),
(43, 2, 7, 121, 9, 32, 'Urmila Sevta', '7587479155', 'Female', '', '', 1, '2022-09-05', '0000-00-00'),
(44, 2, 7, 121, 9, 32, 'Uma Karma', '7489935332', 'Female', '', '', 1, '2022-09-05', '0000-00-00'),
(45, 2, 7, 121, 9, 33, 'Balmati Nag', '6261280915', 'Male', '', '', 1, '2022-09-05', '0000-00-00'),
(46, 2, 7, 121, 9, 34, 'Geeta Chouhan', '9406432328', 'Female', '', '', 1, '2022-09-05', '0000-00-00'),
(47, 2, 7, 121, 9, 34, 'Dev Kumar Sahu', '9407614018', 'Male', '', '', 1, '2022-09-05', '0000-00-00'),
(48, 2, 7, 121, 11, 35, 'Jhini Mandavi', '9406072070', 'Female', '', '', 1, '2022-09-05', '0000-00-00'),
(49, 2, 7, 121, 11, 36, 'Mahendra Singh Markam', '8305818477', 'Male', '', '', 1, '2022-09-05', '0000-00-00'),
(50, 2, 7, 121, 12, 37, 'Balsingh Netam ', '8319334412', 'Male', '', '', 1, '2022-09-05', '0000-00-00'),
(51, 2, 7, 121, 12, 38, 'Chandrashekhar Prasad Pandey ', '9399928266', 'Male', '', '', 1, '2022-09-05', '0000-00-00'),
(52, 2, 7, 121, 12, 39, 'Ram Kumar Jatav', '9406003762', 'Male', '', '', 1, '2022-09-05', '0000-00-00'),
(53, 2, 7, 121, 12, 40, 'Ravindra Kumar Prasad', '9406104573', 'Female', '', '', 1, '2022-09-05', '0000-00-00'),
(54, 2, 7, 129, 13, 41, 'Chameli baghel', '8319606032', 'Female', '', '', 1, '2022-09-06', '0000-00-00'),
(55, 2, 7, 129, 14, 42, 'Radhelal korram', '8839643156', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(56, 2, 7, 129, 15, 66, 'Durpat Sethiya', '8770278506', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(57, 2, 7, 129, 16, 43, 'Pardeshi Ram Sahu ', '8770142993', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(58, 2, 7, 129, 17, 44, 'Rajesh Usendi', '9407602364', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(59, 2, 7, 129, 15, 45, 'Sanjay Naidu', '9424291532', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(60, 2, 7, 129, 16, 46, ' Kanta Ram Sahu', '8719052972', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(61, 2, 7, 129, 15, 47, 'Jai Singh Netam', '9399492491', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(62, 2, 7, 129, 15, 48, 'Sarita Patel', '6268565804', 'Female', '', '', 1, '2022-09-06', '0000-00-00'),
(63, 2, 7, 129, 14, 49, 'Governath Pradhan', '7587008985', 'Female', '', '', 1, '2022-09-06', '0000-00-00'),
(64, 2, 7, 129, 15, 50, 'Lakhan Lal Nag', '9131951144', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(65, 2, 7, 129, 15, 51, 'Rajendra Prasad Sharma', '9424291694', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(66, 2, 7, 129, 17, 52, 'Vishnu Lal Sori', '6266705556', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(67, 2, 7, 129, 17, 53, 'Ashok Tiwari', '7024171268', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(68, 2, 7, 129, 15, 54, 'Santosh Singh', '6267773517', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(69, 2, 7, 129, 14, 55, 'Surendra Kumar Kashyap', '9340796542', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(70, 2, 7, 129, 14, 56, 'Dhaniram netam', '9340362897', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(71, 2, 7, 129, 13, 57, 'Devram Netam', '8103445672', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(72, 2, 7, 129, 15, 58, 'Digeshwar Sahu', '9098524722', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(73, 2, 7, 129, 14, 59, 'Mannu Ram Baghel', '7987099803', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(74, 1, 7, 129, 13, 60, 'Baliram Vatti', '9340117840', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(75, 2, 7, 129, 16, 61, ' Rishi Ram Netam', '8827132565', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(76, 2, 7, 129, 13, 62, 'Laxmi Das', '6263815056', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(77, 2, 7, 129, 17, 63, 'Karan Kavde', '7000771803', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(78, 2, 7, 129, 15, 64, ' Ramdas Baghel', '6260401573', 'Male', '', '', 1, '2022-09-06', '0000-00-00'),
(79, 2, 7, 129, 16, 65, ' Sobha Pandey', '9752126929', 'Female', '', '', 1, '2022-09-06', '0000-00-00'),
(80, 2, 7, 119, 3, 14, 'State Manager', '9560031521', 'Male', 'statemanager@matri.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2022-10-11', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_role_permission_master_menu`
--

CREATE TABLE `mapping_role_permission_master_menu` (
  `role_id` int(11) NOT NULL,
  `permission_id` text DEFAULT NULL,
  `menu_master_id` longtext DEFAULT NULL,
  `portlet_id` varchar(100) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `mapping_role_permission_master_menu`
--

INSERT INTO `mapping_role_permission_master_menu` (`role_id`, `permission_id`, `menu_master_id`, `portlet_id`, `status`, `creation_date`, `modification_date`) VALUES
(1, '1|2|3|4', '1|1$4|1$5|1$6|1$7|1$8|1$9|1$10|1$12|1$13|1$14&&2|2$1|2$2|2$3|2$11&&3|3$15|3$22|3$16|3$17&&4|4$18|4$19|4$20|4$21', '1', 1, '2022-10-06 12:48:15', '2022-10-11 13:02:07'),
(2, '1|2|3|4', '1|1$13', '1', 1, '2022-10-06 12:48:15', '2022-10-11 12:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `master_level`
--

CREATE TABLE `master_level` (
  `ml_id` int(11) NOT NULL,
  `maid` int(11) NOT NULL,
  `lvl_name` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `created_by` int(5) NOT NULL,
  `ml_status` int(1) NOT NULL DEFAULT 1,
  `q_limit` int(11) NOT NULL,
  `time_limit` time NOT NULL,
  `level_type` varchar(255) DEFAULT NULL,
  `start_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `master_menu`
--

CREATE TABLE `master_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_description` varchar(50) DEFAULT NULL,
  `menu_route_name` varchar(250) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `master_menu`
--

INSERT INTO `master_menu` (`menu_id`, `menu_description`, `menu_route_name`, `status`, `creation_date`, `modification_date`) VALUES
(1, 'Master Setting', '#', 1, '2022-10-04 12:49:27', NULL),
(2, 'User Authentication', '#', 1, '2022-10-04 12:50:15', NULL),
(3, 'Assessment Bank', '#', 1, '2022-10-04 12:50:43', NULL),
(4, 'Reports', '#', 1, '2022-10-04 12:51:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_modules`
--

CREATE TABLE `master_modules` (
  `maid` int(11) NOT NULL,
  `assignment_name` varchar(100) NOT NULL,
  `assignment_description` longtext NOT NULL,
  `ma_status` int(11) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL,
  `created_by` int(5) NOT NULL,
  `number_of_level` int(11) NOT NULL,
  `modification_date` datetime NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `master_permission`
--

CREATE TABLE `master_permission` (
  `permission_id` int(11) NOT NULL,
  `permission_description` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `master_permission`
--

INSERT INTO `master_permission` (`permission_id`, `permission_description`, `status`, `creation_date`, `modification_date`) VALUES
(1, 'Create', 1, '2021-12-16 18:51:06', NULL),
(2, 'View', 1, '2021-12-16 18:51:19', NULL),
(3, 'Delete', 1, '2021-12-16 18:51:33', NULL),
(4, 'Update', 1, '2021-12-18 10:39:00', '2022-08-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_role`
--

CREATE TABLE `master_role` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `role_description` varchar(60) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `master_role`
--

INSERT INTO `master_role` (`role_id`, `role_name`, `role_description`, `status`, `creation_date`, `modification_date`) VALUES
(1, 'Admin', 'Admin', 1, '2022-10-06 10:43:34', '0000-00-00 00:00:00'),
(2, 'State Manager', 'State Manager', 1, '2022-10-11 12:42:42', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `master_sub_menu`
--

CREATE TABLE `master_sub_menu` (
  `sub_menu_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_description` varchar(50) NOT NULL,
  `sub_menu_route` varchar(250) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `master_sub_menu`
--

INSERT INTO `master_sub_menu` (`sub_menu_id`, `menu_id`, `sub_menu_description`, `sub_menu_route`, `status`, `creation_date`, `modification_date`) VALUES
(1, 2, 'Role Master', 'role-master', 1, '2022-10-04 13:02:48', NULL),
(2, 2, 'Permission Master', 'permission', 1, '2022-10-04 13:36:21', NULL),
(3, 2, 'Mapping Role Permission', 'mapping-role-permission', 1, '2022-10-04 13:37:15', NULL),
(4, 1, 'Menu Master', 'menu-master', 1, '2022-10-04 13:38:02', NULL),
(5, 1, 'Sub menu master', 'sub-menu-master', 1, '2022-10-04 13:38:33', NULL),
(6, 1, 'State', 'state', 1, '2022-10-04 13:39:03', NULL),
(7, 1, 'District', 'district', 1, '2022-10-04 13:39:28', NULL),
(8, 1, 'Block', 'block', 1, '2022-10-04 13:39:51', NULL),
(9, 1, 'Sector', 'sector', 1, '2022-10-04 13:40:13', NULL),
(10, 1, 'Sub Health Center', 'sub-sector', 1, '2022-10-04 13:40:58', NULL),
(11, 2, 'Employee Master', 'employee-master', 1, '2022-10-04 13:41:31', NULL),
(12, 1, 'Trainer Master', 'trainer-master', 1, '2022-10-04 13:42:15', NULL),
(13, 1, 'Trainee Master', 'trainee-master', 1, '2022-10-04 13:42:52', NULL),
(14, 1, 'Trainee Transfer', 'trainee-transfer', 1, '2022-10-04 13:43:30', NULL),
(15, 3, 'Module Master', 'module-master', 1, '2022-10-04 13:44:44', NULL),
(16, 3, 'Question Answer Master', 'question-answer-master', 1, '2022-10-04 13:47:14', NULL),
(17, 3, 'Pre-Test & Post-Test', 'pre-test', 1, '2022-10-04 13:48:00', NULL),
(18, 4, 'Trainer Report', 'trainer-report', 1, '2022-10-04 13:48:39', NULL),
(19, 4, 'Trainee Report', 'traniee-reports', 1, '2022-10-04 13:49:27', NULL),
(20, 4, 'District Wise Report', 'district-wise-report', 1, '2022-10-04 13:50:08', NULL),
(21, 4, 'Trainee Performance', 'trainee-performance', 1, '2022-10-04 13:50:38', NULL),
(22, 3, 'Training Master', 'training-master', 1, '2022-10-11 13:00:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_trainings`
--

CREATE TABLE `master_trainings` (
  `training_id` int(10) NOT NULL,
  `modules_id` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `creation_date` date NOT NULL,
  `modifiication_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE `mcq` (
  `mcq_id` int(255) NOT NULL,
  `maid` int(255) NOT NULL,
  `ml_id` int(255) NOT NULL,
  `question` longtext CHARACTER SET utf32 NOT NULL,
  `options` longtext CHARACTER SET utf32 NOT NULL,
  `c_answer` longtext CHARACTER SET utf32 NOT NULL,
  `mcq_time` time NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `mcq_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `mcq_user_ans`
--

CREATE TABLE `mcq_user_ans` (
  `mua_is` int(255) NOT NULL,
  `ques_id` longtext NOT NULL,
  `options` longtext NOT NULL,
  `u_id` bigint(20) NOT NULL,
  `created_date` datetime NOT NULL,
  `maid` bigint(20) NOT NULL,
  `ml_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `sector_id` int(10) NOT NULL,
  `state_id` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  `block_id` int(10) NOT NULL,
  `sector_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL,
  `creation_date` date NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`sector_id`, `state_id`, `city_id`, `block_id`, `sector_name`, `status`, `creation_date`, `modification_date`) VALUES
(1, 7, 134, 1, 'Bakulwahi', 1, '2022-08-31', '0000-00-00'),
(2, 7, 134, 1, 'Benoor', 1, '2022-09-02', '0000-00-00'),
(3, 7, 134, 1, 'Chhotedongar', 1, '2022-09-02', '0000-00-00'),
(4, 7, 134, 2, 'Garpa', 1, '2022-09-02', '0000-00-00'),
(5, 7, 134, 2, 'Handawada', 1, '2022-09-02', '0000-00-00'),
(6, 7, 134, 2, 'Kohkameta', 1, '2022-09-02', '0000-00-00'),
(7, 7, 134, 2, 'Kutul', 1, '2022-09-02', '0000-00-00'),
(8, 7, 134, 1, 'Narayanpur', 1, '2022-09-02', '0000-00-00'),
(9, 7, 134, 2, 'Nednar', 1, '2022-09-02', '0000-00-00'),
(10, 7, 134, 2, 'Orchha', 1, '2022-09-02', '0000-00-00'),
(11, 7, 119, 3, 'Bhairamgarh', 1, '2022-09-03', '0000-00-00'),
(12, 7, 119, 3, 'Nelasnar', 1, '2022-09-03', '0000-00-00'),
(13, 7, 119, 3, 'Kutru', 1, '2022-09-03', '0000-00-00'),
(14, 7, 119, 3, 'Farsegarh', 1, '2022-09-03', '0000-00-00'),
(15, 7, 119, 3, 'Koshalnar', 1, '2022-09-03', '0000-00-00'),
(16, 7, 119, 4, 'Bhopalpatnam', 1, '2022-09-03', '0000-00-00'),
(17, 7, 119, 4, 'Madded', 1, '2022-09-03', '0000-00-00'),
(18, 7, 119, 4, 'Tarlaguda', 1, '2022-09-03', '0000-00-00'),
(19, 7, 119, 4, 'Sandra', 1, '2022-09-03', '0000-00-00'),
(20, 7, 119, 5, 'Bijapur', 1, '2022-09-03', '0000-00-00'),
(21, 7, 119, 5, 'Naimed', 1, '2022-09-03', '0000-00-00'),
(22, 7, 119, 5, 'Cherpal', 1, '2022-09-03', '0000-00-00'),
(23, 7, 119, 5, 'Gangaloor', 1, '2022-09-03', '0000-00-00'),
(24, 7, 119, 6, 'Awapalli', 1, '2022-09-03', '0000-00-00'),
(25, 7, 119, 6, 'Elmidi', 1, '2022-09-03', '0000-00-00'),
(26, 7, 119, 6, 'Basaguda', 1, '2022-09-03', '0000-00-00'),
(27, 7, 119, 6, 'Usoor', 1, '2022-09-03', '0000-00-00'),
(28, 7, 119, 6, 'Pamed', 1, '2022-09-03', '0000-00-00'),
(29, 7, 121, 7, 'Geedam ', 1, '2022-09-05', '0000-00-00'),
(30, 7, 121, 7, 'Tumnar', 1, '2022-09-05', '0000-00-00'),
(31, 7, 121, 7, 'Barsoor', 1, '2022-09-05', '0000-00-00'),
(32, 7, 121, 9, 'Kuakonda', 1, '2022-09-05', '0000-00-00'),
(33, 7, 121, 9, 'Potali', 1, '2022-09-05', '0000-00-00'),
(34, 7, 121, 9, 'Kirandul', 1, '2022-09-05', '0000-00-00'),
(35, 7, 121, 11, 'Parcheli', 1, '2022-09-05', '0000-00-00'),
(36, 7, 121, 11, 'Mokpal', 1, '2022-09-05', '0000-00-00'),
(37, 7, 121, 12, 'Pondum ', 1, '2022-09-05', '0000-00-00'),
(38, 7, 121, 12, 'Dantewada', 1, '2022-09-05', '0000-00-00'),
(39, 7, 121, 12, 'Gamawada ', 1, '2022-09-05', '0000-00-00'),
(40, 7, 121, 12, 'Bacheli ', 1, '2022-09-05', '0000-00-00'),
(41, 7, 129, 13, 'Anantpur', 1, '2022-09-06', '0000-00-00'),
(42, 7, 129, 14, 'Badedonger', 1, '2022-09-06', '0000-00-00'),
(43, 7, 129, 16, 'Baderajpur', 1, '2022-09-06', '0000-00-00'),
(44, 7, 129, 17, 'Bahigaon', 1, '2022-09-06', '0000-00-00'),
(45, 7, 129, 15, 'Bamhni', 1, '2022-09-06', '0000-00-00'),
(46, 7, 129, 16, 'Banskot', 1, '2022-09-06', '0000-00-00'),
(47, 7, 129, 15, 'Bayanar', 1, '2022-09-06', '0000-00-00'),
(48, 7, 129, 15, 'Bunagaon', 1, '2022-09-06', '0000-00-00'),
(49, 7, 129, 14, 'Chingnaar', 1, '2022-09-06', '0000-00-00'),
(50, 7, 129, 15, 'Chipawand', 1, '2022-09-06', '0000-00-00'),
(51, 7, 129, 15, 'Dahikonga', 1, '2022-09-06', '0000-00-00'),
(52, 7, 129, 17, 'Dhanora', 1, '2022-09-06', '0000-00-00'),
(53, 7, 129, 17, 'Keshkal', 1, '2022-09-06', '0000-00-00'),
(54, 7, 129, 15, 'Kondagaon', 1, '2022-09-06', '0000-00-00'),
(55, 7, 129, 14, 'Kongud', 1, '2022-09-06', '0000-00-00'),
(56, 7, 129, 14, 'Lanjoda', 1, '2022-09-06', '0000-00-00'),
(57, 7, 129, 13, 'Makdi', 1, '2022-09-06', '0000-00-00'),
(58, 7, 129, 15, 'Mardapal', 1, '2022-09-06', '0000-00-00'),
(59, 7, 129, 14, 'Pharasgaon', 1, '2022-09-06', '0000-00-00'),
(60, 7, 129, 13, 'Randhna', 1, '2022-09-06', '0000-00-00'),
(61, 7, 129, 16, 'Salna', 1, '2022-09-06', '0000-00-00'),
(62, 7, 129, 13, 'Shampur', 1, '2022-09-06', '0000-00-00'),
(63, 7, 129, 17, 'Singanpur', 1, '2022-09-06', '0000-00-00'),
(64, 7, 129, 15, 'Sonabal', 1, '2022-09-06', '0000-00-00'),
(65, 7, 129, 16, 'Vishrampuri', 1, '2022-09-06', '0000-00-00'),
(66, 7, 129, 15, 'Badekanera', 1, '2022-09-06', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `sid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `code` varchar(100) NOT NULL,
  `country_id` int(11) NOT NULL DEFAULT 1,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`sid`, `name`, `code`, `country_id`, `status`) VALUES
(1, 'Andaman & Nicobar', 'AN', 101, 0),
(2, 'Andhra Pradesh', 'AP', 101, 0),
(3, 'Arunachal Pradesh', 'AR', 101, 0),
(4, 'Assam', 'AS', 101, 0),
(5, 'Bihar', 'BR', 101, 0),
(6, 'Chandigarh', 'CH', 101, 0),
(7, 'Chhattisgarh', 'CG', 101, 1),
(8, 'Dadra & Nagar Haveli', 'DN', 101, 0),
(9, 'Daman & Diu', 'DD', 101, 0),
(10, 'Delhi', 'DL', 101, 0),
(11, 'Goa', 'GA', 101, 0),
(12, 'Gujarat', 'GJ', 101, 0),
(13, 'Haryana', 'HR', 101, 0),
(14, 'Himachal Pradesh', 'HP', 101, 0),
(15, 'Jammu & Kashmir', 'JK', 101, 0),
(16, 'Jharkhand', 'JH', 101, 0),
(17, 'Karnataka', 'KA', 101, 0),
(18, 'Kerala', 'KL', 101, 0),
(19, 'Lakshadweep', 'LD', 101, 0),
(20, 'Madhya Pradesh', 'MP', 101, 0),
(21, 'Maharashtra', 'MH', 101, 0),
(22, 'Manipur', 'MN', 101, 0),
(23, 'Meghalaya', 'ML', 101, 0),
(24, 'Mizoram', 'MZ', 101, 0),
(25, 'Nagaland', 'NL', 101, 0),
(26, 'Orissa', 'OD', 101, 0),
(27, 'Pondicherry', 'PY', 101, 0),
(28, 'Punjab', 'PB', 101, 0),
(29, 'Rajasthan', 'RJ', 101, 0),
(30, 'Sikkim', 'SK', 101, 0),
(31, 'Tamil Nadu', 'TN', 101, 0),
(32, 'Telangana', 'TS', 101, 0),
(33, 'Tripura', 'TR', 101, 0),
(34, 'Uttar Pradesh', 'UP', 101, 0),
(36, 'West Bengal', 'WB', 101, 0),
(37, 'Uttarakhand', 'UK', 101, 0),
(38, 'Ladakh UT', 'LA', 101, 0),
(45, 'All', 'ALL', 101, 0),
(51, 'north india', '', 101, 0),
(52, 'Uttar Pradesh', 'UP', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sector`
--

CREATE TABLE `sub_sector` (
  `sub_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `sub_sector_name` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `creation_date` date NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_sector`
--

INSERT INTO `sub_sector` (`sub_id`, `state_id`, `city_id`, `block_id`, `sector_id`, `sub_sector_name`, `status`, `creation_date`, `modification_date`) VALUES
(1, 7, 134, 1, 1, 'Bakulwahi', 1, '2022-09-01', '0000-00-00'),
(2, 7, 134, 1, 1, 'Badejamri', 1, '2022-09-02', '0000-00-00'),
(3, 7, 134, 1, 1, 'Brahebeda', 1, '2022-09-02', '0000-00-00'),
(4, 7, 134, 1, 1, 'Gadhbengal', 1, '2022-09-02', '0000-00-00'),
(5, 7, 134, 1, 1, 'Halamimunjhmeta', 1, '2022-09-02', '0000-00-00'),
(6, 7, 134, 1, 1, 'Devgaon', 1, '2022-09-02', '0000-00-00'),
(7, 7, 134, 1, 1, 'Karmari', 1, '2022-09-02', '0000-00-00'),
(8, 7, 134, 1, 1, 'Pharasgaon', 1, '2022-09-02', '0000-00-00'),
(9, 7, 134, 1, 2, 'Benoor', 1, '2022-09-02', '0000-00-00'),
(10, 7, 134, 1, 2, 'Remavand', 1, '2022-09-02', '0000-00-00'),
(11, 7, 134, 1, 2, 'Nelwad', 1, '2022-09-02', '0000-00-00'),
(12, 7, 134, 1, 2, 'Bhatpal', 1, '2022-09-02', '0000-00-00'),
(13, 7, 134, 1, 2, 'Dandwan', 1, '2022-09-02', '0000-00-00'),
(14, 7, 134, 1, 2, 'Korenda', 1, '2022-09-02', '0000-00-00'),
(15, 7, 134, 1, 3, 'Chhotedongar', 1, '2022-09-02', '0000-00-00'),
(16, 7, 134, 1, 3, 'Dhanora', 1, '2022-09-02', '0000-00-00'),
(17, 7, 134, 1, 3, 'Kanhargaon', 1, '2022-09-02', '0000-00-00'),
(18, 7, 134, 1, 3, 'Madonar', 1, '2022-09-02', '0000-00-00'),
(19, 7, 134, 1, 3, 'Mahimagwadi', 1, '2022-09-02', '0000-00-00'),
(20, 7, 134, 1, 3, 'Sulenga', 1, '2022-09-02', '0000-00-00'),
(21, 7, 134, 2, 4, ' Malmeta', 1, '2022-09-02', '0000-00-00'),
(22, 7, 134, 2, 4, 'Maspur', 1, '2022-09-02', '0000-00-00'),
(23, 7, 134, 2, 4, ' Pangud', 1, '2022-09-02', '0000-00-00'),
(24, 7, 134, 2, 4, 'Gome', 1, '2022-09-02', '0000-00-00'),
(25, 7, 134, 2, 4, ' Konge', 1, '2022-09-02', '0000-00-00'),
(26, 7, 134, 2, 5, ' Kalhaja', 1, '2022-09-02', '0000-00-00'),
(27, 7, 134, 2, 5, ' Thulthuli', 1, '2022-09-02', '0000-00-00'),
(28, 7, 134, 2, 5, ' Handawada', 1, '2022-09-02', '0000-00-00'),
(29, 7, 134, 2, 5, 'Jatlur', 1, '2022-09-02', '0000-00-00'),
(30, 7, 134, 2, 5, 'Bedma', 1, '2022-09-02', '0000-00-00'),
(31, 7, 134, 2, 5, 'Kuye', 1, '2022-09-02', '0000-00-00'),
(32, 7, 134, 2, 6, ' Jharawahi', 1, '2022-09-02', '0000-00-00'),
(33, 7, 134, 2, 6, ' Ehnar', 1, '2022-09-02', '0000-00-00'),
(34, 7, 134, 2, 6, ' Sargipal', 1, '2022-09-02', '0000-00-00'),
(35, 7, 134, 2, 6, ' Kohkameta', 1, '2022-09-02', '0000-00-00'),
(36, 7, 134, 2, 6, 'Wadapenda', 1, '2022-09-02', '0000-00-00'),
(37, 7, 134, 2, 7, ' Kutul', 1, '2022-09-02', '0000-00-00'),
(38, 7, 134, 2, 7, ' Nelnar', 1, '2022-09-02', '0000-00-00'),
(39, 7, 134, 2, 7, ' Guttakal', 1, '2022-09-02', '0000-00-00'),
(40, 7, 134, 2, 7, 'Gumarka', 1, '2022-09-02', '0000-00-00'),
(41, 7, 134, 2, 7, 'Nelangur', 1, '2022-09-02', '0000-00-00'),
(42, 7, 134, 1, 8, 'Binjali', 1, '2022-09-02', '0000-00-00'),
(43, 7, 134, 1, 8, 'Edka', 1, '2022-09-02', '0000-00-00'),
(44, 7, 134, 1, 8, 'Narayanpur A', 1, '2022-09-02', '0000-00-00'),
(45, 7, 134, 1, 8, 'Narayanpur B', 1, '2022-09-02', '0000-00-00'),
(46, 7, 134, 1, 8, 'Guriya/Palki', 1, '2022-09-02', '0000-00-00'),
(47, 7, 134, 1, 8, 'Tadopal', 1, '2022-09-02', '0000-00-00'),
(48, 7, 134, 2, 9, 'Nednar', 1, '2022-09-02', '0000-00-00'),
(49, 7, 134, 2, 9, 'Aakabeda', 1, '2022-09-02', '0000-00-00'),
(50, 7, 134, 2, 9, 'Tadnar', 1, '2022-09-02', '0000-00-00'),
(51, 7, 134, 2, 9, 'Kotenar', 1, '2022-09-02', '0000-00-00'),
(52, 7, 134, 2, 10, 'Mandali', 1, '2022-09-02', '0000-00-00'),
(53, 7, 134, 2, 10, 'Gomagal', 1, '2022-09-02', '0000-00-00'),
(54, 7, 134, 2, 10, 'Kodoli', 1, '2022-09-02', '0000-00-00'),
(55, 7, 134, 2, 10, 'Kudmel', 1, '2022-09-02', '0000-00-00'),
(56, 7, 134, 2, 10, 'Orchha', 1, '2022-09-02', '0000-00-00'),
(57, 7, 134, 1, 3, 'Dhoudai ', 1, '2022-09-02', '0000-00-00'),
(58, 7, 134, 2, 4, 'Garpa', 1, '2022-09-02', '0000-00-00'),
(59, 7, 119, 3, 11, 'Bhairamgarh', 1, '2022-09-03', '0000-00-00'),
(60, 7, 119, 3, 11, 'Matwada', 1, '2022-09-03', '0000-00-00'),
(61, 7, 119, 3, 11, 'Jangla', 1, '2022-09-03', '0000-00-00'),
(62, 7, 119, 3, 11, 'Mingachal', 1, '2022-09-03', '0000-00-00'),
(63, 7, 119, 3, 11, 'Jaigur', 1, '2022-09-03', '0000-00-00'),
(64, 7, 119, 3, 11, 'Badepalli', 1, '2022-09-03', '0000-00-00'),
(65, 7, 119, 3, 11, 'Dharma', 1, '2022-09-03', '0000-00-00'),
(66, 7, 119, 3, 11, 'Biriyabhumi', 1, '2022-09-03', '0000-00-00'),
(67, 7, 119, 3, 11, 'Pondum', 1, '2022-09-03', '0000-00-00'),
(68, 7, 119, 3, 12, 'Nelasnar', 1, '2022-09-03', '0000-00-00'),
(69, 7, 119, 3, 12, 'Satwa', 1, '2022-09-03', '0000-00-00'),
(70, 7, 119, 3, 12, 'Belnar', 1, '2022-09-03', '0000-00-00'),
(71, 7, 119, 3, 12, 'Bechapal', 1, '2022-09-03', '0000-00-00'),
(72, 7, 119, 3, 12, 'Mirtur', 1, '2022-09-03', '0000-00-00'),
(73, 7, 119, 3, 12, 'Pinkonda', 1, '2022-09-03', '0000-00-00'),
(74, 7, 119, 3, 13, 'Kutru', 1, '2022-09-03', '0000-00-00'),
(75, 7, 119, 3, 13, 'Bedre', 1, '2022-09-03', '0000-00-00'),
(76, 7, 119, 3, 13, 'Murkinar', 1, '2022-09-03', '0000-00-00'),
(77, 7, 119, 3, 13, 'Kungler', 1, '2022-09-03', '0000-00-00'),
(78, 7, 119, 3, 13, 'Bhurri', 1, '2022-09-03', '0000-00-00'),
(79, 7, 119, 3, 14, 'Gudma', 1, '2022-09-03', '0000-00-00'),
(80, 7, 119, 3, 14, 'Ambeli', 1, '2022-09-03', '0000-00-00'),
(81, 7, 119, 3, 14, 'Sagmeta', 1, '2022-09-03', '0000-00-00'),
(82, 7, 119, 3, 14, 'Farsegarh', 1, '2022-09-03', '0000-00-00'),
(83, 7, 119, 3, 15, 'Koshalnar', 1, '2022-09-03', '0000-00-00'),
(84, 7, 119, 3, 15, 'Mangnar', 1, '2022-09-03', '0000-00-00'),
(85, 7, 119, 3, 15, 'Bengloor', 1, '2022-09-03', '0000-00-00'),
(86, 7, 119, 4, 16, 'Bhopalpatnam ', 1, '2022-09-03', '0000-00-00'),
(87, 7, 119, 4, 16, 'Rudhararam', 1, '2022-09-03', '0000-00-00'),
(88, 7, 119, 4, 16, 'Goollaguda ', 1, '2022-09-03', '0000-00-00'),
(89, 7, 119, 4, 16, 'Vardali', 1, '2022-09-03', '0000-00-00'),
(90, 7, 119, 4, 16, 'Saknapalli', 1, '2022-09-03', '0000-00-00'),
(91, 7, 119, 4, 16, 'Cherpalli', 1, '2022-09-03', '0000-00-00'),
(92, 7, 119, 4, 17, 'Pegaaplli', 1, '2022-09-03', '0000-00-00'),
(93, 7, 119, 4, 17, 'Madded', 1, '2022-09-03', '0000-00-00'),
(94, 7, 119, 4, 16, 'Gorla', 1, '2022-09-03', '0000-00-00'),
(95, 7, 119, 4, 17, 'Uskaled', 1, '2022-09-03', '0000-00-00'),
(96, 7, 119, 4, 17, 'Pamgal', 1, '2022-09-03', '0000-00-00'),
(97, 7, 119, 4, 18, 'Chandur', 1, '2022-09-03', '0000-00-00'),
(98, 7, 119, 4, 18, 'Tarlaguda', 1, '2022-09-03', '0000-00-00'),
(99, 7, 119, 4, 18, 'Bhadrakali ', 1, '2022-09-03', '0000-00-00'),
(100, 7, 119, 4, 19, 'Sandra ', 1, '2022-09-03', '0000-00-00'),
(101, 7, 119, 4, 19, 'Badekaled', 1, '2022-09-03', '0000-00-00'),
(102, 7, 119, 5, 20, 'Bijapur', 1, '2022-09-03', '0000-00-00'),
(103, 7, 119, 5, 20, 'Itpal', 1, '2022-09-03', '0000-00-00'),
(104, 7, 119, 5, 20, 'Pamwlwya', 1, '2022-09-03', '0000-00-00'),
(105, 7, 119, 5, 20, 'Chinnakawalli', 1, '2022-09-03', '0000-00-00'),
(106, 7, 119, 5, 20, 'Kadulnar', 1, '2022-09-03', '0000-00-00'),
(107, 7, 119, 5, 20, 'Tumnar', 1, '2022-09-03', '0000-00-00'),
(108, 7, 119, 5, 21, 'Naimed', 1, '2022-09-03', '0000-00-00'),
(109, 7, 119, 5, 21, 'Armnaer', 1, '2022-09-03', '0000-00-00'),
(110, 7, 119, 5, 21, 'Dhanora', 1, '2022-09-03', '0000-00-00'),
(111, 7, 119, 5, 21, 'Pedakodepal', 1, '2022-09-03', '0000-00-00'),
(112, 7, 119, 5, 21, 'Toynar', 1, '2022-09-03', '0000-00-00'),
(113, 7, 119, 5, 21, 'Mormed', 1, '2022-09-03', '0000-00-00'),
(114, 7, 119, 5, 22, 'Cherpal', 1, '2022-09-03', '0000-00-00'),
(115, 7, 119, 5, 22, 'Reddi', 1, '2022-09-03', '0000-00-00'),
(116, 7, 119, 5, 22, 'Palnar', 1, '2022-09-03', '0000-00-00'),
(117, 7, 119, 5, 22, 'Dodi Tumnar', 1, '2022-09-03', '0000-00-00'),
(118, 7, 119, 5, 22, 'Pidiya', 1, '2022-09-03', '0000-00-00'),
(119, 7, 119, 5, 23, 'Gangalur', 1, '2022-09-03', '0000-00-00'),
(120, 7, 119, 5, 23, 'Gongla', 1, '2022-09-03', '0000-00-00'),
(121, 7, 119, 5, 23, 'Palnar', 1, '2022-09-03', '0000-00-00'),
(122, 7, 119, 6, 24, 'Pusgudi', 1, '2022-09-03', '0000-00-00'),
(123, 7, 119, 6, 24, 'Murkinar', 1, '2022-09-03', '0000-00-00'),
(124, 7, 119, 6, 24, 'Awapalli', 1, '2022-09-03', '0000-00-00'),
(125, 7, 119, 6, 24, 'Murdanda', 1, '2022-09-03', '0000-00-00'),
(127, 7, 119, 6, 25, 'Elmidi ', 1, '2022-09-03', '0000-00-00'),
(128, 7, 119, 6, 25, 'Engpalli', 1, '2022-09-03', '0000-00-00'),
(129, 7, 119, 6, 25, 'Sankanpalli', 1, '2022-09-03', '0000-00-00'),
(130, 7, 119, 6, 26, 'Basaguda ', 1, '2022-09-03', '0000-00-00'),
(131, 7, 119, 6, 26, 'Timmapur', 1, '2022-09-03', '0000-00-00'),
(133, 7, 119, 6, 26, 'Tarem', 1, '2022-09-03', '0000-00-00'),
(134, 7, 119, 6, 26, 'Pusbaka', 1, '2022-09-03', '0000-00-00'),
(135, 7, 119, 6, 26, 'Kodapalli', 1, '2022-09-03', '0000-00-00'),
(136, 7, 119, 6, 27, 'Usoor', 1, '2022-09-03', '0000-00-00'),
(137, 7, 119, 6, 27, 'Marudbaka', 1, '2022-09-03', '0000-00-00'),
(138, 7, 119, 6, 27, 'Pujari Kanker', 1, '2022-09-03', '0000-00-00'),
(139, 7, 119, 6, 28, 'Pamed ', 1, '2022-09-03', '0000-00-00'),
(140, 7, 119, 6, 28, 'Udtamala', 1, '2022-09-03', '0000-00-00'),
(141, 7, 119, 6, 28, 'Arapalli', 1, '2022-09-03', '0000-00-00'),
(142, 7, 119, 6, 28, 'Palaguda', 1, '2022-09-03', '0000-00-00'),
(143, 7, 121, 7, 29, 'Geedam', 1, '2022-09-05', '0000-00-00'),
(144, 7, 121, 7, 29, 'Haram', 1, '2022-09-05', '0000-00-00'),
(145, 7, 121, 7, 29, 'Madse', 1, '2022-09-05', '0000-00-00'),
(146, 7, 121, 7, 29, 'Gumda', 1, '2022-09-05', '0000-00-00'),
(147, 7, 121, 7, 29, 'Ronje', 1, '2022-09-05', '0000-00-00'),
(148, 7, 121, 7, 29, 'Karli 1', 1, '2022-09-05', '0000-00-00'),
(149, 7, 121, 7, 29, 'Karli 2', 1, '2022-09-05', '0000-00-00'),
(150, 7, 121, 7, 29, 'Kasoli', 1, '2022-09-05', '0000-00-00'),
(151, 7, 121, 7, 29, 'Jawanga', 1, '2022-09-05', '0000-00-00'),
(152, 7, 121, 7, 29, 'Ghotpal', 1, '2022-09-05', '0000-00-00'),
(153, 7, 121, 7, 30, 'Samlur', 1, '2022-09-05', '0000-00-00'),
(154, 7, 121, 7, 30, 'Bodli', 1, '2022-09-05', '0000-00-00'),
(155, 7, 121, 7, 30, 'Nelguda', 1, '2022-09-05', '0000-00-00'),
(156, 7, 121, 7, 30, 'Tumnar', 1, '2022-09-05', '0000-00-00'),
(157, 7, 121, 7, 30, 'Chhindnar', 1, '2022-09-05', '0000-00-00'),
(158, 7, 121, 7, 30, 'Pharaspal', 1, '2022-09-05', '0000-00-00'),
(159, 7, 121, 7, 31, 'Barsoor', 1, '2022-09-05', '0000-00-00'),
(160, 7, 121, 7, 31, 'Chhotekarka', 1, '2022-09-05', '0000-00-00'),
(161, 7, 121, 7, 31, 'Cherpal', 1, '2022-09-05', '0000-00-00'),
(162, 7, 121, 7, 31, 'Muchnar', 1, '2022-09-05', '0000-00-00'),
(163, 7, 121, 7, 31, 'Hidpal', 1, '2022-09-05', '0000-00-00'),
(164, 7, 121, 7, 31, 'Hitameta', 1, '2022-09-05', '0000-00-00'),
(165, 7, 121, 9, 32, 'Kuakonda', 1, '2022-09-05', '0000-00-00'),
(166, 7, 121, 9, 32, 'Palnar', 1, '2022-09-05', '0000-00-00'),
(167, 7, 121, 9, 32, 'Mahrahaurnar', 1, '2022-09-05', '0000-00-00'),
(168, 7, 121, 9, 32, 'Tikanpal', 1, '2022-09-05', '0000-00-00'),
(169, 7, 121, 9, 32, 'Nakulnar', 1, '2022-09-05', '0000-00-00'),
(170, 7, 121, 9, 32, 'Mailawada', 1, '2022-09-05', '0000-00-00'),
(171, 7, 121, 9, 32, 'Gadmiri', 1, '2022-09-05', '0000-00-00'),
(172, 7, 121, 9, 33, 'Potali', 1, '2022-09-05', '0000-00-00'),
(173, 7, 121, 9, 33, 'Aranpur', 1, '2022-09-05', '0000-00-00'),
(174, 7, 121, 9, 33, 'Madenda', 1, '2022-09-05', '0000-00-00'),
(175, 7, 121, 9, 33, 'Sameli', 1, '2022-09-05', '0000-00-00'),
(176, 7, 121, 9, 33, 'Burgum', 1, '2022-09-05', '0000-00-00'),
(177, 7, 121, 9, 33, 'Kalepal', 1, '2022-09-05', '0000-00-00'),
(178, 7, 121, 9, 34, 'Gajraj Camp', 1, '2022-09-05', '0000-00-00'),
(179, 7, 121, 9, 34, 'Rampur Camp', 1, '2022-09-05', '0000-00-00'),
(180, 7, 121, 9, 34, 'Baingpal', 1, '2022-09-05', '0000-00-00'),
(181, 7, 121, 9, 34, 'Kodenar', 1, '2022-09-05', '0000-00-00'),
(182, 7, 121, 9, 34, 'Hiroli', 1, '2022-09-05', '0000-00-00'),
(183, 7, 121, 9, 34, 'Pirnar', 1, '2022-09-05', '0000-00-00'),
(184, 7, 121, 11, 35, 'Lakharash', 1, '2022-09-05', '0000-00-00'),
(185, 7, 121, 11, 35, 'Parcheli', 1, '2022-09-05', '0000-00-00'),
(186, 7, 121, 11, 35, 'Chikpal', 1, '2022-09-05', '0000-00-00'),
(187, 7, 121, 11, 35, 'Tumakpal', 1, '2022-09-05', '0000-00-00'),
(188, 7, 121, 11, 35, 'Gudse', 1, '2022-09-05', '0000-00-00'),
(189, 7, 121, 11, 35, 'Tetam', 1, '2022-09-05', '0000-00-00'),
(190, 7, 121, 11, 35, 'Gatam', 1, '2022-09-05', '0000-00-00'),
(191, 7, 121, 11, 35, 'Badelakhapal', 1, '2022-09-05', '0000-00-00'),
(192, 7, 121, 11, 35, 'Jangampal', 1, '2022-09-05', '0000-00-00'),
(193, 7, 121, 11, 36, 'Korirash', 1, '2022-09-05', '0000-00-00'),
(194, 7, 121, 11, 36, 'Mokpal', 1, '2022-09-05', '0000-00-00'),
(195, 7, 121, 11, 36, 'Bhusaras', 1, '2022-09-05', '0000-00-00'),
(196, 7, 121, 12, 37, 'Chandenar', 1, '2022-09-05', '0000-00-00'),
(197, 7, 121, 12, 37, 'Balood', 1, '2022-09-05', '0000-00-00'),
(198, 7, 121, 12, 37, 'Metapal', 1, '2022-09-05', '0000-00-00'),
(199, 7, 121, 12, 37, 'Matenar', 1, '2022-09-05', '0000-00-00'),
(200, 7, 121, 12, 37, 'Fulnar ', 1, '2022-09-05', '0000-00-00'),
(201, 7, 121, 12, 37, 'Pondum ', 1, '2022-09-05', '0000-00-00'),
(202, 7, 121, 12, 37, 'Gadapal', 1, '2022-09-05', '0000-00-00'),
(203, 7, 121, 12, 37, 'Kavadgaon', 1, '2022-09-05', '0000-00-00'),
(204, 7, 121, 12, 38, 'Kanvalnar', 1, '2022-09-05', '0000-00-00'),
(205, 7, 121, 12, 38, 'Kuper ', 1, '2022-09-05', '0000-00-00'),
(206, 7, 121, 12, 38, 'Dantewada', 1, '2022-09-05', '0000-00-00'),
(207, 7, 121, 12, 38, 'Tudparas', 1, '2022-09-05', '0000-00-00'),
(208, 7, 121, 12, 38, 'Chitalanka ', 1, '2022-09-05', '0000-00-00'),
(209, 7, 121, 12, 38, 'Balpet', 1, '2022-09-05', '0000-00-00'),
(210, 7, 121, 12, 39, 'Ganjenar', 1, '2022-09-05', '0000-00-00'),
(211, 7, 121, 12, 39, 'Gamawada ', 1, '2022-09-05', '0000-00-00'),
(212, 7, 121, 12, 39, 'Masenar', 1, '2022-09-05', '0000-00-00'),
(213, 7, 121, 12, 39, 'Molasnar', 1, '2022-09-05', '0000-00-00'),
(214, 7, 121, 12, 40, 'F 19 Bacheli ', 1, '2022-09-05', '0000-00-00'),
(215, 7, 121, 12, 40, 'Bade Bacheli', 1, '2022-09-05', '0000-00-00'),
(216, 7, 121, 12, 40, 'F 20 Bacheli ', 1, '2022-09-05', '0000-00-00'),
(217, 7, 121, 12, 40, 'Bade Kameli ', 1, '2022-09-05', '0000-00-00'),
(218, 7, 121, 12, 40, 'Dugeli ', 1, '2022-09-05', '0000-00-00'),
(219, 7, 129, 13, 41, 'Bedagaon', 1, '2022-09-06', '0000-00-00'),
(220, 7, 129, 13, 41, 'Aamrawti', 1, '2022-09-06', '0000-00-00'),
(221, 7, 129, 13, 41, 'Arla', 1, '2022-09-06', '0000-00-00'),
(222, 7, 129, 13, 41, 'Torenga', 1, '2022-09-06', '0000-00-00'),
(223, 7, 129, 13, 41, 'Tamrawnd', 1, '2022-09-06', '0000-00-00'),
(224, 7, 129, 13, 41, 'Belgaon', 1, '2022-09-06', '0000-00-00'),
(225, 7, 129, 13, 41, 'Bedagaon', 1, '2022-09-08', '0000-00-00'),
(226, 7, 129, 13, 41, 'Binjoli', 1, '2022-09-08', '0000-00-00'),
(227, 7, 129, 13, 41, 'Chamtapur', 1, '2022-09-08', '0000-00-00'),
(228, 7, 129, 13, 41, 'Anatpur', 1, '2022-09-08', '0000-00-00'),
(229, 7, 129, 13, 41, 'Torenga', 1, '2022-09-08', '0000-00-00'),
(230, 7, 129, 14, 42, 'Bhumka', 1, '2022-09-08', '0000-00-00'),
(231, 7, 129, 14, 42, 'Bangoli', 1, '2022-09-08', '0000-00-00'),
(232, 7, 129, 14, 42, 'Kotpadh', 1, '2022-09-08', '0000-00-00'),
(233, 7, 129, 14, 42, 'Uramdabedha', 1, '2022-09-08', '0000-00-00'),
(234, 7, 129, 14, 42, 'Badedongar', 1, '2022-09-08', '0000-00-00'),
(235, 7, 129, 15, 66, 'Badekanera', 1, '2022-09-08', '0000-00-00'),
(236, 7, 129, 15, 66, 'Kamela', 1, '2022-09-08', '0000-00-00'),
(237, 7, 129, 15, 66, 'Bakhara', 1, '2022-09-08', '0000-00-00'),
(238, 7, 129, 15, 66, 'Karanji', 1, '2022-09-08', '0000-00-00'),
(239, 7, 129, 16, 43, 'Baderajpur', 1, '2022-09-08', '0000-00-00'),
(240, 7, 129, 16, 43, 'Choterajpur', 1, '2022-09-08', '0000-00-00'),
(241, 7, 129, 16, 43, 'Korgaon', 1, '2022-09-08', '0000-00-00'),
(242, 7, 129, 16, 43, 'Kopra', 1, '2022-09-08', '0000-00-00'),
(243, 7, 129, 16, 43, 'Dhamanpuri', 1, '2022-09-08', '0000-00-00'),
(244, 7, 129, 16, 43, 'Tenwsa', 1, '2022-09-08', '0000-00-00'),
(245, 7, 129, 16, 43, 'Mandoki khargaon', 1, '2022-09-08', '0000-00-00'),
(246, 7, 129, 16, 43, 'Salna', 1, '2022-09-08', '0000-00-00'),
(247, 7, 129, 17, 44, 'Pipra', 1, '2022-09-08', '0000-00-00'),
(248, 7, 129, 17, 44, 'Aanvrabhata', 1, '2022-09-08', '0000-00-00'),
(249, 7, 129, 17, 44, 'Nayanar', 1, '2022-09-08', '0000-00-00'),
(250, 7, 129, 17, 44, 'Khetarpal', 1, '2022-09-08', '0000-00-00'),
(251, 7, 129, 17, 44, 'Arandi', 1, '2022-09-08', '0000-00-00'),
(252, 7, 129, 15, 45, 'Bamhni', 1, '2022-09-08', '0000-00-00'),
(253, 7, 129, 15, 45, 'Shori', 1, '2022-09-08', '0000-00-00'),
(254, 7, 129, 15, 45, 'Sambalpur', 1, '2022-09-08', '0000-00-00'),
(255, 7, 129, 15, 45, 'Kariyakata', 1, '2022-09-08', '0000-00-00'),
(256, 7, 129, 15, 45, 'Hangwa', 1, '2022-09-08', '0000-00-00'),
(257, 7, 129, 16, 46, 'Banskot ', 1, '2022-09-08', '0000-00-00'),
(258, 7, 129, 16, 46, 'Balenga', 1, '2022-09-08', '0000-00-00'),
(259, 7, 129, 16, 46, 'Titarwand', 1, '2022-09-08', '0000-00-00'),
(260, 7, 129, 16, 46, 'Badbattar', 1, '2022-09-08', '0000-00-00'),
(261, 7, 129, 16, 46, 'Gamhari', 1, '2022-09-08', '0000-00-00'),
(262, 7, 129, 16, 46, 'Harwel', 1, '2022-09-08', '0000-00-00'),
(263, 7, 129, 15, 47, 'Thotee Madanar ', 1, '2022-09-08', '0000-00-00'),
(264, 7, 129, 15, 47, 'Chema', 1, '2022-09-08', '0000-00-00'),
(265, 7, 129, 15, 47, 'Kongera', 1, '2022-09-08', '0000-00-00'),
(266, 7, 129, 15, 47, 'Chimdhi', 1, '2022-09-08', '0000-00-00'),
(268, 7, 129, 15, 48, 'Bunagaon', 1, '2022-09-08', '0000-00-00'),
(269, 7, 129, 15, 48, 'Banjugani', 1, '2022-09-08', '0000-00-00'),
(270, 7, 129, 15, 48, 'Malakot', 1, '2022-09-08', '0000-00-00'),
(271, 7, 129, 15, 48, 'Devkhargaon', 1, '2022-09-08', '0000-00-00'),
(272, 7, 129, 15, 48, 'Girola', 1, '2022-09-08', '0000-00-00'),
(273, 7, 129, 15, 48, 'Masora', 1, '2022-09-08', '0000-00-00'),
(274, 7, 129, 15, 48, 'Palari', 1, '2022-09-08', '0000-00-00'),
(275, 7, 129, 15, 48, 'Kiwaibalega', 1, '2022-09-08', '0000-00-00'),
(276, 7, 129, 15, 48, 'Bhiragaon B', 1, '2022-09-08', '0000-00-00'),
(277, 7, 129, 14, 49, 'Chingnaar', 1, '2022-09-08', '0000-00-00'),
(278, 7, 129, 14, 49, 'Palna', 1, '2022-09-08', '0000-00-00'),
(279, 7, 129, 14, 49, 'Bhongapaal', 1, '2022-09-08', '0000-00-00'),
(280, 7, 129, 14, 49, 'Kasai', 1, '2022-09-08', '0000-00-00'),
(281, 7, 129, 14, 49, 'Pavdha', 1, '2022-09-08', '0000-00-00'),
(282, 7, 129, 15, 50, 'Chipawand', 1, '2022-09-08', '0000-00-00'),
(283, 7, 129, 15, 50, 'Mulmula', 1, '2022-09-08', '0000-00-00'),
(284, 7, 129, 15, 50, 'Malgaon', 1, '2022-09-08', '0000-00-00'),
(285, 7, 129, 15, 50, 'Bade bendari', 1, '2022-09-08', '0000-00-00'),
(286, 7, 129, 15, 50, 'Dongriguda', 1, '2022-09-08', '0000-00-00'),
(287, 7, 129, 15, 50, 'Chalki ', 1, '2022-09-08', '0000-00-00'),
(288, 7, 129, 15, 50, 'Nevta ', 1, '2022-09-08', '0000-00-00'),
(289, 7, 129, 15, 50, 'Palli', 1, '2022-09-08', '0000-00-00'),
(290, 7, 129, 15, 50, 'Dhanpur', 1, '2022-09-08', '0000-00-00'),
(291, 7, 129, 15, 51, 'Bade Banjoda', 1, '2022-09-08', '0000-00-00'),
(292, 7, 129, 15, 51, 'Dahikonga', 1, '2022-09-08', '0000-00-00'),
(293, 7, 129, 15, 51, 'Mungapadar', 1, '2022-09-08', '0000-00-00'),
(294, 7, 129, 15, 51, 'Mungapadar', 1, '2022-09-08', '0000-00-00'),
(295, 7, 129, 15, 51, 'Ghodagaon', 1, '2022-09-08', '0000-00-00'),
(296, 7, 129, 15, 51, 'Makdi', 1, '2022-09-08', '0000-00-00'),
(297, 7, 129, 15, 51, 'Joba', 1, '2022-09-08', '0000-00-00'),
(298, 7, 129, 17, 52, 'Sawala', 1, '2022-09-08', '0000-00-00'),
(299, 7, 129, 17, 52, 'Kararmeta', 1, '2022-09-08', '0000-00-00'),
(300, 7, 129, 17, 52, 'Korkoti', 1, '2022-09-08', '0000-00-00'),
(301, 7, 129, 17, 52, 'Badekholi', 1, '2022-09-08', '0000-00-00'),
(302, 7, 129, 17, 52, 'Binjhe', 1, '2022-09-08', '0000-00-00'),
(303, 7, 129, 17, 52, 'Kanagaon', 1, '2022-09-08', '0000-00-00'),
(304, 7, 129, 17, 52, 'Iragaon', 1, '2022-09-08', '0000-00-00'),
(305, 7, 129, 17, 53, 'Keshkal', 1, '2022-09-08', '0000-00-00'),
(306, 7, 129, 17, 53, 'Jaamgaon', 1, '2022-09-08', '0000-00-00'),
(307, 7, 129, 17, 53, 'Borgaon', 1, '2022-09-08', '0000-00-00'),
(308, 7, 129, 17, 53, 'Surdongar', 1, '2022-09-08', '0000-00-00'),
(309, 7, 129, 17, 53, 'Honhedh', 1, '2022-09-08', '0000-00-00'),
(310, 7, 129, 17, 53, 'Kohkameta', 1, '2022-09-08', '0000-00-00'),
(311, 7, 129, 17, 53, 'Saleybhat', 1, '2022-09-08', '0000-00-00'),
(312, 7, 129, 17, 53, 'Murvend', 1, '2022-09-08', '0000-00-00'),
(313, 7, 129, 15, 54, 'Adkachepda', 1, '2022-09-08', '0000-00-00'),
(314, 7, 129, 15, 54, 'Kopabeda', 1, '2022-09-08', '0000-00-00'),
(315, 7, 129, 15, 54, 'Jamkot', 1, '2022-09-08', '0000-00-00'),
(316, 7, 129, 15, 54, 'Jondrapadar', 1, '2022-09-08', '0000-00-00'),
(317, 7, 129, 14, 55, 'Banjoda', 1, '2022-09-08', '0000-00-00'),
(318, 7, 129, 14, 55, 'Devgaon', 1, '2022-09-08', '0000-00-00'),
(319, 7, 129, 14, 55, 'Kongudh', 1, '2022-09-08', '0000-00-00'),
(320, 7, 129, 14, 55, 'Fhunder', 1, '2022-09-08', '0000-00-00'),
(321, 7, 129, 14, 55, 'Haatchapai', 1, '2022-09-08', '0000-00-00'),
(322, 7, 129, 14, 56, 'Sodhma', 1, '2022-09-08', '0000-00-00'),
(323, 7, 129, 14, 56, 'Jaitpuri', 1, '2022-09-08', '0000-00-00'),
(324, 7, 129, 14, 56, 'Bhandasivni', 1, '2022-09-08', '0000-00-00'),
(325, 7, 129, 14, 56, 'Jugani', 1, '2022-09-08', '0000-00-00'),
(326, 7, 129, 14, 56, 'Lanjodha', 1, '2022-09-08', '0000-00-00'),
(327, 7, 129, 14, 56, 'Kabonga', 1, '2022-09-08', '0000-00-00'),
(328, 7, 129, 13, 57, 'Mageda', 1, '2022-09-08', '0000-00-00'),
(329, 7, 129, 13, 57, 'Makdi ,A', 1, '2022-09-08', '0000-00-00'),
(330, 7, 129, 13, 57, 'Jarandi', 1, '2022-09-08', '0000-00-00'),
(331, 7, 129, 13, 57, 'Dharli', 1, '2022-09-08', '0000-00-00'),
(332, 7, 129, 13, 57, 'Hirapur', 1, '2022-09-08', '0000-00-00'),
(333, 7, 129, 13, 57, 'Makdi ,B', 1, '2022-09-08', '0000-00-00'),
(334, 7, 129, 13, 57, 'Peedhapal', 1, '2022-09-08', '0000-00-00'),
(335, 7, 129, 13, 57, 'Bagbeda', 1, '2022-09-08', '0000-00-00'),
(336, 7, 129, 13, 57, 'Makdi,B', 1, '2022-09-08', '0000-00-00'),
(337, 7, 129, 15, 58, 'Mardapal', 1, '2022-09-08', '0000-00-00'),
(338, 7, 129, 15, 58, 'Hadeli', 1, '2022-09-08', '0000-00-00'),
(339, 7, 129, 15, 58, 'Hassalnar', 1, '2022-09-08', '0000-00-00'),
(340, 7, 129, 15, 58, 'Khadhpari', 1, '2022-09-08', '0000-00-00'),
(341, 7, 129, 15, 58, 'Kudhur', 1, '2022-09-08', '0000-00-00'),
(342, 7, 129, 15, 58, 'Kadenaar', 1, '2022-09-08', '0000-00-00'),
(343, 7, 129, 15, 58, 'Mulnaar', 1, '2022-09-08', '0000-00-00'),
(344, 7, 129, 15, 58, 'Tekapaal', 1, '2022-09-08', '0000-00-00'),
(345, 7, 129, 15, 58, 'Gadantarai', 1, '2022-09-08', '0000-00-00'),
(346, 7, 129, 15, 58, 'Lakhapuri', 1, '2022-09-08', '0000-00-00'),
(347, 7, 129, 15, 58, 'Haffel', 1, '2022-09-08', '0000-00-00'),
(348, 7, 129, 14, 59, 'Pharasgaon', 1, '2022-09-08', '0000-00-00'),
(349, 7, 129, 14, 59, 'Aalor', 1, '2022-09-08', '0000-00-00'),
(350, 7, 129, 14, 59, 'Borgaon', 1, '2022-09-08', '0000-00-00'),
(351, 7, 129, 14, 59, 'Borgaon', 1, '2022-09-08', '0000-00-00'),
(352, 7, 129, 14, 59, 'Pasangi', 1, '2022-09-08', '0000-00-00'),
(353, 7, 129, 14, 59, 'Pandey Aathgaon', 1, '2022-09-08', '0000-00-00'),
(354, 7, 129, 14, 59, 'Bhandarbandi', 1, '2022-09-08', '0000-00-00'),
(355, 7, 129, 14, 59, 'Charkai', 1, '2022-09-08', '0000-00-00'),
(356, 7, 129, 14, 59, 'Chichadhi', 1, '2022-09-08', '0000-00-00'),
(358, 7, 129, 13, 60, 'Lubha', 1, '2022-09-08', '0000-00-00'),
(359, 7, 129, 13, 60, 'Bagbeda', 1, '2022-09-08', '0000-00-00'),
(360, 7, 129, 13, 60, 'Randhna', 1, '2022-09-08', '0000-00-00'),
(361, 7, 129, 13, 60, 'Barkai', 1, '2022-09-08', '0000-00-00'),
(362, 7, 129, 13, 60, 'Balond', 1, '2022-09-08', '0000-00-00'),
(363, 7, 129, 13, 60, 'Lubha', 1, '2022-09-08', '0000-00-00'),
(364, 7, 129, 13, 60, 'Sonabeda', 1, '2022-09-08', '0000-00-00'),
(365, 7, 129, 13, 60, 'Blond', 1, '2022-09-08', '0000-00-00'),
(366, 7, 129, 16, 61, 'Badagaon', 1, '2022-09-08', '0000-00-00'),
(367, 7, 129, 16, 61, 'Lihagaon', 1, '2022-09-08', '0000-00-00'),
(368, 7, 129, 16, 61, 'Parond', 1, '2022-09-08', '0000-00-00'),
(369, 7, 129, 16, 61, 'Udidgaon', 1, '2022-09-08', '0000-00-00'),
(370, 7, 129, 16, 61, 'Marangpuri', 1, '2022-09-08', '0000-00-00'),
(371, 7, 129, 16, 61, 'Kaundkera', 1, '2022-09-08', '0000-00-00'),
(372, 7, 129, 13, 62, 'Shampur', 1, '2022-09-08', '0000-00-00'),
(373, 7, 129, 13, 62, 'Hadigaon', 1, '2022-09-08', '0000-00-00'),
(374, 7, 129, 13, 62, 'Bavai', 1, '2022-09-08', '0000-00-00'),
(375, 7, 129, 13, 62, 'Hadigaon', 1, '2022-09-08', '0000-00-00'),
(376, 7, 129, 13, 62, 'Kantagaon', 1, '2022-09-08', '0000-00-00'),
(377, 7, 129, 13, 62, 'Manjhibornd', 1, '2022-09-08', '0000-00-00'),
(378, 7, 129, 13, 62, 'Kerawahi', 1, '2022-09-08', '0000-00-00'),
(379, 7, 129, 13, 62, 'Tedmunda ', 1, '2022-09-08', '0000-00-00'),
(381, 7, 129, 17, 63, 'Anvri', 1, '2022-09-08', '0000-00-00'),
(382, 7, 129, 17, 63, 'Adhega', 1, '2022-09-08', '0000-00-00'),
(383, 7, 129, 17, 63, 'Bedhmamamari', 1, '2022-09-08', '0000-00-00'),
(384, 7, 129, 17, 63, 'Garavandi', 1, '2022-09-08', '0000-00-00'),
(385, 7, 129, 17, 63, 'Kuyemari', 1, '2022-09-08', '0000-00-00'),
(386, 7, 129, 17, 63, 'Neerachindli', 1, '2022-09-08', '0000-00-00'),
(387, 7, 129, 17, 63, 'Singanpur', 1, '2022-09-08', '0000-00-00'),
(388, 7, 129, 17, 63, 'Toshkapal', 1, '2022-09-08', '0000-00-00'),
(389, 7, 129, 15, 64, 'Sonabal', 1, '2022-09-08', '0000-00-00'),
(390, 7, 129, 15, 64, 'Nagri Madanar', 1, '2022-09-08', '0000-00-00'),
(391, 7, 129, 15, 64, 'Baniyagaon', 1, '2022-09-08', '0000-00-00'),
(392, 7, 129, 15, 64, 'Golavand', 1, '2022-09-08', '0000-00-00'),
(393, 7, 129, 15, 64, 'Kusama', 1, '2022-09-08', '0000-00-00'),
(394, 7, 129, 16, 65, 'Vishrampuri A', 1, '2022-09-08', '0000-00-00'),
(395, 7, 129, 16, 65, 'Vishrampuri B', 1, '2022-09-08', '0000-00-00'),
(396, 7, 129, 16, 65, 'khallari', 1, '2022-09-08', '0000-00-00'),
(397, 7, 129, 16, 65, 'Khajrawand', 1, '2022-09-08', '0000-00-00'),
(398, 7, 129, 16, 65, 'kosmi', 1, '2022-09-08', '0000-00-00'),
(399, 7, 129, 16, 65, 'Kongera', 1, '2022-09-08', '0000-00-00'),
(400, 7, 129, 16, 65, 'Jirrapara', 1, '2022-09-08', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `trainee_master`
--

CREATE TABLE `trainee_master` (
  `trainee_id` int(10) NOT NULL,
  `trainer_id` int(10) NOT NULL,
  `state_id` int(5) NOT NULL,
  `city_id` int(5) NOT NULL,
  `block_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `trainee_name` varchar(100) NOT NULL,
  `trainee_email` varchar(50) NOT NULL,
  `trainee_mobile` varchar(15) NOT NULL,
  `trainee_gender` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `device_token` text NOT NULL,
  `forgetPassword_token` text NOT NULL,
  `status` int(2) NOT NULL,
  `creation_date` date NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainee_master`
--

INSERT INTO `trainee_master` (`trainee_id`, `trainer_id`, `state_id`, `city_id`, `block_id`, `sector_id`, `sub_id`, `trainee_name`, `trainee_email`, `trainee_mobile`, `trainee_gender`, `password`, `device_token`, `forgetPassword_token`, `status`, `creation_date`, `modification_date`) VALUES
(1, 11, 7, 134, 1, 1, 1, 'Lakhmi Kumeti', '', '9424218309', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(2, 11, 7, 134, 1, 1, 1, 'Neelbati Netam', '', '9406478175', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(3, 11, 7, 134, 1, 1, 1, 'Pramila Dewangan', '', '9406398289', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(4, 11, 7, 134, 1, 1, 2, 'Kiran Kachlam', '', '7587042944', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(5, 11, 7, 134, 1, 1, 2, 'Sahdai Sori', '', '7587446502', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(6, 11, 7, 134, 1, 1, 2, 'Kishanbati Bhandari', '', '7067798450', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(7, 11, 7, 134, 1, 1, 3, 'Nirmala Taram', '', '9406425319', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(8, 11, 7, 134, 1, 1, 4, 'Takeshwari Sori', '', '8815275696', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(9, 11, 7, 134, 1, 1, 4, 'Umeshwari Kaiwartya', '', '9406097167', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(10, 11, 7, 134, 1, 1, 5, 'Urmila Dugga', '', '9424277001', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(11, 11, 7, 134, 1, 1, 5, 'Savitri Nayak', '', '7648091242', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(12, 11, 7, 134, 1, 1, 6, 'Sanshila Rathore', '', '7879044131', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(13, 11, 7, 134, 1, 1, 6, 'Hemlata Dewangan', '', '7999062752', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(14, 11, 7, 134, 1, 1, 7, 'Sunita Sori', '', '7587700849', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(15, 11, 7, 134, 1, 1, 8, 'Sita Dadi', '', '6261850425', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(16, 11, 7, 134, 1, 1, 8, 'Sangita Sahu', '', '7646922646', 'Female', '', '', '', 1, '2022-09-02', '0000-00-00'),
(610, 11, 7, 134, 1, 1, 1, 'Lakhmi Kumeti', '', '9424218309', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(611, 11, 7, 134, 1, 1, 1, 'Neelbati Netam', '', '9406478175', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(612, 11, 7, 134, 1, 1, 1, 'Pramila Dewangan', '', '9406398289', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(613, 11, 7, 134, 1, 1, 2, 'Kiran Kachlam', '', '7587042944', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(614, 11, 7, 134, 1, 1, 2, 'Sahdai Sori', '', '7587446502', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(615, 11, 7, 134, 1, 1, 2, 'Kishanbati Bhandari', '', '7067798450', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(616, 11, 7, 134, 1, 1, 3, 'Nirmala Taram', '', '9406425319', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(617, 11, 7, 134, 1, 1, 4, 'Takeshwari Sori', '', '8815275696', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(618, 11, 7, 134, 1, 1, 4, 'Umeshwari Kaiwartya', '', '9406097167', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(619, 11, 7, 134, 1, 1, 5, 'Urmila Dugga', '', '9424277001', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(620, 11, 7, 134, 1, 1, 5, 'Savitri Nayak', '', '7648091242', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(621, 11, 7, 134, 1, 1, 6, 'Sanshila Rathore', '', '7879044131', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(622, 11, 7, 134, 1, 1, 6, 'Hemlata Dewangan', '', '7999062752', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(623, 11, 7, 134, 1, 1, 7, 'Sunita Sori', '', '7587700849', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(624, 11, 7, 134, 1, 1, 8, 'Sita Dadi', '', '6261850425', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(625, 11, 7, 134, 1, 1, 8, 'Sangita Sahu', '', '7646922646', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(626, 12, 7, 134, 1, 2, 9, 'Kishanteen Sori', '', '7587025330', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(627, 12, 7, 134, 1, 2, 9, 'Phulkumari Bhaghel', '', '7587803022', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(628, 12, 7, 134, 1, 2, 10, 'Nimi Sahu', '', '7587153715', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(629, 12, 7, 134, 1, 2, 10, 'Kunti Nag', '', '9424172200', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(630, 12, 7, 134, 1, 2, 11, 'Anita Sori', '', '7587373885', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(631, 12, 7, 134, 1, 2, 11, 'Punai Sori', '', '9406156473', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(632, 12, 7, 134, 1, 2, 12, 'Geeta Nayak', '', '9406206755', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(633, 12, 7, 134, 1, 2, 13, 'Kavita Patra', '', '9407916479', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(634, 12, 7, 134, 1, 2, 13, 'Nandani Chaudhari', '', '9098510412', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(635, 12, 7, 134, 1, 2, 14, 'Sombati Vadada', '', '7587878201', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(636, 12, 7, 134, 1, 2, 14, 'Bhagwati Bhaghel', '', '7587393921', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(637, 13, 7, 134, 1, 3, 15, 'Savitri Nag', '', '9406095386', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(638, 13, 7, 134, 1, 3, 15, 'Radha Bhaghel', '', '7587227041', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(639, 13, 7, 134, 1, 3, 16, 'Nalani Som', '', '9424157512', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(640, 13, 7, 134, 1, 3, 16, 'Lakheswari Usendi', '', '7646922574', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(641, 13, 7, 134, 1, 3, 0, 'Takeshwari Dehari', '', '7648041392', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(642, 13, 7, 134, 1, 3, 17, 'Hemlata Markam', '', '9407715972', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(643, 13, 7, 134, 1, 3, 18, 'Rekha Kunjam', '', '7646857104', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(644, 13, 7, 134, 1, 3, 19, 'Pushpa Pisda', '', '9407693527', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(645, 13, 7, 134, 1, 3, 19, 'Navindra Gharat', '', '9406026989', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(646, 13, 7, 134, 1, 3, 20, 'Hiramadi Patra', '', '9424217675', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(647, 13, 7, 134, 1, 3, 20, 'Sunita Bhaghel', '', '7647062163', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(648, 14, 7, 134, 2, 4, 21, 'Bharti Sheel', '', '9406006059', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(649, 14, 7, 134, 2, 4, 22, 'Lalita Dehari', '', '7587073114', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(650, 14, 7, 134, 2, 4, 23, 'Radhika Nag', '', '9406208451', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(651, 14, 7, 134, 2, 4, 24, 'Sangita Dhruv', '', '6265035720', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(652, 14, 7, 134, 2, 4, 25, 'Rama Sori', '', '9406394417', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(653, 14, 7, 134, 2, 4, 58, 'Sunita Dodi', '', '7587700849', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(654, 15, 7, 134, 2, 5, 26, 'Hemeshwari Baghel', '', '7587409187', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(655, 15, 7, 134, 2, 5, 27, 'Sarita Potai', '', '7587327411', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(656, 15, 7, 134, 2, 5, 28, 'Pramila Usendi', '', '7587392235', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(657, 15, 7, 134, 2, 5, 29, 'Kavita Patra', '', '9407916479', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(658, 15, 7, 134, 2, 5, 30, 'Yojna Bhoyar', '', '9406011377', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(659, 15, 7, 134, 2, 5, 31, 'Sumitra Nag', '', '7646851152', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(660, 16, 7, 134, 2, 6, 32, 'Bulurani Bairagi', '', '9406284601', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(661, 16, 7, 134, 2, 6, 33, 'Pramila Salam', '', '7587286150', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(662, 16, 7, 134, 2, 6, 34, 'Sushila Mandavi', '', '9770754789', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(663, 16, 7, 134, 2, 6, 35, 'Budhiyarin Korram', '', '9479018096', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(664, 16, 7, 134, 2, 6, 36, 'Asha Chokhandre', '', '9406161854', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(665, 17, 7, 134, 2, 7, 37, 'Kalpana Uike', '', '7587290413', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(666, 17, 7, 134, 2, 7, 38, 'Phoolbati Korram', '', '9406355416', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(667, 17, 7, 134, 2, 7, 39, 'Sunti Nareti', '', '7646863505', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(668, 17, 7, 134, 2, 7, 40, 'Pashmi Mandavi', '', '7587843744', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(669, 17, 7, 134, 2, 7, 41, 'Sukhbati Potai', '', '9424220087', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(670, 18, 7, 134, 1, 8, 42, 'Shanti Nureti', '', '9098422969', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(671, 18, 7, 134, 1, 8, 42, 'Aarti Prasad', '', '7587706529', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(672, 18, 7, 134, 1, 8, 43, 'Neelmani Dutta', '', '9406015618', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(673, 18, 7, 134, 1, 8, 43, 'Sarita Potai', '', '9329841405', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(674, 18, 7, 134, 1, 8, 44, 'Meena Mandawi', '', '6262742764', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(675, 18, 7, 134, 1, 8, 44, 'Sarsawati Yadav', '', '9479012278', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(676, 18, 7, 134, 1, 8, 44, 'Anjalina Kurre', '', '7587737147', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(677, 18, 7, 134, 1, 8, 45, 'Kaushalya Dugga', '', '6268366095', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(678, 18, 7, 134, 1, 8, 45, 'Hemkala Taram', '', '9407018114', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(679, 18, 7, 134, 1, 8, 46, 'Kalpana Mankar', '', '7987821728', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(680, 18, 7, 134, 1, 8, 46, 'Shraddha Kannauje', '', '6263364675', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(681, 18, 7, 134, 1, 8, 47, 'Padmawati Taram', '', '9301183487', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(682, 18, 7, 134, 1, 8, 47, 'Seeta Markam', '', '7587311073', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(683, 19, 7, 134, 2, 9, 48, 'Bindu Nag', '', '7647061482', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(684, 19, 7, 134, 2, 9, 49, 'Bindu Mandavi', '', '7974679509', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(685, 19, 7, 134, 2, 9, 50, 'Subhadra Bhoyar', '', '9406321863', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(686, 19, 7, 134, 2, 9, 51, 'Vandana Baghel', '', '930115560', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(687, 20, 7, 134, 2, 10, 52, 'Raini Warda', '', '9424168711', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(688, 20, 7, 134, 2, 10, 53, 'Samarbatti Vadde', '', '9406432584', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(689, 20, 7, 134, 2, 10, 54, 'Harantin Mandavi', '', '758713620', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(690, 20, 7, 134, 2, 10, 55, 'Sangeeta Baghel', '', '7647945768', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(691, 20, 7, 134, 2, 10, 56, 'Sampati Dehari', '', '9479017379', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(692, 21, 7, 119, 3, 11, 59, '  Rajeshwari Karma', '', '6260474467', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(693, 21, 7, 119, 3, 11, 60, '  Durga Kotrangi', '', '7879331903', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(694, 21, 7, 119, 3, 11, 61, '  Pushplata Mandavi', '', '7879470240', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(695, 21, 7, 119, 3, 11, 62, '  Mamta Sakni', '', '9406152314', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(696, 21, 7, 119, 3, 11, 63, '  Kavita Thakur', '', '6263579566', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(697, 21, 7, 119, 3, 11, 64, '  Sadhna Neelam', '', '6263791187', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(698, 21, 7, 119, 3, 11, 65, '  Sumitra sori', '', '9098981501', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(699, 21, 7, 119, 3, 11, 66, '  Geeta Pujari', '', '7579886394', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(700, 21, 7, 119, 3, 11, 67, '  Ashman Punem', '', '6264250391', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(701, 22, 7, 119, 3, 12, 68, '  Reena Roy', '', '8815391729', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(702, 22, 7, 119, 3, 12, 69, '  Sunita Maravi', '', '7067765659', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(703, 22, 7, 119, 3, 12, 70, '  Rani Mandavi', '', '9340799383', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(704, 22, 7, 119, 3, 12, 71, '  Neha Kujur', '', '9399978133', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(705, 22, 7, 119, 3, 12, 72, '  Sangeeta Kujur', '', '9406179356', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(706, 22, 7, 119, 3, 12, 73, '  Tulsi Karma', '', '7771994902', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(707, 23, 7, 119, 3, 13, 74, '  Nirmala Chidiyam', '', '7828646717', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(708, 23, 7, 119, 3, 13, 75, '  Raju Pungeti', '', '7587700623', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(709, 23, 7, 119, 3, 13, 76, '  Kavita Lonhare', '', '9425232535', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(710, 23, 7, 119, 3, 13, 77, '  Reeta Fulmadri', '', '7587120813', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(711, 23, 7, 119, 3, 13, 78, '  Santoshi Baghel', '', '6268519992', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(712, 24, 7, 119, 3, 14, 79, '  Lalita Nishad', '', '6261289481', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(713, 24, 7, 119, 3, 14, 80, '  Kade Kawasi', '', '7000396851', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(714, 24, 7, 119, 3, 14, 81, '  Neelawati Nag', '', '7587133891', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(715, 24, 7, 119, 3, 14, 82, '  Mamta Udde', '', '8305547433', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(716, 25, 7, 119, 3, 15, 83, '  Punam Netam', '', '6263582527', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(717, 25, 7, 119, 3, 15, 84, '  Kanta Pujari', '', '6264220713', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(718, 25, 7, 119, 3, 15, 85, '  Bhagyawati Mourya', '', '9424278856', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(719, 26, 7, 119, 4, 16, 86, '  Parmila Esta', '', '6261376336', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(720, 26, 7, 119, 4, 16, 87, '  Duppa Reena ', '', '7067247471', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(721, 26, 7, 119, 4, 16, 88, '  Sujata Yalam ', '', '6264774222', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(722, 26, 7, 119, 4, 16, 89, '  Anita Allem ', '', '9406113164', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(723, 26, 7, 119, 4, 16, 90, '  Devi Sonla ', '', '7587251044', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(724, 26, 7, 119, 4, 16, 91, '  Surkala Kursam ', '', '7067560684', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(725, 27, 7, 119, 4, 17, 92, '  Sarojani Kallem ', '', '9407750876', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(726, 27, 7, 119, 4, 17, 93, '  Sarita Chidem ', '', '7647949765', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(727, 27, 7, 119, 4, 17, 94, '  LaxmiKanta  Lambadi ', '', '9691884615', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(728, 27, 7, 119, 4, 17, 95, '  Manju Pondi ', '', '8305476371', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(729, 27, 7, 119, 4, 17, 96, '  Jyoti Punem ', '', '9398881778', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(730, 28, 7, 119, 4, 18, 97, '  Anita Gotta', '', '6268382392', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(731, 28, 7, 119, 4, 18, 98, '  Kavita Savlam ', '', '9406342995', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(732, 28, 7, 119, 4, 18, 99, '  Urmila Bhodboina', '', '6260729759', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(733, 29, 7, 119, 4, 19, 100, '  Madumati Devid', '', '6260729759', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(734, 29, 7, 119, 4, 19, 101, '  Nagubai Wasam ', '', '9329839247', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(735, 30, 7, 119, 5, 20, 102, '  Kirti Kujur', '', '6264851791', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(736, 30, 7, 119, 5, 20, 103, '  Kiran Markam', '', '6261603788', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(737, 30, 7, 119, 5, 20, 104, '  Sunita Togar', '', '9399705240', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(738, 30, 7, 119, 5, 20, 105, '  Kanta Kawre ', '', '9098066233', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(739, 30, 7, 119, 5, 20, 106, '  Kalpna Karmarka', '', '7587801487', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(740, 30, 7, 119, 5, 20, 107, '  Rameswari Sonwani ', '', '6261538582', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(741, 31, 7, 119, 5, 21, 108, '  Anita Nareti', '', '6261441305', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(742, 31, 7, 119, 5, 21, 109, '  Sharmila Ekka', '', '6266380869', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(743, 31, 7, 119, 5, 21, 110, '  Chaiti Ghosh', '', '6261123667', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(744, 31, 7, 119, 5, 21, 111, '  Maheshwari Kandik', '', '6265764471', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(745, 31, 7, 119, 5, 21, 112, '  Partibha Govrnar', '', '6264072048', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(746, 31, 7, 119, 5, 21, 113, '  Laxmi Kanta Gandharla', '', '8817529331', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(747, 32, 7, 119, 5, 22, 114, '  Kama Pondi ', '', '6263596767', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(748, 32, 7, 119, 5, 22, 115, '  Akancha Chidiyam ', '', '9770205593', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(749, 32, 7, 119, 5, 22, 116, '  Anita Pujari', '', '8770664118', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(750, 32, 7, 119, 5, 22, 117, '  Sangeeta Uppal', '', '9399805892', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(751, 32, 7, 119, 5, 22, 118, '  Smuriti Thakur', '', '6263046853', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(752, 33, 7, 119, 5, 23, 119, '  Sobha Kiran Minj ', '', '9399224456', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(753, 33, 7, 119, 5, 23, 120, '  Awani Sagar ', '', '6267296060', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(754, 33, 7, 119, 5, 23, 121, '  Lalita Sendra ', '', '9131110058', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(755, 34, 7, 119, 6, 24, 122, '  Sadna Punem ', '', '7587192409', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(756, 34, 7, 119, 6, 24, 123, '  Lalita Yalam ', '', '6261149970', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(757, 34, 7, 119, 6, 24, 123, '  Vandna Morla ', '', '6265145595', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(758, 34, 7, 119, 6, 24, 124, '  Reena Jaicab', '', '9479044691', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(759, 34, 7, 119, 6, 24, 124, '  Ravina Todsam ', '', '9691778462', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(760, 34, 7, 119, 6, 24, 124, '  Shyama Morla ', '', '9770787611', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(761, 34, 7, 119, 6, 24, 125, '  Satyavati Yadav ', '', '7587853264', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(762, 35, 7, 119, 6, 25, 125, '  Sunila Pujari ', '', '7587126688', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(763, 35, 7, 119, 6, 25, 127, '  Chanda Rangari ', '', '6260981275', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(764, 35, 7, 119, 6, 25, 128, '  Lalita Wasam ', '', '7587853208', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(765, 35, 7, 119, 6, 25, 129, '  Padam Gote ', '', '7587173548', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(766, 35, 7, 119, 6, 25, 129, '  Laxmi Micha ', '', '9407908747', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(767, 36, 7, 119, 6, 26, 130, '  Anita Sadi ', '', '6266060390', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(768, 36, 7, 119, 6, 26, 131, '  Bhagvati Rathor', '', '7587749291', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(769, 36, 7, 119, 6, 26, 131, '  Jyoti Morla ', '', '9479283965', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(770, 36, 7, 119, 6, 26, 133, '  Kavita Nanmadhari ', '', '6261603788', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(771, 36, 7, 119, 6, 26, 133, '  Sushila Kavre ', '', '9479069915', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(772, 36, 7, 119, 6, 26, 134, '  Malti Kudiyam ', '', '9406242203', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(773, 36, 7, 119, 6, 26, 135, '  Tadi Ansurya ', '', '9479069724', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(774, 36, 7, 119, 6, 26, 135, '  Laxmi Kadi ', '', '6264578866', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(775, 37, 7, 119, 6, 27, 136, '  Jaya Laxmi Kode ', '', '6263040885', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(776, 37, 7, 119, 6, 27, 137, '  Jyoti Sidhar', '', '9407910966', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(777, 37, 7, 119, 6, 27, 137, '  Nagmani Chilmul ', '', '6264113961', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(778, 37, 7, 119, 6, 27, 138, '  Sarojani Erspa', '', '9479069478', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(779, 37, 7, 119, 6, 27, 138, '  Ved Uike ', '', '8318124583', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(780, 38, 7, 119, 6, 28, 139, '  Uma Devi Kavti ', '', '9406167540', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(781, 38, 7, 119, 6, 28, 140, '  Jyoti Kode ', '', '9407699818', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(782, 38, 7, 119, 6, 28, 141, '  Sandhaya Morla ', '', '7587011290', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(783, 38, 7, 119, 6, 28, 142, '  Priynka Macha', '', '8500620929', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(784, 0, 7, 0, 0, 0, 0, 'Name of ANM', '', 'ANM Contact Num', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(785, 39, 7, 121, 7, 29, 143, 'Aakancha Yadav', '', '6260500951', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(786, 39, 7, 121, 7, 29, 144, 'Sushmita Acharya', '', '9754205293', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(787, 39, 7, 121, 7, 29, 145, 'Anju Kuretiya', '', '7024550082', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(788, 39, 7, 121, 7, 29, 146, 'Rukmani Nagwanshi', '', '7489589895', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(789, 39, 7, 121, 7, 29, 147, 'Indra Golcha', '', '9406002982', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(790, 39, 7, 121, 7, 29, 148, 'Chandra Kanti Nagwanshi', '', '6261321454', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(791, 39, 7, 121, 7, 29, 149, 'Sarita Bachela', '', '9406072951', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(792, 39, 7, 121, 7, 29, 150, 'Sarita Baghel', '', '6267668364', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(793, 39, 7, 121, 7, 29, 151, 'Fulmani Sagar', '', '9111225833', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(794, 39, 7, 121, 7, 29, 152, 'Geeta Karma', '', '8770016647', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(795, 40, 7, 121, 7, 30, 153, 'Anjani Netam', '', '9753531425', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(796, 40, 7, 121, 7, 30, 154, 'Kavita Jaiswal', '', '9098821685', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(797, 40, 7, 121, 7, 30, 155, 'Ansuiya Nag', '', '9479082420', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(798, 40, 7, 121, 7, 30, 156, 'Jaya Morla', '', '9009451385', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(799, 40, 7, 121, 7, 30, 157, 'Priti Saiman', '', '9406063975', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(800, 40, 7, 121, 7, 30, 158, 'Kamla Netam', '', '9406004423', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(801, 41, 7, 121, 7, 31, 159, 'Pooja Soni', '', '9479202300', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(802, 41, 7, 121, 7, 31, 160, 'Preeti Pujari', '', '8226018118', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(803, 41, 7, 121, 7, 31, 161, 'Sant Kumari Rana', '', '7748843083', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(804, 41, 7, 121, 7, 31, 162, 'Sarita Singh', '', '9669486482', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(805, 41, 7, 121, 7, 31, 163, 'Vijeta Nag', '', '7747822424', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(806, 41, 7, 121, 7, 31, 164, 'Dashmi Kashyap', '', '6263853277', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(807, 42, 7, 121, 9, 32, 165, 'Sanjeeta Minj', '', '7067218312', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(808, 43, 7, 121, 9, 32, 166, 'Dhaneshwari', '', '7489052433', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(809, 43, 7, 121, 9, 32, 167, 'Roshan Nag', '', '9165107756', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(810, 43, 7, 121, 9, 32, 168, 'Mohini Thakur', '', '9179727118', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(811, 44, 7, 121, 9, 32, 169, 'Soni Kashyap', '', '9706260134', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(812, 44, 7, 121, 9, 32, 170, 'Sushila Sahu', '', '8770182564', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(813, 45, 7, 121, 9, 32, 171, 'Uman Bai Singh', '', '7587850426', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(814, 45, 7, 121, 9, 33, 172, 'Vinita Das', '', '7587850291', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(815, 45, 7, 121, 9, 33, 173, 'Arti', '', '7587142840', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(816, 45, 7, 121, 9, 33, 174, 'Sohita Bai', '', '9479160344', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(817, 45, 7, 121, 9, 33, 175, 'Ganga Sandilya', '', '7587850294', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(818, 45, 7, 121, 9, 33, 176, 'Uma Durga', '', '9406003554', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(819, 45, 7, 121, 9, 33, 177, 'Jamila Sur', '', '6266301535', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(820, 46, 7, 121, 9, 34, 178, 'Sadhna Saha', '', '7387051805', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(821, 46, 7, 121, 9, 34, 179, 'Chanda Borai', '', '9479010784', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(822, 47, 7, 121, 9, 34, 180, 'Naina Kashyap', '', '7587128607', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(823, 46, 7, 121, 9, 34, 181, 'Anju Markam', '', '8878697356', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(824, 47, 7, 121, 9, 34, 182, 'Manisha Dehari', '', '7879578585', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(825, 47, 7, 121, 11, 34, 183, 'Sakuntala Sahu', '', '8109786266', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(826, 48, 7, 121, 11, 35, 184, 'Reshma Panse', '', '9406072054', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(827, 48, 7, 121, 11, 35, 185, 'Koleshwari Mandavi', '', '9407728258', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(828, 48, 7, 121, 11, 35, 186, 'Roshni Mandavi', '', '7647052417', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(829, 48, 7, 121, 11, 35, 187, 'Shadna Shrama', '', '7587424839', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(830, 48, 7, 121, 11, 35, 188, 'Durga', '', '7587259264', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(831, 48, 7, 121, 11, 35, 189, 'Maya Vishwash', '', '9406072055', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(832, 48, 7, 121, 11, 35, 190, 'Sushila Mehra', '', '6268233302', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(833, 48, 7, 121, 11, 35, 191, 'Savita Bhagat', '', '7587167604', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(834, 48, 7, 121, 11, 35, 192, 'Laxminath Bhaskar', '', '6261399133', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(835, 49, 7, 121, 11, 36, 193, 'Kanti Netam', '', '9407699025', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(836, 49, 7, 121, 11, 36, 194, 'Satrupa Salam', '', '7648023080', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(837, 49, 7, 121, 11, 36, 195, 'Malti Nag', '', '9424273553', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(838, 50, 7, 121, 12, 37, 196, 'Maheshwari Markam', '', '9630971009', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(839, 50, 7, 121, 12, 37, 196, 'Vandana Toppo', '', '9685696613', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(840, 50, 7, 121, 12, 37, 197, 'Anusuriya Yalam', '', '9406109892', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(841, 50, 7, 121, 12, 37, 197, 'Daymati Thakur', '', '6260891473', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(842, 50, 7, 121, 12, 37, 198, 'Nagi Sodi', '', '9406361018', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(843, 50, 7, 121, 12, 37, 198, 'Bhimeshwari Mourya ', '', '9479024065', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(844, 50, 7, 121, 12, 37, 199, 'Deepika Nag', '', '6260750036', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(845, 50, 7, 121, 12, 37, 200, 'Kusum Lata Koshma ', '', '9479100508', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(846, 50, 7, 121, 12, 37, 200, 'Kadli Bhadre ', '', '8719957064', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(847, 50, 7, 121, 12, 37, 201, 'Mangal Dai Vetti', '', '9479216432', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(848, 50, 7, 121, 12, 37, 201, 'Sarita Nayak ', '', '7587283560', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(849, 50, 7, 121, 12, 37, 201, 'Shanti Darro ', '', '9479045366', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(850, 50, 7, 121, 12, 37, 202, ' Supriya Vatti', '', '9424298828', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(851, 50, 7, 121, 12, 37, 203, 'Premvati Netam', '', '9406004215', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(852, 51, 7, 121, 12, 38, 204, 'Reena Sonwani', '', '9425565509', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(853, 51, 7, 121, 12, 38, 204, 'Asha Sewta ', '', '9754216798', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(854, 51, 7, 121, 12, 38, 204, 'Deepika Sethiya ', '', '9109724742', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(855, 51, 7, 121, 12, 38, 204, 'Indu Anand ', '', '7566442186', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(856, 51, 7, 121, 12, 38, 205, 'Archna Haldhar', '', '7587231851', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(857, 51, 7, 121, 12, 38, 206, 'Sangeeta Khess', '', '8319035003', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(858, 51, 7, 121, 12, 38, 206, 'Leshwani Patre', '', '9479082157', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(859, 51, 7, 121, 12, 38, 207, 'Anita J Thomas ', '', '9406098335', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(860, 51, 7, 121, 12, 38, 207, 'Rambati yadav  ', '', '7489680028', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(861, 51, 7, 121, 12, 38, 208, 'Leela Bhushnam', '', '9406004092', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(862, 51, 7, 121, 12, 38, 208, 'Naimanti Joshi', '', '9399896569', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(863, 51, 7, 121, 12, 38, 209, 'Saraswati Yalam', '', '8305882219', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(864, 51, 7, 121, 12, 38, 209, 'Amrita Korram ', '', '9691866157', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(865, 52, 7, 121, 12, 39, 210, 'Shanti Karma ', '', '9406334036', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(866, 52, 7, 121, 12, 39, 211, 'Banolata Mandal  ', '', '7587129667', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(867, 52, 7, 121, 12, 39, 211, 'Taruna Anand ', '', '9406409836', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(868, 52, 7, 121, 12, 39, 212, 'Laxmi Karma ', '', '7587850409', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(869, 52, 7, 121, 12, 39, 212, 'Dileshwari Netam ', '', '7987467121', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(870, 52, 7, 121, 12, 39, 213, 'Anamika Vetti ', '', '9644632172', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(871, 52, 7, 121, 12, 39, 213, 'Anita Jhade', '', '7587133717', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(872, 53, 7, 121, 12, 40, 214, 'Annpura Sen ', '', '8269333977', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(873, 53, 7, 121, 12, 40, 215, 'Chittam Meena Rao', '', '9407663609', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(874, 53, 7, 121, 12, 40, 216, 'Sakuntala Shinde', '', '9407915477', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(875, 53, 7, 121, 12, 40, 215, 'Rajeshwari Durga ', '', '9685903672', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(876, 53, 7, 121, 12, 40, 217, 'Yamini Dewangan ', '', '7587173537', '', '', '', '', 1, '0000-00-00', '0000-00-00'),
(877, 53, 7, 121, 12, 40, 218, 'Priya Sarkar ', '', '7024705737', '', '', '', '', 1, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_master`
--

CREATE TABLE `trainer_master` (
  `trainer_id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ci_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `trainer_name` text NOT NULL,
  `trainer_contact` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `trainer_gender` varchar(100) NOT NULL,
  `trainer_email` text NOT NULL,
  `status` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `modification_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_master`
--

INSERT INTO `trainer_master` (`trainer_id`, `sid`, `ci_id`, `block_id`, `sector_id`, `trainer_name`, `trainer_contact`, `password`, `trainer_gender`, `trainer_email`, `status`, `creation_date`, `modification_date`) VALUES
(1, 7, 121, 12, 38, 'Anokhi  Singh', '+971956003152', '', 'Female', '', 1, '2022-09-30', '0000-00-00'),
(2, 7, 121, 11, 35, 'Akash Singh', '6388984748', '', 'Male', '', 1, '2022-09-30', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `completed_assignment`
--
ALTER TABLE `completed_assignment`
  ADD PRIMARY KEY (`cas_id`);

--
-- Indexes for table `completed_level`
--
ALTER TABLE `completed_level`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `mapping_role_permission_master_menu`
--
ALTER TABLE `mapping_role_permission_master_menu`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `master_level`
--
ALTER TABLE `master_level`
  ADD PRIMARY KEY (`ml_id`),
  ADD KEY `maid` (`maid`),
  ADD KEY `maid_2` (`maid`);

--
-- Indexes for table `master_menu`
--
ALTER TABLE `master_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `master_modules`
--
ALTER TABLE `master_modules`
  ADD PRIMARY KEY (`maid`);

--
-- Indexes for table `master_permission`
--
ALTER TABLE `master_permission`
  ADD PRIMARY KEY (`permission_id`);

--
-- Indexes for table `master_role`
--
ALTER TABLE `master_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `master_sub_menu`
--
ALTER TABLE `master_sub_menu`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
  ADD PRIMARY KEY (`mcq_id`);

--
-- Indexes for table `mcq_user_ans`
--
ALTER TABLE `mcq_user_ans`
  ADD PRIMARY KEY (`mua_is`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`sector_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `sub_sector`
--
ALTER TABLE `sub_sector`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `trainee_master`
--
ALTER TABLE `trainee_master`
  ADD PRIMARY KEY (`trainee_id`);

--
-- Indexes for table `trainer_master`
--
ALTER TABLE `trainer_master`
  ADD PRIMARY KEY (`trainer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `ci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=750;

--
-- AUTO_INCREMENT for table `completed_assignment`
--
ALTER TABLE `completed_assignment`
  MODIFY `cas_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=727;

--
-- AUTO_INCREMENT for table `completed_level`
--
ALTER TABLE `completed_level`
  MODIFY `cl_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `mapping_role_permission_master_menu`
--
ALTER TABLE `mapping_role_permission_master_menu`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_level`
--
ALTER TABLE `master_level`
  MODIFY `ml_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_menu`
--
ALTER TABLE `master_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_modules`
--
ALTER TABLE `master_modules`
  MODIFY `maid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_permission`
--
ALTER TABLE `master_permission`
  MODIFY `permission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `master_role`
--
ALTER TABLE `master_role`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_sub_menu`
--
ALTER TABLE `master_sub_menu`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mcq`
--
ALTER TABLE `mcq`
  MODIFY `mcq_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `mcq_user_ans`
--
ALTER TABLE `mcq_user_ans`
  MODIFY `mua_is` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `sector_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `sub_sector`
--
ALTER TABLE `sub_sector`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT for table `trainee_master`
--
ALTER TABLE `trainee_master`
  MODIFY `trainee_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=881;

--
-- AUTO_INCREMENT for table `trainer_master`
--
ALTER TABLE `trainer_master`
  MODIFY `trainer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
