<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:24:"./admintpl/newspage.html";i:1506600610;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>评论</title>
    <style type="text/css">
        a{text-decoration: none;}
        /*评论列表*/
        .commentList .item{list-style: none outside none;margin: 1rem 0 0}
        .commentList .avatar{border: 1px solid transparent;float: left}
        .comment-main{position:relative;overflow:hidden;margin:0 24px;border:1px solid #dedede;border-radius:2px}
        .comment-header{padding:10px 15px;background:#f8f8f8;border-bottom:1px solid #eee}
        .comment-meta{font-size:13px;color:#999;line-height:1.2}
        .comment-meta a{color:#999}
        .comment-author{font-weight:700;color:#999}
        .comment-body{padding:15px;overflow:hidden;width:80%;float:left;}
        .comment-body>p{margin:0;}
        .comment-body>:last-child{margin-bottom:0}
        .commentList .comment-flip .avatar {float: right}
        .comment-flip .comment-main{margin-left: 0; margin-right: 64px}

        /*按钮*/
        .btn{display:inline-block;box-sizing:border-box;cursor:pointer;text-align:center;font-weight:400;white-space:nowrap;vertical-align: middle;-moz-padding-start:npx; -moz-padding-end:npx;border:solid 1px #ddd; background-color:#fff; width:auto;*zoom:1;*overflow:visible;
            -webkit-transition:background-color .1s linear;
            -moz-transition:background-color .1s linear;
            -o-transition:background-color .1s linear;
            transition:background-color .1s linear}
        a.btn:hover,a.btn:focus,a.btn:active,a.btn.active,a.btn.disabled,a.btn[disabled]{text-decoration:none}
        .btn:active,.btn.active{background-color:#ccc}
        .btn:first-child{*margin-left:0}
        .btn.active,.btn:active{-moz-box-shadow:0 1px 8px rgba(0, 0, 0, 0.125) inset;-webkit-box-shadow:0 1px 8px rgba(0, 0, 0, 0.125) inset; box-shadow:0 1px 8px rgba(0, 0, 0, 0.125) inset}

        /*主要——主色    通常用于确定、提交、购买、支付等*/
        .btn-primary{color:#fff;background-color:#5a98de; border-color:#5a98de}
        .btn-primary:hover,
        .btn-primary:focus,
        .btn-primary:active,
        .btn-primary.active{color:#fff;background-color:#0a6999;border-color:#0a6999}

        /*次要按钮*/
        .btn-secondary{color:#fff;background-color:#3bb4f2; border-color:#3bb4f2}
        .btn-secondary:hover,
        .btn-secondary:focus,
        .btn-secondary:active,
        .btn-secondary.active{color:#fff;background-color:#0f9ae0;border-color:#0f9ae0}

        /*危险*/
        .btn-danger{color:#fff;background-color:#dd514c; border-color:#dd514c;margin-top:10px;}
        .btn-danger:hover,
        .btn-danger:focus,
        .btn-danger:active,
        .btn-danger.active{color:#fff;background-color:#c62b26;border-color:#c62b26}

        /*禁用状态*/
        .btn.disabled{cursor:not-allowed;background-image:none;opacity:.65;filter:alpha(opacity=65);box-shadow:none; pointer-events:none}

        .size-M{padding:4px 12px}
        .size-L{padding:8px 16px}
        .radius{border-radius:4px}

        /*对话框*/
        .fade {opacity: 0;
            -webkit-transition: opacity .15s linear;
            -o-transition: opacity .15s linear;
            transition: opacity .15s linear}
        .fade.in {opacity: 1}
        .modal-open {overflow: hidden}
        .modal{ position:fixed; left:0; top:0; right:0; bottom:0; z-index:1040; display:none; overflow:hidden;-webkit-overflow-scrolling:touch; outline:0}
        .modal.fade .modal-dialog{
            -webkit-transition: -webkit-transform .3s ease-out;
            -o-transition: -o-transform .3s ease-out;
            transition: transform .3s ease-out;
            -webkit-transform: translate(0,-50%);
            -ms-transform: translate(0,-50%);
            -o-transform: translate(0,-50%);
            transform: translate(0,-50%)}
        .modal.in .modal-dialog {
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            -o-transform: translate(0, 0);
            transform: translate(0, 0)}
        .modal-open .modal {overflow-x: hidden;overflow-y: auto}
        .modal-backdrop {position: fixed;top: 0;right: 0;bottom: 0;left: 0;background-color: #000}
        .modal-backdrop.fade {filter: alpha(opacity=0);opacity: 0}
        .modal-backdrop.in {filter: alpha(opacity=50);opacity: .5}
        .modal-dialog {position: relative;width: auto;margin: 10px}
        .modal-content{position: relative;background-color: #fff;border: 1px solid #999;border: 1px solid rgba(0,0,0,.2);outline: 0;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            -webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
            box-shadow: 0 3px 9px rgba(0,0,0,.5)}
        .modal-header {min-height: 16.42857143px;padding: 15px;border-bottom: 1px solid #eee; position:relative}
        .modal-header .close{position:absolute; right:10px; top:10px}
        .modal-header h3,.modal-header .modal-title{margin:0; padding:10px 0; font-size:16px}
        .modal-body {position:relative;padding: 15px;overflow-y:visible;word-break:break-all}
        .modal-form {margin-bottom: 0}
        .modal-footer {padding:15px;margin-bottom: 0;text-align: right;background-color: #f5f5f5;border-top: 1px solid #eee;*zoom: 1}
        .modal-footer:before,.modal-footer:after {display: table;content: ""}
        .modal-footer:after {clear: both}
        .modal-footer .btn + .btn {margin-left: 5px;margin-bottom: 0}
        .modal-footer .btn-group .btn + .btn {margin-left: -1px}
        .modal-footer .btn-block + .btn-block {margin-left: 0}
        .modal-scrollbar-measure {position: absolute;top: -9999px;width: 50px;height: 50px;overflow: scroll}
        .radius .modal-content{ border-radius:6px}
        .radius .modal-footer{ border-bottom-left-radius:6px; border-bottom-right-radius:6px}
        @media (min-width: 768px) {
            .modal-dialog {width: 600px;margin: 30px auto}
            .modal-content {-webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, .5);box-shadow: 0 5px 15px rgba(0, 0, 0, .5)}
            .modal-sm {width: 300px}
        }
        @media (min-width: 992px) {
            .modal-lg {width: 900px}
        }
        .modal-alert{position:fixed; right:auto; bottom:auto; width:300px; left:50%;margin-left:-150px; top:50%;margin-top:-30px; z-index:9999;background-color: #fff;border: 1px solid #999;border: 1px solid rgba(0,0,0,.2);outline: 0;
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            -webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
            box-shadow: 0 3px 9px rgba(0,0,0,.5)}
        .modal-alert-info{padding:30px; text-align:center; font-size:14px; background-color:#fff}

        /*翻页导航*/
        .pageNav{float:none;clear:both;font-size:0px;font-family:Arial,Helvetica,sans-serif;padding:18px 0px;text-align:center}
        .pageNav span,.pageNav a,.pageNav b{font-size:14px;margin-right:5px;overflow:hidden;padding:3px 8px}
        .pageNav a{border:1px solid #CCDBE4;cursor:pointer}
        .pageNav b{color:#000}
        .pageNav .mor{padding:3px;font-weight:bold}
    </style>

</head>
<body>
    
    <ul class="commentList" style="padding: 0;">
    <?php if(is_array($user) || $user instanceof \think\Collection || $user instanceof \think\Paginator): if( count($user)==0 ) : echo "" ;else: foreach($user as $key=>$vo): ?>
        <li class="item cl"> <a href="#"><i class="avatar size-L radius"></i></a>
            <div class="comment-main">
                <header class="comment-header">
                    <div class="comment-meta"><a class="comment-author" href="#"><?php echo $vo['member_id']; ?></a> 评论于
                        <time title="{2014年8月31日 下午3:20}" datetime="2014-08-31T03:54:20"><?php echo date("y-m-d",$vo['comment_time']); ?></time>
                    </div>
                </header>
                <div class="comment-body">
                    <p><?php echo $vo['comment_content']; ?></p>
                </div>
           
                <button class="btn btn-danger size-M  radius comdel" ids="<?php echo $vo['id']; ?>" data-placement="left" title="您将删除本条数据">删除</button>
            </div>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <div id="pageNav" class="pageNav"></div>

<div id="modal-demo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content radius">
            <div class="modal-header">
                <h3 class="modal-title">删除评论</h3>
                <a class="close" data-dismiss="modal" aria-hidden="true" href="javascript:void();">×</a>
            </div>
            <div class="modal-body">
                <p>你确定要删除本条评论吗？删除后将不能恢复。</p>
            </div>
            <div class="modal-footer">

                <button class="btn btn-primary size-M " data-dismiss="modal" aria-hidden="true">确定</button>
                <button class="btn size-M " data-dismiss="modal" aria-hidden="true">关闭</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="__PUBLIC__lib/jquery-ui/1.9.1/jquery-ui.min.js"></script>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__PUBLIC__lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__PUBLIC__static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__PUBLIC__lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="__PUBLIC__lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__lib/laypage/1.2/laypage.js"></script>
<!--分页-->
<script type="text/javascript" >
    var pageNav = pageNav || {};
    pageNav.fn = null;
    pageNav.nav = function(p, pn) {
        if (pn <= 1) {
            this.p = 1;
            this.pn = 1;
            return this.pHtml2(1);
        }
        if (pn < p) {
            p = pn;
        };
        var re = "";
        if (p <= 1) {
            p = 1;
        } else {
            re += this.pHtml(p - 1, pn, "&lt;上一页");
            re += this.pHtml(1, pn, "1");
        }
        this.p = p;
        this.pn = pn;
        var start = 2;
        var end = (pn < 5) ? pn: 4;
        if (p >= 4) {
            re += "<span class='mor'>. . .</span>";
            start = p - 1;
            var e = p + 1;
            end = (pn < e) ? pn: e;
        }
        for (var i = start; i < p; i++) {
            re += this.pHtml(i, pn);
        };
        re += this.pHtml2(p);
        for (var i = p + 1; i <= end; i++) {
            re += this.pHtml(i, pn);
        };
        if (end < pn - 0) {
            re += "<span class='mor'>. . .</span>";
            re += this.pHtml(pn, pn);
        };
        if (p < pn + 2) {
            re += this.pHtml(p + 1, pn, "下一页&gt;");
        };
        return re;
    };
    pageNav.pHtml = function(pageNo, pn, showPageNo) {
        showPageNo = showPageNo || pageNo;
        var H = " <a href='javascript:pageNav.go(" + pageNo + "," + pn + ");' class='btn btn-secondary radius size-L'>" + showPageNo + "</a> ";
        return H;
    };
    pageNav.pHtml2 = function(pageNo) {
        var H = " <span class='btn btn-primary-outline radius disabled'>" + pageNo + "</span> ";
        return H;
    };
    pageNav.go = function(p, pn) {
        document.getElementById("pageNav").innerHTML = this.nav(p, pn);
        if (this.fn != null) {
            this.fn(this.p, this.pn);
        };
    };
</script>

<script type="text/javascript">
    //显示弹出框
    function modaldemo(){
        $("#modal-demo").modal("show")
    }
    //分页
    window.onload = (function(){
        // optional set
        pageNav.pre="&lt;上一页";
        pageNav.next="下一页&gt;";
        // p,当前页码,pn,总页面
        pageNav.fn = function(p,pn){$("#pageinfo").text("当前页:"+p+" 总页: "+pn);};
        //重写分页状态,跳到第三页,总页33页
        pageNav.go(1,13);
    });
    $('.table-sort').dataTable({
        "lengthMenu":false,//显示数量选择
        "bFilter": false,//过滤功能
        "bPaginate": false,//翻页信息
        "bInfo": false,//数量信息
        "aaSorting": [[ 1, "desc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            {"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
        ]
    });
</script>
<script type="text/javascript">
    $('.comdel').click(function(){
        var id=$(this).attr('ids');
        //alert(id);
        layer.confirm('确认要删除吗？',function(index){
        $.ajax({
            url:"<?php echo url('News/comdel'); ?>",
            type:'POST',
            data:{id:id},
            success:function(result){
                //alert(result.msg);
                switch(result.status){
                   case 1:
                   layer.msg(result.msg, {
                          icon: 1,
                          time: 1000 
                        }, function(){
                        setTimeout("location.reload();",1000);
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
</script>
</body>
</html>