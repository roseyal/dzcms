<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:28:"./templates/dianzi/news.html";i:1509694031;s:28:"./templates/dianzi/head.html";i:1508934473;s:30:"./templates/dianzi/header.html";i:1509006371;s:30:"./templates/dianzi/footer.html";i:1509694457;}*/ ?>
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
<div class="banner_s"><img src="../../templates/dianzi/Assets/upload/banner_a.jpg" alt=""/></div>
<div class="pst_bg">
	<div class="pst">
    	您当前的位置：
        <a href="">新闻活动</a>>
        <a href="">公司活动</a>
    </div>
</div>
<div class="scd clearfix">
	<div class="scd_l">
    	<div class="s_name">
        	<img src="../../templates/dianzi/Assets/images/t6.png" width="138" height="48" alt=""/>
            <i>&nbsp;</i>
        </div>
        <ul class="s_nav">
        	<li class="now"><a href="">公司活动</a></li>
            <!--<li><a href="">行业新闻</a></li>-->
        </ul>
    </div>
    <div class="scd_r">
    	<div class="r_name"><span>公司活动</span></div>
        <div class="news">
            <?php $childidarr=db('category')->field('id')->where('parentid='.$cateid)->select();$childid=''; if($childidarr):  foreach($childidarr as $k=>$v):      $childid .= $childidarr[$k]['id'].',';  endforeach;  $childid = substr($childid,0,-1);else:$childid=$cateid;endif;$countinfo = db('news')->where('1=1 and cateid in ('.$childid.')')->count();$countinfo = $countinfo ? $countinfo :1 ;$row = 5;$countpage = ceil($countinfo/$row);$pagestr =  ''; $pagestr .= "<ul style='list-style: none;clear:both;height: auto;overflow: hidden;'>";for($i = 1 ; $i <= $countpage ; $i++){   if($countpage == 1) break;   if($pages == $i){ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;font-weight: bold' href='###'>$i</a></li>";   }else{ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;' href='?cateid=$cateid&page=$i'>$i</a></li>";   }}$pagestr .= "</ul>";  $taginfo=db('news')->alias('a')->field('b.catename,b.url as cateurl,a.*')->join('category b','a.cateid=b.id')->where("cateid in (".$childid.") and 1=1")->order('id desc')->limit(($pages-1)*$row,$row)->select();$page=$pagestr;if($taginfo):   foreach($taginfo as $vo): ?>
        	<dl class="clearfix">
                <dt><a href="<?php echo $vo['url']; ?>"><img src="/../../public/Uploads/<?php echo $vo['smallimage']; ?>" alt=""/></a></dt>
                <dd>
                    <div class="title">
                        <a href="<?php echo $vo['url']; ?>">
                            <p><?php echo $vo['title']; ?></p>
                            <em><?php echo date("Y-m-d",$vo['inputtime']); ?></em>
                        </a>
                    </div>
                    <div class="des"><?php echo $vo['abstract']; ?></div>
                    <a href="<?php echo $vo['url']; ?>" class="more">+ 查看详情</a>
                </dd>
            </dl>
            <?php    endforeach;else: endif; ?>
            <div class="space_hx">&nbsp;</div>
            <div class="pages">
                <?php echo $page; ?>
            </div>
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
