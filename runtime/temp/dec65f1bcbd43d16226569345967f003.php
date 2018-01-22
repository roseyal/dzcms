<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:29:"templates/Sofamall/index.html";i:1510112696;s:32:"./templates/Sofamall/header.html";i:1509702216;}*/ ?>
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

<section class="index-section">
    <div>
        <span></span>
        <span></span>
    </div>
    <div class="index-content">
        <section class="index-content-section-first"><div><img src="/templates/Sofamall/images/sectionbanner.png" alt=""></div> </section>
        <section class="index-content-section-second">
            <div>
                <div class="index-auto">
            <article>公司介绍</article>
            <h6>COMPANY INTRODUCTION</h6>
            <main>FURNITUREDESGIN是一家拥有丰富的经验的家具设计公司。所设计的家具销往全国各地。设计的实践，在于为生活提供更舒适的环境及精确负责的施工，我们具有非常专业的团队，为客户创造符合装修风格的贴心家具。满足客户的要求与喜好，甚至将梦想中的生活氛围透过专业的感知力呈现，将家具透过色彩以及最和谐的比例设计而成。公司凭借高素质的人才队伍，先进的工艺和完善的企业管理，赢得了国内外客户的良好赞誉。</main>
            
                </div>
            </div>
        </section>
    </div>
</section>

<section class="index-product">
    <main>
        <ul>
                  <?php $taginfo = db("category")->field('catename as title,url,id,letter,inputtime,parentid,image,description')->where("1=1 and ismenu=2 and isdel=0 and parentid=2")->order('id asc')->limit('7')->select(); foreach($taginfo as $vo):?>
              <li><a href="<?php echo $vo['url']; ?>" ></a></li> 
        <?php endforeach; ?>
        </ul>
    </main>
    <main></main>
    <main></main>
</section>
<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >网页模板</a></div>
<section class="index-margin-bottom">
    <div class="index-morecase">
        <span></span>
        <a href="#">MORE &#62; &#62;</a>
    </div>
    <div class="index-content">
        <div class="product-list">
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-4">
                <a href="product_info.html">
                    <img src="/templates/Sofamall/images/product1.png" />
                </a>
            </div>
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-4">
                <a href="product_info.html">
                    <img src="/templates/Sofamall/images/product2.png" />
                </a>
            </div>
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-4">
                <a href="product_info.html">
                    <img src="/templates/Sofamall/images/product3.png" />
                </a>
            </div>
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-4">
                <a href="product_info.html">
                    <img src="/templates/Sofamall/images/product1.png" />
                </a>
            </div>
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-4">
                <a href="product_info.html">
                    <img src="/templates/Sofamall/images/product2.png" />
                </a>
            </div>
            <div class="am-u-sm-6 am-u-md-6 am-u-lg-4">
                <a href="product_info.html">
                    <img src="/templates/Sofamall/images/product3.png" />
                </a>
            </div>
        </div>
    </div>
</section>


<section class="index-margin-bottom">
    <div class="index-morecase">
        <span></span>
        <a href="#">MORE &#62; &#62;</a>
    </div>
    <div class="index-content">


        <div class="new-index">
       
            <ul>
                <li><img  src="/templates/Sofamall/images/productlogo.png" alt=""> </li>
                <li>  <a href="article_list_content.html"><h3>家具有哪些类型?</h3>
                    <article>在现代居住空间里面，有沙发的地方似乎总也少不了
                        茶几的身影。尤其在现代客厅里，一款实用、时尚的</article></a></li>
            </ul>

            
            <ul>
             

                <?php  $taginfo=db('news')->field('*')->where("1=1")->order('id asc')->limit(0,4)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
                <li><a href="<?php echo $vo['url']; ?>"><h3><?php echo $vo['title']; ?></h3>
                    <article>按家具从风格上可以分为：现代家具、欧式古典家具、
                        美式家具、中式古典家具（也就是红木家具），还有
                    </article>
                </a></li>
                <?php endforeach; ?>

            </ul>

        </div>
    </div>
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
        <div class="footer-bottom"><div style="text-align:center;color:#fff;line-height:100px;"><span><a  target="_blank" title="好主题">DZ科技</a>提供 -  <a  target="_blank" title="大智科技有限公司">大智科技有限公司</a> -  <a  title="DZCMS" target="_blank">DZCMS</a></span></div></div>
    </div>
</footer>
</body>
</html>
