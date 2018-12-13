<?php 

		// Access-Control-Allow-Origin

		// Access-Control-Allow-Methods:POST,PUT,GET
		// --> header('Access-Control-Allow-Methods:POST');  

		// Access-Control-Allow-Headers
		// --> header('Access-Control-Allow-Headers:x-requested-with,content-type'); 


	// 添加响应头
	// 允许哪些服务器访问此接口
	// herder('Access-Control-Allow-Origin:http://localhost:1804');

	
	// 得到访问者的信息
	// HTTP_ORIGIN：访问者域名信息
	$origin = $_SERVER['HTTP_ORIGIN'];

	// var_dump($origin);

	$allow_origin = array(
		'http://localhost:1084',
		'http://localhost:1805'
	);

	if(in_array($origin,$allow_origin)){
		header('Access-Control-Allow-Origin:'.$origin);
	}


	echo "yes";




?>