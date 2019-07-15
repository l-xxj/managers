-- ----------------------------
-- 日期：2019-04-20 12:25:24
-- MySQL - 5.5.52-MariaDB : Database - managers
-- ----------------------------

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for `jobpaper`
-- ----------------------------

DROP TABLE IF EXISTS `jobpaper`;
CREATE TABLE `jobpaper` (
	 `id` int(11) NOT NULL  AUTO_INCREMENT ,
	 `name` varchar(44) COMMENT '姓名',
	 `num` int(11) COMMENT '工号',
	 `btime` date COMMENT '办理日期',
	 `gtime` date COMMENT '过期时间',
	 `stime` date COMMENT '发证日期',
	 PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Data for the table `jobpaper`
-- ----------------------------

INSERT INTO `jobpaper` VALUES ('3', '1', '1', '2019-03-14', '2019-03-16', '2019-03-09');

