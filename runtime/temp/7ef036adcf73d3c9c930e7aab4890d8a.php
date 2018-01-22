<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:24:"./admintpl/userlist.html";i:1508847178;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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

<script type="text/javascript" src="/public/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<style type="text/css">
.ui-sortable .panel-header{ cursor:move}
</style>
<title>Hi，H-ui v3.1</title>
<meta name="keywords" content="关键词,5个左右,单个8汉字以内">
<meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">
</head>
<body>
 <nav class="breadcrumb">
	<i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 用户管理 <span class="c-gray en">&gt;</span> 用户列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
 </nav>
<div class="containBox">
	<div class="wap-container">
		<div class="container ui-sortable">
			<h1>用户列表</h1> 
			<div class="panel panel-default">
				<div class="panel-header clearfix">
					<span class="f-l">
						<input class="btn btn-primary radius" type="button" value="新增" onclick="window.location.href='useradd.html'">
						<input class="btn btn-danger radius" id="del_law_all" type="button" value="删除">
					</span>
					<div class="f-r">
					<form action="" method="post" style="float: right;">
						<input type="text" class="input-text" style="width:250px" placeholder="输入管理员名称" name="content" value="<?php if(!(empty($val) || (($val instanceof \think\Collection || $val instanceof \think\Paginator ) && $val->isEmpty()))): ?><?php echo $val; endif; ?>">
						<button type="submit" class="btn btn-success" name="">
							<i class="Hui-iconfont">&#xe665;</i> 搜用户<button>
					</form>
						<!--<input type="text" name="" id="sousuo" placeholder=" 名称" style="width:250px" class="input-text"><button name="" id="" class="btn btn-success" type="submit"><i class="icon-search"></i> 搜索<button>-->
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-border table-bordered table-hover">
      					 <thead>
			              <tr>
			              	<th><input type="checkbox" id="checkbox-1"></th>
			                <th>UID</th>
			                <th>昵称</th>
			                <th>性别</th>
			                <th>登录次数</th>
			                <th>最后登录时间</th>
			                <th>最后登录IP</th>
			                <th>状态</th>
			                <th>操作</th>
			              </tr>
			            </thead>
			            <tbody>
						<?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?>
			              <tr>
			              	<th><input type="checkbox" id="checkbox-2" class="ids" value="<?php echo $li['id']; ?>"></th>
			                <th><?php echo $li['id']; ?></th>
			                <td><?php echo $li['nickname']; ?></td>
			                <td><?php echo !empty($li['sex'])?'男':'女'; ?></td>
			                <td><?php echo $li['loginnum']; ?></td>
			                <td><?php echo $li['lastdate']; ?></td>
			                <td><?php echo $li['ip']; ?></td>
			                <td><?php echo !empty($li['lock'])?'禁用':'启用'; ?></td>
			                <td class="text-c">
								
								<a title="用户修改" href="javascript:;" onclick="article_edit('用户修改','userup?id=<?php echo $li['id']; ?>','','')" style="text-decoration:none"><i class=" btn btn-warning radius size-S">编辑</i></a>
								<input <?php if(($li['lock'] == 1)): ?> class=" disable btn btn-success radius size-S" value="启用" <?php else: ?> class="disable btn btn-warning radius size-S" value="禁用" <?php endif; ?> type="button" id="disable" ids="<?php echo $li['id']; ?>" >
								<input class=" del btn btn-danger radius size-S" type="button"  id="del" ids="<?php echo $li['id']; ?>" value="删除">
			                </td>
			              </tr>
						<?php endforeach; endif; else: echo "" ;endif; ?>
			            </tbody>
    				</table>
				</div>
				<div class="va-m">
					<?php echo $page; ?>
						<!--<input class="btn btn-secondary-outline radius size-M" type="button" value="上一页">-->
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
 <script type="text/javascript">
 function article_edit(title,url,id,w,h){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
 	$('#checkbox-1').click(function(){
 		if($(this).is(':checked',true)){
 			$('.ids').prop('checked',true);
 		}else{
 			$('.ids').prop('checked',false);
 		}
 	});
$('#del_law_all').click(function(){
		var idds = '';
		$('.ids').each(function () {
			if ($(this).is(':checked')) {
				idds += $(this).val() + ',';
			}
		});
		
		
		idds = idds.substr(0, idds.length - 1);
		   layer.confirm('确认要删除吗？',function(index){
		$.ajax({
            url:"<?php echo url('Member/userdel'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                        location.href="<?php echo url('Member/userlist'); ?>";
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
            url:"<?php echo url('Member/userdel'); ?>",
            type:'POST',
            data:{id:ids},
            success:function(result){
                    switch(result.status){
                    case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                        location.href="<?php echo url('Member/userlist'); ?>";
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
	$('.disable').click(function(){
		var mymessage=confirm("确定要进行操作吗?");
		if(mymessage==true) {
			var ids = $(this).attr("ids");
			$.ajax({
				url: "<?php echo url('Member/userban'); ?>",
				type: "POST",
				data: {id: ids},
				success: function() {
					layer.msg('操作成功', {icon: 1,time:1000});
					setTimeout("location.reload();",1000);
					//window.location.reload();
				},
				error: function () {
					layer.msg('优化失败', {icon: 5,time:1000});
				}
			})
		}
	});
</script>
</body>
</html>
<!--H-ui前端框架提供前端技术支持 h-ui.net @2017-01-01 -->