<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:27:"./admintpl/recycle_bin.html";i:1508852473;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/style.css" />

<script type="text/javascript" src="/public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<style type="text/css">
.ui-sortable .panel-header{ cursor:move}
</style>
<title>回收站</title>
<meta name="keywords" content="关键词,5个左右,单个8汉字以内">
<meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">
</head>
<body>
  <nav class="breadcrumb">
	<i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户管理 <span class="c-gray en">&gt;</span> 回收站 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
 </nav>
<div class="containBox"> 
	 
	<div class="wap-container">
		<div class="container ui-sortable">
			<h1>回收站</h1>
			<div class="panel panel-default">
				<div class="panel-header clearfix">
					<div class="f-l"> 
						<button id="delete_rule_all" type="button" class="btn btn-danger radius">清空选中</button>
						<button id="reback_rule_all" type="button" class="btn btn-success radius">还原选中</button>
					</div>
					<form action="/recycle_bin.html" method="post" style="float: right;">
						<input type="text" class="input-text" style="width:250px" placeholder="输入用户名" name="content" value="<?php if(!(empty($val) || (($val instanceof \think\Collection || $val instanceof \think\Paginator ) && $val->isEmpty()))): ?><?php echo $val; endif; ?>">
						<button type="submit" class="btn btn-success" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户<button>
					</form>
				</div>
				<div class="panel-body">
					<table class="table table-border table-bordered table-hover">
      					 <thead>
			              <tr>
							<th><input type="checkbox" id="check_rule_all" class="tpl-table-fz-check  "/></th>
			                <th>ID</th>
			                <th>用户名</th>
			                <th>性别</th>
			                <th>等级</th>
							<th>注册时间</th>
			                <th>注销时间</th>
			                <th>操作</th>
			              </tr>
			            </thead>
			            <tbody>
						<?php if(is_array($name) || $name instanceof \think\Collection || $name instanceof \think\Paginator): if( count($name)==0 ) : echo "" ;else: foreach($name as $key=>$ulist): ?>
			              <tr>
							<th><input type="checkbox" class="ids" value="<?php echo $ulist['id']; ?>"/></th>
			                <th><?php echo $ulist['id']; ?></th>
			                <td><?php echo $ulist['nickname']; ?></td>
			                <td><?php echo !empty($ulist['sex'])?'男':'女'; ?></td>
			                <td><?php echo $ulist['vipid']; ?></td>
							<td><?php echo $ulist['regdate']; ?></td>							
			                <td><?php echo $ulist['lastdate']; ?></td>
			                <td>
								<input class=" restore btn btn-success radius size-S" type="button"  id="restore" ids="<?php echo $ulist['id']; ?>" value="还原">
								<input class=" del btn btn-danger radius size-S" type="button"  id="del" ids="<?php echo $ulist['id']; ?>" value="删除">
							</td>
			              </tr>	
						<?php endforeach; endif; else: echo "" ;endif; ?>
			            </tbody>
    				</table>
				</div>
				<div class="va-m">
					<?php echo $page; ?>
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
	</div>
</div>
 
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery-ui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/lib/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/layui.js"></script>
<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript">//清除
    $('#check_rule_all').click(function(){
        if($(this).is(':checked')){
            $('.ids').prop('checked',true);
        }
        else{
            $('.ids').prop('checked',false);
        }
    });
    $('#delete_rule_all').click(function(){
			var idds = '';
			$('.ids').each(function () {
				if ($(this).is(':checked')) {
					idds += $(this).val() + ',';
				}
			});
			idds = idds.substr(0, idds.length - 1);
			   layer.confirm('确认要删除吗？',function(index){
		$.ajax({
            url:"<?php echo url('Member/do_recyle_bin'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                        location.href="<?php echo url('Member/recycle_bin'); ?>";
                    }); 
                    break;
                    case 2:
                   layer.msg(result.msg, {
                          icon: 2,
                          time: 2000 
                        });
                    break;
                    
                }
            },
            error:function(){
               layer.msg('未知错误', {icon: 2,time:2000});
            }
        });
	});
		});
        $('#reback_rule_all').click(function(){
		
		
			
				var idds = '';
				$('.ids').each(function () {
					if ($(this).is(':checked')) {
						idds += $(this).val() + ',';
					}
				});
				idds = idds.substr(0, idds.length - 1);
			   layer.confirm('确认要还原吗？',function(index){
		$.ajax({
            url:"<?php echo url('Member/do_reback'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                        location.href="<?php echo url('Member/recycle_bin'); ?>";
                    }); 
                    break;
                    case 2:
                   layer.msg(result.msg, {
                          icon: 2,
                          time: 2000 
                        });
                    break;
                    
                }
            },
            error:function(){
               layer.msg('未知错误', {icon: 2,time:2000});
            }
        });
	});
		
			});
</script>
<script type="text/javascript">
	$('.del').click(function(){
		var ids = $(this).attr("ids");
			   layer.confirm('确认要删除吗？',function(index){
		$.ajax({
            url:"<?php echo url('Member/do_recyle_bin'); ?>",
            type:'POST',
            data:{id:ids},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                        location.href="<?php echo url('Member/recycle_bin'); ?>";
                    }); 
                    break;
                    case 2:
                   layer.msg(result.msg, {
                          icon: 2,
                          time: 2000 
                        });
                    break;
                    
                }
            },
            error:function(){
               layer.msg('未知错误', {icon: 2,time:2000});
            }
        });
	});
	});
	$('.restore').click(function(){
	
			var ids = $(this).attr("ids");
				   layer.confirm('确认要还原吗？',function(index){
		$.ajax({
            url:"<?php echo url('Member/do_reback'); ?>",
            type:'POST',
            data:{id:ids},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                        location.href="<?php echo url('Member/recycle_bin'); ?>";
                    }); 
                    break;
                    case 2:
                   layer.msg(result.msg, {
                          icon: 2,
                          time: 2000 
                        });
                    break;
                    
                }
            },
            error:function(){
               layer.msg('未知错误', {icon: 2,time:2000});
            }
        });
	});
	});
</script>
</body>
</html>