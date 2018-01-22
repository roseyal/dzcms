<?php
namespace app\home\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
       $styles=db('basics')->value("styles");
        $template='templates/'.$styles.'/index.html';
		$cateid=input('cateid')?input('cateid'):1;
        if(!$cateid){
            return "无cateid值";
        }
        $page=isset($_GET['page'])?$_GET['page']:1;
        $this->assign('pages',$page);
        $this->assign('cateid',$cateid);
        return $this->fetch($template);
    }
}
