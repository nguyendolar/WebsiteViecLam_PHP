-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 14, 2023 lúc 07:41 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websitevieclam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congty`
--

CREATE TABLE `congty` (
  `id` int(11) NOT NULL,
  `diachi` varchar(500) NOT NULL,
  `mota` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `tencongty` varchar(250) NOT NULL,
  `sodienthoai` varchar(250) NOT NULL,
  `taikhoan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `congty`
--

INSERT INTO `congty` (`id`, `diachi`, `mota`, `email`, `logo`, `tencongty`, `sodienthoai`, `taikhoan_id`) VALUES
(1, 'Đại lộ Thăng Long, Xã Tân Xã, Huyện Thạch Thất, Hà Nội', '<p>FPT Software là nhà cung cấp giải pháp &amp; dịch vụ CNTT hàng đầu thế giới có trụ sở tại Việt Nam, với khoảng 28.000 nhân viên làm việc tại 59 văn phòng trên 29 quốc gia và vùng lãnh thổ. Là công ty tiên phong trong chuyển đổi số, FPT Software cung cấp các dịch vụ đẳng cấp và phục vụ hơn 1.000 khách hàng trên toàn thế giới, hơn 100 trong số đó là các công ty lớn nằm trong trong TOP Fortune Global 500 ở các lĩnh vực Hàng không &amp; Vũ trụ, Sản xuất &amp; Ô tô, Ngân hàng, Tài chính &amp; Bảo hiểm, Hậu cần &amp; Giao thông vận tải, Chăm sóc sức khỏe &amp; Khoa học Đời sống, Bán lẻ, Tiện ích &amp; Năng lượng, v.v.&nbsp;</p><p>Đặt con người làm trung tâm của mọi hoạt động, chúng tôi kiến tạo một môi trường làm việc an toàn, công bằng và cởi mở, sự nghiệp mỗi thành viên được cá nhân hóa và thúc đẩy lộ trình học tập kết hợp với văn hóa làm việc thân thiện. Chúng tôi cung cấp cho nhân viên của mình những cơ hội tuyệt vời để có được kỹ năng và kinh nghiệm dồi dào, luôn được tiếp cận với các công nghệ mới và khách hàng quốc tế. Chúng tôi sẽ giúp bạn vạch ra con đường của mình và hỗ trợ bạn đạt được mục tiêu cá nhân.&nbsp;</p><p>Nếu bạn mong muốn thăng tiến không ngừng trong sự nghiệp và nắm bắt các cơ hội không giới hạn từ FPT Software để thành công hơn nữa, đây chính là một hành trình không thể bỏ qua!</p>', 'fptcongty@gmail.com', 'download (1).png', 'FPT Software', '0442434434', 1),
(2, 'Hoa Cuong Bac ward, Hai Chau district, Danang city, Vietnam', '<p>DataHouse Asia is a member of ʻike Group, a growing group of innovators, technologists, and entrepreneurs, owning the biggest and the longest information technology consulting firm, our sister company, DataHouse Consulting founded in 1975 in Hawaii, US.</p><p>As one of the most prestigious software development companies in Danang, Vietnam, we provide end-to-end services for great enterprises, governments, and start-ups. With over 10 years of experience in the software engineering industry, we have successfully collaborated and delivered our high-quality software projects to partners in 19 countries worldwide.</p>', 'datahouseasia@gmail.com', 'mDEKcoUEwYbTZ9iLvXUbswh46MysHVq6_1659596768____457adcf5d444abea27906752903bb5ca.jpg', 'DataHouse Asia', '0321212121', 2),
(3, '60A Trường Sơn, Tân Bình', '<p><strong>Công ty TNHH Mediastep Software</strong> Việt Nam được thành lập vào ngày 07/06/2017, chuyên phát triển các giải pháp công nghệ trong lĩnh vực thương mại điện tử. Sản phẩm chính của Mediastep là nền tảng quản lý bán hàng GoSELL được ra mắt ngày 24/07/2019 cùng với kênh xuất khẩu hàng hóa GoEXPORT.&nbsp;<br>Mediastep có hoạt động rất sôi nổi trên thị trường thương mại điện tử. Công ty là thành viên chính thức của Hiệp hội thương mại điện tử Việt Nam (VECOM), Phòng Thương Mại và Công Nghiệp Việt Nam (VCCI). Ngoài ra, Mediastep còn là đối tác chiến lược của sàn TMĐT quốc tế Alibaba.com giúp các doanh nghiệp Việt xuất khẩu hàng hóa sang thị trường nước ngoài.</p>', 'mediastep@gmail.com', 'aDXFbkzqFCWCjNbvZBeNVyEF37mDmKop_1644317641____32ec97a53c3b8bc91ee3fd27528b6c1b.jpg', 'Mediastep Software', '03940837465', 3),
(4, 'Phường Dịch Vọng Hậu, Quận Cầu Giấy, Thành phố Hà Nội', '<p>CMC Global đã liên tiếp giành được hai giải thưởng Sao Khuê xuất sắc cho hạng mục “Dịch vụ Gia công phần mềm CNTT” vào năm 2019 và 2020. Năm 2020, chúng tôi vinh dự nhận được danh hiệu “Nơi làm việc tốt nhất Châu Á 2020” từ Tạp chí HR Asia. . Những giải thưởng này là sự công nhận xứng đáng cho nỗ lực không ngừng của chúng tôi để nâng cao hiệu suất và chất lượng dịch vụ cho các đối tác của chúng tôi.<br>Chúng tôi áp dụng các tiêu chuẩn quốc tế trong ngành như ISO 27001: 2013, ISO 9001: 2015, CMMi Cấp 3 trong hoạt động và quản lý để đảm bảo chất lượng dịch vụ cao nhất và vượt quá mong đợi của khách hàng. Đây là những bằng chứng vững chắc về nỗ lực không ngừng của chúng tôi để nâng cao hiệu suất và đảm bảo chất lượng dịch vụ tốt nhất cho các đối tác.<br>- Nền tảng lâu dài của chúng tôi trong 27 năm trong lĩnh vực ICT cung cấp cho chúng tôi những hiểu biết quan trọng về thị trường CNTT bản địa, cũng như bí quyết toàn cầu về các xu hướng và đổi mới công nghệ mới nhất.&nbsp;<br>- Đội ngũ hơn 1000 kỹ sư được chứng nhận của CMC Global trong các công nghệ khác nhau giúp khách hàng chuyển đổi hoạt động kinh doanh của họ.&nbsp;<br>- Thời gian trung bình của chúng tôi để cung cấp các nhà phát triển đủ điều kiện thường là 1-3 tuần tùy thuộc vào yêu cầu cụ thể của bạn<br>- Bằng cách hợp tác với CMC Global, khách hàng của chúng tôi có thể tận dụng chi phí hoạt động và tiết kiệm tới 70% chi phí cá nhân.</p>', 'cmcglobal@gmail.com', 'LkxrgcuOf9mR2epjTMMm7DfGS2KjHkJe_1634443524____608b841573b95852723b7a45514929a5.jpg', 'CMC GLOBAL', '0321345678', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congviec`
--

CREATE TABLE `congviec` (
  `id` int(11) NOT NULL,
  `diachi` varchar(500) NOT NULL,
  `ngaytao` date NOT NULL DEFAULT current_timestamp(),
  `kinhnghiem` varchar(500) NOT NULL,
  `soluong` int(11) NOT NULL,
  `luong` varchar(250) NOT NULL,
  `tieude` varchar(500) NOT NULL,
  `congty_id` int(11) NOT NULL,
  `danhmuccongviec_id` int(11) NOT NULL,
  `mota` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `congviec`
--

INSERT INTO `congviec` (`id`, `diachi`, `ngaytao`, `kinhnghiem`, `soluong`, `luong`, `tieude`, `congty_id`, `danhmuccongviec_id`, `mota`) VALUES
(2, 'Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm', '2023-03-14', '1 năm', 10, '12 triệu 1 tháng', 'Giảng Viên Công Nghệ Thông Tin', 1, 1, '<ul><li>Tham gia giảng dạy các môn học thuộc chuyên ngành Công nghệ thông tin/ứng dụng phần mềm theo chương trình của FPT Polytechnic dưới sự phân công của Academic Head</li><li>Thực hiện việc quản lý sinh viên, quản lý lớp học, coi thi, chấm thi, sử dụng tài nguyên trên LMS theo quy định của FPT Polytechnic</li><li>Tham gia các hoạt động chuyên môn: Họp chuyên môn, Workshop, hướng dẫn sinh viên làm đề tài NCKH,…</li></ul><h3><strong>Yêu cầu ứng viên</strong></h3><ul><li>Tốt nghiệp Đại học trở lên khối ngành Công nghệ thông tin các trường đại học sư phạm kỹ thuật, ĐH Bách Khoa, HV Bưu chính - viễn thông, ĐH Công nghệ, ĐH FPT, ĐH Công nghiệp, ĐH Giao thông vận tải...</li><li>Có kỹ năng sư phạm, kiến thức chuyên môn tốt</li><li>Có thể giảng dạy/có kinh nghiệm của một hoặc một vài môn sau: Lập trình các ngôn ngữ C, Java, C Sharp, HTML/CSS/Javascript, PHP, Android., Python</li><li>Các nền tảng NodeJS, ReactJS, Angular, Laravel, Unity 2D, Spring MVC, Spring Boot, .NetCore, ReactJS, Angular ...</li><li>Hiểu biết về cơ sở dữ liệu</li><li>Ưu tiên ứng viên có kinh nghiệm Quản trị dự án thực tế</li></ul><h3><strong>Quyền lợi</strong></h3><ul><li>Mức lương trung bình: 180.000 VNĐ/giờ</li><li>Môi trường làm việc năng động, chuyên nghiệp;</li><li>Có mức thu nhập hấp dẫn (trả theo năng lực). Cam kết lương tối thiểu 10tr trở lên (dự kiến có thể tăng lên 12 - 13tr tối thiểu);</li><li>Được đóng BHXH, BHYT, BHTN… theo quy định của Nhà nước;</li><li>Cơ hội được nhận học bổng 10-30% khi học MBA tại Đại học FPT;</li><li>Cơ hội được nhận hỗ trợ từ FPT Edu lên đến 200 triệu đồng khi tham gia học Tiến sĩ;</li><li>Thưởng bài báo được công bố quốc tế: mức thưởng lên đến 100 triệu đồng/bài;</li><li>Chi phí hỗ trợ đi lại khi tham gia hội nghị, hội thảo trong nước và quốc tế có bài tham luận được nhận hỗ trợ lên đến 30 triệu đồng/người/năm;</li><li>Có cơ hội tham gia các hoạt động đào tạo nâng cao trình độ;</li><li>Hưởng chế độ chăm sóc sức khỏe đặc biệt dành cho bản thân và gia đình (FPT care);</li><li>Các quyền lợi khác: du lịch nghỉ mát hàng năm, tham gia các hoạt động vui chơi giải trí…</li><li>Người nhà được hưởng chế độ ưu đãi học phí khi học tập tại Tổ chức Giáo dục FPT</li></ul>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuccongviec`
--

CREATE TABLE `danhmuccongviec` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuccongviec`
--

INSERT INTO `danhmuccongviec` (`id`, `tendanhmuc`) VALUES
(1, 'Công nghệ thông tin'),
(2, 'Kĩ sư phần mềm'),
(3, 'Lập trình website'),
(4, 'Lập trình nhúng'),
(5, 'Lập trình Android'),
(6, 'Phát triển ứng dụng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `hoten` varchar(250) NOT NULL,
  `taikhoan` varchar(250) NOT NULL,
  `matkhau` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `hoten`, `taikhoan`, `matkhau`) VALUES
(1, 'Lê Văn Nguyên', 'levana', '123456'),
(2, 'Đăng Hoàng', 'danghoang', '123456'),
(3, 'Minh Nhã', 'minhnha', '123456'),
(4, 'Bùi Dũng Đinh', 'buidung', '123456');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lien_ket_01` (`taikhoan_id`);

--
-- Chỉ mục cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lien_ket_11` (`danhmuccongviec_id`),
  ADD KEY `lien_ket_12` (`congty_id`);

--
-- Chỉ mục cho bảng `danhmuccongviec`
--
ALTER TABLE `danhmuccongviec`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `congty`
--
ALTER TABLE `congty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `congviec`
--
ALTER TABLE `congviec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `danhmuccongviec`
--
ALTER TABLE `danhmuccongviec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `congty`
--
ALTER TABLE `congty`
  ADD CONSTRAINT `lien_ket_01` FOREIGN KEY (`taikhoan_id`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `congviec`
--
ALTER TABLE `congviec`
  ADD CONSTRAINT `lien_ket_11` FOREIGN KEY (`danhmuccongviec_id`) REFERENCES `danhmuccongviec` (`id`),
  ADD CONSTRAINT `lien_ket_12` FOREIGN KEY (`congty_id`) REFERENCES `congty` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
