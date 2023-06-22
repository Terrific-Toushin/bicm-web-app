/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bicm_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-06-22 20:51:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for about_menu
-- ----------------------------
DROP TABLE IF EXISTS `about_menu`;
CREATE TABLE `about_menu` (
  `about_menu_id` varchar(10) NOT NULL,
  `sub_menu_id` varchar(10) DEFAULT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`about_menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of about_menu
-- ----------------------------

-- ----------------------------
-- Table structure for about_settings
-- ----------------------------
DROP TABLE IF EXISTS `about_settings`;
CREATE TABLE `about_settings` (
  `about_settings_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`about_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of about_settings
-- ----------------------------

-- ----------------------------
-- Table structure for courses
-- ----------------------------
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `course_id` char(10) NOT NULL,
  `image` text NOT NULL,
  `tittle` char(150) NOT NULL,
  `schedule` char(100) DEFAULT NULL,
  `duration` char(100) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `pedagogyShow` char(1) DEFAULT NULL,
  `pedagogy` text DEFAULT NULL,
  `courseStructureShow` char(1) DEFAULT NULL,
  `courseStructure` text DEFAULT NULL,
  `teachingMethodsShow` char(1) DEFAULT NULL,
  `teachingMethods` text DEFAULT NULL,
  `gradingPolicyShow` char(1) DEFAULT NULL,
  `gradingPolicy` text DEFAULT NULL,
  `feesChargesShow` char(1) DEFAULT NULL,
  `feesCharges` text DEFAULT NULL,
  `downloadShow` char(1) DEFAULT NULL,
  `download` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of courses
-- ----------------------------

-- ----------------------------
-- Table structure for course_settings
-- ----------------------------
DROP TABLE IF EXISTS `course_settings`;
CREATE TABLE `course_settings` (
  `course_settings_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`course_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of course_settings
-- ----------------------------

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `events_id` char(10) NOT NULL,
  `image` text NOT NULL,
  `tittle` char(150) NOT NULL,
  `schedule` char(100) DEFAULT NULL,
  `duration` char(100) DEFAULT NULL,
  `status` char(1) NOT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `pedagogyShow` char(1) DEFAULT NULL,
  `pedagogy` text DEFAULT NULL,
  `courseStructureShow` char(1) DEFAULT NULL,
  `courseStructure` text DEFAULT NULL,
  `teachingMethodsShow` char(1) DEFAULT NULL,
  `teachingMethods` text DEFAULT NULL,
  `gradingPolicyShow` char(1) DEFAULT NULL,
  `gradingPolicy` text DEFAULT NULL,
  `feesChargesShow` char(1) DEFAULT NULL,
  `feesCharges` text DEFAULT NULL,
  `downloadShow` char(1) DEFAULT NULL,
  `download` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`events_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events
-- ----------------------------

-- ----------------------------
-- Table structure for events_settings
-- ----------------------------
DROP TABLE IF EXISTS `events_settings`;
CREATE TABLE `events_settings` (
  `course_settings_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`course_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events_settings
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for library_settings
-- ----------------------------
DROP TABLE IF EXISTS `library_settings`;
CREATE TABLE `library_settings` (
  `library_settings_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`library_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of library_settings
-- ----------------------------

-- ----------------------------
-- Table structure for masters_program
-- ----------------------------
DROP TABLE IF EXISTS `masters_program`;
CREATE TABLE `masters_program` (
  `masters_program_id` char(10) NOT NULL,
  `image` text NOT NULL,
  `tittle` char(150) NOT NULL,
  `schedule` char(100) DEFAULT NULL,
  `duration` char(100) DEFAULT NULL,
  `amount` char(10) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `pedagogyShow` char(1) DEFAULT NULL,
  `pedagogy` text DEFAULT NULL,
  `courseStructureShow` char(1) DEFAULT NULL,
  `courseStructure` text DEFAULT NULL,
  `teachingMethodsShow` char(1) DEFAULT NULL,
  `teachingMethods` text DEFAULT NULL,
  `gradingPolicyShow` char(1) DEFAULT NULL,
  `gradingPolicy` text DEFAULT NULL,
  `feesChargesShow` char(1) DEFAULT NULL,
  `feesCharges` text DEFAULT NULL,
  `downloadShow` char(1) DEFAULT NULL,
  `download` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`masters_program_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of masters_program
-- ----------------------------
INSERT INTO `masters_program` VALUES ('687367085', './frontEnd/assets/images/mastersProgram/job-2.png', 'High Time for Cyberlaw Enforcement and a Future of Work Strategy', '12 May - 3 Nov 2023', 'Total Hours : 144', '5000', 'Y', 'Y', '<p>The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.</p>\r\n\r\n<p>Nonetheless, in Bangladesh, the need for skilled professionals in the financial market in general and the capital market, in particular, has been on the rise. The MAFCM program of BICM, with its world-class curriculum, will sharpen a student&rsquo;s required theoretical, quantitative, and technical skills by providing a blend of rigorous academic and practical application. Hence, the program is expected to bridge the long-felt gap between the skills required and those existing in this dynamic field of financial markets, especially the capital market.</p>\r\n\r\n<p>New innovations in the applications of finance are making it crucial for stakeholders in the industry to keep pace with these developments. BICM is aiming to create the best-equipped financial managers in the country with this uniquely designed program. Those aspiring to excel in a career in finance, banking, merchant banking, asset and funds management, financial analysis, and financial regulation will experience assimilation of essential knowledge and skills in an increasingly challenging financial environment.</p>\r\n\r\n<div class=\"blog_single-part\">\r\n<h2>The objective of the MAFCM Program</h2>\r\n\r\n<p>BICM is offering the &lsquo;Master of Applied Finance and Capital Market&rsquo; (MAFCM) to strengthen the Bangladesh capital market through elevating the knowledge of stakeholders. The capital market is dynamic and is evolving over time both locally and globally. One must be competent enough to excel in the field of capital market with the required set of management, mathematical and technical skills. The MAFCM program is designed to inculcate these skills in students so that they can cater to the needs of competent financial managers.</p>\r\n\r\n<h2>Minimum Credit Requirements</h2>\r\n\r\n<p>The minimum credit requirement for obtaining the MAFCM degree is 51 (fifty-one). Of the total required credits, 48 credits are to be completed as course work and 3 credits are to be earned from project work.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Semesters</h2>\r\n\r\n<p>There shall be two semesters in a calendar year. The Spring semester (January &ndash; June) and Summer semester (July &ndash; December). The Academic Year is the same as the calendar year.</p>\r\n\r\n<h2>Admission/Eligibility Criteria</h2>\r\n\r\n<p>The minimum academic requirement for admission into the program is a 4-year Bachelor&rsquo;s degree (or equivalent) from a recognized institution having minimum 2nd class/division, or Master&rsquo;s degree in case of Bachelor&rsquo;s degree (or equivalent) with a duration of less than 4 years from a recognized institution, having minimum 2nd class/division at Master level. Preference will be given to those having experience in the fields of finance, capital market operations, capital market regulations, capital market policy formulation, capital market research, accounting, auditing, banking etc. Registered/Enrolled students of any accounting and finance professional institute (such as CFA, ICAB, ICMAB, ACCA, CIMA, CPA,ICSB etc.) will also get preference. For foreign degrees, equivalence certificate from the University Grants Commission of Bangladesh has to be provided. All applicants must appear in a written test, followed by a viva-voce for those who pass the written test. The final score for selection will be prepared considering the performance in the written test, viva-voce, previous academic records, and relevant experience. Selections will be made based on the combined score. Members of any accounting and finance profession like CFA, ICAB, ICMAB, ACCA, CMA, CPA, ICSB, etc. and those having GMAT score of at least 500 or GRE score of at least 300 will be eligible for direct admission (Subject to satisfactory appearance in the viva-voce).</p>\r\n</div>', 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, '2023-06-21 17:04:44', '2023-06-21 17:04:44');
INSERT INTO `masters_program` VALUES ('687367208', './frontEnd/assets/images/mastersProgram/blog3.png', 'High Time for Cyberlaw Enforcement and a Future of Work Strategy', '12 May - 3 Nov 2023', 'Total Hours : 144', '5000', 'Y', 'Y', '<p>The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.</p>\r\n\r\n<p>Nonetheless, in Bangladesh, the need for skilled professionals in the financial market in general and the capital market, in particular, has been on the rise. The MAFCM program of BICM, with its world-class curriculum, will sharpen a student&rsquo;s required theoretical, quantitative, and technical skills by providing a blend of rigorous academic and practical application. Hence, the program is expected to bridge the long-felt gap between the skills required and those existing in this dynamic field of financial markets, especially the capital market.</p>\r\n\r\n<p>New innovations in the applications of finance are making it crucial for stakeholders in the industry to keep pace with these developments. BICM is aiming to create the best-equipped financial managers in the country with this uniquely designed program. Those aspiring to excel in a career in finance, banking, merchant banking, asset and funds management, financial analysis, and financial regulation will experience assimilation of essential knowledge and skills in an increasingly challenging financial environment.</p>\r\n\r\n<div class=\"blog_single-part\">\r\n<h2>The objective of the MAFCM Program</h2>\r\n\r\n<p>BICM is offering the &lsquo;Master of Applied Finance and Capital Market&rsquo; (MAFCM) to strengthen the Bangladesh capital market through elevating the knowledge of stakeholders. The capital market is dynamic and is evolving over time both locally and globally. One must be competent enough to excel in the field of capital market with the required set of management, mathematical and technical skills. The MAFCM program is designed to inculcate these skills in students so that they can cater to the needs of competent financial managers.</p>\r\n\r\n<h2>Minimum Credit Requirements</h2>\r\n\r\n<p>The minimum credit requirement for obtaining the MAFCM degree is 51 (fifty-one). Of the total required credits, 48 credits are to be completed as course work and 3 credits are to be earned from project work.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Semesters</h2>\r\n\r\n<p>There shall be two semesters in a calendar year. The Spring semester (January &ndash; June) and Summer semester (July &ndash; December). The Academic Year is the same as the calendar year.</p>\r\n\r\n<h2>Admission/Eligibility Criteria</h2>\r\n\r\n<p>The minimum academic requirement for admission into the program is a 4-year Bachelor&rsquo;s degree (or equivalent) from a recognized institution having minimum 2nd class/division, or Master&rsquo;s degree in case of Bachelor&rsquo;s degree (or equivalent) with a duration of less than 4 years from a recognized institution, having minimum 2nd class/division at Master level. Preference will be given to those having experience in the fields of finance, capital market operations, capital market regulations, capital market policy formulation, capital market research, accounting, auditing, banking etc. Registered/Enrolled students of any accounting and finance professional institute (such as CFA, ICAB, ICMAB, ACCA, CIMA, CPA,ICSB etc.) will also get preference. For foreign degrees, equivalence certificate from the University Grants Commission of Bangladesh has to be provided. All applicants must appear in a written test, followed by a viva-voce for those who pass the written test. The final score for selection will be prepared considering the performance in the written test, viva-voce, previous academic records, and relevant experience. Selections will be made based on the combined score. Members of any accounting and finance profession like CFA, ICAB, ICMAB, ACCA, CMA, CPA, ICSB, etc. and those having GMAT score of at least 500 or GRE score of at least 300 will be eligible for direct admission (Subject to satisfactory appearance in the viva-voce).</p>\r\n</div>', 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, '2023-06-21 17:06:47', '2023-06-21 17:06:47');
INSERT INTO `masters_program` VALUES ('687367390', './frontEnd/assets/images/mastersProgram/job-1.png', 'High Time for Cyberlaw Enforcement', '12 May - 3 Nov 2023', 'Total Hours : 144', '5000', 'Y', 'Y', '<div class=\"tab-pane fade in active\" id=\"tab1\">\r\n<div class=\"page-header\">\r\n<h1><span style=\"color:#333399\">About LL.M. Program</span></h1>\r\n</div>\r\n\r\n<div>\r\n<p>The LL.M. program in Investment and Securities Laws is an advanced program of legal study that is customized to the needs of the students and working legal professionals. Having committed to provide the highest quality of education in the field of securities markets, the NISM has entered into collaboration with India&rsquo;s premier Law University, Maharashtra National Law University, Mumbai (Hereinafter referred as MNLU) for offering this LL.M. program in Investment and Securities Laws. This specialized LL.M. program, designed primarily for the law students intending to work in the financial markets, offers full-time, intensive academic training in the legal regulation of securities and investments in India.</p>\r\n\r\n<p>In line with our mission for the academic excellence, the course offers depth of background in a broad array of topics arising out of the corporate law and securities regulation topics including the regulation of issuance of securities, secondary trading of securities, market regulation, enforcement issues, corporate finance, investment by a person resident outside India, investment advisers, derivatives, regulation of banking and financial institutions, competition law and insolvency laws. This course offers an introduction to the three most important securities laws: The Securities Contract Regulation Act of 1956, Securities Exchange Board of India Act of 1992 and the Depositories Act of 1996. The course also explores the scope of more than 39 regulations framed by SEBI and its impact on structured growth of securities markets in India. The course also focusses on learning the tools of documentation related to the securities market transactions, which would be helping in understanding the nature of disputes that arise in a financial market.</p>\r\n\r\n<p>The program will be delivered by the expert faculty members drawn from both NISM and MNLU. The course will also engage some of the nation&rsquo;s leading advocates in the field of corporate law and securities laws, as well as officers from various financial services regulators, whose work is oriented more toward practice and the profession, as visiting faculty. The Institute also invites from time to time professors of the foreign universities and financial market experts of other countries to take guest lectures.</p>\r\n\r\n<p>LL.M. students are required to be in residence at NISM during the full one academic year. The course also offers practical SMART lab training to the students to make them understand various processes and use of the technology in the securities markets.</p>\r\n\r\n<p>Dedicated to enhancing an interdisciplinary legal and securities market education for the academic community, as well as for experienced legal and business practitioners related to financial markets, the course provides a scope to the sharpening of skills and learning the tools to be an effective business lawyer.</p>\r\n</div>\r\n</div>', 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, '2023-06-21 17:09:49', '2023-06-21 17:09:49');
INSERT INTO `masters_program` VALUES ('687367994', './frontEnd/assets/images/mastersProgram/job-1.png', 'High Time for Cyberlaw Enforcement and something', '12 May - 3 Nov 2023', 'Total Hours : 144', '5000', 'Y', 'Y', '<div class=\"tab-pane fade in active\" id=\"tab1\">\r\n<div class=\"page-header\">\r\n<h1><span style=\"color:#333399\">About LL.M. Program</span></h1>\r\n</div>\r\n\r\n<div>\r\n<p>The LL.M. program in Investment and Securities Laws is an advanced program of legal study that is customized to the needs of the students and working legal professionals. Having committed to provide the highest quality of education in the field of securities markets, the NISM has entered into collaboration with India&rsquo;s premier Law University, Maharashtra National Law University, Mumbai (Hereinafter referred as MNLU) for offering this LL.M. program in Investment and Securities Laws. This specialized LL.M. program, designed primarily for the law students intending to work in the financial markets, offers full-time, intensive academic training in the legal regulation of securities and investments in India.</p>\r\n\r\n<p>In line with our mission for the academic excellence, the course offers depth of background in a broad array of topics arising out of the corporate law and securities regulation topics including the regulation of issuance of securities, secondary trading of securities, market regulation, enforcement issues, corporate finance, investment by a person resident outside India, investment advisers, derivatives, regulation of banking and financial institutions, competition law and insolvency laws. This course offers an introduction to the three most important securities laws: The Securities Contract Regulation Act of 1956, Securities Exchange Board of India Act of 1992 and the Depositories Act of 1996. The course also explores the scope of more than 39 regulations framed by SEBI and its impact on structured growth of securities markets in India. The course also focusses on learning the tools of documentation related to the securities market transactions, which would be helping in understanding the nature of disputes that arise in a financial market.</p>\r\n\r\n<p>The program will be delivered by the expert faculty members drawn from both NISM and MNLU. The course will also engage some of the nation&rsquo;s leading advocates in the field of corporate law and securities laws, as well as officers from various financial services regulators, whose work is oriented more toward practice and the profession, as visiting faculty. The Institute also invites from time to time professors of the foreign universities and financial market experts of other countries to take guest lectures.</p>\r\n\r\n<p>LL.M. students are required to be in residence at NISM during the full one academic year. The course also offers practical SMART lab training to the students to make them understand various processes and use of the technology in the securities markets.</p>\r\n\r\n<p>Dedicated to enhancing an interdisciplinary legal and securities market education for the academic community, as well as for experienced legal and business practitioners related to financial markets, the course provides a scope to the sharpening of skills and learning the tools to be an effective business lawyer.</p>\r\n</div>\r\n</div>', 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, '2023-06-21 17:19:53', '2023-06-21 17:19:53');

-- ----------------------------
-- Table structure for masters_settings
-- ----------------------------
DROP TABLE IF EXISTS `masters_settings`;
CREATE TABLE `masters_settings` (
  `masters_setting_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`masters_setting_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of masters_settings
-- ----------------------------
INSERT INTO `masters_settings` VALUES ('687369907', 'assets/frontend/images/masterPage/argument-1.png', 'MASTER OF APPLIEDFINANCE AND CAPITAL MARKET (MAFCM)', 'Understanding your vision means a lot to us. So, we start with getting the sense of the project, its dynamics as well as technological requirements s and most importantly your demands and expectations to perfectly outline the structure, specifications and probable duration of your project.', '2023-06-21 17:51:46', '2023-06-21 19:18:38');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('3', '2014_10_12_200000_add_two_factor_columns_to_users_table', '1');
INSERT INTO `migrations` VALUES ('4', '2019_08_19_000000_create_failed_jobs_table', '1');
INSERT INTO `migrations` VALUES ('5', '2019_12_14_000001_create_personal_access_tokens_table', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for research_settings
-- ----------------------------
DROP TABLE IF EXISTS `research_settings`;
CREATE TABLE `research_settings` (
  `research_settings_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`research_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of research_settings
-- ----------------------------

-- ----------------------------
-- Table structure for service_settings
-- ----------------------------
DROP TABLE IF EXISTS `service_settings`;
CREATE TABLE `service_settings` (
  `service_settings_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`service_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of service_settings
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Tousin', 'toushin.java@gmail.com', null, '$2y$10$bOhOiaBRd.yteJY2gnLYQ.bLwgTQjjHLSCObuZFcp.LBq0RkwU4SG', null, null, null, null, '2023-06-06 14:28:53', '2023-06-06 14:28:53');
INSERT INTO `users` VALUES ('2', 'Admin', 'admin@bicm.com', null, '$2y$10$DLOrzP/7e0jdiiVNF//fAeRL2PsxxpVtry06Q6joCgMr.QP32P/jC', null, null, null, null, '2023-06-21 14:50:58', '2023-06-21 14:50:58');
