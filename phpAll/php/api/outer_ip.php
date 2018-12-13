<?php 

	// 获取外网ip
			// url:http://2018.ip138.com/ic.asp
			// 获取数据：file_get_contents($url)

	
	$url = 'http://2018.ip138.com/ic.asp';

	$content = file_get_contents($url);
			   

	$content = iconv('gb2312','utf-8',$content);
			// 匹配要求，在那里匹配，输出什么
	 preg_match('/\[(.+)\]/',$content,$res);

	 echo $res[1];
?>