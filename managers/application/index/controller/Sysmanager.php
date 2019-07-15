<?php
namespace app\index\controller;
use think\Controller;
include 'DbManager.php';
class Sysmanager extends Controller
{
	
	public function safe()
{
	 $name = input("name");
	 
	
    //读取数据库备份文件（大家根据自己的实际路径修改）
    $dir = ROOT_PATH.'/data/';
    //SQL文件数组
    $list = [];
    if (is_dir($dir)) {
        $fileList = scandir($dir); 
        foreach ($fileList as $key => $val) {
            if( $val=='.' ||  $val=='..'){
                continue;
            }
            //文件名称
            $list[$key]['name']=$val;
			$newa = substr($val,0,stripos($val,'_'));
			if ($newa== 'insurance'){$list[$key]['logo']=1;}
			elseif ($newa== 'mpf'){$list[$key]['logo']=2;}
			elseif ($newa== 'woker'){$list[$key]['logo']=3;}
			elseif ($newa== 'home'){$list[$key]['logo']=4;}
			elseif ($newa== 'card'){$list[$key]['logo']=5;}
			elseif ($newa== 'baby'){$list[$key]['logo']=6;}
			elseif ($newa== 'jobinfo'){$list[$key]['logo']=7;}
			elseif ($newa== 'jobpaper'){$list[$key]['logo']=8;}
			elseif ($newa== 'skill'){$list[$key]['logo']=9;}
			elseif ($newa== 'dinner'){$list[$key]['logo']=10;}
			elseif ($newa== 'train'){$list[$key]['logo']=11;}
			else{$list[$key]['logo']=0;}
            //时间
            $list[$key]['time'] = date('Y-m-d H:i:s',filemtime($dir.'/'.$val));
            //大小
            $filesize = filesize($dir.'/'.$val);
            if ($filesize>0 && $filesize<=1024) {
                $filesize=1;
            } else {
                $filesize=ceil($filesize/1024);
            }
            $list[$key]['size'] = $filesize.'KB';
        }
        if (count($list) > 0) {
            $this->assign('list',$list);    
			
        } else {
            echo '没有SQL文件';
        }
    } else {
        echo '目录不存在';
    }
    return $this->fetch();
}

    public function power()
    {	
       $list = search_all('user');
       $this->assign('muser',$list);
        return $this->fetch();
    }
	
	public function muser()
	    {	
	       $list = search_all('user');
	       $this->assign('muser',$list);
	       $id = input('id');
	       $delall = input('delall');
	       if($id){
	           $status = del_one('user',$id);
	           if($status){
	               return $this->success('删除成功','job',3);   
	           }else{
	               return $this->success('删除失败');   
	           }
	       }
	       if($delall){
	           $status = del_all('user');
	           if($status){
	               return $this->success('删除成功','job',3);   
	           }else{
	               return $this->success('删除失败');   
	           }
	       }
	        return $this->fetch();
	    }
		
	public function user_update(){
	    $id = input('ids');
	    $info = db('user')->where('id',$id)->select();
	    $this->assign('info',$info);
	    if(request()->isPost()){
	        $data = ['name' => input('name'),
	                 'user_name' => input('user_name'),
	                 'user_pwd' => input('user_pwd'),
	                ];
	            $request = db('user')->where('id',input('id'))->update($data);
	        if($request)
	            return $this->success('修改成功','muser',3);
	        else
	            return $this->error('失败');
	    }
	    return $this->fetch();
	}
	
	public function power_update(){
	    $id = input('ids');
	    $info = db('user')->where('id',$id)->select();
	    $this->assign('info',$info);
	    if(request()->isPost()){
	        $data = ['power' => input('power'),
	                ];
	            $request = db('user')->where('id',input('id'))->update($data);
	        if($request)
	            return $this->success('修改成功','power',3);
	        else
	            return $this->error('失败');
	    }
	    return $this->fetch();
	}
	
	public function data()
	    {			  		   
		   
	        return $this->fetch();
	    }
	





	public function safes()
	{
		 $name = input("name");
		 
		 echo "<script>alert($name)</script>";
		
	    //读取数据库备份文件（大家根据自己的实际路径修改）
	    $dir = ROOT_PATH.'/data/'.$name;
	    //SQL文件数组
	    $list = [];
	    if (is_dir($dir)) {
	        $fileList = scandir($dir); 
	        foreach ($fileList as $key => $val) {
	            if( $val=='.' ||  $val=='..'){
	                continue;
	            }
	            //文件名称
	            $list[$key]['name']=$val;
	            //时间
	            $list[$key]['time'] = date('Y-m-d H:i:s',filemtime($dir.'/'.$val));
	            //大小
	            $filesize = filesize($dir.'/'.$val);
	            if ($filesize>0 && $filesize<=1024) {
	                $filesize=1;
	            } else {
	                $filesize=ceil($filesize/1024);
	            }
	            $list[$key]['size'] = $filesize.'KB';
	        }
	        if (count($list) > 0) {
	           $this->assign('list',$list);    
	        } else {
	            echo '没有SQL文件';
	        }
	    } else {
	        echo '目录不存在';
	    }
	    echo '目录存在';
	}
  
  
  public function woker()
  {	
      $list = search_all('woker');
      $this->assign('woker',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('woker',$id);
          if($status){
              return $this->success('删除成功','woker',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('woker');
          if($status){
              return $this->success('删除成功','woker',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      return $this->fetch();
  }
  
  public function home()
  {	
      $list = search_all('home');
      $this->assign('home',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('home',$id);
          if($status){
              return $this->success('删除成功','home',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('home');
          if($status){
              return $this->success('删除成功','home',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
  	return $this->fetch();
  }	
  
  public function paper()
  {	
      $list = search_all('card');
      $this->assign('paper',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('card',$id);
          if($status){
              return $this->success('删除成功','paper',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('card');
          if($status){
              return $this->success('删除成功','paper',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
  	return $this->fetch();
  }	
  
  public function baby()
  {	
      $list = search_all('baby');
      $this->assign('baby',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('baby',$id);
          if($status){
              return $this->success('删除成功','baby',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('baby');
          if($status){
              return $this->success('删除成功','baby',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
  	return $this->fetch();
  }	
  
   public function job()
  {	
      $list = search_all('jobinfo');
      $this->assign('job',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('jobinfo',$id);
          if($status){
              return $this->success('删除成功','job',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('jobinfo');
          if($status){
              return $this->success('删除成功','job',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
  	return $this->fetch();
  }
  
  public function skill()
  {	
      $list = search_all('skill');
      $this->assign('skill',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('skill',$id);
          if($status){
              return $this->success('删除成功','skill',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('skill');
          if($status){
              return $this->success('删除成功','skill',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
  	return $this->fetch();
  }
  
  public function job_paper()
  {	
      $list = search_all('jobpaper');
      $this->assign('jobpaper',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('jobpaper',$id);
          if($status){
              return $this->success('删除成功','job_paper',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('jobpaper');
          if($status){
              return $this->success('删除成功','job_paper',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      return $this->fetch();
  }
  
  public function dinner()
  {	
       $list = search_all('dinner');
      $this->assign('dinner',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('dinner',$id);
          if($status){
              return $this->success('删除成功','dinner',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('dinner');
          if($status){
              return $this->success('删除成功','dinner',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
  	return $this->fetch();
  }
  
  public function mpf()
  {	
      $list = search_all('mpf');
      $this->assign('mpf',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('mpf',$id);
          if($status){
              return $this->success('删除成功','mpf',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('mpf');
          if($status){
              return $this->success('删除成功','mpf',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
  	return $this->fetch();
  }
  
  public function insurance()
  {	
      $list = search_all('insurance');
      $this->assign('insurance',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('insurance',$id);
          if($status){
              return $this->success('删除成功','insurance',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('insurance');
          if($status){
              return $this->success('删除成功','insurance',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
  	return $this->fetch();
  }
  
  public function train()
  {	
      $list = search_all('train');
      $this->assign('train',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('train',$id);
          if($status){
              return $this->success('删除成功','train',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('train');
          if($status){
              return $this->success('删除成功','train',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
  	return $this->fetch();
  }
  
  public function subside()
  {	
       $list = search_all('subside');
      $this->assign('subside',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('subside',$id);
          if($status){
              return $this->success('删除成功','subside',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('subside');
          if($status){
              return $this->success('删除成功','subside',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
  	return $this->fetch();
  }
  
  public function reward()
  {	
      $list = search_all('welfare');
      $this->assign('welfare',$list);
      $id = input('id');
      $delall = input('delall');
      if($id){
          $status = del_one('welfare',$id);
          if($status){
              return $this->success('删除成功','reward',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
      if($delall){
          $status = del_all('welfare');
          if($status){
              return $this->success('删除成功','reward',3);   
          }else{
              return $this->success('删除失败');   
          }
      }
  	return $this->fetch();
  }
  
}

