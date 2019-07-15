-- ----------------------------
-- 日期：2019-04-20 13:01:11
-- MySQL - 5.5.52-MariaDB : Database - managers
-- ----------------------------

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for `woker`
-- ----------------------------

DROP TABLE IF EXISTS `woker`;
CREATE TABLE `woker` (
	 `id` int(11) NOT NULL  AUTO_INCREMENT ,
	 `name` varchar(88) COMMENT '姓名',
	 `sex` varchar(44) COMMENT '性别',
	 `nation` varchar(88) COMMENT '民族',
	 `native` varchar(88) COMMENT '籍贯',
	 `num` int(11) COMMENT '工号',
	 `card` int(44) COMMENT '身份证',
	 `marriage` varchar(88) COMMENT '婚姻',
	 `politic` varchar(88) COMMENT '政治面貌',
	 `residence` varchar(88) COMMENT '户口性质',
	 `dinner` varchar(88) COMMENT '食堂',
	 `branch` varchar(88) COMMENT '部门',
	 `strength` varchar(88) COMMENT '编制',
	 `photo` varchar(88) COMMENT '照片',
	 `edu` varchar(88) COMMENT '学历',
	 `school` varchar(88) COMMENT '毕业学校',
	 `phone` int(11) COMMENT '联系电话',
	 `email` varchar(88) COMMENT '邮箱',
	 `raddress` varchar(88) COMMENT '户口地址',
	 `naddress` varchar(88) COMMENT '现居地址',
	 `birthday` varchar(88) COMMENT '出生日期',
	 `bank` int(11) COMMENT '银行卡号',
	 `instancy` int(11) COMMENT '紧急联系方式',
	 `statue` int(11) COMMENT '0:在职；1:退休',
	 `Power` int(11) COMMENT '0:查看1:普通管理2:数据管理',
	 `password` varchar(88) COMMENT '密码',
	 PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT 117 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Data for the table `woker`
-- ----------------------------

INSERT INTO `woker` VALUES ('117', '1', '男', '1', '1', '1', '1', '', '1', '无', '第一食堂', '第一部门', '事业编制', '', '1', '1', '2', '事业编制', '1', '1', '2019-03-05', '0', '0', '0', '0', '');

