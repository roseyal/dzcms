$(document).ready(function(){
    $('.codepic').hover(function(){$('.code').fadeIn()},function(){$('.code').fadeOut()});
    $('.backup').click(function(){
        $('body,html').animate({scrollTop:0},500)
    });
    $(".backup").hide();
    $(function () {
        $(window).scroll(function(){
            if ($(window).scrollTop()>500){
                $(".backup").fadeIn(1000);
            }else{
                $(".backup").fadeOut(1000);
            }
        });
    });

    $(".left_nav li a").click(function(){
        $(this).parent("li").find("ul").slideToggle();
    });
    var nav_ul = $(".nav li");
    nav_ul.hover(function(){
        $(this).addClass("hover");
        $(this).find("dl").stop(true,true).slideDown();
    },function(){
        $(this).removeClass("hover");
        $(this).find("dl").stop(true,true).slideUp();
    });
    $(".banner").slide({ titCell:".num ul" , mainCell:".banner_pic" , effect:"fold", autoPlay:true, delayTime:700 , autoPage:true });

    
    var picShow = "<div id='picShow'><div class='pic_show_box'><div class='pic_quit'></div><a href='javascript:;' title='上一张' class='lbtn'></a><a href='javascript:;' title='下一张' class='rbtn'></a><img width='593' height='442' alt='' /><p><a href='' id='picLink'></a></p></div></div>";
    $(".zoom").click(function(){
        var _this = $(this),liIndex,picUrl,picShowBod,leng,_val,_href;
        liIndex = _this.parents("li").index();
        picUrl = _this.parent("div").find("img").attr("rel");
        _href = _this.parent("div").find("a").attr("href");
        _this.parents("ul").append(picShow);
        picShowBod = $(".pic_show_box");
        picShowBod.find("img").attr("src",picUrl);
        _val = _this.parents("li").find("p").find("a").text();
        $("#picLink").text(_val);
        $("#picLink").attr("href",_href);
        leng = _this.parents("ul").find("li").length;
        $(".lbtn").click(function(){
            if(liIndex>0){
                picUrl = _this.parents("ul").find("li").eq(liIndex-1).find("img").attr("rel");
                _val = _this.parents("ul").find("li").eq(liIndex-1).find("p").find("a").text();
                _href = _this.parents("ul").find("li").eq(liIndex-1).find("p").find("a").attr("href");
                $("#picLink").text(_val);
                picShowBod.find("img").attr("src",picUrl);
                $("#picLink").attr("href",_href);
                return liIndex--;
            }else{
                picUrl = _this.parents("ul").find("li").eq(leng-1).find("img").attr("rel");
                _val = _this.parents("ul").find("li").eq(leng-1).find("p").find("a").text();
                _href = _this.parents("ul").find("li").eq(leng-1).find("p").find("a").attr("href");
                $("#picLink").text(_val);
                picShowBod.find("img").attr("src",picUrl);
                $("#picLink").attr("href",_href);
                liIndex = leng-1;
                return liIndex;
            }
        });
        $(".rbtn").click(function(){
            if(liIndex<leng-1){
                picUrl = _this.parents("ul").find("li").eq(liIndex+1).find("img").attr("rel");
                _val = _this.parents("ul").find("li").eq(liIndex+1).find("p").find("a").text();
                _href = _this.parents("ul").find("li").eq(liIndex+1).find("p").find("a").attr("href");
                $("#picLink").text(_val);
                $(".pic_show_box").find("img").attr("src",picUrl);
                $("#picLink").attr("href",_href);
                return liIndex++;
            }else{
                picUrl = _this.parents("ul").find("li").eq(0).find("img").attr("rel");
                _val = _this.parents("ul").find("li").eq(0).find("p").find("a").text();
                _href = _this.parents("ul").find("li").eq(0).find("p").find("a").attr("href");
                $("#picLink").text(_val);
                $(".pic_show_box").find("img").attr("src",picUrl);
                $("#picLink").attr("href",_href);
                liIndex = 0;
                return liIndex;
            }
        });
        $(".pic_quit").click(function(){
            $("#picShow").remove();
        });
    });
    $(".con5_box>div").hover(function(){
        $(this).find(".black_box").stop(true,true).fadeIn(500);
    },function(){
        $(this).find(".black_box").stop(true,true).fadeOut(500);
    });
});