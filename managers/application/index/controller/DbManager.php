<?php
	function search_all($listname){
		$result=db($listname)->paginate(5); //设置分页每次返回10
		return $result;
	}

	function search_one($listname,$id){
		$result=db($listname)->where('id',$id)->find();
		return $result;
	}

	function del_one($listname,$id){
		if(db($listname)->delete($id))
			return 1;
		else
			return 0;
	}

	function del_all($listname){
		if(db($listname)->delete(true))
			return 1;
		else
			return 0;
	}

	function add($listname,$arr){
		$result = db($listname)->insert($arr);
		if ($result){
			return '添加成功';
		}
		else
			return '添加失败';
	}