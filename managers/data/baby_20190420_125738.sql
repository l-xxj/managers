-- ----------------------------
-- 日期：2019-04-20 12:57:38
-- MySQL - 5.5.52-MariaDB : Database - managers
-- ----------------------------

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for `baby`
-- ----------------------------

DROP TABLE IF EXISTS `baby`;
CREATE TABLE `baby` (
	 `id` int(11) NOT NULL  AUTO_INCREMENT ,
	 `name` varchar(44),
	 `num` int(11),
	 `baby` varchar(44),
	 `chopital` varchar(44),
	 `fhospital` varchar(44),
	 `fpc` int(11),
	 `operation` date,
	 PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Data for the table `baby`
-- ----------------------------

INSERT INTO `baby` VALUES ('4', '3', '1', '1', '1', '1', '1', '1899-12-07');

