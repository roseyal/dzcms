<?php
namespace app\admin\controller;
use app\admin\controller\Common;
//use think\Controller;
use think\Request;
header("Content-type:text/html;charset=utf-8");
class Templet extends Common
{
	 public function _empty($name)
    {
        return "方法不存在".$name;
    }
	//选择页面
    public function templet()
    {
	$drr = ROOT_PATH . "templates" ;
        $timls=[];
        $fle = scandir($drr);
        //文件名
      // print_r($fle);exit;
        unset($fle[0]);
        unset($fle[1]);
        foreach( $fle as $v){
           //显示文件名称信息
            $b=pathinfo($v);
            if(!isset($b['extension'])){
                $timls[]=$b['basename'];

            }
        }
        $this->assign('xueze',$timls);
        return $this->fetch('./admintpl/templet_page.html');
    }
	public function do_templet(){
		$data=input('post.');
		$db=db('basics');
		//$info=$db->value('styles');
		//if($info){
			$info=$db->where('id=1')->update($data);
			if($info!==false){
				$data=[
                'status'=>1,
                'msg'=>'成功'
            ];
			}else{
				$data=[
                'status'=>2,
                'msg'=>'失败'
            ];
			}
			
		// }else{
			// $info=$db->where('id=1')->insert($data);
			// if($info){
				// $data=[
                // 'status'=>1,
                // 'msg'=>'成功'
            // ];
			// }else{
				// $data=[
                // 'status'=>1,
                // 'msg'=>'失败'
            // ];
			// }
		// }
		return json($data);
	}
    public function do_acb(){
       $name = input('post.val');
       // $name='defaults';
        $drr = ROOT_PATH . "templates\\".$name;
        $file = scandir($drr);
        $a=[];
        unset($file[0]);
        unset($file[1]);

        foreach($file as $v){
            $f=pathinfo($v);
            if(isset($f['extension']) && ($f['extension'])=="html"){

                if(strpos($f['basename'],'category')!==false){
                    $a['category'][]=$f['basename'];
                }
                if(strpos($f['basename'],'list')!==false){
                    $a['list'][]=$f['basename'];
                }
                if(strpos($f['basename'],'show')!==false){
                    $a['show'][]=$f['basename'];
                }
            }

        }
   
        return json($a);
    }
	    //静态页面
    public function statichtml()
    {
        $navdb=db('nav');
        $name=$navdb->order('id asc')->field('name,id')->select();
        // echo "<pre>";
        // print_r($name);exit;
        $this->assign('name',$name);
        return $this->fetch('./admintpl/statichtml.html');
    }

    public function do_statichtml()
    {  


        $request = Request::instance();//获取URL信息
        $site=$request->domain();//获取当前域名
      
       $id=input('id');
       $db=db('news');
       $filename=db('nav')->where('id='.$id)->value('ename');//导航栏目英文文件名
       // $info=$db->where('cateid='.$id)->select();
       $info=$db->where('cateid='.$id)->column('id');

       $path='./news';
       is_dir($path)?'':mkdir($path);//检测是否有此文件
       $c='./news/'.$filename;
       is_dir($c)?'':mkdir($c);//检测是否有此文件
       $filenames='';//防止报错
              // print_r($info);exit;
        foreach ($info as $value) {

            $url=$site.'/home/Article/news/id/'.$value;
            echo "<br />";
            $content=file_get_contents($url);
            // print_r($content);exit;
            $filenames=$value.'.html';
            $file=fopen($c.'/'.$filenames,'w');
            fwrite($file,$content);
            fclose($file);
        }

        $file='./news/'.$filename.'/'.$filenames;//检测是否创建成功
        if($filenames!=''){
                if(is_dir($file)){
                $this->success('创建成功','statichtml');
            }else{
                $this->error('创建成功','statichtml');
            }
        }else{
            $this->error('此栏目下无数据,请核对后再执行','statichtml');
        }
        
    }

}