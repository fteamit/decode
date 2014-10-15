-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2014 at 06:14 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_faqs`
--

INSERT INTO `tbl_faqs` (`faq_id`, `faq_question`, `faq_answer`, `faq_status`, `faq_lang`) VALUES
  (1, 'DECODE là gì? ', 'DECODE là 1 trò chơi thực được chuyển thể từ các game online thoát khỏi phòng kín. Trong 1 nhóm 2-5 người, người chơi sẽ phải chạy đua với thời gian và vận dụng trí tuệ đã giải mã bí mật của căn phòng nơi bị nhốt để tìm chìa khoá thoát ra ngoài. Không có bất kỳ hoạt động nào trong trò chơi là nguy hiểm hay đòi hỏi khả năng thể lực cao. \r\nDECODE được sáng tạo với mục tiêu duy nhất là đem đến một trò chơi vui nhộn, khơi gợi tư duy sáng tạo và đầy tính hành động cho tất cả mọi người bất kể lứa tuổi. DECODE hy vọng tạo ra một sân chơi thú vị giúp gắn kết mọi người với nhau thông qua trải nghiệm chung vai sát cánh vượt qua thử thách. \r\nHiện tại DECODE có 4 chủ đề phòng khác nhau (sẽ được thay đổi định kỳ để giúp mọi người luôn có những trải nghiệm mới mẻ nhất).\r\nĐể hiểu thêm về trò chơi và đặt phòng, hãy ấn “Đặt phòng” trên thanh điều khiển của website.', 1, 'vi'),
  (2, 'Tại sao nên chọn DECODE?', 'DECODE chú trọng niềm vui của mọi người và hướng tới một sân chơi mới mẻ có khả năng “gây nghiện” với những khoảnh khắc đáng nhớ bên bạn bè và gia đình.\r\nGiá của DECODE được cân nhắc cẩn thận sao cho phù hợp với túi tiền người Việt – thấp hơn tới 40% so với các nước bạn như Malaysia, Singapore và Thái Lan! \r\nCác Game Master của DECODE sẽ tận tình quan tâm chăm sóc khách hàng từ lúc đến cho lúc đi. Khách sẽ được hướng dẫn tỉ mỉ cách chơi trò chơi và nếu như đi 1 nhóm 4 hoặc 5 người, khách sẽ nhận được 1 tấm ảnh polaroid miễn phí chụp cả nhóm với phông ảnh DECODE. \r\nDECODE quảng bá trí tuệ của người chơi với những người chơi khác: khách có thể được đề tên trên bảng vàng top 5 nhóm xuất sắc nhất mỗi tuần. Bảng được đặt ở ngay trụ sở DECODE và cả up lên Facebook!\r\n', 1, 'en'),
  (4, 'Tôi nên chơi phòng nào trước? ', 'Mỗi phòng có 1 độ khó khác nhau ( được nêu rõ bên cạnh các poster phòng). Nếu như bạn lần đầu tới chơi, DECODE khuyến khích bạn nên bắt đầu từ căn phòng dễ nhất – bạn sẽ có khả năng giành chiến thắng cao hơn rất nhiều! \r\n2 căn phòng như “Lò mổ” và “Khách sạn ma  m\0﷽﷽﷽﷽﷽﷽﷽﷽﷽﷽﷽ư "ò  và,uysá =tư \0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0ám” được xây dựng với nhiều chi tiết kinh dị có thể khiến bạn thót tim. Bạn nào yếu bóng vía có thể chơi 2 phòng còn lại.\r\nĐương nhiên, nếu như bạn thích bất kỳ 1 chủ đề phòng nào, bạn cứ việc thử! DECODE vô cùng hoan nghênh :D ', 1, 'vi'),
  (5, 'Tôi nên chơi 1 nhóm bao nhiêu người? ', 'Vì DECODE là một trò chơi có tính đồng đội (và cũng vì độ khó của trò chơi), bạn cần ít nhất 2 người để chơi. Tuy nhiên, càng nhiều bộ não vận hành thì khả năng bạn thắng càng cao. Hãy tới cùng 4 người bạn khác (5 là con số tối đa cho 1 phòng chơi) và chiến thắng!', 1, 'vi'),
  (6, 'DECODE phù hợp cho độ tuổi nào? ', 'DECODE là một trò chơi vui nhộn dành cho mọi lứa tuổi, mặc dù trẻ em dưới 9 tuổi có thể cảm thấy quá khó hiểu. Trẻ em từ độ tuổi 9-15 nên có ít nhất 1 người lớn đi cùng. \r\nNếu bạn có 1 trẻ em dưới 9 tuổi trong đội của bạn, bạn sẽ phải chịu hoàn toàn trách nhiệm đối với những hành động của trẻ (bao gồm đổ vỡ, gây hư hại cho đồ đạc trong phòng) và cần ký một giấy đảm bảo trước khi chơi. \r\nKhông có giới hạn độ tuổi trên. ', 1, 'vi'),
  (7, 'Tôi sợ không gian kín. Tôi có thể chơi không? ', 'Các phòng của DECODE đều được thiết kế với trần nhà cao ít nhất 3.5m và diện tích phòng khá rộng rãi. \r\nCác phòng đều có camera và chuông kêu cứu để khách có thể bấm bất cứ lúc nào trong khi chơi và các Game Masters sẽ lập tức tới hỗ trợ. \r\nNếu như bạn cảm thấy không thoải mái, bạn có thể rời bỏ trò chơi bất cứ lúc nào.  ', 1, 'vi'),
  (8, 'Làm thế nào để đặt phòng chơi?', 'Để xem khung thời gian còn trống cho các phòng, vui lòng xem phần “Đặt phòng”. Bạn có thể đặt phòng trước 4 tuần!\r\nSau khi bạn đã chọn được căn phòng yêu thích và khung thời gian, vui lòng điền vào mẫu đơn liên hệ sẵn có và bấm “Gửi”. Một xác nhận đặt phòng sẽ được gửi đến email của bạn. Hãy nhớ rằng bạn cần phải đến 10 phút sớm hơn thời gian đặt phòng để nghe hướng dẫn chơi.\r\nXong rồi, bây giờ bạn chỉ cần thả lỏng và thư giãn chờ đợi tới chuyến phiêu lưu ngoài đời thực của mình thôi!', 1, 'vi'),
  (9, 'Làm thế nào để thanh toán? ', 'Hiện tại, DECODE chỉ chấp nhận thanh toán bằng tiền mặt ngay tại quầy lễ tân của DECODE tại tầng 8, toà nhà Qunimex, 29 Lê Đại Hành, Hà Nội. \r\n', 1, 'vi'),
  (10, 'Tôi có thể không cần đặt mà cứ đi vào chơi không?', 'Bạn có thể! Tuy nhiên DECODE khó có thể đảm bảo cho bạn là sẽ có phòng trống. Để tránh bị thất vọng, bạn hãy sử dụng hệ thống đặt phòng của DECODE để đặt chỗ trước cho chắc chắn.', 1, 'vi'),
  (11, 'Tổng thời gian đến chơi mất bao lâu?', 'Khoảng 60 phút! Thời gian tối đa bạn có thể ở trong phòng chơi là 45 phút. Tuy nhiên, bạn sẽ có 5-10 phút hướng dẫn trước khi chơi và 5 phút nữa để chụp ảnh với phông của DECODE và những đồ costume độc đáo. \r\nVui lòng đến sớm hơn 10 phút so với thời gian đặt phòng chơi. Nếu bạn đến muộn, hãy gọi điện thoại báo trước cho DECODE. Muộn quá 15 phút so với thời gian đặt phòng, DECODE sẽ không thể đảm bảo giữ phòng cho bạn. Mong bạn thông cảm!\r\n', 1, 'vi'),
  (12, 'Tôi sẽ có bao nhiêu gợi ý?', 'Đội của bạn sẽ có nhiều nhất 2 gợi ý từ các Game Masters của DECODE. Các bạn có thể nhấn chuông xin gợi ý bất cứ lúc nào trong cuộc chơi. ', 1, 'en'),
  (13, 'Tôi nên đến lúc mấy giờ? ', 'Vui lòng chỉ đến sớm hơn 10 phút so với thời gian đặt phòng chơi của bạn vì DECODE không có nhiều phòng đợi. \r\nNếu bạn đến muộn, vui lòng báo sớm cho DECODE qua điện thoại.', 1, 'en'),
  (14, 'Giá tiền như thế nào? ', 'Tất cả các phòng của DECODE đều cùng 1 giá: \r\n1. Ban ngày (trước 5h chiều từ thứ Hai đến thứ Năm): 120k VND \r\n2. Buổi tối (sau 5h chiều từ thứ Hai đến thứ Năm): 140k VND\r\n3. Cuối tuần (tất cả các giờ từ thứ Sáu đến CN): 160k VND  \r\nDECODE có chương trình giảm giá 10% cho học sinh sinh viên. Chỉ cần bạn đưa ra thẻ học sinh, sinh viên là sẽ được giảm giá ngay! \r\nDECODE có những ưu đãi giảm giá khác không định kỳ. Hãy theo dõi DECODE trên FB để “chộp” được nhiều ưu đãi vô cùng hấp dẫn: www.facebook.com/decodetvvn ', 1, 'vi'),
  (15, 'Hỗ trợ người khuyết tật và các nhu cầu đặc biệt khác', 'DECODE rất tiếc ở thời điểm này các căn phòng của DECODE chưa được trang bị cho các thiết bị như xe lăn. Trong khi chơi, DECODE có hệ thống loa mỗi phòng để tăng độ kịch tính nhưng người chơi không nhất thiết cần nghe loa mới giải được mật mã. \r\nNếu bạn có nhu cầu đặc biệt khác, vui lòng liên hệ DECODE và chúng tôi sẽ cố gắng hết sức để đáp ứng nhu cầu của bạn.', 1, 'vi'),
  (16, 'Làm thế nào để đi đến DECODE? H', 'Địa chỉ DECODE: tầng 8, toà nhà Qunimex, 29 Lê Đại Hành, Hà Nội. Toà Qunimex nằm ngay đối diện Vincom Bà Triệu và sát cạnh Starbucks Coffee.\r\nKhi sử dụng thang máy, vui lòng bấm lên tầng 7 và đi 1 quãng thang bộ ngắn lên tầng 8. ', 1, 'vi'),
  (17, 'Bãi đỗ xe ô tô và xe máy ', 'Vào ban ngày DECODE không có nhiều chỗ để xe máy, nếu hết chỗ, vui lòng để xe dưới hầm Vincom. Vào buổi tối khách có thể để xe trực tiếp ở DECODE thoải mái. Các chú bảo vệ vui tính của DECODE sẽ rất tận tình hướng dẫn chỗ để xe hợp lý. \r\nDECODE không có hầm để xe ô tô. Vui lòng đỗ xe ô tô dưới hầm Vincom. \r\nDECODE khuyên khách hàng nên để xe dưới hầm Vincom (chỉ từ 2-3k VND cho xe máy và quãng đường từ Vincom ra DECODE rất gần chưa tới 3 phút đi bộ). Có rất nhiều địa điểm khác có thể đỗ xe, tuy nhiên giá trông xe có thể cao tới 10-15k VND tuỳ thuộc đơn vị trông xe. ', 1, 'en'),
  (18, 'Khi bạn đặt chân tới DECODE ', 'Khi bạn tới DECODE, vui lòng giới thiệu với lễ tân mục đích đến thăm của bạn. Nếu bạn đã đặt phòng, bạn chỉ cần báo cho lễ tân thông tin đặt phòng và thanh toán.\r\nNếu lễ tân đang bận tiếp khách khác, xin hãy thoải mái thư giãn tại khu vực giải trí của DECODE trong khi chờ đợi.\r\n', 1, 'vi');

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
  (29, 'DECODE –Trò Chơi Thoát Khỏi Phòng Kín ', 'Đăng ký tham gia ngay thử thách cân não của DECODE với 45 phút chạy đua cật lực cùng thời gian để khám phá những bí mật của căn phòng kín và trốn thoát thành công!\r\n\r\nĐược chuyển thể từ các game online nổi tiếng như Crimson Room, DECODE sẽ “nhốt” bạn (và đồng đội) vào 1 không gian huyền bí và kịch tính với vô vàn những mật mã, câu đố và đầu mối mà các bạn cần giải mã nhanh nhất có thể nhằm tìm ra chiếc chìa khoá mở căn phòng đang bị khoá kín. Hai yếu tố then chốt quyết định sự thành công của bạn chính là tư duy logic và khả năng phối hợp đồng đội. Bạn sẽ cần có rất rất nhiều cả hai yếu tố này (và một chút may mắn nữa) để có thể “qua mặt” thử thách của DECODE.\r\n\r\nMột trò chơi khơi gợi trí tưởng tượng, khả năng quan sát và kích thích tư duy. Một thử thách cho khả năng phối hợp và làm việc nhóm. Một không gian siêu thực với những bí ẩn chưa có lời giải đáp. Tất cả đều sẽ có ở DECODE! \r\n\r\nVậy… bạn đã sẵn sàng chấp nhận thách thức của DECODE? Sẵn sàng giải phóng con người thám tử bên trong bạn? :D Hãy đặt ngay phòng chơi DECODE!', 'Decode Home', 'HOME_DECODE', 1, 'vi'),
  (30, 'Slideshow The Game', 'Slideshow', 'Slideshow', 'GAMES_SLIDESHOW_IMG', 1, 'vi'),
  (31, 'Luật chơi', 'Trong 1 nhóm từ 2-5 người (tuỳ chọn), bạn sẽ bị “nhốt” vào 1 căn phòng kín được thiết kế cầu kì với nhiều chủ đề sống động và độc đáo khác nhau. Thoạt nhìn, đồ đạc bày đặt trong phòng không có gì đặc biệt. Tuy nhiên, thị giác của bạn đã bị đánh lừa! Căn phòng ẩn giấu vô số bí mật trong đó bao gồm cả cách giúp bạn thoát ra. Nhiệm vụ của bạn là từng bước giải mã những đầu mối rải rác trong phòng và tìm ra chiếc chìa khoá vàng có thể mở cửa. Để hỗ trợ bạn, DECODE sẽ cho bạn 2 gợi ý có thể sử dụng bất cứ lúc nào trong cuộc chơi, chỉ cần bạn nhấn chuông cứu. HÃY NHỚ: Bạn chỉ chiến thắng nếu như bạn thoát được khỏi căn phòng trong vòng 45 phút! Đây thật sự sẽ là 1 cuộc đua quyết liệt giữa trí tuệ và thời gian!!!\r\n \r\n\r\n* Để biết thêm thông tin, vui lòng xem phần “Hỏi đáp”\r\n\r\nHiện tại DECODE có 4 chủ đề phòng: Lò mổ, Khách sạn ma ám, Siêu mọt sách và Giải cứu Santa. Mỗi chủ đề đều được đầu tư xây dựng nội dung tỉ mỉ để đảm bảo cho bạn những trải nghiệm đáng nhớ nhất từ tò mò, hoảng hốt, hồi hộp, tự hào và kể cả sốc nặng! :D', 'The Game Rule', 'GAMES_RULE', 1, 'vi'),
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
