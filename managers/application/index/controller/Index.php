<?php
namespace app\index\controller;
use think\Controller;
use think\View;
use app\index\model\User;
class Index extends Controller
{
	//查询操作/分页操作
    public function index()
    {	
        return $this->fetch();
    }
	
public function doLogin()
{
  $param = input('post.');
  if(empty($param['user_name'])){
    $this->error('用户名不能为空');
  }
  if(empty($param['user_pwd'])){
    $this->error('密码不能为空');
  }
// 验证用户名
    $has = db('user')->where('user_name', $param['user_name'])->find();
    if(empty($has)){
      $this->error('用户名密码错误');
    }
// 验证密码
    if($has['user_pwd'] != $param['user_pwd']){
      $this->error('用户名密码错误');
    }
// 记录用户登录信息
    cookie('id', $has['id'], 3600); // 一个小时有效期
    cookie('user_name', $has['user_name'], 3600);
		cookie('name', $has['name'], 3600);
		if($has['power'] == 1){
			 $this->redirect(url('User/user'));
		}
		if($has['power'] == 3){
			 $this->redirect(url('Sysmanager/safe'));
		}
		if($has['power'] == 2){
			 $this->redirect(url('Permanager/baby'));
		}
   

  

}


}
