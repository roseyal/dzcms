-- ----------备份详情--------------------
-- 姓名：admin
-- 备份时间：2017-10-24 20:33:59
-- 备份数据表：dz_system_log,dz_stytem,dz_role_user,dz_role,dz_rank,dz_node,dz_news,dz_nav,dz_frontuser,dz_friendlink
-- --------------------------------------


-- ----------------------------
-- Table structure for `dz_system_log`
-- ----------------------------
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
-- ----------------------------
-- Table structure for `dz_stytem`
-- ----------------------------
DROP TABLE IF EXISTS `dz_stytem`;
CREATE TABLE `dz_stytem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminName` varchar(20) DEFAULT NULL,
  `Qq` int(11) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `inputtime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
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
  `looknum` int(11) DEFAULT NULL COMMENT '游览数量',
  `inputtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `isdel` tinyint(3) DEFAULT '0' COMMENT '是否被删除',
  `url` varchar(255) DEFAULT NULL COMMENT 'url链接地址',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COMMENT='资讯管理';
-- ----------------------------
-- Table structure for `dz_nav`
-- ----------------------------
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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;
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
) ENGINE=MyISAM AUTO_INCREMENT=219 DEFAULT CHARSET=utf8 COMMENT='前台用户表字段';
-- ----------------------------
-- Table structure for `dz_friendlink`
-- ----------------------------
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
 INSERT INTO `dz_news` VALUES ('1','99999','ddddddddddd','22','dddddddddddddd','ddddddddddddddddd','dddddddddd','dddddddddddddddddddd','1','','<p>dddddddddddddddddddddddd<br/></p>','0','','1508486695','1','/home/Article/news/id/1');
 INSERT INTO `dz_news` VALUES ('2','说很久以前 写很久以后','说很久以前 写很久以后','6','生活随笔>生活感悟','','王伟','会员推荐','1','','<p><br/></p><p>　　很久以前，我以为，只要我对别人好，能忍让，就会换来同样的回报。</p><p>　　很久以后，我终于<a href="http://www.duwenzhang.com/huati/xiangxin/index1.html">相信</a>，有些东西，任凭自己怎么<a href="http://www.duwenzhang.com/huati/nuli/index1.html">努力</a>，依旧抓不住，所以我学着不再期待。</p><p>　　很久以前，我的脑子里装满了安徒生笔下的王子公主灰姑娘骑士，偷偷的想着谁会是我的谁谁谁。</p><p>　　很久以后，我依旧相信着安徒生写的那些童话<a href="http://www.duwenzhang.com/">故事</a>里<a href="http://www.duwenzhang.com/huati/meihao/index1.html">美好</a>的结局，却再也不期待我的谁谁谁会在几时出现。</p><p>　　于是，我知道，有些期待，在淡淡的时光隧道，被抹杀殆尽。完全，再也不见。</p><p>　　很久以前，听《十年》，想着陈奕迅怎么那么倒霉，不是<a href="http://www.duwenzhang.com/huati/shilian/index1.html">失恋</a>就是被抛弃。</p><p>　　很久以后，听《十年》，看到的不再是陈奕迅的<a href="http://www.duwenzhang.com/wenzhang/xinqingriji/">心情</a>，而是自己的心情。</p><p>　　于是，我知道，有些事情，必须要自己经历过后才能体会到那种辛酸。</p><p>　　很久以前，久到我还不认识某某某们的时候，我会把那些跟我一样不安分的ABCD当成挚友，自以为拍拍手掌就真的能做到“有福同享有难同当”。</p><p>　　很久以后，久到我看着她们一个个地脱离我的世界，淡出我的舞台，才恍然间明白，对于<a href="http://www.duwenzhang.com/huati/shijian/index1.html">时间</a>和距离这两个概念，作为人，充满了<a href="http://www.duwenzhang.com/huati/wunai/index1.html">无奈</a>。</p><p>　　于是，我知道，永远不能相信所谓的一成不变。因为世界上根本就没有。</p><p>　　很久以前，我看着郭小四的《梦里花落知多少》，为陆叙的死<a href="http://www.duwenzhang.com/huati/nanguo/index1.html">难过</a>落泪；看《<a href="http://www.duwenzhang.com/huati/fendou/index1.html">奋斗</a>》，为米莱的偏执感到难堪。</p><p>　　很久以后，再看一次，心里难过的却是姚姗姗打林岚时顾小北的无动于衷，甚至护在姚姗姗前面；为米莱的偏执不再感到难堪，而是心疼。</p><p>　　于是，我知道，一个前前后后的差距，也许久不到一个人的黑发变白，却是一个真正<a href="http://www.duwenzhang.com/wenzhang/shenghuosuibi/chengzhang/">成长</a>的过程。心，在成长，在变化。</p><p>　　很久以前，听一个<a href="http://www.duwenzhang.com/huati/pengyou/index1.html">朋友</a>说：我这辈子非他不嫁了。</p><p>　　很久以后，听这个朋友说：绕了一大圈，发现最适合自己的却另有其人。</p><p>　　于是，我知道，在年少时，我们都做<a href="http://www.duwenzhang.com/huati/cuoguo/index1.html">错过</a>什么，终于有这么一天，我也可以放下心中的执念，重新选择。</p><p>　　很久以前，发生了太多，就像冬天的雪，经过彻骨的寒冷，经过刺心的疼痛，什么也不再。甚至连伤疤，都只是一种奢侈。</p><p>　　很久以后，我发现我不再拼命寻找那些所谓的过去了，或者是真的看到了自己的未来了。或者是真的不想在参与那些刻苦铭心。</p><p>　　于是，我发现，那些过了太久的事情，慢慢的，就被沉淀了。于是我告诉自己，我还是太年轻，还没遇到能让自己坚持一辈子的东西。</p><p>　　于是，我说，让我自己，慢慢的体会这个世界的黑暗，人心的叵测。</p><p>　　于是，我想，只要世界还在，一切就都有机会存在。</p><p>　　于是，我祈祷，让我一直在需要我的人身边，永远不<a href="http://www.duwenzhang.com/huati/likai/index1.html">离开</a>。</p><p>　　很久以前，我会毫不掩饰地大笑，不会去想猜测别人的想法，不会再这里发表这些感叹。</p><p>　　很久以后，我的字里行间，充满了别人读不懂的心事。</p><p>　　很久以后，我终于发现，自己不是停滞不前，只是那些成长，突然就让自己冷了心。</p><p>　　我不想挣扎在那些从前和以后中。我不想沉浸在得到和<a href="http://www.duwenzhang.com/huati/shiqu/index1.html">失去</a>中。</p><p>　　所以，我告诉自己，即使世界曾经荒芜如沙漠，即使那些从前曾经让我湿了眼眶红了眼圈，即使岁月的雕刻让我的心棱角不再分明不再清澈，即使年华老去，也要走出过往。</p><p>　　纪念某某<a href="http://www.duwenzhang.com/huati/dengdai/index1.html">等待</a>的故事。</p><p>　　纪念一切可纪念的。</p><p>　　从前的，以后的。</p><p><br/></p>','0','','1508487084','0','/home/Article/news/id/2');
 INSERT INTO `dz_news` VALUES ('27','','','1','','','','','0','','','0','','1508824061','1','/home/Article/news/id/27');
 INSERT INTO `dz_news` VALUES ('28','ccc ','ccc ','1','ccccc ','','','','0','','','0','','1508824117','0','/home/Article/news/id/28');
 INSERT INTO `dz_news` VALUES ('3','漫谈“好老婆”','漫谈“好老婆”','1','好老婆',' 	

　　每个男人，都拥有自己称量“好老婆”的一把称杆，所以，总是众说纷纭。但，说来说去，大致也都少不了这几点：
漫谈“好老婆”一、上得厅堂，下得厨房；
二、善解人意，柔情似水；
三、清香','刘栋','新华网','1','20171020\c345ad80075741d99925760338794e1c.gif','<p>每个男人，都<a href="http://www.duwenzhang.com/huati/yongyou/index1.html">拥有</a>自己称量“<a href="http://www.duwenzhang.com/huati/laopo/index1.html">好老婆</a>”的一把称杆，所以，总是众说纷纭。但，说来说去，大致也都少不了这几点：<br/>一、上得厅堂，下得厨房；<br/>二、善解人意，柔情似水；<br/>三、清香淡雅，美而不华。</p><p>　　短短的这三点，看似简单明了，包含得却是<a href="http://www.duwenzhang.com/huati/nvren/index1.html">做为女人</a>，一生中所必须的金玉良言。女人，若真能做到以上三点，岂非<a href="http://www.duwenzhang.com/huati/wanmei/index1.html">完美</a>？完美，是一种奢望，是<a href="http://www.duwenzhang.com/huati/zhuiqiu/index1.html">一种追求</a>。所以，事无完事，人无完人，十全只能九美！每个女人，都想做“好老婆”，可都很难达标。而同样做为女人，做为老婆的<a href="http://www.duwenzhang.com/huati/pingfan/index1.html">平凡</a>如我，简单如我的我，对“好老婆”的理解有我自己实践中所领悟的一面。我不是专家，不是<a href="http://www.duwenzhang.com/huati/hunyin/index1.html">婚姻</a>剖析家，我只道我所体会到的，我所经历过的。每个人每颗心都不一样，理解高度，思想高度都没在一个层次面上，我以下所言，仅仅只是自身的一点点领会和感思，仅仅只是借鉴。</p><p>　　一：做为老婆，既为人妻，就尽量遵守一下“夫为纲”的传统纲领。毕竟中国传承了五千年的孔孟封建思想，即使如今女权高涨，女性地位节节拔高，可男人那种从老祖宗那儿遗传下来的三纲五常的思想依然在骨子里萌芽着。做为<a href="http://www.duwenzhang.com/huati/laopo/index1.html">妻子</a>，你若太过强悍，太过霸气，他的自尊心会受伤，他也许就会颓废，就会不思进取，也许一辈子就会碌碌无为了。那么，累得是你，辛苦得也是你！</p><p>　　二：做为老婆，既为人妻，就尽量让自己守旧一些，言谈举止端庄高雅一些。即便这不是你的<a href="http://www.duwenzhang.com/huati/xingge/index1.html">性格</a>，你向来大大咧咧，不拘小结。可是，做为<a href="http://www.duwenzhang.com/huati/laogong/index1.html">老公</a>的他，非常非常不<a href="http://www.duwenzhang.com/huati/xihuan/index1.html">喜欢</a>自己的老婆与他人（男性好友）那种打情骂俏，亲密无间似的相处模式，为了他，即使你与他人是如哥们那般<a href="http://www.duwenzhang.com/huati/chunjie/index1.html">纯洁</a>的<a href="http://www.duwenzhang.com/huati/ganqing/index1.html">感情</a>，也一定得保持适当的距离。</p><p>　　三：做为老婆，要懂得顾全大局。男人的<a href="http://www.duwenzhang.com/huati/shiye/index1.html">事业心</a>一般都偏重，在他<a href="http://www.duwenzhang.com/huati/nuli/index1.html">努力</a>为了事业去拼去博的时候，你只需要帮衬着，支持着，别打击他、打压他。不管最后<a href="http://www.duwenzhang.com/huati/chenggong/index1.html">成功</a>与否，你只管尽自己所有能尽的力量，给他加油，成与不成，最后他<a href="http://www.duwenzhang.com/huati/ganen/index1.html">都会感恩</a>的。</p><p>　　四：古话说：“女子无才便是德”。此话虽已成往事烟云，不合时代了。但男人并不需要太过聪明的，优秀的女人。在他面前，你偶尔的傻冒一下，笨拙一下，能突现出他的才华横溢，他的精明强干，他的那种保护欲和<a href="http://www.duwenzhang.com/huati/zeren/index1.html">责任感</a>自然而然就会被调动起来，他的大男人心性会认为照顾你，呵护你是理所当然得！但也得傻冒得有个度，不能是愚笨。</p><p>　　五：做为老婆，兰心惠质、温柔贤淑是一种妙不可言的神秘的女人味，而撒娇又是这种女人味里最不可缺失的一味，适时得在你所爱的人面前撒撒娇，耍耍赖，秀秀自己那如水般的小女人味，男人，很容易意乱情迷，</p><p>　　六：每个男人，婚前和婚后对女人的要求是不一样得。婚前，<a href="http://www.duwenzhang.com/wenzhang/aiqingwenzhang/">因为爱情</a>，他所需要的女人只要是或漂亮大方、或活泼<a href="http://www.duwenzhang.com/huati/keai/index1.html">可爱</a>、或天真无邪，俩人能有共同的语言，共同的爱好，大致就能看对眼了。可婚后，男人的要求就多多了。在有了爱情还需要面包的<a href="http://www.duwenzhang.com/huati/xianshi/index1.html">现实</a><a href="http://www.duwenzhang.com/wenzhang/shenghuosuibi/">生活</a>中，他的压力就会成倍速的增加，而这时，能给他解压的、善解人意的女人更能受到他的青睐，尤其是在他焦头烂额、疲惫不堪的时候，能适度帮扶他、理解他、鼓舞他的女人，就会很容易收卖他那颗正恰很<a href="http://www.duwenzhang.com/huati/cuiruo/index1.html">脆弱的心</a>。做为老婆，你一定得清楚这至关重要的一点。</p><p>　　七：做为老婆，你一定得切记：别以为我嫁给他了，我就是他的人了，就可以邋遢了，就可以随随便便展现自己丑的一面了。男人都喜欢秀色可餐的女人，你的倩丽（不一定要很漂亮，但一定要清雅）和你的<a href="http://www.duwenzhang.com/wenzhang/renshengzheli/20080818/15697.html">修养</a>是你自身最表象最直接的魅力武器。人前人后，都要让他感受到你那潜在的<a href="http://www.duwenzhang.com/huati/meili/index1.html">美丽</a>和风情，适时给他添加一丝危机感。最忌讳的是：别让老公认为你<a href="http://www.duwenzhang.com/huati/likai/index1.html">离开了</a>他你就无法生活了，那样，你会无意识得助长他那盲目的<a href="http://www.duwenzhang.com/huati/zixin/index1.html">自信心</a>和骄傲感，等到他把头翘到老高老高的时候，你就危机重重了。</p><p>　　八：每一对夫妻，总免不了瞌瞌碰碰，吵吵闹闹，但终归是床头打架尾和的。所以吵架的时候，一定一定别出口伤人，尤其不能攻击彼此的长辈。即便男人真失了口德了，做为老婆的你，再生气也得理智，别顶着来，俗话说：“相骂无好口”，俩个人如果都失了理智，失了分寸，小吵就会成了大吵，小事就会成了大事，愤怒、怨恨，最后就会演变成口不择言的攻击了，一而再，再而三，夫妻间的感情就会伤痕累累。反之，你忍下了，等到彼此心平气和的时候，你再对他提出意见和抗议，久而久之，大多的男人都能改正。吵架后，别去找娘家人诉苦，告状，你状告多了，<a href="http://www.duwenzhang.com/huati/fumu/index1.html">父母</a>亲的天秤就更倾斜了。本来天下的父母就都秉持着无不是的子女的观念，在你一次次的抱怨式的把状告给父母，你或许只图告个痛快，有人撑腰，父母却会记在心头。而慢慢得，你的老公在他们心目中的地位会一落千丈，再也不会是他们心中的贤婿了。你们小小的一次次争吵，最终很有可能变成两个<a href="http://www.duwenzhang.com/huati/jiating/index1.html">大家庭</a>的矛盾。既伤了夫妻感情，又给父<a href="http://www.duwenzhang.com/huati/muqin/index1.html">母亲</a>添了无尽的<a href="http://www.duwenzhang.com/huati/fannao/index1.html">烦恼</a>和忧心，真得很划不来。</p><p>　　九：孝乃百善之首，孝顺、大度是一种美德。很多女人觉得，孝顺自家的父母是很理所当然得，可孝顺公公婆婆，那似乎就是老公、大小姑子的事儿，我嘛，做为媳妇，应付到了就行，做不到那种如对自家父母那般得真心实意。说实话，自古婆媳最难处，想做到十全十美谁都不可能，只能说是尽量，尽量用你的大度和风度，你的涵养和素质去<a href="http://www.duwenzhang.com/huati/baorong/index1.html">包容</a>和爱你的公公婆婆、叔侄姑婶。做个好老婆，这点最难。可如果你能做到十之八九，老公少了两头受气的折磨，他会以你为傲，引你为荣，他对你的爱，更会源源不断。</p><p>　　……</p><p>　　漫谈“好老婆”，各家有各家的真知灼见。小女子我只是站在自己的观点上说上这么几点，也许很肤浅，也许会被唏嘘，所以我已在前头说过，只是个人所悟，仅仅只是借鉴，读者<a href="http://www.duwenzhang.com/huati/pengyou/index1.html">朋友们</a>请一定以包容之心小读。我但愿所有的女性朋友都会是一个“好老婆”，画一个“以老公为圆心，以自己为半径，有子有女有老人的完整得同心圆”。</p><p><br/></p>','0','','1508487186','0','/home/Article/news/id/3');
 INSERT INTO `dz_news` VALUES ('4','带着爱行走','带着爱行走','1','带着爱行走','　用心感受，便能感受来自身边温暖的关怀、温馨的爱；学会珍惜，才能把点点滴滴的关怀与爱护收藏。把爱装进生命的行囊，带着爱行走在我们的人生之路，当走到生命之路的尽头时，便会发现，这爱温暖了我们一路，这爱丰','随身','喜欢我','0','','<p><br/></p><p>　　用心感受，便能感受来自身边<a href="http://www.duwenzhang.com/huati/wennuan/index1.html">温暖</a>的关怀、<a href="http://www.duwenzhang.com/huati/wenxin/index1.html">温馨</a>的爱；学会<a href="http://www.duwenzhang.com/huati/zhenxi/index1.html">珍惜</a>，才能把点点滴滴的关怀与爱护收藏。把爱装进<a href="http://www.duwenzhang.com/huati/shengming/index1.html">生命</a>的行囊，带着爱行走在我们的<a href="http://www.duwenzhang.com/wenzhang/renshengzheli/">人生</a>之路，当走到生命之路的尽头时，便会发现，这爱温暖了我们一路，这爱丰富了我们一生。　　　　　　——题记</p><p><a href="http://www.duwenzhang.com/wenzhang/shenghuosuibi/shenghuoganwu/20130525/256388.html"><img alt="带着爱行走" src="http://www.duwenzhang.com/upimg/130525/1_180512.jpg" width="213" height="192"/></a>　　一位<a href="http://www.duwenzhang.com/huati/chenggong/index1.html">成功</a>的老先生，在他的七十岁寿宴上，郑重的向子女、亲友说出了他就藏心底的<a href="http://www.duwenzhang.com/huati/yuanwang/index1.html">愿望</a>：</p><p>　　“年轻时，一心只想往上爬、朝前冲，脑子里想的，只有成功、成就，对身边很多温馨的帮助，都无心注意，对师长、<a href="http://www.duwenzhang.com/huati/pengyou/index1.html">朋友</a>的关心，也没有<a href="http://www.duwenzhang.com/huati/shijian/index1.html">时间</a>回应，更谈不上珍惜，也不知道<a href="http://www.duwenzhang.com/huati/ganen/index1.html">感恩</a>，总觉得，若是被那些小情小爱绊住，岂不太没出息？男儿志在四方，眼光要远大……如今，生命快接近<a href="http://www.duwenzhang.com/huati/zhongdian/index1.html">终点</a>，蓦然回首，发现向前冲的过程中，<a href="http://www.duwenzhang.com/huati/shiqu/index1.html">失去</a>了好多、好多宝贵的<a href="http://www.duwenzhang.com/huati/zhenqing/index1.html">真情</a>、爱和关怀。</p><p>　　所以，我决定花一年时间，去拾回那些失落的爱，去寻找那些曾经在我生命中出现、对我有情、有恩的师长、同学和朋友，亲自向他们说一声‘谢谢’……”</p><p>　　可不是，在我们生命中，也曾出现过许多双友善的手，也曾接受过别人的帮助，也曾<a href="http://www.duwenzhang.com/huati/xiangshou/index1.html">享受</a>过<a href="http://www.duwenzhang.com/huati/youyi/index1.html">友谊</a>的温暖。可是，年轻的我们，总是想着如何通往成功，如何为自己的<a href="http://www.duwenzhang.com/huati/mengxiang/index1.html">梦想</a>拼搏。因此，总是会轻易忽略身边的那些关心与帮助，也总以为有<a href="http://www.duwenzhang.com/huati/meihao/index1.html">美好</a>的未来在等着我们，我们的眼睛总盯在不可知的远方，而忽略了、忘记了就在手中、就在身边的<a href="http://www.duwenzhang.com/huati/xingfu/index1.html">幸福</a>，就像一个急于赶路的人，无心欣赏身边的美景一样。</p><p>　　不知不觉中，我们失去了太多美好的事物，丢弃了太多宝贵的情谊，一味地向前冲。</p><p>　　直到有一天，我们老了，到了人生的黄昏时刻，再回过头查看自己的生命的行囊时，才赫然发现，里面竟是如此贫乏。</p><p>　　一位长者曾深沉的表示过：</p><p>　　“当一个人的生命接近结束时，在他们回首自己这一生的时候，那印象最深刻的，不是自己做了什么大<a href="http://www.duwenzhang.com/huati/shiye/index1.html">事业</a>，也不是自己赚了多少钱，<a href="http://www.duwenzhang.com/huati/yongyou/index1.html">拥有</a>什么好名声，而是自己曾经拥有过的爱有多少，自己爱过的人是谁，又有谁谁爱过自己。那才是生命中最真实。最有意义的。”</p><p>　　是啊，<a href="http://www.duwenzhang.com/huati/jinqian/index1.html">金钱</a>、权力、名望，都是浮云，过眼云烟，生不带来、死不带去，只有自己<a href="http://www.duwenzhang.com/huati/neixin/index1.html">内心</a>深处的<a href="http://www.duwenzhang.com/">情感</a>，是最真实的，是自己活过的证据。</p><p>　　我们都还年轻，都还在自己的人生的道路上行走着，身边，也有一些朋友，正友善的向我们伸出双手，无意间，我们也曾接受过朋友或陌生人的帮助……</p><p>　　用心感受一下，我们一定能感受来自身边温暖的关怀、温馨的爱，把爱装进生命的行囊，带着爱行走在我们的人生之路，当走到生命之路的尽头时，便会发现，这爱温暖了我们一路，这爱丰富了我们一生。这一遭没白走。</p><p><br/></p>','0','','1508487372','0','/home/Article/news/id/4');
 INSERT INTO `dz_news` VALUES ('5','有的时候——总有一个幸福的理由','有的时候——总有一个幸福的理由','1','总有一个幸福的理由','　有的时候，真的好想给自己放个假，去准备属于自己的一次旅行。就这样，抛开一切的烦恼，忘记一些不该留恋的人，没有任何目的的，静静地欣赏一路的风景。','兰兰','新华网','0','20171020\a86c582c4354a4e29691c12e6b51f0ea.gif','<p>有的时候，真的好想给自己放个假，去准备属于自己的一次旅行。就这样，抛开<a href="http://www.duwenzhang.com/huati/fannao/index1.html">一切的烦恼</a>，忘记一些不该留恋的人，没有任何目的的，静静地欣赏一路的风景。<br/>　　<br/>　　有的时候，在人来人往的街道上，忽然好想大哭一场，即使全世界都嘲笑我，只有自己知道，哭过了，才不会<a href="http://www.duwenzhang.com/huati/xintong/index1.html">那么心痛</a>。<br/>　　<br/>　　有的时候，<a href="http://www.duwenzhang.com/wenzhang/xinqingriji/">心情</a>会很失落，因为某些人，因为某些事，因为某些<a href="http://www.duwenzhang.com/huati/huiyi/index1.html">回忆</a>。<br/>　　<br/>　　有的时候，一个人沿着路灯，可以走的很慢很慢，走走停停，看着旁边的人匆忙地插肩而过，突然感到很茫然，连自己都不知道该何去何从。<br/>　　<br/>　　总有一个人，一直住在心底，却消失在<a href="http://www.duwenzhang.com/wenzhang/shenghuosuibi/">生活里</a>。<br/>　　<br/>　　有的时候，明知没有结局的<a href="http://www.duwenzhang.com/huati/ganqing/index1.html">一段感情</a>，却让自己活得那么累，爱得那么辛苦。真的<a href="http://www.duwenzhang.com/huati/ganjue/index1.html">感觉</a>，自己好傻，好傻。<br/>　　<br/>　　有的时候，会因为一个熟悉的背影，着急地穿越人海去寻找，走近了才发现，原来只是自己的一种幻觉。因为爱得太深，才会记得那么深刻。<br/>　　<br/>　　有的时候，好想大醉一场，用酒精来麻痹那些残留下来的伤痛。就这么闭着眼睛，就这么安静地沉睡过去…<br/>　　<br/>　　有的时候，连自己都会嘲笑自己，明明很想，却一直拼命地提醒自己，因为知道，不要连最后的那么<a href="http://www.duwenzhang.com/huati/zunyan/index1.html">一点尊严</a>都那么狼狈地被自己踩在脚下。<br/>　　<br/>　　<a href="http://www.duwenzhang.com/huati/chenmo/index1.html">沉默</a>是一个<a href="http://www.duwenzhang.com/huati/nvhai/index1.html">女孩</a>最大的哭声。<br/>　　<br/>　　有的时候，忘记了告诉自己，其实不是选择了就没有了退路，而是自己从来不尝试去走出自己限制的界线，忘记自己还有另外的选择。或许，登上下一站，会有另外一番别致的风景等着自己。<br/>　　<br/>　　有的时候，总是在逝去的感情徘徊，却没有懂得，<a href="http://www.duwenzhang.com/wenzhang/aiqingwenzhang/">爱情</a>是唯一，但爱人并不是唯一的。<br/>　　<br/>　　有的时候，说了再见，可能就再也见不到。一个转身，可能就是一辈子的陌路。<br/>　　<br/>　　有的时候，会因为一首歌，突然间，很想很想一些人。与爱情无关，只是<a href="http://www.duwenzhang.com/huati/xiguan/index1.html">一种习惯</a>。<br/>　　<br/>　　有的时候，需要懂得，有些人，只需埋藏在心底。有些记忆，需要用<a href="http://www.duwenzhang.com/huati/shijian/index1.html">时间</a>来<a href="http://www.duwenzhang.com/huati/yiwang/index1.html">遗忘</a>。有一种爱情，需要用<a href="http://www.duwenzhang.com/huati/yanlei/index1.html">眼泪</a>来祭奠。有一种<a href="http://www.duwenzhang.com/wenzhang/youqingwenzhang/">友情</a>，需要距离来衡量。<br/>　　<br/>　　有的时候，给自己<a href="http://www.duwenzhang.com/huati/weixiao/index1.html">一个微笑</a>，坦然接受生活给予自己的一切，不管悲或喜，坎坷或辛酸。<br/>　　<br/>　　有的时候，给自己一点掌声，当好别人的主角的同时，别忘了也是自己的观众。<br/>　　<br/>　　有的时候，追随别人的脚步 跑得太累的时候，给自己休息的一次机会。偶尔停下来看看，身后有更多因为追随你的脚步而感到疲倦的人。<br/>　　<br/>　　有的时候，要习惯一个人，一个人哭，一个人笑，生活的累，一个人扛，生活的苦，一个人承受，因为世界上没有谁永远把你当宝守护着。<br/>　　<br/>　　你，一个最重要的过客，之所以是过客，因为你未曾会为我停留。曾经在我<a href="http://www.duwenzhang.com/wenzhang/renshengzheli/">人生</a>中撒下欢乐的种子，之所以只是种子而不开花，因为你未曾为它浇水<br/>　　施肥。曾经划下我人生中的一根伤痕，之所以有伤痕，因为你未曾温柔地怜悯过。曾经给我一线的光明而瞬间带来全部的黑暗，之所以灰暗，因为你未曾想过为我照亮。<br/>　　<br/>　　有的时候，好好爱自己，因为连自己都不爱的人，如何爱别人？<br/>　　<br/>　　有的时候，应该懂得，<a href="http://www.duwenzhang.com/huati/shiqu/index1.html">失去</a>的东西，或许原本就不曾属于你的，是你的终究会回到你的身边，不是你的，不管你再<a href="http://www.duwenzhang.com/huati/nuli/index1.html">怎么努力</a>，终究不会回来。<br/>　　<br/>　　每个人，最初的那份爱是留给别人的，今后的却是留给自己。因为受过伤，才会懂得慢慢去保护自己。每段感情的开始，总是那么天真，总会以为找到很爱很爱的那个人，经历过了才明白，爱没那么简单，每个人都有自己的世界，兜兜转转，在各自的世界里，到最后，总是在读懂后转身选择了<a href="http://www.duwenzhang.com/huati/likai/index1.html">离开</a>，总是在落泪后，成为最熟悉的陌生人。<br/>　　<br/>　　<a href="http://www.duwenzhang.com/huati/xingfu/index1.html">幸福</a>不是演讲，并不是说说就可以了，而是脚踏实地，需要付诸行动去做出来的。不以结婚为前提的谈<a href="http://www.duwenzhang.com/huati/lianai/index1.html">恋爱</a>，都是耍流氓。在这感情混乱的年代，是感情太过<a href="http://www.duwenzhang.com/huati/cuiruo/index1.html">脆弱</a>，还是我们都不够坚定？每个人都该懂得，幸福不是别人给的，而是彼此用双手去创造的。<br/>　　<br/>　　即使再长久的伤口，随着时间的依旧会愈合，留下的伤疤是见证一段路的标记，用眼泪祭奠的爱情，撕心裂肺地痛哭过后，懂得学会释怀，要始终<a href="http://www.duwenzhang.com/huati/xiangxin/index1.html">相信</a>，总有一个值得自己幸福的理由……</p>','0','','1508487607','0','/home/Article/news/id/5');
 INSERT INTO `dz_news` VALUES ('6','踩踩踩踩踩踩踩踩踩踩踩踩踩','踩踩踩踩踩踩踩踩踩踩踩踩','1','踩踩踩踩踩踩踩踩踩踩踩踩踩','踩踩踩踩踩踩踩踩踩踩踩踩','','踩踩踩踩踩踩踩踩踩踩踩踩踩','0','','<p>踩踩踩踩踩踩踩踩踩踩踩踩踩踩踩踩踩踩踩<br/></p>','0','','1508487702','0','/home/Article/news/id/6');
 INSERT INTO `dz_news` VALUES ('7','向内走，寻找幸福','向内走，寻找幸福','2','向内走，寻找幸福','
　　美国作家梭罗说：“生命并不长，别再赶时间了”；','梭罗','梭罗','0','','<p>幸福是什么？一个身无分文的穷人说：有钱就幸福；一个忙忙碌碌的富人说：有闲就幸福；一个寒窗苦读的学子说：能放假就幸福；一个<a href="http://www.duwenzhang.com/huati/hunyin/index1.html">婚姻</a>破碎的<a href="http://www.duwenzhang.com/huati/nvren/index1.html">女人</a>说：能被爱就幸福；一个双腿截肢的残者说：能走路就幸福；一个双目失明的盲人说：能看见就幸福；…… 每个人对幸福的理解和感受都不一样，积极心理学把这种理解和感受称为“主观幸福感”。不管你是通过追求什么到达幸福，所有人在这种主观幸福感中都体验到了两种共同的情绪：<a href="http://www.duwenzhang.com/huati/kuaile/index1.html">快乐</a>和<a href="http://www.duwenzhang.com/huati/manzu/index1.html">满足</a>，并且这种快乐和满足不是稍纵即逝的，而是一种长久保持的并且持续对生活施加正面和积极影响的。幸福就是一种主观感受，是我们内心深处油然升起的一种深深的<a href="http://www.duwenzhang.com/huati/xiyue/index1.html">喜悦</a>感和满足感。</p><p>　　 很多人在达到了<a href="http://www.duwenzhang.com/huati/mubiao/index1.html">目标</a>后的确体验到了短暂的快乐和满足，此时的他们认为自己很幸福。但是好景不长，在这种<a href="http://www.duwenzhang.com/huati/ganjue/index1.html">感觉</a>随着时间渐渐逝去时，又重新跌入了焦虑和<a href="http://www.duwenzhang.com/huati/kongxu/index1.html">空虚</a>的深渊，于是便又开始设定下一个目标，进入新一轮的追逐。大部分人都是在这种情绪的起起伏伏中，通过不断地追求一个又一个目标来寻找着幸福。在他们心里都有一个“如果”定律：如果我很有钱，如果我成功了，如果我找到一个爱我的人……那我便会很幸福。</p><p>　　幸福似乎只有<a href="http://www.duwenzhang.com/huati/yikao/index1.html">依靠</a>这些外在的东西才能够生存，没有了这些依靠，幸福便只是那镜中花、水中月，遥望而不可及。于是，这部分人只有永远紧绷着神经、丝毫不敢松懈，在危机感的驱使下向着一个又一个目标不断地疲于奔命，他们以为只有这样才能牢牢地将这些外在事物、从而将幸福永远抓在手里。难道真是这样的么？那持久的幸福到底在哪里？事实上，所有这些人都犯了一个同样的错误：他们误以为幸福只能通过追求外在的东西才能得到，他们搞错了幸福的方向。</p><p>　　幸福永远只存在于我们内心最深处，只有向内走，问道于心灵，才能真正<a href="http://www.duwenzhang.com/huati/yongyou/index1.html">拥有</a>幸福。好消息是：事实上，幸福是我们每个人的本来面目，真正的你便是那永远的爱、喜悦和和平，充满着无限的智慧和无穷的创造力，人人生而就享有幸福，人人生而就拥有无限的潜能去创造自己的幸福，这些都不是别人赋予的，也不是别人能够抢走的，上天在我们出生之前就平等把幸福赐予了每一个人。在追求幸福的道路上，我们所要做的只不过是尽量还原我们的本来面目而已。</p><p>　　 
既然幸福不是依靠这些外在事物而存在，那我们是不是就不需要奋斗了呢？当然不是。追求幸福与追求成功并不矛盾，外在的成功往往是通往幸福生活的途经，或是幸福的表现形式。积极心理学研究表明：幸福和成功存在着强烈的相互关系。幸福的人群在生活的各个层面上都更容易获得成功，包括健康、收入、婚姻、家庭、事业、<a href="http://www.duwenzhang.com/huati/youyi/index1.html">友谊</a>及其他社交关系等。</p><p>　　不管是追求幸福也好，追求外在的成功也好，共同之处都是不可能在忽略心灵的基础上得到。人类的心灵就像一台放映机，外在世界只不过是它投射出来的影像，我们不可能在外在世界呈现出我们内心没有的东西。外在一切的关系（与健康、与<a href="http://www.duwenzhang.com/huati/jinqian/index1.html">金钱</a>、与家人、与事业、与<a href="http://www.duwenzhang.com/huati/pengyou/index1.html">朋友</a>……）都是我们内在与自我的关系的投射，只有向内理清了内在关系，我们才能向外在外部世界显化出这些关系的圆满。所以如果你想要幸福，你必须首先在心里体验到幸福，才能在外在显化出幸福；同理，你想要富裕的生活、成功的事业、幸福的家庭、健康的身体……你必须首先在心里真正拥有这些<a href="http://www.duwenzhang.com/huati/xinnian/index1.html">信念</a>，并且体验到它，你才能在你的外在得到你想要的一切。每个人的心灵都储藏着一切你能想象到的任何可能性，每个人的内在都拥有着无限的潜能，只要你<a href="http://www.duwenzhang.com/huati/xiangxin/index1.html">相信</a>，并愿意为之付诸<a href="http://www.duwenzhang.com/huati/nuli/index1.html">努力</a>，你就一定能得到你真心渴望的一切，包括幸福。不论你在追求什么，正确并且唯一的途径只能是由内而外的自然呈现。幸福的心灵是人生之树开花结果、枝繁叶茂的土壤，土壤肥沃，树木才能茁壮<a href="http://www.duwenzhang.com/wenzhang/shenghuosuibi/chengzhang/">成长</a>，若土壤贫瘠了，树木也无法壮大，并且最终将会慢慢枯萎。</p><p>　　 既然幸福就在我们每个人的心里，那为什么还有那么多人找不到它？通往幸福的道路上到底是什么在阻碍了我们？答案只有一个：那就是我们自己。我曾听过一则小<a href="http://www.duwenzhang.com/">故事</a>，非常耐人寻味：“一个早晨，一名牧师正在准备第二天的讲道词。太太出去买东西了，小儿子约翰哭着嚷着要去迪斯尼乐园。为了转移儿子的注意力，牧师将一幅色彩滨纷的世界地图撕成许多小碎片，对儿子说：‘小约翰，你如果能把这张地图拼起来，我就带你去迪斯尼乐园。’牧师以为这件事会使约翰花费大半个上午的时间，但不到十分钟，小约翰便拼好了。每一片碎纸片都整整齐齐地排列在一起，整张世界地图又恢复了原状。牧师很吃惊，问道：‘<a href="http://www.duwenzhang.com/huati/haizi/index1.html">孩子</a>，你怎么拼得这么快？’小约翰回答：‘很简单呀！地图的另一面是一个人的照片，我先把这个人的照片拼在一块，然后把它翻过来。我想，如果这个人对的，那么，这个世界也是对的。’</p><p>　　牧师忍不住笑了起来，决定马上带儿子去迪斯尼乐园，并谢谢儿子帮助他准备好了明天的讲道词：人对了，世界就对了。”阻碍我们获得幸福的只有我们自己。我们的人生模式受很多因素影响：<a href="http://www.duwenzhang.com/huati/xingge/index1.html">性格</a>特质、原生家庭、各种教育、外在环境、生活事件、家族系统等，所有这些因素都以两种形式影响着我们的一言一行：思想和情绪，我们的大脑就是被各种各样的念头和感觉不断塑造出来的。我们和家人的关系、和金钱的关系、和事业的关系、和健康的关系……最终都反映在与自我的关系中，如果你觉得哪个关系出了问题，那必定在你内在存在着由你的思维和情绪制造出来的障碍妨碍了你与它们的关系。成长就是不断往内清理自己的内心、突破思维和情绪的障碍，从而由内而外获得各种圆满的关系，最终收获幸福的过程。</p><p>　　 
如何突破障碍、寻找到幸福呢？答案很简单，却需要我们用一生的时间将这个简单的答案一点点付诸实践，那就是：觉察、觉察、再觉察；清理、清理、再清理。每时每刻都要记得往内觉察自己每一个起心动念、每一丝情绪感受，不断清理那些负面的情绪和认知，养成能够带来幸福的行为<a href="http://www.duwenzhang.com/huati/xiguan/index1.html">习惯</a>；将我们遇到的每一个困难和挑战、每一个帮助或<a href="http://www.duwenzhang.com/huati/shanghai/index1.html">伤害</a>自己的人都看作是上天赐予我们的礼物，他们都是来帮助我们更好的认识自己、突破障碍、获得成长的；满怀<a href="http://www.duwenzhang.com/huati/ganen/index1.html">感恩</a>心全然接受当下发生的一切，鼓足<a href="http://www.duwenzhang.com/huati/yongqi/index1.html">勇气</a>迎接人生的每一次挑战，每跨越一次障碍我们就离那个永远充满着深深的爱和喜悦、本就幸福的自己更近一步。心理学大师荣格说：“向外看的人，做着梦；向内看的人，醒着。”唯有向内走，不断突破自我编织的障碍，我们才能最终收获真正幸福的自己！</p><p><br/></p>','0','','1508487873','0','/home/Article/news/id/7');
 INSERT INTO `dz_news` VALUES ('8',' 	 	 长大只是儿时的梦想',' 	 	 长大只是儿时的梦想','1',' 	 	 长大只是儿时的梦想','','清明煮酒 ','新华网','1','20171020\c3707e0302924fc5a082748cb80a7e26.gif','<p>从小<a href="http://www.duwenzhang.com/huati/mengxiang/index1.html">梦想着</a>长大，然后做大人的事情，渐渐地我们成了大人，真的成了大人，经历大人所经历的一切。没有人会问疼不疼，累不累，所有人都把自己当成大人。长大，只是小时候的梦想；长大这个字眼，只是在小时候才会熠熠生辉.</p><p>　　 小时候，我们常常<a href="http://www.duwenzhang.com/huati/huanxiang/index1.html">幻想</a>：<br/>　　 要是想那些大人那样多好！<br/>　　 多<a href="http://www.duwenzhang.com/huati/ziyou/index1.html">自由</a>，想去哪去哪，想怎么花钱怎么花钱。<br/>　　 可以不用每天窝在幼儿班、学校，<br/>　　 让阿姨管着我们睡午觉，<br/>　　 让<a href="http://www.duwenzhang.com/huati/laoshi/index1.html">老师</a>管着我们上自习，</p><p>　　 小时候，我们常常幻想：<br/>　　 外面的世界是不是好精彩好精彩？<br/>　　 是不是长大了就可以买很多很多冰激凌？<br/>　　 是不是长大了<a href="http://www.duwenzhang.com/huati/yeye/index1.html">爷爷</a>就可以带我去很多好玩的地方？<br/>　　 是不是长大了<a href="http://www.duwenzhang.com/huati/muqin/index1.html">妈妈</a>就可以给我买好多好多的衣服？<br/>　　 是不是长大了<a href="http://www.duwenzhang.com/huati/fuqin/index1.html">爸爸</a>就会给我买更好的相机，照下那七彩斑斓的世界？</p><p>　　 小时候，我们常常幻想：<br/>　　 是不是长大了就会有个人牵起我们的手，和我们一起走到尽头？<br/>　　 是不是长大了就会有好多好多的<a href="http://www.duwenzhang.com/huati/pengyou/index1.html">好朋友</a>可以和我们一起玩红灯绿灯小白灯？<br/>　　 是不是长大了就会有好多好多的大大泡泡糖可以吃？<br/>　　 。。。</p><p>　　 如今，我们已经长大，<br/>　　 20年的<a href="http://www.duwenzhang.com/huati/shijian/index1.html">时间</a>足够我们<a href="http://www.duwenzhang.com/wenzhang/shenghuosuibi/chengzhang/">成长</a>。</p><p>　　 长大了的我们，不再有那种奢望，<br/>　　 长大了的我们，不再<a href="http://www.duwenzhang.com/huati/danchun/index1.html">那么单纯可爱</a>，<br/>　　 真的成了大人，经历大人所经历的一切。没有人会问疼不疼，累不累，所有人都把自己当成大人。</p><p>　　 长大了之后，我们才知道，原来那种有阿姨管着睡午觉的<a href="http://www.duwenzhang.com/wenzhang/shenghuosuibi/">生活</a>是多么的无忧无虑；<br/>　　 长大了之后，我们才知道，原来有老师看着上自习是多么<a href="http://www.duwenzhang.com/huati/xingfu/index1.html">幸福的事情</a>；<br/>　　 长大了之后，我们才知道，更多的冰激凌是要用钱来买的；<br/>　　 长大了之后，当我想要让爷爷带我出去玩的时候，爷爷却<a href="http://www.duwenzhang.com/huati/likai/index1.html">离开了</a>我去了更幸福的地方；<br/>　　 长大了之后，我们才知道，小时候那曾经的彩色世界，长大后却成了黑白相间的胶片。</p><p>　　 长大后，我们终于知道，那个可以手牵手一起走的人始终没有出现；<br/>　　 长大后，我们终于知道，好朋友都已经各奔东西、各奔前程；<br/>　　 长大后，我们终于知道，大大泡泡糖已经随着时间的流失，消失不见。</p><p>　　 长大了，我们终于理解，外面的世界很精彩，外面的世界<a href="http://www.duwenzhang.com/huati/wunai/index1.html">很无奈</a>；<br/>　　 长大了，我们终于理解，闯出一片自己的天空，有多么的难。</p><p>　　 如今，我们不再奢望，<br/>　　 我们只是想要<a href="http://www.duwenzhang.com/huati/pingdan/index1.html">平平淡淡</a>的小幸福；<br/>　　 我们只是想要平平淡淡的过生活；<br/>　　 我们只是想要个我们可以栖息的地方；<br/>　　 我们不在奢求那大大的世界。</p><p>　　 如今，为了那小小的<a href="http://www.duwenzhang.com/huati/yuanwang/index1.html">愿望</a>，我们付出了很多，<br/>　　 我们<a href="http://www.duwenzhang.com/huati/xiwang/index1.html">希望</a>，最后的结局可以很好、<a href="http://www.duwenzhang.com/huati/wanmei/index1.html">很完美</a>。</p><p>　　 时间，在改变着一个人，直到他面目全非。这也是成长的代价。小时候多么希望长大，可以不用大人管，可以穿自己<a href="http://www.duwenzhang.com/huati/xihuan/index1.html">喜欢</a>的衣服，留自己喜欢的头发，可以不用再听到：“小<a href="http://www.duwenzhang.com/huati/haizi/index1.html">孩子</a>，别管那么多。”可是长大了又有多好？爸爸妈妈很少管了，我却总觉得爸妈不爱我了。不知道自己喜欢什么样的发型，染染烫烫无数次。天冷加衣，生病喝水，这些都要自己来照顾，然后才明白，原来长大的第一件事就是<a href="http://www.duwenzhang.com/huati/jianqiang/index1.html">学会坚强</a>。但是这是多么难。我们会受<a href="http://www.duwenzhang.com/huati/shanghai/index1.html">伤害</a>，会伤害别人，最后每个人都会遍体鳞伤，然后会拒绝长大，但是已经晚了。<a href="http://www.duwenzhang.com/huati/xianshi/index1.html">现实</a>，不是让我们来改变的，不是让我们<a href="http://www.duwenzhang.com/huati/taobi/index1.html">逃避</a>的，更不是让我们咒骂的，而是让我们接受的，哪怕我们不情愿。</p><p><br/></p>','0','','1508488026','1','/home/Article/news/id/8');
 INSERT INTO `dz_news` VALUES ('24','','','1','','','','','0','','','0','','1508823811','1','/home/Article/news/id/24');
 INSERT INTO `dz_news` VALUES ('20','从v不那么，。','xc/','6','谢谢谢谢谢谢谢谢谢谢谢谢','吱吱吱吱吱吱吱吱','x信息','x喜喜喜喜喜喜喜喜','0','','<p>vvvvvvvvvvv<br/></p>','0','','1508813277','1','/home/Article/news/id/20');
 INSERT INTO `dz_news` VALUES ('22','反反复复','','1','','吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱吱','','','0','','','0','','1508813534','0','/home/Article/news/id/22');
 INSERT INTO `dz_news` VALUES ('29','','','1','','','','','0','','','0','','1508824156','0','/home/Article/news/id/29');
 INSERT INTO `dz_news` VALUES ('30','','','1','','','','','0','','','0','','1508824162','0','/home/Article/news/id/30');
 INSERT INTO `dz_news` VALUES ('31','','','2','','','','','0','','','0','','1508841350','0','/home/Article/news/id/31');

-- ----------------------------
-- Records of `dz_nav`
-- ----------------------------
 INSERT INTO `dz_nav` VALUES ('22','权限管理5','jurisdiction','61','','0','1','0','','bhbj');
 INSERT INTO `dz_nav` VALUES ('23','权限管理1','jurisdiction','60','','0','1','0','','scvfv');
 INSERT INTO `dz_nav` VALUES ('24','权限管理2','jurisdiction','23','','1','0','0','','fvdv');
 INSERT INTO `dz_nav` VALUES ('25','权限管理3','jurisdiction','0','','1','0','0','','vfvf');
 INSERT INTO `dz_nav` VALUES ('26','姓名管理','name','27','','1','0','0','','vfv');
 INSERT INTO `dz_nav` VALUES ('27','权限管理5','jurisdiction','0','','1','0','0','','f');
 INSERT INTO `dz_nav` VALUES ('45','权限管理3','jurisdictionp','0','','0','0','1','','bfbffb');
 INSERT INTO `dz_nav` VALUES ('56','院长信息','院长信息','0','1508751839','1','0','','','bfbfb');
 INSERT INTO `dz_nav` VALUES ('66','烦烦烦','反反复复','0','1508848060','1','0','','','');
 INSERT INTO `dz_nav` VALUES ('54','联系我们','联系我们','0','1508746381','1','0','','','fb');
 INSERT INTO `dz_nav` VALUES ('55','顶顶顶顶顶','d喜喜喜喜喜喜喜喜','53','1508746559','0','0','','','fb');
 INSERT INTO `dz_nav` VALUES ('57','首页','首页首页首页首页首页','0','1508751938','1','0','','','ffv');
 INSERT INTO `dz_nav` VALUES ('58','自定义标签','自定义标签','0','1508751962','0','0','','','fvf');
 INSERT INTO `dz_nav` VALUES ('59','嘎嘎嘎','灌灌灌灌灌','56','1508752116','1','0','','','vfb');
 INSERT INTO `dz_nav` VALUES ('60','下的法国红酒','的法国红酒看来','0','1508752160','0','0','','','fb');
 INSERT INTO `dz_nav` VALUES ('65','fff','fffff','0','1508842946','1','0','','','');
 INSERT INTO `dz_nav` VALUES ('62','哈哈哈','哈哈哈','62','1508752316','0','0','','','fb');
 INSERT INTO `dz_nav` VALUES ('63','你好','你好你好','58','1508754442','1','1','','','fb');
 INSERT INTO `dz_nav` VALUES ('64','fffff','ffffffffffff','54','1508756644','0','1','','','fb1fb11');

-- ----------------------------
-- Records of `dz_frontuser`
-- ----------------------------
 INSERT INTO `dz_frontuser` VALUES ('66','202cb962ac59075b964b07152d234b70','赵隆宇','0','20171024\efd0edd17b61daf4b0affe735f8c4a68.gif','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','1','0','123456789@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('68','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','1','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('69','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','1','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('71','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('72','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('73','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('75','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('77','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('79','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','0','123@qq.com','12212221122');
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
 INSERT INTO `dz_frontuser` VALUES ('182','202cb962ac59075b964b07152d234b70','赵日天','1','20170925\4f7f2554ffefa273b1f927c348854ecf.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12334333332');
 INSERT INTO `dz_frontuser` VALUES ('183','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('184','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('185','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('186','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('187','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('188','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');
 INSERT INTO `dz_frontuser` VALUES ('189','202cb962ac59075b964b07152d234b70','赵隆宇','1','20170925\443aa74d04dbbf51f5e1e1b4a0a9bed6.jpg','2017-09-25','1899-12-29 00:00:00','0','1','山东省临沂市','127.0.0.1','0','0','1','123@qq.com','12212221122');

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
