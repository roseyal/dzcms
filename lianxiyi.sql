# Host: localhost  (Version: 5.5.53)
# Date: 2018-01-21 15:13:32
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "dz_acms"
#

DROP TABLE IF EXISTS `dz_acms`;
CREATE TABLE `dz_acms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "dz_acms"
#

/*!40000 ALTER TABLE `dz_acms` DISABLE KEYS */;
INSERT INTO `dz_acms` VALUES (3,'你好',1,'你是做什么的'),(4,'你是',0,'你好 啊'),(5,'你好',1,'你是做什么的'),(6,'你是',0,'你好 啊'),(7,'你好',1,'你是做什么的'),(8,'你是',0,'你好 啊'),(9,'你好',1,'你是做什么的'),(10,'你是',0,'你好 啊');
/*!40000 ALTER TABLE `dz_acms` ENABLE KEYS */;

#
# Structure for table "dz_ad"
#

DROP TABLE IF EXISTS `dz_ad`;
CREATE TABLE `dz_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '广告id',
  `title` varchar(50) DEFAULT NULL COMMENT '广告标题',
  `type` varchar(10) DEFAULT NULL COMMENT '广告类型',
  `theme` tinyint(3) DEFAULT NULL COMMENT '广告题材(存数值)',
  `brand` varchar(15) DEFAULT NULL COMMENT '广告品牌',
  `synopsis` varchar(200) DEFAULT NULL COMMENT '广告简介',
  `photo` varchar(100) DEFAULT NULL COMMENT '广告图片',
  `content` text COMMENT '广告内容',
  `starttime` datetime DEFAULT NULL COMMENT '开始时间',
  `endtime` datetime DEFAULT NULL COMMENT '结束时间',
  `static` tinyint(3) DEFAULT '1' COMMENT '状态',
  `recovery` tinyint(3) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='广告位';

#
# Data for table "dz_ad"
#

/*!40000 ALTER TABLE `dz_ad` DISABLE KEYS */;
INSERT INTO `dz_ad` VALUES (1,'大智招商',NULL,0,'互联网','致力于培养高端的软件人才。技术方向为移动互联网开发（手机软件）、互联网应用程序开发、网页设计与制作、电子商务与网络营销。我专业针对IT企业用人标准，制定符合企业需求的专业课程\r\n\r\n','20171106\\48ad63494342054f9f629d9deeeee768.png','致力于培养高端的软件人才。技术方向为移动互联网开发（手机软件）、互联网应用程序开发、网页设计与制作、电子商务与网络营销。我专业针对IT企业用人标准，制定符合企业需求的专业课程，入学即签订就业安置协议，毕业后直接进入企业工作，合格学生100%保证就业。\r\n\r\n   软件在生活中处处可见，你去交话费，你去银行，你去超市……，都会用到软件。比尔盖茨（微软总裁）、乔布斯（苹果总裁）、马云（阿里巴巴总裁）、马化腾（腾讯总裁）……，这些名人都是以软件开发为基础发展起来的。中国市场每年近百万的人才缺口，国内的软件人才供应严重不足，IT软件行业是财富和神话的象征，中国未来的软件产业发展潜力巨大。\r\n\r\n  在大学生就业难的今天，我专业的毕业生，分别在北京、上海、深圳、济南、临沂等地工作，其中就业单位有新浪网、腾讯网、奇虎360、PPS视频网、临沂在线、临沂拓普网络、临沂成功软件、临沂新商软件公司等近百家企业。“第一年的工资赚回了全部的学费”，工作二年的平均年薪在6万-10万之间。、\r\n\r\n  2013年我专业与临沂大学信息学院共同成立新商软件实训中心，对在校大学生进行软件开发实训，我专业的技术能力得到认可。',NULL,NULL,1,0),(2,'PHP招兵买马',NULL,18,'山炮','人生最重要的不是努力，不是奋斗，而是抉择。当你走到人生的十字路口，不知如何辨别方向的时候，请停下来，好好想一想，你学PHP了吗','20171107\\30b7e84e94b387f7f6c6a04349033ba2.jpg','人生最重要的不是努力，不是奋斗，而是抉择。当你走到人生的十字路口，不知如何辨别方向的时候，请停下来，好好想一想，你学PHP了吗',NULL,NULL,1,0),(3,'双十一',NULL,0,'阿里云','暂无','20171107\\989448e3f464bfd9ac9dcdb159c12c81.gif','暂无',NULL,NULL,1,0);
/*!40000 ALTER TABLE `dz_ad` ENABLE KEYS */;

#
# Structure for table "dz_adcate"
#

DROP TABLE IF EXISTS `dz_adcate`;
CREATE TABLE `dz_adcate` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '广告类型id',
  `name` varchar(30) DEFAULT NULL COMMENT '广告类型名称',
  `content` text COMMENT '广告类型简介',
  `puttime` int(11) DEFAULT NULL COMMENT '时间',
  `recovery` tinyint(3) DEFAULT '0' COMMENT '是否删除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='广告分类';

#
# Data for table "dz_adcate"
#

/*!40000 ALTER TABLE `dz_adcate` DISABLE KEYS */;
INSERT INTO `dz_adcate` VALUES (1,'IT','在我眼中PHP最美',1510037126,0),(2,'双十一','双十一特惠来袭',1510037167,0),(3,'食品','暂无',1510037186,0);
/*!40000 ALTER TABLE `dz_adcate` ENABLE KEYS */;

#
# Structure for table "dz_admin"
#

DROP TABLE IF EXISTS `dz_admin`;
CREATE TABLE `dz_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL COMMENT '用户名',
  `password` char(32) NOT NULL COMMENT '密码',
  `sex` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '1男性0女性',
  `email` varchar(32) NOT NULL COMMENT '邮箱',
  `telphone` bigint(11) unsigned NOT NULL COMMENT '电话',
  `inputtime` int(11) unsigned NOT NULL COMMENT '创建时间',
  `remark` text NOT NULL COMMENT '备注',
  `photo` varchar(100) NOT NULL COMMENT '头像',
  `trash` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '删除 0表示删除 1表示启用',
  `status` int(1) unsigned NOT NULL DEFAULT '1' COMMENT '状态 1表示启用 2表示禁用',
  `group` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=utf8;

#
# Data for table "dz_admin"
#

/*!40000 ALTER TABLE `dz_admin` DISABLE KEYS */;
INSERT INTO `dz_admin` VALUES (54,'郭凯元111','d41d8cd98f00b204e9800998ecf8427e',1,'12345@ww.c',15153698986,1506074031,'测试数据大师傅测试数据大师傅测试数据大师傅测试数据大师傅测试数据大师傅测试数据大师傅测试数据大师傅测试数据大师傅测试数据大师傅测试数据大师傅测试数据大师傅测试数据大师傅测试数据大师傅测大师傅的萨芬 ','/public/Uploads/20170922\\25fb87ab691b71506322c1698a4d4315.jpg',1,0,23),(55,'杨丽萍','d41d8cd98f00b204e9800998ecf8427e',0,'1600632066@qq.co',15864890052,1506064651,'sdsgfdhgdjhj','20170922\\8dd882c3e24bbc8f267c05f7d7bab6fb.jpg',1,1,1),(59,'士大夫','d41d8cd98f00b204e9800998ecf8427e',1,'1234567890@qq.com',13823455678,1506074992,'','',1,1,23),(60,'阿斯蒂芬','d41d8cd98f00b204e9800998ecf8427e',1,'1243424172@qq.com',15966622333,1506075002,'','',1,1,23),(64,'李冯','202cb962ac59075b964b07152d234b70',1,'1243424172@qq.com',15153698986,1506130927,'哈哈','',1,1,23),(69,'guok','698d51a19d8a121ce581499d7b701668',1,'1305864975@qq.com',15153698985,1506132110,'地方','',1,1,2),(70,'dsf ','c4ca4238a0b923820dcc509a6f75849b',1,'1243424172@qq.com',15153698986,1506301504,'','',1,1,1),(74,'郭爱克i元','d41d8cd98f00b204e9800998ecf8427e',1,'1243424172@qq.com',15153698986,1506310969,'','/public/Uploads/20170925\\d2468517bf85c6f4e381c262e2243bcb.jpg',1,1,23),(75,'guokaiyuan','d41d8cd98f00b204e9800998ecf8427e',0,'1243424172@qq.com',15153698986,1506317710,'郭凯元','',1,1,4),(76,'123','202cb962ac59075b964b07152d234b70',1,'1234567890@qq.com',15153698986,1506074992,'','',1,1,23),(77,'王前程','202cb962ac59075b964b07152d234b70',1,'937978402@qq.com',15864890052,1510210116,'','20171109\\9a049d082a9bfa1f37feb49eb5dd3049.jpg',1,1,0),(78,'王前程','202cb962ac59075b964b07152d234b70',1,'937978402@qq.com',15864890052,1510210121,'','20171109\\1f27bc0a0ef0fc1d81a0bbd1eda5be73.jpg',1,1,0),(79,'王前程','202cb962ac59075b964b07152d234b70',1,'937978402@qq.com',15864890052,1510210266,'','20171109\\f8f128d7cf1056477e1e406c961733f4.jpg',1,1,0),(80,'wqd','77963b7a931377ad4ab5ad6a9cd718aa',1,'1@qq.com',0,1510210414,'','20171109\\79a3a9ae9796f780480ad8713003dca5.jpg',1,1,0),(81,'qq','b2ca678b4c936f905fb82f2733f5297f',1,'',0,1510210531,'','20171109\\fc3d90d7d7baf81a6d03076268ec261b.jpg',1,1,0),(82,'','d41d8cd98f00b204e9800998ecf8427e',1,'',0,1510210669,'','20171109\\693da7a86e725fb0db6eecb412d7ac45.jpg',1,1,0),(83,'','d41d8cd98f00b204e9800998ecf8427e',1,'',0,1510210674,'','20171109\\6bb6c7761911bea52826e60e889c915f.jpg',1,1,0),(84,'1111','d41d8cd98f00b204e9800998ecf8427e',1,'937978402@qq.com',15864890033,1510210746,'','20171109\\0df67b338e382b1bc8e26728bd4d15f4.jpg',1,1,1),(85,'1234','d41d8cd98f00b204e9800998ecf8427e',1,'melovephp@163.com',15864890033,1510210840,'','/public/Uploads/20180116\\0736e80d287c4f5f81668c4ebd7d929c.jpg',1,1,1),(86,'12345','d41d8cd98f00b204e9800998ecf8427e',1,'',0,1510210843,'','20171109\\0e9baa23dd9b0b85a97c8b1a9e240bc0.jpg',1,1,0),(87,'15864890052','d41d8cd98f00b204e9800998ecf8427e',1,'',0,1510210977,'','20171109\\972d3b5552681cd8d6f431401bf84592.jpg',1,1,0),(88,'15864890052','d41d8cd98f00b204e9800998ecf8427e',1,'',0,1510210989,'','20171109\\018d1a8e0728230c1b95c1ef7ee9a090.jpg',1,1,0),(89,'就好的空间还是减肥','698d51a19d8a121ce581499d7b701668',1,'937978402@qq.com',15864890052,1510211312,'','20171109\\a5309780b02e82b983e3eea2603f2fca.jpg',1,1,0);
/*!40000 ALTER TABLE `dz_admin` ENABLE KEYS */;

#
# Structure for table "dz_auth_group"
#

DROP TABLE IF EXISTS `dz_auth_group`;
CREATE TABLE `dz_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` varchar(255) NOT NULL DEFAULT '',
  `remark` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

#
# Data for table "dz_auth_group"
#

/*!40000 ALTER TABLE `dz_auth_group` DISABLE KEYS */;
INSERT INTO `dz_auth_group` VALUES (1,'超级管理员',1,'超级管理员','描述'),(2,'普通管理员',1,'root','描述'),(3,'运营人员',1,'管理员','运营'),(4,'编辑人员',1,'不知道','人员'),(5,'设计师',0,'125,127,130,128,124,97,98,','设计师'),(12,'超级无敌管理员',1,'1,126,125,127,130,128,','这个管理员是无敌的'),(23,'设计师',1,'125,124,96,97,98,','阿斯蒂芬'),(25,'超级管理员葛军',0,'3','董事长'),(26,'王艳婷',1,'1,126,133,132,125,131,127,130,128,124,96,97,98,','厉害的');
/*!40000 ALTER TABLE `dz_auth_group` ENABLE KEYS */;

#
# Structure for table "dz_auth_group_access"
#

DROP TABLE IF EXISTS `dz_auth_group_access`;
CREATE TABLE `dz_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `group_id` (`group_id`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

#
# Data for table "dz_auth_group_access"
#

/*!40000 ALTER TABLE `dz_auth_group_access` DISABLE KEYS */;
INSERT INTO `dz_auth_group_access` VALUES (0,60),(54,23),(60,23),(64,1),(69,1),(70,3),(72,4),(73,2),(74,23),(75,4),(91,23),(92,1);
/*!40000 ALTER TABLE `dz_auth_group_access` ENABLE KEYS */;

#
# Structure for table "dz_auth_rule"
#

DROP TABLE IF EXISTS `dz_auth_rule`;
CREATE TABLE `dz_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `level` int(11) DEFAULT NULL,
  `parentid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=134 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

#
# Data for table "dz_auth_rule"
#

/*!40000 ALTER TABLE `dz_auth_rule` DISABLE KEYS */;
INSERT INTO `dz_auth_rule` VALUES (1,'哈哈·','abc_a',1,1,'',1,0),(2,'齐全','wewqe',1,0,'',4,NULL),(3,'蛋蛋','zxc',1,0,'',3,NULL),(4,'嘿嘿','sadsa',1,0,'',2,NULL),(5,'东东','dong',1,0,'',1,98),(95,'gdgd','gfdg',1,0,'',2,112),(96,'方法','fangfa',2,1,'',1,124),(97,'fdsf','fdsfsd',1,0,'',1,124),(98,'dasda','哈哈·',1,0,'',2,124),(99,'hgfhfh','gfhfg',1,0,'',1,110),(124,'前台模块','',1,1,'',0,125),(125,'后台模块','',1,1,'',0,0),(126,'郭凯元','_abc',1,1,'',2,1),(127,'啊师傅','adsf',1,1,'',1,125),(128,'撒','abc_',1,1,'',3,127),(129,'添加管理员','do_addadmins',1,1,'',3,98),(130,'修改管理员','do_upadmin',1,1,'',2,127),(131,'方法啊啊啊','houtaia',1,1,'',1,125),(132,'哈哈我','fdssdf',1,0,'',1,0),(133,'哈哈肖特','gfd',1,0,'',1,0);
/*!40000 ALTER TABLE `dz_auth_rule` ENABLE KEYS */;

#
# Structure for table "dz_backdb"
#

DROP TABLE IF EXISTS `dz_backdb`;
CREATE TABLE `dz_backdb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `puttime` int(11) DEFAULT NULL COMMENT '备份时间',
  `backname` int(11) DEFAULT NULL COMMENT '管理员id',
  `location` varchar(100) DEFAULT NULL COMMENT '备份文件地址',
  `dbsize` float(6,3) DEFAULT NULL COMMENT '占用大小',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='备份数据';

#
# Data for table "dz_backdb"
#

/*!40000 ALTER TABLE `dz_backdb` DISABLE KEYS */;
INSERT INTO `dz_backdb` VALUES (1,1506596376,2017,'D:\\phpStudy\\WWW\\dzcms\\/public/sqldata/',79.996),(2,1515638961,NULL,'/dbcopy/2018-01-11 10!49!21.sql',12.680);
/*!40000 ALTER TABLE `dz_backdb` ENABLE KEYS */;

#
# Structure for table "dz_banner"
#

DROP TABLE IF EXISTS `dz_banner`;
CREATE TABLE `dz_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) DEFAULT NULL COMMENT 'banner标题',
  `shorttitle` varchar(20) DEFAULT NULL COMMENT 'banner简略标题',
  `type` varchar(10) DEFAULT NULL COMMENT 'banner类型',
  `photo` varchar(50) DEFAULT NULL COMMENT 'banner',
  `pubtime` int(11) DEFAULT NULL COMMENT '上传时间',
  `static` tinyint(3) DEFAULT '1' COMMENT '状态',
  `recovery` tinyint(3) DEFAULT NULL COMMENT '是否放入回收站',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='Banner表';

#
# Data for table "dz_banner"
#

/*!40000 ALTER TABLE `dz_banner` DISABLE KEYS */;
INSERT INTO `dz_banner` VALUES (1,'僵小鱼','僵小鱼','全部栏目','20171108\\80afcd2e8fa5a155a88c95051bd088e1.jpg',1510108562,1,NULL),(2,'呆萌二哈','呆萌二哈','全部栏目','20171108\\940597c7f41a2ee05c00255f27253651.jpg',1510108586,1,NULL),(3,'皇家血统哈士奇','哈士奇','关于我们','20171108\\0579deec9417033fd2c015c1af63cfd9.jpg',1510108626,1,NULL),(4,'狗','狗','全部栏目','20171108\\bd29f652f5b04e8de971e817f94152b1.jpg',1510108661,1,NULL),(5,'萌图','萌图','新闻资讯','20171108\\0360ab35f25483fe6ca83c1576ea987d.gif',1510108700,1,NULL);
/*!40000 ALTER TABLE `dz_banner` ENABLE KEYS */;

#
# Structure for table "dz_basics"
#

DROP TABLE IF EXISTS `dz_basics`;
CREATE TABLE `dz_basics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitesname` varchar(100) DEFAULT NULL COMMENT '网站名称',
  `antistop` varchar(50) DEFAULT NULL COMMENT '关键词',
  `describe` varchar(200) DEFAULT NULL COMMENT '描述',
  `pathconfig` varchar(100) DEFAULT NULL COMMENT '路径配置',
  `catalogue` varchar(50) DEFAULT NULL COMMENT '上传根目录',
  `copyright` varchar(30) DEFAULT NULL COMMENT '版权信息',
  `filing` varchar(20) DEFAULT NULL COMMENT '备案号',
  `code` text COMMENT '统计代码',
  `block` text COMMENT '屏蔽词',
  `maxlink` tinyint(3) DEFAULT NULL COMMENT '最大连接次数',
  `iplist` varchar(255) DEFAULT NULL COMMENT '允许访问后台IP地址',
  `styles` varchar(255) DEFAULT NULL COMMENT '模板风格',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='基础设置';

#
# Data for table "dz_basics"
#

/*!40000 ALTER TABLE `dz_basics` DISABLE KEYS */;
INSERT INTO `dz_basics` VALUES (1,'block','5个左右,8汉字以内,用英文,隔开','空制在80个汉字，160个字符以内','默认为空，为相对路径','默认','京ICP证030173号-1 ','京ICP备00000000号','京ICP备00000000号','内幕 侵犯 骗子 穷疯了 牛B 不要脸 垃圾 陷阱 不够牛 诅咒 霸王条款 破 公道 阴谋\r\n漏洞 骚扰 争议 强盗 强抢 罪 无耻 坑人 坑爹 惹的祸 惹 祸 无语 打人 不能信\r\n强制 停卡 被骗 怀疑 诈骗 疑似 真是拽 强迫 投诉 有待深思 诚信度 骗人 牛逼 大便\r\n一坨 无奈 无言 垄断 欺压 黑幕 背后 神秘 神密 老是这样 收费不明 擅自 自毁长城\r\n自毁 悲哀 太黑 屏蔽 太差 丑恶嘴脸 免费的晚餐 乱收费 涉嫌 欺诈 莫名其妙 牛\r\n信赖 黑 黑心钱 私自 后悔 悔 霸王 保障 权益 无耻行径 乱扣费 攻击 恶心 黑名单\r\n爬你吗的 武装 不过如此 忽悠 他妈的 自杀 私募 黑马 卑鄙 伎俩 投诉 揭露 销魂\r\n霸占 无情 封杀 纠结 头痛 失望 愤怒 真假 无良 痛 尊重 擅自 迷恋 传说 悲惨 遭遇\r\n杯具 水准 鄙视 下套子 差钱 坑钱 耻辱 肆意 声讨 良心 不相信 蒙人 威胁 顺手牵羊 法庭 承诺 不满 强烈 一塌糊涂 死 谨防 坑害 大爷的 强悍 注意 受害 潜规则\r\n缺斤少两 虐待 倒闭 天理难容 无能 无赖 控诉 篡改 绑架 骚扰 拖欠 公平 曝光 告发\r\n小心 上当 内幕 揭秘 狗屎 揭穿 骗局 谴责1',2,'127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1,127.0.0.1','lf');
/*!40000 ALTER TABLE `dz_basics` ENABLE KEYS */;

#
# Structure for table "dz_category"
#

DROP TABLE IF EXISTS `dz_category`;
CREATE TABLE `dz_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '栏目id',
  `template_index` varchar(30) DEFAULT '' COMMENT '模板首页',
  `template_list` varchar(30) DEFAULT '' COMMENT '模板列表页',
  `template_content` varchar(30) DEFAULT '' COMMENT '模板内容页',
  `catename` varchar(30) NOT NULL DEFAULT '' COMMENT '栏目中文名称',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `image` varchar(100) NOT NULL DEFAULT '' COMMENT '栏目图片',
  `parentid` tinyint(3) DEFAULT '0' COMMENT '父id',
  `child` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否存在子栏目 1存在',
  `arrchildid` varchar(255) NOT NULL DEFAULT '' COMMENT '所有子栏目id',
  `url` varchar(100) NOT NULL COMMENT '链接地址',
  `ismenu` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否在导航显示 1为显示',
  `letter` varchar(50) NOT NULL COMMENT '栏目英文名称',
  `isdel` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否删除  1已删除',
  `modelid` tinyint(3) unsigned DEFAULT '0' COMMENT '所属模型id',
  `inputtime` int(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "dz_category"
#

/*!40000 ALTER TABLE `dz_category` DISABLE KEYS */;
INSERT INTO `dz_category` VALUES (1,'index.html','index.html','index.html','网站首页','招生就业','',0,0,'','/home/article/newslist/cateid/1',2,'zhaosheniuye',0,1,1586489905),(2,'about.html','about.html','about.html','关于我们','关于我们','',0,0,'','/home/article/newslist/cateid/2',2,'guanyuwomen',0,2,1586489905),(3,'product.html','product.html','product_content.html','产品展示','联系方式','',0,0,'','/home/article/newslist/cateid/3',2,'lianxifangshi',0,3,1586487905),(4,'brand.html','brand.html','pinpai_content.html','品牌优势','版权声明','',0,0,'','/home/article/newslist/cateid/4',2,'banuan',0,4,1586489905),(5,'news.html','news.html','news_content.html','新闻动态','我也不知道','',0,0,'','/home/article/newslist/cateid/5',2,'jiaoshao',0,1,1586489005),(6,'company.html','company.html','choose_content.html','公司介绍','公司介绍','',0,0,'','/home/article/newslist/cateid/6',2,'',0,2,1586489905);
/*!40000 ALTER TABLE `dz_category` ENABLE KEYS */;

#
# Structure for table "dz_classify"
#

DROP TABLE IF EXISTS `dz_classify`;
CREATE TABLE `dz_classify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sitename` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='友情链接分类';

#
# Data for table "dz_classify"
#

/*!40000 ALTER TABLE `dz_classify` DISABLE KEYS */;
INSERT INTO `dz_classify` VALUES (1,'企业网站'),(2,'社交网站'),(3,'个人网站'),(4,'游戏网站');
/*!40000 ALTER TABLE `dz_classify` ENABLE KEYS */;

#
# Structure for table "dz_comment"
#

DROP TABLE IF EXISTS `dz_comment`;
CREATE TABLE `dz_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_id` int(11) NOT NULL DEFAULT '0' COMMENT '评论人id',
  `newsid` int(3) DEFAULT NULL COMMENT '资讯id',
  `comment_content` varchar(255) NOT NULL DEFAULT '' COMMENT '评论内容',
  `comment_time` int(11) NOT NULL DEFAULT '0' COMMENT '评论时间',
  `news_id` int(11) NOT NULL DEFAULT '0' COMMENT '文章id',
  `good_id` varchar(255) NOT NULL DEFAULT '' COMMENT '点赞人id',
  `good_num` smallint(6) NOT NULL DEFAULT '0' COMMENT '点赞数',
  `cai_id` int(11) NOT NULL DEFAULT '0' COMMENT '踩过的人id',
  `cai_num` smallint(6) NOT NULL DEFAULT '0' COMMENT '踩数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='评论表';

#
# Data for table "dz_comment"
#

/*!40000 ALTER TABLE `dz_comment` DISABLE KEYS */;
INSERT INTO `dz_comment` VALUES (1,0,47,'许愿清泉流响',1506336825,1,'1',1,1,1),(2,0,46,'许愿清泉流响',1506336825,2,'2',2,2,2),(5,0,47,'许愿清泉流响',1506336825,1,'1',1,1,1),(6,0,46,'许愿清泉流响',1506336825,2,'2',2,2,2),(8,0,47,'许愿清泉流响',1506336825,1,'1',1,1,1),(9,0,46,'许愿清泉流响',1506336825,2,'2',2,2,2),(10,0,24,'许愿清泉流响',1506336825,3,'3',3,3,3);
/*!40000 ALTER TABLE `dz_comment` ENABLE KEYS */;

#
# Structure for table "dz_custom"
#

DROP TABLE IF EXISTS `dz_custom`;
CREATE TABLE `dz_custom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `qq` char(11) DEFAULT NULL,
  `sex` tinyint(1) DEFAULT '0',
  `state` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=108 DEFAULT CHARSET=utf8 COMMENT='客服  回收站';

#
# Data for table "dz_custom"
#

/*!40000 ALTER TABLE `dz_custom` DISABLE KEYS */;
INSERT INTO `dz_custom` VALUES (81,'可乐全','52121',0,1),(82,'棒棒的','1221321',0,1),(84,'棒棒的','1221321',0,1),(92,'棒棒的','1221321',0,1),(93,'可乐全','52121',0,1),(94,'棒棒的','1221321',0,1),(98,'棒棒的','1221321',0,1),(99,'可乐全','52121',0,1),(100,'棒棒的','1221321',0,1),(101,'可乐全','52121',0,1),(104,'棒棒的','1221321',0,1),(105,'可乐全','52121',0,1),(107,'可乐全','52121',0,1);
/*!40000 ALTER TABLE `dz_custom` ENABLE KEYS */;

#
# Structure for table "dz_friendlink"
#

DROP TABLE IF EXISTS `dz_friendlink`;
CREATE TABLE `dz_friendlink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `webname` varchar(20) DEFAULT NULL COMMENT '网站名称',
  `website` varchar(30) DEFAULT NULL COMMENT '网站网址',
  `webcontacts` varchar(10) DEFAULT NULL COMMENT '网站联系人',
  `categories` varchar(20) DEFAULT NULL COMMENT '所属分类',
  `inttime` int(11) DEFAULT NULL COMMENT '添加时间',
  `pass` tinyint(3) DEFAULT '0' COMMENT '是否通过',
  `recydebin` tinyint(3) DEFAULT '0' COMMENT '回收站（0为删除）',
  `photo` varchar(50) DEFAULT NULL COMMENT 'logo',
  `recommend` varchar(255) DEFAULT NULL COMMENT '推荐',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='友情链接';

#
# Data for table "dz_friendlink"
#

/*!40000 ALTER TABLE `dz_friendlink` DISABLE KEYS */;
INSERT INTO `dz_friendlink` VALUES (1,'山东交通技师学院','http://www.sdjtc.cn','赵院长','社交网站',1510109078,1,0,'20171108\\f67094ac63c94b6eaa4929de730adb76.png','1'),(2,'临沂大智','http://www.linyiit.cn','张总','个人网站',1510109194,1,0,'20171108\\5a2e099aa4cf0e56095f8176fecc715a.png','1'),(3,'山炮工作室','http://www.51swz.com','山哥','游戏网站',1510125331,1,0,'20171108\\f2019d3cd2bf099b3ddbbab6d90876e3.jpg','1'),(4,'淘宝','https://www.taobao.com/','马云','企业网站',1510125326,1,0,'20171108\\7ca94fd24ba7c2519b254b138f4454ad.png','1'),(5,'京东','https://www.jd.com/?cu=true&ut','不是你','企业网站',1510125318,1,0,'20171108\\d3e9ef64a8ba36f9f5f45082fe6dddd6.gif','1');
/*!40000 ALTER TABLE `dz_friendlink` ENABLE KEYS */;

#
# Structure for table "dz_frontuser"
#

DROP TABLE IF EXISTS `dz_frontuser`;
CREATE TABLE `dz_frontuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(32) DEFAULT '' COMMENT '密码',
  `nickname` varchar(20) DEFAULT NULL COMMENT '用户昵称',
  `sex` tinyint(1) DEFAULT NULL COMMENT '性别',
  `headportrait` varchar(50) DEFAULT NULL COMMENT '头像',
  `regdate` date DEFAULT NULL COMMENT '注册日期',
  `lastdate` datetime DEFAULT NULL COMMENT '最后登录时间',
  `loginnum` smallint(6) DEFAULT '0' COMMENT '登录次数',
  `vipid` tinyint(3) DEFAULT '1' COMMENT 'VIP等级',
  `region` varchar(30) DEFAULT NULL COMMENT '地区',
  `ip` varchar(15) DEFAULT NULL COMMENT 'ip地址',
  `grade` int(11) DEFAULT '0' COMMENT '积分数',
  `lock` tinyint(1) DEFAULT '0' COMMENT '封号状态',
  `recycle` tinyint(1) DEFAULT '0' COMMENT '回收状态',
  `email` varchar(30) DEFAULT NULL COMMENT '邮箱',
  `phone` char(11) DEFAULT NULL COMMENT '手机号',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=219 DEFAULT CHARSET=utf8 COMMENT='前台用户表字段';

#
# Data for table "dz_frontuser"
#

/*!40000 ALTER TABLE `dz_frontuser` DISABLE KEYS */;
INSERT INTO `dz_frontuser` VALUES (66,'202cb962ac59075b964b07152d234b70','赵隆宇',0,'20171024\\efd0edd17b61daf4b0affe735f8c4a68.gif','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,1,0,'123456789@qq.com','12212221122'),(68,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,1,0,'123@qq.com','12212221122'),(69,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,1,0,'123@qq.com','12212221122'),(71,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(72,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(73,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(75,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(77,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(79,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(84,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(85,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(88,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(96,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(97,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(104,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(105,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(106,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(107,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(108,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(109,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(111,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(120,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(121,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(124,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(125,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(126,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(127,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(128,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(129,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(130,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(131,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(132,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(133,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(134,'202cb962ac59075b964b07152d234b70','赵日天',1,'20170925\\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12334333332'),(135,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(136,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(137,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(138,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(139,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(140,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(141,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(142,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(143,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(144,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(145,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,0,'123@qq.com','12212221122'),(146,'202cb962ac59075b964b07152d234b70','赵日天',1,'20170925\\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12334333332'),(147,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(148,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(149,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(150,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,6,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(151,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(152,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(153,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(154,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(155,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(158,'202cb962ac59075b964b07152d234b70','赵日天',1,'20170925\\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12334333332'),(159,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(160,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(161,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(162,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(163,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(164,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(165,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(166,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(167,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(170,'202cb962ac59075b964b07152d234b70','赵日天',1,'20170925\\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12334333332'),(171,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(172,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(173,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(174,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(175,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(176,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(177,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(178,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(179,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(182,'202cb962ac59075b964b07152d234b70','赵日天',1,'20170925\\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12334333332'),(183,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(184,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(185,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(186,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122'),(187,'202cb962ac59075b964b07152d234b70','赵隆宇',1,'20170925\\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00',0,1,'山东省临沂市','127.0.0.1',0,0,1,'123@qq.com','12212221122');
/*!40000 ALTER TABLE `dz_frontuser` ENABLE KEYS */;

#
# Structure for table "dz_nav"
#

DROP TABLE IF EXISTS `dz_nav`;
CREATE TABLE `dz_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL COMMENT '导航名字',
  `description` varchar(50) DEFAULT NULL COMMENT '导航描述',
  `top` tinyint(3) DEFAULT '0' COMMENT '上级导航',
  `inputtime` int(11) DEFAULT NULL COMMENT '创建时间',
  `show` tinyint(3) DEFAULT NULL COMMENT '是否显示在导航栏',
  `static` tinyint(3) DEFAULT '0' COMMENT '状态值',
  `recovery` tinyint(3) DEFAULT NULL COMMENT '0',
  `retime` int(11) DEFAULT NULL COMMENT '放入回收站时间',
  `ename` varchar(30) DEFAULT NULL COMMENT '英文名称',
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "dz_nav"
#

/*!40000 ALTER TABLE `dz_nav` DISABLE KEYS */;
INSERT INTO `dz_nav` VALUES (1,'关于我们','关于我们的介绍',0,1510036376,1,0,NULL,NULL,'guanyuwomen',NULL),(2,'联系我们','联系我们',0,1510036441,1,0,NULL,NULL,'lianxiwomen',NULL),(3,'新闻中心','新闻中心',0,1510036487,1,0,NULL,NULL,'xwzx',NULL),(4,'产品展示','产品展示',0,1510036517,1,0,NULL,NULL,'cpas',NULL);
/*!40000 ALTER TABLE `dz_nav` ENABLE KEYS */;

#
# Structure for table "dz_news"
#

DROP TABLE IF EXISTS `dz_news`;
CREATE TABLE `dz_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) DEFAULT NULL COMMENT '文章标题',
  `shorttitle` varchar(20) DEFAULT NULL COMMENT '简略标题',
  `cateid` int(11) DEFAULT NULL COMMENT '分类',
  `keywords` varchar(20) DEFAULT NULL COMMENT '关键字',
  `abstract` varchar(100) DEFAULT NULL COMMENT '文章摘要',
  `author` varchar(10) DEFAULT NULL COMMENT '作者',
  `source` varchar(30) DEFAULT NULL COMMENT '文章来源',
  `category` tinyint(3) DEFAULT '0' COMMENT '是否允许评论',
  `smallimage` varchar(50) DEFAULT NULL COMMENT '缩略图',
  `content` text COMMENT '文章内容',
  `status` tinyint(3) DEFAULT '0' COMMENT '是否审核',
  `looknum` int(11) DEFAULT '0' COMMENT '游览数量',
  `inputtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `isdel` tinyint(3) DEFAULT '0' COMMENT '是否被删除',
  `url` varchar(255) DEFAULT NULL COMMENT 'url链接地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COMMENT='资讯管理';

#
# Data for table "dz_news"
#

/*!40000 ALTER TABLE `dz_news` DISABLE KEYS */;
INSERT INTO `dz_news` VALUES (1,'山不转水转，学会感激，胜过处处与人为敌','山不转水转，学会感激，胜过处处与人为敌',1,'学会感激','人在江湖，处处险恶，总会遇到不平事。人心焦虑又浮躁，三言两句就会干架。现在有个词叫撕逼，说白了就是老死不相往来的决裂。但，山不转水转，很可能有一天，一切又转回来了。曾经被你骂死的人，有一天也可能让你身','门子','新华网',1,'20171108\\b408c4faaa12d769a1be9957a9579945.jpg','<p>\t\t\t\t\t\t</p><p><span style=\"font-size: 24px;\">人在江湖，处处险恶，总会遇到不平事。人心焦虑又浮躁，三言两句就会干架。现在有个词叫撕逼，说白了就是老死不相往来的决裂。但，山不转水转，很可能有一天，一切又转回来了。曾经被你骂死的人，有一天也可能让你身败名裂，让你后悔又恼怒。都是成年人了，成熟点，与人为善，胜过处处与人为敌</span></p><p>\t\t\t\t\t\t</p>',0,0,1510024680,0,'/home/Article/news/id/1'),(2,'学会用自己的能力产生复利来赚钱，而不是不','学会用自己的能力产生复利来赚钱，而不是不',1,'能力','学会用自己的能力产生复利来赚钱，而不是不断内耗自己的能力','小智','智慧网',0,'20171109\\1839b4306a436ebefdc8ae749010ea96.jpg','<p>\t\t\t\t\t\t</p><p><br/></p><p><span style=\"font-size: 24px;\">年纪越大，越懒得动脑子，吃老本成了一种常态。然而老本儿总有吃完的一天，到时候该怎么办？所谓的金钱安全感，并不是此时此刻你有多少钱，而是你是否有持续赚钱的能力，而这种能力来自于用自己擅长的领域产生复利来赚钱，而不是不断内耗自己的老本儿<br/></span></p><p><br/></p><p>\t\t\t\t\t\t</p>',0,0,1510024778,0,'/home/Article/news/id/2'),(3,'越老越值钱，是指能力越老道越之前，不是年','越老越值钱，是指能力越老道越之前，不是年',1,'年龄','越老越值钱，是指能力越老道越之前，不是年龄的老','天空','人民网',1,'20171108\\7e3631adc1158f105cc1519e5b47f98b.jpg','<p>\t\t\t\t\t\t</p><p><br/></p><p><span style=\"font-size: 24px;\">你还在相信人“越老越值钱”吗？你还在等着自己每年按资格加薪升职么？越来越多的80后已经被90后赶上来了，面对小鲜肉们低价高质量高强度高热情的工作态度，你一点都不着急吗？以前的工厂，越老越有经验，但时代不同了，科技的发展，经验不是最重要的，快速更新和变革自己的知识体系和内容才能让你的能力升职，薪水翻倍。坐着等，只可能等到裁员通知单。<br/></span></p><p><br/></p><p>\t\t\t\t\t\t</p>',0,0,1510024897,0,'/home/Article/news/id/3'),(4,' 人的时间和精力有限，向内营养自己，不要',' 人的时间和精力有限，向内营养自己，不要',1,'精力',' 人的时间和精力有限，向内营养自己，不要向外高消耗','王菲','校园网',1,'20171109\\1839b4306a436ebefdc8ae749010ea96.jpg','<p>\t\t\t\t\t\t</p><p><span style=\"font-size: 24px;\">年轻的时候都喜欢不断的对外表达自己的主张，生怕别人不知道自己，看低了自己。等年纪大了才知道，人的时间和精力都太有限了，好不容易有点自己的时间，更希望能向内的营养自己。别总想着让世界认识自己，先过好自己的生活，不给别人找麻烦，就是对社会最大的贡献。</span></p><p>\t\t\t\t\t\t</p>',0,0,1510024988,0,'/home/Article/news/id/4'),(5,'能花钱的事情就不要花时间，免费的才是最贵','能花钱的事情就不要花时间，免费的才是最贵',1,'时间','能花钱的事情就不要花时间，免费的才是最贵的','王志军','土豆网',1,'20171108\\380331751c35a4b4a1006444b721eb5f.jpg','<p>\t\t\t\t\t\t</p><p><span style=\"font-size: 24px;\">这年头，免费的东西，才是最贵的。为别人的辛苦付费，是基本的尊重和礼貌。总想着什么都不付出就得到，社会的现实会告诉你，要么你得到的是垃圾，要么需要你花更多的时间去研究。能花钱的事情，就不要花时间。时间比钱贵一万倍。</span></p><p>\t\t\t\t\t\t</p>',0,0,1510025046,0,'/home/Article/news/id/5'),(6,'同甘共苦的重点不是共苦，而是同甘','同甘共苦的重点不是共苦，而是同甘',2,'同甘','同甘共苦的重点不是共苦，而是同甘','会飞的猪','无名',0,'20171108\\1a22498e845fc3db0373c77dfbea072e.jpg','<p>无论是职场还是感情，越来越多的撕逼，并不是发生在共同吃苦奋斗的时候，而发生在花好月圆生活安逸的时候。人满足的时候总会开始想入非非，想要得到更多，开始回想自己是不是得到的太少了，于是不惜翻脸打碎曾经最好的关系和最爱的人。为什么日子越来越好，人心却翻脸的越来越快呢？在一起奋斗的时候，别光想着打下江山一起分享，真到那一天不撕逼就算万幸了</p>',0,33,1510025129,0,'/home/Article/news/id/6'),(7,'最难的选择不是对错之分，而是利他和利己','最难的选择不是对错之分，而是利他和利己',2,'选择','最难的选择不是对错之分，而是利他和利己','爱睡的猫','新浪',1,'20171109\\1839b4306a436ebefdc8ae749010ea96.jpg','<p><span style=\"color: rgb(191, 191, 191);\">小孩子才讲对错，成年人都只看利弊。很多曾经价值观里的对错，在现实世界里开始分崩离析。人最难的，不是在对错黑白中做出选择，而是在利他和利己之间做出判断。以前说的，人会被社会大熔炉磨平了棱角，其实不是不懂对错了，而是无法拒绝利己的诱惑了</span></p>',0,66,1510025238,0,'/home/Article/news/id/7'),(8,'你所谓的岁月静好，不过是有人替你负重前行','你所谓的岁月静好，不过是有人替你负重前行',2,'岁月静好，负重前行','你所谓的岁月静好，不过是有人替你负重前行','王伟','无',1,'C:\\fakepath\\004.jpg','<p>这是苏心老师的一句话，有了孩子以后感受的更加深刻。</p><p>&nbsp;</p><p>人到中年成了三明治中间层的时候，才知道自己担负着什么样的责任，为了老人和孩子的生活安康，自己要付出极大的努力。同样的道理，总觉得自己生活安逸，岁月静好的时候，其实是你的另一半或者你的父母，在生活的丛林里正帮你争风挡雨，披荆斩棘。</p><p><br/></p>',0,99,1510025302,0,'/home/Article/news/id/8'),(9,'学习别人的优点，别像更年期一样看谁都不顺','学习别人的优点，别像更年期一样看谁都不顺',2,'学习','学习别人的优点，别像更年期一样看谁都不顺眼','无名','无',1,'C:\\fakepath\\004.jpg','<p><span style=\"font-size: 18px;\">年轻的时候总觉得自己天下无敌，中年的时候总觉得比自己强的人都是垃圾，总之从来看不到别人的优点，背后数落别人一套套的都不用打草稿。这样的自己就好过了吗？优秀了吗？加薪升职了吗？嫉妒别人的最极品做法，就是把别人的优点都学到手，让自己越来越牛逼，直到把人甩到自己看不见的地方去。<br/></span></p>',0,88,1510025404,0,'/home/Article/news/id/9'),(10,'你的一句明天见，让整个明天都变得超级甜','你的一句明天见，让整个明天都变得超级甜',2,'爱情','你的一句明天见，让整个明天都变得超级甜','爱情猪猪','腾讯',1,'C:\\fakepath\\001.jpg','<p>1、最美的时光，莫过于遇一人白首，择一城终老。你的晚安是一根灯绳，轻轻一拉，就熄灭了整个城市的灯，然后夜晚才真的到来。</p><p><br/></p><p>2、爱你的人，生怕给你的不够，不爱你的人，就怕你要求太多。爱情就像沙漏，心满了，脑子就空了。</p><p><br/></p><p>3、想和你喝酒是假的，想醉你怀里是真的。真心等你的人，他总会真心等下去，不愿意等你的人，总是一转身就牵了别人的手。</p><p><br/></p><p>4、爱情签名，爱，不是寻找一个完美的人，而是学会用完美的眼光，欣赏一个不完美的人。你的一句明天见，让整个明天都变得超级甜。</p><p><br/></p><p>5、未来你许她长情，会不会想起亏欠我的时光。在一群人中见到你，那种感觉就好像是，他们都被打上了马赛克，只有你在我眼睛里是发着光的。</p><p><br/></p><p>6、不要太把一个人放在心上，因为在那个人的心里你或许什么都不是。总会有那么一个人，让我们想要用尽毕生的勇气与情感，把爱和时光通通看透。</p><p><br/></p><p>7、以前我是多么骄傲的一个人，可自从遇见你之后，连骄傲都溃不成军了。曾经为了一个人拒绝了所有人，最后却落得一无所有。后来，说过的话可以不算，爱过的人可以再换</p><p>。</p><p>8、第一次见到你，shuyueliang.com，我就知道我要让你余下一生只能和我在一起，那些所谓祝你幸福，愿你找到爱人之类的话都是我放的屁话，我就是想这一辈子占有你，连雨拍打在你身上我都嫉妒。</p><p><br/></p><p>9、你说人潮人海，边走边爱，怕什么孤单。我说人潮汹涌，都不是你，拿什么将就。我喜欢橘子，橘子汁不行，橘子糖不行，不是橘子就是不行。就像我喜欢你，长得像你不行，性格像你也不行，不是你就不行。</p><p><br/></p><p>10、我不妖言惑众，怎能配上你的高跟黑丝。我不蛇蝎毒肠，怎能配上你的风流倜傥。你若喜欢浪，我嘶声烈马血染桃花为你争天下。你若喜欢平稳，我放弃十年戎马江山跟你回家。</p><p><br/></p>',0,77,1510025583,0,'/home/Article/news/id/10'),(11,'我爱的样子你都有，你有的样子我都爱','我爱的样子你都有，你有的样子我都爱',3,'爱情','我爱的样子你都有，你有的样子我都爱','一片空白','一片空白',1,'C:\\fakepath\\fw_main_bg.jpg','<p>1、原谅我面无表情，却爱你那么真。原谅我不善言辞，却爱你那么深。你会爱我有多久，是很久很久，还是说走就走。没有什么会永垂不朽，但我会爱你很久很久。</p><p><br/></p><p>2、给我一句早安，让我知道今天还有你的陪伴。给我一句晚安，让我知道明天你还在我身畔。愿你在听见我的名字时，眉眼带笑。愿你在见到我时，不管不顾给我个拥抱。</p><p><br/></p><p>3、如果忽远忽近的洒脱是你要的自由，那我宁愿回到一个人生活。如果忽冷忽热的温柔是你给的借口，那我宁愿对你从没认真过。</p><p><br/></p><p>4、爱情签名，说星星很漂亮的人，一定没有见过你的眼睛。说太阳很灿烂的人，一定没有见过你的笑容。你的过去我来不及参与，你的未来只需我陪你。你的过去我来不及参与，你的未来我奉陪到底。</p><p><br/></p><p>5、如若有少年陪我从蓝校服到白婚纱，从齐肩短发到长发及腰，我就为他披上婚纱。如若有姑娘伴我从蓝校服到黑礼服，从身无分文陪我到事业有成，我就为她穿上西服。</p><p><br/></p><p>6、遇到你之前，我没想过要喜欢一个人。遇到你之后，我没心思去喜欢其他人。若有女孩为你泪如雨下，请你记得娶她回家。若有男孩为你四海为家，请你记得好好爱他。</p><p><br/></p><p>7、有的人把心都掏给你了，你还假装看不见，因为你不爱。有的人把你的心都掏走了，你还假装不疼，因为你爱。他有情书，他有酒，他有别人陪他走。她有故事，她有愁，她有往事不回头。</p><p><br/></p><p>8、猫有九条命，却只有一颗心，我愿用九条命去保护你，一颗心里全是你。鱼有万片鳞，却只有七秒记忆，我愿用万片鳞去感知你，七秒记忆只有你。</p><p><br/></p><p>9、用整段青春去爱你，是我做过最奢侈的事。时间会把对你最好的人留在最后，毕竟喜欢是一阵风，而爱是细水常流。</p><p><br/></p><p>10、我爱的样子你都有，你有的样子我都爱。爱一个人就像在海滩上捡贝壳，不要捡最大的，也不要捡最漂亮的，就捡你最喜欢的那一个，捡到了就永远不要再去海滩了。</p><p><br/></p>',0,86,1510025685,0,'/home/Article/news/id/11'),(12,'眼睛说着不要走，嘴巴倔强的不挽留','眼睛说着不要走，嘴巴倔强的不挽留',3,'爱情','眼睛说着不要走，嘴巴倔强的不挽留','PHP','PHP',1,'C:\\fakepath\\bg_4.jpg','<p>1、从无话不说到无话可说，多深刻多难过我都记得。从第一次遇见你，之后的每一次遇见都是蓄谋已久的偶然。</p><p><br/></p><p>2、也许，世界上最幸福的一件事，就是当你拥抱一个你爱的人时，他竟然把你抱得更紧。相遇不必太早，只要能在一起就没有迟到，爱得早不如爱得刚刚好。</p><p><br/></p><p>3、爱情签名，眼睛说着不要走，嘴巴倔强的不挽留。每天都在患得患失，怕你被别人喜欢，怕你喜欢上别人。</p><p><br/></p><p>4、直到你我的缘分结束了，我都不知道自己到底有没有爱过你，只知道那时候为你流过的眼泪是真的，心酸是真的，想和你在一起一辈子也是真的。</p><p><br/></p><p>5、我不希望有人喜欢我是因为我的好，我希望有人看到我所有的不好，依旧喜欢我。感情到了最沉重的一步是，我仍愿意听，你却不愿再讲。</p><p><br/></p><p>6、他跟你不合适，shuyueliang.com，就像37码的鞋碰上了42码的脚一样不合适，不怪鞋，也不怪脚。有那么一个人，他陪你笑靥如花，却陪不了你天长地久。</p><p><br/></p><p>7、有些人只适合活在梦里，所以早上醒来就应该忘记。你是往日的遗书，是落日余情未了，是路人脚下不停生长的风。</p><p><br/></p><p>8、大概每个人都会遇到一个不能在一起的人，爱而不得，回忆重重。你在人潮里不知所措，我却跟在你身后，伸手怕犯错，缩手怕错过。</p><p><br/></p><p>9、门口有个卖臭豆腐的帅小哥，三天两头去买，就是为了看他，刚才又要了一份，再一次假装在玩手机，然后把镜头对准他，可是摁下快门的那一刻我就后悔了，忘了关声音呀。</p><p><br/></p><p>10、最幸福的事莫过于最爱的人就在身边，还来不及思念又相见。伸手需要一瞬间，牵手却要很多年，无论你遇见谁，他都是你生命该出现的人，绝非偶然。若无相欠，怎会相见。</p><p><br/></p>',0,2,1510025775,0,'/home/Article/news/id/12'),(13,'诉不尽多年情话，到头来只一句好久不见','诉不尽多年情话，到头来只一句好久不见',3,'爱情','诉不尽多年情话，到头来只一句好久不见','马云','淘宝',1,'C:\\fakepath\\d1.jpg','<p>1、别替我遮风挡雨，我怕突然没有你。你最可爱，我说时来不及思索，但是思索过后还是这样说。大概除了你，我没什么软肋。</p><p><br/></p><p>2、最难过的不是不曾遇见，而是遇见了，也得到了，又匆忙的失去，然后在心底留了一道疤，它让你什么时候疼，就什么时候疼，你连反抗的权力都没有。</p><p><br/></p><p>3、你一定要过的比我好，不然对不起我的不打扰。大概每个人都会遇到一个不能在一起的人，爱而不得，回忆重重。</p><p><br/></p><p>4、不是除了你我就没人要，只是除了你我谁都不想要。没有值不值得，只有你愿不愿意，爱情需要的是两个人同步的爱，而不是一个人徒劳地努力。</p><p><br/></p><p>5、爱情签名，你说清醒容易孤独，我就陪你酩酊大醉；你说黑夜太过难熬，我就陪你日夜颠倒。一个爱你的人是不会轻易离开你的，他宁愿留下来陪你吵架，也不会留你一人。</p><p><br/></p><p>6、诉不尽多年情话，到头来只一句好久不见。可以走一万步去靠近你，也可以走一万零一步离开你。</p><p><br/></p><p>7、即使说一千遍我爱你，但只要一句分手就可以结束，这就是爱情。与其给我山盟海誓，不如陪我走过每一个春夏秋冬。</p><p><br/></p><p>8、时间改变你我的样子，shuyueliang.com，却留下你爱我时的影子。这辈子，我做得最正确的事就是牵了你的手，即使没能白头到老，却也曾相守相依！</p><p><br/></p><p>9、没有一辈子的浪漫和甜蜜，真正能长伴你身边的，只是慢慢老去的熟悉。情浓时说的一切都不可信，情淡时的每一天才是真。记住，陪在身边才算拥有，爱到习惯才能长久。</p><p><br/></p><p>10、你陪我的那段路，多年之后虽不会那么清晰，但依旧不会忘记。如果有一天我消失了，谁会翻遍全世界找我。我爱你，不光因为你的样子，还因为和你在一起时，我的样子。</p><p><br/></p>',0,2,1510025892,0,'/home/Article/news/id/13'),(14,'一往情深深几许，深山夕照深秋雨','一往情深深几许，深山夕照深秋雨',3,'伤感爱情','一往情深深几许，深山夕照深秋雨','爱情走了吗','爱情网',1,'C:\\fakepath\\d2.jpg','<p>1、有些伤只适合放在心里，就像有些人只适合忘记。想了一万种再见到你的情形，却从未想过不会再见到你的这一种可能。</p><p><br/></p><p>2、后来你没有挽留我，也没有回头。你每天熬夜的时候有没有想过，你喜欢的那个人已经打呼噜了，而且梦里没有你，醒了也不会爱你。</p><p><br/></p><p>3、一个漫游聊天记录的功能，毁了多少情人，看透了多少人。世界上最远的距离，不是爱，不是恨，而是熟悉的人，渐渐变得陌生。</p><p><br/></p><p>4、我记得你爱我，或者我记反了。有时候，我们就像仙人掌，防备了别人，孤单了自己。</p><p><br/></p><p>5、再见了，我终于要放弃你了，可我怎么还是想哭呢？时隔多年，你突然出现在访客记录里，我呆坐了一夜，哭着笑，笑着哭。</p><p><br/></p><p>6、伤感爱情，你要明白，再烫手的水还是会凉，再饱满的热情还是会退散，再爱的人还是会离开，所以你要乖，要长大，不再张口就是来日方长，而要习惯走人茶凉。</p><p><br/></p><p>7、他熄灭了烟，说起了以前，眼泪在眼眶里打转硬是不让它掉下来，他说，前半生就这样吧，余生也别将就，大不了孤独一生。</p><p><br/></p><p>8、情难舍，心难留，花朝月夜，转眼便成指间沙。不如生生世世，两两相忘，且归去，看青山隐隐，流水迢迢，望断天涯。</p><p><br/></p><p>9、谁解相思味，谁盼良人归，谁捧胭脂泪，谁描柳月眉，谁将曲中情怨，谁思红袖轮回，谁相思错付，一江东流水！</p><p><br/></p><p>10、一往情深深几许，深山夕照深秋雨。既不回头，何必不忘。既然无缘，何须誓言。今日种种，似水无痕。明夕何夕，君已陌路。</p><p>一张图，一段话，一哲理，每天一次的心灵之旅。</p><p><br/></p>',0,6,1510025987,0,'/home/Article/news/id/14'),(15,'你对我而言，还存在着太多的幻想,让我无法','你对我而言，还存在着太多的幻想,让我无法',3,'幻想','你对我而言，还存在着太多的幻想,让我无法忘怀','幻想','幻想',1,'C:\\fakepath\\d4.jpg','<p>在你的眼里，我是不是既可笑又可怜。对你而言，我或许已经变成可有可无的人了，也许有一天，我的流亡之旅将会结束，在时间的长河里湮没甚至消逝……可你对我而言，还存在着太多的幻想，太多甜蜜幸福的镜头让我无法释怀无法遗忘。就算你的爱，像流星转瞬即逝，可我对你的爱宛如银河般永恒。</p>',0,9,1510026146,0,'/home/Article/news/id/15'),(16,'每个人都有一个不可触及的底层，不是这个底','每个人都有一个不可触及的底层，不是这个底',4,'底线','每个人都有一个不可触及的底层，不是这个底层有多么神秘','游人','游人',1,'C:\\fakepath\\d5.jpg','<p><a href=\"http://www.weiyulu.cn/wp-content/uploads/2011/09/1255.jpg\" class=\"fancybox\" target=\"_blank\"><img src=\"/ueditor/php/upload/image/20171107/1510026214809470.jpg\" alt=\"每个人都有一个不可触及的底层，不是这个底层有多么神秘\" title=\"微语录\" class=\"aligncenter size-medium wp-image-2270\" width=\"300\" height=\"198\"/></a><br/>每个人都有一个不可触及的底层，不是这个底层有多么神秘，只是每个人都愿为此坚持自己的原则。或许痛过，或许伤过，这些都是每个人心理底层的潜在情感，只要给予温暖，他们可能会把过去抛开老远，让任何人都触及不到他们的底线。</p>',0,5,1510026218,0,'/home/Article/news/id/16'),(17,'“双11”小心商家套路!','“双11”小心商家套路!',4,'“双11”小心商家套路!','“双11”小心商家套路!','马云','阿里云',0,'C:\\fakepath\\d6.jpg','<p>距离剁手的时刻已经不远了</p><p>最近的双十一刷屏也是炙手可热</p><p>小编已经看到大家都纷纷想上位</p><p>成为马爸爸背后的女人</p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/7D7BEF2D525.jpeg\"/></p><p>小编还记得</p><p>去年双十一朋友们纷纷不睡</p><p>都在等着令人激动的那个零点</p><p>谁要是能抢到商家的秒杀</p><p>简直比中了头奖还要激动</p><p>但是</p><p>当你不停的添加购物车</p><p>不停的盘算着自己省了多少钱的时候</p><p>有没有想过</p><p>你可能被骗了？！</p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/798E6B9860F.jpeg\"/></p><p>套路一</p><p>小编也曾是马爸爸背后的女人中之一员</p><p>感觉双十一不给马爸爸做点贡献都不好意思出门</p><p>小编买了一个外套</p><p>因为别人尝鲜先买了</p><p>所以小编知道价格</p><p>双十一欢呼雀跃的打开连接</p><p>WTF!</p><p>为什么优惠完还是原来的价格？</p><p>什么鬼？？</p><p>是在逗我吗？？</p><p>这是啥操作？？</p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/691BE71FAA05.gif\"/></p><p>套路二</p><p>想必各位妹子应该挺熟悉</p><p>某些商家天天大甩卖</p><p>今天清仓大甩卖 仅此一天</p><p>明天吐血大甩卖&nbsp;仅此一天</p><p>后天跳楼大甩卖&nbsp;仅此一天</p><p>这“仅此一天”到底有几天？</p><p>所以在双十一那天的优惠</p><p>是很有可能每天都有的哦</p><p>因为小编的一双雪地靴</p><p>都优惠了两年了</p><p>呵呵</p><p>商家的小聪明不要太多啊！</p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/7FF0FDE48DD.jpeg\"/></p><p>套路三</p><p>小编觉得数学不好的人都不配过双十一</p><p>看个双十一优惠规则</p><p>感觉自己就像个智障一样</p><p>直接告诉我比平时便宜了多少不好吗</p><p>有木有同感！</p><p>请告诉我</p><p>这到底该怎么买</p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/6039A7F6996D.gif\" width=\"253px\"/></p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/7E0687E76EE.jpeg\" width=\"253px\"/></p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/7E4DAAE46A7.jpeg\" width=\"255px\"/></p><p>规则涵盖：</p><p>抢红包</p><p>支付宝口令红包</p><p>红包火炬点亮</p><p>群战队红包</p><p>超级会员特权</p><p>预售抢先定金抵现</p><p>定金翻倍</p><p>支付尾款减免</p><p>叠加红包优惠券</p><p>每家活动又不同</p><p>突然间 很失落</p><p>平时穷就算了</p><p>看完觉得自己&nbsp;又穷又傻！！！</p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/7DBE3F27D9C.jpeg\"/></p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/7F3C00F7DF9.jpeg\"/></p><p>安安静静的降个价不好吗</p><p>智商没有500的人</p><p>数学不考满分的人</p><p>没在国际数学奥林匹克拿过名次的人</p><p>都别买！</p><p>因为</p><p>根本不会算！</p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/68885FB679F8.gif\"/></p><p>套路四</p><p>商家都开始预售了</p><p>定金真是的吸引人哦</p><p>万人都在抢</p><p>谁先交定金谁先抢哦</p><p>好了</p><p>你交了定金</p><p>然而商家又甩给你了一个篇幅不少于1000字的规则</p><p>你只是想买一个几百块钱的东西而已</p><p>又花了几个小时研究了一个规则</p><p>等到终于算明白了</p><p>也只不过省了几块钱</p><p>一怒之下</p><p>你不想要了</p><p>但 客服妹妹告诉你</p><p>亲，定金不退哦</p><p>俗话说的好</p><p>定金一时爽</p><p>尾款火葬场</p><p>即使不想要</p><p>也含泪付完了尾款</p><p>套路啊</p><p>都是套路！</p><p>我们走过最长的路就是商家的套路</p><p>今年的双十一你们一定要擦亮双眼</p><p>一不小新就入坑了</p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/7EDAB05EED9.jpeg\"/></p><p>双十一</p><p>多 听听大家的心声好吗 ！</p><p><img src=\"https://rescdn.qqmail.com/dyimg/20171105/7DB9EF8AA640.png\"/></p><p>过个双十一</p><p>也是身心俱疲啊</p><p>规则为何让我如此纠结？</p><p><br/></p>',0,6,1510026480,0,'/home/Article/news/id/17'),(18,'感悟人生：人生不在年龄，贵在心理年轻','感悟人生：人生不在年龄，贵在心理年轻',4,'感悟人生','感悟人生：人生不在年龄，贵在心理年轻','人生','无',1,'C:\\fakepath\\d7.jpg','<p>1、人，早晚要习惯孤独，没有谁会把你当宝护着，再大的难事也要微笑面对，哪怕是装的。对人要学会绝情，该滚的滚，该留的留，但你也要学会珍惜，知心朋友已不多，难道你真要只剩自己？</p><p><br/></p><p>2、养活自己只需要勤劳，让自己幸福却需要智慧。幸福是一种感受，处境不同，追求不同，追求的结果不同，心态不同，感受就不同。真正的智慧，不仅是让你懂得追求，更是让你明白何时该执着，何时该放手。</p><p><br/></p><p>3、感悟人生，现实生活中，人人都有梦想，都渴望成功，都想找到一条成功的捷径。其实，捷径就在你的身边，那就是勤于积累，脚踏实地，积极肯干。</p><p><br/></p><p>4、在对的时间遇上对的人，是一生幸福。在对的时间遇上错的人，是一种悲哀。在错的时间遇上对的人，是一生叹息。在错的时间遇上错的人，是一是荒唐！</p><p><br/></p><p>5、梦，不能做得太美，美了难以实现；话，不能说得太满，满了难以圆通；调，不能定得太高，高了难以合声；事，不能做得太绝，绝了难以进退；情，不能陷得太深，深了难以自拔。</p><p><br/></p><p>6、人生不在年龄，贵在心理年轻；衣着不在时尚，贵在舒适合体；膳食不在丰富，贵在营养均衡；居室不在大小，贵在整洁舒畅；养生不在刻意，贵在顺其自然；锻炼不在夏冬，贵在持之以恒。</p><p><br/></p><p>7、感情从来都不是一种交换，而是一种取悦和被取悦。你想要取悦人，就是被人吃定了；而别人讨好你，就是被你吃定了。恋爱要么是享受虐人，要么是安于被虐。</p><p><br/></p><p>8、人生像洋葱：你只能一层一层地把它剥开，有时你还得流泪。如果抱怨成习惯，心灵就像上了枷锁，没有一刻解脱。唯有放下抱怨，才能体会到生命的自在与幸福。</p><p><br/></p>',0,7,1510033425,0,'/home/Article/news/id/18'),(19,'人生学会随缘，才能活得自在','人生学会随缘，才能活得自在',4,'感悟人生','人生中，许多的成败与得失，并不是我们都能预料到的，很多的事情也并不是我们都能够承担得起的，但，只要我们努力去做，求得一份付出后的坦然，其实得到的也是一种快乐。','王欢欢','闲事杂料',0,'C:\\fakepath\\h2.jpg','<p><span style=\"font-size: 18px;\">人生中，许多的成败与得失，并不是我们都能预料到的，很多的事情也并不是我们都能够承担得起的，但，只要我们努力去做，求得一份付出后的坦然，其实得到的也是一种快乐。</span></p><p><span style=\"font-size: 18px;\">最使人颓废的往往不是前途的坎坷，而是你自信的丧失；最使人痛苦的往往不是生活的不幸，而是你希望的破灭；最使人绝望的往往不是挫折的打击，而是你心灵的死亡；凡事看淡一些，心放开一点，一切都会慢慢变好。</span></p><p><span style=\"font-size: 18px;\">心胸决定了境界，心态决定了命运。你来自何处其实并不重要，重要的是你要去往何方，人生最重要的不是所站的位置，而是所去的方向。人只要不失去方向，就永远不会失去自己！</span></p><p><span style=\"font-size: 18px;\">人生是祸福相依，笑泪交织，有同情心，才能利人；有体谅心，才能容人；有忍耐心，才能做人；有慈悲心，才能度人；有艰难心，才能助人；有明智心，才能观人；有包容心，才能处人；有美丽心，才能示人。</span></p><p><span style=\"font-size: 18px;\">人生学会随缘，才能活得自在。随不是跟随，是顺其自然，不怨恨，不躁进，不过度，不强求；随不是随便，是把握机缘，不悲观，不刻板，不慌乱，不忘形；随是一种达观，是一种洒脱，是一份人生的成熟，一份人情的练达。</span></p><p><span style=\"font-size: 18px;\">真正的陪伴，经得起坎坷，经得起平淡。不要再给我一些突如其来的关心。不是每一次我都会觉得受宠若惊。我真的真的，消受不起了。我不会一直犯贱。好了伤，疤忘了疼的事，我不会一直做。</span></p><p><span style=\"font-size: 18px;\">不要说，离开以后还会想念；更不要说，分手以后还是朋友；离开一个地方，风景就不再属于你；错过一个人，他的幸福与你无关；人都是会变的，可以守住一个不变的承诺，却守不住一颗善变的心。</span></p><p><span style=\"font-size: 18px;\">感悟人生，人生不止，寂寞不已。寂寞人生爱无休，寂寞是爱永远的主题。我和我的影子独处。它说它有悄悄话想跟我说，它说它很想念你，原来，我和我的影子，都在想你。</span></p><p><br/></p>',0,2,1510033615,0,'/home/Article/news/id/19'),(20,'要学清醒地做事，糊涂地去做人','要学清醒地做事，糊涂地去做人',5,'感悟人生','真正能治愈自己的，只有你自己。要想活得快乐，要学会清醒地做事，糊涂地去做人。\r\n','强强','QQ',1,'20171109\\1839b4306a436ebefdc8ae749010ea96.jpg','<p style=\"line-height: 1.5em;\">真正能治愈自己的，只有你自己。要想活得快乐，要学会清醒地做事，糊涂地去做人。</p><p style=\"line-height: 1.5em;\">当你能看懂一件事情的时候，说明你长大了；当你能看清一件事情的时候，说明你开窍了；当你能看破一件事情的时候，说明你理性了；当你能看透一件事情的时候，说明你成熟了；当你能看淡一件事情的时候，说明你放下了。</p><p style=\"line-height: 1.5em;\">感悟人生，学会放弃，才会有所收获。当一切尘埃落定，当一切归于平静，我们才会真正懂得放弃其实也是另一种美丽的收获。</p><p style=\"line-height: 1.5em;\">人生百年，没有太多的时间可以挥霍，都说幸福如饮水，冷暖自知，有些人，每天都在追逐幸福的路上，却从来也没有感觉到幸福的存在；有些人，懂得收集点滴的温暖和感动，便会与快乐同行。</p><p style=\"line-height: 1.5em;\">人生难免要受些委屈和伤害，与其耿耿于怀郁郁寡欢，倒不如坦坦荡荡泰然处之。只有经受住狂风暴雨的洗礼，才能练就波澜不惊的淡定。</p><p style=\"line-height: 1.5em;\">人生要做到这几点：人生总是有输有赢，得势顺境时，千万不要得意忘形，放纵自己；失势逆境时，千万不可消极颓唐，放弃自己；人生成功的定义，要自己去找，别迷失在别人的看法中。</p><p style=\"line-height: 1.5em;\">这世上没有无缘无故的爱，也没有无缘无故的恨。不要参与评论任何人，做到心中有数就可以了。所谓盖棺定论的道理很简单，就是有人操之过急。谁也没有理论依据来介定好人与坏人，说白了就是利益关系的问题。</p><p><br/></p>',0,0,1510033908,0,'/home/Article/news/id/20'),(23,'测试数据','测试数据',4,'测试数据','测试数据','测试数据','测试数据',1,'20171109\\1839b4306a436ebefdc8ae749010ea96.jpg','<p><strong><span style=\"font-size: 36px;\">测试数据</span></strong></p>',0,93,1510209303,1,'/home/Article/news/id/23'),(34,'','',1,'','','','',0,'C:\\fakepath\\92e8647aly1fbq0lmep8qg20960dwqv6.gif',NULL,0,0,1516091527,0,'/home/Article/news/id/34'),(35,'','',1,'','','','',0,'20180116\\d05c6da2fb47403ec33063d48fbb8894.gif',NULL,0,0,1516091543,0,'/home/Article/news/id/35');
/*!40000 ALTER TABLE `dz_news` ENABLE KEYS */;

#
# Structure for table "dz_node"
#

DROP TABLE IF EXISTS `dz_node`;
CREATE TABLE `dz_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "dz_node"
#

/*!40000 ALTER TABLE `dz_node` DISABLE KEYS */;
/*!40000 ALTER TABLE `dz_node` ENABLE KEYS */;

#
# Structure for table "dz_product"
#

DROP TABLE IF EXISTS `dz_product`;
CREATE TABLE `dz_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL COMMENT '价格',
  `money` varchar(10) NOT NULL COMMENT '价格',
  `market_price` varchar(10) DEFAULT NULL COMMENT '市场价格',
  `version` varchar(100) DEFAULT NULL COMMENT '型号',
  `color` varchar(10) DEFAULT NULL COMMENT '颜色',
  `texture` varchar(20) DEFAULT NULL COMMENT '材质',
  `brand` varchar(20) DEFAULT NULL COMMENT '品牌',
  `description` varchar(255) DEFAULT NULL COMMENT '详细介绍',
  `type` varchar(10) DEFAULT NULL COMMENT '分类',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键词',
  `author` varchar(30) DEFAULT NULL COMMENT '作者',
  `source` varchar(40) DEFAULT NULL COMMENT '来源',
  `photo` varchar(500) DEFAULT NULL COMMENT '图集',
  `status` tinyint(1) DEFAULT '0' COMMENT '是否通过审核   1 通过',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "dz_product"
#

/*!40000 ALTER TABLE `dz_product` DISABLE KEYS */;
INSERT INTO `dz_product` VALUES (1,'呆萌皇家犬','7777777.8','88888888','ER-201317798','黑色','活体','英国皇室','二哈简介：西伯利亚雪橇犬（俄语：Сибирскийхаски，Sibirskiyhaski，英语：Siberianhusky）常见别名哈士奇。西伯利亚雪撬犬体重介于25~60磅(16~27kg)之间，身高大约20~23.5英寸(51~60cm)，是一种中型犬哈士奇性格多变，有的极端胆小，有的极端暴力，进入大陆和家庭的哈士奇，都已经没有了这种极端的性格，比较温顺，是一种流行于全球的宠物犬。与金毛犬、拉布拉多并列为三大无攻击型犬类。\r\n\r\n中文学名：西伯利亚雪橇犬\r\n\r\n拉丁学名：Canislupusfami','1','二哈','大力','环球网','20171107\\d2cf94a2da74d2dcbf97dd707701093f.jpg/;',1),(2,'电子产品EVA包电源包U盘收纳盒配件整理数码包','7.00','8.00','061','黑色','复合材料','星鸿','一般情况下：\r\n    划线价格：划线的价格可能是商品的销售指导价或该商品的曾经展示过的销售价等，并非原价，仅供参考。\r\n    未划线价格：未划线的价格是商品在阿里巴巴中国站上的销售标价，具体的成交价格根据商品参加活动，或因用户使用优惠券等发生变化，最终以订单结算页价格为准。 \r\n活动预热状态下：\r\n    划线价格：划线的价格是商品在目前活动预热状态下的销售标价，并非原价，具体的成交价可能因用户使用优惠券等发生变化，最终以订单结算页价格为准。\r\n    未划线价格：未划线的价格可能是商品即将参加活动的','1','电子产品','马云','淘宝','20171107\\04d85641c646ebdc0380b2844b3dcf3e.jpg/;',1),(3,'抽屉式内衣文胸手提礼品盒 内衣化妆品文胸礼盒',' ¥ 5.50 --',' ¥ 8.50 --','01',' \t紫色',' \t纸卡',' \t逸谦','礼品盒是以馈赠亲友礼物表达情意为主要目的的配备的实用礼品包装，是包装方式的一种功能的社会需要的延伸 。礼品盒是心意的体现，我们亲手做的爱心礼物或是购买的爱心商品，无不例外都要一个能体现效果的包装，或是浪漫、或是神秘、或是惊喜、或是震撼，当你慢慢打开它就犹如打开你心中的秘密森林，展示给他你要表达的不一样的心意，这就是礼品盒的意义所在','1','礼盒','厂家直销','淘宝','20171107\\a10b696e83de2a71f7c0f934adef83e8.jpg/;',1),(4,' 新款小罐茶包装罐茶叶包装盒红色通用创意礼盒红茶迷你茶叶罐',' ¥ 25.00 -',' ¥ 25.00 -','58','红色,金铜色','纸/纸板,金属','华雅','暂无','1','小罐茶包装','厂家直销','阿里巴巴','20171107\\5ac269f7ac2617ac569fc0f1b8ac7920.jpg/;',1),(5,'食用松香甘油酯 家禽脱毛专用 批发松香甘油酯','¥ 10.20','¥ 10.20','162','白色','','无锡','暂无','1','食用','无锡','无锡','20171107\\29ccb4bd75cbd1077a88246158cdcee5.jpg/;',1),(6,'速冻小吃 营养 鱼腐 金牌鱼豆腐',' ¥ 65.00 -',' ¥ 65.00 -','158','','鱼肉、蛋清、大豆蛋白等','多泰食品','暂无','1','速冻小吃 营养 鱼腐 金牌鱼豆腐','海丰县多泰食品有限公司','海丰县多泰食品有限公司','20171107\\dd73ad843f693f488c216b0495ad098a.jpg/;',1),(7,'雪糕','99.9','100','600','白色','','','','4','雪糕','','新华网','20171214\\040465eb497c2607332841df273eba30.jpg/;',0);
/*!40000 ALTER TABLE `dz_product` ENABLE KEYS */;

#
# Structure for table "dz_rank"
#

DROP TABLE IF EXISTS `dz_rank`;
CREATE TABLE `dz_rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` varchar(30) DEFAULT NULL COMMENT '等级',
  `tall` int(11) DEFAULT NULL COMMENT '最低积分',
  `bottom` int(11) DEFAULT NULL COMMENT '最高积分',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='积分等级表';

#
# Data for table "dz_rank"
#

/*!40000 ALTER TABLE `dz_rank` DISABLE KEYS */;
INSERT INTO `dz_rank` VALUES (1,'普通会员',NULL,NULL),(2,'白银会员',NULL,NULL),(3,'黄金会员',NULL,NULL),(4,'啊啊啊',NULL,NULL),(5,'aaa',NULL,NULL),(6,'王者',NULL,NULL),(7,'位置',NULL,NULL),(8,'',NULL,NULL),(9,'',NULL,NULL),(10,'',NULL,NULL),(11,'',NULL,NULL),(12,'',NULL,NULL),(13,'',NULL,NULL),(14,'',NULL,NULL),(15,'',NULL,NULL),(16,'我最棒',NULL,NULL),(17,'烦烦烦',NULL,NULL),(18,'666666',NULL,NULL);
/*!40000 ALTER TABLE `dz_rank` ENABLE KEYS */;

#
# Structure for table "dz_role"
#

DROP TABLE IF EXISTS `dz_role`;
CREATE TABLE `dz_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "dz_role"
#

/*!40000 ALTER TABLE `dz_role` DISABLE KEYS */;
/*!40000 ALTER TABLE `dz_role` ENABLE KEYS */;

#
# Structure for table "dz_role_user"
#

DROP TABLE IF EXISTS `dz_role_user`;
CREATE TABLE `dz_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "dz_role_user"
#

/*!40000 ALTER TABLE `dz_role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `dz_role_user` ENABLE KEYS */;

#
# Structure for table "dz_stytem"
#

DROP TABLE IF EXISTS `dz_stytem`;
CREATE TABLE `dz_stytem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(20) DEFAULT NULL,
  `Qq` int(11) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `inputtime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=utf8 COMMENT='客服表';

#
# Data for table "dz_stytem"
#

/*!40000 ALTER TABLE `dz_stytem` DISABLE KEYS */;
INSERT INTO `dz_stytem` VALUES (1,'为如图米',34567899,1,0,NULL),(2,'侮辱米',234567800,1,0,NULL),(3,'体育米',234567890,0,0,NULL),(4,'英语米',2147483647,1,0,NULL),(5,'穿针',234567890,1,1,NULL),(6,'让他米',24567890,1,0,NULL),(7,'微软米',23456767,1,0,NULL),(8,'听沟通',234567890,1,0,NULL),(66,'啊',0,1,0,NULL),(67,'',0,NULL,0,NULL),(68,'錢錢錢錢錢',124124124,0,0,NULL),(69,'',0,NULL,0,NULL),(70,'1231',123,0,0,NULL),(71,'第三方',1231,1,0,NULL),(72,'啊啊啊',0,0,0,NULL),(73,'啊啊啊',0,0,0,NULL),(78,'谔谔',0,0,1,NULL),(79,'荣荣',0,0,1,NULL),(80,'威威',0,0,1,NULL),(81,'王前程',1586489005,0,1,NULL);
/*!40000 ALTER TABLE `dz_stytem` ENABLE KEYS */;

#
# Structure for table "dz_system_log"
#

DROP TABLE IF EXISTS `dz_system_log`;
CREATE TABLE `dz_system_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `type` tinyint(3) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

#
# Data for table "dz_system_log"
#

/*!40000 ALTER TABLE `dz_system_log` DISABLE KEYS */;
INSERT INTO `dz_system_log` VALUES (86,'登录成功','admin','168.123.12',1504601526,1),(87,'登录成功','admin','168.123.12',1504601526,1),(88,'登录成功','admin','168.123.12',1504601526,1),(89,'登录成功','admin','168.123.12',1504601526,1),(90,'登录成功','admin','168.123.12',1504601526,1),(91,'登录成功','admin','168.123.12',1504601526,1),(92,'登录成功','admin','168.123.12',1504601526,1),(93,'登录成功','admin','168.123.12',1504601526,1),(94,'登录成功','admin','168.123.12',1504601526,1),(95,'登录成功','admin','168.123.12',1504601526,1),(96,'登录成功','admin','168.123.12',1504601526,1),(97,'登录成功','admin','168.123.12',1504601526,1),(98,'登录成功','admin','168.123.12',1504601526,1),(99,'登录成功','admin','168.123.12',1504601526,1),(100,'登录成功','admin','168.123.12',1504601526,1),(101,'登录成功','admin','168.123.12',1504601526,1),(102,'登录成功','admin','168.123.12',1504601526,1),(103,'登录成功','admin','168.123.12',1504601526,1),(104,'登录成功','admin','168.123.12',1504601526,1),(105,'登录成功','admin','168.123.12',1504601526,1),(106,'登录成功','admin','168.123.12',1504601526,1),(107,'登录成功','admin','168.123.12',1504601526,1),(108,'登录成功','admin','168.123.12',1504601526,1),(109,'登录成功','admin','168.123.12',1504601526,1),(110,'登录成功','admin','168.123.12',1504601526,1),(111,'登录成功','admin','168.123.12',1504601526,1),(112,'登录成功','admin','168.123.12',1504601526,1),(113,'登录成功','admin','168.123.12',1504601526,1),(114,'登录成功','admin','168.123.12',1504601526,1),(115,'登录成功','admin','168.123.12',1504601526,1),(116,'登录成功','admin','168.123.12',1504601526,1),(117,'登录成功','admin','168.123.12',1504601526,1);
/*!40000 ALTER TABLE `dz_system_log` ENABLE KEYS */;
