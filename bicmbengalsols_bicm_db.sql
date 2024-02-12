-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2023 at 06:08 AM
-- Server version: 5.7.44-cll-lve
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bicmbengalsols_bicm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_settings`
--

CREATE TABLE `about_settings` (
  `about_settings_id` varchar(10) NOT NULL,
  `menu_name` varchar(150) NOT NULL,
  `position` char(2) DEFAULT '',
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `description` text,
  `page_id` varchar(20) DEFAULT '',
  `button_status` char(1) DEFAULT NULL,
  `program_id` varchar(20) DEFAULT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_settings`
--

INSERT INTO `about_settings` (`about_settings_id`, `menu_name`, `position`, `banner`, `tittle`, `description`, `page_id`, `button_status`, `program_id`, `status`, `created_at`, `updated_at`) VALUES
('691251375', '', '01', '', 'ADMISSION STATUS', '<ul>\r\n	<li>MAFCM 4th Batch (Spring 2023) class starts on 01 January 2023</li>\r\n	<li>Application deadline: 30 November 2022, Admission Test: 02 December 2022</li>\r\n</ul>', '688232887', 'Y', '687445735', 'Y', '2023-08-05 16:02:54', '2023-08-23 17:16:43'),
('692810584', '', '02', '', 'Duration and Credit Hours', '<p>The duration of the program is 2 years (4 semesters, each of 6 months). The program is of 51 credit hours.</p>', '688232887', 'N', '687445735', 'Y', '2023-08-23 17:09:43', '2023-08-23 17:09:43'),
('692810821', '', '03', '', 'Application procedure', '<p>(Choose the Master&rsquo;s / PGDCM tab, fill up the required information, proceed to payment and pay Tk. 1,000/&ndash; using your preferred online wallet or card)</p>', '688232887', 'N', '687445735', 'Y', '2023-08-23 17:13:40', '2023-08-23 17:13:40'),
('694412138', '', '4', '', 'Applicant\'s Eligibility', '<p>GRADUATION OR ITS EQUIVALENT IN ANY DISCIPLINE AND SATISFACTORY PERFORMANCE IN THE ADMISSION TEST.</p>', '688233618', 'Y', '694410248', 'Y', '2023-09-11 06:02:17', '2023-09-11 06:14:58'),
('694412962', '', '05', '', 'Registrar’s Office', '<p><span style=\"color:rgb(82, 82, 82); font-family:tahoma,geneva,sans-serif\">Bangladesh Institute of Capital Market (BICM)</span><br />\r\n<span style=\"color:rgb(82, 82, 82); font-family:tahoma,geneva,sans-serif\">34, Topkhana Road,&nbsp;Dhaka &ndash; 1000 (8th Floor)</span><br />\r\n<span style=\"color:rgb(82, 82, 82); font-family:tahoma,geneva,sans-serif\">Phone: +8802223358506 or +880223358836, X 401, 110, 407, +8802223358830 (Direct), 01572-112496, (9:00 AM to 4:00 PM, Sunday to Thursday)</span><br />\r\n<span style=\"color:rgb(82, 82, 82); font-family:tahoma,geneva,sans-serif\">E-mail: imran@bicm.ac.bd, info@bicm.ac.bd</span></p>', '688233618', 'N', '694410248', 'Y', '2023-09-11 06:16:01', '2023-09-11 06:16:01');

-- --------------------------------------------------------

--
-- Table structure for table `audit_log`
--

CREATE TABLE `audit_log` (
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(15) NOT NULL DEFAULT '',
  `user_id` char(20) NOT NULL DEFAULT '',
  `page_URL` char(30) NOT NULL DEFAULT '',
  `log_text` text NOT NULL,
  `type` char(3) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audit_log`
--

INSERT INTO `audit_log` (`date_time`, `ip`, `user_id`, `page_URL`, `log_text`, `type`) VALUES
('2023-10-17 04:20:55', '182.160.117.226', '3', 'Update Menu Page', '{\"changed_Data\":0,\"update_Data\":\"687713845\"}', 'MNP'),
('2023-10-17 04:20:57', '182.160.117.226', '3', 'Update Menu Page', '{\"changed_Data\":null,\"update_Data\":\"687713845\"}', 'MNP'),
('2023-10-17 04:21:30', '182.160.117.226', '3', 'Create New Menu', '{\"changed_Data\":0,\"update_Data\":\"new\"}', 'CNM'),
('2023-10-17 04:21:32', '182.160.117.226', '3', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-10-17 04:22:50', '182.160.117.226', '3', 'Update Menu Page', '{\"changed_Data\":687713845,\"update_Data\":\"687804395\"}', 'MNP'),
('2023-10-17 04:22:52', '182.160.117.226', '3', 'Update Menu Page', '{\"changed_Data\":null,\"update_Data\":\"687804395\"}', 'MNP'),
('2023-10-19 14:26:36', '103.109.56.240', '2', 'Page Updated View', '{\"changed_Data\":688233618,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-10-19 14:27:39', '103.109.56.240', '2', 'Create New Menu', '{\"changed_Data\":687800505,\"update_Data\":\"new\"}', 'CNM'),
('2023-10-19 14:27:42', '103.109.56.240', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-10-21 06:36:18', '103.109.56.240', '2', 'New Student View', '{\"changed_Data\":null,\"update_Data\":\"New Student View\"}', 'SUV'),
('2023-10-28 17:02:57', '103.109.56.242', '2', 'New Page Created view', '{\"changed_Data\":null,\"update_Data\":\"Page View Form\"}', 'NPV'),
('2023-10-28 17:05:26', '103.109.56.242', '2', 'New Page Created', '{\"changed_Data\":{\"parent_id\":\"0\",\"menu_id\":\"687800505\",\"page_name\":\"diploma\",\"heading\":null,\"page_type\":\"master\",\"sidebar_status\":\"Y\",\"form_status\":\"N\",\"short_description\":null,\"description\":null,\"status\":\"Y\",\"banner\":{}},\"update_Data\":\"New Page Created\"}', 'PU'),
('2023-10-28 17:06:13', '103.109.56.242', '2', 'Page Updated View', '{\"changed_Data\":698512727,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-10-28 17:07:14', '103.109.56.242', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"698512727\",\"parent_id\":\"0\",\"menu_id\":\"687800505\",\"page_name\":\"diploma\",\"heading\":null,\"page_type\":\"courses\",\"sidebar_status\":\"N\",\"form_status\":\"N\",\"short_description\":null,\"description\":null,\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-10-28 17:09:43', '103.109.56.242', '2', 'Page Updated View', '{\"changed_Data\":688233618,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-10-28 17:11:32', '103.109.56.242', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"688233618\",\"parent_id\":\"0\",\"menu_id\":\"687800425\",\"page_name\":\"Certification\",\"heading\":null,\"page_type\":\"courses\",\"sidebar_status\":\"Y\",\"form_status\":\"Y\",\"short_description\":\"Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.\",\"description\":\"<h3>PGDCM &ndash; Evening<\\/h3>\\r\\n\\r\\n<p>Introducing the first of its kind Postgraduate Diploma in Capital Market (PGDCM) in Bangladesh<\\/p>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">BICM is offering PGDCM for the market intermediaries, full spectrum of market professionals and graduates who aspire to pursue career in the capital market. The diploma will provide a blend of theoretical and practical knowledge on market mechanism, legal framework, new instruments and techniques.<\\/span><\\/p>\\r\\n\\r\\n<table>\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>DURATION: 9 MONTHS<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>24 CREDIT HOURS<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>PROGRAM FEE: BDT 33,000\\/-<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>8 COURSES&nbsp;<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<table>\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong><u>Break Down of Semester Fee (All amounts in BDT)<\\/u><\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>1st Semester<\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Admission Fee<\\/td>\\r\\n\\t\\t\\t<td>5,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Course Fee (4 Courses)<\\/td>\\r\\n\\t\\t\\t<td>12,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Lab Fee<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Library<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for 1st semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>19,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>2nd Semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Course Fee (4 Courses)<\\/td>\\r\\n\\t\\t\\t<td>12,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Lab Fee<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Library<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for 2nd semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>14,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for the PGDCM Program<\\/strong> (effective from 17th batch onward)<\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<strong>33,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">The PGDCM program consists of 8 courses (24 credit hours) The program is divided into two-semester. Four courses are offered in each trimester as follows:<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\"><strong><u>Level 1 \\/ Semester 1<\\/u><\\/strong><\\/span><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D101- Financial Markets in Bangladesh;<\\/span><\\/li>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D102- Managerial Finance;<\\/span><\\/li>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D103- Basic Statistics;<\\/span><\\/li>\\r\\n\\t<li>Code: D104- Financial Accounting.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<h2><u>Level 2\\/ Semester 2<\\/u><\\/h2>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Code: D201- Securities Analysis and Portfolio Management;&nbsp;<\\/li>\\r\\n\\t<li>Code: D202- Investment Banking;<\\/li>\\r\\n\\t<li>Code: D203- Capital Market Operations;<\\/li>\\r\\n\\t<li>Code: D204- Securities Laws.<\\/li>\\r\\n<\\/ul>\",\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-11-02 06:29:47', '103.109.56.240', '2', 'Edit Master Page View', '{\"changed_Data\":687445735,\"update_Data\":\"Edit Master Page View\"}', 'MPV'),
('2023-11-02 06:29:55', '103.109.56.240', '2', 'Edit Master Page View', '{\"changed_Data\":687445735,\"update_Data\":\"Edit Master Page View\"}', 'MPV'),
('2023-11-02 06:29:59', '103.109.56.240', '2', 'Edit Master Page View', '{\"changed_Data\":null,\"update_Data\":\"Edit Master Page View\"}', 'MPV'),
('2023-11-02 06:36:41', '103.109.56.240', '2', 'Edit Master Page View', '{\"changed_Data\":687445735,\"update_Data\":\"Edit Master Page View\"}', 'MPV'),
('2023-11-02 06:36:45', '103.109.56.240', '2', 'Edit Master Page View', '{\"changed_Data\":null,\"update_Data\":\"Edit Master Page View\"}', 'MPV'),
('2023-11-06 18:09:12', '203.78.147.10', '2', 'Edit Master Page View', '{\"changed_Data\":687445735,\"update_Data\":\"Edit Master Page View\"}', 'MPV'),
('2023-11-06 18:09:17', '203.78.147.10', '2', 'Edit Master Page View', '{\"changed_Data\":null,\"update_Data\":\"Edit Master Page View\"}', 'MPV'),
('2023-11-06 18:12:35', '203.78.147.10', '2', 'Edit Master Page View', '{\"changed_Data\":687445735,\"update_Data\":\"Edit Master Page View\"}', 'MPV'),
('2023-11-06 18:13:01', '203.78.147.10', '2', 'Page Updated View', '{\"changed_Data\":688232887,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-08 07:37:34', '103.109.56.242', '2', 'Edit Master Page View', '{\"changed_Data\":687445735,\"update_Data\":\"Edit Master Page View\"}', 'MPV'),
('2023-11-08 07:37:41', '103.109.56.242', '2', 'Edit Master Page View', '{\"changed_Data\":null,\"update_Data\":\"Edit Master Page View\"}', 'MPV'),
('2023-11-08 07:38:01', '103.109.56.242', '2', 'Update Master Page', '{\"changed_Data\":{\"masters_program_id\":\"687445735\",\"tittle\":\"High Time for Cyberlaw Enforcement and a Future of Work Strategy\",\"page_id\":\"688232887\",\"schedule\":\"12 May - 3 Nov 2023\",\"duration\":\"Total Hours : 144\",\"amount\":\"6000\",\"status\":\"Y\",\"aboutShow\":\"Y\",\"about\":\"<p>The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.<\\/p>\\r\\n\\r\\n<p>Nonetheless, in Bangladesh, the need for skilled professionals in the financial market in general and the capital market, in particular, has been on the rise. The MAFCM program of BICM, with its world-class curriculum, will sharpen a student&rsquo;s required theoretical, quantitative, and technical skills by providing a blend of rigorous academic and practical application. Hence, the program is expected to bridge the long-felt gap between the skills required and those existing in this dynamic field of financial markets, especially the capital market.<\\/p>\\r\\n\\r\\n<p>New innovations in the applications of finance are making it crucial for stakeholders in the industry to keep pace with these developments. BICM is aiming to create the best-equipped financial managers in the country with this uniquely designed program. Those aspiring to excel in a career in finance, banking, merchant banking, asset and funds management, financial analysis, and financial regulation will experience assimilation of essential knowledge and skills in an increasingly challenging financial environment.<\\/p>\\r\\n\\r\\n<div class=\\\"\\\">\\r\\n<h2>The objective of the MAFCM Program<\\/h2>\\r\\n\\r\\n<p>BICM is offering the &lsquo;Master of Applied Finance and Capital Market&rsquo; (MAFCM) to strengthen the Bangladesh capital market through elevating the knowledge of stakeholders. The capital market is dynamic and is evolving over time both locally and globally. One must be competent enough to excel in the field of capital market with the required set of management, mathematical and technical skills. The MAFCM program is designed to inculcate these skills in students so that they can cater to the needs of competent financial managers.<\\/p>\\r\\n\\r\\n<h2>Minimum Credit Requirements<\\/h2>\\r\\n\\r\\n<p>The minimum credit requirement for obtaining the MAFCM degree is 51 (fifty-one). Of the total required credits, 48 credits are to be completed as course work and 3 credits are to be earned from project work.<\\/p>\\r\\n\\r\\n<h2>Program Completion Period<\\/h2>\\r\\n\\r\\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.<\\/p>\\r\\n\\r\\n<h2>Program Completion Period<\\/h2>\\r\\n\\r\\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.<\\/p>\\r\\n\\r\\n<h2>Semesters<\\/h2>\\r\\n\\r\\n<p>There shall be two semesters in a calendar year. The Spring semester (January &ndash; June) and Summer semester (July &ndash; December). The Academic Year is the same as the calendar year.<\\/p>\\r\\n\\r\\n<h2>Admission\\/Eligibility Criteria<\\/h2>\\r\\n\\r\\n<p>The minimum academic requirement for admission into the program is a 4-year Bachelor&rsquo;s degree (or equivalent) from a recognized institution having minimum 2nd class\\/division, or Master&rsquo;s degree in case of Bachelor&rsquo;s degree (or equivalent) with a duration of less than 4 years from a recognized institution, having minimum 2nd class\\/division at Master level. Preference will be given to those having experience in the fields of finance, capital market operations, capital market regulations, capital market policy formulation, capital market research, accounting, auditing, banking etc. Registered\\/Enrolled students of any accounting and finance professional institute (such as CFA, ICAB, ICMAB, ACCA, CIMA, CPA,ICSB etc.) will also get preference. For foreign degrees, equivalence certificate from the University Grants Commission of Bangladesh has to be provided. All applicants must appear in a written test, followed by a viva-voce for those who pass the written test. The final score for selection will be prepared considering the performance in the written test, viva-voce, previous academic records, and relevant experience. Selections will be made based on the combined score. Members of any accounting and finance profession like CFA, ICAB, ICMAB, ACCA, CMA, CPA, ICSB, etc. and those having GMAT score of at least 500 or GRE score of at least 300 will be eligible for direct admission (Subject to satisfactory appearance in the viva-voce).<\\/p>\\r\\n<\\/div>\",\"pedagogy\":null,\"courseStructure\":null,\"teachingMethods\":null,\"gradingPolicy\":null,\"feesChargesShow\":\"Y\",\"feesCharges\":\"<div class=\\\"blog_single-part\\\">\\r\\n<h2>Fees and Charges<\\/h2>\\r\\n\\r\\n<p>Fees and Charges(after 50% waiver on course fee announced in October 2022)<\\/p>\\r\\n\\r\\n<div class=\\\"table-responsive\\\">\\r\\n<table class=\\\"table table-bordered table-striped\\\">\\r\\n\\t<thead>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<th scope=\\\"col\\\">Sl.<\\/th>\\r\\n\\t\\t\\t<th scope=\\\"col\\\">Item Details<\\/th>\\r\\n\\t\\t\\t<th scope=\\\"col\\\">Amount (Taka)<\\/th>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/thead>\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>01<\\/td>\\r\\n\\t\\t\\t<td>Application Form<\\/td>\\r\\n\\t\\t\\t<td>1,000\\/-<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>02<\\/td>\\r\\n\\t\\t\\t<td>Admission Fee<\\/td>\\r\\n\\t\\t\\t<td>10,000\\/-<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>01<\\/td>\\r\\n\\t\\t\\t<td>Application Form<\\/td>\\r\\n\\t\\t\\t<td>1,000\\/-<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>01<\\/td>\\r\\n\\t\\t\\t<td>Application Form<\\/td>\\r\\n\\t\\t\\t<td>1,000\\/-<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>01<\\/td>\\r\\n\\t\\t\\t<td>Application Form<\\/td>\\r\\n\\t\\t\\t<td>1,000\\/-<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>01<\\/td>\\r\\n\\t\\t\\t<td>Application Form<\\/td>\\r\\n\\t\\t\\t<td>1,000\\/-<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>01<\\/td>\\r\\n\\t\\t\\t<td>Application Form<\\/td>\\r\\n\\t\\t\\t<td>1,000\\/-<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n<\\/div>\\r\\n<\\/div>\",\"download\":null},\"update_Data\":\"Update Master Page\"}', 'UMP'),
('2023-11-12 05:15:26', '182.160.117.226', '3', 'Page Updated View', '{\"changed_Data\":688233618,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-12 05:19:02', '182.160.117.226', '3', 'Page Updated View', '{\"changed_Data\":688233618,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-20 08:09:44', '58.65.224.5', '2', 'Page Updated View', '{\"changed_Data\":698512727,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-20 08:10:00', '58.65.224.5', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"698512727\",\"parent_id\":\"0\",\"menu_id\":\"687800505\",\"page_name\":\"diploma\",\"heading\":null,\"page_type\":\"courses\",\"sidebar_status\":\"N\",\"form_status\":\"Y\",\"form_group\":[\"1053500961\",\"5225500961\"],\"short_description\":null,\"description\":null,\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-11-21 20:50:57', '203.78.147.5', '2', 'Page Updated View', '{\"changed_Data\":688233618,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-21 20:51:24', '203.78.147.5', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"688233618\",\"parent_id\":\"0\",\"menu_id\":\"687800425\",\"page_name\":\"Certification\",\"heading\":null,\"page_type\":\"courses\",\"sidebar_status\":\"Y\",\"form_status\":\"Y\",\"form_group\":[\"1053500961\",\"5225500961\",\"0674150071\"],\"short_description\":\"Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.\",\"description\":\"<h3>PGDCM &ndash; Evening<\\/h3>\\r\\n\\r\\n<p>Introducing the first of its kind Postgraduate Diploma in Capital Market (PGDCM) in Bangladesh<\\/p>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">BICM is offering PGDCM for the market intermediaries, full spectrum of market professionals and graduates who aspire to pursue career in the capital market. The diploma will provide a blend of theoretical and practical knowledge on market mechanism, legal framework, new instruments and techniques.<\\/span><\\/p>\\r\\n\\r\\n<table>\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>DURATION: 9 MONTHS<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>24 CREDIT HOURS<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>PROGRAM FEE: BDT 33,000\\/-<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>8 COURSES&nbsp;<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<table>\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong><u>Break Down of Semester Fee (All amounts in BDT)<\\/u><\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>1st Semester<\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Admission Fee<\\/td>\\r\\n\\t\\t\\t<td>5,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Course Fee (4 Courses)<\\/td>\\r\\n\\t\\t\\t<td>12,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Lab Fee<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Library<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for 1st semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>19,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>2nd Semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Course Fee (4 Courses)<\\/td>\\r\\n\\t\\t\\t<td>12,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Lab Fee<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Library<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for 2nd semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>14,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for the PGDCM Program<\\/strong> (effective from 17th batch onward)<\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<strong>33,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">The PGDCM program consists of 8 courses (24 credit hours) The program is divided into two-semester. Four courses are offered in each trimester as follows:<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\"><strong><u>Level 1 \\/ Semester 1<\\/u><\\/strong><\\/span><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D101- Financial Markets in Bangladesh;<\\/span><\\/li>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D102- Managerial Finance;<\\/span><\\/li>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D103- Basic Statistics;<\\/span><\\/li>\\r\\n\\t<li>Code: D104- Financial Accounting.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<h2><u>Level 2\\/ Semester 2<\\/u><\\/h2>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Code: D201- Securities Analysis and Portfolio Management;&nbsp;<\\/li>\\r\\n\\t<li>Code: D202- Investment Banking;<\\/li>\\r\\n\\t<li>Code: D203- Capital Market Operations;<\\/li>\\r\\n\\t<li>Code: D204- Securities Laws.<\\/li>\\r\\n<\\/ul>\",\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-11-23 10:47:55', '58.65.224.5', '2', 'Page Updated View', '{\"changed_Data\":688233618,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-23 10:48:37', '58.65.224.5', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"688233618\",\"parent_id\":\"0\",\"menu_id\":\"687800425\",\"page_name\":\"Certification\",\"heading\":null,\"page_type\":\"courses\",\"sidebar_status\":\"Y\",\"form_status\":\"Y\",\"form_group\":[\"1053500961\",\"5225500961\",\"0674150071\",\"2695370071\",\"3026370071\",\"5546370071\"],\"short_description\":\"Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.\",\"description\":\"<h3>PGDCM &ndash; Evening<\\/h3>\\r\\n\\r\\n<p>Introducing the first of its kind Postgraduate Diploma in Capital Market (PGDCM) in Bangladesh<\\/p>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">BICM is offering PGDCM for the market intermediaries, full spectrum of market professionals and graduates who aspire to pursue career in the capital market. The diploma will provide a blend of theoretical and practical knowledge on market mechanism, legal framework, new instruments and techniques.<\\/span><\\/p>\\r\\n\\r\\n<table>\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>DURATION: 9 MONTHS<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>24 CREDIT HOURS<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>PROGRAM FEE: BDT 33,000\\/-<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>8 COURSES&nbsp;<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<table>\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong><u>Break Down of Semester Fee (All amounts in BDT)<\\/u><\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>1st Semester<\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Admission Fee<\\/td>\\r\\n\\t\\t\\t<td>5,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Course Fee (4 Courses)<\\/td>\\r\\n\\t\\t\\t<td>12,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Lab Fee<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Library<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for 1st semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>19,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>2nd Semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Course Fee (4 Courses)<\\/td>\\r\\n\\t\\t\\t<td>12,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Lab Fee<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Library<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for 2nd semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>14,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for the PGDCM Program<\\/strong> (effective from 17th batch onward)<\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<strong>33,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">The PGDCM program consists of 8 courses (24 credit hours) The program is divided into two-semester. Four courses are offered in each trimester as follows:<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\"><strong><u>Level 1 \\/ Semester 1<\\/u><\\/strong><\\/span><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D101- Financial Markets in Bangladesh;<\\/span><\\/li>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D102- Managerial Finance;<\\/span><\\/li>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D103- Basic Statistics;<\\/span><\\/li>\\r\\n\\t<li>Code: D104- Financial Accounting.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<h2><u>Level 2\\/ Semester 2<\\/u><\\/h2>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Code: D201- Securities Analysis and Portfolio Management;&nbsp;<\\/li>\\r\\n\\t<li>Code: D202- Investment Banking;<\\/li>\\r\\n\\t<li>Code: D203- Capital Market Operations;<\\/li>\\r\\n\\t<li>Code: D204- Securities Laws.<\\/li>\\r\\n<\\/ul>\",\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-11-24 18:03:31', '103.166.24.251', '2', 'Page Updated View', '{\"changed_Data\":688233618,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-24 18:03:51', '103.166.24.251', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"688233618\",\"parent_id\":\"0\",\"menu_id\":\"687800425\",\"page_name\":\"Certification\",\"heading\":null,\"page_type\":\"courses\",\"sidebar_status\":\"Y\",\"form_status\":\"Y\",\"form_group\":[\"1053500961\",\"0674150071\",\"2695370071\",\"3026370071\",\"5546370071\"],\"short_description\":\"Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.\",\"description\":\"<h3>PGDCM &ndash; Evening<\\/h3>\\r\\n\\r\\n<p>Introducing the first of its kind Postgraduate Diploma in Capital Market (PGDCM) in Bangladesh<\\/p>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">BICM is offering PGDCM for the market intermediaries, full spectrum of market professionals and graduates who aspire to pursue career in the capital market. The diploma will provide a blend of theoretical and practical knowledge on market mechanism, legal framework, new instruments and techniques.<\\/span><\\/p>\\r\\n\\r\\n<table>\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>DURATION: 9 MONTHS<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>24 CREDIT HOURS<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>PROGRAM FEE: BDT 33,000\\/-<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>8 COURSES&nbsp;<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<table>\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong><u>Break Down of Semester Fee (All amounts in BDT)<\\/u><\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>1st Semester<\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Admission Fee<\\/td>\\r\\n\\t\\t\\t<td>5,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Course Fee (4 Courses)<\\/td>\\r\\n\\t\\t\\t<td>12,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Lab Fee<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Library<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for 1st semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>19,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>2nd Semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Course Fee (4 Courses)<\\/td>\\r\\n\\t\\t\\t<td>12,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Lab Fee<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Library<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for 2nd semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>14,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for the PGDCM Program<\\/strong> (effective from 17th batch onward)<\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<strong>33,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">The PGDCM program consists of 8 courses (24 credit hours) The program is divided into two-semester. Four courses are offered in each trimester as follows:<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\"><strong><u>Level 1 \\/ Semester 1<\\/u><\\/strong><\\/span><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D101- Financial Markets in Bangladesh;<\\/span><\\/li>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D102- Managerial Finance;<\\/span><\\/li>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D103- Basic Statistics;<\\/span><\\/li>\\r\\n\\t<li>Code: D104- Financial Accounting.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<h2><u>Level 2\\/ Semester 2<\\/u><\\/h2>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Code: D201- Securities Analysis and Portfolio Management;&nbsp;<\\/li>\\r\\n\\t<li>Code: D202- Investment Banking;<\\/li>\\r\\n\\t<li>Code: D203- Capital Market Operations;<\\/li>\\r\\n\\t<li>Code: D204- Securities Laws.<\\/li>\\r\\n<\\/ul>\",\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-11-26 09:51:27', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":692691571,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-26 09:52:12', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":692691571,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-26 09:52:35', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":692691571,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-26 09:53:14', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":692691571,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-26 09:54:02', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":692691571,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-26 09:54:14', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":692691571,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-26 09:55:02', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":698512727,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-26 10:02:58', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":688233822,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-28 05:53:34', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":692691571,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-28 05:55:25', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":692691571,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-28 05:56:22', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":692691571,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-11-28 05:57:10', '103.113.15.41', '2', 'Page Updated View', '{\"changed_Data\":692691571,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-12-11 09:46:45', '182.160.117.226', '2', 'Page Updated View', '{\"changed_Data\":688233618,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-12-11 09:47:00', '182.160.117.226', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"688233618\",\"parent_id\":\"0\",\"menu_id\":\"687800425\",\"page_name\":\"Certificate Course\",\"heading\":null,\"page_type\":\"courses\",\"sidebar_status\":\"Y\",\"form_status\":\"Y\",\"form_group\":[\"1053500961\",\"0674150071\",\"2695370071\",\"3026370071\",\"5546370071\"],\"short_description\":\"Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.\",\"description\":\"<h3>PGDCM &ndash; Evening<\\/h3>\\r\\n\\r\\n<p>Introducing the first of its kind Postgraduate Diploma in Capital Market (PGDCM) in Bangladesh<\\/p>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">BICM is offering PGDCM for the market intermediaries, full spectrum of market professionals and graduates who aspire to pursue career in the capital market. The diploma will provide a blend of theoretical and practical knowledge on market mechanism, legal framework, new instruments and techniques.<\\/span><\\/p>\\r\\n\\r\\n<table>\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>DURATION: 9 MONTHS<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>24 CREDIT HOURS<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>PROGRAM FEE: BDT 33,000\\/-<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>8 COURSES&nbsp;<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<table>\\r\\n\\t<tbody>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong><u>Break Down of Semester Fee (All amounts in BDT)<\\/u><\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>1st Semester<\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Admission Fee<\\/td>\\r\\n\\t\\t\\t<td>5,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Course Fee (4 Courses)<\\/td>\\r\\n\\t\\t\\t<td>12,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Lab Fee<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Library<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for 1st semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>19,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>2nd Semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Course Fee (4 Courses)<\\/td>\\r\\n\\t\\t\\t<td>12,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Lab Fee<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td>Library<\\/td>\\r\\n\\t\\t\\t<td>1,000<\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for 2nd semester<\\/strong><\\/td>\\r\\n\\t\\t\\t<td><strong>14,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t\\t<tr>\\r\\n\\t\\t\\t<td><strong>Total fee for the PGDCM Program<\\/strong> (effective from 17th batch onward)<\\/td>\\r\\n\\t\\t\\t<td>&nbsp;<strong>33,000<\\/strong><\\/td>\\r\\n\\t\\t<\\/tr>\\r\\n\\t<\\/tbody>\\r\\n<\\/table>\\r\\n\\r\\n<p><span style=\\\"font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">The PGDCM program consists of 8 courses (24 credit hours) The program is divided into two-semester. Four courses are offered in each trimester as follows:<\\/span><\\/p>\\r\\n\\r\\n<p><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\"><strong><u>Level 1 \\/ Semester 1<\\/u><\\/strong><\\/span><\\/p>\\r\\n\\r\\n<ul>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D101- Financial Markets in Bangladesh;<\\/span><\\/li>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D102- Managerial Finance;<\\/span><\\/li>\\r\\n\\t<li><span style=\\\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\\\">Code: D103- Basic Statistics;<\\/span><\\/li>\\r\\n\\t<li>Code: D104- Financial Accounting.<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<p>&nbsp;<\\/p>\\r\\n\\r\\n<h2><u>Level 2\\/ Semester 2<\\/u><\\/h2>\\r\\n\\r\\n<ul>\\r\\n\\t<li>Code: D201- Securities Analysis and Portfolio Management;&nbsp;<\\/li>\\r\\n\\t<li>Code: D202- Investment Banking;<\\/li>\\r\\n\\t<li>Code: D203- Capital Market Operations;<\\/li>\\r\\n\\t<li>Code: D204- Securities Laws.<\\/li>\\r\\n<\\/ul>\",\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-12-11 09:48:38', '182.160.117.226', '2', 'Page Updated View', '{\"changed_Data\":688233618,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-12-11 09:49:02', '182.160.117.226', '2', 'Update Menu Page', '{\"changed_Data\":0,\"update_Data\":\"687800425\"}', 'MNP'),
('2023-12-11 09:49:07', '182.160.117.226', '2', 'Update Menu Page', '{\"changed_Data\":null,\"update_Data\":\"687800425\"}', 'MNP'),
('2023-12-11 09:49:38', '182.160.117.226', '2', 'Menu Updated', '{\"changed_Data\":{\"menu_id\":\"687800425\",\"menu_tittle\":\"Certificate Course\",\"parent_id\":\"0\",\"sub_menu\":\"N\",\"sort_order\":\"04\",\"url\":\"certification-training\",\"status\":\"Y\"},\"update_Data\":\"Menu Updated\"}', 'MUS'),
('2023-12-11 09:50:31', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":0,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 09:50:35', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 09:51:44', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":0,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 09:51:48', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 09:53:23', '182.160.117.226', '2', 'Update Menu Page', '{\"changed_Data\":0,\"update_Data\":\"687800425\"}', 'MNP'),
('2023-12-11 09:53:27', '182.160.117.226', '2', 'Update Menu Page', '{\"changed_Data\":null,\"update_Data\":\"687800425\"}', 'MNP'),
('2023-12-11 09:53:35', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":0,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 09:53:39', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 09:55:23', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":0,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 09:55:28', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 09:56:37', '182.160.117.226', '2', 'New Page Created view', '{\"changed_Data\":null,\"update_Data\":\"Page View Form\"}', 'NPV'),
('2023-12-11 09:58:22', '182.160.117.226', '2', 'New Page Created', '{\"changed_Data\":{\"parent_id\":\"0\",\"menu_id\":\"687800716\",\"page_name\":\"Certification Program\",\"heading\":\"dfd\",\"page_type\":\"courses\",\"sidebar_status\":\"N\",\"form_status\":\"Y\",\"short_description\":\"cvbncvb vncvbn cbn\",\"description\":\"<p>gfhgvnvcbnvcbn<\\/p>\",\"status\":\"Y\",\"image\":{}},\"update_Data\":\"New Page Created\"}', 'PU'),
('2023-12-11 09:59:09', '182.160.117.226', '2', 'Page Updated View', '{\"changed_Data\":702288703,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-12-11 09:59:27', '182.160.117.226', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"702288703\",\"parent_id\":\"0\",\"menu_id\":\"687800425\",\"page_name\":\"Certification Program\",\"heading\":\"dfd\",\"page_type\":\"courses\",\"sidebar_status\":\"N\",\"form_status\":\"Y\",\"short_description\":\"cvbncvb vncvbn cbn\",\"description\":\"<p>gfhgvnvcbnvcbn<\\/p>\",\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-12-11 10:06:14', '182.160.117.226', '2', 'Page Updated View', '{\"changed_Data\":702288703,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-12-11 10:06:34', '182.160.117.226', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"702288703\",\"parent_id\":\"0\",\"menu_id\":\"687800425\",\"page_name\":\"Certification Program\",\"heading\":\"dfd\",\"page_type\":\"courses\",\"sidebar_status\":\"N\",\"form_status\":\"N\",\"short_description\":\"cvbncvb vncvbn cbn\",\"description\":\"<p>gfhgvnvcbnvcbn<\\/p>\",\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-12-11 10:06:54', '182.160.117.226', '2', 'Page Updated View', '{\"changed_Data\":702288703,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-12-11 10:07:10', '182.160.117.226', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"702288703\",\"parent_id\":\"0\",\"menu_id\":\"687800425\",\"page_name\":\"Certification Program\",\"heading\":\"dfd\",\"page_type\":\"courses\",\"sidebar_status\":\"N\",\"form_status\":\"N\",\"short_description\":\"cvbncvb vncvbn cbn\",\"description\":\"<p>gfhgvnvcbnvcbn<\\/p>\",\"status\":\"Y\",\"banner\":{}},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-12-11 10:08:30', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":0,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:08:35', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:09:30', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":0,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:09:35', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:10:24', '182.160.117.226', '2', 'New Menu Created', '{\"changed_Data\":{\"menu_tittle\":\"Certification Program\",\"parent_id\":\"0\",\"sub_menu\":\"Y\",\"sort_order\":\"66\",\"url\":\"Certification-Program\",\"status\":\"Y\"},\"update_Data\":\"New Menu Created\"}', 'NMC'),
('2023-12-11 10:11:49', '182.160.117.226', '2', 'Page Updated View', '{\"changed_Data\":702288703,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-12-11 10:12:10', '182.160.117.226', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"702288703\",\"parent_id\":\"0\",\"menu_id\":\"702289425\",\"page_name\":\"Certification Program\",\"heading\":\"dfd\",\"page_type\":\"courses\",\"sidebar_status\":\"N\",\"form_status\":\"N\",\"short_description\":\"cvbncvb vncvbn cbn\",\"description\":\"<p>gfhgvnvcbnvcbn<\\/p>\",\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-12-11 10:15:00', '182.160.117.226', '2', 'Update Menu Page', '{\"changed_Data\":0,\"update_Data\":\"702289425\"}', 'MNP'),
('2023-12-11 10:15:05', '182.160.117.226', '2', 'Update Menu Page', '{\"changed_Data\":null,\"update_Data\":\"702289425\"}', 'MNP'),
('2023-12-11 10:15:09', '182.160.117.226', '2', 'Menu Updated', '{\"changed_Data\":{\"menu_id\":\"702289425\",\"menu_tittle\":\"Certification Program\",\"parent_id\":\"0\",\"sub_menu\":\"N\",\"sort_order\":\"66\",\"url\":\"Certification-Program\",\"status\":\"Y\"},\"update_Data\":\"Menu Updated\"}', 'MUS'),
('2023-12-11 10:15:36', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":0,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:15:41', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:16:42', '182.160.117.226', '2', 'Update Menu Page', '{\"changed_Data\":0,\"update_Data\":\"702289425\"}', 'MNP'),
('2023-12-11 10:16:47', '182.160.117.226', '2', 'Update Menu Page', '{\"changed_Data\":null,\"update_Data\":\"702289425\"}', 'MNP'),
('2023-12-11 10:16:56', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":0,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:17:02', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:17:43', '182.160.117.226', '2', 'New Menu Created', '{\"changed_Data\":{\"menu_tittle\":\"IEP\",\"parent_id\":\"0\",\"sub_menu\":\"N\",\"sort_order\":\"67\",\"url\":\"iep\",\"status\":\"Y\"},\"update_Data\":\"New Menu Created\"}', 'NMC'),
('2023-12-11 10:18:19', '182.160.117.226', '2', 'New Page Created view', '{\"changed_Data\":null,\"update_Data\":\"Page View Form\"}', 'NPV'),
('2023-12-11 10:21:10', '182.160.117.226', '2', 'New Page Created', '{\"changed_Data\":{\"parent_id\":\"0\",\"menu_id\":\"702289864\",\"page_name\":\"iep\",\"heading\":\"IEP Program Heading\",\"page_type\":\"common\",\"sidebar_status\":\"N\",\"form_status\":\"Y\",\"short_description\":\"BICM IEP Program Short Description !!!\",\"description\":\"<p>BICM IEP Program Description !!!<\\/p>\",\"status\":\"Y\",\"banner\":{}},\"update_Data\":\"New Page Created\"}', 'PU'),
('2023-12-11 10:21:48', '182.160.117.226', '2', 'Page Updated View', '{\"changed_Data\":702290071,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-12-11 10:22:07', '182.160.117.226', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"702290071\",\"parent_id\":\"0\",\"menu_id\":\"702289864\",\"page_name\":\"iep\",\"heading\":\"IEP Program Heading\",\"page_type\":\"common\",\"sidebar_status\":\"N\",\"form_status\":\"Y\",\"short_description\":\"BICM IEP Program Short Description !!!\",\"description\":\"<p>BICM IEP Program Description !!!<\\/p>\",\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU'),
('2023-12-11 10:22:37', '182.160.117.226', '2', 'Page Updated View', '{\"changed_Data\":702290071,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-12-11 10:22:47', '182.160.117.226', '2', 'Page Update', '{\"changed_Data\":{\"page_id\":\"702290071\",\"parent_id\":\"0\",\"menu_id\":\"702289864\",\"page_name\":\"iep\",\"heading\":\"IEP Program Heading\",\"page_type\":\"common\",\"sidebar_status\":\"N\",\"form_status\":\"N\",\"short_description\":\"BICM IEP Program Short Description !!!\",\"description\":\"<p>BICM IEP Program Description !!!<\\/p>\",\"status\":\"Y\"},\"update_Data\":\"Page Update\"}', 'PU');
INSERT INTO `audit_log` (`date_time`, `ip`, `user_id`, `page_URL`, `log_text`, `type`) VALUES
('2023-12-11 10:38:25', '182.160.117.226', '2', 'Page Updated View', '{\"changed_Data\":702288703,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-12-11 10:38:45', '182.160.117.226', '2', 'Page Updated View', '{\"changed_Data\":688232887,\"update_Data\":\"Page View Form\"}', 'PUV'),
('2023-12-11 10:41:13', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":0,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:41:19', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:42:31', '182.160.117.226', '2', 'New Menu Created', '{\"changed_Data\":{\"menu_tittle\":\"PGDCM\",\"parent_id\":\"0\",\"sub_menu\":\"N\",\"sort_order\":\"68\",\"url\":\"pgdcm\",\"status\":\"Y\"},\"update_Data\":\"New Menu Created\"}', 'NMC'),
('2023-12-11 10:43:09', '182.160.117.226', '2', 'Delete Menu', '{\"changed_Data\":702291352,\"update_Data\":\"Destroyed\"}', 'DTM'),
('2023-12-11 10:43:44', '182.160.117.226', '2', 'New Page Created view', '{\"changed_Data\":null,\"update_Data\":\"Page View Form\"}', 'NPV'),
('2023-12-11 10:45:32', '182.160.117.226', '2', 'New Page Created view', '{\"changed_Data\":null,\"update_Data\":\"Page View Form\"}', 'NPV'),
('2023-12-11 10:46:02', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":0,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:46:06', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:47:18', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":687800505,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:47:22', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:47:33', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":687800505,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:47:38', '182.160.117.226', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-11 10:48:06', '182.160.117.226', '2', 'New Menu Created', '{\"changed_Data\":{\"menu_tittle\":\"PGDCM\",\"parent_id\":\"0\",\"sub_menu\":\"N\",\"sort_order\":\"68\",\"url\":\"pgdcm\",\"status\":\"Y\"},\"update_Data\":\"New Menu Created\"}', 'NMC'),
('2023-12-11 10:48:42', '182.160.117.226', '2', 'New Page Created view', '{\"changed_Data\":null,\"update_Data\":\"Page View Form\"}', 'NPV'),
('2023-12-11 10:48:59', '182.160.117.226', '2', 'New Page Created view', '{\"changed_Data\":null,\"update_Data\":\"Page View Form\"}', 'NPV'),
('2023-12-11 10:49:49', '182.160.117.226', '2', 'Update Menu Page', '{\"changed_Data\":0,\"update_Data\":\"702291687\"}', 'MNP'),
('2023-12-11 10:49:53', '182.160.117.226', '2', 'Update Menu Page', '{\"changed_Data\":null,\"update_Data\":\"702291687\"}', 'MNP'),
('2023-12-11 10:49:55', '182.160.117.226', '2', 'Menu Updated', '{\"changed_Data\":{\"menu_id\":\"702291687\",\"menu_tittle\":\"PGDCM\",\"parent_id\":\"0\",\"sub_menu\":\"Y\",\"sort_order\":\"68\",\"url\":\"pgdcm\",\"status\":\"N\"},\"update_Data\":\"Menu Updated\"}', 'MUS'),
('2023-12-14 12:34:23', '58.65.224.5', '2', 'Create New Menu', '{\"changed_Data\":687713653,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-14 12:34:28', '58.65.224.5', '2', 'Create New Menu', '{\"changed_Data\":null,\"update_Data\":\"new\"}', 'CNM'),
('2023-12-17 11:06:09', '182.160.117.226', '2', 'New Page Created view', '{\"changed_Data\":null,\"update_Data\":\"Page View Form\"}', 'NPV');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` varchar(20) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(13) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `ip_address` varchar(40) DEFAULT '',
  `status` char(1) NOT NULL COMMENT 'R=''read'',U=''UnRead'',I=''Inprogress'',C=''closed''',
  `attend_by` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` char(10) NOT NULL,
  `page_id` char(10) DEFAULT '',
  `courseTypes` text,
  `image` text,
  `tittle` char(150) NOT NULL,
  `courseDate` varchar(100) DEFAULT '',
  `classes` varchar(3) DEFAULT '',
  `schedule` char(100) DEFAULT NULL,
  `duration` char(100) DEFAULT NULL,
  `amount` text,
  `lastDate` char(50) DEFAULT '',
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `shortDescription` varchar(255) DEFAULT '',
  `status` char(1) DEFAULT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `aboutHeading` varchar(100) DEFAULT NULL,
  `about` text,
  `pedagogyShow` char(1) DEFAULT NULL,
  `pedagogyHeading` varchar(100) DEFAULT NULL,
  `pedagogy` text,
  `courseStructureShow` char(1) DEFAULT NULL,
  `courseHeading` varchar(100) DEFAULT NULL,
  `courseStructure` text,
  `teachingMethodsShow` char(1) DEFAULT NULL,
  `teachingHeading` varchar(100) DEFAULT NULL,
  `teachingMethods` text,
  `gradingPolicyShow` char(1) DEFAULT NULL,
  `gradingPolicyHeading` varchar(100) DEFAULT NULL,
  `gradingPolicy` text,
  `feesChargesShow` char(1) DEFAULT NULL,
  `feesChargesHeading` varchar(100) DEFAULT NULL,
  `feesCharges` text,
  `downloadShow` char(1) DEFAULT NULL,
  `downloadHeading` varchar(100) DEFAULT NULL,
  `download` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `page_id`, `courseTypes`, `image`, `tittle`, `courseDate`, `classes`, `schedule`, `duration`, `amount`, `lastDate`, `startDate`, `endDate`, `venue`, `shortDescription`, `status`, `aboutShow`, `aboutHeading`, `about`, `pedagogyShow`, `pedagogyHeading`, `pedagogy`, `courseStructureShow`, `courseHeading`, `courseStructure`, `teachingMethodsShow`, `teachingHeading`, `teachingMethods`, `gradingPolicyShow`, `gradingPolicyHeading`, `gradingPolicy`, `feesChargesShow`, `feesChargesHeading`, `feesCharges`, `downloadShow`, `downloadHeading`, `download`, `created_at`, `updated_at`) VALUES
('687502012', '688233618', 'null', 'assets/frontend/images/courses/blog3.png', 'High Time for Cyberlaw Enforcement', '19 Oct - 11 Jan 2024', '36', 'Sunday - 6:00 PM - 9:00 PM Tuesday - 6:00 PM - 9:00 PM Thursday - 6:00 PM - 9:00 PM', '144', '25000', '19 Oct 2023', '2023-10-19', '2024-01-11', 'Bangladesh Institute of Capital Market BGIC Tower (Ground- 3rd Floor and 8th-9th),34, Topkhana Road, Dhaka- 1000. Contact No- +88029588506, 9588507', 'The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient.', 'Y', 'Y', 'About', '<div class=\"tab-pane row active\" id=\"about\">\r\n<div class=\"row\">\r\n<div class=\"blog_single-part\">\r\n<h2>About</h2>\r\n\r\n<p>The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.</p>\r\n\r\n<p>Nonetheless, in Bangladesh, the need for skilled professionals in the financial market in general and the capital market, in particular, has been on the rise. The MAFCM program of BICM, with its world-class curriculum, will sharpen a student&rsquo;s required theoretical, quantitative, and technical skills by providing a blend of rigorous academic and practical application. Hence, the program is expected to bridge the long-felt gap between the skills required and those existing in this dynamic field of financial markets, especially the capital market.</p>\r\n\r\n<p>New innovations in the applications of finance are making it crucial for stakeholders in the industry to keep pace with these developments. BICM is aiming to create the best-equipped financial managers in the country with this uniquely designed program. Those aspiring to excel in a career in finance, banking, merchant banking, asset and funds management, financial analysis, and financial regulation will experience assimilation of essential knowledge and skills in an increasingly challenging financial environment.</p>\r\n</div>\r\n\r\n<div class=\"blog_single-part\">\r\n<h2>The objective of the MAFCM Program</h2>\r\n\r\n<p>BICM is offering the &lsquo;Master of Applied Finance and Capital Market&rsquo; (MAFCM) to strengthen the Bangladesh capital market through elevating the knowledge of stakeholders. The capital market is dynamic and is evolving over time both locally and globally. One must be competent enough to excel in the field of capital market with the required set of management, mathematical and technical skills. The MAFCM program is designed to inculcate these skills in students so that they can cater to the needs of competent financial managers.</p>\r\n\r\n<h2>Minimum Credit Requirements</h2>\r\n\r\n<p>The minimum credit requirement for obtaining the MAFCM degree is 51 (fifty-one). Of the total required credits, 48 credits are to be completed as course work and 3 credits are to be earned from project work.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Semesters</h2>\r\n\r\n<p>There shall be two semesters in a calendar year. The Spring semester (January &ndash; June) and Summer semester (July &ndash; December). The Academic Year is the same as the calendar year.</p>\r\n\r\n<h2>Admission/Eligibility Criteria</h2>\r\n\r\n<p>The minimum academic requirement for admission into the program is a 4-year Bachelor&rsquo;s degree (or equivalent) from a recognized institution having minimum 2nd class/division, or Master&rsquo;s degree in case of Bachelor&rsquo;s degree (or equivalent) with a duration of less than 4 years from a recognized institution, having minimum 2nd class/division at Master level. Preference will be given to those having experience in the fields of finance, capital market operations, capital market regulations, capital market policy formulation, capital market research, accounting, auditing, banking etc. Registered/Enrolled students of any accounting and finance professional institute (such as CFA, ICAB, ICMAB, ACCA, CIMA, CPA,ICSB etc.) will also get preference. For foreign degrees, equivalence certificate from the University Grants Commission of Bangladesh has to be provided. All applicants must appear in a written test, followed by a viva-voce for those who pass the written test. The final score for selection will be prepared considering the performance in the written test, viva-voce, previous academic records, and relevant experience. Selections will be made based on the combined score. Members of any accounting and finance profession like CFA, ICAB, ICMAB, ACCA, CMA, CPA, ICSB, etc. and those having GMAT score of at least 500 or GRE score of at least 300 will be eligible for direct admission (Subject to satisfactory appearance in the viva-voce).</p>\r\n</div>\r\n</div>\r\n</div>', 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, '2023-06-23 12:33:31', '2023-11-19 08:09:15'),
('687520975', '688233618', 'null', 'assets/frontend/images/courses/discovery 1.png', 'Data Mining', '12 May - 3 Nov 2023', '24', 'Sunday - 6:00 PM - 9:00 PM Tuesday - 6:00 PM - 9:00 PM Thursday - 6:00 PM - 9:00 PM', '76', '10', '12 May 2023', '2023-05-12', '2023-11-03', 'Bangladesh Institute of Capital Market BGIC Tower (Ground- 3rd Floor and 8th-9th),34, Topkhana Road, Dhaka- 1000. Contact No- +88029588506, 9588507', 'The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient.', 'Y', 'Y', 'Details', '<h3>About</h3>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market (BICM) was established as a institution for imparting practical capital market education and training on July 24, 2008. The Institute is gradually emerging as a center of excellence for professional development of capital market intermediaries and full spectrum of market professionals through disseminating recent and updated theoretical and practical knowledge.</p>\r\n\r\n<p><u><strong>Background of BICM</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute fulfilled the long felt demand of market intermediaries as well as development partners. The idea was first mooted by Chittagong Stock Exchange and a feasibility study was carried out under World Bank managed multi-grant TA, FIRST initiative. The expatriate consultants recommended setting-up a &ldquo;Securities Institute&rdquo; in Bangladesh for bridging the gap between the competence and skills required and exist.Later, UNDP as well as ADB under their respective TA recommended for establishment of a &ldquo;Securities Industries Development Center&rdquo; and a &ldquo;National Capital Market Institute&rdquo; autonomous in nature.</p>\r\n\r\n<p><u><strong>Board Members and Manpower</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">In 2010, the government approved organogram of BICM that has similarity to a public university, at small scale, having 97 employees including 27 faculty members. In 2013, the government also approved the compensation structure of the institute. Under the leadership of Professor Shibli Rubayat ul Islam, Chairman, Bangladesh Securities and Exchange Commission (BSEC) [Contact- Tel: +88-02-9563713], the Institute has got a competent Board of Directors with a wide range of expertise representing cross-section of stakeholders that includes government, regulator, market intermediaries, exchanges, academia, and different professional bodies.</p>\r\n\r\n<p style=\"text-align:justify\">A total of 60 staff members including 12 Faculty Members and 17 officers have been working in the Institute. Executive President is heading the management of the&nbsp; Institute. Contact &ndash; Tel: +88-02-9515771 or ep@bicm.ac.bd&nbsp;.</p>\r\n\r\n<p><u><strong>Infrastructural Facilities</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is housed at 18,508 sqft. area in the commercial hub of the city. BICM is equipped with state of the art education and professional training facilities as well as advanced learning amenities to arrange and organize national and international training programs, workshops, seminars and conferences. It has the capacity to accommodate 250 participants at one go in its class rooms of different capacities, conference room and computer lab. It also has break-away-session rooms and digital library for brain storming and carrying out research.</p>\r\n\r\n<p style=\"text-align:justify\">To augment the &lsquo;Vision 2021&rsquo;, The Institute is equipped with latest ICT facilities. The audio-visual and video conferencing facilities with dedicated 20 mbps fiber optics internet connection will enable the institute to establish its linkage with institutions from home and abroad in disseminating knowledge.</p>\r\n\r\n<p style=\"text-align:justify\">BICM has the unique and enriched library of the country that is the repository of business, finance, trade, banking, insurance, ICT, law and wide array of financial and other titles. To date, BICM has stocked over 10,000 physical books and in process of procuring e- books, videos and other learning and reference materials. Obtaining the permission, the Institute is also contemplating to hook up its server with the e- library of University Grant Commission, Bangladesh.</p>\r\n\r\n<p><u><strong>Financing</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">Since FY 2009-10, the Government of the People&rsquo;s Republic of Bangladesh has been continuously financing BICM. From this funding, the cost of infrastructural facilities and operational expenses of the institute has been met.</p>\r\n\r\n<p><u><strong>Academic Activities of BICM</strong></u></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong><em>Inauguration of Academic Activities </em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">On 09 December 2010, Mr. Abul Maal Abdul Muhith, the then Minister, Ministry of Finance, Government of the People&rsquo;s Republic of Bangladesh inaugurated the academic activities of BICM. The government has been extending its unflinching support to elevate the institute as a center of excellence.</p>\r\n\r\n<p><u><strong><em>Postgraduate Diploma Course</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM started its flagship &ldquo;Postgraduate Diploma Program in Capital Market&rdquo; in January 2015 for existing professionals of the capital market and those who aspire to start their career in the capital market.</p>\r\n\r\n<p><strong><em><u>Investors&rsquo; Education Program</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">To fulfill the commitment of the government of increasing awareness of general investors, BICM has been conducting the &lsquo;Investors Education Program&rsquo; free of cost. General investors have been encouraged to assess the financial health of the listed companies prior to making an investment. To date, 2900 existing investors and future/ potential investors have been trained on the basics of capital market investment. Considering the increasing demand of the investors, BICM has started offering four investor awareness programs monthly instead of two.</p>\r\n\r\n<p><u><strong><em>Specialized Courses for professionals and Market Intermediaries</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To date, BICM has conducted a handsome number of &ldquo;Certification Programs&rdquo; of different duration (two weeks to six weeks long). Participants have been trained and certified in the areas of Securities Laws, Corporate Governance, Financial Statements Analysis, Technical Analysis, Portfolio Management, Equity Valuation, Legal Drafting, International Financial Reporting Standard, Capital Raising and Investment in the Capital Market, Investment Analysis and Securities Valuation, Trading Software, Financial Journalism, etc.</p>\r\n\r\n<p><u><strong>Future Activities of the Institute</strong></u></p>\r\n\r\n<p><u><strong><em>Training on New Products of Capital Market</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To implement the recent reforms taken by the Government as to allowing trading of derivatives, commodities, and exchange traded fund, BICM is designing curricula and training programs on the same.</p>\r\n\r\n<p><u><strong><em>Masters Program</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute expects to start the &ldquo;Master of Applied Finance and Capital Market&rdquo; in mid 2021. The program is affiliated with the Faculty of Business Studies, University of Dhaka. Admission announcement will be made soon and the classes of the first batch of the program will tentatively start in July 2021.</p>\r\n\r\n<p style=\"text-align:justify\">To know more about the program, please contact the Registrar&rsquo;s Office of BICM.&nbsp;</p>\r\n\r\n<p><strong><em><u>Mandatory Licensing Examination</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">With the help of expatriate consultant engaged under ADB- TA project, BICM has designed course materials for &ldquo;Mandatory Licensing Examination for Securities Market Intermediaries&rdquo;. If authorized by BSEC, the institute will impart training and conduct examination on the same.</p>\r\n\r\n<p><u><strong><em>Distance Learning Programs</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is also preparing and equipping itself to start &ldquo;Distance Learning Programs&rdquo; at school and college level for wide dissemination of capital market knowledge at national sphere.</p>\r\n\r\n<p><u><strong><em>Research and Knowledge Management Activities</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">There is paucity of research, case study and documentation on financial market in general and capital market in particular. BICM will put maximum emphasis and invest time, energy and efforts in research and knowledge management activities to bridge the gap. These activities of BICM will be aiming at setting standards, preparing best-practice examples, assisting policy formulation and preparing guidelines to help the stakeholders. The research outcomes, lessons of cross jurisdictional study, policy papers and recommendations will facilitate the government and policy makers in devising policy, regulator in formulating rules and professionals in implementation and practice.</p>\r\n\r\n<p><strong><u>Co-operation from Development Partners</u></strong></p>\r\n\r\n<p style=\"text-align:justify\">Since there is dearth of knowledge and expertise as of new instruments viz. derivatives, futures, commodities, exchange traded funds (ETFs), structured products, state of the art securities and settlement system, cooperation of development partners is of utmost importance to equip faculty members. This co-operation, in the form of technical assistance and fielding capital market experts, will enhance and elevate the knowledge and expertise of the faculty members for enabling them to impart quality education and training.</p>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market, with the policy direction of Bangladesh government and under the leadership of BSEC, is confident to play a catalytic role in equipping a fair, transparent, informed and vibrant capital market; and poised to be a regional hub of excellence in education, research and knowledge management in the days ahead.</p>', 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, '2023-06-23 17:49:34', '2023-12-11 09:33:37'),
('694410248', '698512727', 'null', 'assets/frontend/images/courses/PGDCM 24 Batch_27_07_23.jpg', 'PGDCM – EVENING', NULL, NULL, '28 May 2023', '9 MONTHS', '33000', NULL, NULL, NULL, NULL, NULL, 'Y', 'Y', 'About', '<p>Introducing the first of its kind Postgraduate Diploma in Capital Market (PGDCM) in Bangladesh</p>\r\n\r\n<p>Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.</p>\r\n\r\n<p>BICM is offering PGDCM for the market intermediaries, full spectrum of market professionals and graduates who aspire to pursue career in the capital market. The diploma will provide a blend of theoretical and practical knowledge on market mechanism, legal framework, new instruments and techniques.</p>', 'Y', 'Pedagogy', '<h3 style=\"text-align:justify\"><strong>APPLICANT&rsquo;S ELIGIBILITY:</strong></h3>\r\n\r\n<h3 style=\"text-align:justify\"><span style=\"font-family:var( --e-global-typography-primary-font-family ),sans-serif; font-size:13px\">GRADUATION OR ITS EQUIVALENT IN ANY DISCIPLINE AND SATISFACTORY PERFORMANCE IN THE ADMISSION TEST.</span></h3>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<br />\r\n<strong>SELECTION PROCEDURE:</strong></p>\r\n\r\n<p style=\"text-align:justify\">Written Test (On English, Mathematics, Analytical Ability and General Knowledge) and Viva-Voce.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Number of seats:</strong><br />\r\n45 (Including 20% Institutional quota)</p>', 'Y', 'Course Structure', '<p style=\"text-align:justify\"><span style=\"font-family:var( --e-global-typography-text-font-family ),sans-serif\">The PGDCM program consists of 8 courses (24 credit hours) The program is divided into two-semester. Four courses are offered in each trimester as follows:</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\"><strong><u>Level 1 / Semester 1</u></strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\">Code: D101- Financial Markets in Bangladesh;</span></li>\r\n	<li><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\">Code: D102- Managerial Finance;</span></li>\r\n	<li><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\">Code: D103- Basic Statistics;</span></li>\r\n	<li>Code: D104- Financial Accounting.</li>\r\n</ul>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<h2 style=\"text-align:justify\"><u>Level 2/ Semester 2</u></h2>\r\n\r\n<ul>\r\n	<li>Code: D201- Securities Analysis and Portfolio Management;&nbsp;</li>\r\n	<li>Code: D202- Investment Banking;</li>\r\n	<li>Code: D203- Capital Market Operations;</li>\r\n	<li>Code: D204- Securities Laws.</li>\r\n	<li>&nbsp;</li>\r\n</ul>', 'N', NULL, NULL, 'N', NULL, NULL, 'Y', 'Fees and Charges', '<table class=\"table table-bordered table-striped\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>DURATION: 9 MONTHS</strong></td>\r\n			<td><strong>24 CREDIT HOURS</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>PROGRAM FEE: BDT 33,000/-</strong></td>\r\n			<td><strong>8 COURSES&nbsp;</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<div class=\"table-responsive\">\r\n<table class=\"table table-bordered table-striped\">\r\n	<thead>\r\n		<tr>\r\n			<th><u>Break Down of Semester Fee (All amounts in BDT)</u></th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>1st Semester</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Admission Fee</td>\r\n			<td>5,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Course Fee (4 Courses)</td>\r\n			<td>12,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lab Fee</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Library</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Total fee for 1st semester</strong></td>\r\n			<td><strong>19,000</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>2nd Semester</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Course Fee (4 Courses)</td>\r\n			<td>12,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lab Fee</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Library</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Total fee for 2nd semester</strong></td>\r\n			<td><strong>14,000</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Total fee for the PGDCM Program</strong>&nbsp;(effective from 17th batch onward)</td>\r\n			<td>&nbsp;<strong>33,000</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>', 'Y', 'Download', '<p style=\"text-align:justify\"><strong><a href=\"http://www.bicm.ac.bd/payment\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; font-size: 13px; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217); box-shadow: none;\" target=\"_blank\">Apply online</a></strong><br />\r\nApplication Form&nbsp;:&nbsp;<a href=\"https://bicm.ac.bd/wp-content/uploads/2019/11/Application_Form_PGDCM_Evening.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217); box-shadow: none;\" target=\"_blank\">Downlo</a><a href=\"https://bicm.ac.bd/wp-content/uploads/2019/07/Application_Form_PGDCM_Evening.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217); box-shadow: none;\" target=\"_blank\">ad</a></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:var( --e-global-typography-text-font-family ),sans-serif\">Application fee of Tk. 500/- (nonrefundable) to be paid in the form of a Pay Order drawn in favor of the&nbsp;</span><span style=\"font-family:var( --e-global-typography-primary-font-family ),sans-serif\">Bangladesh Institute of Capital Market (BICM).</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-family:var( --e-global-typography-primary-font-family ),sans-serif\">OR</span></p>\r\n\r\n<p style=\"text-align:justify\">Tk. 500/- (nonrefundable) if you are&nbsp;<a href=\"http://www.bicm.ac.bd/payment\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217); box-shadow: none;\">applying online</a>.</p>\r\n\r\n<p style=\"text-align:justify\">Last date of application for intake of 23rd Batch:&nbsp;<strong>10 May 2023</strong></p>\r\n\r\n<p style=\"text-align:justify\">Admission test:&nbsp;<strong>12 May 2023</strong><br />\r\nClasses start:&nbsp;<strong>28 May</strong><strong>&nbsp;2023</strong></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><strong>For Further Details:</strong></p>\r\n\r\n<p style=\"text-align:justify\">PGDCM Brochure&nbsp;&nbsp;<a href=\"https://bicm.ac.bd/wp-content/uploads/2011/04/PGDCM-brochure-20151209.pdf\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217); box-shadow: none;\" target=\"_blank\">(</a><a href=\"https://bicm.ac.bd/wp-content/uploads/2021/05/PGDCM-Brochure.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217); box-shadow: none;\">Download</a><a href=\"https://bicm.ac.bd/wp-content/uploads/2011/04/PGDCM-brochure-20151209.pdf\" rel=\"noopener noreferrer\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217); box-shadow: none;\" target=\"_blank\">)</a><br />\r\nBICM Brochure (<a href=\"https://bicm.ac.bd/wp-content/uploads/2016/07/BICM-Brochure-May-2016.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217); box-shadow: none;\" target=\"_blank\">Download</a>)</p>\r\n\r\n<h4 style=\"text-align:justify\">For support related to admission, please&nbsp;<strong>contact Registrar&rsquo;s Office</strong>:</h4>\r\n\r\n<div style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; outline: none; font-family: Tahoma, Geneva, sans-serif; text-align: justify;\">&nbsp;</div>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market (BICM)<br />\r\n34, Topkhana Road,&nbsp;Dhaka &ndash; 1000 (8th Floor)<br />\r\nPhone: +8802223358506 or +880223358836, X 401, 110, 407, +8802223358830 (Direct), 01572-112496, (9:00 AM to 4:00 PM, Sunday to Thursday)<br />\r\nE-mail: imran@bicm.ac.bd, info@bicm.ac.bd</p>', '2023-09-11 11:30:47', '2023-11-19 08:09:40'),
('698510242', '688233618', 'null', 'assets/frontend/images/courses/4.png', 'test', '29 Oct To 30 Nov 2023', '48', '29 Oct To 30 Nov 2023', '144', '35000', '29 Oct 2023', '2023-10-29', '2023-11-30', 'Bangladesh Institute of Capital Market BGIC Tower (Ground- 3rd Floor and 8th-9th),34, Topkhana Road, Dhaka- 1000. Contact No- +88029588506, 9588507', 'The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient.', 'Y', 'Y', 'Description', '<p>asdf adsf adf adsf&nbsp;</p>', 'Y', 'Pedagogy', '<p>asdfads fasdf asdf</p>', 'Y', 'Course Structure', '<p>ad adf adsf&nbsp;</p>', 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, '2023-10-28 22:24:01', '2023-11-19 08:09:55'),
('698901841', '688233618', 'null', 'assets/frontend/images/courses/Big-Data-Analytics.webp', 'Big-Data-Analytics for Capital Market', 'From 15 Nov 23 to 15th December-23', '12', 'Each Friday & Saturday From 6:00PM', '1 Month', '15000', '15 Nov 23', '2023-11-15', '2023-12-15', 'Bangladesh Institute of Capital Market BGIC Tower (Ground- 3rd Floor and 8th-9th),34, Topkhana Road, Dhaka- 1000. Contact No- +88029588506, 9588507', 'The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient.', 'Y', 'Y', 'About', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'Y', 'Pedagogy', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', 'Y', 'Course Structure', '<p><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>', 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, '2023-11-02 11:10:40', '2023-11-19 08:10:11'),
('702291010', '702288703', 'null', 'assets/frontend/images/courses/Big-Data-Analytics.webp', 'qwe', '2', NULL, NULL, '12', '10', '25 dec 2023', '2023-12-28', '2023-12-31', 'bicm', 'qwert', 'Y', 'Y', NULL, '<p>ergertger</p>', 'Y', 'asdfr', '<p>tge trger tg</p>', 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, 'N', NULL, NULL, '2023-12-11 10:36:49', '2023-12-11 10:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `course_settings`
--

CREATE TABLE `course_settings` (
  `course_settings_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `short_description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course_settings`
--

INSERT INTO `course_settings` (`course_settings_id`, `banner`, `tittle`, `short_description`, `created_at`, `updated_at`) VALUES
('687501152', 'assets/frontend/images/coursePage/about2.png', 'Certificate courses and training', 'The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.', '2023-06-23 06:19:11', '2023-06-23 06:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `events_id` char(10) NOT NULL,
  `page_id` char(10) DEFAULT '',
  `image` text NOT NULL,
  `tittle` char(150) NOT NULL,
  `schedule` char(100) DEFAULT NULL,
  `month` char(9) DEFAULT '',
  `year` char(4) DEFAULT '',
  `duration` char(100) DEFAULT NULL,
  `amount` char(18) DEFAULT NULL,
  `author` varchar(150) DEFAULT NULL,
  `shortDescription` text,
  `status` char(1) NOT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text,
  `pedagogyShow` char(1) DEFAULT NULL,
  `pedagogy` text,
  `courseStructureShow` char(1) DEFAULT NULL,
  `courseStructure` text,
  `teachingMethodsShow` char(1) DEFAULT NULL,
  `teachingMethods` text,
  `downloadShow` char(1) DEFAULT NULL,
  `download` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `page_id`, `image`, `tittle`, `schedule`, `month`, `year`, `duration`, `amount`, `author`, `shortDescription`, `status`, `aboutShow`, `about`, `pedagogyShow`, `pedagogy`, `courseStructureShow`, `courseStructure`, `teachingMethodsShow`, `teachingMethods`, `downloadShow`, `download`, `created_at`, `updated_at`) VALUES
('687509889', '688233822', 'assets/frontend/images/events/argument-3.png', 'Admission test result of Spring 2023 (2nd batch) of the MAFCM program', '3 Nov 2023', 'November', '2023', '10:00pm', NULL, 'Imtiaz', 'Understanding your vision means a lot to us. So, we start with getting the sense of the project, its dynamics as well as technological requirements s and most importantly your demands and expectations to perfectly outline the structure, specifications and probable duration of your project.', 'Y', 'Y', '<div class=\"tab-pane row active\" id=\"about\">\r\n<div class=\"row\">\r\n<div class=\"blog_single-part\">\r\n<h2>About</h2>\r\n\r\n<p>The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.</p>\r\n\r\n<p>Nonetheless, in Bangladesh, the need for skilled professionals in the financial market in general and the capital market, in particular, has been on the rise. The MAFCM program of BICM, with its world-class curriculum, will sharpen a student&rsquo;s required theoretical, quantitative, and technical skills by providing a blend of rigorous academic and practical application. Hence, the program is expected to bridge the long-felt gap between the skills required and those existing in this dynamic field of financial markets, especially the capital market.</p>\r\n\r\n<p>New innovations in the applications of finance are making it crucial for stakeholders in the industry to keep pace with these developments. BICM is aiming to create the best-equipped financial managers in the country with this uniquely designed program. Those aspiring to excel in a career in finance, banking, merchant banking, asset and funds management, financial analysis, and financial regulation will experience assimilation of essential knowledge and skills in an increasingly challenging financial environment.</p>\r\n</div>\r\n\r\n<div class=\"blog_single-part\">\r\n<h2>The objective of the MAFCM Program</h2>\r\n\r\n<p>BICM is offering the &lsquo;Master of Applied Finance and Capital Market&rsquo; (MAFCM) to strengthen the Bangladesh capital market through elevating the knowledge of stakeholders. The capital market is dynamic and is evolving over time both locally and globally. One must be competent enough to excel in the field of capital market with the required set of management, mathematical and technical skills. The MAFCM program is designed to inculcate these skills in students so that they can cater to the needs of competent financial managers.</p>\r\n\r\n<h2>Minimum Credit Requirements</h2>\r\n\r\n<p>The minimum credit requirement for obtaining the MAFCM degree is 51 (fifty-one). Of the total required credits, 48 credits are to be completed as course work and 3 credits are to be earned from project work.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Semesters</h2>\r\n\r\n<p>There shall be two semesters in a calendar year. The Spring semester (January &ndash; June) and Summer semester (July &ndash; December). The Academic Year is the same as the calendar year.</p>\r\n\r\n<h2>Admission/Eligibility Criteria</h2>\r\n\r\n<p>The minimum academic requirement for admission into the program is a 4-year Bachelor&rsquo;s degree (or equivalent) from a recognized institution having minimum 2nd class/division, or Master&rsquo;s degree in case of Bachelor&rsquo;s degree (or equivalent) with a duration of less than 4 years from a recognized institution, having minimum 2nd class/division at Master level. Preference will be given to those having experience in the fields of finance, capital market operations, capital market regulations, capital market policy formulation, capital market research, accounting, auditing, banking etc. Registered/Enrolled students of any accounting and finance professional institute (such as CFA, ICAB, ICMAB, ACCA, CIMA, CPA,ICSB etc.) will also get preference. For foreign degrees, equivalence certificate from the University Grants Commission of Bangladesh has to be provided. All applicants must appear in a written test, followed by a viva-voce for those who pass the written test. The final score for selection will be prepared considering the performance in the written test, viva-voce, previous academic records, and relevant experience. Selections will be made based on the combined score. Members of any accounting and finance profession like CFA, ICAB, ICMAB, ACCA, CMA, CPA, ICSB, etc. and those having GMAT score of at least 500 or GRE score of at least 300 will be eligible for direct admission (Subject to satisfactory appearance in the viva-voce).</p>\r\n</div>\r\n</div>\r\n</div>', 'N', NULL, 'N', NULL, 'N', NULL, 'N', NULL, '2023-06-23 08:44:48', '2023-07-08 18:26:15'),
('693124137', '688233822', 'assets/frontend/images/events/MAFCM_WebsiteBanner_summer-2023.jpg', 'DMISSION TEST RESULT SUMMER 2021 PUBLISHED OF THE FIRST BATCH OF THE MASTER OF APPLIED FINANCE AND CAPITAL MARKET(MAFCM) PROGRAM', 'SEPTEMBER 8, 2022', 'September', '2022', '5 HOURS', NULL, 'BICM', 'DMISSION TEST RESULT SUMMER 2021 PUBLISHED OF THE FIRST BATCH OF THE MASTER OF APPLIED FINANCE AND CAPITAL MARKET(MAFCM) PROGRAM', 'Y', 'N', NULL, 'N', NULL, 'N', NULL, 'N', NULL, 'N', NULL, '2023-08-27 08:15:36', '2023-10-17 15:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `events_settings`
--

CREATE TABLE `events_settings` (
  `events_settings_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `short_description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events_settings`
--

INSERT INTO `events_settings` (`events_settings_id`, `banner`, `tittle`, `short_description`, `created_at`, `updated_at`) VALUES
('687509125', 'assets/frontend/images/eventPage/about3.png', 'New genration programing', 'The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications.', '2023-06-23 08:32:04', '2023-06-23 08:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `ev_form_groups`
--

CREATE TABLE `ev_form_groups` (
  `id` char(12) NOT NULL DEFAULT '',
  `name` char(255) CHARACTER SET utf8mb4 NOT NULL,
  `status` char(1) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ev_form_groups`
--

INSERT INTO `ev_form_groups` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
('0380689861', 'Contact with us', 'Y', '2023-07-20 19:47:10', '2023-07-20 19:47:10'),
('1053500961', 'Personal Information', 'Y', '2023-07-23 01:18:21', '2023-07-23 01:18:21'),
('5225500961', 'Employment Information (পেশা/চাকুরির তথ্য)', 'Y', '2023-07-23 01:47:05', '2023-07-23 01:47:05'),
('4335172961', 'Research Form', 'Y', '2023-08-22 20:42:14', '2023-08-23 10:24:47'),
('7635172961', 'Are you applying as a Research Organization (RO) or Independent Research Team?', 'N', '2023-08-22 20:42:47', '2023-09-02 00:22:49'),
('0674150071', 'Choose Program Type', 'N', '2023-11-20 21:12:40', '2023-12-17 05:54:01'),
('2695370071', 'Last Academic Degree Obtained (শিক্ষাগত যোগ্যতা)', 'Y', '2023-11-23 10:39:22', '2023-11-23 10:39:22'),
('3026370071', 'Experience/Current Employment Information (পেশা/চাকুরির তথ্য)', 'Y', '2023-11-23 10:43:23', '2023-11-23 10:43:23'),
('5546370071', 'Pay Online', 'Y', '2023-11-23 10:47:35', '2023-11-23 10:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `ev_form_group_fields`
--

CREATE TABLE `ev_form_group_fields` (
  `id` char(12) NOT NULL DEFAULT '0',
  `group_id` char(12) NOT NULL DEFAULT '',
  `flabel` char(255) CHARACTER SET utf8mb4 NOT NULL,
  `fname` char(255) NOT NULL DEFAULT '',
  `fid` char(255) NOT NULL DEFAULT '',
  `ftype` char(2) NOT NULL DEFAULT '' COMMENT 'FT=Text, FE=Email, FP=Password, FN=Number, TA=Textarea, FR=Radio, FC=Checkbox, FS=Select/Dropdown',
  `foption_value` text CHARACTER SET utf8mb4 NOT NULL,
  `fdefault_value` char(255) NOT NULL DEFAULT '',
  `fmax_char` char(5) NOT NULL DEFAULT '',
  `forder` int(2) DEFAULT NULL,
  `frequired` char(1) NOT NULL DEFAULT '',
  `fclass` char(255) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ev_form_group_fields`
--

INSERT INTO `ev_form_group_fields` (`id`, `group_id`, `flabel`, `fname`, `fid`, `ftype`, `foption_value`, `fdefault_value`, `fmax_char`, `forder`, `frequired`, `fclass`, `created_at`, `updated_at`) VALUES
('03806898610', '0380689861', 'Name', 'customerName', 'customer-name', 'FT', '', '', '50', 1, '1', 'form-control', '2023-07-21 01:47:10', NULL),
('03806898611', '0380689861', 'Email', 'customerEmail', 'customer-email', 'FE', '', '', '50', 2, '1', 'form-control', '2023-07-21 01:47:10', NULL),
('03806898612', '0380689861', 'Message', 'customerMessage', 'customer-message', 'TA', '', '', '400', 3, '1', 'form-control', '2023-07-21 01:47:10', NULL),
('13599500717', '1053500961', 'Contact Number', 'mobile', 'student-mobile', 'FT', '', '', '11', 8, '1', 'col-lg-6', '2023-11-22 02:45:31', NULL),
('13599500716', '1053500961', 'Country', 'Country', 'Country', 'FS', 'Bangladesh##Bangladesh', '', '', 7, '1', 'col-lg-6', '2023-11-22 02:45:31', NULL),
('13599500715', '1053500961', 'City (শহর)', 'city', 'city', 'FT', '', '', '20', 6, '1', 'col-lg-6', '2023-11-22 02:45:31', NULL),
('35610309615', '5225500961', '', 'duration1', 'duration1', 'FT', '', '', '100', 6, '0', 'col-lg-4', '2023-07-25 22:14:13', NULL),
('35610309614', '5225500961', '', 'organization1', 'organization1', 'FT', '', '', '100', 5, '0', 'col-lg-4', '2023-07-25 22:14:13', NULL),
('35610309613', '5225500961', '', 'position1', 'position1', 'FT', '', '', '100', 4, '0', 'col-lg-4', '2023-07-25 22:14:13', NULL),
('35610309612', '5225500961', 'Duration (সময়সীমা)', 'duration', 'duration', 'FT', '', '', '100', 3, '0', 'col-lg-4', '2023-07-25 22:14:13', NULL),
('35610309611', '5225500961', 'Organization (প্রতিষ্ঠান)', 'organization', 'organization', 'FT', '', '', '100', 2, '0', 'col-lg-4', '2023-07-25 22:14:13', NULL),
('35610309610', '5225500961', 'Position (পদ)', 'position', 'position', 'FT', '', '', '100', 1, '0', 'col-lg-4', '2023-07-25 22:14:13', NULL),
('13599500714', '1053500961', 'Postcode (পোস্টকোড )', 'postCode', 'postCode', 'FT', '', '', '4', 5, '1', 'col-lg-6', '2023-11-22 02:45:31', NULL),
('99502739613', '7635172961', 'E-mail address', 'email', 'emailAddress', 'FE', '', '', '80', 4, '0', 'col-lg-12', '2023-09-03 11:56:39', NULL),
('99502739612', '7635172961', 'Mailing Address', 'mailAddress', 'mailAddress', 'FT', '', '', '80', 3, '0', 'col-lg-12', '2023-09-03 11:56:39', NULL),
('99502739611', '7635172961', 'Name of the Organization', 'organizationName', 'organizationName', 'FT', '', '', '80', 2, '0', 'col-lg-12', '2023-09-03 11:56:39', NULL),
('99502739610', '7635172961', 'Team', 'team', 'team', 'FR', 'ro##Research Organization (RO),irt##Independent Researcher (IR)/Independent Research Team (IRT)', '', '', 1, '1', 'col-lg-12', '2023-09-03 11:56:39', NULL),
('77605839614', '4335172961', 'E-mail address', 'emailaddress', 'emailaddress', 'FE', '', '', '80', 5, '0', 'col-md-6 form-control', '2023-09-05 00:04:37', NULL),
('77605839613', '4335172961', 'Mailing Address', 'mailingAddress', 'MailingAddress', 'FT', '', '', '80', 4, '0', 'col-md-6 form-control', '2023-09-05 00:04:37', NULL),
('77605839612', '4335172961', 'Name of the Organization', 'NameOrganization', 'NameOrganization', 'FT', '', '', '80', 3, '0', 'col-md-6 form-control', '2023-09-05 00:04:37', NULL),
('77605839611', '4335172961', 'Independent Researcher (IR)/Independent Research Team (IRT)', 'independentResearcher', 'independentResearcher', 'FR', 'ir#independentResearcher', '', '', 2, '0', 'col-md-6', '2023-09-05 00:04:37', NULL),
('77605839610', '4335172961', 'Research Organization (RO)', 'researchOrganization', 'researchOrganization', 'FR', 'ro##Research', '', '', 1, '0', 'col-md-6', '2023-09-05 00:04:37', NULL),
('99502739614', '7635172961', 'Contact Number', 'contactNumber', 'contactNumber', 'FT', '', '', '11', 5, '0', 'col-lg-12', '2023-09-03 11:56:39', NULL),
('99502739615', '7635172961', 'Academic Institution', 'academicInstitution', 'academicInstitution', 'FR', 'ai#AcademicInstitution', '', '', 0, '0', 'form-control', '2023-09-03 11:56:39', NULL),
('14429720710', '0674150071', 'Program Type', 'programType', 'programType', 'FR', 'Certification Program##Certification Program,Certificate Course##Certificate Course', '', '', 1, '1', 'col-lg-6', '2023-12-17 05:54:01', NULL),
('13599500713', '1053500961', 'Address (বর্তমান ঠিকানা)', 'address', 'address', 'TA', '', '', '250', 4, '1', 'col-lg-6', '2023-11-22 02:45:31', NULL),
('13599500712', '1053500961', 'Gender (লিঙ্গ)', 'gender', 'gender', 'FR', 'Male##Male / পুরুষ,Female##Female / মহিলা', '', '', 3, '1', 'col-lg-6', '2023-11-22 02:45:31', NULL),
('13599500711', '1053500961', 'Date of Birth (জন্ম তারিখ)', 'dob', 'dob', 'FC', '', '', '10', 2, '1', 'col-lg-6', '2023-11-22 02:45:31', NULL),
('13599500710', '1053500961', 'Name(English)', 'studentName', 'student-name', 'FT', '', '', '50', 1, '1', 'col-lg-6', '2023-11-22 02:45:31', NULL),
('13599500718', '1053500961', 'Email', 'email', 'customer-email', 'FE', '', '', '80', 9, '1', 'col-lg-6', '2023-11-22 02:45:31', NULL),
('91749900713', '2695370071', 'Area / Major', 'area', 'area', 'FT', '', '', '50', 4, '1', 'col-lg-6', '2023-11-26 10:31:59', NULL),
('91749900712', '2695370071', 'Passing Year (পাশের সন)', 'passingYear', 'passingYear', 'FT', '', '', '4', 3, '1', 'col-lg-6', '2023-11-26 10:31:59', NULL),
('91749900711', '2695370071', 'Institution (প্রতিষ্ঠান)', 'institution', 'institution', 'FT', '', '', '80', 2, '1', 'col-lg-6', '2023-11-26 10:31:59', NULL),
('91749900710', '2695370071', 'Examination (পরীক্ষা)', 'examinationType', 'examinationType', 'FS', 'SSC##SSC,HSC##HSC,BSc##BSc,MSc##MSc', '', '', 1, '1', 'col-lg-6', '2023-11-26 10:31:59', NULL),
('30263700710', '3026370071', 'Experience (অভিজ্ঞতা)', 'experience', 'experience', 'FT', '', '', '20', 1, '0', 'col-lg-6', '2023-11-23 10:43:23', NULL),
('30263700711', '3026370071', 'Position (পদ)', 'position', 'position', 'FT', '', '', '50', 2, '0', 'col-lg-6', '2023-11-23 10:43:23', NULL),
('30263700712', '3026370071', 'Organization (প্রতিষ্ঠান)', 'organization', 'organization', 'FT', '', '', '80', 3, '0', 'col-lg-6', '2023-11-23 10:43:23', NULL),
('30263700713', '3026370071', 'Duration (সময়সীমা)', 'duration', 'duration', 'FT', '', '', '80', 4, '0', 'col-lg-6', '2023-11-23 10:43:23', NULL),
('16663700710', '5546370071', '', 'onlinePay', 'onlinePay', 'FR', 'yes##Local or International Debit/Credit Card - Visa/Master/Amex or Nexus', '', '', 1, '1', 'col-lg-12', '2023-11-23 10:51:01', NULL),
('16663700712', '5546370071', 'The information provided in this application form is true. (এই আবেদনপত্রে প্রদানকৃত সকল তথ্য সত্য)', 'provideCorrectInfo', 'provideCorrectInfo', 'FK', '', '', '', 3, '1', 'col-lg-12', '2023-11-23 10:51:01', NULL),
('16663700711', '5546370071', 'By clicking Proceed, you will agree to our Terms & Condition', 'termCondition', 'termCondition', 'FK', '', '', '', 2, '1', 'col-lg-12', '2023-11-23 10:51:01', NULL),
('91749900714', '2695370071', 'Class / CGPA (বিভাগ/সিজিপিএ)', 'CGPA', 'CGPA', 'FT', '', '', '4', 5, '1', 'col-lg-6', '2023-11-26 10:31:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `form_data`
--

CREATE TABLE `form_data` (
  `form_id` varchar(20) NOT NULL,
  `student_id` varchar(20) DEFAULT NULL,
  `program_id` varchar(20) DEFAULT NULL,
  `page_id` varchar(20) DEFAULT NULL,
  `page_type` varchar(20) DEFAULT NULL,
  `form_group` varchar(255) DEFAULT NULL,
  `form_data` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_data`
--

INSERT INTO `form_data` (`form_id`, `student_id`, `program_id`, `page_id`, `page_type`, `form_group`, `form_data`, `created_at`, `updated_at`) VALUES
('692951771', NULL, 'contact', '692691571', 'common', NULL, '{\"program_id\":\"contact\",\"page_id\":\"692691571\",\"page_type\":\"common\",\"studentName\":null,\"fatherName\":null,\"motherName\":null,\"dob\":null}', '2023-08-25 08:22:50', '2023-08-25 08:22:50'),
('693559281', NULL, 'contact', '692691571', 'common', NULL, '{\"program_id\":\"contact\",\"page_id\":\"692691571\",\"page_type\":\"common\",\"studentName\":\"TTT\",\"fatherName\":\"FFF\",\"motherName\":\"MMM\",\"dob\":\"2023-09-01\",\"email\":\"bengals.mahi@gmail.com\",\"mobile\":\"01712890075\"}', '2023-09-01 09:08:00', '2023-09-01 09:08:00'),
('693559402', '693559401', '689143492', '688232887', 'master', NULL, '{\"studentName\":\"TTT\",\"fatherName\":\"FFF\",\"motherName\":\"MMM\",\"dob\":\"2023-09-01\",\"email\":\"bengals.mahi@gmail.com\",\"mobile\":\"01712890075\",\"position\":\"Managing Director\",\"organization\":\"Coderment Limited\",\"duration\":\"6 years\",\"position1\":null,\"organization1\":null,\"duration1\":null}', '2023-09-01 09:10:01', '2023-09-01 09:10:01'),
('694422487', '693716804', '687445735', '688232887', 'master', '[\"1053500961\",\"5225500961\"]', '{\"studentName\":\"imtiaz\",\"fatherName\":\"mostafizur rahman\",\"motherName\":\"moymuna khatun\",\"dob\":\"1990-12-11\",\"email\":\"mail4johny2@gmail.com\",\"mobile\":\"01687709333\",\"position\":null,\"organization\":null,\"duration\":null,\"position1\":null,\"organization1\":null,\"duration1\":null}', '2023-09-11 08:54:46', '2023-09-11 08:54:46'),
('694577969', NULL, 'contact', '691229634', 'common', NULL, '{\"program_id\":\"contact\",\"page_id\":\"691229634\",\"page_type\":\"common\",\"customerName\":null,\"customerEmail\":null,\"customerMessage\":null}', '2023-09-13 04:06:08', '2023-09-13 04:06:08'),
('696707058', '695048481', '687445735', '688232887', 'master', '[\"1053500961\",\"5225500961\"]', '{\"studentName\":\"Md Example\",\"fatherName\":\"Md Father Example\",\"motherName\":\"Mrs Mother Example\",\"dob\":\"2000-10-08\",\"email\":\"admin@bicm.com\",\"mobile\":\"01767886199\",\"position\":\"gyjgj\",\"organization\":\"gyjgyj\",\"duration\":\"Total Hours : 144\",\"position1\":null,\"organization1\":null,\"duration1\":null}', '2023-10-07 19:30:57', '2023-10-07 19:30:57'),
('700994570', '700994570', '687502012', '688233618', 'courses', '[\"0674150071\",\"1053500961\",\"2695370071\",\"3026370071\",\"5546370071\"]', '{\"programType\":\"Certification Program\",\"studentName\":\"Motiur Rahman\",\"dob\":\"2008-01-26\",\"gender\":\"Male\",\"address\":\"Dhaka\",\"postCode\":\"1000\",\"city\":\"Dhaka\",\"Country\":\"Bangladesh\",\"mobile\":\"01739449722\",\"email\":\"ahe.motiur@bicm.ac.bd\",\"examinationType\":\"SSC\",\"institution\":\"Dhaka\",\"passingYear\":\"2019\",\"area\":\"Dhaka\",\"CGPA\":\"3.26\",\"experience\":\"1\",\"position\":\"AHE\",\"organization\":\"BICM\",\"duration\":\"10\\/08\\/23\",\"onlinePay\":\"yes\",\"termCondition\":\"on\",\"provideCorrectInfo\":\"on\"}', '2023-11-26 10:29:29', '2023-11-26 10:29:29'),
('701060556', '700933852', '687502012', '688233618', 'courses', '[\"0674150071\",\"1053500961\",\"2695370071\",\"3026370071\",\"5546370071\"]', '{\"programType\":\"Certification Program\",\"studentName\":\"dfghdf\",\"dob\":\"2023-11-18\",\"gender\":\"Male\",\"address\":\"dfgdf\",\"postCode\":\"2312\",\"city\":\"fvbdf\",\"Country\":\"Bangladesh\",\"mobile\":\"01767886199\",\"email\":\"toushin.java@gmail.com\",\"examinationType\":\"SSC\",\"institution\":\"fgh\",\"passingYear\":\"2133\",\"area\":\"ghfg\",\"CGPA\":\"3.07\",\"experience\":\"5 years\",\"position\":\"ghfg\",\"organization\":\"fghfg\",\"duration\":\"36 month\",\"onlinePay\":\"yes\",\"termCondition\":\"on\",\"provideCorrectInfo\":\"on\"}', '2023-11-27 04:49:15', '2023-11-27 04:49:15'),
('702285444', '702285444', '687502012', '688233618', 'courses', '[\"0674150071\",\"1053500961\",\"2695370071\",\"3026370071\",\"5546370071\"]', '{\"programType\":\"Certificate Course\",\"studentName\":\"A\",\"dob\":\"2023-12-10\",\"gender\":\"Male\",\"address\":\"xZX\",\"postCode\":\"a\",\"city\":\"s\",\"Country\":\"Bangladesh\",\"mobile\":\"1\",\"email\":\"1@2.3\",\"examinationType\":\"MSc\",\"institution\":\"N\",\"passingYear\":\"2005\",\"area\":\"M\",\"CGPA\":\"3.20\",\"experience\":null,\"position\":null,\"organization\":null,\"duration\":null,\"onlinePay\":\"yes\",\"termCondition\":\"on\",\"provideCorrectInfo\":\"on\"}', '2023-12-11 09:04:03', '2023-12-11 09:04:03'),
('702286907', '702286418', '687520975', '688233618', 'courses', '[\"0674150071\",\"1053500961\",\"2695370071\",\"3026370071\",\"5546370071\"]', '{\"programType\":\"Certification Program\",\"studentName\":\"Motiur Rahman\",\"dob\":\"2009-10-11\",\"gender\":\"Male\",\"address\":\"Dhaka\",\"postCode\":\"1000\",\"city\":\"Dhaka\",\"Country\":\"Bangladesh\",\"mobile\":\"01739449722\",\"email\":\"ahe.motiur@bicm.ac.bd\",\"examinationType\":\"SSC\",\"institution\":\"Dhaka\",\"passingYear\":\"2006\",\"area\":\"Dhaka\",\"CGPA\":\"5.00\",\"experience\":null,\"position\":null,\"organization\":null,\"duration\":null,\"onlinePay\":\"yes\",\"termCondition\":\"on\",\"provideCorrectInfo\":\"on\"}', '2023-12-11 09:28:26', '2023-12-11 09:28:26');

-- --------------------------------------------------------

--
-- Table structure for table `home_overview`
--

CREATE TABLE `home_overview` (
  `home_overview_id` char(10) NOT NULL,
  `image` text,
  `tittle` char(150) NOT NULL,
  `shortDescription` text,
  `status` char(1) NOT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text,
  `url` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_overview`
--

INSERT INTO `home_overview` (`home_overview_id`, `image`, `tittle`, `shortDescription`, `status`, `aboutShow`, `about`, `url`, `created_at`, `updated_at`) VALUES
('687535444', 'assets/frontend/images/homePage/overview/blog1.png', 'Technology', 'High Time for Cyberlaw Enforcement and a Future of Work Strategy', 'Y', NULL, NULL, NULL, '2023-06-23 15:50:43', '2023-06-23 15:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `home_project`
--

CREATE TABLE `home_project` (
  `home_project_id` char(10) NOT NULL,
  `image` text,
  `tittle` char(150) NOT NULL,
  `shortDescription` text,
  `class` varchar(150) DEFAULT NULL,
  `status` char(1) NOT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text,
  `url` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_project`
--

INSERT INTO `home_project` (`home_project_id`, `image`, `tittle`, `shortDescription`, `class`, `status`, `aboutShow`, `about`, `url`, `created_at`, `updated_at`) VALUES
('687536753', 'assets/frontend/images/homePage/project/1.png', 'nexhex branding logo | ( N + H + Connection ) Modern Logo design', NULL, 'col-lg-8 col-md-8', 'Y', NULL, NULL, NULL, '2023-06-25 00:00:17', '2023-06-24 18:00:17'),
('687536803', 'assets/frontend/images/homePage/project/2.png', 'Music Apps for Likeopedia', NULL, 'col-lg-4 col-md-4', 'Y', NULL, NULL, NULL, '2023-06-25 00:00:36', '2023-06-24 18:00:36');

-- --------------------------------------------------------

--
-- Table structure for table `home_service`
--

CREATE TABLE `home_service` (
  `home_service_id` char(10) NOT NULL,
  `image` text NOT NULL,
  `tittle` char(150) NOT NULL,
  `shortDescription` text,
  `status` char(1) NOT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text,
  `url` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_service`
--

INSERT INTO `home_service` (`home_service_id`, `image`, `tittle`, `shortDescription`, `status`, `aboutShow`, `about`, `url`, `created_at`, `updated_at`) VALUES
('687534817', 'assets/frontend/images/homePage/service/artificial-intelligence.svg', 'ACADEMIC PROGRAM', 'AI-based algorithms & automated operation for scalable solutions.', 'Y', NULL, NULL, NULL, '2023-08-13 16:10:32', '2023-08-13 16:10:32'),
('687534892', 'assets/frontend/images/homePage/service/internet of things.svg', 'Integrity', 'IoT devices to make a real-time, efficient, and robust infrastructure.', 'Y', NULL, NULL, NULL, '2023-08-13 16:11:07', '2023-08-13 16:11:07'),
('691943132', 'assets/frontend/images/homePage/service/brain(1) 1.png', 'Right to Information', 'Flexible, scalable & integrated business solution.', 'Y', NULL, NULL, NULL, '2023-08-13 16:20:08', '2023-08-13 16:20:08'),
('691943738', 'assets/frontend/images/homePage/service/brain(1) 1.png', 'Official Orders and Forms', 'Increased business intelligence and dependable data analysis.', 'Y', NULL, NULL, NULL, '2023-08-13 16:22:17', '2023-08-13 16:22:17'),
('691944354', 'assets/frontend/images/homePage/service/brain(1) 1.png', 'Online Services', 'Secured data, automated key operations, detailed database, reduces cost, and increases efficiency.', 'Y', NULL, NULL, NULL, '2023-08-13 16:32:33', '2023-08-13 16:32:33'),
('691944378', 'assets/frontend/images/homePage/service/brain(1) 1.png', 'Annual Performance  Management', 'Greater & interactive user experience with increased efficiency.', 'Y', NULL, NULL, NULL, '2023-08-13 16:32:57', '2023-08-13 16:32:57'),
('691944404', 'assets/frontend/images/homePage/service/brain(1) 1.png', 'Grievance Redress  System', 'Simulated user experience that can be applied in education, entertainment, business, and many other sectors.', 'Y', NULL, NULL, NULL, '2023-08-13 16:33:23', '2023-08-13 16:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `home_settings`
--

CREATE TABLE `home_settings` (
  `home_settings_id` varchar(10) NOT NULL,
  `section_name` varchar(150) DEFAULT NULL,
  `banner` text,
  `popImage` text,
  `tittle` varchar(150) DEFAULT NULL,
  `description` text,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_settings`
--

INSERT INTO `home_settings` (`home_settings_id`, `section_name`, `banner`, `popImage`, `tittle`, `description`, `status`, `created_at`, `updated_at`) VALUES
('687532064', 'header', '[\"assets\\/frontend\\/images\\/homePage\\/MAFCM_WebsiteBanner_summer-2023.jpg\",\"assets\\/frontend\\/images\\/homePage\\/PGDCM 24 Batch_27_07_23 (1).jpg\",\"assets\\/frontend\\/images\\/homePage\\/WhatsApp Image 2021-05-12 at 7.56.02 PM.jpeg\"]', 'assets/frontend/images/homePage/MAFCM_WebsiteBanner_summer-2023.jpg', 'Your Trusted <span>Partner in Multiplatform</span> Development', NULL, 'Y', '2023-06-23 14:54:23', '2023-12-14 13:02:48'),
('687532333', 'service', '', NULL, '<h2>Our Service </h2>', 'We’re globally acclaimed in developing custom software that solves the problem of individuals. Utilizing the seamless technology with variations, we make our client cheerful.', 'Y', '2023-06-23 14:58:52', '2023-08-13 16:34:46'),
('687532384', 'overview', '', NULL, 'Overview BICM', 'We share experiences and stories of our journey! We share knowledge too! Go through to know deep.', 'Y', '2023-06-23 14:59:43', '2023-06-23 14:59:43'),
('687532433', 'why', '', NULL, 'Why BICM?', NULL, 'Y', '2023-06-23 15:00:32', '2023-06-23 15:00:32'),
('687532496', 'project', '', NULL, 'Our Recent Projects', 'Explore some of our recently finished projects.', 'Y', '2023-06-23 15:01:35', '2023-06-23 15:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `home_why`
--

CREATE TABLE `home_why` (
  `home_why_id` char(10) NOT NULL,
  `image` text,
  `tittle` char(150) NOT NULL,
  `shortDescription` text,
  `status` char(1) NOT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text,
  `url` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_why`
--

INSERT INTO `home_why` (`home_why_id`, `image`, `tittle`, `shortDescription`, `status`, `aboutShow`, `about`, `url`, `created_at`, `updated_at`) VALUES
('687535737', '', 'Robust Solution', 'We are optimizer of uncertainty', 'Y', 'Y', '<p>We don&rsquo;t count for chances. We&rsquo;re well researched and trained in optimizing industrial and individual system issues even they are in a degree of uncertainty. We apply robust solution method in solving any typical or unknown problem that arises.</p>', 'Robust', '2023-06-24 11:55:50', '2023-06-24 05:55:50'),
('687535777', '', 'Dedicated Resource', 'Skilled, dedicated team ready to go anytime!', 'Y', NULL, '<p>All of our resources including personnel, are specially picked and ready to serve the best to the clients on demand- anytime you want! We are skilled, experienced and technologically sound.</p>', 'Dedicated', '2023-06-24 12:21:09', '2023-06-24 06:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `library_settings`
--

CREATE TABLE `library_settings` (
  `library_settings_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `description` text,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library_settings`
--

INSERT INTO `library_settings` (`library_settings_id`, `banner`, `tittle`, `description`, `status`, `created_at`, `updated_at`, `url`) VALUES
('687548762', 'assets/frontend/images/libraryPage/3.png', 'Digital library', '<h3>About</h3>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market (BICM) was established as a institution for imparting practical capital market education and training on July 24, 2008. The Institute is gradually emerging as a center of excellence for professional development of capital market intermediaries and full spectrum of market professionals through disseminating recent and updated theoretical and practical knowledge.</p>\r\n\r\n<p><u><strong>Background of BICM</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute fulfilled the long felt demand of market intermediaries as well as development partners. The idea was first mooted by Chittagong Stock Exchange and a feasibility study was carried out under World Bank managed multi-grant TA, FIRST initiative. The expatriate consultants recommended setting-up a &ldquo;Securities Institute&rdquo; in Bangladesh for bridging the gap between the competence and skills required and exist.Later, UNDP as well as ADB under their respective TA recommended for establishment of a &ldquo;Securities Industries Development Center&rdquo; and a &ldquo;National Capital Market Institute&rdquo; autonomous in nature.</p>\r\n\r\n<p><u><strong>Board Members and Manpower</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">In 2010, the government approved organogram of BICM that has similarity to a public university, at small scale, having 97 employees including 27 faculty members. In 2013, the government also approved the compensation structure of the institute. Under the leadership of Professor Shibli Rubayat ul Islam, Chairman, Bangladesh Securities and Exchange Commission (BSEC) [Contact- Tel: +88-02-9563713], the Institute has got a competent Board of Directors with a wide range of expertise representing cross-section of stakeholders that includes government, regulator, market intermediaries, exchanges, academia, and different professional bodies.</p>\r\n\r\n<p style=\"text-align:justify\">A total of 60 staff members including 12 Faculty Members and 17 officers have been working in the Institute. Executive President is heading the management of the&nbsp; Institute. Contact &ndash; Tel: +88-02-9515771 or ep@bicm.ac.bd&nbsp;.</p>\r\n\r\n<p><u><strong>Infrastructural Facilities</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is housed at 18,508 sqft. area in the commercial hub of the city. BICM is equipped with state of the art education and professional training facilities as well as advanced learning amenities to arrange and organize national and international training programs, workshops, seminars and conferences. It has the capacity to accommodate 250 participants at one go in its class rooms of different capacities, conference room and computer lab. It also has break-away-session rooms and digital library for brain storming and carrying out research.</p>\r\n\r\n<p style=\"text-align:justify\">To augment the &lsquo;Vision 2021&rsquo;, The Institute is equipped with latest ICT facilities. The audio-visual and video conferencing facilities with dedicated 20 mbps fiber optics internet connection will enable the institute to establish its linkage with institutions from home and abroad in disseminating knowledge.</p>\r\n\r\n<p style=\"text-align:justify\">BICM has the unique and enriched library of the country that is the repository of business, finance, trade, banking, insurance, ICT, law and wide array of financial and other titles. To date, BICM has stocked over 10,000 physical books and in process of procuring e- books, videos and other learning and reference materials. Obtaining the permission, the Institute is also contemplating to hook up its server with the e- library of University Grant Commission, Bangladesh.</p>\r\n\r\n<p><u><strong>Financing</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">Since FY 2009-10, the Government of the People&rsquo;s Republic of Bangladesh has been continuously financing BICM. From this funding, the cost of infrastructural facilities and operational expenses of the institute has been met.</p>\r\n\r\n<p><u><strong>Academic Activities of BICM</strong></u></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong><em>Inauguration of Academic Activities </em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">On 09 December 2010, Mr. Abul Maal Abdul Muhith, the then Minister, Ministry of Finance, Government of the People&rsquo;s Republic of Bangladesh inaugurated the academic activities of BICM. The government has been extending its unflinching support to elevate the institute as a center of excellence.</p>\r\n\r\n<p><u><strong><em>Postgraduate Diploma Course</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM started its flagship &ldquo;Postgraduate Diploma Program in Capital Market&rdquo; in January 2015 for existing professionals of the capital market and those who aspire to start their career in the capital market.</p>\r\n\r\n<p><strong><em><u>Investors&rsquo; Education Program</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">To fulfill the commitment of the government of increasing awareness of general investors, BICM has been conducting the &lsquo;Investors Education Program&rsquo; free of cost. General investors have been encouraged to assess the financial health of the listed companies prior to making an investment. To date, 2900 existing investors and future/ potential investors have been trained on the basics of capital market investment. Considering the increasing demand of the investors, BICM has started offering four investor awareness programs monthly instead of two.</p>\r\n\r\n<p><u><strong><em>Specialized Courses for professionals and Market Intermediaries</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To date, BICM has conducted a handsome number of &ldquo;Certification Programs&rdquo; of different duration (two weeks to six weeks long). Participants have been trained and certified in the areas of Securities Laws, Corporate Governance, Financial Statements Analysis, Technical Analysis, Portfolio Management, Equity Valuation, Legal Drafting, International Financial Reporting Standard, Capital Raising and Investment in the Capital Market, Investment Analysis and Securities Valuation, Trading Software, Financial Journalism, etc.</p>\r\n\r\n<p><u><strong>Future Activities of the Institute</strong></u></p>\r\n\r\n<p><u><strong><em>Training on New Products of Capital Market</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To implement the recent reforms taken by the Government as to allowing trading of derivatives, commodities, and exchange traded fund, BICM is designing curricula and training programs on the same.</p>\r\n\r\n<p><u><strong><em>Masters Program</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute expects to start the &ldquo;Master of Applied Finance and Capital Market&rdquo; in mid 2021. The program is affiliated with the Faculty of Business Studies, University of Dhaka. Admission announcement will be made soon and the classes of the first batch of the program will tentatively start in July 2021.</p>\r\n\r\n<p style=\"text-align:justify\">To know more about the program, please contact the Registrar&rsquo;s Office of BICM.&nbsp;</p>\r\n\r\n<p><strong><em><u>Mandatory Licensing Examination</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">With the help of expatriate consultant engaged under ADB- TA project, BICM has designed course materials for &ldquo;Mandatory Licensing Examination for Securities Market Intermediaries&rdquo;. If authorized by BSEC, the institute will impart training and conduct examination on the same.</p>\r\n\r\n<p><u><strong><em>Distance Learning Programs</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is also preparing and equipping itself to start &ldquo;Distance Learning Programs&rdquo; at school and college level for wide dissemination of capital market knowledge at national sphere.</p>\r\n\r\n<p><u><strong><em>Research and Knowledge Management Activities</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">There is paucity of research, case study and documentation on financial market in general and capital market in particular. BICM will put maximum emphasis and invest time, energy and efforts in research and knowledge management activities to bridge the gap. These activities of BICM will be aiming at setting standards, preparing best-practice examples, assisting policy formulation and preparing guidelines to help the stakeholders. The research outcomes, lessons of cross jurisdictional study, policy papers and recommendations will facilitate the government and policy makers in devising policy, regulator in formulating rules and professionals in implementation and practice.</p>\r\n\r\n<p><strong><u>Co-operation from Development Partners</u></strong></p>\r\n\r\n<p style=\"text-align:justify\">Since there is dearth of knowledge and expertise as of new instruments viz. derivatives, futures, commodities, exchange traded funds (ETFs), structured products, state of the art securities and settlement system, cooperation of development partners is of utmost importance to equip faculty members. This co-operation, in the form of technical assistance and fielding capital market experts, will enhance and elevate the knowledge and expertise of the faculty members for enabling them to impart quality education and training.</p>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market, with the policy direction of Bangladesh government and under the leadership of BSEC, is confident to play a catalytic role in equipping a fair, transparent, informed and vibrant capital market; and poised to be a regional hub of excellence in education, research and knowledge management in the days ahead.</p>', 'Y', '2023-06-23 19:32:41', '2023-06-23 19:32:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_settings`
--

CREATE TABLE `list_settings` (
  `list_id` varchar(10) NOT NULL,
  `position` char(3) DEFAULT '',
  `image` char(150) DEFAULT '',
  `tittle` varchar(150) DEFAULT NULL,
  `sub_tittle` varchar(150) DEFAULT NULL,
  `description` text,
  `page_id` varchar(20) DEFAULT '',
  `contact_link` text,
  `contact` varchar(14) DEFAULT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list_settings`
--

INSERT INTO `list_settings` (`list_id`, `position`, `image`, `tittle`, `sub_tittle`, `description`, `page_id`, `contact_link`, `contact`, `status`, `created_at`, `updated_at`) VALUES
('693716126', '1', 'assets/frontend/images/listItem/Asif.jpg', 'Asif Imran', 'Deputy Registrar', '<p>Lorem ipsum dolor sit amet. Et nesciunt deleniti et Quis modi ut laboriosam quia et expedita deleniti a molestias quam. Ut ducimus laudantium aut laboriosam corrupti rem soluta repudiandae. In nisi quis qui similique modi qui totam maxime ut odio quibusdam ut quibusdam culpa qui dicta ipsum rem ipsam aliquam. Est totam libero quo reiciendis reprehenderit ut quia dolor.</p>\r\n\r\n<p>Et nobis ipsa et molestiae tempore eos eligendi aliquid ad omnis nesciunt rem praesentium veritatis sit neque inventore et alias iste. Et veniam sapiente sed unde repudiandae et dignissimos temporibus est dignissimos debitis est dolor modi sed dolore omnis cum facilis voluptatibus. Quo quasi eius eos enim voluptates et consequatur corporis et consequuntur totam ut quibusdam consequatur et veniam magnam et Quis nisi?</p>', '693801983', '#', '+8801572112496', 'Y', '2023-09-03 04:42:05', '2023-09-07 06:54:49'),
('694070157', '3', 'assets/frontend/images/listItem/Saiful-Islam.jpg', 'Saiful Islam', 'Assistant Director', '<p>sdfadfa&nbsp;</p>', '693801983', '#', '01823-760716', 'Y', '2023-09-07 07:02:36', '2023-09-07 07:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `masters_program`
--

CREATE TABLE `masters_program` (
  `masters_program_id` char(10) NOT NULL,
  `image` text NOT NULL,
  `page_id` char(10) DEFAULT '',
  `tittle` char(150) NOT NULL,
  `schedule` char(100) DEFAULT NULL,
  `duration` char(100) DEFAULT NULL,
  `amount` char(10) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text,
  `pedagogyShow` char(1) DEFAULT NULL,
  `pedagogy` text,
  `courseStructureShow` char(1) DEFAULT NULL,
  `courseStructure` text,
  `teachingMethodsShow` char(1) DEFAULT NULL,
  `teachingMethods` text,
  `gradingPolicyShow` char(1) DEFAULT NULL,
  `gradingPolicy` text,
  `feesChargesShow` char(1) DEFAULT NULL,
  `feesCharges` text,
  `downloadShow` char(1) DEFAULT NULL,
  `download` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `masters_program`
--

INSERT INTO `masters_program` (`masters_program_id`, `image`, `page_id`, `tittle`, `schedule`, `duration`, `amount`, `status`, `aboutShow`, `about`, `pedagogyShow`, `pedagogy`, `courseStructureShow`, `courseStructure`, `teachingMethodsShow`, `teachingMethods`, `gradingPolicyShow`, `gradingPolicy`, `feesChargesShow`, `feesCharges`, `downloadShow`, `download`, `created_at`, `updated_at`) VALUES
('687445735', 'assets/frontend/images/mastersProgram/job-2.png', '688232887', 'High Time for Cyberlaw Enforcement and a Future of Work Strategy', '12 May - 3 Nov 2023', 'Total Hours : 144', '6000', 'Y', 'Y', '<p>The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.</p>\r\n\r\n<p>Nonetheless, in Bangladesh, the need for skilled professionals in the financial market in general and the capital market, in particular, has been on the rise. The MAFCM program of BICM, with its world-class curriculum, will sharpen a student&rsquo;s required theoretical, quantitative, and technical skills by providing a blend of rigorous academic and practical application. Hence, the program is expected to bridge the long-felt gap between the skills required and those existing in this dynamic field of financial markets, especially the capital market.</p>\r\n\r\n<p>New innovations in the applications of finance are making it crucial for stakeholders in the industry to keep pace with these developments. BICM is aiming to create the best-equipped financial managers in the country with this uniquely designed program. Those aspiring to excel in a career in finance, banking, merchant banking, asset and funds management, financial analysis, and financial regulation will experience assimilation of essential knowledge and skills in an increasingly challenging financial environment.</p>\r\n\r\n<div class=\"\">\r\n<h2>The objective of the MAFCM Program</h2>\r\n\r\n<p>BICM is offering the &lsquo;Master of Applied Finance and Capital Market&rsquo; (MAFCM) to strengthen the Bangladesh capital market through elevating the knowledge of stakeholders. The capital market is dynamic and is evolving over time both locally and globally. One must be competent enough to excel in the field of capital market with the required set of management, mathematical and technical skills. The MAFCM program is designed to inculcate these skills in students so that they can cater to the needs of competent financial managers.</p>\r\n\r\n<h2>Minimum Credit Requirements</h2>\r\n\r\n<p>The minimum credit requirement for obtaining the MAFCM degree is 51 (fifty-one). Of the total required credits, 48 credits are to be completed as course work and 3 credits are to be earned from project work.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Semesters</h2>\r\n\r\n<p>There shall be two semesters in a calendar year. The Spring semester (January &ndash; June) and Summer semester (July &ndash; December). The Academic Year is the same as the calendar year.</p>\r\n\r\n<h2>Admission/Eligibility Criteria</h2>\r\n\r\n<p>The minimum academic requirement for admission into the program is a 4-year Bachelor&rsquo;s degree (or equivalent) from a recognized institution having minimum 2nd class/division, or Master&rsquo;s degree in case of Bachelor&rsquo;s degree (or equivalent) with a duration of less than 4 years from a recognized institution, having minimum 2nd class/division at Master level. Preference will be given to those having experience in the fields of finance, capital market operations, capital market regulations, capital market policy formulation, capital market research, accounting, auditing, banking etc. Registered/Enrolled students of any accounting and finance professional institute (such as CFA, ICAB, ICMAB, ACCA, CIMA, CPA,ICSB etc.) will also get preference. For foreign degrees, equivalence certificate from the University Grants Commission of Bangladesh has to be provided. All applicants must appear in a written test, followed by a viva-voce for those who pass the written test. The final score for selection will be prepared considering the performance in the written test, viva-voce, previous academic records, and relevant experience. Selections will be made based on the combined score. Members of any accounting and finance profession like CFA, ICAB, ICMAB, ACCA, CMA, CPA, ICSB, etc. and those having GMAT score of at least 500 or GRE score of at least 300 will be eligible for direct admission (Subject to satisfactory appearance in the viva-voce).</p>\r\n</div>', 'N', NULL, 'N', NULL, 'N', NULL, 'N', NULL, 'Y', '<div class=\"blog_single-part\">\r\n<h2>Fees and Charges</h2>\r\n\r\n<p>Fees and Charges(after 50% waiver on course fee announced in October 2022)</p>\r\n\r\n<div class=\"table-responsive\">\r\n<table class=\"table table-bordered table-striped\">\r\n	<thead>\r\n		<tr>\r\n			<th scope=\"col\">Sl.</th>\r\n			<th scope=\"col\">Item Details</th>\r\n			<th scope=\"col\">Amount (Taka)</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>01</td>\r\n			<td>Application Form</td>\r\n			<td>1,000/-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>02</td>\r\n			<td>Admission Fee</td>\r\n			<td>10,000/-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>01</td>\r\n			<td>Application Form</td>\r\n			<td>1,000/-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>01</td>\r\n			<td>Application Form</td>\r\n			<td>1,000/-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>01</td>\r\n			<td>Application Form</td>\r\n			<td>1,000/-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>01</td>\r\n			<td>Application Form</td>\r\n			<td>1,000/-</td>\r\n		</tr>\r\n		<tr>\r\n			<td>01</td>\r\n			<td>Application Form</td>\r\n			<td>1,000/-</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n</div>', 'N', NULL, '2023-06-22 14:55:34', '2023-11-08 07:38:01'),
('689143492', 'assets/frontend/images/mastersProgram/home-video-banner 1.jpg', '688232887', 'Test Masters Program', '15th july', '400', '4000', 'Y', 'Y', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'Y', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'Y', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'Y', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'N', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'Y', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'Y', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', '2023-07-12 06:31:31', '2023-08-07 11:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `masters_settings`
--

CREATE TABLE `masters_settings` (
  `masters_setting_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `short_description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `masters_settings`
--

INSERT INTO `masters_settings` (`masters_setting_id`, `banner`, `tittle`, `short_description`, `created_at`, `updated_at`) VALUES
('687369907', 'assets/frontend/images/masterPage/argument-1.png', 'MASTER OF APPLIEDFINANCE AND CAPITAL MARKET (MAFCM)', 'Understanding your vision means a lot to us. So, we start with getting the sense of the project, its dynamics as well as technological requirements s and most importantly your demands and expectations to perfectly outline the structure, specifications and probable duration of your project.', '2023-06-21 17:51:46', '2023-06-21 19:18:38');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `menu_id` char(10) NOT NULL,
  `menu_tittle` varchar(100) DEFAULT NULL,
  `sub_menu` char(1) DEFAULT 'N',
  `parent_id` char(10) DEFAULT '',
  `sort_order` char(2) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`menu_id`, `menu_tittle`, `sub_menu`, `parent_id`, `sort_order`, `url`, `status`, `created_at`, `updated_at`) VALUES
('687713653', 'Home', 'N', '0', '01', 'home', 'Y', '2023-08-06 14:52:02', '2023-08-06 14:52:02'),
('687713845', 'About', 'Y', '0', '02', 'about', 'Y', '2023-08-06 14:52:07', '2023-08-06 14:52:07'),
('687800138', 'Master\'s Program', 'N', '0', '03', 'masters-program', 'Y', '2023-08-06 14:52:11', '2023-08-06 14:52:11'),
('687800425', 'Certificate Course', 'N', '0', '04', 'certification-training', 'Y', '2023-12-11 09:49:38', '2023-12-11 09:49:38'),
('687800505', 'Diploma', 'N', '0', '05', 'diploma', 'Y', '2023-09-17 05:05:39', '2023-09-17 05:05:39'),
('687800629', 'News & Event', 'N', '687713845', '06', 'news-and-event', 'Y', '2023-09-07 07:52:23', '2023-09-07 07:52:23'),
('687800716', 'D-library', 'N', '0', '07', 'd-library', 'Y', '2023-08-06 14:52:36', '2023-08-06 14:52:36'),
('687800892', 'Online Service', 'N', '0', '08', 'online-project', 'Y', '2023-08-06 14:52:44', '2023-08-06 14:52:44'),
('687801122', 'Tender', 'N', '0', '09', 'tender', 'N', '2023-08-06 14:52:52', '2023-08-06 14:52:52'),
('687802433', 'Mission & Vision', 'N', '687713845', '01', 'mission-vision', 'Y', '2023-08-06 14:53:00', '2023-08-06 14:53:00'),
('687804395', 'Board of directories', 'N', '687713845', '15', 'board-of-directories', 'Y', '2023-09-04 03:57:55', '2023-09-04 03:57:55'),
('687804624', 'Faculty Member\'s', 'N', '687713845', '03', 'faculty-members', 'Y', '2023-08-06 14:53:11', '2023-08-06 14:53:11'),
('691229334', 'Contact us', 'N', '687713845', '10', 'contact-us', 'Y', '2023-09-04 06:53:05', '2023-09-04 06:53:05'),
('692691076', 'Research Form', 'N', '694078278', '11', 'research-form', 'Y', '2023-10-09 05:52:36', '2023-10-09 05:52:36'),
('693801917', 'Registrar Office', 'N', '687713845', '16', 'registrar-office', 'Y', '2023-09-04 04:31:56', '2023-09-04 04:31:56'),
('693805581', 'Citizen Charter', 'N', '687713845', '17', 'citizen-charter', 'Y', '2023-09-04 05:33:00', '2023-09-04 05:33:00'),
('694078278', 'Research', 'Y', '0', '18', 'research', 'Y', '2023-09-07 09:19:29', '2023-09-07 09:19:29'),
('694078412', 'Working Papers', 'N', '694078278', '19', 'working-papers', 'Y', '2023-09-07 09:20:23', '2023-09-07 09:20:23'),
('694078496', 'Policy Paers', 'N', '694078278', '20', 'policy-paers', 'Y', '2023-09-07 09:21:35', '2023-09-07 09:21:35'),
('694078599', 'Faculty Publication', 'N', '694078278', '21', 'faculty-publication', 'Y', '2023-09-07 09:23:18', '2023-09-07 09:23:18'),
('694078709', 'Financial Market Review', 'N', '694078278', '22', 'fmr', 'Y', '2023-09-07 09:53:01', '2023-09-07 09:53:01'),
('694079476', 'Bicm Journal', 'N', '694078278', '23', 'jfmg-site', 'Y', '2023-09-07 09:53:31', '2023-09-07 09:53:31'),
('694080222', 'Research Seminar Series', 'N', '694078278', '24', 'research-seminar-series', 'Y', '2023-09-07 09:54:16', '2023-09-07 09:54:16'),
('694080612', 'ICSFI 2021', 'N', '694078278', '25', 'icsfi-2021', 'Y', '2023-09-07 09:56:51', '2023-09-07 09:56:51'),
('694081026', 'BICM Research Grant', 'N', '694078278', '26', 'researchgrant', 'Y', '2023-09-07 10:03:45', '2023-09-07 10:03:45'),
('702289425', 'Certification Program', 'N', '0', '66', 'Certification-Program', 'Y', '2023-12-11 10:15:09', '2023-12-11 10:15:09'),
('702289864', 'IEP', 'N', '0', '67', 'iep', 'Y', '2023-12-11 10:17:43', '2023-12-11 10:17:43'),
('702291687', 'PGDCM', 'Y', '0', '68', 'pgdcm', 'N', '2023-12-11 10:49:55', '2023-12-11 10:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `online_settings`
--

CREATE TABLE `online_settings` (
  `online_service_id` char(10) NOT NULL,
  `menu_name` varchar(150) NOT NULL,
  `position` char(1) NOT NULL,
  `tittle` varchar(150) NOT NULL,
  `banner` varchar(150) DEFAULT NULL,
  `shortDescription` text,
  `description` text,
  `url` varchar(50) DEFAULT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`, `created_at`, `updated_at`) VALUES
(12, 'Md Example Tester', 'admin@bicm.com', '01767886199', 6000, 'BGIC Tower (Ground- 3rd Floor and 8th-9th),34, Topkhana Road', 'Pending', '6521b20a598a3', 'BDT', NULL, NULL),
(13, 'Md Example Tester', 'admin@bicm.com', '01767886199', 6000, 'BGIC Tower (Ground- 3rd Floor and 8th-9th),34, Topkhana Road', 'Pending', '6521b2b3d63e1', 'BDT', NULL, NULL),
(14, 'Md Example Tester', 'admin@bicm.com', '01767886199', 6000, 'BGIC Tower (Ground- 3rd Floor and 8th-9th),34, Topkhana Road', 'Pending', '6522ea02bae66', 'BDT', NULL, NULL),
(15, 'John Doe', 'you@example.com', '01711xxxxxx', 1200, 'Customer Address', 'Pending', 'If you already have the transaction generated for current order', 'BDT', NULL, NULL),
(16, 'Md Example Tester', 'toushin.java@gmail.com', '01767886199', 25000, 'Customer Address', 'Pending', '701060556', 'BDT', NULL, NULL),
(17, 'Md Example Tester', 'toushin.java@gmail.com', '01767886199', 21000, 'Customer Address', 'Pending', '65655c54ee7cc', 'BDT', NULL, NULL),
(18, 'Md Example Tester', 'toushin.java@gmail.com', '01767886199', 22000, 'Customer Address', 'Pending', '6565728ff0597', 'BDT', NULL, NULL),
(19, 'Md Example Tester', 'toushin.java@gmail.com', '01767886199', 21000, 'Customer Address', 'Pending', '656575b9363e5', 'BDT', NULL, NULL),
(20, 'Md Example Tester', 'toushin.java@gmail.com', '01767886199', 25000, 'Customer Address', 'Pending', '6565813a16633', 'BDT', NULL, NULL),
(21, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '656584ae084e1', 'BDT', NULL, NULL),
(22, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6565850a972aa', 'BDT', NULL, NULL),
(23, 'Customer Name', 'customer@mail.com', '8801XXXXXXXXX', 10, 'Customer Address', 'Pending', '6565851b2401b', 'BDT', NULL, NULL),
(24, 'Md Example Tester', 'toushin.java@gmail.com', '01767886199', 25000, 'Customer Address', 'Pending', '65658c2cd87c4', 'BDT', NULL, NULL),
(25, 'Motiur Rahman', 'ahe.motiur@bicm.ac.bd', '01739449722', 20000, 'Customer Address', 'Pending', '6576d69402ab9', 'BDT', NULL, NULL),
(26, 'Motiur Rahman', 'ahe.motiur@bicm.ac.bd', '01739449722', 10, 'Customer Address', 'Pending', '6576d8090b5a1', 'BDT', NULL, NULL),
(27, 'Motiur Rahman', 'ahe.motiur@bicm.ac.bd', '01739449722', 10, 'Customer Address', 'Pending', '6576d9265b451', 'BDT', NULL, NULL),
(28, 'Motiur Rahman', 'ahe.motiur@bicm.ac.bd', '01739449722', 1, 'Customer Address', 'Pending', '657ecc57dba80', 'BDT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` char(10) NOT NULL,
  `parent_id` char(10) DEFAULT NULL,
  `menu_id` char(10) DEFAULT NULL,
  `page_name` char(30) DEFAULT NULL,
  `heading` varchar(150) DEFAULT '',
  `short_description` text CHARACTER SET utf8mb4,
  `description` text CHARACTER SET utf8mb4,
  `banner` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `page_type` varchar(30) DEFAULT NULL,
  `form_status` char(1) DEFAULT NULL,
  `form_group` text,
  `sidebar_status` char(1) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `parent_id`, `menu_id`, `page_name`, `heading`, `short_description`, `description`, `banner`, `image`, `page_type`, `form_status`, `form_group`, `sidebar_status`, `status`, `created_at`, `updated_at`) VALUES
('688228913', '0', '687713653', 'Home', NULL, NULL, '<p>Test Content</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', '', '', 'home', 'N', 'null', 'N', 'Y', '2023-07-01 16:28:32', '2023-07-24 11:56:10'),
('688229715', '0', '687713845', 'About', NULL, NULL, '<p>Bangladesh Institute of Capital Market (BICM) was established as a institution for imparting practical capital market education and training on July 24, 2008. The Institute is gradually emerging as a center of excellence for professional development of capital market intermediaries and full spectrum of market professionals through disseminating recent and updated theoretical and practical knowledge.</p>\r\n\r\n<p>Background of BICM</p>\r\n\r\n<p>The institute fulfilled the long felt demand of market intermediaries as well as development partners. The idea was first mooted by Chittagong Stock Exchange and a feasibility study was carried out under World Bank managed multi-grant TA, FIRST initiative. The expatriate consultants recommended setting-up a &ldquo;Securities Institute&rdquo; in Bangladesh for bridging the gap between the competence and skills required and exist.Later, UNDP as well as ADB under their respective TA recommended for establishment of a &ldquo;Securities Industries Development Center&rdquo; and a &ldquo;National Capital Market Institute&rdquo; autonomous in nature.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Board Members and Manpower</h3>\r\n\r\n<p>In 2010, the government approved organogram of BICM that has similarity to a public university, at small scale, having 97 employees including 27 faculty members. In 2013, the government also approved the compensation structure of the institute. Under the leadership of Professor Shibli Rubayat ul Islam, Chairman, Bangladesh Securities and Exchange Commission (BSEC) [Contact- Tel: +88-02-9563713], the Institute has got a competent Board of Directors with a wide range of expertise representing cross-section of stakeholders that includes government, regulator, market intermediaries, exchanges, academia, and different professional bodies.</p>\r\n\r\n<p>A total of 60 staff members including 12 Faculty Members and 17 officers have been working in the Institute. Executive President is heading the management of the&nbsp; Institute. Contact &ndash; Tel: +88-02-9515771 or ep@bicm.ac.bd&nbsp;.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Infrastructural Facilities</h3>\r\n\r\n<p>BICM is housed at 18,508 sqft. area in the commercial hub of the city. BICM is equipped with state of the art education and professional training facilities as well as advanced learning amenities to arrange and organize national and international training programs, workshops, seminars and conferences. It has the capacity to accommodate 250 participants at one go in its class rooms of different capacities, conference room and computer lab. It also has break-away-session rooms and digital library for brain storming and carrying out research.</p>\r\n\r\n<p>To augment the &lsquo;Vision 2021&rsquo;, The Institute is equipped with latest ICT facilities. The audio-visual and video conferencing facilities with dedicated 20 mbps fiber optics internet connection will enable the institute to establish its linkage with institutions from home and abroad in disseminating knowledge.</p>\r\n\r\n<p>BICM has the unique and enriched library of the country that is the repository of business, finance, trade, banking, insurance, ICT, law and wide array of financial and other titles. To date, BICM has stocked over 10,000 physical books and in process of procuring e- books, videos and other learning and reference materials. Obtaining the permission, the Institute is also contemplating to hook up its server with the e- library of University Grant Commission, Bangladesh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Financing</h3>\r\n\r\n<p>Since FY 2009-10, the Government of the People&rsquo;s Republic of Bangladesh has been continuously financing BICM. From this funding, the cost of infrastructural facilities and operational expenses of the institute has been met.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Academic Activities of BICM</h2>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h3>Inauguration of Academic Activities</h3>\r\n\r\n<p>On 09 December 2010, Mr. Abul Maal Abdul Muhith, the then Minister, Ministry of Finance, Government of the People&rsquo;s Republic of Bangladesh inaugurated the academic activities of BICM. The government has been extending its unflinching support to elevate the institute as a center of excellence.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Postgraduate Diploma Course</h3>\r\n\r\n<p>BICM started its flagship &ldquo;Postgraduate Diploma Program in Capital Market&rdquo; in January 2015 for existing professionals of the capital market and those who aspire to start their career in the capital market.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Investors&rsquo; Education Program</h3>\r\n\r\n<p>To fulfill the commitment of the government of increasing awareness of general investors, BICM has been conducting the &lsquo;Investors Education Program&rsquo; free of cost. General investors have been encouraged to assess the financial health of the listed companies prior to making an investment. To date, 2900 existing investors and future/ potential investors have been trained on the basics of capital market investment. Considering the increasing demand of the investors, BICM has started offering four investor awareness programs monthly instead of two.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Specialized Courses for professionals and Market Intermediaries</h3>\r\n\r\n<p>To date, BICM has conducted a handsome number of &ldquo;Certification Programs&rdquo; of different duration (two weeks to six weeks long). Participants have been trained and certified in the areas of Securities Laws, Corporate Governance, Financial Statements Analysis, Technical Analysis, Portfolio Management, Equity Valuation, Legal Drafting, International Financial Reporting Standard, Capital Raising and Investment in the Capital Market, Investment Analysis and Securities Valuation, Trading Software, Financial Journalism, etc.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Future Activities of the Institute</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Training on New Products of Capital Market</h3>\r\n\r\n<p>To implement the recent reforms taken by the Government as to allowing trading of derivatives, commodities, and exchange traded fund, BICM is designing curricula and training programs on the same.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Masters Program</h3>\r\n\r\n<p>The institute expects to start the &ldquo;Master of Applied Finance and Capital Market&rdquo; in mid 2021. The program is affiliated with the Faculty of Business Studies, University of Dhaka. Admission announcement will be made soon and the classes of the first batch of the program will tentatively start in July 2021.</p>\r\n\r\n<p>To know more about the program, please contact the Registrar&rsquo;s Office of BICM.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><em><u>Mandatory Licensing Examination</u> </em></h3>\r\n\r\n<p>With the help of expatriate consultant engaged under ADB- TA project, BICM has designed course materials for &ldquo;Mandatory Licensing Examination for Securities Market Intermediaries&rdquo;. If authorized by BSEC, the institute will impart training and conduct examination on the same.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><u><em>Distance Learning Programs</em></u></h3>\r\n\r\n<p>BICM is also preparing and equipping itself to start &ldquo;Distance Learning Programs&rdquo; at school and college level for wide dissemination of capital market knowledge at national sphere.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><u><em>Research and Knowledge Management Activities</em></u></h3>\r\n\r\n<p>There is paucity of research, case study and documentation on financial market in general and capital market in particular. BICM will put maximum emphasis and invest time, energy and efforts in research and knowledge management activities to bridge the gap. These activities of BICM will be aiming at setting standards, preparing best-practice examples, assisting policy formulation and preparing guidelines to help the stakeholders. The research outcomes, lessons of cross jurisdictional study, policy papers and recommendations will facilitate the government and policy makers in devising policy, regulator in formulating rules and professionals in implementation and practice.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><u>Co-operation from Development Partners</u></h3>\r\n\r\n<p>Since there is dearth of knowledge and expertise as of new instruments viz. derivatives, futures, commodities, exchange traded funds (ETFs), structured products, state of the art securities and settlement system, cooperation of development partners is of utmost importance to equip faculty members. This co-operation, in the form of technical assistance and fielding capital market experts, will enhance and elevate the knowledge and expertise of the faculty members for enabling them to impart quality education and training.</p>\r\n\r\n<p>Bangladesh Institute of Capital Market, with the policy direction of Bangladesh government and under the leadership of BSEC, is confident to play a catalytic role in equipping a fair, transparent, informed and vibrant capital market; and poised to be a regional hub of excellence in education, research and knowledge management in the days ahead.</p>', 'assets/frontend/images/banner/pages/2021-07-28-08-21-53258e6a4fdf66e190c77d83ee36ad37.png', '', 'common', 'N', 'null', 'N', 'Y', '2023-07-01 16:41:54', '2023-09-26 06:39:22'),
('688229899', '687713845', '687802433', 'Mission', NULL, NULL, '<div class=\"about-site\">\r\n<h5>BICM&rsquo;s core purpose is to bridge the gap between the current level of knowledge, skills and competency of Bangladesh capital market participants and the level required for participants in a world class capital market.</h5>\r\n\r\n<p><strong><span style=\"font-size:14px\">Values</span></strong></p>\r\n\r\n<p>In delivering its programs to the capital markets in Bangladesh, BICM, its students and staff will adhere to the following values:</p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>Excellence</li>\r\n	<li>Dignity of each person</li>\r\n	<li>Professionalism</li>\r\n	<li>Flexibility</li>\r\n	<li>Integrity</li>\r\n</ul>\r\n\r\n<p>Vision of BICM in next 5 years time</p>\r\n\r\n<p>By December 31, 2015 Bangladesh Institute of Capital Market is aiming for to:</p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>Be generally recognized as the pre-eminent provider of high quality practical education, training and assessment in the Bangladesh capital markets.</li>\r\n	<li>Be an effective partnership between the public sector and the private sector in fostering and enhancing the knowledge on capital market.</li>\r\n	<li>Be administering regularly updated mandatory licensing examinations nationally</li>\r\n	<li>Be offering a range of training courses in different formats to support the mandatory licensing examinations</li>\r\n	<li>Be organizing and promoting training and research in securities and financial market, investment and related<br />\r\n	matters for the public benefit;</li>\r\n	<li>Be organizing and conducting examination, publish results thereof and award certificates, diplomas and otherdistinctions</li>\r\n	<li>Be offering a range of formal courses of 1 [one] year and lesser duration to meet demonstrated demand in specific market areas</li>\r\n	<li>Be offering course on financial market governance</li>\r\n	<li>Be offering a range of other short courses to meet demonstrated industry needs</li>\r\n</ul>\r\n\r\n<p>Strengths and Opportunities of BICM</p>\r\n\r\n<p>a. Strengths of BICM</p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>Extensive industry support for the institute has already been gained. This is demonstrated by the quality and commitment of the sponsors of the institute.</li>\r\n	<li>The level and diversity of funding support already attracted to the institute demonstrates a significant commitment from both the Bangladesh government and from Key Sponsors.</li>\r\n	<li>The use of public/private partnership principles in the operation of the institute reinforces the level of government and industry support and commitment.</li>\r\n	<li>The very high quality and large scale of the training and office facilities position the institute as a quality professional national training institute.</li>\r\n	<li>The support from the capital markets regulator, the Securities and Exchange Commission, Bangladesh is a significant strength; the responsibility to conduct the Bangladesh mandatory securities licensing examinations will position BICM as a critical part of the nation&rsquo;s capital markets infrastructure.</li>\r\n	<li>There is a commitment from development partners, such as the World Bank and the Asian Development Bank. ADB and World Bank, in particular, have expressed interest in providing future tangible support to the BICM.</li>\r\n</ul>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>The level of public interest and the fact that there has been no ongoing practical capital market training (delivered professionally) in Bangladesh to date means that there is probably considerable latent demand for such training.</li>\r\n	<li>The responsibility to provide mandatory securities licensing examinations means that there is likely to be both good initial and ongoing demand from persons currently working in the industry as well as ongoing demand from those seeking to work in the industry.</li>\r\n</ul>\r\n\r\n<p>Opportunities in the market</p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>The level of public interest and the fact that there has been no ongoing practical capital market training (delivered professionally) in Bangladesh to date means that there is probably considerable latent demand for such training.</li>\r\n	<li>The responsibility to provide mandatory securities licensing examinations means that there is likely to be both good initial and ongoing demand from persons currently working in the industry as well as ongoing demand from those seeking to work in the industry.</li>\r\n</ul>\r\n</div>', 'assets/frontend/images/banner/pages/vision-and-mission-banner.webp', '', 'common', 'N', 'null', 'Y', 'Y', '2023-07-01 16:44:58', '2023-09-17 07:30:58'),
('688232887', '0', '687800138', 'Master\'s Program', NULL, 'The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.', '<p><strong>Lorem Ipsum</strong><span style=\"color:rgb(0, 0, 0); font-family:open sans,arial,sans-serif; font-size:14px\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 'assets/frontend/images/banner/pages/home-video-banner 1.jpg', 'assets/frontend/images/pages/IMG-20230531-WA0001.jpg', 'master', 'Y', '[\"1053500961\",\"5225500961\"]', 'Y', 'Y', '2023-07-01 17:34:46', '2023-08-23 19:05:34'),
('688233618', '0', '687800425', 'Certificate Course', NULL, 'Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.', '<h3>PGDCM &ndash; Evening</h3>\r\n\r\n<p>Introducing the first of its kind Postgraduate Diploma in Capital Market (PGDCM) in Bangladesh</p>\r\n\r\n<p><span style=\"font-family:var( --e-global-typography-text-font-family ),sans-serif\">Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.</span></p>\r\n\r\n<p><span style=\"font-family:var( --e-global-typography-text-font-family ),sans-serif\">BICM is offering PGDCM for the market intermediaries, full spectrum of market professionals and graduates who aspire to pursue career in the capital market. The diploma will provide a blend of theoretical and practical knowledge on market mechanism, legal framework, new instruments and techniques.</span></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>DURATION: 9 MONTHS</strong></td>\r\n			<td><strong>24 CREDIT HOURS</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>PROGRAM FEE: BDT 33,000/-</strong></td>\r\n			<td><strong>8 COURSES&nbsp;</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong><u>Break Down of Semester Fee (All amounts in BDT)</u></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>1st Semester</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Admission Fee</td>\r\n			<td>5,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Course Fee (4 Courses)</td>\r\n			<td>12,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lab Fee</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Library</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Total fee for 1st semester</strong></td>\r\n			<td><strong>19,000</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>2nd Semester</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Course Fee (4 Courses)</td>\r\n			<td>12,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lab Fee</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Library</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Total fee for 2nd semester</strong></td>\r\n			<td><strong>14,000</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Total fee for the PGDCM Program</strong> (effective from 17th batch onward)</td>\r\n			<td>&nbsp;<strong>33,000</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-family:var( --e-global-typography-text-font-family ),sans-serif\">The PGDCM program consists of 8 courses (24 credit hours) The program is divided into two-semester. Four courses are offered in each trimester as follows:</span></p>\r\n\r\n<p><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\"><strong><u>Level 1 / Semester 1</u></strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\">Code: D101- Financial Markets in Bangladesh;</span></li>\r\n	<li><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\">Code: D102- Managerial Finance;</span></li>\r\n	<li><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\">Code: D103- Basic Statistics;</span></li>\r\n	<li>Code: D104- Financial Accounting.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><u>Level 2/ Semester 2</u></h2>\r\n\r\n<ul>\r\n	<li>Code: D201- Securities Analysis and Portfolio Management;&nbsp;</li>\r\n	<li>Code: D202- Investment Banking;</li>\r\n	<li>Code: D203- Capital Market Operations;</li>\r\n	<li>Code: D204- Securities Laws.</li>\r\n</ul>', 'assets/frontend/images/banner/pages/about2.png', '', 'courses', 'Y', '[\"1053500961\",\"0674150071\",\"2695370071\",\"3026370071\",\"5546370071\"]', 'Y', 'Y', '2023-07-01 17:46:57', '2023-12-11 09:47:00'),
('688233822', '0', '687800629', 'Events', NULL, NULL, '<h3>Research Seminar Series</h3>\r\n\r\n<p>Bangladesh Institute of Capital Market has a monthly research seminar series with an aim to facilitate knowledge sharing on financial market issues between BICM faculty and external experts.</p>\r\n\r\n<p>The monthly seminar takes place preferably in the last week of each month. In each seminar, 1-2 research papers are presented by BICM internal faculty members and renowned external researchers. The seminars are attended by renowned experts in the relevant fields as a discussant on the papers being presented. The events are LIVE broadcast on BICM Facebook, where viewers are able to make questions to the presenters and discussants.</p>\r\n\r\n<p>Critical comments and suggestions from the attendees and the discussants are expected to help improve the quality of the papers being presented, which could in turn help the researchers to publish in internationally ranked journals and publication outlets.</p>\r\n\r\n<p>Please note our upcoming and past seminars below. BICM cordially invites you to attend the seminars and contribute to share academic excellence. If you cannot join in person, join us Live at BICM Facebook page <a href=\"https://www.facebook.com/bicm.ac.bd\">https://www.facebook.com/bicm.ac.bd</a>.</p>\r\n\r\n<p>If you have any questions regarding the seminar or you wish to present a paper or invite a guest researcher, please do not hesitate to communicate S. M. Kalbin Salema at <a href=\"mailto:kalbin@bicm.ac.bd\">kalbin@bicm.ac.bd</a>.</p>\r\n\r\n<p><strong>List of Seminars</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>BRS No.</strong></td>\r\n			<td><strong>Paper title</strong></td>\r\n			<td><strong>Presenting researcher</strong></td>\r\n			<td><strong>Date, time, and venue</strong></td>\r\n			<td><strong>Status</strong></td>\r\n			<td><strong>Detail program and Paper abstract</strong></td>\r\n			<td><strong>Seminar</strong> <strong>Video Link</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'assets/frontend/images/banner/pages/about3.png', '', 'event', 'Y', NULL, 'N', 'Y', '2023-07-01 17:50:21', '2023-07-01 17:50:21'),
('691229634', '687713845', '691229334', 'contact-us', 'Please feel free to contact us', 'BGIC Tower (Ground- 3rd Floor and 8th-9th),\r\n34, Topkhana Road, Dhaka- 1000, Bangladesh\r\nTelephone: +88-02-9588506, 9588507\r\nFax: +88-02-9515773-4\r\nE-mail: info@bicm.ac.bd', '<div class=\"wrap-contact100\">\r\n<form>Contact Us\r\n<div class=\"wrap-input100 validate-input bg1\">FULL NAME * <input name=\"name\" type=\"text\" /></div>\r\n\r\n<div class=\"wrap-input100 validate-input bg1 rs1-wrap-input100\">Email * <input name=\"email\" type=\"text\" /></div>\r\n\r\n<div class=\"wrap-input100 bg1 rs1-wrap-input100\">Phone <input name=\"phone\" type=\"text\" /></div>\r\n\r\n<div class=\"wrap-input100 input100-select bg1\">Needed Services *\r\n<div><select name=\"service\"><option>Please chooses</option><option>eCommerce Bussiness</option><option>UI/UX Design</option><option>Online Services</option> </select><span dir=\"ltr\">Please chooses</span>\r\n\r\n<div class=\"dropDownSelect2\">&nbsp;</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"w-full dis-none js-show-service\">\r\n<div class=\"wrap-contact100-form-radio\">What type of products do you sell?\r\n<div class=\"contact100-form-radio m-t-15\"><input checked=\"checked\" name=\"type-product\" type=\"radio\" value=\"physical\" /> Phycical Products</div>\r\n\r\n<div class=\"contact100-form-radio\"><input name=\"type-product\" type=\"radio\" value=\"digital\" /> Digital Products</div>\r\n\r\n<div class=\"contact100-form-radio\"><input name=\"type-product\" type=\"radio\" value=\"service\" /> Services Consulting</div>\r\n</div>\r\n\r\n<div class=\"wrap-contact100-form-range\">Budget *\r\n<div class=\"contact100-form-range-value\">$1500 - $3900 <input name=\"from-value\" type=\"text\" /> <input name=\"to-value\" type=\"text\" /></div>\r\n\r\n<div class=\"contact100-form-range-bar\">\r\n<div class=\"noUi-target noUi-ltr noUi-horizontal\" id=\"filter-bar\">\r\n<div class=\"noUi-base\">\r\n<div class=\"noUi-origin\" style=\"left: 0%;\">\r\n<div class=\"noUi-handle noUi-handle-lower\" style=\"z-index: 5;\">&nbsp;</div>\r\n</div>\r\n\r\n<div class=\"noUi-connect\" style=\"left: 0%; right: 60%;\">&nbsp;</div>\r\n\r\n<div class=\"noUi-origin\" style=\"left: 40%;\">\r\n<div class=\"noUi-handle noUi-handle-upper\" style=\"z-index: 6;\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"wrap-input100 validate-input bg0 rs1-alert-validate\">Message<textarea name=\"message\"></textarea></div>\r\n\r\n<div class=\"container-contact100-form-btn\">Submit</div>\r\n</form>\r\n</div>', 'assets/frontend/images/banner/pages/istockphoto-1416335096-170667a.webp', '', 'common', 'Y', '[\"0380689861\"]', 'N', 'Y', '2023-08-05 10:00:33', '2023-09-04 07:03:04');
INSERT INTO `pages` (`page_id`, `parent_id`, `menu_id`, `page_name`, `heading`, `short_description`, `description`, `banner`, `image`, `page_type`, `form_status`, `form_group`, `sidebar_status`, `status`, `created_at`, `updated_at`) VALUES
('692691571', '0', '692691076', 'research-form', NULL, NULL, '<h3>SUMMARY SUBMISSION FORM</h3>\r\n                            <form action=\"#\" class=\"reachForm\">\r\n                                <div class=\"row\">\r\n                                    <div class=\"col-lg-12\">\r\n                                        <label for=\"contact-preference\">When is the best time of day to reach\r\n                                            you?</label>\r\n                                            <div class=\"radio\">\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"contact-preference\"\r\n                                                        id=\"contact-preference\" value=\"am\" checked>Research Organization\r\n                                                    (RO)\r\n                                                </label>\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"contact-preference\"\r\n                                                        id=\"contact-preference\" value=\"pm\" checked>Independent Researcher (IR)/Independent Research Team (IRT)\r\n                                                </label>\r\n                                            </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-6\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Name of the Organization</label>\r\n                                            <input type=\"text\" class=\"form-control\"\r\n                                                placeholder=\"Name of the Organization\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-6\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Mailing Address</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Mailing Address\">\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                    <div class=\"col-lg-6\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Email</label>\r\n                                            <input type=\"email\" class=\"form-control\" placeholder=\"Enter Your Email\">\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                    <div class=\"col-lg-6\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Contact Number</label>\r\n                                            <input type=\"number\" class=\"form-control\"\r\n                                                placeholder=\"Enter Your Phone Number\">\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                    <div class=\"col-lg-6\">\r\n                                        <label for=\"type-of*the-organization\">Type of the Organization</label>\r\n                                        \r\n                                            <div class=\"radio\">\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"contact-preference\"\r\n                                                        id=\"type-of*the-organization\" value=\"State-owned\" checked>State-owned\r\n                                                </label>\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"contact-preference\"\r\n                                                        id=\"type-of*the-organization\" value=\"pm\" checked>Private Company\r\n                                                </label>\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"contact-preference\"\r\n                                                        id=\"type-of*the-organization\" value=\"pm\" checked>Academic Institution </label>\r\n                                            </div>\r\n                                    </div>   \r\n                                </div>\r\n                                <div class=\"notableProject row\">\r\n                                    <h4 class=\"col-lg-12\">Notable Project Completed by RO (Latest One)</h4>\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Title</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Project Title\" />\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Funded By</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Funded By \">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Fund Size</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Fund Size\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group project_dur\">\r\n                                            <label class=\"form-label\">Project Duration Form</label>\r\n                                            <input type=\"date\" class=\"form-control\" placeholder=\"Project Duration\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group project_dur\">\r\n                                            <label class=\"form-label\">Project Duration To</label>\r\n                                            <input type=\"date\" class=\"form-control\" placeholder=\"Project Duration\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Project Year (in years)</label>\r\n                                            <input type=\"number\" class=\"form-control\" placeholder=\"Project Year\">                                            \r\n                                        </div>\r\n                                    </div>\r\n                                </div>\r\n\r\n                                <div class=\"researchPL row\">\r\n                                    <h4 class=\"col-lg-12\">Researchers\' Profile</h4>\r\n                                    <h5 class=\"col-lg-12\">Principal Investigator (PI)</h5>\r\n                                    <div class=\"col-lg-6\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Name</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Ex: Name\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-6\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Current Position/Designation:</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Current Position/Designation\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-6\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Organization Position/Designation</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Organization\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-6\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Email Address</label>\r\n                                            <input type=\"email\" class=\"form-control\" placeholder=\"Email Address\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-6\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Contact Number</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Contact Number\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-6\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Total Experience in Research (in years)</label>\r\n                                            <input type=\"number\" class=\"form-control\" placeholder=\"Total Experience in Research (in years)\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-6\">\r\n                                        <label for=\"highest-academic-qualification\">Highest Academic Qualification</label>\r\n                                        \r\n                                            <div class=\"radio\">\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"highest-academic-qualification\"\r\n                                                        id=\"highest-academic-qualification\" value=\"PhD\" checked>PhD\r\n                                                </label>\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"highest-academic-qualification\"\r\n                                                        id=\"highest-academic-qualification\" value=\"masters\" checked>Masters\r\n                                                </label>\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"highest-academic-qualification\"\r\n                                                        id=\"highest-academic-qualification\" value=\"honors-bachelor\" checked>Honors/Bachelor\r\n                                                </label>\r\n                                            </div>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"notableProject row\">\r\n                                    <h4 class=\"col-lg-12\">Notable Project Completed by RO (Latest One)</h4>\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Title</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Project Title\" />\r\n                                        </div>\r\n                                    </div>\r\n\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Funded By</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Funded By \">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Fund Size</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Fund Size\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group  project_dur\">\r\n                                            <label class=\"form-label\">Project Duration Form</label>\r\n                                            <input type=\"date\" class=\"form-control\" placeholder=\"Project Duration\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group  project_dur\">\r\n                                            <label class=\"form-label\">Project Duration to</label>\r\n                                            <input type=\"date\" class=\"form-control\" placeholder=\"Project Duration\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-4\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Project Year (in years)</label>\r\n                                            <input type=\"number\" class=\"form-control\" placeholder=\"Project Year\">                                            \r\n                                        </div>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"co-investor\">\r\n                                    <div class=\"investorType row\">\r\n                                        <div class=\"col-lg-12\">\r\n                                            <div class=\"form-check\">\r\n                                                <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"co-Investigator1\">\r\n                                                <label class=\"form-check-label\" for=\"co-Investigator1\">\r\n                                                    Co-Investigator 01 (If any)\r\n                                                </label>\r\n                                            </div>\r\n                                            <div class=\"form-check\">\r\n                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"co-Investigator2\">\r\n                                            <label class=\"form-check-label\" for=\"co-Investigator2\">\r\n                                                Co-Investigator 02 (If any)\r\n                                            </label>\r\n                                            </div>\r\n                                            <div class=\"form-check\">\r\n                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"co-Investigator3\">\r\n                                            <label class=\"form-check-label\" for=\"co-Investigator3\">\r\n                                                Co-Investigator 03 (If any)\r\n                                            </label>\r\n                                            </div>\r\n                                            <div class=\"form-check\">\r\n                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"co-Investigator4\">\r\n                                            <label class=\"form-check-label\" for=\"co-Investigator4\">\r\n                                                Co-Investigator 04 (If any)\r\n                                            </label>\r\n                                            </div>\r\n                                            <div class=\"form-check\">\r\n                                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"co-Investigator5\">\r\n                                            <label class=\"form-check-label\" for=\"co-Investigator5\">\r\n                                                Co-Investigator 05 (If any)\r\n                                            </label>\r\n                                            </div>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"notableProject row\">\r\n                                        <h6 class=\"col-lg-12\">Related Information of Co-Investigator 01</h6>\r\n                                        <div class=\"col-lg-4\">\r\n                                            <div class=\"from-group\">\r\n                                                <label class=\"form-label\">Title</label>\r\n                                                <input type=\"text\" class=\"form-control\" placeholder=\"Project Title\" />\r\n                                            </div>\r\n                                        </div>\r\n    \r\n                                        <div class=\"col-lg-4\">\r\n                                            <div class=\"from-group\">\r\n                                                <label class=\"form-label\">Funded By</label>\r\n                                                <input type=\"text\" class=\"form-control\" placeholder=\"Funded By \">\r\n                                            </div>\r\n                                        </div>\r\n                                        <div class=\"col-lg-4\">\r\n                                            <div class=\"from-group\">\r\n                                                <label class=\"form-label\">Fund Size</label>\r\n                                                <input type=\"text\" class=\"form-control\" placeholder=\"Fund Size\">\r\n                                            </div>\r\n                                        </div>\r\n                                        <div class=\"col-lg-4\">\r\n                                            <div class=\"from-group  project_dur\">\r\n                                                <label class=\"form-label\">Project Duration Form</label>\r\n                                                <input type=\"date\" class=\"form-control\" placeholder=\"Project Duration\">\r\n                                            </div>\r\n                                        </div>\r\n                                        <div class=\"col-lg-4\">\r\n                                            <div class=\"from-group  project_dur\">\r\n                                                <label class=\"form-label\">Project Duration to</label>\r\n                                                <input type=\"date\" class=\"form-control\" placeholder=\"Project Duration\">\r\n                                            </div>\r\n                                        </div>\r\n                                        <div class=\"col-lg-4\">\r\n                                            <div class=\"from-group\">\r\n                                                <label class=\"form-label\">Project Year (in years)</label>\r\n                                                <input type=\"number\" class=\"form-control\" placeholder=\"Project Year\">                                            \r\n                                            </div>\r\n                                        </div>\r\n                                    </div>\r\n                                </div>\r\n                                <div class=\"row\">\r\n                                    <div class=\"col-lg-12\">\r\n                                        <label for=\"grant-sought\"><u>Grant Sought</u></label>\r\n                                            <div class=\"radio\">\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"grant-sought\"\r\n                                                        id=\"grant-sought\" value=\"am\" checked>Standard Grants\r\n                                                </label>\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"grant-sought\"\r\n                                                        id=\"grant-sought\" value=\"pm\" checked>Urgent Grants\r\n                                                </label>\r\n                                            </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-12\">\r\n                                        <label for=\"amount-sought\"><u>Amount Sought</u></label>\r\n                                            <div class=\"radio\">\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"amount-sought\"\r\n                                                        id=\"amount-sought\" value=\"am\" checked>>=BDT 500,000\r\n                                                </label>  \r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"amount-sought\"\r\n                                                        id=\"amount-sought\" value=\"am\" checked>BDT 500,000 to <=1,000,000\r\n                                                </label>\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"amount-sought\"\r\n                                                        id=\"amount-sought\" value=\"am\" checked>BDT 1,000,000 to <=1,500,000\r\n                                                </label>  \r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"amount-sought\"\r\n                                                        id=\"amount-sought\" value=\"am\" checked>BDT 1,500,000 to <=2,000,000\r\n                                                </label>                                                  \r\n                                            </div>\r\n                                    </div>\r\n                                    \r\n                                    <strong class=\"col-lg-12\"><br /><br /><u>Proposed Research Project</u> <br /><br /></strong>\r\n                                    \r\n                                    <div class=\"col-lg-12\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Full Title of the Proposal</label>\r\n                                            <input type=\"text\" class=\"form-control\" placeholder=\"Full Title of the Proposal\">\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-12\">\r\n                                        <div class=\"from-group\">\r\n                                            <label class=\"form-label\">Proposal Summary (Maximum 500 words)</label>\r\n                                            <textarea class=\"form-control\" placeholder=\"Proposal Summary \" ></textarea>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-lg-12\">\r\n                                        <label for=\"documents-Check-list\">Documents Check-list</label>\r\n                                            <div class=\"radio\">\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"grant-sought\"\r\n                                                        id=\"documents-Check-list\" value=\"am\" checked>Research Organizations (ROs)\r\n                                                </label>\r\n                                                <label>\r\n                                                    <input type=\"radio\" name=\"grant-sought\"\r\n                                                        id=\"documents-Check-list\" value=\"pm\" checked>Independent Researcher (IR)/Independent Researcher Teams (IRTs)\r\n                                                </label>\r\n                                            </div>\r\n                                    </div>\r\n                                </div>\r\n                            </form>', 'assets/frontend/images/banner/pages/WhatsApp Image 2021-05-12 at 7.56.02 PM.jpeg', '', 'common', 'N', 'null', 'N', 'Y', '2023-08-22 08:06:10', '2023-09-05 18:18:32'),
('693250631', '687713845', '687804624', 'Faculty Member\'s', 'Faculty Member\'s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur libero nulla, facilisis eget mauris lobortis, dapibus rutrum diam. Donec pellentesque, risus vel sollicitudin malesuada, lectus libero tincidunt mauris, non convallis velit magna eget dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vel sollicitudin mi. Mauris pellentesque, enim et semper bibendum, nisi lectus posuere odio, nec condimentum felis tortor nec leo. Pellentesque ultrices ultrices quam, eget accumsan dui volutpat nec. Suspendisse ut purus libero. Proin auctor quis augue tempor commodo. Sed varius ligula sit amet nulla tempor molestie. Phasellus sit amet nisl a arcu efficitur fermentum sit amet non lorem. Vestibulum vitae consequat nulla.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur libero nulla, facilisis eget mauris lobortis, dapibus rutrum diam. Donec pellentesque, risus vel sollicitudin malesuada, lectus libero tincidunt mauris, non convallis velit magna eget dui. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vel sollicitudin mi. Mauris pellentesque, enim et semper bibendum, nisi lectus posuere odio, nec condimentum felis tortor nec leo. Pellentesque ultrices ultrices quam, eget accumsan dui volutpat nec. Suspendisse ut purus libero. Proin auctor quis augue tempor commodo. Sed varius ligula sit amet nulla tempor molestie. Phasellus sit amet nisl a arcu efficitur fermentum sit amet non lorem. Vestibulum vitae consequat nulla.</p>', 'assets/frontend/images/banner/pages/argument-1.png', '', 'list', 'N', 'null', 'N', 'Y', '2023-08-28 19:23:50', '2023-08-28 19:23:50'),
('693717381', '687713845', '687804395', 'Board of Directors', NULL, 'Board Of Directors', '<p>Lorem ipsum dolor sit amet. Et nesciunt deleniti et Quis modi ut laboriosam quia et expedita deleniti a molestias quam. Ut ducimus laudantium aut laboriosam corrupti rem soluta repudiandae. In nisi quis qui similique modi qui totam maxime ut odio quibusdam ut quibusdam culpa qui dicta ipsum rem ipsam aliquam. Est totam libero quo reiciendis reprehenderit ut quia dolor.</p>\r\n\r\n<p>Et nobis ipsa et molestiae tempore eos eligendi aliquid ad omnis nesciunt rem praesentium veritatis sit neque inventore et alias iste. Et veniam sapiente sed unde repudiandae et dignissimos temporibus est dignissimos debitis est dolor modi sed dolore omnis cum facilis voluptatibus. Quo quasi eius eos enim voluptates et consequatur corporis et consequuntur totam ut quibusdam consequatur et veniam magnam et Quis nisi?</p>', 'assets/frontend/images/banner/pages/banner_board.jpg', '', 'list', 'N', 'null', 'N', 'Y', '2023-09-03 05:03:00', '2023-09-11 09:17:15'),
('693801983', '687713845', '693801917', 'Registrar Office', 'Registrar Office', NULL, NULL, 'assets/frontend/images/banner/pages/banner_board.jpg', '', 'list', 'N', 'null', 'N', 'Y', '2023-09-04 04:33:02', '2023-09-07 06:53:02'),
('694071771', '687713845', '693805581', 'citizen-charter', NULL, NULL, '<p>asdf adsf adsf adsf</p>', 'assets/frontend/images/banner/pages/PGDCM 24 Batch_27_07_23.jpg', '', 'common', 'N', 'null', 'N', 'Y', '2023-09-07 07:29:30', '2023-09-07 07:29:30'),
('694081495', '694078278', '694079476', 'Bicm Journal', NULL, NULL, '<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:608px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Click to visit the<a href=\"http://jfmg.bicm.ac.bd/index.php\">&nbsp;Journal of Financial Markets and Governance</a>&nbsp;submission site</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:608px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>S/L No.</p>\r\n			</td>\r\n			<td>\r\n			<p>Title of the Article</p>\r\n			</td>\r\n			<td>\r\n			<p>Download Link</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>01</p>\r\n			</td>\r\n			<td>\r\n			<p>The impacts of IPO financing and monetary<br />\r\n			policy on economic growth in Bangladesh:<br />\r\n			Evidence from a dynamic assessment</p>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"https://bicm.ac.bd/wp-content/uploads/2021/12/Impact-of-Dividend-Policy-on-Stock-Price.pdf\" target=\"_blank\">Download</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>', 'assets/frontend/images/banner/pages/What-Makes-A-Book-Banner.jpg', '', 'common', 'N', '[\"0380689861\",\"5225500961\",\"4335172961\"]', 'N', 'Y', '2023-09-07 10:11:34', '2023-09-07 10:12:07'),
('694081774', '694078278', '694081026', 'BICM Research Grant', NULL, NULL, '<h4>CALL FOR RESEARCH PROPOSALS</h4>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Bangladesh Institute of Capital Market (BICM) is the only Government mandated national institute for imparting practical capital market education, research, and training. In line with its core mandates, the BICM offers Research Grant scheme from 2022 to facilitate high-impact research activities that help the institute to further its operation, financial market regulators (e.g., Bangladesh Securities and Exchange Commission) to formulate timely and informed policies and regulations, and market participants to make informed decisions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The broad objective of the research grant is to contribute to the overall development of the capital market in Bangladesh. To be more specific, BICM actively promotes research having longer-term implications, while encouraging scholarly exercises on issues that need immediate attention. The Research Grant would typically prefer multidisciplinary research areas or topics related to the capital market covering finance, accounting, economics, technology, social sciences, and business.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In this connection, BICM invites proposal from interested individuals, researchers, and research organizations for conducting high-impact research on contemporary issues related to the development of capital market of Bangladesh.&nbsp;<strong>Proposals may be submitted any time&nbsp;</strong>under&nbsp;<strong>standard&nbsp;</strong>scheme, which will be reviewed for grant under regular scheme, or&nbsp;<strong>urgent&nbsp;</strong>proposals for meeting immediate research needs that will have immediate and critical-impact on the development of the capital market or addressing any pressing need of the capital market or allied domain. All proposals will be evaluated in three phases using a weighted scoring mechanism for consideration of grant.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Proposals may be submitted through the online portal at (<a href=\"https://bicm.ac.bd/researchgrant/\">https://bicm.ac.bd/researchgrant/</a>). For further information regarding submission and review Ms. S. M. Kalbin Salema (<a href=\"mailto:kalbin@bicm.ac.bd\">kalbin@bicm.ac.bd</a>) may be contacted.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>BICM authority reserves the right to accept or reject any or all proposals without assigning any reason whatsoever.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://bicm.ac.bd/wp-content/uploads/2023/01/RESEARCH-GRANT_TEXT.pdf\">RESEARCH-GRANT_FILE</a></p>\r\n\r\n<p>&nbsp;</p>', 'assets/frontend/images/banner/pages/What-Makes-A-Book-Banner.jpg', '', 'common', 'N', 'null', 'Y', 'Y', '2023-09-07 10:16:13', '2023-09-07 10:18:45');
INSERT INTO `pages` (`page_id`, `parent_id`, `menu_id`, `page_name`, `heading`, `short_description`, `description`, `banner`, `image`, `page_type`, `form_status`, `form_group`, `sidebar_status`, `status`, `created_at`, `updated_at`) VALUES
('694082367', '694078278', '694080222', 'Research Seminar Serise', NULL, NULL, '<p>Bangladesh Institute of Capital Market has a monthly research seminar series with an aim to facilitate knowledge sharing on financial market issues between BICM faculty and external experts.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The monthly seminar takes place preferably in the last week of each month. In each seminar, 1-2 research papers are presented by BICM internal faculty members and renowned external researchers. The seminars are attended by renowned experts in the relevant fields as a discussant on the papers being presented. The events are LIVE broadcast on BICM Facebook, where viewers are able to make questions to the presenters and discussants.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Critical comments and suggestions from the attendees and the discussants are expected to help improve the quality of the papers being presented, which could in turn help the researchers to publish in internationally ranked journals and publication outlets.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Please note our upcoming and past seminars below. BICM cordially invites you to attend the seminars and contribute to share academic excellence. If you cannot join in person, join us Live at BICM Facebook page&nbsp;<a href=\"https://www.facebook.com/bicm.ac.bd\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">https://www.facebook.com/bicm.ac.bd</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If you have any questions regarding the seminar or you wish to present a paper or invite a guest researcher, please do not hesitate to communicate S. M. Kalbin Salema at&nbsp;<a href=\"mailto:kalbin@bicm.ac.bd\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">kalbin@bicm.ac.bd</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>List of Seminars</strong></p>\r\n\r\n<div class=\"table-responsive\">\r\n<table class=\"table table-bordered table-striped\">\r\n	<thead>\r\n		<tr>\r\n			<th>BRS No.</th>\r\n			<th>Paper title</th>\r\n			<th>Presenting researcher</th>\r\n			<th>Date, time, and venue</th>\r\n			<th>Status</th>\r\n			<th>Detail program and Paper abstract</th>\r\n			<th>Seminar Video Link</th>\r\n		</tr>\r\n	</thead>\r\n	<tbody>\r\n		<tr>\r\n			<td>25</td>\r\n			<td>Pay Scale Reform and Dynamics of Inflationary Spirals in Bangladesh: A Regression-Discontinuity Approach to the Long-Run Consequences of NPS-2015</td>\r\n			<td>Safaeduzzaman Khan<br />\r\n			Assistant Professor<br />\r\n			Bangladesh Institute of Capital Market</td>\r\n			<td>September 05, 2023 (Tuesday)<br />\r\n			02:30 &ndash; 04:00 PM<br />\r\n			BICM Multipurpose Hall</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2023/09/BRS-25-FLYER.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/mSKMmx8lic/\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>24</td>\r\n			<td>Why Do Eligible Private Companies in Bangladesh Avoid Capital Market for Financing?</td>\r\n			<td>Faima Akter<br />\r\n			Lecturer<br />\r\n			Bangladesh Institute of Capital Market</td>\r\n			<td>July 26, 2023 (Wednesday)<br />\r\n			12:00-01:30 PM<br />\r\n			BICM Multipurpose Hall</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2023/07/Update-BRS-24-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/m1KWP8l7pP/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>23</td>\r\n			<td>U.S. Political Corruption and Management Earnings Forecast</td>\r\n			<td>Dr. Hasibul Chowdhury<br />\r\n			UQ Business School<br />\r\n			The University of Queensland</td>\r\n			<td>June 07, 2023 (Wednesday)<br />\r\n			11:00 AM &ndash; 12:30 PM<br />\r\n			BICM Multipurpose Hall</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2023/06/Update-BRS-23-FLYER.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/l12MQJJUN2/\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>22</td>\r\n			<td>The impact of companies&rsquo; listing into capital market on national tax revenues: The case of Bangladesh</td>\r\n			<td>Mr. Gourav Roy &amp; Md. Adnan Ahmed<br />\r\n			Lecturer<br />\r\n			Bangladesh Institute of Capital Market</td>\r\n			<td>April 17, 2023 (Monday)<br />\r\n			11:00 AM &ndash; 12:30 PM<br />\r\n			BICM Multipurpose Hall</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2023/04/BRS-22-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/jYMl7IA3IX/\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>21</td>\r\n			<td>Investor Overconfidence and Stock Price Crash Risk</td>\r\n			<td>Dr. Hasibul Chowdhury<br />\r\n			UQ Business School<br />\r\n			the University of Queensland, Australia</td>\r\n			<td>February 2, 2023 (Thursday)<br />\r\n			11:00 AM &ndash; 12:30 PM<br />\r\n			BICM Multipurpose Hall</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2023/01/BRS-21-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/ir9p6tuUqr/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>20</td>\r\n			<td>Optimal Exchange Rate Dynamics for a Small-Open Economy: A Machine Learning Approach to the Case of Bangladesh</td>\r\n			<td>Safaeduzzaman Khan<br />\r\n			Assistant Professor<br />\r\n			Bangladesh Institute of Capital Market</td>\r\n			<td>January 24, 2023 (Tuesday)<br />\r\n			11:00 AM &ndash; 12:30 PM<br />\r\n			BICM Multipurpose Hall</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2023/01/BRS-20-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/igoleMQAMS/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>19</td>\r\n			<td>Local Religiosity and Insider Trading Activity</td>\r\n			<td>Md. Nazmul Hasan Bhuyan, PHD, CFA<br />\r\n			Assistant Professor of Finance, College of Business and Economics, North Carolina Agricultural and Technical State University</td>\r\n			<td>14 December, 2022 (Wednesday)<br />\r\n			10:00 AM-11:30 AM, BICM Multipurpose Hall</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2022/12/BRS-19-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/hqtkoN5Orj/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>18</td>\r\n			<td>Non-Random Topology in Bangladeshi Stock Market</td>\r\n			<td>Sujoy Das<br />\r\n			Managing Director, HNKC Systems (Pvt.) Limited</td>\r\n			<td>November 28, 2022 (Monday)<br />\r\n			11:00 AM &ndash; 12:30 PM, BICM Multipurpose Hall</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2022/11/BRS-18-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/h49MxhuF7m/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>17</td>\r\n			<td>A Comparison of Islamic and Conventional Banks&rsquo; Green Banking Initiatives and Their Benefits</td>\r\n			<td>Kashfia Sharmeen<br />\r\n			Assistant Professor<br />\r\n			Bangladesh Institute of Capital Market</td>\r\n			<td>October 26, 2022 (Wednesday)<br />\r\n			11:00 AM &ndash; 12:30 PM, BICM Multipurpose Hall</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2022/10/Update-BRS-17-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/go-tzLHfr8/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>16</td>\r\n			<td>Effect of Margin Loan on Investment Behavior and Performance: Insights from the Capital Market of Bangladesh</td>\r\n			<td>Tamanna Islam, PhD<br />\r\n			Assistant Professor<br />\r\n			Bangladesh Institute of Capital Market</td>\r\n			<td>September 29, 2022 (Thursday)<br />\r\n			12:00 PM &ndash; 01:30 PM, BICM Multipurpose Hall</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2022/09/Update-BRS-16-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/gksA0AdU9P/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>15</td>\r\n			<td>Certification of Corporate Governance Compliance, Type of Certifiers and Market-based Performance: Evidence from a Unique Regulatory Setting</td>\r\n			<td>Dr Abdus Sobhan<br />\r\n			University of Northumbria, United Kingdom</td>\r\n			<td>August 16, 2022 (Tuesday); 11:30 AM &ndash; 01:00 PM; Multipurpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2022/08/BRS-15-FLYER.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Download</a></td>\r\n			<td>Link</td>\r\n		</tr>\r\n		<tr>\r\n			<td>14</td>\r\n			<td>Social Capital and Capital Allocation Efficiency</td>\r\n			<td>Md Nazmul Hasan Bhuyan, PhD, CFA<br />\r\n			Assistant Professor of Finance<br />\r\n			North Carolina Agricultural and Technical State University</td>\r\n			<td>August 11, 2022 (Thursday); 11:00 AM &ndash; 12:30 PM; Multipurpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2022/08/BRS-14-FLYER.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/eVGOAsXWPE/\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>13</td>\r\n			<td>Do co-opted boards affect firm managerial ability in the US?</td>\r\n			<td>Dr Mohammad Dulal Miah<br />\r\n			Associate Professor<br />\r\n			Department of Economics and Finance<br />\r\n			University of Nizwa, Oman</td>\r\n			<td>July 06, 2022 (Wednesday); 10:00 AM &ndash; 11:30 AM; Multipurpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2022/06/BRS-13-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/bicm.ac.bd/videos/731950404701720\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>12</td>\r\n			<td>Do All Institutional Shareholders Promote Carbon Abatement Investment?</td>\r\n			<td>Dr. Md. Shahidul Islam, FHEA<br />\r\n			Lecturer in Accounting<br />\r\n			University of Suffolk</td>\r\n			<td>May 17, 2022 (Tuesday); 11:00 AM &ndash; 12:30 PM; Multipurpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2022/05/BRS-12-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/events/7445282475544078/?ref=newsfeed\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>11</td>\r\n			<td>Synergies between Islamic Finance, Ethical Finance &amp; UN SDGs</td>\r\n			<td>Mufti Yousuf Sultan CSAA,<br />\r\n			Founder &amp; CEO,<br />\r\n			Adl Advisory,<br />\r\n			Malaysia</td>\r\n			<td>March 28, 2022 (Monday); 10:30 AM &ndash; 12:00 PM; Multipurpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2022/03/BRS-11-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://fb.watch/c1fR5CmCSq/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>10</td>\r\n			<td>Managerial Ability and Value Relevance of Earnings</td>\r\n			<td>Dr. Ibrahim Siraj<br />\r\n			Assistant Professor of Financial Accounting<br />\r\n			School of Management<br />\r\n			Long Island University</td>\r\n			<td>February 27, 2022 (Sunday); 10:30 AM &ndash; 12:00 PM; Multipurpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2022/02/BRS-10-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/bicm.ac.bd/videos/505587141001008\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>9</td>\r\n			<td>Looking through an Informed Eye: Banking Directors, Information Frictions, and Cost of Bank Loans</td>\r\n			<td>Dr. Dewan Rahman, Lecturer in Finance, School of Business, The University of Queensland</td>\r\n			<td>November 16, 2021 (Tuesday); 11:30 AM &ndash; 01:00 PM; Multipurpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2021/11/BRS-09-FLYER.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/bicm.ac.bd/videos/412722620503255\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>8</td>\r\n			<td>Covid-19 and Stock Markets: Are Developing Economies Affected Differently from the Developed Countries?</td>\r\n			<td>Samantha Rahman Master of Economics The University of Sydney</td>\r\n			<td>October 18, 2021 (Monday); 11:00 AM &ndash; 12:30 PM; Multipurpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2021/10/BRS-08-FLYER.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/watch/live/?ref=watch_permalink&amp;v=1290040104778199\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>7</td>\r\n			<td>Financial Openness and Income Inequality in Emerging Economies: A Panel Data Approach</td>\r\n			<td>Safaeduzzaman Khan<br />\r\n			Assistant Professor<br />\r\n			Bangladesh Institute of Capital Market (BICM)</td>\r\n			<td>September 21, 2021 (Tuesday); 11:00 AM &ndash; 12:30 PM; Multipurpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2021/09/BRS-07-FLYER.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/bicm.ac.bd/videos/559799448469274\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>6</td>\r\n			<td>Sukuk: A New Investment Avenue for Institutional Investors in Bangladesh</td>\r\n			<td>S. M. Kalbin Salema Lecturer Bangladesh Institute of Capital Market (BICM)</td>\r\n			<td>August 24, 2021 (Tuesday); 11:00 AM &ndash; 12:30 PM; Multipurpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2021/08/BRS-6-FLYER.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/bicm.ac.bd/videos/1266726160466671\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>5</td>\r\n			<td>How to Increase the Depth of the Share Market in Bangladesh: The Potential Role of MNCs</td>\r\n			<td>Dr. Nasir Uddin Associate Professor Bangladesh Institute of Capital Market (BICM)</td>\r\n			<td>July 27, 2021 (Tuesday); 11:00 AM &ndash; 12:30 PM; Virtually using Zoom</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2021/07/BRS-5-FLYER.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/bicm.ac.bd/videos/614582599508976https://www.facebok.com/bicm.ac.bd/videos/2922639654669516\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>4</td>\r\n			<td>Problems and Prospects of Investing in Mutual Funds: The Case of Bangladesh</td>\r\n			<td>Kashfia Sharmeen Assistant Professor Bangladesh Institute of Capital Market (BICM)</td>\r\n			<td>June 22, 2021 (Tuesday); 11:00 AM &ndash; 12:30 PM; Multi-purpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2021/06/BRS-4_FLYER1.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/bicm.ac.bd/videos/2922639654669516\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>3</td>\r\n			<td>Leveraging Sustainable Finance through Developing a Green Bond Ecosystem in Bangladesh</td>\r\n			<td>Sagira Sultana Provaty, Lecturer, Bangladesh Institute of Capital Market</td>\r\n			<td>June 03, 2021 (Thursday); 11:00 AM &ndash; 12:30 PM; Virtually using Zoom</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2021/06/BRS-3-FLYER.pdf\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/bicm.ac.bd/videos/1153093251837690\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>2</td>\r\n			<td>Ownership Structure and Real Earnings Management: An Empirical Study on Emerging Economy</td>\r\n			<td>Dr. Nitai Chandra Debnath, Professor, Bangladesh Institute of Capital Market</td>\r\n			<td>February 28, 2021 (Sunday); 3:00 &ndash; 4:30 PM; Multi-purpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2021/02/BRSS-2-FLYER-1.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/bicm.ac.bd/videos/486284369054291\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td>1</td>\r\n			<td>The Effects of IPO Financing and Monetary Policy on Economic Growth in Bangladesh: A Dynamic Assessment</td>\r\n			<td>Dr. Mahmuda Akter, Executive President, BICM and Professor, Department of Accounting and Information Systems, University of Dhaka</td>\r\n			<td>January 28, 2021 (Thursday); 2:30 &ndash; 4:00 PM; Multi-purpose Hall Room (8th Floor), BICM</td>\r\n			<td>Completed</td>\r\n			<td><a href=\"https://bicm.ac.bd/wp-content/uploads/2021/01/BRSS-1-FLYER.pdf\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\">Download</a></td>\r\n			<td><a href=\"https://www.facebook.com/bicm.ac.bd/videos/1764130773767477\" rel=\"noreferrer noopener\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; background: transparent; outline: 0px; text-decoration-line: none; color: rgb(0, 131, 217);\" target=\"_blank\">Link</a></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n</div>\r\n\r\n<p><iframe frameborder=\"0\" height=\"314\" scrolling=\"no\" src=\"https://www.facebook.com/plugins/video.php?height=314&amp;href=https%3A%2F%2Fwww.facebook.com%2Fbicm.ac.bd%2Fvideos%2F486284369054291%2F&amp;show_text=false&amp;width=560\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; border-width: initial; border-style: none; background: transparent; outline: none; overflow: hidden;\" width=\"560\"></iframe></p>', 'assets/frontend/images/banner/pages/What-Makes-A-Book-Banner.jpg', '', 'common', 'N', 'null', 'N', 'Y', '2023-09-07 10:26:06', '2023-09-11 09:27:22'),
('698512727', '0', '687800505', 'diploma', NULL, NULL, NULL, 'assets/frontend/images/banner/pages/trained.png', '', 'courses', 'Y', '[\"1053500961\",\"5225500961\"]', 'N', 'Y', '2023-10-28 17:05:26', '2023-11-20 08:10:00'),
('702288703', '0', '702289425', 'Certification Program', 'dfd', 'cvbncvb vncvbn cbn', '<p>gfhgvnvcbnvcbn</p>', 'assets/frontend/images/banner/pages/Attendance Management Software.jfif', 'assets/frontend/images/pages/Attendance Management Software.jfif', 'courses', 'N', 'null', 'N', 'Y', '2023-12-11 09:58:22', '2023-12-11 10:12:10'),
('702290071', '0', '702289864', 'iep', 'IEP Program Heading', 'BICM IEP Program Short Description !!!', '<p>BICM IEP Program Description !!!</p>', 'assets/frontend/images/banner/pages/Attendance Management Software.jfif', '', 'common', 'N', 'null', 'N', 'Y', '2023-12-11 10:21:10', '2023-12-11 10:22:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` char(20) NOT NULL,
  `student_id` char(20) DEFAULT NULL,
  `form_id` char(20) DEFAULT NULL,
  `course_name` varchar(150) DEFAULT '',
  `course_type` varchar(100) DEFAULT '',
  `course_id` varchar(20) DEFAULT '',
  `amount` char(10) DEFAULT NULL,
  `custom_amount` varchar(255) DEFAULT '',
  `Remarks` varchar(255) DEFAULT NULL,
  `pay_txid` char(20) DEFAULT NULL,
  `paid_status` char(1) NOT NULL COMMENT 'p=''Paid'',d=''Due'',h=''Hold''',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `student_id`, `form_id`, `course_name`, `course_type`, `course_id`, `amount`, `custom_amount`, `Remarks`, `pay_txid`, `paid_status`, `created_at`, `updated_at`) VALUES
('693559402', '693559401', '693559402', '', '', '', '4000', '', NULL, '', 'd', '2023-09-01 09:10:01', '2023-09-01 09:10:01'),
('694422487', '693716804', '694422487', '', '', '', '6000', '', NULL, '', 'd', '2023-09-11 08:54:46', '2023-09-11 08:54:46'),
('696707058', '695048481', '696707058', '', '', '', '6000', '', NULL, '6522ea02bae66', 'h', '2023-10-08 17:42:26', '2023-10-08 17:42:26'),
('701060556', '700933852', '701060556', 'High Time for Cyberlaw Enforcement', 'courses', '687502012', '25000', '0', '', '65658c2cd87c4', 'd', '2023-11-28 06:43:56', '2023-11-28 06:43:56'),
('702285444', '702285444', '702285444', 'High Time for Cyberlaw Enforcement', 'courses', '687502012', '25000', '', '', '', 'd', '2023-12-11 09:04:03', '2023-12-11 09:04:03'),
('702286907', '702286418', '702286907', 'Data Mining', 'courses', '687520975', '20000', '1', 'bicm e', '657ecc57dba80', 'd', '2023-12-17 10:24:23', '2023-12-17 10:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_form`
--

CREATE TABLE `research_form` (
  `reasearch_id` char(20) NOT NULL,
  `researchers_name` varchar(100) DEFAULT NULL,
  `researchers_email` varchar(100) DEFAULT NULL,
  `researchers_number` char(13) DEFAULT NULL,
  `form_data` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `research_form`
--

INSERT INTO `research_form` (`reasearch_id`, `researchers_name`, `researchers_email`, `researchers_number`, `form_data`, `created_at`, `updated_at`) VALUES
('697518845', 'Motiur Rahman', 'motiur.telecom@gmail.com', '01739449722', '{\"contact_preference\":\"Research Organization\",\"organization\":\"BICM\",\"mailing_address\":\"BGIC Tower, Dhaka\",\"email\":\"ahe.motiur@bicm.ac.bd\",\"contact_number\":\"01739449722\",\"organization_type\":\"State-owned\",\"project_title\":\"Block Chain\",\"funded_by\":\"Government\",\"fund_size\":\"10,00000\",\"project_duration_form\":\"2020-06-17\",\"project_duration_to\":\"2023-10-16\",\"project_year\":\"3\",\"researchers_name\":\"Motiur Rahman\",\"researchers_designation\":\"AHE\",\"organization_designation\":\"BICM\",\"researchers_email\":\"motiur.telecom@gmail.com\",\"researchers_number\":\"01739449722\",\"experience\":\"10\",\"highest_academic_qualification\":\"honors-bachelor\",\"completed_project_title\":null,\"completed_project_funded_by\":null,\"completed_project_funded_size\":null,\"completed_project_duration_form\":null,\"completed_project_duration_to\":null,\"completed_project_year\":null,\"researchers_name_01\":null,\"designation_01\":null,\"organization_designation_01\":null,\"researchers_email_01\":null,\"researchers_number_01\":null,\"experience_01\":null,\"co_investigator_01_tittle_01\":null,\"co_investigator_01_founded_By_01\":null,\"co_investigator_01_fund_Size_01\":null,\"co_investigator_01_duration_Form_01\":null,\"co_investigator_01_duration_To_01\":null,\"co_investigator_01_year_01\":null,\"researchers_name_02\":null,\"designation_02\":null,\"organization_designation_02\":null,\"researchers_email_02\":null,\"researchers_number_02\":null,\"experience_02\":null,\"co_investigator_02_tittle_02\":null,\"co_investigator_02_founded_By_02\":null,\"co_investigator_02_fund_Size_02\":null,\"co_investigator_02_duration_Form_02\":null,\"co_investigator_02_duration_To_02\":null,\"co_investigator_02_year_02\":null,\"researchers_name_03\":null,\"designation_03\":null,\"organization_designation_03\":null,\"researchers_email_03\":null,\"researchers_number_03\":null,\"experience_03\":null,\"co_investigator_03_tittle_03\":null,\"co_investigator_03_founded_By_03\":null,\"co_investigator_03_fund_Size_03\":null,\"co_investigator_03_duration_Form_03\":null,\"co_investigator_03_duration_To_03\":null,\"co_investigator_03_year_03\":null,\"researchers_name_04\":null,\"designation_04\":null,\"organization_designation_04\":null,\"researchers_email_04\":null,\"researchers_number_04\":null,\"experience_04\":null,\"co_investigator_04_tittle_04\":null,\"co_investigator_04_founded_By_04\":null,\"co_investigator_04_fund_Size_04\":null,\"co_investigator_04_duration_Form_04\":null,\"co_investigator_04_duration_To_04\":null,\"co_investigator_04_year_04\":null,\"researchers_name_05\":null,\"designation_05\":null,\"organization_designation_05\":null,\"researchers_email_05\":null,\"researchers_number_05\":null,\"experience_05\":null,\"co_investigator_05_tittle_05\":null,\"co_investigator_05_founded_By_05\":null,\"co_investigator_05_fund_Size_05\":null,\"co_investigator_05_duration_Form_05\":null,\"co_investigator_05_duration_To_05\":null,\"co_investigator_05_year_05\":null,\"grant_sought\":\"Standard Grants\",\"amount_sought\":\"BDT 1,500,000 to <=2,000,000\",\"proposal_tittle\":\"Block Chain Technology in Business Sector\",\"proposal_summary\":\"Nice\",\"Check_list\":\"Independent Researcher\",\"research_proposal_file_name\":\"assets\\/frontend\\/images\\/researchFile\\/697518845_BICM Call for Research Proposals.pdf\",\"agreement_paper_file_name\":\"assets\\/frontend\\/images\\/researchFile\\/697518845_BICM-ARG-CFP-for News Paper.pdf\"}', '2023-10-17 05:00:44', '2023-10-17 05:00:44'),
('700995887', 'imtiaz', 'ads@dsa.com', '123', '{\"contact_preference\":\"Research Organization\",\"organization\":\"bengalsols\",\"mailing_address\":\"dhaka\",\"email\":\"ben@ben.com\",\"contact_number\":\"1234\",\"organization_type\":\"State-owned\",\"project_title\":\"afda\",\"funded_by\":\"adf\",\"fund_size\":\"adsf\",\"project_duration_form\":\"2023-10-11\",\"project_duration_to\":\"2023-11-15\",\"project_year\":\"2\",\"researchers_name\":\"imtiaz\",\"researchers_designation\":\"das\",\"organization_designation\":\"adf\",\"researchers_email\":\"ads@dsa.com\",\"researchers_number\":\"123\",\"experience\":\"1\",\"highest_academic_qualification\":\"masters\",\"completed_project_title\":\"dsaf\",\"completed_project_funded_by\":\"adsf\",\"completed_project_funded_size\":\"adf\",\"completed_project_duration_form\":\"2023-11-09\",\"completed_project_duration_to\":\"2026-12-02\",\"completed_project_year\":\"3\",\"co_investigator_01\":\"coInv1\",\"researchers_name_01\":\"adfasdf\",\"designation_01\":\"fads\",\"organization_designation_01\":\"ad\",\"researchers_email_01\":\"adf@ada.com\",\"researchers_number_01\":\"234\",\"experience_01\":\"3\",\"highest_academic_qualification_01\":\"masters\",\"co_investigator_01_tittle_01\":\"adf\",\"co_investigator_01_founded_By_01\":\"adfadsf\",\"co_investigator_01_fund_Size_01\":\"2\",\"co_investigator_01_duration_Form_01\":null,\"co_investigator_01_duration_To_01\":null,\"co_investigator_01_year_01\":null,\"researchers_name_02\":null,\"designation_02\":null,\"organization_designation_02\":null,\"researchers_email_02\":null,\"researchers_number_02\":null,\"experience_02\":null,\"co_investigator_02_tittle_02\":null,\"co_investigator_02_founded_By_02\":null,\"co_investigator_02_fund_Size_02\":null,\"co_investigator_02_duration_Form_02\":null,\"co_investigator_02_duration_To_02\":null,\"co_investigator_02_year_02\":null,\"researchers_name_03\":null,\"designation_03\":null,\"organization_designation_03\":null,\"researchers_email_03\":null,\"researchers_number_03\":null,\"experience_03\":null,\"co_investigator_03_tittle_03\":null,\"co_investigator_03_founded_By_03\":null,\"co_investigator_03_fund_Size_03\":null,\"co_investigator_03_duration_Form_03\":null,\"co_investigator_03_duration_To_03\":null,\"co_investigator_03_year_03\":null,\"researchers_name_04\":null,\"designation_04\":null,\"organization_designation_04\":null,\"researchers_email_04\":null,\"researchers_number_04\":null,\"experience_04\":null,\"co_investigator_04_tittle_04\":null,\"co_investigator_04_founded_By_04\":null,\"co_investigator_04_fund_Size_04\":null,\"co_investigator_04_duration_Form_04\":null,\"co_investigator_04_duration_To_04\":null,\"co_investigator_04_year_04\":null,\"researchers_name_05\":null,\"designation_05\":null,\"organization_designation_05\":null,\"researchers_email_05\":null,\"researchers_number_05\":null,\"experience_05\":null,\"co_investigator_05_tittle_05\":null,\"co_investigator_05_founded_By_05\":null,\"co_investigator_05_fund_Size_05\":null,\"co_investigator_05_duration_Form_05\":null,\"co_investigator_05_duration_To_05\":null,\"co_investigator_05_year_05\":null,\"grant_sought\":\"Urgent Grants\",\"amount_sought\":\"BDT 1,500,000 to <=2,000,000\",\"proposal_tittle\":\"asdf\",\"proposal_summary\":\"adsf\",\"Check_list\":\"Independent Researcher Documents\",\"research_proposal01_file_name\":\"assets\\/frontend\\/images\\/researchFile\\/700995887_dhaka_hsc_2023_109046.pdf\"}', '2023-11-26 10:51:26', '2023-11-26 10:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `research_settings`
--

CREATE TABLE `research_settings` (
  `research_settings_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `description` text,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` char(20) NOT NULL,
  `id_number` char(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `nid_birth` varchar(20) DEFAULT NULL,
  `contact_number` varchar(11) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email_verified` char(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 DEFAULT '',
  `status` char(1) DEFAULT NULL COMMENT 'Y=active,N=Deactiove',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `id_number`, `email`, `first_name`, `last_name`, `nid_birth`, `contact_number`, `profile_pic`, `password`, `email_verified`, `email_verified_at`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
('693559401', '2309000001', 'bengals.mahi@gmail.com', 'TTT', 'NNN', '02455665868985566', '01712890075', 'assets/frontend/images/student/693559401_Gopal.png', '$2y$10$EpsNsEEllkksExlE7bgcvONvCj3zncOsDNLyjKLMJMc2qysF5nMyu', 'N', '2023-09-18 14:46:42', '', 'Y', '2023-09-01 09:10:00', '2023-09-01 09:12:01'),
('693716804', '2309000002', 'mail4johny2@gmail.com', 'imtiaz', 'sultan', '19907518377000211', '01687709333', 'assets/frontend/images/student/693716804_brain(1) 1.png', '$2y$10$0rcpsnxqsPh4lUEW0sq0Mewtr4XxnfQnaQmMGz0sKzChRxZySVMQ2', 'N', '2023-09-18 14:46:49', '', 'Y', '2023-09-03 04:53:23', '2023-09-03 04:53:54'),
('695048481', '2309000003', 'admin@bicm.com', 'Md Example', 'Tester', '98765432109', '01767886199', '', '$2y$10$i4pYFQVEm25RXhXLO/k7E.AYBQ4IPm6k.DcLxMfY27gQHytqxenO2', 'N', NULL, '', 'Y', '2023-09-18 14:48:00', '2023-09-18 14:48:00'),
('696326282', '2309000004', 'zyz@zyz.com', 'xyz', 'xyz', '123456', '25552', '', '$2y$10$ZrVd4.4C0USUXru5xoCLf.QR61DGPCr6lSVTZP9XsmZ1T7WYe4TEy', 'N', NULL, '', 'Y', '2023-10-03 09:44:41', '2023-10-03 09:44:41'),
('700933852', '2309000005', 'toushin.java@gmail.com', 'Md Example', 'Tester', '123213123123', '01767886199', '', '$2y$10$dmuLnhwf9JSLmczC6NluNu9TD/PmZWuYF1q4FH8t8V5JGBf/VgPiW', 'N', NULL, '', 'Y', '2023-11-25 17:37:31', '2023-11-25 17:37:31'),
('702286418', '2309000006', 'ahe.motiur@bicm.ac.bd', 'Motiur', 'Rahman', '1921861827', '01739449722', 'assets/frontend/images/student/702286418_Motiur Update Raw.jpg', '$2y$10$RseA4GsK2ZhVdDfrMHtHF.9xIEH1.oEyZakh5bek0EymZY7E4VMu6', 'N', '2023-12-11 09:22:23', '', 'Y', '2023-12-11 09:20:18', '2023-12-11 09:22:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tousin', 'toushin.java@gmail.com', NULL, '$2y$10$baN9lfhUlStbp.5iKQfx2ehuJZLeaQHUkjL1uTXrgw1xT3jQgrFRi', NULL, NULL, NULL, NULL, '2023-06-06 14:28:53', '2023-09-23 15:25:15'),
(2, 'Admin', 'admin@bicm.com', NULL, '$2y$10$DLOrzP/7e0jdiiVNF//fAeRL2PsxxpVtry06Q6joCgMr.QP32P/jC', NULL, NULL, NULL, NULL, '2023-06-21 14:50:58', '2023-06-21 14:50:58'),
(3, 'Motiur Rahman', 'ahe.motiur@bicm.ac.bd', NULL, '$2y$10$n1bxpads4fqxbpcqGC7J7uSDRjAQ.ElvkQPOqM6lfUinuP5Pb8n4K', NULL, NULL, NULL, NULL, '2023-09-25 07:27:26', '2023-09-25 07:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `user_privileges`
--

CREATE TABLE `user_privileges` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` char(2) NOT NULL,
  `privileges` varchar(200) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_privileges`
--

INSERT INTO `user_privileges` (`user_id`, `user_type`, `privileges`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AU', '[\"*\"]', 'Y', '2023-09-22 02:43:11', '2023-09-22 02:43:11'),
(2, 'AU', '[\"DR\",\"*\"]', 'Y', '2023-09-23 02:54:53', '2023-09-22 20:54:53'),
(3, 'AU', '[\"*\"]', 'Y', '2023-09-25 07:27:26', '2023-09-25 07:27:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_settings`
--
ALTER TABLE `about_settings`
  ADD PRIMARY KEY (`about_settings_id`);

--
-- Indexes for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD KEY `agent_id` (`user_id`,`date_time`) USING BTREE,
  ADD KEY `tstamp` (`date_time`) USING BTREE;

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `course_settings`
--
ALTER TABLE `course_settings`
  ADD PRIMARY KEY (`course_settings_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`);

--
-- Indexes for table `events_settings`
--
ALTER TABLE `events_settings`
  ADD PRIMARY KEY (`events_settings_id`);

--
-- Indexes for table `ev_form_groups`
--
ALTER TABLE `ev_form_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ev_form_group_fields`
--
ALTER TABLE `ev_form_group_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `form_data`
--
ALTER TABLE `form_data`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `home_overview`
--
ALTER TABLE `home_overview`
  ADD PRIMARY KEY (`home_overview_id`);

--
-- Indexes for table `home_project`
--
ALTER TABLE `home_project`
  ADD PRIMARY KEY (`home_project_id`);

--
-- Indexes for table `home_service`
--
ALTER TABLE `home_service`
  ADD PRIMARY KEY (`home_service_id`);

--
-- Indexes for table `home_settings`
--
ALTER TABLE `home_settings`
  ADD PRIMARY KEY (`home_settings_id`);

--
-- Indexes for table `home_why`
--
ALTER TABLE `home_why`
  ADD PRIMARY KEY (`home_why_id`);

--
-- Indexes for table `library_settings`
--
ALTER TABLE `library_settings`
  ADD PRIMARY KEY (`library_settings_id`);

--
-- Indexes for table `list_settings`
--
ALTER TABLE `list_settings`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `masters_program`
--
ALTER TABLE `masters_program`
  ADD PRIMARY KEY (`masters_program_id`);

--
-- Indexes for table `masters_settings`
--
ALTER TABLE `masters_settings`
  ADD PRIMARY KEY (`masters_setting_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menu_id`),
  ADD UNIQUE KEY `unique_index` (`parent_id`,`sort_order`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online_settings`
--
ALTER TABLE `online_settings`
  ADD PRIMARY KEY (`online_service_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `research_form`
--
ALTER TABLE `research_form`
  ADD PRIMARY KEY (`reasearch_id`);

--
-- Indexes for table `research_settings`
--
ALTER TABLE `research_settings`
  ADD PRIMARY KEY (`research_settings_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD UNIQUE KEY `id_number` (`id_number`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_privileges`
--
ALTER TABLE `user_privileges`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
