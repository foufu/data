<?php 
	
	/*
		足球解说
			* 分页显示数据

			page,qty(10,5) 			index
			1						0, 0
			2						10, 5
			3						20, 10

			推导公式：index = (page-1)*qty
	 */

		// 接收前端数据
		// 分页与数量
		$page = isset($_GET['page']) ? $_GET['page']:1;
		$qty  = isset($_GET['qty']) ? $_GET['qty']:8;

		// 找到文件路径
		$path = '../data/football.json';

		// 打开文件
		$file = fopen($path,'r');

		// 读取文件内容
		$content = fread($file,filesize($path));

		//关闭文件,避免资源浪费
		fclose($file);

		// json -> array
		$arr = json_decode($content,true);


		// 截取所需数据     count(): 计算数组中的单元数目或对象中的属性个数
		// 格式化数据


		$res = array(
			'total' => count($arr),
			'qty' => $qty*1,
			'page' =>$page*1,
			'data' => array_slice($arr,($page-1)*$qty,$qty)
		);

		echo json_encode($res,JSON_UNESCAPED_UNICODE);




?>