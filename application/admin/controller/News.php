<?php
namespace app\admin\controller;

use app\admin\controller\Common;
//use think\Controller;
header("Content-type:text/html;charset=utf-8");

class News extends Common{
	 public function _empty($name)
    {
        return $this->fetch('./admintpl/empty.html');
    }
    public function newslist()    //资讯列表
    {
	$admin = db('news');
        $group = db('category');
        $content = input('content')?input('content'):'';
        if(!empty($content)){
            $list = $admin->order('id asc')->where('isdel='.'0')->whereLike('title',"%".$content."%")->paginate('2',false,['query' => request()->param()]);
            $info = $admin->order('id asc')->where('isdel='.'0')->whereLike('title',"%".$content."%")->select();
            $num = count($info);
            $this->assign('val',$content);
        }else{
            $list = $admin->order('id asc')->where('isdel='.'0')->paginate('10');
            $info = $admin->order("id asc")->where('isdel='.'0')->paginate('10');
            $num = count($info);
        }
		$this->assign('num',$num);
        $info=$list->toArray()['data'];
        for($i=0;$i<=count($list)-1;$i++){
			$info[$i]['catename']=$group->field('catename')->where('id='.$list[$i]['cateid'])->find()['catename'];
		}
        $this->assign('page',$list->render());
		$this->assign('list',$info);


        // $list=db('news')->alias('a')->field('a.id,a.title,a.smallimage,a.source,a.category,a.inputtime,a.looknum,a.status,category.catename')->join('category','category.id=a.cateid')
        // ->where('a.isdel',0)->select();
        // $this->assign("list", $list);
        // $cou['all']=db('news')->count();
        // $this->assign("cou", $cou);
       return $this->fetch('./admintpl/newslist.html');
    }
    public function newsadd()    //资讯添加
    {
    	$db=db('category');
        $catelist=$db->field('id,catename')->where(['parentid'=>0,'isdel'=>0])->select();
		foreach($catelist as &$vo)
         {
            $vo['second']=$db->where(['parentid'=>$vo['id'],'isdel'=>0])->select();
			foreach($vo['second'] as &$vo)
			{
				$vo['there']=$db->where(['parentid'=>$vo['id'],'isdel'=>0])->select();
			}
         }

        $this->assign('cate',$catelist);
       return $this->fetch('./admintpl/newsadd.html');
    }
    public function do_newsadd()    //资讯添加判断
    {
       $data=input('post.');//接受
       $db=db('news');//连库
       $data['inputtime']=time();
		$file = request()->file('smallimage');
        if($file){
            $fileinfo = $file->move(config('upload_path'));
           	$data['smallimage'] = $fileinfo->getSavename();
            }
       $list=$db->insert($data);//接受传来的数据，并插入数据库
       if($list){
		   $newsid=$db->getLastInsID();
		   $updata['url']='/home/Article/news/id/'.$newsid;
		   $info=$db->where('id='.$newsid)->update($updata);
		   if($info!==false)
		   {
			     $result=[
                    'msg'=>'添加成功',
                    'status'=>1
                ];
				   return json($result);
		   }

       }
       else{
          $result=[
                    'msg'=>'添加失败',
                    'status'=>2
                ];
				   return json($result);
       }

    }
     public function statu()  //资讯的审核
    {
    	$id = input('id');
    	$db = db('news');
        $data=$db->where('id',$id)->find();
        if($data['status']==1)
        {
            $data['status']=0;
        }else
        {
            $data['status']=1;
        }
    	$info = $db->where('id in('.$id.')')->update($data);
    	if($info)
            {
                 return json('succ');
            }
            else{
                return json('error');
            }
    }
      public function newsdel()  //资讯的删除
    {
    	$id = input('id');
    	$db = db('news');
    	$data['isdel']=1;
    	$info = $db->where('id in('.$id.')')->update($data);
    	if($info)
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
    public function newsup()    //资讯修改
    {
       $id=input('id');
       $db=db('news');
       $list=$db->where('id='.$id)->find();
       $this->assign('list',$list);
       return $this->fetch('./admintpl/newsup.html');
    }
    public function do_newsup()   //资讯修改判断
    {
      $id=input('id');
       $db=db('news');
       $data=input('post.');
       $file = request()->file('smallimage');
            if($file){
            $fileinfo = $file->move(config('upload_path'));
            $data['smallimage'] = $fileinfo->getSavename();
        }
		unset($data['id']);
       $info = $db->where('id='.$id)->update($data);

       if($info!==false){
          $result=[
                    'msg'=>'修改成功',
                    'status'=>1
                ];
       }
       else{
           $result=[
                    'msg'=>'修改失败',
                    'status'=>2
                ];
       }
	   return json($result);
    }

    public function newsrecover()    //资讯回收站
    {
          $content = input('content')?input('content'):'';
        if(!empty($content)){ 
            $list=db('news')->where('isdel=1')->whereLike('title',"%".$content."%")->paginate(10);
            $this->assign('page',$list->render());
            $list=$list->toArray()['data'];
        }else{
             $list=db('news')->where('isdel=1')->paginate(10);
             $this->assign('page',$list->render());
             $list=$list->toArray()['data'];
        }
    	$this->assign('list',$list);
		$cou['all']=db('news')->where('isdel=1')->count();
        $this->assign("cou", $cou);
       return $this->fetch('./admintpl/newsrecover.html');
    }
    public function newsrecoverdel()   //回收站的删除
    {
        $id = input('id');
    	$db = db('news');
    	$info = $db->where('id in('.$id.')')->delete();
    	if($info)
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
    public function newsrestore()  //回收站还原
    {
    	$id = input('id');
    	$db = db('news');
    	$data['isdel']=0;
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

     public function newspage()    //评论列表
    {
    	$id=input('id');
    	$list=db('comment')->where('newsid='.$id)->select();
    	// echo "<pre>";
    	// print_r($list);
    	// exit;
        $this->assign('user',$list);
       return $this->fetch('./admintpl/newspage.html');
    }
     public function comdel()    //删除评论
    {
        $id=input('id');
        $db=db('comment');
        $info=$db->where('id='.$id)->delete();
        if($info)
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
    public function catelist()    //栏目列表
    {


    $db=db('category');
        $content = input('content')?input('content'):'';
        if(!empty($content)){  
            // if(ctype_space($content)){  //是否包含空白
            //          echo "<script type='text/javascript'>
            //         alert('含有空格');
            //         </script>
            //     ";
            // }
             $catelist = $db->order('id asc')->where('isdel='.'0')->whereLike('catename',"%".$content."%")->paginate('10');
             $this->assign('page',$catelist->render());
             $catelist= $catelist->toArray()['data'];
            foreach($catelist as &$vo)
            {
                $vo['second']=$db->where(['parentid'=>$vo['id'],'isdel'=>0])->select();
                foreach($vo['second'] as &$vo)
            {
                $vo['there']=$db->where(['parentid'=>$vo['id'],'isdel'=>0])->select();
            }
         }
            $this->assign('val',$content);
        }else{
             $catelist=$db->where(['parentid'=>0,'isdel'=>0])->paginate('10');
             $this->assign('page',$catelist->render());
             $catelist= $catelist->toArray()['data'];
            foreach($catelist as &$vo)
            {
                $vo['second']=$db->where(['parentid'=>$vo['id'],'isdel'=>0])->select();
                foreach($vo['second'] as &$vo)
            {
                $vo['there']=$db->where(['parentid'=>$vo['id'],'isdel'=>0])->select();
            }
         }
        }  
         $num = count($catelist);  
       $this->assign("cou", $num);
       
       $this->assign("catelist", $catelist);
       return $this->fetch('./admintpl/catelist.html');
    }
     public function cateadd()    //资讯分类添加
    {
		$db=db('category');  //查询分类表
        $catelist=$db->field('id,catename')->where(['parentid'=>0,'isdel'=>0])->select();
         foreach($catelist as &$vo)
         {
             $vo['second']=$db->where(['parentid'=>$vo['id'],'isdel'=>0])->select();

         }

        $this->assign('cate',$catelist);


		$typecolor=config('modelid');
		$this->assign('modelid',$typecolor);


        $db1=db('basics');
        $info=$db1->where('id=1')->value('styles');
        $drr = ROOT_PATH . "templates\\".$info ;
        $file = scandir($drr);
        $timls=[];
        unset($file[0]);
        unset($file[1]);
		//print_r($file);
        foreach($file as $v){
            $f=pathinfo($v);
            if(isset($f['extension']) && ($f['extension'])=="html"){
                $timls[]=$f['basename'];
                // print_r($timls);
            }
        }
        // exit;
        $list=$db->select();

        $this->assign('list',$list);
        $this->assign('arr',$timls);
	return $this->fetch('./admintpl/cateadd.html');
   }
     public function do_cateadd()    //资讯分类添加
    {

    $data = input('post.');
    $table = db('category');
    $data['inputtime']=time();
    $info = $table->insert($data);
    if ($info) {
			$adata=[
                'status'=>1,
                'msg'=>'添加成功'
            ];
    }else{
    	$adata=[
                'status'=>2,
                'msg'=>'添加失败'
            ];
    }
			return json($adata);
    }
    public function checkzhname()
    {
        $name=input('post.name');
		$id=input('post.id');
        $db=db('category');
		switch($id){
			case 1:	$info=$db->where("catename='".$name."'")->find();
			  break;
			case 2: $info=$db->where("letter='".$name."'")->find();
			break;
		}

        if($info)
        {
            $adata=[
                'status'=>1,
                'msg'=>'此名称已存在'
            ];
        }
        else{
            $adata=[
                'status'=>0,
                'msg'=>'此名称可用'
            ];
        }
        return json($adata);
    }
        public function catedel()  //资讯分类的删除
    {
        $id = input('id');
    	$db = db('category');
    	$db2=db('news');
		$data['isdel']=1;
    	$info = $db->where('id in('.$id.')')->update($data);
		if($info){
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
      public function cateup()    //资讯分类修改
    {


	$db=db('category');  //查询分类表
        $catelist=$db->field('child,id,catename')->where('parentid=0')->select();

         foreach($catelist as &$vo)
         {
             $vo['second']=$db->where('parentid='.$vo['id'])->select();

         }

        $this->assign('cate',$catelist);


		$typecolor=config('modelid');
		$this->assign('modelid',$typecolor);


        $db1=db('basics');
        $info=$db1->where('id=1')->value('styles');
        $drr = ROOT_PATH . "templates\\".$info ;
        $file = scandir($drr);
        $timls=[];
        unset($file[0]);
        unset($file[1]);
        foreach($file as $v){
            $f=pathinfo($v);
            if(isset($f['extension']) && ($f['extension'])=="html"){
                $timls[]=$f['basename'];
            }
        }
        $list=$db->select();

        $this->assign('list',$list);
        $this->assign('arr',$timls);

        $id=input('id');
       $table=db('category');
       $info=$table->where('id='.$id)->find();
       $this->assign('info',$info);
	    $catelist=$table->where(['parentid'=>0,'isdel'=>0])->select();
         foreach($catelist as &$vo)
         {
            $vo['second']=$table->where('parentid='.$vo['id'])->select();
         }
		 $info1=$table->field('template_index,template_list,template_content')->select();
		 $this->assign('tmpl',$info1);
		 $this->assign('list',$catelist);
       return $this->fetch('./admintpl/cateup.html');
    }


     public function do_cateup()    //资讯分类修改判断
    {

      $data=input('post.');
       $table=db('category');
      $info=$table->update($data);
      if($info!==false)
        {
			$result=[
                    'msg'=>'修改成功',
                    'status'=>1
                ];
         // $this->success('修改成功','News/catelist');
           }else{
				$result=[
                    'msg'=>'修改失败',
                    'status'=>2
                ];
         }
       return json($result);
    }
     public function caterecover()    //栏目回收站
    {

  $content = input('content')?input('content'):'';
        if(!empty($content)){ 
            $list=db('category')->where('isdel=1')->whereLike('catename',"%".$content."%")->paginate(10);
        }else{
             $list=db('category')->where('isdel=1')->paginate(10);
        }
        $this->assign('page',$list->render());
        $list=$list->toArray()['data'];
		$list1=db('category')->where('isdel=1')->count();
        $this->assign('list',$list);
		$this->assign('list1',$list1);
       return $this->fetch('./admintpl/caterecover.html');
    }
    public function recoverdel()    //栏目的删除
    {
      	$id = input('id');
    	$db = db('category');
    	$db2=db('news');
    	//$info=$db2->where("cateid='".$id."'")->find();
    	$info = $db->where('id in('.$id.')')->delete();
		if($info){
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

     public function caterestore()  //回收站还原
    {
    	$id = input('id');
    	$db = db('category');
    	$data['isdel']=0;
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
	/*产品列表*/
    public function prolist(){

 $content = input('content')?input('content'):'';
        if(!empty($content) && !ctype_space($content)){
             $list =db('product')->order('id asc')->where('status=1')->whereLike('name',"%".$content."%")->paginate(10);
             $this->assign('page',$list->render());
              $list=$list->toArray()['data'];
        foreach ($list as $k=>$v)
        {
            $list[$k]['type']=db('category')->where('id='.$list[$k]['type'])->value('catename');
        }

            $this->assign('val',$content);
        }else{
            $list = db('product')->order("id asc")->where('status=1')->paginate('10');
            $this->assign('page',$list->render());
             $list=$list->toArray()['data'];
         foreach ($list as $k=>$v){
            $list[$k]['type']=db('category')->where('id='.$list[$k]['type'])->value('catename');
        }
        }
        $num = count($list);
        $this->assign("list", $list);
        $this->assign("cou", $num);
        return $this->fetch('./admintpl/prolist.html');
    }

    /*产品添加*/
    public function proadd(){
        $db=db('category');  //查询分类表
        $catelist=$db->field('child,id,catename')->where('parentid=0 and isdel=0')->select();
        foreach($catelist as &$vo) {
            $vo['second']=$db->where('parentid='.$vo['id'])->select();
        }
        $this->assign('cate',$catelist);
        return $this->fetch('./admintpl/proadd.html');
    }

    /*产品添加处理*/
    public function do_proadd(){
        $data = input('post.');
        $data['photo']='';
        //上传图片
        $file = request()->file('photo');
        if($file){
            foreach ($file as $k=>$v){
                $fileinfo = $file[$k]->move(config('upload_path'));
                $data['photo'] .= $fileinfo->getSavename().'/;';
            }
        }
        $info=db('product')->insert($data);
        if($info){
            return json('succ');
        }else{
            return json('fail');
        }
    }

    /*产品修改页面*/
    public function proup(){
        $id = input('id');
        $db=db('category');  //查询分类表
        $catelist=$db->field('child,id,catename')->where('parentid=0 and isdel=0')->select();
        foreach($catelist as &$vo) {
            $vo['second']=$db->where('parentid='.$vo['id'])->select();
        }
        $info=db('product')->where('id='.$id)->find();
        $info['photo']=str_replace('\\','/',$info['photo']);
        $this->assign('info',$info);
        $this->assign('cate',$catelist);
        return $this->fetch('./admintpl/proup.html');
    }

    /*产品修改处理*/
    public function do_proup(){
        $data = input('post.');
        //上传图片
        $file = request()->file('photo');
        if($file){
            $data['photo']='';
            foreach ($file as $k=>$v){
                $fileinfo = $file[$k]->move(config('upload_path'));
                $data['photo'] .= $fileinfo->getSavename().'/;';
            }
        }
        $info=db('product')->update($data);
        if($info){
            return json('succ');
        }elseif($info!==false){
            return json('notupdate');
        }else{
            return json('fail');
        }
    }

    /*产品删除*/
    public function prodel(){
        $id = input('post.id');
        $info=db('product')->where('id in ('.$id.')')->delete();
        if($info){
            $data=[
                'status'=>1,
                'msg'=>'删除成功',
            ];
            return json($data);
        }else{
            $data=[
                'status'=>2,
                'msg'=>'删除失败',
            ];
            return json($data);
        }
    }






}
