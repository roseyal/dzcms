<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;
class Login extends Controller{
public function login(){
			if(session('id')==''){
			return $this->fetch('./admintpl/login.html');
		 }
		 else{
			$this->redirect('/admin.php/index');
		}
		}
		public function do_login(){
		$db=db('admin');
		$table=db('basics');
		$data=input('post.');
		$ip=$table->value('iplist');
		$array=explode(",",$ip);
		$request = Request::instance();
        $data['ip'] = $request->ip();
		$data['password']=md5($data['password']);
		if(in_array($data['ip'], $array)){
			 $list = $db->where(['username'=>$data['username'],'password'=>$data['password']])->find();
		 
			if($list){
					if(captcha_check($data['captcha'])){
					 session('id',$list['id']);
					$data['id']=$list['id'];
					$data['status']=1;
					$data['msg']='成功';
				}else{
					$data['status']=3;
					$data['msg']='验证码错误';
				}
            }else{
				$data['msg']='fail';
            }
		}else{
			
			 $data['status']=2;
			 $data['msg']='您登陆的IP不符';
		}
		
		  
				return json($data);
		}
}
		?>