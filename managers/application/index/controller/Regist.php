<?php
namespace app\index\controller;
use think\Controller;
class Regist extends Controller
{
	//查询操作/分页操作
    public function regist()
    {	
        return $this->fetch();
    }
	public function doregist(){
		$param = input('post.');
		  if(empty($param['user_name'])){
		  $this->error('用户名不能为空');
		}
		  if(empty($param['user_pwd'])){
		  $this->error('密码不能为空');
		}
		  if(empty($param['user_pwd2'])){
		  $this->error('密码不能为空');
		}
		if(empty($param['name'])){
		  $this->error('真实姓名不能为空');
		}
		  if($param['user_pwd'] != $param['user_pwd2']){
		  $this->error('密码输入错误');
		}
		$has = db('user')->where('user_name', $param['user_name'])->find();
		if(!empty($has)){
		  $this->error('该用户已存在');
		}else{
		    $data['user_pwd'] = $param['user_pwd']; 
        $data['user_name']  = $param['user_name'];
				$data['name'] = $param['name']; 
				$data['power'] = 1;
        $uid = db('user')->insert($data);
				$data1['name'] = $param['name']; 
				$uid1 = db('woker')->insert($data1);
        if($uid) 
          $this->success('注册成功','index/index',2) ; 
        else  
          $this->error('注册失败') ; 
			}
		
	}



}
