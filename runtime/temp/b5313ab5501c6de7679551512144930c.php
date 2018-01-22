<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:23:"./admintpl/prolist.html";i:1513232758;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
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
<title>产品列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c" style="height: 24px;">
		<form style="float:right" action="<?php echo url('News/prolist'); ?>" method="post" >
		
			<input type="text" class="input-text" style="width:250px;" placeholder="输入搜产品名称" name="content" value="<?php if(!(empty($val) || (($val instanceof \think\Collection || $val instanceof \think\Paginator ) && $val->isEmpty()))): ?><?php echo $val; endif; ?>">
			<button  type="submit" class="btn btn-success" name=""><i class="Hui-iconfont">&#xe665;</i> 搜产品</button>
		
		</form>
		
		</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20">
	<span class="l">
		<input class="btn btn-danger radius" id="del_law_all" type="button" value="批量删除">

		<a class="btn btn-primary radius" data-title="添加产品" data-href="proadd.html" onclick="Hui_admin_tab(this)" href="javascript:;">
		<i class="Hui-iconfont">&#xe600;</i> 添加产品</a>
	</span>
	<span class="r">共有数据：<strong><?php echo $cou; ?></strong> 条</span>
	</div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort table-responsive">
			<thead>
				<tr class="text-c">
					<th width="25">
					<input type="checkbox" id="checkbox-1"></th>
					<th width="80">ID</th>
					<th>名称</th>
					<th>价格</th>
					<th>市场价格</th>
					<th>型号</th>
					<th>分类</th>
					<th>作者</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$info): ?>
				<tr class="text-c">
					<td><input type="checkbox" value="<?php echo $info['id']; ?>" class="ids"></td>
					<td><?php echo $info['id']; ?></td>
					<td class="text-l"><u style="cursor:pointer" class="text-primary" onClick="article_edit('查看','article-zhang.html','10001')" title="查看"><?php echo $info['name']; ?></u></td>
					<td><?php echo $info['money']; ?></td>
					<td><?php echo $info['market_price']; ?></td>
					<td><?php echo $info['version']; ?></td>
					<td><?php echo $info['type']; ?></td>
					<td><?php echo $info['author']; ?></td>
					<td class="f-14 td-manage">
					<!--<input <?php if(($info['status'] == 0)): ?> class=" disable btn btn-success radius size-S" value="审核" <?php else: ?> class="disable btn btn-warning radius size-S" value="取消" <?php endif; ?> type="button" iddel="<?php echo $info['id']; ?>" >-->
					<!-- <?php if($info['status'] == '1'): ?>
						<a style="text-decoration:none" class="cancel" href="javascript:;" iddel="<?php echo $info['id']; ?>" title="取消">取消</a>
					<?php else: ?>
						<a style="text-decoration:none" class="status" href="javascript:;" iddel="<?php echo $info['id']; ?>" title="审核">审核</a>
					<?php endif; ?> -->
					<!-- <a style="text-decoration:none" onclick="article_shenhe(this,'10001')" href="javascript:;" title="审核">审核</a> -->
					<a style="text-decoration:none" class="ml-5" onClick="article_edit('','newsup.html','10001')" href="<?php echo url('News/proup',['id'=>$info['id']]); ?>"  title="编辑">
						<i class="Hui-iconfont">&#xe6df;</i>
					</a>
					<!-- <input class="btn btn-danger radius size-MINI subbut" iddel="<?php echo $info['id']; ?>" type="button" value="删除"> -->
					 <a style="text-decoration:none" class="subbut" iddel="<?php echo $info['id']; ?>" href="javascript:;" title="删除">
						<i class="Hui-iconfont">&#xe6e2;</i>
					</a>
					</td>
				</tr>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
		<div id="pageNav" class="pageNav">
			<?php echo $page; ?>
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
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.js"></script>

<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script>

<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>

<script type="text/javascript">
////////////////////////////审核////////////////////////
	 $('.disable').click(function(){
    	var id=$(this).attr('iddel');
    	//alert(id);
    	layer.confirm('确认审核',function(index){
 			$.ajax({
				url: "<?php echo url('News/statu'); ?>",
				type: "POST",
				data: {id: id},
				success: function() {
					layer.msg('审核成功', {icon: 1,time:1000});
					setTimeout("location.reload();",1000);
					//window.location.reload();
				},
				error: function () {
					layer.msg('取消成功', {icon: 5,time:1000});
				}
			})
    })
    });
////////////////////////////删除////////////////////////
    $('.subbut').click(function(){
    	   	var id=$(this).attr('iddel');
    	layer.confirm('确认要删除吗？',function(index){
        $.ajax({
            url:"<?php echo url('News/prodel'); ?>",
            type:'POST',
            data:{id:id},
            success:function(result){
                switch(result.status){
                   case 1:
                   layer.msg(result.msg, {
						  icon: 1,
						  time: 1000
						}, function(){
						setTimeout("location.reload();");
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
            	alert('fail');

            }
        });
    })
    });
////////////////////////////全选删除////////////////////////
    $('#checkbox-1').click(function(){
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
            url:"<?php echo url('News/prodel'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 1000
                        }, function(){
                       setTimeout("location.reload();");
                    });
                    break;
                    case 2:
                   layer.msg(result.msg, {
                          icon: 2,
                          time: 1000
                        });
                    break;

                }
               // alert('正确');
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