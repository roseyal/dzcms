// 四川尚狐网络
// http://www.shangfox.com
// 2013-2016

// 跳转到手机版本
function mobile_device_detect(url){
	var thisOS=navigator.platform;
	var os=new Array("iPhone","iPod","iPad","android","Nokia","SymbianOS","Symbian","Windows Phone","Phone","Linux armv71","MAUI","UNTRUSTED/1.0","Windows CE","BlackBerry","IEMobile");
	for(var i=0;i<os.length;i++){
		if(thisOS.match(os[i])){
			window.location=url;
		}
	}
	if(navigator.platform.indexOf('iPad') != -1){
		window.location=url;
	}
	var check = navigator.appVersion;
	if( check.match(/linux/i) ){
		if(check.match(/mobile/i) || check.match(/X11/i)){
			window.location=url;
		}
	}
	Array.prototype.in_array = function(e){
		for(i=0;i<this.length;i++){
			if(this[i] == e) return true;
		}
	return false;
	}
}
// mobile_device_detect("/m");

// 常用切换
function setTab(name,cursel,n){
    for(i=1;i<=n;i++){
        var menu=document.getElementById(name+i);
        var con=document.getElementById("con_"+name+"_"+i);
        menu.className=i==cursel?"hover":"";
        con.style.display=i==cursel?"block":"none";
    }
}

// $(function(){
// 	//左右div等高
// 	var mh = $('.mainBar').offsetHeight();
//     var sh = $('.sideBar').offsetHeight();
//     if (mh > sh) {
//         $('.sideBar').offsetHeight(mh);
//     }else{
//         $('.mainBar').offsetHeight(sh);
//     }
// })

// 	//左右div等高
// $(document).ready(function() { 
// 	  var main=$(".mainWrap").height()+40; 
// 	  $(".sideBar").css("height",main+"px"); 
// 	  $(".mainBar").css("height",main+"px"); 
// }) 

//弹出登录框
function head_6_pub(){
    $('#head_6_pub_bg').css({'display':'block'});
    $('#head_6_pub').css({'display':'block','top':'100px','right':($(window).width()-680)/2});
    $('#head_6_pub_close_login').click(function(){
        $('#head_6_pub_bg').css({'display':'none'});
        $('#head_6_pub').css({'display':'none'});
    });
}


$(function(){
    $('.curr').click(function(){
        if($('.listt').css('display') == 'none'){
            $('.listt').slideDown();
        }else{
            $('.listt').slideUp();
        }
    });
    $('.listt a').click(function(){
        $('.curr b').html($(this).html());
        $('#type').attr('value',$(this).attr('title'));
        $('.listt').slideUp();
    })

    //登录表单验证
    $("#head_6_pub_login").submit(function(){
        //用户名验证
        if ($("input[name='username']").val().trim()=='') {
            alert('用户名不能为空！');
            $("input[name='username']").focus();
            return false;
        }
        //密码验证
        if ($("input[name='password']").val().trim()=='') {
            alert('密码不能为空！');
            $("input[name='password']").focus();
            return false;
        }
        //验证码验证
        if ($("input[name='code']").val().trim()=='') {
            alert('验证码不能为空！');
            $("input[name='code']").focus();
            return false;
        }
        return true;
    })
    
});