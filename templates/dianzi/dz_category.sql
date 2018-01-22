# Host: localhost  (Version: 5.5.53)
# Date: 2017-11-03 15:41:13
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

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
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=utf8;

#
# Data for table "dz_category"
#

/*!40000 ALTER TABLE `dz_category` DISABLE KEYS */;
INSERT INTO `dz_category` VALUES (1,'about.html','about.html','about.html','关于我们','这是导航栏的关于我们','desk367751020042101.jpg',0,0,'','/home/Article/catecontent/cateid/1',2,'guanyuwomen',0,0,1508760068),(2,'product.html','product.html','content.html','代理产品','这是导航栏的代理产品','index6.jpg',0,0,'','/home/Article/newslist/cateid/2',2,'dailichanpin',0,0,1508804828),(3,'friend.html','friend.html','content.html','合作伙伴','这是导航栏的合作伙伴','index7.jpg',0,0,'','/home/Article/newslist/cateid/3',2,'hezuohuoban',0,0,1508805300),(4,'join.html','join.html','join.html','人力资源','这是导航栏的人力资源','u=4133505029,3678432436&fm=27&gp=0.jpg',0,0,'','/home/Article/catecontent/cateid/4',2,'daohangrenliziyuan',0,0,1508807322),(5,'news.html','news.html','content.html','新闻活动','这是导航栏的新闻活动','index.jpg',0,0,'','/home/Article/newslist/cateid/5',2,'hangneixinwen',0,0,1508755885),(6,'contact.html','contact.html','contact.html','联系我们','这是导航栏的联系我们','u=4133505029,3678432436&fm=27&gp=0.jpg',0,0,'','/home/Article/catecontent/cateid/6',2,'daohanglanlianxiwomen',0,0,1508848844),(7,'news.html','news.html','content.html','新闻列表','这是首页的新闻列表模块','55e26b19246d9092.jpg!200x200.jpg',0,0,'','',3,'xinwenliebiao',0,0,1508741972),(8,'index.html','index.html','content.html','应用领域','这是首页的应用领域模块','index1.jpg',0,0,'','',3,'yingyonglingyu',0,0,1508761818),(9,'index.html','join.html','content.html','人力资源','这是首页的人力资源模块','index4.jpg',0,0,'','',3,'renliziyuan',0,0,1508762941),(10,'index.html','product.html','content.html','推荐产品','这是首页的推荐产品模块','index5.jpg',0,0,'','',3,'tuijianchanpin',0,0,1508804076),(11,'index.html','contact.html','','大智分公司','这是大智的分公司','pic10.jpg',0,0,'','',3,'dazhifengongsi',0,0,1508912403);
/*!40000 ALTER TABLE `dz_category` ENABLE KEYS */;
