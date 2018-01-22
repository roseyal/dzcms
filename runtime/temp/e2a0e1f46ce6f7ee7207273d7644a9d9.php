<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:27:"./templates/lf/company.html";i:1509684180;s:26:"./templates/lf/header.html";i:1509667932;s:26:"./templates/lf/footer.html";i:1509609136;}*/ ?>
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
            <a href="<?php echo url('Index/company'); ?>" class="on">选择理由</a>
            <div class="pst">
            	<a href="">首页</a> - <a href="">公司介绍</a>
            </div>
        </div>
        <div class="scd_m clearfix">
        	<div class="company">
            	<div class="name">选择我们理由</div>
                <p class="tip">为什么选择我们的优势</p>
                <div class="space_hx">&nbsp;</div>
                <?php  $taginfo=db('news')->field('*')->where("1=1 and cateid in (6)")->order('id asc')->limit(0,0)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
                <dl class="clearfix">
                	<dt class="f_l smoove" data-rotate-y="0deg" data-move-x="-150%" ><a href=""><img src="/public/Uploads/<?php echo $vo['smallimage']; ?>" alt=""/></a></dt>
                    <dd class="f_r smoove" data-rotate-y="0deg" data-move-x="150%" >
                    	<h6><i>.</i><?php echo $vo['title']; ?></h6>
                        <div class="des"><?php echo $vo['abstract']; ?> </div>
                        <p class="tip"> <?php echo $vo['keywords']; ?></p>
                        <div class="more"><a href="<?php echo $vo['url']; ?>"><span>查看详情</span></a></div>
                    </dd>
                </dl>
                <?php endforeach; ?>
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
