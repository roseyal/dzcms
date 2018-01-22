<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:20:"./admintpl/rnav.html";i:1508843310;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
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
<script type="text/javascript" src="/public/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/public/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>资讯列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 导航管理 <span class="c-gray en">&gt;</span> 导航回收站 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
		<div class="container ui-sortable">
			<h1>导航回收站</h1> 
			<div class="panel panel-default">
				<div class="panel-header clearfix">
					<input class="btn btn-danger radius del" id="del_law_all" type="button" value="批量删除">
					<input class="btn btn-primary radius restore" id="restore_law_all" type="button" value="一键还原">
					<span class="r">共有数据：<strong><?php echo $info; ?></span> 
					
				 </div>
				<div class="panel-body">
					
   <table class="table table-border table-bordered table-hover table-bg table-sort">


				<thead>
					<tr class="text-c">
						<th width="25"><input type="checkbox" id="checkbox-1"></th>
						<th width="80">ID</th>
						<th width="100">名称</th>
						<th width="150">描述</th>
						<th width="130">加入时间</th>
						<th width="70">状态</th>
						<th width="100">操作</th>
					</tr>
				</thead>
					<tbody>
						<?php if(is_array($list['data']) || $list['data'] instanceof \think\Collection || $list['data'] instanceof \think\Paginator): if( count($list['data'])==0 ) : echo "" ;else: foreach($list['data'] as $key=>$info): ?>
							<tr class="text-c">
								<td><input type="checkbox" class="ids" id="checkbox-2" value="<?php echo $info['id']; ?>"></td>
								<td><?php echo $info['id']; ?></td>
								<td><u style="cursor:pointer" class="text-primary" onclick="member_show('<?php echo $info['name']; ?>','member-show.html','10001','360','400')"><?php echo $info['name']; ?></u></td>
								<td><?php echo $info['description']; ?></td>
								<td><?php echo $info['inputtime']; ?></td>
								<td class="td-status"><span class="label label-danger radius">已删除</span></td>
								<td class="td-manage"><input class="btn btn-success-outline size-MINI radius restore up" type="button" data-id="<?php echo $info['id']; ?>" value="还原">
								<input class="btn btn-danger-outline size-MINI radius del" type="button" id="" data-id="<?php echo $info['id']; ?>" value="删除"></td>
							</tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table><?php echo $pages; ?>
<div id="pageNav" class="pageNav"></div>
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
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*一键还原*/
$('#checkbox-1').click(function(){
 		if($(this).is(':checked',true)){
 			$('.ids').prop('checked',true);
 		}else{
 			$('.ids').prop('checked',false);
 		}
 	});	
 $('#restore_law_all').click(function(){
		var idds='';
		$('.ids').each(function(){
			if($(this).is(':checked')){
				idds+=$(this).val()+',';
			}
		});
		idds=idds.substr(0,idds.length-1);
		layer.confirm('确认要还原吗？',function(index){
		$.ajax({
            url:"<?php echo url('Nav/nav_up'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                        location.href="<?php echo url('Nav/rnav'); ?>";
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
               layer.msg('未勾选任何信息', {icon: 2,time:2000});
            }
        });
	});
});	
  /*一键删除*/
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
            url:"<?php echo url('Nav/nav_del'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                        location.href="<?php echo url('Nav/rnav'); ?>";
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
               layer.msg('未勾选任何信息', {icon: 2,time:2000});
            }
        });
	});
});	 
/*导航回收站-单个删除*/
$('.del').click(function(){
    	var idds=$(this).attr('data-id');
    	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
            url:"<?php echo url('Nav/nav_del'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                        location.href="<?php echo url('Nav/rnav'); ?>";
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
/*导航回收站-单个还原*/
$('.up').click(function(){
    	var idds=$(this).attr('data-id');
    	layer.confirm('确认要还原吗？',function(index){
		$.ajax({
            url:"<?php echo url('Nav/nav_up'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                        location.href="<?php echo url('Nav/rnav'); ?>";
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
	//$('.table-sort').dataTable({
	//"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	//"bStateSave": true,//状态保存
	//"pading":false,
	//"aoColumnDefs": [
	//  {"orderable":false,"aTargets":[0,6]}// 不参与排序的列
	//]
//});

</script> 
</body>
</html>