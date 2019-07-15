-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 �?07 �?15 �?22:20
-- 服务器版本: 5.5.40
-- PHP 版本: 5.6.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `managers`
--

-- --------------------------------------------------------

--
-- 表的结构 `baby`
--

CREATE TABLE IF NOT EXISTS `baby` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  `baby` varchar(44) DEFAULT NULL,
  `chopital` varchar(44) DEFAULT NULL,
  `fhospital` varchar(44) DEFAULT NULL,
  `fpc` int(11) DEFAULT NULL,
  `operation` date DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `baby`
--

INSERT INTO `baby` (`id`, `name`, `num`, `baby`, `chopital`, `fhospital`, `fpc`, `operation`) VALUES
(4, '3', 2, '3', '4', '1', 1, '1899-12-07');

-- --------------------------------------------------------

--
-- 表的结构 `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) DEFAULT NULL COMMENT '姓名',
  `num` int(11) DEFAULT NULL COMMENT '工号',
  `htime` date DEFAULT NULL COMMENT '办理时间',
  `organization` varchar(44) DEFAULT NULL COMMENT '机构',
  `etime` date DEFAULT NULL COMMENT '到期时间',
  `hold` varchar(44) DEFAULT NULL COMMENT '原件持有',
  `number` int(11) DEFAULT NULL COMMENT '编号',
  `census` varchar(44) DEFAULT NULL COMMENT '户籍地',
  `measure` varchar(44) DEFAULT NULL COMMENT '避孕措施',
  `address` varchar(44) DEFAULT NULL COMMENT '现居住地',
  `phone` int(11) DEFAULT NULL COMMENT '计生部电',
  `ctime` date DEFAULT NULL COMMENT '计生证时间',
  `type` varchar(44) DEFAULT NULL COMMENT '证件类型',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `card`
--

INSERT INTO `card` (`id`, `name`, `num`, `htime`, `organization`, `etime`, `hold`, `number`, `census`, `measure`, `address`, `phone`, `ctime`, `type`) VALUES
(11, 'xxj', 1, '2019-02-26', '1', '2019-03-12', '1', 1, '1', '1', '1', 1, '2019-02-27', '1');

-- --------------------------------------------------------

--
-- 表的结构 `dinner`
--

CREATE TABLE IF NOT EXISTS `dinner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) DEFAULT NULL COMMENT '姓名',
  `num` int(11) DEFAULT NULL COMMENT '工号',
  `type` varchar(44) DEFAULT NULL COMMENT '卡片类型',
  `cid` int(11) DEFAULT NULL COMMENT '卡号',
  `new` date DEFAULT NULL COMMENT '新办/续办',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `dinner`
--

INSERT INTO `dinner` (`id`, `name`, `num`, `type`, `cid`, `new`) VALUES
(5, '1', 1, '1', 3, '2019-03-14');

-- --------------------------------------------------------

--
-- 表的结构 `home`
--

CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `F-name` varchar(88) NOT NULL COMMENT '父亲姓名',
  `F-work` varchar(88) NOT NULL COMMENT '父亲工作',
  `F-phone` int(11) NOT NULL COMMENT '父亲联系方式',
  `M-name` varchar(88) NOT NULL COMMENT '母亲姓名',
  `M-work` varchar(88) NOT NULL COMMENT '母亲工作',
  `M-phone` int(11) NOT NULL COMMENT '母亲联系方式',
  `C-name` varchar(88) NOT NULL COMMENT '子女姓名',
  `C-age` int(11) NOT NULL COMMENT '子女年龄',
  `C-sex` varchar(88) NOT NULL COMMENT '子女性别',
  `C-work` varchar(88) NOT NULL COMMENT '子女工作',
  `C-phone` int(11) NOT NULL COMMENT '子女联系方式',
  `C-num` int(11) NOT NULL COMMENT '子女数量',
  `S-name` varchar(88) NOT NULL COMMENT '紧急联系人姓名',
  `S-phone` int(11) NOT NULL COMMENT '紧急联系人电话',
  `name` varchar(88) NOT NULL COMMENT '姓名',
  `num` int(11) NOT NULL COMMENT '工号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `insurance`
--

CREATE TABLE IF NOT EXISTS `insurance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) DEFAULT NULL COMMENT '姓名',
  `num` int(11) DEFAULT NULL COMMENT '工号',
  `buy` date DEFAULT NULL COMMENT '购保时间',
  `stop` date DEFAULT NULL COMMENT '停保时间',
  `cnum` int(11) DEFAULT NULL COMMENT '个人电脑号',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `insurance`
--

INSERT INTO `insurance` (`id`, `name`, `num`, `buy`, `stop`, `cnum`) VALUES
(8, '1', 1, '2019-03-11', '2019-03-14', 1);

-- --------------------------------------------------------

--
-- 表的结构 `jobinfo`
--

CREATE TABLE IF NOT EXISTS `jobinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) DEFAULT NULL COMMENT '姓名',
  `num` int(11) DEFAULT NULL COMMENT '工号',
  `entry` date DEFAULT NULL COMMENT '入职时间',
  `dimission` date DEFAULT NULL COMMENT '离职时间',
  `historic` tinyint(44) DEFAULT NULL COMMENT '历史就职',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `jobinfo`
--

INSERT INTO `jobinfo` (`id`, `name`, `num`, `entry`, `dimission`, `historic`) VALUES
(3, '2', 1, '2019-03-12', '2019-03-20', 1);

-- --------------------------------------------------------

--
-- 表的结构 `jobpaper`
--

CREATE TABLE IF NOT EXISTS `jobpaper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) DEFAULT NULL COMMENT '姓名',
  `num` int(11) DEFAULT NULL COMMENT '工号',
  `btime` date DEFAULT NULL COMMENT '办理日期',
  `gtime` date DEFAULT NULL COMMENT '过期时间',
  `stime` date DEFAULT NULL COMMENT '发证日期',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `jobpaper`
--

INSERT INTO `jobpaper` (`id`, `name`, `num`, `btime`, `gtime`, `stime`) VALUES
(3, '1', 1, '2019-03-14', '2019-03-16', '2019-03-09');

-- --------------------------------------------------------

--
-- 表的结构 `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `m_username` varchar(20) NOT NULL,
  `m_password` varchar(20) NOT NULL,
  `power` int(5) DEFAULT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `manager`
--

INSERT INTO `manager` (`m_username`, `m_password`, `power`, `id`) VALUES
('xxj', '123456', 3, 1);

-- --------------------------------------------------------

--
-- 表的结构 `mpf`
--

CREATE TABLE IF NOT EXISTS `mpf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) DEFAULT NULL COMMENT '姓名',
  `num` int(11) DEFAULT NULL COMMENT '工号',
  `buy` date DEFAULT NULL COMMENT '购买时间',
  `stop` date DEFAULT NULL COMMENT '停买时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `mpf`
--

INSERT INTO `mpf` (`id`, `name`, `num`, `buy`, `stop`) VALUES
(1, '1', 1, '2019-03-13', '2019-03-14'),
(4, '1', 1, '2019-03-08', '2019-03-09');

-- --------------------------------------------------------

--
-- 表的结构 `permanager`
--

CREATE TABLE IF NOT EXISTS `permanager` (
  `p_username` varchar(20) NOT NULL,
  `p_password` varchar(20) NOT NULL,
  `power` int(5) DEFAULT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `permanager`
--

INSERT INTO `permanager` (`p_username`, `p_password`, `power`, `id`) VALUES
('yhd', '123456', 2, 1);

-- --------------------------------------------------------

--
-- 表的结构 `r_manager`
--

CREATE TABLE IF NOT EXISTS `r_manager` (
  `username` varchar(88) NOT NULL,
  `pwd` varchar(88) NOT NULL,
  `cre_time` varchar(88) NOT NULL COMMENT '创建时间',
  `email` varchar(88) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `r_manager`
--

INSERT INTO `r_manager` (`username`, `pwd`, `cre_time`, `email`, `id`) VALUES
('hzj', '123456', '2019-03-17', 'xxxx@qq.com', 1);

-- --------------------------------------------------------

--
-- 表的结构 `skill`
--

CREATE TABLE IF NOT EXISTS `skill` (
  `name` varchar(44) DEFAULT NULL COMMENT '姓名',
  `num` int(11) DEFAULT NULL COMMENT '工号',
  `skill` varchar(44) DEFAULT NULL COMMENT '技能',
  `rank` varchar(44) DEFAULT NULL COMMENT '级别',
  `fnum` date DEFAULT NULL COMMENT '发证日期',
  `cnum` varchar(44) DEFAULT NULL COMMENT '证书号',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `skill`
--

INSERT INTO `skill` (`name`, `num`, `skill`, `rank`, `fnum`, `cnum`, `id`) VALUES
('2', 1, '1', '1', '2019-03-06', '1', 3);

-- --------------------------------------------------------

--
-- 表的结构 `train`
--

CREATE TABLE IF NOT EXISTS `train` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(44) DEFAULT NULL COMMENT '姓名',
  `num` int(11) DEFAULT NULL COMMENT '工号',
  `tname` varchar(44) DEFAULT NULL COMMENT '培训名称',
  `ttime` date DEFAULT NULL COMMENT '培训时间',
  `thonor` varchar(44) DEFAULT NULL COMMENT '培训奖项',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `train`
--

INSERT INTO `train` (`id`, `name`, `num`, `tname`, `ttime`, `thonor`) VALUES
(2, '1', 1, '1', '2019-03-06', '3333');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_name` varchar(20) NOT NULL,
  `user_pwd` varchar(20) NOT NULL,
  `power` int(5) DEFAULT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`user_name`, `user_pwd`, `power`, `id`, `name`) VALUES
('hjh9', '123456', 1, 1, 'hjh9'),
('xxj', '123456', 3, 2, 'xxj'),
('yhd', '123456', 2, 3, 'yhd'),
('hzj', '123456', 2, 4, 'hzj');

-- --------------------------------------------------------

--
-- 表的结构 `woker`
--

CREATE TABLE IF NOT EXISTS `woker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(88) DEFAULT NULL COMMENT '姓名',
  `sex` varchar(44) DEFAULT NULL COMMENT '性别',
  `nation` varchar(88) DEFAULT NULL COMMENT '民族',
  `native` varchar(88) DEFAULT NULL COMMENT '籍贯',
  `num` int(11) DEFAULT NULL COMMENT '工号',
  `card` int(44) DEFAULT NULL COMMENT '身份证',
  `marriage` varchar(88) DEFAULT NULL COMMENT '婚姻',
  `politic` varchar(88) DEFAULT NULL COMMENT '政治面貌',
  `residence` varchar(88) DEFAULT NULL COMMENT '户口性质',
  `dinner` varchar(88) DEFAULT NULL COMMENT '食堂',
  `branch` varchar(88) DEFAULT NULL COMMENT '部门',
  `strength` varchar(88) DEFAULT NULL COMMENT '编制',
  `photo` varchar(88) DEFAULT NULL COMMENT '照片',
  `edu` varchar(88) DEFAULT NULL COMMENT '学历',
  `school` varchar(88) DEFAULT NULL COMMENT '毕业学校',
  `phone` int(11) DEFAULT NULL COMMENT '联系电话',
  `email` varchar(88) DEFAULT NULL COMMENT '邮箱',
  `raddress` varchar(88) DEFAULT NULL COMMENT '户口地址',
  `naddress` varchar(88) DEFAULT NULL COMMENT '现居地址',
  `birthday` varchar(88) DEFAULT NULL COMMENT '出生日期',
  `bank` int(11) DEFAULT NULL COMMENT '银行卡号',
  `instancy` int(11) DEFAULT NULL COMMENT '紧急联系方式',
  `statue` int(11) DEFAULT NULL COMMENT '0:在职；1:退休',
  `Power` int(11) DEFAULT NULL COMMENT '0:查看1:普通管理2:数据管理',
  `password` varchar(88) DEFAULT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=113 ;

--
-- 转存表中的数据 `woker`
--

INSERT INTO `woker` (`id`, `name`, `sex`, `nation`, `native`, `num`, `card`, `marriage`, `politic`, `residence`, `dinner`, `branch`, `strength`, `photo`, `edu`, `school`, `phone`, `email`, `raddress`, `naddress`, `birthday`, `bank`, `instancy`, `statue`, `Power`, `password`) VALUES
(104, 'a', '男', 'a', 'a', 1, 1, '已婚', 'a', '农业户口', '第一食堂', '第一部门', '事业编制', NULL, '', 'a', 1, '事业编制', 'a', 'a', '2019-03-19', NULL, NULL, NULL, NULL, NULL),
(105, 'a', '男', 'a', 'a', 1, 1, '已婚', '1', '农业户口', '第一食堂', '第一部门', '事业编制', NULL, 'a', 'a', 1, '事业编制', 'a', 'a', '2019-03-06', NULL, NULL, NULL, NULL, NULL),
(106, 'a', '男', 'a', 'a', 1, 1, '已婚', '1', '农业户口', '第一食堂', '第一部门', '事业编制', NULL, '1', '1', 1, '事业编制', '1', '1', '2019-03-12', NULL, NULL, NULL, NULL, NULL),
(107, '1', '男', '1', '1', 1, 1, '已婚', '1', '农业户口', '第一食堂', '第一部门', '事业编制', NULL, '1', '1', 1, '事业编制', '1', '1', '1899-11-28', NULL, NULL, NULL, NULL, NULL),
(108, '1', '男', '1', '1', 1, 1, '已婚', '1', '农业户口', '第一食堂', '第一部门', '事业编制', NULL, '1', '1', 1, '事业编制', '1', '1', '2019-02-25', NULL, NULL, NULL, NULL, NULL),
(109, '1', '男', '1', '1', 1, 1, '已婚', '1', '农业户口', '第一食堂', '第一部门', '事业编制', NULL, '1', '1', 1, '事业编制', '1', '1', '2019-03-04', NULL, NULL, NULL, NULL, NULL),
(110, '44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'xu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'opi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
