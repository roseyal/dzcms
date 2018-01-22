<?php
namespace app\admin\controller;

use think\Auth;

use think\Controller;

class Common extends Controller{
	public function _initialize(){
		parent::_initialize();
		if(session('id')==''){
			$this->redirect('Login/login');
		}

else{
			// $auth=new Auth();
			// $controller=request()->controller();
			// $action=request()->action();
			// $info=$auth->check($controller,session('id'));
			// if($info){
				// $info2=$auth->check($controller."/".$action,session('id'));
				// if(!$info2){
					// dump('no no');exit;
				// }
			// }else{
				// dump('no no');exit;
			// }
		}
	
	}
		 public function _empty($name)
    {
        return "方法不存在".$name;
    }
}

?>