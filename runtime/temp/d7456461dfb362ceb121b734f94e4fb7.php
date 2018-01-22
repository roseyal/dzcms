<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:25:"./templates/lhd/news.html";i:1509695124;s:25:"templates\lhd\header.html";i:1509609118;s:23:"templates\lhd\foot.html";i:1509693506;}*/ ?>
<!DOCTYPE html>

<!--由中企动力科技股份有限公司上海第一分公司技术部设计制作<br>如果您有任何意见或建议请电邮dm-puxi@300.cn-->
<html xmlns="http://www.w3.org/1999/xhtml">  
  <head> 
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />  
    <title>新闻中心,新闻中心,上海泊松半导体应用材料有限公司</title>
<meta name="keywords" content=",新闻中心" />
<meta name="description" content="新闻中心,上海泊松半导体应用材料有限公司,"/>  
    <link href="/templates/lhd/css/lib.min.css?t=1476171860690.css" rel="stylesheet" type="text/css" />
<link href="/templates/lhd/css/page_news.min.css?t=1476171860690.css" rel="stylesheet" type="text/css" />
  
    <script type="text/javascript" src="/templates/lhd/js/jquery.js"></script>
<script type="text/javascript" src="/templates/lhd/js/lib.min.js"></script>
<script src="/templates/lhd/publicScripts/components/??FrontColumns_navigation01.min.js,FrontNewsCategory_tree01.min.js,FrontNews_list01.min.js"></script>
<script src="/templates/lhd/scripts/i18n/??FrontNews_list01.js"></script>
 
  </head>  
  <body  id="news"> 
    <div class="pageWidth" id="box_root"> 
      <!-- 头部导航开始 -->  
      	  <div id="box_header">
        <div class="header_nv" id="box_header_nv"> 
          <div class="header_nv_logo" id="box_header_nv_logo"> 
            <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1467337321942" name="说明页">  
              <div id="FrontSpecifies_show01-1467337321942" class="FrontSpecifies_show01-d3_c1"><div class="describe htmledit">
       <p>
	<a href="/index.html"><img alt="" src="/templates/lhd/imageRepository/dazhi.png" style="margin-top:25px" /></a></p></div>
</div> 
            </div>
          </div>  
          <div class="header_nv_dh" id="box_header_nv_dh"> 
            <div xmlns="" class="columnSpace" id="elem-FrontColumns_navigation01-1467337351397" name="栏目导航">  
              <script type="text/javascript">
	//<![CDATA[
	FrontColumns_navigation01['FrontColumns_navigation01-1467337351397_init'] = function (){
		FrontColumns_navigation01.d2ddlevelsmenu.init("d2menubar_FrontColumns_navigation01-1467337351397", "topbar");
	}
	$(FrontColumns_navigation01['FrontColumns_navigation01-1467337351397_init']);
	// ]]>
</script>
<div id="FrontColumns_navigation01-1467337351397" class="FrontColumns_navigation01-d2_c1"><div id="d2menubar_FrontColumns_navigation01-1467337351397" class="mattblackmenu">
		<ul class="nav-first">
            <li class="first">
					<a href="<?php echo url('Index/index'); ?>" title="首页">首页</a>
			</li>
			<?php $taginfo = db("category")->field('catename as title,url,id,letter,inputtime,parentid,image,description')->where("1=1 and ismenu=2 and isdel=0 and parentid=0")->order('id asc')->limit('')->select(); foreach($taginfo as $vo):?>
				<li class="first">
					<a href="<?php echo $vo['url']; ?>" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></a>
				</li>
			<?php endforeach; ?>
			<!--<li >
				<a href="aboutus.html" title="关于我们">关于我们</a>
			</li>
			<li >
				<a href="products.html" title="产品展示">产品展示</a>
			</li>
			<li >
				<a href="news.html" title="新闻资讯">新闻资讯</a>
			</li>
			<li >
				<a href="technical.html" title="技术工艺">技术工艺</a>
			</li>
			<li >
				<a href="contactus.html" title="联系我们">联系我们</a>
			</li>-->
		</ul>
	</div>
	</div> 
            </div>
          </div>  
          <div class="clearBoth"></div> 
        </div> 
      </div>  
      <div id="box_banner"> 
        <div class="banner_b" id="box_banner_b"> 
          <div xmlns="" class="columnSpace" id="elem-FrontPublic_slideShow01-1467342312285" name="公用幻灯">  
            <script language="javascript">
	//<![CDATA[
		FrontPublic_slideShow01['FrontPublic_slideShow01-1467342312285_init'] = function (){
		 FrontPublic_slideShow01['FrontPublic_slideShow01-1467342312285_init'] = new FrontPublic_slideShow01();
		 FrontPublic_slideShow01['FrontPublic_slideShow01-1467342312285_init'].d5_slide("960","");
		}
		$( FrontPublic_slideShow01['FrontPublic_slideShow01-1467342312285_init']);
	// ]]>
</script>  
<script type="text/javascript" src="/publicScripts/common/superslide.2.1.js"></script>
<div id="FrontPublic_slideShow01-1467342312285" class="FrontPublic_slideShow01-d6_c1"><div class="fullSlide">
	<div class="bd">
		<ul>
       <li>
        			<a href="javascript:void(0)" class="f_pic" >
		       	  			<img src="/templates/lhd/imageRepository/79a5615b-2e83-4c55-b3e5-8a3757689464.jpg" />
		       	  			</a>
		       	  			<a href="javascript:void(0)" class="f_title" >
		       	  			</a>
						</li>     
	   <li>
        			<a href="javascript:void(0)" class="f_pic" >
		       	  			<img src="/templates/lhd/imageRepository/532b29cb-407b-4761-a904-6941f7052b49.jpg" />
		       	  			</a>
		       	  			<a href="javascript:void(0)" class="f_title" >
		       	  			</a>
						</li>     
	   </ul>
	</div>
	<div class="hd"><ul></ul></div>
	<span class="prev"></span>
	<span class="next"></span>
</div>
	<script type="text/javascript">
$(".fullSlide").hover(function(){
    $(this).find(".prev,.next").stop(true, true).fadeTo("show", 0.5)
},
function(){
    $(this).find(".prev,.next").fadeOut()
});
$(".fullSlide").slide({
    titCell: ".hd ul",
    mainCell: ".bd ul",
    effect: "fold",
    autoPlay: true,
    autoPage: true,
    trigger: "click",
	interTime:"5"*1000,
    startFun: function(i) {
        var curLi = jQuery(".fullSlide .bd li").eq(i);
        if ( !! curLi.attr("_src")) {
            curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
        }
    }
});
</script>   
</div> 
          </div>
        </div> 
      </div>  

      <!-- 头部导航结束 -->        <div class="main" id="box_main">         <div class="main_news" id="box_main_news">           <div class="main_news_left" id="box_main_news_left">             <div class="main_news_left_title" id="box_main_news_left_title">               <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1467880031605" name="说明页">  
                <div id="FrontSpecifies_show01-1467880031605" class="FrontSpecifies_show01-d3_c1"><div class="describe htmledit">
       <p>
	<img alt="" src="/templates/lhd/imageRepository/9e3ad95d-018f-4909-85fa-c23b7b90f892.png" /></p></div>
</div>               </div>            </div>              <div class="main_news_left_list" id="box_main_news_left_list">               <div xmlns="" class="columnSpace" id="elem-FrontNewsCategory_tree01-1467880687380" name="资讯分类">  
                <script type="text/javascript">
//<![CDATA[
  FrontNewsCategory_tree01['FrontNewsCategory_tree01-1467880687380_init'] = function (){
			$("div[class^=FrontNewsCategory_tree01-d2] > div.menu-first > ul > li").hover( function() {
				$(this).children("div.menu-second").show(1);
				$(this).children("div.menu-second > a.menu-text1").addClass("current");
			}, function() {
				$(this).children("div.menu-second").hide();
				$(this).children("div.menu-second > a.menu-text1").removeClass("current");
			});
}
$(FrontNewsCategory_tree01['FrontNewsCategory_tree01-1467880687380_init']);
//]]>
</script>
<div id="FrontNewsCategory_tree01-1467880687380" class="FrontNewsCategory_tree01-d2_c1"><div class="menu-first">
    <ul>
      <li class="menu-none">
			<a href="/news/newsCategoryId=3.html" target="_self" class="menu-text1">
				公司新闻</a>
				</li>
    	<li class="menu-none">
			<a href="/news/newsCategoryId=2.html" target="_self" class="menu-text1">
				行业新闻</a>
				</li>
    	</ul>
  </div>
</div>               </div>            </div>              <div class="main_news_left_tel" id="box_main_news_left_tel">               <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1467880048052" name="说明页">  
                <div id="FrontSpecifies_show01-1467880048052" class="FrontSpecifies_show01-d3_c1"><div class="describe htmledit">
       <p>
	<a href="/contactus/&amp;i=1&amp;comContentId=1.html"><img alt="" src="/templates/lhd/imageRepository/7d94cad6-418a-49ed-a0cc-36d0ecb3b23f.png" /></a></p>
<p>
	&nbsp;</p>
<p>
	<a href="/products.html"><img alt="" src="/templates/lhd/imageRepository/38a2edb2-ff83-4dc7-a380-b506cee18a09.png" /></a></p></div>
</div>               </div>            </div>           </div>            <div class="main_news_right" id="box_main_news_right">             <div class="main_news_right_title" id="box_main_news_right_title">               <div class="clearBoth"></div>                <div xmlns="" class="columnSpace" id="elem-FrontPublic_breadCrumb01-1467880857914" name="面包屑">  
                <div id="FrontPublic_breadCrumb01-1467880857914" class="FrontPublic_breadCrumb01-d1_c1"><div>
	您现在的位置：<a href="/index.html" target="_self" >首页</a>
		->&nbsp;<a href="/news/newsCategoryId=4.html" target="_self" >新闻中心</a>
			</div>
</div>               </div>            </div>              <div class="main_news_right_content" id="box_main_news_right_content">               <div xmlns="" class="columnSpace" id="elem-FrontNews_list01-1467881780967" name="资讯列表">  
                <script type="text/javascript">	
	// <![CDATA[
	FrontNews_list01['FrontNews_list01-1467881780967_init'] = function(){
		var showDegree=0;
		var showQuestionTag=0;
		var showMessageCount=0;
		var otherShowDegree=0;
		var otherShowMessageCount=0;
		var otherShowQuestionTag=0;
		
			otherShowMessageCount=1;
		
			if(showDegree == '1' || showQuestionTag == '1' || showMessageCount == '1' ){
				
					FrontNews_list01.getAjaxValueByNewsId("10","false",showDegree,showMessageCount,showQuestionTag,"FrontNews_list01-1467881780967_VisitedCount_1","FrontNews_list01-1467881780967_CommentCount_1","FrontNews_list01-1467881780967_showQuestionTag_1");
				
					FrontNews_list01.getAjaxValueByNewsId("9","false",showDegree,showMessageCount,showQuestionTag,"FrontNews_list01-1467881780967_VisitedCount_2","FrontNews_list01-1467881780967_CommentCount_2","FrontNews_list01-1467881780967_showQuestionTag_2");
				
					FrontNews_list01.getAjaxValueByNewsId("1","false",showDegree,showMessageCount,showQuestionTag,"FrontNews_list01-1467881780967_VisitedCount_3","FrontNews_list01-1467881780967_CommentCount_3","FrontNews_list01-1467881780967_showQuestionTag_3");
				
					FrontNews_list01.getAjaxValueByNewsId("4","false",showDegree,showMessageCount,showQuestionTag,"FrontNews_list01-1467881780967_VisitedCount_4","FrontNews_list01-1467881780967_CommentCount_4","FrontNews_list01-1467881780967_showQuestionTag_4");
				
					FrontNews_list01.getAjaxValueByNewsId("6","false",showDegree,showMessageCount,showQuestionTag,"FrontNews_list01-1467881780967_VisitedCount_5","FrontNews_list01-1467881780967_CommentCount_5","FrontNews_list01-1467881780967_showQuestionTag_5");
				
			}		
		
	}
	function setVisited(id,linkUrl,detailOpenStyle){	
		$.get("/FrontNews.do", "method=getVisitedCountByAjax&newsId="+id, function(data){
			var linkUrl1 = linkUrl;
			var OpenStyle = detailOpenStyle
			var url = '/FrontNews.do?method=setVisitedCountByAjax&newsId='+id+'&times='+data;
			$.post(url, function(data){
				window.open(linkUrl1,OpenStyle);
				});
		},'html');
	}

	$(FrontNews_list01['FrontNews_list01-1467881780967_init']);
	// ]]>
	
	Date.prototype.Format = function (fmt) { //author: meizz 
	    var o = {
	        "M+": this.getMonth() + 1, 
	        "d+": this.getDate(), 
	        "h+": this.getHours(), 
	        "m+": this.getMinutes(), 
	        "s+": this.getSeconds(), 
	        "q+": Math.floor((this.getMonth() + 3) / 3), 
	        "S": this.getMilliseconds() 
	    };
	    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
	    for (var k in o)
	    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
	    return fmt;
	}
	
	
	window.onload =function (){
		  
			var startDate = "";
			var endDate = "";
	 	 	 if(startDate != ""){
				if(endDate != ""){
					var newDate=  new Date().Format("yyyy/MM/dd");
					var newDateValue = Date.parse(newDate);
					var endDate1= endDate.replace(/-/g, "/");
					var endDateValue =  Date.parse(endDate1);
					
					if(endDateValue - newDateValue < 0){
						var infoMakerValue = document.getElementById("10_infoMaker");
						if(infoMakerValue !=null){
							infoMakerValue.style.display = "none";
						}
					}else{
						var infoMakerValue = document.getElementById("10_infoMaker");
						if(infoMakerValue !=null){
							infoMakerValue.style.display = "block";
						}
					}
				}else{
					var infoMakerValue = document.getElementById("10_infoMaker");
					if(infoMakerValue !=null){
						infoMakerValue.style.display = "block";
					}
				}
			}  
			
		
			var startDate = "";
			var endDate = "";
	 	 	 if(startDate != ""){
				if(endDate != ""){
					var newDate=  new Date().Format("yyyy/MM/dd");
					var newDateValue = Date.parse(newDate);
					var endDate1= endDate.replace(/-/g, "/");
					var endDateValue =  Date.parse(endDate1);
					
					if(endDateValue - newDateValue < 0){
						var infoMakerValue = document.getElementById("9_infoMaker");
						if(infoMakerValue !=null){
							infoMakerValue.style.display = "none";
						}
					}else{
						var infoMakerValue = document.getElementById("9_infoMaker");
						if(infoMakerValue !=null){
							infoMakerValue.style.display = "block";
						}
					}
				}else{
					var infoMakerValue = document.getElementById("9_infoMaker");
					if(infoMakerValue !=null){
						infoMakerValue.style.display = "block";
					}
				}
			}  
			
		
			var startDate = "";
			var endDate = "";
	 	 	 if(startDate != ""){
				if(endDate != ""){
					var newDate=  new Date().Format("yyyy/MM/dd");
					var newDateValue = Date.parse(newDate);
					var endDate1= endDate.replace(/-/g, "/");
					var endDateValue =  Date.parse(endDate1);
					
					if(endDateValue - newDateValue < 0){
						var infoMakerValue = document.getElementById("1_infoMaker");
						if(infoMakerValue !=null){
							infoMakerValue.style.display = "none";
						}
					}else{
						var infoMakerValue = document.getElementById("1_infoMaker");
						if(infoMakerValue !=null){
							infoMakerValue.style.display = "block";
						}
					}
				}else{
					var infoMakerValue = document.getElementById("1_infoMaker");
					if(infoMakerValue !=null){
						infoMakerValue.style.display = "block";
					}
				}
			}  
			
		
			var startDate = "";
			var endDate = "";
	 	 	 if(startDate != ""){
				if(endDate != ""){
					var newDate=  new Date().Format("yyyy/MM/dd");
					var newDateValue = Date.parse(newDate);
					var endDate1= endDate.replace(/-/g, "/");
					var endDateValue =  Date.parse(endDate1);
					
					if(endDateValue - newDateValue < 0){
						var infoMakerValue = document.getElementById("4_infoMaker");
						if(infoMakerValue !=null){
							infoMakerValue.style.display = "none";
						}
					}else{
						var infoMakerValue = document.getElementById("4_infoMaker");
						if(infoMakerValue !=null){
							infoMakerValue.style.display = "block";
						}
					}
				}else{
					var infoMakerValue = document.getElementById("4_infoMaker");
					if(infoMakerValue !=null){
						infoMakerValue.style.display = "block";
					}
				}
			}  
			
		
			var startDate = "";
			var endDate = "";
	 	 	 if(startDate != ""){
				if(endDate != ""){
					var newDate=  new Date().Format("yyyy/MM/dd");
					var newDateValue = Date.parse(newDate);
					var endDate1= endDate.replace(/-/g, "/");
					var endDateValue =  Date.parse(endDate1);
					
					if(endDateValue - newDateValue < 0){
						var infoMakerValue = document.getElementById("6_infoMaker");
						if(infoMakerValue !=null){
							infoMakerValue.style.display = "none";
						}
					}else{
						var infoMakerValue = document.getElementById("6_infoMaker");
						if(infoMakerValue !=null){
							infoMakerValue.style.display = "block";
						}
					}
				}else{
					var infoMakerValue = document.getElementById("6_infoMaker");
					if(infoMakerValue !=null){
						infoMakerValue.style.display = "block";
					}
				}
			}  
			
		
	}
</script>
<div id="FrontNews_list01-1467881780967" class="FrontNews_list01-d1_c1"><ul class="comstyle newslist-01">

	 <?php $childidarr=db('category')->field('id')->where('parentid='.$cateid)->select();$childid=''; if($childidarr):  foreach($childidarr as $k=>$v):      $childid .= $childidarr[$k]['id'].',';  endforeach;  $childid = substr($childid,0,-1);else:$childid=$cateid;endif;$countinfo = db('news')->where('1=1 and cateid in ('.$childid.')')->count();$countinfo = $countinfo ? $countinfo :1 ;$row = 2;$countpage = ceil($countinfo/$row);$pagestr =  ''; $pagestr .= "<ul style='list-style: none;clear:both;height: auto;overflow: hidden;'>";for($i = 1 ; $i <= $countpage ; $i++){   if($countpage == 1) break;   if($pages == $i){ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;font-weight: bold' href='###'>$i</a></li>";   }else{ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;' href='?cateid=$cateid&page=$i'>$i</a></li>";   }}$pagestr .= "</ul>";  $taginfo=db('news')->alias('a')->field('b.catename,b.url as cateurl,a.*')->join('category b','a.cateid=b.id')->where("cateid in (".$childid.") and 1=1")->order('id asc')->limit(($pages-1)*$row,$row)->select();$page=$pagestr;if($taginfo):   foreach($taginfo as $vo): ?>
	 <li class="content column-num1">
 	<div class="newstitle">
				<ul>
					<li class="title">
						<h3>
						<a href="<?php echo $vo['url']; ?>" title="上海泊松半导体应用材料有限公司" target="_self">
        									<?php echo $vo['title']; ?></a>
        							</h3>
					</li>
					</ul>
			</div>
			<div class="newslist">
				<ul>
					<li class="pic">
						<a href="<?php echo $vo['url']; ?>" title="上海泊松半导体应用材料有限公司" target="_self">
                                <img src= "/public/Uploads/<?php echo $vo['smallimage']; ?>" alt= "上海泊松半导体应用材料有限公司" title= "上海泊松半导体应用材料有限公司" /></a>
					</li>
					<li class="summary">
						<h3></h3>
						<p><?php echo $vo['abstract']; ?><a  class="detail" href="<?php echo $vo['url']; ?>" title=" " target="_self"> &gt;&gt;</a></p>
					</li>
					</ul>
			</div>
			</li>
			<li class="clearBoth"></li>
			<li class="showLine"></li>
			<?php    endforeach;else: endif; ?>
		
			</ul>
	
	<div class="pageJump"><div class="pageJump"><div class="number"><span class="disabled">首页</span><span class="disabled">上一页</span><a href="#" onclick="return jump_db75b0867f8a4eb481e65fd48725088b(2,5);">下一页</a><a href="#" onclick="return jump_db75b0867f8a4eb481e65fd48725088b(2,5);">末页</a></div><script language="javascript" type="text/JavaScript">
//<![CDATA[
var locatondb75b0867f8a4eb481e65fd48725088b=window.location.href;function scriptFunctiondb75b0867f8a4eb481e65fd48725088b(){var hrefTemp = document.getElementById("hrefTempIddb75b0867f8a4eb481e65fd48725088b").value;var hrefPageNo = document.getElementById("pageNoIddb75b0867f8a4eb481e65fd48725088b");var hrefPageNoValue = hrefPageNo.value;var pattern = /^\d+(\.\d+)?$/;if(pattern.test(hrefPageNoValue)&&hrefPageNoValue>0&&hrefPageNoValue<=2){window.location.href = hrefTemp.replace("db75b0867f8a4eb481e65fd48725088b",hrefPageNoValue);}else{alert("页数输入不合法");hrefPageNo.focus();}}function jumpbutton_db75b0867f8a4eb481e65fd48725088b(){var hrefPageNo = document.getElementById("pageNoIddb75b0867f8a4eb481e65fd48725088b");var hrefPageNoValue = hrefPageNo.value;var pattern = /^\d+$/;if(pattern.test(hrefPageNoValue)&&hrefPageNoValue>0&&hrefPageNoValue<=2){jump_db75b0867f8a4eb481e65fd48725088b(hrefPageNoValue,5)}else{alert("页数输入不合法");hrefPageNo.focus();}}function jump_db75b0867f8a4eb481e65fd48725088b(page_no,page_size){var current_size="FrontNews_list01-1467881780967_pageSize=5";var current_no="FrontNews_list01-1467881780967_pageNo=1";var jumpLocation=locatondb75b0867f8a4eb481e65fd48725088b;if(locatondb75b0867f8a4eb481e65fd48725088b.indexOf("=")==-1){jumpLocation=jumpLocation.replace(".html","/.html");}if(locatondb75b0867f8a4eb481e65fd48725088b.indexOf(current_no)!=-1){jumpLocation=jumpLocation.replace(current_no,"FrontNews_list01-1467881780967_pageNo="+page_no);}else{jumpLocation=jumpLocation.replace(".html","&FrontNews_list01-1467881780967_pageNo="+page_no+".html");}if(locatondb75b0867f8a4eb481e65fd48725088b.indexOf(current_size)!=-1){jumpLocation=jumpLocation.replace(current_size,"FrontNews_list01-1467881780967_pageSize="+page_size);}else{jumpLocation=jumpLocation.replace(".html","&FrontNews_list01-1467881780967_pageSize="+page_size+".html");} window.location.href = jumpLocation;return false;}
//]]>
</script></div>
</div></div>               </div>            </div>           </div>            <div class="clearBoth"></div>         </div>       </div>  
      <!-- 底部版权开始 --> 
	  <div id="box_footer"> 
        <div class="footer_dibunav" id="box_footer_dibunav"> 
          <div class="footer_dibunav_left" id="box_footer_dibunav_left"> 
            <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1467603025877" name="说明页">  
              <div id="FrontSpecifies_show01-1467603025877" class="FrontSpecifies_show01-d3_c1"><div class="describe htmledit">
       <p>
	<span style="font-size:18.7px;"><span style="font-family: 华文楷体;">我公司主要生产：内外表面光亮、尺寸精密、小直径不锈钢管。</span></span></p>
<p>
	<span style="font-size:18.7px;"><span style="font-family: 华文楷体;">&nbsp;</span>&nbsp; &nbsp;</span></p>
<table border="0" cellpadding="0" cellspacing="0" style="line-height: 32px; font-family: 微软雅黑;" width="680">
	<tbody>
		
	</tbody>
</table></div>
</div> 
            </div>
          </div>  
          <div class="footer_dibunav_right" id="box_footer_dibunav_right"> 
            <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1467603108162" name="说明页">  
              <div id="FrontSpecifies_show01-1467603108162" class="FrontSpecifies_show01-d3_c1"><div class="describe htmledit">
       <table border="0" cellpadding="0" cellspacing="0" style="line-height: 38px; font-family: &quot;微软雅黑&quot;;;" width="500">
	<tbody>
		<tr>
			<td style="width: 281px; color: rgb(255, 255, 255); font-size: 14px;;">
				<p>
					<span style="color:#f0ffff;">地址：上海市松江区昆港公路1088号</span></p>
				<p>
					<span style="color:#f0ffff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;黄山市徽州区文峰西路16号</span></p>
			</td>
			<td style="width: 3px;;">
				&nbsp;</td>
			<td align="right" rowspan="5" valign="center">
				<span style="color:#f0ffff;">&nbsp;<img alt="" src="/templates/lhd/imageRepository/01b820cf-bbe2-4d1e-89c1-0aeeb7f6b135.jpg" style="width: 180px; height: 180px;" /></span></td>
		</tr>
		<tr>
			<td style="width: 281px; color: rgb(255, 255, 255); font-size: 14px;;">
				<span style="color:#f0ffff;">电话：021-37628936、0559-5220288</span></td>
			<td style="width: 3px;;">
				&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 281px; color: rgb(255, 255, 255); font-size: 14px;;">
				<span style="color:#f0ffff;">传真：&nbsp;021-37628871</span></td>
			<td style="width: 3px;;">
				&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 281px; color: rgb(255, 255, 255); font-size: 14px;;">
				<span style="color:#f0ffff;">邮箱： </span><a body="" href="mailto:roger@poisson.com.cn" subject=""><span style="color:#f0ffff;">info@poisson.com.cn</span></a></td>
			<td style="width: 3px;;">
				&nbsp;</td>
		</tr>
		<tr>
			<td style="width: 281px; color: rgb(255, 255, 255); font-size: 14px;;">
				<span style="color:#f0ffff;">网址：</span><a href="http://www.poisson.com.cn"><span style="color:#f0ffff;">www.poisson.com.cn</span></a></td>
			<td style="width: 3px;;">
				&nbsp;</td>
		</tr>
	</tbody>
</table></div>
</div> 
            </div>
          </div>  
          <div class="clearBoth"></div> 
        </div>  
        <div class="footer_copyright" id="box_footer_copyright"> 
          <div xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1467609503988" name="说明页">  
            <div id="FrontSpecifies_show01-1467609503988" class="FrontSpecifies_show01-d3_c1"><div class="describe htmledit">
       <table border="0" cellpadding="0" cellspacing="0" style="color: #fff;" width="1200">
	<tbody>
		<tr>
			<td align="left">
				<span style="font-size: 16px;"><span style="line-height: 24px; font-family: 微软雅黑;">版权所有 &copy; 上海泊松半导体应用材料有限公司 &nbsp;黄山创岳洁净管有限公司 &nbsp; &nbsp; &nbsp;<a href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备15033570</a></span></span></td>
			<td align="right">
				&nbsp;</td>
		</tr>
	</tbody>
</table>
<SCRIPT LANGUAGE="JavaScript" >
document.writeln("<a href='http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20111208144637264'><img src='imageRepository/82e20c7d-26a6-41ed-b47a-52cb793ce29a.gif' border=0></a>")</SCRIPT></div>
</div> 
          </div>
        </div> 
      </div>  
      <!-- 底部版权结束 --> 
    </div> 
  <div id="elem-FrontPublic_wisher01-2014"></div><script language='javascript' src='http://ztouch5.gather.shushang-z.cn/scripts/visittrack.js'  type='text/javascript'></script><script type='text/javascript'>var visittrack_siteId ='NEWZADD2016060100426'; var visittrack_url='http://ztouch5.gather.shushang-z.cn/trace.do';VisitTrack.visittrack_log( visittrack_siteId, visittrack_url);</script></body>
</html>