-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-06-15 10:07
-- 서버 버전: 10.4.19-MariaDB
-- PHP 버전: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `board`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `sing_board`
--

CREATE TABLE `sing_board` (
  `idx` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `memo` text NOT NULL,
  `regdate` varchar(20) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `pwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `sing_board`
--

INSERT INTO `sing_board` (`idx`, `subject`, `name`, `memo`, `regdate`, `ip`, `pwd`) VALUES
(22, 'ffdsfdsf', '1234', 'sdfdsfdsfdsfsdsd fsd\r\nsdsdfdsfsdafase\r\nesfasefsefsefes\r\nsefesfvsefsef\r\nsfsefsefesfesf', '2021-06-15 09:21:30', '::1', '*A4B6157319038724E3560894F7F932C8886EBFCF');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `sing_board`
--
ALTER TABLE `sing_board`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `sing_board`
--
ALTER TABLE `sing_board`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
