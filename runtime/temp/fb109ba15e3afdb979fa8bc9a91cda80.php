<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:22:"./admintpl/proadd.html";i:1508935285;}*/ ?>
<!DOCTYPE HTML>
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
<title>产品添加</title>
<meta name="keywords" content="关键词,5个左右,单个8汉字以内">
<meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">
</head>
<body>
 <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 产品添加 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
		 
		<div class="container ui-sortable">
			<h1>产品添加</h1>
			<div class="panel panel-default">
				<!-- <div class="panel-header clearfix">
					<span class="f-l">左侧标题</span>
					<span class="f-r">右侧标题</span>
				</div> -->
				<div class="panel-body">
		<form action="" method="post" id="form-pro-add" enctype="multipart/form-data">
		<table class="table table-border table-bordered">
      		<tbody class="skin-minimal">

			<tr>
				<th class="text-r"><span class="c-red"></span> 所属分类：</th>
				<td>
		        <span class="select-box"  style="width: 150px; margin-left: 15px">
		      		<select class="select" size="1" name="type">

						<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): if( count($cate)==0 ) : echo "" ;else: foreach($cate as $key=>$vo): ?>
						<option value="<?php echo $vo['id']; ?>"><?php echo $vo['catename']; ?>
						</option>
						<?php if(is_array($vo['second']) || $vo['second'] instanceof \think\Collection || $vo['second'] instanceof \think\Paginator): if( count($vo['second'])==0 ) : echo "" ;else: foreach($vo['second'] as $key=>$sec): ?>
						<option style="color:blue" value="<?php echo $sec['id']; ?>">----<?php echo $sec['catename']; ?>
						</option>
						<?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
		      		</select>
		    	</span>
				</td>
			</tr>


			  <tr>
				<th width="100" class="text-r"><span class="c-red">*</span> 产品名称：</th>

				<td>
					<div class="formControls col-xs-3 col-sm-4">
					<input type="text" class="input-text" name="name" required />
					</div>
				</td>
			  </tr>


			<tr>
				<th class="text-r"> 关键词：</th>
				<td>
					<div class="formControls col-xs-3 col-sm-4">
						<input type="text" class="input-text" value="" placeholder="" id="description" name="keywords">
					</div>
				</td>
			</tr>



			  <tr>
				  <th class="text-r">产品图集：</th>
				  <td>
					  <div class="formControls col-xs-3 col-sm-5">
						<span class="btn-upload form-group">
	  <input class="input-text upload-url radius" type="text"  readonly ><a class="btn btn-primary radius"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
	  <input type="file" id="uploadfile-1"  name="photo[]" multiple class="input-file" onchange="upimg(this)">
	</span>
					<div id="lookimg">

					</div>
					  </div>

				  </td>


			  </tr>




			  <tr>
				  <th width="100" class="text-r"><span class="c-red"></span> 价格：</th>

				  <td>
					  <div class="formControls col-xs-3 col-sm-4">
						  <input type="text" class="input-text" style="width: 50%;" name="money"  />
					  </div>
				  </td>
			  </tr>



			  <tr>
				  <th width="100" class="text-r"><span class="c-red"></span> 市场价格：</th>

				  <td>
					  <div class="formControls col-xs-3 col-sm-4">
						  <input type="text" class="input-text" style="width: 50%;" name="market_price"  />
					  </div>
				  </td>
			  </tr>


			<tr>
				<th width="100" class="text-r"><span class="c-red"></span> 型号：</th>

				<td>
					<div class="formControls col-xs-3 col-sm-4">
						<input type="text" class="input-text" style="width: 50%;" name="version"  />
					</div>
				</td>
			</tr>

			<tr>
				<th width="100" class="text-r"><span class="c-red"></span> 颜色：</th>

				<td>
					<div class="formControls col-xs-3 col-sm-4">
						<input type="text" class="input-text" style="width: 50%;" name="color"  />
					</div>
				</td>
			</tr>


			<tr>
				<th width="100" class="text-r"><span class="c-red"></span> 材质：</th>

				<td>
					<div class="formControls col-xs-3 col-sm-4">
						<input type="text" class="input-text" style="width: 50%;" name="texture"  />
					</div>
				</td>
			</tr>


			<tr>
				<th width="100" class="text-r"><span class="c-red"></span> 品牌：</th>

				<td>
					<div class="formControls col-xs-3 col-sm-4">
						<input type="text" class="input-text" style="width: 50%;" name="brand"  />
					</div>
				</td>
			</tr>



			<tr>
				<th width="100" class="text-r"><span class="c-red"></span> 作者：</th>

				<td>
					<div class="formControls col-xs-3 col-sm-4">
						<input type="text" class="input-text" style="width: 50%;" name="author"  />
					</div>
				</td>
			</tr>


			<tr>
				<th width="100" class="text-r"><span class="c-red"></span> 来源：</th>

				<td>
					<div class="formControls col-xs-3 col-sm-4">
						<input type="text" class="input-text" style="width: 50%;" name="source"  />
					</div>
				</td>
			</tr>





			 	<tr>
				<th class="text-r"> 详细介绍：</th>
				<td>
					<div class="formControls col-xs-3 col-sm-5">
					<textarea name="description" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="$.Huitextarealength(this,200)" ></textarea>
					</div>
				</td>
			  </tr>




			  <tr>
				<th></th>
				<td>
	                <input class="btn btn-primary radius" style="margin-left: 50px;" value="&nbsp;&nbsp;提交&nbsp;&nbsp;" id="sub" type="button">
				</td>
			  </tr>
        	</tbody>

		</table>
	</form>
				</div>
			</div>

		</div>
		<footer class="footer mt-20">
			<div class="container">
				<nav class="footer-nav">
					<a target="_blank" href="http://www.h-ui.net/aboutHui.shtml">关于H-ui</a>
					<span class="pipe">|</span>
					<a target="_blank" href="http://www.h-ui.net/copyright.shtml">软件著作权</a>
					<span class="pipe">|</span>
					<a target="_blank" href="http://www.h-ui.net/juanzeng.shtml">感谢捐赠</a>
				</nav>
				<p>Copyright &copy;2013-2017 H-ui.net All Rights Reserved. <br>
					<a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn/">京ICP备15015336号-1</a>
					<br>
					未经允许，禁止转载、抄袭、镜像<br>
					用心做站，做不一样的站</p>
			</div>
		</footer>


<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script> 
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/UEditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/UEditor/ueditor.all.min.js"> </script>
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>



<script type="text/javascript">
	$(function(){
		$("#form-admin-add").validate({
			rules:{
				title:{
					required:true,
				},
				shorttitle:{
					required:true,
				},
				abstract:{
					required:true,
				},
				source:{
					required:true,
				},
				
			},
		});


	});
</script>
<script type="text/javascript">

    function upimg(obj) {
		var le=obj.files.length;
		var str='';
		for(var i=0;i<le;i++){
            if(obj.files[i].type!='image/jpeg'){
                layer.msg('请上传图片', {icon: 5});
                $('#lookimg').html('');
                $('#uptext').val('');
                var file = $("#uploadfile-1") ;	//移除file
                file.after(file.clone().val(""));
                file.remove();
                return;
            }
            var file=obj.files[i];
            var path=window.URL.createObjectURL(file)
			str+='<img src="'
			+path+'" width="100" height="100" style="display: block; margin:10px; float:left;" />';
        }
        $('#lookimg').html(str);
    }

    /*提交按钮*/
    $('#sub').click(function () {
        var form=new FormData(document.getElementById('form-pro-add'));
		$.ajax({
			url:"<?php echo url('News/do_proadd'); ?>",
			type:'POST',
			data:form,
            processData:false,
            contentType:false,
			success:function (data) {
				if(data=='succ'){
                    layer.msg('添加产品成功', {icon: 6},function () {
                        location.href="<?php echo url('News/prolist'); ?>";
                    });
				}
                if(data=='fail'){
                    layer.msg('添加产品失败', {icon: 5});
                }
            },
			error:function (err) {
				alert(err);
            }
		})
    })
</script>
</body>
</html>
<!--H-ui前端框架提供前端技术支持 h-ui.net @2017-01-01 -->