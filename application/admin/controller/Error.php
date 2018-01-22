<?php
namespace app\admin\controller;

use app\admin\controller\Common;
use think\Request;
use think\Controller;
class Error extends Common
{
	    public function index(request $request)
    {
        $cityName = $request->controller();
        return "控制器".$cityName."不存在";
    }
	 public function _empty($name)
    {
        return "方法不存在".$name;
    }


}
