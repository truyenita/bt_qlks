-- phpMyAdmin SQL Dump
-- version 4.5.3.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2016 at 09:21 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `adid` int(11) NOT NULL,
  `adname` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adimage` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adurl` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `adorder` int(11) DEFAULT NULL,
  `adleft` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`adid`, `adname`, `adimage`, `adurl`, `adorder`, `adleft`) VALUES
(3, 'Don vi truc thuoc', '/upload/images/diachat/3.png', '#', 3, 1),
(8, 'Tong cuc dia chat khoang san viet nam', '/upload/images/diachat/2.png', '#', 2, 1),
(10, 'e', '/upload/images/stp/logo%20QC%204.png', 'http://www.evntelecom.com.vn', 3, 1),
(21, 'b', '/upload/images/stp/logo%20QC%201.png', '#', 2, 0),
(22, 'thong bao niem yet', '/upload/images/stp/logo%20QC.png', 'list.php?id=90&pr=7', 1, 0),
(23, 'van ban tw', '/upload/images/stp/logo%20QC%203.png', '#', 3, 0),
(24, 'hop thu dien tu', '/upload/images/stp/Hop%20thu%20DT.png', '#', 4, 0),
(25, 'Portal BD', '/upload/images/stp/Logo%20CTTDT.png', 'http://binhdinh.gov.vn', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatid` int(11) NOT NULL,
  `yahooid` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatid`, `yahooid`, `name`) VALUES
(1, 'v.truyen', 'Há»— trá»£');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `docid` int(11) NOT NULL,
  `docno` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doctype` int(11) NOT NULL,
  `receiveddate` date DEFAULT NULL,
  `status` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `returndate` date DEFAULT NULL,
  `note` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `documentfield`
--

CREATE TABLE `documentfield` (
  `docfieldid` int(11) NOT NULL,
  `docfieldname` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `documentfield`
--

INSERT INTO `documentfield` (`docfieldid`, `docfieldname`) VALUES
(1, 'Thanh tra'),
(4, 'CÃ´ng nghá»‡ thÃ´ng tin'),
(5, 'BÃ¡o chÃ­ - Xuáº¥t báº£n'),
(6, 'BÆ°u chÃ­nh - Viá»…n thÃ´ng');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faqid` int(11) NOT NULL,
  `questioner` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci,
  `visible` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `imagelist`
--

CREATE TABLE `imagelist` (
  `imageid` int(11) NOT NULL,
  `title` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `imagelist`
--

INSERT INTO `imagelist` (`imageid`, `title`, `file`) VALUES
(34, 'h2', '/upload/images/stp/stp-b.jpg'),
(35, 'h1', '/upload/images/stp/b-qng.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lawdoc`
--

CREATE TABLE `lawdoc` (
  `docid` int(11) NOT NULL,
  `loaivb` int(1) NOT NULL,
  `docno` varchar(200) DEFAULT NULL,
  `new` tinyint(4) NOT NULL DEFAULT '0',
  `date` date DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `field` int(1) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `deptname` varchar(200) DEFAULT NULL,
  `sign` varchar(200) DEFAULT NULL,
  `abstract` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lawdoc`
--

INSERT INTO `lawdoc` (`docid`, `loaivb`, `docno`, `new`, `date`, `file`, `type`, `field`, `level`, `deptname`, `sign`, `abstract`) VALUES
(81, 1, 'abc', 1, '2013-04-03', '/upload/files/1755_QD-TTg.doc', 1, 4, 1, 'Demo', 'Demo', 'Demo');

-- --------------------------------------------------------

--
-- Table structure for table `lawdocfield`
--

CREATE TABLE `lawdocfield` (
  `fieldid` int(11) NOT NULL,
  `fieldname` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lawdocfield`
--

INSERT INTO `lawdocfield` (`fieldid`, `fieldname`) VALUES
(1, 'B&#432;u ch&#237;nh - Vi&#7877;n th&#244;ng'),
(2, 'C&#244;ng ngh&#7879; th&#244;ng tin'),
(3, 'B&#225;o ch&#237; - Xu&#7845;t b&#7843;n'),
(4, 'L&#297;nh v&#7921;c kh&#225;c');

-- --------------------------------------------------------

--
-- Table structure for table `lawdoclevel`
--

CREATE TABLE `lawdoclevel` (
  `levelid` int(10) NOT NULL,
  `levelname` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lawdoclevel`
--

INSERT INTO `lawdoclevel` (`levelid`, `levelname`) VALUES
(1, 'Trung Æ°Æ¡ng'),
(2, 'Äá»‹a phÆ°Æ¡ng');

-- --------------------------------------------------------

--
-- Table structure for table `lawdoctype`
--

CREATE TABLE `lawdoctype` (
  `typeid` int(10) NOT NULL,
  `typename` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lawdoctype`
--

INSERT INTO `lawdoctype` (`typeid`, `typename`) VALUES
(1, 'Luáº­t'),
(2, 'PhÃ¡p lá»‡nh');

-- --------------------------------------------------------

--
-- Table structure for table `lawdoc_loai`
--

CREATE TABLE `lawdoc_loai` (
  `id` int(20) NOT NULL,
  `ten` varchar(512) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lawdoc_loai`
--

INSERT INTO `lawdoc_loai` (`id`, `ten`) VALUES
(1, 'VÄƒn báº£n dá»± tháº£o'),
(2, 'VÄƒn báº£n phÃ¡p luáº­t');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `listid` int(11) NOT NULL,
  `menuid` int(11) NOT NULL,
  `listtitle` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `listcontent` text COLLATE utf8_unicode_ci NOT NULL,
  `listorder` int(11) NOT NULL,
  `file` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Luu cac muc cua trang cac lien ket';

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`listid`, `menuid`, `listtitle`, `listcontent`, `listorder`, `file`) VALUES
(15, 35, 'Biá»ƒu máº«u bÃ¡o cÃ¡o á»©ng dá»¥ng CNTT trong cÆ¡ quan nhÃ  nÆ°á»›c', '', 1, 'FormBaocaoTonghopCNTT2010.doc'),
(16, 35, 'Biá»ƒu máº«u bÃ¡o cÃ¡o á»©ng dá»¥ng CNTT trong cÃ¡c doanh nghiá»‡p', '', 2, 'FormBaocaoTonghopCNTT2010.doc'),
(34, 55, 'BÃ¡o cÃ¡o thá»©c tráº¡ng NTM', '<br />\r\n', 12, '/upload/files/Lich%20Tuan/Nongthonmoi/bao%20cao%20danh%20gia%20thuc%20trang%20NTM.doc'),
(35, 55, 'Báº£ng KH XD NTM', '<br />\r\n', 12, '/upload/files/Lich%20Tuan/Nongthonmoi/bang%20KH%20XDNTM.xls'),
(36, 55, 'BANG DIEU TRA THUC TRANG NTM TINH BINH DINH', '<br />\r\n', 12, '/upload/files/Lich%20Tuan/Nongthonmoi/BANG%20DIEU%20TRA%20THUC%20TRANG%20NTM%20TINH%20BINH%20DINH.xls'),
(37, 55, 'PHÃŠ DUYá»†T CHÆ¯Æ NG TRÃŒNH Má»¤C Quyáº¿t Ä‘á»‹nh 800/QÄ-TTg TIÃŠU QUá»C GIA Vá»€ XÃ‚Y Dá»°NG NÃ”NG THÃ”N Má»šI GIAI ÄOáº N 2010 - 2020', '<br />\r\n', 10, '/upload/files/Lich%20Tuan/Nongthonmoi/800_QD-TTg.doc'),
(38, 55, '491/QÄ-TTg Vá» viá»‡c ban hÃ nh bá»™ tiÃªu chÃ­ quá»‘c gia vá» nÃ´ng thÃ´n má»›i', '<br />\r\n', 10, '/upload/files/Lich%20Tuan/Nongthonmoi/QD491_90-TTgvetieuchinongthonmoi.doc'),
(39, 55, 'ThÃ´ng tÆ° 26/2011/TTLT-BNNPTNT-BKHÄT-BTC', '<br />\r\n', 10, '/upload/files/Lich%20Tuan/Nongthonmoi/26-2011-TTLT.doc'),
(69, 51, 'Lá»‹ch cÃ´ng tÃ¡c tuáº§n tá»« 19-12 Ä‘áº¿n 23-12-2011', '<p style="text-align: center;">\r\n	Lá»‹ch c&ocirc;ng t&aacute;c tuáº§n tá»« 19-12 Ä‘áº¿n 23-12-2011</p>\r\n<p>\r\n	<iframe frameborder="0" src="http://docs.google.com/gview?url=http://localhost:8080/stp/upload/files/piano01.pdf&amp;embedded=true" style="width: 575px; height: 800px;"></iframe></p>', 10, '/upload/files/piano01.pdf'),
(81, 68, 'Vá» vá»›i quÃª mÃ¬nh', '', 0, '/upload/files/Nhac%20Hoai%20Nhon/Ve%20voi%20que%20minh.mp3'),
(82, 68, 'Vá» HoÃ i Äá»©c cÃ¹ng anh', '<br />\r\n', 7, '/upload/files/Nhac%20Hoai%20Nhon/Ve%20Hoai%20Duc%20cung%20anh.mp3'),
(83, 68, 'Tam Quan quÃª hÆ°Æ¡ng vÃ  máº¹', '<br />\r\n', 3, '/upload/files/Nhac%20Hoai%20Nhon/Tam%20Quan%20que%20huong%20va%20me.mp3'),
(84, 68, 'QuÃª mÃ¬nh HoÃ i SÆ¡n', '<br />\r\n', 5, '/upload/files/Nhac%20Hoai%20Nhon/Que%20minh%20Hoai%20Son.mp3'),
(85, 68, 'QuÃª hÆ°Æ¡ng nÆ¡i cuá»‘i dÃ²ng sÃ´ng Láº¡i', '<br />\r\n', 4, '/upload/files/Nhac%20Hoai%20Nhon/Que%20huong%20noi%20cuoi%20dong%20song%20Lai.mp3'),
(86, 68, 'Phá»‘ thá»‹ Bá»“ng SÆ¡n', '<br />\r\n', 4, '/upload/files/Nhac%20Hoai%20Nhon/PHO%20THI%20BONG%20SON.mp3'),
(87, 68, 'NÆ°á»›c non quÃª dá»«a', '<br />\r\n', 2, '/upload/files/Nhac%20Hoai%20Nhon/Non%20nuoc%20que%20dua.mp3'),
(88, 68, 'Nhá»› Trung LÆ°Æ¡ng', '<br />\r\n', 8, '/upload/files/Nhac%20Hoai%20Nhon/Nho%20Trung%20Luong.mp3'),
(89, 68, 'HoÃ i TÃ¢n quÃª máº¹', '<br />\r\n', 9, '/upload/files/Nhac%20Hoai%20Nhon/Hoai%20Tan%20Que%20me.mp3'),
(90, 68, 'Giá»¯ trá»n tÃ¬nh quÃª', '<br />\r\n', 10, '/upload/files/Nhac%20Hoai%20Nhon/Giu%20tron%20tinh%20que.mp3'),
(91, 68, 'Äáº¥t máº¹ HoÃ i NhÆ¡n', '<br />\r\n', 11, '/upload/files/Nhac%20Hoai%20Nhon/Dat%20me%20Hoai%20Nhon.mp3'),
(115, 90, 'ThÃ´ng bÃ¡o niÃªm yáº¿t 1', '', 10, '/upload/files/file%20pdf/nam%202012/qui%20hoach/BANO%20600.jpg'),
(136, 83, 'HÃ nh chÃ­nh tÆ° phÃ¡p', '<br />\r\n', 11, '/upload/files/file%20pdf/thu%20tuc%20hanh%20chinh/Kinh%20te/Chung%20nhan%20dat%20tieu%20chi%20KT%20trang%20trai.doc');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menuid` int(11) NOT NULL,
  `menutitle` text COLLATE utf8_unicode_ci NOT NULL,
  `menutype` tinyint(4) NOT NULL,
  `parent` int(11) DEFAULT '0',
  `menuorder` int(11) DEFAULT NULL,
  `homepage` tinyint(4) NOT NULL DEFAULT '0',
  `vermenu` tinyint(4) NOT NULL DEFAULT '1',
  `hormenu` tinyint(4) NOT NULL DEFAULT '0',
  `link` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menuid`, `menutitle`, `menutype`, `parent`, `menuorder`, `homepage`, `vermenu`, `hormenu`, `link`, `content`) VALUES
(1, 'TIN Tá»¨C - Sá»° KIá»†N', 1, 0, 8, 0, 0, 1, '', ''),
(10, 'Há»ŽI ÄÃP', 7, 0, 25, 0, 0, 0, '', '<br />\r\n'),
(93, 'Dá»ŠCH Vá»¤', 2, 0, 15, 0, 0, 1, '', ''),
(94, 'KHÃCH HÃ€NG - Äá»I TÃC', 4, 0, 20, 0, 0, 1, 'newsgroup.php?id=96&pr=94', ''),
(95, 'Sáº¢N PHáº¨M', 4, 0, 22, 0, 1, 1, 'product.php?id=61&pr=95', '<br />\r\n'),
(33, 'LIÃŠN Há»†', 8, 0, 40, 0, 0, 1, '', '<br />\r\n'),
(80, 'TRANG CHá»¦', 0, 0, 1, 0, 1, 1, '', ''),
(61, 'Sáº£n pháº©m loáº¡i 1', 14, 95, 12, 1, 0, 1, '', '<br />\r\n'),
(70, 'GIá»šI THIá»†U', 2, 0, 2, 0, 0, 1, '', '<p style="box-sizing: border-box; margin: 0px 0px 15px; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; outline: 0px; padding: 0px; font-stretch: normal; line-height: 20px; color: rgb(85, 85, 85); background-color: rgb(249, 252, 255);">\r\n	Máº¡nh Nhi&ecirc;n l&agrave; Ä‘Æ¡n vá»‹ Ä‘i Ä‘áº§u trong viá»‡c lá»±a chá»n c&aacute;c Ä‘á»‘i t&aacute;c cung cáº¥p váº­t liá»‡u ti&ecirc;n tiáº¿n v&agrave; c&ocirc;ng nghá»‡ vÆ°á»£t trá»™i tá»« c&aacute;c quá»‘c gia nhÆ°: Má»¹, Thá»¥y SÄ©, Anh Quá»‘c, Cá»™ng H&ograve;a Li&ecirc;n Bang Äá»©c, Malaysia, H&agrave;n Quá»‘c&hellip; phá»¥c vá»¥ cho chuy&ecirc;n ng&agrave;nh thi c&ocirc;ng chá»‘ng tháº¥m v&agrave; sá»­a chá»¯a c&ocirc;ng tr&igrave;nh trong nÆ°á»›c.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 15px; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; outline: 0px; padding: 0px; font-stretch: normal; line-height: 20px; color: rgb(85, 85, 85); background-color: rgb(249, 252, 255);">\r\n	X&acirc;y dá»±ng c&aacute;c c&ocirc;ng tr&igrave;nh d&acirc;n dá»¥ng &amp; c&ocirc;ng nghiá»‡p, giao th&ocirc;ng, thá»§y lá»£i, thá»§y Ä‘iá»‡n v&agrave; cáº¥p tho&aacute;t nÆ°á»›c. Äáº·c biá»‡t l&agrave; c&ocirc;ng t&aacute;c thi c&ocirc;ng chá»‘ng tháº¥m v&agrave; sá»­a chá»¯a c&ocirc;ng tr&igrave;nh</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 15px; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; outline: 0px; padding: 0px; font-stretch: normal; line-height: 20px; color: rgb(85, 85, 85); background-color: rgb(249, 252, 255);">\r\n	Ch&uacute;ng t&ocirc;i kh&ocirc;ng ngá»«ng nghi&ecirc;n cá»©u, t&igrave;m t&ograve;i v&agrave; cáº­p nháº­t nhá»¯ng sáº£n pháº©m cá»§a ng&agrave;nh khoa há»c á»©ng dá»¥ng.</p>\r\n<p style="box-sizing: border-box; margin: 0px 0px 15px; border: 0px; font-family: Roboto, sans-serif; font-size: 14px; outline: 0px; padding: 0px; font-stretch: normal; line-height: 20px; color: rgb(85, 85, 85); background-color: rgb(249, 252, 255);">\r\n	Äá»“ng thá»i, &aacute;p dá»¥ng c&ocirc;ng nghá»‡ thi c&ocirc;ng chá»‘ng tháº¥m tá»‘i Æ°u nháº¥t, Ä‘áº£m báº£o Ä‘Æ°á»£c t&iacute;nh th&acirc;n thiá»‡n cá»§a váº­t liá»‡u vá»›i m&ocirc;i trÆ°á»ng sá»‘ng.</p>\r\n'),
(96, 'KhÃ¡ch hÃ ng - Ä‘á»‘i tÃ¡c', 1, 94, 11, 0, 0, 1, '', ''),
(97, 'Sáº£n pháº©m loáº¡i 2', 14, 95, 2, 1, 0, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `newsid` int(11) NOT NULL,
  `newsgroup` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagepos` tinyint(4) NOT NULL DEFAULT '1',
  `imagedes` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `shortabs` text COLLATE utf8_unicode_ci,
  `abstract` text COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approval` tinyint(4) NOT NULL DEFAULT '0',
  `topnews` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `newsgroup`, `title`, `date`, `image`, `imagepos`, `imagedes`, `shortabs`, `abstract`, `content`, `author`, `user`, `approval`, `topnews`) VALUES
(387, 61, 'Ban Quáº£n lÃ½ Khu kinh táº¿ BÃ¬nh Äá»‹nh hÆ°á»Ÿng á»©ng chÆ°Æ¡ng trÃ¬nh â€œGÃ³p Ä‘Ã¡ xÃ¢y TrÆ°á»ng Saâ€', '2013-04-03', '/upload/images/ruoubauda/r2.jpg', 1, '', NULL, 'HÆ°á»Ÿng á»©ng chÆ°Æ¡ng trÃ¬nh â€œGÃ³p Ä‘Ã¡ xÃ¢y TrÆ°á»ng Saâ€ do Trung Æ°Æ¡ng ÄoÃ n thanh niÃªn Cá»™ng sáº£n Há»“ ChÃ­ Minh vÃ  BÃ¡o Tuá»•i tráº» phÃ¡t Ä‘á»™ng, sÃ¡ng 2-4, lÃ£nh Ä‘áº¡o Ban Quáº£n lÃ½ Khu kinh táº¿ tá»‰nh BÃ¬nh Äá»‹nh Ä‘Ã£ trao sá»‘ tiá»n 21.268.000 Ä‘á»“ng cho Ä‘áº¡i diá»‡n BÃ¡o Tuá»•i tráº» táº¡i BÃ¬nh Äá»‹nh.', '<p>\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">\r\n	<span style="font-size: 12px;">Ä&acirc;y l&agrave; sá»‘ tiá»n do 150 c&aacute;n bá»™, c&ocirc;ng chá»©c, vi&ecirc;n chá»©c, ngÆ°á»i lao Ä‘á»™ng Ä‘ang l&agrave;m viá»‡c táº¡i c&aacute;c Ä‘Æ¡n vá»‹ trá»±c thuá»™c Ban Quáº£n l&yacute; Khu kinh táº¿ tá»‰nh B&igrave;nh Äá»‹nh Ä‘&oacute;ng g&oacute;p. C&ugrave;ng vá»›i viá»‡c tham gia hoáº¡t Ä‘á»™ng n&agrave;y, Ä‘o&agrave;n vi&ecirc;n thanh ni&ecirc;n Chi Ä‘o&agrave;n Ban Quáº£n l&yacute; Khu kinh táº¿ c&ograve;n t&iacute;ch cá»±c hÆ°á»Ÿng á»©ng chÆ°Æ¡ng tr&igrave;nh&nbsp;&quot;Má»—i tin nháº¯n - má»™t vi&ecirc;n Ä‘&aacute; x&acirc;y TrÆ°á»ng Sa&quot;, th&ocirc;ng qua viá»‡c má»—i Ä‘o&agrave;n vi&ecirc;n thanh ni&ecirc;n gá»­i &iacute;t nháº¥t má»™t tin nháº¯n trá»‹ gi&aacute; 16.000 Ä‘á»“ng cho chÆ°Æ¡ng tr&igrave;nh.</span></p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">\r\n	&Ocirc;ng Man Ngá»c L&yacute;, TrÆ°á»Ÿng ban Quáº£n l&yacute; Khu kinh táº¿ tá»‰nh B&igrave;nh Äá»‹nh cho biáº¿t: &ldquo;Ä&acirc;y l&agrave; m&oacute;n qu&agrave; thá»ƒ hiá»‡n táº¥m l&ograve;ng, t&igrave;nh cáº£m v&agrave; tr&aacute;ch nhiá»‡m cá»§a c&aacute;n bá»™, c&ocirc;ng chá»©c, vi&ecirc;n chá»©c, ngÆ°á»i lao Ä‘á»™ng trong Ä‘Æ¡n vá»‹ Ä‘á»‘i vá»›i viá»‡c báº£o vá»‡ chá»§ quyá»n biá»ƒn, Ä‘áº£o thi&ecirc;ng li&ecirc;ng cá»§a Tá»• quá»‘c. Th&ocirc;ng qua hoáº¡t Ä‘á»™ng n&agrave;y sáº½ g&oacute;p pháº§n tuy&ecirc;n truyá»n, gi&aacute;o dá»¥c truyá»n thá»‘ng y&ecirc;u nÆ°á»›c, tinh tháº§n v&agrave; &yacute; thá»©c s&acirc;u sáº¯c vá» báº£o vá»‡ chá»§ quyá»n biá»ƒn, Ä‘áº£o cá»§a Tá»• quá»‘c trong c&aacute;n bá»™, c&ocirc;ng chá»©c, vi&ecirc;n chá»©c, ngÆ°á»i lao Ä‘á»™ng á»Ÿ Ä‘Æ¡n vá»‹&rdquo;.</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">\r\n	ÄÆ°á»£c biáº¿t, qua 2 nÄƒm thá»±c hiá»‡n chÆ°Æ¡ng tr&igrave;nh &ldquo;G&oacute;p Ä‘&aacute; x&acirc;y TrÆ°á»ng Sa&rdquo;, Ä‘áº¿n nay, c&aacute;n bá»™, chiáº¿n sÄ©, Ä‘á»“ng b&agrave;o trong cáº£ nÆ°á»›c Ä‘&atilde; tham gia Ä‘&oacute;ng g&oacute;p hÆ¡n 56 tá»· Ä‘á»“ng, g&oacute;p pháº§n &ldquo;T&ocirc;n ná»n Tá»• quá»‘c giá»¯a Ä‘áº¡i dÆ°Æ¡ng&rdquo; v&agrave; hiá»‡n nay, chÆ°Æ¡ng tr&igrave;nh &ldquo;G&oacute;p Ä‘&aacute; x&acirc;y TrÆ°á»ng Sa&rdquo;&nbsp; váº«n Ä‘ang Ä‘Æ°á»£c tiáº¿p tá»¥c triá»ƒn khai</p>\r\n', 'ita', 'admin', 1, 1),
(388, 61, 'Chá»§ tá»‹ch UBND tá»‰nh LÃª Há»¯u Lá»™c tiáº¿p Tá»•ng lÃ£nh sá»± PhÃ¡p Ä‘áº¿n thÄƒm vÃ  lÃ m viá»‡c táº¡i BÃ¬nh Äá»‹nh', '2013-04-03', '/upload/images/ruoubauda/r2.jpg', 3, '', NULL, 'Chiá»u ngÃ y 1.4, Ã´ng Fabrice MauriÃ¨s - Tá»•ng lÃ£nh sá»± PhÃ¡p táº¡i TP Há»“ ChÃ­ Minh Ä‘Ã£ Ä‘áº¿n thÄƒm vÃ  lÃ m viá»‡c táº¡i tá»‰nh ta. Chá»§ tá»‹ch UBND tá»‰nh LÃª Há»¯u Lá»™c tiáº¿p vÃ  lÃ m viá»‡c vá»›i ngÃ i Tá»•ng lÃ£nh sá»±.', '<p>\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">\r\n	Táº¡i buá»•i tiáº¿p, Chá»§ tá»‹ch UBND tá»‰nh ch&uacute;c má»«ng má»‘i quan há»‡ tá»‘t Ä‘áº¹p giá»¯a Viá»‡t Nam v&agrave; Ph&aacute;p nh&acirc;n dá»‹p ká»· niá»‡m 40 nÄƒm thiáº¿t láº­p quan há»‡ ngoáº¡i giao Viá»‡t Nam - Ph&aacute;p (12.4.1973 - 12.4.2013). Chá»§ tá»‹ch UBND tá»‰nh mong muá»‘n L&atilde;nh sá»± qu&aacute;n Ph&aacute;p táº¡i TP Há»“ Ch&iacute; Minh há»— trá»£ th&uacute;c Ä‘áº©y c&aacute;c hoáº¡t Ä‘á»™ng há»£p t&aacute;c giá»¯a B&igrave;nh Äá»‹nh v&agrave; Ph&aacute;p, giá»›i thiá»‡u c&aacute;c nh&agrave; Ä‘áº§u tÆ°, c&aacute;c doanh nghiá»‡p cá»§a Ph&aacute;p Ä‘á»ƒ B&igrave;nh Äá»‹nh thiáº¿t láº­p quan há»‡, má»i gá»i Ä‘áº§u tÆ° v&agrave;o Ä‘á»‹a b&agrave;n tá»‰nh. Chá»§ tá»‹ch UBND tá»‰nh cÅ©ng Ä‘&atilde; giá»›i thiá»‡u kh&aacute;i qu&aacute;t vá» t&igrave;nh h&igrave;nh ph&aacute;t triá»ƒn kinh táº¿- x&atilde; há»™i cá»§a tá»‰nh; nhá»¯ng tiá»m nÄƒng, tháº¿ máº¡nh; t&igrave;nh h&igrave;nh Ä‘áº§u tÆ° v&agrave; c&aacute;c chÆ°Æ¡ng tr&igrave;nh, dá»± &aacute;n má»i gá»i Ä‘áº§u tÆ° cá»§a tá»‰nh.</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">\r\n	&nbsp;</p>\r\n<p style="margin: 0px; padding: 0px; color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif; font-size: 13px; line-height: 19px; text-align: justify;">\r\n	Trong khu&ocirc;n khá»• chuyáº¿n thÄƒm, ng&agrave;i Tá»•ng l&atilde;nh sá»± Ä‘áº·c biá»‡t quan t&acirc;m Ä‘áº¿n c&aacute;c dá»± &aacute;n thuá»™c c&aacute;c lÄ©nh vá»±c gi&aacute;o dá»¥c, cung cáº¥p nÆ°á»›c sáº¡ch v&agrave; há»‡ thá»‘ng thá»§y lá»£i; khu kinh táº¿ NhÆ¡n Há»™i; Trung t&acirc;m Quá»‘c táº¿ gáº·p gá»¡ khoa há»c Ä‘a ng&agrave;nh táº¡i phÆ°á»ng Ghá»nh R&aacute;ng, TP Quy NhÆ¡n (do Tá»• chá»©c RENCONTRES DU VIET&nbsp;NAM&nbsp;m&agrave; Gi&aacute;o sÆ° Tráº§n Thanh V&acirc;n, Viá»‡t kiá»u Ph&aacute;p l&agrave;m Chá»§ tá»‹ch)&hellip; Ng&agrave;i Tá»•ng l&atilde;nh sá»± cáº£m Æ¡n sá»± há»— trá»£, gi&uacute;p Ä‘á»¡ cá»§a tá»‰nh trong viá»‡c triá»ƒn khai x&acirc;y dá»±ng Trung t&acirc;m Quá»‘c táº¿ gáº·p gá»¡ khoa há»c Ä‘a ng&agrave;nh; Ä‘á»“ng thá»i th&ocirc;ng b&aacute;o Ch&iacute;nh phá»§ Ph&aacute;p chá»n dá»± &aacute;n x&acirc;y dá»±ng Trung t&acirc;m Quá»‘c táº¿ gáº·p gá»¡ khoa há»c Ä‘a ng&agrave;nh l&agrave; má»™t trong nhá»¯ng dá»± &aacute;n náº±m trong chuá»—i sá»± kiá»‡n ch&agrave;o má»«ng ká»· niá»‡m 40 nÄƒm thiáº¿t láº­p quan há»‡ ngoáº¡i giao Viá»‡t Nam - Ph&aacute;p.</p>\r\n', 'ita', 'admin', 1, 1),
(389, 61, 'CÃ¡c quy Ä‘á»‹nh vá» tÃ i chÃ­nh Ä‘áº¥t Ä‘ai vÃ  giÃ¡ Ä‘áº¥t cá»§a Luáº­t Ä‘áº¥t Ä‘ai nÄƒm 2013', '2013-04-03', '/upload/images/ruoubauda/r1.jpg', 1, '', NULL, 'Trong cÃ´ng tÃ¡c quáº£n lÃ½ vÃ  sá»­ dá»¥ng Ä‘áº¥t Ä‘ai, viá»‡c xÃ¡c Ä‘á»‹nh vá» tÃ i chÃ­nh Ä‘áº¥t Ä‘ai vÃ  giÃ¡ Ä‘áº¥t cÃ³ Ã½ nghÄ©a háº¿t sá»©c quan trá»ng. ÄÃ¢y chÃ­nh lÃ  cÆ¡ sá»Ÿ phÃ¡p lÃ½ Ä‘á»ƒ cÃ¡c cÆ¡ quan nhÃ  nÆ°á»›c vÃ  cÃ¡c Ä‘á»‘i tÆ°á»£ng sá»­ dá»¥ng Ä‘áº¥t thá»±c hiá»‡n nghÄ©a vá»¥ cÅ©ng nhÆ° cÃ¡c quyá»n vÃ  lá»£i Ã­ch há»£p phÃ¡p cá»§a mÃ¬nh trong quÃ¡ trÃ¬nh sá»­ dá»¥ng Ä‘áº¥t. LiÃªn quan Ä‘áº¿n váº¥n Ä‘á» tÃ i chÃ­nh Ä‘áº¥t Ä‘ai vÃ  giÃ¡ Ä‘áº¥t, thá»i gian qua ChÃ­nh phá»§ Ä‘Ã£ ban hÃ nh nhiá»u Nghá»‹ Ä‘á»‹nh quy Ä‘á»‹nh chi tiáº¿t vÃ  cÃ¡c bá»™, ngÃ nh Trung Æ°Æ¡ng cÅ©ng Ä‘Ã£ cÃ³ cÃ¡c vÄƒn báº£n hÆ°á»›ng dáº«n thi hÃ nh. CÃ¡c vÄƒn báº£n nÃ y cÅ©ng Ä‘Ã£ Ä‘Æ°á»£c thÆ°á»ng xuyÃªn tá»• chá»©c Ä‘Ã¡nh giÃ¡ vÃ  sá»­a Ä‘á»•i, bá»• sung ká»‹p thá»i Ä‘á»ƒ Ä‘Ã¡p á»©ng Ä‘Æ°á»£c yÃªu cáº§u cá»§a thá»±c tiá»…n. TrÃ¬nh tá»±, thá»§ tá»¥c xÃ¡c Ä‘á»‹nh nghÄ©a vá»¥ tÃ i chÃ­nh tiá»n sá»­ dá»¥ng Ä‘áº¥t ngÃ y cÃ ng theo hÆ°á»›ng Ä‘Æ¡n giáº£n, thuáº­n tiá»‡n, cÃ´ng khai, minh báº¡ch vÃ  giáº£m gÃ¡nh náº·ng tÃ i chÃ­nh, táº¡o Ä‘iá»u kiá»‡n cho ngÆ°á»i dÃ¢n Ä‘Æ°á»£c cáº¥p giáº¥y chá»©ng nháº­n quyá»n sá»­ dá»¥ng Ä‘áº¥t.', '<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;">Tuy nhi&ecirc;n, trong thá»i gian qua, ch&iacute;nh s&aacute;ch t&agrave;i ch&iacute;nh Ä‘áº¥t Ä‘ai, gi&aacute; Ä‘áº¥t Ä‘á»‘i vá»›i c&aacute;c Ä‘á»‘i tÆ°á»£ng sá»­ dá»¥ng Ä‘áº¥t váº«n c&ograve;n má»™t sá»‘ tá»“n táº¡i, báº¥t cáº­p, háº¡n cháº¿ nhÆ°: Há»‡ thá»‘ng vÄƒn báº£n quy pháº¡m ph&aacute;p luáº­t kh&ocirc;ng Ä‘áº£m báº£o t&iacute;nh Ä‘á»“ng bá»™, nháº¥t qu&aacute;n, á»•n Ä‘á»‹nh chÆ°a cao v&agrave; chÆ°a bao qu&aacute;t Ä‘Æ°á»£c háº¿t c&aacute;c váº¥n Ä‘á» trong thá»±c tiá»…n, nháº¥t l&agrave; khi cáº¥p giáº¥y chá»©ng nháº­n quyá»n sá»­ dá»¥ng Ä‘áº¥t cho ngÆ°á»i d&acirc;n; ChÆ°a Ä‘áº£m báº£o Ä‘Æ°á»£c sá»± c&ocirc;ng báº±ng giá»¯a c&aacute;c Ä‘á»‘i tÆ°á»£ng sá»­ dá»¥ng Ä‘áº¥t, c&ograve;n t&igrave;nh tráº¡ng ngÆ°á»i cháº¥p h&agrave;nh nghi&ecirc;m t&uacute;c ch&iacute;nh s&aacute;ch cá»§a nh&agrave; nÆ°á»›c trong má»™t sá»‘ trÆ°á»ng há»£p bá»‹ thiá»‡t th&ograve;i hÆ¡n so vá»›i ngÆ°á»i cháº¥p h&agrave;nh kh&ocirc;ng nghi&ecirc;m t&uacute;c; ChÆ°a Ä‘áº£m báº£o t&iacute;nh h&agrave;i h&ograve;a lá»£i &iacute;ch, t&iacute;nh Ä‘á»“ng bá»™, b&igrave;nh Ä‘áº³ng giá»¯a viá»‡c thu há»“i Ä‘áº¥t vá»›i viá»‡c bá»“i thÆ°á»ng, há»— trá»£ cho ngÆ°á»i c&oacute; Ä‘áº¥t bá»‹ thu há»“i; Nháº­n thá»©c cá»§a ngÆ°á»i sá»­ dá»¥ng Ä‘áº¥t cÅ©ng nhÆ° cÆ¡ quan quáº£n l&yacute;, chá»§ Ä‘áº§u tÆ° chÆ°a thá»‘ng nháº¥t vá»›i nhau bá»Ÿi c&aacute;c quy Ä‘á»‹nh cá»§a ph&aacute;p luáº­t chÆ°a r&otilde; r&agrave;ng, cá»¥ thá»ƒ n&ecirc;n nhiá»u vÆ°á»›ng máº¯c trong thá»±c tiá»…n chÆ°a Ä‘Æ°á»£c xá»­ l&yacute; tháº¥u Ä‘&aacute;o, triá»‡t Ä‘á»ƒ v&agrave; Ä‘áº£m báº£o &ldquo;tháº¥u t&igrave;nh, Ä‘áº¡t l&yacute;&rdquo; cho ngÆ°á»i d&acirc;n; Ch&iacute;nh s&aacute;ch Æ°u Ä‘&atilde;i miá»…n, giáº£m tiá»n sá»­ dá»¥ng Ä‘áº¥t cho má»™t sá»‘ Ä‘á»‘i tÆ°á»£ng náº±m ráº£i r&aacute;c, ph&acirc;n t&aacute;n á»Ÿ nhiá»u vÄƒn báº£n kh&aacute;c nhau, chÆ°a c&oacute; Ä‘áº§u má»‘i táº­p trung, thá»‘ng nháº¥t v&agrave; dáº«n Ä‘áº¿n t&igrave;nh tráº¡ng Æ°u Ä‘&atilde;i chá»“ng Æ°u Ä‘&atilde;i. á»ž má»™t sá»‘ nÆ¡i c&oacute; t&igrave;nh tráº¡ng lá»£i dá»¥ng ch&iacute;nh s&aacute;ch Æ°u Ä‘&atilde;i Ä‘á»ƒ ch&acirc;y &igrave;, cháº­m thá»±c hiá»‡n nghÄ©a vá»¥ t&agrave;i ch&iacute;nh vá»›i nh&agrave; nÆ°á»›c theo quy Ä‘á»‹nh cá»§a ph&aacute;p luáº­t&hellip;.Nhá»¯ng háº¡n cháº¿, báº¥t cáº­p n&agrave;y Ä‘&atilde; l&agrave;m áº£nh hÆ°á»Ÿng kh&ocirc;ng nhá» Ä‘áº¿n quyá»n v&agrave; lá»£i &iacute;ch há»£p ph&aacute;p cá»§a ngÆ°á»i sá»­ dá»¥ng Ä‘áº¥t cÅ©ng nhÆ° nguá»“n thu ng&acirc;n s&aacute;ch nh&agrave; nÆ°á»›c tá»« Ä‘áº¥t Ä‘ai.</span></span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;">Kháº¯c phá»¥c nhá»¯ng háº¡n cháº¿, tá»“n táº¡i n&agrave;y, Luáº­t Äáº¥t Ä‘ai nÄƒm 2013&nbsp;<span style="padding: 0px; margin: 0px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">quy Ä‘á»‹nh cá»¥&nbsp;thá»ƒ&nbsp;v&agrave;&nbsp;Ä‘áº§y Ä‘á»§ tá»«&nbsp;viá»‡c thu há»“i&nbsp;Ä‘áº¥t, bá»“i thÆ°á»ng, há»—&nbsp;trá»£&nbsp;t&aacute;i&nbsp;Ä‘á»‹nh cÆ°&nbsp;Ä‘áº£m báº£o má»™t c&aacute;ch c&ocirc;ng khai, minh báº¡ch v&agrave;&nbsp;quyá»n lá»£i cá»§a ngÆ°á»i c&oacute;&nbsp; Ä‘áº¥t thu há»“i; Vá» thu há»“i Ä‘áº¥t, bá»“i thÆ°á»ng, há»— trá»£, t&aacute;i Ä‘á»‹nh cÆ° cÅ©ng nhÆ° nguy&ecirc;n táº¯c x&aacute;c Ä‘á»‹nh vá» t&agrave;i ch&iacute;nh Ä‘áº¥t Ä‘ai, gi&aacute; Ä‘áº¥t. Theo quy Ä‘á»‹nh táº¡i Äiá»u 112 th&igrave; v</span>iá»‡c Ä‘á»‹nh gi&aacute; Ä‘áº¥t pháº£i báº£o Ä‘áº£m c&aacute;c nguy&ecirc;n táº¯c: Pháº£i theo má»¥c Ä‘&iacute;ch sá»­ dá»¥ng Ä‘áº¥t há»£p ph&aacute;p táº¡i thá»i Ä‘iá»ƒm Ä‘á»‹nh gi&aacute;; Theo thá»i háº¡n sá»­ dá»¥ng Ä‘áº¥t; Ph&ugrave; há»£p vá»›i gi&aacute; Ä‘áº¥t phá»• biáº¿n tr&ecirc;n thá»‹ trÆ°á»ng cá»§a loáº¡i Ä‘áº¥t c&oacute; c&ugrave;ng má»¥c Ä‘&iacute;ch sá»­ dá»¥ng Ä‘&atilde; chuyá»ƒn nhÆ°á»£ng, gi&aacute; tr&uacute;ng Ä‘áº¥u gi&aacute; quyá»n sá»­ dá»¥ng Ä‘áº¥t Ä‘á»‘i vá»›i nhá»¯ng nÆ¡i c&oacute; Ä‘áº¥u gi&aacute; quyá»n sá»­ dá»¥ng Ä‘áº¥t hoáº·c thu nháº­p tá»« viá»‡c sá»­ dá»¥ng Ä‘áº¥t; C&ugrave;ng má»™t thá»i Ä‘iá»ƒm, c&aacute;c thá»­a Ä‘áº¥t liá»n ká» nhau c&oacute; c&ugrave;ng má»¥c Ä‘&iacute;ch sá»­ dá»¥ng, kháº£ nÄƒng sinh lá»£i, thu nháº­p tá»« viá»‡c sá»­ dá»¥ng Ä‘áº¥t tÆ°Æ¡ng tá»± nhÆ° nhau th&igrave; c&oacute; má»©c gi&aacute; nhÆ° nhau. PhÆ°Æ¡ng ph&aacute;p Ä‘á»‹nh gi&aacute; Ä‘áº¥t do Ch&iacute;nh phá»§ quy Ä‘á»‹nh. Vá» khung gi&aacute; Ä‘áº¥t, báº£ng gi&aacute; Ä‘áº¥t th&igrave; do Ch&iacute;nh phá»§ ban h&agrave;nh Ä‘á»‹nh ká»³ 05 nÄƒm má»™t láº§n Ä‘á»‘i vá»›i tá»«ng loáº¡i Ä‘áº¥t, theo tá»«ng v&ugrave;ng. Trong thÆ¡Ì€i gian thÆ°Ì£c hi&ecirc;Ì£n khung giaÌ Ä‘&acirc;Ìt maÌ€ gi&aacute; Ä‘áº¥t ph&ocirc;Ì‰ bi&ecirc;Ìn tr&ecirc;n thá»‹ trÆ°á»ng tÄƒng tá»« 20% trá»Ÿ l&ecirc;n so vá»›i gi&aacute; tá»‘i Ä‘a hoáº·c giáº£m tá»« 20% trá»Ÿ l&ecirc;n so vá»›i gi&aacute; tá»‘i thiá»ƒu trong khung gi&aacute; Ä‘áº¥t th&igrave; Ch&iacute;nh phá»§ Ä‘iá»u chá»‰nh khung giaÌ Ä‘&acirc;Ìt cho ph&ugrave; há»£p.</span></span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;"><span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Äá»‘i vá»›i Báº£ng gi&aacute; Ä‘áº¥t v&agrave; gi&aacute; Ä‘áº¥t cá»¥ thá»ƒ</span></span><span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">&nbsp;th&igrave; Äiá»u 114 cá»§a Luáº­t quy Ä‘á»‹nh:&nbsp;</span><span style="padding: 0px; margin: 0px;">CÄƒn cá»© nguy&ecirc;n táº¯c, phÆ°Æ¡ng ph&aacute;p Ä‘á»‹nh gi&aacute; Ä‘áº¥t vaÌ€ khung gi&aacute; Ä‘áº¥t, á»¦y ban nh&acirc;n d&acirc;n cáº¥p tá»‰nh x&acirc;y dá»±ng v&agrave; tr&igrave;nh Há»™i Ä‘á»“ng nh&acirc;n d&acirc;n c&ugrave;ng cáº¥p th&ocirc;ng qua báº£ng gi&aacute; Ä‘áº¥t trÆ°á»›c khi ban h&agrave;nh. Báº£ng gi&aacute; Ä‘áº¥t Ä‘Æ°á»£c x&acirc;y dá»±ng Ä‘á»‹nh ká»³ 05 nÄƒm má»™t láº§n vaÌ€ c&ocirc;ng b&ocirc;Ì c&ocirc;ng khai vaÌ€o ngaÌ€y 01 thaÌng 01 cuÌ‰a nÄƒm Ä‘&acirc;Ì€u kyÌ€. Trong thÆ¡Ì€i gian thÆ°Ì£c hi&ecirc;Ì£n baÌ‰ng giaÌ Ä‘&acirc;Ìt, khi ChiÌnh phuÌ‰ Ä‘i&ecirc;Ì€u chiÌ‰nh khung giaÌ Ä‘&acirc;Ìt hoÄƒÌ£c giaÌ Ä‘&acirc;Ìt ph&ocirc;Ì‰ bi&ecirc;Ìn tr&ecirc;n thiÌ£ trÆ°Æ¡Ì€ng coÌ bi&ecirc;Ìn Ä‘&ocirc;Ì£ng thiÌ€ UÌ‰y ban nh&acirc;n d&acirc;n c&acirc;Ìp tiÌ‰nh Ä‘i&ecirc;Ì€u chiÌ‰nh baÌ‰ng giaÌ Ä‘&acirc;Ìt cho phuÌ€ hÆ¡Ì£p. TrÆ°á»›c khi tr&igrave;nh Há»™i Ä‘á»“ng nh&acirc;n d&acirc;n c&ugrave;ng cáº¥p th&ocirc;ng qua báº£ng gi&aacute; Ä‘áº¥t &iacute;t nháº¥t 60 ng&agrave;y, á»¦y ban nh&acirc;n d&acirc;n cáº¥p tá»‰nh gá»­i dá»± tháº£o báº£ng gi&aacute; Ä‘áº¥t Ä‘áº¿n cÆ¡ quan c&oacute; chá»©c nÄƒng x&acirc;y dá»±ng khung gi&aacute; Ä‘áº¥t xem x&eacute;t, trÆ°á»ng há»£p c&oacute; ch&ecirc;nh lá»‡ch lá»›n vá» gi&aacute; Ä‘áº¥t gi&aacute;p ranh giá»¯a c&aacute;c tá»‰nh, th&agrave;nh phá»‘ trá»±c thuá»™c trung Æ°Æ¡ng th&igrave; b&aacute;o c&aacute;o Thá»§ tÆ°á»›ng Ch&iacute;nh phá»§ quyáº¿t Ä‘á»‹nh.</span></span></span></span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;">&nbsp;Theo quy Ä‘á»‹nh th&igrave; Báº£ng gi&aacute; Ä‘áº¥t Ä‘Æ°á»£c sá»­ dá»¥ng Ä‘á»ƒ l&agrave;m cÄƒn cá»© trong c&aacute;c trÆ°á»ng há»£p: T&iacute;nh tiá»n sá»­ dá»¥ng Ä‘áº¥t khi Nh&agrave; nÆ°á»›c c&ocirc;ng nháº­n quyá»n sá»­ dá»¥ng Ä‘áº¥t á»Ÿ cá»§a há»™ gia Ä‘&igrave;nh, c&aacute; nh&acirc;n Ä‘á»‘i vá»›i pháº§n diá»‡n t&iacute;ch trong háº¡n má»©c; cho ph&eacute;p chuyá»ƒn má»¥c Ä‘&iacute;ch sá»­ dá»¥ng Ä‘áº¥t tá»« Ä‘áº¥t n&ocirc;ng nghiá»‡p, Ä‘áº¥t phi n&ocirc;ng nghiá»‡p kh&ocirc;ng pháº£i l&agrave; Ä‘áº¥t á»Ÿ sang Ä‘áº¥t á»Ÿ Ä‘á»‘i vá»›i pháº§n diá»‡n t&iacute;ch trong háº¡n má»©c giao Ä‘áº¥t á»Ÿ cho há»™ gia Ä‘&igrave;nh, c&aacute; nh&acirc;n; T&iacute;nh thuáº¿ sá»­ dá»¥ng Ä‘áº¥t; T&iacute;nh ph&iacute; v&agrave; lá»‡ ph&iacute; trong quáº£n l&yacute;, sá»­ dá»¥ng Ä‘áº¥t Ä‘ai; T&iacute;nh tiá»n xá»­ pháº¡t vi pháº¡m h&agrave;nh ch&iacute;nh trong lÄ©nh vá»±c Ä‘áº¥t Ä‘ai; T&iacute;nh tiá»n bá»“i thÆ°á»ng cho Nh&agrave; nÆ°á»›c khi g&acirc;y thiá»‡t háº¡i trong quáº£n l&yacute; v&agrave; sá»­ dá»¥ng Ä‘áº¥t Ä‘ai; T&iacute;nh gi&aacute; trá»‹ quyá»n sá»­ dá»¥ng Ä‘áº¥t Ä‘á»ƒ tráº£ cho ngÆ°á»i tá»± nguyá»‡n tráº£ láº¡i Ä‘áº¥t cho Nh&agrave; nÆ°á»›c Ä‘á»‘i vá»›i trÆ°á»ng há»£p Ä‘áº¥t tráº£ láº¡i l&agrave; Ä‘áº¥t Nh&agrave; nÆ°á»›c giao Ä‘áº¥t c&oacute; thu tiá»n sá»­ dá»¥ng Ä‘áº¥t, c&ocirc;ng nháº­n quyá»n sá»­ dá»¥ng Ä‘áº¥t c&oacute; thu tiá»n sá»­ dá»¥ng Ä‘áº¥t, Ä‘áº¥t thu&ecirc; tráº£ tiá»n thu&ecirc; Ä‘áº¥t má»™t láº§n cho cáº£ thá»i gian thu&ecirc;.</span></span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;">Vá» tháº©m quyá»n th&igrave; á»¦y ban nh&acirc;n d&acirc;n cáº¥p tá»‰nh quyáº¿t Ä‘á»‹nh gi&aacute; Ä‘áº¥t cá»¥ thá»ƒ. CÆ¡ quan quáº£n l&yacute; Ä‘áº¥t Ä‘ai cáº¥p tá»‰nh coÌ traÌch nhi&ecirc;Ì£m giuÌp UÌ‰y ban nh&acirc;n d&acirc;n c&acirc;Ìp tiÌ‰nh tá»• chá»©c viá»‡c xaÌc Ä‘iÌ£nh giaÌ Ä‘&acirc;Ìt cuÌ£ th&ecirc;Ì‰. Trong qu&aacute; tr&igrave;nh thá»±c hiá»‡n, cÆ¡ quan quáº£n l&yacute; Ä‘áº¥t Ä‘ai cáº¥p tá»‰nh Ä‘Æ°á»£c thu&ecirc; tá»• chá»©c c&oacute; chá»©c nÄƒng tÆ° váº¥n x&aacute;c Ä‘á»‹nh gi&aacute; Ä‘áº¥t Ä‘á»ƒ tÆ° váº¥n x&aacute;c Ä‘á»‹nh gi&aacute; Ä‘áº¥t cá»¥ thá»ƒ. Viá»‡c x&aacute;c Ä‘á»‹nh gi&aacute; Ä‘áº¥t cá»¥ thá»ƒ pháº£i dá»±a tr&ecirc;n cÆ¡ sá»Ÿ Ä‘iá»u tra, thu tháº­p th&ocirc;ng tin vá» thá»­a Ä‘áº¥t, gi&aacute; Ä‘áº¥t thá»‹ trÆ°á»ng v&agrave; th&ocirc;ng tin vá» gi&aacute; Ä‘áº¥t trong cÆ¡ sá»Ÿ dá»¯ liá»‡u Ä‘áº¥t Ä‘ai; &aacute;p dá»¥ng phÆ°Æ¡ng ph&aacute;p Ä‘á»‹nh gi&aacute; Ä‘áº¥t ph&ugrave; há»£p. CÄƒn cá»© káº¿t quáº£ tÆ° váº¥n x&aacute;c Ä‘á»‹nh gi&aacute; Ä‘áº¥t, cÆ¡ quan quáº£n l&yacute; Ä‘áº¥t Ä‘ai cáº¥p tá»‰nh tr&igrave;nh Há»™i Ä‘á»“ng tháº©m Ä‘á»‹nh gi&aacute; Ä‘áº¥t xem x&eacute;t trÆ°á»›c khi tr&igrave;nh á»¦y ban nh&acirc;n d&acirc;n c&ugrave;ng cáº¥p quyáº¿t Ä‘á»‹nh. Gi&aacute; Ä‘áº¥t cá»¥ thá»ƒ Ä‘Æ°Æ¡Ì£c sÆ°Ì‰ duÌ£ng Ä‘á»ƒ l&agrave;m cÄƒn cá»© trong c&aacute;c trÆ°á»ng há»£p sau Ä‘&acirc;y: T&iacute;nh tiá»n sá»­ dá»¥ng Ä‘áº¥t khi Nh&agrave; nÆ°á»›c c&ocirc;ng nháº­n quyá»n sá»­ dá»¥ng Ä‘áº¥t cá»§a há»™ gia Ä‘&igrave;nh, c&aacute; nh&acirc;n Ä‘á»‘i vá»›i pháº§n diá»‡n t&iacute;ch Ä‘áº¥t á»Ÿ vÆ°á»£t háº¡n má»©c; cho ph&eacute;p chuyá»ƒn má»¥c Ä‘&iacute;ch sá»­ dá»¥ng Ä‘áº¥t tá»« Ä‘áº¥t n&ocirc;ng nghiá»‡p, Ä‘áº¥t phi n&ocirc;ng nghiá»‡p kh&ocirc;ng pháº£i l&agrave; Ä‘áº¥t á»Ÿ sang Ä‘áº¥t á»Ÿ Ä‘á»‘i vá»›i pháº§n diá»‡n t&iacute;ch vÆ°á»£t háº¡n má»©c giao Ä‘áº¥t á»Ÿ cho há»™ gia Ä‘&igrave;nh, c&aacute; nh&acirc;n. T&iacute;nh tiá»n thu&ecirc; Ä‘áº¥t Ä‘á»‘i vá»›i Ä‘áº¥t n&ocirc;ng nghiá»‡p vÆ°á»£t háº¡n má»©c giao Ä‘áº¥t, vÆ°á»£t háº¡n má»©c nháº­n chuyá»ƒn quyá»n sá»­ dá»¥ng Ä‘áº¥t n&ocirc;ng nghiá»‡p cá»§a há»™ gia Ä‘&igrave;nh, c&aacute; nh&acirc;n; T&iacute;nh tiá»n sá»­ dá»¥ng Ä‘áº¥t khi Nh&agrave; nÆ°á»›c giao Ä‘áº¥t c&oacute; thu tiá»n sá»­ dá»¥ng Ä‘áº¥t kh&ocirc;ng th&ocirc;ng qua h&igrave;nh thá»©c Ä‘áº¥u gi&aacute; quyá»n sá»­ dá»¥ng Ä‘áº¥t; c&ocirc;ng nháº­n quyá»n sá»­ dá»¥ng Ä‘áº¥t, cho ph&eacute;p chuyá»ƒn má»¥c Ä‘&iacute;ch sá»­ dá»¥ng Ä‘áº¥t Ä‘á»‘i vá»›i tá»• chá»©c m&agrave; pháº£i ná»™p tiá»n sá»­ dá»¥ng Ä‘áº¥t; T&iacute;nh tiá»n thu&ecirc; Ä‘áº¥t Ä‘á»‘i vá»›i trÆ°á»ng há»£p Nh&agrave; nÆ°á»›c cho thu&ecirc; Ä‘áº¥t kh&ocirc;ng th&ocirc;ng qua h&igrave;nh thá»©c Ä‘áº¥u gi&aacute; quyá»n sá»­ dá»¥ng Ä‘áº¥t; T&iacute;nh gi&aacute; trá»‹ quyá»n sá»­ dá»¥ng Ä‘áº¥t khi cá»• pháº§n h&oacute;a doanh nghiá»‡p nh&agrave; nÆ°á»›c m&agrave; doanh nghiá»‡p cá»• pháº§n sá»­ dá»¥ng Ä‘áº¥t thuá»™c trÆ°á»ng há»£p Nh&agrave; nÆ°á»›c giao Ä‘áº¥t c&oacute; thu tiá»n sá»­ dá»¥ng Ä‘áº¥t, cho thu&ecirc; Ä‘áº¥t tráº£ tiá»n thu&ecirc; Ä‘áº¥t má»™t láº§n cho cáº£ thá»i gian thu&ecirc;; t&iacute;nh tiá»n thu&ecirc; Ä‘áº¥t Ä‘á»‘i vá»›i trÆ°á»ng há»£p doanh nghiá»‡p nh&agrave; nÆ°á»›c cá»• pháº§n h&oacute;a Ä‘Æ°á»£c Nh&agrave; nÆ°á»›c cho thu&ecirc; Ä‘áº¥t tráº£ tiá»n thu&ecirc; Ä‘áº¥t h&agrave;ng nÄƒm; T&iacute;nh tiá»n bá»“i thÆ°á»ng khi Nh&agrave; nÆ°á»›c thu há»“i Ä‘áº¥t.</span></span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;"><span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">Má»™t quy Ä‘á»‹nh bá»• sung c&oacute; &yacute; nghÄ©a quan trá»ng Ä‘á»ƒ nháº±m Ä‘áº£m báº£o t&iacute;nh ch&iacute;nh x&aacute;c trong viá»‡c x&aacute;c Ä‘á»‹nh gi&aacute; Ä‘áº¥t l&agrave; Luáº­t quy Ä‘á»‹nh r&otilde; vá» cÆ¡ quan x&acirc;y dá»±ng, cÆ¡ quan tháº©m Ä‘á»‹nh gi&aacute; Ä‘áº¥t v&agrave; nháº¥t l&agrave; vá»‹ tr&iacute;, &yacute; nghÄ©a cá»§a c&ocirc;ng t&aacute;c tÆ° váº¥n TÆ° váº¥n x&aacute;c Ä‘á»‹nh gi&aacute; Ä‘áº¥t</span></span><span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;">&nbsp;v&agrave; vai tr&ograve; cá»§a tá»• chá»©c c&oacute; chá»©c nÄƒng tÆ° váº¥n x&aacute;c Ä‘á»‹nh gi&aacute; Ä‘áº¥t. Theo quy Ä‘á»‹nh táº¡i Äiá»u 115 cá»§a Luáº­t th&igrave; t</span><span style="padding: 0px; margin: 0px;">Æ° váº¥n x&aacute;c Ä‘á»‹nh gi&aacute; Ä‘áº¥t Ä‘Æ°á»£c thá»±c hiá»‡n trong c&aacute;c trÆ°á»ng há»£p: Khi x&acirc;y dá»±ng, Ä‘iá»u chá»‰nh khung gi&aacute; Ä‘áº¥t; x&acirc;y dá»±ng, Ä‘iá»u chá»‰nh báº£ng gi&aacute; Ä‘áº¥t v&agrave; Ä‘á»‹nh gi&aacute; Ä‘áº¥t cá»¥ thá»ƒ m&agrave; cÆ¡ quan nh&agrave; nÆ°á»›c c&oacute; tháº©m quyá»n c&oacute; y&ecirc;u cáº§u; Khi giáº£i quyáº¿t khiáº¿u náº¡i vá» gi&aacute; Ä‘áº¥t theo y&ecirc;u cáº§u cá»§a cÆ¡ quan nh&agrave; nÆ°á»›c c&oacute; tháº©m quyá»n, c&aacute;c b&ecirc;n c&oacute; li&ecirc;n quan; &nbsp;Khi thá»±c hiá»‡n giao dá»‹ch d&acirc;n sá»± li&ecirc;n quan Ä‘áº¿n gi&aacute; Ä‘áº¥t cá»¥ thá»ƒ m&agrave; c&aacute;c b&ecirc;n c&oacute; y&ecirc;u cáº§u. Viá»‡c x&aacute;c Ä‘á»‹nh gi&aacute; Ä‘áº¥t cá»§a tÆ° váº¥n x&aacute;c Ä‘á»‹nh gi&aacute; Ä‘áº¥t pháº£i Ä‘á»™c láº­p, kh&aacute;ch quan, trung thá»±c v&agrave; tu&acirc;n theo nguy&ecirc;n táº¯c, phÆ°Æ¡ng ph&aacute;p Ä‘á»‹nh gi&aacute; Ä‘áº¥t pháº£i tu&acirc;n thá»§ Ä‘&uacute;ng quy Ä‘á»‹nh cá»§a Luáº­t Ä‘áº¥t Ä‘ai v&agrave; gi&aacute; Ä‘áº¥t do tÆ° váº¥n x&aacute;c Ä‘á»‹nh l&agrave; má»™t trong c&aacute;c cÄƒn cá»© Ä‘á»ƒ cÆ¡ quan nh&agrave; nÆ°á»›c c&oacute; tháº©m quyá»n quy Ä‘á»‹nh, quyáº¿t Ä‘á»‹nh gi&aacute; Ä‘áº¥t.</span></span></span></span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;"><span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Vá»›i nhá»¯ng quy Ä‘á»‹nh ráº¥t chi tiáº¿t cá»§a Luáº­t nhÆ° Ä‘&atilde; n&ecirc;u tr&ecirc;n sáº½ háº¡n cháº¿ Ä‘Æ°á»£c báº¥t cáº­p cá»§a Luáº­t Äáº¥t Ä‘ai 2003 v&agrave; má»™t sá»‘ Nghá»‹ Ä‘á»‹nh, Th&ocirc;ng tÆ°, quy Ä‘á»‹nh c&oacute; li&ecirc;n quan Ä‘áº¿n váº¥n Ä‘á» t&agrave;i ch&iacute;nh vá» Ä‘áº¥t Ä‘ai, gi&aacute; Ä‘áº¥t. Qua Ä‘&oacute;, Ä‘áº£m báº£o viá»‡c khai th&aacute;c hiá»‡u quáº£ nguá»“n lá»±c t&agrave;i ch&iacute;nh tá»« Ä‘áº¥t Ä‘ai má»™t c&aacute;ch bá»n vá»¯ng, hiá»‡u quáº£; táº¡o láº­p thá»‹ trÆ°á»ng báº¥t Ä‘á»™ng sáº£n ph&ugrave; há»£p vá»›i y&ecirc;u cáº§u l&agrave; má»™t thá»‹ trÆ°á»ng cáº¡nh tranh, minh báº¡ch c&oacute; sá»± Ä‘iá»u tiáº¿t cá»§a Nh&agrave; nÆ°á»›c. Äáº£m báº£o h&agrave;i h&ograve;a lá»£i &iacute;ch cá»§a Nh&agrave; nÆ°á»›c, chá»§ Ä‘áº§u tÆ° v&agrave; ngÆ°á»i sá»­ dá»¥ng Ä‘áº¥t trong viá»‡c bá»“i thÆ°á»ng, há»— trá»£ khi thu há»“i Ä‘áº¥t&nbsp;</span><span style="padding: 0px; margin: 0px;">v&igrave; má»¥c Ä‘&iacute;ch quá»‘c ph&ograve;ng, an ninh; ph&aacute;t triá»ƒn kinh táº¿ - x&atilde; há»™i<b style="padding: 0px; margin: 0px;">&nbsp;</b>v&igrave;<b style="padding: 0px; margin: 0px;">&nbsp;</b>lá»£i &iacute;ch quá»‘c gia, c&ocirc;ng cá»™ng,&nbsp;<span style="padding: 0px; margin: 0px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Ä‘áº§u tÆ° ph&aacute;t triá»ƒn kinh táº¿ x&atilde; há»™i. Nháº¥t l&agrave; sáº½ giáº£i quyáº¿t v&agrave; giáº£m thiá»ƒu Ä‘Æ°á»£c c&aacute;c vá»¥ viá»‡c khiáº¿u náº¡i, tá»‘ c&aacute;o cá»§a c&ocirc;ng d&acirc;n li&ecirc;n quan Ä‘áº¿n Ä‘áº¥t Ä‘ai nhÆ° trong thá»i gian qua./.&nbsp;</span></span></span></span></span></div>\r\n', 'LÃª Kim Chinh', 'admin', 1, 1),
(394, 1, 'Sá»Ÿ TÆ° phÃ¡p: Ban hÃ nh Káº¿ hoáº¡ch tuyÃªn truyá»n, phá»• biáº¿n Luáº­t HÃ²a giáº£i á»Ÿ cÆ¡ sá»Ÿ nÄƒm 2014', '2014-07-21', '/upload/images/xttm/banhtrangnuocdua1.jpg', 1, '', NULL, 'Thá»±c hiá»‡n Quyáº¿t Ä‘á»‹nh sá»‘ 3727/QÄ-UBND ngÃ y 06/12/2013 cá»§a UBND tá»‰nh BÃ¬nh Äá»‹nh vá» viá»‡c ban hÃ nh Káº¿ hoáº¡ch triá»ƒn khai thá»±c hiá»‡n Luáº­t hÃ²a giáº£i á»Ÿ cÆ¡ sá»Ÿ trÃªn Ä‘á»‹a bÃ n tá»‰nh, vá»«a qua, Sá»Ÿ TÆ° phÃ¡p Ä‘Ã£ ban hÃ nh Káº¿ hoáº¡ch tuyÃªn truyá»n, phá»• biáº¿n Luáº­t HÃ²a giáº£i á»Ÿ cÆ¡ sá»Ÿ nÄƒm 2014', '<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;">Theo Káº¿ hoáº¡ch, trong th&aacute;ng 6/2014, Sá»Ÿ TÆ° ph&aacute;p sáº½ tá»• chá»©c 03 lá»›p táº­p huáº¥n vá» h&ograve;a giáº£i á»Ÿ cÆ¡ sá»Ÿ táº¡i c&aacute;c huyá»‡n: T&acirc;y SÆ¡n, Ph&ugrave; C&aacute;t v&agrave; Ph&ugrave; Má»¹; má»—i lá»›p gá»“m 70 h&ograve;a giáº£i vi&ecirc;n á»Ÿ cÆ¡ sá»Ÿ.</span></span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;">Qu&yacute; III/2014, Sá»Ÿ TÆ° ph&aacute;p tá»• chá»©c bi&ecirc;n soáº¡n, ph&aacute;t h&agrave;nh 3.000 cuá»‘n t&agrave;i liá»‡u há»i Ä‘&aacute;p ph&aacute;p luáº­t vá» h&ograve;a giáº£i á»Ÿ cÆ¡ sá»Ÿ Ä‘á»ƒ cáº¥p ph&aacute;t cho c&aacute;n bá»™, c&ocirc;ng chá»©c, vi&ecirc;n chá»©c, ngÆ°á»i l&agrave;m c&ocirc;ng t&aacute;c h&ograve;a giáº£i á»Ÿ cÆ¡ sá»Ÿ v&agrave; nh&acirc;n d&acirc;n tr&ecirc;n Ä‘á»‹a b&agrave;n tá»‰nh.</span></span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;">Má»¥c Ä‘&iacute;ch cá»§a Káº¿ hoáº¡ch l&agrave; nháº±m phá»• biáº¿n s&acirc;u rá»™ng má»¥c Ä‘&iacute;ch, &yacute; nghÄ©a cá»§a c&ocirc;ng t&aacute;c h&ograve;a giáº£i á»Ÿ cÆ¡ sá»Ÿ trong viá»‡c giáº£i quyáº¿t c&aacute;c tranh cháº¥p, m&acirc;u thuáº«n v&agrave; giá»¯ g&igrave;n sá»± Ä‘o&agrave;n káº¿t; g&oacute;p pháº§n giáº£m thiá»ƒu sá»‘ lÆ°á»£ng c&aacute;c vá»¥, viá»‡c tranh cháº¥p, khiáº¿u náº¡i trong nh&acirc;n d&acirc;n; Ä‘áº£m báº£o tráº­t tá»± an to&agrave;n x&atilde; há»™i, táº¡o sá»± á»•n Ä‘á»‹nh, th&uacute;c Ä‘áº©y kinh táº¿-x&atilde; há»™i ph&aacute;t triá»ƒn./.</span></span></div>\r\n', 'Má»¹ Cáº©m', 'admin', 1, 0),
(395, 1, 'Thá»±c hiá»‡n Äá» Ã¡n â€œTÄƒng cÆ°á»ng cÃ´ng tÃ¡c phá»• biáº¿n, giÃ¡o dá»¥c phÃ¡p luáº­t táº¡i má»™t sá»‘ Ä‘á»‹a bÃ n trá»ng Ä‘iá»ƒm vá» vi pháº¡m phÃ¡p luáº­t giai Ä‘oáº¡n 2014-2016â€ trÃªn Ä‘á»‹a bÃ n tá»‰nh', '2014-07-21', '/upload/images/xttm/269.gif', 1, '', NULL, 'UBND tá»‰nh vá»«a ban hÃ nh Káº¿ hoáº¡ch thá»±c hiá»‡n Äá» Ã¡n â€œTÄƒng cÆ°á»ng cÃ´ng tÃ¡c phá»• biáº¿n, giÃ¡o dá»¥c phÃ¡p luáº­t (PBGDPL) táº¡i má»™t sá»‘ Ä‘á»‹a bÃ n trá»ng Ä‘iá»ƒm vá» vi pháº¡m phÃ¡p luáº­t giai Ä‘oáº¡n 2014-2016â€ trÃªn Ä‘á»‹a bÃ n tá»‰nh.', '<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm; vertical-align: middle; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);">Má»¥c ti&ecirc;u cá»§a Äá» &aacute;n l&agrave; pháº¥n Ä‘áº¥u Ä‘áº¿n nÄƒm 2016 c&oacute; 100% c&aacute;n bá»™, c&ocirc;ng chá»©c, nhá»¯ng ngÆ°á»i l&agrave;m c&ocirc;ng t&aacute;c PBGDPL, h&ograve;a giáº£i cÆ¡ sá»Ÿ Ä‘Æ°á»£c trang bá»‹ kiáº¿n thá»©c ph&aacute;p luáº­t v&agrave; ká»¹ nÄƒng, nghiá»‡p vá»¥ PBGDPL vá» c&aacute;c lÄ©nh vá»±c ph&aacute;p luáº­t li&ecirc;n quan; 70% Nh&acirc;n d&acirc;n táº¡i Ä‘á»‹a b&agrave;n trá»ng Ä‘iá»ƒm Ä‘Æ°á»£c phá»• biáº¿n, hÆ°á»›ng dáº«n thá»±c hiá»‡n quy Ä‘á»‹nh ph&aacute;p luáº­t nháº±m n&acirc;ng cao &yacute; thá»©c cháº¥p h&agrave;nh ph&aacute;p luáº­t, ká»¹ nÄƒng á»©ng xá»­ ph&aacute;p luáº­t cá»§a c&aacute;n bá»™, c&ocirc;ng chá»©c, Nh&acirc;n d&acirc;n; pháº¥n Ä‘áº¥u kiá»m cháº¿ v&agrave; l&agrave;m giáº£m tá»« 10-15% sá»‘ ngÆ°á»i vi pháº¡m ph&aacute;p luáº­t v&agrave; sá»‘ vá»¥ vi pháº¡m ph&aacute;p luáº­t táº¡i Ä‘á»‹a b&agrave;n trá»ng Ä‘iá»ƒm.</span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm; vertical-align: middle; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);">Theo Ä‘&oacute;, giai Ä‘oáº¡n 2014-2015, B&igrave;nh Äá»‹nh thá»±c hiá»‡n chá»‰ Ä‘áº¡o Ä‘iá»ƒm á»Ÿ 10 Ä‘á»‹a b&agrave;n x&atilde;, phÆ°á»ng, thá»‹ tráº¥n thuá»™c 05 huyá»‡n, th&agrave;nh phá»‘; giai Ä‘oáº¡n 2015-2016 sáº½ nh&acirc;n rá»™ng tr&ecirc;n Ä‘á»‹a b&agrave;n tá»‰nh.</span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm; vertical-align: middle; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);">Äá»‘i tÆ°á»£ng thá»±c hiá»‡n chá»§ yáº¿u l&agrave; c&aacute;n bá»™, c&ocirc;ng chá»©c v&agrave;</span><span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);">&nbsp;ngÆ°á»i l&agrave;m c&ocirc;ng t&aacute;c PBGDPL, h&ograve;a giáº£i vi&ecirc;n; Nh&acirc;n d&acirc;n, há»c sinh, sinh vi&ecirc;n táº¡i Ä‘á»‹a b&agrave;n trá»ng Ä‘iá»ƒm. C&aacute;c Ä‘á»‘i tÆ°á»£ng nghiá»‡n ma t&uacute;y, c&oacute; tiá»n &aacute;n, tiá»n sá»± hoáº·c c&oacute; nguy cÆ¡ pháº¡m tá»™i cao, trá»ng t&acirc;m l&agrave; c&aacute;c Ä‘á»‘i tÆ°á»£ng náº±m trong diá»‡n quáº£n l&yacute; nghiá»‡p vá»¥ cá»§a lá»±c lÆ°á»£ng c&ocirc;ng an; Ä‘á»‘i tÆ°á»£ng c&oacute; tr&igrave;nh Ä‘á»™ nháº­n thá»©c v&agrave; vÄƒn h&oacute;a háº¡n cháº¿; c&aacute;c doanh nghiá»‡p, cÆ¡ sá»Ÿ sáº£n xuáº¥t, kinh doanh Ä‘&oacute;ng tr&ecirc;n Ä‘á»‹a b&agrave;n trá»ng Ä‘iá»ƒm.</span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm; vertical-align: middle; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);">Giáº£i ph&aacute;p thá»±c hiá»‡n gá»“m: Tá»• chá»©c phá»• biáº¿n ph&aacute;p luáº­t trá»±c tiáº¿p th&ocirc;ng qua c&aacute;c há»™i nghá»‹ táº­p huáº¥n, bá»“i dÆ°á»¡ng kiáº¿n thá»©c ph&aacute;p luáº­t, c&aacute;c cuá»™c há»p táº¡i khu d&acirc;n cÆ°; bi&ecirc;n soáº¡n t&agrave;i liá»‡u; tá»• chá»©c thi t&igrave;m hiá»ƒu ph&aacute;p&nbsp;luáº­t; PBGDPL tr&ecirc;n há»‡ thá»‘ng ph&aacute;t thanh, truyá»n h&igrave;nh cá»§a Ä‘á»‹a phÆ°Æ¡ng, loa truyá»n thanh cÆ¡ sá»Ÿ; ph&aacute;t hiá»‡n, biá»ƒu dÆ°Æ¡ng, nh&acirc;n rá»™ng c&aacute;c gÆ°Æ¡ng Ä‘iá»ƒn h&igrave;nh ti&ecirc;n tiáº¿n trong viá»‡c cháº¥p h&agrave;nh v&agrave; thá»±c hiá»‡n ph&aacute;p luáº­t táº¡i c&aacute;c Ä‘á»‹a b&agrave;n trá»ng Ä‘iá»ƒm v&agrave; c&aacute;c h&igrave;nh thá»©c PBGDPL kh&aacute;c ph&ugrave; há»£p, c&oacute; hiá»‡u quáº£ á»Ÿ Ä‘á»‹a phÆ°Æ¡ng./.</span></div>\r\n', 'Má»¹ Cáº©m', 'admin', 1, 0),
(396, 1, 'UBND tá»‰nh BÃ¬nh Äá»‹nh: Ban hÃ nh Káº¿ hoáº¡ch truyá»n thÃ´ng, phá»• biáº¿n vá» cháº¿ Ä‘á»‹nh Thá»«a phÃ¡t láº¡i trÃªn Ä‘á»‹a bÃ n tá»‰nh', '2014-07-21', '/upload/images/xttm/Banh%20it%20la%20gai.jpg', 1, '', NULL, 'Vá»«a qua, UBND tá»‰nh BÃ¬nh Äá»‹nh Ä‘Ã£ ban hÃ nh Quyáº¿t Ä‘á»‹nh sá»‘ 1479/QÄ-UBND kÃ¨m Káº¿ hoáº¡ch truyá»n thÃ´ng, phá»• biáº¿n vá» cháº¿ Ä‘á»‹nh Thá»«a phÃ¡t láº¡i trÃªn Ä‘á»‹a bÃ n tá»‰nh.', '<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 36pt;">\r\n	<span style="color:#000;"><span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px; font-family: Arial;">Theo Ä‘&oacute;, c&aacute;c sá»Ÿ, ban, ng&agrave;nh, Ä‘o&agrave;n thá»ƒ tá»‰nh, UBND c&aacute;c huyá»‡n, thá»‹ x&atilde;, th&agrave;nh phá»‘ v&agrave; c&aacute;c cÆ¡ quan, tá»• chá»©c c&oacute; li&ecirc;n quan tá»• chá»©c truyá»n th&ocirc;ng, phá»• biáº¿n vá»:Vá»‹ tr&iacute;, vai tr&ograve;, &yacute; nghÄ©a, nhá»¯ng t&aacute;c Ä‘á»™ng t&iacute;ch cá»±c v&agrave; sá»± cáº§n thiáº¿t cá»§a Thá»«a ph&aacute;t láº¡i trong Ä‘á»i sá»‘ng ph&aacute;p l&yacute; hiá»‡n nay. Chá»§ trÆ°Æ¡ng, ch&iacute;nh s&aacute;ch cá»§a Äáº£ng, Nh&agrave; nÆ°á»›c vá» Thá»«a ph&aacute;t láº¡i v&agrave; c&aacute;c quy Ä‘á»‹nh ph&aacute;p luáº­t, c&aacute;c vÄƒn báº£n li&ecirc;n quan Ä‘áº¿n th&iacute; Ä‘iá»ƒm cháº¿ Ä‘á»‹nh Thá»«a ph&aacute;t láº¡i.Chá»©c nÄƒng, nhiá»‡m vá»¥ v&agrave; quyá»n háº¡n cá»§a Thá»«a ph&aacute;t láº¡i; cÆ¡ cháº¿ hoáº¡t Ä‘á»™ng, phá»‘i há»£p giá»¯a c&aacute;c cÆ¡ quan, tá»• chá»©c c&oacute; li&ecirc;n quan vá»›i VÄƒn ph&ograve;ng Thá»«a ph&aacute;t láº¡i trong qu&aacute; tr&igrave;nh triá»ƒn khai thá»±c hiá»‡n chá»©c nÄƒng, nhiá»‡m vá»¥, quyá»n háº¡n. T&igrave;nh h&igrave;nh v&agrave; káº¿t quáº£ thá»±c hiá»‡n th&iacute; Ä‘iá»ƒm cháº¿ Ä‘á»‹nh Thá»«a ph&aacute;t láº¡i; nhá»¯ng vÆ°á»›ng máº¯c, báº¥t cáº­p náº£y sinh tá»« thá»±c tiá»…n triá»ƒn khai thá»±c hiá»‡n th&iacute; Ä‘iá»ƒm cháº¿ Ä‘á»‹nh n&agrave;y.Quyá»n v&agrave; nghÄ©a vá»¥ cá»§a ngÆ°á»i d&acirc;n v&agrave; doanh nghiá»‡p cÅ©ng nhÆ° c&aacute;ch thá»©c sá»­ dá»¥ng dá»‹ch vá»¥ Thá»«a ph&aacute;t láº¡i.</span></span></span></span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 36pt;">\r\n	<span style="color:#000;"><span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px; font-family: Arial;">Má»¥c Ä‘&iacute;ch cá»§a Káº¿ hoáº¡ch l&agrave; nháº±m n&acirc;ng cao nháº­n thá»©c cá»§a c&aacute;n bá»™, c&ocirc;ng chá»©c, vi&ecirc;n chá»©c v&agrave; Nh&acirc;n d&acirc;n tr&ecirc;n Ä‘á»‹a b&agrave;n tá»‰nh vá» chá»§ trÆ°Æ¡ng, ch&iacute;nh s&aacute;ch th&iacute; Ä‘iá»ƒm cháº¿ Ä‘á»‹nh Thá»«a ph&aacute;t láº¡i cá»§a Äáº£ng v&agrave; Nh&agrave; nÆ°á»›c; vá» vá»‹ tr&iacute;, vai tr&ograve;, &yacute; nghÄ©a v&agrave; nhá»¯ng ná»™i dung chá»§ yáº¿u cá»§a cháº¿ Ä‘á»‹nh Thá»«a ph&aacute;t láº¡i. Qua Ä‘&oacute;, tÄƒng cÆ°á»ng sá»± hiá»ƒu biáº¿t v&agrave; n&acirc;ng cao kháº£ nÄƒng tiáº¿p cáº­n cá»§a ngÆ°á»i d&acirc;n, cÆ¡ quan, tá»• chá»©c, doanh nghiá»‡p Ä‘á»‘i vá»›i loáº¡i h&igrave;nh dá»‹ch vá»¥ n&agrave;y; thu h&uacute;t nh&acirc;n d&acirc;n v&agrave; doanh nghiá»‡p sá»­ dá»¥ng dá»‹ch vá»¥ do Thá»«a ph&aacute;t láº¡i cung cáº¥p nháº±m báº£o vá»‡ quyá»n v&agrave; lá»£i &iacute;ch há»£p ph&aacute;p cá»§a m&igrave;nh./.</span></span></span></span></div>\r\n', 'Má»¹ Cáº©m', 'admin', 1, 0),
(391, 87, 'Kháº£o sÃ¡t cÃ´ng tÃ¡c phá»• biáº¿n, giÃ¡o dá»¥c phÃ¡p luáº­t Ä‘á»ƒ chuáº©n bá»‹ cho ká»³ há»p thá»© 8 cá»§a HÄND tá»‰nh', '2013-04-03', '/upload/images/stp/ban%20phap%20che%20hnd.jpg', 3, '', NULL, 'Äá»ƒ chuáº©n bá»‹ ká»³ há»p thá»© 8 cá»§a HÄND tá»‰nh, chiá»u ngÃ y 03/6/2014, Ban phÃ¡p cháº¿ HÄND tá»‰nh tiáº¿n hÃ nh kháº£o sÃ¡t cÃ´ng tÃ¡c cÃ´ng tÃ¡c tuyÃªn truyá»n, phá»• biáº¿n, giÃ¡o dá»¥c phÃ¡p luáº­t gáº¯n vá»›i trá»£ giÃºp phÃ¡p lÃ½ cho cÃ¡c Ä‘á»‘i tÆ°á»£ng nghÃ¨o, Ä‘á»‘i tÆ°á»£ng chÃ­nh sÃ¡ch, Ä‘á»“ng bÃ o vÃ¹ng sÃ¢u, vÃ¹ng xa trÃªn Ä‘á»‹a bÃ n tá»‰nh BÃ¬nh Äá»‹nh tá»« nÄƒm 2013 Ä‘áº¿n háº¿t thÃ¡ng 5/2014.', '<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;">Táº¡i buá»•i l&agrave;m viá»‡c, Ä‘o&agrave;n kháº£o s&aacute;t Ä‘&atilde; Ä‘&aacute;nh gi&aacute; cao nhá»¯ng káº¿t quáº£ trong c&ocirc;ng t&aacute;c PBGDPL n&oacute;i chung v&agrave; PBGDPL gáº¯n vá»›i trá»£ gi&uacute;p ph&aacute;p l&yacute; cho c&aacute;c Ä‘á»‘i tÆ°á»£ng ngh&egrave;o, Ä‘á»‘i tÆ°á»£ng ch&iacute;nh s&aacute;ch, Ä‘á»“ng b&agrave;o v&ugrave;ng s&acirc;u, v&ugrave;ng xa tr&ecirc;n Ä‘á»‹a b&agrave;n tá»‰nh trong thá»i gian qua. Tuy nhi&ecirc;n, trong thá»±c táº¿, c&ocirc;ng t&aacute;c n&agrave;y váº«n c&ograve;n nhiá»u báº¥t cáº­p, nháº¥t l&agrave; viá»‡c gi&aacute;o dá»¥c c&aacute;c Ä‘á»‘i tÆ°á»£ng thanh thiáº¿u ni&ecirc;n cháº­m tiáº¿n, thanh thiáº¿u ni&ecirc;n vi pháº¡m ph&aacute;p luáº­t hay gi&aacute;o dá»¥c vá» vÄƒn h&oacute;a, Ä‘áº¡o Ä‘á»©c, nh&acirc;n c&aacute;ch, t&iacute;nh tháº©m má»¹ cá»§a con ngÆ°á»i&hellip;C&ugrave;ng vá»›i Ä‘&oacute;, c&aacute;c Ä‘áº¡i biá»ƒu Ä‘&atilde; Ä‘&atilde; nhiá»‡t t&igrave;nh tháº£o luáº­n vá» vai tr&ograve; cá»§a viá»‡c tham mÆ°u l&atilde;nh Ä‘áº¡o, chá»‰ Ä‘áº¡o triá»ƒn khai thá»±c hiá»‡n c&ocirc;ng t&aacute;c PBGDPL cÅ©ng nhÆ° chá»‰ ra nhá»¯ng khuyáº¿t Ä‘iá»ƒm, tá»“n táº¡i v&agrave; vÆ°á»›ng máº¯c, báº¥t cáº­p; tá»« Ä‘&oacute; Ä‘á» ra má»™t sá»‘ giáº£i ph&aacute;p Ä‘á»ƒ thá»±c hiá»‡n c&ocirc;ng t&aacute;c PBGDPL n&oacute;i chung v&agrave; PBGDPL gáº¯n vá»›i trá»£ gi&uacute;p ph&aacute;p l&yacute; cho c&aacute;c Ä‘á»‘i tÆ°á»£ng ngh&egrave;o, Ä‘á»‘i tÆ°á»£ng ch&iacute;nh s&aacute;ch, Ä‘á»“ng b&agrave;o v&ugrave;ng s&acirc;u, v&ugrave;ng xa tr&ecirc;n Ä‘á»‹a b&agrave;n tá»‰nh n&oacute;i ri&ecirc;ng Ä‘áº¡t hiá»‡u quáº£ cao hÆ¡n.</span></span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;"><span style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;">Káº¿t luáº­n táº¡i buá»•i l&agrave;m viá»‡c, &ocirc;ng Pháº¡m Há»“ng SÆ¡n &ndash; TrÆ°á»Ÿng Ban ph&aacute;p cháº¿ HÄND tá»‰nh Ä‘&atilde; Ä‘á» nghá»‹ Sá»Ÿ TÆ° ph&aacute;p tÄƒng cÆ°á»ng vai tr&ograve; tham mÆ°u cá»§a CÆ¡ quan ThÆ°á»ng trá»±c cá»§a Há»™i Ä‘á»“ng phá»‘i há»£p PBGDPL tá»‰nh trong c&ocirc;ng t&aacute;c PBGDPL v&agrave; lÆ°u &yacute; c&aacute;c váº¥n Ä‘á» nhÆ°: Song song viá»‡c phá»• biáº¿n c&aacute;c Ä‘áº¡o luáº­t, cáº§n phá»• biáº¿n c&aacute;c vÄƒn báº£n dÆ°á»›i luáº­t v&agrave; hÆ°á»›ng dáº«n thi h&agrave;nh luáº­t c&oacute; li&ecirc;n quan s&aacute;t sÆ°á»n Ä‘áº¿n Ä‘á»i sá»‘ng cá»§a c&aacute;n bá»™ v&agrave; nh&acirc;n d&acirc;n, gáº¯n vá»›i viá»‡c th&ocirc;ng tin vá» t&igrave;nh h&igrave;nh kinh táº¿, vÄƒn h&oacute;a, x&atilde; há»™i trong tá»‰nh nháº¥t l&agrave; c&aacute;c káº¿ hoáº¡ch, chá»§ trÆ°Æ¡ng ph&aacute;t triá»ƒn kinh táº¿ - x&atilde; há»™i cá»§a tá»‰nh; gáº¯n viá»‡c gi&aacute;o dá»¥c ph&aacute;p luáº­t vá»›i gi&aacute;o dá»¥c t&iacute;nh tháº©m má»¹, &yacute; thá»©c x&acirc;y dá»±ng con ngÆ°á»i trong t&igrave;nh h&igrave;nh má»›i. HÆ°á»›ng dáº«n c&aacute;c sá»Ÿ, ng&agrave;nh, Ä‘á»‹a phÆ°Æ¡ng ph&aacute;t huy vai tr&ograve; cá»§a Tá»§ s&aacute;ch ph&aacute;p luáº­t; tÄƒng cÆ°á»ng c&aacute;c h&igrave;nh thá»©c tuy&ecirc;n truyá»n, PBGDPL cho c&aacute;c Ä‘á»‘i tÆ°á»£ng nháº¥t l&agrave; há»c sinh, sinh vi&ecirc;n, thanh thiáº¿u ni&ecirc;n cháº­m tiáº¿n; táº­p trung phá»• biáº¿n Hiáº¿n ph&aacute;p nÆ°á»›c Cá»™ng h&ograve;a x&atilde; há»™i chá»§ nghÄ©a Viá»‡t Nam nÄƒm 2013, Luáº­t H&ograve;a giáº£i á»Ÿ cÆ¡ sá»Ÿ v&agrave; bá»“i dÆ°á»¡ng nghiá»‡p vá»¥ cho Ä‘á»™i ngÅ© H&ograve;a giáº£i vi&ecirc;n á»Ÿ cÆ¡ sá»Ÿ&hellip;</span></span></span></span></div>\r\n', 'Má»¹ Cáº©m', 'admin', 1, 1),
(392, 61, 'UBND tá»‰nh BÃ¬nh Äá»‹nh: Tá»• chá»©c há»™i nghá»‹ phá»• biáº¿n cÃ¡c quy Ä‘á»‹nh vá» trÃ¬nh tá»±, thá»§ tá»¥c xem xÃ©t, quyáº¿t Ä‘á»‹nh Ã¡p dá»¥ng cÃ¡c biá»‡n phÃ¡p xá»­ lÃ½ hÃ nh chÃ­nh táº¡i TÃ²a Ã¡n nhÃ¢n dÃ¢n vÃ  cháº¿ Ä‘á»‹nh Thá»«a phÃ¡t láº¡i', '2014-05-16', '/upload/images/ruoubauda/r1.jpg', 1, '', NULL, 'SÃ¡ng 14/5, UBND tá»‰nh Ä‘Ã£ tá»• chá»©c há»™i nghá»‹ phá»• biáº¿n cÃ¡c quy Ä‘á»‹nh vá» trÃ¬nh tá»±, thá»§ tá»¥c xem xÃ©t, quyáº¿t Ä‘á»‹nh Ã¡p dá»¥ng cÃ¡c biá»‡n phÃ¡p xá»­ lÃ½ hÃ nh chÃ­nh táº¡i TÃ²a Ã¡n nhÃ¢n dÃ¢n vÃ  cháº¿ Ä‘á»‹nh Thá»«a phÃ¡t láº¡i cho 200 Ä‘áº¡i biá»ƒu lÃ  Thá»§ trÆ°á»Ÿng cÃ¡c sá»Ÿ, ban, ngÃ nh, Ä‘oÃ n thá»ƒ, thÃ nh viÃªn Há»™i Ä‘á»“ng phá»‘i há»£p phá»• biáº¿n, giÃ¡o dá»¥c phÃ¡p luáº­t tá»‰nh, bÃ¡o cÃ¡o viÃªn phÃ¡p luáº­t cá»§a tá»‰nh vÃ  LÃ£nh Ä‘áº¡o UBND, PhÃ²ng TÆ° phÃ¡p, CÃ´ng an, TÃ²a Ã¡n nhÃ¢n dÃ¢n, Viá»‡n Kiá»ƒm sÃ¡t nhÃ¢n dÃ¢n, Chi cá»¥c Thi hÃ nh Ã¡n dÃ¢n sá»± cá»§a 11 huyá»‡n, thá»‹ xÃ£, thÃ nh phá»‘.', '<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;">Táº¡i há»™i nghá»‹, c&aacute;c Ä‘áº¡i biá»ƒu Ä‘&atilde; nghe b&aacute;o c&aacute;o vi&ecirc;n truyá»n Ä‘áº¡t c&aacute;c ná»™i dung cá»§a Ph&aacute;p lá»‡nh Tr&igrave;nh tá»±, thá»§ tá»¥c xem x&eacute;t, quyáº¿t Ä‘á»‹nh &aacute;p dá»¥ng c&aacute;c biá»‡n ph&aacute;p xá»­ l&yacute; h&agrave;nh ch&iacute;nh táº¡i T&ograve;a &aacute;n nh&acirc;n d&acirc;n; Nghá»‹ Ä‘á»‹nh sá»‘ 111/2013/NÄ-CP ng&agrave;y 30/9/2013 cá»§a Ch&iacute;nh phá»§ quy Ä‘á»‹nh cháº¿ Ä‘á»™ &aacute;p dá»¥ng biá»‡n ph&aacute;p xá»­ l&yacute; h&agrave;nh ch&iacute;nh gi&aacute;o dá»¥c táº¡i x&atilde;, phÆ°á»ng, thá»‹ tráº¥n; Nghá»‹ Ä‘á»‹nh sá»‘ 221/2013/NÄ-CP ng&agrave;y 30/12/2013 cá»§a Ch&iacute;nh phá»§ quy Ä‘á»‹nh cháº¿ Ä‘á»™ &aacute;p dá»¥ng biá»‡n ph&aacute;p xá»­ l&yacute; h&agrave;nh ch&iacute;nh Ä‘Æ°a v&agrave;o cÆ¡ sá»Ÿ cai nghiá»‡n báº¯t buá»™c; Nghá»‹ Ä‘á»‹nh sá»‘ 02/2014/NÄ-CP ng&agrave;y 10/01/2014 cá»§a Ch&iacute;nh phá»§ quy Ä‘á»‹nh cháº¿ Ä‘á»™ &aacute;p dá»¥ng, thi h&agrave;nh biá»‡n ph&aacute;p xá»­ l&yacute; h&agrave;nh ch&iacute;nh Ä‘Æ°a v&agrave;o trÆ°á»ng gi&aacute;o dÆ°á»¡ng v&agrave; cÆ¡ sá»Ÿ gi&aacute;o dá»¥c báº¯t buá»™c. B&ecirc;n cáº¡nh Ä‘&oacute;, Ä‘áº¡i biá»ƒu cÅ©ng Ä‘Æ°á»£c tiáº¿p thu vá» c&aacute;c ná»™i dung cÆ¡ báº£n cá»§a cháº¿ Ä‘á»‹nh Thá»«a ph&aacute;t láº¡i v&agrave; t&aacute;c dá»¥ng, hiá»‡u quáº£ cá»§a hoáº¡t Ä‘á»™ng Thá»«a ph&aacute;t láº¡i trong viá»‡c giáº£i quyáº¿t c&aacute;c nhu cáº§u cá»§a c&ocirc;ng d&acirc;n tr&ecirc;n 04 lÄ©nh vá»±c: tá»‘ng Ä‘áº¡t vÄƒn báº£n cá»§a cÆ¡ quan qua Thi h&agrave;nh &aacute;n v&agrave; T&ograve;a &aacute;n, láº­p vi báº±ng, x&aacute;c minh Ä‘iá»u kiá»‡n thi h&agrave;nh &aacute;n d&acirc;n sá»±, trá»±c tiáº¿p thi h&agrave;nh báº£n &aacute;n v&agrave; quyáº¿t Ä‘á»‹nh theo y&ecirc;u cáº§u cá»§a Ä‘Æ°Æ¡ng sá»±.</span></span></div>\r\n<div style="padding: 0px; margin: 0px; line-height: 18px; font-family: arial; color: rgb(96, 109, 120); text-align: justify; text-indent: 1cm;">\r\n	<span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;">Thá»«a á»§y quyá»n cá»§a Chá»§ tá»‹ch UBND tá»‰nh, ph&aacute;t biá»ƒu chá»‰ Ä‘áº¡o táº¡i há»™i nghá»‹, Ph&oacute; Gi&aacute;m Ä‘á»‘c phá»¥ tr&aacute;ch Sá»Ÿ TÆ° ph&aacute;p Nguyá»…n B&aacute; Ä‘á» nghá»‹ Thá»§ trÆ°á»Ÿng c&aacute;c sá»Ÿ, ban, ng&agrave;nh, Ä‘o&agrave;n thá»ƒ tá»‰nh, c&aacute;c huyá»‡n, thá»‹ x&atilde;, th&agrave;nh phá»‘ pháº£i c&oacute; káº¿ hoáº¡ch phá»• biáº¿n ná»™i dung c&aacute;c vÄƒn báº£n ph&aacute;p luáº­t Ä‘&atilde; triá»ƒn khai táº¡i há»™i nghá»‹ n&agrave;y Ä‘áº¿n vá»›i c&aacute;n bá»™, c&ocirc;ng chá»©c, vi&ecirc;n chá»©c v&agrave; quáº§n ch&uacute;ng nh&acirc;n d&acirc;n thuá»™c cÆ¡ quan, Ä‘Æ¡n vá»‹, Ä‘á»‹a phÆ°Æ¡ng m&igrave;nh. &nbsp;Äáº·c biá»‡t l&agrave; cháº¿ Ä‘á»‹nh Thá»«a ph&aacute;t láº¡i, tuy kh&ocirc;ng má»›i nhÆ°ng c&oacute; sá»± chuyá»ƒn Ä‘á»•i. Do Ä‘&oacute;, Ä‘&ograve;i há»i c&aacute;c ng&agrave;nh, Ä‘á»‹a phÆ°Æ¡ng, nháº¥t l&agrave; nhá»¯ng ngÆ°á»i trá»±c tiáº¿p thá»±c hiá»‡n c&ocirc;ng vá»¥ pháº£i ká»‹p thá»i triá»ƒn khai Ä‘á»ƒ ngÆ°á»i d&acirc;n náº¯m báº¯t ná»™i dung vÄƒn báº£n cÅ©ng nhÆ° Ä‘á»‹a chá»‰ VÄƒn ph&ograve;ng Thá»«a ph&aacute;t láº¡i Ä‘á»ƒ há» chá»§ Ä‘á»™ng trong c&aacute;c quan há»‡ d&acirc;n sá»±, tá»‘ tá»¥ng d&acirc;n sá»±./.</span></span></div>\r\n', 'ita', 'admin', 1, 1);
INSERT INTO `news` (`newsid`, `newsgroup`, `title`, `date`, `image`, `imagepos`, `imagedes`, `shortabs`, `abstract`, `content`, `author`, `user`, `approval`, `topnews`) VALUES
(393, 61, 'Trung tÃ¢m Trá»£ giÃºp phÃ¡p lÃ½ nhÃ  nÆ°á»›c tá»‰nh: Há»™i nghá»‹ tá»a Ä‘Ã m cÃ´ng tÃ¡c Trá»£ giÃºp phÃ¡p lÃ½ cho ngÆ°á»i khuyáº¿t táº­t', '2014-04-03', '/upload/images/ruoubauda/r2.jpg', 1, '', NULL, 'SÃ¡ng 14/3, Trung tÃ¢m Trá»£ giÃºp phÃ¡p lÃ½ NhÃ  nÆ°á»›c tá»‰nh thuá»™c Sá»Ÿ TÆ° phÃ¡p Ä‘Ã£ tá»• chá»©c Há»™i nghá»‹ tá»a Ä‘Ã m cÃ´ng tÃ¡c trá»£ giÃºp phÃ¡p lÃ½ cho ngÆ°á»i khuyáº¿t táº­t.', '<p>\r\n	<span style="padding: 0px; margin: 0px; color: rgb(96, 109, 120); font-family: arial; line-height: 18px; text-align: justify; text-indent: 37.7952766418457px;"><span style="padding: 0px; margin: 0px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;"><span style="padding: 0px; margin: 0px;">Tham dá»± Há»™i nghá»‹ c&oacute; Ä‘áº¡i diá»‡n Há»™i Li&ecirc;n hiá»‡p Phá»¥ ná»¯ tá»‰nh, Há»™i N&ocirc;ng d&acirc;n, Há»™i cá»±u chiáº¿n binh, Ph&ograve;ng Báº£o trá»£ x&atilde; há»™i - Sá»Ÿ Lao Ä‘á»™ng, ThÆ°Æ¡ng binh v&agrave; X&atilde; há»™i tá»‰nh, Há»™i Báº£o trá»£ ngÆ°á»i t&agrave;n táº­t v&agrave; tráº» em má»“ c&ocirc;i, Há»™i Náº¡n nh&acirc;n cháº¥t Ä‘á»™c m&agrave;u da cam, Há»™i NgÆ°á»i m&ugrave;, Há»™i NgÆ°á»i cao tuá»•i v&agrave; Äo&agrave;n Luáº­t sÆ° tá»‰nh.<br style="padding: 0px; margin: 0px;" />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span></span><span style="padding: 0px; margin: 0px; font-family: arial; line-height: 18px; text-align: justify; text-indent: 37.7952766418457px; color: rgb(128, 0, 0);"><span style="padding: 0px; margin: 0px; font-family: Arial;"><span style="padding: 0px; margin: 0px;">Táº¡i há»™i nghá»‹, c&aacute;c Ä‘áº¡i biá»ƒu Ä‘&atilde; nghe b&aacute;o c&aacute;o t&igrave;nh h&igrave;nh thá»±c hiá»‡n c&ocirc;ng t&aacute;c trá»£ gi&uacute;p ph&aacute;p l&yacute; cho ngÆ°á»i khuyáº¿t táº­t tr&ecirc;n Ä‘á»‹a b&agrave;n tá»‰nh trong thá»i gian qua. Äá»“ng thá»i, c&aacute;c Ä‘áº¡i biá»ƒu Ä‘&atilde; c&ugrave;ng tháº£o luáº­n, trao Ä‘á»•i nhá»¯ng vÆ°á»›ng máº¯c, kh&oacute; khÄƒn v&agrave; Ä‘á» ra giáº£i ph&aacute;p thiáº¿t thá»±c trong qu&aacute; tr&igrave;nh triá»ƒn khai thá»±c hiá»‡n ch&iacute;nh s&aacute;ch trá»£ gi&uacute;p ph&aacute;p l&yacute; cho ngÆ°á»i khuyáº¿t táº­t, c&aacute;c Ä‘á»‘i tÆ°á»£ng báº£o trá»£ x&atilde; há»™i tr&ecirc;n Ä‘á»‹a b&agrave;n tá»‰nh.<br style="padding: 0px; margin: 0px;" />\r\n	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span style="padding: 0px; margin: 0px; font-family: Arial;">CÅ©ng táº¡i há»™i nghá»‹ n&agrave;y, c&aacute;c Ä‘áº¡i biá»ƒu Ä‘&atilde; Ä‘Æ°á»£c nghe giá»›i thiá»‡u má»™t sá»‘ ná»™i dung cÆ¡ báº£n cá»§a Luáº­t Trá»£ gi&uacute;p ph&aacute;p l&yacute;, Luáº­t NgÆ°á»i khuyáº¿t táº­t nháº±m n&acirc;ng cao kiáº¿n thá»©c ph&aacute;p luáº­t Ä‘á»ƒ &aacute;p dá»¥ng trong qu&aacute; tr&igrave;nh thá»±c hiá»‡n c&ocirc;ng t&aacute;c Trá»£ gi&uacute;p ph&aacute;p l&yacute; cho ngÆ°á»i khuyáº¿t táº­t tr&ecirc;n Ä‘á»‹a b&agrave;n tá»‰nh Ä‘Æ°á»£c tá»‘t hÆ¡n./.</span></span></p>\r\n', 'Thá»§y Tráº§n', 'admin', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ismodule` tinyint(4) NOT NULL DEFAULT '0',
  `leftmodule` tinyint(4) NOT NULL DEFAULT '0',
  `moduleorder` int(11) NOT NULL DEFAULT '0',
  `value1` int(11) DEFAULT NULL,
  `value2` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value3` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`name`, `ismodule`, `leftmodule`, `moduleorder`, `value1`, `value2`, `value3`) VALUES
('banner', 0, 0, 0, 0, NULL, ''),
('update', 0, 0, 0, 0, NULL, NULL),
('leftfooter', 0, 0, 0, NULL, NULL, ''),
('rightfooter', 0, 0, 0, NULL, NULL, 'Báº¢N QUYá»€N THUá»˜C Vá»€ : CÃ  phÃª Nguyá»…n Duy Cáº£nh\r\n\r\n<br>\r\nPhÃ¡t triá»ƒn bá»Ÿi Trung tÃ¢m á»¨ng dá»¥ng CNTT & Viá»…n thÃ´ng BÃ¬nh Äá»‹nh (ITA)'),
('topnews', 1, 0, 3, 0, 'THÃ”NG BÃO', '<p>\r\n	<strong>- Trang th&ocirc;ng tin&nbsp;Ä‘iá»‡n tá»­ Sá»Ÿ TÆ° Ph&aacute;p n&acirc;ng cáº¥p.Má»i chi tiáº¿t g&oacute;p&nbsp;&yacute; xin vui l&ograve;ng gá»­i vá»&nbsp;Ä‘á»‹a chá»‰ :</strong></p>\r\n<p>\r\n	<strong>- Th&ocirc;ng b&aacute;o vá» viá»‡c tuyá»ƒn dá»¥ng c&ocirc;ng chá»©c Sá»Ÿ TÆ° Ph&aacute;p nÄƒm 2014</strong></p>\r\n'),
('calendar', 1, 0, 3, 0, 'Lá»ŠCH', NULL),
('template', 0, 0, 0, 0, '', NULL),
('title', 0, 0, 0, NULL, 'CÃ  phÃª Nguyá»…n Duy Cáº£nh', 'UBND huy&#7879;n Ho&#224;i Nh&#417;n'),
('keyword', 0, 0, 0, NULL, NULL, ''),
('counter', 0, 0, 0, 1160, NULL, NULL),
('counteron', 1, 0, 4, 1, 'Sá» LÆ¯á»¢T TRUY Cáº¬P', NULL),
('document', 1, 0, 4, 0, '08', ''),
('newlawdoc', 1, 0, 1, 0, 'VÄ‚N Báº¢N Má»šI', NULL),
('imagelist', 1, 0, 4, 0, 'HÃŒNH áº¢NH HOáº T Äá»˜NG', NULL),
('search', 1, 0, 1, 0, 'TÃŒM KIáº¾M', NULL),
('url', 0, 0, 0, NULL, 'http://localhost/stttt', NULL),
('recordsperpage', 0, 0, 0, 20, NULL, NULL),
('rss', 0, 0, 0, 0, NULL, NULL),
('newsfromurl', 1, 0, 7, 0, 'Tin tá»« bÃ¡o báº¡n', 'http://tuoitre.vn/RssFeeds.aspx?ChannelID=16'),
('login', 1, 1, 2, 0, 'ÄÄƒng nháº­p', NULL),
('chat', 1, 0, 3, 0, 'Há»– TRá»¢ TRá»°C TUYáº¾N', NULL),
('round', 0, 0, 0, 0, NULL, NULL),
('colorselection', 1, 0, 0, 0, NULL, NULL),
('vermenu', 0, 0, 0, 1, NULL, '0 - Hien thi menu ngang chinh\r\n1 - Hien thi menu doc chinh'),
('borderad', 0, 0, 0, 1, NULL, NULL),
('logo', 0, 0, 0, NULL, NULL, '/upload/flash/BANER%20ANH%20SINH.swf'),
('weblist', 1, 0, 5, 1, 'LIÃŠN Káº¾T WEB', NULL),
('marqueetext', 0, 0, 0, NULL, '', NULL),
('headerfooter', 0, 0, 0, 2, NULL, NULL),
('top5newsstyle', 0, 0, 0, 2, NULL, NULL),
('google', 0, 0, 0, NULL, NULL, '                                     '),
('video', 1, 0, 2, 1, 'VIDEO', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` text,
  `company` text,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text,
  `masp` varchar(100) NOT NULL,
  `soluong` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `company`, `email`, `phone`, `address`, `masp`, `soluong`) VALUES
(1, 'Bui van truyen', 'ita', 'v.truyen@yahoo.com', '123456', '75 Mai xuan thuong', 'sp4', '12');

-- --------------------------------------------------------

--
-- Table structure for table `org`
--

CREATE TABLE `org` (
  `orgid` int(11) NOT NULL,
  `orgtype` int(11) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `address` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orgname` text COLLATE utf8_unicode_ci,
  `manager` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `website` text COLLATE utf8_unicode_ci,
  `orgfield` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orgfield`
--

CREATE TABLE `orgfield` (
  `orgfieldid` int(11) NOT NULL,
  `orgfieldname` varchar(400) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orgfield`
--

INSERT INTO `orgfield` (`orgfieldid`, `orgfieldname`) VALUES
(1, 'B&#432;u ch&#237;nh - Vi&#7877;n th&#244;ng'),
(2, 'CÃ´ng nghá»‡ thÃ´ng tin.'),
(3, 'BÃ¡o chÃ­'),
(4, 'Xuáº¥t báº£n'),
(5, 'In &#7845;n');

-- --------------------------------------------------------

--
-- Table structure for table `orgplace`
--

CREATE TABLE `orgplace` (
  `orgplaceid` int(11) NOT NULL,
  `orgplacename` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orgplace`
--

INSERT INTO `orgplace` (`orgplaceid`, `orgplacename`) VALUES
(1, 'Quy Nh&#417;n'),
(2, 'Tuy Ph&#432;&#7899;c'),
(3, 'V&#226;n Canh'),
(4, 'V&#297;nh Th&#7841;nh'),
(5, 'An NhÆ¡n'),
(6, 'Ph&#249; C&#225;t'),
(7, 'Ph&#249; M&#7929;'),
(8, 'Ho&#224;i Nh&#417;n'),
(9, 'An LÃ£o'),
(10, 'Ho&#224;i &#194;n'),
(11, 'T&#226;y S&#417;n');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `newsgroup` int(4) NOT NULL,
  `masp` text NOT NULL,
  `tensp` text NOT NULL,
  `giasp` text NOT NULL,
  `anhsp` text,
  `anhsp1` text,
  `anhsp2` text,
  `anhsp3` text,
  `anhsp4` text,
  `thongtinsp` text NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `newsgroup`, `masp`, `tensp`, `giasp`, `anhsp`, `anhsp1`, `anhsp2`, `anhsp3`, `anhsp4`, `thongtinsp`, `user`) VALUES
(1, 61, 'sp1', 'CÃ  phÃª ban mÃª', '123456', '/upload/images/cafe/ca-phe-Cappuccino.jpg', NULL, NULL, NULL, NULL, '<p>\r\n	abc</p>\r\n', 'admin'),
(2, 61, 'sp2', 'CÃ  phÃª Nguyá»…n Cáº£nh Duy', '', '/upload/images/cafe/Gia_Ca_Phe_Len_Muc_Cao_Chua_Tung_Co_Trong_13_Nam.jpg', NULL, NULL, NULL, NULL, '', 'admin'),
(3, 61, 'sp3', 'CÃ  phÃª Nguyá»…n Cáº£nh Duy 3', '', '/upload/images/cafe/ca-phe-Cappuccino.jpg', NULL, NULL, NULL, NULL, '', 'admin'),
(4, 61, 'sp4', 'CÃ  phÃª Nguyá»…n Cáº£nh Duy 2', '', '/upload/images/cafe/ca-phe-Cappuccino.jpg', NULL, NULL, NULL, NULL, '', 'admin'),
(5, 61, 'sp5', 'CÃ  phÃª Nguyá»…n Cáº£nh Duy 1', '', '/upload/images/cafe/Gia_Ca_Phe_Len_Muc_Cao_Chua_Tung_Co_Trong_13_Nam.jpg', '/upload/images/cafe/4543441.jpeg', '/upload/images/cafe/ca-phe-1438175636.jpg', '/upload/images/cafe/ca-phe-Cappuccino.jpg', '/upload/images/cafe/Gia_Ca_Phe_Len_Muc_Cao_Chua_Tung_Co_Trong_13_Nam.jpg', '', 'admin'),
(6, 61, 'cf1', 'CÃ  phÃª ban mÃª 1', '12000', '/upload/images/cafe/images.jpg', '/upload/images/cafe/intro-1.jpg', '/upload/images/cafe/intro-2.jpg', '/upload/images/cafe/noticia_21546_1.jpg', '', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `company` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `phone`, `email`, `address`, `company`, `date`, `status`) VALUES
(1, 'BÃ¹i VÄƒn Truyá»n', '123456', 'truyenbv211840729@gmail.com', 'Quy nhÆ¡n BÃ¬nh Äá»‹nh', '', '2014-07-31', 1),
(2, 'BÃ¹i VÄƒn Truyá»n', '126456565', 'admin@yahoo.com', '75 Mai XuÃ¢n ThÆ°á»Ÿng', 'Trung tÃ¢m ITA', '2014-10-15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rssnews`
--

CREATE TABLE `rssnews` (
  `rssnewsid` bigint(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `abstract` text COLLATE utf8_unicode_ci,
  `url` text COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rssnews`
--

INSERT INTO `rssnews` (`rssnewsid`, `title`, `abstract`, `url`) VALUES
(492, 'FBI giá»›i thiá»‡u á»©ng dá»¥ng má»›i trÃªn iPhone', ' \n             TT - Cá»¥c Äiá»u tra liÃªn bang Má»¹ (FBI) vá»«a cho ra Ä‘á»i má»™t á»©ng dá»¥ng má»›i dÃ nh cho iPhone vá»›i tÃªn gá»i Child ID (chá»©ng minh nhÃ¢n dÃ¢n cho tráº»). \n              \n                ', 'http://nhipsongso.tuoitre.vn/Index.aspx?ArticleID=451760&ChannelID=16'),
(493, 'DÃ¢nÂ HÃ n Quá»‘c kiá»‡n Apple', ' \n             TTO - Má»™t nhÃ³m ngÆ°á»i dÃ¹ngÂ iPhone táº¡i HÃ n Quá»‘c Ä‘Ã£ kiá»‡n Apple lÃªn tÃ²a Ã¡n Ä‘á»‹a phÆ°Æ¡ng vÃ¬ cho ráº±ng hÃ£ng nÃ y Ä‘Ã£ &#34;tháº£ cá»­a&#34; cho iPhone thu tháº­p dá»¯ liá»‡u vá»‹ trÃ­ Ä‘á»‹a lÃ½ mÃ  khÃ´ng Ä‘Æ°á»£c sá»± Ä‘á»“ng Ã½ cá»§a ngÆ°á»i dÃ¹ng. \n              \n                ', 'http://nhipsongso.tuoitre.vn/Index.aspx?ArticleID=451700&ChannelID=16'),
(494, '&#34;Cuá»—m&#34; hÆ¡n 1 tá»‰ Ä‘á»“ng nhá»â€¦ Facebook', ' \n             TTO - Má»™t ngÆ°á»i á»Ÿ Newcastle, Anh Quá»‘c Ä‘Ã£ pháº£i xá»™ khÃ¡m vÃ¬ tá»™i Äƒn cáº¯p 57.000 USD (tÆ°Æ¡ng Ä‘Æ°Æ¡ng 1.184.000.000 VND) khá»i tÃ i khoáº£n ngÃ¢n hÃ ng cá»§a báº¡n bÃ¨, nhá» vÃ o nhá»¯ng thÃ´ng tin trÃªn Facebook cá»§a há». \n              \n                ', 'http://nhipsongso.tuoitre.vn/Index.aspx?ArticleID=451680&ChannelID=16'),
(495, 'LÃ n sÃ³ng &#34;mÃª&#34; SIIÂ táº¡i SÃ i GÃ²n vÃ  HÃ  Ná»™i', ' \n             TTO - Nhá»¯ng chá»§Â Ä‘á»Â dÃ y Ä‘áº·c trÃªn cÃ¡c diá»…n Ä‘Ã n, nhá»¯ng buá»•i há»p máº·t tá»± phÃ¡t, nhá»¯ng cuá»™c thi nhá» báº¯t Ä‘áº§u manh nhaâ€¦ Samsung Galaxy SII Ä‘ang táº¡o nÃªn nhá»¯ng lÃ n sÃ³ng thÃ nh láº­p â€œcá»™ng Ä‘á»“ngâ€ cho nhá»¯ng ai â€œtrÃ³tâ€ Ä‘am mÃª chiáº¿c smartphone nÃ y máº·c dÃ¹ sáº£n pháº©m chá»‰ chÃ­nh thá»©c cÃ³ máº·t hÆ¡n chá»¥c ngÃ y trÃªn thá»‹ trÆ°á»ng Viá»‡t Nam. \n              \n                ', 'http://nhipsongso.tuoitre.vn/Index.aspx?ArticleID=451669&ChannelID=430'),
(496, 'Sea+: gÃ³i cÆ°á»›c di Ä‘á»™ng cho ngÆ° dÃ¢n', ' \n             TT - NgÃ y 16-8, máº¡ng di Ä‘á»™ng Viettel ra máº¯t gÃ³i cÆ°á»›c tráº£ trÆ°á»›c Sea+ dÃ nh riÃªng cho ngÆ° dÃ¢n vÃ  ngÆ°á»i dÃ¢n vÃ¹ng ven biá»ƒn. \n              \n                ', 'http://nhipsongso.tuoitre.vn/Index.aspx?ArticleID=451602&ChannelID=16'),
(497, 'TÃ²a Ã¡n Äá»©c â€œtáº¡mâ€ gá»¡ Ã¡n pháº¡t cho Galaxy Tab 10.1', ' \n             TTO - TÃ²a Ã¡n quáº­n Dusseldorf, Äá»©c vá»«a tuyÃªn bá»‘ sáº½ gá»¡ bá» â€œmá»™t pháº§nâ€ báº£n Ã¡n sÆ¡ bá»™ trÆ°á»›c Ä‘Ã³ Ä‘á»‘i vá»›i Samsung Electronics, cáº¥m cÃ´ng ty nÃ y bÃ¡n tablet Galaxy Tab 10.1 trÃªn toÃ n chÃ¢u Ã‚u, trá»« HÃ  Lan. \n              \n                ', 'http://nhipsongso.tuoitre.vn/Index.aspx?ArticleID=451622&ChannelID=16'),
(498, 'Canh báº¡c 12,5 tá»‰ USD cá»§a Google', ' \n             TT - Google Ä‘Ã£ chÆ¡i má»™t canh báº¡c lá»›n khi mua láº¡i HÃ£ng Ä‘iá»‡n thoáº¡i di Ä‘á»™ng Motorola Mobility vá»›i giÃ¡ ká»· lá»¥c: 12,5 tá»‰ USD. Thá»a thuáº­n nÃ y cÅ©ng gÃ¢y cháº¥n Ä‘á»™ng thá»‹ trÆ°á»ng di Ä‘á»™ng chÃ¢u Ã. \n              \n                ', 'http://nhipsongso.tuoitre.vn/Index.aspx?ArticleID=451571&ChannelID=16'),
(499, 'Apple &#34;phÃ¹ phÃ©p&#34; trong vá»¥ tháº¯ng kiá»‡n Samsung', ' \n             TTO - Trong vá»¥ tháº¯ng kiá»‡n buá»™c Samsung khÃ´ng Ä‘Æ°á»£c phÃ©p bÃ¡n ra mÃ¡y tÃ­nh báº£ngÂ Galaxy Tab 10.1 á»Ÿ cÃ¡c quá»‘c gia ChÃ¢u Ã‚u, Apple Ä‘Ã£ &#34;phÃ¹ phÃ©p&#34; vÃ o hÃ¬nh áº£nh trong báº£ng Ä‘á»‘i chiáº¿u sáº£n pháº©m Ä‘á»‡ trÃ¬nh lÃªn tÃ²a Ã¡n. \n              \n                ', 'http://nhipsongso.tuoitre.vn/Index.aspx?ArticleID=451539&ChannelID=16'),
(500, 'Tin táº·c Anonymous táº¥n cÃ´ng giao thÃ´ng San Francisco', ' \n             TTO - Trang web cá»§a há»‡ thá»‘ng váº­n chuyá»ƒn cÃ´ng cá»™ng thÃ nh phá»‘ San Francisco BART Ä‘Ã£ trá»Ÿ thÃ nh náº¡n nhÃ¢n má»›i nháº¥t cá»§a nhÃ³m tin táº·c Anonymous, sau khi â€œcan tá»™iâ€ phÃ¡ sÃ³ng khÃ´ng dÃ¢y nháº±m ngÄƒn cháº·n nguy cÆ¡ xáº£y ra biá»ƒu tÃ¬nh táº¡i cÃ¡c tráº¡m váº­n chuyá»ƒn do BART quáº£n lÃ½â€¦ \n              \n                ', 'http://nhipsongso.tuoitre.vn/Index.aspx?ArticleID=451488&ChannelID=16'),
(501, 'Google thÃ¢u tÃ³m Motorola Mobility vá»›i 12,5 tá»· USD', ' \n             TTO - Vá»›i 12,5 tá»· USD, Google vá»«a chÃ­nh thá»©c thÃ¢u tÃ³m Ä‘áº¡i gia smartphone Motorola, nhÆ° má»™t pháº§n trong tham vá»ng cá»§ng cá»‘ kho báº£n quyá»n phá»¥c vá»¥ cho ná»n táº£ng Android. \n              \n                ', 'http://nhipsongso.tuoitre.vn/Index.aspx?ArticleID=451397&ChannelID=16');

-- --------------------------------------------------------

--
-- Table structure for table `rssurl`
--

CREATE TABLE `rssurl` (
  `rssurlid` int(11) NOT NULL,
  `rssurlname` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rssurl`
--

INSERT INTO `rssurl` (`rssurlid`, `rssurlname`, `url`) VALUES
(1, 'BÃ¡o Tuá»•i tráº»', 'http://tuoitre.vn/RssFeeds.aspx?ChannelID=16'),
(2, 'Sá»Ÿ TT&TT', 'http://stttt.binhdinh.gov.vn/stttt/rss.php'),
(3, 'Wikimapia', 'http://www.wikimapia.org/#lat=14.430628&lon=109.0136647&z=16&l=38&m=h');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vote`
--

CREATE TABLE `tbl_vote` (
  `id` int(11) NOT NULL,
  `11` int(11) NOT NULL,
  `12` int(11) NOT NULL,
  `13` int(11) NOT NULL,
  `21` int(11) NOT NULL,
  `22` int(11) NOT NULL,
  `23` int(11) NOT NULL,
  `31` int(11) NOT NULL,
  `32` int(11) NOT NULL,
  `33` int(11) NOT NULL,
  `41` int(11) NOT NULL,
  `42` int(11) NOT NULL,
  `43` int(11) NOT NULL,
  `44` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_vote`
--

INSERT INTO `tbl_vote` (`id`, `11`, `12`, `13`, `21`, `22`, `23`, `31`, `32`, `33`, `41`, `42`, `43`, `44`) VALUES
(16, 1, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, ''),
(15, 1, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `timetableid` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `morning` tinyint(4) DEFAULT '1',
  `task` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chairman` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `place` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `preparation` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attendant` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `approval` tinyint(4) NOT NULL DEFAULT '0',
  `user` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`timetableid`, `date`, `morning`, `task`, `chairman`, `place`, `preparation`, `attendant`, `note`, `approval`, `user`) VALUES
(1, '2010-05-24', 1, 'H&#7885;p Ban ch&#7881; &#273;&#7841;o CNTT t&#7881;nh', '&#272;/c B&#236;nh', 'UBND t&#7881;nh', 'Kha', 'H&#7843;i - Kha - Tri&#234;t - Trung', 'Photo t&#224;i li&#7879;u', 1, 'khatk'),
(2, '2010-05-24', 0, 'Há»p bÃ n káº¿ hoáº¡ch tá»• chá»©c Há»™i thi á»©ng dá»¥ng CNTT.', 'Ä/c Háº£i', 'PhÃ²ng há»p', 'PhÃ²ng QLCNTT', 'PhÃ²ng QLCNTT', '', 1, 'thaonm'),
(3, '2010-05-26', 1, 'H&#7885;p giao ban th&#225;ng 5', '&#272;/c H&#7843;i', 'Ph&#242;ng h&#7885;p', 'V&#259;n ph&#242;ng', 'L&#272; c&#225;c ph&#242;ng', 'C&#225;c &#273;/c Tr&#432;&#7903;ng ph&#242;ng chu&#7849;n b&#7883; KH', 1, 'khatk'),
(4, '2010-05-24', 1, 'H&#7885;p Ban Gi&#225;m &#273;&#7889;c', '&#272;/c H&#7843;i', 'Ph&#242;ng G&#272;', '', '&#272;/c C&#432;&#7901;ng', '', 1, 'hoandtt'),
(5, '2010-05-27', 0, '&#272;i c&#244;ng t&#225;c &#272;&#224; N&#7861;ng (03 ng&#224;y)', '', '&#272;&#224; N&#7861;ng', '', 'H&#7843;i - Kha - Vinh', '', 1, 'hoandtt'),
(6, '2010-05-25', 0, 'Thanh tra internet t&#7841;i An Nh&#417;n', 'Th&#7843;o', 'An Nh&#417;n', '', 'Tu&#7845;n', '', 1, 'haind'),
(7, '2010-05-27', 1, 'LÃ m viá»‡c vá»›i UBND huyá»‡n An NhÆ¡n vá» cÃ´ng tÃ¡c á»©ng dá»¥ng CNTT', 'Kha', 'VP UBND huy&#7879;n An Nh&#417;n', 'ITA', 'Vinh', '', 1, 'thaonm'),
(8, '2010-05-28', 1, 'Giao ban b&#225;o ch&#237; th&#225;ng 5', '&#272;/c C&#432;&#7901;ng', 'H&#7897;i tr&#432;&#7901;ng', 'Ph&#242;ng QL BC-XB', 'T&#226;n - Ph&#250;c - Linh', '', 1, 'triettq'),
(9, '2010-05-29', 0, 'LÃ m viá»‡c vá»›i ITA vá» cÃ´ng tÃ¡c Ä‘Ã o táº¡o.', 'Ä/c Háº£i', 'ITA', '', 'Kha - Vinh', '', 1, 'thaonm'),
(11, '2010-05-28', 1, 'Kiá»ƒm tra tÃ¬nh hÃ¬nh Ä‘iá»u tra nghe nhÃ¬n táº¡i huyá»‡n Tuy PhÆ°á»›c', 'Triáº¿t', 'UBND xÃ£ PhÆ°á»›c ThÃ nh', 'Ngá»c Anh', 'Ngá»c Anh', '', 1, 'triettq'),
(12, '2010-06-04', 0, '14h00: BÃ¡o cÃ¡o vá» viá»‡c nÃ¢ng cáº¥p website cá»§a Sá»Ÿ', 'Ä/c Háº£i', 'Há»™i trÆ°á»ng', 'Kha', 'LÃ£nh Ä‘áº¡o Sá»Ÿ, BBT website vÃ  phá»¥ trÃ¡ch cÃ¡c phÃ²ng', '', 1, 'khatk'),
(13, '2010-06-03', 0, '14h00: LÃ m viá»‡c vá»›i VP ÄoÃ n ÄBQH vÃ  HÄND v/v triá»ƒn khai iDesk', 'Kha', 'VP ÄoÃ n ÄBQH vÃ  HÄND', 'ITA', 'Vinh', '', 1, 'khatk'),
(14, '2010-05-31', 1, '07h00: Äi cÃ´ng tÃ¡c HÃ  Ná»™i (04 ngÃ y)', '', 'HÃ  Ná»™i', '', 'Ä/c Háº£i', '', 1, 'haind'),
(15, '2010-06-02', 1, '07h30: Há»p táº­p chuyÃªn Ä‘á» vá» tÆ° tÆ°á»Ÿng Há»“ ChÃ­ Minh', 'Ä/c TÃ¢n', 'Há»™i trÆ°á»ng', '', 'Táº¥t cáº£ CBCC Sá»Ÿ vÃ  Trung tÃ¢m ITA', '', 1, 'tandn'),
(16, '2010-06-03', 0, '15h30: LÃ m viá»‡c vá»›i Sá»Ÿ Káº¿ hoáº¡ch & Äáº§u tÆ° v/v triá»ƒn khai iDesk', 'Kha', 'VP Sá»Ÿ KH&ÄT', 'ITA', 'Vinh', '', 1, 'khatk'),
(17, '2010-05-31', 1, '08h00: Dá»± Há»™i nghá»‹ táº­p huáº¥n cÃ´ng tÃ¡c Ä‘iá»u tra, thá»‘ng kÃª hiá»‡n tráº¡ng phá»• cáº­p Ä‘iá»‡n thoáº¡i, internet vÃ  nghe nhÃ¬n nÄƒm 2010', '', '30 Nguyá»…n Huá»‡', '', 'Ä/c CÆ°á»ng, TÃ¢n, TrÆ°Æ¡ng', '', 1, 'hoandtt'),
(18, '2010-05-31', 0, '14h00: Há»p bÃ¡o vá»›i Há»™i nhÃ  bÃ¡o v/v cáº¥p tháº» nhÃ  bÃ¡o nÄƒm 2010', 'Ä/c CÆ°á»ng', 'Há»™i nhÃ  bÃ¡o', '', 'Ä/c TÃ¢n, PhÃºc', '', 1, 'hoandtt'),
(19, '2010-06-01', 1, '07h30: Thanh quyáº¿t toÃ¡n kinh phÃ­ táº­p huáº¥n', 'Ä/c CÆ°á»ng', 'Há»™i trÆ°á»ng', '', 'Lá»™c', '', 1, 'hoandtt'),
(20, '2010-06-02', 1, '08h00: Dá»± Lá»… ra máº¯t CÃ´ng ty Äiá»‡n lá»±c BÃ¬nh Äá»‹nh vÃ  cÃ¡c Ä‘iá»‡n lá»±c khu vá»±c', '', '506 Tráº§n HÆ°ng Äáº¡o', '', 'Ä/c CÆ°á»ng', '', 1, 'hoandtt'),
(21, '2010-06-03', 1, '08h00: Há»p bÃ¡o thÃ´ng tin vá» Há»™i chá»£ triá»ƒn lÃ£m hÃ ng cÃ´ng nghiá»‡p nÃ´ng thÃ´n', '', 'Sá»Ÿ CÃ´ng thÆ°Æ¡ng', '', 'Ä/c CÆ°á»ng', '', 1, 'hoandtt'),
(22, '2010-06-04', 1, '07h00: Há»™p Ä‘Ã¡nh giÃ¡ tÃ¬nh hÃ¬nh KT-XH 5 thÃ¡ng Ä‘áº§u nÄƒm', '', 'VP UBND tá»‰nh', '', 'Ä/c Háº£i', '', 1, 'hoandtt'),
(23, '2010-06-04', 0, '14h00: Há»p Há»™i Ä‘á»“ng tháº©m Ä‘á»‹nh Ä‘á» Ã¡n 06', '', 'VP Tá»‰nh á»§y', '', 'Ä/c Háº£i', '', 1, 'hoandtt'),
(24, '2010-06-08', 1, '07h00: Há»p Thanh tra Sá»Ÿ', 'Tháº£o', 'PhÃ²ng há»p', '', 'Tuáº¥n', '', 1, 'thaonm'),
(25, '2010-06-10', 1, '08h00: Há»p bÃ¡o thÃ´ng tin vá» Há»™i chá»£ triá»ƒn lÃ£m hÃ ng cÃ´ng nghiá»‡p nÃ´ng thÃ´n', '', 'ÄÃ i Truyá»n hÃ¬nh', '', 'Ä/c TrÆ°Æ¡ng', '', 1, 'truongpq'),
(26, '2010-06-09', 0, '07h30: Thanh quyáº¿t toÃ¡n kinh phÃ­ táº­p huáº¥n.', 'Ä/c Háº£i', 'Há»™i trÆ°á»ng', 'PhÃ²ng QLBCVT', 'CB PhÃ²ng BCVT', '', 1, 'truongpq'),
(27, '2010-06-10', 1, '07h00: Äi cÃ´ng tÃ¡c ÄÃ  Náºµng (02 ngÃ y)', '', 'ÄÃ  Náºµng', '', 'Ä/c Háº£i', '', 1, 'admin'),
(28, '2010-06-12', 1, 'Tham gia BGK Há»™i thi tin há»c tráº» toÃ n tá»‰nh', '', 'TrÆ°á»ng Cao Ä‘áº³ng nghá»', '', 'Ä/c Kha, Trung - ITA', '', 1, 'admin'),
(29, '2010-06-08', 0, '14h00: BÃ¡o cÃ¡o vá» viá»‡c nÃ¢ng cáº¥p website cá»§a Sá»Ÿ', 'Ä/c Háº£i', 'PhÃ²ng há»p', '', 'Ä/c CÆ°á»ng, Kha, BBT website, phá»¥ trÃ¡ch cÃ¡c phÃ²ng', '', 1, 'admin'),
(30, '2010-06-09', 0, '14h00: LÃ m viá»‡c vá»›i VP ÄoÃ n ÄBQH vÃ  HÄND v/v triá»ƒn khai iDesk', '', 'VP ÄoÃ n ÄBQH vÃ  HÄND', '', 'Kha - Vinh', '', 1, 'admin'),
(31, '2011-04-18', 1, ' - QuÃ¡n triá»‡t Nghá»‹ quyáº¿t Äáº¡i há»™i Äáº£ng bá»™ huyá»‡n, tá»‰nh', '', 'H. TrÆ°á»ng', '', 'CT-PCT', '', 1, 'admin'),
(32, '2011-04-18', 0, ' - Há»p lÃ£nh Ä‘áº¡o UBND huyá»‡n + ThÃ´ng qua thiáº¿t káº¿ ngÃ£ ba Ä‘Æ°á»ng má»›i, cÅ© ( HoÃ i TÃ¢n)', 'CT-PCT', 'P.Há»p A', '', 'TT.HÄND', 'LÄVP', 1, 'admin'),
(33, '2011-04-18', 0, ' - Há»p cÃ´ng bá»‘ Quyáº¿t Ä‘á»‹nh thanh tra cÃ´ng tÃ¡c QLÄTXD kiÃªn cá»‘ hÃ³a trÆ°á»ng há»c', 'CT-PCT', 'P.Há»p B', '', ' Theo GM', 'C. SÆ°Æ¡ng', 1, 'admin'),
(34, '2011-04-19', 1, ' - BÃ n viá»‡c xÃ¢y dá»±ng trÆ°á»ng há»c á»Ÿ Tam Quan nam', 'A.Há»™', 'T.Q.Nam', '', 'Theo GM', '', 1, 'admin'),
(35, '2011-04-19', 1, ' - LÃ m viá»‡c vá»›i á»¦y ban kiá»ƒm tra huyá»‡n á»§y', '', 'P.A.CÃ´ng', '', 'A.CÃ´ng', '', 1, 'admin'),
(36, '2011-04-19', 0, ' - Há»p xá»­ lÃ½ vÆ°á»›ng máº¯c vá» XDCB, quy hoáº¡ch bá»‘ trÃ­ dÃ¢n cÆ° giai Ä‘oáº¡n 2011-2015', 'CT-PCT', 'P.Há»p A', '', 'TT.HÄND', 'A.Hiá»n', 1, 'admin'),
(37, '2011-04-20', 1, ' - Há»p BCÄ báº§u cá»­ Äáº¡i biá»ƒu QH vÃ  Ä‘áº¡i biá»ƒu HÄND cÃ¡c cáº¥p', '', 'VP.H.á»§y', '', 'A.Viá»‡t, A.CÃ´ng', '', 1, 'admin'),
(38, '2011-04-20', 1, ' - LÃ m viá»‡c vá»›i Há»™i chá»¯ tháº­p Ä‘á» vá» Äáº¡i há»™i Há»™i CTÄ huyá»‡n', '', 'P.Há»p A', '', 'A. Há»™', 'C.SÆ°Æ¡ng', 1, 'admin'),
(39, '2011-04-20', 1, ' - Há» triá»ƒn khai xá»­ lÃ½ há»‡ thá»‘ng cáº¥p nÆ°á»›c sáº¡ch Tam Quan', 'A.XÃ´', 'P.A.xÃ´', '', 'Theo GM', 'A.Hiá»n', 1, 'admin'),
(40, '2011-04-20', 0, '-  LÃ m viá»‡c vá»›i phÃ²ng GD ÄT xá»­ lÃ½ giÃ¡o viÃªn máº«u giÃ¡o', 'A.Há»™', 'P.A.Há»™', '', ' ', '', 1, 'admin'),
(41, '2011-04-21', 1, ' - LÃ m viá»‡c vá»›i xÃ£ HoÃ i PhÃº vá» tÃ¬nh hÃ¬nh kinh táº¿ - xÃ£ há»™i nÄƒm 2010, nhiá»‡m vá»¥ nÄƒm 2011', 'A.Viá»‡t', 'P.Há»p A', '', 'Theo GM', 'A.Hiá»n', 1, 'admin'),
(42, '2011-04-21', 1, ' - Há»p Ban Ä‘áº¡i Ä‘iá»‡n Há»™i Ä‘á»“ng quáº£n tri ngÃ¢n hÃ ng CSXH huyá»‡n', 'A.Há»™', 'NH CSXH', '', ' ', 'C.SÆ°Æ¡ng', 1, 'admin'),
(43, '2011-04-21', 1, ' - LÃ m viá»‡c vá»›i Ban quáº£n lÃ½ CCN Ä‘á»ƒ xá»­ lÃ½ má»™t sá»‘ vÆ°á»›ng máº¯c táº¡i cÃ¡c CCN', 'A.XÃ´', 'P.A.xÃ´', '', 'Theo GM', 'A.Hiá»n', 1, 'admin'),
(44, '2011-04-21', 0, ' - Há»p triá»ƒn khai phÆ°Æ¡ng Ã¡n phá»¥c há»“i Ä‘Ã n lá»£n', 'A.CÃ´ng', 'Há»™i trÆ°á»ng', '', 'Theo GM', 'C.Nháº­t', 1, 'admin'),
(45, '2011-04-21', 0, ' - Dá»± nghe thÃ´ng qua phÆ°Æ¡ng Ã¡n xÃ¢y dá»±ng trÃ n há»“ TÃºy Tháº¡nh', 'CT-PCT', 'P.Há»p A', '', 'TT.HÄND', 'C. Nháº­t', 1, 'admin'),
(46, '2011-04-22', 1, ' - Há»™i Ã½ thÆ°á»ng trá»±c huyá»‡n á»§y', ' ', 'VP.H.á»§y', '', 'A.Viá»‡t', '', 1, 'admin'),
(47, '2011-04-22', 1, ' - Há»p triá»ƒn khai nhiá»‡m vá»¥ VÄƒn hÃ³a TT nÄƒm 2011', 'A.Há»™', 'P.Há»p A', '', 'Theo GM', 'C.SÆ°Æ¡ng', 1, 'admin'),
(48, '2011-04-22', 1, ' - LÃ m viá»‡c vá»›i Há»™i Ä‘á»“ng Ä‘á»‹nh giÃ¡ thu há»“i tÃ i sáº£n laphÃ´ng nhÃ  huyá»‡n á»§y', 'A.XÃ´', 'P.Há»p B', '', 'Theo GM', 'A.Hiá»n', 1, 'admin'),
(49, '2011-04-22', 1, ' - Há»p chi bá»™ Ban  QLR phÃ²ng há»™', 'UBKTHU', 'Ban QLRPH', '', 'A.CÃ´ng', '', 1, 'admin'),
(50, '2011-04-22', 0, ' - Trá»±c bÃ¡o cÃ¡c khá»‘i', 'CT-PCT', 'P.CT-PCT', '', 'LÄBP', 'LÄVP', 1, 'admin'),
(51, '2011-04-22', 0, ' - LÃ m viá»‡c vá»›i Hat5 kiá»ƒm lÃ¢m, cÃ´ng an huyá»‡n vá» xá»­ lÃ½ VPHC Ä‘á»‘i vá»›i Ã´ng GiÃ¡c (TQ)', 'A.CÃ´ng', 'P.A.CÃ´ng', '', 'Theo GM', 'C.Nháº­t', 1, 'admin'),
(52, '2011-04-20', 0, ' - Há»p tiá»ƒu ban xÃ¢y dá»±ng chÆ°Æ¡ng trÃ¬nh hÃ nh Ä‘á»™ng thá»±c hiá»‡n Nghá»‹ Quyáº¿t cá»§a Huyá»‡n á»§y vá» phÃ¡t triá»ƒn CN, TTCN, lÃ ng nghá», khai thÃ¡c, nuÃ´i trá»“ng, cháº¿ biáº¿n thá»§y sáº£n', 'A.Viá»‡t, A.CÃ´ng', 'P.Há»p A', '', 'Theo GM', 'A.Hiá»n', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `news` tinyint(4) NOT NULL DEFAULT '0',
  `lawdoc` tinyint(4) NOT NULL DEFAULT '0',
  `faq` tinyint(4) NOT NULL DEFAULT '0',
  `document` tinyint(4) NOT NULL DEFAULT '0',
  `notice` tinyint(4) NOT NULL DEFAULT '0',
  `ad` tinyint(4) NOT NULL DEFAULT '0',
  `timetable` tinyint(4) NOT NULL DEFAULT '0',
  `timetableapproval` tinyint(4) NOT NULL DEFAULT '0',
  `imagelist` tinyint(4) NOT NULL DEFAULT '0',
  `newsapproval` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `pass`, `admin`, `news`, `lawdoc`, `faq`, `document`, `notice`, `ad`, `timetable`, `timetableapproval`, `imagelist`, `newsapproval`) VALUES
('admin', 'Quáº£n trá»‹ há»‡ thá»‘ng', '21232f297a57a5a743894a0e4a801fc3', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `useronline`
--

CREATE TABLE `useronline` (
  `session` char(100) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useronline`
--

INSERT INTO `useronline` (`session`, `time`) VALUES
('sr3i41df0ejl35ptorckqehs57', 1465891898);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `link` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ghi_chu` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `trang_thai` int(2) NOT NULL,
  `imagelink` varchar(400) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hot` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `link`, `ghi_chu`, `trang_thai`, `imagelink`, `hot`) VALUES
(2, '/upload/files/testvideo.flv', 'video1', 1, '/upload/files/IMG_2142.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `weblist`
--

CREATE TABLE `weblist` (
  `id` int(20) NOT NULL,
  `file` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `weblist`
--

INSERT INTO `weblist` (`id`, `file`, `link`) VALUES
(1, 'ITA', 'http://itacenter.vn'),
(7, 'Sá»Ÿ TTTT', 'http://www.stttt.binhdinh.gov.vn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`adid`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatid`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `documentfield`
--
ALTER TABLE `documentfield`
  ADD PRIMARY KEY (`docfieldid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faqid`);

--
-- Indexes for table `imagelist`
--
ALTER TABLE `imagelist`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `lawdoc`
--
ALTER TABLE `lawdoc`
  ADD PRIMARY KEY (`docid`);

--
-- Indexes for table `lawdocfield`
--
ALTER TABLE `lawdocfield`
  ADD PRIMARY KEY (`fieldid`);

--
-- Indexes for table `lawdoclevel`
--
ALTER TABLE `lawdoclevel`
  ADD PRIMARY KEY (`levelid`);

--
-- Indexes for table `lawdoctype`
--
ALTER TABLE `lawdoctype`
  ADD PRIMARY KEY (`typeid`);

--
-- Indexes for table `lawdoc_loai`
--
ALTER TABLE `lawdoc_loai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`listid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menuid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`newsid`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org`
--
ALTER TABLE `org`
  ADD PRIMARY KEY (`orgid`);

--
-- Indexes for table `orgfield`
--
ALTER TABLE `orgfield`
  ADD PRIMARY KEY (`orgfieldid`);

--
-- Indexes for table `orgplace`
--
ALTER TABLE `orgplace`
  ADD PRIMARY KEY (`orgplaceid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rssnews`
--
ALTER TABLE `rssnews`
  ADD PRIMARY KEY (`rssnewsid`);

--
-- Indexes for table `rssurl`
--
ALTER TABLE `rssurl`
  ADD PRIMARY KEY (`rssurlid`);

--
-- Indexes for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`timetableid`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weblist`
--
ALTER TABLE `weblist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `adid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `documentfield`
--
ALTER TABLE `documentfield`
  MODIFY `docfieldid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `imagelist`
--
ALTER TABLE `imagelist`
  MODIFY `imageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `lawdoc`
--
ALTER TABLE `lawdoc`
  MODIFY `docid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `lawdocfield`
--
ALTER TABLE `lawdocfield`
  MODIFY `fieldid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lawdoclevel`
--
ALTER TABLE `lawdoclevel`
  MODIFY `levelid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lawdoctype`
--
ALTER TABLE `lawdoctype`
  MODIFY `typeid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lawdoc_loai`
--
ALTER TABLE `lawdoc_loai`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `listid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menuid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `newsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=398;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `org`
--
ALTER TABLE `org`
  MODIFY `orgid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orgfield`
--
ALTER TABLE `orgfield`
  MODIFY `orgfieldid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orgplace`
--
ALTER TABLE `orgplace`
  MODIFY `orgplaceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `rssnews`
--
ALTER TABLE `rssnews`
  MODIFY `rssnewsid` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;
--
-- AUTO_INCREMENT for table `rssurl`
--
ALTER TABLE `rssurl`
  MODIFY `rssurlid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `timetableid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `weblist`
--
ALTER TABLE `weblist`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
