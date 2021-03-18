-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 يونيو 2020 الساعة 13:28
-- إصدار الخادم: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- بنية الجدول `activate`
--

CREATE TABLE `activate` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `activate`
--

INSERT INTO `activate` (`id`, `name`) VALUES
(1, 'football'),
(2, 'art');

-- --------------------------------------------------------

--
-- بنية الجدول `activitestudent`
--

CREATE TABLE `activitestudent` (
  `student` bigint(20) NOT NULL,
  `activite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `activitestudent`
--

INSERT INTO `activitestudent` (`student`, `activite`) VALUES
(545214799663, 1),
(29705051501058, 2),
(35355445485559, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `books`
--

INSERT INTO `books` (`id`, `name`, `price`) VALUES
(1, 'Security', 150),
(2, 'microprocessor', 0);

-- --------------------------------------------------------

--
-- بنية الجدول `building`
--

CREATE TABLE `building` (
  `id` int(11) NOT NULL,
  `number_of_room` int(11) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `university` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `building`
--

INSERT INTO `building` (`id`, `number_of_room`, `capacity`, `name`, `university`) VALUES
(1, 15, 212, 'hhhh', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `clinic`
--

CREATE TABLE `clinic` (
  `id` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `university` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `clinic`
--

INSERT INTO `clinic` (`id`, `name`, `university`) VALUES
(1, 'm,nkjk', 1),
(2, 'Internal Medici', 1),
(3, 'Hematology Clin', 1),
(4, 'Kidney clinic', 1),
(5, 'heart clinic', 1),
(6, 'Neurology Clini', 1),
(7, 'Physiotherapy c', 1),
(8, 'Internal Medici', 2),
(9, 'Hematology Clin', 2),
(10, 'Kidney clinic', 2),
(11, 'heart clinic', 2),
(12, 'Neurology Clini', 2),
(13, 'Physiotherapy c', 2);

-- --------------------------------------------------------

--
-- بنية الجدول `collage`
--

CREATE TABLE `collage` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `university` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `collage`
--

INSERT INTO `collage` (`id`, `name`, `university`) VALUES
(1, 'FCIS', 1),
(2, 'science', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `professor` varchar(25) DEFAULT NULL,
  `code` varchar(15) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `begin_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `type_course` int(11) DEFAULT NULL,
  `photo_course` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `max_student` int(11) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `mobile` int(12) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `university` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `courses`
--

INSERT INTO `courses` (`id`, `name`, `professor`, `code`, `description`, `duration`, `begin_date`, `end_date`, `type_course`, `photo_course`, `price`, `max_student`, `email`, `mobile`, `website`, `university`) VALUES
(1, 'PHP ', 'Mohamed Esmail', '', 'content course', 120, '2020-07-09', '2020-10-10', 1, 'Warstwa 3.png', 600, 40, 'aaa@gmail.com', 0, 'www.course.web', 1),
(2, 'network', 'mohamed', '3v3r25d', 'content course', 120, '2020-07-09', '2020-10-10', 1, 'Warstwa 5.png', 600, 40, 'aaa@gmail.com', 0, 'www.course.web', 1),
(3, 'daatastructure', 'mohamed', '3v35jd', 'content course', 120, '2020-07-09', '2020-10-10', 1, 'bg.jpg', 600, 40, 'aaa@gmail.com', 0, 'www.course.web', 1),
(4, 'Front', 'Eman said', '3vnnjd', 'nkkkkkkkksdj skdjjjjjj', 4, '2020-01-01', '2020-05-06', 1058, 'download111.jpg', 2100, 35, 'mo@gmail.com', 0, 'mnnnnnnnnnn', 1),
(11, 'IOT', 'Eman Ahmed4', '3l6i9l', 'jnhbgvfcdxsxfghjkl', NULL, '0000-00-00', '0000-00-00', NULL, 'images (2).jpg', 2100, 20, 'souad12@gmail.com', 102442441, NULL, 1),
(12, 'Bio', 'Eman Ahmed', '3l6i9p', 'jnhbgvfcdxsxfghjkl', NULL, '0000-00-00', '0000-00-00', NULL, 'images.jpg', 1200, 20, 'em@gmail.com', 102245444, NULL, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `collage` int(11) NOT NULL,
  `details` varchar(200) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `header` varchar(25) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `department`
--

INSERT INTO `department` (`id`, `collage`, `details`, `name`, `header`, `capacity`) VALUES
(1, 1, 'are constantly reminded of what the film is trying to do, and yet are powerless to stop it', 'information Technology', 'Dr/ Noha', 150),
(2, 1, 'are constantly reminded of what the film is trying to do, and yet are powerless to stop it', 'computer science', 'Dr/ Samir', 150),
(3, 1, 'are constantly reminded of what the film is trying to do, and yet are powerless to stop it', 'information system', 'Dr/ hazem', 150),
(8, 1, 'are constantly reminded of what the film is trying to do, and yet are powerless to stop it', 'General', 'Dr/ Hassan', 500),
(9, 1, 'are constantly reminded of what the film is trying to do, and yet are powerless to stop it', 'deprt', 'head1', 200);

-- --------------------------------------------------------

--
-- بنية الجدول `department_student`
--

CREATE TABLE `department_student` (
  `department` int(11) NOT NULL,
  `student` bigint(20) NOT NULL,
  `accepted` tinyint(4) DEFAULT 0,
  `orderdept` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `department_student`
--

INSERT INTO `department_student` (`department`, `student`, `accepted`, `orderdept`) VALUES
(1, 25552444, 0, 3),
(2, 55798654743, 0, 4),
(3, 545214799663, 3, NULL),
(3, 35355445485553, 3, 1),
(3, 35355445485559, 3, NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `desired_collage`
--

CREATE TABLE `desired_collage` (
  `collage` int(11) NOT NULL,
  `student` bigint(20) NOT NULL,
  `accepted` tinyint(4) DEFAULT 0,
  `orderCollage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `desired_collage`
--

INSERT INTO `desired_collage` (`collage`, `student`, `accepted`, `orderCollage`) VALUES
(1, 35355445485553, 0, 5);

-- --------------------------------------------------------

--
-- بنية الجدول `disclaimer`
--

CREATE TABLE `disclaimer` (
  `student` bigint(20) NOT NULL,
  `library` varchar(255) DEFAULT NULL,
  `housing` varchar(255) DEFAULT NULL,
  `welfare` varchar(255) DEFAULT NULL,
  `affairs` varchar(255) DEFAULT NULL,
  `training` varchar(255) DEFAULT NULL,
  `milarity` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `disclaimer`
--

INSERT INTO `disclaimer` (`student`, `library`, `housing`, `welfare`, `affairs`, `training`, `milarity`) VALUES
(25552444, 'hjaskhdkjdkld', 'ddhujcncbuychnc', 'dsassuhicdncm', 'xxssyuhcjckjdmc', 'dsszjhjsaK<', 'zsdffzf'),
(55798654743, 'ggfgf', 'gttyu', 'hykuiukj', 'uuyyr', 'trghjjuj', 'gdser'),
(545214799663, 'dcdsd', 'dfrfzd', 'fdfgzdf', 'fgffgf', 'grrrrg', 'ggttggt'),
(35355445485553, 'sdffsff', 'ffrrfvvg', 'ghyteed', 'yhjyyffffr', 'ewewaww', 'rtetttsy'),
(35355445485559, 'snsbhjbn', 'ssjhuhujnm ', 'sssssssssssssssssssh', 'ssssssssssssssssss', 'dddddddddddddd', 'dddddddddddddddddddd');

-- --------------------------------------------------------

--
-- بنية الجدول `employee`
--

CREATE TABLE `employee` (
  `ssn` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `job_title` varchar(100) NOT NULL,
  `password` varchar(25) DEFAULT NULL,
  `collage` int(11) NOT NULL,
  `university` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `personal_photo` varchar(50) DEFAULT NULL,
  `privilage` int(11) NOT NULL,
  `phone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `employee`
--

INSERT INTO `employee` (`ssn`, `username`, `name`, `job_title`, `password`, `collage`, `university`, `email`, `personal_photo`, `privilage`, `phone`) VALUES
(35355445485554, 'toaa elmasry', 'toaa', 'Student Affairs Officer', '12345', 1, 1, 'toaa11@gmail.com', 'bg.jpg', 1, '01021637001'),
(68522566645453, 'souad elmasry', 'souad', 'Student Affairs Officer', '123456', 1, 1, 'sou@gmail.com', 'Warstwa 5.png', 1, '01021637001');

-- --------------------------------------------------------

--
-- بنية الجدول `fees`
--

CREATE TABLE `fees` (
  `student` bigint(20) NOT NULL,
  `date_payment` date NOT NULL,
  `fees` int(11) DEFAULT NULL,
  `fees_type` tinyint(11) NOT NULL,
  `payment_type` tinyint(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `details` varchar(100) DEFAULT NULL,
  `yearOfFees` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `fees`
--

INSERT INTO `fees` (`student`, `date_payment`, `fees`, `fees_type`, `payment_type`, `status`, `details`, `yearOfFees`) VALUES
(25552444, '2019-02-01', 0, 1, 0, 0, 'are constantly reminded of what the film is trying to do, and yet are powerless to stop it', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `guardian`
--

CREATE TABLE `guardian` (
  `ssn` bigint(20) NOT NULL,
  `job_title` varchar(40) DEFAULT NULL,
  `national` varchar(50) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `relation` int(11) DEFAULT NULL,
  `work_place` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `fax` varchar(40) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `home_tel` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `guardian`
--

INSERT INTO `guardian` (`ssn`, `job_title`, `national`, `name`, `relation`, `work_place`, `email`, `fax`, `mobile`, `home_tel`) VALUES
(27611111, NULL, '', 'مصطفى كامل علي عفيفي', NULL, NULL, NULL, NULL, NULL, NULL),
(9665478852269, 'hskdjsh shssh ksjhsjsdhj', '', 'Mohamed', 1222, 'elmansoura', 'sou@gmail.com', 'gfdsdrthjk', '01021637000', '0504999');

-- --------------------------------------------------------

--
-- بنية الجدول `housing`
--

CREATE TABLE `housing` (
  `student` bigint(20) NOT NULL,
  `degree` int(11) DEFAULT NULL,
  `distance` int(11) DEFAULT NULL,
  `accepted` tinyint(4) DEFAULT NULL,
  `room` int(11) NOT NULL,
  `food` tinyint(4) DEFAULT NULL,
  `building` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `housing`
--

INSERT INTO `housing` (`student`, `degree`, `distance`, `accepted`, `room`, `food`, `building`, `id`) VALUES
(25552444, 500, 150, 0, 12, 2, 1, 2),
(55798654743, 500, 150, 1, 10, 2, 1, 4),
(35355445485553, 500, 20, 1, 10, 2, 1, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `library`
--

CREATE TABLE `library` (
  `collage` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `library`
--

INSERT INTO `library` (`collage`, `id`, `name`) VALUES
(1, 1, 'gggggggg'),
(2, 2, 'hhhh');

-- --------------------------------------------------------

--
-- بنية الجدول `librarybook`
--

CREATE TABLE `librarybook` (
  `id` int(11) NOT NULL,
  `library` int(11) NOT NULL,
  `book` int(11) NOT NULL,
  `student` bigint(20) NOT NULL,
  `dateBooked` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `librarybook`
--

INSERT INTO `librarybook` (`id`, `library`, `book`, `student`, `dateBooked`) VALUES
(1, 1, 1, 35355445485553, '2020-06-01'),
(0, 1, 2, 35355445485559, '2020-05-02'),
(3, 2, 1, 25552444, '2020-02-03');

-- --------------------------------------------------------

--
-- بنية الجدول `medical_examination`
--

CREATE TABLE `medical_examination` (
  `id` int(11) NOT NULL,
  `date_examination` date NOT NULL,
  `place` varchar(50) NOT NULL,
  `university` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `medical_examination`
--

INSERT INTO `medical_examination` (`id`, `date_examination`, `place`, `university`) VALUES
(1, '2020-04-01', 'mansoura', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `military_education`
--

CREATE TABLE `military_education` (
  `id` int(11) NOT NULL,
  `begin_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `officer` varchar(30) DEFAULT NULL,
  `university` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `military_education`
--

INSERT INTO `military_education` (`id`, `begin_date`, `end_date`, `officer`, `university`) VALUES
(1, '2020-12-12', '2020-12-27', 'mohamed', 1),
(2, '2020-04-01', '2020-05-30', 'no', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `military_student`
--

CREATE TABLE `military_student` (
  `military` int(11) NOT NULL,
  `student` bigint(20) NOT NULL,
  `result` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `military_student`
--

INSERT INTO `military_student` (`military`, `student`, `result`) VALUES
(1, 35355445485553, 500),
(2, 35355445485553, 500);

-- --------------------------------------------------------

--
-- بنية الجدول `notifications_medical`
--

CREATE TABLE `notifications_medical` (
  `id` int(11) NOT NULL,
  `medical` int(11) NOT NULL,
  `student` bigint(20) NOT NULL,
  `accept` tinyint(4) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `notifications_medical`
--

INSERT INTO `notifications_medical` (`id`, `medical`, `student`, `accept`, `description`) VALUES
(2, 1, 55798654743, 1, 'fdddd');

-- --------------------------------------------------------

--
-- بنية الجدول `patient_books`
--

CREATE TABLE `patient_books` (
  `clinic` int(11) NOT NULL,
  `student` bigint(20) NOT NULL,
  `date_of_book` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `patient_books`
--

INSERT INTO `patient_books` (`clinic`, `student`, `date_of_book`) VALUES
(1, 25552444, '1998-01-05'),
(1, 35355445485553, '2020-06-01'),
(1, 35355445485559, '2020-05-05'),
(1, 35355445485559, '2020-05-06'),
(4, 35355445485559, '2020-05-09'),
(7, 35355445485559, '2020-05-07');

-- --------------------------------------------------------

--
-- بنية الجدول `privilage`
--

CREATE TABLE `privilage` (
  `id` int(11) NOT NULL,
  `role` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `privilage`
--

INSERT INTO `privilage` (`id`, `role`) VALUES
(1, 'yes');

-- --------------------------------------------------------

--
-- بنية الجدول `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `university` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `scholarship`
--

INSERT INTO `scholarship` (`id`, `title`, `description`, `link`, `university`) VALUES
(1, ' AMIDEAST', 'jnhbgvfcdxsxfghjkl', 'https://www.amideast.org/egypt', 1),
(0, 'Ø§Ù„Ø´Ø±Ù‚ Ø§Ù„Ø§ÙˆØ', 'jnhbgvfcdxsxfghjkl', 'https://www.hotcourse.ae/', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `student`
--

CREATE TABLE `student` (
  `ssn` bigint(20) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL,
  `personal_photo` varchar(50) DEFAULT NULL,
  `id_scan` varchar(50) DEFAULT NULL,
  `guardian_scan` varchar(50) DEFAULT NULL,
  `army_card_scan` varchar(50) DEFAULT NULL,
  `birth_day_scan` varchar(50) DEFAULT NULL,
  `nomination_card_scan` varchar(50) DEFAULT NULL,
  `certificate_scan` varchar(50) DEFAULT NULL,
  `department` int(11) NOT NULL,
  `year_collage` int(11) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `guardian` bigint(20) DEFAULT NULL,
  `postal_code` varchar(5) DEFAULT NULL,
  `mail_box` varchar(40) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `home_tel` varchar(12) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name_ar` varchar(30) DEFAULT NULL,
  `name_en` varchar(30) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `nationality` varchar(12) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `relationship` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `id_type` varchar(10) DEFAULT NULL,
  `religion` int(11) DEFAULT NULL,
  `acadimic_year` varchar(70) DEFAULT NULL,
  `previous_qualification` varchar(30) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `Institute` varchar(20) DEFAULT NULL,
  `graduation_year` varchar(50) DEFAULT NULL,
  `Percentage` int(11) DEFAULT NULL,
  `collage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `student`
--

INSERT INTO `student` (`ssn`, `id`, `address`, `personal_photo`, `id_scan`, `guardian_scan`, `army_card_scan`, `birth_day_scan`, `nomination_card_scan`, `certificate_scan`, `department`, `year_collage`, `position`, `guardian`, `postal_code`, `mail_box`, `fax`, `mobile`, `home_tel`, `gender`, `password`, `name_ar`, `name_en`, `user_name`, `nationality`, `birth_date`, `relationship`, `status`, `id_type`, `religion`, `acadimic_year`, `previous_qualification`, `total`, `Institute`, `graduation_year`, `Percentage`, `collage`) VALUES
(25552444, 3, NULL, 'images (1).jpg', NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, 9665478852269, NULL, NULL, NULL, '01010140022', NULL, 0, NULL, 'Ù…Ø­Ù…Ø¯ ', 'mohamed', 'Ù…Ø­Ù…Ø¯ Ù…Ø­Ù…Ø¯ Ø§Ù„Ù…ØµØ±Ù‰', NULL, '1998-05-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(55798654743, 6, NULL, 'avatar-2.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, 9665478852269, NULL, NULL, NULL, '0105555', NULL, 1, NULL, 'Ø³Ø¹Ø§Ø¯', 'Souad', 'Ø³Ø¹Ø§Ø¯ Ù…Ø­Ù…Ø¯ Ø²Ù‡Ø§Ù†Ù‡ ', NULL, '1998-05-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(545214799663, 7, NULL, 'avatar-5.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, 9665478852269, NULL, NULL, NULL, '010555956', NULL, 1, NULL, 'Ø¹Ø¨ÙŠØ±', 'Abeer', 'Ø¹Ø¨ÙŠØ± Ø§Ø´Ø±Ù Ø¨Ø­ÙŠÙ„Ù‚', NULL, '1998-02-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(29705051501057, 0, NULL, '6.jpg', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.png', NULL, 8, NULL, NULL, 9665478852269, NULL, NULL, NULL, '01021254122', NULL, 0, NULL, 'Ø§Ø­Ù…Ø¯', 'Ahmed', 'Ø£Ø­Ù…Ø¯ Ù…ØµØ·ÙÛŒ Ú©Ø§Ù…Ù„ Ø¹Ù„Ù‰ Ø¹ÙÛŒÙÛŒ ', NULL, '1998-06-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(29705051501058, 7, 'بلطيم مركز البرلس - كفر الشيخ', '', '', '', '', '', '', '', 8, 2016, 123456, 27611111, 'k4k1', NULL, NULL, '01064032786', NULL, 0, '123456', 'Ø§Ø­Ù…Ø¯', 'Ahmed', 'Ø§Ø­Ù…Ø¯ Ù…ØµØ·ÙÙ‰ ', NULL, '0000-00-00', NULL, NULL, NULL, NULL, '', 'الثانوية العامة نظام حديث-علمي', NULL, NULL, NULL, NULL, 1),
(35355445485553, 1, 'ftggggggggg', 'bg.jpg', 'id.jpg', 'IMG-20200427-WA0016.jpg', 'IMG-20200427-WA0016.jpg', 'birthday.jpg', 'IMG-20200427-WA0016.jpg', 'certificate_scan.jpg', 2, 2016, 65221, 9665478852269, 'k4k2', 'so@gmail.com', 'gfdsdrthjk', '0102163700', '0504999', 1, '0000', 'ØªÙ‚Ù‰', 'Toaa', 'ØªÙ‚Ù‰ Ù…Ø­Ù…Ø¯ Ø²Ù‡Ø§Ù†Ù‡ Ø§Ù„Ù…ØµØ±Ù‰', 'Egyption', '1998-09-01', 'single', 1, 'mansoura', 555, 'The fourth Year', 'jkkkkkkkkk', '10000', NULL, '2020', 233, 1),
(35355445485559, 5, 'dffff', 'laptop.jpg', 'IMG-20200427-WA0016.jpg', 'birthday.jpg', 'birthday.jpg', 'IMG-20200427-WA0016.jpg', 'certificate_scan.jpg', 'IMG-20200427-WA0016.jpg', 2, 2016, 4566, 9665478852269, 'k4k2', 'so@gmail.com', 'gfdsdrthjk', '01021637005', '0504999', 1, 'gggg', 'Ø³Ø§Ø±Ù‡', 'sara', 'Ø³Ø§Ø±Ù‡ Ù…Ø­Ù…Ø¯', 'Egyption', '1998-09-01', 'single', 1, '1', 245, '1 st', 'cccd', 'dddcc', 'ddff', '2020', 24, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `student` bigint(20) NOT NULL,
  `training_portal` int(11) NOT NULL,
  `certificate` varchar(50) DEFAULT NULL,
  `applay` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `training`
--

INSERT INTO `training` (`id`, `student`, `training_portal`, `certificate`, `applay`) VALUES
(4, 25552444, 3, 'fhj jkkkkkkkkkkkkkk', 0),
(2, 545214799663, 2, 'fhj jkkkkkkkkkkkkkk;ll', 0),
(5, 29705051501058, 3, 'fhj jkkkkkkkkkkkkkk', 1),
(3, 35355445485553, 2, 'fhj jkkkkkkkkkkkkkk', 1),
(1, 35355445485559, 3, 'fhj jkkkkkkkkkkkkkk;ll', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `training_portal`
--

CREATE TABLE `training_portal` (
  `id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `accepted` tinyint(4) DEFAULT NULL,
  `collage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `training_portal`
--

INSERT INTO `training_portal` (`id`, `name`, `address`, `accepted`, `collage`) VALUES
(0, 'llll', 'hnkjnkljlkjhjkjhdd', NULL, 2),
(1, 'Information Technology In', 'mansoura', 0, 2),
(2, 'College counseling center', 'mansoura', 1, 1),
(3, 'Government agencies speci', 'hayshark', 1, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `information` varchar(255) DEFAULT NULL,
  `date_of_transaction` date DEFAULT NULL,
  `employee` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- بنية الجدول `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `university`
--

INSERT INTO `university` (`id`, `name`) VALUES
(1, 'Mansoura'),
(2, 'القاهره'),
(3, 'الاسكندريه'),
(4, 'دمياط');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activate`
--
ALTER TABLE `activate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activitestudent`
--
ALTER TABLE `activitestudent`
  ADD PRIMARY KEY (`student`,`activite`),
  ADD KEY `activteFk_idx2131` (`activite`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_university_building_idx` (`university`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKclinic45556` (`university`);

--
-- Indexes for table `collage`
--
ALTER TABLE `collage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_collage_university1_idx` (`university`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `photo_course` (`photo_course`),
  ADD KEY `FKcourses609575` (`university`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKdepartment899000` (`collage`);

--
-- Indexes for table `department_student`
--
ALTER TABLE `department_student`
  ADD PRIMARY KEY (`department`,`student`),
  ADD UNIQUE KEY `orderUn` (`department`,`student`,`orderdept`),
  ADD KEY `FKstudent_idx` (`student`);

--
-- Indexes for table `desired_collage`
--
ALTER TABLE `desired_collage`
  ADD PRIMARY KEY (`collage`,`student`),
  ADD UNIQUE KEY `uniqueCollage` (`collage`),
  ADD UNIQUE KEY `uniqordercollage` (`collage`,`orderCollage`),
  ADD KEY `FKdesired_co336845` (`student`);

--
-- Indexes for table `disclaimer`
--
ALTER TABLE `disclaimer`
  ADD PRIMARY KEY (`student`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ssn`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `personal_photo` (`personal_photo`),
  ADD KEY `FKemployee613187` (`collage`),
  ADD KEY `FKemployee130569` (`university`),
  ADD KEY `FKemployee313414` (`privilage`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`student`,`date_payment`,`fees_type`);

--
-- Indexes for table `guardian`
--
ALTER TABLE `guardian`
  ADD PRIMARY KEY (`ssn`);

--
-- Indexes for table `housing`
--
ALTER TABLE `housing`
  ADD PRIMARY KEY (`student`),
  ADD UNIQUE KEY `Unqueroom` (`building`,`room`,`student`),
  ADD KEY `FkBuildingUnque_idx` (`building`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`collage`);

--
-- Indexes for table `librarybook`
--
ALTER TABLE `librarybook`
  ADD PRIMARY KEY (`library`,`book`,`student`),
  ADD KEY `studentFk_idx` (`student`),
  ADD KEY `bookFk_idx` (`book`);

--
-- Indexes for table `medical_examination`
--
ALTER TABLE `medical_examination`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `place` (`place`),
  ADD KEY `FKmedical_ex397803` (`university`);

--
-- Indexes for table `military_education`
--
ALTER TABLE `military_education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKmilitary_e884593` (`university`);

--
-- Indexes for table `military_student`
--
ALTER TABLE `military_student`
  ADD PRIMARY KEY (`military`,`student`),
  ADD KEY `FKmilitary_s809106` (`student`);

--
-- Indexes for table `notifications_medical`
--
ALTER TABLE `notifications_medical`
  ADD PRIMARY KEY (`medical`,`student`),
  ADD KEY `FKnotificati598281` (`student`);

--
-- Indexes for table `patient_books`
--
ALTER TABLE `patient_books`
  ADD PRIMARY KEY (`clinic`,`student`,`date_of_book`),
  ADD KEY `FKpatient_bo259327` (`student`);

--
-- Indexes for table `privilage`
--
ALTER TABLE `privilage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`title`),
  ADD KEY `FKscholarshi581964` (`university`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`ssn`),
  ADD UNIQUE KEY `personal_photo` (`personal_photo`),
  ADD UNIQUE KEY `id_scan` (`id_scan`),
  ADD UNIQUE KEY `guardian_scan` (`guardian_scan`),
  ADD UNIQUE KEY `army_card_scan` (`army_card_scan`),
  ADD UNIQUE KEY `birth_day_scan` (`birth_day_scan`),
  ADD UNIQUE KEY `nomination_card_scan` (`nomination_card_scan`),
  ADD UNIQUE KEY `certificate_scan` (`certificate_scan`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `FKstudent108057` (`guardian`),
  ADD KEY `FKstudent774460` (`department`),
  ADD KEY `FKstudentcollage_idx` (`collage`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`student`,`training_portal`),
  ADD KEY `FKPortal_idx` (`training_portal`);

--
-- Indexes for table `training_portal`
--
ALTER TABLE `training_portal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKtraining_p537712_idx` (`collage`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKtransactio208237` (`employee`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `building`
--
ALTER TABLE `building`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clinic`
--
ALTER TABLE `clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `collage`
--
ALTER TABLE `collage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ssn` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68522566645454;

--
-- AUTO_INCREMENT for table `guardian`
--
ALTER TABLE `guardian`
  MODIFY `ssn` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9665478852270;

--
-- AUTO_INCREMENT for table `medical_examination`
--
ALTER TABLE `medical_examination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `military_education`
--
ALTER TABLE `military_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `privilage`
--
ALTER TABLE `privilage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `ssn` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35355445485563;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `activitestudent`
--
ALTER TABLE `activitestudent`
  ADD CONSTRAINT `activteFk213213` FOREIGN KEY (`activite`) REFERENCES `activate` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `studentFk213123` FOREIGN KEY (`student`) REFERENCES `student` (`ssn`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- القيود للجدول `building`
--
ALTER TABLE `building`
  ADD CONSTRAINT `FK_university_building` FOREIGN KEY (`university`) REFERENCES `university` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `clinic`
--
ALTER TABLE `clinic`
  ADD CONSTRAINT `FKclinic45556` FOREIGN KEY (`university`) REFERENCES `university` (`id`);

--
-- القيود للجدول `collage`
--
ALTER TABLE `collage`
  ADD CONSTRAINT `fk_collage_university1` FOREIGN KEY (`university`) REFERENCES `university` (`id`);

--
-- القيود للجدول `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `FKcourses609575` FOREIGN KEY (`university`) REFERENCES `university` (`id`);

--
-- القيود للجدول `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `FKdepartment899000` FOREIGN KEY (`collage`) REFERENCES `collage` (`id`);

--
-- القيود للجدول `department_student`
--
ALTER TABLE `department_student`
  ADD CONSTRAINT `FKdepartment262688` FOREIGN KEY (`department`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `FKstudent` FOREIGN KEY (`student`) REFERENCES `student` (`ssn`);

--
-- القيود للجدول `desired_collage`
--
ALTER TABLE `desired_collage`
  ADD CONSTRAINT `FKdesired_co336845` FOREIGN KEY (`student`) REFERENCES `student` (`ssn`),
  ADD CONSTRAINT `FKdesired_co434268` FOREIGN KEY (`collage`) REFERENCES `collage` (`id`);

--
-- القيود للجدول `disclaimer`
--
ALTER TABLE `disclaimer`
  ADD CONSTRAINT `FKdisclaimer161704` FOREIGN KEY (`student`) REFERENCES `student` (`ssn`);

--
-- القيود للجدول `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `FKemployee130569` FOREIGN KEY (`university`) REFERENCES `university` (`id`),
  ADD CONSTRAINT `FKemployee313414` FOREIGN KEY (`privilage`) REFERENCES `privilage` (`id`),
  ADD CONSTRAINT `FKemployee613187` FOREIGN KEY (`collage`) REFERENCES `collage` (`id`);

--
-- القيود للجدول `fees`
--
ALTER TABLE `fees`
  ADD CONSTRAINT `FKfees929164` FOREIGN KEY (`student`) REFERENCES `student` (`ssn`);

--
-- القيود للجدول `housing`
--
ALTER TABLE `housing`
  ADD CONSTRAINT `FKhousing311686` FOREIGN KEY (`student`) REFERENCES `student` (`ssn`),
  ADD CONSTRAINT `FkBuildingUnque` FOREIGN KEY (`building`) REFERENCES `building` (`id`);

--
-- القيود للجدول `library`
--
ALTER TABLE `library`
  ADD CONSTRAINT `collageLibrary` FOREIGN KEY (`collage`) REFERENCES `collage` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- القيود للجدول `librarybook`
--
ALTER TABLE `librarybook`
  ADD CONSTRAINT `bookFk` FOREIGN KEY (`book`) REFERENCES `books` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `libararyFk` FOREIGN KEY (`library`) REFERENCES `library` (`collage`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `studentFk` FOREIGN KEY (`student`) REFERENCES `student` (`ssn`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- القيود للجدول `medical_examination`
--
ALTER TABLE `medical_examination`
  ADD CONSTRAINT `FKmedical_ex397803` FOREIGN KEY (`university`) REFERENCES `university` (`id`);

--
-- القيود للجدول `military_education`
--
ALTER TABLE `military_education`
  ADD CONSTRAINT `FKmilitary_e884593` FOREIGN KEY (`university`) REFERENCES `university` (`id`);

--
-- القيود للجدول `military_student`
--
ALTER TABLE `military_student`
  ADD CONSTRAINT `FKmilitary_s322937` FOREIGN KEY (`military`) REFERENCES `military_education` (`id`),
  ADD CONSTRAINT `FKmilitary_s809106` FOREIGN KEY (`student`) REFERENCES `student` (`ssn`);

--
-- القيود للجدول `notifications_medical`
--
ALTER TABLE `notifications_medical`
  ADD CONSTRAINT `FKnotificati129964` FOREIGN KEY (`medical`) REFERENCES `medical_examination` (`id`),
  ADD CONSTRAINT `FKnotificati598281` FOREIGN KEY (`student`) REFERENCES `student` (`ssn`);

--
-- القيود للجدول `patient_books`
--
ALTER TABLE `patient_books`
  ADD CONSTRAINT `FKpatient_bo259327` FOREIGN KEY (`student`) REFERENCES `student` (`ssn`),
  ADD CONSTRAINT `FKpatient_bo514810` FOREIGN KEY (`clinic`) REFERENCES `clinic` (`id`);

--
-- القيود للجدول `scholarship`
--
ALTER TABLE `scholarship`
  ADD CONSTRAINT `FKscholarshi581964` FOREIGN KEY (`university`) REFERENCES `university` (`id`);

--
-- القيود للجدول `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `FKstudent108057` FOREIGN KEY (`guardian`) REFERENCES `guardian` (`ssn`),
  ADD CONSTRAINT `FKstudent774460` FOREIGN KEY (`department`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `FKstudentcollage` FOREIGN KEY (`collage`) REFERENCES `collage` (`id`);

--
-- القيود للجدول `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `FKPortal` FOREIGN KEY (`training_portal`) REFERENCES `training_portal` (`id`),
  ADD CONSTRAINT `FKtraining910706` FOREIGN KEY (`student`) REFERENCES `student` (`ssn`);

--
-- القيود للجدول `training_portal`
--
ALTER TABLE `training_portal`
  ADD CONSTRAINT `FKtraining_p537712` FOREIGN KEY (`collage`) REFERENCES `collage` (`id`);

--
-- القيود للجدول `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `FKtransactio208237` FOREIGN KEY (`employee`) REFERENCES `employee` (`ssn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
