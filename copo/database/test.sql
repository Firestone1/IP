-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 24, 2020 at 12:04 PM
-- Server version: 8.0.21-0ubuntu0.20.04.4
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xaonan`
--

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `uid` varchar(10) NOT NULL,
  `staff_nm` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '--',
  `dept` text NOT NULL,
  `sem` varchar(1) NOT NULL,
  `cay` varchar(2) NOT NULL,
  `course_nm` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `course_cd` varchar(8) NOT NULL,
  `nba_cd` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '--',
  `co1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `co2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `co3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `co4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `b1` text NOT NULL,
  `b2` text NOT NULL,
  `b3` text NOT NULL,
  `b4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`uid`, `staff_nm`, `dept`, `sem`, `cay`, `course_nm`, `course_cd`, `nba_cd`, `co1`, `co2`, `co3`, `co4`, `b1`, `b2`, `b3`, `b4`) VALUES
('BEIT705318', '--', 'IT', '7', '18', 'E-Commerce &amp; E-Business', 'BEIT7053', '--', 'Differentiate E-Commerce Websites and specify the hardware and software technologies.', 'Choose appropriate payment systems for E-Commerce.', 'Develop the process of selling and marketing on web using the concept of E-Business and its Models.', 'Examine E-Business strategies.', 'Understand', 'Apply', 'Evaluate', 'Analyze'),
('CPE601317', '--', 'CS', '6', '16', 'Foreign Language - German', 'CPE6013', '--', 'Demonstrate German Language in holistic manner.', 'Assemble and construct the sentences while reading the text, develop the skill of speaking of German Language.', 'Examine the culture, day-to-day life of German family culture.', 'Examine the professional approach using German Language.', 'Apply', 'Understand', 'Understand', 'Understand'),
('ECL 30420', '--', 'EXTC', '3', '20', 'Skill Lab: C++ and Java Programming', 'ECL304', '--', 'Examine the principals of Object-Oriented Programming (OOP) and Object-Oriented Concepts.', 'Design and Apply OOP principles for effective programming and develop programming applications using OOP Language.', 'Implement programming applications using packaging and analyze the strength of OOP.', 'Percept the Utility and applicability of OOP.', '', '', '', ''),
('FEC20516', '--', 'IT', '2', '16', 'Structure Programming Approach', 'FEC205', '--', 'Identify the terminologies in operating system used for computer programming and illustrate the algorithms to support Structure Programming Approach.', 'Use Variables, derived data types and control structures to write C program.', 'Implement solutions to the problem using strings and functions.', 'Use Pointers, Structure-Union, and Files for solving complex Computational problem.', '', '', '', ''),
('ITC50118', '--', 'IT', '5', '18', 'Microcontroller and Embedded Programming', 'ITC501', '--', 'Illustrate the Embedded system concepts and Architecture of embedded system.', 'Implement basic programs using Microcontroller 8051.', 'Examine basic components of ARM processor for real time applications.', 'Design conceptual embedded system using RTOS.', '', '', '', ''),
('ITC50220', '--', 'IT', '5', '20', 'Internet Programming', 'ITC502', '--', 'Design Web site and Web Application using HTML, CSS, Javascript and also design Responsive web site using HTML5 and CSS3.', 'Design Rich Internet Application using AJAX Programming Technique, JSON and design dynamic web site using PHP and MYSQL.', 'Examine web Extensions and Web services.', 'Design Web application using Python web Framework-Django', '', '', '', ''),
('ITC80219', '--', 'IT', '8', '19', 'Internet of Everything', 'ITC802', '--', 'Illustrate the concepts of IoT and Identify the different technologies.', 'Design applications using RFID.', 'Examine protocols used in IoT and design smart city application in IoT.', 'Examine data received through sensors in IoT.', '', '', '', ''),
('ITL50120', '--', 'IT', '5', '20', 'Internet Programming Lab', 'ITL501', '--', 'Design Web site and Web Application using HTML5, CSS3 to demonstrate responsive web design and implement web pages with validation using JavaScript objects by applying event handling mechanism.', 'Design Rich Internet Application using AJAX Programming Technique and JSON and design web application using PHP and MYSQL.', 'Build well-inform XML Document and implement web services using Java.', 'Design Web application using Python web Framework-Django', '', '', '', ''),
('ITL50418', '--', 'IT', '5', '18', 'IOT (Mini Project) LAB', 'ITL504', '--', 'Identify the requirements for the real-world problems and illustrate the problem solution as per the requirements.', 'Examine and select appropriate software and hardware components for project.', 'Construct the hardware circuit using hardware components, implement the code and test.', 'Demonstrate to work in teams and illustrate the conduct of research study.', '', '', '', ''),
('ITL80219', '--', 'IT', '8', '19', 'Internet of Everything Lab', 'ITL802', '--', 'Identify the requirements for the real work problems and illustrate the components used for making hardware.', 'Construct the hardware circuit using hardware components, implement the code and test.', 'Examine the findings of the study conducted in the preferred domain.', 'Demonstrate to work in teams and illustrate the conduct of research study.', '', '', '', ''),
('SEIT30317', '--', 'IT', '3', '16', 'Object Oriented Programming Methodology', 'SEIT303', '--', 'Identify the real time problem and prepare the class diagram using OO Methodologies.', 'Setup and test JVM in System and solve computational problems using if-else, control structures, array, and strings.', 'Illustrate the class relationship using package.', 'Implement solutions to the problem using exceptions, multithreading, and applets.', 'Understand', 'Apply', 'Understand', 'Evaluate'),
('SEIT30417', '--', 'IT', '3', '16', 'Analog and Digital Circuits', 'SEIT304', '--', 'Illustrate the components of Analog Circuits, digital electronics and Microprocessor Systems, design the stable Analog circuits and Illustrate them.', 'Calculate binary and hexadecimals, convert the values from binary to hexadecimal and vice versa.', 'Design Combinational and Sequential circuits and translate real world problems into digital logic formulations.', 'Design digital systems using the concepts of Microprocessor and Microcontroller Systems.', 'Understand', 'Evaluate', 'Create', 'Create'),
('SEIT40317', '--', 'IT', '4', '15', 'Computer Organization and Architecture', 'SEIT403', '--', 'Identify basic structure of computer for performing computer arithmetic operations.', 'Examine computer arithmetic operation and design memory organization for different word size operations.', 'Illustrate the concepts of cache mapping techniques and I/O organization.', 'Implement instruction level parallelism.', 'Understand', 'Analyze', 'Evaluate', 'Evaluate'),
('SEIT40517', '--', 'IT', '4', '16', 'Web Programming', 'SEIT405', '--', 'Design Web site and Web Application (html, Javascript)', 'Setup WAMP/XAMPP/LAMP and Create a Web Application (PHP, MySQL)', 'Setup Web Server (Tomcat) and Create a Web Application (jsp, servlet, jsp, jquery) and asp.net, ado.net', 'Examine XML Tags', 'Create', 'Apply', 'Apply', 'Apply'),
('TEIT50317', '--', 'IT', '5', '17', 'Microcontroller and Embedded System', 'TEIT503', '--', 'Illustrate the Embedded system concepts and Architecture of embedded system.', 'Implement basic programs using Microcontroller 8051.', 'Examine basic components of ARM processor for real time applications.', 'Design conceptual embedded system using RTOS.', 'Understand', 'Apply', 'Understand', 'Create'),
('TEIT60517', '--', 'IT', '6', '17', 'Advanced Internet Technology', 'TEIT605', '--', 'Examine SEO Plan prior to site development.', 'Illustrate the algorithm to support Keyword Generation using Google Analytics.', 'Implement solutions to the problem using Responsive Web Design with HTML5 and CSS3.', 'Implement solutions to the problem using Rich User Interface using AJAX, mashing with JSON.', 'Understand', 'Evaluate', 'Apply', 'Apply');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
