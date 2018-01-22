<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:27:"templates/dianzi/index.html";i:1509694166;s:28:"./templates/dianzi/head.html";i:1508934473;s:30:"./templates/dianzi/header.html";i:1509006371;s:30:"./templates/dianzi/footer.html";i:1509694457;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no" />
    <title>大智电子有限公司</title>
    <link rel="stylesheet" type="text/css" href="/templates/dianzi/Assets/css/reset.css"/>
    <script type="text/javascript" src="/templates/dianzi/Assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/templates/dianzi/Assets/js/js_z.js"></script>
    <link rel="stylesheet" type="text/css" href="/templates/dianzi/Assets/css/thems.css">
    <link rel="stylesheet" type="text/css" href="/templates/dianzi/Assets/css/responsive.css">

<script type="text/javascript" src="/templates/dianzi/Assets/js/banner.js"></script>
<script language="javascript">
$(function(){
	$('#owl-demo').owlCarousel({
		items: 1,
		navigation: true,
		navigationText: ["上一个","下一个"],
		autoPlay: true,
		stopOnHover: true
	}).hover(function(){
		$('.owl-buttons').show();
	}, function(){
		$('.owl-buttons').hide();
	});
});
</script>
</head>

<body>
<!--头部-->
<div class="header">
    <div class="t_bg">
    <div class="top">
        <div class="lang">
            <a href="" class="on">中 文</a>|
            <a href="">English</a>
        </div>
        <div class="search">
            <input name="" type="text" placeholder="请输入关键字">
            <input name="" type="submit" value="">
        </div>
    </div>
</div>
<div class="head clearfix">
    <div class="logo"><a href=""><img src="/templates/dianzi/Assets/images/logo.png" alt="xxx电子有限公司"/></a></div>
    <div class="nav_m">
        <div class="n_icon">导航栏</div>
        <ul class="nav clearfix">
            <li class=""><a href="/">首页</a></li>
            <?php $taginfo = db("category")->field('catename as title,url,id,letter,inputtime,parentid,image,description')->where("1=1 and ismenu=2 and isdel=0 and parentid=0")->order('id asc')->limit('6')->select(); foreach($taginfo as $v):?>
            <li class=""><a href="<?php echo $v['url']; ?>"><?php echo $v['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

</div>
<!--头部-->
<!--幻灯片-->
<div id="banner" class="banner"> 
    <div id="owl-demo" class="owl-carousel">
        <?php $taginfo=db('banner')->field('photo')->where("static=1 and 1=1")->order('id asc')->limit(3)->select();  foreach($taginfo as $vo):?>
        <a class="item" target="_blank" href="" style="background-image:url(Assets/upload/banner.jpg)">
            <img src="../../public/Uploads/<?php echo $vo['photo']; ?>" alt="">
        </a>
        <?php endforeach; ?>
    </div>
</div>
<!--幻灯片-->
<div class="space_hx">&nbsp;</div>
<div class="i_m">
	<div class="i_name"><img src="/templates/dianzi/Assets/images/n1.png" width="171" height="59" alt=""/></div>
<!--应用领域-->
    <ul class="i_ma clearfix">
        <?php  $taginfo=db('news')->field('title,smallimage,abstract,cateid,url')->where("1=1 and cateid in (8)")->order('id desc')->limit(0,3)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
    	<li>
        	<div class="title">
            	<img src="/templates/dianzi/Assets/images/icon3.jpg" alt=""/>
                <span><?php echo $vo['title']; ?></span>
            </div>
            <div class="tu"><a href="<?php echo $vo['url']; ?>"><img src="../../public/Uploads/<?php echo $vo['smallimage']; ?>" alt=""/></a></div>
            <div class="des"><?php echo $vo['abstract']; ?></div>
			<a href="<?php echo $vo['url']; ?>" class="more">+查看详情</a>
        </li>
        <?php endforeach; ?>
    </ul>
    <!--应用领域-->
</div>
<div class="space_hx">&nbsp;</div>
<div class="hui_bg">
	<div class="i_m clearfix">
    	<div class="i_ml">
            <!--新闻与活动-->
        	<div class="i_title">
            	<a href=""><img src="/templates/dianzi/Assets/images/n2.jpg" width="139" height="22" alt=""/></a>
                <div class="line">&nbsp;</div>
                <a href="/home/Article/newslist/cateid/5" class="more">+MORE</a>
            </div>
            <div class="i_mb">
                <?php $taginfo=db('news')->field('title,shorttitle,cateid,smallimage,abstract,inputtime,url')->where("1=1 and cateid in (7)")->order('looknum desc')->limit(0,3)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
            	<dl class="clearfix">
                	<dt><a href="<?php echo $vo['url']; ?>"><img src="../../public/Uploads/<?php echo $vo['smallimage']; ?>" alt="大智电子有限公司"/></a></dt>
                    <dd>
                    	<div class="title"><a href="<?php echo $vo['url']; ?>"><?php echo $vo['shorttitle']; ?></a></div>
                        <div class="des"><?php echo $vo['abstract']; ?></div>
                        <div class="time">
                        	<a href="<?php echo $vo['url']; ?>">+SEE MORE</a>
                            <?php echo date("Y-m-d",$vo['inputtime']); ?>
                        </div>
                    </dd>
                </dl>
                <?php endforeach; ?>
            </div>
            <!--新闻与活动-->
        </div>
        <div class="i_mr">
            <!--推荐产品-->
        	<div class="i_title">
            	<a href=""><img src="/templates/dianzi/Assets/images/n3.jpg" width="168" height="22" alt=""/></a>
                <div class="line">&nbsp;</div>
                <a href="/home/Article/newslist/cateid/2" class="more">+MORE</a>
            </div>
            <dl class="i_mc clearfix">
            	<dt><a href=""><img src="/templates/dianzi/Assets/upload/pic5.jpg" alt=""/></a></dt>
                <dd>

                	<ul>
                        <?php  $taginfo=db('news')->field('title,abstract,cateid,smallimage,url')->where("1=1 and cateid in (10)")->order('id desc')->limit(0,4)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
                    	<li class="on">
                        	<i>&nbsp;</i>
                        	<div class="title"><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></div>
                            <div class="des"><?php echo $vo['abstract']; ?></div>
                            <img src="../../public/Uploads/<?php echo $vo['smallimage']; ?>" alt=""/>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </dd>
            </dl>
            <!--推荐产品-->
            <div class="space_hx">&nbsp;</div>
            <!--人力资源-->
            <div class="i_title">
            	<a href=""><img src="../../templates/dianzi/Assets/images/n4.jpg" width="151" height="22" alt=""/></a>
                <div class="line">&nbsp;</div>
                <a href="/home/Article/catecontent/cateid/4" class="more">+MORE</a>
            </div>
            <dl class="i_md clearfix">
                <?php  $taginfo=db('news')->field('abstract,cateid,smallimage,url')->where("1=1 and cateid in (9)")->order('id desc')->limit(0,1)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
            	<dt><a href="<?php echo $vo['url']; ?>"><img src="../../public/Uploads/<?php echo $vo['smallimage']; ?>" alt=""/></a></dt>
                <dd><?php echo $vo['abstract']; ?></dd>
                <?php endforeach; ?>
            </dl>
            <!--人力资源-->
        </div>
    </div>
</div>
<div class="fn_bg">
    <div class="fn_m clearfix">
        <ul class="code clearfix">
            <li>
                <b>关注大智电子公司</b>
                <img src="/templates/dianzi/Assets/upload/code1.jpg" alt=""/>
                <p>扫描大智电子有限公司，查看最新产品、资讯与动态。</p>
            </li>
            <li>
                <b>电子买卖信息</b>
                <img src="/templates/dianzi/Assets/upload/code2.jpg" alt=""/>
                <p>扫一扫查看行业库存买卖信息</p>
            </li>
        </ul>
        <ul class="f_nav clearfix">
            <li>
                <b>关于大智</b>
                <p><a href="/home/Article/catecontent/cateid/1">公司简介</a></p>
                <b>联系我们</b>
                <p><a href="/home/Article/catecontent/cateid/6">联系我们</a></p>
            </li>
            <li>
                <b>代理产品</b>
                <p><a href="/home/Article/newslist/cateid/2">推荐产品</a></p>
                <b>合作伙伴</b>
                <p><a href="/home/Article/newslist/cateid/3">主要客户</a></p>
            </li>
            <li>
                <b>人力资源</b>
                <p><a href="/home/Article/catecontent/cateid/4">人才招聘</a></p>
                <b>新闻与活动</b>
                <p><a href="/home/Article/newslist/cateid/5">公司活动</a></p>
            </li>
        </ul>
        <div class="f_ct clearfix">
            <ul>
                <li class="clearfix">
                    <img src="/templates/dianzi/Assets/images/icon7.png" alt=""/>
                    <span>深圳地址： 深圳市深南大道xxxx号喜年中心xx楼</span>
                </li>
                <li class="clearfix">
                    <img src="/templates/dianzi/Assets/images/icon8.png" alt=""/>
                    <span>邮箱：<a href="mailto:roadwell@xxxxx-well.com">roadwell@xxxxx-well.com</a></span>
                </li>
                <li class="clearfix">
                    <img src="/templates/dianzi/Assets/images/icon9.png" alt=""/>
                    <span>电话：<a href="tel:075583479990">86-0755-00000000</a></span>
                </li>
            </ul>
            <ul>
                <li class="clearfix">
                    <img src="/templates/dianzi/Assets/images/icon7.png" alt=""/>
                    <span>香港地址： 香港九龙观塘鸿图道x号建业中心xx楼</span>
                </li>
                <li class="clearfix">
                    <img src="/templates/dianzi/Assets/images/icon8.png" alt=""/>
                    <span>邮箱：<a href="mailto:office@xxxxx.com.hk">office@xxxxx.com.hk</a></span>
                </li>
                <li class="clearfix">
                    <img src="/templates/dianzi/Assets/images/icon9.png" alt=""/>
                    <span>电话：<a href="tel:00852-00000000">00852-00000000</a></span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="f_bg">
    <div class="foot">
        <span>版权所有©临沂大智电子股份有限公司</span><span>Copyright © 2017-2027 All Rights Reserved</span><span>地址：临沂市经济技术开发区沃尔沃路55号</span>
    </div>
</div>
</body>
</html>
