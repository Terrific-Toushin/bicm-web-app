/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bicm_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-07-23 03:36:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for about_settings
-- ----------------------------
DROP TABLE IF EXISTS `about_settings`;
CREATE TABLE `about_settings` (
  `about_settings_id` varchar(10) NOT NULL,
  `menu_name` varchar(150) NOT NULL,
  `position` char(1) DEFAULT '',
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`about_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of about_settings
-- ----------------------------
INSERT INTO `about_settings` VALUES ('687539869', 'about', '0', 'assets/frontend/images/aboutPage/blog-singal-banner-1.png', 'About', '<h3>About</h3>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market (BICM) was established as a institution for imparting practical capital market education and training on July 24, 2008. The Institute is gradually emerging as a center of excellence for professional development of capital market intermediaries and full spectrum of market professionals through disseminating recent and updated theoretical and practical knowledge.</p>\r\n\r\n<p><u><strong>Background of BICM</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute fulfilled the long felt demand of market intermediaries as well as development partners. The idea was first mooted by Chittagong Stock Exchange and a feasibility study was carried out under World Bank managed multi-grant TA, FIRST initiative. The expatriate consultants recommended setting-up a &ldquo;Securities Institute&rdquo; in Bangladesh for bridging the gap between the competence and skills required and exist.Later, UNDP as well as ADB under their respective TA recommended for establishment of a &ldquo;Securities Industries Development Center&rdquo; and a &ldquo;National Capital Market Institute&rdquo; autonomous in nature.</p>\r\n\r\n<p><u><strong>Board Members and Manpower</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">In 2010, the government approved organogram of BICM that has similarity to a public university, at small scale, having 97 employees including 27 faculty members. In 2013, the government also approved the compensation structure of the institute. Under the leadership of Professor Shibli Rubayat ul Islam, Chairman, Bangladesh Securities and Exchange Commission (BSEC) [Contact- Tel: +88-02-9563713], the Institute has got a competent Board of Directors with a wide range of expertise representing cross-section of stakeholders that includes government, regulator, market intermediaries, exchanges, academia, and different professional bodies.</p>\r\n\r\n<p style=\"text-align:justify\">A total of 60 staff members including 12 Faculty Members and 17 officers have been working in the Institute. Executive President is heading the management of the&nbsp; Institute. Contact &ndash; Tel: +88-02-9515771 or ep@bicm.ac.bd&nbsp;.</p>\r\n\r\n<p><u><strong>Infrastructural Facilities</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is housed at 18,508 sqft. area in the commercial hub of the city. BICM is equipped with state of the art education and professional training facilities as well as advanced learning amenities to arrange and organize national and international training programs, workshops, seminars and conferences. It has the capacity to accommodate 250 participants at one go in its class rooms of different capacities, conference room and computer lab. It also has break-away-session rooms and digital library for brain storming and carrying out research.</p>\r\n\r\n<p style=\"text-align:justify\">To augment the &lsquo;Vision 2021&rsquo;, The Institute is equipped with latest ICT facilities. The audio-visual and video conferencing facilities with dedicated 20 mbps fiber optics internet connection will enable the institute to establish its linkage with institutions from home and abroad in disseminating knowledge.</p>\r\n\r\n<p style=\"text-align:justify\">BICM has the unique and enriched library of the country that is the repository of business, finance, trade, banking, insurance, ICT, law and wide array of financial and other titles. To date, BICM has stocked over 10,000 physical books and in process of procuring e- books, videos and other learning and reference materials. Obtaining the permission, the Institute is also contemplating to hook up its server with the e- library of University Grant Commission, Bangladesh.</p>\r\n\r\n<p><u><strong>Financing</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">Since FY 2009-10, the Government of the People&rsquo;s Republic of Bangladesh has been continuously financing BICM. From this funding, the cost of infrastructural facilities and operational expenses of the institute has been met.</p>\r\n\r\n<p><u><strong>Academic Activities of BICM</strong></u></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong><em>Inauguration of Academic Activities </em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">On 09 December 2010, Mr. Abul Maal Abdul Muhith, the then Minister, Ministry of Finance, Government of the People&rsquo;s Republic of Bangladesh inaugurated the academic activities of BICM. The government has been extending its unflinching support to elevate the institute as a center of excellence.</p>\r\n\r\n<p><u><strong><em>Postgraduate Diploma Course</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM started its flagship &ldquo;Postgraduate Diploma Program in Capital Market&rdquo; in January 2015 for existing professionals of the capital market and those who aspire to start their career in the capital market.</p>\r\n\r\n<p><strong><em><u>Investors&rsquo; Education Program</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">To fulfill the commitment of the government of increasing awareness of general investors, BICM has been conducting the &lsquo;Investors Education Program&rsquo; free of cost. General investors have been encouraged to assess the financial health of the listed companies prior to making an investment. To date, 2900 existing investors and future/ potential investors have been trained on the basics of capital market investment. Considering the increasing demand of the investors, BICM has started offering four investor awareness programs monthly instead of two.</p>\r\n\r\n<p><u><strong><em>Specialized Courses for professionals and Market Intermediaries</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To date, BICM has conducted a handsome number of &ldquo;Certification Programs&rdquo; of different duration (two weeks to six weeks long). Participants have been trained and certified in the areas of Securities Laws, Corporate Governance, Financial Statements Analysis, Technical Analysis, Portfolio Management, Equity Valuation, Legal Drafting, International Financial Reporting Standard, Capital Raising and Investment in the Capital Market, Investment Analysis and Securities Valuation, Trading Software, Financial Journalism, etc.</p>\r\n\r\n<p><u><strong>Future Activities of the Institute</strong></u></p>\r\n\r\n<p><u><strong><em>Training on New Products of Capital Market</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To implement the recent reforms taken by the Government as to allowing trading of derivatives, commodities, and exchange traded fund, BICM is designing curricula and training programs on the same.</p>\r\n\r\n<p><u><strong><em>Masters Program</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute expects to start the &ldquo;Master of Applied Finance and Capital Market&rdquo; in mid 2021. The program is affiliated with the Faculty of Business Studies, University of Dhaka. Admission announcement will be made soon and the classes of the first batch of the program will tentatively start in July 2021.</p>\r\n\r\n<p style=\"text-align:justify\">To know more about the program, please contact the Registrar&rsquo;s Office of BICM.&nbsp;</p>\r\n\r\n<p><strong><em><u>Mandatory Licensing Examination</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">With the help of expatriate consultant engaged under ADB- TA project, BICM has designed course materials for &ldquo;Mandatory Licensing Examination for Securities Market Intermediaries&rdquo;. If authorized by BSEC, the institute will impart training and conduct examination on the same.</p>\r\n\r\n<p><u><strong><em>Distance Learning Programs</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is also preparing and equipping itself to start &ldquo;Distance Learning Programs&rdquo; at school and college level for wide dissemination of capital market knowledge at national sphere.</p>\r\n\r\n<p><u><strong><em>Research and Knowledge Management Activities</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">There is paucity of research, case study and documentation on financial market in general and capital market in particular. BICM will put maximum emphasis and invest time, energy and efforts in research and knowledge management activities to bridge the gap. These activities of BICM will be aiming at setting standards, preparing best-practice examples, assisting policy formulation and preparing guidelines to help the stakeholders. The research outcomes, lessons of cross jurisdictional study, policy papers and recommendations will facilitate the government and policy makers in devising policy, regulator in formulating rules and professionals in implementation and practice.</p>\r\n\r\n<p><strong><u>Co-operation from Development Partners</u></strong></p>\r\n\r\n<p style=\"text-align:justify\">Since there is dearth of knowledge and expertise as of new instruments viz. derivatives, futures, commodities, exchange traded funds (ETFs), structured products, state of the art securities and settlement system, cooperation of development partners is of utmost importance to equip faculty members. This co-operation, in the form of technical assistance and fielding capital market experts, will enhance and elevate the knowledge and expertise of the faculty members for enabling them to impart quality education and training.</p>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market, with the policy direction of Bangladesh government and under the leadership of BSEC, is confident to play a catalytic role in equipping a fair, transparent, informed and vibrant capital market; and poised to be a regional hub of excellence in education, research and knowledge management in the days ahead.</p>', 'about-bicm', 'Y', '2023-06-23 17:04:28', '2023-06-23 17:04:28');
INSERT INTO `about_settings` VALUES ('687540007', 'Mission & Vision', '1', 'assets/frontend/images/aboutPage/blog-singal-banner-2.png', 'Mission', '<div class=\"about-site\">\r\n<h3>Mission</h3>\r\n\r\n<p style=\"text-align:justify\">BICM&rsquo;s core purpose is to bridge the gap between the current level of knowledge, skills and competency of Bangladesh capital market participants and the level required for participants in a world class capital market.</p>\r\n\r\n<p><strong>Values</strong></p>\r\n\r\n<p style=\"text-align:justify\">In delivering its programs to the capital markets in Bangladesh, BICM, its students and staff will adhere to the following values:</p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>Excellence</li>\r\n	<li>Dignity of each person</li>\r\n	<li>Professionalism</li>\r\n	<li>Flexibility</li>\r\n	<li>Integrity</li>\r\n</ul>\r\n\r\n<p><strong>Vision of BICM in next 5 years time</strong></p>\r\n\r\n<p>By December 31, 2015 Bangladesh Institute of Capital Market is aiming for to:</p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>Be generally recognized as the pre-eminent provider of high quality practical education, training and assessment in the Bangladesh capital markets.</li>\r\n	<li>Be an effective partnership between the public sector and the private sector in fostering and enhancing the knowledge on capital market.</li>\r\n	<li>Be administering regularly updated mandatory licensing examinations nationally</li>\r\n	<li>Be offering a range of training courses in different formats to support the mandatory licensing examinations</li>\r\n	<li>Be organizing and promoting training and research in securities and financial market, investment and related<br />\r\n	matters for the public benefit;</li>\r\n	<li>Be organizing and conducting examination, publish results thereof and award certificates, diplomas and otherdistinctions</li>\r\n	<li>Be offering a range of formal courses of 1 [one] year and lesser duration to meet demonstrated demand in specific market areas</li>\r\n	<li>Be offering course on financial market governance</li>\r\n	<li>Be offering a range of other short courses to meet demonstrated industry needs</li>\r\n</ul>\r\n\r\n<p><strong>Strengths and Opportunities of BICM</strong></p>\r\n\r\n<p><strong>a. Strengths of BICM</strong></p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>Extensive industry support for the institute has already been gained. This is demonstrated by the quality and commitment of the sponsors of the institute.</li>\r\n	<li>The level and diversity of funding support already attracted to the institute demonstrates a significant commitment from both the Bangladesh government and from Key Sponsors.</li>\r\n	<li>The use of public/private partnership principles in the operation of the institute reinforces the level of government and industry support and commitment.</li>\r\n	<li>The very high quality and large scale of the training and office facilities position the institute as a quality professional national training institute.</li>\r\n	<li>The support from the capital markets regulator, the Securities and Exchange Commission, Bangladesh is a significant strength; the responsibility to conduct the Bangladesh mandatory securities licensing examinations will position BICM as a critical part of the nation&rsquo;s capital markets infrastructure.</li>\r\n	<li>There is a commitment from development partners, such as the World Bank and the Asian Development Bank. ADB and World Bank, in particular, have expressed interest in providing future tangible support to the BICM.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>The level of public interest and the fact that there has been no ongoing practical capital market training (delivered professionally) in Bangladesh to date means that there is probably considerable latent demand for such training.</li>\r\n	<li>The responsibility to provide mandatory securities licensing examinations means that there is likely to be both good initial and ongoing demand from persons currently working in the industry as well as ongoing demand from those seeking to work in the industry.</li>\r\n</ul>\r\n\r\n<p><strong>Opportunities in the market</strong></p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>The level of public interest and the fact that there has been no ongoing practical capital market training (delivered professionally) in Bangladesh to date means that there is probably considerable latent demand for such training.</li>\r\n	<li>The responsibility to provide mandatory securities licensing examinations means that there is likely to be both good initial and ongoing demand from persons currently working in the industry as well as ongoing demand from those seeking to work in the industry.</li>\r\n</ul>\r\n</div>', 'mission-vision', 'Y', '2023-06-23 17:06:46', '2023-06-23 17:06:46');

-- ----------------------------
-- Table structure for courses
-- ----------------------------
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `course_id` char(10) NOT NULL,
  `page_id` char(10) DEFAULT '',
  `image` text NOT NULL,
  `tittle` char(150) NOT NULL,
  `schedule` char(100) DEFAULT NULL,
  `duration` char(100) DEFAULT NULL,
  `amount` char(18) DEFAULT NULL,
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
INSERT INTO `courses` VALUES ('687502012', '688233618', 'assets/frontend/images/courses/blog3.png', 'High Time for Cyberlaw Enforcement', '12 May - 3 Nov 2023', 'Total Hours : 144', '5000', 'Y', 'Y', '<div class=\"tab-pane row active\" id=\"about\">\r\n<div class=\"row\">\r\n<div class=\"blog_single-part\">\r\n<h2>About</h2>\r\n\r\n<p>The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.</p>\r\n\r\n<p>Nonetheless, in Bangladesh, the need for skilled professionals in the financial market in general and the capital market, in particular, has been on the rise. The MAFCM program of BICM, with its world-class curriculum, will sharpen a student&rsquo;s required theoretical, quantitative, and technical skills by providing a blend of rigorous academic and practical application. Hence, the program is expected to bridge the long-felt gap between the skills required and those existing in this dynamic field of financial markets, especially the capital market.</p>\r\n\r\n<p>New innovations in the applications of finance are making it crucial for stakeholders in the industry to keep pace with these developments. BICM is aiming to create the best-equipped financial managers in the country with this uniquely designed program. Those aspiring to excel in a career in finance, banking, merchant banking, asset and funds management, financial analysis, and financial regulation will experience assimilation of essential knowledge and skills in an increasingly challenging financial environment.</p>\r\n</div>\r\n\r\n<div class=\"blog_single-part\">\r\n<h2>The objective of the MAFCM Program</h2>\r\n\r\n<p>BICM is offering the &lsquo;Master of Applied Finance and Capital Market&rsquo; (MAFCM) to strengthen the Bangladesh capital market through elevating the knowledge of stakeholders. The capital market is dynamic and is evolving over time both locally and globally. One must be competent enough to excel in the field of capital market with the required set of management, mathematical and technical skills. The MAFCM program is designed to inculcate these skills in students so that they can cater to the needs of competent financial managers.</p>\r\n\r\n<h2>Minimum Credit Requirements</h2>\r\n\r\n<p>The minimum credit requirement for obtaining the MAFCM degree is 51 (fifty-one). Of the total required credits, 48 credits are to be completed as course work and 3 credits are to be earned from project work.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Semesters</h2>\r\n\r\n<p>There shall be two semesters in a calendar year. The Spring semester (January &ndash; June) and Summer semester (July &ndash; December). The Academic Year is the same as the calendar year.</p>\r\n\r\n<h2>Admission/Eligibility Criteria</h2>\r\n\r\n<p>The minimum academic requirement for admission into the program is a 4-year Bachelor&rsquo;s degree (or equivalent) from a recognized institution having minimum 2nd class/division, or Master&rsquo;s degree in case of Bachelor&rsquo;s degree (or equivalent) with a duration of less than 4 years from a recognized institution, having minimum 2nd class/division at Master level. Preference will be given to those having experience in the fields of finance, capital market operations, capital market regulations, capital market policy formulation, capital market research, accounting, auditing, banking etc. Registered/Enrolled students of any accounting and finance professional institute (such as CFA, ICAB, ICMAB, ACCA, CIMA, CPA,ICSB etc.) will also get preference. For foreign degrees, equivalence certificate from the University Grants Commission of Bangladesh has to be provided. All applicants must appear in a written test, followed by a viva-voce for those who pass the written test. The final score for selection will be prepared considering the performance in the written test, viva-voce, previous academic records, and relevant experience. Selections will be made based on the combined score. Members of any accounting and finance profession like CFA, ICAB, ICMAB, ACCA, CMA, CPA, ICSB, etc. and those having GMAT score of at least 500 or GRE score of at least 300 will be eligible for direct admission (Subject to satisfactory appearance in the viva-voce).</p>\r\n</div>\r\n</div>\r\n</div>', 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, '2023-06-23 06:33:31', '2023-07-08 18:24:27');
INSERT INTO `courses` VALUES ('687520975', null, 'assets/frontend/images/courses/discovery 1.png', 'Data Mining', '12 May - 3 Nov 2023', 'Total Hours : 144', '5000', 'Y', 'Y', '<h3>About</h3>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market (BICM) was established as a institution for imparting practical capital market education and training on July 24, 2008. The Institute is gradually emerging as a center of excellence for professional development of capital market intermediaries and full spectrum of market professionals through disseminating recent and updated theoretical and practical knowledge.</p>\r\n\r\n<p><u><strong>Background of BICM</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute fulfilled the long felt demand of market intermediaries as well as development partners. The idea was first mooted by Chittagong Stock Exchange and a feasibility study was carried out under World Bank managed multi-grant TA, FIRST initiative. The expatriate consultants recommended setting-up a &ldquo;Securities Institute&rdquo; in Bangladesh for bridging the gap between the competence and skills required and exist.Later, UNDP as well as ADB under their respective TA recommended for establishment of a &ldquo;Securities Industries Development Center&rdquo; and a &ldquo;National Capital Market Institute&rdquo; autonomous in nature.</p>\r\n\r\n<p><u><strong>Board Members and Manpower</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">In 2010, the government approved organogram of BICM that has similarity to a public university, at small scale, having 97 employees including 27 faculty members. In 2013, the government also approved the compensation structure of the institute. Under the leadership of Professor Shibli Rubayat ul Islam, Chairman, Bangladesh Securities and Exchange Commission (BSEC) [Contact- Tel: +88-02-9563713], the Institute has got a competent Board of Directors with a wide range of expertise representing cross-section of stakeholders that includes government, regulator, market intermediaries, exchanges, academia, and different professional bodies.</p>\r\n\r\n<p style=\"text-align:justify\">A total of 60 staff members including 12 Faculty Members and 17 officers have been working in the Institute. Executive President is heading the management of the&nbsp; Institute. Contact &ndash; Tel: +88-02-9515771 or ep@bicm.ac.bd&nbsp;.</p>\r\n\r\n<p><u><strong>Infrastructural Facilities</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is housed at 18,508 sqft. area in the commercial hub of the city. BICM is equipped with state of the art education and professional training facilities as well as advanced learning amenities to arrange and organize national and international training programs, workshops, seminars and conferences. It has the capacity to accommodate 250 participants at one go in its class rooms of different capacities, conference room and computer lab. It also has break-away-session rooms and digital library for brain storming and carrying out research.</p>\r\n\r\n<p style=\"text-align:justify\">To augment the &lsquo;Vision 2021&rsquo;, The Institute is equipped with latest ICT facilities. The audio-visual and video conferencing facilities with dedicated 20 mbps fiber optics internet connection will enable the institute to establish its linkage with institutions from home and abroad in disseminating knowledge.</p>\r\n\r\n<p style=\"text-align:justify\">BICM has the unique and enriched library of the country that is the repository of business, finance, trade, banking, insurance, ICT, law and wide array of financial and other titles. To date, BICM has stocked over 10,000 physical books and in process of procuring e- books, videos and other learning and reference materials. Obtaining the permission, the Institute is also contemplating to hook up its server with the e- library of University Grant Commission, Bangladesh.</p>\r\n\r\n<p><u><strong>Financing</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">Since FY 2009-10, the Government of the People&rsquo;s Republic of Bangladesh has been continuously financing BICM. From this funding, the cost of infrastructural facilities and operational expenses of the institute has been met.</p>\r\n\r\n<p><u><strong>Academic Activities of BICM</strong></u></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong><em>Inauguration of Academic Activities </em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">On 09 December 2010, Mr. Abul Maal Abdul Muhith, the then Minister, Ministry of Finance, Government of the People&rsquo;s Republic of Bangladesh inaugurated the academic activities of BICM. The government has been extending its unflinching support to elevate the institute as a center of excellence.</p>\r\n\r\n<p><u><strong><em>Postgraduate Diploma Course</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM started its flagship &ldquo;Postgraduate Diploma Program in Capital Market&rdquo; in January 2015 for existing professionals of the capital market and those who aspire to start their career in the capital market.</p>\r\n\r\n<p><strong><em><u>Investors&rsquo; Education Program</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">To fulfill the commitment of the government of increasing awareness of general investors, BICM has been conducting the &lsquo;Investors Education Program&rsquo; free of cost. General investors have been encouraged to assess the financial health of the listed companies prior to making an investment. To date, 2900 existing investors and future/ potential investors have been trained on the basics of capital market investment. Considering the increasing demand of the investors, BICM has started offering four investor awareness programs monthly instead of two.</p>\r\n\r\n<p><u><strong><em>Specialized Courses for professionals and Market Intermediaries</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To date, BICM has conducted a handsome number of &ldquo;Certification Programs&rdquo; of different duration (two weeks to six weeks long). Participants have been trained and certified in the areas of Securities Laws, Corporate Governance, Financial Statements Analysis, Technical Analysis, Portfolio Management, Equity Valuation, Legal Drafting, International Financial Reporting Standard, Capital Raising and Investment in the Capital Market, Investment Analysis and Securities Valuation, Trading Software, Financial Journalism, etc.</p>\r\n\r\n<p><u><strong>Future Activities of the Institute</strong></u></p>\r\n\r\n<p><u><strong><em>Training on New Products of Capital Market</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To implement the recent reforms taken by the Government as to allowing trading of derivatives, commodities, and exchange traded fund, BICM is designing curricula and training programs on the same.</p>\r\n\r\n<p><u><strong><em>Masters Program</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute expects to start the &ldquo;Master of Applied Finance and Capital Market&rdquo; in mid 2021. The program is affiliated with the Faculty of Business Studies, University of Dhaka. Admission announcement will be made soon and the classes of the first batch of the program will tentatively start in July 2021.</p>\r\n\r\n<p style=\"text-align:justify\">To know more about the program, please contact the Registrar&rsquo;s Office of BICM.&nbsp;</p>\r\n\r\n<p><strong><em><u>Mandatory Licensing Examination</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">With the help of expatriate consultant engaged under ADB- TA project, BICM has designed course materials for &ldquo;Mandatory Licensing Examination for Securities Market Intermediaries&rdquo;. If authorized by BSEC, the institute will impart training and conduct examination on the same.</p>\r\n\r\n<p><u><strong><em>Distance Learning Programs</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is also preparing and equipping itself to start &ldquo;Distance Learning Programs&rdquo; at school and college level for wide dissemination of capital market knowledge at national sphere.</p>\r\n\r\n<p><u><strong><em>Research and Knowledge Management Activities</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">There is paucity of research, case study and documentation on financial market in general and capital market in particular. BICM will put maximum emphasis and invest time, energy and efforts in research and knowledge management activities to bridge the gap. These activities of BICM will be aiming at setting standards, preparing best-practice examples, assisting policy formulation and preparing guidelines to help the stakeholders. The research outcomes, lessons of cross jurisdictional study, policy papers and recommendations will facilitate the government and policy makers in devising policy, regulator in formulating rules and professionals in implementation and practice.</p>\r\n\r\n<p><strong><u>Co-operation from Development Partners</u></strong></p>\r\n\r\n<p style=\"text-align:justify\">Since there is dearth of knowledge and expertise as of new instruments viz. derivatives, futures, commodities, exchange traded funds (ETFs), structured products, state of the art securities and settlement system, cooperation of development partners is of utmost importance to equip faculty members. This co-operation, in the form of technical assistance and fielding capital market experts, will enhance and elevate the knowledge and expertise of the faculty members for enabling them to impart quality education and training.</p>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market, with the policy direction of Bangladesh government and under the leadership of BSEC, is confident to play a catalytic role in equipping a fair, transparent, informed and vibrant capital market; and poised to be a regional hub of excellence in education, research and knowledge management in the days ahead.</p>', 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, 'N', null, '2023-06-23 11:49:34', '2023-06-23 11:49:34');

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
INSERT INTO `course_settings` VALUES ('687501152', 'assets/frontend/images/coursePage/about2.png', 'Certificate courses and training', 'The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.', '2023-06-23 06:19:11', '2023-06-23 06:19:11');

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `events_id` char(10) NOT NULL,
  `page_id` char(10) DEFAULT '',
  `image` text NOT NULL,
  `tittle` char(150) NOT NULL,
  `schedule` char(100) DEFAULT NULL,
  `duration` char(100) DEFAULT NULL,
  `amount` char(18) DEFAULT NULL,
  `author` varchar(150) DEFAULT NULL,
  `shortDescription` text DEFAULT NULL,
  `status` char(1) NOT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `pedagogyShow` char(1) DEFAULT NULL,
  `pedagogy` text DEFAULT NULL,
  `courseStructureShow` char(1) DEFAULT NULL,
  `courseStructure` text DEFAULT NULL,
  `teachingMethodsShow` char(1) DEFAULT NULL,
  `teachingMethods` text DEFAULT NULL,
  `downloadShow` char(1) DEFAULT NULL,
  `download` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`events_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events
-- ----------------------------
INSERT INTO `events` VALUES ('687509889', '688233822', 'assets/frontend/images/events/argument-3.png', 'Admission test result of Spring 2023 (2nd batch) of the MAFCM program', '3 Nov 2023', '10:00pm', null, 'Imtiaz', 'Understanding your vision means a lot to us. So, we start with getting the sense of the project, its dynamics as well as technological requirements s and most importantly your demands and expectations to perfectly outline the structure, specifications and probable duration of your project.', 'Y', 'Y', '<div class=\"tab-pane row active\" id=\"about\">\r\n<div class=\"row\">\r\n<div class=\"blog_single-part\">\r\n<h2>About</h2>\r\n\r\n<p>The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.</p>\r\n\r\n<p>Nonetheless, in Bangladesh, the need for skilled professionals in the financial market in general and the capital market, in particular, has been on the rise. The MAFCM program of BICM, with its world-class curriculum, will sharpen a student&rsquo;s required theoretical, quantitative, and technical skills by providing a blend of rigorous academic and practical application. Hence, the program is expected to bridge the long-felt gap between the skills required and those existing in this dynamic field of financial markets, especially the capital market.</p>\r\n\r\n<p>New innovations in the applications of finance are making it crucial for stakeholders in the industry to keep pace with these developments. BICM is aiming to create the best-equipped financial managers in the country with this uniquely designed program. Those aspiring to excel in a career in finance, banking, merchant banking, asset and funds management, financial analysis, and financial regulation will experience assimilation of essential knowledge and skills in an increasingly challenging financial environment.</p>\r\n</div>\r\n\r\n<div class=\"blog_single-part\">\r\n<h2>The objective of the MAFCM Program</h2>\r\n\r\n<p>BICM is offering the &lsquo;Master of Applied Finance and Capital Market&rsquo; (MAFCM) to strengthen the Bangladesh capital market through elevating the knowledge of stakeholders. The capital market is dynamic and is evolving over time both locally and globally. One must be competent enough to excel in the field of capital market with the required set of management, mathematical and technical skills. The MAFCM program is designed to inculcate these skills in students so that they can cater to the needs of competent financial managers.</p>\r\n\r\n<h2>Minimum Credit Requirements</h2>\r\n\r\n<p>The minimum credit requirement for obtaining the MAFCM degree is 51 (fifty-one). Of the total required credits, 48 credits are to be completed as course work and 3 credits are to be earned from project work.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Semesters</h2>\r\n\r\n<p>There shall be two semesters in a calendar year. The Spring semester (January &ndash; June) and Summer semester (July &ndash; December). The Academic Year is the same as the calendar year.</p>\r\n\r\n<h2>Admission/Eligibility Criteria</h2>\r\n\r\n<p>The minimum academic requirement for admission into the program is a 4-year Bachelor&rsquo;s degree (or equivalent) from a recognized institution having minimum 2nd class/division, or Master&rsquo;s degree in case of Bachelor&rsquo;s degree (or equivalent) with a duration of less than 4 years from a recognized institution, having minimum 2nd class/division at Master level. Preference will be given to those having experience in the fields of finance, capital market operations, capital market regulations, capital market policy formulation, capital market research, accounting, auditing, banking etc. Registered/Enrolled students of any accounting and finance professional institute (such as CFA, ICAB, ICMAB, ACCA, CIMA, CPA,ICSB etc.) will also get preference. For foreign degrees, equivalence certificate from the University Grants Commission of Bangladesh has to be provided. All applicants must appear in a written test, followed by a viva-voce for those who pass the written test. The final score for selection will be prepared considering the performance in the written test, viva-voce, previous academic records, and relevant experience. Selections will be made based on the combined score. Members of any accounting and finance profession like CFA, ICAB, ICMAB, ACCA, CMA, CPA, ICSB, etc. and those having GMAT score of at least 500 or GRE score of at least 300 will be eligible for direct admission (Subject to satisfactory appearance in the viva-voce).</p>\r\n</div>\r\n</div>\r\n</div>', 'N', null, 'N', null, 'N', null, 'N', null, '2023-06-23 08:44:48', '2023-07-08 18:26:15');

-- ----------------------------
-- Table structure for events_settings
-- ----------------------------
DROP TABLE IF EXISTS `events_settings`;
CREATE TABLE `events_settings` (
  `events_settings_id` varchar(10) NOT NULL,
  `banner` char(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`events_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of events_settings
-- ----------------------------
INSERT INTO `events_settings` VALUES ('687509125', 'assets/frontend/images/eventPage/about3.png', 'New genration programing', 'The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications.', '2023-06-23 08:32:04', '2023-06-23 08:32:04');

-- ----------------------------
-- Table structure for ev_form_groups
-- ----------------------------
DROP TABLE IF EXISTS `ev_form_groups`;
CREATE TABLE `ev_form_groups` (
  `id` char(12) NOT NULL DEFAULT '',
  `name` char(255) CHARACTER SET utf8mb4 NOT NULL,
  `status` char(1) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ev_form_groups
-- ----------------------------
INSERT INTO `ev_form_groups` VALUES ('0380689861', 'Contact with us', 'Y', '2023-07-20 13:47:10', '2023-07-20 13:47:10');
INSERT INTO `ev_form_groups` VALUES ('1053500961', 'Personal Information', 'Y', '2023-07-22 19:18:21', '2023-07-22 19:18:21');
INSERT INTO `ev_form_groups` VALUES ('5225500961', 'Employment Information (পেশা/চাকুরির তথ্য)', 'Y', '2023-07-22 19:47:05', '2023-07-22 19:47:05');

-- ----------------------------
-- Table structure for ev_form_group_fields
-- ----------------------------
DROP TABLE IF EXISTS `ev_form_group_fields`;
CREATE TABLE `ev_form_group_fields` (
  `id` char(12) NOT NULL DEFAULT '0',
  `group_id` char(12) NOT NULL DEFAULT '',
  `flabel` char(255) CHARACTER SET utf8mb4 NOT NULL,
  `fname` char(255) NOT NULL DEFAULT '',
  `fid` char(255) NOT NULL DEFAULT '',
  `ftype` char(2) NOT NULL DEFAULT '' COMMENT 'FT=Text, FE=Email, FP=Password, FN=Number, TA=Textarea, FR=Radio, FC=Checkbox, FS=Select/Dropdown',
  `foption_value` text NOT NULL,
  `fdefault_value` char(255) NOT NULL DEFAULT '',
  `fmax_char` int(5) NOT NULL DEFAULT 0,
  `forder` int(2) DEFAULT NULL,
  `frequired` char(1) NOT NULL DEFAULT '',
  `fclass` char(255) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ev_form_group_fields
-- ----------------------------
INSERT INTO `ev_form_group_fields` VALUES ('03806898610', '0380689861', 'Name', 'customerName', 'customer-name', 'FT', '', '', '50', '1', '1', 'form-control', '2023-07-20 19:47:10', null);
INSERT INTO `ev_form_group_fields` VALUES ('03806898611', '0380689861', 'Email', 'customerEmail', 'customer-email', 'FE', '', '', '50', '2', '1', 'form-control', '2023-07-20 19:47:10', null);
INSERT INTO `ev_form_group_fields` VALUES ('03806898612', '0380689861', 'Message', 'customerMessage', 'customer-message', 'TA', '', '', '400', '3', '1', 'form-control', '2023-07-20 19:47:10', null);
INSERT INTO `ev_form_group_fields` VALUES ('62516009613', '1053500961', 'Date of Birth (জন্ম তারিখ)', 'dob', 'dob', 'FC', '', '', '10', '4', '1', 'col-lg-6', '2023-07-23 03:32:06', null);
INSERT INTO `ev_form_group_fields` VALUES ('62516009612', '1053500961', 'Mother\'s Name (মাতার নাম)', 'motherName', 'mother-name', 'FT', '', '', '50', '3', '1', 'col-lg-6', '2023-07-23 03:32:06', null);
INSERT INTO `ev_form_group_fields` VALUES ('62516009611', '1053500961', 'Father\'s Name (পিতার নাম)', 'fatherName', 'father-name', 'FT', '', '', '50', '2', '1', 'col-lg-6', '2023-07-23 03:32:06', null);
INSERT INTO `ev_form_group_fields` VALUES ('62516009610', '1053500961', 'Name(English)', 'studentName', 'student-name', 'FT', '', '', '50', '1', '1', 'col-lg-6', '2023-07-23 03:32:06', null);
INSERT INTO `ev_form_group_fields` VALUES ('04975009615', '5225500961', '', 'duration1', 'duration1', 'FT', '', '', '100', '6', '0', 'col-lg-6', '2023-07-23 02:32:20', null);
INSERT INTO `ev_form_group_fields` VALUES ('04975009613', '5225500961', '', 'position1', 'position1', 'FT', '', '', '100', '4', '0', 'col-lg-6', '2023-07-23 02:32:20', null);
INSERT INTO `ev_form_group_fields` VALUES ('04975009614', '5225500961', '', 'organization1', 'organization1', 'FT', '', '', '100', '5', '0', 'col-lg-6', '2023-07-23 02:32:20', null);
INSERT INTO `ev_form_group_fields` VALUES ('04975009612', '5225500961', 'Duration (সময়সীমা)', 'duration', 'duration', 'FT', '', '', '100', '3', '0', 'col-lg-6', '2023-07-23 02:32:20', null);
INSERT INTO `ev_form_group_fields` VALUES ('04975009611', '5225500961', 'Organization (প্রতিষ্ঠান)', 'organization', 'organization', 'FT', '', '', '100', '2', '0', 'col-lg-6', '2023-07-23 02:32:20', null);
INSERT INTO `ev_form_group_fields` VALUES ('04975009610', '5225500961', 'Position (পদ)', 'position', 'position', 'FT', '', '', '100', '1', '0', 'col-lg-6', '2023-07-23 02:32:20', null);

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
-- Table structure for form_groups
-- ----------------------------
DROP TABLE IF EXISTS `form_groups`;
CREATE TABLE `form_groups` (
  `id` char(16) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `status` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of form_groups
-- ----------------------------

-- ----------------------------
-- Table structure for home_overview
-- ----------------------------
DROP TABLE IF EXISTS `home_overview`;
CREATE TABLE `home_overview` (
  `home_overview_id` char(10) NOT NULL,
  `image` text DEFAULT NULL,
  `tittle` char(150) NOT NULL,
  `shortDescription` text DEFAULT NULL,
  `status` char(1) NOT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`home_overview_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of home_overview
-- ----------------------------
INSERT INTO `home_overview` VALUES ('687535444', 'assets/frontend/images/homePage/overview/blog1.png', 'Technology', 'High Time for Cyberlaw Enforcement and a Future of Work Strategy', 'Y', null, null, null, '2023-06-23 15:50:43', '2023-06-23 15:50:43');

-- ----------------------------
-- Table structure for home_project
-- ----------------------------
DROP TABLE IF EXISTS `home_project`;
CREATE TABLE `home_project` (
  `home_project_id` char(10) NOT NULL,
  `image` text DEFAULT NULL,
  `tittle` char(150) NOT NULL,
  `shortDescription` text DEFAULT NULL,
  `class` varchar(150) DEFAULT NULL,
  `status` char(1) NOT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`home_project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of home_project
-- ----------------------------
INSERT INTO `home_project` VALUES ('687536753', 'assets/frontend/images/homePage/project/1.png', 'nexhex branding logo | ( N + H + Connection ) Modern Logo design', null, 'col-lg-8 col-md-8', 'Y', null, null, null, '2023-06-25 00:00:17', '2023-06-24 18:00:17');
INSERT INTO `home_project` VALUES ('687536803', 'assets/frontend/images/homePage/project/2.png', 'Music Apps for Likeopedia', null, 'col-lg-4 col-md-4', 'Y', null, null, null, '2023-06-25 00:00:36', '2023-06-24 18:00:36');

-- ----------------------------
-- Table structure for home_service
-- ----------------------------
DROP TABLE IF EXISTS `home_service`;
CREATE TABLE `home_service` (
  `home_service_id` char(10) NOT NULL,
  `image` text NOT NULL,
  `tittle` char(150) NOT NULL,
  `shortDescription` text DEFAULT NULL,
  `status` char(1) NOT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`home_service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of home_service
-- ----------------------------
INSERT INTO `home_service` VALUES ('687534817', 'assets/frontend/images/homePage/service/artificial-intelligence.svg', 'Artificial Intelligence', 'AI-based algorithms & automated operation for scalable solutions.', 'Y', null, null, null, '2023-06-23 15:40:16', '2023-06-23 15:40:16');
INSERT INTO `home_service` VALUES ('687534892', 'assets/frontend/images/homePage/service/internet of things.svg', 'Internet of Things', 'IoT devices to make a real-time, efficient, and robust infrastructure.', 'Y', null, null, null, '2023-06-23 15:41:31', '2023-06-23 15:41:31');

-- ----------------------------
-- Table structure for home_settings
-- ----------------------------
DROP TABLE IF EXISTS `home_settings`;
CREATE TABLE `home_settings` (
  `home_settings_id` varchar(10) NOT NULL,
  `section_name` varchar(150) DEFAULT NULL,
  `banner` varchar(150) DEFAULT NULL,
  `tittle` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`home_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of home_settings
-- ----------------------------
INSERT INTO `home_settings` VALUES ('687532064', 'header', 'assets/frontend/images/homePage/argument-4.png', 'Your Trusted <span>Partner in Multiplatform</span> Development', null, 'Y', '2023-06-23 14:54:23', '2023-06-23 22:41:35');
INSERT INTO `home_settings` VALUES ('687532333', 'service', '', '<h2>Technologies we shape with; </h2> <h2>effectual and advance </h2>', 'We’re globally acclaimed in developing custom software that solves the problem of individuals. Utilizing the seamless technology with variations, we make our client cheerful.', 'Y', '2023-06-23 14:58:52', '2023-06-23 22:46:52');
INSERT INTO `home_settings` VALUES ('687532384', 'overview', '', 'Overview BICM', 'We share experiences and stories of our journey! We share knowledge too! Go through to know deep.', 'Y', '2023-06-23 14:59:43', '2023-06-23 14:59:43');
INSERT INTO `home_settings` VALUES ('687532433', 'why', '', 'Why BICM?', null, 'Y', '2023-06-23 15:00:32', '2023-06-23 15:00:32');
INSERT INTO `home_settings` VALUES ('687532496', 'project', '', 'Our Recent Projects', 'Explore some of our recently finished projects.', 'Y', '2023-06-23 15:01:35', '2023-06-23 15:01:35');

-- ----------------------------
-- Table structure for home_why
-- ----------------------------
DROP TABLE IF EXISTS `home_why`;
CREATE TABLE `home_why` (
  `home_why_id` char(10) NOT NULL,
  `image` text DEFAULT NULL,
  `tittle` char(150) NOT NULL,
  `shortDescription` text DEFAULT NULL,
  `status` char(1) NOT NULL,
  `aboutShow` char(1) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`home_why_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of home_why
-- ----------------------------
INSERT INTO `home_why` VALUES ('687535737', '', 'Robust Solution', 'We are optimizer of uncertainty', 'Y', 'Y', '<p>We don&rsquo;t count for chances. We&rsquo;re well researched and trained in optimizing industrial and individual system issues even they are in a degree of uncertainty. We apply robust solution method in solving any typical or unknown problem that arises.</p>', 'Robust', '2023-06-24 11:55:50', '2023-06-24 05:55:50');
INSERT INTO `home_why` VALUES ('687535777', '', 'Dedicated Resource', 'Skilled, dedicated team ready to go anytime!', 'Y', null, '<p>All of our resources including personnel, are specially picked and ready to serve the best to the clients on demand- anytime you want! We are skilled, experienced and technologically sound.</p>', 'Dedicated', '2023-06-24 12:21:09', '2023-06-24 06:21:09');

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
  `url` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`library_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of library_settings
-- ----------------------------
INSERT INTO `library_settings` VALUES ('687548762', 'assets/frontend/images/libraryPage/3.png', 'Digital library', '<h3>About</h3>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market (BICM) was established as a institution for imparting practical capital market education and training on July 24, 2008. The Institute is gradually emerging as a center of excellence for professional development of capital market intermediaries and full spectrum of market professionals through disseminating recent and updated theoretical and practical knowledge.</p>\r\n\r\n<p><u><strong>Background of BICM</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute fulfilled the long felt demand of market intermediaries as well as development partners. The idea was first mooted by Chittagong Stock Exchange and a feasibility study was carried out under World Bank managed multi-grant TA, FIRST initiative. The expatriate consultants recommended setting-up a &ldquo;Securities Institute&rdquo; in Bangladesh for bridging the gap between the competence and skills required and exist.Later, UNDP as well as ADB under their respective TA recommended for establishment of a &ldquo;Securities Industries Development Center&rdquo; and a &ldquo;National Capital Market Institute&rdquo; autonomous in nature.</p>\r\n\r\n<p><u><strong>Board Members and Manpower</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">In 2010, the government approved organogram of BICM that has similarity to a public university, at small scale, having 97 employees including 27 faculty members. In 2013, the government also approved the compensation structure of the institute. Under the leadership of Professor Shibli Rubayat ul Islam, Chairman, Bangladesh Securities and Exchange Commission (BSEC) [Contact- Tel: +88-02-9563713], the Institute has got a competent Board of Directors with a wide range of expertise representing cross-section of stakeholders that includes government, regulator, market intermediaries, exchanges, academia, and different professional bodies.</p>\r\n\r\n<p style=\"text-align:justify\">A total of 60 staff members including 12 Faculty Members and 17 officers have been working in the Institute. Executive President is heading the management of the&nbsp; Institute. Contact &ndash; Tel: +88-02-9515771 or ep@bicm.ac.bd&nbsp;.</p>\r\n\r\n<p><u><strong>Infrastructural Facilities</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is housed at 18,508 sqft. area in the commercial hub of the city. BICM is equipped with state of the art education and professional training facilities as well as advanced learning amenities to arrange and organize national and international training programs, workshops, seminars and conferences. It has the capacity to accommodate 250 participants at one go in its class rooms of different capacities, conference room and computer lab. It also has break-away-session rooms and digital library for brain storming and carrying out research.</p>\r\n\r\n<p style=\"text-align:justify\">To augment the &lsquo;Vision 2021&rsquo;, The Institute is equipped with latest ICT facilities. The audio-visual and video conferencing facilities with dedicated 20 mbps fiber optics internet connection will enable the institute to establish its linkage with institutions from home and abroad in disseminating knowledge.</p>\r\n\r\n<p style=\"text-align:justify\">BICM has the unique and enriched library of the country that is the repository of business, finance, trade, banking, insurance, ICT, law and wide array of financial and other titles. To date, BICM has stocked over 10,000 physical books and in process of procuring e- books, videos and other learning and reference materials. Obtaining the permission, the Institute is also contemplating to hook up its server with the e- library of University Grant Commission, Bangladesh.</p>\r\n\r\n<p><u><strong>Financing</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">Since FY 2009-10, the Government of the People&rsquo;s Republic of Bangladesh has been continuously financing BICM. From this funding, the cost of infrastructural facilities and operational expenses of the institute has been met.</p>\r\n\r\n<p><u><strong>Academic Activities of BICM</strong></u></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong><em>Inauguration of Academic Activities </em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">On 09 December 2010, Mr. Abul Maal Abdul Muhith, the then Minister, Ministry of Finance, Government of the People&rsquo;s Republic of Bangladesh inaugurated the academic activities of BICM. The government has been extending its unflinching support to elevate the institute as a center of excellence.</p>\r\n\r\n<p><u><strong><em>Postgraduate Diploma Course</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM started its flagship &ldquo;Postgraduate Diploma Program in Capital Market&rdquo; in January 2015 for existing professionals of the capital market and those who aspire to start their career in the capital market.</p>\r\n\r\n<p><strong><em><u>Investors&rsquo; Education Program</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">To fulfill the commitment of the government of increasing awareness of general investors, BICM has been conducting the &lsquo;Investors Education Program&rsquo; free of cost. General investors have been encouraged to assess the financial health of the listed companies prior to making an investment. To date, 2900 existing investors and future/ potential investors have been trained on the basics of capital market investment. Considering the increasing demand of the investors, BICM has started offering four investor awareness programs monthly instead of two.</p>\r\n\r\n<p><u><strong><em>Specialized Courses for professionals and Market Intermediaries</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To date, BICM has conducted a handsome number of &ldquo;Certification Programs&rdquo; of different duration (two weeks to six weeks long). Participants have been trained and certified in the areas of Securities Laws, Corporate Governance, Financial Statements Analysis, Technical Analysis, Portfolio Management, Equity Valuation, Legal Drafting, International Financial Reporting Standard, Capital Raising and Investment in the Capital Market, Investment Analysis and Securities Valuation, Trading Software, Financial Journalism, etc.</p>\r\n\r\n<p><u><strong>Future Activities of the Institute</strong></u></p>\r\n\r\n<p><u><strong><em>Training on New Products of Capital Market</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To implement the recent reforms taken by the Government as to allowing trading of derivatives, commodities, and exchange traded fund, BICM is designing curricula and training programs on the same.</p>\r\n\r\n<p><u><strong><em>Masters Program</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute expects to start the &ldquo;Master of Applied Finance and Capital Market&rdquo; in mid 2021. The program is affiliated with the Faculty of Business Studies, University of Dhaka. Admission announcement will be made soon and the classes of the first batch of the program will tentatively start in July 2021.</p>\r\n\r\n<p style=\"text-align:justify\">To know more about the program, please contact the Registrar&rsquo;s Office of BICM.&nbsp;</p>\r\n\r\n<p><strong><em><u>Mandatory Licensing Examination</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">With the help of expatriate consultant engaged under ADB- TA project, BICM has designed course materials for &ldquo;Mandatory Licensing Examination for Securities Market Intermediaries&rdquo;. If authorized by BSEC, the institute will impart training and conduct examination on the same.</p>\r\n\r\n<p><u><strong><em>Distance Learning Programs</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is also preparing and equipping itself to start &ldquo;Distance Learning Programs&rdquo; at school and college level for wide dissemination of capital market knowledge at national sphere.</p>\r\n\r\n<p><u><strong><em>Research and Knowledge Management Activities</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">There is paucity of research, case study and documentation on financial market in general and capital market in particular. BICM will put maximum emphasis and invest time, energy and efforts in research and knowledge management activities to bridge the gap. These activities of BICM will be aiming at setting standards, preparing best-practice examples, assisting policy formulation and preparing guidelines to help the stakeholders. The research outcomes, lessons of cross jurisdictional study, policy papers and recommendations will facilitate the government and policy makers in devising policy, regulator in formulating rules and professionals in implementation and practice.</p>\r\n\r\n<p><strong><u>Co-operation from Development Partners</u></strong></p>\r\n\r\n<p style=\"text-align:justify\">Since there is dearth of knowledge and expertise as of new instruments viz. derivatives, futures, commodities, exchange traded funds (ETFs), structured products, state of the art securities and settlement system, cooperation of development partners is of utmost importance to equip faculty members. This co-operation, in the form of technical assistance and fielding capital market experts, will enhance and elevate the knowledge and expertise of the faculty members for enabling them to impart quality education and training.</p>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market, with the policy direction of Bangladesh government and under the leadership of BSEC, is confident to play a catalytic role in equipping a fair, transparent, informed and vibrant capital market; and poised to be a regional hub of excellence in education, research and knowledge management in the days ahead.</p>', 'Y', '2023-06-23 19:32:41', '2023-06-23 19:32:41', null);

-- ----------------------------
-- Table structure for masters_program
-- ----------------------------
DROP TABLE IF EXISTS `masters_program`;
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
INSERT INTO `masters_program` VALUES ('687445735', 'assets/frontend/images/mastersProgram/job-2.png', '688232887', 'High Time for Cyberlaw Enforcement and a Future of Work Strategy', '12 May - 3 Nov 2023', 'Total Hours : 144', '6000', 'Y', 'Y', '<p>The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.</p>\r\n\r\n<p>Nonetheless, in Bangladesh, the need for skilled professionals in the financial market in general and the capital market, in particular, has been on the rise. The MAFCM program of BICM, with its world-class curriculum, will sharpen a student&rsquo;s required theoretical, quantitative, and technical skills by providing a blend of rigorous academic and practical application. Hence, the program is expected to bridge the long-felt gap between the skills required and those existing in this dynamic field of financial markets, especially the capital market.</p>\r\n\r\n<p>New innovations in the applications of finance are making it crucial for stakeholders in the industry to keep pace with these developments. BICM is aiming to create the best-equipped financial managers in the country with this uniquely designed program. Those aspiring to excel in a career in finance, banking, merchant banking, asset and funds management, financial analysis, and financial regulation will experience assimilation of essential knowledge and skills in an increasingly challenging financial environment.</p>\r\n\r\n<div class=\"blog_single-part\">\r\n<h2>The objective of the MAFCM Program</h2>\r\n\r\n<p>BICM is offering the &lsquo;Master of Applied Finance and Capital Market&rsquo; (MAFCM) to strengthen the Bangladesh capital market through elevating the knowledge of stakeholders. The capital market is dynamic and is evolving over time both locally and globally. One must be competent enough to excel in the field of capital market with the required set of management, mathematical and technical skills. The MAFCM program is designed to inculcate these skills in students so that they can cater to the needs of competent financial managers.</p>\r\n\r\n<h2>Minimum Credit Requirements</h2>\r\n\r\n<p>The minimum credit requirement for obtaining the MAFCM degree is 51 (fifty-one). Of the total required credits, 48 credits are to be completed as course work and 3 credits are to be earned from project work.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Program Completion Period</h2>\r\n\r\n<p>The program can be completed in 2 years (4 semesters). However, a student may complete the program in a maximum duration of 6 (Six) years from the date of admission into the program, after which, admission of the student will be deemed to have expired.</p>\r\n\r\n<h2>Semesters</h2>\r\n\r\n<p>There shall be two semesters in a calendar year. The Spring semester (January &ndash; June) and Summer semester (July &ndash; December). The Academic Year is the same as the calendar year.</p>\r\n\r\n<h2>Admission/Eligibility Criteria</h2>\r\n\r\n<p>The minimum academic requirement for admission into the program is a 4-year Bachelor&rsquo;s degree (or equivalent) from a recognized institution having minimum 2nd class/division, or Master&rsquo;s degree in case of Bachelor&rsquo;s degree (or equivalent) with a duration of less than 4 years from a recognized institution, having minimum 2nd class/division at Master level. Preference will be given to those having experience in the fields of finance, capital market operations, capital market regulations, capital market policy formulation, capital market research, accounting, auditing, banking etc. Registered/Enrolled students of any accounting and finance professional institute (such as CFA, ICAB, ICMAB, ACCA, CIMA, CPA,ICSB etc.) will also get preference. For foreign degrees, equivalence certificate from the University Grants Commission of Bangladesh has to be provided. All applicants must appear in a written test, followed by a viva-voce for those who pass the written test. The final score for selection will be prepared considering the performance in the written test, viva-voce, previous academic records, and relevant experience. Selections will be made based on the combined score. Members of any accounting and finance profession like CFA, ICAB, ICMAB, ACCA, CMA, CPA, ICSB, etc. and those having GMAT score of at least 500 or GRE score of at least 300 will be eligible for direct admission (Subject to satisfactory appearance in the viva-voce).</p>\r\n</div>', 'N', null, 'N', null, 'N', null, 'N', null, 'Y', '<div class=\"blog_single-part\">\r\n                                    <h2>Fees and Charges</h2>\r\n                                    <p>Fees and Charges(after 50% waiver on course fee announced in October 2022)</p>\r\n                                    <div class=\"table-responsive\">\r\n                                        <table class=\"table table-bordered table-striped\">\r\n                                            <thead>\r\n                                                <tr>\r\n                                                    <th scope=\"col\">Sl.</th>\r\n                                                    <th scope=\"col\">Item Details</th>\r\n                                                    <th scope=\"col\">Amount (Taka)</th>\r\n                                                </tr>\r\n                                            </thead>\r\n                                            <tbody>\r\n                                                <tr>\r\n                                                    <td>01</td>\r\n                                                    <td>Application Form</td>\r\n                                                    <td>1,000/-</td>\r\n                                                </tr>\r\n                                                <tr>\r\n                                                    <td>02</td>\r\n                                                    <td>Admission Fee</td>\r\n                                                    <td>10,000/-</td>\r\n                                                </tr>\r\n                                                <tr>\r\n                                                    <td>01</td>\r\n                                                    <td>Application Form</td>\r\n                                                    <td>1,000/-</td>\r\n                                                </tr>\r\n                                                <tr>\r\n                                                    <td>01</td>\r\n                                                    <td>Application Form</td>\r\n                                                    <td>1,000/-</td>\r\n                                                </tr>\r\n                                                <tr>\r\n                                                    <td>01</td>\r\n                                                    <td>Application Form</td>\r\n                                                    <td>1,000/-</td>\r\n                                                </tr>\r\n                                                <tr>\r\n                                                    <td>01</td>\r\n                                                    <td>Application Form</td>\r\n                                                    <td>1,000/-</td>\r\n                                                </tr>\r\n                                                <tr>\r\n                                                    <td>01</td>\r\n                                                    <td>Application Form</td>\r\n                                                    <td>1,000/-</td>\r\n                                                </tr>\r\n                                            </tbody>\r\n                                        </table>\r\n                                    </div>\r\n                                </div>', 'N', null, '2023-06-22 14:55:34', '2023-07-22 18:12:26');

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
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `menu_id` char(10) NOT NULL,
  `menu_tittle` varchar(100) DEFAULT NULL,
  `sub_menu` char(1) DEFAULT NULL,
  `parent_id` char(10) DEFAULT '',
  `sort_order` char(2) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`menu_id`),
  UNIQUE KEY `unique_index` (`parent_id`,`sort_order`),
  UNIQUE KEY `url` (`url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menus
-- ----------------------------
INSERT INTO `menus` VALUES ('687713653', 'Home', 'N', '0', '1', 'home', 'Y', '2023-07-09 01:55:49', '2023-07-09 01:55:49');
INSERT INTO `menus` VALUES ('687713845', 'About', 'Y', '0', '2', 'about', 'Y', '2023-07-09 01:55:51', '2023-07-09 01:55:51');
INSERT INTO `menus` VALUES ('687800138', 'Master\'s Program', 'N', '0', '3', 'masters-program', 'Y', '2023-07-09 01:55:59', '2023-07-09 01:55:59');
INSERT INTO `menus` VALUES ('687800425', 'Diploma', 'N', '0', '4', 'diploma', 'Y', '2023-07-09 01:56:02', '2023-07-09 01:56:02');
INSERT INTO `menus` VALUES ('687800505', 'Certification and Training', 'N', '0', '5', 'certification-training', 'Y', '2023-07-09 01:56:03', '2023-07-09 01:56:03');
INSERT INTO `menus` VALUES ('687800629', 'Research and Publication', 'N', '0', '6', 'research-and-publication', 'Y', '2023-07-09 01:56:05', '2023-07-09 01:56:05');
INSERT INTO `menus` VALUES ('687800716', 'D-library', 'N', '0', '7', 'd-library', 'Y', '2023-07-09 02:46:27', '2023-07-09 02:46:27');
INSERT INTO `menus` VALUES ('687800892', 'Online Service', 'N', '0', '8', 'online-project', 'Y', '2023-07-09 02:46:28', '2023-07-09 02:46:28');
INSERT INTO `menus` VALUES ('687801122', 'Tender', 'N', '0', '9', 'tender', 'Y', '2023-07-09 02:46:31', '2023-07-09 02:46:31');
INSERT INTO `menus` VALUES ('687802433', 'Mission & Vision', 'N', '687713845', '1', 'mission-vision', 'Y', '2023-07-09 01:56:09', '2023-07-09 01:56:09');
INSERT INTO `menus` VALUES ('687804395', 'Board of directories', 'N', '687713845', '2', 'board-of-directories', 'Y', '2023-07-22 22:10:25', '2023-07-22 16:10:25');
INSERT INTO `menus` VALUES ('687804624', 'Faculty Member\'s', 'N', '687713845', '3', 'faculty-members', 'Y', '2023-07-09 01:56:13', '2023-07-09 01:56:13');

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
-- Table structure for online_settings
-- ----------------------------
DROP TABLE IF EXISTS `online_settings`;
CREATE TABLE `online_settings` (
  `online_service_id` char(10) NOT NULL,
  `menu_name` varchar(150) NOT NULL,
  `position` char(1) NOT NULL,
  `tittle` varchar(150) NOT NULL,
  `banner` varchar(150) DEFAULT NULL,
  `shortDescription` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `url` varchar(50) DEFAULT NULL,
  `status` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`online_service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of online_settings
-- ----------------------------

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `page_id` char(10) NOT NULL,
  `parent_id` char(10) DEFAULT NULL,
  `menu_id` char(10) DEFAULT NULL,
  `page_name` char(30) DEFAULT NULL,
  `heading` varchar(150) DEFAULT '',
  `short_description` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `banner` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `page_type` varchar(30) DEFAULT NULL,
  `form_status` char(1) DEFAULT NULL,
  `form_group` text DEFAULT NULL,
  `sidebar_status` char(1) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES ('688228913', '0', '687713653', 'Home', null, null, null, '', '', 'home', 'N', null, 'N', 'Y', '2023-07-01 16:28:32', '2023-07-01 16:28:32');
INSERT INTO `pages` VALUES ('688229715', '0', '687713845', 'About', null, 'Bangladesh Institute of Capital Market (BICM) was established as a institution for imparting practical capital market education and training on July 24, 2008. The Institute is gradually emerging as a center of excellence for professional development of capital market intermediaries and full spectrum of market professionals through disseminating recent and updated theoretical and practical knowledge', '<h3>About</h3>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market (BICM) was established as a institution for imparting practical capital market education and training on July 24, 2008. The Institute is gradually emerging as a center of excellence for professional development of capital market intermediaries and full spectrum of market professionals through disseminating recent and updated theoretical and practical knowledge.</p>\r\n\r\n<p><u><strong>Background of BICM</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute fulfilled the long felt demand of market intermediaries as well as development partners. The idea was first mooted by Chittagong Stock Exchange and a feasibility study was carried out under World Bank managed multi-grant TA, FIRST initiative. The expatriate consultants recommended setting-up a &ldquo;Securities Institute&rdquo; in Bangladesh for bridging the gap between the competence and skills required and exist.Later, UNDP as well as ADB under their respective TA recommended for establishment of a &ldquo;Securities Industries Development Center&rdquo; and a &ldquo;National Capital Market Institute&rdquo; autonomous in nature.</p>\r\n\r\n<p><u><strong>Board Members and Manpower</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">In 2010, the government approved organogram of BICM that has similarity to a public university, at small scale, having 97 employees including 27 faculty members. In 2013, the government also approved the compensation structure of the institute. Under the leadership of Professor Shibli Rubayat ul Islam, Chairman, Bangladesh Securities and Exchange Commission (BSEC) [Contact- Tel: +88-02-9563713], the Institute has got a competent Board of Directors with a wide range of expertise representing cross-section of stakeholders that includes government, regulator, market intermediaries, exchanges, academia, and different professional bodies.</p>\r\n\r\n<p style=\"text-align:justify\">A total of 60 staff members including 12 Faculty Members and 17 officers have been working in the Institute. Executive President is heading the management of the&nbsp; Institute. Contact &ndash; Tel: +88-02-9515771 or ep@bicm.ac.bd&nbsp;.</p>\r\n\r\n<p><u><strong>Infrastructural Facilities</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is housed at 18,508 sqft. area in the commercial hub of the city. BICM is equipped with state of the art education and professional training facilities as well as advanced learning amenities to arrange and organize national and international training programs, workshops, seminars and conferences. It has the capacity to accommodate 250 participants at one go in its class rooms of different capacities, conference room and computer lab. It also has break-away-session rooms and digital library for brain storming and carrying out research.</p>\r\n\r\n<p style=\"text-align:justify\">To augment the &lsquo;Vision 2021&rsquo;, The Institute is equipped with latest ICT facilities. The audio-visual and video conferencing facilities with dedicated 20 mbps fiber optics internet connection will enable the institute to establish its linkage with institutions from home and abroad in disseminating knowledge.</p>\r\n\r\n<p style=\"text-align:justify\">BICM has the unique and enriched library of the country that is the repository of business, finance, trade, banking, insurance, ICT, law and wide array of financial and other titles. To date, BICM has stocked over 10,000 physical books and in process of procuring e- books, videos and other learning and reference materials. Obtaining the permission, the Institute is also contemplating to hook up its server with the e- library of University Grant Commission, Bangladesh.</p>\r\n\r\n<p><u><strong>Financing</strong></u></p>\r\n\r\n<p style=\"text-align:justify\">Since FY 2009-10, the Government of the People&rsquo;s Republic of Bangladesh has been continuously financing BICM. From this funding, the cost of infrastructural facilities and operational expenses of the institute has been met.</p>\r\n\r\n<p><u><strong>Academic Activities of BICM</strong></u></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><u><strong><em>Inauguration of Academic Activities </em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">On 09 December 2010, Mr. Abul Maal Abdul Muhith, the then Minister, Ministry of Finance, Government of the People&rsquo;s Republic of Bangladesh inaugurated the academic activities of BICM. The government has been extending its unflinching support to elevate the institute as a center of excellence.</p>\r\n\r\n<p><u><strong><em>Postgraduate Diploma Course</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM started its flagship &ldquo;Postgraduate Diploma Program in Capital Market&rdquo; in January 2015 for existing professionals of the capital market and those who aspire to start their career in the capital market.</p>\r\n\r\n<p><strong><em><u>Investors&rsquo; Education Program</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">To fulfill the commitment of the government of increasing awareness of general investors, BICM has been conducting the &lsquo;Investors Education Program&rsquo; free of cost. General investors have been encouraged to assess the financial health of the listed companies prior to making an investment. To date, 2900 existing investors and future/ potential investors have been trained on the basics of capital market investment. Considering the increasing demand of the investors, BICM has started offering four investor awareness programs monthly instead of two.</p>\r\n\r\n<p><u><strong><em>Specialized Courses for professionals and Market Intermediaries</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To date, BICM has conducted a handsome number of &ldquo;Certification Programs&rdquo; of different duration (two weeks to six weeks long). Participants have been trained and certified in the areas of Securities Laws, Corporate Governance, Financial Statements Analysis, Technical Analysis, Portfolio Management, Equity Valuation, Legal Drafting, International Financial Reporting Standard, Capital Raising and Investment in the Capital Market, Investment Analysis and Securities Valuation, Trading Software, Financial Journalism, etc.</p>\r\n\r\n<p><u><strong>Future Activities of the Institute</strong></u></p>\r\n\r\n<p><u><strong><em>Training on New Products of Capital Market</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">To implement the recent reforms taken by the Government as to allowing trading of derivatives, commodities, and exchange traded fund, BICM is designing curricula and training programs on the same.</p>\r\n\r\n<p><u><strong><em>Masters Program</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">The institute expects to start the &ldquo;Master of Applied Finance and Capital Market&rdquo; in mid 2021. The program is affiliated with the Faculty of Business Studies, University of Dhaka. Admission announcement will be made soon and the classes of the first batch of the program will tentatively start in July 2021.</p>\r\n\r\n<p style=\"text-align:justify\">To know more about the program, please contact the Registrar&rsquo;s Office of BICM.&nbsp;</p>\r\n\r\n<p><strong><em><u>Mandatory Licensing Examination</u> </em></strong></p>\r\n\r\n<p style=\"text-align:justify\">With the help of expatriate consultant engaged under ADB- TA project, BICM has designed course materials for &ldquo;Mandatory Licensing Examination for Securities Market Intermediaries&rdquo;. If authorized by BSEC, the institute will impart training and conduct examination on the same.</p>\r\n\r\n<p><u><strong><em>Distance Learning Programs</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">BICM is also preparing and equipping itself to start &ldquo;Distance Learning Programs&rdquo; at school and college level for wide dissemination of capital market knowledge at national sphere.</p>\r\n\r\n<p><u><strong><em>Research and Knowledge Management Activities</em></strong></u></p>\r\n\r\n<p style=\"text-align:justify\">There is paucity of research, case study and documentation on financial market in general and capital market in particular. BICM will put maximum emphasis and invest time, energy and efforts in research and knowledge management activities to bridge the gap. These activities of BICM will be aiming at setting standards, preparing best-practice examples, assisting policy formulation and preparing guidelines to help the stakeholders. The research outcomes, lessons of cross jurisdictional study, policy papers and recommendations will facilitate the government and policy makers in devising policy, regulator in formulating rules and professionals in implementation and practice.</p>\r\n\r\n<p><strong><u>Co-operation from Development Partners</u></strong></p>\r\n\r\n<p style=\"text-align:justify\">Since there is dearth of knowledge and expertise as of new instruments viz. derivatives, futures, commodities, exchange traded funds (ETFs), structured products, state of the art securities and settlement system, cooperation of development partners is of utmost importance to equip faculty members. This co-operation, in the form of technical assistance and fielding capital market experts, will enhance and elevate the knowledge and expertise of the faculty members for enabling them to impart quality education and training.</p>\r\n\r\n<p style=\"text-align:justify\">Bangladesh Institute of Capital Market, with the policy direction of Bangladesh government and under the leadership of BSEC, is confident to play a catalytic role in equipping a fair, transparent, informed and vibrant capital market; and poised to be a regional hub of excellence in education, research and knowledge management in the days ahead.</p>', 'assets/frontend/images/banner/pages/mask_big.jpg', '', 'common', 'N', null, 'N', 'Y', '2023-07-01 16:41:54', '2023-07-01 16:41:54');
INSERT INTO `pages` VALUES ('688229899', '687713845', '687802433', 'Mission', null, 'BICM’s core purpose is to bridge the gap between the current level of knowledge, skills and competency of Bangladesh capital market participants and the level required for participants in a world class capital market', '<div class=\"about-site\">\r\n<h3>Mission</h3>\r\n\r\n<p style=\"text-align:justify\">BICM&rsquo;s core purpose is to bridge the gap between the current level of knowledge, skills and competency of Bangladesh capital market participants and the level required for participants in a world class capital market.</p>\r\n\r\n<p><strong>Values</strong></p>\r\n\r\n<p style=\"text-align:justify\">In delivering its programs to the capital markets in Bangladesh, BICM, its students and staff will adhere to the following values:</p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>Excellence</li>\r\n	<li>Dignity of each person</li>\r\n	<li>Professionalism</li>\r\n	<li>Flexibility</li>\r\n	<li>Integrity</li>\r\n</ul>\r\n\r\n<p><strong>Vision of BICM in next 5 years time</strong></p>\r\n\r\n<p>By December 31, 2015 Bangladesh Institute of Capital Market is aiming for to:</p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>Be generally recognized as the pre-eminent provider of high quality practical education, training and assessment in the Bangladesh capital markets.</li>\r\n	<li>Be an effective partnership between the public sector and the private sector in fostering and enhancing the knowledge on capital market.</li>\r\n	<li>Be administering regularly updated mandatory licensing examinations nationally</li>\r\n	<li>Be offering a range of training courses in different formats to support the mandatory licensing examinations</li>\r\n	<li>Be organizing and promoting training and research in securities and financial market, investment and related<br />\r\n	matters for the public benefit;</li>\r\n	<li>Be organizing and conducting examination, publish results thereof and award certificates, diplomas and otherdistinctions</li>\r\n	<li>Be offering a range of formal courses of 1 [one] year and lesser duration to meet demonstrated demand in specific market areas</li>\r\n	<li>Be offering course on financial market governance</li>\r\n	<li>Be offering a range of other short courses to meet demonstrated industry needs</li>\r\n</ul>\r\n\r\n<p><strong>Strengths and Opportunities of BICM</strong></p>\r\n\r\n<p><strong>a. Strengths of BICM</strong></p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>Extensive industry support for the institute has already been gained. This is demonstrated by the quality and commitment of the sponsors of the institute.</li>\r\n	<li>The level and diversity of funding support already attracted to the institute demonstrates a significant commitment from both the Bangladesh government and from Key Sponsors.</li>\r\n	<li>The use of public/private partnership principles in the operation of the institute reinforces the level of government and industry support and commitment.</li>\r\n	<li>The very high quality and large scale of the training and office facilities position the institute as a quality professional national training institute.</li>\r\n	<li>The support from the capital markets regulator, the Securities and Exchange Commission, Bangladesh is a significant strength; the responsibility to conduct the Bangladesh mandatory securities licensing examinations will position BICM as a critical part of the nation&rsquo;s capital markets infrastructure.</li>\r\n	<li>There is a commitment from development partners, such as the World Bank and the Asian Development Bank. ADB and World Bank, in particular, have expressed interest in providing future tangible support to the BICM.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>The level of public interest and the fact that there has been no ongoing practical capital market training (delivered professionally) in Bangladesh to date means that there is probably considerable latent demand for such training.</li>\r\n	<li>The responsibility to provide mandatory securities licensing examinations means that there is likely to be both good initial and ongoing demand from persons currently working in the industry as well as ongoing demand from those seeking to work in the industry.</li>\r\n</ul>\r\n\r\n<p><strong>Opportunities in the market</strong></p>\r\n\r\n<ul style=\"margin-left:30px\">\r\n	<li>The level of public interest and the fact that there has been no ongoing practical capital market training (delivered professionally) in Bangladesh to date means that there is probably considerable latent demand for such training.</li>\r\n	<li>The responsibility to provide mandatory securities licensing examinations means that there is likely to be both good initial and ongoing demand from persons currently working in the industry as well as ongoing demand from those seeking to work in the industry.</li>\r\n</ul>\r\n</div>', 'assets/frontend/images/banner/pages/argument-1.png', '', 'common', 'N', null, 'N', 'Y', '2023-07-01 16:44:58', '2023-07-01 16:44:58');
INSERT INTO `pages` VALUES ('688232887', '0', '687800138', 'Master\'s Program', 'Master\'s Program', 'The world of finance is evolving rapidly as changes are being made continuously in this sector. New instruments, rules, and technologies are being introduced to make the financial market more vibrant and efficient. The application of theories and practices of finance is required for working in a vast range of organizations including financial markets and institutions. To excel as a financial market professional, thorough knowledge and skills on new instruments and their regulations are imperative. Sound mathematical and technical knowledge will enhance understanding of the field of finance and its innumerable applications. The comprehensive concept of the existing legal framework and the economy is also crucial to succeed in a career in this field.', null, 'assets/frontend/images/banner/pages/argument-1.png', '', 'master', 'Y', '[\"1053500961\",\"5225500961\"]', 'N', 'Y', '2023-07-01 17:34:46', '2023-07-23 02:19:48');
INSERT INTO `pages` VALUES ('688233618', '0', '687800425', 'Diploma', 'Diploma', null, '<h3>PGDCM &ndash; Evening</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Introducing the first of its kind Postgraduate Diploma in Capital Market (PGDCM) in Bangladesh</p>\r\n\r\n<p><span style=\"font-family:var( --e-global-typography-text-font-family ),sans-serif\">Bangladesh Institute of Capital Market (BICM) is the national institute for imparting practical capital market training and education. BICM is striving to be a center of professional excellence through disseminating recent and updated theoretical and practical knowledge.</span></p>\r\n\r\n<p><span style=\"font-family:var( --e-global-typography-text-font-family ),sans-serif\">BICM is offering PGDCM for the market intermediaries, full spectrum of market professionals and graduates who aspire to pursue career in the capital market. The diploma will provide a blend of theoretical and practical knowledge on market mechanism, legal framework, new instruments and techniques.</span></p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>DURATION: 9 MONTHS</strong></td>\r\n			<td><strong>24 CREDIT HOURS</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>PROGRAM FEE: BDT 33,000/-</strong></td>\r\n			<td><strong>8 COURSES&nbsp;</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong><u>Break Down of Semester Fee (All amounts in BDT)</u></strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>1st Semester</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Admission Fee</td>\r\n			<td>5,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Course Fee (4 Courses)</td>\r\n			<td>12,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lab Fee</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Library</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Total fee for 1st semester</strong></td>\r\n			<td><strong>19,000</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>2nd Semester</strong></td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Course Fee (4 Courses)</td>\r\n			<td>12,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lab Fee</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Library</td>\r\n			<td>1,000</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Total fee for 2nd semester</strong></td>\r\n			<td><strong>14,000</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Total fee for the PGDCM Program</strong> (effective from 17th batch onward)</td>\r\n			<td>&nbsp;<strong>33,000</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-family:var( --e-global-typography-text-font-family ),sans-serif\">The PGDCM program consists of 8 courses (24 credit hours) The program is divided into two-semester. Four courses are offered in each trimester as follows:</span></p>\r\n\r\n<p><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\"><strong><u>Level 1 / Semester 1</u></strong></span></p>\r\n\r\n<ul>\r\n	<li><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\">Code: D101- Financial Markets in Bangladesh;</span></li>\r\n	<li><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\">Code: D102- Managerial Finance;</span></li>\r\n	<li><span style=\"color:var( --e-global-color-text ); font-family:var( --e-global-typography-text-font-family ),sans-serif\">Code: D103- Basic Statistics;</span></li>\r\n	<li>Code: D104- Financial Accounting.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2><u>Level 2/ Semester 2</u></h2>\r\n\r\n<ul>\r\n	<li>Code: D201- Securities Analysis and Portfolio Management;&nbsp;</li>\r\n	<li>Code: D202- Investment Banking;</li>\r\n	<li>Code: D203- Capital Market Operations;</li>\r\n	<li>Code: D204- Securities Laws.</li>\r\n</ul>', 'assets/frontend/images/banner/pages/about2.png', '', 'courses', 'Y', null, 'N', 'Y', '2023-07-01 17:46:57', '2023-07-23 02:19:52');
INSERT INTO `pages` VALUES ('688233822', '0', '687800629', 'Events', null, null, '<h3>Research Seminar Series</h3>\r\n\r\n<p>Bangladesh Institute of Capital Market has a monthly research seminar series with an aim to facilitate knowledge sharing on financial market issues between BICM faculty and external experts.</p>\r\n\r\n<p>The monthly seminar takes place preferably in the last week of each month. In each seminar, 1-2 research papers are presented by BICM internal faculty members and renowned external researchers. The seminars are attended by renowned experts in the relevant fields as a discussant on the papers being presented. The events are LIVE broadcast on BICM Facebook, where viewers are able to make questions to the presenters and discussants.</p>\r\n\r\n<p>Critical comments and suggestions from the attendees and the discussants are expected to help improve the quality of the papers being presented, which could in turn help the researchers to publish in internationally ranked journals and publication outlets.</p>\r\n\r\n<p>Please note our upcoming and past seminars below. BICM cordially invites you to attend the seminars and contribute to share academic excellence. If you cannot join in person, join us Live at BICM Facebook page <a href=\"https://www.facebook.com/bicm.ac.bd\">https://www.facebook.com/bicm.ac.bd</a>.</p>\r\n\r\n<p>If you have any questions regarding the seminar or you wish to present a paper or invite a guest researcher, please do not hesitate to communicate S. M. Kalbin Salema at <a href=\"mailto:kalbin@bicm.ac.bd\">kalbin@bicm.ac.bd</a>.</p>\r\n\r\n<p><strong>List of Seminars</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>BRS No.</strong></td>\r\n			<td><strong>Paper title</strong></td>\r\n			<td><strong>Presenting researcher</strong></td>\r\n			<td><strong>Date, time, and venue</strong></td>\r\n			<td><strong>Status</strong></td>\r\n			<td><strong>Detail program and Paper abstract</strong></td>\r\n			<td><strong>Seminar</strong> <strong>Video Link</strong></td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'assets/frontend/images/banner/pages/about3.png', '', 'event', 'Y', null, 'N', 'Y', '2023-07-01 17:50:21', '2023-07-01 17:50:21');

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
