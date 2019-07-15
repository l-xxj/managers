-- ----------------------------
-- 日期：2019-04-20 12:25:21
-- MySQL - 5.5.52-MariaDB : Database - managers
-- ----------------------------

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for `jobinfo`
-- ----------------------------

DROP TABLE IF EXISTS `jobinfo`;
CREATE TABLE `jobinfo` (
	 `id` int(11) NOT NULL  AUTO_INCREMENT ,
	 `name` varchar(44) COMMENT '姓名',
	 `num` int(11) COMMENT '工号',
	 `entry` date COMMENT '入职时间',
	 `dimission` date COMMENT '离职时间',
	 `historic` tinyint(44) COMMENT '历史就职',
	 PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Data for the table `jobinfo`
-- ----------------------------

INSERT INTO `jobinfo` VALUES ('3', '2', '1', '2019-03-12', '2019-03-20', '1');

