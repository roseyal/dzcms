<?php

namespace app\admin\controller;
use think\Controller;

class Database extends Controller
{
	 public function _empty($name)
    {
        return "方法不存在".$name;
    }
    /*表列表*/
    public function db_list(){
        // echo '<pre>';
		$tablelist=db()->query('show tables');
		$tablearr=[];
        foreach($tablelist as $v)
        {
            $tableinfo=db()->query("show table status like '".$v['Tables_in_lianxiyi']."'");
          foreach($tableinfo as $t)
           {
                $totalsize=$t['Data_length']+$t['Index_length'];
                $size=$totalsize/1024;   //kb 
				
				if($size>=1048576){
					$totalsize1=$size/1024;   // m  
					$totalsize=sprintf("%.2f", $totalsize1).'GB'; 
				}elseif($size>=1024){
					$totalsize1=$size/1024;
					$totalsize=sprintf("%.2f", $totalsize1).'MB';
				}
				else{
					$totalsize= sprintf("%.2f", $size).'KB';
				}
           }
            
            $tableinfo[0]['totalsize']=$totalsize;
           $tablearr[]=$tableinfo[0];
		}
      
       $this->assign('tablesinfo',$tablearr);
        return $this->fetch('./admintpl/database_backups.html');

		
        
    }


    /*优化表*/
    public function db_optimize(){
        $tablename=input('post.table');
        $sql=db()->query("optimize table `".$tablename."`" );
        if ($sql){
            return json('succ');
        }else{
            return json('fail');
        }
    }

    /*修复表*/
    public function db_repair(){
        $tablename=input('post.table');
        $sql=db()->query("repair table `".$tablename."`" );
        if ($sql){
            return json('succ');
        }else{
            return json('fail');
        }
    }


    /*查看表结构*/
    public function db_create(){
        $tablename = input('post.table');
        $sql = db()->query("show create table `" . $tablename . "`");
        return json($sql[0]['Create Table']);
    }


    /*备份表*/
    public function db_copy(){
        /*开始备份*/
        $table = input('post.table/a');	
        $dir = "dbcopy/";
        $username = 'admin';
        is_dir($dir) || mkdir($dir,0777);
        $filename = $dir.date('Y-m-d H!i!s',time()).'.sql';

        $info = "-- ----------备份详情--------------------\r\n";
        $info.= "-- 姓名：".$username."\r\n";
        $info.= "-- 备份时间：".date('Y-m-d H:i:s',time())."\r\n";
        $info.= "-- 备份数据表：".implode(',',$table)."\r\n";
        $info.= "-- --------------------------------------\r\n\r\n";
        file_put_contents($filename,$info,FILE_APPEND);

        //插入表数据sql
        foreach ($table as $k=>$v){
            $info  = "\r\n-- ----------------------------\r\n";
            $info .= "-- Table structure for `". $table[$k] ."`\r\n";
            $info .= "-- ----------------------------\r\n";
            $sql = db()->query("show create table `" . $table[$k] . "`");
            $info.= "DROP TABLE IF EXISTS `".$sql[0]['Table']."`;\r\n";
            $info.= $sql[0]['Create Table'].';';
            file_put_contents($filename,$info,FILE_APPEND);
        }


        //插入表数据sql
        foreach ($table as $key=>$val){
            $sql = db()->query("select * from `" . $val. "`");
            if(!$sql) continue;
            $info = "\r\n-- ----------------------------\r\n";
            $info.= "-- Records of `".$val."`\r\n";
            $info.= "-- ----------------------------\r\n";
            foreach($sql as $k=>$v){
                $info.=" INSERT INTO `".$val."` VALUES (";
                foreach ($v as $vs){
                    $info.="'".$vs."',";
                }
                $info=substr($info,0,strlen($info)-1);
                $info.=");\r\n";
            }
            file_put_contents($filename,$info,FILE_APPEND);
        }
        /*结束备份*/


        /*向数据库写入数据*/
        $dbdata=[
            'puttime'=>time(),
            'adminid'=>'1',
            'location'=>config('web_path').'/'.$filename,
            'dbsize'=>round(filesize($filename)/1024,2),
        ];
        $db=db('backdb')->insert($dbdata);

        if($db){
            return json('succ');
        }else{
            return json('fail');
        }
    }

    /*表列表*/
    public function db_restore_list(){
        $info=db('backdb')->select();
        foreach ($info as $k=>$v){
            $infoarr=explode('/',$info[$k]['location']);
            $info[$k]['name']=$infoarr[count($infoarr)-1];
        }
        $this->assign('info',$info);
        return $this->fetch('./admintpl/database_restore.html');
    }


    /*下载数据库*/
    public function download(){
        $filename = input('get.filename');
		echo $filename;
        $filenamearr = explode(',',$filename);
        if(count($filenamearr) == 1){
            $filename = $filenamearr[0];
            $filepath = ROOT_PATH.'dbcopy/'.$filename;
        }else{   
		//批量下载
            //unset($filenamearr[count($filenamearr)-1]);
            $dir = ROOT_PATH."restoretmp/";
            is_dir($dir) || mkdir($dir,0777,true);      //创建文件
            $zipname = $dir.$filename.'.zip';
            $zip = new \ZipArchive();       //实例化压缩扩展
            $zip -> open($zipname,\ZipArchive::CREATE);   //打开压缩包
            foreach ($filenamearr as $v){
                $addpath = ROOT_PATH.'dbcopy/'.$v;
                $zip -> addFile($addpath,basename($addpath));   //向压缩包中添加文件
            }
            $zip->close();  //关闭压缩包
            $filename = '批量下载.zip';
            $filepath = $zipname;
        }

        $file = fopen($filepath,"r");     //打开文件
        header("Content-Type: application/octet-stream");   //二进制流，不知道下载文件类型
        header("Accept-Ranges: bytes");                 //
        header("Accept-Length: ".filesize($filepath));  //文件长度
        header("Content-Disposition: attachment;filename=" .$filename); //弹出下载框 框内名字
        echo fread($file,filesize($filepath));
        fclose($file);

    }


    /*还原数据库*/
    public function db_restore(){
        $filename=input('post.filename');
        $filepath=ROOT_PATH.'dbcopy/'.$filename;     //获取文件路径
        $sqlfile=file_get_contents($filepath);       //获取sql文件内容
        $sqlfilearr=explode(';',$sqlfile);  //以;分割文件内容
        unset($sqlfilearr[count($sqlfilearr)-1]);
        foreach ($sqlfilearr as $v){                 //一句一句执行sql语句
            db()->query($v.';');
        }
        return json('succ');
    }


    /*删除数据库备份*/
    public function db_restore_del(){
        $filename=input('post.name/a');
        $id=input('post.id');
        foreach ($filename as $v){
            unlink(ROOT_PATH.'dbcopy/'.$v);
        }

        db('backdb')->where('id in (' .$id. ')')->delete();

        return json('succ');
    }
}