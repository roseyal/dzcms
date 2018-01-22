<?php
namespace app\home\controller;

use think\Controller;

class Article extends Controller
{
   
    public function newslist()
    {
         $id=input('id');//文章接收Id值 input('get.');
        $cateid=input('cateid');
		$page=input('page');
		$pages=$page?$page:1;
        $this->assign('cateid',$cateid);
		$this->assign('pages',$pages);
        $styles=db('basics')->where('id=1')->value('styles');//获取基本设置表的风格
        $template=db('category')->where('id='.$cateid)->value('template_list');//根据站点获取设置的模板内容页
        $temp='./templates/'.$styles.'/'.$template;
        // print_r($temp);
        return $this->fetch($temp);
    }
    public function news(){
        $id=input('id');//文章接收Id值 input('get.');
        $cateid=db('news')->where('id='.$id)->value('cateid');//获取文章表的栏目ID
        $styles=db('basics')->where('id=1')->value('styles');//获取基本设置表的风格
       $template=db('category')->where('id='.$cateid)->value('template_content');//根据站点获取设置的模板内容页
        $temp='./templates/'.$styles.'/'.$template;
        $info=db('news')->where('id='.$id)->find();
        $this->assign('info',$info);
        return $this->fetch($temp);
    }
    public function catecontent()
    {
        $cateid=input('cateid');
        $styles=db('basics')->where('id=1')->value('styles');//获取基本设置表的风格
        $info=db('category')->where('id='.$cateid)->find();
        $this->assign('info',$info);
        $temp='./templates/'.$styles.'/'.$info['template_content'];
        return $this->fetch($temp);
    }
	/*栏目首页*/
    public function cate_index(){
        $cateid=input('cateid');
        $styles=db('basics')->where('id=1')->value('styles');//获取基本设置表的风格
        $index=db('category')->where('id='.$cateid)->value('template_index');
        $temp='./templates/'.$styles.'/'.$index;
        return $this->fetch($temp);
    }

    /*栏目列表页*/
    public function cate_list(){
        $page = input('page') ;
        $page = $page ? $page : 1;
        $cateid = input('cateid');
        $styles = db('basics')->where('id=1')->value('styles');//获取基本设置表的风格
        $list = db('category')->where('id='.$cateid)->value('template_list');
        $this->assign('pages',$page);
        $this->assign('cateid',$cateid);
        $temp='./templates/'.$styles.'/'.$list;
        return $this->fetch($temp);
    }

    /*栏目内容页*/
    public function cate_content(){
        $page = input('page') ;
        $page = $page ? $page : 1;
        $cateid = input('cateid');
        $styles = db('basics')->where('id=1')->value('styles');//获取基本设置表的风格
        $content = db('category')->where('id='.$cateid)->value('template_content');
        $this->assign('pages',$page);
        $this->assign('cateid',$cateid);
        $temp='./templates/'.$styles.'/'.$content;
        return $this->fetch($temp);
    }








}