<?php
namespace app\common\taglib;

use think\template\TagLib;
class Dz extends TagLib
{
    // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
    protected $tags = [
        'newslist' => ['attr' => 'field,order,limit,like,sql,hot,name,where,page', 'close' => 1,'level'=>2],
        'nlist' => ['attr' => 'field,order,limit,like,sql,hot,name,where,start', 'close' => 1,'level'=>2],
        'flink' => ['attr' => 'order,limit,thumb,name,where', 'close' => 1],
        'sql' => ['attr' => 'sql,name', 'close' => 1],
        'adlist' =>['attr' =>'page,where,like,field,order,limit,sql','close' => 1],
        'banlist' => ['attr' => 'field,order,limit,like,sql,hot,name,where,page', 'close' => 1,'level'=>2],
        'commentlist'=>['attr'=>'title,num,time,like,sql,order,limit,where','close'=>1],
        'navlist'=>['attr'=>'title,num,time,like,sql,order,limit','close'=>1],
        'getweek'=>['attr'=>'w','close'=>0],
		'newsinfo'=>['attr'=>'nid','close'=>1],
    ];

    /*新闻列表标签不带分页*/
    public function tagNlist($tag,$content){
        $field = isset($tag['field']) ? $tag['field'] :'*';           //读取字段
        $where = isset($tag['where']) ?  $tag['where'] : '1=1';     //where条件
        $order = isset($tag['order']) ? $tag['order'] : 'id asc';      //排序方式
        $like = isset($tag['like']) ? ' and ' . $tag['like']   : '';  //模糊查询
        $sql = isset($tag['sql']) ? $tag['sql'] : false;        //sql语句
        $hot = isset($tag['hot']) ? $tag['hot'] == 'true' ? true : false : false;
        //是否按照浏览量排序
        $cateid = isset($tag['cateid']) ? ''.$tag['cateid'] : '';
        //$cateid = isset($tag['cateid']) ? ' and cateid='.$tag['cateid'] : '';
        $start = isset($tag['start']) ? $tag['start'] : '0';
        //开始查找条数
        $name = isset($tag['name']) ? $tag['name'] : 'v';        //循环变量

        //查找子栏目
        $childid='';
        if($cateid){
            $childidarr=db('category')->field('id')->where('parentid='.$cateid)->select();
            if($childidarr){
                foreach ($childidarr as $k=>$v){
                    $childid .= $childidarr[$k]['id'].',';
                }
                $childid = substr($childid,0,-1);
            }else{
                $childid=$cateid;
            }
            $cateid=' and cateid in ('.$childid.')';
        }
        $where = $where.$cateid.$like;
        $countinfo = db('news')->where($where)->count();         //总条数
        $row = isset($tag['limit']) ? $tag['limit'] : $countinfo;   //获取limit

        //sql语句查询
        if($sql){
            $str  = '<?php ';
            $str .= '$taginfo=db()->query(' . "\"" . $sql . "\"" . ');';
            $str .= ' foreach($taginfo as $v):';
            $str .= ' ?>';
            $str .= $content;
            $str .= '<?php endforeach; ?>';
            return $str;
        }
        $str = '<?php ';
        if($hot){
            $str .= '$taginfo=db(\'news\')->field(\''.$field.'\')->where("'.$where.$like.'")->order(\'looknum desc\')->limit('.$start.','.$row.')->select();';
        }else{
            $str .= ' $taginfo=db(\'news\')->field(\''.$field.'\')->where("'.$where.$like.'")->order(\''.$order.'\')->limit('.$start.','.$row.')->select();';
        }
        $str .= ' foreach($taginfo as $'.$name.'): ';
        $str .= '$'.$name.'[\'catename\']=db(\'category\')->where(\'id=\'.$'.$name.'[\'cateid\'])->find()[\'catename\'];?>';
        $str .= $content;
        $str .= '<?php endforeach; ?>';
        return $str;
    }


    /*新闻列表标签带分页*/
    public function tagNewslist($tag,$content){
        $field = isset($tag['field']) ? $tag['field'] :'*';           //读取字段
        $where = isset($tag['where']) ?  $tag['where'] : '1=1';     //where条件
        $order = isset($tag['order']) ? $tag['order'] : 'id asc';      //排序方式
        $like = isset($tag['like']) ? ' and ' . $tag['like']   : '';  //模糊查询
        $sql = isset($tag['sql']) ? $tag['sql'] : false;        //sql语句
        $hot = isset($tag['hot']) ? $tag['hot'] == 'true' ? true : false : false;
        //是否按照浏览量排序
        $name = isset($tag['name']) ? $tag['name'] : 'v';        //循环变量
        $where = $where.$like;

        $str  = '<?php ';
        $str  .= '$childidarr=db(\'category\')->field(\'id\')->where(\'parentid=\'.$cateid)->select();';            //查找是否有子栏目
        $str  .= '$childid=\'\';';
        $str  .= ' if($childidarr):';       //如果有子栏目 读取子栏目id 用于下面cateid查询
        $str  .= '  foreach($childidarr as $k=>$v):';
        $str  .= '      $childid .= $childidarr[$k][\'id\'].\',\';';
        $str  .= '  endforeach;';
        $str  .= '  $childid = substr($childid,0,-1);';
        $str  .= 'else:';
        $str  .= '$childid=$cateid;';       //如果没有 传进来的cateid用于查询
        $str  .= 'endif;';

        $str  .= '$countinfo = db(\'news\')->where(\''.$where.' and cateid in (\'.$childid.\')\')->count();';      //总条数
        $str  .=  '$countinfo = $countinfo ? $countinfo :1 ;';
        $limit=isset($tag['limit'])?$tag['limit']:'$countinfo';

        /*开始分页拼接字符串*/

        $str  .=  '$row = '.$limit.';';  //获取limit
        $str  .=  '$countpage = ceil($countinfo/$row);';

        $str  .= '$pagestr =  \'\';';
        $str .= ' $pagestr .= "<'.'ul style=\'list-style: none;clear:both;height: auto;overflow: hidden;\''.'>";';
        $str .= 'for($i = 1 ; $i <= $countpage ; $i++){';
        $str .= '   if($countpage == 1) break;';
        $str .= '   if($pages == $i){';
        $str .= ' $pagestr .= "<'.'li style=\'float: left;margin-left: 10px\'>'.'<'.'a style=\'text-decoration: none;color: #000;font-size: 18px;font-weight: bold\' href=\'###\'>$i</a></li>";';
        $str .= '   }else{';
        $str .= ' $pagestr .= "<'.'li style=\'float: left;margin-left: 10px\'>'.'<'.'a style=\'text-decoration: none;color: #000;font-size: 18px;\' href=\'?cateid=$cateid&page=$i\'>$i</a></li>";';
        $str .= '   }';
        $str .= '}';
        $str .= '$pagestr .= "</ul>";';
        /*结束分页拼接字符串*/

        $str .= ' ?>';
        //sql语句查询
        if($sql){
            $str .= '<?php $taginfo=db()->query(' . "\"" . $sql . "\"" . ');';
            $str .= ' foreach($taginfo as $v):';
            $str .= ' ?>';
            $str .= $content;
            $str .= '<?php endforeach; ?>';
            return $str;
        }
        $str  .= '<?php ';
        if($hot){
            $str .= ' $taginfo=db(\'news\')->alias(\'a\')->field(\'b.catename,b.url as cateurl,a.'.$field.'\')->join(\'category b\',\'a.cateid=b.id\')->where("cateid in (".$childid.'.'") and '.$where.$like.'")->order(\'looknum desc\')->limit(($pages-1)*$row,$row)->select();';
        }else{
            $str .= ' $taginfo=db(\'news\')->alias(\'a\')->field(\'b.catename,b.url as cateurl,a.'.$field.'\')->join(\'category b\',\'a.cateid=b.id\')->where("cateid in (".$childid.'.'") and '.$where.$like.'")->order(\''.$order.'\')->limit(($pages-1)*$row,$row)->select();';
        }
        $str .= '$page=$pagestr;';
        $str .= 'if($taginfo):';
        $str .= '   foreach($taginfo as $'.$name.'): ?>';
        $str .= $content;
        $str .= '<?php ';
        $str .= '   endforeach;';
        $str .= 'else: ';
        $str .= 'endif;';
        $str .= ' ?>';
        return $str;
    }


    /*友情链接*/
    public function tagFlink($tag,$content){
        $order = isset($tag['order']) ? $tag['order'] : 'id asc';      //排序方式
        $limit = isset($tag['limit']) ? "->limit('".$tag['limit']."')" : '';  //读取条数
        $where = isset($tag['where']) ?  $tag['where'] : '1=1';     //where条件
        $page = isset($tag['page']) ? $tag['page'] == 'true' ? true : false : false;        //sql语句
        $thumb = isset($tag['thumb']) ? $tag['thumb'] == 'true' ? true : false : false; //是否显示图片
        $name=isset($tag['name']) ? $tag['name'] : 'v';        //循环变量
        $countinfo = db('friendlink')->where($where)->count();         //总条数
        $row = isset($tag['limit']) ? $tag['limit'] : $countinfo;   //获取limit
        $countpage = ceil($countinfo/$row);       //总页数
        $pagestr = $page ? '"':'\' \'';
        //循环分页
        if($page){
            $pagestr .= '<ul style=\'list-style: none;clear:both;height: auto;overflow: hidden;\'>';
            for($i=1;$i<=$countpage;$i++){
                if($countpage==1) break;
                $pagestr .= '<li style=\'float: left;margin-left: 10px\'><a style=\'text-decoration: none;color: #000;font-size: 18px;\' href=\'?page='.$i.'\'>' . $i . '</a></li>';
            }
            $pagestr .= "</ul>\"";
        }
        $str  = '<?php ';
        if($thumb == 'true'){
            $str .= '$taginfo=db(\'friendlink\')->where(\'photo is not null\')->order(\''.$order.'\')'.$limit.'->select();';
        }else{
            $str .= '$taginfo=db(\'friendlink\')->where(\'photo is null\')->order(\''.$order.'\')'.$limit.'->select();';
        }
        $str .= '$page='.$pagestr.';';
        $str .= ' foreach($taginfo as $'.$name.'): ?>';
        $str .= $content;
        $str .= '<?php endforeach; ?>';
        return $str;
    }


    /*sql语句查询*/
    public function tagSql($tag,$content){
        $sql=isset($tag['sql']) ? $tag['sql'] : '';        //sql语句
        $name=isset($tag['name']) ? $tag['name'] : 'v';        //循环变量
        $str  = '<?php ';
        $str .= '$taginfo=db()->query(\''.$sql.'\');';
        $str .= ' foreach($taginfo as $'.$name.'): ?>';
        $str .= $content;
        $str .= '<?php endforeach; ?>';
        return $str;
    }


    /*广告列表*/
    public function tagAdlist($tag,$content){
        $field = isset($tag['field'])?$tag['field']:'';
        $order = isset($tag['order'])?$tag['order']:'id asc';
        $sql = isset($tag['sql'])?$tag['sql']:'0';
        $like = isset($tag['like'])?' and '.$tag['like']: '';
        $where = isset($tag['where'])?$tag['where']:'1=1';
        $page = isset($tag['page']) ? $tag['page'] == 'true' ? true : false : false;
        $name=isset($tag['name']) ? $tag['name'] : 'v';        //循环变量
        $where=$where.$like;
        $countinfo = db('ad')->where($where)->count();         //总条数
        $row = isset($tag['limit']) ? $tag['limit'] : 10;   //获取limit
        $countpage = ceil($countinfo/$row);       //总页数
        $pagestr = $page ? '"':'\' \'';
        //循环分页
        if($page){
            $pagestr .= '<ul style=\'list-style: none;clear:both;height: auto;overflow: hidden;\'>';
            for($i=1;$i<=$countpage;$i++){
                if($countpage==1) break;
                $pagestr .= '<li style=\'float: left;margin-left: 10px\'><a style=\'text-decoration: none;color: #000;font-size: 18px;\' href=\'?page='.$i.'\'>' . $i . '</a></li>';
            }
            $pagestr .= "</ul>\"";
        }

        if($sql){
            $str = '<?php $taginfo = db()->query(\''.$sql.'\'); ';
        }else{
            $str = '<?php $taginfo=db(\'ad\')->field(\''.$field.'\')->where("'.$where.$like.'")->order(\''.$order.'\')->limit(($pages-1)*'.$row.','.$row.')->select();';
        }

        $str .= '$page='.$pagestr.';';
        $str .= ' foreach($taginfo as $'.$name.'):?>';
        $str .= $content;
        $str .= '<?php endforeach; ?>';
            return $str;
    }



    /*banner列表*/
    public function tagBanlist($tag,$content){
        $field = isset($tag['field'])?$tag['field']:'*';
        $order = isset($tag['order'])?$tag['order']:'id asc';
        $sql = isset($tag['sql'])?$tag['sql']:'0';
        $like = isset($tag['like'])?' and '.$tag['like']: '';
        $where = isset($tag['where']) ? $tag['where']:'1=1';
        $status = isset($tag['status']) ? $tag['status'] == 'true' ? false : true : true;
        $status ? $where = 'static=1 and ' . $where.$like : $where='static=0 and ' . $where.$like;

        $name=isset($tag['name']) ? $tag['name'] : 'v';        //循环变量
        $countinfo = db('banner')->where($where)->count();         //总条数
        $row = isset($tag['limit']) ? $tag['limit'] : $countinfo;   //获取limit
        if($sql){
            $str = '<?php $taginfo = db()->query(\''.$sql.'\'); ?>';
        }else{
                $str = '<?php $taginfo=db(\'banner\')->field(\''.$field.'\')->where("'.$where.$like.'")->order(\''.$order.'\')->limit('.$row.')->select(); ?>';
        }
        $str .= '<?php ';
        $str .= ' foreach($taginfo as $'.$name.'):?>';
        $str .= $content;
        $str .= '<?php endforeach; ?>';
            return $str;

    }


    /*评论列表*/
    public function tagCommentlist($tag,$content){
        $field = isset($tag['field']) ? $tag['field'] :'';
        $order = isset($tag['order']) ? $tag['order'] : 'id asc';
        $like = isset($tag['like']) ? " and " . $tag['like'] : ' and 1=1';
        $sql = isset($tag['sql']) ? $tag['sql'] : false;        //sql语句
        $page = isset($tag['page']) ? $tag['page'] == 'true' ? true : false : false;
        $name=isset($tag['name']) ? $tag['name'] : 'v';        //循环变量
        $where = isset($tag['where'])?$tag['where']:'1=1';
        $where=$where.$like;
        $countinfo = db('comment')->where($where)->count();         //总条数
        $row = isset($tag['limit']) ? $tag['limit'] : $countinfo;   //获取limit
        $countpage = ceil($countinfo/$row);       //总页数
        $pagestr = $page ? '"':'\' \'';
        //循环分页
        if($page){
            $pagestr .= '<ul style=\'list-style: none;clear:both;height: auto;overflow: hidden;\'>';
            for($i=1;$i<=$countpage;$i++){
                if($countpage==1) break;
                $pagestr .= '<li style=\'float: left;margin-left: 10px\'><a style=\'text-decoration: none;color: #000;font-size: 18px;\' href=\'?page='.$i.'\'>' . $i . '</a></li>';
            }
            $pagestr .= "</ul>\"";
        }
        if($sql){
            $str  = '<?php ';
            $str .= '$taginfo=db()->query(' . "\"" . $sql . "\"" . ');';
            $str .= ' foreach($taginfo as $' .$name. '):';
            $str .= ' ?>';
            $str .= $content;
            $str .= '<?php endforeach; ?>';
            return $str;
        }
            $str = '<?php $taginfo=db(\'comment\')->field(\''.$field.'\')->where("'.$where.$like.'")->order(\''.$order.'\')->limit(($pages-1)*'.$row.','.$row.')->select(); ';
        $str .= '$page='.$pagestr.';';
        $str .= ' foreach($taginfo as $v):';
        $str .= ' ?>';
        $str .= $content;
        $str .= '<?php endforeach; ?>';
        return $str;
    }


    /*导航列表*/
    public function tagNavlist($tag,$content){
        $field = isset($tag['field'])?$tag['field']:'';
        $order = isset($tag['order'])?$tag['order']:'id asc';
        $limit = isset($tag['limit'])?$tag['limit']:'';
        $sql = isset($tag['sql'])?$tag['sql']:'0';
        $like = isset($tag['like'])?' and '.$tag['like']: '';
        $where = isset($tag['where'])&&!empty($tag['where']) ? $tag['where'] : '1=1';
        $name=isset($tag['name']) ? $tag['name'] : 'v';        //循环变量
        $where=isset($tag['top']) ? $where.' and ismenu=2 and isdel=0 and parentid='.$tag['top'] : $where.' and ismenu=2 and isdel=0 and parentid=0';        //上级导航
        if($sql){
            $str = '<?php $taginfo = db()->query(\''.$sql.'\'); ?>';
        }else{
            $str = '<?php $taginfo = db("category")->field(\'catename as title,url,id,letter,inputtime,parentid,image,description\')->where("'.$where.$like.'")->order(\''.$order.'\')->limit(\''.$limit.'\')->select(); ?>';
        }
        $str .= '<?php foreach($taginfo as $'.$name.'):?>';
        $str .= $content;
        $str .= '<?php endforeach; ?>';
        return $str;
    }

    public function tagGetweek($tag){
        $str = '<?php $weekarr=[\'星期日\',\'星期一\',\'星期二\',\'星期三\',\'星期四\',\'星期五\',\'星期六\',];';
        $str .= 'echo $weekarr[date(\'w\','.$tag['w'].')]; ?>';
        return $str;
    }
	/*读取单片文章*/
    public function tagNewsinfo($tag,$content)
    {
        $id=$tag['nid'];
        $str='<?php ';
        $str.='$result=db(\'news\')->where(\'id='.$id.'\')->select();';
        $str.='foreach($result as $info):';
        $str.= ' ?>';
        $str.=$content;
        $str.='<?php endforeach;?>';
        return $str;
    }
}
