<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:35:"./templates/lf/product_content.html";i:1509684228;s:26:"./templates/lf/header.html";i:1509667932;s:26:"./templates/lf/footer.html";i:1509609136;}*/ ?>
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
<div class="banner banner_s"><img src="/templates/lf/upload/banner_b.jpg" alt=""/></div>
<div class="scd_bg">
	<div class="scd clearfix">
  	<div class="s_head clearfix">
		<a class="pcate " href="<?php echo url('Index/product'); ?>" title="产品展示">产品展示</a>
    <div class="pst">
    	<a href="http://www.xuyunhongsm.com/" title="北京旭云鸿商贸有限公司">首页</a> - <a href="http://www.xuyunhongsm.com/index.php?id=news" title="资讯中心">产品展示</a> - <a href="" title=""></a>    </div>
    </div>

  </div>

</div>
<div style="margin-top:30px;font-size:30px;font-weight:bold"><?php echo $info['title']; ?></div>
<br>
<div style="width:80%;margin-left:10%;font-size:22px"><?php echo $info['content']; ?></div>

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