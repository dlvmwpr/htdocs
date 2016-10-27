-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-27 04:36
-- 서버 버전: 10.1.13-MariaDB
-- PHP 버전: 5.6.20

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
-- 테이블 구조 `board`
--

CREATE TABLE `board` (
  `idx` int(3) NOT NULL,
  `writer` varchar(30) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `hits` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `board`
--

INSERT INTO `board` (`idx`, `writer`, `subject`, `content`, `date`, `hits`) VALUES
(3, 'aa', 'aa', 'aa', '0000-00-00', 0),
(4, 'aaa', 'aaa', 'aaa', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `kName` varchar(20) NOT NULL,
  `eName` varchar(20) DEFAULT NULL,
  `birth` varchar(20) NOT NULL,
  `id` varchar(30) NOT NULL,
  `pw` varchar(36) NOT NULL,
  `phone` varchar(14) DEFAULT NULL,
  `cellphone` varchar(14) NOT NULL,
  `sms` tinyint(1) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `housePostcode` varchar(5) NOT NULL,
  `houseAddress` varchar(300) NOT NULL,
  `DM` tinyint(1) NOT NULL,
  `officeName` varchar(20) NOT NULL,
  `jobFamily` varchar(20) DEFAULT NULL,
  `jobPosition` varchar(20) NOT NULL,
  `officePostcode` varchar(5) NOT NULL,
  `officeAddress` varchar(300) NOT NULL,
  `officePhone` varchar(14) DEFAULT NULL,
  `faxNumber` varchar(14) DEFAULT NULL,
  `chkMarry` tinyint(1) DEFAULT NULL,
  `weddingDay` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `kName`, `eName`, `birth`, `id`, `pw`, `phone`, `cellphone`, `sms`, `email`, `housePostcode`, `houseAddress`, `DM`, `officeName`, `jobFamily`, `jobPosition`, `officePostcode`, `officeAddress`, `officePhone`, `faxNumber`, `chkMarry`, `weddingDay`) VALUES
(1, 'dsdtg', '', 'dsdtg', 'jghhf', 'aaaas', '', '010-4354-6467', 0, '', '6027', '서울 강남구 압구정로 102 (신사동, 형지제2빌딩)2cmd', 0, 'sm', '', 'a/s', '7630', '서울 강서구 마곡중앙로 11 (내발산동, 공원관리사무실)a23', '', '', 1, '2011-06-05'),
(2, '장숭리', '', '1999-03-07', 'sodas789', 'sodas789', '', '010-3334-5942', 0, '', '04934', '서울 광진구 긴고랑로15길 21 (중곡동, 파인빌15차)2층', 0, '서울디지텍고등학교', '', '2학년', '04346', '서울 용산구 회나무로12길 27 (이태원동, 서울디지텍고등학교)4층', '', '', 1, '2016-10-20');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`idx`);

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `board`
--
ALTER TABLE `board`
  MODIFY `idx` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
