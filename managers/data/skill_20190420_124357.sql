-- ----------------------------
-- 日期：2019-04-20 12:43:57
-- MySQL - 5.5.52-MariaDB : Database - managers
-- ----------------------------

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for `skill`
-- ----------------------------

DROP TABLE IF EXISTS `skill`;
CREATE TABLE `skill` (
	 `name` varchar(44) COMMENT '姓名',
	 `num` int(11) COMMENT '工号',
	 `skill` varchar(44) COMMENT '技能',
	 `rank` varchar(44) COMMENT '级别',
	 `fnum` date COMMENT '发证日期',
	 `cnum` varchar(44) COMMENT '证书号',
	 `id` int(11) NOT NULL  AUTO_INCREMENT ,
	 PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Data for the table `skill`
-- ----------------------------

INSERT INTO `skill` VALUES ('2', '1', '1', '1', '2019-03-06', '1', '3');

