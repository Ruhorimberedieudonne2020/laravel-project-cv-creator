-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 07:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv_creation`
--

-- --------------------------------------------------------

--
-- Table structure for table `my-cv`
--

CREATE TABLE `my-cv` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `career_objective` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `secondary_school_name` varchar(255) NOT NULL,
  `s_school_from` int(15) NOT NULL,
  `s_school_to` int(15) NOT NULL,
  `bachelors_degree` varchar(255) NOT NULL,
  `b_degree_from` int(15) NOT NULL,
  `b_degree_to` int(15) NOT NULL,
  `company1_name` varchar(255) NOT NULL,
  `job1_title` varchar(255) NOT NULL,
  `company1_from` int(15) NOT NULL,
  `company1_to` int(15) NOT NULL,
  `c1_responsibilities` varchar(500) NOT NULL,
  `company2_name` varchar(255) NOT NULL,
  `job2_title` varchar(255) NOT NULL,
  `company2_from` int(15) NOT NULL,
  `company2_to` int(15) NOT NULL,
  `c2_responsibilities` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `my-cv`
--

INSERT INTO `my-cv` (`id`, `firstname`, `lastname`, `profile_image`, `designation`, `email`, `address`, `phone`, `website`, `career_objective`, `skills`, `secondary_school_name`, `s_school_from`, `s_school_to`, `bachelors_degree`, `b_degree_from`, `b_degree_to`, `company1_name`, `job1_title`, `company1_from`, `company1_to`, `c1_responsibilities`, `company2_name`, `job2_title`, `company2_from`, `company2_to`, `c2_responsibilities`) VALUES
(1, 'Ruhorimbere', 'Dieudonne', 'profile.png', 'Software Engineer', 'ruho@example.com', '123 Main Street, Cityville', 1234567890, 'www.ruho.com', 'A passionate software engineer with expertise in web development', 'Wireframing, DNS management, Testing, debugging', 'City High School', 2016, 2020, 'Marwadi University', 2020, 2024, 'Tech Solutions Ltd', 'Software Developer', 2019, 2021, 'Developed and maintained web applications', 'Innovate Tech Inc.', 'Senior Software Engineer', 2022, 2023, 'Lead a team of developers in the design and implementation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my-cv`
--
ALTER TABLE `my-cv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my-cv`
--
ALTER TABLE `my-cv`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
