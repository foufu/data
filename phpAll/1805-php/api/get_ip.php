<?php 

	/*
		爬虫ip地址
			file_get_contents($url)

			后端没有同源策略限制
	*/
	// 通过url爬取ip地址
	$content = file_get_contents('http://2018.ip138.com/ic.asp');
	// 修改编码
	iconv('gb2312','utf-8',$content); 

	// 匹配所需的内容
	preg_match('/\[(.+)\]/',$content,$res);

	// var_dump($res[1]);
	echo $res[1];

?>