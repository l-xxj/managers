<?php
namespace app\index\controller;
use think\Controller;
include 'DbManager.php';
class MyAjax extends Controller
{

    function woker_info_one(){
        // 获取传来的参数ID
        $id = isset($_GET["id"]) ? intval($_GET["id"]) : '';
        // 数据查询
        $result = db('woker')->where('id',$id)->select();
        // 对数据进行渲染输出
       foreach($result as $row){
            echo "<ul style='list-style: none'>";
            echo "<li>姓名：" . $row['name'] . "</li>";
            echo "<li>工号：" . $row['num'] . "</li>";
            echo "<li>民族：" . $row['nation'] . "</li>";
            echo "<li>籍贯：" . $row['native'] . "</li>";
            echo "<li>出生年月：" . $row['birthday'] . "</li>";
            echo "<li>身份证：" . $row['card'] . "</li>";
            echo "<li>政治面貌：" . $row['politic'] . "</li>";
             echo "<li>婚姻状况：" . $row['marriage'] . "</li>";
            echo "<li>户口性质：" . $row['residence'] . "</li>";
            echo "<li>编制：" . $row['strength'] . "</li>";
            echo "<li>学历：" . $row['edu'] . "</li>";
            echo "<li>学校：" . $row['school'] . "</li>";
            echo "<li>电话：" . $row['phone'] . "</li>";
            // echo "<li>邮箱：" . $row['email'] . "</li>";
            echo "<li>户口地：：" . $row['raddress'] . "</li>";
            echo "<li>现住址：" . $row['naddress'] . "</li>";
            echo "</ul>";
        }                
    }

     function del(){

        // 获取传来的参数
        $listname = isset($_GET["listname"]) ? intval($_GET["listname"]) : '';
        echo $listname;
        // 数据删除
        if($result = db($listname)->delete(true))
            alert('delete success!');
        else
            alert('false');
    }

    function woker_add(){      
            // 获取传来的参数         
            $data = ['name' => input('name'),
                     'sex' => input('sex'),
                     'birthday' => input('birthday'),
                     'nation' => input('nation'),
                     'num' => input('num'),
                     'card' => input('card'),
                     'residence' => input('res'),
                     'dinner' => input('dinner'),
                     'strength' => input('strength'),
                     'edu' => input('edu'),
                     'school' => input('school'),
                     'phone' => input('phone'),
                     'email' => input('email'),
                     'raddress' => input('raddress'),
                     'naddress' => input('naddress'),
                     'branch' => input('branch'),
                     'native' => input('native'),
                     'politic' => input('politic'),
                     'marriage' => input('marriager')
                    ];

                        $result = add('woker',$data);
                        return $result;

                                  
    }

    function woker_insurance(){
        // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'buy' => input('buy'),
                     'stop' => input('stop'),
                     'cnum' => input('cnum')
                    ];

                        $result = add('insurance',$data);
                        return $result;

    }

    function woker_mpf(){
        // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'buy' => input('buy'),
                     'stop' => input('stop')
                    ];

                        $result = add('mpf',$data);
                        return $result;

    }

    function woker_dinner(){
        // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'type' => input('type'),
                     'cid' => input('cid'),
                     'new' => input('new')
                    ];

                        $result = add('dinner',$data);
                        return $result;

    }

    function woker_train(){
        // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'tname' => input('tname'),
                     'ttime' => input('ttime'),
                     'thonor' => input('thonor')
                    ];

                        $result = add('train',$data);
                        return $result;

    }

    function woker_subside(){
        // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'sname' => input('sname'),
                     'stime' => input('stime'),
                     'snum' => input('snum')
                    ];

                        $result = add('subside',$data);
                        return $result;

    }

    function woker_reward(){
        // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'pname' => input('pname'),
                     'ptime' => input('ptime'),
                     'ptype' => input('ptype'),
                     'cname' => input('cname'),
                     'ctime' => input('ctime'),
                     'ctype' => input('ctype')
                    ];

                        $result = add('welfare',$data);
                        return $result;

    }

    function woker_paper(){
        // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'htime' => input('htime'),
                     'organization' => input('organization'),
                     'etime' => input('etime'),
                     'hold' => input('hold'),
                     'number' => input('number'),
                     'census' => input('census'),
                     'measure' => input('measure'),
                     'address' => input('address'),
                     'phone' => input('phone'),
                     'ctime' => input('ctime'),
                     'type' => input('type')
                    ];

                        $result = add('card',$data);
                        return $result;

    }

    function woker_paper_one(){
        // 获取传来的参数ID
        $id = isset($_GET["id"]) ? intval($_GET["id"]) : '';
        // 数据查询
        $result = db('card')->where('id',$id)->select();
        // 对数据进行渲染输出
       foreach($result as $row){
            echo "<ul style='list-style: none'>";
            echo "<li>姓名：" . $row['name'] . "</li>";
            echo "<li>工号：" . $row['num'] . "</li>";
            echo "<li>办理时间：" . $row['htime'] . "</li>";
            echo "<li>办理机构：" . $row['organization'] . "</li>";
            echo "<li>到期时间：" . $row['etime'] . "</li>";
            echo "<li>是否有原件：" . $row['hold'] . "</li>";
            echo "<li>编号：" . $row['number'] . "</li>";
             echo "<li>户籍地：" . $row['census'] . "</li>";
            echo "<li>避孕措施：" . $row['measure'] . "</li>";
            echo "<li>现居地：" . $row['address'] . "</li>";
            echo "<li>计生部电话：" . $row['phone'] . "</li>";
            echo "<li>计生证时间：" . $row['ctime'] . "</li>";
            echo "<li>证件类型：" . $row['type'] . "</li>";
            echo "</ul>";
        }                
    }

    function woker_baby(){
        // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'baby' => input('baby'),
                     'chopital' => input('chopital'),
                     'fhospital' => input('fhospital'),
                     'fpc' => input('fpc'),
                     'operation' => input('operation')
                    ];

                        $result = add('baby',$data);
                        return $result;

    }

    function woker_job(){
        // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'entry' => input('entry'),
                     'dimission' => input('dimission'),
                     'historic' => input('historic')
                    ];

                        $result = add('jobinfo',$data);
                        return $result;

    }
	
	    function user(){
	    // 获取传来的参数         
	        $data = ['name' => input('name'),
	                 'user_name' => input('user_name'),
	                 'user_pwd' => input('user_pwd'),
	                 'power' => input('power'),
	                ];

	

	        $result = add('user',$data);
	        return $result;

	}
	
	   

     function woker_skill(){
        // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'skill' => input('skill'),
                     'rank' => input('rank'),
                     'fnum' => input('fnum'),
                     'cnum' => input('cnum')
                    ];

                        $result = add('skill',$data);
                        return $result;

    }

    function woker_jobpaper(){
        // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'btime' => input('btime'),
                     'gtime' => input('gtime'),
                     'stime' => input('stime')
                    ];

                        $result = add('jobpaper',$data);
                        return $result;

    }

    function woker_home(){
        // // 获取传来的参数         
            $data = ['name' => input('name'),
                     'num' => input('num'),
                     'fname' => input('fname'),
                     'fwork' => input('fwork'),
                     'fphone' => input('fphone'),
                     'mname' => input('mname'),
                     'mwork' => input('mwork'),
                     'mphone' => input('mphone'),
                     'pphone' => input('pphone'),
                     'cname' => input('cname'),
                     'cage' => input('cage'),
                     'csex' => input('csex'),
                     'cwork' => input('cwork'),
                     'cphone' => input('cphone'),
                     'sname' => input('sname'),
                     'sphone' => input('sphone')
                    ];

                        $result = add('home',$data);
                        return $result;

    }

    function woker_home_one(){
        // 获取传来的参数ID
        $id = isset($_GET["id"]) ? intval($_GET["id"]) : '';
        // 数据查询
        $result = db('home')->where('id',$id)->select();
        // 对数据进行渲染输出
       foreach($result as $row){
            echo "<ul style='list-style: none'>";
            echo "<li>姓名：" . $row['name'] . "</li>";
            echo "<li>工号：" . $row['num'] . "</li>";
            echo "<li>父亲姓名：" . $row['fname'] . "</li>";
            echo "<li>父亲工作：" . $row['fwork'] . "</li>";
            echo "<li>父亲联系方式：" . $row['fphone'] . "</li>";
            echo "<li>母亲姓名：" . $row['mname'] . "</li>";
            echo "<li>母亲工作：" . $row['mwork'] . "</li>";
             echo "<li>母亲联系方式：" . $row['mphone'] . "</li>";
            echo "<li>配偶联系方式：" . $row['pphone'] . "</li>";
            echo "<li>子女姓名：" . $row['cname'] . "</li>";
            echo "<li>子女性别：" . $row['csex'] . "</li>";
            echo "<li>子女年龄：" . $row['cage'] . "</li>";
            echo "<li>子女工作：" . $row['cwork'] . "</li>";
            echo "<li>子女联系方式：" . $row['cphone'] . "</li>";
            echo "<li>紧急联络人姓名：" . $row['sname'] . "</li>";
            echo "<li>紧急联络人电话：" . $row['sphone'] . "</li>";
            echo "</ul>";
        }                
    }



 public function do_red()
{
	
	 
	
	
	 $name = input("name");
	 

	 
	
    header("content-type:text/html;charset=utf-8");
    $file_name = ROOT_PATH.'/data/'.$name;    //还原的SQL文件
//     if (!file_exists($file_name)) {
//         return '文件不存在';
// 		// ['status'=>-1, 'msg'=>'文件不存在']
//     }
//    
    //清空原有数据（要做好备份哦）
  
  

   $dbname = "managers"; //获取当前数据库
   	$dbhost ="localhost";
   	$dbuser = "root";
   	$dbpass = "root";
   	
   	 $db_restore_success=true;
   	
   	
   	
   // 	set_time_limit(0); //设置超时时间为0，表示一直执行。当php在safe mode模式下无效，此时可能会导致导入超时，此时需要分段导入 
   // 	$fp = @fopen($file_name, "r") or die("不能打开SQL文件 $file_name");//打开文件 
   // 	mysql_connect($dbhost, $dbuser, $dbpass) or die("不能连接数据库 $dbhost");//连接数据库 
   // 	mysql_select_db($dbname) or die ("不能打开数据库 $dbname");//打开数据库 
   // 	
   	// echo "<p>正在清空数据库,请稍等....<br>"; 
   // 	$result = mysql_query("SHOW tables"); 
   // 	while ($currow=mysql_fetch_array($result)) 
   // 	{ 
   // 	mysql_query("drop TABLE IF EXISTS $currow[0]"); 
   // 	// echo "清空数据表【".$currow[0]."】成功！<br>"; 
   // 	} 
   // 	echo "<br>恭喜你清理MYSQL成功<br>"; 
   // 	
   // 	echo "正在执行导入数据库操作<br>"; 
   	// 导入数据库的MySQL命令 
   	
   	
   	
   	 
   	 
   	 $con = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
	
   	 $result = mysqli_query($con,"SHOW tables");
   	 while ($currow=mysqli_fetch_array($result)) 
   	 { 
   	 mysqli_query($con,"drop TABLE IF EXISTS $currow[0]"); 
   	 // echo "清空数据表【".$currow[0]."】成功！<br>"; 
   	 } 
   	 
   	$db_selected = mysqli_select_db($con, $dbname);//选择数据库
   	
   	if (!$db_selected|| !$con)
   	{
   	    $db_restore_success = false;
   	}
   	else
   	{
   	    $sql=file_get_contents($file_name); //把SQL语句以字符串读入$sql
   	    $a=explode(";",$sql); //用explode()函数把‍$sqsl字符串以“;”分割为数组
   	
   	    foreach($a as $b){ //遍历数组
   	        $c=$b.";"; //分割后是没有“;”的，因为SQL语句以“;”结束，所以在执行SQL前把它加上
			
   	        $result = mysqli_query($con, $c); //执行SQL语句
			
   	    
   	        $db_restore_success = $db_restore_success ;
			
   	    }
   	}
	
	 
   	
   	if($db_restore_success)//输出恢复情况
   	    echo '还原成功';
   	else
   	    echo '{"status":"failed"}';
   	 
   	
   	// echo "$file_name";
   	mysqli_close($con); 
   	
	
}




public function do_reds()
{
	
	 
	
	
	 $name = input("name");
	 
     $newa = substr($name,0,stripos($name,'_'));
	 
	
    header("content-type:text/html;charset=utf-8");
    $file_name = ROOT_PATH.'/data/'.$name;    //还原的SQL文件
//     if (!file_exists($file_name)) {
//         return '文件不存在';
// 		// ['status'=>-1, 'msg'=>'文件不存在']
//     }
//    
    //清空原有数据（要做好备份哦）
  
  

   $dbname = "managers"; //获取当前数据库
   	$dbhost ="localhost";
   	$dbuser = "root";
   	$dbpass = "root";
   	
   	 $db_restore_success=true;
   	
   	
   	
   // 	set_time_limit(0); //设置超时时间为0，表示一直执行。当php在safe mode模式下无效，此时可能会导致导入超时，此时需要分段导入 
   // 	$fp = @fopen($file_name, "r") or die("不能打开SQL文件 $file_name");//打开文件 
   // 	mysql_connect($dbhost, $dbuser, $dbpass) or die("不能连接数据库 $dbhost");//连接数据库 
   // 	mysql_select_db($dbname) or die ("不能打开数据库 $dbname");//打开数据库 
   // 	
   	// echo "<p>正在清空数据库,请稍等....<br>"; 
   // 	$result = mysql_query("SHOW tables"); 
   // 	while ($currow=mysql_fetch_array($result)) 
   // 	{ 
   // 	mysql_query("drop TABLE IF EXISTS $currow[0]"); 
   // 	// echo "清空数据表【".$currow[0]."】成功！<br>"; 
   // 	} 
   // 	echo "<br>恭喜你清理MYSQL成功<br>"; 
   // 	
   // 	echo "正在执行导入数据库操作<br>"; 
   	// 导入数据库的MySQL命令 
   	
   	
   	
   	 
   	 
   	 $con = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
	
   	 // $result = mysqli_query($con,"SHOW tables");
   	 // while ($currow=mysqli_fetch_array($result)) 
   	
   	 mysqli_query($con,"drop TABLE IF EXISTS $newa"); 
   	 // echo "清空数据表【".$currow[0]."】成功！<br>"; 
   	
   	 
   	$db_selected = mysqli_select_db($con, $dbname);//选择数据库
   	
   	if (!$db_selected|| !$con)
   	{
   	    $db_restore_success = false;
   	}
   	else
   	{
   	    $sql=file_get_contents($file_name); //把SQL语句以字符串读入$sql
   	    $a=explode(";",$sql); //用explode()函数把‍$sqsl字符串以“;”分割为数组
   	
   	    foreach($a as $b){ //遍历数组
   	        $c=$b.";"; //分割后是没有“;”的，因为SQL语句以“;”结束，所以在执行SQL前把它加上
			
   	        $result = mysqli_query($con, $c); //执行SQL语句
			
   	    
   	        $db_restore_success = $db_restore_success ;
			
   	    }
   	}
	
	 
   	
   	if($db_restore_success)//输出恢复情况
   	    echo '还原成功';
   	else
   	    echo '{"status":"failed"}';
   	 
   	
   	// echo "$file_name";
   	mysqli_close($con); 
   	
	
}


 
 	












}
