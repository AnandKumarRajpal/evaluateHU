-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2019 at 05:34 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

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
-- Table structure for table `coursereviews`
--

DROP TABLE IF EXISTS `coursereviews`;
CREATE TABLE IF NOT EXISTS `coursereviews` (
  `Student_ID` int(5) NOT NULL,
  `Course_ID` int(4) NOT NULL,
  `Rating_Q1` int(4) NOT NULL,
  `Rating_Q2` int(4) NOT NULL,
  `Rating_Q3` int(4) NOT NULL,
  `Rating_Q4` int(4) NOT NULL,
  `Total_Reviews` int(4) NOT NULL,
  `Checked` bit(1) NOT NULL,
  `Comment` text NOT NULL,
  PRIMARY KEY (`Student_ID`,`Course_ID`),
  KEY `Course_ID` (`Course_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coursereviews`
--

INSERT INTO `coursereviews` (`Student_ID`, `Course_ID`, `Rating_Q1`, `Rating_Q2`, `Rating_Q3`, `Rating_Q4`, `Total_Reviews`, `Checked`, `Comment`) VALUES
(4351, 1, 4, 3, 4, 5, 1, b'1', 'Good Course overall\r\n'),
(4351, 2, 4, 2, 4, 5, 2, b'1', 'Pretty easy course'),
(4351, 3, 0, 0, 0, 0, 0, b'0', ''),
(4351, 4, 0, 0, 0, 0, 0, b'0', ''),
(4351, 5, 1, 1, 1, 1, 3, b'1', 'Bad Course\r\n'),
(4351, 6, 0, 0, 0, 0, 0, b'0', ''),
(5173, 1, 3, 1, 2, 4, 1, b'1', 'Learnt a lot\r\n'),
(5173, 3, 0, 0, 0, 0, 0, b'0', ''),
(5173, 4, 0, 0, 0, 0, 0, b'0', ''),
(5173, 6, 1, 3, 4, 4, 0, b'0', 'VEry Good'),
(6666, 2, 1, 5, 2, 4, 1, b'1', 'Extraordinarily designed course\r\n'),
(6666, 3, 0, 0, 0, 0, 0, b'0', ''),
(6666, 4, 0, 0, 0, 0, 0, b'0', ''),
(6666, 6, 0, 0, 0, 0, 0, b'0', '');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `Courseid` int(4) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) NOT NULL,
  `School` varchar(255) NOT NULL,
  `Descrip` text NOT NULL,
  PRIMARY KEY (`Courseid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Courseid`, `Title`, `School`, `Descrip`) VALUES
(1, 'Programming Fundamentals\r\n', 'DSSE\r\n', 'Motivates computer programming as a means to solve problems; introduces the basic components of problem solving: repetition, decision making, data storage and manipulation, input/output, modularity, top-down design; develops expertise in the corresponding constructs variables, data types, iteration, conditionals, functions, file and console i/o, and recursion in a high level programming language.'),
(2, 'Data Structures and Algorithms\r\n', 'DSSE\r\n', 'Motivates the design of algorithms by exploring various algorithms for a single task: linear search and binary search, bubble sort, insertion sort, selection sort, merge sort, quick sort; introduces techniques to reason about and compare algorithms: asymptotic analysis and notation, Master theorem; introduces frequently used data structures: list, tree, graph, stack, queue; discusses and analyses basic operations on the data structures: infix, postfix, and prefix traversal, breadth-first and depth-first search, computation of graph properties.'),
(3, 'Introduction to Film Production\r\n', 'AHSS', 'The course will introduce students to learn the fundamentals of cinematic language including various techniques and processes of film production in preparation for more advanced film courses. The course is organized through a series of exercises which will help students explore a variety of cinematic methods through hands on practice with film equipment including the camera, lights, sound, and editing software.'),
(4, 'Basic Electronics\r\n', 'DSSE', 'The course aims to introduce students to semiconductor devices, with emphasis on application of these devices in realizing analog and digital electronic circuits. The course starts with an introduction to semiconductors, energy bands, valence bonds, doping, N-type and P-type semi-conductors, etc.'),
(5, 'Mechanics and Thermodynamics\r\n', 'DSSE', 'Topics include: Units and physical quantities, vectors, motion in 1-dimension, motion in more than 1-dimension, Newton’s laws of motion and their applications, work and energy, potential energy and conservation law of energy, momentum and impulse, rotation of rigid bodies, dynamics of rigid bodies, gravitation, thermal properties of matter, laws of thermodynamics.'),
(6, 'Scientific Methods\r\n', 'AHSS', 'How do we make decisions? How do we evaluate information? Should we trust all information? How should we decide which information is trustworthy? How do we recognize the limitations of a claim? These matters are not only for practicing scientists but form an important part of our daily lives.');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

DROP TABLE IF EXISTS `instructors`;
CREATE TABLE IF NOT EXISTS `instructors` (
  `Instructorid` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Descrip` text NOT NULL,
  `profile` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL DEFAULT 'aie',
  PRIMARY KEY (`Instructorid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`Instructorid`, `Name`, `Email`, `Descrip`, `profile`, `Password`) VALUES
(1, 'Anzar Khaliq\r\n', 'anzarkhaliq@sse.habib.edu.pk\r\n', 'Dr. Khaliq is a physicist trained in surface sciences interested in studying the physical and chemical properties of organic-inorganic hybrids.\r\n', '1', 'aie'),
(2, 'Aamir Hassan\r\n', 'aamirhassan@sse.habib.edu.pk\r\n', 'Dr. Hasan served in the engineering branch of Pakistan Air Force (PAF) as an Aeronautical Engineer\r\n', '2', 'aie'),
(3, 'Abdullah Khalid\r\n', 'abdullahkhalid@sse.habib.edu.pk\r\n', 'His research interest revolve around the study of quantum theory and relativity through the lens of information and computation theory.\r\n', '3', 'aie'),
(4, 'Waqar Saleem\r\n', 'waqarsaleem@sse.habib.edu.pk\r\n', 'Dr. Saleem has been passionate about Computer Science since his undergraduate years. He is fascinated by the field of computer graphics.\r\n', '4', 'aie'),
(5, 'Syeda Saleha Raza\r\n', 'syedasaleharaza@sse.habib.edu.pk\r\n', 'Dr. Raza has been actively involved in the areas of Robotics, Machine Learning, Probabilistic Reasoning and Computational Intelligence.', '5', 'aie'),
(6, 'Hasan Ali\r\n', 'hasanali@sse.habib.edu.pk\r\n', 'His doctorate from the School of Oriental and African Studies (SOAS), University of London, is on the beliefs, history, and architecture of the Suhrawardi Sufi Order in Multan and Uch, 1200–1500.', '6', 'aie');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_reviews`
--

DROP TABLE IF EXISTS `instructor_reviews`;
CREATE TABLE IF NOT EXISTS `instructor_reviews` (
  `Student_ID` int(5) NOT NULL,
  `Instructor_ID` int(5) NOT NULL,
  `Rating_Q1` int(4) NOT NULL,
  `Rating_Q2` int(4) NOT NULL,
  `Rating_Q3` int(4) NOT NULL,
  `Rating_Q4` int(4) NOT NULL,
  `Total_Reviews` int(4) NOT NULL,
  `Checked` bit(1) NOT NULL,
  `Comment` text NOT NULL,
  PRIMARY KEY (`Student_ID`,`Instructor_ID`),
  KEY `Instructor_ID` (`Instructor_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructor_reviews`
--

INSERT INTO `instructor_reviews` (`Student_ID`, `Instructor_ID`, `Rating_Q1`, `Rating_Q2`, `Rating_Q3`, `Rating_Q4`, `Total_Reviews`, `Checked`, `Comment`) VALUES
(4351, 1, 0, 0, 0, 0, 0, b'0', ''),
(4351, 2, 0, 0, 0, 0, 0, b'0', ''),
(4351, 3, 2, 1, 1, 1, 1, b'1', 'Instructor does not know how to teach at all\r\n'),
(4351, 4, 5, 5, 5, 5, 2, b'1', 'Very interactive\r\n'),
(4351, 5, 4, 3, 2, 1, 3, b'1', 'Great instructor but a little strict\r\n'),
(4351, 6, 0, 0, 0, 0, 0, b'0', ''),
(5173, 1, 0, 0, 0, 0, 0, b'0', ''),
(5173, 2, 0, 0, 0, 0, 0, b'0', ''),
(5173, 4, 5, 4, 4, 1, 1, b'1', 'Encourages students to participate\r\n'),
(5173, 6, 0, 0, 0, 0, 0, b'0', ''),
(6666, 1, 0, 0, 0, 0, 0, b'0', ''),
(6666, 2, 0, 0, 0, 0, 0, b'0', ''),
(6666, 5, 2, 3, 5, 1, 1, b'1', 'Not flexible at all\r\n'),
(6666, 6, 0, 0, 0, 0, 0, b'0', '');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `Instructor_ID` int(5) NOT NULL,
  `Course_ID` int(4) NOT NULL,
  `Review_Instructor_ID` int(5) NOT NULL,
  `Review_Student_ID` int(5) NOT NULL,
  `Semester_ID` int(4) NOT NULL,
  `Section_ID` int(4) NOT NULL,
  PRIMARY KEY (`Instructor_ID`,`Course_ID`,`Review_Student_ID`),
  KEY `Course_ID` (`Course_ID`),
  KEY `Review_Student_ID` (`Review_Student_ID`),
  KEY `Review_Instructor_ID` (`Review_Instructor_ID`,`Review_Student_ID`),
  KEY `Semester_ID` (`Semester_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`Instructor_ID`, `Course_ID`, `Review_Instructor_ID`, `Review_Student_ID`, `Semester_ID`, `Section_ID`) VALUES
(1, 6, 1, 4351, 3, 1),
(1, 6, 1, 5173, 3, 1),
(1, 6, 1, 6666, 3, 1),
(2, 4, 2, 4351, 3, 1),
(2, 4, 2, 5173, 3, 1),
(2, 4, 2, 6666, 3, 1),
(3, 5, 3, 4351, 2, 3),
(4, 1, 4, 4351, 1, 4),
(4, 1, 4, 5173, 1, 4),
(5, 2, 5, 4351, 2, 2),
(5, 2, 5, 6666, 2, 3),
(6, 3, 6, 4351, 3, 1),
(6, 3, 6, 5173, 3, 1),
(6, 3, 6, 6666, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
CREATE TABLE IF NOT EXISTS `semester` (
  `Semesterid` int(4) NOT NULL AUTO_INCREMENT,
  `Year` int(4) NOT NULL,
  `Type` varchar(255) NOT NULL,
  PRIMARY KEY (`Semesterid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`Semesterid`, `Year`, `Type`) VALUES
(1, 2018, 'Fall'),
(2, 2019, 'Spring'),
(3, 2019, 'Fall');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `Studentid` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Batch` int(4) NOT NULL,
  `Major` varchar(255) NOT NULL,
  `Minor` varchar(255) NOT NULL,
  `Profile` varchar(100) NOT NULL,
  PRIMARY KEY (`Studentid`)
) ENGINE=InnoDB AUTO_INCREMENT=7798 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Studentid`, `Name`, `Email`, `Password`, `Batch`, `Major`, `Minor`, `Profile`) VALUES
(4351, 'Salman Younus', 'sy04351@st.habib.edu.pk', 'pie', 2022, 'CS', '', '4351'),
(5173, 'Anand Kumar', 'ak05173@st.habib.edu.pk', 'aie', 2022, 'EE', 'CND', '5173'),
(6666, 'Anus Ali', 'aa06666@st.habib.edu.pk', 'aie', 2022, 'SDP', 'EE', '6666'),
(7787, 'Sal Asd', 'SA07787@st.habib.edu.pk', 'aie', 2023, 'CND', 'EE', '7787'),
(7797, 'Sal Asd', 'sa07797@st.habib.edu.pk', 'aie', 2023, 'CND', 'EE', '7797');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursereviews`
--
ALTER TABLE `coursereviews`
  ADD CONSTRAINT `coursereviews_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `students` (`Studentid`),
  ADD CONSTRAINT `coursereviews_ibfk_2` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`Courseid`);

--
-- Constraints for table `instructor_reviews`
--
ALTER TABLE `instructor_reviews`
  ADD CONSTRAINT `instructor_reviews_ibfk_1` FOREIGN KEY (`Student_ID`) REFERENCES `students` (`Studentid`),
  ADD CONSTRAINT `instructor_reviews_ibfk_2` FOREIGN KEY (`Instructor_ID`) REFERENCES `instructors` (`Instructorid`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`Course_ID`) REFERENCES `courses` (`Courseid`),
  ADD CONSTRAINT `section_ibfk_2` FOREIGN KEY (`Instructor_ID`) REFERENCES `instructors` (`Instructorid`),
  ADD CONSTRAINT `section_ibfk_3` FOREIGN KEY (`Review_Instructor_ID`,`Review_Student_ID`) REFERENCES `instructor_reviews` (`Instructor_ID`, `Student_ID`),
  ADD CONSTRAINT `section_ibfk_4` FOREIGN KEY (`Semester_ID`) REFERENCES `semester` (`Semesterid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
