-- ----------------------------
-- 日期：2019-04-20 12:47:26
-- MySQL - 5.5.52-MariaDB : Database - managers
-- ----------------------------

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for `card`
-- ----------------------------

DROP TABLE IF EXISTS `card`;
CREATE TABLE `card` (
	 `id` int(11) NOT NULL  AUTO_INCREMENT ,
	 `name` varchar(44) COMMENT '姓名',
	 `num` int(11) COMMENT '工号',
	 `htime` date COMMENT '办理时间',
	 `organization` varchar(44) COMMENT '机构',
	 `etime` date COMMENT '到期时间',
	 `hold` varchar(44) COMMENT '原件持有',
	 `number` int(11) COMMENT '编号',
	 `census` varchar(44) COMMENT '户籍地',
	 `measure` varchar(44) COMMENT '避孕措施',
	 `address` varchar(44) COMMENT '现居住地',
	 `phone` int(11) COMMENT '计生部电',
	 `ctime` date COMMENT '计生证时间',
	 `type` varchar(44) COMMENT '证件类型',
	 PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT 11 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Data for the table `card`
-- ----------------------------

INSERT INTO `card` VALUES ('11', '2', '1', '2019-02-26', '1', '2019-03-12', '1', '1', '1', '1', '1', '1', '2019-02-27', '1');

