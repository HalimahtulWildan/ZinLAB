-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 06:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratorium`
--

-- --------------------------------------------------------

--
-- Table structure for table `asisten`
--

CREATE TABLE `asisten` (
  `id` int(11) NOT NULL,
  `namaasisten` varchar(50) NOT NULL,
  `telpasisten` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laboratorium`
--

CREATE TABLE `laboratorium` (
  `id` int(20) NOT NULL,
  `laboratorium` varchar(100) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laboratorium`
--

INSERT INTO `laboratorium` (`id`, `laboratorium`, `kapasitas`) VALUES
(1, 'Sistem Operasi', 69);

-- --------------------------------------------------------

--
-- Table structure for table `praktikum`
--

CREATE TABLE `praktikum` (
  `id` int(30) NOT NULL,
  `namapraktikum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `submisi`
--

CREATE TABLE `submisi` (
  `id` int(20) NOT NULL,
  `idpraktikum` bigint(20) NOT NULL,
  `idasisten` bigint(20) NOT NULL,
  `idlablaboratorium` int(11) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `createdate` datetime NOT NULL,
  `status` enum('belum','terima','tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `jenis` enum('praktikan','asisten') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `trigger_user_delete` AFTER DELETE ON `users` FOR EACH ROW BEGIN 
    IF OLD.jenis = 'praktikan' THEN 
        DELETE FROM praktikum WHERE id = OLD.id; 
    END IF; 
    IF OLD.jenis = 'asisten' THEN 
        DELETE FROM asisten WHERE id = OLD.id; 
    END IF; 
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_user_insert` AFTER INSERT ON `users` FOR EACH ROW BEGIN
    IF NEW.jenis = 'praktikan' THEN
        INSERT INTO praktikum (id, namapraktikum) 
        SELECT id, fullname FROM users 
        WHERE id = NEW.id;
    END IF;
    IF NEW.jenis = 'asisten' THEN
        INSERT INTO asisten (id, namaasisten,telpasisten) 
        SELECT id, fullname, no_telp FROM users 
        WHERE id = NEW.id;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `trigger_user_update` AFTER UPDATE ON `users` FOR EACH ROW BEGIN
    IF NEW.jenis = 'praktikan' THEN
        UPDATE praktikum SET id = NEW.id, namapraktikum = (SELECT fullname FROM users WHERE id = NEW.id) 
        WHERE id = NEW.id;
    END IF;
    IF NEW.jenis = 'asisten' THEN
        UPDATE asisten SET id = NEW.id, namaasisten = (SELECT fullname FROM users WHERE id = NEW.id), telpasisten = NEW.no_telp 
        WHERE id = NEW.id;
    END IF;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `praktikum`
--
ALTER TABLE `praktikum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submisi`
--
ALTER TABLE `submisi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idasisten` (`idasisten`),
  ADD KEY `idlablaboratorium` (`idlablaboratorium`),
  ADD KEY `idpraktikum` (`idpraktikum`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asisten`
--
ALTER TABLE `asisten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `laboratorium`
--
ALTER TABLE `laboratorium`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `praktikum`
--
ALTER TABLE `praktikum`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `submisi`
--
ALTER TABLE `submisi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `submisi`
--
ALTER TABLE `submisi`
  ADD CONSTRAINT `submisi_ibfk_1` FOREIGN KEY (`idlablaboratorium`) REFERENCES `laboratorium` (`id`),
  ADD CONSTRAINT `submisi_ibfk_2` FOREIGN KEY (`idasisten`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `submisi_ibfk_3` FOREIGN KEY (`idpraktikum`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
