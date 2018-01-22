$(function(){
	var in_top_swiper = new Swiper('.in_top_swiper',{
//		pagination:'.in_top_swiper .pagination',
//		paginationClickable:true,
		calculateHeight : true,
		autoplay : 3000,
		loop : true,
	});
	$('.in_top_swiper .arrowLeft').click(function(){
		in_top_swiper.swipePrev();
	});
	$('.in_top_swiper .arrowRight').click(function(){
		in_top_swiper.swipeNext();
	});	
	
	//tab切换
	$(".panel_1_title div").mouseover(function(){
		$(".panel_1_title div").removeClass("active");
		$(this).addClass("active");
		var i = $(this).index();
		$(".panel_1_content ul").removeClass("active");
		$(".panel_1_content ul").eq(i).addClass("active");
	})
	
	//EV解图
	$(".in_EVphoto li").hover(function(){
		$(this).find("p").stop().animate({"bottom":"0"});
	},function(){
		$(this).find("p").stop().animate({"bottom":"-30px"});
	})
	
	//头部搜索框
	var sttus = 0;
	$(".header .search_btn").click(function(){
		if(status==0){
			$(".header .search").show().stop().animate({"right":"32px","opacity":"1"});
			status = 1;
		}else{
			$(".header .search").hide().stop().animate({"right":"-160px","opacity":"0"});
			status = 0;
		}
	})
	
})