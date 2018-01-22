<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:27:"./admintpl/caterecover.html";i:1513237448;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
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
<title>分类列表</title>
</head>
<body>
 <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 栏目管理 <span class="c-gray en">&gt;</span> 回收站 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
        <div class="container ui-sortable">
            <h1></h1> 
                <div class="text-c" style="height: 24px;">
        <form style="float:right" action="<?php echo url('News/caterecover'); ?>" method="post" >
        
            <input type="text" class="input-text" style="width:250px;" placeholder="输入栏目名称" name="content" value="<?php if(!(empty($val) || (($val instanceof \think\Collection || $val instanceof \think\Paginator ) && $val->isEmpty()))): ?><?php echo $val; endif; ?>">
            <button  type="submit" class="btn btn-success" name=""><i class="Hui-iconfont">&#xe665;</i> 搜栏目</button>
        
        </form>
        
        </div>
            <div class="panel panel-default" style="margin-top: 20px">
                <div class="panel-header clearfix">
                <span class="btn btn-danger radius" id="del_law_all">批量删除</span>
                <span class="btn btn-success radius" id="res_law_all">一键还原</span>
                <span class="f-r">共 <?php echo $list1; ?> 条</span>
                </div>
                <div class="panel-body">
                    <table class="table table-border table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <th width="25"><input type="checkbox" id="checkbox-1"></th>
                    <th width="80">ID</th>
                    <th>分类标题</th>
                    <th>简述</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$info): ?>
                <tr class="text-c">
                    <td><input type="checkbox" value="<?php echo $info['id']; ?>" class="ids" name=""></td>
                    <td><?php echo $info['id']; ?></td>
                    <td class="text-l"><u style="cursor:pointer"><?php echo $info['catename']; ?></u></td>
                    <td><?php echo $info['description']; ?></td>
                   <td class="td-status"><span class="label label-danger radius">已删除</span></td>
                    <td class="td-manage">
                    <a style="text-decoration:none" class="ml-5 btn btn-success radius size-MINI restore"  restore=<?php echo $info['id']; ?> title="还原">还原</a> 
                    <a title="删除" class="ml-5 btn btn-danger radius size-MINI subbut" iddel=<?php echo $info['id']; ?> style="text-decoration:none">删除</a>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <div id="pageNav" class="pageNav"> 
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
<script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.js"></script>

<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
//$('.table-sort').dataTable({
  //  "aaSorting": [[ 1, "desc" ]],//默认第几个排序
   // "bStateSave": true,//状态保存
   // "pading":false,
    //"aoColumnDefs": [
					//{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
     // {"orderable":false,"aTargets":[0,4]}// 不参与排序的列
    //]
//});

/*资讯-添加*/
function article_add(title,url,w,h){
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}
/*资讯-编辑*/
function article_edit(title,url,id,w,h){
    var index = layer.open({
        type: 2,
        title: title,
        content: url
    });
    layer.full(index);
}
/*资讯-删除*/
function article_del(obj,id){
    layer.confirm('确认要删除吗？',function(index){
        $.ajax({
            type: 'POST',
            url: '',
            dataType: 'json',
            success: function(data){
                $(obj).parents("tr").remove();
                layer.msg('已删除!',{icon:1,time:1000});
            },
            error:function(data) {
                console.log(data.msg);
            },
        });     
    });
}

/*资讯-审核*/
function article_shenhe(obj,id){
    layer.confirm('审核文章？', {
        btn: ['通过','不通过','取消'], 
        shade: false,
        closeBtn: 0
    },
    function(){
        $(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
        $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
        $(obj).remove();
        layer.msg('已发布', {icon:6,time:1000});
    },
    function(){
        $(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="article_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
        $(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
        $(obj).remove();
        layer.msg('未通过', {icon:5,time:1000});
    }); 
}
/*资讯-下架*/
function article_stop(obj,id){
    layer.confirm('确认要下架吗？',function(index){
        $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
        $(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
        $(obj).remove();
        layer.msg('已下架!',{icon: 5,time:1000});
    });
}

/*资讯-发布*/
function article_start(obj,id){
    layer.confirm('确认要发布吗？',function(index){
        $(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="article_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
        $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
        $(obj).remove();
        layer.msg('已发布!',{icon: 6,time:1000});
    });
}
/*资讯-申请上线*/
function article_shenqing(obj,id){
    $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
    $(obj).parents("tr").find(".td-manage").html("");
    layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

</script> 
<script type="text/javascript">
//////////////////////////////////////////////////////////////
    $('.subbut').click(function(){
            var id=$(this).attr('iddel');
        //alert(id);
        layer.confirm('确认要删除吗？',function(index){
        $.ajax({
            url:"<?php echo url('News/recoverdel'); ?>",
            type:'POST',
            data:{id:id},
            success:function(result){
                //alert(result.msg);
                switch(result.status){
                   case 1:
                        layer.msg(result.msg, {
                        icon: 1,
                        time: 1000 
                    });
                    setTimeout("location.reload();",1000);
                break;
                    case 2 :layer.msg(result.msg, {
                        icon: 1,
                        time: 1000 
                    });
                        break;
                    case 3 :layer.msg(result.msg, {
                       icon: 2,
                        time: 1000 
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
/////////////////////////删除//////////////////////////////
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
        //alert(idds);
        // window.location.href="/admin.php/Navigation/nav_del/id/"+idds;
         layer.confirm('确认一键删除吗？',function(index){
        $.ajax({
            url:"<?php echo url('News/recoverdel'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                //alert(result.msg);
                switch(result.status){
                   case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 1000 
                        }, function(){
                    location.href="<?php echo url('News/caterecover'); ?>";
                    }); 
                break;
                    case 2 :layer.msg(result.msg, {
                          icon: 1,
                          time: 1000 
                    });
                break;
                }
            },
            error:function(){
                layer.msg('未选中任何信息', {icon: 2,time:2000});
            }
        });
    })
}); 
</script>
<script type="text/javascript">
//////////////////////////////还原////////////////////////////////////////
   $('.restore').click(function(){                    

        var id=$(this).attr('restore');
        //alert(id);
        layer.confirm('确认还原吗？',function(index){
        $.ajax({
            url:"<?php echo url('News/caterestore'); ?>",
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
                    setTimeout("location.reload();",2000);
                    break;

                    case 2 :layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                    });
                        break;
                    case 3 :layer.msg(result.msg, {
                          icon: 2,
                          time: 2000 
                    });
                        break;
                }
            },
            error:function(result){
                layer.msg('未选中任何信息', {icon: 2,time:2000});
                
            }
        });
        })
    });
/////////////////////////一键还原//////////////////////////////
    $('#checkbox-1').click(function(){
        if($(this).is(':checked',true)){
            $('.ids').prop('checked',true);
        }else{
            $('.ids').prop('checked',false);
        }
    });
    $('#res_law_all').click(function(){
        var idds='';
        $('.ids').each(function(){
            if($(this).is(':checked')){
                idds+=$(this).val()+',';
            }
        });
        idds=idds.substr(0,idds.length-1);
        //alert(idds);
        // window.location.href="/admin.php/Navigation/nav_del/id/"+idds;
       layer.confirm('您确定要一键还原吗？',function(index){
        $.ajax({                                
            url:"<?php echo url('News/caterestore'); ?>",
            type:'POST',
            data:{id:idds},
            success:function(result){
                switch(result.status){
                   case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 2000 
                        }, function(){
                    location.href="<?php echo url('News/caterecover'); ?>";
                    }); 
                break;
                    case 2 :layer.msg(result.msg, {
                        icon: 2,
                        time: 2000 
                    });
                break;
                }
            },
            error:function(){
                layer.msg('未选中任何信息', {icon: 2,time:2000});
            }
        });
    })
}); 
</script>

</body>
</html>