<?php
namespace app\admin\controller;
use app\admin\controller\Common;
//use think\Controller;

class Ad extends Common
{
	 public function _empty($name)
    {
        return "方法不存在".$name;
    }
	//广告列表
	public function adlist()
    {
		$admin = db('ad');
        $group = db('adcate');
        $content = input('content')?input('content'):'';
        if(!empty($content)){
            $list = $admin->order('id asc')->where('recovery='.'0')->whereLike('brand',"%".$content."%")->paginate('2',false,['query' => request()->param()]);
            $info = $admin->order('id asc')->where('recovery='.'0')->whereLike('brand',"%".$content."%")->select();
            $num = count($info);
            $this->assign('val',$content);
        }else{
             $list = $admin->order('id asc')->where('recovery='.'0')->select();
		
            $info = $admin->order("id asc")->where('recovery='.'0')->select();

            $num = count($info);
        }
      //  $this->assign('page',$list->render());
		$this->assign('num',$num);
       // $info=$list->toArray()['data'];
        for($i=0;$i<=count($list)-1;$i++){
			$info[$i]['name']=$group->field('name')->where('id='.$info[$i]['theme'])->find()['name'];
		}
        $this->assign('list',$info);
        return $this->fetch('./admintpl/adlist.html');

    }

	//广告放入回收站
	public function ajax_update(){
		$id = input('id');
    	$db = db('ad');
    	$data['recovery']=1;
    	$info = $db->where('id in('.$id.')')->update($data);
    	if($info)
            {
                $result=[
                    'msg'=>'删除成功',
                    'status'=>1
                ];
                $iddd=[
                    'msg'=>'删除成功',
                    'status'=>1
                ];
            }
            else{
                $result=[
                    'msg'=>'删除失败',
                    'status'=>2
                ];
                $iddd=[
                    'msg'=>'删除失败',
                    'status'=>2
                ];
            }
        
        return json($result);
        return json($iddd);	
	}
	
	public function update()
    {
		$id=input('id');
		 // echo "$id";exit;
		$date=db('ad')->where('id in('.$id.')')->select();
		//print_r($date);exit;
		$info=db('ad')->where('id in('.$id.')')->update(['recovery'=>1]);
		if($info){
			$this->success('成功放入回收站','Ad/adlist');
		}else{
			$this->error('重新放入回收站','Ad/adlist');
		}
	}
	//广告回收站列表
	public function adrecover() 
    {
        $admin = db('ad');
        $content = input('content')?input('content'):'';
        // echo $content;
        if(!empty($content)){
            $list = $admin->order('id asc')->where('recovery='.'1')->whereLike('brand',"%".$content."%")->paginate('2',false,['query' => request()->param()]);
            $info = $admin->order('id asc')->where('recovery='.'1')->whereLike('brand',"%".$content."%")->select();
            $num = count($info);
            $this->assign('val',$content);
        }else{
            $list = $admin->order('id asc')->where('recovery='.'1')->paginate('2');
            $info = $admin->order('id asc')->where('recovery='.'1')->select();
            $num = count($info);
        }
        $this->assign('page',$list->render());
        $this->assign('num',$num);
        $info=$list->toArray()['data'];
        $this->assign('list',$info);
        return $this->fetch('./admintpl/adrecover.html');
    }
	//广告添加
	public function adadd(){
		$db=db('adcate');
		$list=$db->select();
		$this->assign('list', $list);
		return $this->fetch('./admintpl/adadd.html');
	}
	//处理广告的添加
	public function do_adadd(){
		$data=input("post.");
		$file = request()->file('photo');
		if($file){
			$fileinfo = $file->move(config('upload_path'));
			$data['photo'] = $fileinfo->getSavename();
		}
		unset($data['headportrait-1']);
		$db=db('ad');
		$list=$db->insert($data);
		if($list){
			$result=[
                    'msg'=>'添加成功',
                    'status'=>1
                ];
		}else{
			$result=[
                    'msg'=>'添加失败',
                    'status'=>2
                ];
		}
		return json($result);
	}
	//广告的编辑
	public function adup(){
		$id=input('id');
		$db=db('ad');
		$db2=db('adcate');
		$info=$db2->select();
		$this->assign('info',$info);
		$list=$db->where('id='.$id)->find();
		$list['name']=$db2->field('name')->where('id='.$list['theme'])->find()['name'];
		$this->assign('list', $list);
		return $this->fetch('./admintpl/adup.html');
	}
	//处理广告的编辑
	public function do_adup(){
		$data=input('post.');
		$db=db('ad');
		$file = request()->file('photo');
		if ($file) {
			$fileinfo = $file->move(config('upload_path'));
			$data['photo'] = $fileinfo->getSavename();
		}
		
		$list=$db->update($data);
		if($list!==false){
			$result=[
                    'msg'=>'修改成功',
                    'status'=>1
                ];
		}else{
			$result=[
                    'msg'=>'修改失败',
                    'status'=>2
                ];
		}
		return json($result);
	}
	// 广告回收站还原
	public function ajax_reback(){
		$id = input('id');
    	$db = db('ad');
    	$data['recovery']=0;
    	$info = $db->where('id in('.$id.')')->update($data);
    	if($info)
            {
                $result=[
                    'msg'=>'还原成功',
                    'status'=>1
                ];
            }
            else{
                $result=[
                    'msg'=>'还原失败',
                    'status'=>2
                ];
            }
        return json($result);
	}
	
	public function reback()
    {
        $id=input('id');
        // echo $id;exit;
        $date=db('ad')->where('id in('.$id.')')->select();
        // print_r($date);exit;
        $info=db('ad')->where('id in('.$id.')')->update(['recovery'=>1]);
        if($info){
            $this->success('succ');
        }else{
            $this->error('error');
        }    
    }
	//广告回收站删除
	public function ajax_delad(){
		$id = input('id');
        $db = db('ad');
        $info = $db->where('id in (' . $id . ')')->delete();
        return $info;
		if ($info) {
           $result=[
                    'msg'=>'删除成功',
                    'status'=>1
                ];
        } else {
            $result=[
                    'msg'=>'删除失败',
                    'status'=>2
                ];
        }
		return json($result);
	}
	
	public function delad(){
        $id=input('id');
        $db=db('ad');
        $list=$db->where('id in('.$id.')')->delete();
        if($list){
            $this->success('succ');
        }else{
            $this->error('fail');
        }
    }
	//广告类型列表
	public function adcatelist()
    {
    	
		$admin = db('adcate');
    
        $content = input('content')?input('content'):'';
    
        if(!empty($content)){
            $list = $admin->order('id asc')->where('recovery='.'0')->whereLike('name',"%".$content."%")->paginate('2',false,['query' => request()->param()]);
            $info = $admin->order('id asc')->where('recovery='.'0')->whereLike('name',"%".$content."%")->select();
            $num = count($info);
            $this->assign('val',$content);
        }else{
            $list = $admin->order('id asc')->where('recovery='.'0')->paginate('2');
            $info = $admin->order('id asc')->where('recovery='.'0')->select();
            $num = count($info);
        }
        $this->assign('page',$list->render());
		$this->assign('num',$num);
        $this->assign('list',$info);
        return $this->fetch('./admintpl/adcatelist.html');
    }
	
	//广告类型放到回收站(ajax)
	public function aupcate(){
		$id = input('id');
    	$db = db('adcate');
    	$data['recovery']=1;
    	$info = $db->where('id in('.$id.')')->update($data);
    	if($info)
            {
                $result=[
                    'msg'=>'删除成功',
                    'status'=>1
                ];
                $iddd=[
                    'msg'=>'删除成功',
                    'status'=>1
                ];
            }
            else{
                $result=[
                    'msg'=>'删除失败',
                    'status'=>2
                ];
                $iddd=[
                    'msg'=>'删除失败',
                    'status'=>2
                ];
            }
        
        return json($result);
        return json($iddd);
	}
	// 广告类型放到回收站
	public function upcate()
    {
		$id=input('id');
		 // echo "$id";exit;
		$date=db('adcate')->where('id in('.$id.')')->select();
		//print_r($date);exit;
		$info=db('adcate')->where('id in('.$id.')')->update(['recovery'=>1]);
		if($info){
			$this->success('成功放入回收站','Ad/adcatelist');
		}else{
			$this->error('重新放入回收站','Ad/adcatelist');
		}
	}
	//广告类型添加
	public function adcateadd()
    {
    	return $this->fetch('./admintpl/adcateadd.html');
    }
	public function do_adcateadd(){
		$data=input('post.');
		$db=db('adcate');
		$data['puttime']=time();
		$list=$db->insert($data);
		if($list){
			$result=[
                    'msg'=>'添加成功',
                    'status'=>1
                ];
		}else{
			$result=[
                    'msg'=>'添加失败',
                    'status'=>2
                ];
		}
		return json($result);	
	}
	//广告类型修改页
	public function adcateup()//广告类型修改页
    {
		$id=input('id');
    	$list=db('adcate')->where('id='.$id)->find();
    	$this->assign('list',$list);
    	return $this->fetch('./admintpl/adcateup.html');
    }
	//处理广告类型修改
	public function do_adcateup()//处理广告类型修改
    {
    	$data=input('post.');
    	// print_r($data);exit;
    	$id=$data['id'];
    	unset ($data['id']);
    	$db=db('adcate');
        $info=$db->where('id='.$id)->update($data);
        if($info!==false){
        	 $result=[
                    'msg'=>'修改成功',
                    'status'=>1
                ];
        }else{
        	$result=[
                    'msg'=>'修改失败',
                    'status'=>2
                ];
        }
		return json($result);
    }
	//广告分类管理回收站列表
	public function adcaterecover()
    {   
        $admin=db('adcate');         
        $content = input('content')?input('content'):'';
        if(!empty($content)){
            $list = $admin->order('id asc')->where('recovery='.'1')->whereLike('name',"%".$content."%")->paginate('2',false,['query' => request()->param()]);
            $info = $admin->order('id asc')->where('recovery='.'1')->whereLike('name',"%".$content."%")->select();
            $num = count($info);
            $this->assign('val',$content);
        }else{
            $list = $admin->order('id asc')->where('recovery='.'1')->paginate('2');
            $info = $admin->order("id asc")->where('recovery='.'1')->select();
            $num = count($info);
        }
        $this->assign('page',$list->render());
        $this->assign('num',$num);
        $this->assign('list',$info);
        return $this->fetch('./admintpl/adcaterecover.html');
    }
	// 广告分类管理回收站还原
	public function ajax_rebackcate(){
		$id = input('id');
    	$db = db('adcate');
    	$data['recovery']=0;
    	$info = $db->where('id in ('.$id.')')->update($data);
    	if($info)
            {
                $result=[
                    'msg'=>'还原成功',
                    'status'=>1
                ];
            }
            else{
                $result=[
                    'msg'=>'还原失败',
                    'status'=>2
                ];
            }
        return json($result);
	}
	
	
	public function rebackcate() // 广告分类管理回收站还原
    {
        $id=input('id');
        // echo $id;exit;
        $date=db('adcate')->where('id in ('.$id.')')->select();
        // print_r($date);exit;
       
        $info=db('adcate')->where('id in ('.$id.')')->update(['recovery'=>0]);
        if($info){
            $this->success('succ');
        }else{
            $this->error('error');
        }
    }
	//广告分类管理回收站删除
	public function ajax_deladcate(){
		$id = input('post.id');
		// return json($id);
        $db = db('ad');
		$db2 = db('adcate');
       // $data=$db->where('theme in ('.$id.')')->find();
      //  if ($data) {
				//$result=[
                    //'msg'=>'不可删',
           //         'status'=>1
               // ];
       // } else {
           $list=$db2->where('id in ('.$id . ')')->delete();
			if($list){
				$result=[
                    'msg'=>'成功删除',
                    'status'=>2
                ];
				// return json($result);
			}else{
				$result=[
                    'msg'=>'删除失败',
                    'status'=>3
                ];
				// return json($result);
			}
      // }
		return json($result);
	}
	
	
	public function deladcate(){ //广告分类管理回收站删除
        $id=input('id');
        $db=db('adcate');
		$db1=db('ad');
		echo "$id";
		$data=$db1->where('theme in('.$id.')')->find();
		// echo "<pre>";
		// print_r($data);exit;
		if($data){
			echo "不可删";
		}else{
			$list=$db->where('id in('.$id.')')->delete();
			if($list){
				$this->success('succ');
			}else{
				$this->error('fail');
			}
		}
		exit;
		// $arr=$db1->where('='.$data['type']);
        
    }
	//
	
	
	
	public function do_first_del()  //资讯分类的删除
    {
    	$id = input('id');
    	$db = db('adcate');
    	$data['recovery']=1;
    	$info = $db->where('id in('.$id.')')->update($data);
    	if($info)
            {
                $result=[
                    'msg'=>'删除成功',
                    'status'=>1
                ];
                $iddd=[
                    'msg'=>'删除成功',
                    'status'=>1
                ];
            }
            else{
                $result=[
                    'msg'=>'删除失败',
                    'status'=>2
                ];
                $iddd=[
                    'msg'=>'删除失败',
                    'status'=>2
                ];
            }
        
        return json($result);
        return json($iddd);
    }
	


}