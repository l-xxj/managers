<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Backup extends Controller
{
	
	
	
	 
	
	
    //数据库备份
    public function index()
    {   
		
		$name=input('name');
		
        //1.获取数据库信息
        $info = Db::getConfig();
        $dbname = $info['database'];
        //2.获取数据库所有表
		if($name=='managers'){
			 $tables = Db::query("select table_name from information_schema.tables where table_schema='managers' and table_name like '%' order by table_name   "); 
			}
		else{  $tables = Db::query("select table_name from information_schema.tables where table_schema='managers' and table_name like '$name%' order by table_name    ");  }
		
       
        //3、组装头部信息
        header("Content-type:text/html;charset=utf-8");
        $path = ROOT_PATH.'/data/'.'//';
        $database = $dbname;   //获取当前数据库
        $info  = "-- ----------------------------\r\n";
        $info .= "-- 日期：".date("Y-m-d H:i:s",time())."\r\n";
        $info .= "-- MySQL - 5.5.52-MariaDB : Database - ".$database."\r\n";
        $info .= "-- ----------------------------\r\n\r\n";
        $info .= "SET NAMES utf8;\r\nSET FOREIGN_KEY_CHECKS = 0;\r\n\r\n";
		
        //4、检查目录是否存在
        if (is_dir($path)) {
            if (is_writable($path)) {
            } else {
                echo '目录不可写'; exit();
            }
        } else {
            mkdir($path,0777,true);
        }
        //5、保存的文件名称
        $file_name = $path.$name.'_'.date('Ymd_His').'.sql';
        file_put_contents($file_name, $info, FILE_APPEND);
        //6、循环表，写入数据
        foreach ($tables as $k => $v) {
            $val = $v["table_name"];
            $sql = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$val' AND TABLE_SCHEMA='$dbname'";
            $res = Db::query($sql);
            $max_num = Db::table("$val")->order('id desc')->value('id');
            //查询表结构
            $info_table = "-- ----------------------------\r\n";
            $info_table .= "-- Table structure for `$val`\r\n";
            $info_table .= "-- ----------------------------\r\n\r\n";
            $info_table .= "DROP TABLE IF EXISTS `$val`;\r\n";
            if (count($res) < 1) {
                continue;
            }
            $info_table .= "CREATE TABLE `$val` (\n\r\t";
            foreach ($res as $kk => $vv) {
                   $info_table .= " `".$vv['COLUMN_NAME']."` ";
                   $info_table .= $vv['COLUMN_TYPE'];
                   //是否允许空值
                   if ($vv['IS_NULLABLE'] == 'NO') {
                       $info_table .= " NOT NULL ";
                   }
                   //判断主键
                   if ($vv['EXTRA']) {
                       $info_table .= " AUTO_INCREMENT ";
                       $key = $vv['COLUMN_NAME'];
                   }
                   //编码
//                    if ($vv['CHARACTER_SET_NAME']) {
//                        $info_table .= " CHARACTER SET ".$vv['CHARACTER_SET_NAME'];
//                    }
//                    //字符集
//                    if ($vv['COLLATION_NAME']) {
//                        $info_table .= " COLLATE ".$vv['COLLATION_NAME'];
//                    }
                   //默认数值
                   if ($vv['COLUMN_DEFAULT']) {
                       $info_table .= " DEFAULT "."'".$vv['COLUMN_DEFAULT']."'";
                   }
                   //注释
                   if ($vv['COLUMN_COMMENT']) {
                       $info_table .= " COMMENT '".$vv['COLUMN_COMMENT']."'";
                   }
				     $info_table .=",\n\r\t";
               }
               $info_table .= " PRIMARY KEY (`$key`) USING BTREE";
               $info_table .= "\n\r) ENGINE = MyISAM AUTO_INCREMENT $max_num CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;\r\n\r\n";
            
            //查询表数据
            $info_table .= "-- ----------------------------\r\n";
            $info_table .= "-- Data for the table `$val`\r\n";
            $info_table .= "-- ----------------------------\r\n\r\n";
            file_put_contents($file_name,$info_table,FILE_APPEND);
            $sql_data = "select * from $val";
            $data = Db::query($sql_data);
            $count= count($data);
            if ($count < 1) {
                continue;
            }
            foreach ($data as $key => $value) {
                $sqlStr = "INSERT INTO `$val` VALUES (";
                foreach($value as $v_d){
                    $v_d = str_replace("'","\'",$v_d);
                    $sqlStr .= "'".$v_d."', ";
                }
                //需要特别注意对数据的单引号进行转义处理
                //去掉最后一个逗号和空格
                $sqlStr = substr($sqlStr,0,strlen($sqlStr)-2);
                $sqlStr .= ");\r\n";
                file_put_contents($file_name,$sqlStr,FILE_APPEND);
            }
            $info = "\r\n";
            file_put_contents($file_name,$info,FILE_APPEND);
        }
        // 7、下载数据到本地
        ob_end_clean(); 
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
        header('Content-Description: File Transfer'); 
        header('Content-Type: application/octet-stream'); 
        header('Content-Length: ' . filesize($file_name)); 
        header('Content-Disposition: attachment; filename=' . basename($file_name)); 
        readfile($file_name); 
        DownloadFile($path.$file_name); 
        $this->success("数据已备份");
        }
		
		
		
		
		
    
    public function data()
{
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
   
}


  public function inde()
		    {   
		        //1.获取数据库信息
		        $info = Db::getConfig();
		        $dbname = $info['database'];
		        //2.获取数据库所有表
		        $tables = Db::query("show tables"); 
		        //3、组装头部信息
		        header("Content-type:text/html;charset=utf-8");
		        $path = ROOT_PATH.'/data/';
		        $database = $dbname;   //获取当前数据库
		        $info  = "-- ----------------------------\r\n";
		        $info .= "-- 日期：".date("Y-m-d H:i:s",time())."\r\n";
		        $info .= "-- MySQL - 5.5.52-MariaDB : Database - ".$database."\r\n";
		        $info .= "-- ----------------------------\r\n\r\n";
		        $info .= "SET NAMES utf8;\r\nSET FOREIGN_KEY_CHECKS = 0;\r\n\r\n";
				
		        //4、检查目录是否存在
		        if (is_dir($path)) {
		            if (is_writable($path)) {
		            } else {
		                echo '目录不可写'; exit();
		            }
		        } else {
		            mkdir($path,0777,true);
		        }
		        //5、保存的文件名称
		        $file_name = $path.$database.'_'.date('Ymd_His').'.sql';
		        file_put_contents($file_name, $info, FILE_APPEND);
		        //6、循环表，写入数据
		        foreach ($tables as $k => $v) {
		            $val = $v["Tables_in_$database"];
		            $sql = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$val' AND TABLE_SCHEMA='$dbname'";
		            $res = Db::query($sql);
		            $max_num = Db::table("$val")->order('id desc')->value('id');
		            //查询表结构
		            $info_table = "-- ----------------------------\r\n";
		            $info_table .= "-- Table structure for `$val`\r\n";
		            $info_table .= "-- ----------------------------\r\n\r\n";
		            $info_table .= "DROP TABLE IF EXISTS `$val`;\r\n";
		            if (count($res) < 1) {
		                continue;
		            }
		            $info_table .= "CREATE TABLE `$val` (\n\r\t";
		            foreach ($res as $kk => $vv) {
		                   $info_table .= " `".$vv['COLUMN_NAME']."` ";
		                   $info_table .= $vv['COLUMN_TYPE'];
		                   //是否允许空值
		                   if ($vv['IS_NULLABLE'] == 'NO') {
		                       $info_table .= " NOT NULL ";
		                   }
		                   //判断主键
		                   if ($vv['EXTRA']) {
		                       $info_table .= " AUTO_INCREMENT ";
		                       $key = $vv['COLUMN_NAME'];
		                   }
		                   //编码
		//                    if ($vv['CHARACTER_SET_NAME']) {
		//                        $info_table .= " CHARACTER SET ".$vv['CHARACTER_SET_NAME'];
		//                    }
		//                    //字符集
		//                    if ($vv['COLLATION_NAME']) {
		//                        $info_table .= " COLLATE ".$vv['COLLATION_NAME'];
		//                    }
		                   //默认数值
		                   if ($vv['COLUMN_DEFAULT']) {
		                       $info_table .= " DEFAULT "."'".$vv['COLUMN_DEFAULT']."'";
		                   }
		                   //注释
		                   if ($vv['COLUMN_COMMENT']) {
		                       $info_table .= " COMMENT '".$vv['COLUMN_COMMENT']."'";
		                   }
						     $info_table .=",\n\r\t";
		               }
		               $info_table .= " PRIMARY KEY (`$key`) USING BTREE";
		               $info_table .= "\n\r) ENGINE = MyISAM AUTO_INCREMENT $max_num CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;\r\n\r\n";
		            
		            //查询表数据
		            $info_table .= "-- ----------------------------\r\n";
		            $info_table .= "-- Data for the table `$val`\r\n";
		            $info_table .= "-- ----------------------------\r\n\r\n";
		            file_put_contents($file_name,$info_table,FILE_APPEND);
		            $sql_data = "select * from $val";
		            $data = Db::query($sql_data);
		            $count= count($data);
		            if ($count < 1) {
		                continue;
		            }
		            foreach ($data as $key => $value) {
		                $sqlStr = "INSERT INTO `$val` VALUES (";
		                foreach($value as $v_d){
		                    $v_d = str_replace("'","\'",$v_d);
		                    $sqlStr .= "'".$v_d."', ";
		                }
		                //需要特别注意对数据的单引号进行转义处理
		                //去掉最后一个逗号和空格
		                $sqlStr = substr($sqlStr,0,strlen($sqlStr)-2);
		                $sqlStr .= ");\r\n";
		                file_put_contents($file_name,$sqlStr,FILE_APPEND);
		            }
		            $info = "\r\n";
		            file_put_contents($file_name,$info,FILE_APPEND);
		        }
				
		        //7、下载数据到本地
// 		        ob_end_clean(); 
// 		        header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
// 		        header('Content-Description: File Transfer'); 
// 		        header('Content-Type: application/octet-stream'); 
// // 		        header('Content-Length: ' . filesize($file_name)); 
// // 		        header('Content-Disposition: attachment; filename=' . basename($file_name)); 
// // 		        readfile($file_name); 
// // 		        DownloadFile($path.$file_name); 
		          echo '数据已备份成功';
		        }

// 数据库还原
  
  
//   
//    public function do_red()
//   {
//   	
//   	
//   	alert('123');
//   	
//   	 $name = input("name");
//       header("content-type:text/html;charset=utf-8");
//       $file_name = ROOT_PATH.'/data/'.$name;    //还原的SQL文件
//   //     if (!file_exists($file_name)) {
//   //         return '文件不存在';
//   // 		// ['status'=>-1, 'msg'=>'文件不存在']
//   //     }
//   //    
//       //清空原有数据（要做好备份哦）
//     
//       $dbname = managers; //获取当前数据库
//   	$dbhost = localhost;
//   	$dbuser = root;
//   	$dbpass = root;
//   	
//   	
//   	
//   	
//   	
//   	set_time_limit(0); //设置超时时间为0，表示一直执行。当php在safe mode模式下无效，此时可能会导致导入超时，此时需要分段导入 
//   	$fp = @fopen($file_name, "r") or die("不能打开SQL文件 $file_name");//打开文件 
//   	mysql_connect($dbhost, $dbuser, $dbpass) or die("不能连接数据库 $dbhost");//连接数据库 
//   	mysql_select_db($dbname) or die ("不能打开数据库 $dbname");//打开数据库 
//   	
//   	// echo "<p>正在清空数据库,请稍等....<br>"; 
//   	$result = mysql_query("SHOW tables"); 
//   	while ($currow=mysql_fetch_array($result)) 
//   	{ 
//   	mysql_query("drop TABLE IF EXISTS $currow[0]"); 
//   	// echo "清空数据表【".$currow[0]."】成功！<br>"; 
//   	} 
//   // 	echo "<br>恭喜你清理MYSQL成功<br>"; 
//   // 	
//   // 	echo "正在执行导入数据库操作<br>"; 
//   	// 导入数据库的MySQL命令 
//   	
//   	
//   	
//   	 
//   	 
//   	 $con = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname);
//   	
//   	$db_selected = mysqli_select_db($con, $dbname);//选择数据库
//   	if (!$db_selected|| !$con)
//   	{
//   	    $db_restore_success = false;
//   	}
//   	else
//   	{
//   	    $sql=file_get_contents($file_name); //把SQL语句以字符串读入$sql
//   	    $a=explode(";",$sql); //用explode()函数把‍$sqsl字符串以“;”分割为数组
//   	
//   	    foreach($a as $b){ //遍历数组
//   	        $c=$b.";"; //分割后是没有“;”的，因为SQL语句以“;”结束，所以在执行SQL前把它加上
//   	        $result = mysqli_query($con, $c); //执行SQL语句
//   	
//   	        $db_restore_success = $db_restore_success && $result;
//   	    }
//   	}
//   	
//   	if($db_restore_success)//输出恢复情况
//   	    echo '{"status":"success"}';
//   	else
//   	    echo '{"status":"failed"}';
//   	 
//   	
//   	// echo "$file_name";
//   	mysql_close(); 
//   	
//   	
//   }
  
  
  
  
  
  
  
  public function inds()
  		    {   
				
				$name = input("name");
  		        //1.获取数据库信息
  		        $info = Db::getConfig();
  		        $dbname = $info['database'];
  		        //2.获取数据库所有表
  		        $tables = Db::query("show tables"); 
  		        //3、组装头部信息
  		        header("Content-type:text/html;charset=utf-8");
  		        $path = ROOT_PATH.'/data/';
  		        $database = $dbname;   //获取当前数据库
  		        $info  = "-- ----------------------------\r\n";
  		        $info .= "-- 日期：".date("Y-m-d H:i:s",time())."\r\n";
  		        $info .= "-- MySQL - 5.5.52-MariaDB : Database - ".$database."\r\n";
  		        $info .= "-- ----------------------------\r\n\r\n";
  		        $info .= "SET NAMES utf8;\r\nSET FOREIGN_KEY_CHECKS = 0;\r\n\r\n";
  				
  		        //4、检查目录是否存在
  		        if (is_dir($path)) {
  		            if (is_writable($path)) {
  		            } else {
  		                echo '目录不可写'; exit();
  		            }
  		        } else {
  		            mkdir($path,0777,true);
  		        }
  		        //5、保存的文件名称
  		        $file_name = $path.$name.'_'.date('Ymd_His').'.sql';
  		        file_put_contents($file_name, $info, FILE_APPEND);
  		        //6、循环表，写入数据
  		       
  		            $val = $name;
  		            $sql = "SELECT * FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME='$val' AND TABLE_SCHEMA='$dbname'";
  		            $res = Db::query($sql);
  		            $max_num = Db::table("$val")->order('id desc')->value('id');
  		            //查询表结构
  		            $info_table = "-- ----------------------------\r\n";
  		            $info_table .= "-- Table structure for `$val`\r\n";
  		            $info_table .= "-- ----------------------------\r\n\r\n";
  		            $info_table .= "DROP TABLE IF EXISTS `$val`;\r\n";
  		            if (count($res) < 1) {
  		                continue;
  		            }
  		            $info_table .= "CREATE TABLE `$val` (\n\r\t";
  		            foreach ($res as $kk => $vv) {
  		                   $info_table .= " `".$vv['COLUMN_NAME']."` ";
  		                   $info_table .= $vv['COLUMN_TYPE'];
  		                   //是否允许空值
  		                   if ($vv['IS_NULLABLE'] == 'NO') {
  		                       $info_table .= " NOT NULL ";
  		                   }
  		                   //判断主键
  		                   if ($vv['EXTRA']) {
  		                       $info_table .= " AUTO_INCREMENT ";
  		                       $key = $vv['COLUMN_NAME'];
  		                   }
  		                   //编码
  		//                    if ($vv['CHARACTER_SET_NAME']) {
  		//                        $info_table .= " CHARACTER SET ".$vv['CHARACTER_SET_NAME'];
  		//                    }
  		//                    //字符集
  		//                    if ($vv['COLLATION_NAME']) {
  		//                        $info_table .= " COLLATE ".$vv['COLLATION_NAME'];
  		//                    }
  		                   //默认数值
  		                   if ($vv['COLUMN_DEFAULT']) {
  		                       $info_table .= " DEFAULT "."'".$vv['COLUMN_DEFAULT']."'";
  		                   }
  		                   //注释
  		                   if ($vv['COLUMN_COMMENT']) {
  		                       $info_table .= " COMMENT '".$vv['COLUMN_COMMENT']."'";
  		                   }
  						     $info_table .=",\n\r\t";
  		               }
  		               $info_table .= " PRIMARY KEY (`$key`) USING BTREE";
  		               $info_table .= "\n\r) ENGINE = MyISAM AUTO_INCREMENT $max_num CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;\r\n\r\n";
  		            
  		            //查询表数据
  		            $info_table .= "-- ----------------------------\r\n";
  		            $info_table .= "-- Data for the table `$val`\r\n";
  		            $info_table .= "-- ----------------------------\r\n\r\n";
  		            file_put_contents($file_name,$info_table,FILE_APPEND);
  		            $sql_data = "select * from $val";
  		            $data = Db::query($sql_data);
  		            $count= count($data);
  		            if ($count < 1) {
  		                continue;
  		            }
  		            foreach ($data as $key => $value) {
  		                $sqlStr = "INSERT INTO `$val` VALUES (";
  		                foreach($value as $v_d){
  		                    $v_d = str_replace("'","\'",$v_d);
  		                    $sqlStr .= "'".$v_d."', ";
  		                }
  		                //需要特别注意对数据的单引号进行转义处理
  		                //去掉最后一个逗号和空格
  		                $sqlStr = substr($sqlStr,0,strlen($sqlStr)-2);
  		                $sqlStr .= ");\r\n";
  		                file_put_contents($file_name,$sqlStr,FILE_APPEND);
  		            }
  		            $info = "\r\n";
  		            file_put_contents($file_name,$info,FILE_APPEND);
  		        
  				
  		        //7、下载数据到本地
  // 		        ob_end_clean(); 
  // 		        header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
  // 		        header('Content-Description: File Transfer'); 
  // 		        header('Content-Type: application/octet-stream'); 
  // // 		        header('Content-Length: ' . filesize($file_name)); 
  // // 		        header('Content-Disposition: attachment; filename=' . basename($file_name)); 
  // // 		        readfile($file_name); 
  // // 		        DownloadFile($path.$file_name); 
  		          echo '数据已备份成功';
  		        }
  
  
  				
  				
  		  
  
  
  
  
  
//函数功能：将SQL语句组装成数组
function sql_split($sql, $tablepre) {
    if ($tablepre != "jd_") {
        $sql = str_replace("jd_", $tablepre, $sql);
    }
    $sql = preg_replace("/TYPE=(InnoDB|MyISAM|MEMORY)( DEFAULT CHARSET=[^; ]+)?/", "ENGINE=\\1 DEFAULT CHARSET=utf8", $sql);
    $sql = str_replace("\r", "\n", $sql);
    $ret = array();
    $num = 0;
    $queriesarray = explode(";\n", trim($sql));
    unset($sql);
    foreach ($queriesarray as $query) {
        $ret[$num] = '';
        $queries = explode("\n", trim($query));
        $queries = array_filter($queries);
        foreach ($queries as $query) {
            $str1 = substr($query, 0, 1);
            if ($str1 != '#' && $str1 != '-')
                $ret[$num] .= $query;
        }
        $num++;
    }
    return $ret;
}


}
