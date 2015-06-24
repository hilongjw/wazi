/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : wazi

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2015-06-22 17:55:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for item
-- ----------------------------
DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `num` int(12) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  `desct` text,
  `title` varchar(32) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `pic` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of item
-- ----------------------------
INSERT INTO `item` VALUES ('1', '20', '[aaaaa]新品薄款男式袜春夏袜子', '由于袜子工艺问题，深色袜子可能会出现少许白色地方，在意慎拍由于袜子工艺问题，深色袜子可能会出现少许白色地方，在意慎拍由于袜子工艺问题，深色袜子可能会出现少许白色地方，在意慎拍由于袜子工艺问题，深色袜子可能会出现少许白色地方，在意慎拍由于袜子工艺问题，深色袜子可能会出现少许白色地方，在意慎拍', 'aaaaaaa薄款男式袜春夏袜啊啊啊啊子', '0.00', 'assets/i/upload/wazi1.jpg,assets/i/upload/wazi2.jpg');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `desct` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('3', '满5双送货到寝室', '满5双送货到寝室满5双送货到寝室满5双送货到寝室');
INSERT INTO `news` VALUES ('4', '哈哈哈哈h', '哈哈哈哈h');
INSERT INTO `news` VALUES ('5', '暗示法按时 ', '防暗示法暗示法');
INSERT INTO `news` VALUES ('6', '阿斯顿暗示法', '暗示法');

-- ----------------------------
-- Table structure for orderlist
-- ----------------------------
DROP TABLE IF EXISTS `orderlist`;
CREATE TABLE `orderlist` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `itemId` int(12) DEFAULT NULL,
  `numb` int(8) DEFAULT NULL,
  `tel` varchar(16) DEFAULT NULL,
  `addrs` char(128) DEFAULT NULL,
  `wait` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of orderlist
-- ----------------------------
INSERT INTO `orderlist` VALUES ('7', '1', '3', '345345', '1舍454', 'wait');

-- ----------------------------
-- Table structure for reco
-- ----------------------------
DROP TABLE IF EXISTS `reco`;
CREATE TABLE `reco` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `itemid` int(12) NOT NULL,
  PRIMARY KEY (`id`,`itemid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of reco
-- ----------------------------
INSERT INTO `reco` VALUES ('2', '2');
INSERT INTO `reco` VALUES ('4', '0');
INSERT INTO `reco` VALUES ('6', '16');
INSERT INTO `reco` VALUES ('7', '17');

-- ----------------------------
-- Table structure for wazi_user
-- ----------------------------
DROP TABLE IF EXISTS `wazi_user`;
CREATE TABLE `wazi_user` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `user` varchar(32) NOT NULL,
  `tel` varchar(16) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`,`user`,`tel`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of wazi_user
-- ----------------------------
