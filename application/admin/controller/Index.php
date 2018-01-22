<?php
namespace app\admin\controller;
use app\admin\controller\Common;
class Index extends Common
{
	 public function _empty($name)
    {
        return "方法不存在".$name;
    }
    public function index()
	
    {
		echo session('id');
		$table2=db('auth_group');
		$info=db('admin')->where('id='.session('id'))->find();
		for($i=0;$i<count($info);$i++){				
				$info['title']=$table2->field('title')->where('id='.$info['group'])->find()['title'];
			}
		
		$this->assign('vo',$info);
       return $this->fetch('./admintpl/index.html');
    }
	public function welcome(){
		
        return $this->fetch('./admintpl/welcome.html');
    }
	public function add(){
        return $this->fetch('./admintpl/add.html');
    }
	public function addadvert(){
        return $this->fetch('./admintpl/addadvert.html');
    }
	public function listnav(){
        return $this->fetch('./admintpl/listnav.html');
    }
	public function renav(){
        return $this->fetch('./admintpl/renav.html');
    }
	public function addnav(){
        return $this->fetch('./admintpl/addnav.html');
    }
}
