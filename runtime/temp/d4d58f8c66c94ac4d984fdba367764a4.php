<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:25:"./templates/lf/brand.html";i:1509609080;s:26:"./templates/lf/header.html";i:1509667932;s:26:"./templates/lf/footer.html";i:1509609136;}*/ ?>
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
<div class="banner banner_s"><img src="/templates/lf/upload/banner_b.jpg" alt=""/></div>
<!--幻灯片-->
<!--主体盒子-->
<div class="scd_bg">
	<div class="scd clearfix">
    	<div class="s_head clearfix">
        	<a href="" class="on">品牌优势</a>
            <div class="pst">
            	<a href="">首页</a> - <a href="">大智优势</a>
            </div>
        </div>
        <div class="scd_m clearfix" >
        	<div class="brand">
            	<dl class="clearfix">
                	<dt class="f_l smoove" data-rotate-y="0deg" data-move-x="-150%"><img src="/templates/lf/images/dazhi.jpg" alt=""/></dt>
                    <dd class="f_r smoove" data-rotate-y="0deg" data-move-x="150%">
                    	<div class="name">大智<em>故事</em></div>
                        <div class="des">品牌优势是品牌在其运营的过程中,积累的一切有利品牌发展的物质和精神的整体表现 品牌定位是经常向势是品牌在其运营的过程是消费者宣传的那部分品牌识别,目的是有效地建消费者宣传的那部分品牌识别,目的是有势是品牌在其运营的过程品牌识别,目的是有效地建有效地建立品牌与竞争...</div>
                        <p class="tip">品牌优势是品牌在其运营的过程中,积累的一切</p>
                    </dd>
                </dl>
                <dl class="clearfix">
                	<dt class="f_r smoove" data-rotate-y="0deg" data-move-x="150%"><img src="/templates/lf/images/dazhi.jpg" alt=""/></dt>
                    <dd class="f_l smoove" data-rotate-y="0deg" data-move-x="-150%">
                    	<div class="name">大智<em>历程</em></div>
                        <div class="des">品牌优势是品牌在其运营的过程中,积累的一切有利品牌发展的物质和精神的整体表现 品牌定位是经常向势是品牌在其运营的过程是消费者宣传的那部分品牌识别,目的是有效地建消费者宣传的那部分品牌识别,目的是有势是品牌在其运营的过程品牌识别,目的是有效地建有效地建立品牌与竞争...</div>
                        <p class="tip">品牌优势是品牌在其运营的过程中,积累的一切</p>
                    </dd>
                </dl>
                <dl class="clearfix">
                	<dt class="f_l smoove" data-rotate-y="0deg" data-move-x="-150%"><img src="/templates/lf/images/dazhi.jpg" alt=""/></dt>
                    <dd class="f_r smoove" data-rotate-y="0deg" data-move-x="150%">
                    	<div class="name">大智<em>优势</em></div>
                        <div class="des">服务网络：涉及网站应用开发、网络品牌营销、应用平台开发、企业信息化应用等。每一个环节我们都用心去做，沟通第一、诚信第一。
技术实力：大智网络凭借团队多年来的设计、开发以及运维、营销经验，整合了一套设计、开发以及运维、营销方案。
客户服务保障：拥有服务近万家客户的经验基础，覆盖全国范围的服务网络，SLA标准服务承诺，完整的服务指标体系，随时随地满足企业服务需求。</div>
                        
                    </dd>
                </dl>
                <dl class="clearfix">
                	<dt class="f_r smoove" data-rotate-y="0deg" data-move-x="150%"><img src="/templates/lf/images/dazhi.jpg" alt=""/></dt>
                    <dd class="f_l smoove" data-rotate-y="0deg" data-move-x="-150%">
                    	<div class="name">大智<em>服务流程</em></div>
                        <div class="des">品牌优势是品牌在其运营的过程中,积累的一切有利品牌发展的物质和精神的整体表现 品牌定位是经常向势是品牌在其运营的过程是消费者宣传的那部分品牌识别,目的是有效地建消费者宣传的那部分品牌识别,目的是有势是品牌在其运营的过程品牌识别,目的是有效地建有效地建立品牌与竞争...</div>
                        <p class="tip">品牌优势是品牌在其运营的过程中,积累的一切</p>
                    </dd>
                </dl>
                
            </div>
        </div>
    </div>
</div>

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

<script>
var system ={
	win : false,
	mac : false,
	xll : false
};
var p = navigator.platform;
system.win = p.indexOf("Win") == 0;
system.mac = p.indexOf("Mac") == 0;
system.x11 = (p == "X11") || (p.indexOf("Linux") == 0);
if(system.win||system.mac||system.xll){
	$('.smoove').smoove({offset:'20%'});
}else{
}
</script>
