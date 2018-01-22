<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:26:"./admintpl/titleslist.html";i:1508848704;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" type="text/css" href="/public/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/public/lib/Hui-iconfont/1.0.8/iconfont.min.css" />
    <style type="text/css">
        .ui-sortable .panel-header{ cursor:move}
    </style>
    <title>回收站</title>
    <meta name="keywords" content="关键词,5个左右,单个8汉字以内">
    <meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">
</head>
<body ontouchstart>
<div class="containBox">
	<div class="wap-container">
        <nav class="breadcrumb">
        <div class="container">
        <i class="Hui-iconfont">&#xe67f;</i>
        <a href="/" class="c-primary">首页</a>
        <span class="c-gray en">&gt;</span>
        <span class="c-gray">用户管理</span>
        <span class="c-gray en">&gt;</span>
        <span class="c-gray">用户解禁</span>
        </div>
        </nav>
		<div class="container ui-sortable" >
			<h2>用户解禁	</h2>
			<div class="panel panel-default" style="padding-bottom: 30px;">
				<div class="panel-header clearfix" >
					<span class="f-l">
						<input type="submit" id="del_law_all" class="btn btn-secondary radius"  value="解禁" >
					</span>
				</div>
				<div class="panel-body">
					<table class="table table-border table-bg table-bordered  radius table-hover">
      					 <thead >
			              <tr>
			              <th> <input type="checkbox" id="check_rule_all"></th>
			                <th>编号</th>
			                <th>用户名</th>
			                <th>性别</th>
			                <th>手机号</th>
			                <th>邮箱</th>
			                <th>禁用时间</th>
			                <th>操作</th>
			              </tr>
			            </thead>
			            <tbody>
                 <?php if(is_array($info['data']) || $info['data'] instanceof \think\Collection || $info['data'] instanceof \think\Paginator): if( count($info['data'])==0 ) : echo "" ;else: foreach($info['data'] as $key=>$info): ?>
    <tr>
                            <th> <input type="checkbox" id="checked" class="ids" value="<?php echo $info['id']; ?>"></th>
			                    <th><?php echo $info['id']; ?></th>
                                <td><?php echo $info['nickname']; ?></td>
                                <td><?php echo !empty($info['sex'])?'男':'女'; ?></td>
                                <td><?php echo $info['phone']; ?></td>
                                <td><?php echo $info['email']; ?></td>
                                <td><?php echo $info['lastdate']; ?></td>
                                <td><input type="submit" class="btn btn-secondary radius sub" value="解禁" jiechu=<?php echo $info['id']; ?>> </td>
	 </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
                 </tbody>
    				</table>
                    <div class="va-m">
                        <?php echo $pages; ?>
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
					
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery-ui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="/public/lib/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/validate-methods.js"></script>
<script type="text/javascript" src="/public/lib/jquery.validation/1.14.0/messages_zh.min.js"></script>
<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script>
<script type="text/javascript">
        $('#check_rule_all').click(function(){
            if($(this).is(':checked')){
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
            if(idds==''){
                return false;
            }
            idds=idds.substr(0,idds.length-1);
            $.ajax({
                url:"<?php echo url('Member/do_jiechu'); ?>",
                type:"POST",
                data:{
                    id:idds
                },
                success:function(){
                    layer.msg('解禁成功', {icon: 1,time:1000});
                    setTimeout("location.reload();",1000);
                },
                error:function(){
                    layer.msg('解禁失败', {icon: 5,time:1000});
                }

            });
        });
        $('.sub').click(function(){
            var id=$(this).attr('jiechu');
            $.ajax({
                url:"<?php echo url('Member/do_jiechu'); ?>",
                type:"POST",
                data:{
                    id:id
                },
                success:function(){
                    layer.msg('解禁成功', {icon: 1,time:1000});
                    setTimeout("location.reload();",1000);
                },
                error:function(){
                    layer.msg('解禁失败', {icon: 5,time:1000});
                }
            });
        });
</script>
</body>
</html>