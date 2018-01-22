<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:27:"templates/Evnews/index.html";i:1509691298;s:26:"templates\Evnews\head.html";i:1509518816;s:26:"templates\Evnews\foot.html";i:1509677966;}*/ ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>DZcms</title>
	<meta name="keywords" content="新闻网" />
	<meta name="description" content="bangju网站管理系统,是一款完全开源免费的PHP+MYSQL系统.核心采用了Thinkphp框架等众多开源软件,同时核心功能也作为开源软件发布" />
	<link rel="stylesheet" type="text/css" href="/templates/Evnews/css/idangerous.swiper2.7.6_4.css"/>
	<link rel="stylesheet" type="text/css" href="/templates/Evnews/css/styles_4.css"/>
	<script src="/templates/Evnews/js/jquery-1.11.1.min_4.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
	<!--头部 开始-->
	<header class="header_w w100">
		<div class="header mar1200 clearfix">
			<h1 class="logo fl"><a href="<?php echo url('/home/Index/ceshi'); ?>"><img src="/templates/Evnews/picture/58ca53bc195b8_4.png" /></a></h1>
			<div class="nav fl">
				<ul class="clearfix">
					<li ><a href="<?php echo url('./home/Index/index'); ?>" title="首页">首页</a></li>
					
					<?php $taginfo = db("category")->field('catename as title,url,id,letter,inputtime,parentid,image,description')->where("1=1 and ismenu=2 and isdel=0 and parentid=0")->order('id asc')->limit('8')->select(); foreach($taginfo as $vo):?>
					<li ><a href="<?php echo $vo['url']; ?>" title="<?php echo $vo['title']; ?>"><?php echo $vo['title']; ?></a></li>
					<?php endforeach; ?>
					
			</div>
			
				</div>
			</div>
		</div>
	</header>
	<!--顶部 开始-->
	<div class="in_top_w w100">
		<div class="in_top mar1200 clearfix">
			<div class="swiper-container in_top_swiper fl">
	<a class="arrowLeft arrow" href="javascript:;">&lt;</a>
	<a class="arrowRight arrow" href="javascript:;">&gt;</a>
	<ul class="swiper-wrapper">
					<?php  $taginfo=db('news')->field('*')->where("1=1 and cateid in (18)")->order('id desc')->limit(0,99)->select(); foreach($taginfo as $v): $v['catename']=db('category')->where('id='.$v['cateid'])->find()['catename'];?>
					<li class="swiper-slide"><a href="<?php echo $v['url']; ?>"><img  src="../../public/Uploads/<?php echo $v['smallimage']; ?>" height="370" width="550"/></li></a>
					
					<?php endforeach; ?>
			</ul>
</div>
			<div class="right fr">
				<div class="hot">
					<div class="hot_title">今日热点</div>
					<div class="hot_top1"></div>					<div class="hot_top2">
						<ul class="clearfix">
						<?php  $taginfo=db('news')->field('*')->where("1=1 and cateid in (16)")->order('id desc')->limit(0,8)->select(); foreach($taginfo as $v): $v['catename']=db('category')->where('id='.$v['cateid'])->find()['catename'];?>
 
							<li><a href="<?php echo $v['url']; ?>" title="<?php echo $v['title']; ?>"><?php echo $v['title']; ?></a></li>
							<?php endforeach; ?>
							</ul>
					</div>
				</div>
				<div class="menu">
					<div class="menu_title">精选导航</div>
					<div class="menu_list">
						<ul class="clearfix">
							<li><a href=""><i></i><span>DZ观察家</span></a></li>
							<li><a href=""><i></i><span>DZ会客厅</span></a></li>
							<li><a href=""><i></i><span>DZ品牌汇</span></a></li>
							<li><a href=""><i></i><span>DZ企业家</span></a></li>
							<li><a href=""><i></i><span>DZ俱乐部</span></a></li>
							<li><a href=""><i></i><span>DZ研究院</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--顶部 结束-->
	
	<!--首页广告大图 开始-->
	<?php $taginfo = db()->query('SELECT * FROM dz_ad WHERE id = 44'); $page=' '; foreach($taginfo as $v):?>
	<div class="in_banner_big_w w100">

		<div class="in_banner_big mar1200">
			<a href=""><img  src="../../public/Uploads/<?php echo $v['photo']; ?>" height="120" width="200" alt=""/></a>
		</div>
	</div>
	<?php endforeach; ?>
	<!--首页广告大图 结束-->
		
	<!--板块一 开始-->
	<section class="plate1_w w100">
		<div class="plate1 mar1200 clearfix">
			<div class="plate2_left fl">
				<!--新闻资讯 开始-->
				<div class="in_news plate_container">
					<div class="plate_top clearfix">
						<div class="plate_top_title fl">
						<?php $taginfo=db()->query("select * from dz_category where id=12 "); foreach($taginfo as $v): ?>
							<div class="plate_top_title_c">
								<p class="title1"><?php echo $v['letter']; ?></p>
								<p class="title2"><?php echo $v['catename']; ?></p>
							</div>
							<?php endforeach; ?>
						</div>
						<div class="plate_top_menu fr">
							 <ul class="fl">
							 <li>　　　</li>
							<!--	<li><a href="/redianjujiao.html" title="">热点聚焦</a></li><li><a href="/guonaxinwen.html" title="">国内新闻</a></li><li><a href="/guojixinwen.html" title="">国际新闻</a></li><li><a href="/shendubaodao.html" title="">深度报道</a></li><li><a href="/buweidongtai.html" title="">部委动态</a></li>	-->						</ul> 
													</div>
					</div>
					<div class="plate_content">
						<ul>
						<?php  $taginfo=db('news')->field('*')->where("1=1 and cateid in (16)")->order('id asc')->limit(0,4)->select(); foreach($taginfo as $v): $v['catename']=db('category')->where('id='.$v['cateid'])->find()['catename'];?>
							<li class="clearfix">
								<div class="plate_content_img fl">
									<a href="<?php echo $v['url']; ?>"><img src="../../public/Uploads/<?php echo $v['smallimage']; ?>" alt=""/></a>
								</div>
								<div class="plate_content_w fr">
									<div  class="plate_content_title"><a href="<?php echo $v['url']; ?>" title="<?php echo $v['title']; ?>"><?php echo $v['title']; ?></a></div>
									<div  class="plate_content_c"><a href="<?php echo $v['url']; ?>"><?php echo $v['abstract']; ?></a></div>
									<div class="plate_content_date"><?php echo date("Y-m-d",$v['inputtime']); ?></div>
								</div>
							</li>	

								<?php endforeach; ?>
												</ul>
					</div>
				</div>
				<!--新闻资讯 结束-->
				<?php $taginfo = db()->query('SELECT * FROM dz_ad WHERE id = 45'); $page=' '; foreach($taginfo as $v):?>
				<div class="in_banner_sm"><a href=""><img src="../../public/Uploads/<?php echo $v['photo']; ?>" height="120" width="200" alt=""/></a></div>
				<?php endforeach; ?>
				<!--产业观察 开始-->
				<div class="in_observation plate_container">
					<div class="plate_top clearfix">
						<div class="plate_top_title fl">
							<div class="plate_top_title_c">
								<p class="title1">Observation</p>
								<p class="title2">产业观察</p>
							</div>
						</div>
						<div class="plate_top_menu fr">
							<ul class="fl">
								<li>　</li>							</ul>
													</div>
					</div>
					<div class="plate_content">
						<ul>
						<?php  $taginfo=db('news')->field('*')->where("1=1 and cateid in (12)")->order('id desc')->limit(0,4)->select(); foreach($taginfo as $v): $v['catename']=db('category')->where('id='.$v['cateid'])->find()['catename'];?>
							<li class="clearfix">
								<div class="plate_content_img fl">
									<a href="<?php echo $v['url']; ?>"><img src="../../public/Uploads/<?php echo $v['smallimage']; ?>" alt=""/></a>
								</div>
								<div class="plate_content_w fr">
									<div class="plate_content_title"><a href="<?php echo $v['url']; ?>" title=""><?php echo $v['title']; ?></a></div>
									<a href="<?php echo $v['url']; ?>"><div class="plate_content_c"><?php echo $v['abstract']; ?></div></a>
									<div class="plate_content_date"><?php echo date("Y-m-d",$v['inputtime']); ?></div>
								</div>
							</li>	
									<?php endforeach; ?>

												</ul>
					</div>
				</div>
				<!--产业观察 结束-->
			</div>
			<div class="plate1_right fr ">
				<!--排行 开始-->
				<div class="panel_1_container in_rank tabs-basic ">
					<div class="panel_2_container_c">
						<div class="panel_2_title clearfix">
							<div class="title fl">周排行</div>
													</div>
													<?php $taginfo = db()->query('SELECT * FROM dz_ad WHERE id = 53'); $page=' '; foreach($taginfo as $v):?>
						<div class="panel_2_content">
							<img src="/../../public/Uploads/<?php echo $v['photo']; ?>" alt="" />
							<?php endforeach; $taginfo=db()->query("select * from dz_news where looknum between 50 and 300 order by looknum desc limit 6"); foreach($taginfo as $v): ?>
							<ul>
								<li><a href="<?php echo $v['url']; ?>" title="<?php echo $v['title']; ?>"><?php echo $v['title']; ?></a></li>						</ul>
								<?php endforeach; ?>
						</div>
					</div>
				</div>
				<!--排行 结束-->
				<!--商家1 开始-->
				<div class="panel_2_container in_business1 mt25">
					<div class="panel_2_container_c">
						<div class="panel_2_title clearfix">
							<div class="title fl">娱乐新闻</div>
													</div>
													<?php $taginfo = db()->query('SELECT * FROM dz_ad WHERE id = 48'); $page=' '; foreach($taginfo as $v):?>
						<div class="panel_2_content">
							<img src="/../../public/Uploads/<?php echo $v['photo']; ?>" alt="" />
							<?php endforeach; $taginfo=db()->query("select * from dz_news where cateid='26' limit 5 "); foreach($taginfo as $v): ?>
							<ul>
								<li><a href="<?php echo $v['url']; ?>" title="<?php echo $v['title']; ?>"><?php echo $v['title']; ?></a></li>						</ul>
								<?php endforeach; ?>
						</div>
					</div>
				</div>
				<!--商家1 结束-->
				<!--商家2 开始-->
				<div class="panel_2_container in_business2 mt25">
					<div class="panel_2_container_c">
						<div class="panel_2_title clearfix">
							<div class="title fl">体育新闻</div>
						
													</div>
													<?php $taginfo = db()->query('SELECT * FROM dz_ad WHERE id = 49'); $page=' '; foreach($taginfo as $v):?>
						<div class="panel_2_content">
							<img src="/../../public/Uploads/<?php echo $v['photo']; ?>" alt="" />
							<?php endforeach; ?>
							<ul>
							<?php $taginfo=db()->query("select * from dz_news where cateid='27' limit 5 "); foreach($taginfo as $v): ?>
								<li><a href="<?php echo $v['url']; ?>" title="<?php echo $v['title']; ?>"><?php echo $v['title']; ?></a></li>	
									<?php endforeach; ?>					</ul>

						</div>
					</div>
				</div>
				<!--商家2 结束-->
				<?php $taginfo = db()->query('SELECT * FROM dz_ad WHERE id = 50'); $page=' '; foreach($taginfo as $v):?>
				<div class="in_banner_ss"><a href=""><img src="/../../public/Uploads/<?php echo $v['photo']; ?>" width="380" height="80" alt=""/></a></div>
				<?php endforeach; $taginfo = db()->query('SELECT * FROM dz_ad WHERE id = 51'); $page=' '; foreach($taginfo as $v):?>
				<div class="in_banner_ss"><a href=""><img src="/../../public/Uploads/<?php echo $v['photo']; ?>" width="380" height="80" alt=""/></a></div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!--板块一 结束-->
	
	<!-- <!--首页广告大图 开始-->
	<!-- <?php $taginfo = db()->query('SELECT * FROM dz_ad WHERE id = 42'); $page=' '; foreach($taginfo as $v):?>
	<div class="in_banner_big_w w100">
		<div class="in_banner_big mar1200">
			<a href=""><img src="../../public/Uploads/<?php echo $v['photo']; ?>"  height="120" width="200"  alt=""/></a>
		</div>
	</div> -->
	<!--首页广告大图 结束-->
	<!-- <?php endforeach; ?> -->
	 
			
				<!--商家3 开始-->
				
	
	
	<script type="text/javascript">

        $(document).ready(function() {

            var widget = $('.tabs-basic');

            var tabs = widget.find('.tabs-basic1 a'),
                content = widget.find('.tabs-content-placeholder > div');

            tabs.on('click', function (e) {

                e.preventDefault();

                // Get the data-index attribute, and show the matching content div

                var index = $(this).data('index');

                tabs.removeClass('tab-active');
                content.removeClass('tab-content-active');

                $(this).addClass('tab-active');
                content.eq(index).addClass('tab-content-active');

            });

        });

    </script> 

	<!--底部 开始-->
	<footer class="footer_w w100">
		<div class="footer mar1200">
			<div class="footer_top clearfix">
				<h1 class="logo fl"><a href=""><img src="/templates/Evnews/picture/58ca53bc195b8_4.png"/></a></h1>
				<div class="ev fl">
					<h4>DZ 新闻</h4>
					<ul class="clearfix">
						<li ><a href="/home/Article/catecontent?cateid=21" title="">关于我们</a></li><li ><a href="/home/Article/catecontent?cateid=22" title="">联系我们</a></li><li ><a href="/home/Article/newslist?cateid=17" title="">招聘信息</a><li ><a href="/home/Article/catecontent?cateid=23" title="">在线留言</a></li>					</ul>
				</div>
				<div class="friend fl">
					<h4>友情链接</h4>
					<ul class="clearfix">
			<?php $taginfo=db('friendlink')->where('photo is not null')->order('id asc')->limit('7')->select();$page="<ul style='list-style: none;clear:both;height: auto;overflow: hidden;'></ul>"; foreach($taginfo as $vo): ?>

						<li><a href="http://www.68design.net/" title="68视觉" target="_blank">

					<?php echo $vo['webname']; ?>
						</a>
						</li>	
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			
			<div class="footer_bottom">
				<div>广告热线：010-65000267 / 13501192779</div>
				<div>版权所有 DZ新闻? Copyright 2011 - 2016. All Rights</div>
				<div>京ICP备12023756号/京公网安备11010502023804</div>
			</div>
		</div>
	</footer>
	<!--底部 结束-->
		
</body>
	
	
	<script src="/templates/Evnews/js/idangerous.swiper2.7.6.min_4.js" type="text/javascript" charset="utf-8"></script>
	<script src="/templates/Evnews/js/index_4.js" type="text/javascript" charset="utf-8"></script>
</html>
	