/*
Navicat MySQL Data Transfer

Source Server         : local_PHP
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : php

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-01-05 10:47:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `category`
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('1', '草本植物');
INSERT INTO `category` VALUES ('2', '蛾科');
INSERT INTO `category` VALUES ('4', ' 测试1');

-- ----------------------------
-- Table structure for `log`
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_user` varchar(255) DEFAULT NULL,
  `log_info` varchar(1024) DEFAULT NULL,
  `log_createtime` int(15) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES ('8', 'root', '用户更新一条分类:', '1544009925');
INSERT INTO `log` VALUES ('9', 'root', '用户更新一个地区:', '1544009935');
INSERT INTO `log` VALUES ('10', 'root', '用户更新一个地区:', '1544009941');
INSERT INTO `log` VALUES ('11', 'root', '用户添加一条地区:', '1544009951');
INSERT INTO `log` VALUES ('12', 'root', '用户删除一个地区:', '1544009956');
INSERT INTO `log` VALUES ('13', 'root', '用户更新一条生物记录:', '1544009971');
INSERT INTO `log` VALUES ('14', 'root', '用户登陆成功', '1544011926');
INSERT INTO `log` VALUES ('15', 'root', '用户登陆成功', '1544069007');
INSERT INTO `log` VALUES ('16', 'root', '用户登陆成功', '1544099358');
INSERT INTO `log` VALUES ('17', 'root', '用户登陆成功', '1544157693');
INSERT INTO `log` VALUES ('18', 'root', '用户更新一条生物记录:', '1544157762');
INSERT INTO `log` VALUES ('19', 'root', '用户登陆成功', '1544512411');
INSERT INTO `log` VALUES ('20', 'root', '用户登陆成功', '1545386907');
INSERT INTO `log` VALUES ('21', 'root', '用户添加一条生物记录:', '1545387012');
INSERT INTO `log` VALUES ('22', 'root', '用户删除一条生物记录:', '1545387097');
INSERT INTO `log` VALUES ('23', 'root', '用户添加一条生物记录:', '1545387311');
INSERT INTO `log` VALUES ('24', 'root', '用户登陆成功', '1546088467');
INSERT INTO `log` VALUES ('25', 'root', '用户登陆成功', '1546319160');
INSERT INTO `log` VALUES ('26', 'root', '用户登陆成功', '1546497305');
INSERT INTO `log` VALUES ('27', 'root', '用户登陆成功', '1546497333');
INSERT INTO `log` VALUES ('28', 'root', '用户登陆成功', '1546652250');

-- ----------------------------
-- Table structure for `place`
-- ----------------------------
DROP TABLE IF EXISTS `place`;
CREATE TABLE `place` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `place_name` varchar(255) NOT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of place
-- ----------------------------
INSERT INTO `place` VALUES ('1', '全球');
INSERT INTO `place` VALUES ('2', '浙江');
INSERT INTO `place` VALUES ('3', '江苏');
INSERT INTO `place` VALUES ('4', ' 西藏');

-- ----------------------------
-- Table structure for `plant`
-- ----------------------------
DROP TABLE IF EXISTS `plant`;
CREATE TABLE `plant` (
  `plant_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) NOT NULL,
  `place_id` int(11) NOT NULL,
  `plant_name` varchar(255) NOT NULL,
  `plant_identity` varchar(1024) NOT NULL,
  `plant_bad` varchar(1024) DEFAULT NULL,
  `plant_image` varchar(255) DEFAULT NULL,
  `plant_createtime` int(15) DEFAULT NULL,
  PRIMARY KEY (`plant_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of plant
-- ----------------------------
INSERT INTO `plant` VALUES ('1', '1', '1', '空心莲子草', '呈半灌木，高0.8～2.5米。茎紫色，叶对生、卵状三角形、棱形，边缘具粗锯齿。头状花序，排成伞房状，总苞片三四层，小花白色。', '有性或无性繁殖，每株可年产瘦果1万粒左右，瘦果五棱形。具冠毛，藉冠毛随风传播。根状茎发达，可依靠强大的根状茎快速扩展蔓延。', 'upload/1.jpg', '1544157762');
INSERT INTO `plant` VALUES ('2', '1', '1', '豚草', '一年生草木，高20～250厘米。茎直立，具棱，多分枝，下部叶对生，上部叶互生，叶片三角形，1～3回羽状深裂。头状花序单性，雌雄同株；约50～60个在枝端排列成总状，花冠淡黄色，总苞倒卵形倒圆锥形，囊状，无花冠与冠毛，花柱2，丝状，伸出总苞外。', '恶性杂草，对禾木科、菊科等植物有抑制、排斥作用。', 'upload/2.jpg', '1544009971');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_createtime` int(15) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'root', 'root', '11111111');
