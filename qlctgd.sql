-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 06:50 PM
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
  `maLoaiCT` int(10) NOT NULL,
  `maNguoiDung` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE `dangky` (
  `maDangKy` int(11) NOT NULL,
  `hoTen` varchar(100) NOT NULL,
  `sdt` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matKhau` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaichitieu`
--

CREATE TABLE `loaichitieu` (
  `maLoaiCT` int(10) NOT NULL,
  `tenLoaiCT` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaichitieu`
--

INSERT INTO `loaichitieu` (`maLoaiCT`, `tenLoaiCT`) VALUES
(2, 'đồ ăn');

-- --------------------------------------------------------

--
-- Table structure for table `loaithunhap`
--

CREATE TABLE `loaithunhap` (
  `maLoaiTN` int(10) NOT NULL,
  `tenLoaiTN` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaithunhap`
--

INSERT INTO `loaithunhap` (`maLoaiTN`, `tenLoaiTN`) VALUES
(16, 'Lương'),
(17, 'Kinh doanh'),
(18, 'Đầu tư');

-- --------------------------------------------------------

--
-- Table structure for table `ngansach`
--

CREATE TABLE `ngansach` (
  `maNganSach` int(11) NOT NULL,
  `nganSachDK` double NOT NULL DEFAULT 0,
  `chenhLech` double NOT NULL DEFAULT 0,
  `ngay` date NOT NULL,
  `maLoaiCT` int(11) NOT NULL
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
-- Table structure for table `taikhoannganhang`
--

CREATE TABLE `taikhoannganhang` (
  `maTKNganHang` int(11) NOT NULL,
  `tenNganHang` varchar(100) NOT NULL,
  `tenTKNH` varchar(50) NOT NULL,
  `soTKNH` varchar(50) NOT NULL,
  `matKhau` varchar(100) NOT NULL,
  `maNguoiDung` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `maLoaiTN` int(10) NOT NULL,
  `maNguoiDung` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tietkiem`
--

CREATE TABLE `tietkiem` (
  `maTietKiem` int(11) NOT NULL,
  `tenKhoanTK` varchar(100) NOT NULL,
  `soTienMucTieu` double NOT NULL DEFAULT 0,
  `daTietKiem` double NOT NULL DEFAULT 0,
  `conThieu` double NOT NULL DEFAULT 0,
  `ngayBatDau` date NOT NULL,
  `ngayKetThuc` date NOT NULL,
  `maTKNganHang` int(11) NOT NULL,
  `maNguoiDung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitieu`
--
ALTER TABLE `chitieu`
  ADD PRIMARY KEY (`maChiTieu`),
  ADD KEY `fk_chitieu_loaichitieu` (`maLoaiCT`),
  ADD KEY `fk_chitieu_nguoidung` (`maNguoiDung`);

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`maDangKy`);

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
-- Indexes for table `ngansach`
--
ALTER TABLE `ngansach`
  ADD PRIMARY KEY (`maNganSach`),
  ADD KEY `fk_ngansach_loaichitieu` (`maLoaiCT`);

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
-- Indexes for table `taikhoannganhang`
--
ALTER TABLE `taikhoannganhang`
  ADD PRIMARY KEY (`maTKNganHang`),
  ADD KEY `fk_tknganhang_nguoidung` (`maNguoiDung`);

--
-- Indexes for table `thunhap`
--
ALTER TABLE `thunhap`
  ADD PRIMARY KEY (`maThuNhap`),
  ADD KEY `fk_thunhap_loaithunhap` (`maLoaiTN`),
  ADD KEY `fk_thunhap_nguoidung` (`maNguoiDung`);

--
-- Indexes for table `tietkiem`
--
ALTER TABLE `tietkiem`
  ADD PRIMARY KEY (`maTietKiem`),
  ADD KEY `fk_tietkiem_taikhoannganhang` (`maTKNganHang`),
  ADD KEY `fk_tietkiem_tknganhangnguoidung` (`maNguoiDung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitieu`
--
ALTER TABLE `chitieu`
  MODIFY `maChiTieu` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
  MODIFY `maDangKy` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaichitieu`
--
ALTER TABLE `loaichitieu`
  MODIFY `maLoaiCT` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loaithunhap`
--
ALTER TABLE `loaithunhap`
  MODIFY `maLoaiTN` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `ngansach`
--
ALTER TABLE `ngansach`
  MODIFY `maNganSach` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `taikhoannganhang`
--
ALTER TABLE `taikhoannganhang`
  MODIFY `maTKNganHang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thunhap`
--
ALTER TABLE `thunhap`
  MODIFY `maThuNhap` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tietkiem`
--
ALTER TABLE `tietkiem`
  MODIFY `maTietKiem` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitieu`
--
ALTER TABLE `chitieu`
  ADD CONSTRAINT `fk_chitieu_loaichitieu` FOREIGN KEY (`maLoaiCT`) REFERENCES `loaichitieu` (`maLoaiCT`),
  ADD CONSTRAINT `fk_chitieu_nguoidung` FOREIGN KEY (`maNguoiDung`) REFERENCES `nguoidung` (`maNguoiDung`);

--
-- Constraints for table `ngansach`
--
ALTER TABLE `ngansach`
  ADD CONSTRAINT `fk_ngansach_loaichitieu` FOREIGN KEY (`maLoaiCT`) REFERENCES `loaichitieu` (`maLoaiCT`);

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `fk_nguoidung_taikhoan` FOREIGN KEY (`maTaiKhoan`) REFERENCES `taikhoan` (`maTaiKhoan`);

--
-- Constraints for table `taikhoannganhang`
--
ALTER TABLE `taikhoannganhang`
  ADD CONSTRAINT `fk_tknganhang_nguoidung` FOREIGN KEY (`maNguoiDung`) REFERENCES `nguoidung` (`maNguoiDung`);

--
-- Constraints for table `thunhap`
--
ALTER TABLE `thunhap`
  ADD CONSTRAINT `fk_thunhap_loaithunhap` FOREIGN KEY (`maLoaiTN`) REFERENCES `loaithunhap` (`maLoaiTN`),
  ADD CONSTRAINT `fk_thunhap_nguoidung` FOREIGN KEY (`maNguoiDung`) REFERENCES `nguoidung` (`maNguoiDung`);

--
-- Constraints for table `tietkiem`
--
ALTER TABLE `tietkiem`
  ADD CONSTRAINT `fk_tietkiem_taikhoannganhang` FOREIGN KEY (`maTKNganHang`) REFERENCES `taikhoannganhang` (`maTKNganHang`),
  ADD CONSTRAINT `fk_tietkiem_tknganhangnguoidung` FOREIGN KEY (`maNguoiDung`) REFERENCES `taikhoannganhang` (`maNguoiDung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
