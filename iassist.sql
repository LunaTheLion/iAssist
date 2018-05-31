-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2018 at 10:37 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iassist`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_tbl`
--

CREATE TABLE `account_tbl` (
  `account_id` int(255) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `log_status` tinyint(1) NOT NULL,
  `account_img` varchar(50) NOT NULL,
  `account_email` varchar(50) NOT NULL,
  `account_password` varchar(20) NOT NULL,
  `account_username` varchar(20) NOT NULL,
  `account_gname` varchar(30) NOT NULL,
  `account_sname` varchar(30) NOT NULL,
  `account_contact` varchar(13) NOT NULL,
  `account_date_joined` datetime NOT NULL,
  `account_status` tinyint(1) NOT NULL,
  `about_user` varchar(668) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_tbl`
--

INSERT INTO `account_tbl` (`account_id`, `account_type`, `log_status`, `account_img`, `account_email`, `account_password`, `account_username`, `account_gname`, `account_sname`, `account_contact`, `account_date_joined`, `account_status`, `about_user`) VALUES
(1, 'freelance', 0, '271843A300000578-0-image-m-85_1427687461901.jpg', 'hpenduko.k1122334@umak.edu.ph', 'password123', 'Helena', 'Helenielle', 'Penduko', '2147483647', '2018-01-20 00:00:00', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis nisl id enim congue ornare nec eu dui. Nulla tincidunt luctus metus quis aliquam. Morbi eleifend molestie tempor. Nam non massa ut magna dictum porttitor. Cras ac elit accumsan, tincidunt nibh.'),
(2, 'freelance', 0, 'mark.jpg', 'mevangelista.k1134836@umak.edu.ph', 'markmark', 'Markun', 'Mark Joshua', 'Evangelista', '2147483647', '2018-01-21 00:00:00', 1, ''),
(3, 'freelance', 0, '16976740485_fe1579c5a5_b.jpg', 'jdelacruz.k1122334@umak.edu.ph', 'password123', 'John', 'Juan', 'Dela Cruz', '2147483647', '2018-01-21 00:00:00', 1, 'A proud student of University of Makati who is passionate and diligent to the tasks that is given to him'),
(4, 'admin', 1, '', 'admin@iassist.ph', 'adminadmin', 'AdminLona', '', '', '2147483647', '2018-02-01 00:00:00', 1, ''),
(5, 'freelance', 1, 'AnimeGirl-178.jpg', 'eanokol.k1130179@umak.edu.ph', 'password123', 'Luna', 'Elona Mae', 'Anokol', '092080817184', '2018-02-03 00:00:00', 1, ''),
(6, 'freelance', 0, '12935386_1163536983679030_954686943_n1.jpg', 'miquina.k1131420@umak.edu.ph', 'babyran123', 'Mikachu', 'Mikaela', 'Iquinas', '09063754930', '2018-02-07 05:32:08', 1, ''),
(7, 'admin', 0, '', 'ye@iassist.ph', 'password123', 'AdminYe', '', '', '09556775082', '2018-02-07 06:11:00', 1, ''),
(8, 'admin', 0, '', 'athanAdmin@iassist.ph', 'password123', 'AdminAthan', '', '', '09751031973', '2018-02-10 08:04:00', 1, ''),
(9, 'freelance', 0, '', 'nalbay.k1134144@umak.edu.ph', 'password123', 'Noly II', 'Noli', 'Albay II', '09066110731', '2018-03-11 18:13:22', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tbl`
--

CREATE TABLE `feedback_tbl` (
  `id` int(11) NOT NULL,
  `feedback_email` varchar(30) NOT NULL,
  `feedback_topic` varchar(200) NOT NULL,
  `feedback_details` varchar(230) NOT NULL,
  `feedback_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_tbl`
--

INSERT INTO `feedback_tbl` (`id`, `feedback_email`, `feedback_topic`, `feedback_details`, `feedback_status`) VALUES
(1, 'hpenduko.k1122334@umak.edu.ph', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `freelance_company_tbl`
--

CREATE TABLE `freelance_company_tbl` (
  `id` int(100) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `company_name` varchar(80) NOT NULL,
  `company_position` varchar(80) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `company_description` varchar(230) NOT NULL,
  `company_position_description` varchar(250) NOT NULL,
  `company_working_status` tinyint(1) NOT NULL,
  `company_contact_num` int(15) NOT NULL,
  `company_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `freelance_education_tbl`
--

CREATE TABLE `freelance_education_tbl` (
  `id` int(11) NOT NULL,
  `ed_account_email` varchar(40) NOT NULL,
  `ed_school_name` varchar(100) NOT NULL,
  `ed_college` varchar(100) NOT NULL,
  `ed_field_of_study` varchar(200) NOT NULL,
  `ed_focus_of_study` varchar(200) NOT NULL,
  `ed_awards` varchar(100) NOT NULL,
  `ed_school_address` varchar(200) NOT NULL,
  `ed_school_contact` int(15) NOT NULL,
  `ed_school_email` varchar(30) NOT NULL,
  `ed_date_graduated` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelance_education_tbl`
--

INSERT INTO `freelance_education_tbl` (`id`, `ed_account_email`, `ed_school_name`, `ed_college`, `ed_field_of_study`, `ed_focus_of_study`, `ed_awards`, `ed_school_address`, `ed_school_contact`, `ed_school_email`, `ed_date_graduated`) VALUES
(1, 'hpenduko.k1122334@umak.edu.ph', 'University of Makati', 'College of Computer Science', '', 'Appication Development', '', '', 0, '', ''),
(2, 'hpenduko.k1122334@umak.edu.ph', 'University of Makati', 'College of Computer Science', '', 'Appication Development', '', '', 0, '', ''),
(3, 'hpenduko.k1122334@umak.edu.ph', 'University of Makati', 'College of Computer Science', '', 'Appication Development', '', '', 0, '', ''),
(4, 'jdelacruz.k1122334@umak.edu.ph', 'University of Makati', 'College of Computer Science', '', 'Information Technology Service Management', '', '', 0, '', ''),
(5, 'mevangelista.k1134836@umak.edu.ph', 'University of Makati', 'College of Computer Science', '', 'Information Technology Service Management', '', '', 0, '', ''),
(6, 'eanokol.k1130179@umak.edu.ph', 'University of Makati', 'CCS', '', 'NSTP Subjects', '', '', 0, '', ''),
(7, 'miquina.k1131420@umak.edu.ph', 'University of Makati', 'CCS', '', 'NSTP Subjects', '', '', 0, '', ''),
(8, 'miquina.k1131420@umak.edu.ph', 'University of Makati', 'CCS', '', 'NSTP Subjects', '', '', 0, '', ''),
(9, 'miquina.k1131420@umak.edu.ph', 'University of Makati', 'CCS', '', 'NSTP Subjects', '', '', 0, '', ''),
(10, 'miquina.k1131420@umak.edu.ph', 'University of Makati', 'CCS', '', 'NSTP Subjects', '', '', 0, '', ''),
(11, 'miquina.k1131420@umak.edu.ph', 'University of Makati', 'CCS', '', 'NSTP Subjects', '', '', 0, '', ''),
(12, 'miquina.k1131420@umak.edu.ph', 'University of Makati', 'DCNB', '', 'NSTP Subjects', '', '', 0, '', ''),
(13, 'miquina.k1131420@umak.edu.ph', 'University of Makati', 'CCS', '', 'NSTP Subjects', '', '', 0, '', ''),
(14, 'miquina.k1131420@umak.edu.ph', 'University of Makati', 'CCS', '', 'NSTP Subjects', '', '', 0, '', ''),
(15, 'miquina.k1131420@umak.edu.ph', 'University of Makati', 'CCS', '', 'NSTP Subjects', '', '', 0, '', ''),
(16, 'nalbay.k1134144@umak.edu.ph', 'University of Makati', 'CCS', '', 'NSTP Subjects', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `freelance_portfolio_tbl`
--

CREATE TABLE `freelance_portfolio_tbl` (
  `id` int(11) NOT NULL,
  `portfolio_owner` varchar(40) NOT NULL,
  `portfolio_owner_type` varchar(40) NOT NULL,
  `portfolio_skill` varchar(100) NOT NULL,
  `portfolio_skill_level` varchar(40) NOT NULL,
  `portfolio_email` varchar(40) NOT NULL,
  `certificate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelance_portfolio_tbl`
--

INSERT INTO `freelance_portfolio_tbl` (`id`, `portfolio_owner`, `portfolio_owner_type`, `portfolio_skill`, `portfolio_skill_level`, `portfolio_email`, `certificate`) VALUES
(3, 'hpenduko.k1122334@umak.edu.ph', 'Student', 'Arts and Crafts', 'Beginner', '', ''),
(4, 'jdelacruz.k1122334@umak.edu.ph', 'Student', 'Imagery and Technology', 'Beginner', '', ''),
(5, 'mevangelista.k1134836@umak.edu.ph', 'Student', 'Net Surfer', 'Proficient', '', ''),
(6, 'eanokol.k1130179@umak.edu.ph', 'Student', 'Arts and Crafts', 'Expert', '', ''),
(7, 'miquina.k1131420@umak.edu.ph', 'Student', 'Costume Making', 'Beginner', '', ''),
(8, 'miquina.k1131420@umak.edu.ph', 'Student', 'Costume Making', 'Beginner', '', ''),
(9, 'miquina.k1131420@umak.edu.ph', 'Student', 'Costume Making', 'Beginner', '', ''),
(10, 'miquina.k1131420@umak.edu.ph', 'Student', 'Drawing', 'Beginner', '', ''),
(11, 'miquina.k1131420@umak.edu.ph', 'Student', 'Drawing', 'Beginner', '', ''),
(12, 'miquina.k1131420@umak.edu.ph', 'Student', 'Cos', 'Beginner', '', ''),
(13, 'miquina.k1131420@umak.edu.ph', 'Student', 'Costu', 'Beginner', '', ''),
(14, 'miquina.k1131420@umak.edu.ph', 'Student', 'Costume Making', 'Beginner', '', ''),
(15, 'miquina.k1131420@umak.edu.ph', 'Student', 'Costume Making', 'Competent', '', ''),
(16, 'miquina.k1131420@umak.edu.ph', 'Student', 'Costume Making', 'Competent', '', ''),
(17, 'miquina.k1131420@umak.edu.ph', 'Student', 'Costume Making', 'Proficient', '', ''),
(18, 'miquina.k1131420@umak.edu.ph', 'Student', 'Costume Making', 'Competent', '', ''),
(19, 'miquina.k1131420@umak.edu.ph', 'Student', 'Costume Making', 'Beginner', '', ''),
(20, 'nalbay.k1134144@umak.edu.ph', 'Student', 'Internet Surfing', 'Beginner', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `freelance_project_tbl`
--

CREATE TABLE `freelance_project_tbl` (
  `id` int(100) NOT NULL,
  `project_publisher` varchar(40) NOT NULL,
  `project_username` varchar(20) NOT NULL,
  `project_publisher_type` varchar(40) NOT NULL,
  `project_title` varchar(200) NOT NULL,
  `project_title_slug` varchar(200) NOT NULL,
  `project_type` varchar(40) DEFAULT NULL,
  `project_description` varchar(230) NOT NULL,
  `project_category` varchar(30) NOT NULL,
  `project_subcategory` varchar(30) NOT NULL,
  `project_service_type` varchar(30) DEFAULT NULL,
  `project_offer` varchar(200) NOT NULL,
  `project_package` tinyint(1) NOT NULL,
  `project_basic_price` varchar(20) NOT NULL,
  `project_basic_delivery` varchar(20) NOT NULL,
  `project_basic_revision` varchar(100) NOT NULL,
  `project_basic_offer` varchar(200) NOT NULL,
  `project_basic_deliver_plus` varchar(20) DEFAULT NULL,
  `project_basic_description1` varchar(200) DEFAULT NULL,
  `project_basic_description2` varchar(30) DEFAULT NULL,
  `project_basic_description3` varchar(20) DEFAULT NULL,
  `project_basic_description4` varchar(20) DEFAULT NULL,
  `project_basic_description5` varchar(20) DEFAULT NULL,
  `project_basic_description6` varchar(20) DEFAULT NULL,
  `project_standard_price` varchar(20) NOT NULL,
  `project_standard_delivery` varchar(20) NOT NULL,
  `project_standard_revision` varchar(100) NOT NULL,
  `project_standard_offer` varchar(200) NOT NULL,
  `project_standard_description1` varchar(200) DEFAULT NULL,
  `project_standard_description2` varchar(20) DEFAULT NULL,
  `project_standard_description3` varchar(20) DEFAULT NULL,
  `project_standard_description4` varchar(20) DEFAULT NULL,
  `project_standard_description5` varchar(20) DEFAULT NULL,
  `project_standard_description6` varchar(20) DEFAULT NULL,
  `project_premium_price` varchar(20) NOT NULL,
  `project_premium_delivery` varchar(20) NOT NULL,
  `project_premium_revision` varchar(100) NOT NULL,
  `project_premium_offer` varchar(200) NOT NULL,
  `project_premium_description1` varchar(200) DEFAULT NULL,
  `project_premium_description2` varchar(20) DEFAULT NULL,
  `project_premium_description3` varchar(20) DEFAULT NULL,
  `project_premium_description4` varchar(20) DEFAULT NULL,
  `project_premium_description5` varchar(20) DEFAULT NULL,
  `project_premium_description6` varchar(20) DEFAULT NULL,
  `project_price` varchar(20) NOT NULL,
  `project_delivery` varchar(20) NOT NULL,
  `project_search` varchar(20) NOT NULL,
  `project_image` blob NOT NULL,
  `project_requirements` varchar(250) NOT NULL,
  `project_client_email` varchar(20) NOT NULL,
  `project_client_rate` int(1) NOT NULL,
  `project_client_review` varchar(230) NOT NULL,
  `project_date_created` datetime NOT NULL,
  `project_date_removed` datetime NOT NULL,
  `project_admin_review` tinyint(1) NOT NULL,
  `project_status` tinyint(1) NOT NULL,
  `project_removed_by_user` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelance_project_tbl`
--

INSERT INTO `freelance_project_tbl` (`id`, `project_publisher`, `project_username`, `project_publisher_type`, `project_title`, `project_title_slug`, `project_type`, `project_description`, `project_category`, `project_subcategory`, `project_service_type`, `project_offer`, `project_package`, `project_basic_price`, `project_basic_delivery`, `project_basic_revision`, `project_basic_offer`, `project_basic_deliver_plus`, `project_basic_description1`, `project_basic_description2`, `project_basic_description3`, `project_basic_description4`, `project_basic_description5`, `project_basic_description6`, `project_standard_price`, `project_standard_delivery`, `project_standard_revision`, `project_standard_offer`, `project_standard_description1`, `project_standard_description2`, `project_standard_description3`, `project_standard_description4`, `project_standard_description5`, `project_standard_description6`, `project_premium_price`, `project_premium_delivery`, `project_premium_revision`, `project_premium_offer`, `project_premium_description1`, `project_premium_description2`, `project_premium_description3`, `project_premium_description4`, `project_premium_description5`, `project_premium_description6`, `project_price`, `project_delivery`, `project_search`, `project_image`, `project_requirements`, `project_client_email`, `project_client_rate`, `project_client_review`, `project_date_created`, `project_date_removed`, `project_admin_review`, `project_status`, `project_removed_by_user`) VALUES
(1, 'hpenduko.k1122334@umak.edu.ph', 'Helena', 'Student', 'I can give you 100 nail art ideas', 'I-can-give-you-100-nail-art-ideas', NULL, '		        			        			        			        			        			        			        			        			        			        			        			        	Looking for someone you can ask about for the nail art? I can help you with that! Contact me and l', 'Fun & Lifestyle', 'Arts & Crafts', 'I can help you with your probl', 'I can give you 100 nail art ideas and 3 pictures of step by step', 0, '', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '40', '2 Days', 'Nail Art', 0x4e61696c5f41727435322e6a7067, 'Please message me first before placing an order', '', 0, '', '2018-03-12 08:58:46', '0000-00-00 00:00:00', 0, 0, 0),
(2, 'hpenduko.k1122334@umak.edu.ph', 'Helena', 'Student', 'I can draw you pet in my cute Disney style', 'I-can-draw-you-pet-in-my-cute-Disney-style', NULL, '', 'Graphics & Design', 'Online Lessons', 'I have a passion for drawing a', ' Chest & up portrait of your pooch!\r\n 	Fullbody with shading and lighting, almost Disney styled! Pets and characters welcome!	Full body drawing without shading and lighting, you could call this a sket', 0, '', '', '0', '', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '50', '14 Days', 'Disney Style', 0x6469736e65795f7374796c655f646f675f6368617261637465725f64657369676e5f736b657463685f62795f647265616d696e6777616e64657265722d646168777971332e6a7067, 'Please Message me the picture of  pet.', '', 0, '', '2018-03-17 13:48:34', '0000-00-00 00:00:00', 0, 0, 1),
(5, 'hpenduko.k1122334@umak.edu.ph', 'Helena', 'Student', 'I can fix Any Php, Html, Css, Jquery, Mysql Coding', 'I-can-fix-Any-Php-Html-Css-Jquery-Mysql-Coding', NULL, 'I will do any php, mysql, javascript, jquery, mysql related work like bug fixing , database integration, query optimization, browser compability, etc.', 'Programming & Tech', 'Online Lessons', NULL, ' I would  fix any php, html, css, jquery, mysql bugs.', 1, '60', '5 Days', '2', 'Bug fixing & simple pages', NULL, 'Fix any bug or issue in your p', NULL, NULL, NULL, NULL, NULL, '100', '6 Days', '5', 'JavaScript or Jquery', 'Adding javascript fu', NULL, NULL, NULL, NULL, NULL, '170', '7 Days', 'Unlimited', 'Complex or extensive fixing', 'Adding complex funti', NULL, NULL, NULL, NULL, NULL, '60', '14 Days', 'Fix Code', 0x7765622d44657369676e2d446576656c6f706d656e7431362e706e67, 'Please Message me first before placing an order! ', '', 0, '', '2018-03-18 03:49:20', '0000-00-00 00:00:00', 0, 0, 0),
(6, 'hpenduko.k1122334@umak.edu.ph', 'Helena', 'Student', 'I can do photoshop', 'I-can-do-photoshop', NULL, 'Contact me if you need more', 'Graphics & Design', 'Online Lessons', NULL, 'Phtoediting with 3 revision', 1, '60', '3 Days', '3', 'Phtoediting with 3 revision', NULL, 'Contact me if you need more', NULL, NULL, NULL, NULL, NULL, '5', '5 Days', '6', 'Photoediting with 6', 'Contact me if you need more', NULL, NULL, NULL, NULL, NULL, '100', '4 Days', '7', 'photoediting with 7  ', 'Contact me if you need more', NULL, NULL, NULL, NULL, NULL, '60', '3 Days', 'Photoshop', 0x696d672e706e67, 'message me first before ordering', '', 0, '', '2018-03-23 08:39:35', '0000-00-00 00:00:00', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `message_destination_tbl`
--

CREATE TABLE `message_destination_tbl` (
  `id` int(11) NOT NULL,
  `msg_sender` varchar(80) NOT NULL,
  `msg_receiver` varchar(80) NOT NULL,
  `msg_read` tinyint(1) NOT NULL,
  `msg_date` datetime NOT NULL,
  `msg_deleted` tinyint(1) NOT NULL,
  `msg_deleted_date` datetime NOT NULL,
  `msg_alllow_notify` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_destination_tbl`
--

INSERT INTO `message_destination_tbl` (`id`, `msg_sender`, `msg_receiver`, `msg_read`, `msg_date`, `msg_deleted`, `msg_deleted_date`, `msg_alllow_notify`) VALUES
(1, 'hpenduko.k1122334@umak.edu.ph', 'jdelacruz.k1122334@umak.edu.ph', 0, '2018-03-23 05:32:31', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `message_info_tbl`
--

CREATE TABLE `message_info_tbl` (
  `id` int(11) NOT NULL,
  `msg_author` varchar(50) NOT NULL,
  `msg_receiver` varchar(50) NOT NULL,
  `msg_date` datetime NOT NULL,
  `msg_subject` varchar(200) NOT NULL,
  `msg_body` varchar(255) NOT NULL,
  `msg_notify` tinyint(1) NOT NULL,
  `msg_deleted` tinyint(1) NOT NULL,
  `msg_deleted_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_info_tbl`
--

INSERT INTO `message_info_tbl` (`id`, `msg_author`, `msg_receiver`, `msg_date`, `msg_subject`, `msg_body`, `msg_notify`, `msg_deleted`, `msg_deleted_date`) VALUES
(1, 'hpenduko.k1122334@umak.edu.ph', 'jdelacruz.k1122334@umak.edu.ph', '2018-03-23 05:32:31', 'subjectss', 'bodyy', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `project_request_tbl`
--

CREATE TABLE `project_request_tbl` (
  `id` int(11) NOT NULL,
  `request_email` varchar(80) NOT NULL,
  `request_category` varchar(80) NOT NULL,
  `request_subcategory` varchar(20) NOT NULL,
  `request_description` varchar(200) NOT NULL,
  `request_price` int(11) NOT NULL,
  `request_delivery` int(11) NOT NULL,
  `request_status` int(11) NOT NULL,
  `request_posted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_tbl`
--
ALTER TABLE `account_tbl`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelance_company_tbl`
--
ALTER TABLE `freelance_company_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelance_education_tbl`
--
ALTER TABLE `freelance_education_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelance_portfolio_tbl`
--
ALTER TABLE `freelance_portfolio_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelance_project_tbl`
--
ALTER TABLE `freelance_project_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_destination_tbl`
--
ALTER TABLE `message_destination_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_info_tbl`
--
ALTER TABLE `message_info_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_request_tbl`
--
ALTER TABLE `project_request_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_tbl`
--
ALTER TABLE `account_tbl`
  MODIFY `account_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `feedback_tbl`
--
ALTER TABLE `feedback_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `freelance_company_tbl`
--
ALTER TABLE `freelance_company_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `freelance_education_tbl`
--
ALTER TABLE `freelance_education_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `freelance_portfolio_tbl`
--
ALTER TABLE `freelance_portfolio_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `freelance_project_tbl`
--
ALTER TABLE `freelance_project_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `message_destination_tbl`
--
ALTER TABLE `message_destination_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message_info_tbl`
--
ALTER TABLE `message_info_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `project_request_tbl`
--
ALTER TABLE `project_request_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
