/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : php

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 08/01/2019 01:34:57
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`category_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (1, '草本植物');
INSERT INTO `category` VALUES (2, '木本植物');

-- ----------------------------
-- Table structure for log
-- ----------------------------
DROP TABLE IF EXISTS `log`;
CREATE TABLE `log`  (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `log_info` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `log_createtime` int(15) NULL DEFAULT NULL,
  PRIMARY KEY (`log_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of log
-- ----------------------------
INSERT INTO `log` VALUES (1, '', '用户登陆失败', 1546874476);
INSERT INTO `log` VALUES (2, '123', '用户登陆失败', 1546874506);
INSERT INTO `log` VALUES (3, 'root', '用户登陆成功', 1546874548);
INSERT INTO `log` VALUES (4, '', '用户登陆失败', 1546875459);
INSERT INTO `log` VALUES (5, 'root', '用户登陆成功', 1546875468);
INSERT INTO `log` VALUES (6, 'root', '用户添加一条分类:', 1546875514);
INSERT INTO `log` VALUES (7, 'root', '用户更新一条分类:', 1546875531);
INSERT INTO `log` VALUES (8, 'root', '用户删除一条分类:', 1546875536);
INSERT INTO `log` VALUES (9, 'root', '用户添加一条地区:', 1546875546);
INSERT INTO `log` VALUES (10, 'root', '用户更新一个地区:', 1546875556);
INSERT INTO `log` VALUES (11, 'root', '用户删除一个地区:', 1546875561);
INSERT INTO `log` VALUES (12, 'root', '用户添加一条生物记录:', 1546875597);
INSERT INTO `log` VALUES (13, 'root', '用户更新一条生物记录:', 1546875632);
INSERT INTO `log` VALUES (14, 'root', '用户登陆成功', 1546875775);
INSERT INTO `log` VALUES (15, 'root', '用户更新一条生物记录:', 1546876930);
INSERT INTO `log` VALUES (16, 'root', '用户更新一条生物记录:', 1546876948);
INSERT INTO `log` VALUES (17, 'root', '用户删除一条生物记录:', 1546876961);
INSERT INTO `log` VALUES (18, 'root', '用户添加一条生物记录:', 1546877079);
INSERT INTO `log` VALUES (19, 'root', '用户更新一条生物记录:', 1546877101);

-- ----------------------------
-- Table structure for place
-- ----------------------------
DROP TABLE IF EXISTS `place`;
CREATE TABLE `place`  (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `place_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`place_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of place
-- ----------------------------
INSERT INTO `place` VALUES (1, '全球');
INSERT INTO `place` VALUES (2, '浙江');
INSERT INTO `place` VALUES (3, '江苏');
INSERT INTO `place` VALUES (4, ' 西藏');

-- ----------------------------
-- Table structure for plant
-- ----------------------------
DROP TABLE IF EXISTS `plant`;
CREATE TABLE `plant`  (
  `plant_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `place_id` int(11) NOT NULL,
  `plant_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plant_identity` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `plant_bad` varchar(1024) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `plant_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `plant_createtime` int(15) NULL DEFAULT NULL,
  PRIMARY KEY (`plant_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of plant
-- ----------------------------
INSERT INTO `plant` VALUES (1, '1', 1, '空心莲子草', '呈半灌木，高0.8～2.5米。茎紫色，叶对生、卵状三角形、棱形，边缘具粗锯齿。头状花序，排成伞房状，总苞片三四层，小花白色。', '有性或无性繁殖，每株可年产瘦果1万粒左右，瘦果五棱形。具冠毛，藉冠毛随风传播。根状茎发达，可依靠强大的根状茎快速扩展蔓延。', 'upload/1', 1544157762);
INSERT INTO `plant` VALUES (2, '1', 1, '豚草', '一年生草木，高20～250厘米。茎直立，具棱，多分枝，下部叶对生，上部叶互生，叶片三角形，1～3回羽状深裂。头状花序单性，雌雄同株；约50～60个在枝端排列成总状，花冠淡黄色，总苞倒卵形倒圆锥形，囊状，无花冠与冠毛，花柱2，丝状，伸出总苞外。', '恶性杂草，对禾木科、菊科等植物有抑制、排斥作用。', 'upload/2.jpg', 1544009971);
INSERT INTO `plant` VALUES (4, '1', 1, '毒麦', '一年生草本。秆成疏丛，高20-120厘米，具3-5节，无毛。叶片扁平，质地较薄，边缘微粗糙。穗形总状花序，小穗含4-10小花，小穗轴节间长1-1.5毫米，平滑无毛；颖较宽大，与其小穗近等长，外稃椭圆形至卵形，成熟时肿胀，基盘微小芒近外稃顶端伸出，长1-2厘米，粗糙；内稃约等长于外稃，颖果为其宽的2-3倍。花果期6-7月。原产欧洲地中海地区，1954年在从保加利亚进口的小麦中发现，除西藏外，中国大陆各省都有发现，全球性入侵物种。', '该物种为中国植物图谱数据库收录的有毒植物，其毒性为种子有毒，尤以未熟或多雨潮湿季节收获的毒力为强。小麦中若混有毒麦，人；畜食用含4%以上毒麦的面粉即可引起急性中毒，表现为眩晕、恶心、呕吐、腹痛、腹泻、疲乏无力、发热、眼球肿胀，重者嗜睡、昏迷、发抖、痉挛等，因中枢神经系统麻痹死亡。', 'upload/1546873380.jpg', 1546873380);
INSERT INTO `plant` VALUES (5, '1', 1, '薇甘菊', '多年生草质或木质藤本，茎细长，匍匐或攀缘，多分枝，茎中部叶三角状卵形至卵形，基部心形，先端渐尖，边缘锯齿，头状花序多数，在枝端常排成复伞房花序状，含小花4朵，全为结实的两性花，总苞片4枚，狭长椭圆形总苞基部有一线状椭圆形的小苞叶，花有香气；花冠白色，脊状，檐部钟状，5齿裂，瘦果黑色。原产地中美洲，1884年首次在香港登陆，1984年在深圳发现。 分布于香港、澳门和广东珠江三角洲地区，全球性入侵物种。', '薇甘菊幼苗初期生长缓慢，在1个月内苗高仅为11厘米，单株叶面积0.33平方厘米。但随着苗龄的增长，其生长随之加快，其茎节极易出根，伸入土壤吸取营养，故其营养茎可进行旺盛的营养繁殖，而且较种子苗生长要快得多，薇甘菊一个节1天生长近20厘米。在内伶仃岛，薇甘菊的一个节在一年中所分枝出来的所有节的生长总长度为1007米。由于其蔓延速度极快，故有些学者称其为“一分钟一英里的杂草”。', 'upload/1546873501.jpg', 1546873501);
INSERT INTO `plant` VALUES (6, '1', 1, '紫茎泽兰', '呈半灌木，高0.8～2.5米。茎紫色，叶对生、卵状三角形、棱形，边缘具粗锯齿。头状花序，排成伞房状，总苞片三四层，小花白色。有性或无性繁殖。每株可年产瘦果1万粒左右，瘦果五棱形。具冠毛，藉冠毛随风传播。根状茎发达，可依靠强大的根状茎快速扩展蔓延。原产地中美洲，1935年在云南南部发现，可能经缅甸传入。分布于云南、广西、贵州、四川（西南部）、台湾、垂直分布上限为2500米。 全球性入侵物种 。', '生物危害编辑\r\n紫茎泽兰对畜牧生产的危害，表现为侵占草地，造成牧草严重减产。天然草地被紫茎泽兰入侵3年就失去放牧利用价值，常造成家畜误食中毒死亡。\r\n紫茎泽兰入侵农田、林地、牧场后，与农作物、牧草和林木争夺肥、水、阳光和空间，并分泌克生性物质、抑制周围其他植物的生长，对农作物和经济植物产量、草地维护、森林更新有极大影响。\r\n紫茎泽兰对土壤养分的吸收性强，能极大地损耗土壤肥力。另外，紫茎泽兰对土壤可耕性的破坏也较为严重。植株能释放多种化感物质，排挤其他植物生长，常常大片发生，形成单优种群，破坏生物多样性，破坏园林景观，影响林业生产。\r\n紫茎泽兰植株内含有芳香和辛辣化学物质和一些尚不清楚的有毒物质，其花粉能引起人类过敏性疾病。 ', 'upload/1546873555.jpg', 1546873555);
INSERT INTO `plant` VALUES (8, '1', 1, '石茅', '也称假高梁，多年生禾草，有根状茎。秆直立，高100-150cm。叶宽线形至线状披针形，先端长渐尖，基部渐狭，无毛，边缘粗糙。圆锥花序，分枝近轮生，无柄小穗椭圆形，成熟时为淡黄色或带淡紫色，主脉由齿间伸出成芒，也可全缘而无芒。雄蕊3枚；花柱2枚，仅基部联合，柱头帚状。有柄小穗雄性，较无柄小穗狭窄，颜色较深，质地亦较薄。种子千粒重3.5克。原产地中海地区，20世纪初从日本引到台湾南部栽培，同一时期在香港和广东北部发现，种子常混在进口作物种子中引进和扩散，分布于中国多地， 是高粱、玉米、小麦、棉花、大豆、甘蔗、黄麻、洋麻、苜蓿等30多种作物地里的杂草，还可与同属其他种杂交。456', '石茅是谷类作物、棉花、苜蓿、甘蔗、麻类等30多种作物田里的主要杂草。使作物产量降低。\r\n是多种害虫和病原微生物的寄主。\r\n其花粉与留种的高粱属栽培作物杂交，带来很大的危害。\r\n其根分泌物或腐烂的叶、地下茎、根等，会抑制作物种子的萌发和幼苗的生长。\r\n其植株有毒，牲畜误食会中毒。789', 'upload/1546877079.jpg', 1546877101);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `user_createtime` int(15) NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'root', 'root', 11111111);

SET FOREIGN_KEY_CHECKS = 1;
