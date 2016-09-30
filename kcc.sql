-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-09-30 04:29
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kcc`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `kName` varchar(20) NOT NULL,
  `eName` varchar(20) NOT NULL,
  `birth` varchar(20) NOT NULL,
  `id` varchar(30) NOT NULL,
  `pw` varchar(36) NOT NULL,
  `phone` int(20) NOT NULL,
  `cellphone` int(20) NOT NULL,
  `sms` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `housePostcode` int(10) NOT NULL,
  `houseAddress` varchar(150) NOT NULL,
  `DM` int(11) NOT NULL,
  `officeName` varchar(20) NOT NULL,
  `jobFamily` varchar(20) NOT NULL,
  `jobPosition` varchar(20) NOT NULL,
  `officePostcode` int(10) NOT NULL,
  `officeAddress` varchar(150) NOT NULL,
  `officePhone` varchar(20) NOT NULL,
  `faxNumber` varchar(20) NOT NULL,
  `chkMarry` int(11) NOT NULL,
  `weddingDay` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
