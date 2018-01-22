<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:29:"templates/wangzhan/index.html";i:1510023652;s:29:"./templates/wangzhan/nav.html";i:1509697327;s:32:"./templates/wangzhan/footer.html";i:1510024519;}*/ ?>
<!DOCTYPE html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>蓝色宽屏大气的网络公司全站html网页模板</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
  <script type="text/javascript">
		     if ((navigator.userAgent.match(/(iPhone|iPod|Android|ios)/i))) {  
                        location.replace("http://m.szfangwei.cn/");  
                }
		</script> 
  <link rel="stylesheet" type="text/css" href="./templates/wangzhan/css/basic.css" /> 
  <link rel="stylesheet" type="text/css" href="/templates/wangzhan/css/index.css" /> 
  <script type="text/javascript" src="/templates/wangzhan/js/jquery-1.8.1.min.js"></script> 
  <script type="text/javascript" src="/templates/wangzhan/js/jquery.cycle.all.js"></script> 
  <script type="text/javascript" src="/templates/wangzhan/js/index.js"></script> 
 </head>
 <body>
 
  
  <header> 
   <div class="header">
    <div class="top">
     <div class="top_con">
      <div class="weixin" id="weixin" onMouseOver="show_weixin()" onMouseOut="hide_weixin()">
       <img alt="微信" src="/templates/wangzhan/images/weixin.png" align="absmiddle" /> 
       <div class="weixin_con" id="weixin_con" style="display:none">
        <img src="/templates/wangzhan/images/contact_weixin.gif" alt="微信二维码" />
       </div> 
      </div> 
      <div class="weibo">
       <a href="http://weibo.com/szfangwei" rel="noFollow" target="_blank"><img alt="微博" src="/templates/wangzhan/images/xinlang.png" align="absmiddle" /></a>
      </div>
      <div class="tel">
       咨询热线：400 800 9385
      </div>
      <div class="mail">
       咨询邮箱：sales@123.cn
      </div>
      <div class="clear"></div> 
     </div>
    </div>
    <div class="head_bg"> 
     <div class="head">
      <div class="logo fl">
       <h1><a href="index.html"><img alt="深圳网站建设" src="images/logo.gif" width="151px" height="39px" /></a></h1>
      </div> 
      <div class="menu fr"> 
       <nav>
        <ul>

<li><a id="menu1" href="<?php echo url('/home/Article/newslist/cateid/32'); ?>">首页</a></li> 

 <?php $taginfo = db("category")->field('catename as title,url,id,letter,inputtime,parentid,image,description')->where("1=1 and ismenu=2 and isdel=0 and parentid=0")->order('id asc')->limit('7')->select(); foreach($taginfo as $v):?>

  <li><a id="{menu1}" href="<?php echo $v['url']; ?>"><?php echo $v['title']; ?></a></li> 

<?php endforeach; ?>

        </ul>
        <div class="clear"></div>
       </nav>
      </div>
     </div>
    </div>
   </div>
  </header> 
  <script type="text/javascript">document.getElementById("menu1").className="a1";</script> 
  <div class="container index_header"> 
   <div class="index_banner" id="wrapper"> 
    <div id="home-slider" class="home-slider"> 
     <div class="slider-item">
      <img alt="" width="1920px" height="480px" src="/templates/wangzhan/images/1389083288.jpg" />
     </div>
     <div class="slider-item">
      <img alt="" width="1920px" height="480px" src="/templates/wangzhan/images/1389083308.jpg" />
     </div>
     <div class="slider-item">
      <img alt="" width="1920px" height="480px" src="/templates/wangzhan/images/1389083323.jpg" />
     </div>
    </div>

    <div class="design_box">
     <div class="design" id="home-slider-nav"> 
     
     <?php $taginfo=db('ad')->field('')->where("1=1")->order('id asc')->limit(($pages-1)*3,3)->select();$page=' '; foreach($taginfo as $v):?>
      <dl class="sel" style="margin-left:20px" onMouseOver="banner_hover(0)"> 
       <dt>
      <?php echo $v['title']; ?>
       </dt> 
       <dd class="design_dd">
        <?php echo $v['synopsis']; ?>
       </dd> 
      </dl>
<?php endforeach; ?>
      
      <div class="clear"></div> 
     </div> 
    </div> 


   </div> 
   <div class="service_bg">
    <div class="service">
      <?php $taginfo=db('banner')->field('*')->where("static=1 and 1=1")->order('id asc')->limit(3)->select();  foreach($taginfo as $v):?>


     <!--  -->
      <dl class="service01" type="border:1px solide red" onClick="document.location=''" onMouseOver="this.className='service_hover service01'" onMouseOut="this.className='service01'">
      <dt>
       <h1 style="font-size:16px;"><?php echo $v['title']; ?></h1>
      </dt>
      <dd>
       <?php echo $v['type']; ?>
      </dd>
     </dl>

<?php endforeach; ?>

    
    
     <dl class="service04" onClick="document.location=''" onMouseOver="this.className='service_hover service04'" onMouseOut="this.className='service04'"> 
      <dt>
       <a href="">第二次</a>
      </dt> 
      <dd>
       你说平淡了就会好了
      </dd>
     </dl>

      
    </div> 
   </div>
  </div>

  <div class="content"> 
   <div class="cases"> 
    <div class="content_title"> 
     <div class="content_title3">
      <a class="title_ch" href="cases.html">经典案例</a>
      <span class="title_en">classic cases</span>
     </div> 
    </div> 
    <div class="cases_dl" init="false"> 
    


    <?php $taginfo=db('banner')->field('*')->where("static=1 and id>=1")->order('id asc')->limit(3)->select();  foreach($taginfo as $v):?>
     <dl style="margin-left:20px"> 
      <dt>
       <a href=""><img class="img_case" alt="磨房网站" src="/public/Uploads/<?php echo $v['photo']; ?>" width="380px" height="235px" /></a>
      </dt> 
      <dd class="cases_name">
       <?php echo $v['title']; ?>
      </dd>
      <dd class="cases_int">
       <?php echo $v['type']; ?>
      </dd> 
     </dl>
     <?php endforeach; ?>


     


     <div class="clear"></div> 
    </div> 
   </div> 
   <div class="news_bg"> 
    <div class="news"> 
     <div class="content_title"> 
      <div class="content_title4">
       <a class="title_ch" href="news.html">新闻资讯</a>
       <span class="title_en">News</span>
      </div> 
     </div> 
     <div class="news_con"> 







   


      <div class="clear"></div> 

    </div> 



    </div> 
   </div> 
   <div class="partners"> 
    <div class="content_title"> 
     <div class="content_title2">
      <span class="title_ch">合作伙伴</span>
      <span class="title_en">partners</span>
     </div> 
    </div> 
    <div class="partners_table" init="false"> 
     <ul> 
     <?php $taginfo=db('banner')->field('*')->where("static=1 and 1=1")->order('id asc')->limit(8)->select();  foreach($taginfo as $v):?>
      <li><img alt="<?php echo $v['title']; ?>" style="width:100px;height:80px" class="img_partner" src="/public/Uploads/<?php echo $v['photo']; ?>" /></li>
      <?php endforeach; ?>
      <div class="clear"></div> 
     </ul> 
     <div class="clear"></div> 
    </div> 
   </div> 
  </div> 
    
 <footer> 
   <div class="footer"> 
    <div class="footer_con"> 
     <div class="footer_dl"> 
      <dl> 
       <dt>
        关于
       </dt> 
    <?php $childidarr=db('category')->field('id')->where('parentid='.$cateid)->select();$childid=''; if($childidarr):  foreach($childidarr as $k=>$v):      $childid .= $childidarr[$k]['id'].',';  endforeach;  $childid = substr($childid,0,-1);else:$childid=$cateid;endif;$countinfo = db('news')->where('1=1 and cateid in ('.$childid.')')->count();$countinfo = $countinfo ? $countinfo :1 ;$row = 4;$countpage = ceil($countinfo/$row);$pagestr =  ''; $pagestr .= "<ul style='list-style: none;clear:both;height: auto;overflow: hidden;'>";for($i = 1 ; $i <= $countpage ; $i++){   if($countpage == 1) break;   if($pages == $i){ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;font-weight: bold' href='###'>$i</a></li>";   }else{ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;' href='?cateid=$cateid&page=$i'>$i</a></li>";   }}$pagestr .= "</ul>";  $taginfo=db('news')->alias('a')->field('b.catename,b.url as cateurl,a.*')->join('category b','a.cateid=b.id')->where("cateid in (".$childid.") and 1=1")->order('id asc')->limit(($pages-1)*$row,$row)->select();$page=$pagestr;if($taginfo):   foreach($taginfo as $v): ?>
       <dd>
        <a href="<?php echo $v['url']; ?>"><?php echo $v['stylekk']; ?></a>
       </dd> 
      <?php    endforeach;else: endif; ?>
            </dl> 
      <dl> 
       <dt>
        经典案例
       </dt> 
       <?php $childidarr=db('category')->field('id')->where('parentid='.$cateid)->select();$childid=''; if($childidarr):  foreach($childidarr as $k=>$v):      $childid .= $childidarr[$k]['id'].',';  endforeach;  $childid = substr($childid,0,-1);else:$childid=$cateid;endif;$countinfo = db('news')->where('1=1 and cateid in ('.$childid.')')->count();$countinfo = $countinfo ? $countinfo :1 ;$row = 4;$countpage = ceil($countinfo/$row);$pagestr =  ''; $pagestr .= "<ul style='list-style: none;clear:both;height: auto;overflow: hidden;'>";for($i = 1 ; $i <= $countpage ; $i++){   if($countpage == 1) break;   if($pages == $i){ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;font-weight: bold' href='###'>$i</a></li>";   }else{ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;' href='?cateid=$cateid&page=$i'>$i</a></li>";   }}$pagestr .= "</ul>";  $taginfo=db('news')->alias('a')->field('b.catename,b.url as cateurl,a.*')->join('category b','a.cateid=b.id')->where("cateid in (".$childid.") and 1=1")->order('id asc')->limit(($pages-1)*$row,$row)->select();$page=$pagestr;if($taginfo):   foreach($taginfo as $v): ?>
       <dd>
        <a href="<?php echo $v['url']; ?>"><?php echo $v['title']; ?></a>
       </dd> 
      <?php    endforeach;else: endif; ?>
      </dl> 
      <dl> 
       <dt>
        服务范围
       </dt> 
       <?php $childidarr=db('category')->field('id')->where('parentid='.$cateid)->select();$childid=''; if($childidarr):  foreach($childidarr as $k=>$v):      $childid .= $childidarr[$k]['id'].',';  endforeach;  $childid = substr($childid,0,-1);else:$childid=$cateid;endif;$countinfo = db('news')->where('1=1 and cateid in ('.$childid.')')->count();$countinfo = $countinfo ? $countinfo :1 ;$row = 4;$countpage = ceil($countinfo/$row);$pagestr =  ''; $pagestr .= "<ul style='list-style: none;clear:both;height: auto;overflow: hidden;'>";for($i = 1 ; $i <= $countpage ; $i++){   if($countpage == 1) break;   if($pages == $i){ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;font-weight: bold' href='###'>$i</a></li>";   }else{ $pagestr .= "<li style='float: left;margin-left: 10px'><a style='text-decoration: none;color: #000;font-size: 18px;' href='?cateid=$cateid&page=$i'>$i</a></li>";   }}$pagestr .= "</ul>";  $taginfo=db('news')->alias('a')->field('b.catename,b.url as cateurl,a.*')->join('category b','a.cateid=b.id')->where("cateid in (".$childid.") and 1=1")->order('id asc')->limit(($pages-1)*$row,$row)->select();$page=$pagestr;if($taginfo):   foreach($taginfo as $v): ?>
       <dd>
        <a href="<?php echo $v['url']; ?>"><?php echo $v['title']; ?></a>
       </dd> 
      <?php    endforeach;else: endif; ?>
      </dl> 
      <dl class="footer_dl2" style="width:340px;"> 
       <dt>
        联系我们
       </dt> 

       <?php $taginfo=db('friendlink')->where('photo is not null')->order('id asc')->limit('4')->select();$page=' '; foreach($taginfo as $v): ?>
       <dd>
        <img src="<?php echo $v['photo']; ?>" style="width:20px;height:20px" alt="<?php echo $v['webname']; ?>" />
        <a href="<?php echo $v['website']; ?>" rel="noFollow" target="_blank"><?php echo $v['webname']; ?>: <?php echo $v['website']; ?></a>
       </dd> 
        <?php endforeach; ?>
      
      </dl> 
      <form method="post" action="/Feedback"> 
       <dl class="footer_dl3"> 
        <dt>
         给我们留言
        </dt> 
        <dd> 
         <input name="name" class="input" type="text" value="称呼（必填）" onFocus="if(this.value='称呼（必填）')this.value=''" onBlur="if(this.value=='')this.value=='称呼（必填）'" /> 
        </dd> 
        <dd> 
         <input name="tel" class="input" type="text" value="电话（必填）" onFocus="if(this.value='电话（必填）')this.value=''" onBlur="if(this.value=='')this.value=='电话（必填）'" /> 
        </dd> 
        <dd> 
         <textarea name="content" cols="" rows=""></textarea> 
        </dd> 
        <dd>
         <input type="image" alt="提交留言" src="/templates/wangzhan/images/submit_button.png" />
        </dd> 
       </dl> 
      </form> 
      <div class="clear"></div> 
     </div> 
     <div class="link">
      友情链接： 
   <?php $taginfo=db('friendlink')->where('photo is not null')->order('id asc')->limit('8')->select();$page=' '; foreach($taginfo as $v): ?>
      <a href="#" target="_blank"><?php echo $v['webname']; ?></a>
   <?php endforeach; ?>
     </div> 

    </div> 
   </div> 
   <div class="bottom"> 
    <div class="bottom_con">
     @2016 版权所有 深圳网络科技有限公司 地址：深圳市罗湖区春风路桂都大厦
     <a href="http://www.miitbeian.gov.cn" rel="noFollow" style="color:#666;">粤ICP备16465465456号-2</a>
    </div> 
   </div> 
  </footer> 
   

 </body>
</html>