-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 02:13 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kollabo`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_signup`
--

CREATE TABLE `student_signup` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_signup`
--

INSERT INTO `student_signup` (`id`, `firstname`, `lastname`, `username`, `password`, `email`) VALUES
(1, 'Leslie', 'Atadika', 'twy90', 'naturebwoy6', 'ata@gmail.com'),
(2, 'Leslie', 'Atadika', 'twy90', 'naturebwoy6', 'ata@gmail.com'),
(3, 'Ata', 'Mpa', 'atam', 'qwertyuiop', 'a@gmail.com'),
(4, 'Mark', 'Nebu', 'nebu12', '.,mnbvcxz', 'nebs@gmail.com'),
(5, 'Ken', 'Baggio', 'raven', 'qwerty1234', 'kl@yahoo.com'),
(6, 'John', 'Snow', 'nightwatcher', 'iamawatchman', 'snow@gmail.com'),
(7, 'Jacky', 'Alba', 'Jacky12', 'asdfghjkl', 'ada@gmail.com'),
(8, 'AA', 'SSS', 'AAA', 'QWERTYUIOPASDF', 'DDD'),
(9, 'AAAAAA', 'AAAAAA', 'AA', 'AAAAAAAAAA', 'AA'),
(10, 'aaaaaaaaaa', 'aaa', 'sasa', 'aaaaaaaaaa', 'a'),
(11, 'asd', 'asdfg', 'asdfgh', 'zxcvbnm,./', 'asd'),
(12, 'aaa', 'aaaaa', 'aaaa', 'aaaaaaaaaa', 'a'),
(13, 'asd', 'qwe', 'yh', 'asdfghjkl;', 'azx'),
(14, 'Gideon', 'Asare', 'gido', 'gido12345678', 'gid@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_signup`
--

CREATE TABLE `teacher_signup` (
  `id` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher_signup`
--

INSERT INTO `teacher_signup` (`id`, `firstname`, `lastname`, `username`, `password`, `course`, `email`, `role`) VALUES
(1, 'John ', 'Bosco', 'JB', 'zxcvbnm,.', 'programming', 'b@gmail.com', ''),
(2, 'Matt', 'hardy', 'mhard1', 'iamsirnino', 'maths', 'nin@gmail.com', '1'),
(3, 'Misty', 'Boat', 'Boat', 'qwerty12345', 'maths', 'mt@gmail.com', ''),
(4, 'qw', 'qwe', 'asd', 'asdfghjkl;', 'zxc', 'as', ''),
(5, 'qw', 'qwe', 'asd', 'asdfghjkl;', 'zxc', 'as', ''),
(6, 'asdf', 'qw', 'qqwe', '1234567890', 'qwer', 'as@hjk', ''),
(8, 'opoku', 'annan', 'op', 'asdfgqwert', 'ewe', 'asd@gmail', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_signup`
--
ALTER TABLE `student_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_signup`
--
ALTER TABLE `teacher_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_signup`
--
ALTER TABLE `student_signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `teacher_signup`
--
ALTER TABLE `teacher_signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
