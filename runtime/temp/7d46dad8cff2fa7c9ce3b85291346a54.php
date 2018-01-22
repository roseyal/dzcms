<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:30:"templates/newsstyle/index.html";i:1510621063;}*/ ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<title>大智科技</title>
<link rel="stylesheet" type="text/css" href="/templates/newsstyle/Assets/css/reset.css"/>
<script type="text/javascript" src="/templates/newsstyle/Assets/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/templates/newsstyle/Assets/js/js_z.js"></script>
<script type="text/javascript" src="/templates/newsstyle/Assets/js/banner.js"></script>
<link rel="stylesheet" type="text/css" href="/templates/newsstyle/Assets/css/thems.css">
<link rel="stylesheet" type="text/css" href="/templates/newsstyle/Assets/css/responsive.css">
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
    <div class="head clearfix">
        <div class="logo"><a href=""><h1>大智科技</h1></a></div>
        <div class="nav_m">
            <div class="n_icon">导航栏</div>
            <ul class="nav clearfix"> 
			 <li><a href="/">首页</a></li>
            <?php $taginfo = db("category")->field('catename as title,url,id,letter,inputtime,parentid,image,description')->where("1=1 and ismenu=2 and isdel=0 and parentid=0")->order('id asc')->limit('5')->select(); foreach($taginfo as $vo):?>
            <li><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
            <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<!--头部-->
<!--幻灯片-->
<div id="banner" class="banner"> 
    <div id="owl-demo" class="owl-carousel">
        <?php $taginfo=db('banner')->field('*')->where("static=1 and 1=1")->order('id asc')->limit(3)->select();  foreach($taginfo as $vo):?>
            <a class="item" target="_blank" href="" style="background-image:url(/templates/newsstyle/Assets/upload/banner.jpg)">
            <img src="/public/Uploads/<?php echo $vo['photo']; ?>" alt="">
        </a>
        <?php endforeach; ?> 
    </div>
</div>
<!--幻灯片-->
<div class="space_hx">&nbsp;</div>
<div class="i_line"><em>&nbsp;</em></div>
<div class="space_hx">&nbsp;</div>
<ul class="i_ma clearfix">
    <?php $taginfo=db('news')->field('*')->where("1=1")->order('looknum desc')->limit(0,4)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
        <li>
        <a href="">
            <img src="/templates/newsstyle/Assets/upload/pic1.jpg" alt=""/>
        </a>
        <div class="title">
            <a href=""><em>01.</em><?php echo $vo['title']; ?></a>
        </div>
        <div class="des"><?php echo $vo['abstract']; ?></div>
        <div class="more"><a href="">MORE</a></div>
    </li>
    <?php endforeach; ?>
	
</ul>
<div class="space_hx">&nbsp;</div>
<div class="bg_a">
	<ul class="f_nav clearfix">
    	<li>
        	<div class="name"><b>技术支持</b></div>
            <p><a href="">常见问题</a></p>
            <p><a href="">售后&维修</a></p>
            <p><a href="">下载</a></p>
        </li>
        <li>
        	<div class="name"><b>关于安行飞控</b></div>
            <p><a href="">了解安行飞控</a></p>
            <p><a href="">加入我们</a></p>
            <p><a href="">联系我们</a></p>
        </li>
        <li class="f_ct">
        	<div class="name"><b>联系方式<i>&nbsp;</i></b></div>
            <p>
            	<a href="mailto:361467347@qq.com">
                	<img src="/templates/newsstyle/Assets/images/icon6.png" alt=""/>
                    <span>邮箱:361467347@qq.com</span>
                </a>
            </p>
            <p>
            	<a href="tel:86008512">
                	<img src="/templates/newsstyle/Assets/images/icon5.png" alt=""/>
                    <span>电话:0755-86008512</span>
                </a>
            </p>
            <p class="share">
            	<a href=""><img src="/templates/newsstyle/Assets/images/f1.png" alt=""/></a>
                <a href=""><img src="/templates/newsstyle/Assets/images/f2.png" alt=""/></a>
                <a href=""><img src="/templates/newsstyle/Assets/images/f3.png" alt=""/></a>
                <a href=""><img src="/templates/newsstyle/Assets/images/f4.png" alt=""/></a>
            </p>
        </li>
        <li class="dz">
        	<div class="name"><b>我们的地址</b></div>
            <p>深圳市安行飞控科技有限公司<br/>
Shenzhen angyo Flight Control Technology Co. Ltd.</p>
			<p>深圳市南山区西丽街道茶光路1063号C座301-302室</p>
            <p>
            	TEL：0755-86008512
                <a href="" class="map">网站地图</a>
            </p>
            <div class="f_s">
            	<input name="" type="text">
                <input name="" type="submit" value="搜索">
            </div>
        </li>
    </ul>
</div>
<div class="f_bg">
	<div class="bq clearfix">
    	<div class="bq_l">
            <?php $taginfo=db('friendlink')->where('photo is null')->order('id asc')->limit('5')->select();$page=' '; foreach($taginfo as $vo): ?>
            <a href="<?php echo $vo['url']; ?>"><?php echo $vo['webname']; ?></a> |
            <?php endforeach; ?>
        </div>
        <div class="bq_r">©版权所有INFINOVA 更多模板：<a href="http://www.mycodes.net/" target="_blank">源码之家</a> </div>
    </div>
</div>
</body>
</html>
