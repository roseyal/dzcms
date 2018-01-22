<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:29:"./templates/lhd/products.html";i:1509695368;s:25:"templates\lhd\header.html";i:1509609118;s:23:"templates\lhd\foot.html";i:1509693506;}*/ ?>
<!DOCTYPE html>
<!--由中企动力科技股份有限公司上海第一分公司技术部设计制作<br>如果您有任何意见或建议请电邮dm-puxi@300.cn-->
<html xmlns="http://www.w3.org/1999/xhtml">  
  <head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>产品中心,产品中心,上海泊松半导体应用材料有限公司</title>
<meta name="keywords" content=",产品中心" />
<meta name="description" content="产品中心,上海泊松半导体应用材料有限公司,商品中心"/>  
    <link href="/templates/lhd/css/lib.min.css?t=1476171860690.css" rel="stylesheet" type="text/css" />
<link href="/templates/lhd/css/page_products.min.css?t=1476171860690.css" rel="stylesheet" type="text/css" />
  
    <script type="text/javascript" src="/templates/lhd/js/jquery.js"></script>
<script type="text/javascript" src="/templates/lhd/js/lib.min.js"></script>
<script src="/templates/lhd/publicScripts/components/??FrontColumns_navigation01.min.js,FrontProductsCategory_show01.min.js,FrontProducts_list01.min.js"></script>
<script src="/templates/lhd/scripts/i18n/??FrontProducts_list01.js"></script>
 
  </head>  
  <body id="products"> 
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

      <!-- 头部导航结束 -->        <div class="main" id="box_main">         <div class="main_products" id="box_main_products">           <div class="main_products_left" id="box_main_products_left">             <div class="main_products_left_title" id="box_main_products_left_title">               <DIV xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1467860015399" name="说明页">  
                <div id="FrontSpecifies_show01-1467860015399" class="FrontSpecifies_show01-d3_c1"><div class="describe htmledit">
       <p>
	<img alt="" src="/templates/lhd/imageRepository/d2ec21e6-b25a-461b-b9db-1468c91afc13.png" /></p></div>
</div>               </DIV>             </div>              <div class="main_products_left_list" id="box_main_products_left_list">               <DIV xmlns="" class="columnSpace" id="elem-FrontProductsCategory_show01-1467864028182" name="商品分类">  
                <script type="text/javascript">
//<![CDATA[
FrontProductsCategory_show01['FrontProductsCategory_show01-1467864028182_init'] = function() {
	jQuery("div[class^=FrontProductsCategory_show01-d1] > div.menu-first > ul > li").hover( function() {
		jQuery("div[class^=FrontProductsCategory_show01-d1] .menu-second").hide();
		jQuery(this).children("div.menu-second").show();
		jQuery(this).children("div.menu-second > a.menu-text1").addClass("current");
	}, function() {
		jQuery("div[class^=FrontProductsCategory_show01-d1] .menu-second").hide();
		jQuery(this).children("div.menu-second > a.menu-text1").removeClass("current");
	});
}
jQuery(document).ready(FrontProductsCategory_show01['FrontProductsCategory_show01-1467864028182_init']);
//]]>
</script>
<div id="FrontProductsCategory_show01-1467864028182" class="FrontProductsCategory_show01-d1_c2"><div class="menu-first">

  </div>
</div>               </DIV>             </div>              <div class="main_products_left_tel" id="box_main_products_left_tel">               <DIV xmlns="" class="columnSpace" id="elem-FrontSpecifies_show01-1467860725344" name="说明页">  
                <div id="FrontSpecifies_show01-1467860725344" class="FrontSpecifies_show01-d3_c1"><div class="describe htmledit">
       <p>
	<a href="/contactus/&amp;i=1&amp;comContentId=1.html"><img alt="" src="/templates/lhd/imageRepository/49d907ec-c9b3-4cee-a3a4-8e628654acb7.png" /></a></p>
<p>
	&nbsp;</p>
<p>
	<a href="/products.html"><img alt="" src="/templates/lhd/imageRepository/0fb462dc-4d3c-45fa-ab9e-3b3a43d1a97a.png" /></a></p></div>
</div>               </DIV>             </div>           </div>            <div class="main_products_right" id="box_main_products_right">             <div class="main_products_right_title" id="box_main_products_right_title">               <div class="clearBoth"></div>                <DIV xmlns="" class="columnSpace" id="elem-FrontPublic_breadCrumb01-1467863899379" name="面包屑">  
                <div id="FrontPublic_breadCrumb01-1467863899379" class="FrontPublic_breadCrumb01-d1_c1"><div>
	您现在的位置：<a href="/products/pmcId=15.html" target="_self" >产品中心</a>
			</div>
</div>               </DIV>             </div>              <div class="main_products_right_content" id="box_main_products_right_content">               <DIV xmlns="" class="columnSpace" id="elem-FrontProducts_list01-1467869605725" name="商品列表">  
                <!-- 装饰器样式开始 -->
<div class="border_00">
     <div class="border_00-topr">
    <div class="border_00-topl">
    </div>
  </div>
  <div class="border_00-mid">
      <div class="borderContent"><div id="FrontProducts_list01-1467869605725" class="FrontProducts_list01-d3_c1_01"><div class="comptitle_00"><strong class="titlestyle_00">商品列表展示</strong></div><form id="FrontProducts_list01-1467869605725_Form" name="FrontProducts_list01-1467869605725_Form" action="/FrontProducts.do?method=submit" method="post" >
			<input type="hidden" name="action_page"	value="/products.html"/>
				<input type="hidden" name="pmcId" value="15"/>
				<input type="hidden" name="pmscId" value=""/>
				<input type="hidden" name="keyword" value=""/>
				<input type="hidden" name="propertyId" value=""/>
				<input type="hidden" name="searchType" value=""/>
				<input type="hidden" name="brandId" value=""/>
				<input type="hidden" name="beginValue" value=""/>
				<input type="hidden" name="endValue" value=""/>
				<input type="hidden" name="orderby" value="8"/>
				<input type="hidden" name="spType" value=""/>
				<input type="hidden" name="pageNo_FrontProducts_list01-1467869605725" value="1"/>
				<input type="hidden" name="pageSize_FrontProducts_list01-1467869605725" value="12"/>
				</form>
		<div class="type">
			<span class="sort">
				</span>
		</div>
		<ul	class="mainul productlist-02">
		<?php  $taginfo=db('news')->field('*')->where("1=1")->order('id asc')->limit(0,21)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
			<li class="content column-num4">
					<div class="pic-module">
						<div class="pic">
									<a href="<?php echo $vo['url']; ?>"
										title="" target="_self">
										<img src= "/public/Uploads/<?php echo $vo['smallimage']; ?>" id= "FrontProducts_list01-1467869605725_45" alt= "" title= "" onerror= "this.src='/images/common/noimage.jpg'" /></a>
								</div>
							</div>
					<div class="pro-module">
						<ul class="basic">
							<li class="code">
									<h1>
										<span>产品名称：</span>
										<strong>
											<a href="<?php echo $vo['url']; ?>"
												title=""
												target="_self">
												<?php echo $vo['title']; ?></a>
										</strong>
									</h1>
									</li>
								</ul>
						<p class="buttonP">
							</p>
					</div>
				</li>
				<?php endforeach; ?>
				</ul>
		<div class="skip-pages">
					<div class="bottom">
						<div class="pageJump"><div class="number"><span class="disabled">首页</span><span class="disabled">上一页</span><span class="current">1</span><span class="disabled">下一页</span><span class="disabled">末页</span></div><script language="javascript" type="text/JavaScript">
//<![CDATA[
var locatonb8972d6605794e81ba409d89fbc8c889=window.location.href;function scriptFunctionb8972d6605794e81ba409d89fbc8c889(){var hrefTemp = document.getElementById("hrefTempIdb8972d6605794e81ba409d89fbc8c889").value;var hrefPageNo = document.getElementById("pageNoIdb8972d6605794e81ba409d89fbc8c889");var hrefPageNoValue = hrefPageNo.value;var pattern = /^\d+(\.\d+)?$/;if(pattern.test(hrefPageNoValue)&&hrefPageNoValue>0&&hrefPageNoValue<=1){window.location.href = hrefTemp.replace("b8972d6605794e81ba409d89fbc8c889",hrefPageNoValue);}else{alert("页数输入不合法");hrefPageNo.focus();}}function jumpbutton_b8972d6605794e81ba409d89fbc8c889(){var hrefPageNo = document.getElementById("pageNoIdb8972d6605794e81ba409d89fbc8c889");var hrefPageNoValue = hrefPageNo.value;var pattern = /^\d+$/;if(pattern.test(hrefPageNoValue)&&hrefPageNoValue>0&&hrefPageNoValue<=1){jump_b8972d6605794e81ba409d89fbc8c889(hrefPageNoValue,12)}else{alert("页数输入不合法");hrefPageNo.focus();}}function jump_b8972d6605794e81ba409d89fbc8c889(page_no,page_size){var current_size="pageSize_FrontProducts_list01-1467869605725=12";var current_no="pageNo_FrontProducts_list01-1467869605725=1";var jumpLocation=locatonb8972d6605794e81ba409d89fbc8c889;if(locatonb8972d6605794e81ba409d89fbc8c889.indexOf("=")==-1){jumpLocation=jumpLocation.replace(".html","/.html");}if(locatonb8972d6605794e81ba409d89fbc8c889.indexOf(current_no)!=-1){jumpLocation=jumpLocation.replace(current_no,"pageNo_FrontProducts_list01-1467869605725="+page_no);}else{jumpLocation=jumpLocation.replace(".html","&pageNo_FrontProducts_list01-1467869605725="+page_no+".html");}if(locatonb8972d6605794e81ba409d89fbc8c889.indexOf(current_size)!=-1){jumpLocation=jumpLocation.replace(current_size,"pageSize_FrontProducts_list01-1467869605725="+page_size);}else{jumpLocation=jumpLocation.replace(".html","&pageSize_FrontProducts_list01-1467869605725="+page_size+".html");} window.location.href = jumpLocation;return false;}
//]]>
</script></div>
</div>
				</div>
			<script type="text/javascript">
//<![CDATA[
	FrontProducts_list01['FrontProducts_list01-1467869605725_init'] = function() {
		jQuery(".specChangeImg").click(function(){
			var data = $(this).metadata();
			var srcStr=$(this).find("img").attr("src");
			$(this).parent().find(".specChangeImg").removeClass("click");
			$(this).addClass("click");
			if(srcStr!=""){
				jQuery("#FrontProducts_list01-1467869605725_"+data.id).attr("src",srcStr);
			}
		});
	};
	jQuery(document).ready(FrontProducts_list01['FrontProducts_list01-1467869605725_init']);
//]]>
</script>
</div>
	  <div class="clearBoth"></div>
	  </div>
  </div>
</div>
<!-- 装饰器样式结束 -->
<script type="text/javascript">
	</script>               </DIV>             </div>           </div>            <div class="clearBoth"></div>         </div>       </div>  
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