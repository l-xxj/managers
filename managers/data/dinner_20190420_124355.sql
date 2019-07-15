-- ----------------------------
-- 日期：2019-04-20 12:43:55
-- MySQL - 5.5.52-MariaDB : Database - managers
-- ----------------------------

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for `dinner`
-- ----------------------------

DROP TABLE IF EXISTS `dinner`;
CREATE TABLE `dinner` (
	 `id` int(11) NOT NULL  AUTO_INCREMENT ,
	 `name` varchar(44) COMMENT '姓名',
	 `num` int(11) COMMENT '工号',
	 `type` varchar(44) COMMENT '卡片类型',
	 `cid` int(11) COMMENT '卡号',
	 `new` date COMMENT '新办/续办',
	 PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Data for the table `dinner`
-- ----------------------------

INSERT INTO `dinner` VALUES ('5', '1', '1', '1', '3', '2019-03-14');

