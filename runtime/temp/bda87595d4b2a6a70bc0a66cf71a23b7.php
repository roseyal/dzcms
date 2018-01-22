<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:25:"./admintpl/adrecover.html";i:1508813087;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
<!DOCTYPE HTML>
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
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/style.css" />
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
<title>Hi，H-ui v3.1</title>
<meta name="keywords" content="关键词,5个左右,单个8汉字以内">
<meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">
</head>
<body>
  <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页
	<span class="c-gray en">&gt;</span>
	广告位管理
	<span class="c-gray en">&gt;</span>
	广告回收站
	<a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>
<div class="containBox"> 
	 
	<div class="wap-container">
		<div class="container ui-sortable">
			<h1>广告回收站</h1> 
			<div class="panel panel-default">
				<div class="panel-header clearfix">
				<span class="btn btn-danger radius"  id="del_law_all">批量删除</span>
					<a type="button" class="btn btn-success radius" id="back_rule_all">一键还原</a>
					
					<span class="f-r">
					<form action="<?php echo url('Ad/adrecover'); ?>" method="post" style="float: right;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入关键字" name="content" value="<?php if(!(empty($val) || (($val instanceof \think\Collection || $val instanceof \think\Paginator ) && $val->isEmpty()))): ?><?php echo $val; endif; ?>">
		<button type="submit" class="btn btn-success" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
		</form>
</span>
				</div>
				<div class="panel-body">
					<table class="table table-border table-bordered table-hover table-bg table-sort">
				<thead>
					<tr class="text-c">
						<th width="25"><input type="checkbox" id="check_law_all"/></th>
						<th width="80">ID</th> 
						<th width="100">广告名</th>
						<th width="150">内容</th>
						<th width="70">状态</th>
						<th width="100">操作</th>
					</tr>
				</thead>
			            <tbody>
			            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$list): ?>
					<tr class="text-c">
						<td><input type="checkbox"  class="ids" value="<?php echo $list['id']; ?>" /></td>
						<td><?php echo $list['id']; ?></td> 
						<td><u style="cursor:pointer" class="text-primary" onclick="member_show('张三','member-show.html','10001','360','400')"><?php echo $list['brand']; ?></u></td>
						<td><?php echo $list['content']; ?></td>
						<td class="td-status"><span class="label label-danger radius">已删除</span></td>
						<td class="td-manage">
							<!-- <a style="text-decoration:none" href="<?php echo url('Ad/reback',['id'=>$list['id']]); ?>" class="ml-5 btn btn-success radius size-MINI"  onClick="member_huanyuan(this,'1')" title="还原">还原</a>  -->
							<input class="ml-5 btn btn-success radius size-MINI huanyuan" iddel="<?php echo $list['id']; ?>" type="button" value="还原">
							<!-- <a title="删除" href="<?php echo url('Ad/delad',['id'=>$list['id']]); ?>" onclick="member_del(this,'1')" class="ml-5 btn btn-danger radius size-MINI" style="text-decoration:none">删除</a> -->
							<input class="btn btn-danger radius size-MINI subbut" iddel="<?php echo $list['id']; ?>" type="button" value="删除">
						</td>
					</tr>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</tbody>
    				</table>
    				
      			</div>
				<?php echo $page; ?>
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
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>

<script type="text/javascript">
	//删除
	$('.subbut').click(function(){
    	var id=$(this).attr('iddel');
    	//alert(id);
    	layer.confirm('确认要删除吗？',function(index){
        $.ajax({
            url:"<?php echo url('Ad/ajax_delad'); ?>",
            type:'POST',
            data:{id:id},
            success:function(result){
                //alert(result.msg);
                switch(result.status){
                   case 1:
                        layer.msg(result.msg, {
                         icon: 1,
						 time: 2000 
                    });
                         setInterval(function () {
                                    location.href="<?php echo url('Ad/adrecover'); ?>";
                                },1000);
                    break;
                    case 2 :layer.msg(result.msg, {
                        icon: 2,
						time: 1000 
                    });
                        break;
                }
            },
            error:function(result){
            		layer.msg('未勾选任何信息', {icon: 2,time:2000});
            	
            }
        });
    	})
    });
	//还原
	$('.huanyuan').click(function(){
    	var id=$(this).attr('iddel');
    	//alert(id);
    	layer.confirm('确认要还原吗？',function(index){
        $.ajax({
            url:"<?php echo url('Ad/ajax_reback'); ?>",
            type:'POST',
            data:{id:id},
            success:function(result){
                //alert(result.msg);
                switch(result.status){
                   case 1:
                        layer.msg(result.msg, {
                         icon: 1,
						 time: 2000 
                    });
                         setInterval(function () {
                                    location.href="<?php echo url('Ad/adrecover'); ?>";
                                },1000);
                    break;
                    case 2 :layer.msg(result.msg, {
                        icon: 2,
						time: 1000 
                    });
                        break;
                }
            },
            error:function(result){
            		layer.msg('未勾选任何信息', {icon: 2,time:2000});
            	
            }
        });
    	})
    });
	

	//全选
    $('#check_law_all').click(function(){
 		if($(this).is(':checked',true)){
 			$('.ids').prop('checked',true);
 		}else{
 			$('.ids').prop('checked',false);
 		}
 	});
	//选中删除
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
            url:"<?php echo url('Ad/ajax_delad'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                //alert(result.msg);
                switch(result.status){
                   case 1:
                        layer.msg(result.msg, {
                         icon: 1,
						 time: 2000 
                    });
                         setInterval(function () {
                                    location.href="<?php echo url('Ad/adrecover'); ?>";
                                },1000);
                    break;
                    case 2 :layer.msg(result.msg, {
                        icon: 2,
						time: 1000 
                    });
                        break;
                }
            },
            error:function(result){
            		layer.msg('未勾选任何信息', {icon: 2,time:2000});
            	
            }
        });
    	})
	});	
	//选中还原
	
	$('#back_rule_all').click(function(){
	var idds='';
			$('.ids').each(function(){
				if($(this).is(':checked')){
					idds+=$(this).val()+',';
				}
			});
			idds=idds.substr(0,idds.length-1);
		layer.confirm('确认要还原吗？',function(index){
        $.ajax({
            url:"<?php echo url('Ad/ajax_reback'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                //alert(result.msg);
                switch(result.status){
                   case 1:
                        layer.msg(result.msg, {
                         icon: 1,
						 time: 2000 
                    });
                         setInterval(function () {
                                    location.href="<?php echo url('Ad/adrecover'); ?>";
                                },1000);
                    break;
                    case 2 :layer.msg(result.msg, {
                        icon: 2,
						time: 1000 
                    });
                        break;
                }
            },
            error:function(result){
            		layer.msg('未勾选任何信息', {icon: 2,time:2000});
            	
            }
        });
    	})
	});	
</script>

</body>
</html>
<!--H-ui前端框架提供前端技术支持 h-ui.net @2017-01-01 -->