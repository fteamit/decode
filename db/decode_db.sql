-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2014 at 05:58 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `decode_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookinfo`
--

CREATE TABLE IF NOT EXISTS `tbl_bookinfo` (
  `bookinfo_id` int(11) NOT NULL AUTO_INCREMENT,
  `time_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `price_id` int(11) NOT NULL,
  PRIMARY KEY (`bookinfo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bookings`
--

CREATE TABLE IF NOT EXISTS `tbl_bookings` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT '1',
  `paricipants` int(11) NOT NULL DEFAULT '2',
  `date` date NOT NULL,
  `time` time NOT NULL,
  `game_id` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `booking_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE IF NOT EXISTS `tbl_faqs` (
  `faq_id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_question` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faq_answer` text COLLATE utf8_unicode_ci,
  `faq_status` tinyint(2) NOT NULL DEFAULT '1',
  `faq_lang` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`faq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_games`
--

CREATE TABLE IF NOT EXISTS `tbl_games` (
  `game_id` int(11) NOT NULL AUTO_INCREMENT,
  `game_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `game_desc` text COLLATE utf8_unicode_ci,
  `game_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `game_difficult` int(11) NOT NULL DEFAULT '1',
  `game_status` tinyint(4) DEFAULT NULL,
  `game_lang` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`game_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_games`
--

INSERT INTO `tbl_games` (`game_id`, `game_name`, `game_desc`, `game_image`, `game_difficult`, `game_status`, `game_lang`) VALUES
  (1, 'Lò mổ', 'Bùm! Bạn thức dậy trong 1 căn phòng tối tăm với những mảnh cơ thể người ghê rợn và những con chuột to đen trũi. Cửa đã bị khoá chặt. Tại sao bạn lại ở đây? Có phải bạn đã rơi vào bàn tay tên sát nhân đồ tể? Quá nhiều câu hỏi, quá ít thời gian! Bạn chỉ biết, nếu bạn không nhanh chân, bạn sẽ trở thành thứ trong cái túi bóng lơ lửng kia. Liệu bạn có trốn kịp trước khi tên sát nhân quay lại? ', NULL, 1, 1, 'vi'),
  (3, 'Khách sạn ma ám', 'Lời đồn khách sạn Castello bị ma ám bắt nguồn từ 4000 năm trước, khi nữ hoàng Mary bị giam ở đây vào đêm cuối trước ngày hành quyết vì tội phù thuỷ. Đêm đêm tiếng kêu khóc nỉ non xen kẽ với tiếng cười the thé khiến người ta dựng tóc gáy. Kinh hoàng hơn, sáng ra, 1 vị khách sẽ biến mất. Bạn có phải là vị khách đó?', NULL, 1, 1, 'vi'),
  (5, 'Giải cứu Santa', 'Một lời nguyền hắc ám hùng mạnh đã khiến những yêu tinh vui vẻ ở Bắc Cực trở nên xấu xa và nổi dậy bắt trói ông già Noel. Bạn được tiên Nicole trao cho nhiệm vụ giải cứu vô cùng khó khăn: đột nhập Bắc Cực và giải cứu ông già Noel trước khi những yêu tinh canh gác tỉnh dậy!! Năm nay trẻ em toàn thế giới có được đón Noel không?!! Tất cả đều do bạn quyết định!', NULL, 1, 1, 'vi'),
  (6, 'Siêu mọt sách', 'Bạn - một kẻ to xác luôn bắt nạt bạn bè sắp nhận được sự trả đũa từ những nạn nhân bé nhỏ bạn thường cười nhạo. Những siêu mọt sách đã bắt cóc và nhốt bạn vào 1 căn phòng kỳ bí nằm ngay cạnh Hố Đen Vũ Trụ Hoặc là bạn giải những câu đố của siêu mọt sách thật nhanh, hoặc bạn sẽ bị hút vào Hố Đen mãi mãi… ', NULL, 1, 1, 'vi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_options`
--

CREATE TABLE IF NOT EXISTS `tbl_options` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `option_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `option_value` text COLLATE utf8_unicode_ci,
  `option_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `option_group` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `option_status` tinyint(2) NOT NULL DEFAULT '1',
  `option_lang` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`option_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Dumping data for table `tbl_options`
--

INSERT INTO `tbl_options` (`option_id`, `option_name`, `option_value`, `option_image`, `option_group`, `option_status`, `option_lang`) VALUES
  (1, 'Logo1', 'Logo4', '85658_201410050648.ogo.png', 'GLOBAL_LOGO', 1, 'en'),
  (7, 'Banner', 'WELCOME TO DECODE VIETNAM', 'Banner', 'HOME_BANNER', 1, 'en'),
  (8, 'Video Home', '//www.youtube.com/embed/jbPW10koNj0?rel=0&amp;controls=0&amp;modestbranding=1&amp;showinfo=0', 'Video Home', 'HOME_VIDEO', 1, 'en'),
  (9, 'DECODE - THE LIVE ESCAPE ROOM', 'Sign up for DECODE’s 45 minute escape challenge, where you will be locked in a room... or rooms, filled with mysteries, clues, brain teasers and puzzles, for you to decipher. Your chance of success rests on two factors: first, your teamwork,  and second, your brainpower. You will need plenty of both (and maybe a little luck) to finish our quest.Enough said. So... Ready to work side-by-side with your pals? Ready to release your inner detective? Challenge accepted? Book your escape now!', 'Decode Home', 'HOME_DECODE', 1, 'en'),
  (10, 'Slideshow The Game', 'Slideshow', 'Slideshow', 'GAMES_SLIDESHOW_IMG', 1, 'en'),
  (11, 'Rule', 'In a team of 2-5 people, you will be locked in a custom designed, captivating and pulse-raising environment, in which you will attempt to solve many riddles and puzzles in place. Unlocking the room’s mysteries will lead you to the final key to escape. To facilitate your quest, we will allow you 2 hints at anytime during the game. REMEMBER: to emerge a winner, you have to complete the quest in 45 minutes! It’s a race against the clock!<br/>\r\nWe have 4 room themes at the moment: The Butchery, Haunted Hotel, Mega-Nerd and Save Santa . Each theme is carefully crafted to cover you the entire emotional spectrum from shock and frantic to thrill and accomplished.', 'The Game Rule', 'GAMES_RULE', 0, 'en'),
  (12, 'Email', 'info@decode.com.vn', 'Contact Email', 'CONTACT_EMAIL', 1, 'en'),
  (13, 'Phone', '+84.000.000.000', 'Contact Phone', 'CONTACT_PHONE', 1, 'en'),
  (14, 'Address', '8th Floor,Qunimex Building, 29 Le Dai Hanh, Ha Noi, Viet Nam', 'Contact Address', 'CONTACT_ADDRESS', 1, 'en'),
  (15, 'Contact Facebook', 'http://facebook.com', 'Contact Facebook', 'CONTACT_FACEBOOK', 1, 'en'),
  (20, 'Logo', 'Decode', '83530_201410050847.ogo.png', 'GLOBAL_LOGO', 1, 'vi'),
  (27, 'Banner', 'CHÀO MỪNG BẠN ĐẾN VỚI DECODE VIỆT NAM', 'Banner', 'HOME_BANNER', 1, 'vi'),
  (28, 'Video Trang Chủ', 'Video Home', 'Video Home', 'HOME_VIDEO', 1, 'vi'),
  (29, 'Decode Trang Chủ', 'Decode Home', 'Decode Home', 'HOME_DECODE', 1, 'vi'),
  (30, 'Slideshow The Game', 'Slideshow', 'Slideshow', 'GAMES_SLIDESHOW_IMG', 1, 'vi'),
  (31, 'Quy tắc', 'The Game Rule', 'The Game Rule', 'GAMES_RULE', 1, 'vi'),
  (32, 'Email', 'Contact Email', 'Contact Email', 'CONTACT_EMAIL', 1, 'vi'),
  (33, 'SĐT', 'Contact Phone', 'Contact Phone', 'CONTACT_PHONE', 1, 'vi'),
  (34, 'Địa chỉ', 'Contact Address', 'Contact Address', 'CONTACT_ADDRESS', 1, 'vi'),
  (35, 'Liên kết Facebook', 'Contact Facebook', 'Contact Facebook', 'CONTACT_FACEBOOK', 1, 'vi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prices`
--

CREATE TABLE IF NOT EXISTS `tbl_prices` (
  `price_id` int(11) NOT NULL AUTO_INCREMENT,
  `price_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price_desc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_value` float NOT NULL,
  `price_status` tinyint(4) NOT NULL DEFAULT '1',
  `price_lang` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`price_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_prices`
--

INSERT INTO `tbl_prices` (`price_id`, `price_name`, `price_desc`, `price_value`, `price_status`, `price_lang`) VALUES
  (1, 'off-peak', '2 - 5, before 5 pm', 5, 1, 'en'),
  (2, 'evening', '2 - 5 before 5pm', 6, 1, 'en'),
  (3, 'off-peak', '2 - 5, trước 17 giờ', 100, 1, 'vi'),
  (4, 'evening', '2 - 5, sau 17 giờ', 120, 1, 'vi'),
  (5, 'weekend', '6 - Sunday', 7.5, 1, 'en'),
  (8, 'evening', '6 - Chủ Nhật', 150, 1, 'vi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_times`
--

CREATE TABLE IF NOT EXISTS `tbl_times` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `time` time NOT NULL,
  `time_status` tinyint(4) NOT NULL DEFAULT '1',
  `is_weekend` tinyint(1) NOT NULL COMMENT 'discrimination weekend with normal days',
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_times`
--

INSERT INTO `tbl_times` (`time_id`, `time`, `time_status`, `is_weekend`) VALUES
  (1, '10:45:00', 1, 0),
  (2, '12:00:00', 1, 0),
  (3, '13:15:00', 1, 0),
  (4, '14:30:00', 1, 0),
  (5, '15:45:00', 1, 0),
  (6, '17:00:00', 1, 0),
  (7, '18:15:00', 1, 0),
  (8, '19:30:00', 1, 0),
  (9, '20:45:00', 1, 0),
  (10, '21:00:00', 1, 0),
  (11, '22:15:00', 1, 0),
  (12, '10:45:00', 1, 1),
  (13, '12:00:00', 1, 1),
  (14, '13:15:00', 1, 1),
  (15, '14:30:00', 1, 1),
  (16, '15:45:00', 1, 1),
  (17, '17:00:00', 1, 1),
  (18, '18:15:00', 1, 1),
  (19, '19:30:00', 1, 1),
  (20, '20:45:00', 1, 1),
  (21, '21:00:00', 1, 1),
  (22, '22:15:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_email`, `user_password`, `user_name`, `user_status`) VALUES
  (1, 'admin@gmail.com', '722e0c45e1906f22b4afcb75ba164fb4', 'Phan The Binh', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
