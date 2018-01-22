<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:22:"./admintpl/adlist.html";i:1513296296;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>

<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->

<link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.min.css" />
<!--[if lt IE 9]>
<link href="static/h-ui/css/H-ui.ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<style type="text/css">
.ui-sortable .panel-header{ cursor:move}
</style>
<title>广告位列表</title>
<meta name="keywords" content="关键词,5个左右,单个8汉字以内">
<meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">
</head>
<body ontouchstart>
 <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
	<span class="c-gray en">&gt;</span>
	资讯管理
	<span class="c-gray en">&gt;</span>
	分类管理
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="containBox"> 
	 
	<div class="wap-container">
		 
<!-- 		<nav class="breadcrumb">
			<div class="container">
				<i class="Hui-iconfont">&#xe67f;</i>
				<a href="/" class="c-primary">首页</a>
				<span class="c-gray en">&gt;</span>
				<a href="#">广告位</a>
				<span class="c-gray en">&gt;</span>
				<span class="c-gray">广告位列表</span>
			</div>
		</nav> -->
		<div class="container ui-sortable">
		<br/>
		
		
					 
		<!-- 	<h1>广告位</h1> 
			 -->
			<div class="panel panel-default">
				<div class="panel-header clearfix">
					 <span class="l"><button type="button" id="del_law_all" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</button></span>　<a class="btn btn-primary radius" onclick="window.location.href='adadd.html'"><i class="Hui-iconfont">&#xe600;</i> 添加广告</a>
	<form action="<?php echo url('Ad/adlist'); ?>" method="post" style="float: right;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入关键字" name="content" value="<?php if(!(empty($val) || (($val instanceof \think\Collection || $val instanceof \think\Paginator ) && $val->isEmpty()))): ?><?php echo $val; endif; ?>">
		<button type="submit" class="btn btn-success" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索广告</button>
		</form>
				</div>
				
 <div class="Hui-article">
		<article class="cl pd-20">

			
			<div class="mt-10">
				<table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr class="text-c">
							<th width="25"><input type="checkbox" id="check_law_all" name="" value=""></th>
							<th width="20">ID</th>
							<th width="80">LOGO</th>
							<th width="50">类型</th>
							<th width="120">品牌名称</th>
							<th width="150">品牌标题</th>
							<th width="80">开始时间</th>
							<th width="80">结束时间</th>
							<th width="70">操作</th>
						</tr>
					</thead>
					<tbody>
						<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
						<tr class="text-c">
							<td><input name="" class="ids" type="checkbox" value="<?php echo $v['id']; ?>"></td>
							<td><?php echo $v['id']; ?></td>
							<td ><img src="/public/Uploads/<?php echo $v['photo']; ?>" width=40%></td>
							<td><?php echo $v['name']; ?></td>
							<td><img title="国内品牌" src=""><?php echo $v['brand']; ?></td>
							
							<td class="text-l"><?php echo $v['title']; ?></td>
							<td><?php echo $v['starttime']; ?></td>
							<td><?php echo $v['endtime']; ?></td>
							<td class="f-14 picture-manage">
						<span>
				
							<input href="javascript:;" onclick="admin_role_edit('广告修改','adup?id=<?php echo $v['id']; ?>')" style="text-decoration:none" class="btn btn-success radius size-MINI" type="button" value="编辑">
						</span>
							<input class="btn btn-danger radius size-MINI subbut" iddel="<?php echo $v['id']; ?>" type="button" value="删除">
			
			        </td>

						</tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						
					</tbody>
				</table>
	</article>
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
	</div>
	 
</div>
 <script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery-ui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/js/pagenav.cn.js"></script> 
<script type="text/javascript" src="/public/lib/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script> 
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.js"></script>

<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
function admin_role_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*单个删除*/
	$('.subbut').click(function(){
    	   	var id=$(this).attr('iddel');
    	layer.confirm('确认要删除吗？',function(index){
        $.ajax({
            url:"<?php echo url('Ad/ajax_update'); ?>",
            type:'POST',
            data:{id:id},
            success:function(result){
                switch(result.status){
                   case 1:
                   layer.msg(result.msg, {
						  icon: 1,
						  time: 2000 
						}, function(){
						setTimeout("location.reload();",1000);
					}); 
                break;
                    case 2 :layer.msg(result.msg, {
                        offset: 't',
                        anim: 6
                    });
                break;
                }
            },
            error:function(result){
            	layer.msg('未知错误', {icon: 2,time:2000});
            	
            }
        });
    })
    });

/*批量删除*/
    $('#check_law_all').click(function(){
 		if($(this).is(':checked',true)){
 			$('.ids').prop('checked',true);
 		}else{
 			$('.ids').prop('checked',false);
 		}
 	});
 	$('#del_law_all').click(function(){
		var idds='';
		$('.ids').each(function(){
			if($(this).is(':checked')){
				idds+=$(this).val()+',';
			}
		});
		
		idds=idds.substr(0,idds.length-1);
		layer.confirm('确认要删除吗？',function(index){
		$.ajax({
            url:"<?php echo url('Ad/ajax_update'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                //alert(result.msg);
                switch(result.status){
                   case 1:
                   layer.msg(result.msg, {
						  icon: 1,
						  time: 2000 
						}, function(){
						 location.href="<?php echo url('Ad/adlist'); ?>";
					}); 
                break;
                    case 2 :
                   layer.msg(result.msg, {
						  icon: 2,
						  time: 2000 
						}, function(){
						 location.href="<?php echo url('Ad/adlist'); ?>";
					}); 
                break;
                }
            },
            error:function(){
 					layer.msg('未选中任何信息', {icon: 2,time:1000});
            }
        });
	});
		
});	
</script>

</body>
</html>
<!--H-ui前端框架提供前端技术支持 h-ui.net @2017-01-01 -->