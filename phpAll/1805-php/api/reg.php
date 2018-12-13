<?php 
	
	/*
		验证用户名是否已被注册
	 */
	
	// 接收数据
	$username = isset($_GET['username']) ?  $_GET['username']:null;

	// 模拟已存在的用户
	$data = array('laoxie','tian','lemon','dalao','xiaixa');


	// 判断前端传过来的数据是否已存在
	if(in_array($username,$data)){
		echo 'no';
	}else{
		echo 'ok';
	}


?>