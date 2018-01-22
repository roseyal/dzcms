-- ----------备份详情--------------------
-- 姓名：admin
-- 备份时间：2017-10-17 14:04:32
-- 备份数据表：dz_system_log,dz_stytem,dz_role_user,dz_role,dz_rank,dz_node,dz_news,dz_nav,dz_frontuser,dz_friendlink
-- --------------------------------------


-- ----------------------------
-- Table structure for `dz_system_log`
-- ----------------------------
DROP TABLE IF EXISTS `dz_system_log`;
CREATE TABLE `dz_system_log` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  `type` tinyint(3) DEFAULT '1',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=123 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;
-- ----------------------------
-- Table structure for `dz_stytem`
-- ----------------------------
DROP TABLE IF EXISTS `dz_stytem`;
CREATE TABLE `dz_stytem` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(20) DEFAULT NULL,
  `Qq` int(11) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `inputtime` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=81 DEFAULT CHARSET=utf8 COMMENT='客服表';
-- ----------------------------
-- Table structure for `dz_role_user`
-- ----------------------------
DROP TABLE IF EXISTS `dz_role_user`;
CREATE TABLE `dz_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- ----------------------------
-- Table structure for `dz_role`
-- ----------------------------
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
-- ----------------------------
-- Table structure for `dz_rank`
-- ----------------------------
DROP TABLE IF EXISTS `dz_rank`;
CREATE TABLE `dz_rank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` varchar(30) DEFAULT NULL COMMENT '等级',
  `tall` int(11) DEFAULT NULL COMMENT '最低积分',
  `bottom` int(11) DEFAULT NULL COMMENT '最高积分',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='积分等级表';
-- ----------------------------
-- Table structure for `dz_node`
-- ----------------------------
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
-- ----------------------------
-- Table structure for `dz_news`
-- ----------------------------
DROP TABLE IF EXISTS `dz_news`;
CREATE TABLE `dz_news` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
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
  `looknum` int(11) DEFAULT NULL COMMENT '游览数量',
  `inputtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `isdel` tinyint(3) DEFAULT '0' COMMENT '是否被删除',
  `url` varchar(255) DEFAULT NULL COMMENT 'url链接地址',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='资讯管理';
-- ----------------------------
-- Table structure for `dz_nav`
-- ----------------------------
DROP TABLE IF EXISTS `dz_nav`;
CREATE TABLE `dz_nav` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL COMMENT '导航名字',
  `description` varchar(50) DEFAULT NULL COMMENT '导航描述',
  `level` tinyint(3) DEFAULT NULL COMMENT '导航级别',
  `top` tinyint(3) DEFAULT NULL COMMENT '上级导航',
  `inputtime` int(11) DEFAULT NULL COMMENT '创建时间',
  `show` tinyint(3) DEFAULT NULL COMMENT '是否显示在导航栏',
  `static` tinyint(3) DEFAULT '0' COMMENT '状态值',
  `recovery` tinyint(3) DEFAULT NULL COMMENT '0',
  `retime` int(11) DEFAULT NULL COMMENT '放入回收站时间',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;
-- ----------------------------
-- Table structure for `dz_frontuser`
-- ----------------------------
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
) ENGINE=MyISAM AUTO_INCREMENT=209 DEFAULT CHARSET=utf8 COMMENT='前台用户表字段';
-- ----------------------------
-- Table structure for `dz_friendlink`
-- ----------------------------
DROP TABLE IF EXISTS `dz_friendlink`;
CREATE TABLE `dz_friendlink` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `webname` varchar(20) DEFAULT NULL COMMENT '网站名称',
  `website` varchar(30) DEFAULT NULL COMMENT '网站网址',
  `webcontacts` varchar(10) DEFAULT NULL COMMENT '网站联系人',
  `categories` varchar(20) DEFAULT NULL COMMENT '所属分类',
  `inttime` int(11) DEFAULT NULL COMMENT '添加时间',
  `pass` tinyint(3) DEFAULT '0' COMMENT '是否通过',
  `recydebin` tinyint(3) DEFAULT '0' COMMENT '回收站（0为删除）',
  `photo` varchar(50) DEFAULT NULL COMMENT 'logo',
  `recommend` varchar(255) DEFAULT NULL COMMENT '推荐',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8 COMMENT='友情链接';
-- ----------------------------
-- Records of `dz_system_log`
-- ----------------------------
 INSERT INTO `dz_system_log` VALUES ('86','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('87','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('88','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('89','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('90','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('91','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('92','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('93','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('94','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('95','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('96','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('97','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('98','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('99','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('100','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('101','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('102','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('103','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('104','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('105','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('106','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('107','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('108','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('109','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('110','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('111','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('112','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('113','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('114','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('115','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('116','登录成功','admin','168.123.12','1504601526','1');
 INSERT INTO `dz_system_log` VALUES ('117','登录成功','admin','168.123.12','1504601526','1');

-- ----------------------------
-- Records of `dz_stytem`
-- ----------------------------
 INSERT INTO `dz_stytem` VALUES ('1','为如图米','34567899','1','0','');
 INSERT INTO `dz_stytem` VALUES ('2','侮辱米','234567800','1','0','');
 INSERT INTO `dz_stytem` VALUES ('3','体育米','234567890','0','0','');
 INSERT INTO `dz_stytem` VALUES ('4','英语米','2147483647','1','0','');
 INSERT INTO `dz_stytem` VALUES ('5','穿针','234567890','1','1','');
 INSERT INTO `dz_stytem` VALUES ('6','让他米','24567890','1','0','');
 INSERT INTO `dz_stytem` VALUES ('7','微软米','23456767','1','0','');
 INSERT INTO `dz_stytem` VALUES ('8','听沟通','234567890','1','0','');
 INSERT INTO `dz_stytem` VALUES ('66','啊','0','1','0','');
 INSERT INTO `dz_stytem` VALUES ('67','','0','','0','');
 INSERT INTO `dz_stytem` VALUES ('68','錢錢錢錢錢','124124124','0','0','');
 INSERT INTO `dz_stytem` VALUES ('69','','0','','0','');
 INSERT INTO `dz_stytem` VALUES ('70','1231','123','0','0','');
 INSERT INTO `dz_stytem` VALUES ('71','第三方','1231','1','0','');
 INSERT INTO `dz_stytem` VALUES ('72','啊啊啊','0','0','0','');
 INSERT INTO `dz_stytem` VALUES ('73','啊啊啊','0','0','0','');
 INSERT INTO `dz_stytem` VALUES ('74','啊啊啊','12','1','0','');
 INSERT INTO `dz_stytem` VALUES ('75','啊啊','2112123123','0','0','');
 INSERT INTO `dz_stytem` VALUES ('76','啊啊','124124','0','0','');
 INSERT INTO `dz_stytem` VALUES ('77','将饿','93797402','0','0','');
 INSERT INTO `dz_stytem` VALUES ('78','谔谔','0','0','1','');
 INSERT INTO `dz_stytem` VALUES ('79','荣荣','0','0','1','');
 INSERT INTO `dz_stytem` VALUES ('80','威威','0','0','1','');

-- ----------------------------
-- Records of `dz_rank`
-- ----------------------------
 INSERT INTO `dz_rank` VALUES ('1','普通会员','','');
 INSERT INTO `dz_rank` VALUES ('2','白银会员','','');
 INSERT INTO `dz_rank` VALUES ('3','黄金会员','','');
 INSERT INTO `dz_rank` VALUES ('4','啊啊啊','','');
 INSERT INTO `dz_rank` VALUES ('5','aaa','','');
 INSERT INTO `dz_rank` VALUES ('6','王者','','');
 INSERT INTO `dz_rank` VALUES ('7','位置','','');
 INSERT INTO `dz_rank` VALUES ('8','','','');

-- ----------------------------
-- Records of `dz_news`
-- ----------------------------
 INSERT INTO `dz_news` VALUES ('1','dad','ada','3','ada','dad','dada','ada','0','4444.gif','<p>adada<br/></p>','0','424','','0','');
 INSERT INTO `dz_news` VALUES ('2','afa','faf','2','','affa','','afa','0','20170928\45b58306c4e4ab7884c27ce20044930e.jpg','','0','4242','','1','');
 INSERT INTO `dz_news` VALUES ('3','KLHJH','ada','3','','','','dada','1','20170928\45b58306c4e4ab7884c27ce20044930e.jpg','','0','52','','0','');
 INSERT INTO `dz_news` VALUES ('4','啛啛喳喳','ada','3','','','','dada','0','20170928\45b58306c4e4ab7884c27ce20044930e.jpg','','0','542','','0','');
 INSERT INTO `dz_news` VALUES ('5','马蓉出轨 王宝强尴尬','马蓉 王宝强','4','出轨','马蓉跟王宝强经纪人出轨 宋哲','陈买买','www.baidu.com','1','yishu_shuma.jpg','<p>很复杂，王宝强都没弄懂，我当然也不清楚<br/></p>','0','22','','0','');
 INSERT INTO `dz_news` VALUES ('6','关凌个人资料家庭背景 关凌的老公是谁','关凌','5','关凌的老公是谁','关凌的老公是谁关凌的老公是谁','CMM','http://www.jp14.com','1','20170928\45b58306c4e4ab7884c27ce20044930e.jpg','<p><em class="arcIco l"></em>关凌，1982年4月8日生于北京，中国内地女演员、主持人，毕业于北京理工大学。关凌小时候比较乖巧，据说一岁的时候就开始学游泳，多才多艺。关凌1993年在中国第一部情景喜剧《我爱我家》中饰演贾圆圆被观众熟知，这个大大咧咧，非常可爱的大姑娘如今已经长大成家<span style="font-size:16px;">我爱我家</span></p><p>
	<span style="font-size:16px;">　　“我特别爱我的家人，爸妈生日、结婚纪念日的时候，我会花很多心思去买礼物，给他们买情侣表、做影集、买衣服。”关凌得意地说，自己还是家庭生活中的一把好手，饭做得很不错。特别喜欢小孩子的关凌，对未来“好妻子”、“好妈妈”的角色也充满了向往。她说：“希望能有一个爱我、疼我的老公，有一个甜蜜的小家庭。”</span></p><p>
	<span style="font-size:16px;">　　“女人还是需要别人来疼爱的，生活最终还是要回归家庭。”关凌说。看来，当年的小圆圆真的长大了。</span></p><p>
	<span style="font-size:16px;">　　关凌出嫁</span></p><p>
	<span style="font-size:16px;">　　2011年11月20日，关凌和出品人姬云飞举行婚礼，当年《我爱我家》、《圆圆的故事》各位主演及圈中众多好友都应邀参加。</span></p><p>
	<span style="font-size:16px;">　　关凌丈夫姬云飞背景：</span></p><p>
	<span style="font-size:16px;">　　《我爱我家》续篇《圆圆的故事》制片人，关凌的丈夫。2011年11月20日，二人步入婚姻殿堂，著名主持人鞠萍主持婚礼。</span></p><p>
	<span style="font-size:16px;">　　1994年，中国首部室内情景喜剧《我爱我家》红遍了大江南北，剧中演员宋丹丹、杨立新、梁天、文兴宇等人的表演给观众留下了深刻的印象，其中古灵精怪的贾圆圆扮演者关凌更是被千家万户所熟知，成为中国极具影响力的童星之一。长大后的关凌在中国教育电视台担任主持人，并在多家地方电视台主持节目。2010年初，关凌所主演的《我爱我家》续篇《圆圆的故事》播出，而姬云飞就是该剧的制片人。</span></p><p>
	<span style="font-size:16px;">　　听闻关凌结婚消息，众网友都送出了祝福，而关凌也第一时间通过微博公开表示感谢。</span></p><p>
	<span style="font-size:16px;">　　关凌在自己微博承认自己将要出嫁，好幸福。微博原文：“从十岁出道，上学、工作、生活都是在大家的关爱中。原本想这次安安静静的享受属于两个人的小幸福，还是没想到网上这么多朋友已经开始发来祝福啦!是的!满族的凌凌格格要出嫁啦，好幸福，从未有过如此的踏实开心!内心的平安那才是永远。”</span></p><p><br/></p>','0','524','','0','');
 INSERT INTO `dz_news` VALUES ('7','中宣部授予张劼“时代楷模”荣誉称号','时代楷模”荣誉称号','8','张劼','中宣部授予张劼“时代楷模”荣誉称号','冯人綦、曹昆','http://politics.people.com.cn/','1','20170928\45b58306c4e4ab7884c27ce20044930e.jpg','<p style="text-indent: 2em;">
	新华社北京9月24日电 中央宣传部24日向全社会公开发布张劼的先进事迹，授予他“时代楷模”荣誉称号。</p><p style="text-indent: 2em;">
	张劼是安徽省蚌埠市公安局特警支队一大队教导员。从警17年来，他始终坚定理想信念、传承优良家风，长期奋战在打击犯罪、应急处突的第一线，在处置各种急难险重警情中屡立战功，被誉为“特警精英”。2016年1月5日，他在处置一起危害公共安全的重大警情中，不顾个人安危，挺身而出，用自己的血肉之躯制服暴徒，以实际行动诠释了人民公安为人民的庄严承诺。张劼曾荣获“全国五四青年奖章”“公安楷模”“全国公安系统二级英雄模范”“中国好人”等多项荣誉，荣立三等功2次、嘉奖5次。</p><p style="text-indent: 2em;">
	近一段时间以来，张劼的先进事迹宣传报道后，在全社会引起热烈反响。干部群众特别是公安干警和青年学生认为，张劼是“淬火成钢的英雄卫士”，他的先进事迹和崇高精神，鲜明体现了牢记使命、听党指挥的忠诚信念，挺身而出、舍生忘死的英雄气概，忠实履职、服务人民的担当精神，从容以对、砺而弥坚的顽强意志，生动践行了习近平总书记提出的对党忠诚、服务人民、执法公正、纪律严明的总要求。张劼不愧为广大公安干警的优秀代表，不愧为全社会学习的榜样。广大公安干警纷纷表示，要深入学习贯彻习近平总书记系列重要讲话精神，扎实开展“迎接十九大、忠诚保平安”主题教育实践活动，全力维护国家安全和社会稳定，努力服务经济社会发展、服务人民群众，以优异成绩迎接党的十九大胜利召开。</p><p style="text-indent: 2em;">
	“时代楷模”发布以“我们的价值观、我们的中国梦”为主题，现场发布了张劼的先进事迹，宣读了《中共中央宣传部关于授予张劼同志“时代楷模”荣誉称号的决定》，播放了反映他先进事迹的短片，中宣部负责同志为张劼颁发了“时代楷模”奖章和荣誉证书。公安部、安徽省委有关负责同志，“时代楷模”的亲友、同事及社会各界代表等参加。</p><p><br/></p>','0','424','','0','');
 INSERT INTO `dz_news` VALUES ('8','中国力争2020年基本建立教育基础性制度','2020年','7','中国力争2020年基本建立教育基础性制度','中国力争2020年基本建立教育基础性制度体系','朱小羽（实习生）、申','http://politics.people.com.cn/','0','','<p>中新社北京9月24日电 
近日，中共中央办公厅、国务院办公厅印发《关于深化教育体制机制改革的意见》(以下简称《意见》)。《意见》提出，到2020年，教育基础性制度体系基本建立，形成充满活力、富有效率、更加开放、有利于科学发展的教育体制机制，人民群众关心的教育热点难点问题进一步缓解。</p><p>
	　　《意见》指出，中国教育总体发展水平进入世界中上行列。当前中国教育改革发展已进入一个新的阶段。深化教育体制机制改革应当坚持扎根中国与融通中外相结合、坚持目标导向与问题导向相结合、坚持放管服相结合、坚持顶层设计与基层探索相结合。</p><p>
	　　关于学前教育，《意见》指出，要健全立德树人系统化落实机制。要创新学前教育普惠健康发展的体制机制。强调要鼓励多种形式办园，有效推进解决入园难、入园贵问题。要加强科学保教，坚决纠正“小学化”倾向。</p><p>
	　　关于义务教育，《意见》指出，要完善义务教育均衡优质发展的体制机制。强调要建立以学生发展为本的新型教学关系。统一城乡学校建设标准、城乡教师编制标准、城乡义务教育学校生均公用经费基准定额，加快建立义务教育学校国家基本装备标准。</p><p>
	　　关于职业教育，《意见》指出，要完善提高职业教育质量的体制机制。强调要健全德技并修、工学结合的育人机制。坚持以就业为导向，着力培养学生的工匠精神、职业道德、职业技能和就业创业能力。</p><p>
	　　关于高等教育，《意见》指出，要健全促进高等教育内涵发展的体制机制。强调要创新人才培养机制。要深化科研体制改革，坚持以高水平的科研支撑高质量的人才培养。要完善依法自主办学机制。研究制定高等学校分类设置标准，制定分类管理办法，促进高等学校科学定位、差异化发展，统筹推进世界一流大学和一流学科建设。</p><p>
	　　关于高中教育，《意见》指出，要推进普通高中育人方式改革，深化普通高中教育教学改革，稳妥推进高考改革。要健全支持和规范民办教育发展的制度，健全财政、土地、登记、收费等方面支持民办学校发展的相关政策，健全监管机制。</p><p>
	　　关于教师管理，《意见》指出，强调要健全加强师德建设长效机制。完善中小学教师绩效工资制度，改进绩效考核办法，使绩效工资充分体现教师的工作量和实际业绩，确保教师平均工资水平不低于或高于当地公务员平均工资水平。</p><p>
	　　关于教育投入，《意见》强调要完善财政投入机制。保证国家财政性教育经费支出占国内生产总值比例一般不低于4%，确保一般公共预算教育支出逐年只增不减，确保按在校学生人数平均的一般公共预算教育支出逐年只增不减。</p><p><br/></p>','0','242','','0','');
 INSERT INTO `dz_news` VALUES ('9','vvv','vv','2','vvv','vvv','vvv','vvv','1','20170929\f53e0eab907c1b1de246b5acd98e651a.jpg','','0','','1506652129','1','');
 INSERT INTO `dz_news` VALUES ('12','程序人生','啊啊啊','3','顶顶顶顶','踩踩踩踩踩踩踩踩踩踩踩1','踩踩踩踩踩踩','踩踩踩踩踩踩踩踩踩','1','','','1','','1507516592','0','');
 INSERT INTO `dz_news` VALUES ('11','中国力争2020年基本建立教育基础性制度','','','','','','','0','','','0','','','0','');
 INSERT INTO `dz_news` VALUES ('13','wwww','wwwwwwwwwww','2','wwwwwwwwwwwww','wwwwwwwwwwwwwwwwwww','wwww','wwwwwwwwwwww','1','20171016\cb13cfd8ddd53ce2e35854c4010505a6.jpg','','0','','1508124547','0','');

-- ----------------------------
-- Records of `dz_nav`
-- ----------------------------
 INSERT INTO `dz_nav` VALUES ('22','权限管理5','jurisdiction','1','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('23','权限管理1','jurisdiction','2','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('24','权限管理2','jurisdiction','3','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('25','权限管理3','jurisdiction','2','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('26','姓名管理','name','1','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('27','权限管理5','jurisdiction','1','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('28','权限管理1','jurisdiction','2','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('34','权限管理2','jurisdiction','1','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('35','','jurisdiction','1','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('49','wwww','wwwwwwwwwwwwwwwwwwwwwww','1','2','1508219540','0','0','','');
 INSERT INTO `dz_nav` VALUES ('37','权限管理5','jurisdiction','1','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('38','权限管理1','jurisdiction','1','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('39','权限管理2','jurisdiction','1','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('40','权限管理3','jurisdiction','1','','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('42','权限管理5','jurisdiction','1','0','','1','0','0','');
 INSERT INTO `dz_nav` VALUES ('43','权限管理1','jurisdiction','1','','','1','0','1','');
 INSERT INTO `dz_nav` VALUES ('45','权限管理3','jurisdiction','1','','','1','1','1','');
 INSERT INTO `dz_nav` VALUES ('50','wwww','wwwwwwwwwwwwwwwwwwwwwww','1','2','1508219576','0','0','','');
 INSERT INTO `dz_nav` VALUES ('51','www','wwwwwwwwwwwwwwww','1','2','1508219626','0','0','','');

-- ----------------------------
-- Records of `dz_frontuser`
-- ----------------------------
 INSERT INTO `dz_frontuser` VALUES ('207','550a141f12de6341fba65b0ad0433500','xxx','1','20170929\ce2c5cf02dc8b07e6d84c2e2ccf2830b.jpg','2017-09-29','','0','1','山东省临沂市','127.0.0.1','0','0','0','ww@qq.com','15864890052');
 INSERT INTO `dz_frontuser` VALUES ('61','202cb962ac59075b964b07152d234b70','赵隆宇','0','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','1','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('62','202cb962ac59075b964b07152d234b70','赵日天','1','20170925\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12334333332');
 INSERT INTO `dz_frontuser` VALUES ('63','202cb962ac59075b964b07152d234b70','赵隆宇','0','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('66','202cb962ac59075b964b07152d234b70','赵隆宇','0','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','1','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('68','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('69','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('71','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('72','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('73','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('75','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('77','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('79','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('80','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('81','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('83','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('84','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('85','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('86','202cb962ac59075b964b07152d234b70','赵日天','1','20170925\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12334333332');
 INSERT INTO `dz_frontuser` VALUES ('87','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('88','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('89','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('90','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('91','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('92','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('93','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('94','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('95','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('96','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('97','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('98','202cb962ac59075b964b07152d234b70','赵日天','1','20170925\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12334333332');
 INSERT INTO `dz_frontuser` VALUES ('99','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('100','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('101','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('102','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('103','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('104','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('105','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('106','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('107','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('108','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('109','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('111','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('208','4eae35f1b35977a00ebd8086c259d4c9','wwww','1','20171009\a89b563bec284921873dd71507d9d8bb.jpg','2017-10-09','','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','15864890052');
 INSERT INTO `dz_frontuser` VALUES ('116','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('117','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('118','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('119','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('120','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('121','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('122','202cb962ac59075b964b07152d234b70','赵日天','1','20170925\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12334333332');
 INSERT INTO `dz_frontuser` VALUES ('123','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('124','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('125','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('126','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('127','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('128','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('129','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('130','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('131','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('132','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('133','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('134','202cb962ac59075b964b07152d234b70','赵日天','1','20170925\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12334333332');
 INSERT INTO `dz_frontuser` VALUES ('135','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('136','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('137','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('138','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('139','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('140','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('141','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('142','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('143','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('144','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('145','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('146','202cb962ac59075b964b07152d234b70','赵日天','1','20170925\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12334333332');
 INSERT INTO `dz_frontuser` VALUES ('147','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('148','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('149','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('150','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('151','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('152','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('153','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('154','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('155','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('156','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('157','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('158','202cb962ac59075b964b07152d234b70','赵日天','1','20170925\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12334333332');
 INSERT INTO `dz_frontuser` VALUES ('159','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('160','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('161','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('162','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('163','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('164','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('165','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('166','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('167','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('168','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('169','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('170','202cb962ac59075b964b07152d234b70','赵日天','1','20170925\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12334333332');
 INSERT INTO `dz_frontuser` VALUES ('171','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('172','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('173','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('174','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('175','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('176','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('177','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('178','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('179','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('181','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('182','202cb962ac59075b964b07152d234b70','赵日天','1','20170925\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12334333332');
 INSERT INTO `dz_frontuser` VALUES ('183','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('184','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('185','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('186','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('187','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('188','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('189','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('206','b59c67bf196a4758191e42f76670ceba','zxvn','1','20170929\5374b3fa591e0e0d4b17389704c13289.jpg','2017-09-29','','0','1','山东省临沂市','127.0.0.1','0','0','0','1@qq.com','15864890052');

-- ----------------------------
-- Records of `dz_friendlink`
-- ----------------------------
 INSERT INTO `dz_friendlink` VALUES ('79','142142','124142','124142','社交网站','1506567161','0','0','20170928\d386fbbd9f61f4b3413dae2d71e7dd3f.png','0');
 INSERT INTO `dz_friendlink` VALUES ('80','米','www.jingdong.com','刘强东','销售','1506567774','0','0','20170928\a4416734e86b58f3c408e795d86ad6ae.jpg','1');
 INSERT INTO `dz_friendlink` VALUES ('89','在这次行程v不那么，','自行车v不那么','陈道明，','个人网站','1506651164','0','0','20170929\4c3d6538248b43cb2d37a240bf468287.jpg','0');
 INSERT INTO `dz_friendlink` VALUES ('90','qqqqq','qqqqq','qqqqqqqqqq','企业网站','1508211172','1','0','20171017\3d877934b3d12513ec2a57a740b853d6.jpg','0');
 INSERT INTO `dz_friendlink` VALUES ('91','qqqqq','qqqqq','qqqqqqqqqq','企业网站','1508211250','1','0','20171017\749c0c2974b6aa8e0bb112f8eccc11e6.jpg','0');
 INSERT INTO `dz_friendlink` VALUES ('92','qqqqq','qqqqq','qqqqqqqqqq','企业网站','1508211364','1','0','20171017\ae32c7407fe5529d03e608a605ce6fcd.jpg','0');
 INSERT INTO `dz_friendlink` VALUES ('93','eeee','eee','eeeeee','企业网站','1508211518','1','0','20171017\241b6622f65c7c2d89efd729811d7256.jpg','0');
