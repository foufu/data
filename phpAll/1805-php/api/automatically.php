<?php
	

	/*
		机器人自动应答
	*/ 

	// 接收前端数据
	$con = isset($_POST['msg']) ? $_POST['msg'] : '';


	// 预设信息内容
	$a = array('你好','你是','龙哥','大哥','敲代码','在吗','约吗');
	$b = array('他好我也好','你爷爷','龙哥不在','谁是你大哥','找bug','滚','叔叔在哪约');


	// 声明空字符串
	$res = '';

	// 判断前端请求信息与预设信息的匹配
	for($i = 0;$i<count($a);$i++){
		if($a[$i] === $con){
			$res = $b[$i];
			break;
		}
	}

	// 返回前端
	echo $res;



 ?>