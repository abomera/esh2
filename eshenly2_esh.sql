-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2020 at 12:42 PM
-- Server version: 5.6.47
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshenly2_esh`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`, `a_group`) VALUES
(4, 'Gamal Abomera', 'gamalabomera@gmail.com', 'f494bba0a4d8489c520a554cfb40da129e3bddeb', 1),
(6, 'admin', 'admin@admin.com', 'dd94709528bb1c83d08f3088d4043f4742891f4f', 1);

-- --------------------------------------------------------

--
-- Table structure for table `albom`
--

CREATE TABLE `albom` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(255) NOT NULL,
  `a_ar_title` varchar(255) NOT NULL,
  `a_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `albom`
--

INSERT INTO `albom` (`a_id`, `a_title`, `a_ar_title`, `a_type`) VALUES
(1, 'images', 'صور', 0),
(2, 'Cars', 'سيارات', 0),
(3, 'images', 'صور', 1),
(4, 'Cars', 'سيارات', 1),
(7, 'Gamal Abomera', 'جديدgsd dfsdfa', 1),
(9, 'test', 'تجربة', 0);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(255) NOT NULL,
  `a_ar_title` varchar(255) NOT NULL,
  `a_desc` text NOT NULL,
  `a_ar_desc` text NOT NULL,
  `a_link` varchar(255) NOT NULL,
  `a_img` varchar(255) NOT NULL,
  `a_cat` int(11) NOT NULL,
  `a_writer` int(11) NOT NULL,
  `a_date` varchar(111) NOT NULL,
  `a_seo_desc` text NOT NULL,
  `a_seo_keys` text NOT NULL,
  `a_ar_seo_desc` text NOT NULL,
  `a_ar_seo_keys` text NOT NULL,
  `a_tags` text NOT NULL,
  `a_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog_catigories`
--

CREATE TABLE `blog_catigories` (
  `c_id` int(11) NOT NULL,
  `c_title` varchar(255) NOT NULL,
  `c_link` varchar(255) NOT NULL,
  `c_tags` text NOT NULL,
  `c_desc` text NOT NULL,
  `c_keys` text NOT NULL,
  `c_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_catigories`
--

INSERT INTO `blog_catigories` (`c_id`, `c_title`, `c_link`, `c_tags`, `c_desc`, `c_keys`, `c_status`) VALUES
(18, 'section 1', 'section-1-4853157', ',section,section1', 'section section1', 'section1sectionsectionsection', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `c_id` int(11) NOT NULL,
  `c_writer` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_comment` text NOT NULL,
  `c_article` int(11) NOT NULL,
  `c_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_phone` varchar(255) NOT NULL,
  `b_email` varchar(255) NOT NULL,
  `b_address` varchar(255) NOT NULL,
  `b_hours` varchar(255) NOT NULL,
  `b_location` text NOT NULL,
  `b_ar_name` varchar(200) NOT NULL,
  `b_ar_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_id`, `b_name`, `b_phone`, `b_email`, `b_address`, `b_hours`, `b_location`, `b_ar_name`, `b_ar_address`) VALUES
(2, 'Al Sharqiyah  ', '01201111094', 'Info@esh7enly-eg.com', 'Al Zakazek ', 'Sat - Fri: 9 am – 5 pm', '', 'الشرقية', 'الزقازيق'),
(3, 'Red Sea', '01201111094', 'info@esh7enly-eg.com', 'Hurghada', 'Sat - Fri: 9 am – 5 pm', '', 'البحر الأحمر', 'الغردقة'),
(4, 'Bani Sweif', '01201111094', 'Info@esh7enly-eg.com', 'Bani Sweif', 'Sat - Fri: 9 am – 5 pm', '', 'بنى سويف', 'بنى سويف'),
(5, 'Delta', '01201111094', 'Info@esh7enly-eg.com', 'Tanta', 'Sat - Fri: 9 am – 5 pm', '', 'الدلتا', 'طنطا'),
(6, 'Ismailia', '01201111094', 'Info@esh7enly-eg.com', 'Al-Ghaba Street', 'Sat - Fri: 9 am – 5 pm', '', 'الاسماعيلية', 'شارع الغابه '),
(7, 'Alexandria', '01201111094', 'Info@esh7enly-eg.com', 'Mahatet El-Raml', 'Sat - Fri: 9 am – 5 pm', '', 'الأسكندرية', 'محطة الرمل'),
(8, 'Sohag', '01201111094', 'Info@esh7enly-eg.com', 'Sohag', 'Sat - Fri: 9 am – 5 pm', '', 'سوهاج', 'سوهاج'),
(9, 'Qena', '01201111094', 'Info@esh7enly-eg.com', 'Qena', 'Sat - Fri: 9 am – 5 pm', '', 'قنا', 'قنا'),
(10, 'Minya', '01201111094', 'Info@esh7enly-eg.com', 'Minya', 'Sat - Fri: 9 am – 5 pm', '', 'المنيا', 'المنيا'),
(11, 'Port Said', '01201111094', 'Info@esh7enly-eg.com', 'Port Said', 'Sat - Fri: 9 am – 5 pm', '', 'بورسعيد', 'بورسعيد'),
(12, 'Suez', '01201111094', 'Info@esh7enly-eg.com', 'Suez', 'Sat - Fri: 9 am – 5 pm', '', 'السويس', 'السويس'),
(13, 'Luxor', '01201111094', 'Info@esh7enly-eg.com', 'Luxor', 'Sat - Fri: 9 am – 5 pm', '', 'الأقصر', 'الأقصر'),
(14, 'Aswan', '01201111094', 'Info@esh7enly-eg.com', 'Aswan', 'Sat - Fri: 9 am – 5 pm', '', 'اسوان', 'اسوان'),
(15, 'Sharm El Sheikh', '01201111094', 'Info@esh7enly-eg.com', 'Sharm El Sheikh', 'Sat - Fri: 9 am – 5 pm', '', 'شرم الشيخ', 'شرم الشيخ'),
(16, 'Heliopolis', '01201111094', 'Info@esh7enly-eg.com', 'Heliopolis, 107 El Hegaz St., 1st floor', 'Sat - Fri: 9 am – 5 pm', 'https://www.google.com/maps/search/%D9%85%D8%B5%D8%B1+%D8%A7%D9%84%D8%AC%D8%AF%D9%8A%D8%AF%D8%A9+%D8%8C+107+%D8%B4%D8%A7%D8%B1%D8%B9+%D8%A7%D9%84%D8%AD%D8%AC%D8%A7%D8%B2+%D8%8C+%D8%A7%D9%84%D8%AF%D9%88%D8%B1+%D8%A7%D9%84%D8%A3%D9%88%D9%84%E2%80%AD%E2%80%AD%E2%80%AD/@30.105888,31.3321223,17z/data=!3m1!4b1', 'مصر الجديدة', 'مصر الجديدة ، 107 شارع الحجاز ، الدور الأول'),
(17, 'Main Branch', '01201111094', 'Info@esh7enly-eg.com', '9 Al-Taawun St., Al-Galaa Tower, Floor 1, Ramses', 'Sat - Fri: 9 am – 5 pm', 'https://www.google.com.eg/maps/search/%D9%A9+%D8%B4+%D8%A7%D9%84%D8%AA%D8%B9%D8%A7%D9%88%D9%86+%D9%85%D8%AA%D9%81%D8%B1%D8%B9+%D9%85%D9%86+%D8%B4%D8%A7%D8%B1%D8%B9+%D8%A7%D9%84%D8%AC%D9%84%D8%A7%D8%A1+%D8%A8%D8%B1%D8%AC+%D8%A7%D9%84%D8%AC%D9%84%D8%A7%D8%A1+%D8%A7%D9%84%D8%AF%D9%88%D8%B1+%D9%A1+%D8%A8%D8%AC%D9%88%D8%A7%D8%B1+%D9%82%D8%B3%D9%85+%D8%A7%D9%84%D8%A7%D8%B2%D8%A8%D9%83%D9%8A%D9%87+%D9%88%D8%A7%D9%84%D8%AA%D9%88%D8%AD%D9%8A%D8%AF+-+%D8%B1%D9%85%D8%B3%D9%8A%D8%B3%E2%80%AD/@30.0584524,31.2417178,17z/data=!3m1!4b1?hl=en', 'الفرع الرئيسي', '٩ ش التعاون متفرع من شارع الجلاء برج الجلاء الدور ١ بجوار قسم الازبكيه والتوحيد - رمسيس');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `c_id` int(11) NOT NULL,
  `c_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL,
  `c_company` varchar(255) NOT NULL,
  `c_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `f_id` int(11) NOT NULL,
  `f_q` varchar(255) NOT NULL,
  `f_a` text NOT NULL,
  `f_ar_q` varchar(255) NOT NULL,
  `f_ar_a` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`f_id`, `f_q`, `f_a`, `f_ar_q`, `f_ar_a`) VALUES
(1, 'question ?', 'Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower Ansower ', 'سؤال ؟', 'اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه اجابه ');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `g_id` int(11) NOT NULL,
  `g_title` varchar(255) NOT NULL,
  `g_slider` int(11) NOT NULL,
  `g_pages` int(11) NOT NULL,
  `g_blog` int(11) NOT NULL,
  `g_menu` int(11) NOT NULL,
  `g_clients` int(11) NOT NULL,
  `g_services` int(11) NOT NULL,
  `g_admin` int(11) NOT NULL,
  `g_settings` int(11) NOT NULL,
  `g_media` int(11) NOT NULL,
  `g_branchs` int(11) NOT NULL,
  `g_contact` int(11) NOT NULL,
  `g_news` int(11) NOT NULL,
  `g_faq` int(11) NOT NULL,
  `g_partners` int(11) NOT NULL,
  `g_testimonials` int(11) NOT NULL,
  `g_request` int(11) NOT NULL,
  `g_send` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`g_id`, `g_title`, `g_slider`, `g_pages`, `g_blog`, `g_menu`, `g_clients`, `g_services`, `g_admin`, `g_settings`, `g_media`, `g_branchs`, `g_contact`, `g_news`, `g_faq`, `g_partners`, `g_testimonials`, `g_request`, `g_send`) VALUES
(1, 'admin', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(8, 'mod', 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'aaaa', 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 'asdsd', 1, 1, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 'aaaaaaaaa', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, 1, 0, 1),
(12, 'ddsa', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `m_id` int(11) NOT NULL,
  `m_title` varchar(255) NOT NULL,
  `m_ar_title` varchar(255) NOT NULL,
  `m_albom` int(11) NOT NULL,
  `m_img` varchar(255) NOT NULL,
  `m_video` text NOT NULL,
  `m_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `m_id` int(11) NOT NULL,
  `m_title` varchar(255) NOT NULL,
  `m_ar_title` varchar(255) NOT NULL,
  `m_link` varchar(255) NOT NULL,
  `m_type` int(11) NOT NULL,
  `m_link_type` int(11) NOT NULL,
  `m_parent_for` int(11) NOT NULL,
  `m_parent` int(11) NOT NULL,
  `m_order` int(11) NOT NULL,
  `m_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`m_id`, `m_title`, `m_ar_title`, `m_link`, `m_type`, `m_link_type`, `m_parent_for`, `m_parent`, `m_order`, `m_status`) VALUES
(43, 'Home', 'الرئيسية', 'home', 1, 1, 0, 0, 1, 0),
(44, 'About Us', 'من نحن', 'about', 1, 1, 0, 0, 2, 0),
(45, 'Services', 'الخدمات', 'home', 1, 0, 1, 0, 3, 0),
(46, 'Partners', 'الشركاء', 'partners', 1, 1, 0, 0, 4, 0),
(47, 'Media', 'ميديا', '#', 1, 1, 0, 0, 5, 0),
(48, 'Photos', 'صور', 'photos', 1, 1, 0, 47, 7, 0),
(49, 'Videos', 'فيديوهات', 'videos', 1, 1, 0, 47, 6, 0),
(50, 'News & Events', 'اخبار & احداث', 'news', 1, 1, 0, 0, 9, 0),
(51, 'Support', 'الدعم', 'support', 1, 1, 0, 0, 10, 0),
(52, 'Request A Quote', 'ارسال اقتباس', 'qout', 1, 1, 0, 51, 13, 0),
(53, 'Track Order', 'تتبع الطلبات', 'track2', 1, 0, 0, 51, 12, 0),
(54, 'Help And Faq\'s', 'الاسئله الشائعه', 'faq', 1, 1, 0, 51, 11, 0),
(55, 'Contact Us', 'اتصل بنا', 'contact', 1, 1, 0, 0, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_email`) VALUES
(2, 'gamalabomera@gmail.com'),
(3, 'mohsen.ssm@gmail.com'),
(4, 'Jamalnady@gmail.com '),
(5, 'Jamalnady@gmail.com '),
(6, 'Jamalnady@gmail.com '),
(7, 'norhan@esh7enly-eg.com'),
(8, 'norhan@esh7enly-eg.com'),
(9, 'norhan@esh7enly-eg.com'),
(10, 'norhanmohamed1510@gmail.com'),
(11, 'Mohsen.ssm@gmail.com'),
(12, 'Mohsen.ssm@gmail.com'),
(13, 'norhan@esh7enly-eg.com'),
(14, 'bodenasser1551@gmail.com'),
(15, 'bassemnabil90@gmail.com'),
(16, 'askerfares3@gmail.com'),
(17, 'elmenyawymohammedessam@gmail.com'),
(18, 'nedalyasine123@gmail,com'),
(19, 'nedalyasine123@gmail,com'),
(20, 'nedalyasine123@gmail,com'),
(21, 'nedalyasine123@gmail,com'),
(22, 'nedalyasine@gmail.com'),
(23, 'bassemnabil90@gmail.com'),
(24, 'bassemnabil90@gmail.com'),
(25, 'halazhran248@yahoo.com'),
(26, 'halazhran248@yahoo.com'),
(27, 'bassemnabil90@gmail.com'),
(28, 'Jamalnady@gmail.com ');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(255) NOT NULL,
  `p_desc` text NOT NULL,
  `p_link` varchar(255) NOT NULL,
  `p_tags` text NOT NULL,
  `p_img` varchar(255) NOT NULL,
  `p_nav_footer` int(11) NOT NULL,
  `p_seo_desc` text NOT NULL,
  `p_seo_keys` text NOT NULL,
  `p_status` int(11) NOT NULL,
  `p_ar_title` varchar(255) NOT NULL,
  `p_ar_desc` text NOT NULL,
  `p_ar_seo_desc` text NOT NULL,
  `p_ar_seo_keys` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`p_id`, `p_title`, `p_desc`, `p_link`, `p_tags`, `p_img`, `p_nav_footer`, `p_seo_desc`, `p_seo_keys`, `p_status`, `p_ar_title`, `p_ar_desc`, `p_ar_seo_desc`, `p_ar_seo_keys`) VALUES
(15, 'new', '<p>adasdfsdf</p>', 'new-756503', ',sdfsda,fsdagsf', 'upload/ecca988f0531c441d6a17520935c97f4.jpg', 1, 'asdf', 'sadfasdf', 1, 'asDAAd', '<p>ADA</p>', 'AD', 'sdfd');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `p_id` int(11) NOT NULL,
  `p_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `r_id` int(11) NOT NULL,
  `r_company` varchar(255) NOT NULL,
  `r_name` varchar(255) NOT NULL,
  `r_email` varchar(255) NOT NULL,
  `r_phone` varchar(255) NOT NULL,
  `r_street` varchar(255) NOT NULL,
  `r_country` varchar(255) NOT NULL,
  `r_city` varchar(255) NOT NULL,
  `r_zip` varchar(255) NOT NULL,
  `r_lift` varchar(255) NOT NULL,
  `r_d_street` varchar(255) NOT NULL,
  `r_d_country` varchar(255) NOT NULL,
  `r_d_city` varchar(255) NOT NULL,
  `r_d_zip` varchar(255) NOT NULL,
  `r_d_call` varchar(255) NOT NULL,
  `r_weight` int(11) NOT NULL,
  `r_qty` int(11) NOT NULL,
  `r_length` int(11) NOT NULL,
  `r_width` int(11) NOT NULL,
  `r_height` int(11) NOT NULL,
  `r_stack` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`r_id`, `r_company`, `r_name`, `r_email`, `r_phone`, `r_street`, `r_country`, `r_city`, `r_zip`, `r_lift`, `r_d_street`, `r_d_country`, `r_d_city`, `r_d_zip`, `r_d_call`, `r_weight`, `r_qty`, `r_length`, `r_width`, `r_height`, `r_stack`) VALUES
(2, 'New Vission', 'Gamal Abomera', 'gamalabomera@gmail.com', '423 423 4234', 'manzal', 'egypt', 'giza', '123654', 'Limited Access Pick Up', 'lebbini', 'egypt', 'haram', '156496', 'Hazmat', 10, 30, 177, 400, 150, 'Non-Stackable');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_ar_title` varchar(255) NOT NULL,
  `s_cover` varchar(255) NOT NULL,
  `s_icon` varchar(255) NOT NULL,
  `s_over` text NOT NULL,
  `s_ar_over` text NOT NULL,
  `s_how` text NOT NULL,
  `s_ar_how` text NOT NULL,
  `s_video_link` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `s_ar_desc` text NOT NULL,
  `s_keys` text NOT NULL,
  `s_ar_keys` text NOT NULL,
  `s_on_index` int(11) NOT NULL,
  `s_tags` text NOT NULL,
  `s_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_title`, `s_ar_title`, `s_cover`, `s_icon`, `s_over`, `s_ar_over`, `s_how`, `s_ar_how`, `s_video_link`, `s_desc`, `s_ar_desc`, `s_keys`, `s_ar_keys`, `s_on_index`, `s_tags`, `s_status`) VALUES
(6, 'SHIPPING SERVICES', 'خدمات الشحن', 'upload/1966ef0d5224e5005cceedefd7f433f5.jpg', 'upload/a0ef7b7bf831d86d3a59293362c95331.png', 'On-demand Delivery\r\nSame-day/Next-day Delivery\r\nTime-defined/Slot-based Delivery\r\nReturns Management\r\n', 'التسليم عند الطلب\r\nتسليم اليوم نفسه/ اليوم التالي\r\nالتسليم المحدد زمنيًا/فتح الطرد\r\nاسترجاع الطرد\r\n', 'On-demand Delivery\r\nSame-day/Next-day Delivery\r\nTime-defined/Slot-based Delivery\r\nReturns Management\r\n', 'التسليم عند الطلب\r\nتسليم اليوم نفسه/ اليوم التالي\r\nالتسليم المحدد زمنيًا/فتح الطرد\r\nاسترجاع الطرد\r\n', 'https://www.youtube.com/watch?v=M7-qvHcXdbU', 'On-demand Delivery\r\nSame-day/Next-day Delivery\r\nTime-defined/Slot-based Delivery\r\nReturns Management\r\n', 'التسليم عند الطلب\r\nتسليم اليوم نفسه/ اليوم التالي\r\nالتسليم المحدد زمنيًا/فتح الطرد\r\nاسترجاع الطرد\r\n', 'On-demand Delivery, Next-day Delivery', 'On-demand Delivery, Next-day Delivery', 1, ',Returns Management,Time-defined/Slot-based Delivery,Next-day Delivery,Same-day,On-demand Delivery,Delivery', 1),
(7, 'SPECIAL SERVICES', 'الخدمات الخاصة', 'upload/c0ed85a1e5f0673c69b39ab3a94e5618.jpg', 'upload/4df7a3c9b36a603d17702e7af4dcf002.png', 'Product Replacement/Exchange Services\r\n\r\nLarge/Oversize Order Delivery\r\nHigh-value Product Delivery\r\nPacking\r\n', 'خدمات استبدال/تبادل المنتجات\r\nتسليم الطلبات الكبيرة/الكبيرة الحجم\r\nتسليم منتجات عالية القيمة\r\nالتعبئه\r\n', 'Product Replacement/Exchange Services\r\nLarge/Oversize Order Delivery\r\nHigh-value Product Delivery\r\nPacking\r\n', 'خدمات استبدال/تبادل المنتجات\r\nتسليم الطلبات الكبيرة/الكبيرة الحجم\r\nتسليم منتجات عالية القيمة\r\nالتعبئه\r\n', 'https://www.youtube.com/watch?v=M7-qvHcXdbU', 'Product Replacement/Exchange Services\r\nLarge/Oversize Order Delivery\r\nHigh-value Product Delivery\r\nPacking', 'خدمات استبدال/تبادل المنتجات\r\nتسليم الطلبات الكبيرة/الكبيرة الحجم\r\nتسليم منتجات عالية القيمة\r\nالتعبئه\r\n', 'Exchange Services, Packing, Product Delivery', 'التعبئه, تسليم منتجات عالية القيمة', 1, ',Packing,High-value Product Delivery,Order Delivery,Exchange Services', 1),
(8, 'E-COMMERCE', 'التجارة الإلكترونية', 'upload/3b64ba45db3dd01ba00e225ee960a9ac.jpg', 'upload/206b272aad6104b256bfee8d8de1da55.png', 'Living in a new digital revolution comes with new advantages and new responsibilities. Here in ECS we are aware of all the new e-commerce opportunities that come within and its our duty to help you get your best shot by being Aware, Connected, Fast and Traceable.\r\nEverywhere and anytime is a must for any E-commerce platform and for ECS. We make sure your customers are up to date and incredibly satisfied when their package arrives on lightning speed.\r\nAfter all, if you are happy we are happy and that’s why ECS is all about SFES; Service, Flexibility and Efficacy while keeping your costs minimum and competitive while you grow your business effectively and organically.\r\n', 'العيش في ثورة رقمية جديدة يأتي مع مزايا جديدة ومسؤوليات جديدة. هنا في ECS نحن على علم بجميع فرص التجارة الإلكترونية الجديدة التي تأتي ضمن واجبنا لمساعدتك في الحصول على أفضل ما لديك من خلال كونها على علم، متصلة، سريعة وقابلة للتتبع.\r\nفي كل مكان وزمان أمر لا بد منه لأي منصة التجارة الإلكترونية وECS. نحن نتأكد من أن عملائك محدثون وراضون بشكل لا يصدق عندما تصل الحزمة الخاصة بهم بسرعة البرق.\r\nبعد كل شيء، إذا كنت سعيدا نحن سعداء وهذا هو السبب في ECS هو كل شيء بالنسبة لنا. الخدمة والمرونة والفعالية مع الحفاظ على الحد الأدنى من التكاليف والقدرة التنافسية أثناء نمو عملك بشكل فعال وعضوي.\r\n', 'Living in a new digital revolution comes with new advantages and new responsibilities. Here in ECS we are aware of all the new e-commerce opportunities that come within and its our duty to help you get your best shot by being Aware, Connected, Fast and Traceable.\r\nEverywhere and anytime is a must for any E-commerce platform and for ECS. We make sure your customers are up to date and incredibly satisfied when their package arrives on lightning speed.\r\nAfter all, if you are happy we are happy and that’s why ECS is all about SFES; Service, Flexibility and Efficacy while keeping your costs minimum and competitive while you grow your business effectively and organically.\r\n', 'العيش في ثورة رقمية جديدة يأتي مع مزايا جديدة ومسؤوليات جديدة. هنا في ECS نحن على علم بجميع فرص التجارة الإلكترونية الجديدة التي تأتي ضمن واجبنا لمساعدتك في الحصول على أفضل ما لديك من خلال كونها على علم، متصلة، سريعة وقابلة للتتبع.\r\nفي كل مكان وزمان أمر لا بد منه لأي منصة التجارة الإلكترونية وECS. نحن نتأكد من أن عملائك محدثون وراضون بشكل لا يصدق عندما تصل الحزمة الخاصة بهم بسرعة البرق.\r\nبعد كل شيء، إذا كنت سعيدا نحن سعداء وهذا هو السبب في ECS هو كل شيء بالنسبة لنا. الخدمة والمرونة والفعالية مع الحفاظ على الحد الأدنى من التكاليف والقدرة التنافسية أثناء نمو عملك بشكل فعال وعضوي.\r\n', 'https://www.youtube.com/watch?v=M7-qvHcXdbU', 'Living in a new digital revolution comes with new advantages and new responsibilities. Here in ECS we are aware of all the new e-commerce opportunities that come within and its our duty to help you get your best shot by being Aware, Connected, Fast and Traceable.\r\nEverywhere and anytime is a must for any E-commerce platform and for ECS. We make sure your customers are up to date and incredibly satisfied when their package arrives on lightning speed.\r\nAfter all, if you are happy we are happy and that’s why ECS is all about SFES; Service, Flexibility and Efficacy while keeping your costs minimum and competitive while you grow your business effectively and organically.\r\n', 'العيش في ثورة رقمية جديدة يأتي مع مزايا جديدة ومسؤوليات جديدة. هنا في ECS نحن على علم بجميع فرص التجارة الإلكترونية الجديدة التي تأتي ضمن واجبنا لمساعدتك في الحصول على أفضل ما لديك من خلال كونها على علم، متصلة، سريعة وقابلة للتتبع.\r\nفي كل مكان وزمان أمر لا بد منه لأي منصة التجارة الإلكترونية وECS. نحن نتأكد من أن عملائك محدثون وراضون بشكل لا يصدق عندما تصل الحزمة الخاصة بهم بسرعة البرق.\r\nبعد كل شيء، إذا كنت سعيدا نحن سعداء وهذا هو السبب في ECS هو كل شيء بالنسبة لنا. الخدمة والمرونة والفعالية مع الحفاظ على الحد الأدنى من التكاليف والقدرة التنافسية أثناء نمو عملك بشكل فعال وعضوي.\r\n', 'E-COMMERCE', 'التجارة الإلكترونية', 1, ',E-COMMERCE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `s_id` int(11) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_phone` varchar(255) NOT NULL,
  `s_fb` varchar(255) NOT NULL,
  `s_tw` varchar(255) NOT NULL,
  `s_insta` varchar(255) NOT NULL,
  `s_in` varchar(255) NOT NULL,
  `s_who` text NOT NULL,
  `s_ar_who` text NOT NULL,
  `s_short_about` text NOT NULL,
  `s_ar_short_about` text NOT NULL,
  `s_vision` text NOT NULL,
  `s_ar_vision` text NOT NULL,
  `s_mission` text NOT NULL,
  `s_ar_mission` text NOT NULL,
  `s_pdf` varchar(255) NOT NULL,
  `s_pdf1` varchar(255) NOT NULL,
  `s_desc` text NOT NULL,
  `s_ar_desc` text NOT NULL,
  `s_keys` text NOT NULL,
  `s_ar_keys` text NOT NULL,
  `s_video_link` varchar(255) NOT NULL,
  `s_km` int(11) NOT NULL,
  `s_dlev` int(11) NOT NULL,
  `s_clients` int(11) NOT NULL,
  `s_cover_1` varchar(255) NOT NULL,
  `s_cover_2` varchar(255) NOT NULL,
  `s_cover_3` varchar(255) NOT NULL,
  `s_cover_4` varchar(255) NOT NULL,
  `s_cover_5` varchar(255) NOT NULL,
  `s_cover_6` varchar(255) NOT NULL,
  `s_cover_7` varchar(255) NOT NULL,
  `s_cover_8` varchar(255) NOT NULL,
  `s_cover_9` varchar(255) NOT NULL,
  `s_cover_10` varchar(255) NOT NULL,
  `s_sender_name` varchar(255) NOT NULL,
  `s_title_1` varchar(255) NOT NULL,
  `s_title_2` varchar(255) NOT NULL,
  `s_title_3` varchar(255) NOT NULL,
  `s_title_4` varchar(255) NOT NULL,
  `s_title_5` varchar(255) NOT NULL,
  `s_title_6` varchar(255) NOT NULL,
  `s_title_7` varchar(255) NOT NULL,
  `s_title_8` varchar(255) NOT NULL,
  `s_title_9` varchar(255) NOT NULL,
  `s_title_10` varchar(255) NOT NULL,
  `s_title_11` varchar(255) NOT NULL,
  `s_title_12` varchar(255) NOT NULL,
  `s_title_13` varchar(255) NOT NULL,
  `s_title_14` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`s_id`, `s_email`, `s_phone`, `s_fb`, `s_tw`, `s_insta`, `s_in`, `s_who`, `s_ar_who`, `s_short_about`, `s_ar_short_about`, `s_vision`, `s_ar_vision`, `s_mission`, `s_ar_mission`, `s_pdf`, `s_pdf1`, `s_desc`, `s_ar_desc`, `s_keys`, `s_ar_keys`, `s_video_link`, `s_km`, `s_dlev`, `s_clients`, `s_cover_1`, `s_cover_2`, `s_cover_3`, `s_cover_4`, `s_cover_5`, `s_cover_6`, `s_cover_7`, `s_cover_8`, `s_cover_9`, `s_cover_10`, `s_sender_name`, `s_title_1`, `s_title_2`, `s_title_3`, `s_title_4`, `s_title_5`, `s_title_6`, `s_title_7`, `s_title_8`, `s_title_9`, `s_title_10`, `s_title_11`, `s_title_12`, `s_title_13`, `s_title_14`) VALUES
(1, 'info@esh7enly-eg.com', '01201111094', '', '', '', '', '<h1><strong class=\"ql-size-huge\">Who We Are? </strong></h1><p><span style=\"color: rgb(51, 51, 51);\">Since its inception in 2015, ECS has become one of Egypt’s leading supply chain services company. Our vision is to become the operating system for commerce in the whole world , through a combination of world-class infrastructure, logistics operations of the highest quality and cutting-edge engineering and technology capabilities.</span></p><p><span style=\"color: rgb(51, 51, 51);\">Our team successfullyFulfilled over 200k orders to more than 150k households</span></p><p><span style=\"color: rgb(51, 51, 51);\">Across Egypt , 3 automated sort center , 16 fulfilment center , 20 hubs , +450 direct delivery center , 3000+ partner , 40 vehicles and 600+ members make it possible to deliver a million package a day , 24 hours a day , 7 days a week , 30 days a month , 365 days a year ! We are ECS.</span></p>', '<h1><strong class=\"ql-size-huge\">من نحن ؟ </strong></h1><p class=\"ql-direction-rtl ql-align-right\"><span style=\"color: rgb(51, 51, 51);\">منذ إنشائها في عام 2015، أصبحت ECS واحدة من الشركات الرائدة في مجال خدمات سلسلة التوزيع في مصر. رؤيتنا هي أن من اكبر منصات اللوجيستية في العالم ، من خلال مزيج من البنية التحتية ذات المستوى العالمي ، والعمليات اللوجستية من أعلى مستويات الجودة والقدرات الهندسية والتكنولوجية المتطورة.                      </span></p><p class=\"ql-direction-rtl ql-align-right\"><span style=\"color: rgb(51, 51, 51);\">نجح فريقنا في توصيل اكثر من 200 الف شحنة لأكثر من 150 الف مستخدم في جميع انحاء مصر</span></p><p class=\"ql-direction-rtl ql-align-right\"><span style=\"color: rgb(51, 51, 51);\">3 مراكز فرز آلي ، 16 فرع ، 20 محور توزيع ، +450 مندوب تسليم مباشر ، 40 مركبه واكثر من 600 شخص في خدمتكم لتحقيق الحلم الاكبر تسليم مليون حزمة في اليوم ، 24 ساعة في اليوم ، 7 أيام في الأسبوع ، 30 يومًا في الشهر ، 365 يومًا في السنة! نحن ECS.</span></p><p><br></p>', 'E.C.S handles all business making you focus on running your business successfully by having the: Right Tools Right Resources Right pricing We strongly believe your success is our success.', 'تتولى شركة E.C.S التعامل مع جميع الأعمال ، مما يجعلك تركز على إدارة أعمالك بنجاح من خلال: الأدوات المناسبة - الموارد المناسبة - التسعير المناسب - نحن نعتقد بقوة أن نجاحك هو نجاحنا.', '<h1><strong class=\"ql-size-huge\">Our Vision </strong></h1><p><span style=\"color: rgb(51, 51, 51);\">ECS aim is to build the operating system for commerce in Egypt We provide parcel transportation, warehousing, freight, reverse logistics, cross-border and technology services to over 3000 customers including all of Egypt’s largest e-commerce companies and leading enterprises. Our supply chain platform and logistics operations bring flexibility, breadth, efficiency and innovation to our customers’ supply chain and logistics operations. Our operations, infrastructure and technology enable our customers to transact with us and our partners at the fastest service and the lowest cost.</span></p>', '<h1><strong class=\"ql-size-huge\">رؤيتنا </strong></h1><p class=\"ql-align-right ql-direction-rtl\"><span style=\"color: rgb(51, 51, 51);\">وكجزء من رؤيتنا، نهدف أيضًا إلى تمكين الشركات والأفراد في جميع أنحاء مصر من خلال الأدوات اللازمة للمشاركة في فرصة سلسلة التوزيع الرقمية الضخمة في المستقبل. وقد دخلت أكثر من 1000 شركة بالفعل في شراكة مع ECS ولديها إمكانية الوصول إلى بنيتنا التحتية وتقنيتنا ، من أجل توسيع منصة تحقيق ECS من خلال منتجاتها وعملياتها.</span></p><p><br></p>', '<h1><strong class=\"ql-size-huge\">Our Mission </strong></h1><p><strong style=\"color: rgb(51, 51, 51);\">We serve the world , we serve you!</strong></p><p><span style=\"color: rgb(51, 51, 51);\">ECS provides products and services with the aim of building trust and improving the lives of consumers, small businesses, enterprises and our growing team of employees and partners. We are disrupting Egypt’s logistics industry through our proprietary network design, infrastructure, partnerships, and engineering and technology capabilities. ECS brings unparalleled cost efficiency to the businesses of over 3000 customers. It is driven by its mission to shrink time and distance, making the world a smaller place for its customers and over a 100 million consumers they serve.</span></p>', '<h1><strong class=\"ql-size-huge\">مهمتنا </strong></h1><p class=\"ql-align-right ql-direction-rtl\"><strong style=\"color: rgb(51, 51, 51);\">نحن نخدم العالم، ونحن نخدمك!</strong></p><p class=\"ql-align-right ql-direction-rtl\"><br></p><p class=\"ql-align-right ql-direction-rtl\"><span style=\"color: rgb(51, 51, 51);\">تقدم ECS المنتجات والخدمات بهدف بناء الثقة وتحسين حياة المستهلكين والشركات الصغيرة والشركات وفريقنا المتفاني من الموظفين والشركاء. نحن نطور صناعة الخدمات اللوجستية في مصر من خلال تصميم الشبكات الخاصة بنا، والبنية التحتية، والشراكات، والقدرات الهندسية والتكنولوجيةبهدف جلب كفاءة تكلفة لا مثيل لها لشركائنا وهذا في تقليص الوقت والمسافة، مما يجعل العالم مكاناأصغر, ECS  تهدف للوصول لكل مستخدميها من 100 مليون مستهلك يخدمونه.</span></p><p><br></p>', 'upload/93091ff59e149c802a0247ba92e43694.pdf', 'upload/0be8e9079d11bf61e66e7f1e6d2e28fd.pdf', 'as a 100% Egyptian Company, we\'ve come up with the best formulas to serve all kinds of clients as per their portfolio and ensuring their business will always grow. E.C.S handles all business making you focus on running your business successfully by having the: Right Tools Right Resources Right pricing We strongly believe your success is our success.', 'كشركة مصرية 100٪ ، توصلنا إلى أفضل الصيغ لخدمة جميع أنواع العملاء وفقًا لمحفظتهم وضمان نمو أعمالهم دائمًا. تتولى شركة E.C.S التعامل مع جميع الأعمال ، مما يجعلك تركز على إدارة أعمالك بنجاح من خلال: الأدوات المناسبة - الموارد المناسبة - التسعير المناسب - نحن نعتقد بقوة أن نجاحك هو نجاحنا.', 'dsa,fwert,uti', 'شيسبش,فقصث,عهغ', 'https://www.youtube.com/watch?v=3aYfuQoaexQ', 1000000, 250000, 2250, 'upload/6439b7088de7a8a4c6adf75fd967dc2b.jpg', 'upload/7f1dc0d01e2418db2514b093cc463262.jpg', 'upload/52c760348698ff2994267e94a708c0e5.jpg', 'upload/2113c71e1cf1e7b894ce72a6fb076ece.jpg', 'upload/a042287c058ebdaabec92dc266ca255d.jpg', 'upload/eb1cdae51cd399356329ae39327d171c.jpg', 'upload/d2b407c6c828dfd93513f8c0fb6f8b63.jpg', 'upload/b5ee553dea23d7b3d5a086b0c4d923e1.jpg', 'upload/48f361b01831b9505b9db675075ed334.jpg', 'upload/09ce62d0667980acf56a52164c476f0f.jpg', 'Esh7enly', 'Your Package, Your Rules', 'الحزمة الخاصة بك ، القواعد الخاصة بك', 'Digital Freight That Saves Your Time!', 'الشحن الرقمي  يوفر وقتك!', 'Clients Worldwide', 'عميل', 'Delivered Goods', 'البضائع المسلمة', 'Km Driven', 'كيلو متر', 'NEWSLETTER SIGNUP BE THE FIRST TO RECEIVE OUR LATEST NEWS!', 'سجل النشرة الإخبارية وكن أول من يستقبل آخر الأخبار!', 'Company Report 2020', 'Company Brochure');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int(11) NOT NULL,
  `s_en_img` varchar(255) NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_content` text NOT NULL,
  `s_link` varchar(255) NOT NULL,
  `s_video_link` varchar(255) NOT NULL,
  `s_tab_title` varchar(255) NOT NULL,
  `s_tab_icon` varchar(255) NOT NULL,
  `s_status` int(11) NOT NULL,
  `s_ar_title` varchar(255) NOT NULL,
  `s_ar_content` text NOT NULL,
  `s_ar_tab_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `s_en_img`, `s_title`, `s_content`, `s_link`, `s_video_link`, `s_tab_title`, `s_tab_icon`, `s_status`, `s_ar_title`, `s_ar_content`, `s_ar_tab_title`) VALUES
(28, 'upload/d3c7650899e5cf16857ba7d6f627bac0.jpg', 'SHIPPING SERVICES', '<p><span style=\"color: rgb(255, 255, 255);\">On-demand Delivery </span></p><p><span style=\"color: rgb(255, 255, 255);\">Same-day/Next-day Delivery </span></p><p><span style=\"color: rgb(255, 255, 255);\">Time-defined/Slot-based Delivery</span></p><p><span style=\"color: rgb(255, 255, 255);\"> Returns Management</span></p><p><br></p>', 'http://esh7enly-eg.com/esh/service/6', 'https://www.youtube.com/watch?v=M7-qvHcXdbU', 'SHIPPING SERVICES', 'upload/9223d6a04496bf32a81d8107c516ea0e.png', 1, 'خدمات الشحن', '<p class=\"ql-align-right ql-direction-rtl\"><span style=\"color: rgb(39, 39, 39);\">التسليم عند الطلب</span></p><p class=\"ql-align-right ql-direction-rtl\"><span style=\"color: rgb(39, 39, 39);\">تسليم اليوم نفسه/ اليوم التالي</span></p><p class=\"ql-align-right ql-direction-rtl\"><span style=\"color: rgb(39, 39, 39);\">التسليم المحدد زمنيًا/فتح الطرد</span></p><p class=\"ql-align-right ql-direction-rtl\"><span style=\"color: rgb(39, 39, 39);\">استرجاع الطرد</span></p><p><br></p>', 'SHIPPING SERVICES'),
(31, 'upload/58c62f382529cae91ed05b6d5ba95945.jpg', 'E-COMMERCE', '<p><span style=\"color: rgb(255, 255, 255);\">Living in a new digital revolution comes with new advantages and new responsibilities. </span></p><p><span style=\"color: rgb(255, 255, 255);\">Here in ECS we are aware of all the new e-commerce opportunities that come within and its</span></p><p><span> our duty to help you get your best shot by being Aware, Connected, Fast and Traceable.</span></p>', 'http://esh7enly-eg.com/esh/service/8', 'https://www.youtube.com/watch?v=M7-qvHcXdbU', 'E-COMMERCE', 'upload/1668ac5b814db3f9e2d3e093de9ae79d.png', 1, 'التجارة الإلكترونية', '<p class=\"ql-align-right ql-direction-rtl\"><span style=\"color: rgb(255, 255, 255);\">العيش في ثورة رقمية جديدة يأتي مع مزايا جديدة ومسؤوليات جديدة. هنا في ECS نحن على علم بجميع فرص التجارة الإلكترونية الجديدة التي تأتي </span></p><p class=\"ql-align-right ql-direction-rtl\"><span>ضمن واجبنا لمساعدتك في الحصول على أفضل ما لديك من خلال كونها على علم، متصلة، سريعة وقابلة للتتبع.</span></p><p><br></p>', 'E-COMMERCE'),
(32, 'upload/38d822d4d1357a0fab2e09237dc6b8b2.jpg', 'SPECIAL SERVICES', '<p><span style=\"color: rgb(255, 255, 255);\">Product Replacement/Exchange Services</span></p><p><span style=\"color: rgb(255, 255, 255);\">Large/Oversize Order Delivery</span></p><p><span style=\"color: rgb(255, 255, 255);\">High-value Product Delivery</span></p><p><span style=\"color: rgb(255, 255, 255);\">Packing</span></p>', 'http://esh7enly-eg.com/esh/service/7', 'https://www.youtube.com/watch?v=M7-qvHcXdbU', 'SPECIAL SERVICES', 'upload/71d946770d635c674e609be7949c6c10.png', 1, 'الخدمات الخاصة', '<p class=\"ql-direction-rtl ql-align-right\"><span style=\"color: rgb(255, 255, 255);\">خدمات استبدال/تبادل المنتجات</span></p><p class=\"ql-direction-rtl ql-align-right\"><span style=\"color: rgb(255, 255, 255);\">تسليم الطلبات الكبيرة/الكبيرة الحجم</span></p><p class=\"ql-direction-rtl ql-align-right\"><span style=\"color: rgb(255, 255, 255);\">تسليم منتجات عالية القيمة</span></p><p class=\"ql-direction-rtl ql-align-right\"><span style=\"color: rgb(255, 255, 255);\">التعبئه</span></p><p><br></p>', 'SPECIAL SERVICES');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `t_id` int(11) NOT NULL,
  `t_comment` text NOT NULL,
  `t_img` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_company` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `v_id` int(11) NOT NULL,
  `v_ip` varchar(255) NOT NULL,
  `v_count` int(11) NOT NULL,
  `v_date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `albom`
--
ALTER TABLE `albom`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `blog_catigories`
--
ALTER TABLE `blog_catigories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `albom`
--
ALTER TABLE `albom`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_catigories`
--
ALTER TABLE `blog_catigories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
