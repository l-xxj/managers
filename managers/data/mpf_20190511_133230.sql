-- ----------------------------
-- 日期：2019-05-11 13:32:30
-- MySQL - 5.5.52-MariaDB : Database - managers
-- ----------------------------

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for `mpf`
-- ----------------------------

DROP TABLE IF EXISTS `mpf`;
CREATE TABLE `mpf` (
	 `id` int(11) NOT NULL  AUTO_INCREMENT ,
	 `name` varchar(44) COMMENT '姓名',
	 `num` int(11) COMMENT '工号',
	 `buy` date COMMENT '购买时间',
	 `stop` date COMMENT '停买时间',
	 PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Data for the table `mpf`
-- ----------------------------

INSERT INTO `mpf` VALUES ('1', '1', '1', '2019-03-13', '2019-03-14');
INSERT INTO `mpf` VALUES ('4', '1', '1', '2019-03-08', '2019-03-09');

