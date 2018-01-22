<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:23:"templates/lf/index.html";i:1509684080;s:26:"./templates/lf/header.html";i:1509667932;s:26:"./templates/lf/footer.html";i:1509609136;}*/ ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>大智科技信息有限公司</title>
<link rel="stylesheet" type="text/css" href="/templates/lf/css/reset.css"/>
<script type="text/javascript" src="/templates/lf/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/templates/lf/plugins/FlexSlider/jquery.flexslider.js"></script>
<link rel="stylesheet" type="text/css" href="/templates/lf/plugins/FlexSlider/flexslider.css">
<script type="text/javascript" src="/templates/lf/js/js_z.js"></script>

<link rel="stylesheet" type="text/css" href="/templates/lf/css/thems.css">
<script language="javascript">
$(function() {
  $('.flexslider').flexslider({
	animation: "slide"
  });
});
</script>
</head>

<body>
<div class="h_bg">
	<div class="head clearfix">
    	<div class="logo">
        	<div class="bg_a">&nbsp;</div>
            <a href="index.html"><img src="/templates/lf/images/logo.png" alt=""/></a>
        </div>
        <div class="head_r">
        	<div class="tel">0539-7256931</div>
            <div class="nav clearfix">
                <?php $taginfo = db("category")->field('catename as title,url,id,letter,inputtime,parentid,image,description')->where("1=1 and ismenu=2 and isdel=0 and parentid=0")->order('id asc')->limit('')->select(); foreach($taginfo as $vo):?>
            	<a href="<?php echo $vo['url']; ?>" class="now"><?php echo $vo['title']; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<!--幻灯片-->
<div class="banner" >
	<div class="slider">
        <div class="flexslider">
          <ul class="slides">
            <li><a href=""><img src="/templates/lf/upload/banner_a.jpg" alt="" /></a></li>
            <li><a href=""><img src="/templates/lf/upload/banner_a.jpg" alt="" /></a></li>
            <li><a href=""><img src="/templates/lf/upload/banner_a.jpg" alt="" /></a></li>
          </ul>
        </div>
    </div>
</div>
<!--幻灯片-->
<div class="space_hx">&nbsp;</div>
<!--主体盒子-->
<div class="i_maina clearfix">
	<div class="box a">
    	<div class="box_h">关于大智</div>
        <div class="box_m">
        	<div class="i_abt">
            	<a href="<?php echo url('Index/about'); ?>">
                	<img src="/templates/lf/upload/pic2.jpg" alt=""/>
                    <div class="des"><p>大智科技有限公司</p></div>
                </a>
            </div>
        </div>
    </div>
    <div class="box b">
    	<div class="box_h">新闻动态</div>
        <div class="box_m">
        <?php  $taginfo=db('news')->field('*')->where("1=1 and cateid in (5)")->order('id asc')->limit(0,3)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
        	<dl class="clearfix">
            	<dt><a href="<?php echo $vo['url']; ?>"><img src="/public/Uploads/<?php echo $vo['smallimage']; ?>" alt=""/></a></dt>
                <dd>
                	<h5><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></h5>
                    <div class="time"><?php echo date("Y-m-d",$vo['inputtime']); ?></div>
                    <div class="des"><?php echo $vo['abstract']; ?></div>
                </dd>
            </dl>
<?php endforeach; ?>
        </div>
    </div>
    <div class="box c">
    	<div class="box_h">公司视频</div>
        <div class="box_m">
        	<video controls pool="" width="328" height="203" poster="http://www.zhyichina.com/./data/uploads/files/2015-05-13/55540d8c8a515.jpg">
            <source src="http://www.zhyichina.com/Vedio/CaraokSegwayOutdoor.mp4" type="video/mp4">
            <source src="http://www.zhyichina.com/Vedio/CaraokSegwayOutdoor.mp4" type="video/webm">
            <source src="http://www.zhyichina.com/Vedio/CaraokSegwayOutdoor.mp4" type="video/ogg">
            您的浏览器版本太低请升级！！！
            </video>
        </div>
    </div>
</div>
<div class="space_hx">&nbsp;</div>
</div>
<div class="space_hx">&nbsp;</div>
<div class="i_mainc">
        <div class="title"><a href="">产品展示</a></div>
  <div class="i_pro">
    <ul class="clearfix">
    <?php  $taginfo=db('news')->field('*')->where("1=1 and cateid in (3)")->order('id asc')->limit(0,0)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
         <li >
            <a href="<?php echo $vo['url']; ?>">
            <img src="/public/Uploads/<?php echo $vo['smallimage']; ?>" alt=""/>
              <p style="text-align:center;font-size:18px;"><?php echo $vo['title']; ?></p>
              </a>
          </li>
    <?php endforeach; ?>
    </ul>  
  </div>
<div class="space_hx">&nbsp;</div>
</div>
<div class="space_hx">&nbsp;</div>

<div class="line">&nbsp;</div>
    <div class="f_nav ">
<div style="float:left">
    <ul>
    <li>
            <p>联系人：张经理</p>
            <p>咨询邮箱：zpzlx927@126.com</p>
            <p>咨询热线：0539-7256931</p>
            <p>地址：临沂市经济技术开发区沃尔沃路55号</p>
        </li>
     </ul>
    </div>
</div>
<div class="line">&nbsp;</div>
<div class="friend">
<b>友情链接：</b>
<?php $taginfo=db('friendlink')->where('photo is not null')->order('id asc')->select();$page="<ul style='list-style: none;clear:both;height: auto;overflow: hidden;'></ul>"; foreach($taginfo as $vo): ?>
    <a href="<?php echo $vo['website']; ?>"><img style="margin-left:15px;weith:150px; height:47px " src="/public/Uploads/<?php echo $vo['photo']; ?>"></a>

<?php endforeach; ?>
</div>
<div class="bq">@2017 版权所有     临沂大智信息科技有限公司  地址：临沂市经济技术开发区沃尔沃路55号   电话：0539-7256931</div>
</body>
</html>
