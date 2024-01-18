-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2024 lúc 04:03 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_svtt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `ID` int(11) NOT NULL,
  `NhomHuongDan` int(11) DEFAULT NULL,
  `TuNgayTuan_1` date DEFAULT NULL,
  `DenNgayTuan_1` date DEFAULT NULL,
  `CongViecTuan_1` varchar(255) DEFAULT NULL,
  `NhanXetTuan_1` varchar(255) DEFAULT NULL,
  `TuNgayTuan_2` date DEFAULT NULL,
  `DenNgayTuan_2` date DEFAULT NULL,
  `CongViecTuan_2` varchar(255) DEFAULT NULL,
  `NhanXetTuan_2` varchar(255) DEFAULT NULL,
  `TuNgayTuan_3` date DEFAULT NULL,
  `DenNgayTuan_3` date DEFAULT NULL,
  `CongViecTuan_3` varchar(255) DEFAULT NULL,
  `NhanXetTuan_3` varchar(255) DEFAULT NULL,
  `TuNgayTuan_4` date DEFAULT NULL,
  `DenNgayTuan_4` date DEFAULT NULL,
  `CongViecTuan_4` varchar(255) DEFAULT NULL,
  `NhanXetTuan_4` varchar(255) DEFAULT NULL,
  `TuNgayTuan_5` date DEFAULT NULL,
  `DenNgayTuan_5` date DEFAULT NULL,
  `CongViecTuan_5` varchar(255) DEFAULT NULL,
  `NhanXetTuan_5` varchar(255) DEFAULT NULL,
  `TuNgayTuan_6` date DEFAULT NULL,
  `DenNgayTuan_6` date DEFAULT NULL,
  `CongViecTuan_6` varchar(255) DEFAULT NULL,
  `NhanXetTuan_6` varchar(255) DEFAULT NULL,
  `TuNgayTuan_7` date DEFAULT NULL,
  `DenNgayTuan_7` date DEFAULT NULL,
  `CongViecTuan_7` varchar(255) DEFAULT NULL,
  `NhanXetTuan_7` varchar(255) DEFAULT NULL,
  `TuNgayTuan_8` date DEFAULT NULL,
  `DenNgayTuan_8` date DEFAULT NULL,
  `CongViecTuan_8` varchar(255) DEFAULT NULL,
  `NhanXetTuan_8` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgia`
--

CREATE TABLE `danhgia` (
  `ID` int(11) NOT NULL,
  `SinhVienID` int(11) DEFAULT NULL,
  `NhomHuongDanID` int(11) DEFAULT NULL,
  `YThucKyLuat_number` float DEFAULT NULL,
  `YThucKyLuat_text` varchar(255) DEFAULT NULL,
  `TuanThuThoiGian_number` float DEFAULT NULL,
  `TuanThuThoiGian_text` varchar(255) DEFAULT NULL,
  `KienThuc_number` float DEFAULT NULL,
  `KienThuc_text` varchar(255) DEFAULT NULL,
  `KyNangNghe_number` float DEFAULT NULL,
  `KyNangNghe_text` varchar(255) DEFAULT NULL,
  `KhaNangDocLap_number` float DEFAULT NULL,
  `KhaNangDocLap_text` varchar(255) DEFAULT NULL,
  `KhaNangNhom_number` float DEFAULT NULL,
  `KhaNangNhom_text` varchar(255) DEFAULT NULL,
  `KhaNangGiaiQuyetCongViec_number` float DEFAULT NULL,
  `KhaNangGiaiQuyetCongViec_text` varchar(255) DEFAULT NULL,
  `DanhGiaChung_number` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detai`
--

CREATE TABLE `detai` (
  `ID` int(11) NOT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `IsDeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kythuctap`
--

CREATE TABLE `kythuctap` (
  `ID` int(11) NOT NULL,
  `NgayBatDau` date DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL,
  `isDeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `ID` int(11) NOT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `KyHieu` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoihuongdan`
--

CREATE TABLE `nguoihuongdan` (
  `ID` int(11) NOT NULL,
  `HoTen` varchar(255) DEFAULT NULL,
  `SDT` varchar(11) DEFAULT NULL,
  `Email` varchar(128) DEFAULT NULL,
  `ChucDanh` varchar(255) DEFAULT NULL,
  `Phong` varchar(255) DEFAULT NULL,
  `Username` varchar(24) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Zalo` varchar(11) DEFAULT NULL,
  `Facebook` varchar(255) DEFAULT NULL,
  `Github` varchar(255) DEFAULT NULL,
  `Avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomhuongdan`
--

CREATE TABLE `nhomhuongdan` (
  `ID` int(11) NOT NULL,
  `NguoiHuongDanID` int(11) DEFAULT NULL,
  `KyThucTapID` int(11) DEFAULT NULL,
  `DeTaiID` int(11) DEFAULT NULL,
  `isDeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `ID` int(11) NOT NULL,
  `MSSV` varchar(10) DEFAULT NULL,
  `HoTen` varchar(130) DEFAULT NULL,
  `GioiTinh` varchar(11) DEFAULT NULL,
  `SDT` varchar(11) DEFAULT NULL,
  `Email` varchar(128) DEFAULT NULL,
  `DiaChi` varchar(128) DEFAULT NULL,
  `MaLop` varchar(255) DEFAULT NULL,
  `Truong` varchar(128) DEFAULT NULL,
  `Nganh` varchar(128) DEFAULT NULL,
  `Khoa` int(11) DEFAULT NULL,
  `NhomHuongDan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truong`
--

CREATE TABLE `truong` (
  `ID` int(11) NOT NULL,
  `Ten` varchar(255) DEFAULT NULL,
  `KyHieu` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `detai`
--
ALTER TABLE `detai`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `kythuctap`
--
ALTER TABLE `kythuctap`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nguoihuongdan`
--
ALTER TABLE `nguoihuongdan`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nhomhuongdan`
--
ALTER TABLE `nhomhuongdan`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_Nhomhuongdan_Nguoihuongdan` (`NguoiHuongDanID`),
  ADD KEY `FK_Nhomhuongdan_detai` (`DeTaiID`),
  ADD KEY `FK_Nhomhuongdan_kythuctap` (`KyThucTapID`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `truong`
--
ALTER TABLE `truong`
  ADD PRIMARY KEY (`ID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD CONSTRAINT `FK-Congviec_Nhomhuongdan` FOREIGN KEY (`ID`) REFERENCES `nhomhuongdan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `sinhvien` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nhomhuongdan`
--
ALTER TABLE `nhomhuongdan`
  ADD CONSTRAINT `FK_Nhomhuongdan_Nguoihuongdan` FOREIGN KEY (`NguoiHuongDanID`) REFERENCES `nguoihuongdan` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Nhomhuongdan_Sinhvien` FOREIGN KEY (`ID`) REFERENCES `sinhvien` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Nhomhuongdan_danhgia` FOREIGN KEY (`ID`) REFERENCES `danhgia` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Nhomhuongdan_detai` FOREIGN KEY (`DeTaiID`) REFERENCES `detai` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Nhomhuongdan_kythuctap` FOREIGN KEY (`KyThucTapID`) REFERENCES `kythuctap` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
