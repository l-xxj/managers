-- ----------------------------
-- 日期：2019-04-20 12:25:13
-- MySQL - 5.5.52-MariaDB : Database - managers
-- ----------------------------

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for `home`
-- ----------------------------

DROP TABLE IF EXISTS `home`;
CREATE TABLE `home` (
	 `id` int(11) NOT NULL  AUTO_INCREMENT ,
	 `fname` varchar(88) COMMENT '父亲姓名',
	 `fwork` varchar(88) COMMENT '父亲工作',
	 `fphone` int(11) COMMENT '父亲联系方式',
	 `mname` varchar(88) COMMENT '母亲姓名',
	 `mwork` varchar(88) COMMENT '母亲工作',
	 `mphone` int(11) COMMENT '母亲联系方式',
	 `cname` varchar(88) DEFAULT '无' COMMENT '子女姓名',
	 `cage` int(11) COMMENT '子女年龄',
	 `csex` varchar(88) DEFAULT '男' COMMENT '子女性别',
	 `cwork` varchar(88) DEFAULT '无' COMMENT '子女工作',
	 `cphone` int(11) COMMENT '子女联系方式',
	 `cnum` int(11) COMMENT '子女数量',
	 `sname` varchar(88) COMMENT '紧急联系人姓名',
	 `sphone` int(11) COMMENT '紧急联系人电话',
	 `name` varchar(88) COMMENT '姓名',
	 `num` int(11) COMMENT '工号',
	 `pphone` int(11) COMMENT '配偶联系方式',
	 PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT 8 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Data for the table `home`
-- ----------------------------

INSERT INTO `home` VALUES ('7', '1', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '0', '4', '4', '2', '1', '1');
INSERT INTO `home` VALUES ('8', '3', '3', '3', '3', '3', '3', '', '1', '1', '1', '1', '0', '2', '2', '1', '1', '1');

