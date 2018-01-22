<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:23:"./admintpl/listnav.html";i:1508846666;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 导航管理 <span class="c-gray en">&gt;</span> 导航列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
		<div class="container ui-sortable">
			<h1>导航列表</h1> 
			<div class="panel panel-default">
				<div class="panel-header clearfix">
					<span class="l"><a href="javascript:;" id="del_law_all" class="btn btn-danger radius"><i class="icon-trash"></i> 批量删除</a>
					<a href="<?php echo url('Nav/addnav'); ?>"  class="btn btn-primary radius"><i class="icon-plus"></i> 添加导航</a></span>
					<span class="r"><a href="rnav.html" class="btn btn-danger radius"><i class="icon-trash"></i>进入回收站</a></span>
				 </div>
				<div class="panel-body">
   <table class="table table-border table-bordered table-hover table-bg table-sort">
					<thead>
						<tr>
					        
					    </tr>
						<tr class="text-c">
							<th width="150"><input type="checkbox" id="checkbox-1"></th>
							<th width="150">ID</th>
							<th width="200">导航名字</th>
							<th width="200">描述</th>
						
							<th width="180">上级导航</th>
							<th width="150">是否在导航栏显示</th>
							<th width="200">添加时间</th>
							<th width="200">操作</th>
						</tr>
					</thead>
					<tbody>
					<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$datas): ?>
						<tr class="text-c">
							<td><input type="checkbox" value="<?php echo $datas['id']; ?>" class="ids"></td>
							<td><?php echo $datas['id']; ?></td>
							<td><?php echo !empty($datas['name'])?$datas['name']:'无法显示'; ?></td>
							<td><?php echo $datas['description']; ?></td>
							
							<td><?php echo $datas['top']; ?></td>
							<td><?php echo !empty($datas['show'])?"显示":"不显示"; ?></td>
							<td><?php echo $datas['top']; ?></td>
							<td class="f-14 picture-manage">
								<a title="编辑" href="javascript:;" onclick="article_edit('资讯编辑','upnav?id=<?php echo $datas['id']; ?>','','')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
					 		 <a style="text-decoration:none" class="dabshan" data-id="<?php echo $datas['id']; ?>" href="javascript:;" title="删除">
						<i class="Hui-iconfont">&#xe6e2;</i>
					</a> 
						
			        		</td>
						</tr>
					<?php if(is_array($datas['second']) || $datas['second'] instanceof \think\Collection || $datas['second'] instanceof \think\Paginator): if( count($datas['second'])==0 ) : echo "" ;else: foreach($datas['second'] as $key=>$list): ?>
						<tr class="text-c">
							<td><input type="checkbox" value="<?php echo $list['id']; ?>" class="ids"></td>
							<td><?php echo $list['id']; ?></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;├─<?php echo !empty($list['name'])?$list['name']:'无法显示'; ?></td>
							<td><?php echo $list['description']; ?></td>
							
							<td><?php echo $list['top']; ?></td>
							<td><?php echo !empty($list['show'])?"显示":"不显示"; ?></td>
							<td><?php echo $list['top']; ?></td>
							<td class="f-14 picture-manage">
								<a title="导航修改" href="javascript:;" onclick="article_edit('导航修改','upnav?id=<?php echo $list['id']; ?>','','')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
						 <a style="text-decoration:none" class="dabshan" data-id="<?php echo $list['id']; ?>" href="javascript:;" title="删除">
						<i class="Hui-iconfont">&#xe6e2;</i>
					</a>
			        		</td>
						</tr>
						<?php if(is_array($list['there']) || $list['there'] instanceof \think\Collection || $list['there'] instanceof \think\Paginator): if( count($list['there'])==0 ) : echo "" ;else: foreach($list['there'] as $key=>$vo): ?>
						<tr class="text-c">
							<td><input type="checkbox" value="<?php echo $vo['id']; ?>" class="ids"></td>
							<td><?php echo $vo['id']; ?></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└─<?php echo !empty($vo['name'])?$vo['name']:'无法显示'; ?></td>
							
							<td><?php echo $vo['description']; ?></td>
							
							<td><?php echo $vo['top']; ?></td>
							<td><?php echo !empty($vo['show'])?"显示":"不显示"; ?></td>
							<td><?php echo $vo['top']; ?></td>
							<td class="f-14 picture-manage">
								<a title="导航修改" href="javascript:;" onclick="article_edit('导航修改','upnav?id=<?php echo $vo['id']; ?>','','')" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
					  <a style="text-decoration:none" class="dabshan" data-id="<?php echo $list['id']; ?>" href="javascript:;" title="删除">
						<i class="Hui-iconfont">&#xe6e2;</i>
					</a>
			        		</td>
						</tr>
					<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
					</tbody>
				</table>
				<table>
</table>
<div id="pageNav" class="pageNav"> 
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
			</div>
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
/*资讯-编辑*/
function article_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*导航-删除*/
$('.dabshan').click(function(){
    	var idds=$(this).attr('data-id');
    	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
            url:"<?php echo url('Nav/do_delnav'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }); 
		setInterval(function () {location.href="<?php echo url('Nav/listnav'); ?>";
                                },1000);
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
/*导航-批量删除*/
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
            url:"<?php echo url('Nav/do_delnav'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                        location.href="<?php echo url('Nav/listnav'); ?>";
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