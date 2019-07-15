-- ----------------------------
-- 日期：2019-06-21 23:02:10
-- MySQL - 5.5.52-MariaDB : Database - managers
-- ----------------------------

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for `insurance`
-- ----------------------------

DROP TABLE IF EXISTS `insurance`;
CREATE TABLE `insurance` (
	 `id` int(11) NOT NULL  AUTO_INCREMENT ,
	 `name` varchar(44) COMMENT '姓名',
	 `num` int(11) COMMENT '工号',
	 `buy` date COMMENT '购保时间',
	 `stop` date COMMENT '停保时间',
	 `cnum` int(11) COMMENT '个人电脑号',
	 PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Data for the table `insurance`
-- ----------------------------

INSERT INTO `insurance` VALUES ('8', '1', '1', '2019-03-11', '2019-03-14', '1');

