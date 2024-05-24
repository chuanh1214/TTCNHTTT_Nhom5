-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 01:24 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlctgd`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitieu`
--

CREATE TABLE `chitieu` (
  `maChiTieu` int(10) NOT NULL,
  `tenKhoanChi` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soTien` double(10,0) NOT NULL DEFAULT 0,
  `ghiChu` varchar(250) NOT NULL,
  `ngay` date NOT NULL,
  `maLoaiCT` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaichitieu`
--

CREATE TABLE `loaichitieu` (
  `maLoaiCT` int(10) NOT NULL,
  `tenLoaiCT` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaithunhap`
--

CREATE TABLE `loaithunhap` (
  `maLoaiTN` int(10) NOT NULL,
  `tenLoaiTN` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `maNguoiDung` int(10) NOT NULL,
  `hoTen` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gioiTinh` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `maTaiKhoan` int(10) NOT NULL,
  `maThuNhap` int(10) NOT NULL,
  `maChiTieu` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `maTaiKhoan` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matKhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`maTaiKhoan`, `email`, `matKhau`) VALUES
(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `thunhap`
--

CREATE TABLE `thunhap` (
  `maThuNhap` int(10) NOT NULL,
  `tenKhoanThu` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soTien` double(10,0) NOT NULL DEFAULT 0,
  `ghiChu` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngay` date NOT NULL,
  `maLoaiTN` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitieu`
--
ALTER TABLE `chitieu`
  ADD PRIMARY KEY (`maChiTieu`),
  ADD KEY `fk_chitieu_loaichitieu` (`maLoaiCT`);

--
-- Indexes for table `loaichitieu`
--
ALTER TABLE `loaichitieu`
  ADD PRIMARY KEY (`maLoaiCT`);

--
-- Indexes for table `loaithunhap`
--
ALTER TABLE `loaithunhap`
  ADD PRIMARY KEY (`maLoaiTN`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`maNguoiDung`),
  ADD KEY `fk_nguoidung_taikhoan` (`maTaiKhoan`),
  ADD KEY `fk_nguoidung_thunhap` (`maThuNhap`),
  ADD KEY `fk_nguoidung_chitieu` (`maChiTieu`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`maTaiKhoan`);

--
-- Indexes for table `thunhap`
--
ALTER TABLE `thunhap`
  ADD PRIMARY KEY (`maThuNhap`),
  ADD KEY `fk_thunhap_loaithunhap` (`maLoaiTN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitieu`
--
ALTER TABLE `chitieu`
  MODIFY `maChiTieu` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaichitieu`
--
ALTER TABLE `loaichitieu`
  MODIFY `maLoaiCT` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaithunhap`
--
ALTER TABLE `loaithunhap`
  MODIFY `maLoaiTN` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `maNguoiDung` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `maTaiKhoan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thunhap`
--
ALTER TABLE `thunhap`
  MODIFY `maThuNhap` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitieu`
--
ALTER TABLE `chitieu`
  ADD CONSTRAINT `fk_chitieu_loaichitieu` FOREIGN KEY (`maLoaiCT`) REFERENCES `loaichitieu` (`maLoaiCT`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `fk_nguoidung_chitieu` FOREIGN KEY (`maChiTieu`) REFERENCES `chitieu` (`maChiTieu`),
  ADD CONSTRAINT `fk_nguoidung_taikhoan` FOREIGN KEY (`maTaiKhoan`) REFERENCES `taikhoan` (`maTaiKhoan`),
  ADD CONSTRAINT `fk_nguoidung_thunhap` FOREIGN KEY (`maThuNhap`) REFERENCES `thunhap` (`maThuNhap`);

--
-- Constraints for table `thunhap`
--
ALTER TABLE `thunhap`
  ADD CONSTRAINT `fk_thunhap_loaithunhap` FOREIGN KEY (`maLoaiTN`) REFERENCES `loaithunhap` (`maLoaiTN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
