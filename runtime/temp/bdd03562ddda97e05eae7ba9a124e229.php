<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:22:"./admintpl/newsup.html";i:1510121707;s:65:"D:\phpStudy\WWW\new\dzcms/application/admin\view\public\foot.html";i:1508459970;}*/ ?>
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
<title>内容添加</title>
<meta name="keywords" content="关键词,5个左右,单个8汉字以内">
<meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">
</head>
<body>
		 
		<div class="container ui-sortable">
			<h1>资讯修改</h1>
			
			<div class="panel panel-default">
				<!-- <div class="panel-header clearfix">
					<span class="f-l">左侧标题</span>
					<span class="f-r">右侧标题</span>
				</div> -->
				<div class="panel-body">
	<form action="" method="post" id="form-admin-add" enctype="multipart/form-data">
		<table class="table table-border table-bordered">
      		<tbody class="skin-minimal">
      		 <tr>
      		 <input type="hidden" name="id" value="<?php echo $list['id']; ?>">
          </tr>
			  <tr>
				<th width="100" class="text-r"><span class="c-red">*</span> 内容标题：</th>

				<td>
					<div class="formControls col-xs-3 col-sm-4">
					<input type="text" style="width:200px" class="input-text" id="title" name="title" value="<?php echo $list['title']; ?>" required />
					</div>
				</td>
			  </tr>
			  <tr>
				<th width="100" class="text-r"> 简短标题：</th>

				<td>
					<div class="formControls col-xs-3 col-sm-4">
					<input type="text" class="input-text" id="title" name="shorttitle" value="<?php echo $list['shorttitle']; ?>" />
					</div>
				</td>
			  </tr>
			  <tr>
				  <th width="100" class="text-r"><span class="c-red">*</span> 来源：</th>
				  <td>
					  <div class="formControls col-xs-3 col-sm-4">
					  <input type="text" class="input-text" 
					  value="<?php echo $list['source']; ?>"  placeholder="" id="source" name="source" datatype="*2-16" nullmsg="来源不能为空">
					  </div>
				  </td>
			  </tr>
			  	  <tr>
				<th class="text-r"> 作者：</th>
				<td>
					<div class="formControls col-xs-3 col-sm-5">
					<input type="text" class="input-text"
				 value="<?php echo $list['author']; ?>"  placeholder="" id="description" name="author">
					</div>
				</td>
			  </tr>
			  <tr>
				<th class="text-r"> 关键字：</th>
				<td>
					<div class="formControls col-xs-3 col-sm-5">
					<input type="text" class="input-text" 
					 value="<?php echo $list['keywords']; ?>"  placeholder="" id="description" name="keywords">
					</div>
				</td>
			  </tr>
				<tr>
				<th class="text-r"> <span class="c-red">*</span>文章摘要：</th>
				<td>
					<div class="formControls col-xs-3 col-sm-5">
					<textarea id="wenzhang" name="abstract" value="<?php echo $list['abstract']; ?>" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="$.Huitextarealength(this,200)"></textarea>
					</div>
				</td>
			  </tr>
			  	<tr>
				  <th width="100" class="text-r">允许评论：</th>
				  <td>
		<div class="row cl">
			<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				<div class="check-box">
					<input type="radio" name="category"<?php if($list['category'] == '1'): ?> checked="checked" <?php endif; ?> value="1"><small>启用</small>
                    <input type="radio" name="category" <?php if($list['category'] == '0'): ?> checked="checked" <?php endif; ?> value="0"><small>禁用</small>
                                        
					<label for="checkbox-pinglun">&nbsp;</label>
				</div>
			</div>
		</div>
				  </td>
			  </tr>
			  <tr>
				<th class="text-r">缩略图：</th>
				<td>
					<div class="formControls col-xs-8">
                   <div style=" height: 200px; width: auto;">
                       <img src="/public/Uploads/<?php echo $list['smallimage']; ?>" style="max-height: 200px; width: auto;" id="fileimg" />
                    </div>
                    <span class="btn-upload form-group" style="margin: 10px 0 0 70px;">
                <!-- <input class="input-text upload-url" type="text" name="uploadfile-2" id="uploadfile-2" readonly style="width:200px"> -->
                <a href="javascript:void();" class="btn btn-primary upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
                <input type="file" id="file" multiple name="smallimage" class="input-file" onchange="preview(this)" >
                </span>
				</div>

				</td>
			  </tr>
			  <tr>
				<th class="text-r">主要内容：</th>
				<td>
						<script id="editor" name="content" type="text/plain" style="width:98%;height:300px;padding-left: 15px;">
						<?php echo $list['content']; ?>
						</script>

				</td>
			  </tr>
			  <tr>
				<th></th>
				<td>
	                <input class="btn btn-primary radius" style="margin-left: 50px;" value="&nbsp;&nbsp;提交&nbsp;&nbsp;" id="sub" type="button">
	                <input class="btn btn-success radius" style="margin-left: 50px;" type="button" value="存草稿">
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
<script type="text/javascript" src="/public/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/public/lib/layer/2.4/layer.js"></script> 
<script type="text/javascript" src="/public/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/public/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/UEditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/public/UEditor/ueditor.all.min.js"> </script>
<script type="text/javascript" src="/public/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/public/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
	var ue = UE.getEditor('editor'); 
</script>

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
	onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			$(form).ajaxSubmit();
			var index = parent.layer.getFrameIndex(window.name);
			parent.$('.btn-refresh').click();
			parent.layer.close(index);
		}
		});
	});
</script>
 <script>  
       document.getElementById("wenzhang").value="<?php echo $list['abstract']; ?>"  
    </script>
    <script>  
       document.getElementById("editor").value="<?php echo $list['content']; ?>"  
    </script>
 <script>
    function preview(file){
        if (file.files && file.files[0]){
            var reader = new FileReader();
            reader.onload = function(evt){
                // prevDiv.innerHTML = '<img width="100%" height="100%" id="qw_img" src="' + evt.target.result + '" />';
                $('#fileimg').attr('src' , evt.target.result);
            }
            reader.readAsDataURL(file.files[0]);
        }else{
            // prevDiv.innerHTML = '<div class="img" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src=\'' + file.value + '\'"></div>';  
            $('#fileimg').attr('src' , file.value);
        }
    }
$('#sub').click(function(){
	var formData = new FormData(document.getElementById("form-admin-add"));
		$.ajax({
			  url:"<?php echo url('News/do_newsup'); ?>",
              type:'POST',
              data:formData,
			  contentType: false,
				processData: false,
				success:function(result){
                switch(result.status){
                   case 1:
                   layer.msg(result.msg, {
						  //icon: 1,
						  time: 2000 
						},function () {
                        parent.location.reload();		//刷新父页面
                    }); 
                break;
                    case 2 :layer.msg(result.msg, {
                        //offset: 't',
                        anim: 6
                    });
                break;
                }
            },
				error:function(result){
					alert('未知错误');
				}
			
		});
	});
</script>

</body>
</html>
<!--H-ui前端框架提供前端技术支持 h-ui.net @2017-01-01 -->