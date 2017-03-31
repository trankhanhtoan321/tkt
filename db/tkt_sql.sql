-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 03:10 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkt_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `billdetails`
--

CREATE TABLE `billdetails` (
  `billdetail_id` int(11) NOT NULL,
  `billdetail_bill_id` int(11) NOT NULL,
  `billdetail_pro_id` int(11) NOT NULL,
  `billdetail_qty` int(11) NOT NULL,
  `billdetail_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL,
  `bill_customer_id` int(11) NOT NULL,
  `bill_date` int(11) NOT NULL,
  `bill_value` int(11) NOT NULL,
  `bill_status` int(11) NOT NULL,
  `bill_customer_name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogcategory`
--

CREATE TABLE `blogcategory` (
  `blogcat_id` int(11) NOT NULL,
  `blogcat_name` text COLLATE utf8_unicode_ci NOT NULL,
  `blogcat_description` text COLLATE utf8_unicode_ci,
  `blogcat_parent_id` int(11) DEFAULT '0',
  `blogcat_seo_title` text COLLATE utf8_unicode_ci,
  `blogcat_seo_keyword` text COLLATE utf8_unicode_ci,
  `blogcat_seo_description` text COLLATE utf8_unicode_ci,
  `blogcat_image` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogcategory`
--

INSERT INTO `blogcategory` (`blogcat_id`, `blogcat_name`, `blogcat_description`, `blogcat_parent_id`, `blogcat_seo_title`, `blogcat_seo_keyword`, `blogcat_seo_description`, `blogcat_image`) VALUES
(6, 'AEC', '', 0, '', '', '', '/uploads/icons/none.jpg'),
(8, 'Chương Trình Đào Tạo', '', 0, '', '', '', '/uploads/icons/none.jpg'),
(9, 'Tin Tức', '', 0, '', '', '', '/uploads/icons/none.jpg'),
(10, 'Tài Liệu TOEIC', '', 0, '', '', '', '/uploads/icons/none.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `blog_name` text COLLATE utf8_unicode_ci NOT NULL,
  `blog_content` text COLLATE utf8_unicode_ci,
  `blog_time` int(11) NOT NULL DEFAULT '0',
  `blog_cat_ids` text COLLATE utf8_unicode_ci,
  `blog_image` text COLLATE utf8_unicode_ci,
  `blog_seo_title` text COLLATE utf8_unicode_ci,
  `blog_seo_keyword` text COLLATE utf8_unicode_ci,
  `blog_seo_description` text COLLATE utf8_unicode_ci,
  `blog_user_id` int(11) NOT NULL DEFAULT '0',
  `blog_views` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_name`, `blog_content`, `blog_time`, `blog_cat_ids`, `blog_image`, `blog_seo_title`, `blog_seo_keyword`, `blog_seo_description`, `blog_user_id`, `blog_views`) VALUES
(1, 'Giới thiệu', '<p><span style="font-size:16px">Được th&agrave;nh lập từ th&aacute;ng 08 năm 2012 v&agrave; ph&aacute;t triển đến nay, với c&aacute;c chương tr&igrave;nh đạo tạo:</span></p>\r\n\r\n<ul>\r\n	<li><span style="font-size:16px"><strong>Tiếng Anh Giao Tiếp Quốc Tế</strong></span></li>\r\n	<li><span style="font-size:16px"><strong>Luyện Thi TOEIC cấp tốc</strong></span></li>\r\n	<li><span style="font-size:16px"><strong>Tiếng Anh Thiếu Nhi</strong></span></li>\r\n	<li><span style="font-size:16px"><strong>Tin Học Văn Ph&ograve;ng A &ndash; B, Đồ họa &ndash; Lập tr&igrave;nh.</strong></span></li>\r\n</ul>\r\n\r\n<p><span style="font-size:16px">Với mục ti&ecirc;u đ&agrave;o tạo gi&uacute;p cho học vi&ecirc;n khi đến với AEC giao tiếp tiếng Anh lưu lo&aacute;t v&agrave; đạt được th&agrave;nh t&iacute;ch cao trong c&aacute;c cuộc thi tiếng Anh quốc tế. Ch&iacute;nh v&igrave; vậy, AEC lu&ocirc;n quan t&acirc;m đến chất lượng đ&agrave;o tạo v&agrave; học tập của từng học vi&ecirc;n khi tham gia học tại AEC, gi&uacute;p cho học vi&ecirc;n giảm thiểu tối đa chi ph&iacute; - r&uacute;t ngắn thời gian v&agrave; giao tiếp tiếng Anh lưu lo&aacute;t từ 6 đến 12 th&aacute;ng.</span></p>\r\n\r\n<p><span style="font-size:16px">B&ecirc;n cạnh đ&oacute;, AEC cũng lu&ocirc;n đề cao v&agrave; quan t&acirc;m đến c&aacute;c quyền lợi &ndash; ch&iacute;nh s&aacute;ch hỗ trợ d&agrave;nh cho học vi&ecirc;n trong qu&aacute; tr&igrave;nh học tập tại AEC như:</span></p>\r\n\r\n<ul>\r\n	<li><span style="font-size:16px"><strong>Chia nhỏ v&agrave; đ&oacute;ng học ph&iacute; nhiều lần, giảm bớt kh&oacute; khăn về t&agrave;i ch&iacute;nh cho học vi&ecirc;n.</strong></span></li>\r\n	<li><span style="font-size:16px"><strong>Học vi&ecirc;n được tặng k&egrave;m c&aacute;c lớp học chuy&ecirc;n đề miễn ph&iacute; về: Ph&aacute;t &Acirc;m &ndash; Từ Vựng &ndash;Văn Phạm &ndash; Giao Tiếp.</strong></span></li>\r\n	<li><span style="font-size:16px"><strong>Học vi&ecirc;n lu&ocirc;n được xếp lớp học k&egrave;m &ndash; phụ đạo ngo&agrave;i giờ khi vắng c&aacute;c buổi học v&igrave; bất kỳ l&yacute; do n&agrave;o.</strong></span></li>\r\n	<li><span style="font-size:16px"><strong>Được tặng Balo AEC &ndash; &Aacute;o thun AEC v&agrave; ưu đ&atilde;i giảm ph&iacute; được &aacute;p dụng thường xuy&ecirc;n theo c&aacute;c chương tr&igrave;nh khuyến học tại AEC.</strong></span></li>\r\n	<li><span style="font-size:16px"><strong>Học vi&ecirc;n được tham gia chương tr&igrave;nh c&acirc;u lạc bộ tiếng Anh v&agrave;o chủ nhật h&agrave;ng tuần với gi&aacute;o vi&ecirc;n nước ngo&agrave;i.</strong></span></li>\r\n	<li><span style="font-size:16px"><strong>Được bảo lưu kh&oacute;a học &ndash; bảo h&agrave;nh kh&oacute;a học xuy&ecirc;n suốt trong 4 năm tiếp theo sau khi học tại AEC.</strong></span></li>\r\n</ul>\r\n\r\n<p><span style="font-size:16px">Với phương ph&aacute;p đ&agrave;o tạo &ldquo;Phản Xạ Tư Duy&rdquo; độc quyền tại AEC, một phương ph&aacute;p vừa học vừa chơi với m&ocirc;i trường năng động &ndash; cuồng nhiệt &ndash; th&acirc;n thiện đ&atilde; tạo n&ecirc;n sự th&iacute;ch th&uacute; học tập, gi&uacute;p học vi&ecirc;n được r&egrave;n luyện khả năng Nghe - N&oacute;i li&ecirc;n tục, chiếm 80% trong tổng thời gian của buổi học. Học vi&ecirc;n lu&ocirc;n được gi&aacute;o vi&ecirc;n chỉnh sửa ph&aacute;t &acirc;m &ndash; tăng cường vốn từ vựng &ndash; r&egrave;n luyện ngữ điệu, v&agrave; ngữ ph&aacute;p v&agrave; c&aacute;c kĩ năng tranh luận &ndash; thuyết tr&igrave;nh bằng tiếng Anh trong suốt qu&aacute; tr&igrave;nh học, tạo cho học vi&ecirc;n được sự tự tin, s&aacute;ng tạo v&agrave; kh&ocirc;ng rụt r&egrave; khi giao tiếp tiếng Anh.</span></p>\r\n\r\n<p><br />\r\n<span style="font-size:16px">Về gi&aacute;o tr&igrave;nh được &aacute;p dụng tại AEC l&agrave; những t&agrave;i liệu độc quyền do ch&iacute;nh c&aacute;c chuy&ecirc;n gia l&agrave;m việc trong c&aacute;c c&ocirc;ng ty, tổ chức nước ngo&agrave;i - c&ugrave;ng đội ngũ gi&aacute;o vi&ecirc;n chuy&ecirc;n nghiệp bi&ecirc;n soạn v&agrave; chọn lọc, s&aacute;t thực với y&ecirc;u cầu của người học tiếng Anh, thực tế với đời sống cũng như c&ocirc;ng việc.</span></p>\r\n\r\n<p><br />\r\n<span style="font-size:16px">Với đội ngũ giảng vi&ecirc;n trẻ - năng động &ndash; phong c&aacute;ch - nhiệt t&igrave;nh v&agrave; được đ&agrave;o tạo chuy&ecirc;n nghiệp. C&ugrave;ng với sự hỗ trợ tận t&acirc;m của to&agrave;n thể đội ngũ nh&acirc;n vi&ecirc;n, AEC cam kết mang đến cho c&aacute;c bạn học vi&ecirc;n một m&ocirc;i trường học tiếng Anh vui nhộn &ndash; th&acirc;n thiện - th&iacute;ch th&uacute; &ndash; s&aacute;ng tạo để tạo động lực học tập cho c&aacute;c học vi&ecirc;n theo đuổi việc học v&agrave; chinh phục tiếng Anh &ndash; theo đuổi ước mơ của bản th&acirc;n.</span></p>\r\n\r\n<h1><span style="font-size:16px"><em><strong>Quyền Lợi Khi Học Tại AEC</strong></em></span></h1>\r\n\r\n<ol>\r\n	<li><span style="font-size:16px">Hổ trợ tham gia c&aacute;c lớp kỹ năng phỏng vấn - xin việc; kỹ năng giao tiếp;...</span></li>\r\n	<li><span style="font-size:16px">Tham gia c&aacute;c lớp văn phạm ( ph&aacute;t &acirc;m - phản xạ từ vựng,...) ho&agrave;n to&agrave;n miễn ph&iacute;</span></li>\r\n	<li><span style="font-size:16px">được chia nhỏ học ph&iacute; ( &nbsp;2 hoặc 3 lần t&ugrave;y kh&oacute;a học, mỗi lần c&aacute;ch nhau 15 ng&agrave;y)</span></li>\r\n	<li><span style="font-size:16px">Tham gia c&acirc;u lạc bộ tiếng tr&ograve; chuyện c&ugrave;ng t&acirc;y - chủ nhật h&agrave;ng tuần tại quận 1.</span></li>\r\n	<li><span style="font-size:16px">Kh&oacute;a 6 th&aacute;ng:<br />\r\n	* tặng trọn kh&oacute;a tin A, Bvp - ĐH khoa học tự nhi&ecirc;n cấp bằng ( trị gi&aacute; 1,2 triệu)<br />\r\n	* Bảo lưu 2 lần v&agrave; học lại 1 lần trong v&ograve;ng 2 năm.</span></li>\r\n	<li><span style="font-size:16px">Kh&oacute;a 12 th&aacute;ng:<br />\r\n	* Tặng trọn kh&oacute;a tin A, Bvp - ĐH khoa học tự nhi&ecirc;n cấp bằng ( trị gi&aacute; 1,2 triệu)<br />\r\n	* Tặng kh&oacute;a luyện TOEIC 650 điểm (trị gi&aacute; 2 triệu)<br />\r\n	* Bảo lưu 5 lần v&agrave; học lại 5 lần trong v&ograve;ng 4 năm</span></li>\r\n</ol>\r\n\r\n<h1><span style="font-size:16px"><em><strong>Quy Định Khi Học Tại AEC</strong></em></span></h1>\r\n\r\n<ol>\r\n	<li><span style="font-size:16px">Học vi&ecirc;n phải đi học đầy đủ, đ&uacute;ng giờ, đ&uacute;ng lớp. Kh&ocirc;ng được vắng qu&aacute; 6 buổi / kh&oacute;a học.</span></li>\r\n	<li><span style="font-size:16px">Khi muốn chuyển ca , chuyển lướp, bảo lưu, xếp lớp. vui l&ograve;ng mang bi&ecirc;n lai đến ph&ograve;ng ghi danh để được hổ trợ.( chỉ giải quyết dựa v&agrave;o bi&ecirc;n lai học ph&iacute;).</span></li>\r\n	<li><span style="font-size:16px">Trong v&ograve;ng 10 ng&agrave;y kể từ ng&agrave;y nghỉ học phải đến ph&ograve;ng ghi danh bảo lưu kh&oacute;a học ( nếu kh&ocirc;ng sẽ bị hủy).</span></li>\r\n	<li><span style="font-size:16px">Để đảm bảo chất lượng lớp học v&agrave; kết quả học tập khi gặp kh&oacute; khăn, hoặc phản hồi vui l&ograve;ng li&ecirc;n hệ tại ph&ograve;ng ghi danh để được hổ trợ trực tiếp hoặc li&ecirc;n lạc qua c&aacute;c số điện thoại sau: 08.62.72.50.50; 0981.823.638 (Mr.M&atilde;i);</span></li>\r\n</ol>\r\n', 1490714406, '["6"]', '/uploads/icons/none.jpg', '', '', '', 0, 0),
(2, 'Lịch Khai Giảng', '', 1490799836, '["6"]', '/uploads/icons/none.jpg', '', '', '', 0, 0),
(3, 'Anh Văn Giao Tiếp', '', 1490799858, '["8"]', '/uploads/icons/none.jpg', '', '', '', 0, 0),
(4, 'Luyện Thi TOEIC', '', 1490799870, '["8"]', '/uploads/icons/none.jpg', '', '', '', 0, 0),
(5, 'Tin Học Ứng Dụng', '', 1490799882, '["8"]', '/uploads/icons/none.jpg', '', '', '', 0, 0),
(6, 'Top 7 Công Việc Lương Cao, Ít Căng Thẳng', '<p><img src="http://static.ybox.vn/2016/11/1/a24ab106-9fc4-11e6-990e-d2d453167796.jpg" /></p>\r\n\r\n<p>Sở lao động Mỹ thực hiện sự so s&aacute;nh mức lương v&agrave; mức độ căng thẳng của 767 c&ocirc;ng việc kh&aacute;c nhau, kết quả cho thấy c&oacute; 7 c&ocirc;ng việc mức lương tốt nhưng chịu &iacute;t &aacute;p lực.</p>\r\n\r\n<p><img alt="" src="http://streaming1.danviet.vn/upload/2-2016/images/2016-05-06/1462508923-untitled-infographic_block_1.jpeg" /></p>\r\n\r\n<p><img alt="" src="http://streaming1.danviet.vn/upload/2-2016/images/2016-05-06/1462508923-untitled-infographic_block_2.jpeg" /></p>\r\n\r\n<p><img alt="" src="http://streaming1.danviet.vn/upload/2-2016/images/2016-05-06/1462508923-untitled-infographic_block_3.jpeg" /></p>\r\n\r\n<p><img alt="" src="http://streaming1.danviet.vn/upload/2-2016/images/2016-05-06/1462508923-untitled-infographic_block_4.jpeg" /></p>\r\n\r\n<p><img alt="" src="http://streaming1.danviet.vn/upload/2-2016/images/2016-05-06/1462508923-untitled-infographic_block_5.jpeg" /></p>\r\n\r\n<p><img alt="" src="http://streaming1.danviet.vn/upload/2-2016/images/2016-05-06/1462508923-untitled-infographic_block_6.jpeg" /></p>\r\n\r\n<p><img alt="" src="http://streaming1.danviet.vn/upload/2-2016/images/2016-05-06/1462508923-untitled-infographic_block_7.jpeg" /></p>\r\n\r\n<p><img alt="" src="http://streaming1.danviet.vn/upload/2-2016/images/2016-05-06/1462508923-untitled-infographic_block_8.jpeg" /></p>\r\n\r\n<p><img alt="" src="http://streaming1.danviet.vn/upload/2-2016/images/2016-05-06/1462508923-untitled-infographic_block_9.jpg" /></p>\r\n', 1490843482, '["9"]', '/uploads/images/blogs/9f2a09e04d1aa6b0b1d54733f47211a6.jpg', '', '', '', 0, 0),
(7, '16 Tips Giúp CV Chuẩn Hơn Trong Khi Đi Tìm Việc', '<p><img src="http://static.ybox.vn/2016/10/25/8568c21a-9a53-11e6-b818-8eccd64ac542.jpg" /></p>\r\n\r\n<p>Nếu bạn đang chuẩn bị bắt đầu t&igrave;m việc hoặc c&oacute; &yacute; định nhảy việc mới th&igrave; chắc chắn b&acirc;y giờ bạn đang nghĩ đến việc l&agrave;m sao để CV đẹp v&agrave; g&acirc;y ấn tượng hơn đ&uacute;ng kh&ocirc;ng? Lần gần nhất bạn viết CV l&agrave; khi n&agrave;o? L&agrave;m thế n&agrave;o để bạn thể hiện được c&aacute;c kĩ năng v&agrave; kiến thức hiện tại để ứng tuyển cho một c&ocirc;ng việc c&oacute; vẻ kh&ocirc;ng li&ecirc;n quan cho lắm? L&agrave;m thế n&agrave;o để CV của m&igrave;nh nổi bật hơn so với c&aacute;c bạn kh&aacute;c nhỉ?</p>\r\n\r\n<p>CV mới đầu nh&igrave;n th&igrave; thấy ngắn v&agrave; rất dễ viết. Nhưng khi bắt tay v&agrave;o l&agrave;m rồi mới thấy n&oacute; kh&ocirc;ng hề dễ như thế. C&oacute; những bạn m&igrave;nh gặp d&agrave;nh cả 1-2 ng&agrave;y h&igrave; hục viết CV m&agrave; vẫn chưa xong đấy. Ch&iacute;nh v&igrave; khổ như thế n&ecirc;n nhiều bạn nhanh nản, lần tới cứ nghĩ đến viết CV l&agrave; sợ.</p>\r\n\r\n<p>Nhưng m&agrave; đừng sợ bạn hiền ơi, l&agrave; một người đ&atilde; tư vấn v&agrave; hướng dẫn viết CV cho nhiều bạn, h&ocirc;m nay m&igrave;nh list ra đ&acirc;y 20 tips bạn hiền c&oacute; thể &aacute;p dụng được ngay để viết v&agrave;o trong CV của bản th&acirc;n nh&eacute;.</p>\r\n\r\n<h2>1. CV cố gắng ngắn gọn trong 1-2 trang th&ocirc;i</h2>\r\n\r\n<p>Th&agrave;nh thật nh&eacute;, chẳng c&oacute; ai cấm hoặc chẳng c&oacute; luật n&agrave;o bắt bạn phải viết CV trong 1 trang hay 10 trang cả. Tuy nhi&ecirc;n v&igrave; nh&agrave; tuyển dụng ai cũng rất l&agrave; bận, m&agrave; CV th&igrave; phải li&ecirc;n quan đến c&ocirc;ng việc chứ kh&ocirc;ng phải nơi liệt k&ecirc; tất cả những g&igrave; m&igrave;nh c&oacute;, n&ecirc;n m&igrave;nh khuyến kh&iacute;ch c&aacute;c bạn nộp một bản CV d&agrave;i tối đa 2 trang th&ocirc;i nh&eacute;. H&atilde;y chọn những th&ocirc;ng tin li&ecirc;n quan nhất đến c&ocirc;ng việc để viết v&agrave;o CV. Đừng viết những thứ kh&ocirc;ng li&ecirc;n quan như Giải thưởng (nếu kh&ocirc;ng li&ecirc;n quan), Sở th&iacute;ch, Điểm Yếu, v&acirc;n v&acirc;n nh&eacute;.</p>\r\n\r\n<h2>2. Vui l&ograve;ng đưa cho người kh&aacute;c đọc để t&igrave;m lỗi ch&iacute;nh tả</h2>\r\n\r\n<p>C&aacute; nh&acirc;n m&igrave;nh v&agrave; m&igrave;nh nghĩ l&agrave; với nh&agrave; tuyển dụng tiếng Anh kha kh&aacute; nữa, kị nhất l&agrave; đọc CV m&agrave; thấy c&aacute;c bạn viết sai lỗi ch&iacute;nh tả. V&iacute; dụ nh&igrave;n lướt CV m&agrave; thấy một đống từ k&igrave; cục kiểu như l&agrave; &lsquo;freinds&rsquo;, &lsquo;creatitivity&rsquo;, &lsquo;yonger&rsquo; th&igrave; chắc chắn sẽ rất kh&oacute; chịu đấy. Nếu bạn viết v&agrave;o trong CV l&agrave; m&igrave;nh c&oacute; kĩ năng tiếng Anh tốt, th&igrave; h&atilde;y chứng minh lu&ocirc;n c&aacute;i tốt đ&oacute; trong nội dung CV nh&eacute;.</p>\r\n\r\n<h2>3. Nhớ chia th&igrave; động từ cho đ&uacute;ng nh&eacute;</h2>\r\n\r\n<p>&Agrave; thật ra CV kh&ocirc;ng phải b&agrave;i tập tiếng Anh đ&acirc;u. Nhưng việc bạn chia th&igrave; động từ đ&uacute;ng cũng giống cho nh&agrave; tuyển dụng đọc CV của c&aacute;c bạn trơn tru hơn đấy. Với c&aacute;c c&ocirc;ng việc, hoạt động m&agrave; c&aacute;c bạn đ&atilde; kết th&uacute;c, kh&ocirc;ng l&agrave;m nữa rồi, vui l&ograve;ng chia động từ th&igrave; qu&aacute; khứ (managed, delivered, organized). Với c&aacute;c c&ocirc;ng việc m&agrave; hiện tại vẫn đang l&agrave;m, bạn c&oacute; thể d&ugrave;ng verb-ing hoặc hiện tại đơn nh&eacute; (manage, deliver, organize).</p>\r\n\r\n<h2>4. Đừng d&ugrave;ng xưng h&ocirc; c&aacute; nh&acirc;n nh&eacute;</h2>\r\n\r\n<p>CV l&agrave; một bản chuy&ecirc;n nghiệp, n&ecirc;n hạn chế d&ugrave;ng c&aacute;c từ xưng hộ c&aacute; nh&acirc;n như l&agrave; &lsquo;I&rsquo;, &lsquo;me&rsquo; hoặc &lsquo;my&rsquo; hoặc &lsquo;your&rsquo; chẳng hạn. V&iacute; dụ thay v&igrave; viết l&agrave;&nbsp;&ldquo;I hit and exceeded company sales quotas 100% of the time&rdquo;, bạn c&oacute; thể viết l&agrave; &ldquo;Hit and exceeded sales quotas 100% of the time.&rdquo;</p>\r\n\r\n<h2>5. Gửi CV bằng file PDF nh&eacute;</h2>\r\n\r\n<p>Thật ra c&aacute;c bạn gửi CV bằng file PDF hoặc file .doc cũng được, kh&ocirc;ng c&oacute; ai cấm cả. Tuy nhi&ecirc;n m&igrave;nh khuyến kh&iacute;ch l&agrave; n&ecirc;n gửi PDF để tr&aacute;nh bị lỗi định dạng font chữ rồi m&agrave;u m&egrave; c&aacute;c thứ th&igrave; c&aacute;c bạn n&ecirc;n gửi PDF l&agrave; tốt nhất. L&agrave;m thế n&agrave;o để c&oacute; file PDF hả? L&uacute;c lưu file trong Word, c&aacute;c bạn chọn định dạng file l&agrave; PDF ở chỗ Save As &yacute; nh&eacute;.</p>\r\n\r\n<h2>6. Nhớ lưu t&ecirc;n file đ&uacute;ng nh&eacute;</h2>\r\n\r\n<p>C&oacute; một lỗi m&agrave; m&igrave;nh thấy cực cực k&igrave; tiếc cho mấy bạn đấy l&agrave; lưu t&ecirc;n file sai hoặc thậm ch&iacute; kh&ocirc;ng lưu t&ecirc;n file. C&aacute;c bạn ơi nếu nh&agrave; tuyển dụng m&agrave; nhận một c&aacute;i file CV kh&ocirc;ng c&oacute; t&ecirc;n bạn trong đ&oacute;, th&igrave; chắc chắn 100% l&agrave; c&aacute;i CV đ&oacute; sẽ fail &ndash; kh&ocirc;ng cần viết nội dung b&ecirc;n trong như thế n&agrave;o. Vậy n&ecirc;n bạn hiền nhớ lưu t&ecirc;n của bạn v&agrave;o trong file CV nh&eacute;. T&ecirc;n cơ bản nhất l&agrave; HọT&ecirc;n_CV.pdf.</p>\r\n\r\n<h2>7. Viết đ&uacute;ng thứ tự c&aacute;c đề mục trong CV</h2>\r\n\r\n<p>Thường th&igrave; trong một CV sẽ cần c&aacute;c phần cơ bản đấy l&agrave; Th&ocirc;ng tin c&aacute; nh&acirc;n, Kĩ năng, Kinh nghiệm l&agrave;m việc, Hoạt động ngoại kho&aacute; v&agrave; Học Vấn. Thứ tự cơ bản l&agrave; như tr&ecirc;n, tuỳ nhi&ecirc;n tuỳ thuộc v&agrave;o ho&agrave;n cảnh mỗi người th&igrave; bạn sẽ cần sắp xếp theo c&aacute;c kiểu kh&aacute;c nhau. V&iacute; dụ người đi l&agrave;m l&acirc;u lắm th&igrave; viết kiểu kh&aacute;c, sinh vi&ecirc;n mới ra trường th&igrave; c&oacute; kiểu kh&aacute;c, người nhảy việc th&igrave; c&oacute; kiểu sắp xếp kh&aacute;c. Bạn hiền c&oacute; thể&nbsp;<a href="https://anhtuanle.com/2016/08/02/4-cach-sap-xep-thong-tin-cv-tuy-vao-tung-cong-viec/" target="_blank">đọc th&ecirc;m b&agrave;i n&agrave;y</a>&nbsp;của m&igrave;nh để biết c&aacute;ch sắp xếp.</p>\r\n\r\n<h2>8. Chắc chắn l&agrave; CV phải dễ nh&igrave;n nh&eacute;</h2>\r\n\r\n<p>M&igrave;nh gặp nhiều bạn v&igrave; ghi nhiều th&ocirc;ng tin v&agrave;o trong CV qu&aacute;, m&agrave; lại muốn CV phải g&oacute;i gọn trong 1 trang thế l&agrave; c&aacute;c bạn chọn font chữ b&eacute; t&iacute; b&eacute; teo. C&aacute;c bạn c&oacute; thể cho chữ nhỏ lại một x&iacute;u, nhưng đừng b&eacute; hơn 10 nh&eacute;, v&igrave; b&eacute; hơn 10 l&agrave; chả nh&igrave;n thấy c&aacute;i g&igrave; nữa đ&acirc;u.</p>\r\n\r\n<h2>9. CV kh&ocirc;ng cần s&aacute;ng tạo, nhưng phải khoa học</h2>\r\n\r\n<p>Nh&igrave;n mặt bắt h&igrave;nh dong &ndash; &ocirc;ng cha ta đ&atilde; n&oacute;i như vậy. Vậy th&igrave; một bản CV đẹp, ấn tượng sẽ g&acirc;y được thiện cảm ngay khi nh&igrave;n v&agrave;o. Nếu bạn kh&ocirc;ng phải l&agrave; d&acirc;n thiết kế chuy&ecirc;n nghiệp, chưa tự tin lắm với khả năng thiết kế của bản th&acirc;n th&igrave; h&atilde;y d&ugrave;ng&nbsp;<a href="http://8morning.com/productivity/tai-lieu/9-mau-cv-sang-tao-mien-phi-photoshop-ai-word.html" target="_blank">9 mẫu CV</a>&nbsp;c&oacute; sẵn ở đ&acirc;y nh&eacute;.</p>\r\n\r\n<h2>10. Th&ocirc;ng tin trong CV phải đồng bộ với nhau</h2>\r\n\r\n<p>Đồng bộ l&agrave; như thế n&agrave;o? Đấy l&agrave; c&aacute;c gạch đầu d&ograve;ng phải bắt đầu bằng động từ hết, đừng chỗ l&agrave; động từ chỗ l&agrave; danh từ. Rồi th&igrave; nếu bạn in đậm t&ecirc;n của c&ocirc;ng ty, th&igrave; t&ecirc;n c&aacute;c c&ocirc;ng ty chỗ kh&aacute;c cũng nhớ in đậm nh&eacute;. Nếu d&ugrave;ng gạch đầu d&ograve;ng th&igrave; d&ugrave;ng một loại gạch đầu d&ograve;ng th&ocirc;i, đừng chỗ th&igrave; dấu chấm, chỗ th&igrave; dấu *, chỗ th&igrave; lại gạch như n&agrave;y -.</p>\r\n\r\n<h2>11. Nhớ c&oacute; bối cảnh</h2>\r\n\r\n<p>Bối cảnh l&agrave; g&igrave;? L&agrave; với mỗi kinh nghiệm l&agrave;m việc hoặc hoạt động ngoại kho&aacute; bạn n&ecirc;u ra, nhớ đưa v&agrave;o thời gian l&agrave;m việc, địa điểm v&agrave; bạn l&agrave;m việc đ&oacute;. Như vậy th&igrave; sẽ gi&uacute;p nh&agrave; tuyển dụng mường tượng v&agrave; đ&aacute;nh gi&aacute; tốt hơn về c&ocirc;ng việc bạn đ&atilde; l&agrave;m.</p>\r\n\r\n<h2>12. C&agrave;ng nhiều số liệu c&agrave;ng tốt</h2>\r\n\r\n<p>Ai cũng c&oacute; thể viết được kiểu &lsquo;Đ&atilde; ho&agrave;n th&agrave;nh tốt c&ocirc;ng việc được giao&rsquo; trong CV cả. Để kh&aacute;c biệt với ứng vi&ecirc;n kh&aacute;c, bạn phải chứng minh được l&agrave; m&igrave;nh l&agrave;m tốt như thế n&agrave;o. Đưa ra c&aacute;c số liệu cụ thể, số phần trăm, tần suất, t&ecirc;n sản phẩm cụ thể để chứng minh. V&iacute; dụ thay v&igrave; viết &lsquo;ho&agrave;n th&agrave;nh chỉ ti&ecirc;u sale đề ra&rsquo; bạn c&oacute; thể viết &lsquo;vượt chỉ ti&ecirc;u 25% trong thời gian 5 th&aacute;ng&rsquo; chẳng hạn. Nghe cụ thể hơn hẳn đ&uacute;ng kh&ocirc;ng. Bạn c&oacute; thể đọc th&ecirc;m b&agrave;i n&agrave;y để biết&nbsp;<a href="https://anhtuanle.com/2016/01/19/lam-sao-de-them-so-lieu-vao-cv/" target="_blank">c&aacute;ch th&ecirc;m số liệu v&agrave;o trong CV</a>.</p>\r\n\r\n<h2>13. Liệt k&ecirc; t&ecirc;n ri&ecirc;ng</h2>\r\n\r\n<p>CV l&agrave; nơi để bạn &lsquo;khoe&rsquo; tất cả những g&igrave; m&igrave;nh c&oacute; thể khoe được. Vậy n&ecirc;n nếu trong qu&aacute; tr&igrave;nh l&agrave;m việc bạn được thăng chức, nhớ viết v&agrave;o trong CV. Nếu bạn l&agrave;m việc với anh CEO hay c&ocirc;ng ty n&agrave;o xịn xịn ai cũng biết, nhớ ghi ngay t&ecirc;n c&ocirc;ng ty đ&oacute; v&agrave;o trong CV nh&eacute;.</p>\r\n\r\n<h2>14. Kh&ocirc;ng cần References đ&acirc;u</h2>\r\n\r\n<p>M&igrave;nh thấy c&oacute; nhiều bạn ghi th&ocirc;ng tin thầy c&ocirc;/ sếp cũ v&agrave;o mục References hoặc c&oacute; một số bạn ghi l&agrave;&nbsp;&ldquo;references available upon request&rdquo;. Thật ra những th&ocirc;ng tin n&agrave;y kh&ocirc;ng cần phải viết v&agrave;o đ&acirc;u c&aacute;c bạn nh&eacute;. Khi n&agrave;o nh&agrave; tuyển dụng cần th&ocirc;ng tin li&ecirc;n hệ th&igrave; họ sẽ gọi cho bạn, sau đ&oacute; xin ph&eacute;p bạn cung cấp th&ocirc;ng tin người giới thiệu th&igrave; như vậy bạn mới cần cung cấp nh&eacute;. C&ograve;n kh&ocirc;ng phải ghi trước v&agrave;o CV l&agrave;m g&igrave; đ&acirc;u.</p>\r\n\r\n<h2>15. S&aacute;ng tạo đ&uacute;ng l&uacute;c đ&uacute;ng chỗ</h2>\r\n\r\n<p>Một số ng&agrave;nh đ&ograve;i hỏi bạn phải s&aacute;ng tạo ch&uacute;t ch&uacute;t. V&iacute; dụ nếu bạn ứng tuyển cho c&aacute;c vị tr&iacute; b&ecirc;n truyền th&ocirc;ng, quảng c&aacute;o, marketing c&aacute;c thứ th&igrave; CV của bạn c&oacute; thể s&aacute;ng tạo hoặc m&agrave;u m&egrave; một ch&uacute;t cũng được. Tuy nhi&ecirc;n nếu bạn đang ứng tuyển cho c&aacute;c vị tr&iacute; như Finance, Accounting, Audit th&igrave; tốt nhất n&ecirc;n viết CV cơ bản trắng đen th&ocirc;i nh&eacute;.</p>\r\n\r\n<h2>16. Đừng liệt k&ecirc; tất cả mọi thứ</h2>\r\n\r\n<p>Bất kể th&ocirc;ng tin g&igrave; bạn viết v&agrave;o CV đều c&oacute; thể bị hỏi. Trước khi viết bất k&igrave; d&ograve;ng n&agrave;o v&agrave;o CV, bạn h&atilde;y d&agrave;nh thời gian nghĩ lại một lượt xem l&agrave; d&ograve;ng đ&oacute; c&oacute; gi&uacute;p &iacute;ch được g&igrave; cho m&igrave;nh để th&agrave;nh c&ocirc;ng trong việc ứng tuyển n&agrave;y kh&ocirc;ng nh&eacute;.</p>\r\n', 1490843526, '["9"]', '/uploads/images/blogs/c80f24575d803ee18015e84e99d85d08.jpg', '', '', '', 0, 0),
(9, 'Công Thức Bất Biến Để Giới Thiệu Bản Thân Trong Buổi Phỏng Vấn', '<p>&ldquo;Tell Me About Yourself&rdquo;&nbsp;C&acirc;u n&agrave;y nghe th&igrave; thấy thật l&agrave; dễ, nhưng m&agrave; dễ qu&aacute; lại khiến cho ch&uacute;ng m&igrave;nh l&uacute;ng t&uacute;ng. V&igrave; c&acirc;u hỏi rộng qu&aacute;, kh&ocirc;ng biết&nbsp;<a href="http://www.vietcv.net/tag/tra-loi/" title="trả lời"><strong>trả lời</strong></a>&nbsp;như thế n&agrave;o cho hợp &yacute; với&nbsp;<a href="http://www.vietcv.net/tag/nha-tuyen-dung/" title="nhà tuyển dụng"><strong>nh&agrave; tuyển dụng</strong></a>đ&acirc;y. Trước đ&acirc;y khi gặp c&acirc;u n&agrave;y m&igrave;nh cũng l&uacute;ng t&uacute;ng lắm, kh&ocirc;ng biết n&ecirc;n trả lời thế n&agrave;o để vừa g&acirc;y được ấn tượng đầu ti&ecirc;n, lại vừa n&oacute;i được những g&igrave; nh&agrave; tuyển dụng cần.</p>\r\n\r\n<p>Trong b&agrave;i viết n&agrave;y, m&igrave;nh sẽ chia sẻ cho c&aacute;c bạn một tip cực k&igrave; dễ hiểu, một c&ocirc;ng thức m&agrave; m&igrave;nh thường hay &aacute;p dụng để trả lời c&acirc;u hỏi n&agrave;y. Tất nhi&ecirc;n c&ocirc;ng thức chỉ mang t&iacute;nh tương đối th&ocirc;i nh&eacute;, c&ograve;n phải đặt v&agrave;o ho&agrave;n cảnh từng buổi phỏng vấn nữa. Tuy nhi&ecirc;n m&igrave;nh nghĩ đ&acirc;y l&agrave; một c&ocirc;ng thức hay d&agrave;nh cho bạn n&agrave;o c&ograve;n l&uacute;ng t&uacute;ng trong c&acirc;u n&agrave;y.</p>\r\n\r\n<h2><strong>&ldquo;Tell Me About Yourself&rdquo;</strong></h2>\r\n\r\n<p>Một lỗi m&agrave; qua qu&aacute; tr&igrave;nh n&oacute;i chuyện với c&aacute;c bạn, m&igrave;nh thấy rất nhiều bạn gặp phải đ&oacute; l&agrave; ch&uacute;ng m&igrave;nh trả lời c&acirc;u hỏi n&agrave;y bằng c&aacute;ch lặp lại những g&igrave; bạn đ&atilde; viết trong CV v&agrave; Cover Letter. Ngo&agrave;i ra, đ&ocirc;i khi ch&uacute;ng m&igrave;nh trả lời qu&aacute; lan man, qu&aacute; d&agrave;i nhưng kh&ocirc;ng c&oacute; trọng t&acirc;m, khiến nh&agrave; tuyển dụng&nbsp;sau khi nghe c&acirc;u trả lời xong, chẳng r&uacute;t ra được g&igrave; hết. C&acirc;u hỏi n&agrave;y l&agrave; cơ hội đầu ti&ecirc;n v&agrave; r&otilde; r&agrave;ng nhất để ch&uacute;ng m&igrave;nh&nbsp;<strong>g&acirc;y ấn tượng với nh&agrave; tuyển dụng</strong>đ&oacute;, n&ecirc;n ch&uacute;ng m&igrave;nh cần tập luyện thật trơn tru trước khi đi phỏng vấn nh&eacute;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>C&oacute; một c&ocirc;ng thức m&igrave;nh hay d&ugrave;ng để trả lời c&acirc;u hỏi n&agrave;y, c&ocirc;ng thức c&oacute; t&ecirc;n l&agrave;&nbsp;Present-Past-Future (Hiện tại-Qu&aacute; khứ-Tương lai), được chia sẻ bởi t&aacute;c giả&nbsp;Kathryn Minshew của trang The Muse.</p>\r\n\r\n<ol>\r\n	<li>Rất đơn giản, ch&uacute;ng m&igrave;nh bắt đầu chia sẻ về vị tr&iacute; hiện tại l&agrave;m việc của m&igrave;nh, bạn đang l&agrave;m ở c&ocirc;ng ty n&agrave;o, vị tr&iacute; g&igrave;. Nếu ch&uacute;ng m&igrave;nh l&agrave; sinh vi&ecirc;n th&igrave; h&atilde;y n&oacute;i rằng bạn l&agrave;&nbsp;<a href="http://www.vietcv.net/tag/sinh-vien-moi-tot-nghiep/" title="sinh viên mới tốt nghiệp"><strong>sinh vi&ecirc;n mới tốt nghiệp</strong></a>&nbsp;trường n&agrave;o, ng&agrave;nh g&igrave;, kết quả ra sao.</li>\r\n	<li>Sau khi giới thiệu về hiện tại, ch&uacute;ng m&igrave;nh n&oacute;i một ch&uacute;t về qu&aacute; khứ nh&eacute;. H&atilde;y n&oacute;i về những kinh nghiệm bạn đ&atilde; c&oacute; m&agrave; những kĩ năng bạn đ&atilde; học được từ những kinh nghiệm đ&oacute;. Nếu ch&uacute;ng m&igrave;nh l&agrave; sinh vi&ecirc;n, c&oacute; thể n&oacute;i về kinh nghiệm hoạt động ngoại kho&aacute;, kĩ năng m&agrave; ch&uacute;ng m&igrave;nh đ&atilde; học được trong kinh nghiệm đ&oacute;.</li>\r\n	<li>Cuối c&ugrave;ng l&agrave; n&oacute;i về tương lai, v&igrave; sao bạn lại hứng th&uacute; với vị tr&iacute; bạn đang ứng tuyển n&agrave;y. C&oacute; thể v&igrave; n&oacute; ph&ugrave; hợp với mục ti&ecirc;u nghề nghiệp hoặc ph&ugrave; hợp với kĩ năng v&agrave; kinh nghiệm bạn đang c&oacute; ở thời điểm n&agrave;y.</li>\r\n</ol>\r\n\r\n<p>V&iacute; dụ một c&acirc;u trả lời của m&igrave;nh nh&eacute;:</p>\r\n\r\n<p><em>NTD: Can you tell me about yourself?</em></p>\r\n\r\n<p><em>TA:&nbsp;&ldquo;Well, I&rsquo;m currently an marketing executive at ABC English Centre, where I manage the whole marketing activities. Before that, I worked at an agency where I worked with three different big educational brands. And while I really enjoyed the work that I did, I&rsquo;d love the chance to dig in much deeper within education industry, which is why I&rsquo;m so excited about this opportunity with XYZ English Centre.&rdquo;</em></p>\r\n\r\n<p>Ngo&agrave;i ra, cũng theo c&ocirc;ng thức tr&ecirc;n, nếu bạn l&agrave;&nbsp;<a href="http://www.vietcv.net/tag/sinh-vien-moi-ra-truong/" title="sinh viên mới ra trường"><strong>sinh vi&ecirc;n mới ra trường</strong></a>&nbsp;chưa c&oacute; nhiều kinh nghiệm lắm, bạn c&oacute; thể trả lời theo mẫu sau:</p>\r\n\r\n<p>&nbsp; &nbsp;</p>\r\n\r\n<p>1)&nbsp;<strong>Provide brief background information:</strong>&nbsp;&ldquo;I am a [class year] who has spent [amount of time] gaining experience and improving my skills in [the field you are interviewing in].&rdquo;</p>\r\n\r\n<p>2)&nbsp;<strong>Offer an enticing, engaging teaser:</strong>&nbsp;&ldquo;Last summer, I participated in [an experiential activity such as an internship, volunteer experience or shadowing activity], and it taught me [skills that are useful for this particular work experience]. This [name of experience] fits well with [the job your interviewing for] because [tell them why].&rdquo;</p>\r\n\r\n<p>3)&nbsp;<strong>Conclude with why they wow you and what you can contribute:</strong>&nbsp;&ldquo;I&rsquo;m interested in [the company&rsquo;s name] because I can demonstrate my skills in [name other skills not previously mentioned] and I can contribute [what your background has to offer that is unique and makes you a strong candidate.].&rdquo;</p>\r\n\r\n<p>Đương nhi&ecirc;n, bạn kh&ocirc;ng n&ecirc;n bắt chước trả lời y chang như thế n&agrave;y. Ch&uacute;ng m&igrave;nh chỉ cần nhớ r&otilde; rằng, để trả lời c&acirc;u hỏi n&agrave;y, h&atilde;y n&oacute;i một ch&uacute;t về qu&aacute; khứ, một ch&uacute;t về hiện tại v&agrave; mục ti&ecirc;u tương lai của ch&uacute;ng m&igrave;nh. V&agrave; h&atilde;y chắc chắn c&acirc;u trả lời phải li&ecirc;n quan đến c&ocirc;ng việc hiện tại ch&uacute;ng m&igrave;nh đang ứng tuyển nh&eacute;.</p>\r\n', 1490843810, '["9"]', '/uploads/images/blogs/9dfbd85089fe8ec2ead2eeb5a6ecc2e1.jpg', '', '', '', 0, 0);
INSERT INTO `blogs` (`blog_id`, `blog_name`, `blog_content`, `blog_time`, `blog_cat_ids`, `blog_image`, `blog_seo_title`, `blog_seo_keyword`, `blog_seo_description`, `blog_user_id`, `blog_views`) VALUES
(10, 'Với 20 Mẹo Sau, Thành Thạo Ngoại Ngữ Không Còn Là Mục Tiêu Xa Vời', '<p><img src="http://static.ybox.vn/2016/10/10/1e03d82c-8e95-11e6-a53a-04011537df01.jpg" /></p>\r\n\r\n<p>Khi đến Buenos Aires hồi đầu năm 2010, t&ocirc;i hầu như kh&ocirc;ng thể gọi m&oacute;n tại một nh&agrave; h&agrave;ng địa phương. Hai năm sau, t&ocirc;i đ&atilde; c&oacute; thể b&igrave;nh tĩnh giải th&iacute;ch c&aacute;c nguy&ecirc;n tắc ngữ ph&aacute;p tiếng Nga cho người bạn đến từ Guatemala&hellip; bằng tiếng T&acirc;y Ban Nha.</p>\r\n\r\n<p>Giờ đ&acirc;y t&ocirc;i c&oacute; thể n&oacute;i chuyện tr&ocirc;i chảy bằng cả tiếng T&acirc;y Ban Nha, tiếng Bồ Đ&agrave;o Nha Brazil v&agrave; đ&ocirc;i ch&uacute;t tiếng Nga. T&ocirc;i đ&atilde; phải r&egrave;n luyện rất nhiều. Thật sự th&igrave; t&ocirc;i vẫn biết những điều được cho l&agrave; &ldquo;m&aacute;nh lới&rdquo; của việc học ng&ocirc;n ngữ nhưng kh&ocirc;ng c&aacute;ch n&agrave;o hiệu quả với t&ocirc;i. T&ocirc;i đ&atilde; mất nhiều giờ học v&agrave; phải trải qua nhiều buổi tr&ograve; chuyện vụng về.</p>\r\n\r\n<p>Sau đ&acirc;y l&agrave; một số mẹo học ng&ocirc;n ngữ t&ocirc;i đ&atilde; thu thập được trong những năm gần đ&acirc;y:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<h2><strong>N&Oacute;I CHUYỆN, N&Oacute;I CHUYỆN, N&Oacute;I CHUYỆN</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Nếu c&oacute; một &ldquo;b&iacute; mật&rdquo; hoặc &ldquo;m&aacute;nh lới&rdquo; n&agrave;o cho việc học ng&ocirc;n ngữ th&igrave; đ&oacute; ch&iacute;nh l&agrave;: h&agrave;ng giờ t&iacute;ch cực n&oacute;i chuyện d&ugrave; vụng về với những người sử dụng ng&ocirc;n ngữ đ&oacute; tốt hơn bạn. Một giờ n&oacute;i chuyện&nbsp;<strong>(được sửa lỗi sai v&agrave; d&ugrave;ng từ điển để tham khảo)&nbsp;</strong>hiệu quả tương đương 5 giờ học tr&ecirc;n lớp v&agrave; 10 giờ tự học.</p>\r\n\r\n<p>C&oacute; nhiều l&yacute; do cho việc n&agrave;y. L&yacute; do đầu ti&ecirc;n l&agrave; động lực. T&ocirc;i kh&ocirc;ng quan t&acirc;m s&aacute;ch hướng dẫn của bạn hay ho thế n&agrave;o, bạn sẽ quyết t&acirc;m v&agrave; c&oacute; động lực hơn khi giao tiếp với một người ngồi trước bạn hơn l&agrave; một quyển s&aacute;ch hay chương tr&igrave;nh audio tr&ecirc;n m&aacute;y t&iacute;nh.</p>\r\n\r\n<p>L&yacute; do thứ hai l&agrave; ng&ocirc;n ngữ cần được xử l&yacute; chứ kh&ocirc;ng phải ghi nhớ. T&ocirc;i kh&ocirc;ng phải chuy&ecirc;n gia trong việc học ng&ocirc;n ngữ, nhưng theo kinh nghiệm của t&ocirc;i, chăm chăm đọc v&agrave; ghi nhớ từ trong s&aacute;ch hoặc c&aacute;c thẻ học từ 100 lần kh&ocirc;ng thể hiệu quả bằng việc bị buộc phải sử dụng từ đ&oacute; 2 hoặc 3 lần khi tr&ograve; chuyện. T&ocirc;i tin l&yacute; do l&agrave; v&igrave; bộ n&atilde;o ưu ti&ecirc;n ghi nhớ những trải nghiệm x&atilde; hội c&oacute; sự tham gia của con người, những k&yacute; ức đi k&egrave;m với cảm x&uacute;c. Vậy n&ecirc;n, v&iacute; dụ nếu t&ocirc;i tra từ &ldquo;complain&rdquo; v&agrave; sử dụng từ n&agrave;y khi trao đổi với một người bạn mới, khả năng l&agrave; t&ocirc;i sẽ lu&ocirc;n li&ecirc;n hệ từ đ&oacute; với cuộc gặp gỡ v&agrave; tr&ograve; chuyện giữa t&ocirc;i v&agrave; người đ&oacute;. Trong khi đ&oacute;, t&ocirc;i c&oacute; thể lướt qua từ n&agrave;y 20 lần khi d&ugrave;ng thẻ, v&agrave; d&ugrave; c&oacute; thể hiểu đ&uacute;ng nghĩa của n&oacute;, t&ocirc;i vẫn chưa thật sự tập sử dụng n&oacute; trong c&acirc;u. N&oacute; kh&ocirc;ng c&oacute; &yacute; nghĩa g&igrave; với t&ocirc;i n&ecirc;n &iacute;t c&oacute; khả năng đọng lại trong t&acirc;m tr&iacute; t&ocirc;i.</p>\r\n\r\n<ol start="2">\r\n	<li>\r\n	<h2><strong>CƯỜNG ĐỘ HỌC QUAN TRỌNG HƠN THỜI GIAN HỌC</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Khi n&oacute;i vậy, t&ocirc;i muốn n&oacute;i rằng học một ng&ocirc;n ngữ 4 tiếng một ng&agrave;y trong v&ograve;ng 2 tuần sẽ tốt hơn học một tiếng mỗi ng&agrave;y trong v&ograve;ng 2 th&aacute;ng. Đ&acirc;y ch&iacute;nh l&agrave; l&yacute; do nhiều người theo học c&aacute;c lớp ngoại ngữ ở trường v&agrave; chẳng bao giờ nhớ g&igrave; cả. Đ&oacute; l&agrave; v&igrave; họ chỉ học 3-4 tiếng một tuần v&agrave; c&aacute;c buổi học thường c&aacute;ch nhau v&agrave;i ng&agrave;y.</p>\r\n\r\n<p>Ng&ocirc;n ngữ đ&ograve;i hỏi sự lặp đi lặp lại, rất nhiều những trải nghiệm để tham khảo v&agrave; sự đầu tư v&agrave; gắn b&oacute; ki&ecirc;n định. Sẽ tốt hơn nếu bạn d&agrave;nh một khoảng thời gian nhất định trong cuộc sống, d&ugrave; chỉ l&agrave; 1-2 tuần, v&agrave; dốc sức 100% c&ograve;n hơn l&agrave; nỗ lực nửa vời trong v&agrave;i th&aacute;ng hoặc thậm ch&iacute; v&agrave;i năm.</p>\r\n\r\n<ol start="3">\r\n	<li>\r\n	<h2><strong>C&Aacute;C LỚP HỌC C&Oacute; THỂ RẤT NH&Agrave;M CH&Aacute;N, L&Atilde;NG PH&Iacute; THỜI GIAN V&Agrave; TIỀN BẠC</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Khi xem x&eacute;t mọi yếu tố, kết quả bạn nhận lại chẳng được mấy so với thời gian v&agrave; c&ocirc;ng sức bạn bỏ ra cho những lớp học tập thể. C&oacute; 2 vấn đề. Thứ nhất, lớp học theo tốc độ của học vi&ecirc;n chậm nhất lớp. Thứ hai, học ng&ocirc;n ngữ l&agrave; một qu&aacute; tr&igrave;nh c&aacute; nh&acirc;n &mdash; mọi người đều học được một số từ hoặc chủ đề dễ hơn so với người kh&aacute;c, do đ&oacute; lớp học kh&ocirc;ng thể đ&aacute;p ứng được đồng đều những y&ecirc;u cầu cụ thể của từng học vi&ecirc;n hoặc trong một khoảng thời gian th&iacute;ch hợp.</p>\r\n\r\n<p>Chẳng hạn như khi học lớp tiếng Nga, t&ocirc;i nhận thấy việc chia động từ kh&aacute; đơn giản v&igrave; t&ocirc;i đ&atilde; học qua tiếng T&acirc;y Ban Nha. Nhưng một bạn học người Anh lại kh&aacute; vất vả với việc n&agrave;y. Kết quả l&agrave; t&ocirc;i mất rất nhiều thời gian đợi anh ấy theo kịp. T&ocirc;i cũng c&oacute; một bạn học người Đức đ&atilde; l&agrave;m quen với c&aacute;c c&aacute;ch danh từ trong khi t&ocirc;i kh&ocirc;ng hề biết đ&oacute; l&agrave; g&igrave;. T&ocirc;i đo&aacute;n chắc anh ấy cũng đ&atilde; phải đợi t&ocirc;i hiểu ra. Lớp học c&agrave;ng đ&ocirc;ng th&igrave; c&agrave;ng &iacute;t hiệu quả. Bất cứ ai từng học ngoại ngữ ở trường v&agrave; cuối c&ugrave;ng chẳng nhớ được g&igrave; đều c&oacute; thể khẳng định điều n&agrave;y với bạn.</p>\r\n\r\n<ol start="4">\r\n	<li>\r\n	<h2><strong>BẮT ĐẦU BẰNG 100 TỪ TH&Ocirc;NG DỤNG NHẤT</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Kh&ocirc;ng phải tất cả từ vựng đều giống nhau. Một số từ vựng gi&uacute;p &iacute;ch cho bạn hơn những từ kh&aacute;c. V&iacute; dụ, khi sống ở Buenos Aires, t&ocirc;i gặp một anh bạn đ&atilde; học bằng phần mềm Rosetta Stone suốt nhiều th&aacute;ng (kh&ocirc;ng khuyến kh&iacute;ch). Khi đ&oacute;, tuy đ&atilde; học với một gia sư được v&agrave;i buổi một tuần được mấy tuần, nhưng t&ocirc;i ngạc nhi&ecirc;n v&igrave; anh kh&ocirc;ng thể theo kịp những c&acirc;u giao tiếp cơ bản nhất mặc d&ugrave; đ&atilde; học tập v&agrave; sinh sống tại đ&oacute; nhiều th&aacute;ng trời.</p>\r\n\r\n<p>H&oacute;a ra phần lớn từ vựng m&agrave; anh học được l&agrave; về quần &aacute;o, đồ d&ugrave;ng nh&agrave; bếp, th&agrave;nh vi&ecirc;n gia đ&igrave;nh v&agrave; t&ecirc;n c&aacute;c ph&ograve;ng trong nh&agrave;. Nhưng anh kh&ocirc;ng biết phải n&oacute;i g&igrave; nếu muốn hỏi ai đ&oacute; họ sống ở đ&acirc;u trong th&agrave;nh phố.</p>\r\n\r\n<p>Bắt đầu bằng 100 từ phổ biến nhất v&agrave; thường xuy&ecirc;n d&ugrave;ng những từ n&agrave;y trong c&acirc;u. Học vừa đủ ngữ ph&aacute;p để c&oacute; thể tạo c&acirc;u v&agrave; luyện tập đến khi bạn cảm thấy tự nhi&ecirc;n khi sử dụng những từ n&agrave;y.</p>\r\n\r\n<ol start="5">\r\n	<li>\r\n	<h2><strong>MANG THEO TỪ ĐIỂN BỎ T&Uacute;I</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Điều n&agrave;y tạo kh&aacute;c biệt lớn hơn t&ocirc;i tưởng. T&ocirc;i c&agrave;i một ứng dụng từ điển Anh-T&acirc;y Ban Nha tr&ecirc;n điện thoại v&agrave; thường xuy&ecirc;n sử dụng khi sống tại c&aacute;c nước n&oacute;i tiếng T&acirc;y Ban Nha. Trong 2 tuần đầu ti&ecirc;n ở Brazil, t&ocirc;i lười v&agrave; cứ qu&ecirc;n tải từ điển Anh-Bồ Đ&agrave;o Nha về m&aacute;y. T&ocirc;i đ&atilde; RẤT vất vả suốt 2 tuần đ&oacute; d&ugrave; biết cơ bản tiếng Bồ Đ&agrave;o Nha.</p>\r\n\r\n<p>Một khi t&ocirc;i c&agrave;i từ điển, mọi chuyện trở n&ecirc;n kh&aacute;c hẳn. C&oacute; từ điển tr&ecirc;n điện thoại rất tiện v&igrave; bạn chỉ cần 2 gi&acirc;y để tra từ ngay trong l&uacute;c n&oacute;i chuyện. V&agrave; v&igrave; bạn đang d&ugrave;ng từ đ&oacute; khi tr&ograve; chuyện, bạn sẽ c&oacute; khả năng ghi nhớ n&oacute; cao hơn. Chỉ một điều đơn giản như vậy th&ocirc;i cũng c&oacute; t&aacute;c động rất lớn đến những cuộc tr&ograve; chuyện v&agrave; khả năng tương t&aacute;c của t&ocirc;i với người d&acirc;n địa phương.</p>\r\n\r\n<ol start="6">\r\n	<li>\r\n	<h2><strong>THƯỜNG XUY&Ecirc;N LUYỆN TẬP TRONG ĐẦU</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Mục đ&iacute;ch kh&aacute;c khi sử dụng từ điển đ&oacute; l&agrave; bạn c&oacute; thể luyện tập ngay cả khi đang l&agrave;m những c&ocirc;ng việc thường ng&agrave;y v&agrave; kh&ocirc;ng tr&ograve; chuyện c&ugrave;ng ai cả. H&atilde;y th&aacute;ch thức bản th&acirc;n suy nghĩ bằng ng&ocirc;n ngữ mới. Tất cả ch&uacute;ng ta đều c&oacute; những đoạn độc thoại diễn ra trong đầu v&agrave; thường bằng ng&ocirc;n ngữ mẹ đẻ. Bạn c&oacute; thể tiếp tục luyện tập, tạo c&acirc;u v&agrave; tưởng tượng c&aacute;c cuộc tr&ograve; chuyện trong đầu bằng ng&ocirc;n ngữ mới. Thực tế, sự h&igrave;nh dung n&agrave;y cho ph&eacute;p bạn tr&ograve; chuyện tr&ocirc;i chảy hơn khi thật sự đối thoại. V&iacute; dụ, bạn c&oacute; thể mường tượng v&agrave; luyện tập một cuộc hội thoại về một đề t&agrave;i bạn c&oacute; thể sẽ n&oacute;i đến trước khi thật sự bước v&agrave;o đối thoại. Bạn c&oacute; thể bắt đầu nghĩ về c&aacute;ch bạn sẽ m&ocirc; tả c&ocirc;ng việc của m&igrave;nh v&agrave; giải th&iacute;ch tại sao bạn lại đang ở một đất nước kh&aacute;c bằng ng&ocirc;n ngữ mới n&agrave;y. Những c&acirc;u hỏi như vậy sớm muộn g&igrave; cũng xuất hiện v&agrave; bạn sẽ c&oacute; sẵn c&acirc;u trả lời.</p>\r\n\r\n<ol start="7">\r\n	<li>\r\n	<h2><strong>T&Igrave;M RA NHỮNG QUY LUẬT PH&Aacute;T &Acirc;M</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Tất cả c&aacute;c ng&ocirc;n ngữ c&oacute; nguồn gốc từ tiếng La-tinh đều sẽ c&oacute; những quy luật ph&aacute;t &acirc;m tương tự dựa tr&ecirc;n c&aacute;c từ trong tiếng La-tinh. V&iacute; dụ, bất cứ từ n&agrave;o c&oacute; đu&ocirc;i &ldquo;-tion&rdquo; trong tiếng Anh gần như lu&ocirc;n c&oacute; đu&ocirc;i &ldquo;-ci&oacute;n&rdquo; trong tiếng T&acirc;y Ban Nha v&agrave; &ldquo;-&ccedil;&atilde;o&rdquo; trong tiếng Bồ Đ&agrave;o Nha. Những người n&oacute;i tiếng Anh vẫn thường đơn giản th&ecirc;m &ldquo;-o&rdquo; &ldquo;-e&rdquo; hoặc &ldquo;-a&rdquo; v&agrave;o đu&ocirc;i từ tiếng Anh để n&oacute;i những từ T&acirc;y Ban Nha m&agrave; họ kh&ocirc;ng hiểu. Bỏ qua những suy nghĩ rập khu&ocirc;n như tr&ecirc;n, bạn sẽ ngạc nhi&ecirc;n v&igrave; mức độ ch&iacute;nh x&aacute;c của quy tắc n&agrave;y. &ldquo;Destiny&rdquo; th&agrave;nh &ldquo;destino,&rdquo; &ldquo;motive&rdquo; th&agrave;nh &ldquo;motivo,&rdquo; &ldquo;part&rdquo; th&agrave;nh &ldquo;parte&rdquo; v&agrave; nhiều từ kh&aacute;c. Trong tiếng Nga, đu&ocirc;i của c&aacute;c c&aacute;ch thể lu&ocirc;n vần với nhau, vậy nếu bạn đang n&oacute;i về một danh từ giống c&aacute;i (v&iacute; dụ như &ldquo;Zhen-shee-na&rdquo;) th&igrave; bạn biết rằng t&iacute;nh từ v&agrave; ph&oacute; từ thường sẽ vần với đu&ocirc;i từ tr&ecirc;n (&ldquo;krasee-vaya&rdquo; thay v&igrave; &ldquo;krasee-vee&rdquo;).</p>\r\n\r\n<ol start="8">\r\n	<li>\r\n	<h2><strong>SỬ DỤNG B&Agrave;I LUYỆN NGHE V&Agrave; KH&Oacute;A HỌC ONLINE ĐỂ HỌC 100 TỪ ĐẦU TI&Ecirc;N V&Agrave; NGỮ PH&Aacute;P CƠ BẢN</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Sau đ&oacute;, bạn chỉ n&ecirc;n d&ugrave;ng những c&ocirc;ng cụ n&agrave;y v&agrave;o chỉ để tham khảo. C&oacute; rất nhiều t&agrave;i liệu học như: Pimsleur, Rosetta Stone, Berlitz, DuoLingo&hellip; Những kh&oacute;a học n&agrave;y rất hữu &iacute;ch cho việc gi&uacute;p bạn từ chỗ kh&ocirc;ng biết g&igrave; đến chỗ n&oacute;i được v&agrave;i c&acirc;u v&agrave; cụm từ đơn giản trong v&ograve;ng v&agrave;i ng&agrave;y. Những kh&oacute;a học tr&ecirc;n cũng tốt cho việc dạy những từ vựng cơ bản nhất (như:&nbsp;<em>t&ocirc;i, bạn, ăn, muốn, cảm ơn&hellip;</em>).</p>\r\n\r\n<p>Nhưng nhược điểm của những t&agrave;i liệu học n&agrave;y l&agrave;&nbsp;<strong>&iacute;t ứng dụng thực tế</strong>. Th&agrave;nh tựu lớn nhất của việc đầu tư học ng&ocirc;n ngữ l&agrave; buộc bản th&acirc;n phải l&ecirc;n tiếng v&agrave; tr&ograve; chuyện với người kh&aacute;c, v&agrave; khi ngồi trong ph&ograve;ng với một quyển s&aacute;ch hoặc phần mềm m&aacute;y t&iacute;nh, bạn kh&ocirc;ng phải diễn đạt nội dung v&agrave; &yacute; nghĩa bằng ng&ocirc;n ngữ mới ngay. Thay v&agrave;o đ&oacute;, bạn chỉ được khuyến kh&iacute;ch học vẹt v&agrave; sao ch&eacute;p những kh&aacute;i niệm v&agrave; nguy&ecirc;n tắc bạn đ&atilde; thấy đ&acirc;u đ&oacute; trong gi&aacute;o tr&igrave;nh. Như đ&atilde; n&oacute;i đến trước đ&acirc;y, t&ocirc;i nhận thấy c&oacute; 2 c&aacute;ch học v&agrave; c&aacute;ch n&agrave;y hiệu quả hơn c&aacute;ch kia rất nhiều.</p>\r\n\r\n<ol start="9">\r\n	<li>\r\n	<h2><strong>SAU 100 TỪ ĐẦU TI&Ecirc;N, TẬP TRUNG V&Agrave;O VIỆC N&Oacute;I CHUYỆN</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Nhiều nghi&ecirc;n cứu cho thấy 100 từ phổ biến nhất của bất cứ ng&ocirc;n ngữ n&agrave;o thường chiếm 50% c&aacute;c cuộc đối thoại. 1.000 từ th&ocirc;ng dụng nhất chiếm 80% c&aacute;c cuộc đối thoại. 3.000 từ th&ocirc;ng dụng nhất chiếm 99% mọi t&igrave;nh huống giao tiếp. N&oacute;i c&aacute;ch kh&aacute;c, c&agrave;ng học nhiều từ vựng, hiệu quả học tập c&agrave;ng giảm r&otilde; rệt. T&ocirc;i c&oacute; lẽ chỉ biết 500-1.000 từ tiếng T&acirc;y Ban Nha nhưng trong hầu hết c&aacute;c cuộc tr&ograve; chuyện, t&ocirc;i kh&ocirc;ng bao giờ phải dừng lại để tra từ tr&ecirc;n điện thoại.</p>\r\n\r\n<p>Chỉ với ngữ ph&aacute;p cơ bản, bạn sẽ n&oacute;i được c&aacute;c c&acirc;u cơ bản trong v&ograve;ng v&agrave;i ng&agrave;y.</p>\r\n\r\n<p><em>&ldquo;Nh&agrave; h&agrave;ng đ&oacute; ở đ&acirc;u vậy?&rdquo;</em></p>\r\n\r\n<p><em>&ldquo;T&ocirc;i muốn gặp bạn của anh.&rdquo;</em></p>\r\n\r\n<p><em>&ldquo;Chị g&aacute;i anh bao nhi&ecirc;u tuổi?&rdquo;</em></p>\r\n\r\n<p><em>&ldquo;Anh c&oacute; th&iacute;ch bộ phim kh&ocirc;ng?&rdquo;</em></p>\r\n\r\n<p>V&agrave;i trăm từ đầu ti&ecirc;n sẽ đưa bạn đi một chặng đường d&agrave;i. H&atilde;y d&ugrave;ng những từ n&agrave;y để l&agrave;m quen với ngữ ph&aacute;p, th&agrave;nh ngữ, tiếng l&oacute;ng v&agrave; h&igrave;nh th&agrave;nh những suy nghĩ, &yacute; tưởng v&agrave; chuyện đ&ugrave;a bằng ng&ocirc;n ngữ mới trong qu&aacute; tr&igrave;nh. Một khi bạn c&oacute; thể cười đ&ugrave;a thoải m&aacute;i bằng ng&ocirc;n ngữ mới, đ&oacute; l&agrave; dấu hiệu tốt cho thấy đ&atilde; đến l&uacute;c mở rộng vốn từ.</p>\r\n\r\n<p>Nhiều người cố gắng mở rộng vốn từ qu&aacute; nhanh v&agrave; qu&aacute; sớm. Đ&oacute; l&agrave; một sự l&atilde;ng ph&iacute; thời gian v&agrave; c&ocirc;ng sức v&igrave; họ vẫn chưa thuần thục những c&acirc;u giao tiếp cơ bản về đất nước m&igrave;nh, vậy m&agrave; họ đ&atilde; học những từ vựng về kinh tế hoặc y dược. Điều n&agrave;y rất phi l&yacute;.</p>\r\n\r\n<ol start="10">\r\n	<li>\r\n	<h2><strong>ĐỘNG N&Atilde;O TỐI ĐA</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Bạn biết cảm gi&aacute;c những khi m&igrave;nh động n&atilde;o cường độ cao trong suốt nhiều tiếng v&agrave; đến một l&uacute;c n&agrave;o đ&oacute;, đầu bạn như muốn nổ tung kh&ocirc;ng? H&atilde;y nhắm tới ngưỡng đ&oacute; khi học ng&ocirc;n ngữ. Bạn c&oacute; thể chưa tận dụng hết thời gian v&agrave; nỗ lực nếu chưa chạm đến ngưỡng đ&oacute;. Ban đầu, chuyện n&agrave;y mới xảy ra sau một hoặc hai tiếng. C&agrave;ng về sau, n&oacute; c&oacute; thể k&eacute;o d&agrave;i cả tối. Nhưng l&agrave;m được điều đ&oacute; l&agrave; rất tốt.</p>\r\n\r\n<ol start="11">\r\n	<li>\r\n	<h2><strong>&ldquo;ANH/CHỊ N&Oacute;I X NHƯ THẾ N&Agrave;O?&rdquo;</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Đ&acirc;y l&agrave; c&acirc;u quan trọng nhất bạn c&oacute; thể học. H&atilde;y học ngay v&agrave; d&ugrave;ng thường xuy&ecirc;n.</p>\r\n\r\n<ol start="12">\r\n	<li>\r\n	<h2><strong>GIA SƯ RI&Ecirc;NG L&Agrave; C&Aacute;CH SỬ DỤNG THỜI GIAN TỐT NHẤT V&Agrave; HIỆU QUẢ NHẤT</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Đ&acirc;y cũng thường l&agrave; c&aacute;ch sử dụng thời gian tốn k&eacute;m nhất, t&ugrave;y bạn sống ở đ&acirc;u v&agrave; ng&ocirc;n ngữ đ&oacute; l&agrave; g&igrave;. Nhưng nếu c&oacute; điều kiện, thu&ecirc; một gia sư chất lượng v&agrave; d&agrave;nh thời gian với họ v&agrave;i tiếng mỗi ng&agrave;y l&agrave; c&aacute;ch nhanh nhất để học một ng&ocirc;n ngữ mới m&agrave; t&ocirc;i từng biết. Hồi ở Brazil, học c&ugrave;ng gia sư chỉ 2 tiếng mỗi ng&agrave;y trong v&agrave;i tuần gi&uacute;p t&ocirc;i c&oacute; khả năng giao tiếp kh&aacute; đ&aacute;ng nể &mdash; n&oacute;i c&aacute;ch kh&aacute;c, t&ocirc;i c&oacute; thể đi chơi với một c&ocirc; g&aacute;i m&agrave; kh&ocirc;ng cần n&oacute;i ch&uacute;t tiếng Anh n&agrave;o v&agrave; giữ mạch tr&ograve; chuyện suốt buổi tối m&agrave; kh&ocirc;ng l&agrave;m bản th&acirc;n phải xấu hổ.</p>\r\n\r\n<p>Nh&acirc;n tiện n&oacute;i đến việc n&agrave;y&hellip;</p>\r\n\r\n<ol start="13">\r\n	<li>\r\n	<h2><strong>HẸN H&Ograve; NGƯỜI N&Oacute;I NG&Ocirc;N NGỮ BẠN MUỐN HỌC V&Agrave; KH&Ocirc;NG N&Oacute;I TIẾNG BẢN XỨ CỦA BẠN</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Kh&ocirc;ng g&igrave; tạo quyết t&acirc;m v&agrave; động lực tốt hơn. Bạn sẽ n&oacute;i tr&ocirc;i chảy trong v&ograve;ng một th&aacute;ng. V&agrave; tuyệt nhất l&agrave; nếu c&oacute; l&agrave;m họ giận hoặc l&agrave;m g&igrave; sai, bạn c&oacute; thể n&oacute;i l&agrave; do bạn hiểu kh&ocirc;ng r&otilde; nghĩa.</p>\r\n\r\n<ol start="14">\r\n	<li>\r\n	<h2><strong>NẾU KH&Ocirc;NG QUEN ĐƯỢC NGƯỜI N&Agrave;O NHƯ VẬY, H&Atilde;Y T&Igrave;M MỘT NGƯỜI BẠN TRAO ĐỔI NG&Ocirc;N NGỮ QUA MẠNG</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Nhiều trang mạng tr&ecirc;n đ&oacute; c&oacute; những người nước ngo&agrave;i muốn học tiếng Anh v&agrave; sẵn l&ograve;ng trao đổi ng&ocirc;n ngữ c&ugrave;ng bạn.</p>\r\n\r\n<ol start="15">\r\n	<li>\r\n	<h2><strong>KHI HỌC MỘT TỪ MỚI, CỐ GẮNG &Aacute;P DỤNG NGAY MỘT V&Agrave;I LẦN</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Khi bạn dừng v&agrave; tra từ mới giữa cuộc tr&ograve; chuyện, cố gắng d&ugrave;ng từ n&agrave;y trong 2 hoặc 3 c&acirc;u tiếp theo. C&aacute;c nghi&ecirc;n cứu về học ng&ocirc;n ngữ cho thấy bạn cần lặp lại v&agrave;i lần một từ trong một ph&uacute;t, một giờ, một ng&agrave;y&hellip; khi học từ đ&oacute;. Cố gắng sử dụng từ n&agrave;y ngay một v&agrave;i lần v&agrave; tiếp tục nhắc đến n&oacute; trong ng&agrave;y h&ocirc;m đ&oacute;. Từ đ&oacute; bạn c&oacute; thể sẽ ghi nhớ được n&oacute;.</p>\r\n\r\n<ol start="16">\r\n	<li>\r\n	<h2><strong>CHƯƠNG TR&Igrave;NH TRUYỀN H&Igrave;NH, PHIM ẢNH, B&Aacute;O CH&Iacute; V&Agrave; TẠP CH&Iacute; L&Agrave; NGUỒN T&Agrave;I LIỆU BỔ SUNG TỐT</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Nhưng bạn kh&ocirc;ng n&ecirc;n nhầm lẫn hoặc d&ugrave;ng những tư liệu n&agrave;y thay cho việc thật sự r&egrave;n luyện ng&ocirc;n ngữ. Khi tiếng T&acirc;y Ban Nha của t&ocirc;i tiến bộ hơn, t&ocirc;i cố gắng xem v&agrave;i bộ phim mỗi tuần v&agrave; đọc một b&agrave;i b&aacute;o&nbsp;<em>El Pa&iacute;s</em>&nbsp;mỗi ng&agrave;y. Hoạt động n&agrave;y gi&uacute;p t&ocirc;i giữ được sự hứng th&uacute;, nhưng t&ocirc;i kh&ocirc;ng tin n&oacute; hữu &iacute;ch bằng thời gian t&ocirc;i d&agrave;nh cho giao tiếp.</p>\r\n\r\n<ol start="17">\r\n	<li>\r\n	<h2><strong>HẦU HẾT MỌI NGƯỜI ĐỀU GI&Uacute;P &Iacute;CH CHO BẠN, H&Atilde;Y ĐỂ HỌ GI&Uacute;P</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Nếu bạn ở nước ngo&agrave;i v&agrave; đang cố gắng mua g&igrave; đ&oacute; ở cửa h&agrave;ng tạp h&oacute;a, h&atilde;y nhờ bất cứ ai gi&uacute;p đỡ. Chỉ v&agrave;o một m&oacute;n g&igrave; đ&oacute; v&agrave; hỏi họ c&aacute;ch gọi t&ecirc;n n&oacute;. Đặt cho họ c&aacute;c c&acirc;u hỏi. Hầu hết mọi người đều th&acirc;n thiện v&agrave; sẵn s&agrave;ng gi&uacute;p đỡ bạn. Việc học ng&ocirc;n ngữ kh&ocirc;ng d&agrave;nh cho những người hay ngại ng&ugrave;ng.</p>\r\n\r\n<ol start="18">\r\n	<li>\r\n	<h2><strong>SẼ C&Oacute; NHIỀU SỰ MƠ HỒ V&Agrave; HIỂU NHẦM</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Sự thật l&agrave; nhiều từ c&oacute; nghĩa kh&ocirc;ng ho&agrave;n to&agrave;n được dịch ch&iacute;nh x&aacute;c. &ldquo;Gustar&rdquo; trong tiếng T&acirc;y Ban Nha c&oacute; nghĩa đại kh&aacute;i l&agrave; &ldquo;th&iacute;ch&rdquo;, nhưng trong thực tế sử dụng, n&oacute; mang những sắc th&aacute;i nhất định. N&oacute; được d&ugrave;ng trong những ho&agrave;n cảnh v&agrave; ngữ cảnh nhất định, trong khi trong tiếng Anh, ch&uacute;ng ta d&ugrave;ng từ &ldquo;like&rdquo; l&agrave;m động từ chung cho bất cứ thứ g&igrave; ta y&ecirc;u th&iacute;ch v&agrave; quan t&acirc;m. Những sự kh&aacute;c biệt tinh tế n&agrave;y c&oacute; thể t&iacute;ch tụ lại, nhất l&agrave; trong những cuộc tr&ograve; chuyện nghi&ecirc;m t&uacute;c hoặc nhiều cảm x&uacute;c. Những cuộc tr&ograve; chuyện về những vấn đề quan trọng bị chi phối bởi những kh&aacute;c biệt n&agrave;y sẽ đ&ograve;i hỏi gấp đ&ocirc;i nỗ lực để x&aacute;c định ch&iacute;nh x&aacute;c &yacute; của từng người so với khi 2 người bản xứ trao đổi với nhau. Cho d&ugrave; nắm vững ng&ocirc;n ngữ mới đến đ&acirc;u, bạn sẽ kh&ocirc;ng ho&agrave;n to&agrave;n hiểu được những kh&aacute;c biệt tinh tế giữa từng từ, cụm từ hoặc th&agrave;nh ngữ như một người bản xứ đ&atilde; sống tại đất nước đ&oacute; nhiều năm.</p>\r\n\r\n<ol start="19">\r\n	<li>\r\n	<h2><strong>Đ&Acirc;Y L&Agrave; NHỮNG GIAI ĐOẠN M&Agrave; BẠN SẼ TRẢI QUA</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Đầu ti&ecirc;n, bạn c&oacute; thể n&oacute;i một ch&uacute;t v&agrave; kh&ocirc;ng hiểu g&igrave; cả.</p>\r\n\r\n<p>Sau đ&oacute;, bạn c&oacute; thể hiểu nhiều hơn những g&igrave; bạn c&oacute; thể n&oacute;i.</p>\r\n\r\n<p>Sau đ&oacute;, bạn bắt đầu tr&ograve; chuyện được, nhưng cần nỗ lực nhiều.</p>\r\n\r\n<p>Tiếp đ&oacute;, bạn c&oacute; thể n&oacute;i v&agrave; hiểu m&agrave; kh&ocirc;ng cần cố gắng qu&aacute; nhiều (n&oacute;i c&aacute;ch kh&aacute;c, bạn kh&ocirc;ng phải dịch từ ngữ ra tiếng mẹ đẻ trong đầu nữa).</p>\r\n\r\n<p>Một khi c&oacute; thể n&oacute;i v&agrave; nghe m&agrave; kh&ocirc;ng phải suy nghĩ, bạn sẽ bắt đầu&nbsp;<em>nghĩ</em>&nbsp;theo ng&ocirc;n ngữ n&agrave;y một c&aacute;ch tự nhi&ecirc;n. Khi l&agrave;m được điều n&agrave;y, bạn đ&atilde; đạt đến cấp độ cao.</p>\r\n\r\n<p>V&agrave; cấp độ cuối c&ugrave;ng l&agrave; g&igrave;? Bạn tin hay kh&ocirc;ng th&igrave; t&ugrave;y nhưng việc c&oacute; khả năng theo kịp cuộc hội thoại giữa một nh&oacute;m người bản địa l&agrave; cấp độ cuối c&ugrave;ng. Hoặc &iacute;t ra đối với t&ocirc;i l&agrave; vậy. Khi theo kịp, v&agrave; c&oacute; thể tham gia, bắt đầu v&agrave; kết th&uacute;c cuộc tr&ograve; chuyện theo &yacute; m&igrave;nh th&igrave; bạn đ&atilde; sẵn s&agrave;ng. Sau đ&oacute;, bạn thật sự chỉ c&ograve;n cần sống ở đất nước đ&oacute; &iacute;t nhất một hoặc hai năm v&agrave; trở n&ecirc;n ho&agrave;n to&agrave;n th&ocirc;ng thạo ng&ocirc;n ngữ n&agrave;y.</p>\r\n\r\n<ol start="20">\r\n	<li>\r\n	<h2><strong>CUỐI C&Ugrave;NG, T&Igrave;M C&Aacute;CH KHIẾN VIỆC HỌC TRỞ N&Ecirc;N TH&Uacute; VỊ</strong></h2>\r\n	</li>\r\n</ol>\r\n\r\n<p>Cũng như mọi thứ kh&aacute;c, nếu định gắn b&oacute; với một hoạt động, bạn phải t&igrave;m c&aacute;ch khiến hoạt động n&agrave;y th&uacute; vị. T&igrave;m những người m&agrave; bạn th&iacute;ch n&oacute;i chuyện c&ugrave;ng. Đến những sự kiện m&agrave; bạn c&oacute; thể tập giao tiếp trong khi l&agrave;m g&igrave; đ&oacute; th&uacute; vị. N&oacute;i về những vấn đề c&aacute; nh&acirc;n m&agrave; bạn quan t&acirc;m. T&igrave;m hiểu về người m&agrave; bạn đang tr&ograve; chuyện c&ugrave;ng. Biến việc học th&agrave;nh một trải nghiệm sống của ri&ecirc;ng bạn, bằng kh&ocirc;ng bạn sẽ trải qua một qu&aacute; tr&igrave;nh d&agrave;i v&agrave; ch&aacute;n ngấy m&agrave; c&oacute; thể sẽ kết th&uacute;c bằng việc bạn qu&ecirc;n sạch mọi thứ đ&atilde; học.</p>\r\n\r\n<p><strong><em>T&aacute;c giả: Mark Manson</em></strong></p>\r\n', 1490843859, '["9"]', '/uploads/images/blogs/3555556c8159131032f7a56e71582745.jpg', '', '', '', 0, 0),
(11, 'Tài Liệu Luyện Nghe TOEIC LC1', '<p><img alt="" src="/uploads/images/1336522586_cd252cf9aab3021b874f3fb4cde3f715.gif" style="height:400px; width:300px" /></p>\r\n\r\n<p><a class="btn btn-danger" href="https://drive.google.com/open?id=0B9_pObLfYBQNSk8zV2x0M2x1Ukk">Tải Về LC1</a></p>\r\n', 1490865696, '["10"]', '/uploads/images/blogs/9a4af5e14c09ff400bcabbb0bfa80f6d.gif', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `cat_id` int(11) NOT NULL,
  `cat_name` text COLLATE utf8_unicode_ci NOT NULL,
  `cat_image` text COLLATE utf8_unicode_ci,
  `cat_seo_title` text COLLATE utf8_unicode_ci,
  `cat_seo_description` text COLLATE utf8_unicode_ci,
  `cat_seo_keyword` text COLLATE utf8_unicode_ci,
  `cat_parent_id` int(11) DEFAULT NULL,
  `cat_description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_cat`
--

CREATE TABLE `course_cat` (
  `cc_id` int(11) NOT NULL,
  `cc_name` text COLLATE utf8_unicode_ci NOT NULL,
  `cc_image` text COLLATE utf8_unicode_ci,
  `cc_parent_id` int(11) DEFAULT '0',
  `cc_description` text COLLATE utf8_unicode_ci,
  `cc_seo_title` text COLLATE utf8_unicode_ci,
  `cc_seo_keyword` text COLLATE utf8_unicode_ci,
  `cc_seo_description` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` text COLLATE utf8_unicode_ci NOT NULL,
  `customer_phone` text COLLATE utf8_unicode_ci NOT NULL,
  `customer_email` text COLLATE utf8_unicode_ci NOT NULL,
  `customer_address` text COLLATE utf8_unicode_ci NOT NULL,
  `customer_city` text COLLATE utf8_unicode_ci NOT NULL,
  `customer_district` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_result`
--

CREATE TABLE `exam_result` (
  `exam_result_id` int(11) NOT NULL,
  `exam_result_name` text COLLATE utf8_unicode_ci NOT NULL,
  `exam_result_email` text COLLATE utf8_unicode_ci NOT NULL,
  `exam_result_phone` text COLLATE utf8_unicode_ci NOT NULL,
  `exam_result_time` int(11) NOT NULL,
  `exam_result_goal` int(11) NOT NULL,
  `exam_result_course` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam_result`
--

INSERT INTO `exam_result` (`exam_result_id`, `exam_result_name`, `exam_result_email`, `exam_result_phone`, `exam_result_time`, `exam_result_goal`, `exam_result_course`) VALUES
(1, 'dsf', 'dsf@gf.ghjh', 'sdf', 0, 0, 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `kh_id` int(11) NOT NULL,
  `kh_ten` text COLLATE utf8_unicode_ci NOT NULL,
  `kh_hocphi` int(11) NOT NULL,
  `kh_ngaykhaigiang` int(11) NOT NULL,
  `kh_noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `kh_image` text COLLATE utf8_unicode_ci NOT NULL,
  `kh_seo_title` text COLLATE utf8_unicode_ci,
  `kh_seo_keyword` text COLLATE utf8_unicode_ci,
  `kh_seo_description` text COLLATE utf8_unicode_ci,
  `kh_cat_ids` text COLLATE utf8_unicode_ci,
  `kh_time` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`kh_id`, `kh_ten`, `kh_hocphi`, `kh_ngaykhaigiang`, `kh_noidung`, `kh_image`, `kh_seo_title`, `kh_seo_keyword`, `kh_seo_description`, `kh_cat_ids`, `kh_time`) VALUES
(1, 'Tiếng Anh Giao Tiếp Ms. Thảo', 3000000, 1491066000, '', '/uploads/icons/none.jpg', '', '', '', 'null', 'tối 5h-7h30 2/4/6'),
(2, 'Luyện Thi TOEIC Ms. Toàn', 1500000, 1492794000, '', '/uploads/icons/none.jpg', '', '', '', 'null', 'tối 5h-7h30 2/4/6');

-- --------------------------------------------------------

--
-- Table structure for table `learn_trial`
--

CREATE TABLE `learn_trial` (
  `learn_trial_id` int(11) NOT NULL,
  `learn_trial_name` text COLLATE utf8_unicode_ci NOT NULL,
  `learn_trial_email` text COLLATE utf8_unicode_ci NOT NULL,
  `learn_trial_phone` text COLLATE utf8_unicode_ci NOT NULL,
  `learn_trial_info` text COLLATE utf8_unicode_ci NOT NULL,
  `learn_trial_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `learn_trial`
--

INSERT INTO `learn_trial` (`learn_trial_id`, `learn_trial_name`, `learn_trial_email`, `learn_trial_phone`, `learn_trial_info`, `learn_trial_time`) VALUES
(2, 's', '', 'sdsd', '', 1490846819),
(3, 'aaaa', '', 'aaaaa', 'aaaaaa', 1490867839);

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` int(11) NOT NULL,
  `lecturer_name` text COLLATE utf8_unicode_ci NOT NULL,
  `lecturer_image` text COLLATE utf8_unicode_ci NOT NULL,
  `lecturer_info` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_sku` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_name` text COLLATE utf8_unicode_ci NOT NULL,
  `pro_description` text COLLATE utf8_unicode_ci,
  `pro_shortdescripttion` text COLLATE utf8_unicode_ci,
  `pro_seo_title` text COLLATE utf8_unicode_ci,
  `pro_seo_description` text COLLATE utf8_unicode_ci,
  `pro_seo_keyword` text COLLATE utf8_unicode_ci,
  `pro_price` int(11) DEFAULT '0',
  `pro_image` text COLLATE utf8_unicode_ci,
  `pro_cat_ids` text COLLATE utf8_unicode_ci COMMENT 'json string',
  `pro_views` int(11) DEFAULT '0',
  `pro_buys` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration_course`
--

CREATE TABLE `registration_course` (
  `rc_id` int(11) NOT NULL,
  `rc_name` text COLLATE utf8_unicode_ci NOT NULL,
  `rc_email` text COLLATE utf8_unicode_ci NOT NULL,
  `rc_phone` text COLLATE utf8_unicode_ci NOT NULL,
  `rc_more` text COLLATE utf8_unicode_ci NOT NULL,
  `rc_time` int(11) NOT NULL,
  `rc_course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `set_name` text COLLATE utf8_unicode_ci NOT NULL,
  `set_value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`set_name`, `set_value`) VALUES
('set_pagetitle', 'Dịch vụ kế toán doanh nghiệp tại nhà, kế toán Ms Hằng'),
('set_pagedescriptiton', 'Dịch vụ kế toán tại nhà, kế toán Ms Hằng, 0937 31 91 94 - vkthang@yahoo.com. Dịch vụ kế toán Hằng, thành lập doanh nghiệp, báo cáo thuế, báo cáo cuối năm, đào tạo kế toán'),
('set_pagekeyword', 'Dịch vụ ké toán tại nhà, Dịch vụ kế toán Hằng, Dịch vụ kế toán, thành lập doanh nghiệp, báo cáo thuế, báo cáo cuối năm, đào tạo kế toán'),
('author', 'https://plus.google.com/u/0/114746573387722844751'),
('logo', '/uploads/images/logos/12c547a6968605961d1f5fa3fcd571e1.png'),
('address', '56 Đường D2, Phường 25, Quận Bình Thạnh, Tp HCM'),
('phone', '0937.31.91.94'),
('email', 'vkthang@yahoo.com'),
('id_analytics', 'asd'),
('google_site_verification', 'TwrdxRm0CCeUpgChMT0ivEkZa6-4fmC2P0ZOniB-z9E');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_image` text COLLATE utf8_unicode_ci NOT NULL,
  `slide_link` text COLLATE utf8_unicode_ci NOT NULL,
  `slide_caption` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_image`, `slide_link`, `slide_caption`) VALUES
(21, '/uploads/images/slides/d86994bc588ed6948dbb96825702fdd6.png', '', ''),
(22, '/uploads/images/slides/b8768095d3344f871d239a42839f6b2d.png', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_comment`
--

CREATE TABLE `student_comment` (
  `student_comment_id` int(11) NOT NULL,
  `student_comment_name` text COLLATE utf8_unicode_ci NOT NULL,
  `student_comment_class` text COLLATE utf8_unicode_ci NOT NULL,
  `student_comment_content` text COLLATE utf8_unicode_ci NOT NULL,
  `student_comment_image` text COLLATE utf8_unicode_ci NOT NULL,
  `student_comment_time` int(11) NOT NULL,
  `student_comment_info` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student_comment`
--

INSERT INTO `student_comment` (`student_comment_id`, `student_comment_name`, `student_comment_class`, `student_comment_content`, `student_comment_image`, `student_comment_time`, `student_comment_info`) VALUES
(1, 'xzvcxvcx', 'zxcvxcvcxz', 'xcvxcvcxvdbdfbg', '/uploads/icons/user.png', 1490888304, 'zxvxcvxzvv'),
(2, 'uuuuuuuuuuuuuuuu', 'uuuuuuuuuuuuuuuuuuuu', 'uuuuuuuuuuuuuuuuuuuu', '/uploads/icons/user.png', 1490888315, 'uuuuuuuuuuuuuuuuuu');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_email`
--

CREATE TABLE `subscribe_email` (
  `sub_id` int(11) NOT NULL,
  `sub_email` text COLLATE utf8_unicode_ci NOT NULL,
  `sub_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` text COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` text COLLATE utf8_unicode_ci NOT NULL,
  `user_email` text COLLATE utf8_unicode_ci,
  `user_lastlogin` int(11) DEFAULT NULL,
  `user_fullname` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_pass`, `user_email`, `user_lastlogin`, `user_fullname`) VALUES
(14, 'admin', '$2y$10$BpQZSQAIy47FaXo09PKBYusuWqz1jTZdJzodP/wcXF/X7s2RkWO.K', 'admin@admin.com', 1490888278, 'Trần Khánh Toàn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billdetails`
--
ALTER TABLE `billdetails`
  ADD PRIMARY KEY (`billdetail_id`),
  ADD KEY `billdetail_bill_id` (`billdetail_bill_id`),
  ADD KEY `billdetail_pro_id` (`billdetail_pro_id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `bill_customer_id` (`bill_customer_id`);

--
-- Indexes for table `blogcategory`
--
ALTER TABLE `blogcategory`
  ADD PRIMARY KEY (`blogcat_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `course_cat`
--
ALTER TABLE `course_cat`
  ADD PRIMARY KEY (`cc_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `exam_result`
--
ALTER TABLE `exam_result`
  ADD PRIMARY KEY (`exam_result_id`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`kh_id`);

--
-- Indexes for table `learn_trial`
--
ALTER TABLE `learn_trial`
  ADD PRIMARY KEY (`learn_trial_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`),
  ADD UNIQUE KEY `lecturer_id` (`lecturer_id`),
  ADD UNIQUE KEY `lecturer_id_2` (`lecturer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `registration_course`
--
ALTER TABLE `registration_course`
  ADD PRIMARY KEY (`rc_id`),
  ADD KEY `rc_course_id` (`rc_course_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `student_comment`
--
ALTER TABLE `student_comment`
  ADD PRIMARY KEY (`student_comment_id`);

--
-- Indexes for table `subscribe_email`
--
ALTER TABLE `subscribe_email`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billdetails`
--
ALTER TABLE `billdetails`
  MODIFY `billdetail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blogcategory`
--
ALTER TABLE `blogcategory`
  MODIFY `blogcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_cat`
--
ALTER TABLE `course_cat`
  MODIFY `cc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exam_result`
--
ALTER TABLE `exam_result`
  MODIFY `exam_result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `kh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `learn_trial`
--
ALTER TABLE `learn_trial`
  MODIFY `learn_trial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `registration_course`
--
ALTER TABLE `registration_course`
  MODIFY `rc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `student_comment`
--
ALTER TABLE `student_comment`
  MODIFY `student_comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subscribe_email`
--
ALTER TABLE `subscribe_email`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `billdetails`
--
ALTER TABLE `billdetails`
  ADD CONSTRAINT `billdetails_ibfk_1` FOREIGN KEY (`billdetail_bill_id`) REFERENCES `bills` (`bill_id`),
  ADD CONSTRAINT `billdetails_ibfk_2` FOREIGN KEY (`billdetail_pro_id`) REFERENCES `products` (`pro_id`);

--
-- Constraints for table `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`bill_customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `registration_course`
--
ALTER TABLE `registration_course`
  ADD CONSTRAINT `registration_course_ibfk_1` FOREIGN KEY (`rc_course_id`) REFERENCES `khoahoc` (`kh_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
