<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:37:"./templates/Sofamall/productlist.html";i:1509702222;s:32:"./templates/Sofamall/header.html";i:1509702216;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>dzcms企业模板模型</title>
    ﻿<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="format-detection" content="telephone=no">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="alternate icon" type="image/png" href="images/favicon.png">
<link rel='icon' href='favicon.ico' type='image/x-ico' />
<meta name="description" content="" />
<meta name="keywords" content="" />
<link rel="stylesheet" href="/templates/Sofamall/css/default.min.css?t=227" />
<!--[if (gte IE 9)|!(IE)]><!-->
<script type="text/javascript" src="/templates/Sofamall/lib/jquery/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="lib/amazeui/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script type="text/javascript" src="/templates/Sofamall/lib/handlebars/handlebars.min.js"></script>
<script type="text/javascript" src="/templates/Sofamall/lib/iscroll/iscroll-probe.js"></script>
<script type="text/javascript" src="/templates/Sofamall/lib/amazeui/amazeui.min.js"></script>
<script type="text/javascript" src="/templates/Sofamall/lib/raty/jquery.raty.js"></script>
<script type="text/javascript" src="/templates/Sofamall/js/main.min.js?t=1"></script>
</head>
<body>

<header>
    <div class="header-top">
        <div class="width-center">
            <div class="header-logo "><img src="/templates/Sofamall/images/logo.png" alt=""></div>
            <div class="header-title div-inline">
                <strong>大智家具设计公司</strong>
                <span>www.linyiit.cn</span>
            </div>

            <div class="search-box div-inline">
                <div class="input-box"><input type="text" name="" placeholder="             请输入关键字"></div>
                <div class="search-botton"></div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <button class="am-show-sm-only am-collapsed font f-btn" data-am-collapse="{target: '.header-nav'}">Menu <i
                class="am-icon-bars"></i></button>
        <nav>
        <ul class="header-nav-ul am-collapse am-in">
      
        <?php $taginfo = db("category")->field('catename as title,url,id,letter,inputtime,parentid,image,description')->where("1=1 and ismenu=2 and isdel=0 and parentid=0")->order('id asc')->limit('7')->select(); foreach($taginfo as $vo):?>
              <li><a href="<?php echo $vo['url']; ?>" name="index"><?php echo $vo['title']; ?></a></li> 
        <?php endforeach; ?>
           <!--  <li>
            <a href="/templates/Sofamall/contact.html" name="message">联系我们</a>
                <div class="secondary-menu">
            <li><a href="/templates/Sofamall/about.html" name="about">关于我们</a></li>
            <li><a href="/templates/Sofamall/productlist.html" name="show">案例展示</a></li>
            <li><a href="/templates/Sofamall/article_list.html" name="new">
                    <ul><li><a href="message.html" class="message"></a></li></ul>
                </div>
            </li> -->
        </ul>




        </nav>
    </div>

</header>
<div class="am-slider am-slider-default" data-am-flexslider="{playAfterPaused: 8000}">
    <ul class="am-slides">
        <li><img src="/templates/Sofamall/images/banner.jpg" alt="" ></li>
        <li><img src="/templates/Sofamall/images/banner.jpg" alt="" ></li>
        <li><img src="/templates/Sofamall/images/banner.jpg" alt="" ></li>
        <li><img src="/templates/Sofamall/images/banner.jpg" alt="" ></li>
    </ul>
</div>
<section class="pro-list">
    <aside class="pro-leftsidebar">
        <ul>
            <li>
                <a>产品搜索</a>
                <ul id="pro-search">
                    <li><a><input type="text"  class="pro-search"><a class="pro-search-btn">搜索</a></a></li>
                </ul>
            </li>
            <li>
                <a>产品分类</a>
                <ul id="pro-category">
              

        <?php $taginfo = db("category")->field('catename as title,url,id,letter,inputtime,parentid,image,description')->where("1=1 and ismenu=2 and isdel=0 and parentid=2")->order('id asc')->limit('7')->select(); foreach($taginfo as $vo):?>
              <li><a href="<?php echo $vo['url']; ?>" name="index"><?php echo $vo['title']; ?></a></li> 
        <?php endforeach; ?>
                </ul>
            </li>
        </ul>
    </aside>

    <aside class="pro-rightsidebar">
        <header>

                    <p></p>
            <span>椅子系列</span>
        </header>
        <ul>
            
        <?php $childidarr=db('category')->field('id')->where('parentid='.$cateid)->select();$childid=''; if($childidarr):  foreach($childidarr as $k=>$v):      $childid .= $childidarr[$k]['id'].',';  endforeach;  $childid = substr($childid,0,-1);else:$childid=$cateid;endif;$countinfo = db('news')->where('1=1 and cateid in ('.$childid.')')->count();$countinfo = $countinfo ? $countinfo :1 ;$row = 5;$countpage = ceil($countinfo/$row);$pagestr =  ''; $pagestr .= "<ul style='list-style: none;clear:both;height: auto;overflow: hidden;'>";for($i = 1 ; $i <= $countpage ; $i++){   if($countpage == 1) break;   if($pages == $i){ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;font-weight: bold' href='###'>$i</a></li>";   }else{ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;' href='?cateid=$cateid&page=$i'>$i</a></li>";   }}$pagestr .= "</ul>";  $taginfo=db('news')->alias('a')->field('b.catename,b.url as cateurl,a.*')->join('category b','a.cateid=b.id')->where("cateid in (".$childid.") and 1=1")->order('id asc')->limit(($pages-1)*$row,$row)->select();$page=$pagestr;if($taginfo):   foreach($taginfo as $vo): ?>
          <li >
                <a href="/templates/Sofamall/productdetails.html">
                <div class="img-box">
                    <img src="../../../../public/Uploads/<?php echo $vo['smallimage']; ?>
">
                    <p>软皮椅</p>
                </div>
                </a>
            </li>
            <?php    endforeach;else: endif; ?>
        </ul>
        <div class="pro_list_more_pages">  
<?php echo $pages; ?>
        </div>
    </aside>

</section>

﻿<footer>
    <div>
        <div class="footer-info">
            <div class="footer-content">
                <img src="/templates/Sofamall/images/qccode.png" alt="">
               <div>
                <p>招商热线:0714-8868331</p>
                <div class="footer-box">
                    <i class="icon-tel"></i>
                    <span>公司电话:</span>
                    <span>0714-8868331</span>
                </div>
                <div class="footer-box">
                    <i class="icon-email"></i>
                    <span>公司邮箱:</span>
                    <span>123@dayeyunalading.com</span>
                </div>
                <div class="footer-box">
                    <i class="icon-address"></i>
                    <span>公司地址:</span>
                    <span>湖北省XXX市XXX大道小区B栋201</span>
                </div>
               </div>
            </div>
        </div>
        <style>
        .footer-bottom a{color:#F1404B}
        </style>
        <div class="footer-bottom"><div style="text-align:center;color:#fff;line-height:100px;"><span><a href="http://www.haothemes.com/" target="_blank" title="好主题">好主题</a>提供 - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></span></div></div>
    </div>
</footer>
</body>
</html>