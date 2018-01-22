<?php
namespace app\admin\controller;
use app\admin\controller\Common;
//use think\Controller;

class Nav extends Common
{
	 public function _empty($name)
    {
        return "方法不存在".$name;
    }
	public function listnav()  //导航列表
	{
		$db=db('nav');
        $catelist=$db->where(['static'=>0,'top'=>0])->select();
		
         foreach($catelist as &$vo)
         {
            $vo['second']=$db->where(['static'=>0,'top'=>$vo['id']])->select(); 
			foreach($vo['second'] as &$vo)
			{
				$vo['there']=$db->where(['static'=>0,'top'=>$vo['id']])->select();   
			}			
         }
		 //echo "<pre>";
		 //print_r($catelist);
		 $this->assign('data',$catelist);
		return $this->fetch('./admintpl/listnav.html');
	}
/*导航添加页面*/
		public function addnav()
	{
		$db=db('nav');  //查询分类表
        $catelist=$db->where('top=0')->select();
         foreach($catelist as &$vo)
         {
            $vo['second']=$db->where('top='.$vo['id'])->select();		
         }
		 $this->assign('info',$catelist);
		return $this->fetch('./admintpl/addnav.html');
	}
/*导航添加处理页面*/
		public function do_addnav()
	{
		$data=input('post.');
        $table=db('nav');
		$data['inputtime']=time();
		$info=$table->insert($data);
        if($info)
           {
                $data=[
					'msg'=>'添加成功',
					'status'=>1,
				]; 
            }
            else{
				$data=[
					'msg'=>'添加失败',
					'status'=>2,
				]; 
            }
			return json($data);
	}
/*导航添加判断页面*/
	public function navname(){
		$db=db('nav');
		$name=input('post.name');
		$info=$db->where("name='".$name."'")->find();
		
		if($info)
        {
            $data=[
                'status'=>1,
                'msg'=>'此名称已存在'
            ];
        }
        else{
            $data=[
                'status'=>0,
                'msg'=>'此名称可用'
            ];
        }
		return json($data);
	}
/*导航删除*/
	public function do_delnav(){
		$id = input('post.id');
		$db = db('nav');
		$data['static']=1;
		$list = $db->where('id in (' . $id . ')')->update($data);
		if($list)
            {
                $result=[
                    'msg'=>'删除成功',
                    'status'=>1
                ];
            }
            else{
                $result=[
                    'msg'=>'删除失败',
                    'status'=>2
                ];
            }
        
        return json($result);
	}

    public function do_first_del()
    {
    	$id = input('id');
    	$db = db('nav');
    	$data['static']=1;
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
    public function do_del()
    {
    	$id = input('id');
		$db = db('nav');

		$list = $db->where('id in (' . $id . ')')->delete();
		if($list)
            {
                $result=[
                    'msg'=>'删除成功',
                    'status'=>1
                ];
            }
            else{
                $result=[
                    'msg'=>'删除失败',
                    'status'=>2
                ];
            }
        
        return json($result);
    }
	public function renav()
	{
		return $this->fetch('./admintpl/renav.html');
	}
	//导航管理 列表编辑页
	public function upnav()
	{
		$table=db('nav');
		$id=input('id');
		$catelist=$table->where('top=0')->select();
		
         foreach($catelist as &$vo)
         {
            $vo['second']=$table->where('top='.$vo['id'])->select();		
         }
		$list=$table->where('id='.$id)->find();
		$this->assign('list',$list);
		$this->assign('info',$catelist);
        return $this->fetch('./admintpl/upnav.html');
    }
	//导航管理 列表编辑提交
	public function do_upnav()
	{
		$table=db('nav');
		$id=input('id');
		$data=input();
		unset($data['id']);
		$info=$table->where('id='.$id)->update($data);
		if($info!==false)
		{
			 $data=[
					'msg'=>'修改成功',
					'status'=>1,
				];
		}else{
			$data=[
					'msg'=>'修改失败',
					'status'=>2,
				];
		}
		return json($data);
	
	}
	/*导航回收站还原*/
     public function nav_up(){
        $id=input('id');
        $db=db('nav');
        $data['static']=0;
        $info=$db->where('id in('.$id.')')->update($data);
        if($info){
           $result=[
                'msg'=>'还原成功',
                'status'=>1
           ];
           $iddd=[
                'msg'=>'还原成功',
                'status'=>1
           ];
        }else{
            $result=[
                'msg'=>'还原失败',
                'status'=>2
           ];
           $iddd=[
                'msg'=>'还原失败',
                'status'=>2
           ];
        }
        return json($result);
        return json($iddd);
    }
	/*导航回收站删除*/
    public function nav_del()
	{
        $id=input('id');
        $db=db('nav');
        $info=$db->where('id in('.$id.')')->delete();
        if($info){
            $result=[
                'msg'=>'删除成功',
                'status'=>1
           ];
           $iddd=[
                'msg'=>'删除成功',
                'status'=>1
           ];
        }else{
            $result=[
                'msg'=>'删除失败',
                'status'=>2
           ];
           $iddd=[
                'msg'=>'删除失败',
                'status'=>1
           ];
        }
        return json($result);
        return json($iddd);
    }
		    public function rnav()  //导航回收站
    {
        $db=db('nav');
		$info1=$db->where('static=1')->count();
		 $this->assign('info',$info1);
         $info=$db->where('static=1')->paginate(3);
         $page=$info->render();
         $this->assign('list',$info->toArray());
         $this->assign('pages',$page);
        return $this->fetch('./admintpl/rnav.html');
    }
	
}