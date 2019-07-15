<?php
namespace app\index\controller;
use think\Controller;
include 'DbManager.php';
class User extends Controller
{

    public function user()
		{	
			$user_name=$_COOKIE['name'];
			
			$has = db('user')->where('name', $user_name)->find();
			 $this->assign('user',$has);

			return $this->fetch();
		}	
		

}
