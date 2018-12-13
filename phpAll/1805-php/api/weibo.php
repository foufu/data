<?php
	
	// 接收前端传的数据
	$id = $_GET['id'];

	// 找到文件路径
	$path = '../data/weibo.json';

	// 打开文件
	$file = fopen($path,'r');
	// 读取文件内容
	// 得到json字符串
	 $content = fread($file, filesize($path));

	  //关闭文件，减少资源占用
    fclose($file);

    // 字符串转数组json->Array
    $data = json_decode($content,true);



    for($i=0;$i < count($data);$i++){
    	// 找到id对应的数据
    	if($data[$i]['id'] == $id){
    		// 修改likecnt值
    		$data[$i]['likecnt']++;

    		// 把修改后的值返回给前端
    		echo json_encode($data[$i],JSON_UNESCAPED_UNICODE);
    	}
    }

    // 以写入模式重新打开文件
    $file = fopen($path,'w');

    // 从新写入内容
    // fwrite(string)只能写入字符串
    fwrite($file,json_encode($data,JSON_UNESCAPED_UNICODE));

    // 关闭文件
    fclose($file);

   ?>