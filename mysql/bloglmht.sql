-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2017 at 10:51 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bloglmht`
--

-- --------------------------------------------------------

--
-- Table structure for table `baidang`
--

CREATE TABLE IF NOT EXISTS `baidang` (
  `id_user` int(11) NOT NULL,
  `id_bai` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `noidung` text CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci DEFAULT NULL,
  `tomtat` varchar(150) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `ngay_dang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `baidang`
--

INSERT INTO `baidang` (`id_user`, `id_bai`, `title`, `noidung`, `picture`, `tomtat`, `ngay_dang`) VALUES
(1, 1, 'ban ve hieu ung cua rengar', 'hom nay admin se viet mot bai ve Rengar sau khi duoc Riot lam lai, qua that....', NULL, 'Rengar sat thu bong toi', '2017-05-10'),
(2, 2, 'Hello bạn hiền', 'Ngày hôm qua đấy, When you are down or out of control \r\nLet my heart lead you back to my whole world \r\nThe mysterious thing by curious way \r\nThe way you go reminds me the pain \r\nAlthough we both know that we have to change \r\nJust give it, give it, give it \r\n\r\nNày em nhớ không \r\nMùa đông rét căm năm ấy mình chỉ mới quen \r\nNhìn nhau phút đầu ngập ngừng \r\nNgày ta mất nhau \r\nMùa đông vẫn mang hơi ấm cho từng đôi mới yêu \r\nLàm anh nghẹn ngào theo', NULL, 'Bài hát Ngày hôm qua', '2017-05-28'),
(1, 3, 'Bảng bổ trợ cho Riven 2017', 'abc, xyz, aa, bbb, cccc, đề ', NULL, 'Bảng mới với những thay đổi phù hợp cho 1 riven đẫ được Riot thay đổi trong năm 2017.', '2017-05-28');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id_user` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `noi_dung` text CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `id_baidang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `ten` varchar(200) NOT NULL,
  `anh` varchar(233) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `ten_tai_khoan` varchar(30) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `passwords` varchar(30) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `id_taikhoan` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`ten_tai_khoan`, `passwords`, `id_taikhoan`) VALUES
('123456', '123456', 0),
('songnuoclantan@gmail.com', '123456', 1),
('thanhcao', 'thanhcao', 3),
('tranthanhcao', '123456', 11),
('caott42@wru.vn', 'thanhcao', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
  `id_tintuc` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `tom_tat` varchar(250) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `noi_dung` text CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `ngay_dang` date NOT NULL,
  `picture` varchar(255) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`id_tintuc`, `title`, `tom_tat`, `noi_dung`, `ngay_dang`, `picture`) VALUES
(1, 'Chung Kết thế giới 2017', 'Chung kêt thế giới đã điểm, đón chờ một mùa giải đầy hấp dẫn với những đội tuyển nổi tiếng trên toàn quốc', 'Vào những năm trước Chung kết thế giới vẫn luôn là mùa giải được các game thủ chào đón nhát với nhwungx cusbuwocs nhẩy ấn tượng và không khí hồi hộp khiến độc giả không khỏi thán phục trước những pha tranh giành nhau từng tower.', '2017-05-22', 'public/cktg.jpg'),
(2, 'hello', 'nothing', 'nothing', '2017-05-31', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` int(8) NOT NULL,
  `sdt` int(12) NOT NULL,
  `icon` tinyblob,
  `id_taikhoan` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `ngaysinh`, `gioitinh`, `sdt`, `icon`, `id_taikhoan`) VALUES
(1, 'Tran Thanh Cao', '2016-12-21', 1, 979124941, '', 1),
(2, 'tranthanhcao', '2017-05-03', 1, 2147483647, NULL, 1),
(3, 'Tran thanh cao', '2017-05-21', 1, 1231231231, 0xffd8ffe000104a46494600010101006000600000ffe110e64578696600004d4d002a000000080004013b0002000000090000084a8769000400000001000008549c9d000100000012000010ccea1c00070000080c0000003e000000001cea0000000800000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` int(11) NOT NULL,
  `title` varchar(250) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `duongdan` varchar(250) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `tomtat` varchar(250) CHARACTER SET utf8 COLLATE utf8_czech_ci NOT NULL,
  `ngaydang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id_video`, `title`, `duongdan`, `tomtat`, `ngaydang`) VALUES
(1, 'Trên Con ĐƯờng Đi tìm xạ thu thứ một thế giới.', '../public/video/1.mp4', 'Ai là xạ thủ thứ 1 thế giới tong các sniper trong làng game liên minh thế giới, cùng theo dõi.', '2017-05-28'),
(2, 'Góc Nhìn Lại: Những Pha Xử Lí Thần Thánh Trong Năm 2012', '../public/video/4.mp4', 'Nothing', '2017-05-28'),
(3, 'Những Màn Solo Ảo Diệu Cấp Bậc Thế Giới.', '../public/video/3.mp4', 'Cùng ngắm lại những màn solo kill ảo diệu cấp thế giới trong các trận chung kết đầy kịch tính', '2017-05-28'),
(4, 'Màn Trình Diễn Của Xạ Thủ Thế Giới-SKTT1Bang.', '../public/video/2.mp4', 'nothing', '2017-05-28'),
(5, 'Top 6 Vị Tướng LMHT Gây Ức Chế Có Thê Cho Cả Đồng Đội.', '../public/video/5.mp4', 'Nothing', '2017-05-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baidang`
--
ALTER TABLE `baidang`
 ADD PRIMARY KEY (`id_bai`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id_comment`), ADD KEY `id_user` (`id_user`), ADD KEY `id_baidang` (`id_baidang`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
 ADD PRIMARY KEY (`id_taikhoan`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
 ADD PRIMARY KEY (`id_tintuc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`), ADD KEY `id_taikhoan` (`id_taikhoan`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
 ADD PRIMARY KEY (`id_video`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baidang`
--
ALTER TABLE `baidang`
ADD CONSTRAINT `baidang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_baidang`) REFERENCES `baidang` (`id_bai`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_taikhoan`) REFERENCES `taikhoan` (`id_taikhoan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
