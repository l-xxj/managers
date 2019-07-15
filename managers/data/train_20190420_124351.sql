-- ----------------------------
-- 日期：2019-04-20 12:43:51
-- MySQL - 5.5.52-MariaDB : Database - managers
-- ----------------------------

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for `train`
-- ----------------------------

DROP TABLE IF EXISTS `train`;
CREATE TABLE `train` (
	 `id` int(11) NOT NULL  AUTO_INCREMENT ,
	 `name` varchar(44) COMMENT '姓名',
	 `num` int(11) COMMENT '工号',
	 `tname` varchar(44) COMMENT '培训名称',
	 `ttime` date COMMENT '培训时间',
	 `thonor` varchar(44) COMMENT '培训奖项',
	 PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Data for the table `train`
-- ----------------------------

INSERT INTO `train` VALUES ('2', '1', '1', '1', '2019-03-06', '3333');

