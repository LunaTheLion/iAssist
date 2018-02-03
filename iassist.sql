-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2018 at 07:28 AM
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
  `account_email` varchar(50) NOT NULL,
  `account_password` varchar(20) NOT NULL,
  `account_username` varchar(20) NOT NULL,
  `account_gname` varchar(30) NOT NULL,
  `account_sname` varchar(30) NOT NULL,
  `account_contact` varchar(13) NOT NULL,
  `account_date_joined` datetime NOT NULL,
  `account_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_tbl`
--

INSERT INTO `account_tbl` (`account_id`, `account_type`, `log_status`, `account_email`, `account_password`, `account_username`, `account_gname`, `account_sname`, `account_contact`, `account_date_joined`, `account_status`) VALUES
(1, 'freelance', 0, 'hpenduko.k1122334@umak.edu.ph', 'password123', 'Helena', 'Helenielle', 'Penduko', '2147483647', '2018-01-20 00:00:00', 1),
(2, 'freelance', 1, 'mevangelista.k1134836@umak.edu.ph', 'markmark', 'Markun', 'Mark Joshua', 'Evangelista', '2147483647', '2018-01-21 00:00:00', 1),
(3, 'freelance', 0, 'jdelacruz.k1122334@umak.edu.ph', 'password123', 'John', 'Juan', 'Dela Cruz', '2147483647', '2018-01-21 00:00:00', 1),
(4, 'admin', 0, 'admin@iassist.ph', 'adminadmin', 'AdminLona', '', '', '2147483647', '2018-02-01 00:00:00', 1);

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
  `ed_field_of_study` varchar(100) NOT NULL,
  `ed_focus_of_study` varchar(100) NOT NULL,
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
(1, 'hpenduko.k1122334@umak.edu.ph', '', 'College of Computer Science', '', 'Appication Development', '', '', 0, '', ''),
(2, 'hpenduko.k1122334@umak.edu.ph', '', 'College of Computer Science', '', 'Appication Development', '', '', 0, '', ''),
(3, 'hpenduko.k1122334@umak.edu.ph', '', 'College of Computer Science', '', 'Appication Development', '', '', 0, '', ''),
(4, 'jdelacruz.k1122334@umak.edu.ph', '', 'College of Computer Science', '', 'Information Technology Service Management', '', '', 0, '', ''),
(5, 'mevangelista.k1134836@umak.edu.ph', '', 'College of Computer Science', '', 'Information Technology Service Management', '', '', 0, '', '');

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
(3, 'hpenduko.k1122334@umak.edu.ph', 'Student', 'Arts and Crafts', 'Advance-Beginner', '', ''),
(4, 'jdelacruz.k1122334@umak.edu.ph', 'Student', 'Imagery and Technology', 'Advance-Beginner', '', ''),
(5, 'mevangelista.k1134836@umak.edu.ph', 'Student', 'Net Surfer', 'Proficient', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `freelance_project_tbl`
--

CREATE TABLE `freelance_project_tbl` (
  `id` int(100) NOT NULL,
  `project_publisher` varchar(40) NOT NULL,
  `project_publisher_type` varchar(40) NOT NULL,
  `project_title` varchar(40) NOT NULL,
  `project_type` varchar(40) NOT NULL,
  `project_description` varchar(230) NOT NULL,
  `project_category` varchar(30) NOT NULL,
  `project_subcategory` varchar(30) NOT NULL,
  `project_service_type` varchar(30) NOT NULL,
  `project_offer` varchar(200) NOT NULL,
  `project_delivery` varchar(20) NOT NULL,
  `project_search` varchar(20) NOT NULL,
  `project_image` blob NOT NULL,
  `project_requirements` varchar(250) NOT NULL,
  `project_client_email` varchar(20) NOT NULL,
  `project_client_rate` int(1) NOT NULL,
  `project_client_review` varchar(230) NOT NULL,
  `project_date_posted` date NOT NULL,
  `project_date_removed` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelance_project_tbl`
--

INSERT INTO `freelance_project_tbl` (`id`, `project_publisher`, `project_publisher_type`, `project_title`, `project_type`, `project_description`, `project_category`, `project_subcategory`, `project_service_type`, `project_offer`, `project_delivery`, `project_search`, `project_image`, `project_requirements`, `project_client_email`, `project_client_rate`, `project_client_review`, `project_date_posted`, `project_date_removed`) VALUES
(14, 'hpenduko.k1122334@umak.edu.ph', 'Student', 'Drafting', '', '', 'Graphics & Design', 'Fun & Entertainment', 'service description', 'offers', '8 Days', '', 0x494d475f303030342e4a5047, 'future clientss', '', 0, '', '0000-00-00', '0000-00-00'),
(15, 'hpenduko.k1122334@umak.edu.ph', 'Student', 'Project 1 ', '', '', 'Business', 'Video & Animation', 'service descriptions', 'offerssss', '5 Days', '', 0x6469676974616c2d6172742d666f726573742d73756e7365742d77616c6c70617065722d373030783339332e6a7067, 'future clientelee', '', 0, '', '0000-00-00', '0000-00-00'),
(16, 'hpenduko.k1122334@umak.edu.ph', 'Student', 'Project 2', '', '', 'Business', 'Video & Animation', 'service descriptions', 'offerssss', '7 Days', '', 0x6d696e696d616c69737469632d636974792d6469676974616c2d6172742d617274776f726b5f707265766965775f31343330312e6a7067, 'future clientelee', '', 0, '', '0000-00-00', '0000-00-00'),
(17, 'mevangelista.k1134836@umak.edu.ph', 'Student', 'Cross Stich', '', '', 'Fun & Entertainment', 'Business', 'Service Description', 'I will make a cross stitch for you ', '2 Days', '', 0x667265656c616e6365722d776f726b696e672d61742d686f6d652e6a7067, 'I need to have an exact things you want', '', 0, '', '0000-00-00', '0000-00-00');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_tbl`
--
ALTER TABLE `account_tbl`
  MODIFY `account_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `freelance_portfolio_tbl`
--
ALTER TABLE `freelance_portfolio_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `freelance_project_tbl`
--
ALTER TABLE `freelance_project_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
