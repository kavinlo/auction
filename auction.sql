/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50722
Source Host           : localhost:3306
Source Database       : auction

Target Server Type    : MYSQL
Target Server Version : 50722
File Encoding         : 65001

Date: 2018-12-17 09:31:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for auc_lot
-- ----------------------------
DROP TABLE IF EXISTS `auc_lot`;
CREATE TABLE `auc_lot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `range` float NOT NULL DEFAULT '20' COMMENT '加价幅度',
  `time` timestamp NULL DEFAULT NULL COMMENT '竞拍时间',
  `timeLength` varchar(255) DEFAULT NULL COMMENT '竞拍时长：分钟',
  `lDescription` varchar(255) DEFAULT NULL COMMENT '拍品描述',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT '拍品添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='拍品表';

-- ----------------------------
-- Records of auc_lot
-- ----------------------------

-- ----------------------------
-- Table structure for auc_manage
-- ----------------------------
DROP TABLE IF EXISTS `auc_manage`;
CREATE TABLE `auc_manage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mName` varchar(255) NOT NULL COMMENT '管理员昵称',
  `mPassword` char(1) NOT NULL COMMENT '管理员密码',
  `phoneTel` char(11) NOT NULL COMMENT '管理员电话',
  `mEmail` varchar(255) NOT NULL COMMENT '管理员邮箱',
  `mType` varchar(255) NOT NULL COMMENT '管理员类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员表';

-- ----------------------------
-- Records of auc_manage
-- ----------------------------

-- ----------------------------
-- Table structure for auc_migrations
-- ----------------------------
DROP TABLE IF EXISTS `auc_migrations`;
CREATE TABLE `auc_migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of auc_migrations
-- ----------------------------

-- ----------------------------
-- Table structure for auc_users
-- ----------------------------
DROP TABLE IF EXISTS `auc_users`;
CREATE TABLE `auc_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uName` varchar(255) NOT NULL,
  `uPassword` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `auc_users_uName_uindex` (`uName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of auc_users
-- ----------------------------
