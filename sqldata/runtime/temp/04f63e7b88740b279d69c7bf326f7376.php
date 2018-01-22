<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:31:"templates/zhaolongyu/index.html";i:1509969932;s:41:"./templates/zhaolongyu/common/header.html";i:1509006380;s:41:"./templates/zhaolongyu/common/footer.html";i:1508896082;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>上海大智投资管理有限公司</title>
    <link href="/templates/newstyle/css/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td height="30" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="2%" align="left"><img src="/templates/newstyle/images/top_03.png" width="13" height="13" /></td>
                <td width="68%" align="left"><span class="fotn_999">您好！欢迎来到</span><span class="font_0A8BC4">上海大智投资管理有限公司</span><span class="fotn_999">！</span></td>
                <td width="30%" align="right"> <a HREF="#" ONCLICK="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.mycodes.net');return(false);"
                                                  STYLE="BEHAVIOR: url(#default#homepage)">设为首页</a> | <a href=# onclick="window.external.addFavorite('http://www.mycodes.net','上海大智投资管理有限公司')" style="CURSOR: hand" title='上海大智投资管理有限公司'>收藏大智</a></td>
            </tr>
        </table></td>
    </tr>
    <tr>
        <td height="110" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="21%"><img src="/templates/newstyle/images/top_09.png" width="210" height="76" /></td>
                <td width="5%" align="center"><img src="/templates/newstyle/images/top_07.png" width="1" height="85" /></td>
                <td width="46%" align="left"><img src="/templates/newstyle/images/top_15.png" width="216" height="27" /></td>
                <td width="28%"><table border="0" align="right" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="53" rowspan="3" align="center"><img src="/templates/newstyle/images/top_12.png" width="41" height="54" /></td>
                        <td align="left" class="fotn_999">客服热线：</td>
                    </tr>
                    <tr>
                        <td align="left" class="font_0A8BC4  font_24">021-00000000</td>
                    </tr>
                    <tr>
                        <td align="left" class="fotn_999">客服工作时间：9：00-18：00</td>
                    </tr>
                </table></td>
            </tr>
        </table></td>
    </tr>
    <tr>
        <td height="40" align="center"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td width="2" align="center"><img src="/templates/newstyle/images/top_22.png" width="2" height="40" /></td>
                <td width="130" align="center"><a href="/" class="dao">网站首页</a></td>
                <td width="2" align="center"><img src="/templates/newstyle/images/top_22.png" width="2" height="40" /></td>
                <?php $taginfo = db("category")->field('catename as title,url,id,letter,inputtime,parentid,image,description')->where("1=1 and ismenu=2 and isdel=0 and parentid=0")->order('id asc')->limit('6')->select(); foreach($taginfo as $v):?>
                <td width="130" align="center"><a href="<?php echo $v['url']; ?>" class="dao"><?php echo $v['title']; ?></a></td>
                <td width="2" align="center"><img src="/templates/newstyle/images/top_22.png" width="2" height="40" /></td>
                <?php endforeach; ?>
                <td align="center">&nbsp;</td>
            </tr>
        </table></td>
    </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1000" height="380" valign="middle">
        <img src="/templates/zhaolongyu/images/banner.jpg" width="1000" height="340" />
      <!--banner-->
      </td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="15" cellspacing="0" class="bk_e4e4e4">
  <tr>
      <?php $taginfo=db('ad')->field('id,title,type,synopsis,content,photo')->where("1=1")->order('id asc')->limit("0"*2,2)->select();$page="<ul style='list-style: none;clear:both;height: auto;overflow: hidden;'></ul>"; foreach($taginfo as $vo):?>
      <td width="1000" valign="middle" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="15">		
          <tr>
              <td width="60%" align="left" class="bkdhx font_24"><?php echo $vo['title']; ?></td>
              <td width="40%" align="right" class="bkdhx font_14">咨询电话：<span class="fotn_c69000">021-00000000</span></td>
          </tr>
          <tr>
              <td align="left" valign="top"><table width="100%" border="0" cellpadding="5" cellspacing="0" class="font_14">
                  <tr>
                      <td height="30" colspan="2" align="left" class="font_18 fotn_c69000"><strong><?php echo $vo['synopsis']; ?></strong></td>
                  </tr>
                  <tr>
                      <?php echo $vo['content']; ?>
                  </tr>
              </table></td>
              <td align="left"><img src="/../../public/Uploads/<?php echo $vo['photo']; ?>" width="435" height="178" /></td>
          </tr>
      </table></td>
  </tr>
    <?php endforeach; ?>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1000" height="20" valign="middle"></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="15" cellspacing="0" class="bk_e4e4e4">
  <tr>

    <td width="290" valign="top" bgcolor="#FFFFFF" align="left"><table width="100%" cellspacing="0" cellpadding="5" border="0">
      <tbody><tr>
        <td class="font_14" align="left"><strong>新闻资讯</strong></td>
        <td class="font_14" align="right"><img src="/templates/zhaolongyu/images/about_38.jpg" width="35" height="11"></td>
      </tr>
      <tr>
        <?php $taginfo=db('news')->field('id,title,url,cateid,smallimage,abstract')->where("1=1")->order('looknum desc')->limit(0,1)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
        <td colspan="2"><table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody><tr>
            <td rowspan="2" width="22%" align="left"><img src="/templates/zhaolongyu/images/about_42.jpg" width="60" height="60"></td>
            <td width="78%" align="left"><a href="<?php echo $vo['url']; ?>" class="new"><?php echo $vo['title']; ?></a></td>
          </tr>
          <tr>
            <td align="left"><?php echo $vo['abstract']; ?>……<a href="<?php echo $vo['url']; ?>" class="new02">[详情]</a></td>

          </tr>
          <?php endforeach; ?>
          </tbody></table></td>
      </tr>
      <tr>
        <td colspan="2"><img src="/templates/zhaolongyu/images/about_49.jpg" width="321" height="3"></td>
      </tr>
      <tr>
        <td colspan="2" align="left">
        <?php $taginfo=db('news')->field('id,title,url,cateid,smallimage')->where("1=1")->order('looknum desc')->limit(1,4)->select(); foreach($taginfo as $vo): $vo['catename']=db('category')->where('id='.$vo['cateid'])->find()['catename'];?>
          <a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a><br>
        <?php endforeach; ?>
      </tr>
      </tbody></table></td>
    <td width="2" valign="middle" bgcolor="#FFFFFF" align="left"><img src="/templates/zhaolongyu/images/about_39.jpg" width="3" height="230"></td>
    <td width="616" valign="top" bgcolor="#FFFFFF" align="left"><table width="100%" cellspacing="0" cellpadding="5" border="0">
      <tbody>
        <tr>
        <td class="font_14" align="left"><strong>关于大智</strong></td>
        <td class="font_14" align="right">
            <img src="/templates/zhaolongyu/images/about_38.jpg" width="35" height="11"></td>
      </tr>
      <?php  $taginfo=db('news')->field('*')->where("id=1")->order('id asc')->limit(0,1)->select(); foreach($taginfo as $v): $v['catename']=db('category')->where('id='.$v['cateid'])->find()['catename'];?>
      <tr>
        <td colspan="2" align="left"><table width="100%" cellspacing="0" cellpadding="0" border="0">
          <tbody>
          <tr>
            <td width="27%" align="left">
                <img src="/../../public/Uploads/<?php echo $v['smallimage']; ?>" width="135" height="181"></td>
            <td width="73%" align="left"><?php echo $v['abstract']; ?></td>
          </tr>
      <?php endforeach; ?>
          </tbody></table>
        </td>
      </tr>
      </tbody></table></td>
  </tr>
          </table>
          </td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="font_fff">
    <tr>
        <td height="20" align="center"></td>
    </tr>
    <tr>
        <td height="93" align="center" background="/templates/newstyle/images/endbj.jpg">Copyright @ 2006-2013  All Rights Reserved  版权所有<br />
            地址：上海市普陀区中山北路2911号中关村科技大厦1303室  电话：021-00000000   </td>
    </tr>
</table>
</body>
</html>





