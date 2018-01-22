<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:30:"./templates/wangzhan/news.html";i:1509692376;s:29:"./templates/wangzhan/nav.html";i:1509697327;s:32:"./templates/wangzhan/footer.html";i:1510024519;}*/ ?>
<!DOCTYPE html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>新闻动态-news.html</title> 
  <link rel="stylesheet" type="text/css" href="/templates/wangzhan/css/basic.css" /> 
  <link rel="stylesheet" type="text/css" href="/templates/wangzhan/css/inner.css" /> 
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
  <script type="text/javascript">document.getElementById("menu7").className="a1";</script> 
  <div class="container"> 
   <div class="news_banner"></div> 
   <div class="content"> 
  
    <div class="news2"> 
     <div class="news_con"> 
      <div class="general_title"> 
       <table width="400" border="0" cellspacing="0" cellpadding="0"> 
        <tbody>
         <tr> 
          <td><img src="/templates/wangzhan/images/inner_content_title.png" /></td> 
          <td><a href="">公司新闻</a></td> 
          <td><img src="/templates/wangzhan/images/inner_content_title.png" /></td> 
         </tr> 
        </tbody>
       </table> 
      </div> 
      <div class="news_con_int"> 
       <div class="news_title">
        <a href="">网络2015年元旦放假通知</a>
       </div> 
       <div class="news_word">
        <a href="">一年很长其实也很短，2014转瞬即逝留给我们的只有怀念了，14年还有最后的10天这是一个总结月，最后的几天要仔细回顾并展望下了！关于元旦放假方为网络响应国务院办公厅的号召：1月1日至3日放假调休，共3天。1月4日（星期日）上班。具体参考下图： </a>
       </div> 
       <div class="news_add">
        <span>日期：</span>2014-12-19 
        <span style="margin-left:20px;">标签：</span>
        <a href="">网络</a> &nbsp; &nbsp; 
       </div> 
       <div class="news_read_more">
        <a href=""><img alt="查看详细" src="/templates/wangzhan/images/news_read_more.gif" /></a>
       </div> 
      </div> 
      <div class="news_class">
       <a href="">MORE +</a>
      </div> 
      <div class="clear"></div> 
     </div> 
    </div>
    
    <div class="news"> 
     <div class="news_con"> 
      <div class="general_title"> 
       <table width="400" border="0" cellspacing="0" cellpadding="0"> 
        <tbody>
         <tr> 
          <td><img src="/templates/wangzhan/images/inner_content_title.png" /></td> 
          <td><a href="">常见问题</a></td> 
          <td><img src="/templates/wangzhan/images/inner_content_title.png" /></td> 
         </tr> 
        </tbody>
       </table> 
      </div> 
      <div class="news_con_int"> 
       <div class="news_title">
        <a href="">p2p网站建设解决方案</a>
       </div> 
       <div class="news_word">
        <a href="">1、P2P网络借贷平台介绍 P2P网络借贷平台是指P2P借贷与网络借贷相结合的金融服务网站，借贷过程中，资料与资金、合同、手续等全部通过网络实现，这是未来金融服务的发展趋势。 2、系统总体设计 我们设计了本项目的总体逻辑架构，如下图： 2.1 前台管理 前台管理包括网站首页、我要投资、我要借款、我的账户、会员社区、网贷工具、帮助中心和关于我们模块。 2.1.1 网站首页 网站首页用于展示该网站的整体信息，用户可以通过访问网站首页 ...</a>
       </div> 
       <div class="news_add">
        <span>日期：</span>2014-12-10 
        <span style="margin-left:20px;">标签：</span>
        <a href="">p2p网站建设</a> &nbsp; &nbsp; 
       </div> 
       <div class="news_read_more">
        <a href=""><img alt="查看详细" src="/templates/wangzhan/images/news_read_more.gif" /></a>
       </div> 
      </div> 
      <div class="news_class">
       <a href="">MORE +</a>
      </div> 
      <div class="clear"></div> 
     </div> 
    </div>
    <div class="news2"> 
     <div class="news_con"> 
      <div class="general_title"> 
       <table width="400" border="0" cellspacing="0" cellpadding="0"> 
        <tbody>
         <tr> 
          <td><img src="/templates/wangzhan/images/inner_content_title.png" /></td> 
          <td><a href="">网站建设</a></td> 
          <td><img src="/templates/wangzhan/images/inner_content_title.png" /></td> 
         </tr> 
        </tbody>
       </table> 
      </div> 
      <div class="news_con_int"> 
       <div class="news_title">
        <a href="">【签约】深圳市侨商投资管理有限公司</a>
       </div> 
       <div class="news_word">
        <a href="">网络和侨商投资合作其企业官网 公司是由深圳市九泰资本管理有限公司、深圳市侨商投资集团、深圳市福同创新基金、华润集团直投子公司，弘杉资本、天天硅谷资本有限公司、欧洲创新基金有限公司共同组建的互联网众筹平台。平台管理团队顺应市场环境，紧跟国际形式，积极探索业务转型，精选一批股权投资基金和债权投资基金项目，并亲自参与项目的领先投资。 投资精英汇拥有世界一流的投资团队，其成员主持过众多国内和境外企业的IPO、产业并购 ...</a>
       </div> 
       <div class="news_add">
        <span>日期：</span>2015-03-07 
        <span style="margin-left:20px;">标签：</span>
        <a href="">网站建设解决方案</a> &nbsp; &nbsp; 
       </div> 
       <div class="news_read_more">
        <a href=""><img alt="查看详细" src="/templates/wangzhan/images/news_read_more.gif" /></a>
       </div> 
      </div> 
      <div class="news_class">
       <a href="">MORE +</a>
      </div> 
      <div class="clear"></div> 
     </div> 
    </div>
    <div class="news"> 
     <div class="news_con"> 
      <div class="general_title"> 
       <table width="400" border="0" cellspacing="0" cellpadding="0"> 
        <tbody>
         <tr> 
          <td><img src="/templates/wangzhan/images/inner_content_title.png" /></td> 
          <td><a href="">行业新闻</a></td> 
          <td><img src="/templates/wangzhan/images/inner_content_title.png" /></td> 
         </tr> 
        </tbody>
       </table> 
      </div> 
      <div class="news_con_int"> 
       <div class="news_title">
        <a href="">谈支付宝红包如何打破微信QQ封锁</a>
       </div> 
       <div class="news_word">
        <a href="">今年，支付宝红包高调上线，对外宣称过年发10亿红包，搞的腾讯也跟着发30亿，但实际会发多少，大家都不得而知，但大家都知道如今主流社交软件除了QQ就是微信，支付宝如何打破这道坚固的封锁墙呢？ 支付宝在刚开始的时候可以分享链接到QQ或者微信，但不到10小时就遭到封杀，当然这个结果肯定在支付宝预料之内，所以支付宝又出了一个红包口令。链接可以封杀，图片口令应该封杀不了了吧。看来支付宝是下了功夫了。 除此之外，支付宝还了有个人红包、群红包 ...</a>
       </div> 
       <div class="news_add">
        <span>日期：</span>2015-02-12 
        <span style="margin-left:20px;">标签：</span>
        <a href="">支付宝红包</a> &nbsp; &nbsp; 
       </div> 
       <div class="news_read_more">
        <a href=""><img alt="查看详细" src="/templates/wangzhan/images/news_read_more.gif" /></a>
       </div> 
      </div> 
      <div class="news_class">
       <a href="">MORE +</a>
      </div> 
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
   
  <script type="text/javascript" src="/templates/wangzhan/js/qq3.js"></script> 
    
 </body>
</html>
<!--
本代码由热心网友上传，js代码网收集并编辑整理;
请尊重他人劳动成果;
转载请保留js代码链接 - www.jsdaima.com
-->