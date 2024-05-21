-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 04, 2024 at 08:30 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gndu_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `type`) VALUES
('ekta22@gmail.com', '1234', 'Admin'),
('harpuneet@test.com', '123', 'Admin'),
('jais@gamil.com', '1234', 'Admin'),
('klair23@gmail.com', '2222', 'Admin'),
('klairgautam@gmail.com', '123', 'Admin'),
('meena54@gmail.com', '12345', 'Admin'),
('nigar@test.com', '123', 'Admin'),
('parul@test.com', '123', 'Admin'),
('priya12@gmail.com', '123', 'Admin'),
('reena12@gamil.com', '1234', 'Admin'),
('sam34@gmail.com', '123', 'Admin'),
('sandeepsharma@test.com', '123', 'Admin'),
('supreena@gmail.com', '123', 'Admin'),
('supreenaklair@gmail.com', '123', 'Admin'),
('supriya12@gmail.com', '1234', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_add_student`
--

CREATE TABLE IF NOT EXISTS `admin_add_student` (
  `student_id` int(50) NOT NULL,
  `university_rollno` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `address_permanent` varchar(255) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `quota` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `10th_school` varchar(100) NOT NULL,
  `10th_board` varchar(100) NOT NULL,
  `10th_session` varchar(20) NOT NULL,
  `10th_percentage` varchar(50) NOT NULL,
  `12th_school` varchar(100) NOT NULL,
  `12th_board` varchar(100) NOT NULL,
  `12th_session` varchar(20) NOT NULL,
  `12th_percentage` varchar(50) NOT NULL,
  `graduation_institution_name` varchar(100) NOT NULL,
  `graduation_institution_affiliation` varchar(100) NOT NULL,
  `graduation_session` varchar(20) NOT NULL,
  `graduation_cgpa` varchar(50) NOT NULL,
  `admission_through` varchar(50) NOT NULL,
  `jee_rank` varchar(100) NOT NULL,
  `jee_score` varchar(100) NOT NULL,
  `parent_contactno` varchar(100) NOT NULL,
  `address_correspondance` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `photo` tinytext NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `adm_year` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_add_student`
--

INSERT INTO `admin_add_student` (`student_id`, `university_rollno`, `name`, `father_name`, `mother_name`, `address_permanent`, `contact_no`, `email`, `quota`, `gender`, `marital_status`, `10th_school`, `10th_board`, `10th_session`, `10th_percentage`, `12th_school`, `12th_board`, `12th_session`, `12th_percentage`, `graduation_institution_name`, `graduation_institution_affiliation`, `graduation_session`, `graduation_cgpa`, `admission_through`, `jee_rank`, `jee_score`, `parent_contactno`, `address_correspondance`, `password`, `coursename`, `sem_id`, `photo`, `dateofbirth`, `adm_year`) VALUES
(1001, '1', 'supreena', 'rakesh kumar', 'manjeet rani', 'Basant Avenue,Batala', '7412589636', 'supreena@gmail.com', 'general', 'female', 'unmarried', 'Khalsa Public School,Batala', 'cbse', '2008', '77', 'Khalsa Public School,Batala', 'cbse', '2010', '87', '', '', '', '', 'selffinance', '778', '102', '1256347899', 'Basant Avenue,batala', '12345', 'B.Tech', 1, 'stu3.jpg', '1992-10-28', 2015),
(1002, '2', 'Sukhdeep Singh', 'Hanoor Singh', 'Harbans Kaur', 'Basant Avenue,Batala', '7412589637', 'sukh@gmail.com', 'general', 'male', 'unmarried', 'Khalsa Public School,Batala', 'cbse', '2008', '77', 'Khalsa Public School,Batala', 'cbse', '2010', '87', '', '', '', '', 'selffinance', '778', '102', '1256347898', 'Basant Avenue,batala', '123', 'B.Tech', 1, 'student_images/stu8.jpg', '1993-10-28', 2015),
(1003, '3', 'Rabia Sandhu', 'Balbir singh', 'Kulwinder Kaur', 'Amritsar', '1596324789', 'rabia@gmail.com', 'general', 'female', 'unmarried', 'senior study', 'cbse', '2009', '87', 'senior study', 'cbse', '2011', '85', '', '', '', '', 'iitjee', '899', '85', '7412589636', 'amritsar', '3', 'B.Tech', 1, 'student_images/rabia.jpg', '1993-10-23', 2015),
(1004, '4', 'Komaldeep Kaur', 'Harmeet Singh', 'Sukhjit Kaur', 'Pathankot', '1234567891', 'komal@gmail.com', 'general', 'female', 'unmarried', 'sacred heart school,pathankot', 'cbse', '2009', '87', 'dav public school,pathankot', 'cbse', '2011', '78', '', '', '', '', 'iitjee', '125', '54', '1234567891', 'pathankot', '4', 'B.Tech', 5, 'student_images/k.jpg', '1993-28-10', 2015),
(1005, '5', 'kanika monga', 'rakesh kumar', 'neelam monga', 'ferozpur', '9874563214', 'kanika@gmail.com', 'general', 'female', 'unmarried', 'mgn public school', 'cbse', '2009', '89', 'mgn public school', 'cbse', '2011', '87', '', '', '', '', 'iitjee', '1200', '450', '9658741235', 'ferozpur', '5', 'B.Tech', 5, 'student_images/kanika.jpg', '0992-11-14', 2015),
(1006, '6', 'amandeep singh', 'sant singh', 'renu bala', 'amritsar', '8965471235', 'amandeep@gmail.com', 'general', 'male', 'unmarried', 'D.A.V public school,amritsar', 'cbse', '2009', '87', 'D.A.V public school,amritsar', 'cbse', '2011', '89', '', '', '', '', 'iitjee', '1255', '449', '9856321474', 'amritsar', '6', 'B.Tech', 5, 'student_images/aman.jpg', '1992-10-06', 2015),
(1007, '7', 'Pavneet Kang', 'Surinderjit singh', 'Kuljeet Kang', 'Amritsar', '9856321474', 'pavneet@gmail.com', 'general', 'female', 'unmarried', 'D.A.V public school,amritsar', 'cbse', '2009', '92', 'D.A.V public school,amritsar', 'cbse', '2011', '78', '', '', '', '', 'iitjee', '1350', '350', '9847563215', 'Amritsar', '7', 'B.Tech', 6, 'student_images/pavneet.jpg', '1992-10-30', 2015),
(1008, '8', 'Harpuneet Singh', 'jaswant singh', 'sukhraj kaur', 'Amritsar', '9915748236', 'harpuneet@gmail.com', 'general', 'male', 'unmarried', 'holy heart school', 'cbse', '2009', '89', 'holy heart school', 'cbse', '2011', '89', '', '', '', '', 'iitjee', '1500', '250', '9658231475', 'Amritsar', '8', 'B.Tech', 6, 'student_images/harpuneet.jpg', '1993-12-22', 2015),
(1009, '9', 'Nigardeep  kaur', 'Malkiat singh', 'Daljinder kaur', 'Amritsar', '9866523147', 'nigar@test.com', 'general', 'female', 'unmarried', 'sacred heart', 'C.B.S.E', '2009', '91', 'D.A.V public school,amritsar', 'C.B.S.E', '2011', '85', '', '', '', '', 'iitjee', '2500', '356', '9568231475', 'Amritsar', '9', 'B.Tech', 6, 'student_images/stu3.jpg', '0005-01-24', 2015),
(1010, '10', 'Parul Preet Kaur', 'Satwinder Jit Pal Singh', 'Ramanjit Kaur', 'Amritsar', '8965741235', 'parul@yahoo.com', 'general', 'female', 'unmarried', 'senior study', 'cbse', '2009', '93.2', 'senior study', 'cbse', '2011', '91.6', '', '', '', '', 'iitjee', '1200', '450', '8569741235', 'Amritsar', '10', 'B.Tech', 6, 'student_images/Picture.jpg', '1993-02-28', 2015),
(1011, '11', 'Navneet kaur', 'Raghbir singh', 'Jagir kaur', 'delhi', '9856321474', 'navneet@gmail.com', 'general', 'female', 'unmarried', 'harkrishan public school', 'cbse', '2009', '87', 'harkrishan public school', 'cbse', '2011', '85', '', '', '', '', 'selffinance', '1472', '258', '7589641235', 'Delhi', '11', 'B.Tech', 6, 'student_images/navneet.jpg', '2015-10-07', 2015),
(1012, '12', 'Vikrant sandhu', 'sukhdeep singh', 'inderjit kaur', 'basant avenue,amritsar', '7896584123', 'vicky@gmail.cpm', 'general', 'male', 'unmarried', 'spring dale school', 'C.B.S.E', '2009', '78', 'spring dale school', 'C.B.S.E', '2011', '65', 'G.N.D.U.', 'G.N.D.U', '2015', '7', 'selffinance', '1500', '265', '8956321474', 'basant avenue,amritsar', '12', 'M.Tech', 12, 'student_images/vicky.jpg', '1992-03-25', 2015),
(1013, '13', 'Gurnoor Kaur', 'Raghbir singh', 'Jasbir kaur', 'ajnala', '8596321475', 'pawar@gmail.com', 'general', 'female', 'unmarried', 'harkrishan public school', 'cbse', '2009', '93', 'harkrishan public school', 'C.B.S.E', '2011', '91', 'G.N.D.U.', 'G.N.D.U', '2015', '8', 'selffinance', '1200', '450', '8796541235', 'ajnala', '13', 'M.Tech', 12, 'student_images/gurnoor.jpg', '2015-03-30', 2015),
(1014, '14', 'Simrita Bedi', 'Rajesh Bedi', 'Anjana Bedi', 'Holy city,amritsar', '8759632142', 'sim@gmail.com', 'general', 'female', 'unmarried', 'sacred heart', 'icse', '2009', '75', 'D.A.V public school,amritsar', 'cbse', '2011', '78', 'G.N.D.U.', 'G.N.D.U', '2015', '74', 'iitjee', '1200', '450', '125698743', 'Holy city,amritsar', '14', 'M.Tech', 12, 'student_images/simrita.jpg', '1993-02-11', 2015),
(1015, '15', 'pavneet kaur', 'rajbir singh', 'rajinder kaur', 'white avenue,amritsar', '8569741235', 'pav@gmail.com', 'general', 'female', 'unmarried', 'Khalsa Public School,Amritsar', 'C.B.S.E', '2008', '87', 'Khalsa Public School,Amritsar', 'C.B.S.E', '2010', '88', 'G.N.D.U.', 'G.N.D.U', '2014', '78', 'selffinance', '789', '725', '1258963478', 'white avenue,amritsar', '15', 'M.Tech', 12, 'student_images/pav.jpg', '1991-12-25', 2015),
(1016, '16', 'Sahil Gulati', 'Rakesh Gulati', 'Anu Gulati', 'Amritsar', '7859632145', 'sahil@gmail.com', 'general', 'male', 'unmarried', 'Khalsa Public School,Amritsar', 'cbse', '2009', '86', 'Khalsa Public School,Amritsar', 'cbse', '2011', '75', 'G.N.D.U.', 'G.N.D.U', '2015', '74', 'selffinance', '12000', '105', '7845968123', 'Amritsar', '16', 'M.Tech', 12, 'student_images/stu7.jpg', '1993-01-04', 2015),
(1234, '10721604120', 'gautam', 'rajesh kumar', 'riya', 'H NO: 54 Model Town, jalandhar', '9875638960', 'gautamklair12@gmail.', 'sc', 'male', 'unmarried', 'puran inter national school', 'pseb', '2016', '78%', 'puran inter national school', 'pseb', '2018', '80%', 'dav college', 'gndu', '2021', '76', 'iitjee', '687', '587', '9867456790', 'H NO: 54 Model Town, jalandhar', '1111', 'B.Tech', 1, 'student_images/harpuneet.jpg', '1995-06-06', 2010);

-- --------------------------------------------------------

--
-- Table structure for table `admin_courses`
--

CREATE TABLE IF NOT EXISTS `admin_courses` (
  `coursename` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `type` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_courses`
--

INSERT INTO `admin_courses` (`coursename`, `description`, `type`, `duration`) VALUES
('B.Tech', '4 year ', 'UG', '4years'),
('ba', '3 year', 'UG', '6months'),
('bca', '3 year', 'UG', '6months'),
('bcom', '3 year', 'UG', '6months'),
('M.Tech', '2 year', 'PG', '2years'),
('mca', '', 'UG', '6months'),
('msc', '3 year', 'UG', '6months'),
('supreena klair', 'three year', 'PG', '6months');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
`sr_no` int(11) NOT NULL,
  `ISBN` varchar(45) NOT NULL,
  `Title` varchar(45) NOT NULL,
  `Author` varchar(45) NOT NULL,
  `Edition` varchar(45) NOT NULL,
  `publication` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `grade_point`
--

CREATE TABLE IF NOT EXISTS `grade_point` (
  `sr_no` int(10) NOT NULL,
  `marks` varchar(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `grade_point` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_point`
--

INSERT INTO `grade_point` (`sr_no`, `marks`, `grade`, `grade_point`) VALUES
(1, '80', 'A+', 10),
(2, '75', 'A', 9),
(3, '70', 'B+', 8),
(4, '60', 'B', 7),
(5, '50', 'B+', 8),
(6, '40', 'C', 5),
(7, '30', 'D', 4),
(8, '20', 'E', 1),
(9, '0', 'F', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`news_id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `description`) VALUES
(16, '1', 'TCS coming for campus placements'),
(17, '2', '72 students got palced in Capgemini'),
(18, '3', 'NAAC conference on july-21-2015'),
(19, '4', ' Academic Seminars now a regular feature,as Mumbai colleges looks to improve ratings'),
(20, '5', 'Android App Development Seminar'),
(21, '6', 'Mission Tandarust Punjab-Health Department Holds Dengue Awareness Seminar'),
(22, '7', 'WIPRO-Unified Technology Learning Program(UTLP)'),
(23, '8', '\r\n HMV wins english Quiz competition'),
(24, '9', 'the third day of the Guru Nanak Dev University C-Zone Youth Festival'),
(25, '10', 'Inter college technical activity at BSSS college');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
`result_id` int(50) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `student_id` int(50) NOT NULL,
  `teacher_id` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time_of_upload` varchar(255) NOT NULL,
  `minor_1_marks` varchar(50) NOT NULL,
  `minor_2_marks` int(11) NOT NULL,
  `quiz_marks` int(11) NOT NULL,
  `major_marks` int(11) NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3090 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`result_id`, `subject_code`, `coursename`, `sem_id`, `student_id`, `teacher_id`, `date`, `time_of_upload`, `minor_1_marks`, `minor_2_marks`, `quiz_marks`, `major_marks`, `year`) VALUES
(3018, 'CS100', 'B.Tech', 1, 1001, '1002', '2015-05-18', '12:23:23', '15', 0, 0, 0, 2015),
(3019, 'CS100', 'B.Tech', 1, 1002, '1002', '2015-05-18', '12:23:23', '17', 0, 0, 0, 2015),
(3020, 'CS100', 'B.Tech', 1, 1003, '1002', '2015-05-18', '12:23:23', '19', 0, 0, 0, 2015),
(3021, 'CS100', 'B.Tech', 1, 1001, '1002', '2015-05-18', '12:23:52', '0', 18, 0, 0, 2015),
(3022, 'CS100', 'B.Tech', 1, 1002, '1002', '2015-05-18', '12:23:52', '0', 20, 0, 0, 2015),
(3023, 'CS100', 'B.Tech', 1, 1003, '1002', '2015-05-18', '12:23:52', '0', 18, 0, 0, 2015),
(3024, 'CS100', 'B.Tech', 1, 1001, '1002', '2015-05-18', '12:24:12', '0', 0, 8, 0, 2015),
(3025, 'CS100', 'B.Tech', 1, 1002, '1002', '2015-05-18', '12:24:12', '0', 0, 7, 0, 2015),
(3026, 'CS100', 'B.Tech', 1, 1003, '1002', '2015-05-18', '12:24:12', '0', 0, 8, 0, 2015),
(3027, 'CS100', 'B.Tech', 1, 1001, '1002', '2015-05-18', '12:25:44', '0', 0, 0, 35, 2015),
(3028, 'CS100', 'B.Tech', 1, 1002, '1002', '2015-05-18', '12:25:44', '0', 0, 0, 42, 2015),
(3029, 'CS100', 'B.Tech', 1, 1003, '1002', '2015-05-18', '12:25:44', '0', 0, 0, 45, 2015),
(3030, 'CS101', 'B.Tech', 1, 1001, '1003', '2015-05-18', '12:29:32', '8', 0, 0, 0, 2015),
(3031, 'CS101', 'B.Tech', 1, 1002, '1003', '2015-05-18', '12:29:32', '15', 0, 0, 0, 2015),
(3032, 'CS101', 'B.Tech', 1, 1003, '1003', '2015-05-18', '12:29:32', '12', 0, 0, 0, 2015),
(3033, 'CS101', 'B.Tech', 1, 1001, '1003', '2015-05-18', '12:32:01', '0', 18, 0, 0, 2015),
(3034, 'CS101', 'B.Tech', 1, 1002, '1003', '2015-05-18', '12:32:01', '0', 15, 0, 0, 2015),
(3035, 'CS101', 'B.Tech', 1, 1003, '1003', '2015-05-18', '12:32:01', '0', 10, 0, 0, 2015),
(3036, 'CS101', 'B.Tech', 1, 1001, '1003', '2015-05-18', '12:32:22', '0', 0, 10, 0, 2015),
(3037, 'CS101', 'B.Tech', 1, 1002, '1003', '2015-05-18', '12:32:22', '0', 0, 10, 0, 2015),
(3038, 'CS101', 'B.Tech', 1, 1003, '1003', '2015-05-18', '12:32:22', '0', 0, 10, 0, 2015),
(3039, 'CS101', 'B.Tech', 1, 1001, '1003', '2015-05-18', '12:32:43', '0', 0, 0, 40, 2015),
(3040, 'CS101', 'B.Tech', 1, 1002, '1003', '2015-05-18', '12:32:43', '0', 0, 0, 39, 2015),
(3041, 'CS101', 'B.Tech', 1, 1003, '1003', '2015-05-18', '12:32:43', '0', 0, 0, 40, 2015),
(3042, 'CS102', 'B.Tech', 1, 1001, '1003', '2015-05-18', '12:34:12', '18', 0, 0, 0, 2015),
(3043, 'CS102', 'B.Tech', 1, 1002, '1003', '2015-05-18', '12:34:12', '19', 0, 0, 0, 2015),
(3044, 'CS102', 'B.Tech', 1, 1003, '1003', '2015-05-18', '12:34:12', '17', 0, 0, 0, 2015),
(3045, 'CS102', 'B.Tech', 1, 1001, '1003', '2015-05-18', '12:34:30', '0', 17, 0, 0, 2015),
(3046, 'CS102', 'B.Tech', 1, 1002, '1003', '2015-05-18', '12:34:30', '0', 14, 0, 0, 2015),
(3047, 'CS102', 'B.Tech', 1, 1003, '1003', '2015-05-18', '12:34:30', '0', 16, 0, 0, 2015),
(3048, 'CS102', 'B.Tech', 1, 1001, '1003', '2015-05-18', '12:34:55', '0', 0, 9, 0, 2015),
(3049, 'CS102', 'B.Tech', 1, 1002, '1003', '2015-05-18', '12:34:55', '0', 0, 8, 0, 2015),
(3050, 'CS102', 'B.Tech', 1, 1003, '1003', '2015-05-18', '12:34:55', '0', 0, 7, 0, 2015),
(3051, 'CS102', 'B.Tech', 1, 1001, '1003', '2015-05-18', '12:35:59', '', 0, 0, 45, 2015),
(3052, 'CS102', 'B.Tech', 1, 1002, '1003', '2015-05-18', '12:35:59', '', 0, 0, 47, 2015),
(3053, 'CS102', 'B.Tech', 1, 1003, '1003', '2015-05-18', '12:35:59', '', 0, 0, 42, 2015),
(3054, 'CS103', 'B.Tech', 5, 1004, '1003', '2015-05-18', '09:47:31', '17', 0, 0, 0, 2015),
(3055, 'CS103', 'B.Tech', 5, 1005, '1003', '2015-05-18', '09:47:31', '18', 0, 0, 0, 2015),
(3056, 'CS103', 'B.Tech', 5, 1006, '1003', '2015-05-18', '09:47:31', '18', 0, 0, 0, 2015),
(3057, 'CS103', 'B.Tech', 5, 1004, '1003', '2015-05-18', '09:47:52', '0', 15, 0, 0, 2015),
(3058, 'CS103', 'B.Tech', 5, 1005, '1003', '2015-05-18', '09:47:52', '0', 16, 0, 0, 2015),
(3059, 'CS103', 'B.Tech', 5, 1006, '1003', '2015-05-18', '09:47:52', '0', 17, 0, 0, 2015),
(3060, 'CS103', 'B.Tech', 5, 1004, '1003', '2015-05-18', '09:48:12', '0', 0, 10, 0, 2015),
(3061, 'CS103', 'B.Tech', 5, 1005, '1003', '2015-05-18', '09:48:12', '0', 0, 10, 0, 2015),
(3062, 'CS103', 'B.Tech', 5, 1006, '1003', '2015-05-18', '09:48:12', '0', 0, 10, 0, 2015),
(3063, 'CS103', 'B.Tech', 5, 1004, '1003', '2015-05-18', '09:48:37', '0', 0, 0, 39, 2015),
(3064, 'CS103', 'B.Tech', 5, 1005, '1003', '2015-05-18', '09:48:37', '0', 0, 0, 34, 2015),
(3065, 'CS103', 'B.Tech', 5, 1006, '1003', '2015-05-18', '09:48:37', '0', 0, 0, 35, 2015),
(3066, 'CS104', 'B.Tech', 5, 1004, '1003', '2015-05-18', '09:49:52', '14', 0, 0, 0, 2015),
(3067, 'CS104', 'B.Tech', 5, 1005, '1003', '2015-05-18', '09:49:52', '15', 0, 0, 0, 2015),
(3068, 'CS104', 'B.Tech', 5, 1006, '1003', '2015-05-18', '09:49:52', '13', 0, 0, 0, 2015),
(3069, 'CS104', 'B.Tech', 5, 1004, '1003', '2015-05-18', '09:50:13', '0', 15, 0, 0, 2015),
(3070, 'CS104', 'B.Tech', 5, 1005, '1003', '2015-05-18', '09:50:13', '0', 13, 0, 0, 2015),
(3071, 'CS104', 'B.Tech', 5, 1006, '1003', '2015-05-18', '09:50:13', '0', 12, 0, 0, 2015),
(3072, 'CS104', 'B.Tech', 5, 1004, '1003', '2015-05-18', '09:50:30', '0', 0, 7, 0, 2015),
(3073, 'CS104', 'B.Tech', 5, 1005, '1003', '2015-05-18', '09:50:30', '0', 0, 8, 0, 2015),
(3074, 'CS104', 'B.Tech', 5, 1006, '1003', '2015-05-18', '09:50:30', '0', 0, 9, 0, 2015),
(3075, 'CS104', 'B.Tech', 5, 1004, '1003', '2015-05-18', '09:50:49', '0', 0, 0, 30, 2015),
(3076, 'CS104', 'B.Tech', 5, 1005, '1003', '2015-05-18', '09:50:49', '0', 0, 0, 35, 2015),
(3077, 'CS104', 'B.Tech', 5, 1006, '1003', '2015-05-18', '09:50:49', '0', 0, 0, 39, 2015),
(3078, 'CS105', 'B.Tech', 5, 1004, '1004', '2015-05-18', '09:53:38', '18', 0, 0, 0, 2015),
(3079, 'CS105', 'B.Tech', 5, 1005, '1004', '2015-05-18', '09:53:38', '17', 0, 0, 0, 2015),
(3080, 'CS105', 'B.Tech', 5, 1006, '1004', '2015-05-18', '09:53:38', '15', 0, 0, 0, 2015),
(3081, 'CS105', 'B.Tech', 5, 1004, '1004', '2015-05-18', '09:54:00', '0', 17, 0, 0, 2015),
(3082, 'CS105', 'B.Tech', 5, 1005, '1004', '2015-05-18', '09:54:00', '0', 18, 0, 0, 2015),
(3083, 'CS105', 'B.Tech', 5, 1006, '1004', '2015-05-18', '09:54:00', '0', 16, 0, 0, 2015),
(3084, 'CS105', 'B.Tech', 5, 1004, '1004', '2015-05-18', '09:54:20', '0', 0, 9, 0, 2015),
(3085, 'CS105', 'B.Tech', 5, 1005, '1004', '2015-05-18', '09:54:20', '0', 0, 9, 0, 2015),
(3086, 'CS105', 'B.Tech', 5, 1006, '1004', '2015-05-18', '09:54:20', '0', 0, 9, 0, 2015),
(3087, 'CS105', 'B.Tech', 5, 1004, '1004', '2015-05-18', '09:54:38', '0', 0, 0, 37, 2015),
(3088, 'CS105', 'B.Tech', 5, 1005, '1004', '2015-05-18', '09:54:38', '0', 0, 0, 42, 2015),
(3089, 'CS105', 'B.Tech', 5, 1006, '1004', '2015-05-18', '09:54:38', '0', 0, 0, 41, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
`sem_id` int(11) NOT NULL,
  `semester_name` varchar(50) NOT NULL,
  `courses` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `semester_name`, `courses`) VALUES
(1, 'Sem1', 'B.Tech'),
(5, 'Sem2', 'B.Tech'),
(6, 'Sem3', 'B.Tech'),
(7, 'Sem4', 'B.Tech'),
(8, 'Sem5', 'B.Tech'),
(9, 'Sem6', 'B.Tech'),
(10, 'Sem7', 'B.Tech'),
(11, 'Sem8', 'B.Tech'),
(12, 'Sem1', 'M.Tech'),
(13, 'Sem2', 'M.Tech'),
(14, 'Sem3', 'M.Tech'),
(15, 'Sem4', 'M.Tech'),
(16, 'Sem1', 'supreena klair'),
(17, 'Sem2', 'supreena klair'),
(18, 'Sem3', 'supreena klair'),
(19, 'Sem4', 'supreena klair'),
(20, 'Sem5', 'supreena klair'),
(21, 'Sem6', 'supreena klair'),
(22, 'Sem7', 'supreena klair'),
(23, 'Sem8', 'supreena klair'),
(24, 'Sem9', 'supreena klair'),
(25, 'Sem10', 'supreena klair'),
(26, 'Sem11', 'supreena klair'),
(27, 'Sem12', 'supreena klair'),
(28, 'Sem1', 'bca'),
(29, 'Sem2', 'bca'),
(30, 'Sem3', 'bca'),
(31, 'Sem4', 'bca'),
(32, 'Sem5', 'bca'),
(33, 'Sem6', 'bca'),
(34, 'Sem7', 'bca'),
(35, 'Sem8', 'bca'),
(36, 'Sem9', 'bca'),
(37, 'Sem10', 'bca'),
(38, 'Sem11', 'bca'),
(39, 'Sem12', 'bca'),
(40, 'Sem1', 'mca'),
(41, 'Sem2', 'mca'),
(42, 'Sem3', 'mca'),
(43, 'Sem4', 'mca'),
(44, 'Sem5', 'mca'),
(45, 'Sem6', 'mca'),
(46, 'Sem7', 'mca'),
(47, 'Sem8', 'mca'),
(48, 'Sem9', 'mca'),
(49, 'Sem10', 'mca'),
(50, 'Sem11', 'mca'),
(51, 'Sem12', 'mca'),
(52, 'Sem1', 'bcom'),
(53, 'Sem2', 'bcom'),
(54, 'Sem3', 'bcom'),
(55, 'Sem4', 'bcom'),
(56, 'Sem5', 'bcom'),
(57, 'Sem6', 'bcom'),
(58, 'Sem7', 'bcom'),
(59, 'Sem8', 'bcom'),
(60, 'Sem9', 'bcom'),
(61, 'Sem10', 'bcom'),
(62, 'Sem11', 'bcom'),
(63, 'Sem12', 'bcom'),
(64, 'Sem1', 'msc'),
(65, 'Sem2', 'msc'),
(66, 'Sem3', 'msc'),
(67, 'Sem4', 'msc'),
(68, 'Sem5', 'msc'),
(69, 'Sem6', 'msc'),
(70, 'Sem7', 'msc'),
(71, 'Sem8', 'msc'),
(72, 'Sem9', 'msc'),
(73, 'Sem10', 'msc'),
(74, 'Sem11', 'msc'),
(75, 'Sem12', 'msc'),
(76, 'Sem1', 'ba'),
(77, 'Sem2', 'ba'),
(78, 'Sem3', 'ba'),
(79, 'Sem4', 'ba'),
(80, 'Sem5', 'ba'),
(81, 'Sem6', 'ba'),
(82, 'Sem7', 'ba'),
(83, 'Sem8', 'ba'),
(84, 'Sem9', 'ba'),
(85, 'Sem10', 'ba'),
(86, 'Sem11', 'ba'),
(87, 'Sem12', 'ba');

-- --------------------------------------------------------

--
-- Table structure for table `sgpa`
--

CREATE TABLE IF NOT EXISTS `sgpa` (
`id` int(20) NOT NULL,
  `university_rollno` varchar(50) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `sgpa` double(3,2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `sgpa`
--

INSERT INTO `sgpa` (`id`, `university_rollno`, `sem_id`, `sgpa`) VALUES
(41, '5', 5, 9.00),
(43, '6', 5, 9.00),
(44, '1', 1, 9.33),
(45, '2', 1, 9.67),
(46, '3', 1, 9.33),
(47, '4', 5, 9.00);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_code` varchar(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `first_minor` int(50) NOT NULL,
  `second_minor` int(50) NOT NULL,
  `quiz` int(50) NOT NULL,
  `major` int(50) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_code`, `subject_name`, `first_minor`, `second_minor`, `quiz`, `major`, `coursename`, `semester`, `credits`) VALUES
('1123', 'system software', 20, 20, 10, 50, 'bca', 1, 4),
('1124', 'computer science', 20, 20, 10, 50, 'bca', 15, 4),
('CS100', 'Material Science', 20, 20, 10, 50, 'B.Tech', 1, 4),
('CS101', 'Maths1', 20, 20, 10, 50, 'B.Tech', 1, 4),
('CS102', 'English1', 20, 20, 10, 50, 'B.Tech', 1, 4),
('CS103', 'Basics of Programming', 20, 20, 10, 50, 'B.Tech', 5, 4),
('CS104', 'Maths2', 20, 20, 10, 50, 'B.Tech', 5, 4),
('CS105', 'English2', 20, 20, 10, 50, 'B.Tech', 5, 4),
('CS106', 'Data Structure', 20, 20, 10, 50, 'B.Tech', 6, 4),
('CS107', 'Maths3', 20, 20, 10, 50, 'B.Tech', 6, 4),
('CS108', 'Basics of electronics', 20, 20, 10, 50, 'B.Tech', 6, 4),
('CS109', 'Operating system', 20, 20, 10, 50, 'B.Tech', 7, 4),
('CS110', 'System Programming', 20, 20, 10, 50, 'B.Tech', 7, 4),
('CS111', 'Electronics2', 20, 20, 10, 50, 'B.Tech', 7, 4),
('CS112', 'System Analysis and Design', 20, 20, 10, 50, 'B.Tech', 8, 4),
('CS113', 'Network Operating System', 20, 20, 10, 50, 'B.Tech', 8, 4),
('CS114', 'Relational Database Management System', 20, 20, 10, 50, 'B.Tech', 8, 4),
('CS115', 'Object Oriented Analysis and Design', 20, 20, 10, 50, 'B.Tech', 9, 4),
('CS116', 'Software Engineering', 20, 20, 10, 50, 'B.Tech', 9, 4),
('CS117', 'Natural Language Processing', 20, 20, 10, 50, 'B.Tech', 9, 4),
('CS118', 'Symbolic Logic &Logic Programming', 20, 20, 10, 50, 'B.Tech', 10, 4),
('CS119', 'Formal Languages &Automata Theory', 20, 20, 10, 50, 'B.Tech', 10, 4),
('CS120', 'Internet Protocol', 20, 20, 10, 50, 'B.Tech', 10, 4),
('CS121', 'Industrial Training', 20, 20, 10, 50, 'B.Tech', 11, 10),
('Ms100', 'Expert System', 20, 20, 10, 50, 'M.Tech', 12, 4),
('Ms101', 'TOC', 20, 20, 10, 50, 'M.Tech', 12, 4),
('MS102', 'Information Security', 20, 20, 10, 50, 'M.Tech', 12, 4),
('Ms103', 'Advance Java', 20, 20, 10, 50, 'M.Tech', 13, 4),
('Ms104', 'Robotics', 20, 20, 10, 50, 'M.Tech', 13, 4),
('MS105', 'DBMS advance', 20, 20, 10, 50, 'M.Tech', 13, 4),
('MS106', 'Android', 20, 20, 10, 50, 'M.Tech', 14, 4),
('MS107', 'Cyber Security', 20, 20, 10, 50, 'M.Tech', 14, 4),
('MS108', 'Thesis', 20, 20, 10, 50, 'M.Tech', 15, 4);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `photo` tinytext NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `father_name`, `mother_name`, `photo`, `address`, `email`, `password`, `status`, `designation`, `contact_no`, `dateofbirth`) VALUES
('1002', 'teacher2', 'father2', 'mother2', 'teacher_images/615_300_Teacher.jpg', 'address2', 'email2@gmail.com', '123', 'unmarried', 'lecturer', '9815612312', ''),
('1003', 'teacher3', 'father3', 'mother3', 'teacher_images/stu3.jpg', 'address39', 'email3@gmail.com', '789', 'unmarried', 'lecturer', '9815612313', ''),
('1004', 'teacher4', 'father4', 'mother4', 'teacher_images/becoming-teacher.jpg', 'address', 'email4@gmail.com', '123', 'unmarried', 'lecturer', '1456239875', ''),
('1008', 'Anu Suri', 'Samarth Suri', 'Rama suri', 'teacher_images/Loan-Forgiveness-For-Teachers.jpg', '5,Golden Avenue,Amritsar', 'anu@gmail.com', '1', 'married', 'lecturer', '9856321475', '1975-08-25'),
('1010', 'Mr. pardeep ', ' lukhwinder kumar', 'pooja rani', 'teacher_images/337218-good-teacher-thinkstock.jpg', 'h:no kapurthala nagar,jalanhar', 'pardeep@gmail.com', '123', 'married', 'lecturer', '9875634560', '2019-03-12'),
('1011', 'Mr. Money', 'Rakesh Kumar', 'Seeta  Rani', 'teacher_images/aman.jpg', 'H:No 54 Amritsir ', 'Money22@gmail.com', '1111', 'married', 'lecturer', '9870645398', '2019-03-20'),
('1012', 'Mr. Rishabh ', 'jaswinder kumar', 'manjeet', 'teacher_images/stu8.jpg', 'H:No 33 model town, jalandhar', 'Rish23@gmail.com', '4321', 'unmarried', 'lecturer', '9809756432', '2019-05-12'),
('1013', 'Mr. Gulagong', 'mukesh kumar', 'heena', 'teacher_images/harpuneet.jpg', 'H:No 67 jalandhar', 'mukesh33@gmail.com', '9987', 'married', 'professor', '9876408534', '2017-07-11'),
('1014', 'Mr. Manpreet ', 'krishan ladhar', 'riya', 'teacher_images/20141224_092724.jpg', 'H:NO krishan , haryana', 'Manpreet@gmail.com', '1122', 'married', 'lecturer', '7896459890', '2015-12-08'),
('1015', 'Mrs.Sangeeta Arora', 'Rakesh Kumar', 'manjeet devi', 'teacher_images/pavneet.jpg', 'H:NO 54 kapurthla nagar', 'sangeeta64@gmail.com', '123', 'married', 'professor', '9867095789', '1997-10-06'),
('1016', 'supreenaklair', 'Rakesh Kumar', 'manjeet', 'teacher_images/stu5.png', 'H NO:55 Model House, jalandhar', 'supreenaklair@gmail.com', '123', 'unmarried', 'lecturer', '9875649880', '2018-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_grade`
--

CREATE TABLE IF NOT EXISTS `teacher_grade` (
`id` int(11) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `grade_point` int(10) NOT NULL,
  `marks` varchar(10) NOT NULL,
  `teacher_id` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `teacher_grade`
--

INSERT INTO `teacher_grade` (`id`, `grade`, `grade_point`, `marks`, `teacher_id`) VALUES
(11, 'A+', 10, '81-100', '1008'),
(12, 'A', 9, '76-80', '1008'),
(13, 'B+', 8, '71-75', '1008'),
(14, 'B', 7, '61-70', '1008'),
(15, 'C+', 6, '51-60', '1008'),
(16, 'C', 5, '41-50', '1008'),
(17, 'D', 4, '31-40', '1008'),
(18, 'E', 2, '21-30', '1008'),
(19, 'F', 0, '0-20', '1008'),
(20, 'A+', 10, '81-100', '1002'),
(21, 'A', 9, '76-80', '1002'),
(22, 'B+', 8, '71-75', '1002'),
(23, 'B', 7, '61-70', '1002'),
(24, 'C+', 6, '51-60', '1002'),
(25, 'C', 5, '41-50', '1002'),
(26, 'D', 4, '31-40', '1002'),
(27, 'E', 2, '21-30', '1002'),
(28, 'F', 0, '0-20', '1002'),
(29, 'A+', 10, '', '1009'),
(30, 'A', 9, '', '1009'),
(31, 'B+', 8, '', '1009'),
(32, 'B', 7, '', '1009'),
(33, 'C+', 6, '', '1009'),
(34, 'C', 5, '', '1009'),
(35, 'D', 4, '', '1009'),
(36, 'E', 2, '', '1009'),
(37, 'F', 0, '', '1009'),
(38, 'A+', 10, '', '1010'),
(39, 'A', 9, '', '1010'),
(40, 'B+', 8, '', '1010'),
(41, 'B', 7, '', '1010'),
(42, 'C+', 6, '', '1010'),
(43, 'C', 5, '', '1010'),
(44, 'D', 4, '', '1010'),
(45, 'E', 2, '', '1010'),
(46, 'F', 0, '', '1010'),
(47, 'A+', 10, '', '1011'),
(48, 'A', 9, '', '1011'),
(49, 'B+', 8, '', '1011'),
(50, 'B', 7, '', '1011'),
(51, 'C+', 6, '', '1011'),
(52, 'C', 5, '', '1011'),
(53, 'D', 4, '', '1011'),
(54, 'E', 2, '', '1011'),
(55, 'F', 0, '', '1011'),
(56, 'A+', 10, '', '1012'),
(57, 'A', 9, '', '1012'),
(58, 'B+', 8, '', '1012'),
(59, 'B', 7, '', '1012'),
(60, 'C+', 6, '', '1012'),
(61, 'C', 5, '', '1012'),
(62, 'D', 4, '', '1012'),
(63, 'E', 2, '', '1012'),
(64, 'F', 0, '', '1012'),
(65, 'A+', 10, '', '1013'),
(66, 'A', 9, '', '1013'),
(67, 'B+', 8, '', '1013'),
(68, 'B', 7, '', '1013'),
(69, 'C+', 6, '', '1013'),
(70, 'C', 5, '', '1013'),
(71, 'D', 4, '', '1013'),
(72, 'E', 2, '', '1013'),
(73, 'F', 0, '', '1013'),
(74, 'A+', 10, '', '1014'),
(75, 'A', 9, '', '1014'),
(76, 'B+', 8, '', '1014'),
(77, 'B', 7, '', '1014'),
(78, 'C+', 6, '', '1014'),
(79, 'C', 5, '', '1014'),
(80, 'D', 4, '', '1014'),
(81, 'E', 2, '', '1014'),
(82, 'F', 0, '', '1014'),
(83, 'A+', 10, '', '1015'),
(84, 'A', 9, '', '1015'),
(85, 'B+', 8, '', '1015'),
(86, 'B', 7, '', '1015'),
(87, 'C+', 6, '', '1015'),
(88, 'C', 5, '', '1015'),
(89, 'D', 4, '', '1015'),
(90, 'E', 2, '', '1015'),
(91, 'F', 0, '', '1015'),
(92, 'A+', 10, '', '1016'),
(93, 'A', 9, '', '1016'),
(94, 'B+', 8, '', '1016'),
(95, 'B', 7, '', '1016'),
(96, 'C+', 6, '', '1016'),
(97, 'C', 5, '', '1016'),
(98, 'D', 4, '', '1016'),
(99, 'E', 2, '', '1016'),
(100, 'F', 0, '', '1016');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_view_total_marks`
--

CREATE TABLE IF NOT EXISTS `teacher_view_total_marks` (
`id` int(11) NOT NULL,
  `university_rollno` varchar(50) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `total` int(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `year` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=74 ;

--
-- Dumping data for table `teacher_view_total_marks`
--

INSERT INTO `teacher_view_total_marks` (`id`, `university_rollno`, `subject_code`, `sem_id`, `total`, `grade`, `year`) VALUES
(56, '1', 'CS100 ', 1, 76, 'A', 2015),
(57, '2', 'CS100 ', 1, 86, 'A+', 2015),
(58, '3', 'CS100 ', 1, 90, 'A+', 2015),
(59, '1', 'CS101 ', 1, 76, 'A', 2015),
(60, '2', 'CS101 ', 1, 79, 'A', 2015),
(61, '3', 'CS101 ', 1, 72, 'B+', 2015),
(62, '1', 'CS102 ', 1, 89, 'A+', 2015),
(63, '2', 'CS102 ', 1, 88, 'A+', 2015),
(64, '3', 'CS102 ', 1, 82, 'A+', 2015),
(65, '4', 'CS103 ', 5, 81, 'A+', 2015),
(66, '5', 'CS103 ', 5, 78, 'A', 2015),
(67, '6', 'CS103 ', 5, 80, 'A', 2015),
(68, '4', 'CS104 ', 5, 66, 'B', 2015),
(69, '5', 'CS104 ', 5, 71, 'B+', 2015),
(70, '6', 'CS104 ', 5, 73, 'B+', 2015),
(71, '4', 'CS105 ', 5, 81, 'A+', 2015),
(72, '5', 'CS105 ', 5, 86, 'A+', 2015),
(73, '6', 'CS105 ', 5, 81, 'A+', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE IF NOT EXISTS `time_table` (
`tt_id` int(11) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `session` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  `year` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3138 ;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`tt_id`, `subject_code`, `session`, `teacher_id`, `year`) VALUES
(1011, 'CS102', 'july-december', '1016', '2016'),
(1111, 'CS101', 'jan-june', '1016', '2016'),
(1217, 'CS100', 'july-december', '1016', '2019'),
(1243, 'CS100', 'july-december', '1016', '2016'),
(3116, 'CS100', 'July-December', '1016', '2015'),
(3117, 'CS106', 'July-December', '1016', '2015'),
(3118, 'CS108', 'July-December', '1002', '2015'),
(3119, 'Ms100', 'July-December', '1002', '2015'),
(3120, 'Ms101', 'July-December', '1002', '2015'),
(3121, 'MS102', 'July-December', '1002', '2015'),
(3122, 'CS101', 'July-December', '1003', '2015'),
(3123, 'CS102', 'July-December', '1003', '2015'),
(3124, 'CS103', 'Jan-June', '1016', '2015'),
(3125, 'CS104', 'Jan-June', '1003', '2015'),
(3126, 'CS109', 'Jan-June', '1016', '2015'),
(3127, 'CS110', 'Jan-June', '1003', '2015'),
(3128, 'Ms104', 'Jan-June', '1016', '2015'),
(3129, 'Ms103', 'Jan-June', '1003', '2015'),
(3130, 'MS105', 'Jan-June', '1003', '2015'),
(3131, 'CS105', 'Jan-June', '1004', '2015'),
(3132, 'CS111', 'Jan-June', '1004', '2015'),
(3133, 'CS107', 'July-December', '1003', '2015'),
(3134, 'CS103', 'Jan-June', '1016', '2018'),
(3135, 'CS104', 'Jan-June', '1010', '2018'),
(3136, 'CS105', 'Jan-June', '1010', '2018'),
(3137, 'MS108', 'Jan-June', '1010', '2018');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `admin_add_student`
--
ALTER TABLE `admin_add_student`
 ADD PRIMARY KEY (`student_id`), ADD UNIQUE KEY `university_rollno` (`university_rollno`), ADD KEY `course` (`coursename`), ADD KEY `course_2` (`coursename`), ADD KEY `sem_id` (`sem_id`), ADD KEY `semester_name` (`sem_id`), ADD KEY `sem_id_2` (`sem_id`);

--
-- Indexes for table `admin_courses`
--
ALTER TABLE `admin_courses`
 ADD PRIMARY KEY (`coursename`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `grade_point`
--
ALTER TABLE `grade_point`
 ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
 ADD PRIMARY KEY (`result_id`), ADD KEY `sem_id` (`sem_id`), ADD KEY `student_id` (`student_id`), ADD KEY `teacher_id` (`teacher_id`), ADD KEY `subject_code` (`subject_code`), ADD KEY `coursename` (`coursename`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
 ADD PRIMARY KEY (`sem_id`), ADD KEY `courses` (`courses`);

--
-- Indexes for table `sgpa`
--
ALTER TABLE `sgpa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
 ADD PRIMARY KEY (`subject_code`), ADD KEY `coursename` (`coursename`), ADD KEY `coursename_2` (`coursename`), ADD KEY `semester` (`semester`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `teacher_grade`
--
ALTER TABLE `teacher_grade`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_view_total_marks`
--
ALTER TABLE `teacher_view_total_marks`
 ADD PRIMARY KEY (`id`), ADD KEY `university_rollno` (`university_rollno`), ADD KEY `subject_code` (`subject_code`), ADD KEY `sem_id` (`sem_id`), ADD KEY `year` (`year`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
 ADD PRIMARY KEY (`tt_id`), ADD KEY `subject_code` (`subject_code`), ADD KEY `teacher_id` (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
MODIFY `result_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3090;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `sgpa`
--
ALTER TABLE `sgpa`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `teacher_grade`
--
ALTER TABLE `teacher_grade`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `teacher_view_total_marks`
--
ALTER TABLE `teacher_view_total_marks`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
MODIFY `tt_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3138;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_add_student`
--
ALTER TABLE `admin_add_student`
ADD CONSTRAINT `admin_add_student_ibfk_1` FOREIGN KEY (`coursename`) REFERENCES `admin_courses` (`coursename`),
ADD CONSTRAINT `admin_add_student_ibfk_2` FOREIGN KEY (`sem_id`) REFERENCES `semester` (`sem_id`);

--
-- Constraints for table `semester`
--
ALTER TABLE `semester`
ADD CONSTRAINT `semester_ibfk_1` FOREIGN KEY (`courses`) REFERENCES `admin_courses` (`coursename`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`coursename`) REFERENCES `admin_courses` (`coursename`),
ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`semester`) REFERENCES `semester` (`sem_id`);

--
-- Constraints for table `teacher_view_total_marks`
--
ALTER TABLE `teacher_view_total_marks`
ADD CONSTRAINT `teacher_view_total_marks_ibfk_1` FOREIGN KEY (`university_rollno`) REFERENCES `admin_add_student` (`university_rollno`),
ADD CONSTRAINT `teacher_view_total_marks_ibfk_2` FOREIGN KEY (`subject_code`) REFERENCES `subjects` (`subject_code`),
ADD CONSTRAINT `teacher_view_total_marks_ibfk_3` FOREIGN KEY (`sem_id`) REFERENCES `semester` (`sem_id`);

--
-- Constraints for table `time_table`
--
ALTER TABLE `time_table`
ADD CONSTRAINT `time_table_ibfk_1` FOREIGN KEY (`subject_code`) REFERENCES `subjects` (`subject_code`),
ADD CONSTRAINT `time_table_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
