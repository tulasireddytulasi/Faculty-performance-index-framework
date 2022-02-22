-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 09:32 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitsvizag`
--

-- --------------------------------------------------------

--
-- Table structure for table `administative`
--

CREATE TABLE `administative` (
  `aid` int(11) NOT NULL,
  `fid` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `duty` varchar(30) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administative`
--

INSERT INTO `administative` (`aid`, `fid`, `title`, `duty`, `fromdate`, `todate`, `score`) VALUES
(1, 2, 'Check Attendence', 'Check Attendence', '2018-02-23', '2018-02-24', 10),
(2, 2, 'Check Attendence', 'Check Attendence', '2018-02-03', '2018-02-03', 0),
(3, 52, 'ICMSEA 2017', 'CCM', '2017-12-22', '2017-12-24', 10);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `aid` int(11) NOT NULL,
  `fid` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `pub` varchar(30) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` varchar(20) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`aid`, `fid`, `title`, `pub`, `month`, `year`, `score`) VALUES
(1, 2, 'Detecting Virus', '24/7 Publication', 'October', '2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `aid` int(11) NOT NULL,
  `fid` int(10) NOT NULL,
  `name` varchar(55) NOT NULL,
  `presentedby` varchar(55) NOT NULL,
  `year` date NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`aid`, `fid`, `name`, `presentedby`, `year`, `score`) VALUES
(1, 2, 'Padhma Bushan', 'Y.S Raja Shekar Reddy', '2018-03-03', 10),
(2, 2, 'Padhma Bushan', 'C.M Chandra Babu Naidu', '2017-01-22', 10),
(3, 2, 'Padhma Bushan', 'C.M Chandra Babu Naidu', '2018-03-20', 10),
(4, 28, 'Life Time Achevement', 'BITS VIZAG', '0000-00-00', 10),
(5, 2, 'Life Time Achievement Award', 'BITS VIZAG', '0000-00-00', 10),
(6, 52, 'JJ', 'KK', '2018-02-10', 10);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(11) NOT NULL,
  `fid` int(20) NOT NULL,
  `title` varchar(30) NOT NULL,
  `pub` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `year` date NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `fid`, `title`, `pub`, `author`, `year`, `score`) VALUES
(1, 2, 'python', '24/7', 'authored', '2018-07-07', 10),
(2, 2, 'java', '24/7', 'Authored', '2018-08-04', 0),
(4, 2, 'Hadoop And Bigdata', '24/7', 'Authored', '2018-03-21', 0),
(5, 2, 'Computer Networks', '24/7', 'Authored', '2018-05-08', 0),
(6, 2, 'Android', '24/7', 'Authored', '2017-01-11', 0),
(7, 52, 'cc', 'tech pub', 'authored', '2018-04-02', 10);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `fid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `org` varchar(30) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `fid`, `name`, `org`, `fromdate`, `todate`, `score`) VALUES
(1, 2, 'python', 'baba', '2018-05-02', '2018-02-20', 10),
(2, 52, 'CNS', 'NPTEL', '2018-01-10', '2018-03-31', 10);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `fid` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `org` varchar(255) NOT NULL,
  `from1` date NOT NULL,
  `to1` date NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `fid`, `title`, `type`, `org`, `from1`, `to1`, `score`) VALUES
(1, 2, 'java', 'workshop', 'bits', '2018-03-13', '2018-03-20', 10),
(2, 2, 'Hadoop And Bigdata', 'seminar', 'baba', '2018-09-03', '2018-02-04', 10),
(3, 2, 'Android ', 'workshop', 'bits', '2018-04-03', '0000-00-00', 10),
(4, 2, 'C++', 'Seminar', 'BaBa', '0000-00-00', '0000-00-00', 10),
(5, 2, 'Android ', 'Seminar', 'bab', '0000-00-00', '0000-00-00', 10),
(6, 2, 'FIP', 'workshop', 'bits', '2018-09-03', '2018-09-04', 0),
(7, 52, 'icmsea 2017', 'conference', 'bits vizag', '2017-12-22', '2017-12-24', 10);

-- --------------------------------------------------------

--
-- Table structure for table `events1`
--

CREATE TABLE `events1` (
  `id` int(11) NOT NULL,
  `fid` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `org` varchar(255) NOT NULL,
  `from1` date NOT NULL,
  `to1` date NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events1`
--

INSERT INTO `events1` (`id`, `fid`, `title`, `type`, `org`, `from1`, `to1`, `score`) VALUES
(1, 2, 'java', 'workshop', 'bits', '2018-03-13', '2018-03-20', 10),
(2, 2, 'phython', 'seminar', 'baba', '2018-09-03', '2018-02-04', 10),
(3, 2, 'Android', 'workshop', 'bab', '0000-00-00', '0000-00-00', 10),
(4, 52, 'icc 2017', 'workshop', 'jntuv', '2018-01-24', '2018-01-25', 10);

-- --------------------------------------------------------

--
-- Table structure for table `hodfeedback`
--

CREATE TABLE `hodfeedback` (
  `fbid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q20` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hodfeedback`
--

INSERT INTO `hodfeedback` (`fbid`, `fid`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`) VALUES
(1, 2, 4, 4, 4, 4, 3, 2, 1, 2, 4, 2, 2, 4, 1, 2, 3, 2, 1, 2, 2, 3),
(2, 28, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(8, 29, 3, 3, 3, 3, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 29, 0, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 28, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(12, 29, 4, 4, 4, 4, 4, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 28, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(14, 52, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `pid` int(11) NOT NULL,
  `fid` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `conference` varchar(30) NOT NULL,
  `impact` varchar(30) NOT NULL,
  `volume` varchar(30) NOT NULL,
  `issue` varchar(30) NOT NULL,
  `national` varchar(20) NOT NULL,
  `year` date NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`pid`, `fid`, `title`, `conference`, `impact`, `volume`, `issue`, `national`, `year`, `score`) VALUES
(1, 2, 'Machine Learing', 'conference', 'impact', 'volume', 'issue', 'Array', '2018-02-04', 10),
(2, 2, 'Machine Learing', 'Conference', 'Impact', 'Volume', 'Issue', 'Array', '2018-03-03', 10),
(3, 2, 'Machine Learning', 'Conference', 'impact', 'volume', 'issue', 'national', '2018-03-22', 0),
(4, 52, 'WATER MGMT', 'IJESM', '6.76', '6', '12', 'INTERNATIONAL', '2017-12-24', 10);

-- --------------------------------------------------------

--
-- Table structure for table `patents`
--

CREATE TABLE `patents` (
  `pid` int(11) NOT NULL,
  `fid` int(10) NOT NULL,
  `title` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patents`
--

INSERT INTO `patents` (`pid`, `fid`, `title`, `status`, `year`, `score`) VALUES
(1, 2, 'Solar Bike', 'Granted', '2018', 10),
(3, 2, 'Sloar Car', 'Granted', '2018', 10),
(4, 52, 'BFPIF', 'FILED', '2018-04-06', 10);

-- --------------------------------------------------------

--
-- Table structure for table `profissional`
--

CREATE TABLE `profissional` (
  `pid` int(11) NOT NULL,
  `fid` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `chapter` varchar(30) NOT NULL,
  `membership` int(30) NOT NULL,
  `year` date NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profissional`
--

INSERT INTO `profissional` (`pid`, `fid`, `name`, `chapter`, `membership`, `year`, `score`) VALUES
(1, 2, 'bits Membership', 'chapter 5', 8468284, '2018-03-14', 10),
(2, 2, 'iso Membership', 'chapter 9', 484644, '2018-03-22', 0),
(3, 52, 'CSI', 'VSP', 12345, '2018-03-21', 10);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `course` varchar(30) NOT NULL,
  `team` varchar(40) NOT NULL,
  `title` text NOT NULL,
  `year` varchar(10) NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `fid`, `course`, `team`, `title`, `year`, `score`) VALUES
(1, 7, 'java', 'java', 'java', 'java', 10),
(5, 2, 'B.tech', 'tttt', 'ttttt', '2018', 10),
(6, 2, 'tttttt', 'tttttt', 'tttttttt', 'ttttt', 10),
(7, 2, 'B.tech', 'tulasi', 'java', '2018', 0),
(8, 2, 'btech', 'sai', 'cp', '2016', 0),
(9, 2, 'mtech', 'suresh', 'dbms', '2012', 0),
(10, 2, 'mtech', 'suresh', 'dbms', '2012', 0),
(11, 2, 'mba', 'vinod', 'cns', '2000', 0),
(12, 2, 'mca', 'santosh', 'php', '2018', 0),
(13, 2, 'mba', 'swathi', 'android', '2001', 0),
(14, 28, 'B.tech', '14nr1a0515', 'Rasbarry Pie', '2018', 10),
(15, 2, 'M.Tech', '14nr1a0515,14nr1a0516', 'FPIFW', '2018-03-03', 0),
(16, 52, 'B.Tech', '1,2,3,4', 'abc', '2017-18', 10),
(17, 52, 'M.Tech', 'a,b,c', 'bems', '2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `rid` int(11) NOT NULL,
  `fid` int(10) NOT NULL,
  `title` text NOT NULL,
  `funded` text NOT NULL,
  `grant1` int(30) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `role` varchar(55) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`rid`, `fid`, `title`, `funded`, `grant1`, `fromdate`, `todate`, `status`, `role`, `score`) VALUES
(1, 2, 'android', 'baba', 1000, '2018-09-03', '2018-03-02', 'completed', 'Developer', 10),
(2, 2, 'Hadoop And Bigdata', 'baba', 200000, '2017-09-22', '2018-03-18', 'completed', 'Designer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `rid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `course` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `year` int(20) NOT NULL,
  `sem` int(20) NOT NULL,
  `subname` varchar(20) NOT NULL,
  `pass` int(11) NOT NULL,
  `score` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rid`, `fid`, `course`, `branch`, `year`, `sem`, `subname`, `pass`, `score`) VALUES
(1, 0, '', '', 0, 0, '', 0, 0),
(2, 0, '', '', 0, 0, '', 0, 0),
(3, 2, 'b.tech', 'CSE', 4, 2, 'Distributed System', 77, 20),
(4, 2, 'b.tech', 'CSE', 4, 2, 'Management Science', 89, 20),
(5, 2, 'b.tech', 'CSE', 1, 2, 'Engineering Drawing', 90, 10),
(6, 52, 'b.tech', 'CSE', 4, 2, 'Human Computer Inter', 78, 10),
(7, 52, 'b.tech', 'CSE', 1, 1, 'C Programming', 82, 10),
(8, 2, 'b.tech', 'CSE', 4, 2, 'Distributed systems', 84, 10),
(9, 2, 'b.tech', 'CSE', 4, 2, 'Management Science', 70, 10),
(10, 2, 'b.tech', 'CSE', 1, 2, 'Engineering Drawing', 75, 10),
(11, 2, 'b.tech', 'CSE', 1, 1, 'C Programming', 88, 10);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `rid` int(11) NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `sctbid` int(11) NOT NULL,
  `fid` int(4) NOT NULL,
  `res_score` int(4) NOT NULL,
  `prj_gu_score` int(4) NOT NULL,
  `ev_con_score` int(4) NOT NULL,
  `ev_att_score` int(4) NOT NULL,
  `bk_pub_score` int(4) NOT NULL,
  `pat_score` int(4) NOT NULL,
  `adm_act_score` int(4) NOT NULL,
  `pbm_score` int(4) NOT NULL,
  `cou_ut_score` int(4) NOT NULL,
  `aw_ach_score` int(4) NOT NULL,
  `res_prj_score` int(4) NOT NULL,
  `res_pap_score` int(4) NOT NULL,
  `art_pub_score` int(4) NOT NULL,
  `stud_enr_score` int(4) NOT NULL,
  `hod_fb_score` int(4) NOT NULL,
  `stud_fb_score` int(4) NOT NULL,
  `totalscore` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`sctbid`, `fid`, `res_score`, `prj_gu_score`, `ev_con_score`, `ev_att_score`, `bk_pub_score`, `pat_score`, `adm_act_score`, `pbm_score`, `cou_ut_score`, `aw_ach_score`, `res_prj_score`, `res_pap_score`, `art_pub_score`, `stud_enr_score`, `hod_fb_score`, `stud_fb_score`, `totalscore`) VALUES
(1, 2, 20, 15, 20, 15, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20),
(3, 3, 25, 30, 25, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 25);

-- --------------------------------------------------------

--
-- Table structure for table `sea`
--

CREATE TABLE `sea` (
  `sid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nosp` text NOT NULL,
  `outcome` text NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(10) NOT NULL,
  `score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sea`
--

INSERT INTO `sea` (`sid`, `fid`, `name`, `nosp`, `outcome`, `month`, `year`, `score`) VALUES
(1, 2, 'Cricket', '9', 'cup', 'December', 2018, 10),
(2, 2, 'Football', '12', 'cup', 'October', 2018, 10);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `course` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` int(10) NOT NULL,
  `sem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `username`, `password`, `course`, `branch`, `year`, `sem`) VALUES
(1, 'K. TulasiReddy', 'tulasi', '12345', 'b.tech', 'cse', 4, 2),
(2, 'L. Vinod', 'vinod', '12345', 'b.tech', 'cse', 1, 1),
(3, 'L.Suresh', 'suresh', '12345', 'b.tech', 'cse', 4, 2),
(4, 'V. Venkatesh', 'venkatesh', '12345', 'b.tech', 'mech', 4, 2),
(5, 'P. Praveen', 'praveen', '12345', 'b.tech', 'mech', 4, 2),
(6, 'A. Naveen', 'naveen', '12345', 'b.tech', 'civil', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `studentfeedback`
--

CREATE TABLE `studentfeedback` (
  `sid` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `q1` int(11) NOT NULL,
  `q2` int(11) NOT NULL,
  `q3` int(11) NOT NULL,
  `q4` int(11) NOT NULL,
  `q5` int(11) NOT NULL,
  `q6` int(11) NOT NULL,
  `q7` int(11) NOT NULL,
  `q8` int(11) NOT NULL,
  `q9` int(11) NOT NULL,
  `q10` int(11) NOT NULL,
  `q11` int(11) NOT NULL,
  `q12` int(11) NOT NULL,
  `q13` int(11) NOT NULL,
  `q14` int(11) NOT NULL,
  `q15` int(11) NOT NULL,
  `q16` int(11) NOT NULL,
  `q17` int(11) NOT NULL,
  `q18` int(11) NOT NULL,
  `q19` int(11) NOT NULL,
  `q20` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentfeedback`
--

INSERT INTO `studentfeedback` (`sid`, `studentid`, `branch`, `year`, `sem`, `fid`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `q11`, `q12`, `q13`, `q14`, `q15`, `q16`, `q17`, `q18`, `q19`, `q20`, `total`) VALUES
(2, 2, 'cse', 1, 1, 2, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 80),
(3, 1, 'cse', 4, 2, 2, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 80);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` int(10) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sid`, `name`, `branch`, `course`, `year`, `semester`) VALUES
(1, 'Distributed systems ', 'cse', 'B.Tech', 4, '2'),
(2, 'Management Science', 'cse', 'B.Tech', 4, '2'),
(3, 'Cloud Computing', 'cse', 'B.Tech', 4, '2'),
(4, 'Human Computer Interaction', 'cse', 'B.Tech', 4, '2'),
(5, 'STM', 'cse', 'B.Tech', 4, '1'),
(6, 'UML', 'cse', 'B.Tech', 4, '1'),
(7, 'C Programming', 'cse', 'B.Tech', 1, '1'),
(8, 'Mathematics-1', 'cse', 'B.tech', 1, '1'),
(9, 'Chemistry', 'cse', 'b.tech', 1, '1'),
(10, 'Enginnering Mechanics ', 'cse', 'B.tech', 1, '1'),
(11, 'Maths-2', 'cse', 'b.tech', 1, '2'),
(12, 'maths-3', 'cse', 'b.tech', 1, '2'),
(13, 'Physics', 'cse', 'b.tech', 1, '2'),
(14, 'Engineering Drawing ', 'cse', 'b.tech', 1, '2'),
(15, 'MFCS', 'cse', 'b.tech', 2, '1'),
(16, 'Data Structures', 'cse', 'b.tech', 2, '1'),
(17, 'C++', 'cse', 'b.tech', 2, '1'),
(18, 'ME&FA', 'cse', 'b.tech', 2, '1'),
(19, 'Digital Logical Design', 'cse', 'b.tech ', 2, '1'),
(20, 'Probability And Statistics', 'cse', 'B.tech', 2, '2'),
(21, 'Java', 'cse', 'B.tech', 2, '2'),
(22, 'Computer Organization', 'cse', 'B.Tech', 2, '2'),
(23, 'FLAT', 'cse', 'B.tech', 2, '2'),
(24, 'ADS', 'cse', 'B.tech', 2, '2'),
(25, 'PPl', 'cse', 'B.Tech', 3, '1'),
(26, 'Compiler Design', 'cse', 'B.Tech', 3, '1'),
(27, 'Data Communication', 'cse', 'B.Tech', 3, '1'),
(28, 'Operating System', 'cse', 'B.tech', 3, '1'),
(29, 'Web Technologies', 'cse', 'B.Tech', 3, '2'),
(30, 'CN', 'cse', 'B.Tech', 3, '2'),
(31, 'DMW', 'cse', 'B.Tech', 3, '2'),
(32, 'SE', 'cse', 'B.Tech', 3, '2'),
(33, 'DAA', 'cse', 'B.Tech', 3, '2'),
(34, 'IPRP', 'cse', 'B.Tech', 3, '2'),
(35, 'DBMS', 'cse', 'B.Tech', 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `sub_allocate_dets`
--

CREATE TABLE `sub_allocate_dets` (
  `allocid` int(11) NOT NULL,
  `subname` varchar(100) NOT NULL,
  `deptname` varchar(100) NOT NULL,
  `course` varchar(20) NOT NULL,
  `year` int(10) NOT NULL,
  `sem` int(10) NOT NULL,
  `fid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_allocate_dets`
--

INSERT INTO `sub_allocate_dets` (`allocid`, `subname`, `deptname`, `course`, `year`, `sem`, `fid`) VALUES
(23, 'C Programming', 'CSE', 'b.tech', 1, 1, 0),
(24, 'Mathematics-1', 'CSE', 'b.tech', 1, 1, 27),
(26, 'Enginnering Mechanics', 'CSE', 'b.tech', 1, 1, 28),
(27, 'Distributed systems', 'CSE', 'b.tech', 4, 2, 2),
(29, 'Management Science', 'CSE', 'b.tech', 4, 2, 2),
(30, 'Cloud Computing', 'CSE', 'b.tech', 4, 2, 28),
(31, 'Human Computer Interaction', 'CSE', 'b.tech', 4, 2, 29),
(32, 'Maths-2', 'CIVIL', 'b.tech', 1, 2, 36),
(33, 'maths-3', 'EEE', 'b.tech', 1, 2, 45),
(34, 'Physics', 'MECH', 'b.tech', 1, 2, 34),
(35, 'Engineering Drawing', 'CSE', 'b.tech', 1, 2, 2),
(36, 'STM', 'CSE', 'b.tech', 4, 1, 27),
(37, 'UML', 'EEE', 'b.tech', 4, 1, 44),
(38, 'UML', 'CSE', 'b.tech', 4, 1, 27),
(39, 'Human Computer Interaction', 'CSE', 'b.tech', 4, 2, 52),
(40, 'C Programming', 'CSE', 'b.tech', 1, 1, 52),
(41, 'C Programming', 'CSE', 'b.tech', 1, 1, 2),
(42, 'Chemistry', 'CSE', 'b.tech', 1, 1, 29);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_uploads`
--

INSERT INTO `tbl_uploads` (`id`, `file`, `type`, `size`) VALUES
(1, '70455-(r)11d.jpg', 'image/jpeg', 19),
(2, '77190-3d-glass-green-effect.jpg', 'image/jpeg', 249),
(3, '92715-bsvreddy-resume-.pdf', 'application/pdf', 356),
(4, '54193-dharmaraj1.pdf', 'application/pdf', 219),
(5, '42557-chandrakala.pdf', 'application/pdf', 91),
(6, '16572-dp-resume.pdf', 'application/pdf', 837),
(7, '86694-1.jpg', 'image/jpeg', 102),
(8, '8333-2.jpg', 'image/jpeg', 72),
(9, '47991-pawan-resume.pdf', 'application/pdf', 184),
(10, '10085-unit-4.pdf', 'application/pdf', 986);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `fullname`, `username`, `password`, `course`, `branch`, `role`) VALUES
(1, 'Tulasireddy', 'tulasireddy', '12345', 'B.Tech', 'CSE', 'Admin'),
(2, 'A.V.S Pawan Kumar', 'pawan', '12345', 'B.Tech', 'CSE', 'Faculty'),
(4, 'Suresh', 'suresh', '12345', 'B.Tech', 'CSE', 'Rd'),
(25, 'J. Ratnakumar', 'ratnakumar', '12345', 'B.Tech', 'CSE', 'Hod'),
(26, 'L. Suresh Kumar', 'sureshkumar', '12345', 'B.Tech', 'MECH', 'Student'),
(27, 'Rajesh Kumar', 'rajeshkumar', '12345', 'B.Tech', 'CSE', 'Faculty'),
(28, 'Joshuaraj', 'joshuaraj', '12345', 'B.Tech', 'CSE', 'Faculty'),
(29, 'Hemanth', 'Hemanth', '12345', 'B.Tech', 'CSE', 'Faculty'),
(31, 'Murali', 'murali', '12345', 'B.Tech', 'ECE', 'Hod'),
(33, 'K.Sai', 'sai', '12345', 'b.tech', 'mech', 'Faculty'),
(34, 'N. Naveen ', 'naveen', '12345', 'b.tech', 'mech', 'Faculty'),
(35, 'L . Bharat', 'bharat', '12345', 'b.tech', 'mech', 'Faculty'),
(36, 'N. Nowshad', 'nowshad', '12345', 'b.tech', 'civil', 'Faculty'),
(37, 'L. Umesh', 'umesh', '12345', 'b.tech', 'civil', 'Faculty'),
(38, 'R. Raj kumar', 'raj kumar', '12345', 'b.tech', 'civil', 'Faculty'),
(39, 'S. Surya', 'surya', '12345', 'b.tech', 'civil', 'Faculty'),
(40, 'M. Mahesh', 'mahesh', '12345', 'b.tech', 'ece', 'Faculty'),
(41, 'R. Rakesh', 'rakesh', '12345', 'b.tech', 'ece', 'Faculty'),
(42, 'N. Anudeep', 'anudeep', '12345', 'b.tech', 'ece', 'Faculty'),
(43, 'N. Nagendra', 'nagendra', '12345', 'b.tech', 'ece', 'Faculty'),
(44, 'P. Priyanka', 'priyanka', '12345', 'b.tech', 'eee', 'Faculty'),
(45, 'K. Tulasi', 'tulasi', '12345', 'b.tech', 'eee', 'Faculty'),
(46, 'K. Krishna', 'krishna', '12345', 'b.tech', 'eee', 'Faculty'),
(47, 'J. Jaswanth', 'jaswanth', '12345', 'b.tech', 'eee', 'Faculty'),
(48, 'L. Lokesh', 'lokesh', '12345', 'b.tech', 'mech', 'HOD'),
(49, 'N. Victor Babu', 'victor babu', '12345', 'b.tech', 'civil', 'HOD'),
(51, 'D. Durga Prasad', 'durga prasad', '12345', 'b.tech', 'eee', 'HOD'),
(52, 'Durga Prasad S', 'sdprasad', '12345', 'B.Tech', 'CSE', 'Faculty'),
(54, 'Dr C.V Gopinath', 'gopinath', '12345', 'B.Tech', 'cse', 'manager');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `course` enum('B.TECH','MBA','M.TECH') NOT NULL,
  `branch` enum('CSE','MECH','ECE','EEE','CIVIL') NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `course`, `branch`, `score`) VALUES
(2, 'tulasi', '12345', 'B.TECH', 'CSE', 10),
(3, 'vinod', '12345', 'B.TECH', 'CSE', 10),
(4, 'suresh', '12345', 'B.TECH', 'CSE', 10),
(5, 'harish', '12345', 'B.TECH', 'CSE', 10),
(6, 'sai', '12345', 'B.TECH', 'CSE', 10),
(7, 'rajesh', '12345', 'B.TECH', 'CSE', 10),
(49, 'raju kumar', '12345', 'B.TECH', 'CSE', 10),
(70, 'hemanth', '123456', 'MBA', 'MECH', 10),
(71, 'jothi', '12345', 'B.TECH', 'CIVIL', 10),
(72, 'rajesh', '12345', 'MBA', 'EEE', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administative`
--
ALTER TABLE `administative`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events1`
--
ALTER TABLE `events1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hodfeedback`
--
ALTER TABLE `hodfeedback`
  ADD PRIMARY KEY (`fbid`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `patents`
--
ALTER TABLE `patents`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`sctbid`);

--
-- Indexes for table `sea`
--
ALTER TABLE `sea`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentfeedback`
--
ALTER TABLE `studentfeedback`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `sub_allocate_dets`
--
ALTER TABLE `sub_allocate_dets`
  ADD PRIMARY KEY (`allocid`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administative`
--
ALTER TABLE `administative`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events1`
--
ALTER TABLE `events1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hodfeedback`
--
ALTER TABLE `hodfeedback`
  MODIFY `fbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patents`
--
ALTER TABLE `patents`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profissional`
--
ALTER TABLE `profissional`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `research`
--
ALTER TABLE `research`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `sctbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sea`
--
ALTER TABLE `sea`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentfeedback`
--
ALTER TABLE `studentfeedback`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sub_allocate_dets`
--
ALTER TABLE `sub_allocate_dets`
  MODIFY `allocid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
