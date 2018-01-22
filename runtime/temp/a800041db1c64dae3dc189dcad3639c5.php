<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:26:"./admintpl/statichtml.html";i:1508843372;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
﻿<!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/public/lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>模板列表</title>
</head>
<body>
	<nav class="breadcrumb">
			<div class="container">
				<i class="Hui-iconfont">&#xe67f;</i>
				<a href="/" class="c-primary">首页</a>
				<span class="c-gray en">&gt;</span>
				<a href="#">栏目管理</a>
				<span class="c-gray en">&gt;</span>
				<span class="c-gray">选择模板</span>
			</div>
		</nav>
		<div class="container ui-sortable">
			<h1>选择模板</h1>
			<div class="panel panel-default">
				<div class="panel-header clearfix">
					<span class="f-l">模板风格</span>
					<span class="f-r"></span>
				</div>


				<!-- 下拉开始 -->
				
			<div class="panel panel-default" style="width:1000px;margin:20px auto ; border:none;">
		<form action="<?php echo url('Templet/do_statichtml'); ?>" method="post" class="form form-horizontal responsive" id="demoform">
		<span class="select-box" style="width:120px;margin-left:180px;border:0px solid red">	设置生成栏目:</span>					
   	<span class="select-box" style="width:160px">
  <select class="select" size="1" id="styles" name="id" style="border:0px solid red;width:150px" id="fengge">
	  <?php if(is_array($name) || $name instanceof \think\Collection || $name instanceof \think\Paginator): if( count($name)==0 ) : echo "" ;else: foreach($name as $key=>$val): ?>
	  <option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
	  <?php endforeach; endif; else: echo "" ;endif; ?>
  </select>
</span>
<br/><br/>
<br/><br/>

<input type="submit" id=""  class="btn btn-success radius" style="width:80px;margin-left:190px" value="提交"/>
<button class="btn btn-secondary radius" style="width:80px;margin-left:50px">取消</button>
								
						
					
					</form>
			
			</div>
					

			</div>
			       
			 
		</div>
 <footer class="footer mt-20">
			<div class="container">
				<nav class="footer-nav">
					<a target="_blank" href="http://www.linyiit.cn/index.php?m=index">关于DZ</a>
					<span class="pipe">|</span>
					<a target="_blank" href="http://www.linyiit.cn/index.php?m=list&a=index&id=9">新闻中心</a>
					<span class="pipe">|</span>
					<a target="_blank" href="http://www.linyiit.cn/index.php?m=page&a=index&id=4">联系我们</a>
				</nav>
				<p>Copyright © 2002-2016 www.linyiit.cn 山东交通技师学院软件开发专业 <br>
					<a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn/">京ICP备15015336号-1</a>
					<br>
					未经允许，禁止转载、抄袭、镜像<br>
					用心做站，做不一样的站</p>
			</div>
		</footer>
<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.page.js"></script>
<!--/_footer /作为公共模版分离出去--> 

<!--请在下方写此页面业务相关的脚本--> 
<script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
</script>
	<script type="text/javascript">
	
	$('#subbtn').click(function () {
                var styles=$('#styles').val();
				alert(styles);
				$.ajax({ 
                    url:"<?php echo url('Templet/do_templet'); ?>", 
                     type:'POST', 
                     data: {data:styles}, 
                     success:function (data) { 
                         switch (data.status){ 
                             case 1: 
                                 layer.msg(data.msg, { 
                                        // offset: 't', 
                                         anim: 0 
                                    }); 
                                 setInterval(function () { 
                                     location.href='/'; 
                                 },2000); 

                             break; 
                             case 2: 
                                 layer.alert(data.msg); 
                                 break; 
                         } 

                     }, 
                    error:function (error) { 
                        alert('未知错误');
                     } 
                 });
        });
	</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>