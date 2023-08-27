/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bicm_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-07-23 03:41:39
*/

SET FOREIGN_KEY_CHECKS=0;

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
